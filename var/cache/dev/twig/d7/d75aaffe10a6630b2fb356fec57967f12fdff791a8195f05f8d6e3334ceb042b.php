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
        $__internal_16f3444812f50546de5065723240f1314e2d3ffc22df4e4a80eec9e2c1771b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f3444812f50546de5065723240f1314e2d3ffc22df4e4a80eec9e2c1771b27->enter($__internal_16f3444812f50546de5065723240f1314e2d3ffc22df4e4a80eec9e2c1771b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f3444812f50546de5065723240f1314e2d3ffc22df4e4a80eec9e2c1771b27->leave($__internal_16f3444812f50546de5065723240f1314e2d3ffc22df4e4a80eec9e2c1771b27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_856dff79c1d6d19832c3e28beeb9ebd060383d4c3cf7bf98c1ea8aa52eae6a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856dff79c1d6d19832c3e28beeb9ebd060383d4c3cf7bf98c1ea8aa52eae6a7c->enter($__internal_856dff79c1d6d19832c3e28beeb9ebd060383d4c3cf7bf98c1ea8aa52eae6a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_856dff79c1d6d19832c3e28beeb9ebd060383d4c3cf7bf98c1ea8aa52eae6a7c->leave($__internal_856dff79c1d6d19832c3e28beeb9ebd060383d4c3cf7bf98c1ea8aa52eae6a7c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bac7cf1d7ab8e2bafaac6cdb9767607f42ee2a0585f75f8508c4267c123ea95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bac7cf1d7ab8e2bafaac6cdb9767607f42ee2a0585f75f8508c4267c123ea95->enter($__internal_9bac7cf1d7ab8e2bafaac6cdb9767607f42ee2a0585f75f8508c4267c123ea95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9bac7cf1d7ab8e2bafaac6cdb9767607f42ee2a0585f75f8508c4267c123ea95->leave($__internal_9bac7cf1d7ab8e2bafaac6cdb9767607f42ee2a0585f75f8508c4267c123ea95_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_71234f1be61649f1e26a0603e4c46d705b6988dba6c0e9bcbfbc3de80d15c768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71234f1be61649f1e26a0603e4c46d705b6988dba6c0e9bcbfbc3de80d15c768->enter($__internal_71234f1be61649f1e26a0603e4c46d705b6988dba6c0e9bcbfbc3de80d15c768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_71234f1be61649f1e26a0603e4c46d705b6988dba6c0e9bcbfbc3de80d15c768->leave($__internal_71234f1be61649f1e26a0603e4c46d705b6988dba6c0e9bcbfbc3de80d15c768_prof);

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
