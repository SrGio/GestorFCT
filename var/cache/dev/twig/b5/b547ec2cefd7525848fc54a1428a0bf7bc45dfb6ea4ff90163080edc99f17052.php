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
        $__internal_bb355b186323ab4b1eb36f241bbd7ec3248d29469e89cedee6287544385c622e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb355b186323ab4b1eb36f241bbd7ec3248d29469e89cedee6287544385c622e->enter($__internal_bb355b186323ab4b1eb36f241bbd7ec3248d29469e89cedee6287544385c622e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb355b186323ab4b1eb36f241bbd7ec3248d29469e89cedee6287544385c622e->leave($__internal_bb355b186323ab4b1eb36f241bbd7ec3248d29469e89cedee6287544385c622e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3aedb440cd2283a44d008993e01fb6b0773e302fbdef3b9468ff40866b11dd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aedb440cd2283a44d008993e01fb6b0773e302fbdef3b9468ff40866b11dd34->enter($__internal_3aedb440cd2283a44d008993e01fb6b0773e302fbdef3b9468ff40866b11dd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3aedb440cd2283a44d008993e01fb6b0773e302fbdef3b9468ff40866b11dd34->leave($__internal_3aedb440cd2283a44d008993e01fb6b0773e302fbdef3b9468ff40866b11dd34_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1244b370d790341ea19cda23c0e76df5568f3b9625e1f95aa7ebe6f872410881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1244b370d790341ea19cda23c0e76df5568f3b9625e1f95aa7ebe6f872410881->enter($__internal_1244b370d790341ea19cda23c0e76df5568f3b9625e1f95aa7ebe6f872410881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1244b370d790341ea19cda23c0e76df5568f3b9625e1f95aa7ebe6f872410881->leave($__internal_1244b370d790341ea19cda23c0e76df5568f3b9625e1f95aa7ebe6f872410881_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51fa5d4b5b05b7ffe5be742b9ab729f3fe01fb4730ca3b2de10b5f16c5f3db87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fa5d4b5b05b7ffe5be742b9ab729f3fe01fb4730ca3b2de10b5f16c5f3db87->enter($__internal_51fa5d4b5b05b7ffe5be742b9ab729f3fe01fb4730ca3b2de10b5f16c5f3db87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51fa5d4b5b05b7ffe5be742b9ab729f3fe01fb4730ca3b2de10b5f16c5f3db87->leave($__internal_51fa5d4b5b05b7ffe5be742b9ab729f3fe01fb4730ca3b2de10b5f16c5f3db87_prof);

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
