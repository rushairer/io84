<?php
/**
 * @SWG\Swagger(
 *     schemes={"http"},
 *     host="api.io84.com",
 *     basePath="/filmfilm/v1",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="io84 API",
 *         description="",
 *         )
 *     )
 *     )
 * )
 */

/**
 * @SWG\Tag(
 *   name="effect",
 *   description="特效",
 *   @SWG\ExternalDocumentation(
 *     description="滤镜使用的特效",
 *     url="http://swagger.io"
 *   )
 * )
 */


/**
 * @SWG\SecurityScheme(
 *   securityDefinition="io84-api",
 *   type="oauth2",
 *   authorizationUrl="http://api.io84.com/oauth2/authorize",
 *   tokenUrl="http://api.io84.com/oauth2/access_token",
 *   flow="application",
 *   scopes={
 *     "login": "login",
 *     "public": "public"
 *   }
 * )
 */

//flow' => ['implicit', 'password', 'application', 'accessCode']
?>
