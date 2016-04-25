<?php
namespace App\Controllers;

use Controller;
use Log;
use RuntimeException;
use OAuth2;
/**
 * \BaseAuthController
 */
class BaseAuthController extends Controller {

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

    public function checkAuth() {
        if (!$this->oauthServer->verifyResourceRequest(OAuth2\Request::createFromGlobals())) {
                $parameters = $this->oauthServer->getResponse()->getParameters();
                $parameters = array_merge(
                    array(
                        'code' => 401,
                        'error' => 'Invalid token',
                        'error_description' => 'Invalid token',
                    ),
                    $parameters
                );
                if (!empty($parameters)) {
                    $this->oauthServer->getResponse()->setParameters($parameters);
                }
                $this->oauthServer->getResponse()->send();
                die;
        }
    }


}
