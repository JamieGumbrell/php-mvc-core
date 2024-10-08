<?php

namespace jamiegumbrell\phpmvc;

use jamiegumbrell\phpmvc\middlewares\BaseMiddleware;

class Controller{

public string $layout = 'main';
public string $action = '';
protected array $middlewares = [];

    public function render($view, $params = []){
        return Application::$app->view->renderView($view, $params);
    }

    public function setLayout($layout){
        $this->layout = $layout;
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

}