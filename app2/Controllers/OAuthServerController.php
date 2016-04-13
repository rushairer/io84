<?php
namespace App\Controllers;

use Controller;
use Log;
use RuntimeException;
use OAuth2;
/**
 * \OAuthServerController
 */
class OAuthServerController extends Controller {

    public function init() {

        $config = require BASE_PATH.'/config/database.php';

        OAuth2\Autoloader::register();

        // $dsn is the Data Source Name for your database, for exmaple "mysql:dbname=my_oauth2_db;host=localhost"
        $storage = new OAuth2\Storage\Pdo(array(
            'dsn' => $config['dsn'],
            'username' => $config['username'],
            'password' => $config['password'],
        ));

        // Pass a storage object or array of storage objects to the OAuth2 server class
        $this->oauthServer = new OAuth2\Server($storage,array(
            'allow_implicit' => false,
        ));

        // Add the "Client Credentials" grant type (it is the simplest of the grant types)
        $this->oauthServer->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));

        // Add the "Authorization Code" grant type (this is where the oauth magic happens)
        $this->oauthServer->addGrantType(new OAuth2\GrantType\AuthorizationCode($storage));

        $this->oauthServer->addGrantType(new OAuth2\GrantType\RefreshToken($storage));
        $this->oauthServer->addGrantType(new OAuth2\GrantType\UserCredentials($storage));
    }

    public function success() {
        if (!$this->oauthServer->verifyResourceRequest(OAuth2\Request::createFromGlobals())) {
                $this->oauthServer->getResponse()->send();
                    die;
        }
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
