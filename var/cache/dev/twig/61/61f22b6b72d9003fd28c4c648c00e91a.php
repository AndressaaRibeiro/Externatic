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

/* profil_company/show.html.twig */
class __TwigTemplate_ee331362a33ae391f3753db2f324a523 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil_company/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil_company/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil_company/show.html.twig", 1);
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

        echo "Entreprise";
        
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
        $this->loadTemplate("profil_company/show.html.twig", "profil_company/show.html.twig", 7, "1089152916")->display($context);
        // line 57
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil_company/show.html.twig";
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

{% block title %}Entreprise{% endblock %}

{% block body %}

    {% embed \"_dashboardCompany.html.twig\" %}

        {% block extra_content %}
    
            <section class=\"account-section ptb-100\">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <div class=\"account-details\">
                            <form id=\"edit\" >
                                <div class=\"text-center mt-4 mb-4\">
                                    <h1 class=\"text-center mt-4 mb-4\">{{company.name}}</h1>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre entreprise: {{company.name}}</h3>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"titleProfil\" value=\"{{ company.name }}\" readonly>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Description de l'entreprise :</h3>
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control\" id=\"descriptionProfil\" rows=\"3\" readonly>{{ company.description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Localisation de l'entreprise :</h3>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"locationProfil\" value=\"{{ company.location }}\" readonly>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <a  class=\"btn\" style=\"background-color: #001935; color:white;\" href=\"{{ path('app_profil_company_edit', {slug: company.slug}) }}\">Modifier votre entreprise</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class=\"col-md-12\">
                                <button type=\"submit\" class=\"btn\" style=\"background-color: #001935; color:white;\" onclick=\"window.location.href='{{ path('app_contact') }}'\">Demande de suppression de compte</button>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}

    {% endembed %}

{% endblock %}
", "profil_company/show.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/profil_company/show.html.twig");
    }
}


/* profil_company/show.html.twig */
class __TwigTemplate_ee331362a33ae391f3753db2f324a523___1089152916 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil_company/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil_company/show.html.twig"));

        $this->parent = $this->loadTemplate("_dashboardCompany.html.twig", "profil_company/show.html.twig", 7);
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
                                    <h1 class=\"text-center mt-4 mb-4\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre entreprise: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</h3>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"titleProfil\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "\" readonly>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Description de l'entreprise :</h3>
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control\" id=\"descriptionProfil\" rows=\"3\" readonly>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
        echo "</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Localisation de l'entreprise :</h3>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"locationProfil\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 38, $this->source); })()), "location", [], "any", false, false, false, 38), "html", null, true);
        echo "\" readonly>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <a  class=\"btn\" style=\"background-color: #001935; color:white;\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_company_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 41, $this->source); })()), "slug", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">Modifier votre entreprise</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class=\"col-md-12\">
                                <button type=\"submit\" class=\"btn\" style=\"background-color: #001935; color:white;\" onclick=\"window.location.href='";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "'\">Demande de suppression de compte</button>
                            </div>

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
        return "profil_company/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 47,  284 => 41,  278 => 38,  267 => 30,  258 => 24,  253 => 22,  245 => 17,  236 => 10,  226 => 9,  203 => 7,  93 => 57,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Entreprise{% endblock %}

{% block body %}

    {% embed \"_dashboardCompany.html.twig\" %}

        {% block extra_content %}
    
            <section class=\"account-section ptb-100\">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <div class=\"account-details\">
                            <form id=\"edit\" >
                                <div class=\"text-center mt-4 mb-4\">
                                    <h1 class=\"text-center mt-4 mb-4\">{{company.name}}</h1>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Votre entreprise: {{company.name}}</h3>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"titleProfil\" value=\"{{ company.name }}\" readonly>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        <h3>Description de l'entreprise :</h3>
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control\" id=\"descriptionProfil\" rows=\"3\" readonly>{{ company.description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>Localisation de l'entreprise :</h3>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"locationProfil\" value=\"{{ company.location }}\" readonly>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <a  class=\"btn\" style=\"background-color: #001935; color:white;\" href=\"{{ path('app_profil_company_edit', {slug: company.slug}) }}\">Modifier votre entreprise</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class=\"col-md-12\">
                                <button type=\"submit\" class=\"btn\" style=\"background-color: #001935; color:white;\" onclick=\"window.location.href='{{ path('app_contact') }}'\">Demande de suppression de compte</button>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}

    {% endembed %}

{% endblock %}
", "profil_company/show.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/profil_company/show.html.twig");
    }
}
