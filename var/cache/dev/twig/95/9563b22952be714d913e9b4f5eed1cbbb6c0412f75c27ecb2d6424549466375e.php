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
        $__internal_63a7dea096062eae8fc976a3045d0f5e37d7942f924a471d5dccf05041c3b985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a7dea096062eae8fc976a3045d0f5e37d7942f924a471d5dccf05041c3b985->enter($__internal_63a7dea096062eae8fc976a3045d0f5e37d7942f924a471d5dccf05041c3b985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Users:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63a7dea096062eae8fc976a3045d0f5e37d7942f924a471d5dccf05041c3b985->leave($__internal_63a7dea096062eae8fc976a3045d0f5e37d7942f924a471d5dccf05041c3b985_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_189fd4f1a534ce6c894250df1cec22b32647ef915c03a0a84aca3991899a079e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189fd4f1a534ce6c894250df1cec22b32647ef915c03a0a84aca3991899a079e->enter($__internal_189fd4f1a534ce6c894250df1cec22b32647ef915c03a0a84aca3991899a079e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_189fd4f1a534ce6c894250df1cec22b32647ef915c03a0a84aca3991899a079e->leave($__internal_189fd4f1a534ce6c894250df1cec22b32647ef915c03a0a84aca3991899a079e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_413a37eef9fea453f8fd9cd85cca0e3938fa15131fb8232100f8ef366b1f9f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413a37eef9fea453f8fd9cd85cca0e3938fa15131fb8232100f8ef366b1f9f52->enter($__internal_413a37eef9fea453f8fd9cd85cca0e3938fa15131fb8232100f8ef366b1f9f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_413a37eef9fea453f8fd9cd85cca0e3938fa15131fb8232100f8ef366b1f9f52->leave($__internal_413a37eef9fea453f8fd9cd85cca0e3938fa15131fb8232100f8ef366b1f9f52_prof);

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
