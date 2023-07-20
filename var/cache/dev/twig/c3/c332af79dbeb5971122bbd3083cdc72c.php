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

/* home/index.html.twig */
class __TwigTemplate_9b01424feec8ca9a42ae645a830c8bcc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Externatic!";
        
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

<!-- Banner Section Start -->
<div class=\"banner-style-two\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <div class=\"container\">
                <div class=\"banner-text\">
                    <span>Notre réseau est une force et nous y travaillons sans relâche.</span>
                    <h1>Externatic, plus qu’un cabinet de recrutement informatique</h1>
                    <p>Notre challenge est de trouver l’équipe qui fonctionnera ensemble de manière professionnelle.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"banner-img ml-3 mr-3\">
        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/rouge.jpg"), "html", null, true);
        echo "\" alt=\"banner image\" style=\"width: 100%;\">
    </div>
</div>

<!-- Banner Section End -->



<!-- Why Choose Section Start -->
<section class=\"why-choose-two pb-70\">
    <div class=\"container\">
        <div class=\"section-title text-center mt-5\">
            <h2>Externatic, cabinet de recrutement informatique
                </h2>
            <p>Externatic est un cabinet dédié au recrutement de profils d’experts, ingénieurs et managers dans le domaine de l’informatique</p>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4 col-sm-6\">
                <div class=\"choose-card\">
                    <i class=\"bx bx-user-voice\"></i>
                    <h3>Notre proximité</h3>
                    <p>L’expérience professionnelle est une chose. L’expérience de vie en est une autre. Alors nos consultants prennent le temps de faire connaissance avec chaque personne.</p>
                </div>
            </div>

            <div class=\"col-lg-4 col-sm-6\">
                <div class=\"choose-card\">
                    <i class=\"bx bx-store-alt\"></i>
                    <h3>Notre performance</h3>
                    <p>Notre réseau est une force et nous y travaillons sans relâche. Notre expérience nous permet d’identifier les vrais besoins d’une entreprise et de ceux qui la rejoignent..</p>
                </div>
            </div>

            <div class=\"col-lg-4 col-sm-6 offset-sm-3 offset-lg-0\">
                <div class=\"choose-card\">
                    <i class=\"bx bx-log-out-circle\"></i>
                    <h3>Notre durabilité</h3>
                    <p>Notre challenge est de trouver l’équipe qui fonctionnera ensemble de manière professionnelle et personnelle, pour aller jusqu’au bout d’un projet commun. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Section End -->

<div class=\"d-flex justify-content-center align-items-center mb-5 video-container\">
    <iframe width=\"1120\" height=\"630\" src=\"https://www.youtube.com/embed/BYmNVsS5J58\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
</div>





<!-- Job Info Section Start -->
<div class=\"job-info-two pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"looking-job\">
                    <div class=\"media\">
                        <i class='bx bx-wink-smile'></i>
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">À la recherche d'un emploi?</h5>
                            <p>Votre prochain entreprise pourrait se trouver ici.</p>

                            <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offer");
        echo "\">
                                    Postulez maintenant
                                <i class='bx bx-wink-smile'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"recruiting-card\">
                    <div class=\"media\">
                        <i class='bx bx-fast-forward'></i>
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">Recrutez-vous ?</h5>
                            <p>Vos prochains employés pourraient venir d'ici...</p>

                            <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
                                contactez-nous
                                <i class='bx bx-wink-smile'></i>
                            </a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
<!-- Job Info Section End -->

