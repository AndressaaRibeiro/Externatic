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

/* contact/index.html.twig */
class __TwigTemplate_67e4768524cef614f97aa9bc4c5048db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Contactez-nous";
        
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
        echo "<!-- Page Title Start -->
        <section class=\"page-title title-bg23\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <h2>Contactez-nous</h2>
                    <ul>
                        <li>
                            <a href=\"/\">Acceuil</a>
                        </li>
                        <li>Contactez-nous</li>
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
         ";
        // line 26
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "        <div class=\"container mt-4\">
            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "
            </div>
        </div>
        ";
        } elseif (        // line 32
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "        <div class=\"container mt-4\">
            <div class=\"alert alert-success\" role=\"alert\">
                ";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        // line 39
        echo " <!-- Contact Section Start -->
        <div class=\"contact-card-section ptb-100\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-10 offset-lg-1\">
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-6\">
                                <div class=\"contact-card\">
                                    <i class='bx bx-phone-call'></i>
                                    <ul>
                                        <li>
                                            <a href=\"tel:+33 (0)2 85 52 26 33\">
                                                +33 (0)2 85 52 26 33
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        
                            <div class=\"col-md-4 col-sm-6\">
                                <div class=\"contact-card\">
                                    <i class='bx bx-mail-send' ></i>
                                    <ul>
                                        <li>
                                            <a href=\"mailto:contact@externatic.fr\">
                                                contact@externatic.fr
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        
                            <div class=\"col-md-4 col-sm-6 offset-sm-3 offset-md-0\">
                                <div class=\"contact-card\">
                                    <i class='bx bx-location-plus' ></i>
                                    <ul>
                                        <li>
                                            1 rue Racine – 44000 NANTES
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Contact Form Start -->
        <section class=\"contact-form-section pb-100\">
            <div class=\"container\">
                <div class=\"contact-area\">
                    <h3>Pour échanger avec nous!</h3>
                    <form id=\"contactForm\"  method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" required data-error=\"Please enter your name\" placeholder=\"Votre nom\">
                                    <div class=\"help-block with-errors\"></div>
                                </div>
                            </div>
                        
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" required data-error=\"Please enter your email\" placeholder=\"Votre Email\">
                                    <div class=\"help-block with-errors\"></div>
                                </div>
                            </div>
        
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <input type=\"number\" name=\"phone\" id=\"phone\" class=\"form-control\" required data-error=\"Please enter your number\" placeholder=\"Votre numéro de téléphone\">
                                    <div class=\"help-block with-errors\"></div>
                                </div>
                            </div>
        
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                   <select name=\"subject\" id=\"subject\" class=\"form-control\" required data-error=\"Please choose a subject\">
                                    <option value=\"\" disabled selected>Choisissez un sujet</option>
                                    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 121
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "id", [], "any", false, false, false, 121), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "name", [], "any", false, false, false, 121), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                                    </select>
                                    <div class=\"help-block with-errors\"></div>
                                </div>
                            </div>
                        
                            <div class=\"col-lg-12 col-md-12\">
                                <div class=\"form-group\">
                                    <textarea name=\"description\" class=\"form-control message-field\" id=\"description\" cols=\"30\" rows=\"7\" required data-error=\"Please type your message\" placeholder=\"Votre message\"></textarea>
                                    <div class=\"help-block with-errors\"></div>
                                </div>
                            </div>
                        
                            <div class=\"col-lg-12 col-md-12 text-center\">
                                <button type=\"submit\" class=\"default-btn contact-btn\">
                                    Envoyez
                                </button>
                                <div id=\"msgSubmit\" class=\"h3 alert-text text-center hidden\"></div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Contact Form End -->




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 123,  222 => 121,  218 => 120,  135 => 39,  128 => 35,  124 => 33,  122 => 32,  116 => 29,  112 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contactez-nous{% endblock %}

{% block body %}
<!-- Page Title Start -->
        <section class=\"page-title title-bg23\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <h2>Contactez-nous</h2>
                    <ul>
                        <li>
                            <a href=\"/\">Acceuil</a>
                        </li>
                        <li>Contactez-nous</li>
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
         {% if error %}
        <div class=\"container mt-4\">
            <div class=\"alert alert-danger\" role=\"alert\">
                {{ error }}
            </div>
        </div>
        {% elseif success %}
        <div class=\"container mt-4\">
            <div class=\"alert alert-success\" role=\"alert\">
                {{ success }}
            </div>
        </div>
    {% endif %}
 <!-- Contact Section Start -->
        <div class=\"contact-card-section ptb-100\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-10 offset-lg-1\">
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-6\">
                                <div class=\"contact-card\">
                                    <i class='bx bx-phone-call'></i>
                                    <ul>
                                        <li>
                                            <a href=\"tel:+33 (0)2 85 52 26 33\">
                                                +33 (0)2 85 52 26 33
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        
                            <div class=\"col-md-4 col-sm-6\">
                                <div class=\"contact-card\">
                                    <i class='bx bx-mail-send' ></i>
                                    <ul>
                                        <li>
                                            <a href=\"mailto:contact@externatic.fr\">
                                                contact@externatic.fr
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        
                            <div class=\"col-md-4 col-sm-6 offset-sm-3 offset-md-0\">
                                <div class=\"contact-card\">
                                    <i class='bx bx-location-plus' ></i>
                                    <ul>
                                        <li>
                                            1 rue Racine – 44000 NANTES
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Contact Form Start -->
        <section class=\"contact-form-section pb-100\">
            <div class=\"container\">
                <div class=\"contact-area\">
                    <h3>Pour échanger avec nous!</h3>
                    <form id=\"contactForm\"  method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" required data-error=\"Please enter your name\" placeholder=\"Votre nom\">
                                    <div class=\"help-block with-errors\"></div>
                                </div>
                            </div>
                        
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" required data-error=\"Please enter your email\" placeholder=\"Votre Email\">
                                    <div class=\"help-block with-errors\"></div>
                                </div>
                            </div>
        
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <input type=\"number\" name=\"phone\" id=\"phone\" class=\"form-control\" required data-error=\"Please enter your number\" placeholder=\"Votre numéro de téléphone\">
                                    <div class=\"help-block with-errors\"></div>
                                </div>
                            </div>
        
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                   <select name=\"subject\" id=\"subject\" class=\"form-control\" required data-error=\"Please choose a subject\">
                                    <option value=\"\" disabled selected>Choisissez un sujet</option>
                                    {% for subject in subjects %}
                                    <option value=\"{{ subject.id }}\">{{ subject.name }}</option>
                                    {% endfor %}
                                    </select>
                                    <div class=\"help-block with-errors\"></div>
                                </div>
                            </div>
                        
                            <div class=\"col-lg-12 col-md-12\">
                                <div class=\"form-group\">
                                    <textarea name=\"description\" class=\"form-control message-field\" id=\"description\" cols=\"30\" rows=\"7\" required data-error=\"Please type your message\" placeholder=\"Votre message\"></textarea>
                                    <div class=\"help-block with-errors\"></div>
                                </div>
                            </div>
                        
                            <div class=\"col-lg-12 col-md-12 text-center\">
                                <button type=\"submit\" class=\"default-btn contact-btn\">
                                    Envoyez
                                </button>
                                <div id=\"msgSubmit\" class=\"h3 alert-text text-center hidden\"></div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Contact Form End -->




{% endblock %}
", "contact/index.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/contact/index.html.twig");
    }
}
