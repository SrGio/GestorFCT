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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f610720b08cfe3d7e99445c99e703049ce1fce1bedee6512c46bc6a779d7380d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f610720b08cfe3d7e99445c99e703049ce1fce1bedee6512c46bc6a779d7380d->enter($__internal_f610720b08cfe3d7e99445c99e703049ce1fce1bedee6512c46bc6a779d7380d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 9
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_f610720b08cfe3d7e99445c99e703049ce1fce1bedee6512c46bc6a779d7380d->leave($__internal_f610720b08cfe3d7e99445c99e703049ce1fce1bedee6512c46bc6a779d7380d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d5c2a0f0d56902e00b9c89a4dfdaa0bb8fb4b3ae3ac8a943b8d738c0941f561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5c2a0f0d56902e00b9c89a4dfdaa0bb8fb4b3ae3ac8a943b8d738c0941f561->enter($__internal_4d5c2a0f0d56902e00b9c89a4dfdaa0bb8fb4b3ae3ac8a943b8d738c0941f561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4d5c2a0f0d56902e00b9c89a4dfdaa0bb8fb4b3ae3ac8a943b8d738c0941f561->leave($__internal_4d5c2a0f0d56902e00b9c89a4dfdaa0bb8fb4b3ae3ac8a943b8d738c0941f561_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d08f9b5b0477dfd7162f584b7988882ca7971e5a49afb5b796083eaf2c77e0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08f9b5b0477dfd7162f584b7988882ca7971e5a49afb5b796083eaf2c77e0e2->enter($__internal_d08f9b5b0477dfd7162f584b7988882ca7971e5a49afb5b796083eaf2c77e0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        ";
        
        $__internal_d08f9b5b0477dfd7162f584b7988882ca7971e5a49afb5b796083eaf2c77e0e2->leave($__internal_d08f9b5b0477dfd7162f584b7988882ca7971e5a49afb5b796083eaf2c77e0e2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_874de1870d1ccd3b6707fb960ba0cb0a2067cca8c52437e0cb3d29140a71d0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874de1870d1ccd3b6707fb960ba0cb0a2067cca8c52437e0cb3d29140a71d0d5->enter($__internal_874de1870d1ccd3b6707fb960ba0cb0a2067cca8c52437e0cb3d29140a71d0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_874de1870d1ccd3b6707fb960ba0cb0a2067cca8c52437e0cb3d29140a71d0d5->leave($__internal_874de1870d1ccd3b6707fb960ba0cb0a2067cca8c52437e0cb3d29140a71d0d5_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8f97e1b7eacc0dafeb840268421049dc95d2d83639f18c4556b83a11f827d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f97e1b7eacc0dafeb840268421049dc95d2d83639f18c4556b83a11f827d40->enter($__internal_a8f97e1b7eacc0dafeb840268421049dc95d2d83639f18c4556b83a11f827d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a8f97e1b7eacc0dafeb840268421049dc95d2d83639f18c4556b83a11f827d40->leave($__internal_a8f97e1b7eacc0dafeb840268421049dc95d2d83639f18c4556b83a11f827d40_prof);

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
        return array (  98 => 14,  87 => 13,  79 => 7,  73 => 6,  61 => 5,  52 => 15,  49 => 14,  47 => 13,  41 => 10,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
