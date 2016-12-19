<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c1388f196dbd2671be0a3574a83d022696a07bb68c6a971b8ef9ec72ddc70a39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81ef81e194ce37d0ca03cb5cf00d8ac15b7a538be43887c01a43fcc0ad93e439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ef81e194ce37d0ca03cb5cf00d8ac15b7a538be43887c01a43fcc0ad93e439->enter($__internal_81ef81e194ce37d0ca03cb5cf00d8ac15b7a538be43887c01a43fcc0ad93e439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81ef81e194ce37d0ca03cb5cf00d8ac15b7a538be43887c01a43fcc0ad93e439->leave($__internal_81ef81e194ce37d0ca03cb5cf00d8ac15b7a538be43887c01a43fcc0ad93e439_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_43e3ad2be5aafbf4659f35ebf42f13678e67b38768775927d2b7020ce587a27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e3ad2be5aafbf4659f35ebf42f13678e67b38768775927d2b7020ce587a27c->enter($__internal_43e3ad2be5aafbf4659f35ebf42f13678e67b38768775927d2b7020ce587a27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_43e3ad2be5aafbf4659f35ebf42f13678e67b38768775927d2b7020ce587a27c->leave($__internal_43e3ad2be5aafbf4659f35ebf42f13678e67b38768775927d2b7020ce587a27c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_705ed443ce58ad255297f2d076a22eeeea843d10cfe51e6081ebc8bedcc398bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705ed443ce58ad255297f2d076a22eeeea843d10cfe51e6081ebc8bedcc398bb->enter($__internal_705ed443ce58ad255297f2d076a22eeeea843d10cfe51e6081ebc8bedcc398bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_705ed443ce58ad255297f2d076a22eeeea843d10cfe51e6081ebc8bedcc398bb->leave($__internal_705ed443ce58ad255297f2d076a22eeeea843d10cfe51e6081ebc8bedcc398bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_244152db46c8b19130865e8ed2b7e4fd23cc93165497f47eb171ea166d4fcb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244152db46c8b19130865e8ed2b7e4fd23cc93165497f47eb171ea166d4fcb3c->enter($__internal_244152db46c8b19130865e8ed2b7e4fd23cc93165497f47eb171ea166d4fcb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_244152db46c8b19130865e8ed2b7e4fd23cc93165497f47eb171ea166d4fcb3c->leave($__internal_244152db46c8b19130865e8ed2b7e4fd23cc93165497f47eb171ea166d4fcb3c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
