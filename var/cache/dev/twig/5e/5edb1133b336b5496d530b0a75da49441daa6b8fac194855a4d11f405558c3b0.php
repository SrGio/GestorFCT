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
        $__internal_b9e37a1599aab391127fe51173ba8bb29433dd1e836b57a113b1cf4cbf945378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e37a1599aab391127fe51173ba8bb29433dd1e836b57a113b1cf4cbf945378->enter($__internal_b9e37a1599aab391127fe51173ba8bb29433dd1e836b57a113b1cf4cbf945378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Empresas:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e37a1599aab391127fe51173ba8bb29433dd1e836b57a113b1cf4cbf945378->leave($__internal_b9e37a1599aab391127fe51173ba8bb29433dd1e836b57a113b1cf4cbf945378_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c08be12c2a12657fd4b13cfe15306600200964461db6fbe1dc4b9dee864eb9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08be12c2a12657fd4b13cfe15306600200964461db6fbe1dc4b9dee864eb9ee->enter($__internal_c08be12c2a12657fd4b13cfe15306600200964461db6fbe1dc4b9dee864eb9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_c08be12c2a12657fd4b13cfe15306600200964461db6fbe1dc4b9dee864eb9ee->leave($__internal_c08be12c2a12657fd4b13cfe15306600200964461db6fbe1dc4b9dee864eb9ee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e44f7126e40f6c11df66bb9a07d7b373fe3e065c053659001c2825309b4bc766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44f7126e40f6c11df66bb9a07d7b373fe3e065c053659001c2825309b4bc766->enter($__internal_e44f7126e40f6c11df66bb9a07d7b373fe3e065c053659001c2825309b4bc766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  ";
        
        $__internal_e44f7126e40f6c11df66bb9a07d7b373fe3e065c053659001c2825309b4bc766->leave($__internal_e44f7126e40f6c11df66bb9a07d7b373fe3e065c053659001c2825309b4bc766_prof);

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
