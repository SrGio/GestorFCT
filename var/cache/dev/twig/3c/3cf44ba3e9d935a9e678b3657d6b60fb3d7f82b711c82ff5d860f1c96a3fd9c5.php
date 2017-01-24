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
        $__internal_da481e74d8fa9f2dd38e68371bb29edc66568859f19aa7fbbcf4a65c7160273e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da481e74d8fa9f2dd38e68371bb29edc66568859f19aa7fbbcf4a65c7160273e->enter($__internal_da481e74d8fa9f2dd38e68371bb29edc66568859f19aa7fbbcf4a65c7160273e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Alumnos:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da481e74d8fa9f2dd38e68371bb29edc66568859f19aa7fbbcf4a65c7160273e->leave($__internal_da481e74d8fa9f2dd38e68371bb29edc66568859f19aa7fbbcf4a65c7160273e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_992c3b591d8dc431483ab0c63acbad6ee322428f65943e000d43755fbcd3ea25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992c3b591d8dc431483ab0c63acbad6ee322428f65943e000d43755fbcd3ea25->enter($__internal_992c3b591d8dc431483ab0c63acbad6ee322428f65943e000d43755fbcd3ea25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alumno";
        
        $__internal_992c3b591d8dc431483ab0c63acbad6ee322428f65943e000d43755fbcd3ea25->leave($__internal_992c3b591d8dc431483ab0c63acbad6ee322428f65943e000d43755fbcd3ea25_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_02b43141dc5b0ec876a25e676bb9a209620268fee737182d2de878457361f531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b43141dc5b0ec876a25e676bb9a209620268fee737182d2de878457361f531->enter($__internal_02b43141dc5b0ec876a25e676bb9a209620268fee737182d2de878457361f531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  ";
        
        $__internal_02b43141dc5b0ec876a25e676bb9a209620268fee737182d2de878457361f531->leave($__internal_02b43141dc5b0ec876a25e676bb9a209620268fee737182d2de878457361f531_prof);

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
