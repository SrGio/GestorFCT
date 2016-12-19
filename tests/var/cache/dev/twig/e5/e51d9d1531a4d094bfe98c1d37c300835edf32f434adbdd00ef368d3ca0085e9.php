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
        $__internal_fb8631d5a33a3d510a203433f2380a5d1506d1e50158bf8709571be1e805ff26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8631d5a33a3d510a203433f2380a5d1506d1e50158bf8709571be1e805ff26->enter($__internal_fb8631d5a33a3d510a203433f2380a5d1506d1e50158bf8709571be1e805ff26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Alumnos:alumnos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb8631d5a33a3d510a203433f2380a5d1506d1e50158bf8709571be1e805ff26->leave($__internal_fb8631d5a33a3d510a203433f2380a5d1506d1e50158bf8709571be1e805ff26_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf8b4ba28e0a6663f560e482612ed427ed67e4f7b0db54a47426f7e3089b6b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8b4ba28e0a6663f560e482612ed427ed67e4f7b0db54a47426f7e3089b6b20->enter($__internal_cf8b4ba28e0a6663f560e482612ed427ed67e4f7b0db54a47426f7e3089b6b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alumnos";
        
        $__internal_cf8b4ba28e0a6663f560e482612ed427ed67e4f7b0db54a47426f7e3089b6b20->leave($__internal_cf8b4ba28e0a6663f560e482612ed427ed67e4f7b0db54a47426f7e3089b6b20_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b01faa839b62a1e76d92c4e42ae05954fc54102a188b2d5b9721d7ef81aab434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01faa839b62a1e76d92c4e42ae05954fc54102a188b2d5b9721d7ef81aab434->enter($__internal_b01faa839b62a1e76d92c4e42ae05954fc54102a188b2d5b9721d7ef81aab434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_b01faa839b62a1e76d92c4e42ae05954fc54102a188b2d5b9721d7ef81aab434->leave($__internal_b01faa839b62a1e76d92c4e42ae05954fc54102a188b2d5b9721d7ef81aab434_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e68801acb6f5aad4918c76d7d43a51a1271163a1a436ddffd4e2392e890c8b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68801acb6f5aad4918c76d7d43a51a1271163a1a436ddffd4e2392e890c8b16->enter($__internal_e68801acb6f5aad4918c76d7d43a51a1271163a1a436ddffd4e2392e890c8b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e68801acb6f5aad4918c76d7d43a51a1271163a1a436ddffd4e2392e890c8b16->leave($__internal_e68801acb6f5aad4918c76d7d43a51a1271163a1a436ddffd4e2392e890c8b16_prof);

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
