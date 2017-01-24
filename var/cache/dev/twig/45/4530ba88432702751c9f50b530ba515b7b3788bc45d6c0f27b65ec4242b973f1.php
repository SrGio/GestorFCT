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
        $__internal_3ce6b4930d512789910e4f41c6d5abd0bb3d9a2c152cacb07cedc09a2a61ccaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce6b4930d512789910e4f41c6d5abd0bb3d9a2c152cacb07cedc09a2a61ccaa->enter($__internal_3ce6b4930d512789910e4f41c6d5abd0bb3d9a2c152cacb07cedc09a2a61ccaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Users:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ce6b4930d512789910e4f41c6d5abd0bb3d9a2c152cacb07cedc09a2a61ccaa->leave($__internal_3ce6b4930d512789910e4f41c6d5abd0bb3d9a2c152cacb07cedc09a2a61ccaa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_702ca970e67dad771ff0adceac437209c34bc00a7f02226ec9680453f7e5025c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702ca970e67dad771ff0adceac437209c34bc00a7f02226ec9680453f7e5025c->enter($__internal_702ca970e67dad771ff0adceac437209c34bc00a7f02226ec9680453f7e5025c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_702ca970e67dad771ff0adceac437209c34bc00a7f02226ec9680453f7e5025c->leave($__internal_702ca970e67dad771ff0adceac437209c34bc00a7f02226ec9680453f7e5025c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b3895d828825267a80dd816e75aa8bcfc87b1c0215d1fd3bce42f20af63416c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3895d828825267a80dd816e75aa8bcfc87b1c0215d1fd3bce42f20af63416c->enter($__internal_5b3895d828825267a80dd816e75aa8bcfc87b1c0215d1fd3bce42f20af63416c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b3895d828825267a80dd816e75aa8bcfc87b1c0215d1fd3bce42f20af63416c->leave($__internal_5b3895d828825267a80dd816e75aa8bcfc87b1c0215d1fd3bce42f20af63416c_prof);

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
