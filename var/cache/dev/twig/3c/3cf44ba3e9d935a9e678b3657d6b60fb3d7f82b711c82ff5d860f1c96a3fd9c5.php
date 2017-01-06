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
        $__internal_4565901c7282636e44baa3dac4cda8799223bf7c70edb1f963f35fe0f7e74fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4565901c7282636e44baa3dac4cda8799223bf7c70edb1f963f35fe0f7e74fa0->enter($__internal_4565901c7282636e44baa3dac4cda8799223bf7c70edb1f963f35fe0f7e74fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Alumnos:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4565901c7282636e44baa3dac4cda8799223bf7c70edb1f963f35fe0f7e74fa0->leave($__internal_4565901c7282636e44baa3dac4cda8799223bf7c70edb1f963f35fe0f7e74fa0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec313623267185ae3d9a2cb96c03c64d81166bc4edbb20298ada4937c1e3f8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec313623267185ae3d9a2cb96c03c64d81166bc4edbb20298ada4937c1e3f8f9->enter($__internal_ec313623267185ae3d9a2cb96c03c64d81166bc4edbb20298ada4937c1e3f8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alumno";
        
        $__internal_ec313623267185ae3d9a2cb96c03c64d81166bc4edbb20298ada4937c1e3f8f9->leave($__internal_ec313623267185ae3d9a2cb96c03c64d81166bc4edbb20298ada4937c1e3f8f9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1f51529737d1d5b34f26795a6961ec98b729170e566832bd6ad1a5ffb75aead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f51529737d1d5b34f26795a6961ec98b729170e566832bd6ad1a5ffb75aead->enter($__internal_b1f51529737d1d5b34f26795a6961ec98b729170e566832bd6ad1a5ffb75aead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  ";
        
        $__internal_b1f51529737d1d5b34f26795a6961ec98b729170e566832bd6ad1a5ffb75aead->leave($__internal_b1f51529737d1d5b34f26795a6961ec98b729170e566832bd6ad1a5ffb75aead_prof);

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
