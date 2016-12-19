<?php

/* FctBundle:alumnos:nuevo.html.twig */
class __TwigTemplate_f1cd2b4e4fcd76dd33e52398743927aef1d6dbee1b49b171cb6342363c9731da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:alumnos:nuevo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_292bd36a072528b43218256fc01d3aa7efa3822846a6d637fcc572933c6270a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292bd36a072528b43218256fc01d3aa7efa3822846a6d637fcc572933c6270a3->enter($__internal_292bd36a072528b43218256fc01d3aa7efa3822846a6d637fcc572933c6270a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:alumnos:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_292bd36a072528b43218256fc01d3aa7efa3822846a6d637fcc572933c6270a3->leave($__internal_292bd36a072528b43218256fc01d3aa7efa3822846a6d637fcc572933c6270a3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e803e1b5b837fe3b97efb4e486ec7dcde2be8ba7afdeda29b4aff69d26603c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e803e1b5b837fe3b97efb4e486ec7dcde2be8ba7afdeda29b4aff69d26603c06->enter($__internal_e803e1b5b837fe3b97efb4e486ec7dcde2be8ba7afdeda29b4aff69d26603c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alumno";
        
        $__internal_e803e1b5b837fe3b97efb4e486ec7dcde2be8ba7afdeda29b4aff69d26603c06->leave($__internal_e803e1b5b837fe3b97efb4e486ec7dcde2be8ba7afdeda29b4aff69d26603c06_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_faa15166694ab66b574bb7d9505084c7811633d1716ea12d17ef2030c4dffb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa15166694ab66b574bb7d9505084c7811633d1716ea12d17ef2030c4dffb6c->enter($__internal_faa15166694ab66b574bb7d9505084c7811633d1716ea12d17ef2030c4dffb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_faa15166694ab66b574bb7d9505084c7811633d1716ea12d17ef2030c4dffb6c->leave($__internal_faa15166694ab66b574bb7d9505084c7811633d1716ea12d17ef2030c4dffb6c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0988a82e760290677755fb5902cbc013e9dba8d894f64181d673e2ca1163602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0988a82e760290677755fb5902cbc013e9dba8d894f64181d673e2ca1163602->enter($__internal_d0988a82e760290677755fb5902cbc013e9dba8d894f64181d673e2ca1163602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<h1>Alumnos - Nuevo Alumno</h1>
";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  ";
        
        $__internal_d0988a82e760290677755fb5902cbc013e9dba8d894f64181d673e2ca1163602->leave($__internal_d0988a82e760290677755fb5902cbc013e9dba8d894f64181d673e2ca1163602_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:alumnos:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  70 => 9,  64 => 8,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Alumno{% endblock %}
  {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
  {% endblock %}


{% block body %}
<h1>Alumnos - Nuevo Alumno</h1>
{{form(form)}}
  {% endblock %}
";
    }
}
