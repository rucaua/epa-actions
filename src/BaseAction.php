<?php

declare(strict_types=1);

namespace rucaua\epa\actions;

use rucaua\epa\request\RequestInterface;
use rucaua\epa\response\ResponseInterface;

abstract class BaseAction implements ActionInterface
{

    public ?ResponseInterface $response = null;
    public ?RequestInterface $request = null;

    public function setRequest(RequestInterface $request): ActionInterface
    {
        $this->request = $request;
        return $this;
    }

    public function setResponse(ResponseInterface $response): ActionInterface
    {
        $this->response = $response;
        return $this;
    }
}