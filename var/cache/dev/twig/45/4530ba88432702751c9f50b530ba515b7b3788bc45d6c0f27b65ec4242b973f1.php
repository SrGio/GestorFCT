<?php

/* FctBundle:Users:login.html.twig */
class __TwigTemplate_fe7a8213742f8e326c94916d7bdbbb1b4c2b396928b1d8164e970863dd475fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Users:login.html.twig", 1);
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
        $__internal_eb428b07696f2f1f9c8786196eaf2ced2e0ea093f87dd358af1ef9f06cd2a8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb428b07696f2f1f9c8786196eaf2ced2e0ea093f87dd358af1ef9f06cd2a8c1->enter($__internal_eb428b07696f2f1f9c8786196eaf2ced2e0ea093f87dd358af1ef9f06cd2a8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Users:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb428b07696f2f1f9c8786196eaf2ced2e0ea093f87dd358af1ef9f06cd2a8c1->leave($__internal_eb428b07696f2f1f9c8786196eaf2ced2e0ea093f87dd358af1ef9f06cd2a8c1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_79a44d52b841621b345e6c1d04dd9c46eeab446a666b4bd0cb65e8c29c50cbfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a44d52b841621b345e6c1d04dd9c46eeab446a666b4bd0cb65e8c29c50cbfd->enter($__internal_79a44d52b841621b345e6c1d04dd9c46eeab446a666b4bd0cb65e8c29c50cbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_79a44d52b841621b345e6c1d04dd9c46eeab446a666b4bd0cb65e8c29c50cbfd->leave($__internal_79a44d52b841621b345e6c1d04dd9c46eeab446a666b4bd0cb65e8c29c50cbfd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b082bef8d3dbb9de22bb62cbfb6fa9a1328a78f3b1cca1f52081706c1f5f1746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b082bef8d3dbb9de22bb62cbfb6fa9a1328a78f3b1cca1f52081706c1f5f1746->enter($__internal_b082bef8d3dbb9de22bb62cbfb6fa9a1328a78f3b1cca1f52081706c1f5f1746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 20
        echo "    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
    <label for=\"remember_me\">Recuerdame</label>

    <button type=\"submit\">login</button>
</form>
<a href=\"/usuarios/registro\">Registrarse</a>

";
        
        $__internal_b082bef8d3dbb9de22bb62cbfb6fa9a1328a78f3b1cca1f52081706c1f5f1746->leave($__internal_b082bef8d3dbb9de22bb62cbfb6fa9a1328a78f3b1cca1f52081706c1f5f1746_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Users:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  72 => 11,  67 => 9,  64 => 8,  58 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}
{% block body %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
    <label for=\"remember_me\">Recuerdame</label>

    <button type=\"submit\">login</button>
</form>
<a href=\"/usuarios/registro\">Registrarse</a>

{% endblock %}
";
    }
}
