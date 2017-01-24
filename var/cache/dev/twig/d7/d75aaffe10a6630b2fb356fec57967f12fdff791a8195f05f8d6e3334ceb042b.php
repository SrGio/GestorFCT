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
        $__internal_eb9f22d90c57967511937c91089aa5662c65017a805541f783386101809d3b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9f22d90c57967511937c91089aa5662c65017a805541f783386101809d3b30->enter($__internal_eb9f22d90c57967511937c91089aa5662c65017a805541f783386101809d3b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb9f22d90c57967511937c91089aa5662c65017a805541f783386101809d3b30->leave($__internal_eb9f22d90c57967511937c91089aa5662c65017a805541f783386101809d3b30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4396dc276329fd2b53bd3bb5fa0fff0a2be0ff1331c2989f0fb28a3882769645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4396dc276329fd2b53bd3bb5fa0fff0a2be0ff1331c2989f0fb28a3882769645->enter($__internal_4396dc276329fd2b53bd3bb5fa0fff0a2be0ff1331c2989f0fb28a3882769645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4396dc276329fd2b53bd3bb5fa0fff0a2be0ff1331c2989f0fb28a3882769645->leave($__internal_4396dc276329fd2b53bd3bb5fa0fff0a2be0ff1331c2989f0fb28a3882769645_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_667e616b0ac46659ed9a7a76403926706bb783cf3caa3d0d0eee9808d9b456e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667e616b0ac46659ed9a7a76403926706bb783cf3caa3d0d0eee9808d9b456e5->enter($__internal_667e616b0ac46659ed9a7a76403926706bb783cf3caa3d0d0eee9808d9b456e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_667e616b0ac46659ed9a7a76403926706bb783cf3caa3d0d0eee9808d9b456e5->leave($__internal_667e616b0ac46659ed9a7a76403926706bb783cf3caa3d0d0eee9808d9b456e5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e4903ae4e9379784ec38f01bc891bf007a0b1943b6546dd3450fce04c678dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4903ae4e9379784ec38f01bc891bf007a0b1943b6546dd3450fce04c678dd7->enter($__internal_4e4903ae4e9379784ec38f01bc891bf007a0b1943b6546dd3450fce04c678dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4e4903ae4e9379784ec38f01bc891bf007a0b1943b6546dd3450fce04c678dd7->leave($__internal_4e4903ae4e9379784ec38f01bc891bf007a0b1943b6546dd3450fce04c678dd7_prof);

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
