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
        $__internal_20244721833437c88fade9602ce3620127ad98a411965e291578e6c14ca4f871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20244721833437c88fade9602ce3620127ad98a411965e291578e6c14ca4f871->enter($__internal_20244721833437c88fade9602ce3620127ad98a411965e291578e6c14ca4f871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20244721833437c88fade9602ce3620127ad98a411965e291578e6c14ca4f871->leave($__internal_20244721833437c88fade9602ce3620127ad98a411965e291578e6c14ca4f871_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e47ee302824baf4fe6e9fdf078d6a212b50712a969989fafbcc9a37a9055ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e47ee302824baf4fe6e9fdf078d6a212b50712a969989fafbcc9a37a9055ba1->enter($__internal_2e47ee302824baf4fe6e9fdf078d6a212b50712a969989fafbcc9a37a9055ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e47ee302824baf4fe6e9fdf078d6a212b50712a969989fafbcc9a37a9055ba1->leave($__internal_2e47ee302824baf4fe6e9fdf078d6a212b50712a969989fafbcc9a37a9055ba1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a882a483e4e0bf3d2ad470ed976239b063d9ce8da7f46f4a061e2d81bf620405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a882a483e4e0bf3d2ad470ed976239b063d9ce8da7f46f4a061e2d81bf620405->enter($__internal_a882a483e4e0bf3d2ad470ed976239b063d9ce8da7f46f4a061e2d81bf620405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a882a483e4e0bf3d2ad470ed976239b063d9ce8da7f46f4a061e2d81bf620405->leave($__internal_a882a483e4e0bf3d2ad470ed976239b063d9ce8da7f46f4a061e2d81bf620405_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a15c88866d75813174807a3c36a3ceba9e90d38aafb0dc89b506b0d992c3a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a15c88866d75813174807a3c36a3ceba9e90d38aafb0dc89b506b0d992c3a77->enter($__internal_6a15c88866d75813174807a3c36a3ceba9e90d38aafb0dc89b506b0d992c3a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a15c88866d75813174807a3c36a3ceba9e90d38aafb0dc89b506b0d992c3a77->leave($__internal_6a15c88866d75813174807a3c36a3ceba9e90d38aafb0dc89b506b0d992c3a77_prof);

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
