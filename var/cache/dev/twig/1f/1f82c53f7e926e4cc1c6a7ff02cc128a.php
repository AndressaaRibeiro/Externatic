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

/* _footer.html.twig */
class __TwigTemplate_5593c776bda11dc4d88bb6624dbf2278 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        // line 1
        echo "        <!-- Footer Section Start -->
\t\t<footer class=\"footer-area pt-100 pb-70 pt-4\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t\t\t<img class=\"footerLogo\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/logo-externatic-couleur-white.svg"), "html", null, true);
        echo "\" alt=\"logo\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p>
                                Externatic est un cabinet dédié au recrutement de profils d’experts, 
                                ingénieurs et managers dans le domaine de l’informatique</p>

\t\t\t\t\t\t\t<div class=\"footer-social\">
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/externatic/\" target=\"_blank\"><i class='bx bxl-instagram'></i></a>
\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/i/flow/login?redirect_after_login=%2FExternatic\" target=\"_blank\"><i class='bx bxl-twitter'></i></a>
\t\t\t\t\t\t\t\t<a href=\"https://fr.linkedin.com/company/externatic\" target=\"_blank\"><i class='bx bxl-linkedin'></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget pl-60\">
\t\t\t\t\t\t\t<h3>Pour les Candidats</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tEmplois
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tCompte
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tA propos
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tListe des emplois
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tCréer votre compte\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget pl-60\">
\t\t\t\t\t\t\t<h3>Liens</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tA propos
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_company");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tEntreprises
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faq");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tFAQ
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mention");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tMentions légales
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_politique");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tPolitique de confidentialité
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget footer-info\">
\t\t\t\t\t\t\t<h3>Information</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class='bx bxs-phone'></i>
\t\t\t\t\t\t\t\t\t\tTelephone:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<a href=\"Tél. +33 (0)2 85 52 26 33\">
\t\t\t\t\t\t\t\t\t\t+33 (0)2 85 52 26 33
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class='bx bxs-envelope'></i>
\t\t\t\t\t\t\t\t\t\tEmail:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<a href=\" contact@externatic.fr\">
                                        contact@externatic.fr
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-location-plus'></i>
\t\t\t\t\t\t\t\t\t\tAdresse:
\t\t\t\t\t\t\t\t\t</span>
                                    1 rue Racine – 44000 NANTES – France
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<div class=\"copyright-text text-center\">
\t\t\t<p> Externatic © 2023 Touts droits réservé</p>
\t\t</div>
\t\t<!-- Footer Section End -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 109,  180 => 103,  171 => 97,  162 => 91,  153 => 85,  144 => 79,  122 => 60,  113 => 54,  104 => 48,  95 => 42,  86 => 36,  77 => 30,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <!-- Footer Section Start -->
\t\t<footer class=\"footer-area pt-100 pb-70 pt-4\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t\t\t<img class=\"footerLogo\" src=\"{{ asset('/assets/images/logo-externatic-couleur-white.svg') }}\" alt=\"logo\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<p>
                                Externatic est un cabinet dédié au recrutement de profils d’experts, 
                                ingénieurs et managers dans le domaine de l’informatique</p>

\t\t\t\t\t\t\t<div class=\"footer-social\">
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/externatic/\" target=\"_blank\"><i class='bx bxl-instagram'></i></a>
\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/i/flow/login?redirect_after_login=%2FExternatic\" target=\"_blank\"><i class='bx bxl-twitter'></i></a>
\t\t\t\t\t\t\t\t<a href=\"https://fr.linkedin.com/company/externatic\" target=\"_blank\"><i class='bx bxl-linkedin'></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget pl-60\">
\t\t\t\t\t\t\t<h3>Pour les Candidats</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offer') }}\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tEmplois
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login')}}\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tCompte
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offer') }}\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_about') }}\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tA propos
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offer') }}\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tListe des emplois
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_register')}}\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tCréer votre compte\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget pl-60\">
\t\t\t\t\t\t\t<h3>Liens</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_about') }}\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tA propos
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_company') }}\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tEntreprises
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_faq') }}\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tFAQ
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_mention') }}\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tMentions légales
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_politique') }}\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tPolitique de confidentialité
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_contact') }}\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-chevrons-right bx-tada'></i>
\t\t\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget footer-info\">
\t\t\t\t\t\t\t<h3>Information</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class='bx bxs-phone'></i>
\t\t\t\t\t\t\t\t\t\tTelephone:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<a href=\"Tél. +33 (0)2 85 52 26 33\">
\t\t\t\t\t\t\t\t\t\t+33 (0)2 85 52 26 33
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class='bx bxs-envelope'></i>
\t\t\t\t\t\t\t\t\t\tEmail:
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<a href=\" contact@externatic.fr\">
                                        contact@externatic.fr
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-location-plus'></i>
\t\t\t\t\t\t\t\t\t\tAdresse:
\t\t\t\t\t\t\t\t\t</span>
                                    1 rue Racine – 44000 NANTES – France
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<div class=\"copyright-text text-center\">
\t\t\t<p> Externatic © 2023 Touts droits réservé</p>
\t\t</div>
\t\t<!-- Footer Section End -->", "_footer.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/_footer.html.twig");
    }
}
