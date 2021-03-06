<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (preg_match('#^/(?P<_locale>en|fr)/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'homepage']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'fr',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // project_index
        if (preg_match('#^/(?P<_locale>en|fr)/project/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'project_index']), array (  '_controller' => 'AppBundle\\Controller\\ProjectController::indexAction',  '_locale' => 'fr',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_project_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'project_index'));
            }

            return $ret;
        }
        not_project_index:

        // project_new
        if (preg_match('#^/(?P<_locale>en|fr)/project/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'project_new']), array (  '_controller' => 'AppBundle\\Controller\\ProjectController::newProject',  '_locale' => 'fr',));
        }

        // project_show
        if (preg_match('#^/(?P<_locale>en|fr)/project/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'project_show']), array (  '_controller' => 'AppBundle\\Controller\\ProjectController::showAction',  '_locale' => 'fr',));
        }

        // project_edit
        if (preg_match('#^/(?P<_locale>en|fr)/project/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'project_edit']), array (  '_controller' => 'AppBundle\\Controller\\ProjectController::editAction',  '_locale' => 'fr',));
        }

        // delete_project
        if (preg_match('#^/(?P<_locale>en|fr)/projectdelete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_project']), array (  '_controller' => 'AppBundle\\Controller\\ProjectController::deleteProject',  '_locale' => 'fr',));
        }

        // task_index
        if (preg_match('#^/(?P<_locale>en|fr)/task/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'task_index']), array (  '_controller' => 'AppBundle\\Controller\\TaskController::indexAction',  '_locale' => 'fr',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_task_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'task_index'));
            }

            return $ret;
        }
        not_task_index:

        // task_new
        if (preg_match('#^/(?P<_locale>en|fr)/task/new$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'task_new']), array (  '_controller' => 'AppBundle\\Controller\\TaskController::newAction',  '_locale' => 'fr',));
        }

        // task_add
        if (preg_match('#^/(?P<_locale>en|fr)/task/add/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'task_add']), array (  '_controller' => 'AppBundle\\Controller\\TaskController::newAddTask',  '_locale' => 'fr',));
        }

        // task_show
        if (preg_match('#^/(?P<_locale>en|fr)/task/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'task_show']), array (  '_controller' => 'AppBundle\\Controller\\TaskController::showAction',  '_locale' => 'fr',));
        }

        // task_edit
        if (preg_match('#^/(?P<_locale>en|fr)/task/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'task_edit']), array (  '_controller' => 'AppBundle\\Controller\\TaskController::editAction',  '_locale' => 'fr',));
        }

        // delete_task
        if (preg_match('#^/(?P<_locale>en|fr)/taskdelete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_task']), array (  '_controller' => 'AppBundle\\Controller\\TaskController::deleteTask',  '_locale' => 'fr',));
        }

        // user_index
        if (preg_match('#^/(?P<_locale>en|fr)/admin/user/index$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_index']), array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_locale' => 'fr',));
        }

        // user_dev_available
        if (preg_match('#^/(?P<_locale>en|fr)/admin/user/dev_available$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_dev_available']), array (  '_controller' => 'AppBundle\\Controller\\UserController::indexDevAvailable',  '_locale' => 'fr',));
        }

        // user_manager_available
        if (preg_match('#^/(?P<_locale>en|fr)/admin/user/manager_available$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_manager_available']), array (  '_controller' => 'AppBundle\\Controller\\UserController::indexChiefAvailable',  '_locale' => 'fr',));
        }

        // user_new
        if (preg_match('#^/(?P<_locale>en|fr)/admin/user/new$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_new']), array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_locale' => 'fr',));
        }

        // user_show
        if (preg_match('#^/(?P<_locale>en|fr)/admin/user/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_show']), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',  '_locale' => 'fr',));
        }

        // user_edit
        if (preg_match('#^/(?P<_locale>en|fr)/admin/user/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_edit']), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',  '_locale' => 'fr',));
        }

        // delete_user
        if (preg_match('#^/(?P<_locale>en|fr)/admindelete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_user']), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteUser',  '_locale' => 'fr',));
        }

        // fos_user_security_login
        if (preg_match('#^/(?P<_locale>en|fr)/login$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_security_login']), array (  '_controller' => 'fos_user.security.controller:loginAction',  '_locale' => 'fr',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_login;
            }

            return $ret;
        }
        not_fos_user_security_login:

        // fos_user_security_check
        if (preg_match('#^/(?P<_locale>en|fr)/login_check$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_security_check']), array (  '_controller' => 'fos_user.security.controller:checkAction',  '_locale' => 'fr',));
            if (!in_array($requestMethod, ['POST'])) {
                $allow = array_merge($allow, ['POST']);
                goto not_fos_user_security_check;
            }

            return $ret;
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if (preg_match('#^/(?P<_locale>en|fr)/logout$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_security_logout']), array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_locale' => 'fr',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        // fos_user_profile_show
        if (preg_match('#^/(?P<_locale>en|fr)/profile/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_profile_show']), array (  '_controller' => 'fos_user.profile.controller:showAction',  '_locale' => 'fr',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_fos_user_profile_show;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
            }

            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_user_profile_show;
            }

            return $ret;
        }
        not_fos_user_profile_show:

        // fos_user_profile_edit
        if (preg_match('#^/(?P<_locale>en|fr)/profile/edit$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_profile_edit']), array (  '_controller' => 'fos_user.profile.controller:editAction',  '_locale' => 'fr',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_profile_edit;
            }

            return $ret;
        }
        not_fos_user_profile_edit:

        // fos_user_registration_register
        if (preg_match('#^/(?P<_locale>en|fr)/register/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_register']), array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_locale' => 'fr',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_fos_user_registration_register;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
            }

            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_registration_register;
            }

            return $ret;
        }
        not_fos_user_registration_register:

        // fos_user_registration_check_email
        if (preg_match('#^/(?P<_locale>en|fr)/register/check\\-email$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_check_email']), array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_locale' => 'fr',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_user_registration_check_email;
            }

            return $ret;
        }
        not_fos_user_registration_check_email:

        // fos_user_registration_confirm
        if (preg_match('#^/(?P<_locale>en|fr)/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',  '_locale' => 'fr',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_user_registration_confirm;
            }

            return $ret;
        }
        not_fos_user_registration_confirm:

        // fos_user_registration_confirmed
        if (preg_match('#^/(?P<_locale>en|fr)/register/confirmed$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirmed']), array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_locale' => 'fr',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_user_registration_confirmed;
            }

            return $ret;
        }
        not_fos_user_registration_confirmed:

        // fos_user_resetting_request
        if (preg_match('#^/(?P<_locale>en|fr)/resetting/request$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_request']), array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_locale' => 'fr',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_user_resetting_request;
            }

            return $ret;
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if (preg_match('#^/(?P<_locale>en|fr)/resetting/send\\-email$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_send_email']), array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_locale' => 'fr',));
            if (!in_array($requestMethod, ['POST'])) {
                $allow = array_merge($allow, ['POST']);
                goto not_fos_user_resetting_send_email;
            }

            return $ret;
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if (preg_match('#^/(?P<_locale>en|fr)/resetting/check\\-email$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_check_email']), array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_locale' => 'fr',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_user_resetting_check_email;
            }

            return $ret;
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (preg_match('#^/(?P<_locale>en|fr)/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',  '_locale' => 'fr',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_resetting_reset;
            }

            return $ret;
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if (preg_match('#^/(?P<_locale>en|fr)/profile/change\\-password$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_change_password']), array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_locale' => 'fr',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_change_password;
            }

            return $ret;
        }
        not_fos_user_change_password:

        // root
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/fr',  'permanent' => true,  '_route' => 'root',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_root;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'root'));
            }

            return $ret;
        }
        not_root:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
