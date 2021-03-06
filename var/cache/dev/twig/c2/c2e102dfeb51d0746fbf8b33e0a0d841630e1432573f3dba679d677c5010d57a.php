<?php

/* FctBundle:Empresas:empresas.html.twig */
class __TwigTemplate_d733dbd399897aea1c364051b12a191a9738c8a8cead838ce8fc99a802e2eb21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Empresas:empresas.html.twig", 2);
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
        $__internal_7bf5a4e0e35b5813fb5528d3d858f146b7e9aadfe33336a2fd196afa6c5d4739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf5a4e0e35b5813fb5528d3d858f146b7e9aadfe33336a2fd196afa6c5d4739->enter($__internal_7bf5a4e0e35b5813fb5528d3d858f146b7e9aadfe33336a2fd196afa6c5d4739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Empresas:empresas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bf5a4e0e35b5813fb5528d3d858f146b7e9aadfe33336a2fd196afa6c5d4739->leave($__internal_7bf5a4e0e35b5813fb5528d3d858f146b7e9aadfe33336a2fd196afa6c5d4739_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26ddc556cb1df01e8d70b340594deca72aef57280762cbdeee797cd6c97d5cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ddc556cb1df01e8d70b340594deca72aef57280762cbdeee797cd6c97d5cdf->enter($__internal_26ddc556cb1df01e8d70b340594deca72aef57280762cbdeee797cd6c97d5cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_26ddc556cb1df01e8d70b340594deca72aef57280762cbdeee797cd6c97d5cdf->leave($__internal_26ddc556cb1df01e8d70b340594deca72aef57280762cbdeee797cd6c97d5cdf_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_311f2b99611067ae5925e558bc8fdfbc5845b8a83bb23faafb7837774e9e47e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311f2b99611067ae5925e558bc8fdfbc5845b8a83bb23faafb7837774e9e47e1->enter($__internal_311f2b99611067ae5925e558bc8fdfbc5845b8a83bb23faafb7837774e9e47e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<h2>Listado de Empresas</h2>
<div class=\"table-responsive\">
    <table id=\"empresas\" class=\"table table-bordered table-hover\">
    <thead>
        <tr>
            <th>ID Empresa</th>
            <th>Nombre Empresa</th>
            <th>Dirección</th>
            <th>Código Postal</th>
            <th>Telefono 1</th>
            <th>Telefono 2</th>
            <th>Fecha de Creación</th>
        </tr>
    </thead>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 23
            echo "      <tr>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "direccion", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "cp", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono1", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono2", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["empresa"], "fechaCreacion", array()), "date", array()), "html", null, true);
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      </table>
</div>
";
        
        $__internal_311f2b99611067ae5925e558bc8fdfbc5845b8a83bb23faafb7837774e9e47e1->leave($__internal_311f2b99611067ae5925e558bc8fdfbc5845b8a83bb23faafb7837774e9e47e1_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Empresas:empresas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 33,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  74 => 23,  70 => 22,  53 => 7,  47 => 6,  35 => 3,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}


{% block body %}

<h2>Listado de Empresas</h2>
<div class=\"table-responsive\">
    <table id=\"empresas\" class=\"table table-bordered table-hover\">
    <thead>
        <tr>
            <th>ID Empresa</th>
            <th>Nombre Empresa</th>
            <th>Dirección</th>
            <th>Código Postal</th>
            <th>Telefono 1</th>
            <th>Telefono 2</th>
            <th>Fecha de Creación</th>
        </tr>
    </thead>
    {% for empresa in empresas %}
      <tr>
          <td>{{ empresa.id}}</td>
          <td>{{ empresa.nombre}}</td>
          <td>{{ empresa.direccion}}</td>
          <td>{{ empresa.cp}}</td>
          <td>{{ empresa.telefono1}}</td>
          <td>{{ empresa.telefono2}}</td>
          <td>{{ empresa.fechaCreacion.date}}</td>
      </tr>
      {% endfor %}
      </table>
</div>
{% endblock %}
";
    }
}
