<?php

namespace Ben\AssociationBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class AvancementController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/ubuntu/workspace/Association/app/cache/prod/jms_diextra/proxies/Ben-AssociationBundle-Controller-AvancementController.php';
        $c = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Ben\\AssociationBundle\\Controller\\AvancementController' => array('newAction' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy91e79413_ce516da0fbe4dc7c1a57ed0d81fb736ef17ebdb9\__CG__\Ben\AssociationBundle\Controller\AvancementController();
        $instance->__CGInterception__setLoader($c);
        return $instance;
    }
}