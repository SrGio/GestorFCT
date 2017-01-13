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
        $__internal_760b9e9a6e9ef6368150f02109abc0e96dbd06577fd1b70457ef6b2e28f3a4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760b9e9a6e9ef6368150f02109abc0e96dbd06577fd1b70457ef6b2e28f3a4e1->enter($__internal_760b9e9a6e9ef6368150f02109abc0e96dbd06577fd1b70457ef6b2e28f3a4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Empresas:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_760b9e9a6e9ef6368150f02109abc0e96dbd06577fd1b70457ef6b2e28f3a4e1->leave($__internal_760b9e9a6e9ef6368150f02109abc0e96dbd06577fd1b70457ef6b2e28f3a4e1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_77d29a7e2b01fdc2f3f3caf0e1207f8c142721ccb1e2f8a53f3034541b5d6907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d29a7e2b01fdc2f3f3caf0e1207f8c142721ccb1e2f8a53f3034541b5d6907->enter($__internal_77d29a7e2b01fdc2f3f3caf0e1207f8c142721ccb1e2f8a53f3034541b5d6907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_77d29a7e2b01fdc2f3f3caf0e1207f8c142721ccb1e2f8a53f3034541b5d6907->leave($__internal_77d29a7e2b01fdc2f3f3caf0e1207f8c142721ccb1e2f8a53f3034541b5d6907_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2483f231f62ea78d51070e9daacf171fd28429bf53910c52f821f1a9dfe4b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2483f231f62ea78d51070e9daacf171fd28429bf53910c52f821f1a9dfe4b37->enter($__internal_b2483f231f62ea78d51070e9daacf171fd28429bf53910c52f821f1a9dfe4b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  ";
        
        $__internal_b2483f231f62ea78d51070e9daacf171fd28429bf53910c52f821f1a9dfe4b37->leave($__internal_b2483f231f62ea78d51070e9daacf171fd28429bf53910c52f821f1a9dfe4b37_prof);

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
