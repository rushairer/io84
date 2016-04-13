<?php
namespace App\Controllers;

use Controller;
use Log;
use RuntimeException;
use Swagger\Swagger;

/**
 * \FFApiController
 */
class FFApiController extends Controller {

    public function home() {
        $this->render('api/home.php',
            [
            'api_path' => '/filmfilm/'.$this->request->name,
            ]
        );
    }

    public function v1() {
        $swagger = \Swagger\scan(BASE_PATH . '/app');
        header('Content-Type: application/json');
        echo $swagger;
    }

    public function demo() {
        $swagger = \Swagger\scan(BASE_PATH . '/app_swagger_demo');
        header('Content-Type: application/json');
        echo $swagger;
    }

}
