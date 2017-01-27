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
        $__internal_24d032a22b6bfba9dd2522b2bf52eb4d30e02bc774902936f7835c6d23d1a383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d032a22b6bfba9dd2522b2bf52eb4d30e02bc774902936f7835c6d23d1a383->enter($__internal_24d032a22b6bfba9dd2522b2bf52eb4d30e02bc774902936f7835c6d23d1a383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "

            </ul>
          </div>
        </nav>
        <div id=\"page-wrapper\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                      ";
        // line 171
        $this->displayBlock('head', $context, $blocks);
        // line 174
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 178
        $this->displayBlock('body', $context, $blocks);
        // line 179
        echo "                    </div>
                </div>
        </div>
      </div>
      ";
        // line 183
        $this->displayBlock('javascripts', $context, $blocks);
        // line 186
        echo "    </body>
  </html>
";
        
        $__internal_24d032a22b6bfba9dd2522b2bf52eb4d30e02bc774902936f7835c6d23d1a383->leave($__internal_24d032a22b6bfba9dd2522b2bf52eb4d30e02bc774902936f7835c6d23d1a383_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ffbf47a5270ff3170ac438653801497e195ccaa31891eaeac0976f5bf88652a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffbf47a5270ff3170ac438653801497e195ccaa31891eaeac0976f5bf88652a->enter($__internal_0ffbf47a5270ff3170ac438653801497e195ccaa31891eaeac0976f5bf88652a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0ffbf47a5270ff3170ac438653801497e195ccaa31891eaeac0976f5bf88652a->leave($__internal_0ffbf47a5270ff3170ac438653801497e195ccaa31891eaeac0976f5bf88652a_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06976f68ec73b9e4a60c08503b995239c9bc17866ab70ae89d852e23081e3a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06976f68ec73b9e4a60c08503b995239c9bc17866ab70ae89d852e23081e3a7a->enter($__internal_06976f68ec73b9e4a60c08503b995239c9bc17866ab70ae89d852e23081e3a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_06976f68ec73b9e4a60c08503b995239c9bc17866ab70ae89d852e23081e3a7a->leave($__internal_06976f68ec73b9e4a60c08503b995239c9bc17866ab70ae89d852e23081e3a7a_prof);

    }

    // line 171
    public function block_head($context, array $blocks = array())
    {
        $__internal_745c56239d1bf3dd7d68e368cb5d0a263911cf6ca7c0240ca6403e78a4fa47df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745c56239d1bf3dd7d68e368cb5d0a263911cf6ca7c0240ca6403e78a4fa47df->enter($__internal_745c56239d1bf3dd7d68e368cb5d0a263911cf6ca7c0240ca6403e78a4fa47df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 172
        echo "                        <h1 class=\"page-header\">Gestor FCT</h1>
                      ";
        
        $__internal_745c56239d1bf3dd7d68e368cb5d0a263911cf6ca7c0240ca6403e78a4fa47df->leave($__internal_745c56239d1bf3dd7d68e368cb5d0a263911cf6ca7c0240ca6403e78a4fa47df_prof);

    }

    // line 178
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f2fb1c3454d91a52d56cc860391210bbaa0eabf2bc1e0a7e7bb3a41a3fc2699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2fb1c3454d91a52d56cc860391210bbaa0eabf2bc1e0a7e7bb3a41a3fc2699->enter($__internal_4f2fb1c3454d91a52d56cc860391210bbaa0eabf2bc1e0a7e7bb3a41a3fc2699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4f2fb1c3454d91a52d56cc860391210bbaa0eabf2bc1e0a7e7bb3a41a3fc2699->leave($__internal_4f2fb1c3454d91a52d56cc860391210bbaa0eabf2bc1e0a7e7bb3a41a3fc2699_prof);

    }

    // line 183
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff7074d4426c4a4169d06d5f3b18c24681c994f864412c4d38c1715c8c53ccbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7074d4426c4a4169d06d5f3b18c24681c994f864412c4d38c1715c8c53ccbc->enter($__internal_ff7074d4426c4a4169d06d5f3b18c24681c994f864412c4d38c1715c8c53ccbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 184
        echo "
      ";
        
        $__internal_ff7074d4426c4a4169d06d5f3b18c24681c994f864412c4d38c1715c8c53ccbc->leave($__internal_ff7074d4426c4a4169d06d5f3b18c24681c994f864412c4d38c1715c8c53ccbc_prof);

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
        return array (  316 => 184,  310 => 183,  299 => 178,  291 => 172,  285 => 171,  276 => 17,  272 => 16,  268 => 15,  264 => 14,  259 => 13,  253 => 12,  241 => 11,  232 => 186,  230 => 183,  224 => 179,  222 => 178,  216 => 174,  214 => 171,  203 => 162,  197 => 158,  195 => 157,  80 => 44,  74 => 42,  72 => 41,  48 => 20,  45 => 19,  43 => 12,  39 => 11,  27 => 1,);
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
