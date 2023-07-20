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

/* profil_company/index.html.twig */
class __TwigTemplate_f92a5f1bbe577449f01ade567e69264f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil_company/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil_company/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil_company/index.html.twig", 1);
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

        echo "Votre Entreprise";
        
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
    ";
        // line 7
        $this->loadTemplate("profil_company/index.html.twig", "profil_company/index.html.twig", 7, "1984694424")->display($context);
        // line 26
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil_company/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre Entreprise{% endblock %}

{% block body %}
    
    {% embed '_dashboardCompany.html.twig' %}

        {% block extra_content %}
            <main class=\"content px-3 py-2\">
                <div class=\"container-fluid\">
                    <div class=\"mb-3 text-center\">
                    <h2 class=\"mt-4\">Bienvenue dans votre espace personnel</h2>
                    </div>
                </div>
                <div class=\"contact-card text-start col-9 container mt-4\">
                <p>Bienvenue sur votre tableau de bord !
                        Nous tenons tout d'abord à vous remercier de votre présence ici.<br> Votre engagement est précieux et nous sommes ravis de vous offrir cet espace pour gérer votre profil.<br>
                        Dans cette interface conviviale, vous avez la possibilité de mettre à jour votre profil, de le modifier selon vos besoins, ainsi que de supprimer votre compte si vous le souhaitez.<br>
                        <span class=\"fw-bold \">L'équipe Externatic !</span>
                    </p>
                </div>
            </main>
        {% endblock %}
    {% endembed %}

{% endblock %}
", "profil_company/index.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/profil_company/index.html.twig");
    }
}


/* profil_company/index.html.twig */
class __TwigTemplate_f92a5f1bbe577449f01ade567e69264f___1984694424 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extra_content' => [$this, 'block_extra_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "_dashboardCompany.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil_company/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil_company/index.html.twig"));

        $this->parent = $this->loadTemplate("_dashboardCompany.html.twig", "profil_company/index.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_extra_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_content"));

        // line 10
        echo "            <main class=\"content px-3 py-2\">
                <div class=\"container-fluid\">
                    <div class=\"mb-3 text-center\">
                    <h2 class=\"mt-4\">Bienvenue dans votre espace personnel</h2>
                    </div>
                </div>
                <div class=\"contact-card text-start col-9 container mt-4\">
                <p>Bienvenue sur votre tableau de bord !
                        Nous tenons tout d'abord à vous remercier de votre présence ici.<br> Votre engagement est précieux et nous sommes ravis de vous offrir cet espace pour gérer votre profil.<br>
                        Dans cette interface conviviale, vous avez la possibilité de mettre à jour votre profil, de le modifier selon vos besoins, ainsi que de supprimer votre compte si vous le souhaitez.<br>
                        <span class=\"fw-bold \">L'équipe Externatic !</span>
                    </p>
                </div>
            </main>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil_company/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 10,  195 => 9,  172 => 7,  93 => 26,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre Entreprise{% endblock %}

{% block body %}
    
    {% embed '_dashboardCompany.html.twig' %}

        {% block extra_content %}
            <main class=\"content px-3 py-2\">
                <div class=\"container-fluid\">
                    <div class=\"mb-3 text-center\">
                    <h2 class=\"mt-4\">Bienvenue dans votre espace personnel</h2>
                    </div>
                </div>
                <div class=\"contact-card text-start col-9 container mt-4\">
                <p>Bienvenue sur votre tableau de bord !
                        Nous tenons tout d'abord à vous remercier de votre présence ici.<br> Votre engagement est précieux et nous sommes ravis de vous offrir cet espace pour gérer votre profil.<br>
                        Dans cette interface conviviale, vous avez la possibilité de mettre à jour votre profil, de le modifier selon vos besoins, ainsi que de supprimer votre compte si vous le souhaitez.<br>
                        <span class=\"fw-bold \">L'équipe Externatic !</span>
                    </p>
                </div>
            </main>
        {% endblock %}
    {% endembed %}

{% endblock %}
", "profil_company/index.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/profil_company/index.html.twig");
    }
}
