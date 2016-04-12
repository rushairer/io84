<?php
namespace App\Models;

/**
* OAuth
*/
class OAuth extends \Eva\EvaOAuth\OAuth2\Providers\AbstractProvider {

    protected $authorizeUrl = 'http://'.HOST.'/oauth2/authorize';
    protected $accessTokenUrl = 'http://'.HOST.'/oauth2/access_token';

}
