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

/* company/show.html.twig */
class __TwigTemplate_f0524192b71406674933388a5f9bd131 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "company/show.html.twig", 1);
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

        echo "Détails de l'entreprise";
        
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
            <h2>Détails de l'entreprise</h2>
            <ul>
                <li>
                    <a href=\"/\">Accueil</a>
                </li>
                <li>Détails de l'entreprise</li>
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 40, $this->source); })()), "posterFile"), "html", null, true);
        echo "\"
                                                alt=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-10\">
                                        <div class=\"job-info\">
                                            <h3>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46), "html", null, true);
        echo "</h3>
                                            <ul>
                                                <li>
                                                    <i class='bx bx-location-plus'></i>
                                                    ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 50, $this->source); })()), "location", [], "any", false, false, false, 50), "html", null, true);
        echo "
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"details-text\">
                                <h3>Description de l'entreprise</h3>
                                <p>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), "html", null, true);
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
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 74, $this->source); })()), "location", [], "any", false, false, false, 74), "html", null, true);
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
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 86, $this->source); })()), "name", [], "any", false, false, false, 86), "html", null, true);
        echo "</h3>
                    <div class=\"posted-by\">
                        <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 88, $this->source); })()), "posterFile"), "html", null, true);
        echo "\"
                            alt=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), "html", null, true);
        echo "\">
                        <h4>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 90, $this->source); })()), "name", [], "any", false, false, false, 90), "html", null, true);
        echo "</h4>
                    </div>
                </div>

                <div class=\"job-sidebar\">
                    <h3>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 95, $this->source); })()), "location", [], "any", false, false, false, 95), "html", null, true);
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
        // line 131
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENTREPRISE")) {
            // line 132
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", true, true, false, 132) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132)))) {
                // line 133
                echo "    <div>
        <button class=\"btn m-3\" type=\"submit\" style=\"background-color: #001935; color:white;\"><a
                href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_company_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 135, $this->source); })()), "slug", [], "any", false, false, false, 135)]), "html", null, true);
                echo "\">Modifier votre entreprise</a></button>
    </div>
    ";
            }
        }
        // line 139
        echo "        <!-- Job Details Section End -->
        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "company/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 139,  257 => 135,  253 => 133,  250 => 132,  248 => 131,  209 => 95,  201 => 90,  197 => 89,  193 => 88,  188 => 86,  173 => 74,  157 => 61,  143 => 50,  136 => 46,  128 => 41,  124 => 40,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'entreprise{% endblock %}

{% block body %}

<!-- Page Title Start -->
<section class=\"page-title title-bg6\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <h2>Détails de l'entreprise</h2>
            <ul>
                <li>
                    <a href=\"/\">Accueil</a>
                </li>
                <li>Détails de l'entreprise</li>
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
                                            <img src=\"{{ vich_uploader_asset(company, 'posterFile') }}\"
                                                alt=\"{{ company.name }}\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-10\">
                                        <div class=\"job-info\">
                                            <h3>{{ company.name }}</h3>
                                            <ul>
                                                <li>
                                                    <i class='bx bx-location-plus'></i>
                                                    {{ company.location }}
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"details-text\">
                                <h3>Description de l'entreprise</h3>
                                <p>{{ company.description }}</p>
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
                                        {{company.location }}
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"job-sidebar\">
                    <h3>Posté par {{company.name }}</h3>
                    <div class=\"posted-by\">
                        <img src=\"{{ vich_uploader_asset(company, 'posterFile') }}\"
                            alt=\"{{ company.name }}\">
                        <h4>{{company.name}}</h4>
                    </div>
                </div>

                <div class=\"job-sidebar\">
                    <h3>{{company.location}}</h3>
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
{% if is_granted(\"ROLE_ENTREPRISE\") %}
    {% if app.user is defined and app.user.id == company.user.id %}
    <div>
        <button class=\"btn m-3\" type=\"submit\" style=\"background-color: #001935; color:white;\"><a
                href=\"{{ path('app_profil_company_edit',{slug : company.slug}) }}\">Modifier votre entreprise</a></button>
    </div>
    {% endif %}
{% endif %}
        <!-- Job Details Section End -->
        
{% endblock %}
", "company/show.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/company/show.html.twig");
    }
}