<!-- Testimonial Section Start -->
<div class=\"testimonial-style-two ptb-100 \">
    <div class=\"container\">
        <div class=\"section-title text-center\">
            <h2 class=\"not-darkMode\">Ces témoignages mettent en évidence la satisfaction des clients</h2>
        </div>

        <div class=\"row\">
            <div class=\"testimonial-slider-two owl-carousel owl-theme\">
                <div class=\"testimonial-items\">
                    <div class=\"testimonial-text\">
                        <i class='flaticon-left-quotes-sign'></i>
                        <p> Nous avons fait appel à Externatic pour trouver des développeurs web compétents et nous n'avons pas été déçus. Les candidats qui nous ont été présentés étaient hautement qualifiés et parfaitement adaptés à nos besoins. Votre équipe a su comprendre nos exigences et nous fournir des profils de grande qualité. Nous recommandons vivement vos services !</p>
                    </div>

                    <div class=\"testimonial-info-text\">
                        <h3 class=\"not-darkMode\">Témoignage de John</h3>
                        <p>Directeur technique d'une entreprise de technologie</p>
                    </div>
                </div>

                <div class=\"testimonial-items\">
                    <div class=\"testimonial-text\">
                        <i class='flaticon-left-quotes-sign'></i>
                        <p>En tant que propriétaire d'une boutique en ligne, j'avais besoin d'un développeur web pour mettre en place des fonctionnalités spécifiques sur mon site. Grâce à Externatic, j'ai pu trouver un développeur expérimenté qui a su répondre à mes attentes. Je suis extrêmement satisfaite du travail réalisé et je n'hésiterai pas à faire appel à vous à nouveau pour mes futurs projets.</p>
                    </div>

                    <div class=\"testimonial-info-text\">
                        <h3 class=\"not-darkMode\">Témoignage de Sarah</h3>
                        <p>Entrepreneure dans le secteur de l'e-commerce</p>
                    </div>
                </div>

                <div class=\"testimonial-items\">
                    <div class=\"testimonial-text\">
                        <i class='flaticon-left-quotes-sign'></i>
                        <p>Nous avions un projet de développement d'une application interne et nous avions besoin d'une équipe de développeurs compétents pour le mener à bien. Votre agence d'intérim nous a fourni une équipe expérimentée et hautement professionnelle. Ils ont su relever les défis techniques et respecter les délais. Nous sommes très reconnaissants de votre soutien et de la qualité du travail fourni.</p>
                    </div>

                    <div class=\"testimonial-info-text\">
                        <h3 class=\"not-darkMode\">Témoignage de Mark</h3>
                        <p>Responsable informatique d'une entreprise de services financiers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End --> 

<!-- Counter Section Start -->
<div class=\"counter-section pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row counter-area\">
            <div class=\"col-lg-3 col-6\">
                <div class=\"counter-text\">
                    <i class=\"bx bx-task\"></i>
                    <h2 class=\"mt-4\"><span class=\"counter\">1225</span></h2>
                    <p>emploi posté</p>
                </div>
            </div>

            <div class=\"col-lg-3 col-6\">
                <div class=\"counter-text\">
                    <i class=\"bx bx-user-plus\"></i>
                    <h2 class=\"mt-4\"><span class=\"counter\">145</span></h2>
                    <p>Emploi en cours</p>
                </div>
            </div>

            <div class=\"col-lg-3 col-6\">
                <div class=\"counter-text\">
                    <i class=\"bx bx-briefcase\"></i>
                    <h2 class=\"mt-4\"><span class=\"counter\">170</span></h2>
                    <p>Entreprises</p>
                </div>
            </div>

            <div class=\"col-lg-3 col-6\">
                <div class=\"counter-text\">
                    <i class=\"bx bx-group\"></i>
                    <h2 class=\"mt-4\"><span class=\"counter\">125</span></h2>
                    <p>Membres</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Section End --> 

