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

/* company/_form.html.twig */
class __TwigTemplate_5da80e062b6759e775811b93c00ccd1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/_form.html.twig"));

        // line 1
        echo "<div class=\"text-center\">
    <div class=\"card mx-auto\" style=\"width: 50%\">
        <div class=\"card-body\">
            ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
                <div class=\"row text-start\">
                    <div>
                        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), 'row');
        echo "
                        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), 'row');
        echo "
                        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "location", [], "any", false, false, false, 9), 'row');
        echo "
                        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "posterFile", [], "any", false, false, false, 10), 'row');
        echo "
                    </div>
                </div>
                <div class=\"d-grid gap-2 col-6 mx-auto mt-4\">
                    <button class=\"btn\" type=\"submit\" style=\"background-color: #001935; color:white; \">";
        // line 14
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 14, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
                </div>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "company/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  73 => 14,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"text-center\">
    <div class=\"card mx-auto\" style=\"width: 50%\">
        <div class=\"card-body\">
            {{ form_start(form) }}
                <div class=\"row text-start\">
                    <div>
                        {{ form_row(form.name) }}
                        {{ form_row(form.description)}}
                        {{ form_row(form.location)}}
                        {{ form_row(form.posterFile) }}
                    </div>
                </div>
                <div class=\"d-grid gap-2 col-6 mx-auto mt-4\">
                    <button class=\"btn\" type=\"submit\" style=\"background-color: #001935; color:white; \">{{ button_label|default('Enregistrer') }}</button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
", "company/_form.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/company/_form.html.twig");
    }
}
