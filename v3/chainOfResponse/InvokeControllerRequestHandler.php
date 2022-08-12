<?php

class InvokeControllerRequestHandler implements RequestHandler
{
    private $nextHandler = null;

    public function setNextHandler(RequestHandler $requestHandler)
    {
        // do nothing
    }

    public function handle(Request $request)
    {
        $this->invokeController($request);
    }

    private function invokeController(Request $request)
    {
        // find Controller with request uri
        echo "find request route form route config file";
        echo "get eligible controller form ioc";
        echo "call controller method with reflection";
    }
}