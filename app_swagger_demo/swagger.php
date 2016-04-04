<?php

/**
 * @SWG\Swagger(
 *     schemes={"http"},
 *     host="petstore.swagger.io",
 *     basePath="/v1",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Swagger Petstore",
 *         description="This is a sample server Petstore server.  You can find out more about Swagger at <a href=""http://swagger.io"">http://swagger.io</a> or on irc.freenode.net, #swagger.  For this sample, you can use the api key ""special-key"" to test the authorization filters",
 *         )
 *     )
 *     )
 * )
 */

/**
 * @SWG\Tag(
 *   name="pet",
 *   description="Everything about your Pets",
 *   @SWG\ExternalDocumentation(
 *     description="Find out more",
 *     url="http://swagger.io"
 *   )
 * )
 * @SWG\Tag(
 *   name="store",
 *   description="Operations about user"
 * )
 * @SWG\Tag(
 *   name="user",
 *   description="Access to Petstore orders",
 *   @SWG\ExternalDocumentation(
 *     description="Find out more about our store",
 *     url="http://swagger.io"
 *   )
 * )
 */

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
 *   securityDefinition="petstore_auth",
 *   type="oauth2",
 *   authorizationUrl="http://petstore.swagger.io/api/oauth/dialog",
 *   flow="implicit",
 *   scopes={
 *     "read:pets": "read your pets",
 *     "write:pets": "modify pets in your account"
 *   }
 * )
 */
