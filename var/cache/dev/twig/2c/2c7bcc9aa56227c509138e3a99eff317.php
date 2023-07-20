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

/* profil_company/mesOffres.html.twig */
class __TwigTemplate_8ded5b57f37d2e17bc007e0e255bc4ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil_company/mesOffres.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil_company/mesOffres.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil_company/mesOffres.html.twig", 1);
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

        echo "Mes offres";
        
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
        $this->loadTemplate("profil_company/mesOffres.html.twig", "profil_company/mesOffres.html.twig", 7, "775083061")->display($context);
        // line 57
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil_company/mesOffres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 57,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes offres{% endblock %}

{% block body %}

    {% embed '_dashboardCompany.html.twig' %}

        {% block extra_content %}
            <div class=\"card mx-auto mt-4 p-4\" style=\"width: 95%\">
                <h1 class=\"mb-4\">Mes offres </h1>
                {% if mesOffres is empty %}
                    <p>Aucune offre pour le moment.</p>
                {% else %}
                    <div class=\"row\">
                        {% for mesOffre in mesOffres %}
                            <div class=\"col-md-6\">
\t\t\t\t\t\t            <div class=\"job-card\">
\t\t\t\t\t\t\t            <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t            <div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t            <div class=\"thumb-img\">
\t\t\t\t\t\t\t\t\t\t            <a href=\"job-details.html\">
                                                        <img src=\"{{ vich_uploader_asset(mesOffre.company, 'posterFile') }}\" alt=\"{{ mesOffre.company.name }}\">
\t\t\t\t\t\t\t\t\t\t            </a>
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            <div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t            <div class=\"job-info\">
\t\t\t\t\t\t\t\t\t\t            <h3>
\t\t\t\t\t\t\t\t\t\t\t            <a href=\"{{ path('app_offer_show', {slug:mesOffre.slug}) }}\">{{ mesOffre.title }}</a>
\t\t\t\t\t\t\t\t\t\t            </h3>
\t\t\t\t\t\t\t\t\t\t            <ul>
\t\t\t\t\t\t\t\t\t\t\t            <li>Via {{mesOffre.title}}</li>
\t\t\t\t\t\t\t\t\t\t\t
                                                        <li>
\t\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-location-plus'></i>
\t\t\t\t\t\t\t\t\t\t\t\t            {{ mesOffre.location }}
\t\t\t\t\t\t\t\t\t\t\t            </li>
\t\t\t\t\t\t\t\t\t\t\t            <li>
\t\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-briefcase' ></i>
\t\t\t\t\t\t\t\t\t\t\t\t            {{ mesOffre.salaryRange }}
\t\t\t\t\t\t\t\t\t\t\t            </li>
\t\t\t\t\t\t\t\t\t\t            </ul>
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t            </div>\t
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        {% endblock %} 

    {% endembed %}
    
{% endblock %}", "profil_company/mesOffres.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/profil_company/mesOffres.html.twig");
    }
}


