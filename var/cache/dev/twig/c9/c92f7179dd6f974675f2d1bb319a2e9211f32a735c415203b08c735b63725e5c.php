<?php

/* ::base.html.twig */
class __TwigTemplate_d50fb052a5130f6646e734762b4186a29f49e06faf5a751aa39f4ae395e5e824 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d15cd9b5ed66e66516a6e44861bb510eb4373f7509ef017e7f2b33253e560622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15cd9b5ed66e66516a6e44861bb510eb4373f7509ef017e7f2b33253e560622->enter($__internal_d15cd9b5ed66e66516a6e44861bb510eb4373f7509ef017e7f2b33253e560622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

      <div id=\"wrapper\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\"><h1>FCT</h1>
            <p>Gestor de prácticas en empresa</p></a>
        </div>
        <!-- Top Menu Items -->
        <ul class=\"nav navbar-right top-nav\">
          ";
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE")) {
            // line 42
            echo "             ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
          ";
        }
        // line 44
        echo "            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu message-dropdown\">
                    <li class=\"message-preview\">
                        <a href=\"#\">
                            <div class=\"media\">
                                <span class=\"pull-left\">
                                    <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                </span>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\"><strong>Usuario</strong>
                                    </h5>
                                    <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"message-preview\">
                        <a href=\"#\">
                            <div class=\"media\">
                                <span class=\"pull-left\">
                                    <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                </span>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\"><strong>Usuario</strong>
                                    </h5>
                                    <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"message-preview\">
                        <a href=\"#\">
                            <div class=\"media\">
                                <span class=\"pull-left\">
                                    <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                </span>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\"><strong>Usuario</strong>
                                    </h5>
                                    <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"message-footer\">
                        <a href=\"#\">Read All New Messages</a>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu alert-dropdown\">
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-success\">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-info\">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-warning\">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-danger\">Alert Badge</span></a>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#\">View All</a>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"/usuarios/logout\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i>Salir<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav side-nav\">
               <li>
                   <a href=\"/empresas/nueva\"><i class=\"fa fa-fw fa-edit\"></i>Insertar Empresa</a>
               </li>
               <li>
                   <a href=\"/empresas/all\"><i class=\"fa fa-fw fa-table\"></i>Mostrar Empresas</a>
               </li>
               <li>
                   <a href=\"/alumnos/nuevo\"><i class=\"fa fa-fw fa-edit\"></i>Insertar Alumnos</a>
               </li>
               <li>
                   <a href=\"/alumnos/show\"><i class=\"fa fa-fw fa-table\"></i>Mostrar Alumnos</a>
               </li>
            ";
        // line 157
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 158
            echo "               <li>
                   <a href=\"/admin/config\"><i class=\"fa fa-fw fa-table\"></i>Administración de Usuarios</a>
               </li>
             ";
        }
        // line 162
        echo "             ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 163
            echo "               <li>
                   <a href=\"/conf/add\"><i class=\"fa fa-fw fa-edit\"></i>Insertar Configuración</a>
               </li>
               <li>
                   <a href=\"/conf/config\"><i class=\"fa fa-fw fa-table\"></i>Mostrar Configuraciones</a>
               </li>
              ";
        }
        // line 170
        echo "
            </ul>
          </div>
        </nav>
        <div id=\"page-wrapper\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                      ";
        // line 178
        $this->displayBlock('head', $context, $blocks);
        // line 181
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 185
        $this->displayBlock('body', $context, $blocks);
        // line 186
        echo "                    </div>
                </div>
        </div>
      </div>
      ";
        // line 190
        $this->displayBlock('javascripts', $context, $blocks);
        // line 193
        echo "    </body>
  </html>
