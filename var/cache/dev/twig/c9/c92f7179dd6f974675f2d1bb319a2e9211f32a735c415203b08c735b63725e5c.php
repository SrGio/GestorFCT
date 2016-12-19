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
        $__internal_65835bbd9dd44570788bb54e12da3358ed4c75137e257f08b5d894a220ec2328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65835bbd9dd44570788bb54e12da3358ed4c75137e257f08b5d894a220ec2328->enter($__internal_65835bbd9dd44570788bb54e12da3358ed4c75137e257f08b5d894a220ec2328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_65835bbd9dd44570788bb54e12da3358ed4c75137e257f08b5d894a220ec2328->leave($__internal_65835bbd9dd44570788bb54e12da3358ed4c75137e257f08b5d894a220ec2328_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_75ee2a5de76e653ca1abaf74ca02fc45cf3bdf91247a552acf5ff70352365a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ee2a5de76e653ca1abaf74ca02fc45cf3bdf91247a552acf5ff70352365a0c->enter($__internal_75ee2a5de76e653ca1abaf74ca02fc45cf3bdf91247a552acf5ff70352365a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_75ee2a5de76e653ca1abaf74ca02fc45cf3bdf91247a552acf5ff70352365a0c->leave($__internal_75ee2a5de76e653ca1abaf74ca02fc45cf3bdf91247a552acf5ff70352365a0c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a10a7eaa0f2d4cab49c4f07901d1b908c3416d0f9624ce37693450ad86018685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10a7eaa0f2d4cab49c4f07901d1b908c3416d0f9624ce37693450ad86018685->enter($__internal_a10a7eaa0f2d4cab49c4f07901d1b908c3416d0f9624ce37693450ad86018685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "          <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/grid12.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_a10a7eaa0f2d4cab49c4f07901d1b908c3416d0f9624ce37693450ad86018685->leave($__internal_a10a7eaa0f2d4cab49c4f07901d1b908c3416d0f9624ce37693450ad86018685_prof);

    }

    // line 33
    public function block_head($context, array $blocks = array())
    {
        $__internal_39ab459dbe0fb0adfd64873b81ae56d867778af1cdbeb8c8342f3e7af2e2ab87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ab459dbe0fb0adfd64873b81ae56d867778af1cdbeb8c8342f3e7af2e2ab87->enter($__internal_39ab459dbe0fb0adfd64873b81ae56d867778af1cdbeb8c8342f3e7af2e2ab87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<h1>Gestor FCT</h1>";
        
        $__internal_39ab459dbe0fb0adfd64873b81ae56d867778af1cdbeb8c8342f3e7af2e2ab87->leave($__internal_39ab459dbe0fb0adfd64873b81ae56d867778af1cdbeb8c8342f3e7af2e2ab87_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c261368890ff3b03c22121adad8fdd5e23d2720c4cd1ccec85472e47fdfecb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c261368890ff3b03c22121adad8fdd5e23d2720c4cd1ccec85472e47fdfecb2->enter($__internal_6c261368890ff3b03c22121adad8fdd5e23d2720c4cd1ccec85472e47fdfecb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6c261368890ff3b03c22121adad8fdd5e23d2720c4cd1ccec85472e47fdfecb2->leave($__internal_6c261368890ff3b03c22121adad8fdd5e23d2720c4cd1ccec85472e47fdfecb2_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10c4772e10a17a8aa0f648a8ca9d4a78011e3b22ed8013c4a7f0bab562bca135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c4772e10a17a8aa0f648a8ca9d4a78011e3b22ed8013c4a7f0bab562bca135->enter($__internal_10c4772e10a17a8aa0f648a8ca9d4a78011e3b22ed8013c4a7f0bab562bca135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_10c4772e10a17a8aa0f648a8ca9d4a78011e3b22ed8013c4a7f0bab562bca135->leave($__internal_10c4772e10a17a8aa0f648a8ca9d4a78011e3b22ed8013c4a7f0bab562bca135_prof);

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
