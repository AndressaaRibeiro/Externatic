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

/* contact/EmailContact.twig */
class __TwigTemplate_a8f4b7513b13d044323bb5b30d6f0565 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/EmailContact.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/EmailContact.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Vous avez une demande</title>
</head>
<body>
<h1> Vous venez de recevoir un mail de ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mailer"]) || array_key_exists("mailer", $context) ? $context["mailer"] : (function () { throw new RuntimeError('Variable "mailer" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
<hr>
<h2>Une question sur le thème:";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo " </h2>
<hr>
<h1> Message: </h1>
<p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mailer"]) || array_key_exists("mailer", $context) ? $context["mailer"] : (function () { throw new RuntimeError('Variable "mailer" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
<hr>
<h4>Identifiant du demandeur:</h4>
<p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mailer"]) || array_key_exists("mailer", $context) ? $context["mailer"] : (function () { throw new RuntimeError('Variable "mailer" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
<p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mailer"]) || array_key_exists("mailer", $context) ? $context["mailer"] : (function () { throw new RuntimeError('Variable "mailer" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
<p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mailer"]) || array_key_exists("mailer", $context) ? $context["mailer"] : (function () { throw new RuntimeError('Variable "mailer" does not exist.', 19, $this->source); })()), "phone", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact/EmailContact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  74 => 18,  70 => 17,  64 => 14,  58 => 11,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Vous avez une demande</title>
</head>
<body>
<h1> Vous venez de recevoir un mail de {{mailer.name}}</h1>
<hr>
<h2>Une question sur le thème:{{ subject.name }} </h2>
<hr>
<h1> Message: </h1>
<p>{{mailer.description}}</p>
<hr>
<h4>Identifiant du demandeur:</h4>
<p>{{mailer.name}}</p>
<p>{{mailer.email}}</p>
<p>{{mailer.phone}}</p>
</body>
</html>", "contact/EmailContact.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/contact/EmailContact.twig");
    }
}