";
        
        $__internal_d15cd9b5ed66e66516a6e44861bb510eb4373f7509ef017e7f2b33253e560622->leave($__internal_d15cd9b5ed66e66516a6e44861bb510eb4373f7509ef017e7f2b33253e560622_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_19f4bce0b8e973b2338db721f20ac7ba986343bc7c2760e4608d221a1f94333a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f4bce0b8e973b2338db721f20ac7ba986343bc7c2760e4608d221a1f94333a->enter($__internal_19f4bce0b8e973b2338db721f20ac7ba986343bc7c2760e4608d221a1f94333a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_19f4bce0b8e973b2338db721f20ac7ba986343bc7c2760e4608d221a1f94333a->leave($__internal_19f4bce0b8e973b2338db721f20ac7ba986343bc7c2760e4608d221a1f94333a_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b142ff9a4f29a7c5b9af251277b7460a4c636e40f5d8694fecd65838cc36432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b142ff9a4f29a7c5b9af251277b7460a4c636e40f5d8694fecd65838cc36432->enter($__internal_7b142ff9a4f29a7c5b9af251277b7460a4c636e40f5d8694fecd65838cc36432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "          <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/grid12.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_7b142ff9a4f29a7c5b9af251277b7460a4c636e40f5d8694fecd65838cc36432->leave($__internal_7b142ff9a4f29a7c5b9af251277b7460a4c636e40f5d8694fecd65838cc36432_prof);

    }

    // line 178
    public function block_head($context, array $blocks = array())
    {
        $__internal_0dcfad31df9f8d694ba4a4d6d9a4bbbf38e2574d158dfb9d33d8115d6f06c957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dcfad31df9f8d694ba4a4d6d9a4bbbf38e2574d158dfb9d33d8115d6f06c957->enter($__internal_0dcfad31df9f8d694ba4a4d6d9a4bbbf38e2574d158dfb9d33d8115d6f06c957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 179
        echo "                        <h1 class=\"page-header\">Gestor FCT</h1>
                      ";
        
        $__internal_0dcfad31df9f8d694ba4a4d6d9a4bbbf38e2574d158dfb9d33d8115d6f06c957->leave($__internal_0dcfad31df9f8d694ba4a4d6d9a4bbbf38e2574d158dfb9d33d8115d6f06c957_prof);

    }

    // line 185
    public function block_body($context, array $blocks = array())
    {
        $__internal_31e2ba731b0141b30c30e82c8d2b1f46073ecbd53dc128dbcc2d4c022960f3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e2ba731b0141b30c30e82c8d2b1f46073ecbd53dc128dbcc2d4c022960f3fb->enter($__internal_31e2ba731b0141b30c30e82c8d2b1f46073ecbd53dc128dbcc2d4c022960f3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31e2ba731b0141b30c30e82c8d2b1f46073ecbd53dc128dbcc2d4c022960f3fb->leave($__internal_31e2ba731b0141b30c30e82c8d2b1f46073ecbd53dc128dbcc2d4c022960f3fb_prof);

    }

    // line 190
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdcb372f3c0b1c36a5c9c12f4ccef1e76c07b7adec8370debbdd93f07a5e2ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdcb372f3c0b1c36a5c9c12f4ccef1e76c07b7adec8370debbdd93f07a5e2ee7->enter($__internal_fdcb372f3c0b1c36a5c9c12f4ccef1e76c07b7adec8370debbdd93f07a5e2ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 191
        echo "
      ";
        
        $__internal_fdcb372f3c0b1c36a5c9c12f4ccef1e76c07b7adec8370debbdd93f07a5e2ee7->leave($__internal_fdcb372f3c0b1c36a5c9c12f4ccef1e76c07b7adec8370debbdd93f07a5e2ee7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 191,  321 => 190,  310 => 185,  302 => 179,  296 => 178,  287 => 17,  283 => 16,  279 => 15,  275 => 14,  270 => 13,  264 => 12,  252 => 11,  243 => 193,  241 => 190,  235 => 186,  233 => 185,  227 => 181,  225 => 178,  215 => 170,  206 => 163,  203 => 162,  197 => 158,  195 => 157,  80 => 44,  74 => 42,  72 => 41,  48 => 20,  45 => 19,  43 => 12,  39 => 11,  27 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"es\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
          <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
          <link rel=\"stylesheet\" href=\"{{ asset('css/sb-admin.css') }}\">
          <link rel=\"stylesheet\" href=\"{{ asset('font-awesome/css/font-awesome.css') }}\">
          <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
          <link rel=\"stylesheet\" href=\"{{ asset('css/grid12.css') }}\">
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

      <div id=\"wrapper\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\"><h1>FCT</h1>
            <p>Gestor de prácticas en empresa</p></a>
        </div>
        <!-- Top Menu Items -->
        <ul class=\"nav navbar-right top-nav\">
          {% if is_granted(\"ROLE\") %}
             {{ app.user.username }}
          {% endif %}
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu message-dropdown\">
                    <li class=\"message-preview\">
                        <a href=\"#\">
                            <div class=\"media\">
                                <span class=\"pull-left\">
                                    <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                </span>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\"><strong>Usuario</strong>
                                    </h5>
                                    <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"message-preview\">
                        <a href=\"#\">
                            <div class=\"media\">
                                <span class=\"pull-left\">
                                    <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                </span>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\"><strong>Usuario</strong>
                                    </h5>
                                    <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"message-preview\">
                        <a href=\"#\">
                            <div class=\"media\">
                                <span class=\"pull-left\">
                                    <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                </span>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\"><strong>Usuario</strong>
                                    </h5>
                                    <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"message-footer\">
                        <a href=\"#\">Read All New Messages</a>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu alert-dropdown\">
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-success\">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-info\">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-warning\">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-danger\">Alert Badge</span></a>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#\">View All</a>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"/usuarios/logout\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i>Salir<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav side-nav\">
               <li>
                   <a href=\"/empresas/nueva\"><i class=\"fa fa-fw fa-edit\"></i>Insertar Empresa</a>
               </li>
               <li>
                   <a href=\"/empresas/all\"><i class=\"fa fa-fw fa-table\"></i>Mostrar Empresas</a>
               </li>
               <li>
                   <a href=\"/alumnos/nuevo\"><i class=\"fa fa-fw fa-edit\"></i>Insertar Alumnos</a>
               </li>
               <li>
                   <a href=\"/alumnos/show\"><i class=\"fa fa-fw fa-table\"></i>Mostrar Alumnos</a>
               </li>
            {% if is_granted('ROLE_ADMIN') %}
               <li>
                   <a href=\"/admin/config\"><i class=\"fa fa-fw fa-table\"></i>Administración de Usuarios</a>
               </li>
             {% endif %}
             {% if is_granted('ROLE_SUPER_ADMIN') %}
               <li>
                   <a href=\"/conf/add\"><i class=\"fa fa-fw fa-edit\"></i>Insertar Configuración</a>
               </li>
               <li>
                   <a href=\"/conf/config\"><i class=\"fa fa-fw fa-table\"></i>Mostrar Configuraciones</a>
               </li>
              {% endif %}

            </ul>
          </div>
        </nav>
        <div id=\"page-wrapper\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                      {% block head %}
                        <h1 class=\"page-header\">Gestor FCT</h1>
                      {% endblock %}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        {% block body %}{% endblock %}
                    </div>
                </div>
        </div>
      </div>
      {% block javascripts %}

      {% endblock %}
    </body>
  </html>
";
    }
}
