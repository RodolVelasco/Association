<?php

namespace Ben\AssociationBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class DefaultController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/ubuntu/workspace/Association/app/cache/dev/jms_diextra/proxies/Ben-AssociationBundle-Controller-DefaultController.php';
        $d = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Ben\\AssociationBundle\\Controller\\DefaultController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'inmportFromCsvAction' => array(0 => 'security.access.method_interceptor'), 'statsAction' => array(0 => 'security.access.method_interceptor'), 'jsonStatsAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxyef869ab2_7eb2cb9feefba4a402152f1f38824463202565d9\__CG__\Ben\AssociationBundle\Controller\DefaultController();
        $instance->__CGInterception__setLoader($d);
        return $instance;
    }
}
