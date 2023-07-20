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

/* offer/show.html.twig */
class __TwigTemplate_4f82fb4c9a6be699781f90cd20b21f23 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offer/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offer/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offer/show.html.twig", 1);
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

        echo "Détails des offres";
        
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
<!-- Page Title Start -->
<section class=\"page-title title-bg6\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <h2>Détails du poste</h2>
            <ul>
                <li>
                    <a href=\"/\">Accueil</a>
                </li>
                <li>Détails du poste</li>
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

<!-- Job Details Section Start -->
<section class=\"job-details ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"job-details-text\">
                            <div class=\"job-card\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-md-2\">
                                        <div class=\"company-logo\">
                                            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 40, $this->source); })()), "company", [], "any", false, false, false, 40), "posterFile"), "html", null, true);
        echo "\"
                                                alt=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 41, $this->source); })()), "company", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-10\">
                                        <div class=\"job-info\">
                                            <h3>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 46, $this->source); })()), "title", [], "any", false, false, false, 46), "html", null, true);
        echo "</h3>
                                            <ul>
                                                <li>
                                                    <i class='bx bx-location-plus'></i>
                                                    ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 50, $this->source); })()), "location", [], "any", false, false, false, 50), "html", null, true);
        echo "
                                                </li>
                                                <li>
                                                    <i class='bx bx-filter-alt'></i>
                                                    ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 54, $this->source); })()), "experienceReq", [], "any", false, false, false, 54), "html", null, true);
        echo " ans
                                                </li>
                                                <li>
                                                    <i class='bx bx-briefcase'></i>
                                                    ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 58, $this->source); })()), "contractType", [], "any", false, false, false, 58), "html", null, true);
        echo "
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"details-text\">
                                <h3>Description de l'offre</h3>
                                <p>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), "html", null, true);
        echo "</p>
                            </div>

                            <div class=\"details-text\">
                                <h3>Profil souhaité</h3>

                                <ul>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        Expériences professionnelles
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 82, $this->source); })()), "experienceReq", [], "any", false, false, false, 82), "html", null, true);
        echo " Années d'expérience :
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 86, $this->source); })()), "skillsReq", [], "any", false, false, false, 86), "html", null, true);
        echo "
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 90, $this->source); })()), "location", [], "any", false, false, false, 90), "html", null, true);
        echo "
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 94, $this->source); })()), "contractType", [], "any", false, false, false, 94), "html", null, true);
        echo "
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"job-sidebar\">
                    <h3>Posté par ";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 106, $this->source); })()), "company", [], "any", false, false, false, 106), "name", [], "any", false, false, false, 106), "html", null, true);
        echo "</h3>
                    <div class=\"posted-by\">
                        <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 108, $this->source); })()), "company", [], "any", false, false, false, 108), "posterFile"), "html", null, true);
        echo "\"
                            alt=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 109, $this->source); })()), "company", [], "any", false, false, false, 109), "name", [], "any", false, false, false, 109), "html", null, true);
        echo "\">
                        <h4>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 110, $this->source); })()), "company", [], "any", false, false, false, 110), "name", [], "any", false, false, false, 110), "html", null, true);
        echo "</h4>
                    </div>
                </div>

                <div class=\"job-sidebar\">
                    <h3>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 115, $this->source); })()), "location", [], "any", false, false, false, 115), "html", null, true);
        echo "</h3>
                    <iframe
                        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2710.1630449961685!2d-1.5657164237839374!3d47.21339197115643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805ec032ada7053%3A0xb24cb5a07c77528!2s1%20Rue%20Racine%2C%2044000%20Nantes!5e0!3m2!1sen!2sfr!4v1686564283844!5m2!1sen!2sfr\"
                        width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"
                        referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                </div>

                <div class=\"job-sidebar social-share\">
                    <h3>Résaux sociaux</h3>
                    <ul>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"bx bxl-facebook\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"bx bxl-twitter\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"bx bxl-pinterest\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"bx bxl-linkedin\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 151
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CANDIDAT") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENTREPRISE")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 152
            echo "    <div>
        <button class=\"btn m-3\" type=\"submit\" style=\"background-color: #001935; color:white;\"><a href=\"#\">Postuler</a></button>
    </div>
