<?php

interface RequestHandler
{
    public function setNextHandler(RequestHandler $requestHandler);
    public function handle(Request $request);
}