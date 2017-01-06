<?php

/* FctBundle:Empresas:nueva.html.twig */
class __TwigTemplate_3ba241361df0bdaeea107a542d65c529c57fb9fc5440505dd9cea2e6ae4580f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Empresas:nueva.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26501f1a0c30f76cc7efbbacc36495fd0c589ddb231f934c0785adeb4b79f7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26501f1a0c30f76cc7efbbacc36495fd0c589ddb231f934c0785adeb4b79f7c8->enter($__internal_26501f1a0c30f76cc7efbbacc36495fd0c589ddb231f934c0785adeb4b79f7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Empresas:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26501f1a0c30f76cc7efbbacc36495fd0c589ddb231f934c0785adeb4b79f7c8->leave($__internal_26501f1a0c30f76cc7efbbacc36495fd0c589ddb231f934c0785adeb4b79f7c8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_29158030606fad6c3c94094a2c0bcb72c1003883c64c506173fa7bbd276166b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29158030606fad6c3c94094a2c0bcb72c1003883c64c506173fa7bbd276166b5->enter($__internal_29158030606fad6c3c94094a2c0bcb72c1003883c64c506173fa7bbd276166b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_29158030606fad6c3c94094a2c0bcb72c1003883c64c506173fa7bbd276166b5->leave($__internal_29158030606fad6c3c94094a2c0bcb72c1003883c64c506173fa7bbd276166b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7167660e5230acf3735981c8676a86069d128a99dc71a1f6798af081a6636dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7167660e5230acf3735981c8676a86069d128a99dc71a1f6798af081a6636dd4->enter($__internal_7167660e5230acf3735981c8676a86069d128a99dc71a1f6798af081a6636dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  ";
        
        $__internal_7167660e5230acf3735981c8676a86069d128a99dc71a1f6798af081a6636dd4->leave($__internal_7167660e5230acf3735981c8676a86069d128a99dc71a1f6798af081a6636dd4_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Empresas:nueva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  47 => 5,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}


{% block body %}

{{form(form)}}
  {% endblock %}
";
    }
}
