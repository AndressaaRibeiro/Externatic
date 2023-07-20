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

/* profil/favorites.html.twig */
class __TwigTemplate_d05a29d9e5412d37c2dbc1e1d1de0e48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/favorites.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/favorites.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/favorites.html.twig", 1);
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

        echo "Mes offres en favoris";
        
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
        $this->loadTemplate("profil/favorites.html.twig", "profil/favorites.html.twig", 7, "287385927")->display($context);
        // line 72
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/favorites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 72,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes offres en favoris{% endblock %}

{% block body %}

    {% embed '_dashboardProfil.html.twig' %}

        {% block extra_content %}
            <div class=\"card mx-auto mt-4 p-4\" style=\"width: 95%\">
                <h1 class=\"mb-4\">Mes offres en favoris</h1>
                {% if favorites is empty %}
                    <p>Aucune offre en favoris pour le moment.</p>
                {% else %}
                    <div class=\"row\">
                        {% for favorite in favorites %}
                            <div class=\"col-md-6\">
\t\t\t\t\t\t            <div class=\"job-card\">
\t\t\t\t\t\t\t            <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t            <div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t            <div class=\"thumb-img\">
\t\t\t\t\t\t\t\t\t\t            <a href=\"job-details.html\">
                                                        <img src=\"{{ vich_uploader_asset(favorite.company, 'posterFile') }}\" alt=\"{{ favorite.company.name }}\">
\t\t\t\t\t\t\t\t\t\t            </a>
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            <div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t            <div class=\"job-info\">
\t\t\t\t\t\t\t\t\t\t            <h3>
\t\t\t\t\t\t\t\t\t\t\t            <a href=\"{{ path('app_offer_show', {slug:favorite.slug}) }}\">{{ favorite.title }}</a>
\t\t\t\t\t\t\t\t\t\t            </h3>
\t\t\t\t\t\t\t\t\t\t            <ul>
\t\t\t\t\t\t\t\t\t\t\t            <li>Via {{favorite.title}}</li>
\t\t\t\t\t\t\t\t\t\t\t
                                                        <li>
\t\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-location-plus'></i>
\t\t\t\t\t\t\t\t\t\t\t\t            {{ favorite.location }}
\t\t\t\t\t\t\t\t\t\t\t            </li>
\t\t\t\t\t\t\t\t\t\t\t            <li>
\t\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-briefcase' ></i>
\t\t\t\t\t\t\t\t\t\t\t\t            {{ favorite.salaryRange }}
\t\t\t\t\t\t\t\t\t\t\t            </li>
\t\t\t\t\t\t\t\t\t\t            </ul>
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            </div>

\t\t\t\t\t\t\t\t            <div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t            <div class=\"job-save\">
\t\t\t\t\t\t\t\t\t\t            <span>{{ favorite.contractType }}</span>
                                                    {% if app.user %}
\t\t\t\t\t\t\t\t\t\t            <a class=\"watchlist\" data-no-swup href=\"{{ path('app_offer_watchlist', {slug: favorite.slug})}}\">
                                                        <i class=\" bi {{app.user.isInWatchlist(favorite) ? 'bi-heart-fill' : 'bi-heart' }}\"></i>
                                                    </a>
                                                    {% endif %}
\t\t\t\t\t\t\t\t\t\t            <p>
\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-stopwatch' ></i>
\t\t\t\t\t\t\t\t\t\t\t            {{ favorite.datePosted ? favorite.datePosted|date('d-m-Y') : '' }}
\t\t\t\t\t\t\t\t\t\t            </p>
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
    
{% endblock %}", "profil/favorites.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/profil/favorites.html.twig");
    }
}


/* profil/favorites.html.twig */
class __TwigTemplate_d05a29d9e5412d37c2dbc1e1d1de0e48___287385927 extends Template
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
        return "_dashboardProfil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/favorites.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/favorites.html.twig"));

        $this->parent = $this->loadTemplate("_dashboardProfil.html.twig", "profil/favorites.html.twig", 7);
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
                <h1 class=\"mb-4\">Mes offres en favoris</h1>
                ";
        // line 12
        if (twig_test_empty((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "                    <p>Aucune offre en favoris pour le moment.</p>
                ";
        } else {
            // line 15
            echo "                    <div class=\"row\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
                // line 17
                echo "                            <div class=\"col-md-6\">
\t\t\t\t\t\t            <div class=\"job-card\">
\t\t\t\t\t\t\t            <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t            <div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t            <div class=\"thumb-img\">
\t\t\t\t\t\t\t\t\t\t            <a href=\"job-details.html\">
                                                        <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, $context["favorite"], "company", [], "any", false, false, false, 23), "posterFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "company", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["favorite"], "slug", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 31), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t            </h3>
\t\t\t\t\t\t\t\t\t\t            <ul>
\t\t\t\t\t\t\t\t\t\t\t            <li>Via ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 34), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t\t
                                                        <li>
\t\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-location-plus'></i>
\t\t\t\t\t\t\t\t\t\t\t\t            ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "location", [], "any", false, false, false, 38), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t            </li>
\t\t\t\t\t\t\t\t\t\t\t            <li>
\t\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-briefcase' ></i>
\t\t\t\t\t\t\t\t\t\t\t\t            ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "salaryRange", [], "any", false, false, false, 42), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t            </li>
\t\t\t\t\t\t\t\t\t\t            </ul>
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            </div>

