<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_190ab5d92641a678ee4ec42314c893ea09d49adf49a06845cf2f1587df82325c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6410a56f0eaf8be4580db7a2a9cb3b0b23efc4c0ab62e3bb0cea8da91d32dda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6410a56f0eaf8be4580db7a2a9cb3b0b23efc4c0ab62e3bb0cea8da91d32dda8->enter($__internal_6410a56f0eaf8be4580db7a2a9cb3b0b23efc4c0ab62e3bb0cea8da91d32dda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6410a56f0eaf8be4580db7a2a9cb3b0b23efc4c0ab62e3bb0cea8da91d32dda8->leave($__internal_6410a56f0eaf8be4580db7a2a9cb3b0b23efc4c0ab62e3bb0cea8da91d32dda8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6404c83896ec4ee797018a1caa4a0346f97bccaad25e2c57cc88f6dcd65807cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6404c83896ec4ee797018a1caa4a0346f97bccaad25e2c57cc88f6dcd65807cf->enter($__internal_6404c83896ec4ee797018a1caa4a0346f97bccaad25e2c57cc88f6dcd65807cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6404c83896ec4ee797018a1caa4a0346f97bccaad25e2c57cc88f6dcd65807cf->leave($__internal_6404c83896ec4ee797018a1caa4a0346f97bccaad25e2c57cc88f6dcd65807cf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cf1a9e57410736aaba8138688eb483848c65a6a3e7303abd1a23b4fc9ade068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf1a9e57410736aaba8138688eb483848c65a6a3e7303abd1a23b4fc9ade068->enter($__internal_5cf1a9e57410736aaba8138688eb483848c65a6a3e7303abd1a23b4fc9ade068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5cf1a9e57410736aaba8138688eb483848c65a6a3e7303abd1a23b4fc9ade068->leave($__internal_5cf1a9e57410736aaba8138688eb483848c65a6a3e7303abd1a23b4fc9ade068_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fa9210048d077b39a18873b3681a40769686237328c0693a4ae73f3d48b83ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa9210048d077b39a18873b3681a40769686237328c0693a4ae73f3d48b83ff->enter($__internal_5fa9210048d077b39a18873b3681a40769686237328c0693a4ae73f3d48b83ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5fa9210048d077b39a18873b3681a40769686237328c0693a4ae73f3d48b83ff->leave($__internal_5fa9210048d077b39a18873b3681a40769686237328c0693a4ae73f3d48b83ff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
