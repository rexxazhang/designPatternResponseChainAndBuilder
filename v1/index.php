<?php
include "v1/common/Request.php";

function test()
{
    $requestCount = 0;
    $failedRequest = 0;
    $successRequest = 0;

    // new request
    $requset = new Request();
    $requset->setRequsturi("http://www.cccc.com/xxxxxx?sss=xsssss");
    $requset->setRequestHeader("xxxxxxxxxx");
    $requset->setRequestBody("xxxxxxxxxxxxx");

    try {
        $requestCount++;
        if (logData($requset)) {
            if (empty($requset->setRequestHeader())) {
                throw new Exception("exception.....");
            } else {
                //do something before request
                // check authorize
                if ($requset->setRequestHeader() == "ROLE_ADMIN") {
                    throw new Exception("no authorize");
                } else {
                    // call controller
                    // find Controller with request uri
                    echo "find request route form route config file";

                    try{
                        findControllerAndProcess();
                        $successRequest++;
                    } catch (Exception $exception) {
                        echo $exception->getMessage();
                        $failedRequest++;
                    }

                    echo "call controller method with reflection";
                }
                $requsetBody = $requset->getRequestBody();
                // logging data to es
                echo "loggingdata to es";
            }
        }
        $successRequest++;
    } catch (Exception $e) {
        $failedRequest++;
    }
}

function findControllerAndProcess()
{
    echo "get eligible controller form ioc";
}

function logData(Request $request)
{
    // do something
    echo "logging Data";
}