<?php

/* FctBundle:Alumnos:show.html.twig */
class __TwigTemplate_560acbdf0f09722b0ac3575bf325048523eb9caf44b2cdfad79903c9387c789c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Alumnos:show.html.twig", 1);
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
        $__internal_cd8540ddd85318ea5b2da1b434d1f5106dbac705d7c7c16166888ccbacdd6676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8540ddd85318ea5b2da1b434d1f5106dbac705d7c7c16166888ccbacdd6676->enter($__internal_cd8540ddd85318ea5b2da1b434d1f5106dbac705d7c7c16166888ccbacdd6676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Alumnos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd8540ddd85318ea5b2da1b434d1f5106dbac705d7c7c16166888ccbacdd6676->leave($__internal_cd8540ddd85318ea5b2da1b434d1f5106dbac705d7c7c16166888ccbacdd6676_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bea694284563ce01dc34dbfbe0dfcdafbb5f7ca33d3d3eaffa897c485bbc20a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea694284563ce01dc34dbfbe0dfcdafbb5f7ca33d3d3eaffa897c485bbc20a5->enter($__internal_bea694284563ce01dc34dbfbe0dfcdafbb5f7ca33d3d3eaffa897c485bbc20a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_bea694284563ce01dc34dbfbe0dfcdafbb5f7ca33d3d3eaffa897c485bbc20a5->leave($__internal_bea694284563ce01dc34dbfbe0dfcdafbb5f7ca33d3d3eaffa897c485bbc20a5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2210024c279e24f741b45cb0d5041495d5252a6fdf17574d96f80d973a229264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2210024c279e24f741b45cb0d5041495d5252a6fdf17574d96f80d973a229264->enter($__internal_2210024c279e24f741b45cb0d5041495d5252a6fdf17574d96f80d973a229264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 18
            echo "    <tr>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido1", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido2", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "ciclo", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "empresas", array()), "nombre", array()), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>
  ";
        
        $__internal_2210024c279e24f741b45cb0d5041495d5252a6fdf17574d96f80d973a229264->leave($__internal_2210024c279e24f741b45cb0d5041495d5252a6fdf17574d96f80d973a229264_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Alumnos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  70 => 18,  66 => 17,  53 => 6,  47 => 5,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}


{% block body %}


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
        <td>{{ alumno.empresas.nombre}}</td>
    </tr>
  {% endfor %}
</table>
  {% endblock %}
";
    }
}
