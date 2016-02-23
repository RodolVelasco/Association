<?php

namespace EnhancedProxyef869ab2_d0b5eb6c22a2b05e513e250ecea2fc467254872b\__CG__\Ben\AssociationBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class eventController extends \Ben\AssociationBundle\Controller\eventController
{
    private $__CGInterception__loader;

    public function updateDateAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'updateDateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function updateAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'updateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function showJsonAction($id)
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'showJsonAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function showAction($id)
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'showAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function sendAction(\Ben\AssociationBundle\Entity\event $entity)
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'sendAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($entity));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($entity), $interceptors);

        return $invocation->proceed();
    }

    public function removeEntitiesAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'removeEntitiesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function printAction(\Ben\AssociationBundle\Entity\event $entity)
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'printAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($entity));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($entity), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function ftpAction()
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'ftpAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function editAction($id)
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'editAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function demoAction(\Ben\AssociationBundle\Entity\event $entity)
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'demoAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($entity));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($entity), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'createAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function calendarAction()
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'calendarAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function ajaxListAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\AssociationBundle\\Controller\\eventController', 'ajaxListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}