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

/* profil/_form.html.twig */
class __TwigTemplate_3179a86bcc6be5352f5ee3e355c2fc3d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/_form.html.twig"));

        // line 1
        echo "<div class=\"text-center\">
    <div class=\"card mx-auto\" style=\"width: 75%\">
        <div class=\"card-body\">
            
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col-md-6 text-start\">
                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "titleProfil", [], "any", false, false, false, 8), 'row');
        echo "
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "descriptionProfil", [], "any", false, false, false, 9), 'row');
        echo "
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "locationProfil", [], "any", false, false, false, 10), 'row');
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "experienceYear", [], "any", false, false, false, 11), 'row');
        echo "
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "skills", [], "any", false, false, false, 12), 'row');
        echo "
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "education", [], "any", false, false, false, 13), 'row');
        echo "
                </div>
                <div class=\"col-md-6 text-start\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "language", [], "any", false, false, false, 16), 'row');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "birthDay", [], "any", false, false, false, 17), 'row');
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "mobility", [], "any", false, false, false, 18), 'row');
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "posterFile", [], "any", false, false, false, 19), 'row');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "documentFile", [], "any", false, false, false, 20), 'row');
        echo "
                </div>
            </div>
            <div class=\"d-grid gap-2 col-6 mx-auto mt-4\">
                <button class=\"btn\" type=\"submit\" style=\"background-color: #001935; color:white;\">";
        // line 24
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 24, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
            </div>
            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
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
        return "profil/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 26,  104 => 24,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"text-center\">
    <div class=\"card mx-auto\" style=\"width: 75%\">
        <div class=\"card-body\">
            
            {{ form_start(form) }}
            <div class=\"row\">
                <div class=\"col-md-6 text-start\">
                    {{ form_row(form.titleProfil) }}
                    {{ form_row(form.descriptionProfil)}}
                    {{ form_row(form.locationProfil)}}
                    {{ form_row(form.experienceYear) }}
                    {{ form_row(form.skills) }}
                    {{ form_row(form.education) }}
                </div>
                <div class=\"col-md-6 text-start\">
                    {{ form_row(form.language) }}
                    {{ form_row(form.birthDay) }}
                    {{ form_row(form.mobility) }}
                    {{ form_row(form.posterFile) }}
                    {{ form_row(form.documentFile) }}
                </div>
            </div>
            <div class=\"d-grid gap-2 col-6 mx-auto mt-4\">
                <button class=\"btn\" type=\"submit\" style=\"background-color: #001935; color:white;\">{{ button_label|default('Enregistrer') }}</button>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
", "profil/_form.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/profil/_form.html.twig");
    }
}
