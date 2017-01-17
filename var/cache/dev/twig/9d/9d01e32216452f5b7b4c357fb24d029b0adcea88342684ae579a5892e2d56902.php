<?php

/* FctBundle:Users:bienvenido.html.twig */
class __TwigTemplate_a46326c334ad53ab57b0cead5bdb2c96805a366deefbbac188896a1e12526511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Users:bienvenido.html.twig", 1);
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
        $__internal_ca52136e96ff3471745af887b18c01ac83b0bf2815b11bf8a7032fe373b67e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca52136e96ff3471745af887b18c01ac83b0bf2815b11bf8a7032fe373b67e13->enter($__internal_ca52136e96ff3471745af887b18c01ac83b0bf2815b11bf8a7032fe373b67e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Users:bienvenido.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca52136e96ff3471745af887b18c01ac83b0bf2815b11bf8a7032fe373b67e13->leave($__internal_ca52136e96ff3471745af887b18c01ac83b0bf2815b11bf8a7032fe373b67e13_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_50c930dc7fa69f20cd1226e000037550a857555429a5513be027efb5731f4ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c930dc7fa69f20cd1226e000037550a857555429a5513be027efb5731f4ef9->enter($__internal_50c930dc7fa69f20cd1226e000037550a857555429a5513be027efb5731f4ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_50c930dc7fa69f20cd1226e000037550a857555429a5513be027efb5731f4ef9->leave($__internal_50c930dc7fa69f20cd1226e000037550a857555429a5513be027efb5731f4ef9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7c9b01191d5dd7b1caa225eeacefff0435c2ea5d10ac836c0a5890e1e397ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c9b01191d5dd7b1caa225eeacefff0435c2ea5d10ac836c0a5890e1e397ca4->enter($__internal_e7c9b01191d5dd7b1caa225eeacefff0435c2ea5d10ac836c0a5890e1e397ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  ¡Bienvenido!

  ";
        
        $__internal_e7c9b01191d5dd7b1caa225eeacefff0435c2ea5d10ac836c0a5890e1e397ca4->leave($__internal_e7c9b01191d5dd7b1caa225eeacefff0435c2ea5d10ac836c0a5890e1e397ca4_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Users:bienvenido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}
{% block body %}
  ¡Bienvenido!

  {% endblock %}
";
    }
}
