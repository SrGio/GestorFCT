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
        $__internal_5820a97852c01cface8fad62ef80e78417fd00f796478991d6963c8fbac34d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5820a97852c01cface8fad62ef80e78417fd00f796478991d6963c8fbac34d49->enter($__internal_5820a97852c01cface8fad62ef80e78417fd00f796478991d6963c8fbac34d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Empresas:empresas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5820a97852c01cface8fad62ef80e78417fd00f796478991d6963c8fbac34d49->leave($__internal_5820a97852c01cface8fad62ef80e78417fd00f796478991d6963c8fbac34d49_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a77e41023da6ecdf7cdf3c2d3ab36321e4c49d0ef7fa856c52d617c4fadfa3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77e41023da6ecdf7cdf3c2d3ab36321e4c49d0ef7fa856c52d617c4fadfa3fd->enter($__internal_a77e41023da6ecdf7cdf3c2d3ab36321e4c49d0ef7fa856c52d617c4fadfa3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_a77e41023da6ecdf7cdf3c2d3ab36321e4c49d0ef7fa856c52d617c4fadfa3fd->leave($__internal_a77e41023da6ecdf7cdf3c2d3ab36321e4c49d0ef7fa856c52d617c4fadfa3fd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d996beb9e22ad8c069c390ea4b493c9d2cc61ef9254b590b4478ce3a75e7a3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d996beb9e22ad8c069c390ea4b493c9d2cc61ef9254b590b4478ce3a75e7a3d9->enter($__internal_d996beb9e22ad8c069c390ea4b493c9d2cc61ef9254b590b4478ce3a75e7a3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d996beb9e22ad8c069c390ea4b493c9d2cc61ef9254b590b4478ce3a75e7a3d9->leave($__internal_d996beb9e22ad8c069c390ea4b493c9d2cc61ef9254b590b4478ce3a75e7a3d9_prof);

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
