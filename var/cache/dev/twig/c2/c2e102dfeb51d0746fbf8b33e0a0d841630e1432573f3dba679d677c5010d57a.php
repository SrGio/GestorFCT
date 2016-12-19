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
        $__internal_2414991fc27d9d217ffecfbb1473f6cbe352ac0d5d7397bc46134bcbf3fa4b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2414991fc27d9d217ffecfbb1473f6cbe352ac0d5d7397bc46134bcbf3fa4b77->enter($__internal_2414991fc27d9d217ffecfbb1473f6cbe352ac0d5d7397bc46134bcbf3fa4b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Empresas:empresas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2414991fc27d9d217ffecfbb1473f6cbe352ac0d5d7397bc46134bcbf3fa4b77->leave($__internal_2414991fc27d9d217ffecfbb1473f6cbe352ac0d5d7397bc46134bcbf3fa4b77_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d03b871555a0cd215c95ff19bf242e93ef0d1c7070fb6b8be6734af9ef23e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d03b871555a0cd215c95ff19bf242e93ef0d1c7070fb6b8be6734af9ef23e51->enter($__internal_2d03b871555a0cd215c95ff19bf242e93ef0d1c7070fb6b8be6734af9ef23e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_2d03b871555a0cd215c95ff19bf242e93ef0d1c7070fb6b8be6734af9ef23e51->leave($__internal_2d03b871555a0cd215c95ff19bf242e93ef0d1c7070fb6b8be6734af9ef23e51_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8bf75c74fe594875998f0bdc9f62d318b5fe13b84a5a8f61a3e45d1bb3e1c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8bf75c74fe594875998f0bdc9f62d318b5fe13b84a5a8f61a3e45d1bb3e1c19->enter($__internal_e8bf75c74fe594875998f0bdc9f62d318b5fe13b84a5a8f61a3e45d1bb3e1c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_e8bf75c74fe594875998f0bdc9f62d318b5fe13b84a5a8f61a3e45d1bb3e1c19->leave($__internal_e8bf75c74fe594875998f0bdc9f62d318b5fe13b84a5a8f61a3e45d1bb3e1c19_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc86864ccd160e96a9f538ffe530b997df381a8cc0b63101434ffbf503488e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc86864ccd160e96a9f538ffe530b997df381a8cc0b63101434ffbf503488e1a->enter($__internal_dc86864ccd160e96a9f538ffe530b997df381a8cc0b63101434ffbf503488e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<h1>Empresas FCT</h1>

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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 23
            echo "    <tr>
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
        echo "</table>
  ";
        
        $__internal_dc86864ccd160e96a9f538ffe530b997df381a8cc0b63101434ffbf503488e1a->leave($__internal_dc86864ccd160e96a9f538ffe530b997df381a8cc0b63101434ffbf503488e1a_prof);

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
        return array (  125 => 33,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  89 => 23,  85 => 22,  70 => 9,  64 => 8,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}
  {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
  {% endblock %}


{% block body %}

<h1>Empresas FCT</h1>

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
