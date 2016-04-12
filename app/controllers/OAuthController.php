<?php
namespace App\Controllers;

use Controller;
use Log;
use RuntimeException;
use Eva\EvaOAuth\Service;
//use Doctrine;

/**
 * \OAuthController
 */
class OAuthController extends Controller {

    public function init() {

        $config = require BASE_PATH.'/config/oauth.php';
        $provider = 'io84';

        //Service::setStorage(new Doctrine\Common\Cache\FilesystemCache(BASE_PATH .'/tmp'));
        Service::registerProvider($provider, 'App\Models\OAuth');

        $this->oauthService = new Service($provider, [
            'key' => $config[$provider]['key'],
            'secret' => $config[$provider]['secret'],
            'callback' => dirname('http://' . $_SERVER['HTTP_HOST'] . $_SERVER["REQUEST_URI"]) . '/access'
            ]);

        $this->oauthService->debug(BASE_PATH . '/logs/access_oauth.log');
    }

    public function request() {
        $this->oauthService->requestAuthorize();
        //防止路由更改header，必须exit
        exit;
    }

    public function access() {
        $token = $this->oauthService->getAccessToken();

        $httpClient = new \Eva\EvaOAuth\AuthorizedHttpClient($token);
        $response = $httpClient->get('http://'.HOST.'/oauth2/success');
        echo $response;
    }
}