\t\t\t\t\t\t\t\t            <div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t            <div class=\"job-save\">
\t\t\t\t\t\t\t\t\t\t            <span>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "contractType", [], "any", false, false, false, 50), "html", null, true);
                echo "</span>
                                                    ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t\t            <a class=\"watchlist\" data-no-swup href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer_watchlist", ["slug" => twig_get_attribute($this->env, $this->source, $context["favorite"], "slug", [], "any", false, false, false, 52)]), "html", null, true);
                    echo "\">
                                                        <i class=\" bi ";
                    // line 53
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "isInWatchlist", [0 => $context["favorite"]], "method", false, false, false, 53)) ? ("bi-heart-fill") : ("bi-heart"));
                    echo "\"></i>
                                                    </a>
                                                    ";
                }
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t            <p>
\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-stopwatch' ></i>
\t\t\t\t\t\t\t\t\t\t\t            ";
                // line 58
                ((twig_get_attribute($this->env, $this->source, $context["favorite"], "datePosted", [], "any", false, false, false, 58)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "datePosted", [], "any", false, false, false, 58), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "
\t\t\t\t\t\t\t\t\t\t            </p>
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t            </div>\t
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                    </div>
                ";
        }
        // line 68
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/favorites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 68,  356 => 66,  342 => 58,  338 => 56,  332 => 53,  327 => 52,  325 => 51,  321 => 50,  310 => 42,  303 => 38,  296 => 34,  288 => 31,  275 => 23,  267 => 17,  263 => 16,  260 => 15,  256 => 13,  254 => 12,  250 => 10,  240 => 9,  217 => 7,  93 => 72,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes offres en favoris{% endblock %}

{% block body %}

    {% embed '_dashboardProfil.html.twig' %}

        {% block extra_content %}
            <div class=\"card mx-auto mt-4 p-4\" style=\"width: 95%\">
                <h1 class=\"mb-4\">Mes offres en favoris</h1>
                {% if favorites is empty %}
                    <p>Aucune offre en favoris pour le moment.</p>
                {% else %}
                    <div class=\"row\">
                        {% for favorite in favorites %}
                            <div class=\"col-md-6\">
\t\t\t\t\t\t            <div class=\"job-card\">
\t\t\t\t\t\t\t            <div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t            <div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t            <div class=\"thumb-img\">
\t\t\t\t\t\t\t\t\t\t            <a href=\"job-details.html\">
                                                        <img src=\"{{ vich_uploader_asset(favorite.company, 'posterFile') }}\" alt=\"{{ favorite.company.name }}\">
\t\t\t\t\t\t\t\t\t\t            </a>
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            <div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t            <div class=\"job-info\">
\t\t\t\t\t\t\t\t\t\t            <h3>
\t\t\t\t\t\t\t\t\t\t\t            <a href=\"{{ path('app_offer_show', {slug:favorite.slug}) }}\">{{ favorite.title }}</a>
\t\t\t\t\t\t\t\t\t\t            </h3>
\t\t\t\t\t\t\t\t\t\t            <ul>
\t\t\t\t\t\t\t\t\t\t\t            <li>Via {{favorite.title}}</li>
\t\t\t\t\t\t\t\t\t\t\t
                                                        <li>
\t\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-location-plus'></i>
\t\t\t\t\t\t\t\t\t\t\t\t            {{ favorite.location }}
\t\t\t\t\t\t\t\t\t\t\t            </li>
\t\t\t\t\t\t\t\t\t\t\t            <li>
\t\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-briefcase' ></i>
\t\t\t\t\t\t\t\t\t\t\t\t            {{ favorite.salaryRange }}
\t\t\t\t\t\t\t\t\t\t\t            </li>
\t\t\t\t\t\t\t\t\t\t            </ul>
\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t            </div>

\t\t\t\t\t\t\t\t            <div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t            <div class=\"job-save\">
\t\t\t\t\t\t\t\t\t\t            <span>{{ favorite.contractType }}</span>
                                                    {% if app.user %}
\t\t\t\t\t\t\t\t\t\t            <a class=\"watchlist\" data-no-swup href=\"{{ path('app_offer_watchlist', {slug: favorite.slug})}}\">
                                                        <i class=\" bi {{app.user.isInWatchlist(favorite) ? 'bi-heart-fill' : 'bi-heart' }}\"></i>
                                                    </a>
                                                    {% endif %}
\t\t\t\t\t\t\t\t\t\t            <p>
\t\t\t\t\t\t\t\t\t\t\t            <i class='bx bx-stopwatch' ></i>
\t\t\t\t\t\t\t\t\t\t\t            {{ favorite.datePosted ? favorite.datePosted|date('d-m-Y') : '' }}
\t\t\t\t\t\t\t\t\t\t            </p>
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
    
{% endblock %}", "profil/favorites.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/profil/favorites.html.twig");
    }
}
