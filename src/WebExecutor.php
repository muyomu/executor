<?php

namespace muyomu\executor;

use muyomu\executor\client\ExecutorClient;
use muyomu\http\Request;
use muyomu\http\Response;
use ReflectionClass;
use ReflectionException;

class WebExecutor implements ExecutorClient
{

    /**
     * @throws ReflectionException
     */
    public function webExecutor(Request $request,Response $response,string $controllerClassName, string $method): void
    {
        /*
         * 获取控制器反射类
         */
        $class = new ReflectionClass($controllerClassName);

        /*
         * 获取控制器实例
         */
        $instance = $class->newInstance();

        /*
         * 获取控制器处理器
         */
        $method = $class->getMethod($method);

        /*
         * prepare data
         */
        $argvs = array();

        /*
         * 执行控制器处理器
         */
        $returnData = $method->invokeArgs($instance, $argvs);

        /*
         * 处理返回数据
         */
        $response->doResponse($returnData);
    }
}