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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e7887e7b757d30e5f4e81c842b715d1781db303b575eee3298aa15165536d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7887e7b757d30e5f4e81c842b715d1781db303b575eee3298aa15165536d7e->enter($__internal_3e7887e7b757d30e5f4e81c842b715d1781db303b575eee3298aa15165536d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Alumnos:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e7887e7b757d30e5f4e81c842b715d1781db303b575eee3298aa15165536d7e->leave($__internal_3e7887e7b757d30e5f4e81c842b715d1781db303b575eee3298aa15165536d7e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9247ac3da8b114e1e1bef46a39de1cd8ced086fb339896c8f87fd44966dd4c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9247ac3da8b114e1e1bef46a39de1cd8ced086fb339896c8f87fd44966dd4c85->enter($__internal_9247ac3da8b114e1e1bef46a39de1cd8ced086fb339896c8f87fd44966dd4c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alumno";
        
        $__internal_9247ac3da8b114e1e1bef46a39de1cd8ced086fb339896c8f87fd44966dd4c85->leave($__internal_9247ac3da8b114e1e1bef46a39de1cd8ced086fb339896c8f87fd44966dd4c85_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_651a12fe3c6c5e522b9e961279d551d1354ebe7c20b0f870d5046f8dc99c1681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651a12fe3c6c5e522b9e961279d551d1354ebe7c20b0f870d5046f8dc99c1681->enter($__internal_651a12fe3c6c5e522b9e961279d551d1354ebe7c20b0f870d5046f8dc99c1681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
  ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_651a12fe3c6c5e522b9e961279d551d1354ebe7c20b0f870d5046f8dc99c1681->leave($__internal_651a12fe3c6c5e522b9e961279d551d1354ebe7c20b0f870d5046f8dc99c1681_prof);

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
        return array (  56 => 8,  53 => 7,  47 => 6,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Alumno{% endblock %}



{% block body %}

  {{form(form)}}
{% endblock %}
";
    }
}