/* profil_company/mesOffres.html.twig */
class __TwigTemplate_8ded5b57f37d2e17bc007e0e255bc4ab___775083061 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil_company/mesOffres.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil_company/mesOffres.html.twig"));

        $this->parent = $this->loadTemplate("_dashboardCompany.html.twig", "profil_company/mesOffres.html.twig", 7);
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
        echo "            <div class=\"card mx-auto mt-4 p-4\" style=\"width: 95%\">
                <h1 class=\"mb-4\">Mes offres </h1>
                ";
        // line 12
        if (twig_test_empty((isset($context["mesOffres"]) || array_key_exists("mesOffres", $context) ? $context["mesOffres"] : (function () { throw new RuntimeError('Variable "mesOffres" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "                    <p>Aucune offre pour le moment.</p>
                ";
        } else {
            // line 15
            echo "                    <div class=\"row\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mesOffres"]) || array_key_exists("mesOffres", $context) ? $context["mesOffres"] : (function () { throw new RuntimeError('Variable "mesOffres" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["mesOffre"]) {
                // line 17
                echo "                            <div class=\"col-md-6\">
\t\t\t\t\t\t            <div class=\"job-card\">
\t\t\t\t\t\t\t            <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t            <div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t            <div class=\"thumb-img\">
\t\t\t\t\t\t\t\t\t\t            <a href=\"job-details.html\">
                                                        <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, $context["mesOffre"], "company", [], "any", false, false, false, 23), "posterFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mesOffre"], "company", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t            </a>
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            <div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t            <div class=\"job-info\">
\t\t\t\t\t\t\t\t\t\t            <h3>
\t\t\t\t\t\t\t\t\t\t\t            <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["mesOffre"], "slug", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesOffre"], "title", [], "any", false, false, false, 31), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t            </h3>
\t\t\t\t\t\t\t\t\t\t            <ul>
\t\t\t\t\t\t\t\t\t\t\t            <li>Via ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesOffre"], "title", [], "any", false, false, false, 34), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t\t
                                                        <li>
\t\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-location-plus'></i>
\t\t\t\t\t\t\t\t\t\t\t\t            ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesOffre"], "location", [], "any", false, false, false, 38), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t            </li>
\t\t\t\t\t\t\t\t\t\t\t            <li>
\t\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-briefcase' ></i>
\t\t\t\t\t\t\t\t\t\t\t\t            ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesOffre"], "salaryRange", [], "any", false, false, false, 42), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t            </li>
\t\t\t\t\t\t\t\t\t\t            </ul>
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t            </div>\t
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesOffre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                    </div>
                ";
        }
        // line 53
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil_company/mesOffres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 53,  310 => 51,  295 => 42,  288 => 38,  281 => 34,  273 => 31,  260 => 23,  252 => 17,  248 => 16,  245 => 15,  241 => 13,  239 => 12,  235 => 10,  225 => 9,  202 => 7,  93 => 57,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes offres{% endblock %}

{% block body %}

    {% embed '_dashboardCompany.html.twig' %}

        {% block extra_content %}
            <div class=\"card mx-auto mt-4 p-4\" style=\"width: 95%\">
                <h1 class=\"mb-4\">Mes offres </h1>
                {% if mesOffres is empty %}
                    <p>Aucune offre pour le moment.</p>
                {% else %}
                    <div class=\"row\">
                        {% for mesOffre in mesOffres %}
                            <div class=\"col-md-6\">
\t\t\t\t\t\t            <div class=\"job-card\">
\t\t\t\t\t\t\t            <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t            <div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t            <div class=\"thumb-img\">
\t\t\t\t\t\t\t\t\t\t            <a href=\"job-details.html\">
                                                        <img src=\"{{ vich_uploader_asset(mesOffre.company, 'posterFile') }}\" alt=\"{{ mesOffre.company.name }}\">
\t\t\t\t\t\t\t\t\t\t            </a>
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            <div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t            <div class=\"job-info\">
\t\t\t\t\t\t\t\t\t\t            <h3>
\t\t\t\t\t\t\t\t\t\t\t            <a href=\"{{ path('app_offer_show', {slug:mesOffre.slug}) }}\">{{ mesOffre.title }}</a>
\t\t\t\t\t\t\t\t\t\t            </h3>
\t\t\t\t\t\t\t\t\t\t            <ul>
\t\t\t\t\t\t\t\t\t\t\t            <li>Via {{mesOffre.title}}</li>
\t\t\t\t\t\t\t\t\t\t\t
                                                        <li>
\t\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-location-plus'></i>
\t\t\t\t\t\t\t\t\t\t\t\t            {{ mesOffre.location }}
\t\t\t\t\t\t\t\t\t\t\t            </li>
\t\t\t\t\t\t\t\t\t\t\t            <li>
\t\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-briefcase' ></i>
\t\t\t\t\t\t\t\t\t\t\t\t            {{ mesOffre.salaryRange }}
\t\t\t\t\t\t\t\t\t\t\t            </li>
\t\t\t\t\t\t\t\t\t\t            </ul>
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t            </div>\t
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        {% endblock %} 

    {% endembed %}
    
{% endblock %}", "profil_company/mesOffres.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/profil_company/mesOffres.html.twig");
    }
}
