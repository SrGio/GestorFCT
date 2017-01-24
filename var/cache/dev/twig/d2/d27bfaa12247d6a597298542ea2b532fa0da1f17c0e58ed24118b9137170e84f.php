<?php

/* FctBundle:alumnos:alumnos.html.twig */
class __TwigTemplate_0492ca1292d9e7b8a0a9960d48809704088f4356943e5434d7c79c0dabe54e5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:alumnos:alumnos.html.twig", 1);
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
        $__internal_1497c992fb33875be2cfd00a10f93b39aa9ee41fd81c5467f4bedfb562d2ffb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1497c992fb33875be2cfd00a10f93b39aa9ee41fd81c5467f4bedfb562d2ffb7->enter($__internal_1497c992fb33875be2cfd00a10f93b39aa9ee41fd81c5467f4bedfb562d2ffb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:alumnos:alumnos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1497c992fb33875be2cfd00a10f93b39aa9ee41fd81c5467f4bedfb562d2ffb7->leave($__internal_1497c992fb33875be2cfd00a10f93b39aa9ee41fd81c5467f4bedfb562d2ffb7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c2f99fa1fc52252cb9e46b8c9ad39cacae7b3c0cba57c70c80eabab576ca0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2f99fa1fc52252cb9e46b8c9ad39cacae7b3c0cba57c70c80eabab576ca0ce->enter($__internal_7c2f99fa1fc52252cb9e46b8c9ad39cacae7b3c0cba57c70c80eabab576ca0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alumnos";
        
        $__internal_7c2f99fa1fc52252cb9e46b8c9ad39cacae7b3c0cba57c70c80eabab576ca0ce->leave($__internal_7c2f99fa1fc52252cb9e46b8c9ad39cacae7b3c0cba57c70c80eabab576ca0ce_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e69a11d876f52b438be0f725436a839b336bb13e1fedf8106a338b4317ebe7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69a11d876f52b438be0f725436a839b336bb13e1fedf8106a338b4317ebe7a7->enter($__internal_e69a11d876f52b438be0f725436a839b336bb13e1fedf8106a338b4317ebe7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_e69a11d876f52b438be0f725436a839b336bb13e1fedf8106a338b4317ebe7a7->leave($__internal_e69a11d876f52b438be0f725436a839b336bb13e1fedf8106a338b4317ebe7a7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bad83103ba2b3b850fbee7ef6faab784bd1e41bdf0f5703fd2bd70d24e1cc41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bad83103ba2b3b850fbee7ef6faab784bd1e41bdf0f5703fd2bd70d24e1cc41->enter($__internal_4bad83103ba2b3b850fbee7ef6faab784bd1e41bdf0f5703fd2bd70d24e1cc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4bad83103ba2b3b850fbee7ef6faab784bd1e41bdf0f5703fd2bd70d24e1cc41->leave($__internal_4bad83103ba2b3b850fbee7ef6faab784bd1e41bdf0f5703fd2bd70d24e1cc41_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:alumnos:alumnos.html.twig";
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
