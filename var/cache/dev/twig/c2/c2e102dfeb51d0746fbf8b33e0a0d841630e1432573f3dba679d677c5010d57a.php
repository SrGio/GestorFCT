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
        $__internal_50e9d18b9a1e70b21da70af4a3ef3dd33d23142bb155a668331ea9442340d03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e9d18b9a1e70b21da70af4a3ef3dd33d23142bb155a668331ea9442340d03f->enter($__internal_50e9d18b9a1e70b21da70af4a3ef3dd33d23142bb155a668331ea9442340d03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Empresas:empresas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50e9d18b9a1e70b21da70af4a3ef3dd33d23142bb155a668331ea9442340d03f->leave($__internal_50e9d18b9a1e70b21da70af4a3ef3dd33d23142bb155a668331ea9442340d03f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8443aae434df1b361f831172cab7489577f893e9c086ddb2f9fa79d896315dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8443aae434df1b361f831172cab7489577f893e9c086ddb2f9fa79d896315dad->enter($__internal_8443aae434df1b361f831172cab7489577f893e9c086ddb2f9fa79d896315dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_8443aae434df1b361f831172cab7489577f893e9c086ddb2f9fa79d896315dad->leave($__internal_8443aae434df1b361f831172cab7489577f893e9c086ddb2f9fa79d896315dad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_df27d10f8b6c15fba17563c7c6b973bee671d2cec4874ac097e2f57372bb0c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df27d10f8b6c15fba17563c7c6b973bee671d2cec4874ac097e2f57372bb0c90->enter($__internal_df27d10f8b6c15fba17563c7c6b973bee671d2cec4874ac097e2f57372bb0c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 22
            echo "      <tr>
          <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "direccion", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "cp", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono1", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono2", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["empresa"], "fechaCreacion", array()), "date", array()), "html", null, true);
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "      </table>
</div>
";
        
        $__internal_df27d10f8b6c15fba17563c7c6b973bee671d2cec4874ac097e2f57372bb0c90->leave($__internal_df27d10f8b6c15fba17563c7c6b973bee671d2cec4874ac097e2f57372bb0c90_prof);

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
        return array (  110 => 32,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  74 => 22,  70 => 21,  53 => 6,  47 => 5,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
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