<!-- Companies Section Start -->
<section class=\"company-section pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"section-title text-center\">
            <h2>Ils nous font confiance</h2>
        </div>

        <div class=\"row\">
            

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"company-card\">
                    <div class=\"company-logo\">
                        <a href=\"https://nickel.eu/fr\" target=\"_blank\"class=\"company-btn\">
                            <img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/nickel.png"), "html", null, true);
        echo "\" alt=\"company logo\">
                        </a>
                    </div>
                    <div class=\"company-text\">
                        <p>
                            <i class='bx bx-location-plus'></i>
                            DES SERVICES EN LIGNE ET UN RÉSEAU NICKEL !

                        </p>
                        <a href=\"https://nickel.eu/fr\" target=\"_blank\"class=\"company-btn\">
                            Voir
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"company-card\">
                    <div class=\"company-logo\">
                        <a href=\"https://www.allovoisins.com/\" target=\"_blank\" class=\"company-btn\">
                            <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/allovoisins.png"), "html", null, true);
        echo "\" alt=\"company logo\">
                        </a>
                    </div>
                    <div class=\"company-text\">
                        <p>
                            <i class='bx bx-location-plus'></i>
                            Prestations de services et location de matériel
                        </p>
                        <a href=\"https://www.allovoisins.com/\" target=\"_blank\" class=\"company-btn\">
                            Voir
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"company-card\">
                <div class=\"company-logo\">
                    <a href=\"https://www.akeneo.com/fr/\" target=\"_blank\" class=\"company-btn\">
                        <img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/akeneo.png"), "html", null, true);
        echo "\" alt=\"company logo\">
                    </a>
                </div>
                <div class=\"company-text\">
                    <p>
                    <i class='bx bx-location-plus'></i>
                    Une solution pour le commerce omnicanal
                    </p>
                    <a href=\"https://www.akeneo.com/fr/\" target=\"_blank\" class=\"company-btn\">
                        Voir
                    </a>
                </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"company-card\">
                    <div class=\"company-logo\">
                        <a href=\"https://www.manitou.com/fr-FR#1\" target=\"_blank\" class=\"company-btn\">
                            <img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/manitou.png"), "html", null, true);
        echo "\" alt=\"company logo\">
                        </a>
                    </div>
                    <div class=\"company-text\">
                        <p>
                            <i class='bx bx-location-plus'></i>
                            MANITOU RESPECTE VOTRE VIE PRIVÉE
                        </p>
                        <a href=\"https://www.manitou.com/fr-FR#1\" target=\"_blank\" class=\"company-btn\">
                            Voir
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Companies Section End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 279,  360 => 261,  338 => 242,  315 => 222,  195 => 105,  175 => 88,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Externatic!{% endblock %}

{% block body %}


<!-- Banner Section Start -->
<div class=\"banner-style-two\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <div class=\"container\">
                <div class=\"banner-text\">
                    <span>Notre réseau est une force et nous y travaillons sans relâche.</span>
                    <h1>Externatic, plus qu’un cabinet de recrutement informatique</h1>
                    <p>Notre challenge est de trouver l’équipe qui fonctionnera ensemble de manière professionnelle.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"banner-img ml-3 mr-3\">
        <img src=\"{{ asset('/assets/images/rouge.jpg') }}\" alt=\"banner image\" style=\"width: 100%;\">
    </div>
</div>

<!-- Banner Section End -->



<!-- Why Choose Section Start -->
<section class=\"why-choose-two pb-70\">
    <div class=\"container\">
        <div class=\"section-title text-center mt-5\">
            <h2>Externatic, cabinet de recrutement informatique
                </h2>
            <p>Externatic est un cabinet dédié au recrutement de profils d’experts, ingénieurs et managers dans le domaine de l’informatique</p>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4 col-sm-6\">
                <div class=\"choose-card\">
                    <i class=\"bx bx-user-voice\"></i>
                    <h3>Notre proximité</h3>
                    <p>L’expérience professionnelle est une chose. L’expérience de vie en est une autre. Alors nos consultants prennent le temps de faire connaissance avec chaque personne.</p>
                </div>
            </div>

            <div class=\"col-lg-4 col-sm-6\">
                <div class=\"choose-card\">
                    <i class=\"bx bx-store-alt\"></i>
                    <h3>Notre performance</h3>
                    <p>Notre réseau est une force et nous y travaillons sans relâche. Notre expérience nous permet d’identifier les vrais besoins d’une entreprise et de ceux qui la rejoignent..</p>
                </div>
            </div>

            <div class=\"col-lg-4 col-sm-6 offset-sm-3 offset-lg-0\">
                <div class=\"choose-card\">
                    <i class=\"bx bx-log-out-circle\"></i>
                    <h3>Notre durabilité</h3>
                    <p>Notre challenge est de trouver l’équipe qui fonctionnera ensemble de manière professionnelle et personnelle, pour aller jusqu’au bout d’un projet commun. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Section End -->

