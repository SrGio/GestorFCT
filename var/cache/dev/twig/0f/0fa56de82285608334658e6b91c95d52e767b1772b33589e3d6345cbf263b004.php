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
        $__internal_8f8352fc4b2d97a5bac3d96ae5d1516751409631844db2d4d3cf42c587760416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8352fc4b2d97a5bac3d96ae5d1516751409631844db2d4d3cf42c587760416->enter($__internal_8f8352fc4b2d97a5bac3d96ae5d1516751409631844db2d4d3cf42c587760416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Alumnos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f8352fc4b2d97a5bac3d96ae5d1516751409631844db2d4d3cf42c587760416->leave($__internal_8f8352fc4b2d97a5bac3d96ae5d1516751409631844db2d4d3cf42c587760416_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9d823b6be7fb96885e430e05f357f439ad0d76ac44ab8c35e235295f7b1653f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d823b6be7fb96885e430e05f357f439ad0d76ac44ab8c35e235295f7b1653f->enter($__internal_e9d823b6be7fb96885e430e05f357f439ad0d76ac44ab8c35e235295f7b1653f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_e9d823b6be7fb96885e430e05f357f439ad0d76ac44ab8c35e235295f7b1653f->leave($__internal_e9d823b6be7fb96885e430e05f357f439ad0d76ac44ab8c35e235295f7b1653f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27ae238404897899755bde201ac82d16a41c7ae7b4c3989044d0bb0fe82eba21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ae238404897899755bde201ac82d16a41c7ae7b4c3989044d0bb0fe82eba21->enter($__internal_27ae238404897899755bde201ac82d16a41c7ae7b4c3989044d0bb0fe82eba21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h2>Listado de Alumnos</h2>
<div class=\"table-responsive\">
    <table id=\"alumnos\" class=\"table table-bordered table-hover\">
    <thead>
        <tr>
            <th>ID Alumno</th>
            <th>Nombre</th>
            <th>Apellido 1</th>
            <th>Apellido 2</th>
            <th>Ciclo</th>
            <th>Empresa</th>
        </tr>
      </thead>
      ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 21
            echo "      <tr>
          <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido1", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido2", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "ciclo", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "empresas", array()), "nombre", array()), "html", null, true);
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      </table>
</div>
";
        
        $__internal_27ae238404897899755bde201ac82d16a41c7ae7b4c3989044d0bb0fe82eba21->leave($__internal_27ae238404897899755bde201ac82d16a41c7ae7b4c3989044d0bb0fe82eba21_prof);

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
        return array (  105 => 30,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  73 => 21,  69 => 20,  53 => 6,  47 => 5,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}


{% block body %}

<h2>Listado de Alumnos</h2>
<div class=\"table-responsive\">
    <table id=\"alumnos\" class=\"table table-bordered table-hover\">
    <thead>
        <tr>
            <th>ID Alumno</th>
            <th>Nombre</th>
            <th>Apellido 1</th>
            <th>Apellido 2</th>
            <th>Ciclo</th>
            <th>Empresa</th>
        </tr>
      </thead>
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
</div>
{% endblock %}
";
    }
}
