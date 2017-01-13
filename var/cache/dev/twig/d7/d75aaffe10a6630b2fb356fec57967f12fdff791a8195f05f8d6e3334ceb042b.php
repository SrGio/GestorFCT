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
        $__internal_2dde625d82efaca1adce43a7c36ccf27cb41ef808dd57d2409e22838d37daa83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dde625d82efaca1adce43a7c36ccf27cb41ef808dd57d2409e22838d37daa83->enter($__internal_2dde625d82efaca1adce43a7c36ccf27cb41ef808dd57d2409e22838d37daa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dde625d82efaca1adce43a7c36ccf27cb41ef808dd57d2409e22838d37daa83->leave($__internal_2dde625d82efaca1adce43a7c36ccf27cb41ef808dd57d2409e22838d37daa83_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1e583eb9f07ca72ddfd38af74a7c30b9fd2799760ce162c97bca34c05cdceca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e583eb9f07ca72ddfd38af74a7c30b9fd2799760ce162c97bca34c05cdceca->enter($__internal_c1e583eb9f07ca72ddfd38af74a7c30b9fd2799760ce162c97bca34c05cdceca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c1e583eb9f07ca72ddfd38af74a7c30b9fd2799760ce162c97bca34c05cdceca->leave($__internal_c1e583eb9f07ca72ddfd38af74a7c30b9fd2799760ce162c97bca34c05cdceca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c61c4f24b11d94f2b88744a0a5044e815c50bf706e02d3c5caedefa819c2f4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61c4f24b11d94f2b88744a0a5044e815c50bf706e02d3c5caedefa819c2f4e9->enter($__internal_c61c4f24b11d94f2b88744a0a5044e815c50bf706e02d3c5caedefa819c2f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c61c4f24b11d94f2b88744a0a5044e815c50bf706e02d3c5caedefa819c2f4e9->leave($__internal_c61c4f24b11d94f2b88744a0a5044e815c50bf706e02d3c5caedefa819c2f4e9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_570e108c4db88b417e3be55e323824cb938d9dbb946c886fd109e3e7d4955ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570e108c4db88b417e3be55e323824cb938d9dbb946c886fd109e3e7d4955ed4->enter($__internal_570e108c4db88b417e3be55e323824cb938d9dbb946c886fd109e3e7d4955ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_570e108c4db88b417e3be55e323824cb938d9dbb946c886fd109e3e7d4955ed4->leave($__internal_570e108c4db88b417e3be55e323824cb938d9dbb946c886fd109e3e7d4955ed4_prof);

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