<div class=\"d-flex justify-content-center align-items-center mb-5 video-container\">
    <iframe width=\"1120\" height=\"630\" src=\"https://www.youtube.com/embed/BYmNVsS5J58\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
</div>





<!-- Job Info Section Start -->
<div class=\"job-info-two pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"looking-job\">
                    <div class=\"media\">
                        <i class='bx bx-wink-smile'></i>
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">À la recherche d'un emploi?</h5>
                            <p>Votre prochain entreprise pourrait se trouver ici.</p>

                            <a href=\"{{ path('app_offer') }}\">
                                    Postulez maintenant
                                <i class='bx bx-wink-smile'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"recruiting-card\">
                    <div class=\"media\">
                        <i class='bx bx-fast-forward'></i>
                        <div class=\"media-body\">
                            <h5 class=\"mt-0\">Recrutez-vous ?</h5>
                            <p>Vos prochains employés pourraient venir d'ici...</p>

                            <a href=\"{{ path('app_contact') }}\">
                                contactez-nous
                                <i class='bx bx-wink-smile'></i>
                            </a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
<!-- Job Info Section End -->

<!-- Testimonial Section Start -->
<div class=\"testimonial-style-two ptb-100 \">
    <div class=\"container\">
        <div class=\"section-title text-center\">
            <h2 class=\"not-darkMode\">Ces témoignages mettent en évidence la satisfaction des clients</h2>
        </div>

        <div class=\"row\">
            <div class=\"testimonial-slider-two owl-carousel owl-theme\">
                <div class=\"testimonial-items\">
                    <div class=\"testimonial-text\">
                        <i class='flaticon-left-quotes-sign'></i>
                        <p> Nous avons fait appel à Externatic pour trouver des développeurs web compétents et nous n'avons pas été déçus. Les candidats qui nous ont été présentés étaient hautement qualifiés et parfaitement adaptés à nos besoins. Votre équipe a su comprendre nos exigences et nous fournir des profils de grande qualité. Nous recommandons vivement vos services !</p>
                    </div>

                    <div class=\"testimonial-info-text\">
                        <h3 class=\"not-darkMode\">Témoignage de John</h3>
                        <p>Directeur technique d'une entreprise de technologie</p>
                    </div>
                </div>

                <div class=\"testimonial-items\">
                    <div class=\"testimonial-text\">
                        <i class='flaticon-left-quotes-sign'></i>
                        <p>En tant que propriétaire d'une boutique en ligne, j'avais besoin d'un développeur web pour mettre en place des fonctionnalités spécifiques sur mon site. Grâce à Externatic, j'ai pu trouver un développeur expérimenté qui a su répondre à mes attentes. Je suis extrêmement satisfaite du travail réalisé et je n'hésiterai pas à faire appel à vous à nouveau pour mes futurs projets.</p>
                    </div>

                    <div class=\"testimonial-info-text\">
                        <h3 class=\"not-darkMode\">Témoignage de Sarah</h3>
                        <p>Entrepreneure dans le secteur de l'e-commerce</p>
                    </div>
                </div>

                <div class=\"testimonial-items\">
                    <div class=\"testimonial-text\">
                        <i class='flaticon-left-quotes-sign'></i>
                        <p>Nous avions un projet de développement d'une application interne et nous avions besoin d'une équipe de développeurs compétents pour le mener à bien. Votre agence d'intérim nous a fourni une équipe expérimentée et hautement professionnelle. Ils ont su relever les défis techniques et respecter les délais. Nous sommes très reconnaissants de votre soutien et de la qualité du travail fourni.</p>
                    </div>

                    <div class=\"testimonial-info-text\">
                        <h3 class=\"not-darkMode\">Témoignage de Mark</h3>
                        <p>Responsable informatique d'une entreprise de services financiers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End --> 

