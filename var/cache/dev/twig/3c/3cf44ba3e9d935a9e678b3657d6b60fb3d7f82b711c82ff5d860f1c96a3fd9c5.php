<?php

/* FctBundle:Alumnos:nuevo.html.twig */
class __TwigTemplate_cd7a4c312705fd27f15796ba9dc013c3880938751f3ec78f471bd3d4d20c00b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Alumnos:nuevo.html.twig", 1);
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
        $__internal_6d373555394be2f4fd86d345053ecc4fe4a5a9fcb064edf5955fe6ff713a411b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d373555394be2f4fd86d345053ecc4fe4a5a9fcb064edf5955fe6ff713a411b->enter($__internal_6d373555394be2f4fd86d345053ecc4fe4a5a9fcb064edf5955fe6ff713a411b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Alumnos:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d373555394be2f4fd86d345053ecc4fe4a5a9fcb064edf5955fe6ff713a411b->leave($__internal_6d373555394be2f4fd86d345053ecc4fe4a5a9fcb064edf5955fe6ff713a411b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4648a3f2a1f879edc0526f1a59e95bd619c76ee769a365b5f63176688ee61338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4648a3f2a1f879edc0526f1a59e95bd619c76ee769a365b5f63176688ee61338->enter($__internal_4648a3f2a1f879edc0526f1a59e95bd619c76ee769a365b5f63176688ee61338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alumno";
        
        $__internal_4648a3f2a1f879edc0526f1a59e95bd619c76ee769a365b5f63176688ee61338->leave($__internal_4648a3f2a1f879edc0526f1a59e95bd619c76ee769a365b5f63176688ee61338_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dd1e1122d043ba4991ed370cd975ea924a5c15f19c3f5561cfaa38897f26b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd1e1122d043ba4991ed370cd975ea924a5c15f19c3f5561cfaa38897f26b2a->enter($__internal_2dd1e1122d043ba4991ed370cd975ea924a5c15f19c3f5561cfaa38897f26b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  ";
        
        $__internal_2dd1e1122d043ba4991ed370cd975ea924a5c15f19c3f5561cfaa38897f26b2a->leave($__internal_2dd1e1122d043ba4991ed370cd975ea924a5c15f19c3f5561cfaa38897f26b2a_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Alumnos:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  53 => 7,  47 => 6,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Alumno{% endblock %}



{% block body %}

{{form(form)}}
  {% endblock %}
";
    }
}
