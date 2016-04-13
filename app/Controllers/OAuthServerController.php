<?php
namespace App\Controllers;

use Controller;
use Log;
use RuntimeException;
use OAuth2;
/**
 * \OAuthServerController
 */
class OAuthServerController extends BaseAuthController {


    public function success() {
        $this->checkAuth();
        $this->json(array('success' => true, 'message' => 'You accessed my APIs!'));
    }

    public function token() {
        $this->oauthServer->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();
    }

    public function authorize() {
        $request = OAuth2\Request::createFromGlobals();
        $response = new OAuth2\Response();

        // validate the authorize request
        if (!$this->oauthServer->validateAuthorizeRequest($request, $response)) {
            $response->send();
            die;
        }
        // display an authorization form
        if (empty($_POST)) {
            exit('
                <form method="post">
                <label>Do You Authorize TestClient?</label><br />
                <input type="submit" name="authorized" value="yes">
                <input type="submit" name="authorized" value="no">
                </form>');
        }

        // print the authorization code if the user has authorized your client
        $is_authorized = ($_POST['authorized'] === 'yes');

        //TODO: user_id
        $user_id = $is_authorized ? 1345 : NULL;

        $this->oauthServer->handleAuthorizeRequest($request, $response, $is_authorized, $user_id);
        if ($is_authorized) {
            // this is only here so that you get to see your code in the cURL request. Otherwise, we'd redirect back to the client
            $code = substr($response->getHttpHeader('Location'), strpos($response->getHttpHeader('Location'), 'code=')+5, 40);
            $this->response->header('Location',$response->getHttpHeader('Location'));
            $this->response->sendHeaders();
        }
        $response->send();
    }
}
