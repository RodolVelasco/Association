<?php

namespace EnhancedProxy91e79413_d5ce9760c2504e370c891f42e7e44158534fa298\__CG__\Ben\MessageBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class MessageController extends \Ben\MessageBundle\Controller\MessageController
{
    private $__CGInterception__loader;

    public function threadAction($threadId)
    {
        $ref = new \ReflectionMethod('Ben\\MessageBundle\\Controller\\MessageController', 'threadAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($threadId));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($threadId), $interceptors);

        return $invocation->proceed();
    }

    public function sentAction()
    {
        $ref = new \ReflectionMethod('Ben\\MessageBundle\\Controller\\MessageController', 'sentAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function searchAction()
    {
        $ref = new \ReflectionMethod('Ben\\MessageBundle\\Controller\\MessageController', 'searchAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function newThreadAction()
    {
        $ref = new \ReflectionMethod('Ben\\MessageBundle\\Controller\\MessageController', 'newThreadAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function inboxAction()
    {
        $ref = new \ReflectionMethod('Ben\\MessageBundle\\Controller\\MessageController', 'inboxAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function deletedAction()
    {
        $ref = new \ReflectionMethod('Ben\\MessageBundle\\Controller\\MessageController', 'deletedAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction($threadId)
    {
        $ref = new \ReflectionMethod('Ben\\MessageBundle\\Controller\\MessageController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($threadId));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($threadId), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}