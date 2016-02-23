<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/default')) {
            // Ben_association_homepage
            if (rtrim($pathinfo, '/') === '/default') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Ben_association_homepage');
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Ben_association_homepage',);
            }

            // ben_import_csv
            if ($pathinfo === '/default/import/csv') {
                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\DefaultController::inmportFromCsvAction',  '_route' => 'ben_import_csv',);
            }

            // ben_stats
            if ($pathinfo === '/default/stats') {
                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\DefaultController::statsAction',  '_route' => 'ben_stats',);
            }

            // ben_stats_json
            if ($pathinfo === '/default/stats/json') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_stats_json;
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\DefaultController::jsonStatsAction',  '_route' => 'ben_stats_json',);
            }
            not_ben_stats_json:

        }

        if (0 === strpos($pathinfo, '/config')) {
            // config
            if (rtrim($pathinfo, '/') === '/config') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'config');
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\configController::indexAction',  '_route' => 'config',);
            }

            // config_update
            if ($pathinfo === '/config/update') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_config_update;
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\configController::updateAction',  '_route' => 'config_update',);
            }
            not_config_update:

            // config_update_lang
            if ($pathinfo === '/config/update/lang') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_config_update_lang;
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\configController::updateLangAction',  '_route' => 'config_update_lang',);
            }
            not_config_update_lang:

            // config_update_fields
            if ($pathinfo === '/config/fields') {
                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\configController::updateFiledsAction',  '_route' => 'config_update_fields',);
            }

        }

        if (0 === strpos($pathinfo, '/event')) {
            // event
            if (rtrim($pathinfo, '/') === '/event') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'event');
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::indexAction',  '_route' => 'event',);
            }

            // ben_event_ajax
            if ($pathinfo === '/event/eventslist') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_event_ajax;
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::ajaxListAction',  '_route' => 'ben_event_ajax',);
            }
            not_ben_event_ajax:

            // event_calendar
            if ($pathinfo === '/event/calendar') {
                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::calendarAction',  '_route' => 'event_calendar',);
            }

            // event_show
            if (preg_match('#^/event/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::showAction',)), array('_route' => 'event_show'));
            }

            // event_new
            if ($pathinfo === '/event/new') {
                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::newAction',  '_route' => 'event_new',);
            }

            // event_create
            if ($pathinfo === '/event/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_event_create;
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::createAction',  '_route' => 'event_create',);
            }
            not_event_create:

            // event_edit
            if (preg_match('#^/event/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::editAction',)), array('_route' => 'event_edit'));
            }

            // event_update
            if (preg_match('#^/event/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_event_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::updateAction',)), array('_route' => 'event_update'));
            }
            not_event_update:

            // event_delete
            if (preg_match('#^/event/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_event_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::deleteAction',)), array('_route' => 'event_delete'));
            }
            not_event_delete:

            // ben_remove_events
            if ($pathinfo === '/event/delete') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_remove_events;
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::removeEntitiesAction',  '_route' => 'ben_remove_events',);
            }
            not_ben_remove_events:

            // event_demo
            if (preg_match('#^/event/(?P<id>[^/]+)/demo$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::demoAction',)), array('_route' => 'event_demo'));
            }

            // event_send
            if (preg_match('#^/event/(?P<id>[^/]+)/send$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::sendAction',)), array('_route' => 'event_send'));
            }

            // event_print
            if (preg_match('#^/event/(?P<id>[^/]+)/print/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'event_print');
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::printAction',)), array('_route' => 'event_print'));
            }

            // event_show_json
            if (preg_match('#^/event/(?P<id>[^/]+)/show\\.json$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::showJsonAction',)), array('_route' => 'event_show_json'));
            }

            // event_update_date
            if (preg_match('#^/event/(?P<id>[^/]+)/updatedate$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_event_update_date;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::updateDateAction',)), array('_route' => 'event_update_date'));
            }
            not_event_update_date:

            // event_ftp
            if (rtrim($pathinfo, '/') === '/event/ftp') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'event_ftp');
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\eventController::ftpAction',  '_route' => 'event_ftp',);
            }

        }

        if (0 === strpos($pathinfo, '/status')) {
            // status
            if (rtrim($pathinfo, '/') === '/status') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'status');
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\StatusController::indexAction',  '_route' => 'status',);
            }

            // status_show
            if (preg_match('#^/status/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\StatusController::showAction',)), array('_route' => 'status_show'));
            }

            // status_new
            if ($pathinfo === '/status/new') {
                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\StatusController::newAction',  '_route' => 'status_new',);
            }

            // status_create
            if ($pathinfo === '/status/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_status_create;
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\StatusController::createAction',  '_route' => 'status_create',);
            }
            not_status_create:

            // status_edit
            if (preg_match('#^/status/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\StatusController::editAction',)), array('_route' => 'status_edit'));
            }

            // status_update
            if (preg_match('#^/status/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_status_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\StatusController::updateAction',)), array('_route' => 'status_update'));
            }
            not_status_update:

            // status_delete
            if (preg_match('#^/status/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_status_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\StatusController::deleteAction',)), array('_route' => 'status_delete'));
            }
            not_status_delete:

        }

        if (0 === strpos($pathinfo, '/cotisation')) {
            // cotisation
            if (rtrim($pathinfo, '/') === '/cotisation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cotisation');
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\CotisationController::indexAction',  '_route' => 'cotisation',);
            }

            // cotisation_ajax
            if ($pathinfo === '/cotisation/list') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cotisation_ajax;
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\CotisationController::ajaxListAction',  '_route' => 'cotisation_ajax',);
            }
            not_cotisation_ajax:

            // cotisation_show
            if (preg_match('#^/cotisation/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\CotisationController::showAction',)), array('_route' => 'cotisation_show'));
            }

            // cotisation_new
            if (preg_match('#^/cotisation/(?P<id>[^/]+)/new$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\CotisationController::newAction',)), array('_route' => 'cotisation_new'));
            }

            // cotisation_create
            if ($pathinfo === '/cotisation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cotisation_create;
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\CotisationController::createAction',  '_route' => 'cotisation_create',);
            }
            not_cotisation_create:

            // cotisation_edit
            if (preg_match('#^/cotisation/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\CotisationController::editAction',)), array('_route' => 'cotisation_edit'));
            }

            // cotisation_update
            if (preg_match('#^/cotisation/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cotisation_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\CotisationController::updateAction',)), array('_route' => 'cotisation_update'));
            }
            not_cotisation_update:

            // cotisation_delete
            if (preg_match('#^/cotisation/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cotisation_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\CotisationController::deleteAction',)), array('_route' => 'cotisation_delete'));
            }
            not_cotisation_delete:

        }

        if (0 === strpos($pathinfo, '/avancement')) {
            // avancement_new
            if (preg_match('#^/avancement/(?P<id>[^/]+)/new$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\AvancementController::newAction',)), array('_route' => 'avancement_new'));
            }

            // avancement_create
            if ($pathinfo === '/avancement/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_avancement_create;
                }

                return array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\AvancementController::createAction',  '_route' => 'avancement_create',);
            }
            not_avancement_create:

            // avancement_edit
            if (preg_match('#^/avancement/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\AvancementController::editAction',)), array('_route' => 'avancement_edit'));
            }

            // avancement_update
            if (preg_match('#^/avancement/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_avancement_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\AvancementController::updateAction',)), array('_route' => 'avancement_update'));
            }
            not_avancement_update:

            // avancement_delete
            if (preg_match('#^/avancement/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_avancement_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\AssociationBundle\\Controller\\AvancementController::deleteAction',)), array('_route' => 'avancement_delete'));
            }
            not_avancement_delete:

        }

        if (0 === strpos($pathinfo, '/')) {
            if (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if (rtrim($pathinfo, '/') === '/profile') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit') {
                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                // fos_user_registration_confirm
                if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirm;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ($pathinfo === '/register/confirmed') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
                }
                not_fos_user_resetting_reset:

            }

            // fos_user_change_password
            if ($pathinfo === '/change-password/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // fos_autocomplete
            if ($pathinfo === '/users/autocomplete') {
                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\UserController::autocompleteAction',  '_route' => 'fos_autocomplete',);
            }

            // ben_users_public
            if (0 === strpos($pathinfo, '/public') && preg_match('#^/public(?:/(?P<perPage>[^/]+))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::publicAction',  'perPage' => '10',)), array('_route' => 'ben_users_public'));
            }

            // ben_users
            if ($pathinfo === '/adherants') {
                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::indexAction',  '_route' => 'ben_users',);
            }

            // ben_users_ajax
            if ($pathinfo === '/userslist') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_users_ajax;
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::ajaxListAction',  '_route' => 'ben_users_ajax',);
            }
            not_ben_users_ajax:

            // ben_archive
            if ($pathinfo === '/archive') {
                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::archiveAction',  '_route' => 'ben_archive',);
            }

            // ben_archive_set
            if (0 === strpos($pathinfo, '/archive/set') && preg_match('#^/archive/set/(?P<stat>[^/]+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_archive_set;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::setArchiveAction',)), array('_route' => 'ben_archive_set'));
            }
            not_ben_archive_set:

            // ben_show_user
            if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::showAction',)), array('_route' => 'ben_show_user'));
            }

            // ben_new_user
            if ($pathinfo === '/new') {
                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::newAction',  '_route' => 'ben_new_user',);
            }

            // ben_add_user
            if ($pathinfo === '/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_add_user;
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::addAction',  '_route' => 'ben_add_user',);
            }
            not_ben_add_user:

            // ben_edit_user
            if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::editAction',)), array('_route' => 'ben_edit_user'));
            }

            // ben_update_user
            if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_update_user;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::updateAction',)), array('_route' => 'ben_update_user'));
            }
            not_ben_update_user:

            // ben_enable_users
            if (0 === strpos($pathinfo, '/users/active') && preg_match('#^/users/active(?:/(?P<etat>[^/]+))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_enable_users;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::enableUsersAction',  'etat' => '1',)), array('_route' => 'ben_enable_users'));
            }
            not_ben_enable_users:

            // ben_promote_users
            if (0 === strpos($pathinfo, '/promote') && preg_match('#^/promote(?:/(?P<role>[^/]+))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_promote_users;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::setRoleAction',  'role' => 'user',)), array('_route' => 'ben_promote_users'));
            }
            not_ben_promote_users:

            // ben_delete_user
            if (preg_match('#^/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_delete_user;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::deleteAction',)), array('_route' => 'ben_delete_user'));
            }
            not_ben_delete_user:

            // ben_remove_users
            if ($pathinfo === '/delete') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_remove_users;
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::removeUsersAction',  '_route' => 'ben_remove_users',);
            }
            not_ben_remove_users:

            // ben_users_export
            if ($pathinfo === '/csv') {
                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::toCsvAction',  '_route' => 'ben_users_export',);
            }

            // ben_profile_edit
            if (0 === strpos($pathinfo, '/me/edit') && preg_match('#^/me/edit/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::editMeAction',)), array('_route' => 'ben_profile_edit'));
            }

            // ben_profile_update
            if (0 === strpos($pathinfo, '/me') && preg_match('#^/me/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_profile_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::updateMeAction',)), array('_route' => 'ben_profile_update'));
            }
            not_ben_profile_update:

            // ben_pdf
            if (0 === strpos($pathinfo, '/pdf') && preg_match('#^/pdf/(?P<users>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::toPdfAction',)), array('_route' => 'ben_pdf'));
            }

            // ben_export_xml
            if ($pathinfo === '/xml') {
                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::toXmlAction',  '_route' => 'ben_export_xml',);
            }

            // ben_export_excel
            if ($pathinfo === '/excel') {
                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::toExcelAction',  '_route' => 'ben_export_excel',);
            }

            // ben_badge_user
            if (0 === strpos($pathinfo, '/badge') && preg_match('#^/badge/(?P<users>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::showBadgeAction',)), array('_route' => 'ben_badge_user'));
            }

            // ben_ticket_user
            if (0 === strpos($pathinfo, '/printTicket') && preg_match('#^/printTicket/(?P<users>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::printTicketAction',)), array('_route' => 'ben_ticket_user'));
            }

            // add_users_log
            if ($pathinfo === '/log') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_add_users_log;
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::logAction',  '_route' => 'add_users_log',);
            }
            not_add_users_log:

            // ben_mail
            if ($pathinfo === '/mail') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_mail;
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::sendMailAction',  '_route' => 'ben_mail',);
            }
            not_ben_mail:

            // ben_mail_alert
            if (preg_match('#^/(?P<id>[^/]+)/alert/mail$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::alertMailAction',)), array('_route' => 'ben_mail_alert'));
            }

            // ben_print_alert
            if (preg_match('#^/(?P<id>[^/]+)/alert/print$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::alertPrintAction',)), array('_route' => 'ben_print_alert'));
            }

            // ben_clear_log
            if (0 === strpos($pathinfo, '/log/clear') && preg_match('#^/log/clear(?:/(?P<id>[^/]+)(?:/(?P<user>[^/]+))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\AdminController::clearLogAction',  'id' => '0',  'user' => '0',)), array('_route' => 'ben_clear_log'));
            }

            if (0 === strpos($pathinfo, '/group')) {
                // group
                if (rtrim($pathinfo, '/') === '/group') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'group');
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::indexAction',  '_route' => 'group',);
                }

                // group_show
                if (0 === strpos($pathinfo, '/group/show') && preg_match('#^/group/show/(?P<id>[^/]+)(?:/(?P<perPage>[^/]+))?$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::showAction',  'perPage' => '10',)), array('_route' => 'group_show'));
                }

                // group_create
                if ($pathinfo === '/group/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_group_create;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::createAction',  '_route' => 'group_create',);
                }
                not_group_create:

                // group_edit
                if (preg_match('#^/group/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::editAction',)), array('_route' => 'group_edit'));
                }

                // group_update
                if (preg_match('#^/group/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_group_update;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::updateAction',)), array('_route' => 'group_update'));
                }
                not_group_update:

                // group_delete
                if (preg_match('#^/group/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::deleteAction',)), array('_route' => 'group_delete'));
                }

                // group_add_user
                if ($pathinfo === '/group/addtogroup') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_group_add_user;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::addToGroupAction',  '_route' => 'group_add_user',);
                }
                not_group_add_user:

                // add_group_filter
                if ($pathinfo === '/group/addgroupfilter') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_add_group_filter;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::addFilterGroupAction',  '_route' => 'add_group_filter',);
                }
                not_add_group_filter:

                // add_users_group
                if ($pathinfo === '/group/addtogroup') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_add_users_group;
                    }

                    return array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::addToGroupAction',  '_route' => 'add_users_group',);
                }
                not_add_users_group:

                // ben_remove_from_roup
                if (0 === strpos($pathinfo, '/group/groupereject') && preg_match('#^/group/groupereject/(?P<id>[^/]+)/(?P<groupid>[^/]+)$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::removeFromGroupAction',)), array('_route' => 'ben_remove_from_roup'));
                }

                // ben_log_group
                if (0 === strpos($pathinfo, '/group/log') && preg_match('#^/group/log/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ben_log_group;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::logGroupAction',)), array('_route' => 'ben_log_group'));
                }
                not_ben_log_group:

                // ben_mail_group
                if (0 === strpos($pathinfo, '/group/mail') && preg_match('#^/group/mail/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ben_mail_group;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::sendMailGroupAction',)), array('_route' => 'ben_mail_group'));
                }
                not_ben_mail_group:

                // group_send_letter
                if (0 === strpos($pathinfo, '/group/letter') && preg_match('#^/group/letter/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_group_send_letter;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\UserBundle\\Controller\\GroupController::sendLetterAction',)), array('_route' => 'group_send_letter'));
                }
                not_group_send_letter:

            }

            // fos_user_security_login
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_security_login');
                }

                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

            // fos_user_security_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Ben\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/messages')) {
            // fos_message_unread
            if ($pathinfo === '/messages/unread') {
                return array (  '_controller' => 'Ben\\MessageBundle\\Controller\\MessageController::unreadAction',  '_route' => 'fos_message_unread',);
            }

            // fos_message_inbox
            if (rtrim($pathinfo, '/') === '/messages') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_message_inbox');
                }

                return array (  '_controller' => 'Ben\\MessageBundle\\Controller\\MessageController::inboxAction',  '_route' => 'fos_message_inbox',);
            }

            // fos_message_sent
            if ($pathinfo === '/messages/sent') {
                return array (  '_controller' => 'Ben\\MessageBundle\\Controller\\MessageController::sentAction',  '_route' => 'fos_message_sent',);
            }

            // fos_message_deleted
            if ($pathinfo === '/messages/deleted') {
                return array (  '_controller' => 'Ben\\MessageBundle\\Controller\\MessageController::deletedAction',  '_route' => 'fos_message_deleted',);
            }

            // fos_message_search
            if ($pathinfo === '/messages/search') {
                return array (  '_controller' => 'Ben\\MessageBundle\\Controller\\MessageController::searchAction',  '_route' => 'fos_message_search',);
            }

            // fos_message_thread_new
            if ($pathinfo === '/messages/new') {
                return array (  '_controller' => 'Ben\\MessageBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
            }

            // fos_message_thread_delete
            if (preg_match('#^/messages/(?P<threadId>[^/]+)/delete$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\MessageBundle\\Controller\\MessageController::deleteAction',)), array('_route' => 'fos_message_thread_delete'));
            }

            // fos_message_thread_undelete
            if (preg_match('#^/messages/(?P<threadId>[^/]+)/undelete$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\MessageBundle\\Controller\\MessageController::undeleteAction',)), array('_route' => 'fos_message_thread_undelete'));
            }

            // fos_message_thread_view
            if (preg_match('#^/messages/(?P<threadId>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ben\\MessageBundle\\Controller\\MessageController::threadAction',)), array('_route' => 'fos_message_thread_view'));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
