<?php

/* FctBundle:Users:registrado.html.twig */
class __TwigTemplate_b652fbde13fcba62ca0117ec781db9101cc48acbe4d509db519144f86d93a0e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Users:registrado.html.twig", 1);
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
        $__internal_93ba704cd53aa0ed494c5aca7a1fa2ba1d0091b6905f1ced330deddd6f9db90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ba704cd53aa0ed494c5aca7a1fa2ba1d0091b6905f1ced330deddd6f9db90f->enter($__internal_93ba704cd53aa0ed494c5aca7a1fa2ba1d0091b6905f1ced330deddd6f9db90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Users:registrado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93ba704cd53aa0ed494c5aca7a1fa2ba1d0091b6905f1ced330deddd6f9db90f->leave($__internal_93ba704cd53aa0ed494c5aca7a1fa2ba1d0091b6905f1ced330deddd6f9db90f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e4f759946b7221ea0b67860ba2360dd5442a1f6e387e1c706e869fb02c50d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4f759946b7221ea0b67860ba2360dd5442a1f6e387e1c706e869fb02c50d6c->enter($__internal_4e4f759946b7221ea0b67860ba2360dd5442a1f6e387e1c706e869fb02c50d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_4e4f759946b7221ea0b67860ba2360dd5442a1f6e387e1c706e869fb02c50d6c->leave($__internal_4e4f759946b7221ea0b67860ba2360dd5442a1f6e387e1c706e869fb02c50d6c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b24eb274fbb50a4db3d35360cf05510ea4233fda7f565d3b689a848233f2a68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24eb274fbb50a4db3d35360cf05510ea4233fda7f565d3b689a848233f2a68e->enter($__internal_b24eb274fbb50a4db3d35360cf05510ea4233fda7f565d3b689a848233f2a68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

  ";
        
        $__internal_b24eb274fbb50a4db3d35360cf05510ea4233fda7f565d3b689a848233f2a68e->leave($__internal_b24eb274fbb50a4db3d35360cf05510ea4233fda7f565d3b689a848233f2a68e_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Users:registrado.html.twig";
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


  {% endblock %}
";
    }
}
