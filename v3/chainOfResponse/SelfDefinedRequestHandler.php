<?php

class SelfDefinedRequestHandler implements RequestHandler
{
    private $nextHandler;


    public function setNextHandler(RequestHandler $requestHandler)
    {
        $this->nextHandler = $requestHandler;
    }

    public function handle(Request $request)
    {
        $this->beforeRequest();

        $this->nextHandler->handle($request);
        $this->afterRequest();
    }

    private function beforeRequest()
    {
        // do something before request
        // emp: check authorize
        echo "check authorize";
    }

    private function afterRequest()
    {
        // do something after request
        // emp:
        echo "logging data to es or message queue";
    }


}