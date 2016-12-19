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
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e468ac724165f272269dac17abdc4a732331f2a7424bf4cd575c9cb3865463e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e468ac724165f272269dac17abdc4a732331f2a7424bf4cd575c9cb3865463e1->enter($__internal_e468ac724165f272269dac17abdc4a732331f2a7424bf4cd575c9cb3865463e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Empresas:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e468ac724165f272269dac17abdc4a732331f2a7424bf4cd575c9cb3865463e1->leave($__internal_e468ac724165f272269dac17abdc4a732331f2a7424bf4cd575c9cb3865463e1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_29904af5aa5827dad474dbcdc6ca31eec7e43b332c4e90023b246bca6fd5667b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29904af5aa5827dad474dbcdc6ca31eec7e43b332c4e90023b246bca6fd5667b->enter($__internal_29904af5aa5827dad474dbcdc6ca31eec7e43b332c4e90023b246bca6fd5667b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_29904af5aa5827dad474dbcdc6ca31eec7e43b332c4e90023b246bca6fd5667b->leave($__internal_29904af5aa5827dad474dbcdc6ca31eec7e43b332c4e90023b246bca6fd5667b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e87ac85d983083aa16e40628279f9273efd8709eb1bad69cf881097ad75ae82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e87ac85d983083aa16e40628279f9273efd8709eb1bad69cf881097ad75ae82->enter($__internal_0e87ac85d983083aa16e40628279f9273efd8709eb1bad69cf881097ad75ae82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_0e87ac85d983083aa16e40628279f9273efd8709eb1bad69cf881097ad75ae82->leave($__internal_0e87ac85d983083aa16e40628279f9273efd8709eb1bad69cf881097ad75ae82_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_80f156ac81fe278503a0a812aab7aba4d2dd93df76e782c021ab0e0ecbb256c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f156ac81fe278503a0a812aab7aba4d2dd93df76e782c021ab0e0ecbb256c9->enter($__internal_80f156ac81fe278503a0a812aab7aba4d2dd93df76e782c021ab0e0ecbb256c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<h1>Empresas - Empresa Nueva</h1>
";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  ";
        
        $__internal_80f156ac81fe278503a0a812aab7aba4d2dd93df76e782c021ab0e0ecbb256c9->leave($__internal_80f156ac81fe278503a0a812aab7aba4d2dd93df76e782c021ab0e0ecbb256c9_prof);

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
        return array (  73 => 10,  70 => 9,  64 => 8,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}
  {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
  {% endblock %}


{% block body %}
<h1>Empresas - Empresa Nueva</h1>
{{form(form)}}
  {% endblock %}
";
    }
}
