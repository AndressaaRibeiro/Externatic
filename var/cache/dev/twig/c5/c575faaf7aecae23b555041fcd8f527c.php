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

/* profil/show.html.twig */
class __TwigTemplate_a01a39454ad996f3fede00638e131bf5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/show.html.twig", 1);
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

        echo "Profil";
        
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
        $this->loadTemplate("profil/show.html.twig", "profil/show.html.twig", 7, "1009375418")->display($context);
        // line 110
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 110,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil{% endblock %}

{% block body %}

    {% embed \"_dashboardProfil.html.twig\" %}

        {% block extra_content %}
    
            <section class=\"account-section ptb-100\">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <div class=\"account-details\">

                            <form id=\"edit\" >
                                <div class=\"text-center mt-4 mb-4\">
                                    <h1 class=\"text-center mt-4 mb-4\">Votre profil</h1>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre nom</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"titleProfil\" value=\"{{ profil.titleProfil }}\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Votre description</h3>
                                            <div class=\"form-group\">
                                                <textarea class=\"form-control\" id=\"descriptionProfil\" rows=\"3\" readonly>{{ profil.descriptionProfil }}</textarea>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre localisation</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"locationProfil\" value=\"{{ profil.locationProfil }}\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Vos expériences</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"experienceYear\" value=\"{{ profil.experienceYear }}\" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Vos compétences</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"skills\" value=\"{{ profil.skills }}\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Votre niveau d'étude</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"education\" value=\"{{ profil.education }}\" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Langues parlées</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"language\" value=\"{{ profil.language }}\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Votre date de naissance</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"birthDay\" value=\"{{ profil.birthDay ? profil.birthDay|date('Y-m-d') : '' }}\" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre zone géographique (km)</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"mobility\" value=\"{{ profil.mobility }}\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Votre image</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"document\" value=\"{{ profil.poster }}\" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre CV</h3>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"poster\" value=\"{{ profil.document }}\" readonly>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <a  class=\"btn\" style=\"background-color: #001935; color:white;\" href=\"{{ path('app_profil_edit', {slug: profil.slug}) }}\">Modifier votre profil</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                {{ include('profil/_delete_form.html.twig')}}
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}

    {% endembed %}

{% endblock %}
", "profil/show.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/profil/show.html.twig");
    }
}


/* profil/show.html.twig */
class __TwigTemplate_a01a39454ad996f3fede00638e131bf5___1009375418 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/show.html.twig"));

        $this->parent = $this->loadTemplate("_dashboardProfil.html.twig", "profil/show.html.twig", 7);
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
        echo "    
            <section class=\"account-section ptb-100\">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <div class=\"account-details\">

                            <form id=\"edit\" >
                                <div class=\"text-center mt-4 mb-4\">
                                    <h1 class=\"text-center mt-4 mb-4\">Votre profil</h1>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre nom</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"titleProfil\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 24, $this->source); })()), "titleProfil", [], "any", false, false, false, 24), "html", null, true);
        echo "\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Votre description</h3>
                                            <div class=\"form-group\">
                                                <textarea class=\"form-control\" id=\"descriptionProfil\" rows=\"3\" readonly>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 30, $this->source); })()), "descriptionProfil", [], "any", false, false, false, 30), "html", null, true);
        echo "</textarea>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre localisation</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"locationProfil\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 38, $this->source); })()), "locationProfil", [], "any", false, false, false, 38), "html", null, true);
        echo "\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Vos expériences</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"experienceYear\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 44, $this->source); })()), "experienceYear", [], "any", false, false, false, 44), "html", null, true);
        echo "\" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Vos compétences</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"skills\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 52, $this->source); })()), "skills", [], "any", false, false, false, 52), "html", null, true);
        echo "\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Votre niveau d'étude</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"education\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 58, $this->source); })()), "education", [], "any", false, false, false, 58), "html", null, true);
        echo "\" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Langues parlées</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"language\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 66, $this->source); })()), "language", [], "any", false, false, false, 66), "html", null, true);
        echo "\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Votre date de naissance</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"birthDay\" value=\"";
        // line 72
        ((twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 72, $this->source); })()), "birthDay", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 72, $this->source); })()), "birthDay", [], "any", false, false, false, 72), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "\" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre zone géographique (km)</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"mobility\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 80, $this->source); })()), "mobility", [], "any", false, false, false, 80), "html", null, true);
        echo "\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Votre image</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"document\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 86, $this->source); })()), "poster", [], "any", false, false, false, 86), "html", null, true);
        echo "\" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre CV</h3>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"poster\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 94, $this->source); })()), "document", [], "any", false, false, false, 94), "html", null, true);
        echo "\" readonly>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <a  class=\"btn\" style=\"background-color: #001935; color:white;\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 97, $this->source); })()), "slug", [], "any", false, false, false, 97)]), "html", null, true);
        echo "\">Modifier votre profil</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                ";
        // line 102
        echo twig_include($this->env, $context, "profil/_delete_form.html.twig");
        echo "
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 102,  411 => 97,  405 => 94,  394 => 86,  385 => 80,  374 => 72,  365 => 66,  354 => 58,  345 => 52,  334 => 44,  325 => 38,  314 => 30,  305 => 24,  289 => 10,  279 => 9,  256 => 7,  93 => 110,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil{% endblock %}

{% block body %}

    {% embed \"_dashboardProfil.html.twig\" %}

        {% block extra_content %}
    
            <section class=\"account-section ptb-100\">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <div class=\"account-details\">

                            <form id=\"edit\" >
                                <div class=\"text-center mt-4 mb-4\">
                                    <h1 class=\"text-center mt-4 mb-4\">Votre profil</h1>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre nom</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"titleProfil\" value=\"{{ profil.titleProfil }}\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Votre description</h3>
                                            <div class=\"form-group\">
                                                <textarea class=\"form-control\" id=\"descriptionProfil\" rows=\"3\" readonly>{{ profil.descriptionProfil }}</textarea>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre localisation</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"locationProfil\" value=\"{{ profil.locationProfil }}\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Vos expériences</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"experienceYear\" value=\"{{ profil.experienceYear }}\" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Vos compétences</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"skills\" value=\"{{ profil.skills }}\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Votre niveau d'étude</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"education\" value=\"{{ profil.education }}\" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Langues parlées</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"language\" value=\"{{ profil.language }}\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Votre date de naissance</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"birthDay\" value=\"{{ profil.birthDay ? profil.birthDay|date('Y-m-d') : '' }}\" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre zone géographique (km)</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"mobility\" value=\"{{ profil.mobility }}\" readonly>
                                            </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Votre image</h3>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" id=\"document\" value=\"{{ profil.poster }}\" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre CV</h3>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"poster\" value=\"{{ profil.document }}\" readonly>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <a  class=\"btn\" style=\"background-color: #001935; color:white;\" href=\"{{ path('app_profil_edit', {slug: profil.slug}) }}\">Modifier votre profil</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                {{ include('profil/_delete_form.html.twig')}}
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}

    {% endembed %}

{% endblock %}
", "profil/show.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/profil/show.html.twig");
    }
}
