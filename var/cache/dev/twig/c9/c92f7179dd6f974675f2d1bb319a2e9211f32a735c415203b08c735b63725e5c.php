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
        $__internal_2567ee690449f7e7ce10c4db106d02545fe0eb20b49578d623f514611a204eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2567ee690449f7e7ce10c4db106d02545fe0eb20b49578d623f514611a204eb4->enter($__internal_2567ee690449f7e7ce10c4db106d02545fe0eb20b49578d623f514611a204eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
                <a href=\"/usuarios/logout\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Salir <b class=\"caret\"></b></a>
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
        
        $__internal_2567ee690449f7e7ce10c4db106d02545fe0eb20b49578d623f514611a204eb4->leave($__internal_2567ee690449f7e7ce10c4db106d02545fe0eb20b49578d623f514611a204eb4_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_49e2530ed13219be913128ab96894fc386b26906fc8c7955e45500a2572435bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e2530ed13219be913128ab96894fc386b26906fc8c7955e45500a2572435bc->enter($__internal_49e2530ed13219be913128ab96894fc386b26906fc8c7955e45500a2572435bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_49e2530ed13219be913128ab96894fc386b26906fc8c7955e45500a2572435bc->leave($__internal_49e2530ed13219be913128ab96894fc386b26906fc8c7955e45500a2572435bc_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce6178fe69fb6d729e1e100d1e09df82e794fdbe833c33b5520a537d5fff7c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6178fe69fb6d729e1e100d1e09df82e794fdbe833c33b5520a537d5fff7c58->enter($__internal_ce6178fe69fb6d729e1e100d1e09df82e794fdbe833c33b5520a537d5fff7c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ce6178fe69fb6d729e1e100d1e09df82e794fdbe833c33b5520a537d5fff7c58->leave($__internal_ce6178fe69fb6d729e1e100d1e09df82e794fdbe833c33b5520a537d5fff7c58_prof);

    }

    // line 160
    public function block_head($context, array $blocks = array())
    {
        $__internal_6270b636881e8f447564b3b670dc78bb3bf49003975c1cbaf01a82b04bfeb411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6270b636881e8f447564b3b670dc78bb3bf49003975c1cbaf01a82b04bfeb411->enter($__internal_6270b636881e8f447564b3b670dc78bb3bf49003975c1cbaf01a82b04bfeb411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 161
        echo "                        <h1 class=\"page-header\">Gestor FCT</h1>
                      ";
        
        $__internal_6270b636881e8f447564b3b670dc78bb3bf49003975c1cbaf01a82b04bfeb411->leave($__internal_6270b636881e8f447564b3b670dc78bb3bf49003975c1cbaf01a82b04bfeb411_prof);

    }

    // line 167
    public function block_body($context, array $blocks = array())
    {
        $__internal_984ebcb308260475ddc98058b2e9cafb0d99a29a7eb2a6b3f2043dd1097ab38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984ebcb308260475ddc98058b2e9cafb0d99a29a7eb2a6b3f2043dd1097ab38d->enter($__internal_984ebcb308260475ddc98058b2e9cafb0d99a29a7eb2a6b3f2043dd1097ab38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_984ebcb308260475ddc98058b2e9cafb0d99a29a7eb2a6b3f2043dd1097ab38d->leave($__internal_984ebcb308260475ddc98058b2e9cafb0d99a29a7eb2a6b3f2043dd1097ab38d_prof);

    }

    // line 172
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d189ef117bbd1a0ca052ac5e946abc6f55eb320e79ce6716ece44a274e1a27e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d189ef117bbd1a0ca052ac5e946abc6f55eb320e79ce6716ece44a274e1a27e8->enter($__internal_d189ef117bbd1a0ca052ac5e946abc6f55eb320e79ce6716ece44a274e1a27e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 173
        echo "
      ";
        
        $__internal_d189ef117bbd1a0ca052ac5e946abc6f55eb320e79ce6716ece44a274e1a27e8->leave($__internal_d189ef117bbd1a0ca052ac5e946abc6f55eb320e79ce6716ece44a274e1a27e8_prof);

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
                <a href=\"/usuarios/logout\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Salir <b class=\"caret\"></b></a>
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