<!-- Counter Section Start -->
<div class=\"counter-section pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"row counter-area\">
            <div class=\"col-lg-3 col-6\">
                <div class=\"counter-text\">
                    <i class=\"bx bx-task\"></i>
                    <h2 class=\"mt-4\"><span class=\"counter\">1225</span></h2>
                    <p>emploi posté</p>
                </div>
            </div>

            <div class=\"col-lg-3 col-6\">
                <div class=\"counter-text\">
                    <i class=\"bx bx-user-plus\"></i>
                    <h2 class=\"mt-4\"><span class=\"counter\">145</span></h2>
                    <p>Emploi en cours</p>
                </div>
            </div>

            <div class=\"col-lg-3 col-6\">
                <div class=\"counter-text\">
                    <i class=\"bx bx-briefcase\"></i>
                    <h2 class=\"mt-4\"><span class=\"counter\">170</span></h2>
                    <p>Entreprises</p>
                </div>
            </div>

            <div class=\"col-lg-3 col-6\">
                <div class=\"counter-text\">
                    <i class=\"bx bx-group\"></i>
                    <h2 class=\"mt-4\"><span class=\"counter\">125</span></h2>
                    <p>Membres</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Section End --> 

<!-- Companies Section Start -->
<section class=\"company-section pt-100 pb-70\">
    <div class=\"container\">
        <div class=\"section-title text-center\">
            <h2>Ils nous font confiance</h2>
        </div>

        <div class=\"row\">
            

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"company-card\">
                    <div class=\"company-logo\">
                        <a href=\"https://nickel.eu/fr\" target=\"_blank\"class=\"company-btn\">
                            <img src=\"{{ asset('/assets/images/nickel.png') }}\" alt=\"company logo\">
                        </a>
                    </div>
                    <div class=\"company-text\">
                        <p>
                            <i class='bx bx-location-plus'></i>
                            DES SERVICES EN LIGNE ET UN RÉSEAU NICKEL !

                        </p>
                        <a href=\"https://nickel.eu/fr\" target=\"_blank\"class=\"company-btn\">
                            Voir
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"company-card\">
                    <div class=\"company-logo\">
                        <a href=\"https://www.allovoisins.com/\" target=\"_blank\" class=\"company-btn\">
                            <img src=\"{{ asset('/assets/images/allovoisins.png') }}\" alt=\"company logo\">
                        </a>
                    </div>
                    <div class=\"company-text\">
                        <p>
                            <i class='bx bx-location-plus'></i>
                            Prestations de services et location de matériel
                        </p>
                        <a href=\"https://www.allovoisins.com/\" target=\"_blank\" class=\"company-btn\">
                            Voir
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"company-card\">
                <div class=\"company-logo\">
                    <a href=\"https://www.akeneo.com/fr/\" target=\"_blank\" class=\"company-btn\">
                        <img src=\"{{ asset('/assets/images/akeneo.png') }}\" alt=\"company logo\">
                    </a>
                </div>
                <div class=\"company-text\">
                    <p>
                    <i class='bx bx-location-plus'></i>
                    Une solution pour le commerce omnicanal
                    </p>
                    <a href=\"https://www.akeneo.com/fr/\" target=\"_blank\" class=\"company-btn\">
                        Voir
                    </a>
                </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"company-card\">
                    <div class=\"company-logo\">
                        <a href=\"https://www.manitou.com/fr-FR#1\" target=\"_blank\" class=\"company-btn\">
                            <img src=\"{{ asset('/assets/images/manitou.png') }}\" alt=\"company logo\">
                        </a>
                    </div>
                    <div class=\"company-text\">
                        <p>
                            <i class='bx bx-location-plus'></i>
                            MANITOU RESPECTE VOTRE VIE PRIVÉE
                        </p>
                        <a href=\"https://www.manitou.com/fr-FR#1\" target=\"_blank\" class=\"company-btn\">
                            Voir
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Companies Section End -->
{% endblock %}
", "home/index.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/home/index.html.twig");
    }
}
