<?php

use Klein\Klein;

/**
* \Route
*/
class Route extends Klein {

  function __construct()
  {
      parent::__construct();
  }

  public function make($controller) {
    return new $controller($this, $this->request, $this->response, $this->service, $this->app);
  }

}
