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
        $__internal_a3fcc5bc951c4d300cfe11c563b440db662791d9a00e48e106ae05e8b2483bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fcc5bc951c4d300cfe11c563b440db662791d9a00e48e106ae05e8b2483bd7->enter($__internal_a3fcc5bc951c4d300cfe11c563b440db662791d9a00e48e106ae05e8b2483bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Alumnos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3fcc5bc951c4d300cfe11c563b440db662791d9a00e48e106ae05e8b2483bd7->leave($__internal_a3fcc5bc951c4d300cfe11c563b440db662791d9a00e48e106ae05e8b2483bd7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_23a61a533881dd2ad05a735433db9d194902d7b0854e0a3c7f5a0c1b49960d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a61a533881dd2ad05a735433db9d194902d7b0854e0a3c7f5a0c1b49960d2f->enter($__internal_23a61a533881dd2ad05a735433db9d194902d7b0854e0a3c7f5a0c1b49960d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_23a61a533881dd2ad05a735433db9d194902d7b0854e0a3c7f5a0c1b49960d2f->leave($__internal_23a61a533881dd2ad05a735433db9d194902d7b0854e0a3c7f5a0c1b49960d2f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_763d19a511df1653163829a52b7a263adba797a320c5c4808d9411d1ebb44ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763d19a511df1653163829a52b7a263adba797a320c5c4808d9411d1ebb44ca6->enter($__internal_763d19a511df1653163829a52b7a263adba797a320c5c4808d9411d1ebb44ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_763d19a511df1653163829a52b7a263adba797a320c5c4808d9411d1ebb44ca6->leave($__internal_763d19a511df1653163829a52b7a263adba797a320c5c4808d9411d1ebb44ca6_prof);

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
