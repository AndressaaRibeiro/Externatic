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

/* company/index.html.twig */
class __TwigTemplate_e40294aa5b1b64420dd8a035cdbef69c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "company/index.html.twig", 1);
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

        echo "Nos entreprises partenaires";
        
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
        echo "        <!-- Page Title Start -->
        <section class=\"page-title title-bg9\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <h2>Entreprises</h2>
                    <ul>
                        <li>
                            <a href=\"/\">Accueil</a>
                        </li>
                        <li>Entreprises</li>
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

\t\t<!-- Companies Section Start -->
\t\t<section class=\"company-section company-style-two pt-100 pb-70\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>Nos entreprises partenaires</h2>
\t\t\t\t\t<p> Notre entreprise se spécialise dans le recrutement et 
                    la mise à disposition de professionnels du numérique. 
                    Nous collaborons avec plusieurs entreprises partenaires 
                    afin de répondre à leurs besoins en matière de ressources 
                    humaines et de compétences techniques.</p>
\t\t\t\t</div>
                ";
        // line 38
        if (twig_test_empty((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "                <p>Aucune Entreprise n'est trouvée.</p>
                ";
        } else {
            // line 41
            echo "\t\t\t\t<div class=\"row\">
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["company"]);
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 43
                echo "\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"company-card\">
\t\t\t\t\t\t\t<div class=\"company-logo\">
                                <a href=\"#\">
                                    <img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["company"]), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "name", [], "any", false, false, false, 47), "html", null, true);
                echo "\" class=\" img-fluide square\">
                                </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"company-text\">
\t\t\t\t\t\t\t\t<h3>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "name", [], "any", false, false, false, 51), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class='bx bx-location-plus'></i>
\t\t\t\t\t\t\t\t\t";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "location", [], "any", false, false, false, 54), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</p>
                                ";
                // line 56
                if ((twig_get_attribute($this->env, $this->source, $context["company"], "slug", [], "any", true, true, false, 56) && twig_get_attribute($this->env, $this->source, $context["company"], "slug", [], "any", false, false, false, 56))) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_company_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["company"], "slug", [], "any", false, false, false, 57)]), "html", null, true);
                    echo "\" class=\"company-btn\">
\t\t\t\t\t\t\t\t\tvoir plus
\t\t\t\t\t\t\t\t</a>
                                ";
                }
                // line 61
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                </div>
                <div class=\"nagigation d-flex pagination justify-content-center\">";
            // line 66
            echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 66, $this->source); })()));
            echo "</div>
             ";
        }
        // line 68
        echo "\t\t\t</div>
\t\t</section>
        ";
        // line 70
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENTREPRISE")) {
            // line 71
            echo "\t\t<!-- Companies Section End -->
        <button class=\"btn m-3\" type=\"submit\" style=\"background-color: #001935; color:white;\"><a href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_company_new");
            echo "\">Enregistrer votre entreprise</a></button>
        ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "company/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 72,  194 => 71,  192 => 70,  188 => 68,  183 => 66,  180 => 65,  171 => 61,  163 => 57,  161 => 56,  156 => 54,  150 => 51,  141 => 47,  135 => 43,  131 => 42,  128 => 41,  124 => 39,  122 => 38,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos entreprises partenaires{% endblock %}

{% block body %}
        <!-- Page Title Start -->
        <section class=\"page-title title-bg9\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <h2>Entreprises</h2>
                    <ul>
                        <li>
                            <a href=\"/\">Accueil</a>
                        </li>
                        <li>Entreprises</li>
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

\t\t<!-- Companies Section Start -->
\t\t<section class=\"company-section company-style-two pt-100 pb-70\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>Nos entreprises partenaires</h2>
\t\t\t\t\t<p> Notre entreprise se spécialise dans le recrutement et 
                    la mise à disposition de professionnels du numérique. 
                    Nous collaborons avec plusieurs entreprises partenaires 
                    afin de répondre à leurs besoins en matière de ressources 
                    humaines et de compétences techniques.</p>
\t\t\t\t</div>
                {% if company is empty %}
                <p>Aucune Entreprise n'est trouvée.</p>
                {% else %}
\t\t\t\t<div class=\"row\">
                {% for company in company %}
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"company-card\">
\t\t\t\t\t\t\t<div class=\"company-logo\">
                                <a href=\"#\">
                                    <img src=\"{{ vich_uploader_asset(company) }}\" alt=\"{{ company.name }}\" class=\" img-fluide square\">
                                </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"company-text\">
\t\t\t\t\t\t\t\t<h3>{{company.name}}</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class='bx bx-location-plus'></i>
\t\t\t\t\t\t\t\t\t{{company.location}}
\t\t\t\t\t\t\t\t</p>
                                {% if company.slug is defined and company.slug %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_company_show', {slug: company.slug}) }}\" class=\"company-btn\">
\t\t\t\t\t\t\t\t\tvoir plus
\t\t\t\t\t\t\t\t</a>
                                {% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    {% endfor %}
                </div>
                <div class=\"nagigation d-flex pagination justify-content-center\">{{ knp_pagination_render(company) }}</div>
             {% endif %}
\t\t\t</div>
\t\t</section>
        {% if is_granted(\"ROLE_ENTREPRISE\") %}
\t\t<!-- Companies Section End -->
        <button class=\"btn m-3\" type=\"submit\" style=\"background-color: #001935; color:white;\"><a href=\"{{ path('app_profil_company_new') }}\">Enregistrer votre entreprise</a></button>
        {% endif %}
{% endblock %}
", "company/index.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/company/index.html.twig");
    }
}
