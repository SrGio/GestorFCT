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
        $__internal_875bcf15b4605a1c01df84692595c8f5e322d35bbec36e48eed7933a38efd247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875bcf15b4605a1c01df84692595c8f5e322d35bbec36e48eed7933a38efd247->enter($__internal_875bcf15b4605a1c01df84692595c8f5e322d35bbec36e48eed7933a38efd247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
                <a href=\"/register\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Iniciar Sesión <b class=\"caret\"></b></a>
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
            </ul>
          </div>
        </nav>
        <div id=\"page-wrapper\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                      ";
        // line 160
        $this->displayBlock('head', $context, $blocks);
        // line 163
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        ";
        // line 167
        $this->displayBlock('body', $context, $blocks);
        // line 168
        echo "                    </div>
                </div>
        </div>
      </div>
      ";
        // line 172
        $this->displayBlock('javascripts', $context, $blocks);
        // line 175
        echo "    </body>
</html>
";
        
        $__internal_875bcf15b4605a1c01df84692595c8f5e322d35bbec36e48eed7933a38efd247->leave($__internal_875bcf15b4605a1c01df84692595c8f5e322d35bbec36e48eed7933a38efd247_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_1aea76434a0b0eeb3def37796856031e7f50c5b2aa7d0205ddc027c480649fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aea76434a0b0eeb3def37796856031e7f50c5b2aa7d0205ddc027c480649fab->enter($__internal_1aea76434a0b0eeb3def37796856031e7f50c5b2aa7d0205ddc027c480649fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1aea76434a0b0eeb3def37796856031e7f50c5b2aa7d0205ddc027c480649fab->leave($__internal_1aea76434a0b0eeb3def37796856031e7f50c5b2aa7d0205ddc027c480649fab_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_072e57dd40b536fb644a4aef2d677b78e7974b4fb565794b9e31dd767eb87091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072e57dd40b536fb644a4aef2d677b78e7974b4fb565794b9e31dd767eb87091->enter($__internal_072e57dd40b536fb644a4aef2d677b78e7974b4fb565794b9e31dd767eb87091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
          <!--<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/grid12.css"), "html", null, true);
        echo "\">-->
        ";
        
        $__internal_072e57dd40b536fb644a4aef2d677b78e7974b4fb565794b9e31dd767eb87091->leave($__internal_072e57dd40b536fb644a4aef2d677b78e7974b4fb565794b9e31dd767eb87091_prof);

    }

    // line 160
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b2b043197378a6d949cf0ed5108a0fbd4ac9c93bd656221eda43d9f4edf5063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2b043197378a6d949cf0ed5108a0fbd4ac9c93bd656221eda43d9f4edf5063->enter($__internal_4b2b043197378a6d949cf0ed5108a0fbd4ac9c93bd656221eda43d9f4edf5063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 161
        echo "                        <h1 class=\"page-header\">Gestor FCT</h1>
                      ";
        
        $__internal_4b2b043197378a6d949cf0ed5108a0fbd4ac9c93bd656221eda43d9f4edf5063->leave($__internal_4b2b043197378a6d949cf0ed5108a0fbd4ac9c93bd656221eda43d9f4edf5063_prof);

    }

    // line 167
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f367f03513b3ebff38555a49170fcd6778b0b8a886b36f72dc156bb65280294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f367f03513b3ebff38555a49170fcd6778b0b8a886b36f72dc156bb65280294->enter($__internal_8f367f03513b3ebff38555a49170fcd6778b0b8a886b36f72dc156bb65280294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f367f03513b3ebff38555a49170fcd6778b0b8a886b36f72dc156bb65280294->leave($__internal_8f367f03513b3ebff38555a49170fcd6778b0b8a886b36f72dc156bb65280294_prof);

    }

    // line 172
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_46db272e671ded0f508dab9be84f02add41348a8442318dd87346dd0eb8e6080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46db272e671ded0f508dab9be84f02add41348a8442318dd87346dd0eb8e6080->enter($__internal_46db272e671ded0f508dab9be84f02add41348a8442318dd87346dd0eb8e6080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 173
        echo "
      ";
        
        $__internal_46db272e671ded0f508dab9be84f02add41348a8442318dd87346dd0eb8e6080->leave($__internal_46db272e671ded0f508dab9be84f02add41348a8442318dd87346dd0eb8e6080_prof);

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
        return array (  293 => 173,  287 => 172,  276 => 167,  268 => 161,  262 => 160,  253 => 17,  249 => 16,  245 => 15,  241 => 14,  236 => 13,  230 => 12,  218 => 11,  209 => 175,  207 => 172,  201 => 168,  199 => 167,  193 => 163,  191 => 160,  48 => 20,  45 => 19,  43 => 12,  39 => 11,  27 => 1,);
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
          <!--<link rel=\"stylesheet\" href=\"{{ asset('css/grid12.css') }}\">-->
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
                <a href=\"/register\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Iniciar Sesión <b class=\"caret\"></b></a>
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
                    <div class=\"col-lg-6\">
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
