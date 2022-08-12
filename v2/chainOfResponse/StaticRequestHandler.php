<?php

class StaticRequestHandler implements RequestHandler
{
    // can use enum
    private const INITIAL_ZERO = 0;

    private $requestCount = StaticRequestHandler::INITIAL_ZERO;
    private $failedRequestCount = StaticRequestHandler::INITIAL_ZERO;
    private $successfulRequest = StaticRequestHandler::INITIAL_ZERO;
    private $nextHandler;

    public function setNextHandler(RequestHandler $requestHandler)
    {
        $this->nextHandler = $requestHandler;
    }

    public function handle(Request $request)
    {
        try {
            $this->requestCount++;
            $this->nextHandler->handler();
            $this->successfulRequest++;
        } catch (Exception $e) {
            $this->failedRequestCount++;
        }
    }
}