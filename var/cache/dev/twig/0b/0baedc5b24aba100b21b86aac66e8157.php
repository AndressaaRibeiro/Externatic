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

/* offer/index.html.twig */
class __TwigTemplate_66c1b10b6229e1fccf650eb484ac24d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offer/index.html.twig", 1);
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

        echo "Offres d'emploi";
        
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
        echo "    <!-- Page Title Start -->
        <section class=\"page-title title-bg2\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <h2>chercher un emploi</h2>
                    <ul>
                        <li>
                            <a href=\"/\">Accueil</a>
                        </li>
                        <li>Chercher un emploi</li>
                    </ul>
                </div>
            </div>
            <div class=\"lines\">
                <div class=\"line\"></div>
                <div class=\"line\"></div>
                <div class=\"line\"></div>
            </div>
        </section>
        <!-- Page Title End -->

        <!-- Find Section Start -->
        <div class=\"find-section ptb-100 \">
            <div class=\"container\">
                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["class" => "find-form"]]);
        echo "
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "search", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Titre de l'emploi ou mot-clé"], "label" => false]);
        echo "
                                <i class='bx bx-search-alt'></i>
                            </div>
                        </div>
    
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "location", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Localisation"], "label" => false]);
        echo "
                                <i class='bx bx-location-plus'></i>
                            </div>
                        </div>

                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "category", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
    
                        <div class=\"col-lg-3\">
                            <button type=\"submit\" class=\"find-btn\">
                                Emploi
                                <i class='bx bx-search'></i>
                            </button>
                        </div>
                    </div>
                ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <!-- Find Section End -->
    
        <!-- Job Category Section Start -->
        <div class=\"category-style-two pb-70\"> 
            <div class=\"container\">
                <div class=\"section-title text-center\">
                    <h2 class=''>Catégorie d'emplois populaires</h2>
                    <p>Explorez les domaines les plus recherchés sur le marché du travail : technologie, finance, santé, enseignement. Ces emplois offrent des opportunités passionnantes avec croissance et salaires compétitifs.</p>
                </div>

                <div class=\"row\">
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 74
            echo "                    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["category"], "offers", [], "any", false, false, false, 74))) {
                // line 75
                echo "                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"category-item\">
                                <i class=\"bx bx-desktop\"></i>
                                <h4>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 78), "html", null, true);
                echo "</h4>
                                <p>Disponible</p>   
                            </div>
                        </div>
                    ";
            }
            // line 83
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
                </div>
            </div>
        </div>
        <!-- Job Category Section End -->

\t\t<!-- Jobs Section Start -->
\t\t<section class=\"job-section pb-70\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>Offres d'emploi susceptibles de vous intéresser</h2>
\t\t\t\t\t<p>Découvrez des offres d'emploi susceptibles de vous intéresser. Explorez des opportunités passionnantes dans différents domaines tels que la technologie, la finance, la santé ou l'enseignement. Trouvez des postes avec croissance professionnelle et rémunération compétitive. Explorez les descriptions de poste, exigences et compétences requises pour ces opportunités.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 99
            echo "\t\t\t\t
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"job-card\">
\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<div class=\"thumb-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"job-details.html\">
                                            <img src=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, $context["offer"], "company", [], "any", false, false, false, 106), "posterFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offer"], "company", [], "any", false, false, false, 106), "name", [], "any", false, false, false, 106), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"job-info\">
\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["offer"], "slug", [], "any", false, false, false, 114)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "title", [], "any", false, false, false, 114), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>Via ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offer"], "company", [], "any", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t
                                            <li> ";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offer"], "category", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-location-plus'></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "location", [], "any", false, false, false, 121), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-filter-alt' ></i>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-briefcase' ></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "salaryRange", [], "any", false, false, false, 129), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<div class=\"job-save\">
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "contractType", [], "any", false, false, false, 137), "html", null, true);
            echo "</span>
                                        ";
            // line 138
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138)) {
                // line 139
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer_watchlist", ["slug" => twig_get_attribute($this->env, $this->source, $context["offer"], "slug", [], "any", false, false, false, 139)]), "html", null, true);
                echo "\">
                                            <i class=\" bi ";
                // line 140
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "isInWatchlist", [0 => $context["offer"]], "method", false, false, false, 140)) ? ("bi-heart-fill") : ("bi-heart"));
                echo "\"></i>
                                        </a>
                                        ";
            }
            // line 143
            echo "\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-stopwatch' ></i>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 145
            ((twig_get_attribute($this->env, $this->source, $context["offer"], "datePosted", [], "any", false, false, false, 145)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "datePosted", [], "any", false, false, false, 145), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                            <button class=\"btn m-3\" type=\"submit\" style=\"background-color: #001935; color:white;\"><a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["offer"], "slug", [], "any", false, false, false, 150)]), "html", null, true);
            echo "\">Voir l'offre</a></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
        ";
        // line 157
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENTREPRISE")) {
            // line 158
            echo "        <button class=\"btn m-3\" type=\"submit\" style=\"background-color: #001935; color:white;\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer_new");
            echo "\">Déposer une offre</a></button>
