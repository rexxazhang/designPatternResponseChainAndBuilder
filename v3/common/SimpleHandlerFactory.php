<?php

class SimpleHandlerFactory
{
    public function GenerateHandler(string $handlerType)
    {
        return new ReflectionClass($handlerType);
    }
}