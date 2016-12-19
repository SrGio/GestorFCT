<?php

/* FctBundle:Alumnos:alumnos.html.twig */
class __TwigTemplate_12fd3b3368c2b0bf660b8edc448ace28b7793ff2835bca5c89e3a8b87174fead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Alumnos:alumnos.html.twig", 1);
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
        $__internal_ae5077a6d683576bbd2bba7fba0b6ccc7db75ac1d97d0f3861550278f7c1e6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5077a6d683576bbd2bba7fba0b6ccc7db75ac1d97d0f3861550278f7c1e6c9->enter($__internal_ae5077a6d683576bbd2bba7fba0b6ccc7db75ac1d97d0f3861550278f7c1e6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Alumnos:alumnos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae5077a6d683576bbd2bba7fba0b6ccc7db75ac1d97d0f3861550278f7c1e6c9->leave($__internal_ae5077a6d683576bbd2bba7fba0b6ccc7db75ac1d97d0f3861550278f7c1e6c9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6161641697b3aa564349f6e56c01c01bec99a485e285aba3a7ed35215723c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6161641697b3aa564349f6e56c01c01bec99a485e285aba3a7ed35215723c01->enter($__internal_d6161641697b3aa564349f6e56c01c01bec99a485e285aba3a7ed35215723c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alumnos";
        
        $__internal_d6161641697b3aa564349f6e56c01c01bec99a485e285aba3a7ed35215723c01->leave($__internal_d6161641697b3aa564349f6e56c01c01bec99a485e285aba3a7ed35215723c01_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_980bd5f82afaccd38d4f4ffccec4355de034fd955e9525fd4bb3b88d154a5cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980bd5f82afaccd38d4f4ffccec4355de034fd955e9525fd4bb3b88d154a5cc1->enter($__internal_980bd5f82afaccd38d4f4ffccec4355de034fd955e9525fd4bb3b88d154a5cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_980bd5f82afaccd38d4f4ffccec4355de034fd955e9525fd4bb3b88d154a5cc1->leave($__internal_980bd5f82afaccd38d4f4ffccec4355de034fd955e9525fd4bb3b88d154a5cc1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_132a6e99bb2b8309a1f3648022325c79a3be2240e03429556914a857d6114753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132a6e99bb2b8309a1f3648022325c79a3be2240e03429556914a857d6114753->enter($__internal_132a6e99bb2b8309a1f3648022325c79a3be2240e03429556914a857d6114753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<h1>Alumnos</h1>

<table id=\"alumnos\">
  <tr>
      <td>ID Alumno</td>
      <td>Nombre</td>
      <td>Apellido 1</td>
      <td>Apellido 2</td>
      <td>Ciclo</td>
      <td>Empresa</td>
  </tr>
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 22
            echo "    <tr>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido1", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido2", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "ciclo", array()), "html", null, true);
            echo "</td>
        <td></td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</table>
  ";
        
        $__internal_132a6e99bb2b8309a1f3648022325c79a3be2240e03429556914a857d6114753->leave($__internal_132a6e99bb2b8309a1f3648022325c79a3be2240e03429556914a857d6114753_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Alumnos:alumnos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 31,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  88 => 22,  84 => 21,  70 => 9,  64 => 8,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Alumnos{% endblock %}
  {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
  {% endblock %}


{% block body %}

<h1>Alumnos</h1>

<table id=\"alumnos\">
  <tr>
      <td>ID Alumno</td>
      <td>Nombre</td>
      <td>Apellido 1</td>
      <td>Apellido 2</td>
      <td>Ciclo</td>
      <td>Empresa</td>
  </tr>
  {% for alumno in alumnos %}
    <tr>
        <td>{{ alumno.id}}</td>
        <td>{{ alumno.nombre}}</td>
        <td>{{ alumno.apellido1}}</td>
        <td>{{ alumno.apellido2}}</td>
        <td>{{ alumno.ciclo}}</td>
        <td></td>
    </tr>
  {% endfor %}
</table>
  {% endblock %}
";
    }
}
