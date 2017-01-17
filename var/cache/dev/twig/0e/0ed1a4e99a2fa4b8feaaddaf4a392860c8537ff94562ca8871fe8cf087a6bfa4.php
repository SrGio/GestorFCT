<?php

/* FctBundle:Profesores:profesores.html.twig */
class __TwigTemplate_5dc92577ee52b9032567ba0b091520d1b22c41ae25f46387d0c79d1100954525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FctBundle:Profesores:profesores.html.twig", 1);
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
        $__internal_cf99f8bee6fd6395d35e1f927ec4fe462e29f2e84654ca996fc93200f32aa133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf99f8bee6fd6395d35e1f927ec4fe462e29f2e84654ca996fc93200f32aa133->enter($__internal_cf99f8bee6fd6395d35e1f927ec4fe462e29f2e84654ca996fc93200f32aa133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FctBundle:Profesores:profesores.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf99f8bee6fd6395d35e1f927ec4fe462e29f2e84654ca996fc93200f32aa133->leave($__internal_cf99f8bee6fd6395d35e1f927ec4fe462e29f2e84654ca996fc93200f32aa133_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1df8cad7eb83de32d8e73bb7cb5262465381b0ee7796fe54fcde124c915e6082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df8cad7eb83de32d8e73bb7cb5262465381b0ee7796fe54fcde124c915e6082->enter($__internal_1df8cad7eb83de32d8e73bb7cb5262465381b0ee7796fe54fcde124c915e6082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Empresas FCT";
        
        $__internal_1df8cad7eb83de32d8e73bb7cb5262465381b0ee7796fe54fcde124c915e6082->leave($__internal_1df8cad7eb83de32d8e73bb7cb5262465381b0ee7796fe54fcde124c915e6082_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aac0c29d740adc85ded0b40aa29446b5f6d7b6e3d735ac0bc05a22453940ea1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac0c29d740adc85ded0b40aa29446b5f6d7b6e3d735ac0bc05a22453940ea1c->enter($__internal_aac0c29d740adc85ded0b40aa29446b5f6d7b6e3d735ac0bc05a22453940ea1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<table id=\"profesores\">
  <tr>
      <td>ID Profesor</td>
      <td>Nombre Profesor</td>
      <td>Apellidos</td>
  </tr>
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profesores"]) ? $context["profesores"] : $this->getContext($context, "profesores")));
        foreach ($context['_seq'] as $context["_key"] => $context["profesor"]) {
            // line 16
            echo "    <tr>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "nombre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "apellidos", array()), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</table>
  ";
        
        $__internal_aac0c29d740adc85ded0b40aa29446b5f6d7b6e3d735ac0bc05a22453940ea1c->leave($__internal_aac0c29d740adc85ded0b40aa29446b5f6d7b6e3d735ac0bc05a22453940ea1c_prof);

    }

    public function getTemplateName()
    {
        return "FctBundle:Profesores:profesores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  79 => 19,  75 => 18,  71 => 17,  68 => 16,  64 => 15,  53 => 6,  47 => 5,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}
{% block title %}Empresas FCT{% endblock %}


{% block body %}



<table id=\"profesores\">
  <tr>
      <td>ID Profesor</td>
      <td>Nombre Profesor</td>
      <td>Apellidos</td>
  </tr>
  {% for profesor in profesores %}
    <tr>
        <td>{{ profesor.id}}</td>
        <td>{{ profesor.nombre}}</td>
        <td>{{ profesor.apellidos}}</td>
    </tr>
  {% endfor %}
</table>
  {% endblock %}
";
    }
}
