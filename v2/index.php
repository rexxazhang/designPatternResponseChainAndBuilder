<?php
include "v2/common/Request.php";
include "v2/chainOfResponse/RequestHandler.php";
include "v2/chainOfResponse/RequestHeaderCheckHandler.php";

function testChainOfResponse()
{
    // new request
    $requset = new Request();
    $requset->setRequsturi("http://www.cccc.com/xxxxxx?sss=xsssss");
    $requset->setRequestHeader("xxxxxxxxxx");
    $requset->setRequestBody("xxxxxxxxxxxxx");


    // Static -> requestHeader -> log -> selfDefined -> invoker

    $invokerHandler = new InvokeControllerRequestHandler();

    $selfDefinedHandler = new SelfDefinedRequestHandler();
    $selfDefinedHandler->setNextHandler($invokerHandler);

    $logHandler = new LogRequestHandler();
    $logHandler->setNextHandler($selfDefinedHandler);

    $requestHeaderCheckHandler = new RequestHeaderCheckHandler();
    $requestHeaderCheckHandler->setNextHandler($logHandler);

    $responseChain = new StaticRequestHandler();
    $responseChain->setNextHandler($requestHeaderCheckHandler);


    $responseChain->handle($requset);
}
