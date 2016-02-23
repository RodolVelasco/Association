<?php

namespace EnhancedProxyef869ab2_aaa968b903122828095fdfdbf82a8a9887fe7bb9\__CG__\Ben\UserBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AdminController extends \Ben\UserBundle\Controller\AdminController
{
    private $__CGInterception__loader;

    public function updateMeAction(\Symfony\Component\HttpFoundation\Request $request, \Ben\UserBundle\Entity\profile $profile)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'updateMeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $profile));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $profile), $interceptors);

        return $invocation->proceed();
    }

    public function updateAction(\Symfony\Component\HttpFoundation\Request $request, \Ben\UserBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'updateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $user), $interceptors);

        return $invocation->proceed();
    }

    public function toXmlAction()
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'toXmlAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function toPdfAction($users)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'toPdfAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($users));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($users), $interceptors);

        return $invocation->proceed();
    }

    public function toExcelAction()
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'toExcelAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function toCsvAction()
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'toCsvAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function showAction($id)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'showAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function setRoleAction(\Symfony\Component\HttpFoundation\Request $request, $role)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'setRoleAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $role));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $role), $interceptors);

        return $invocation->proceed();
    }

    public function setArchiveAction(\Symfony\Component\HttpFoundation\Request $request, $stat)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'setArchiveAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $stat));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $stat), $interceptors);

        return $invocation->proceed();
    }

    public function sendMailAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'sendMailAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function removeUsersAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'removeUsersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function publicAction(\Symfony\Component\HttpFoundation\Request $request, $perPage)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'publicAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $perPage));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $perPage), $interceptors);

        return $invocation->proceed();
    }

    public function printTicketAction($users)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'printTicketAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($users));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($users), $interceptors);

        return $invocation->proceed();
    }

    public function newAction()
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'newAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function logAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'logAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function enableUsersAction(\Symfony\Component\HttpFoundation\Request $request, $etat)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'enableUsersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $etat));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $etat), $interceptors);

        return $invocation->proceed();
    }

    public function editMeAction()
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'editMeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function editAction(\Ben\UserBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'editAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function clearLogAction(\Symfony\Component\HttpFoundation\Request $request, $id, $user)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'clearLogAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id, $user), $interceptors);

        return $invocation->proceed();
    }

    public function archiveAction()
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'archiveAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function alertPrintAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'alertPrintAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function alertMailAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'alertMailAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $id), $interceptors);

        return $invocation->proceed();
    }

    public function ajaxListAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'ajaxListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function addAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Ben\\UserBundle\\Controller\\AdminController', 'addAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}