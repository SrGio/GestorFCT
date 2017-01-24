<?php

/* FctBundle:Alumnos:nuevo.html.twig */
class __TwigTemplate_cd7a4c312705fd27f15796ba9dc013c3880938751f3ec78f471bd3d4d20c00b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Alumnos:nuevo.html.twig", 1);
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
        $__internal_da342adc7187d0c373ad005fd0a725629f1f1909e96a8f2f4c3bd5539b9d6def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da342adc7187d0c373ad005fd0a725629f1f1909e96a8f2f4c3bd5539b9d6def->enter($__internal_da342adc7187d0c373ad005fd0a725629f1f1909e96a8f2f4c3bd5539b9d6def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Alumnos:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da342adc7187d0c373ad005fd0a725629f1f1909e96a8f2f4c3bd5539b9d6def->leave($__internal_da342adc7187d0c373ad005fd0a725629f1f1909e96a8f2f4c3bd5539b9d6def_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_585e2d0ec2adf8a016c046757ac0708533042413bf4cffa623506240510c8acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585e2d0ec2adf8a016c046757ac0708533042413bf4cffa623506240510c8acf->enter($__internal_585e2d0ec2adf8a016c046757ac0708533042413bf4cffa623506240510c8acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alumno";
        
        $__internal_585e2d0ec2adf8a016c046757ac0708533042413bf4cffa623506240510c8acf->leave($__internal_585e2d0ec2adf8a016c046757ac0708533042413bf4cffa623506240510c8acf_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05c2e0208a24f4f1462726b4a49df3bfa60fbc7dfe68e4ebc63750181dc87407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c2e0208a24f4f1462726b4a49df3bfa60fbc7dfe68e4ebc63750181dc87407->enter($__internal_05c2e0208a24f4f1462726b4a49df3bfa60fbc7dfe68e4ebc63750181dc87407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_05c2e0208a24f4f1462726b4a49df3bfa60fbc7dfe68e4ebc63750181dc87407->leave($__internal_05c2e0208a24f4f1462726b4a49df3bfa60fbc7dfe68e4ebc63750181dc87407_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6ba3e489efcb2f25840278fce5fe8c7b4554691cdeab6102e362f36ee015404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ba3e489efcb2f25840278fce5fe8c7b4554691cdeab6102e362f36ee015404->enter($__internal_b6ba3e489efcb2f25840278fce5fe8c7b4554691cdeab6102e362f36ee015404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<h1>Alumnos - Nuevo Alumno</h1>
";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  ";
        
        $__internal_b6ba3e489efcb2f25840278fce5fe8c7b4554691cdeab6102e362f36ee015404->leave($__internal_b6ba3e489efcb2f25840278fce5fe8c7b4554691cdeab6102e362f36ee015404_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Alumnos:nuevo.html.twig";
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
