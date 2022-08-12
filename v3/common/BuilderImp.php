<?php

class BuilderImp implements Builder
{
    private $handlerFactory;
    private $handlerArray;

    public function __construct() {
        $this->handlerFactory = new SimpleHandlerFactory();
        $this->handlerArray = [];
    }

    public function addRequestHandler(string $requestHandlerType)
    {
        $this->handlerArray[] = $this->handlerFactory->GenerateHandler($requestHandlerType);
    }

    public function build() :?RequestHandler
    {
        $firstHandler = $this->handlerArray[0];
        $currentHandler = $firstHandler;
        foreach ($this->handlerArray as $handler) {
            $currentHandler->setNextHandler($handler);
            $currentHandler = $handler;
        }
        return $firstHandler;
    }
}