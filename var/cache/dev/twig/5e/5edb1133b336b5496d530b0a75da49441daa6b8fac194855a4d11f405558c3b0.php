<?php

/* FctBundle:Empresas:nueva.html.twig */
class __TwigTemplate_3ba241361df0bdaeea107a542d65c529c57fb9fc5440505dd9cea2e6ae4580f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Empresas:nueva.html.twig", 1);
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
        $__internal_8ddd53f347fc81e1d8582993421be41618443c07b89e69bc6db7275b58c17fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddd53f347fc81e1d8582993421be41618443c07b89e69bc6db7275b58c17fcf->enter($__internal_8ddd53f347fc81e1d8582993421be41618443c07b89e69bc6db7275b58c17fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Empresas:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ddd53f347fc81e1d8582993421be41618443c07b89e69bc6db7275b58c17fcf->leave($__internal_8ddd53f347fc81e1d8582993421be41618443c07b89e69bc6db7275b58c17fcf_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_998414ee72f5a0b8c4b16ddaaaccaaf2583dba0477b80b5ee4a480c975a78c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998414ee72f5a0b8c4b16ddaaaccaaf2583dba0477b80b5ee4a480c975a78c4c->enter($__internal_998414ee72f5a0b8c4b16ddaaaccaaf2583dba0477b80b5ee4a480c975a78c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_998414ee72f5a0b8c4b16ddaaaccaaf2583dba0477b80b5ee4a480c975a78c4c->leave($__internal_998414ee72f5a0b8c4b16ddaaaccaaf2583dba0477b80b5ee4a480c975a78c4c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2698d40830a15dd7ab78b8fd64d4f3ee9fa3a0064c44056ada3ef987030be94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2698d40830a15dd7ab78b8fd64d4f3ee9fa3a0064c44056ada3ef987030be94->enter($__internal_d2698d40830a15dd7ab78b8fd64d4f3ee9fa3a0064c44056ada3ef987030be94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  ";
        
        $__internal_d2698d40830a15dd7ab78b8fd64d4f3ee9fa3a0064c44056ada3ef987030be94->leave($__internal_d2698d40830a15dd7ab78b8fd64d4f3ee9fa3a0064c44056ada3ef987030be94_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Empresas:nueva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  47 => 5,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}


{% block body %}

{{form(form)}}
  {% endblock %}
";
    }
}
