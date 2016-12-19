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
        $__internal_250705e3ab438220d976f0ba138d3e4fbc6c4042551e8b7dc0ff804952483f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250705e3ab438220d976f0ba138d3e4fbc6c4042551e8b7dc0ff804952483f1e->enter($__internal_250705e3ab438220d976f0ba138d3e4fbc6c4042551e8b7dc0ff804952483f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <div class=\"row\">
        <div id=\"head\" class=\"col-md-3\">
          <h1>FCT</h1>
          <p>Gestor de prácticas en empresa</p>
        </div>
        <div class=\"col-md-9\">
        </div>
      </div>
      <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
          <h2>Empresas</h2>
          <a href=\"/empresas/nueva\">Insertar Empresa</a>
          <a href=\"/empresas/all\">Mostrar Empresas</a>
          <h2>Alumnos</h2>
          <a href=\"/alumnos/nuevo\">Insertar Alumnos</a>
          <a href=\"/alumnos/show\">Mostrar Alumnos</a>
        </div>
        <div id=\"contenido\" class=\"col-md-9\">
          <div id=\"head2\">
            ";
        // line 33
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "          </div>
          ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "
        </div>
      </div>
      ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "    </body>
</html>
";
        
        $__internal_250705e3ab438220d976f0ba138d3e4fbc6c4042551e8b7dc0ff804952483f1e->leave($__internal_250705e3ab438220d976f0ba138d3e4fbc6c4042551e8b7dc0ff804952483f1e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_606a856f11cd5c12c6602432cc7eab213722d74dc003c0733c97cf927945f7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606a856f11cd5c12c6602432cc7eab213722d74dc003c0733c97cf927945f7f9->enter($__internal_606a856f11cd5c12c6602432cc7eab213722d74dc003c0733c97cf927945f7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_606a856f11cd5c12c6602432cc7eab213722d74dc003c0733c97cf927945f7f9->leave($__internal_606a856f11cd5c12c6602432cc7eab213722d74dc003c0733c97cf927945f7f9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e9b00238ce73f78d6bfb2de81b8961fe51a8bf9ea06ae8cd5819e9aac686981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9b00238ce73f78d6bfb2de81b8961fe51a8bf9ea06ae8cd5819e9aac686981->enter($__internal_7e9b00238ce73f78d6bfb2de81b8961fe51a8bf9ea06ae8cd5819e9aac686981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "          <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/grid12.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_7e9b00238ce73f78d6bfb2de81b8961fe51a8bf9ea06ae8cd5819e9aac686981->leave($__internal_7e9b00238ce73f78d6bfb2de81b8961fe51a8bf9ea06ae8cd5819e9aac686981_prof);

    }

    // line 33
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6a95822bec3d32ad354f5f447d502f98f4dd598b11dd5f3ed8f8b791bd0aeaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a95822bec3d32ad354f5f447d502f98f4dd598b11dd5f3ed8f8b791bd0aeaa->enter($__internal_b6a95822bec3d32ad354f5f447d502f98f4dd598b11dd5f3ed8f8b791bd0aeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<h1>Gestor FCT</h1>";
        
        $__internal_b6a95822bec3d32ad354f5f447d502f98f4dd598b11dd5f3ed8f8b791bd0aeaa->leave($__internal_b6a95822bec3d32ad354f5f447d502f98f4dd598b11dd5f3ed8f8b791bd0aeaa_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_8accff62d614a3839f4688abcac6b1883530c80d5c5f41ecd302319baebf84f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8accff62d614a3839f4688abcac6b1883530c80d5c5f41ecd302319baebf84f9->enter($__internal_8accff62d614a3839f4688abcac6b1883530c80d5c5f41ecd302319baebf84f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8accff62d614a3839f4688abcac6b1883530c80d5c5f41ecd302319baebf84f9->leave($__internal_8accff62d614a3839f4688abcac6b1883530c80d5c5f41ecd302319baebf84f9_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d34e4328be6cbd7cc3dd2d91b0332c25b870f73d2ed753b2e356492d5809fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d34e4328be6cbd7cc3dd2d91b0332c25b870f73d2ed753b2e356492d5809fc6->enter($__internal_9d34e4328be6cbd7cc3dd2d91b0332c25b870f73d2ed753b2e356492d5809fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9d34e4328be6cbd7cc3dd2d91b0332c25b870f73d2ed753b2e356492d5809fc6->leave($__internal_9d34e4328be6cbd7cc3dd2d91b0332c25b870f73d2ed753b2e356492d5809fc6_prof);

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
        return array (  145 => 39,  134 => 35,  122 => 33,  113 => 8,  108 => 7,  102 => 6,  90 => 5,  81 => 40,  79 => 39,  74 => 36,  72 => 35,  69 => 34,  67 => 33,  42 => 11,  39 => 10,  37 => 6,  33 => 5,  27 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
          <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
          <link rel=\"stylesheet\" href=\"{{ asset('css/grid12.css') }}\">
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
      <div class=\"row\">
        <div id=\"head\" class=\"col-md-3\">
          <h1>FCT</h1>
          <p>Gestor de prácticas en empresa</p>
        </div>
        <div class=\"col-md-9\">
        </div>
      </div>
      <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
          <h2>Empresas</h2>
          <a href=\"/empresas/nueva\">Insertar Empresa</a>
          <a href=\"/empresas/all\">Mostrar Empresas</a>
          <h2>Alumnos</h2>
          <a href=\"/alumnos/nuevo\">Insertar Alumnos</a>
          <a href=\"/alumnos/show\">Mostrar Alumnos</a>
        </div>
        <div id=\"contenido\" class=\"col-md-9\">
          <div id=\"head2\">
            {% block head %}<h1>Gestor FCT</h1>{% endblock %}
          </div>
          {% block body %}{% endblock %}

        </div>
      </div>
      {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
