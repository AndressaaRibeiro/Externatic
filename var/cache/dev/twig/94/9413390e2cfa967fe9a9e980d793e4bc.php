<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mention/index.html.twig */
class __TwigTemplate_aeab7f6d73e9c006f7b261e259166d0e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mention/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mention/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mention/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mentions légales";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

   <section class=\"page-title title-bg17\">
       <div class=\"d-table\">
           <div class=\"d-table-cell\">
               <h2>Mentions légales</h2>
               <ul>
                   <li>
                       <a href=\"/\">Home</a>
                   </li>
                   <li>Mentions légales</li>
               </ul>
           </div>
       </div>
       <div class=\"lines\">
           <div class=\"line\"></div>
           <div class=\"line\"></div>
           <div class=\"line\"></div>
       </div>
   </section>

<div class=\"example-wrapper text-center\">
    <h1 class=\"mt-5\">Mentions légales</h1>
    <br>

    <p>Ce site est la propriété de :<br>
    EXTERNATIC<br>
    1 Rue Racine<br>
    44000 NANTES<br>
    <br>
    SIREN : 800 426 629<br>
    <br>
    <br>
    Responsable de la rédaction : Franck Gascard<br>
    <br>
    Conception et réalisation du site<br>
    iLoofo<br>
    Web & E-Commerce<br>
    7 Boulevard Ampère – 44470 Carquefou<br>
    <br>
    <br>
    Hébergement :<br>
    OVH SAS<br>
    2 rue Kellermann – 59100 Roubaix – France</p><br>
    <br>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "mention/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mentions légales{% endblock %}

{% block body %}


   <section class=\"page-title title-bg17\">
       <div class=\"d-table\">
           <div class=\"d-table-cell\">
               <h2>Mentions légales</h2>
               <ul>
                   <li>
                       <a href=\"/\">Home</a>
                   </li>
                   <li>Mentions légales</li>
               </ul>
           </div>
       </div>
       <div class=\"lines\">
           <div class=\"line\"></div>
           <div class=\"line\"></div>
           <div class=\"line\"></div>
       </div>
   </section>

<div class=\"example-wrapper text-center\">
    <h1 class=\"mt-5\">Mentions légales</h1>
    <br>

    <p>Ce site est la propriété de :<br>
    EXTERNATIC<br>
    1 Rue Racine<br>
    44000 NANTES<br>
    <br>
    SIREN : 800 426 629<br>
    <br>
    <br>
    Responsable de la rédaction : Franck Gascard<br>
    <br>
    Conception et réalisation du site<br>
    iLoofo<br>
    Web & E-Commerce<br>
    7 Boulevard Ampère – 44470 Carquefou<br>
    <br>
    <br>
    Hébergement :<br>
    OVH SAS<br>
    2 rue Kellermann – 59100 Roubaix – France</p><br>
    <br>
</div>
{% endblock %}
", "mention/index.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/mention/index.html.twig");
    }
}
