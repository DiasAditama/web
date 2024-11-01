<?php

namespace Controller;

class Controller {
    protected $controllerName;
    protected $controllerMethod;

    public function getControllerAttribute() {
        return [
            "name" => $this->controllerName,
            "method" => $this->controllerMethod
        ];
    }
}
