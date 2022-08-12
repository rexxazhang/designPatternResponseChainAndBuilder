<?php

class RequestHeaderCheckHandler implements RequestHandler
{

    /**
     * @var
     */
    private $nextHandler;

    /**
     * @throws Exception
     */
    private function checkHeader(string $requestHeader)
    {
        if (empty($requestHeader)) {
            throw new Exception("reqeust header can not be empty");
        }
    }

    /**
     * @throws Exception
     */
    public function handle(Request $request)
    {
        $this->checkHeader($request->getRequestHeader());

        if (!empty($this->nextHandler)) {
            $this->nextHandler->handle($request);
        }
    }

    public function setNextHandler(?RequestHandler $requestHandler)
    {
        $this->nextHandler = $requestHandler;
    }
}