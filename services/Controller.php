<?php

/**
* \Controller
*/
class Controller {

  public $route = null;
  public $request = null;
  public $response = null;
  public $service = null;
  public $app = null;

  public function __construct($route, $request, $response, $service, $app) {
    $this->route = $route;
    $this->request = $request;
    $this->response = $response;
    $this->service = $service;
    $this->app = $app;

    $this->service->escape = function ($str) {
        return htmlentities($str);
    };

    $this->init();
  }
  public function init() {
  }

  public function render($view, $data = array()) {
      $this->service->render(VIEW_BASE_PATH.$view, $data);
  }

  public function partial($view, array $data = array()) {
      $this->service->partial(VIEW_BASE_PATH.$view, $data);
  }

  public function json($object, $jsonp_prefix = null) {
      $this->response->json($object, $jsonp_prefix);
  }

  public function __destruct()
  {
  }
}
