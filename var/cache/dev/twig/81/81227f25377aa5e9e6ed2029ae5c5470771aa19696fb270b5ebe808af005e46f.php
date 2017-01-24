<?php

/* FctBundle:Default:index.html.twig */
class __TwigTemplate_dd018a87ef6d775974c967df2906ff8a40b0ef90219c3265821b8d43c45e44df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Default:index.html.twig", 1);
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
        $__internal_3bf48151d2fa1237e29c8454e0c2b5dc2eb2a98d358411e82aa82d691e516a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf48151d2fa1237e29c8454e0c2b5dc2eb2a98d358411e82aa82d691e516a69->enter($__internal_3bf48151d2fa1237e29c8454e0c2b5dc2eb2a98d358411e82aa82d691e516a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bf48151d2fa1237e29c8454e0c2b5dc2eb2a98d358411e82aa82d691e516a69->leave($__internal_3bf48151d2fa1237e29c8454e0c2b5dc2eb2a98d358411e82aa82d691e516a69_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_08dcc6a3087d48c03307f7a0c3518c97a5ffef5cd6ef0f835aa31142aecbdca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08dcc6a3087d48c03307f7a0c3518c97a5ffef5cd6ef0f835aa31142aecbdca7->enter($__internal_08dcc6a3087d48c03307f7a0c3518c97a5ffef5cd6ef0f835aa31142aecbdca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_08dcc6a3087d48c03307f7a0c3518c97a5ffef5cd6ef0f835aa31142aecbdca7->leave($__internal_08dcc6a3087d48c03307f7a0c3518c97a5ffef5cd6ef0f835aa31142aecbdca7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7241d0109b7d05a41d560105f252ee587ddedddfc91bacdcbb00df334543e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7241d0109b7d05a41d560105f252ee587ddedddfc91bacdcbb00df334543e70->enter($__internal_b7241d0109b7d05a41d560105f252ee587ddedddfc91bacdcbb00df334543e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
Hola ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "

";
        
        $__internal_b7241d0109b7d05a41d560105f252ee587ddedddfc91bacdcbb00df334543e70->leave($__internal_b7241d0109b7d05a41d560105f252ee587ddedddfc91bacdcbb00df334543e70_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}
{% block body %}

Hola {{ app.user.username }}

{% endblock %}
";
    }
}
