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

/* _dashboardCompany.html.twig */
class __TwigTemplate_34b5fbb9cd44ca65452c0b8fa460ab9d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'extra_content' => [$this, 'block_extra_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_dashboardCompany.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_dashboardCompany.html.twig"));

        // line 1
        echo "<div class=\"wrapper\">
        <!-- Sidebar -->
        <aside id=\"sidebar\">
            <div class=\"h-100\">
                <div class=\"sidebar-logo\">
                    <a href=\"#\">Mon Profil</a>
                </div>
                <!-- Sidebar navigation -->
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-item\">
                        <a href=\"#\" class=\"sidebar-link collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#pages\" aria-expanded=\"false\" aria-controls=\"pages\">
                            <i class=\"fa-solid fa-user pe-2\"></i>
                          Entreprise
                        </a>
                        <ul id=\"pages\" class=\"sidebar-dropdown list-unstyled collapse\" data-bs-parent=\"#sidebar\">
                            ";
        // line 16
        if ((array_key_exists("company", $context) &&  !(null === (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 16, $this->source); })())))) {
            // line 17
            echo "                                ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 17, $this->source); })()), "slug", [], "any", false, false, false, 17))) {
                // line 18
                echo "                                    <li class=\"sidebar-item\">
                                        <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_company_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 19, $this->source); })()), "slug", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\" class=\"sidebar-link\">Votre entreprise</a>
                                    </li>
                                    <li class=\"sidebar-item\">
                                        <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_company_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 22, $this->source); })()), "slug", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\" class=\"sidebar-link\">Modifier votre entreprise</a>
                                    </li>
                                ";
            } else {
                // line 25
                echo "                                    <li class=\"sidebar-item\">
                                        <a href=\"#\" class=\"sidebar-link\">Votre entreprise</a>
                                    </li>
                                ";
            }
            // line 29
            echo "                            ";
        } else {
            // line 30
            echo "                                <li class=\"sidebar-item\">
                                    <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_company_new");
            echo "\" class=\"sidebar-link\">Créer votre entreprise</a>
                                </li>
                            ";
        }
        // line 34
        echo "                        </ul>

                    </li>
                     <li class=\"sidebar-item\">
                        <a href=\"#\" class=\"sidebar-link collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#dashboard\" aria-expanded=\"false\" aria-controls=\"dashboard\">
                            <i class=\"fa-solid fa-folder-open pe-2\"></i>
                            Vos offres
                        </a>
                        <ul id=\"dashboard\" class=\"sidebar-dropdown list-unstyled collapse\" data-bs-parent=\"#sidebar\">
                            <li class=\"sidebar-item\">
                                ";
        // line 44
        if (( !(null === (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 44, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 44, $this->source); })()), "slug", [], "any", false, false, false, 44)))) {
            // line 45
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_company_mesOffres", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 45, $this->source); })()), "slug", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"sidebar-link\">Mes offres</a>
                                ";
        }
        // line 47
        echo "                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </aside>
        <!-- Main Component -->
        <div class=\"main\">
            <nav class=\"navbar navbar-expand px-3 border-bottom\">
                <!-- Button for sidebar toggle -->
                <button class=\"btn-dashboard\" type=\"button\" data-bs-theme=\"light\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </nav>
            ";
        // line 62
        $this->displayBlock('extra_content', $context, $blocks);
        // line 63
        echo "        </div>

    </div>

    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 62
    public function block_extra_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "_dashboardCompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 62,  138 => 63,  136 => 62,  119 => 47,  113 => 45,  111 => 44,  99 => 34,  93 => 31,  90 => 30,  87 => 29,  81 => 25,  75 => 22,  69 => 19,  66 => 18,  63 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrapper\">
        <!-- Sidebar -->
        <aside id=\"sidebar\">
            <div class=\"h-100\">
                <div class=\"sidebar-logo\">
                    <a href=\"#\">Mon Profil</a>
                </div>
                <!-- Sidebar navigation -->
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-item\">
                        <a href=\"#\" class=\"sidebar-link collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#pages\" aria-expanded=\"false\" aria-controls=\"pages\">
                            <i class=\"fa-solid fa-user pe-2\"></i>
                          Entreprise
                        </a>
                        <ul id=\"pages\" class=\"sidebar-dropdown list-unstyled collapse\" data-bs-parent=\"#sidebar\">
                            {% if company is defined and company is not null %}
                                {% if company.slug is not empty %}
                                    <li class=\"sidebar-item\">
                                        <a href=\"{{ path('app_profil_company_show', {slug: company.slug}) }}\" class=\"sidebar-link\">Votre entreprise</a>
                                    </li>
                                    <li class=\"sidebar-item\">
                                        <a href=\"{{ path('app_profil_company_edit', {slug: company.slug}) }}\" class=\"sidebar-link\">Modifier votre entreprise</a>
                                    </li>
                                {% else %}
                                    <li class=\"sidebar-item\">
                                        <a href=\"#\" class=\"sidebar-link\">Votre entreprise</a>
                                    </li>
                                {% endif %}
                            {% else %}
                                <li class=\"sidebar-item\">
                                    <a href=\"{{ path('app_profil_company_new') }}\" class=\"sidebar-link\">Créer votre entreprise</a>
                                </li>
                            {% endif %}
                        </ul>

                    </li>
                     <li class=\"sidebar-item\">
                        <a href=\"#\" class=\"sidebar-link collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#dashboard\" aria-expanded=\"false\" aria-controls=\"dashboard\">
                            <i class=\"fa-solid fa-folder-open pe-2\"></i>
                            Vos offres
                        </a>
                        <ul id=\"dashboard\" class=\"sidebar-dropdown list-unstyled collapse\" data-bs-parent=\"#sidebar\">
                            <li class=\"sidebar-item\">
                                {% if company is not null and company.slug is not empty %}
                                    <a href=\"{{ path('app_profil_company_mesOffres', {slug: company.slug}) }}\" class=\"sidebar-link\">Mes offres</a>
                                {% endif %}
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </aside>
        <!-- Main Component -->
        <div class=\"main\">
            <nav class=\"navbar navbar-expand px-3 border-bottom\">
                <!-- Button for sidebar toggle -->
                <button class=\"btn-dashboard\" type=\"button\" data-bs-theme=\"light\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </nav>
            {% block extra_content %}{% endblock %}
        </div>

    </div>

    ", "_dashboardCompany.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/_dashboardCompany.html.twig");
    }
}
