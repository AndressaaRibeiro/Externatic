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

/* reset_password/check_email.html.twig */
class __TwigTemplate_77e61d176142769ed32dfe1928f1ba7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/check_email.html.twig", 1);
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

        echo "Mot de passe renitialisé";
        
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
        echo "<div class=\"container mt-4 mb-4\">
    <p>
    Si un compte correspondant à votre adresse e-mail existe, 
    un e-mail vient d'être envoyé contenant un lien que vous pouvez utiliser 
    pour réinitialiser votre mot de passe.
    Ce lien expirera dans <strong>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 11, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 11, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 11), "ResetPasswordBundle"), "html", null, true);
        echo ".</strong>
    </p>
    <p>Si vous ne recevez pas d'e-mail, veuillez 
    vérifier votre dossier spam ou 
    <button class=\"btn\" type=\"submit\" style=\"background-color: #001935; color:white;\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Essayer à nouveau</a></button>
    .</p>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 15,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mot de passe renitialisé{% endblock %}

{% block body %}
<div class=\"container mt-4 mb-4\">
    <p>
    Si un compte correspondant à votre adresse e-mail existe, 
    un e-mail vient d'être envoyé contenant un lien que vous pouvez utiliser 
    pour réinitialiser votre mot de passe.
    Ce lien expirera dans <strong>{{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}.</strong>
    </p>
    <p>Si vous ne recevez pas d'e-mail, veuillez 
    vérifier votre dossier spam ou 
    <button class=\"btn\" type=\"submit\" style=\"background-color: #001935; color:white;\"><a href=\"{{ path('app_forgot_password_request') }}\">Essayer à nouveau</a></button>
    .</p>
</div>
{% endblock %}
", "reset_password/check_email.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/reset_password/check_email.html.twig");
    }
}
