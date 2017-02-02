<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // fct_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fct_homepage');
            }

            return array (  '_controller' => 'FctBundle\\Controller\\DefaultController::indexAction',  '_route' => 'fct_homepage',);
        }

        if (0 === strpos($pathinfo, '/empresas')) {
            // fct_empresas
            if ($pathinfo === '/empresas/all') {
                return array (  '_controller' => 'FctBundle\\Controller\\EmpresasController::allAction',  '_route' => 'fct_empresas',);
            }

            // nueva_empresas
            if ($pathinfo === '/empresas/nueva') {
                return array (  '_controller' => 'FctBundle\\Controller\\EmpresasController::nuevaAction',  '_route' => 'nueva_empresas',);
            }

            // exito_empresas
            if ($pathinfo === '/empresas/msgExito') {
                return array (  '_controller' => 'FctBundle\\Controller\\EmpresasController::msgExitoAction',  '_route' => 'exito_empresas',);
            }

        }

        if (0 === strpos($pathinfo, '/alumnos')) {
            // show_alumnos
            if ($pathinfo === '/alumnos/show') {
                return array (  '_controller' => 'FctBundle\\Controller\\AlumnosController::showAction',  '_route' => 'show_alumnos',);
            }

            // nuevo_alumnos
            if ($pathinfo === '/alumnos/nuevo') {
                return array (  '_controller' => 'FctBundle\\Controller\\AlumnosController::nuevoAction',  '_route' => 'nuevo_alumnos',);
            }

            // exito_alumnos
            if ($pathinfo === '/alumnos/msgExito') {
                return array (  '_controller' => 'FctBundle\\Controller\\AlumnosController::msgExitoAction',  '_route' => 'exito_alumnos',);
            }

        }

        if (0 === strpos($pathinfo, '/empresas')) {
            // api_show
            if ($pathinfo === '/empresas') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_show;
                }

                return array (  '_controller' => 'FctBundle\\Controller\\ApiController::empresaAction',  '_route' => 'api_show',);
            }
            not_api_show:

            // api_insert
            if ($pathinfo === '/empresas') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_insert;
                }

                return array (  '_controller' => 'FctBundle\\Controller\\ApiController::empresaInsertAction',  '_route' => 'api_insert',);
            }
            not_api_insert:

        }

        if (0 === strpos($pathinfo, '/profesores')) {
            // fct_profesores
            if ($pathinfo === '/profesores/all') {
                return array (  '_controller' => 'FctBundle\\Controller\\ProfesoresController::allAction',  '_route' => 'fct_profesores',);
            }

            // new_profesores
            if ($pathinfo === '/profesores/nuevo') {
                return array (  '_controller' => 'FctBundle\\Controller\\ProfesoresController::newAction',  '_route' => 'new_profesores',);
            }

            // apiProfesores_show
            if ($pathinfo === '/profesores') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_apiProfesores_show;
                }

                return array (  '_controller' => 'FctBundle\\Controller\\ApiController::profesorAction',  '_route' => 'apiProfesores_show',);
            }
            not_apiProfesores_show:

        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // register
            if ($pathinfo === '/usuarios/registro') {
                return array (  '_controller' => 'FctBundle\\Controller\\UsersController::registerAction',  '_route' => 'register',);
            }

            if (0 === strpos($pathinfo, '/usuarios/log')) {
                // login
                if ($pathinfo === '/usuarios/login') {
                    return array (  '_controller' => 'FctBundle\\Controller\\UsersController::loginAction',  '_route' => 'login',);
                }

                // logout
                if ($pathinfo === '/usuarios/logout') {
                    return array('_route' => 'logout');
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_conf
            if ($pathinfo === '/admin/config') {
                return array (  '_controller' => 'FctBundle\\Controller\\UsersController::adminAction',  '_route' => 'admin_conf',);
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user')), array (  '_controller' => 'FctBundle\\Controller\\UsersController::userAction',));
                }

                // admin_add
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/add$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_add')), array (  '_controller' => 'FctBundle\\Controller\\UsersController::addAction',));
                }

                // admin_remove
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_remove')), array (  '_controller' => 'FctBundle\\Controller\\UsersController::removeAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/conf')) {
            // config_show
            if ($pathinfo === '/conf/config') {
                return array (  '_controller' => 'FctBundle\\Controller\\confController::confAction',  '_route' => 'config_show',);
            }

            // config_add
            if ($pathinfo === '/conf/add') {
                return array (  '_controller' => 'FctBundle\\Controller\\confController::addConfAction',  '_route' => 'config_add',);
            }

            // exito_configuracion
            if ($pathinfo === '/conf/msgExito') {
                return array (  '_controller' => 'FctBundle\\Controller\\confController::msgExitoAction',  '_route' => 'exito_configuracion',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
