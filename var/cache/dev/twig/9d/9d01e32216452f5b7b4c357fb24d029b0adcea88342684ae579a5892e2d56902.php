<?php

/* FctBundle:Users:bienvenido.html.twig */
class __TwigTemplate_a46326c334ad53ab57b0cead5bdb2c96805a366deefbbac188896a1e12526511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Users:bienvenido.html.twig", 1);
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
        $__internal_3d58facae82f1d15b91b8b3035b55f54386d1eb171bcaab766bf7ab37e4fdbb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d58facae82f1d15b91b8b3035b55f54386d1eb171bcaab766bf7ab37e4fdbb6->enter($__internal_3d58facae82f1d15b91b8b3035b55f54386d1eb171bcaab766bf7ab37e4fdbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Users:bienvenido.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d58facae82f1d15b91b8b3035b55f54386d1eb171bcaab766bf7ab37e4fdbb6->leave($__internal_3d58facae82f1d15b91b8b3035b55f54386d1eb171bcaab766bf7ab37e4fdbb6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6591a6ebca1a910fd94d0f9235ced762cfb5739e49fc9785165b525ee0cf9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6591a6ebca1a910fd94d0f9235ced762cfb5739e49fc9785165b525ee0cf9c5->enter($__internal_d6591a6ebca1a910fd94d0f9235ced762cfb5739e49fc9785165b525ee0cf9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_d6591a6ebca1a910fd94d0f9235ced762cfb5739e49fc9785165b525ee0cf9c5->leave($__internal_d6591a6ebca1a910fd94d0f9235ced762cfb5739e49fc9785165b525ee0cf9c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1272dfffe871c0d0b9a632bae05c74ee031e79a22d98ab83e68403ed4024979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1272dfffe871c0d0b9a632bae05c74ee031e79a22d98ab83e68403ed4024979->enter($__internal_e1272dfffe871c0d0b9a632bae05c74ee031e79a22d98ab83e68403ed4024979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  ¡Bienvenido!

  ";
        
        $__internal_e1272dfffe871c0d0b9a632bae05c74ee031e79a22d98ab83e68403ed4024979->leave($__internal_e1272dfffe871c0d0b9a632bae05c74ee031e79a22d98ab83e68403ed4024979_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Users:bienvenido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}
{% block body %}
  ¡Bienvenido!

  {% endblock %}
";
    }
}
