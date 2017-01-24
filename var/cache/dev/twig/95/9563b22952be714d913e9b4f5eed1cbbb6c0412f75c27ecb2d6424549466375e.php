<?php

/* FctBundle:Users:registro.html.twig */
class __TwigTemplate_cadca2102d60ad4d874d02ed2190f20be596b60c912907b2ba533cebbd154944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Users:registro.html.twig", 1);
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
        $__internal_600f0b8b30d756d27f9d9cfbd3d640671810a0aa1bf1e1e22eec29d346a4c047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600f0b8b30d756d27f9d9cfbd3d640671810a0aa1bf1e1e22eec29d346a4c047->enter($__internal_600f0b8b30d756d27f9d9cfbd3d640671810a0aa1bf1e1e22eec29d346a4c047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Users:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_600f0b8b30d756d27f9d9cfbd3d640671810a0aa1bf1e1e22eec29d346a4c047->leave($__internal_600f0b8b30d756d27f9d9cfbd3d640671810a0aa1bf1e1e22eec29d346a4c047_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2634436388719ffaf3dcd03e0c062c47584f218c023822dea92ee90feae10852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2634436388719ffaf3dcd03e0c062c47584f218c023822dea92ee90feae10852->enter($__internal_2634436388719ffaf3dcd03e0c062c47584f218c023822dea92ee90feae10852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_2634436388719ffaf3dcd03e0c062c47584f218c023822dea92ee90feae10852->leave($__internal_2634436388719ffaf3dcd03e0c062c47584f218c023822dea92ee90feae10852_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb68a1fc77ea7eafd9a537bf43220c134d56f7ffdb662d0412474b48fadfd08e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb68a1fc77ea7eafd9a537bf43220c134d56f7ffdb662d0412474b48fadfd08e->enter($__internal_eb68a1fc77ea7eafd9a537bf43220c134d56f7ffdb662d0412474b48fadfd08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "borrar", array()), 'row');
        echo "
";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

  ";
        
        $__internal_eb68a1fc77ea7eafd9a537bf43220c134d56f7ffdb662d0412474b48fadfd08e->leave($__internal_eb68a1fc77ea7eafd9a537bf43220c134d56f7ffdb662d0412474b48fadfd08e_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Users:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}
{% block body %}

{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}
    {{ form_row(form.guardar) }}
    {{ form_row(form.borrar) }}
{{ form_end(form) }}

  {% endblock %}
";
    }
}