";
        }
        // line 156
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENTREPRISE")) {
            // line 157
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", true, true, false, 157) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 157, $this->source); })()), "users", [], "any", false, false, false, 157), "contains", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157)], "method", false, false, false, 157))) {
                // line 158
                echo "        <div>
            <a href=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 159, $this->source); })()), "slug", [], "any", false, false, false, 159)]), "html", null, true);
                echo "\" class=\"btn m-3\" style=\"background-color: #001935; color:white;\">
                Modifier votre offre
            </a>
        </div>
    ";
            }
        }
        // line 165
        echo "        <!-- Job Details Section End -->
        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offer/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 165,  299 => 159,  296 => 158,  293 => 157,  291 => 156,  285 => 152,  283 => 151,  244 => 115,  236 => 110,  232 => 109,  228 => 108,  223 => 106,  208 => 94,  201 => 90,  194 => 86,  187 => 82,  171 => 69,  157 => 58,  150 => 54,  143 => 50,  136 => 46,  128 => 41,  124 => 40,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails des offres{% endblock %}

{% block body %}

<!-- Page Title Start -->
<section class=\"page-title title-bg6\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <h2>Détails du poste</h2>
            <ul>
                <li>
                    <a href=\"/\">Accueil</a>
                </li>
                <li>Détails du poste</li>
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

<!-- Job Details Section Start -->
<section class=\"job-details ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"job-details-text\">
                            <div class=\"job-card\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-md-2\">
                                        <div class=\"company-logo\">
                                            <img src=\"{{ vich_uploader_asset(offer.company, 'posterFile') }}\"
                                                alt=\"{{ offer.company.name }}\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-10\">
                                        <div class=\"job-info\">
                                            <h3>{{offer.title }}</h3>
                                            <ul>
                                                <li>
                                                    <i class='bx bx-location-plus'></i>
                                                    {{offer.location }}
                                                </li>
                                                <li>
                                                    <i class='bx bx-filter-alt'></i>
                                                    {{offer.experienceReq }} ans
                                                </li>
                                                <li>
                                                    <i class='bx bx-briefcase'></i>
                                                    {{offer.contractType }}
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"details-text\">
                                <h3>Description de l'offre</h3>
                                <p>{{offer.description }}</p>
                            </div>

                            <div class=\"details-text\">
                                <h3>Profil souhaité</h3>

                                <ul>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        Expériences professionnelles
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        {{offer.experienceReq }} Années d'expérience :
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        {{offer.skillsReq }}
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        {{offer.location }}
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        {{offer.contractType }}
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"job-sidebar\">
                    <h3>Posté par {{offer.company.name }}</h3>
                    <div class=\"posted-by\">
                        <img src=\"{{ vich_uploader_asset(offer.company, 'posterFile') }}\"
                            alt=\"{{ offer.company.name }}\">
                        <h4>{{offer.company.name}}</h4>
                    </div>
                </div>

                <div class=\"job-sidebar\">
                    <h3>{{offer.location}}</h3>
                    <iframe
                        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2710.1630449961685!2d-1.5657164237839374!3d47.21339197115643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805ec032ada7053%3A0xb24cb5a07c77528!2s1%20Rue%20Racine%2C%2044000%20Nantes!5e0!3m2!1sen!2sfr!4v1686564283844!5m2!1sen!2sfr\"
                        width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"
                        referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                </div>

                <div class=\"job-sidebar social-share\">
                    <h3>Résaux sociaux</h3>
                    <ul>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"bx bxl-facebook\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"bx bxl-twitter\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"bx bxl-pinterest\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"bx bxl-linkedin\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{% if is_granted('ROLE_CANDIDAT') and not is_granted('ROLE_ENTREPRISE') and not is_granted('ROLE_ADMIN') %}
    <div>
        <button class=\"btn m-3\" type=\"submit\" style=\"background-color: #001935; color:white;\"><a href=\"#\">Postuler</a></button>
    </div>
{% endif %}
{% if is_granted(\"ROLE_ENTREPRISE\") %}
    {% if app.user is defined and offer.users.contains(app.user) %}
        <div>
            <a href=\"{{ path('app_offer_edit', {slug: offer.slug}) }}\" class=\"btn m-3\" style=\"background-color: #001935; color:white;\">
                Modifier votre offre
            </a>
        </div>
    {% endif %}
{% endif %}
        <!-- Job Details Section End -->
        
{% endblock %}
", "offer/show.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/offer/show.html.twig");
    }
}
