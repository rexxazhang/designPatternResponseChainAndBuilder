<?php

class LogRequestHandler implements RequestHandler
{

    private $nextHandler;

    public function setNextHandler(RequestHandler $requestHandler)
    {
        $this->nextHandler = $requestHandler;
    }

    public function handle(Request $request)
    {
        // log this request
        echo "[NOTICE] {$request->getRequestHeader()}  ", "{$request->getRequestBody()}";

        if (!empty($this->nextHandler)) {
            $this->nextHandler->handle($request);
        }
    }
}