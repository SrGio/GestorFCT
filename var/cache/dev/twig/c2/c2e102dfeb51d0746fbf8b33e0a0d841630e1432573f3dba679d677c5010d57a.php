<?php

/* FctBundle:Empresas:empresas.html.twig */
class __TwigTemplate_d733dbd399897aea1c364051b12a191a9738c8a8cead838ce8fc99a802e2eb21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Empresas:empresas.html.twig", 1);
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
        $__internal_32f82576ba9911c410b3ac8401b3b4fdfa0989cb94eef105dcc4a9e1a5e01390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f82576ba9911c410b3ac8401b3b4fdfa0989cb94eef105dcc4a9e1a5e01390->enter($__internal_32f82576ba9911c410b3ac8401b3b4fdfa0989cb94eef105dcc4a9e1a5e01390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Empresas:empresas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32f82576ba9911c410b3ac8401b3b4fdfa0989cb94eef105dcc4a9e1a5e01390->leave($__internal_32f82576ba9911c410b3ac8401b3b4fdfa0989cb94eef105dcc4a9e1a5e01390_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_eaab2e7830ed929376b5f928f79c917d2d8a3b9665dcd75d5a7721d822e81004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaab2e7830ed929376b5f928f79c917d2d8a3b9665dcd75d5a7721d822e81004->enter($__internal_eaab2e7830ed929376b5f928f79c917d2d8a3b9665dcd75d5a7721d822e81004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_eaab2e7830ed929376b5f928f79c917d2d8a3b9665dcd75d5a7721d822e81004->leave($__internal_eaab2e7830ed929376b5f928f79c917d2d8a3b9665dcd75d5a7721d822e81004_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2795df5050c1f508d296e448ee87f979778e708b4665e8a0f426beea847163d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2795df5050c1f508d296e448ee87f979778e708b4665e8a0f426beea847163d->enter($__internal_d2795df5050c1f508d296e448ee87f979778e708b4665e8a0f426beea847163d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<table id=\"empresas\">
  <tr>
      <td>ID Empresa</td>
      <td>Nombre Empresa</td>
      <td>Dirección</td>
      <td>Código Postal</td>
      <td>Telefono 1</td>
      <td>Telefono 2</td>
      <td>Fecha de Creación</td>
  </tr>
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 20
            echo "    <tr>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "direccion", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "cp", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono1", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono2", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["empresa"], "fechaCreacion", array()), "date", array()), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</table>
  ";
        
        $__internal_d2795df5050c1f508d296e448ee87f979778e708b4665e8a0f426beea847163d->leave($__internal_d2795df5050c1f508d296e448ee87f979778e708b4665e8a0f426beea847163d_prof);

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
        return array (  108 => 30,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  72 => 20,  68 => 19,  53 => 6,  47 => 5,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}


{% block body %}



<table id=\"empresas\">
  <tr>
      <td>ID Empresa</td>
      <td>Nombre Empresa</td>
      <td>Dirección</td>
      <td>Código Postal</td>
      <td>Telefono 1</td>
      <td>Telefono 2</td>
      <td>Fecha de Creación</td>
  </tr>
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
  {% endblock %}
";
    }
}