\t\t<!-- Jobs Section End -->
        ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 158,  324 => 157,  319 => 154,  309 => 150,  301 => 145,  297 => 143,  291 => 140,  286 => 139,  284 => 138,  280 => 137,  269 => 129,  258 => 121,  253 => 119,  248 => 117,  240 => 114,  227 => 106,  218 => 99,  214 => 98,  198 => 84,  192 => 83,  184 => 78,  179 => 75,  176 => 74,  172 => 73,  155 => 59,  141 => 48,  131 => 41,  121 => 34,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offres d'emploi{% endblock %}

{% block body %}
    <!-- Page Title Start -->
        <section class=\"page-title title-bg2\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <h2>chercher un emploi</h2>
                    <ul>
                        <li>
                            <a href=\"/\">Accueil</a>
                        </li>
                        <li>Chercher un emploi</li>
                    </ul>
                </div>
            </div>
            <div class=\"lines\">
                <div class=\"line\"></div>
                <div class=\"line\"></div>
                <div class=\"line\"></div>
            </div>
        </section>
        <!-- Page Title End -->

        <!-- Find Section Start -->
        <div class=\"find-section ptb-100 \">
            <div class=\"container\">
                {{ form_start(form, {'attr':{'class':'find-form'}}) }}
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                {{ form_row(form.search, {'attr': {'class': 'form-control', 'placeholder': 'Titre de l\\'emploi ou mot-clé'}, 'label': false}) }}
                                <i class='bx bx-search-alt'></i>
                            </div>
                        </div>
    
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                {{ form_row(form.location, {'attr': {'class': 'form-control', 'placeholder': 'Localisation'}, 'label': false}) }}
                                <i class='bx bx-location-plus'></i>
                            </div>
                        </div>

                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                {{ form_widget(form.category, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
    
                        <div class=\"col-lg-3\">
                            <button type=\"submit\" class=\"find-btn\">
                                Emploi
                                <i class='bx bx-search'></i>
                            </button>
                        </div>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
        <!-- Find Section End -->
    
        <!-- Job Category Section Start -->
        <div class=\"category-style-two pb-70\"> 
            <div class=\"container\">
                <div class=\"section-title text-center\">
                    <h2 class=''>Catégorie d'emplois populaires</h2>
                    <p>Explorez les domaines les plus recherchés sur le marché du travail : technologie, finance, santé, enseignement. Ces emplois offrent des opportunités passionnantes avec croissance et salaires compétitifs.</p>
                </div>

                <div class=\"row\">
                {% for category in categories %}
                    {% if category.offers is not empty %}
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"category-item\">
                                <i class=\"bx bx-desktop\"></i>
                                <h4>{{category.name }}</h4>
                                <p>Disponible</p>   
                            </div>
                        </div>
                    {% endif %}
                {% endfor %}

                </div>
            </div>
        </div>
        <!-- Job Category Section End -->

\t\t<!-- Jobs Section Start -->
\t\t<section class=\"job-section pb-70\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>Offres d'emploi susceptibles de vous intéresser</h2>
\t\t\t\t\t<p>Découvrez des offres d'emploi susceptibles de vous intéresser. Explorez des opportunités passionnantes dans différents domaines tels que la technologie, la finance, la santé ou l'enseignement. Trouvez des postes avec croissance professionnelle et rémunération compétitive. Explorez les descriptions de poste, exigences et compétences requises pour ces opportunités.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for offer in offers %}
\t\t\t\t
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"job-card\">
\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<div class=\"thumb-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"job-details.html\">
                                            <img src=\"{{ vich_uploader_asset(offer.company, 'posterFile') }}\" alt=\"{{ offer.company.name }}\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"job-info\">
\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offer_show', {slug:offer.slug}) }}\">{{ offer.title }}</a>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>Via {{offer.company.name}}</li>
\t\t\t\t\t\t\t\t\t\t\t
                                            <li> {{offer.category.name}}</li>
\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-location-plus'></i>
\t\t\t\t\t\t\t\t\t\t\t\t{{ offer.location }}
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-filter-alt' ></i>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-briefcase' ></i>
\t\t\t\t\t\t\t\t\t\t\t\t{{ offer.salaryRange }}
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<div class=\"job-save\">
\t\t\t\t\t\t\t\t\t\t<span>{{ offer.contractType }}</span>
                                        {% if app.user %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offer_watchlist', {slug: offer.slug})}}\">
                                            <i class=\" bi {{app.user.isInWatchlist(offer) ? 'bi-heart-fill' : 'bi-heart' }}\"></i>
                                        </a>
                                        {% endif %}
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-stopwatch' ></i>
\t\t\t\t\t\t\t\t\t\t\t{{ offer.datePosted ? offer.datePosted|date('d-m-Y') : '' }}
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                            <button class=\"btn m-3\" type=\"submit\" style=\"background-color: #001935; color:white;\"><a href=\"{{ path('app_offer_show', {slug:offer.slug}) }}\">Voir l'offre</a></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
        {% if is_granted(\"ROLE_ENTREPRISE\") %}
        <button class=\"btn m-3\" type=\"submit\" style=\"background-color: #001935; color:white;\"><a href=\"{{ path('app_offer_new') }}\">Déposer une offre</a></button>
\t\t<!-- Jobs Section End -->
        {% endif %}
{% endblock %}
", "offer/index.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/offer/index.html.twig");
    }
}
