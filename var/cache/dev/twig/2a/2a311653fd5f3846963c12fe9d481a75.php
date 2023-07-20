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

/* _navbar.html.twig */
class __TwigTemplate_269d02e0ce446c151dfd7dd0488b3f0d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        // line 1
        echo "<nav data-no-swup>
    <ul class=\"menu\">
        <li class=\"logo\">
            <a href=\"/\">
                <img class=\"logo\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/logo-externatic-couleur-white.svg"), "html", null, true);
        echo "\" alt=\"Logo\">
            </a>
        </li>
        <li class=\"item\"><a href=\"/\">Accueil</a></li>
        <li class=\"item\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">A propos</a></li>
        <li class=\"item\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer");
        echo "\">Emplois</a></li>
        <li class=\"item\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_company");
        echo "\">Entreprises</a></li>
        <li class=\"item\"><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a></li>
        ";
        // line 16
        echo "
        </li>
        ";
        // line 18
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18))) {
            // line 19
            echo "            ";
            if (twig_in_filter("ROLE_ENTREPRISE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "roles", [], "any", false, false, false, 19))) {
                // line 20
                echo "                <li class=\"item button secondary\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_company_index");
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "firstname", [], "any", false, false, false, 20), "html", null, true);
                echo "</a></li>
            ";
            } elseif (twig_in_filter("ROLE_CANDIDAT", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "roles", [], "any", false, false, false, 21))) {
                // line 22
                echo "                <li class=\"item button secondary\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_index");
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "firstname", [], "any", false, false, false, 22), "html", null, true);
                echo "</a></li>
            ";
            } elseif (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 23
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "roles", [], "any", false, false, false, 23))) {
                // line 24
                echo "                <li class=\"item button secondary\"><a href=\"/admin\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "firstname", [], "any", false, false, false, 24), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 26
            echo "                <li class=\"item button\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a></li>
        ";
        } else {
            // line 28
            echo "            <li class=\"item button\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
            <li class=\"item button secondary\"><a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a></li>
        ";
        }
        // line 31
        echo "
        <li class=\"toggle\"><span class=\"bars\"></span></li>
    </ul>
    </nav>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  116 => 29,  111 => 28,  105 => 26,  99 => 24,  97 => 23,  90 => 22,  88 => 21,  81 => 20,  78 => 19,  76 => 18,  72 => 16,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav data-no-swup>
    <ul class=\"menu\">
        <li class=\"logo\">
            <a href=\"/\">
                <img class=\"logo\" src=\"{{ asset('/assets/images/logo-externatic-couleur-white.svg') }}\" alt=\"Logo\">
            </a>
        </li>
        <li class=\"item\"><a href=\"/\">Accueil</a></li>
        <li class=\"item\"><a href=\"{{ path('app_about') }}\">A propos</a></li>
        <li class=\"item\"><a href=\"{{ path('app_offer') }}\">Emplois</a></li>
        <li class=\"item\"><a href=\"{{ path('app_company') }}\">Entreprises</a></li>
        <li class=\"item\"><a href=\"{{ path('app_contact') }}\">Contact</a></li>
        {# {% if is_granted('ROLE_ADMIN') %}
        <li class=\"item\"><a href=\"{{ path('admin') }}\">Admin</a></li>
        {% endif %} #}

        </li>
        {% if app.user is not null %}
            {% if 'ROLE_ENTREPRISE' in app.user.roles %}
                <li class=\"item button secondary\"><a href=\"{{ path('app_profil_company_index')}}\">{{ app.user.firstname }}</a></li>
            {% elseif 'ROLE_CANDIDAT' in app.user.roles %}
                <li class=\"item button secondary\"><a href=\"{{ path('app_profil_index')}}\">{{ app.user.firstname }}</a></li>
            {% elseif 'ROLE_ADMIN' in app.user.roles %}
                <li class=\"item button secondary\"><a href=\"/admin\">{{ app.user.firstname }}</a></li>
            {% endif %}
                <li class=\"item button\"><a href=\"{{ path('app_logout')}}\">Deconnexion</a></li>
        {% else %}
            <li class=\"item button\"><a href=\"{{ path('app_login')}}\">Connexion</a></li>
            <li class=\"item button secondary\"><a href=\"{{ path('app_register')}}\">Inscription</a></li>
        {% endif %}

        <li class=\"toggle\"><span class=\"bars\"></span></li>
    </ul>
    </nav>

", "_navbar.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/_navbar.html.twig");
    }
}
