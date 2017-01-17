<?php

/* FctBundle:Profesores:nuevo.html.twig */
class __TwigTemplate_8a873ae3aae93df6a3dcd6c6ba0d61789bb99238d39ffd53455f944b381d3f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Profesores:nuevo.html.twig", 1);
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
        $__internal_d8bba54114e5e8953edf6babea477538d41f1a8825bb0cbdee03564b8fe1d2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bba54114e5e8953edf6babea477538d41f1a8825bb0cbdee03564b8fe1d2b8->enter($__internal_d8bba54114e5e8953edf6babea477538d41f1a8825bb0cbdee03564b8fe1d2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Profesores:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8bba54114e5e8953edf6babea477538d41f1a8825bb0cbdee03564b8fe1d2b8->leave($__internal_d8bba54114e5e8953edf6babea477538d41f1a8825bb0cbdee03564b8fe1d2b8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7b1fc3a85563e11f54ed1b483c2496c9d7153612a7b919d77baa966d2532ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b1fc3a85563e11f54ed1b483c2496c9d7153612a7b919d77baa966d2532ccf->enter($__internal_f7b1fc3a85563e11f54ed1b483c2496c9d7153612a7b919d77baa966d2532ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Profesores";
        
        $__internal_f7b1fc3a85563e11f54ed1b483c2496c9d7153612a7b919d77baa966d2532ccf->leave($__internal_f7b1fc3a85563e11f54ed1b483c2496c9d7153612a7b919d77baa966d2532ccf_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_10b6e65c76e0f0ff5cf1390d79bbc71d0d25aa31aff34d4218d1382426699af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b6e65c76e0f0ff5cf1390d79bbc71d0d25aa31aff34d4218d1382426699af6->enter($__internal_10b6e65c76e0f0ff5cf1390d79bbc71d0d25aa31aff34d4218d1382426699af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  ";
        
        $__internal_10b6e65c76e0f0ff5cf1390d79bbc71d0d25aa31aff34d4218d1382426699af6->leave($__internal_10b6e65c76e0f0ff5cf1390d79bbc71d0d25aa31aff34d4218d1382426699af6_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Profesores:nuevo.html.twig";
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
{% block title %}Profesores{% endblock %}



{% block body %}

{{form(form)}}
  {% endblock %}
";
    }
}
