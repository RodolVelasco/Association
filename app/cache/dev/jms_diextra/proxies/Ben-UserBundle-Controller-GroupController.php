<?php

namespace EnhancedProxyef869ab2_209c1471bd4965eeea62c412a9a107b728cb3fa9\__CG__\Ben\UserBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class GroupController extends \Ben\UserBundle\Controller\GroupController
{
    private $__CGInterception__loader;

    public function updateAction(\Symfony\Component\HttpFoundation\Request $request, \Ben\UserBundle\Entity\Group $entity)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\GroupController', 'updateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $entity));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $entity), $interceptors);

        return $invocation->proceed();
    }

    public function showAction(\Symfony\Component\HttpFoundation\Request $request, \Ben\UserBundle\Entity\Group $group, $perPage)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\GroupController', 'showAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $group, $perPage));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $group, $perPage), $interceptors);

        return $invocation->proceed();
    }

    public function sendMailGroupAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\GroupController', 'sendMailGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function sendLetterAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\GroupController', 'sendLetterAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function removeFromGroupAction(\Symfony\Component\HttpFoundation\Request $request, \Ben\UserBundle\Entity\User $user, $groupid)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\GroupController', 'removeFromGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $user, $groupid));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $user, $groupid), $interceptors);

        return $invocation->proceed();
    }

    public function logGroupAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\GroupController', 'logGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\GroupController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function editAction(\Ben\UserBundle\Entity\Group $entity)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\GroupController', 'editAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($entity));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($entity), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, \Ben\UserBundle\Entity\Group $entity)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\GroupController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $entity));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $entity), $interceptors);

        return $invocation->proceed();
    }

    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\GroupController', 'createAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function addToGroupAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\GroupController', 'addToGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function addFilterGroupAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\GroupController', 'addFilterGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}