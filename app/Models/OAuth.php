<?php
namespace App\Models;

/**
* OAuth
*/
class OAuth extends \Eva\EvaOAuth\OAuth2\Providers\AbstractProvider {

    protected $authorizeUrl;
    protected $accessTokenUrl;

    function __construct() {
        $this->authorizeUrl = 'http://' . HOST . '/oauth2/authorize';
        $this->accessTokenUrl = 'http://' . HOST . '/oauth2/access_token';
    }

}
