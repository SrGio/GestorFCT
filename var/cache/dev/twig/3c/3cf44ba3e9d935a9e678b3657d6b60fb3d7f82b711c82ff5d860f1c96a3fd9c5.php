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
        $__internal_12345d5d9d24c6ea39a22d97543d1e6663efb4a8c1b849268bd3ad47e0cf7a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12345d5d9d24c6ea39a22d97543d1e6663efb4a8c1b849268bd3ad47e0cf7a8c->enter($__internal_12345d5d9d24c6ea39a22d97543d1e6663efb4a8c1b849268bd3ad47e0cf7a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Alumnos:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12345d5d9d24c6ea39a22d97543d1e6663efb4a8c1b849268bd3ad47e0cf7a8c->leave($__internal_12345d5d9d24c6ea39a22d97543d1e6663efb4a8c1b849268bd3ad47e0cf7a8c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_df99c4eeb96e3a2380084db98d87fdfaa3cf44f62819e6d391f98fec15e49aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df99c4eeb96e3a2380084db98d87fdfaa3cf44f62819e6d391f98fec15e49aab->enter($__internal_df99c4eeb96e3a2380084db98d87fdfaa3cf44f62819e6d391f98fec15e49aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alumno";
        
        $__internal_df99c4eeb96e3a2380084db98d87fdfaa3cf44f62819e6d391f98fec15e49aab->leave($__internal_df99c4eeb96e3a2380084db98d87fdfaa3cf44f62819e6d391f98fec15e49aab_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fab8fab61647f2e4af4ea2ccec963d521472a2ab89c6a3c8f9d470b29e338f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fab8fab61647f2e4af4ea2ccec963d521472a2ab89c6a3c8f9d470b29e338f9->enter($__internal_1fab8fab61647f2e4af4ea2ccec963d521472a2ab89c6a3c8f9d470b29e338f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  ";
        
        $__internal_1fab8fab61647f2e4af4ea2ccec963d521472a2ab89c6a3c8f9d470b29e338f9->leave($__internal_1fab8fab61647f2e4af4ea2ccec963d521472a2ab89c6a3c8f9d470b29e338f9_prof);

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
