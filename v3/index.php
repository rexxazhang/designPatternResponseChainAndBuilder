<?php
// include all files

function testResponseChain()
{
    // config
    $configArr = [

        "LogRequestHandler",
        "StaticRequestHandler",
        "RequestHeaderCheckHandler",
        "SelfDefinedRequestHandler",
        "InvokeControllerRequestHandler"
    ];

    // new request
    $requset = new Request();
    $requset->setRequsturi("http://www.cccc.com/xxxxxx?sss=xsssss");
    $requset->setRequestHeader("xxxxxxxxxx");
    $requset->setRequestBody("xxxxxxxxxxxxx");

    // use buildler
    $builder = new BuilderImp();
    foreach ($configArr as $config) {
        $builder->addRequestHandler($config);
    }
    $responseChain = $builder->build();

    // run chain
    $responseChain->handle($requset);
}