<?php
/**
 * @SWG\SecurityScheme(
 *   securityDefinition="api_key",
 *   type="apiKey",
 *   in="header",
 *   name="api_key"
 * )
 */

/**
 * @SWG\SecurityScheme(
 *   securityDefinition="io84-api",
 *   type="oauth2",
 *   authorizationUrl="http://api-dev.io84.com/oauth2/authorize",
 *   flow="accessCode",
 *   scopes={
 *     "login": "login"
 *   }
 * )
 */

//flow' => ['implicit', 'password', 'application', 'accessCode']
?>
