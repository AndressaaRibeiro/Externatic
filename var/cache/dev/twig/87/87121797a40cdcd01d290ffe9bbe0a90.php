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

/* faq/index.html.twig */
class __TwigTemplate_f1db3a30a24660fac58c8977048ed7e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faq/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faq/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "faq/index.html.twig", 1);
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

        echo "FAQ";
        
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
        echo "    <body>
\t\t <!-- Page Title Start -->
        <section class=\"page-title title-bg17\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <h2>FAQ</h2>
                    <ul>
                        <li>
                            <a href=\"/\">Home</a>
                        </li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
            <div class=\"lines\">
                <div class=\"line\"></div>
                <div class=\"line\"></div>
                <div class=\"line\"></div>
            </div>
        </section>

        <section class=\"faq-section pt-100 pb-70\">
            <div class=\"container\">
                <div class=\"section-title text-center\">
                    <h2> Questions fréquemment posées</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 offset-lg-3\">
                        <div class=\"accordions\">
                            <div class=\"accordion-item\">
                                <div class=\"accordion-title\" data-tab=\"item1\">
                                    <h2>Comment se déroule l’accompagnement d’Externatic ?<i class='bx bx-chevrons-right down-arrow'></i></h2>
                                </div>
                                <div class=\"accordion-content\" id=\"item1\">
                                    <p>Une consultante sera votre interlocuteurrice privilégiée sur les étapes suivantes :
                                        1. Vous écouter et analyser les besoins de vos recrutements
                                        2. Rechercher les bons candidats
                                        3. Qualifier chaque candidat en entretien
                                        4. Vous présenter différents profils correspondant à vos critères de recherche (savoir faire et savoir-être)
                                        5. Vous accompagner tout au long de l’intégration des candidats</p>
                                </div>
                            </div>
                          
                            <div class=\"accordion-item\">
                                <div class=\"accordion-title\" data-tab=\"item2\">
                                    <h2>Comment trouvez-vous les candidats ?<i class='bx bx-chevrons-right down-arrow'></i></h2>
                                </div>
                                <div class=\"accordion-content\" id=\"item2\">
                                    <p>Tout d’abord, nous sommes très investis dans l’écosystème numérique local. Nous participons à beaucoup d’événements en tant que sponsors (Meetup, DevFest, Web2day, PHP Tour…) pour aller directement à la rencontre des candidats.
                                        La plupart de nos recrutements sont également issus de notre vivier de candidats, de notre réseau et de la cooptation.
                                        Nous sommes aussi en partenariat avec les écoles et nous intervenons sous différentes formes pour conseiller les étudiants et les préparer à entrer sur le marché de l’emploi.
                                        Bien entendu nous mettons également en place des outils de recrutement par le biais de jobboards généralistes et spécialisés ainsi que sur nos réseaux sociaux.
                                        Enfin, si nous ne parvenons pas à vous trouver la perle rare, nous mettons en place différentes techniques d’approches directes pour cibler notre recherche.</p>
                                </div>
                            </div>
                          
                            <div class=\"accordion-item\">
                                <div class=\"accordion-title\" data-tab=\"item3\">
                                    <h2>Quel est votre mode de fonctionnement ?<i class='bx bx-chevrons-right down-arrow'></i></h2>
                                </div>
                                <div class=\"accordion-content\" id=\"item3\">
                                    <p> Notre cabinet fonctionne au succès, pas d’acompte à verser pour commencer à vous proposer nos meilleurs profils.
                                        Nous fonctionnons également sans exclusivité. Vous pouvez tout à fait continuer vos recherches en parallèle, nous sommes là pour vous proposer des candidatures en complément de vos recherches annexes.
                                        Nous garantissons la première période d’essai. Si celle-ci n’est pas validée par le candidat ou l’entreprise, nous nous engageons à vous trouver un nouveau profil sans frais supplémentaire.</p>
                                </div>
                            </div>

                            <div class=\"accordion-item\">
                                <div class=\"accordion-title\" data-tab=\"item4\">
                                    <h2>Combien ça coûte ? Est-ce gratuit ?<i class='bx bx-chevrons-right down-arrow'></i></h2>
                                </div>
                                <div class=\"accordion-content\" id=\"item4\">
                                    <p>C’est totalement GRATUIT pour le candidat.
                                        Notre modèle économique est le suivant : les entreprises paient Externatic uniquement si le candidat présenté par Externatic est recruté.</p>
                                </div>
                            </div>
                          
                            <div class=\"accordion-item\">
                                <div class=\"accordion-title\" data-tab=\"item5\">
                                    <h2>Une fois que j’ai postulé, que se passe-t-il ?<i class='bx bx-chevrons-right down-arrow'></i></h2>
                                </div>
                                <div class=\"accordion-content\" id=\"item5\">
                                    <p> Un de nos consultants va recevoir directement votre candidature pour qu’elle soit étudiée. Si votre profil correspond à un poste ouvert chez nous, nous revenons vers vous dès que possible pour que vous puissiez nous parler de vos expériences et de votre projet professionnel.
                                        Si vous n’avez aucune réponse de notre part au-delà de 15 jours, c’est qu’aucun poste ne semble correspondre à votre profil.
                                        
                                        Mais tout n’est pas perdu !! Il nous arrive souvent de recontacter nos candidats plusieurs semaines après un premier contact.
                                    </p>
                                </div>
                            </div>
                          
                            <div class=\"accordion-item\">
                                <div class=\"accordion-title\" data-tab=\"item6\">
                                    <h2>Comment se déroule un RDV avec un consultant ?<i class='bx bx-chevrons-right down-arrow'></i></h2>
                                </div>
                                <div class=\"accordion-content\" id=\"item6\">
                                    <p>
                                    L’entretien se passe en visio ou de visu dans nos locaux ou ailleurs (nos consultants peuvent se déplacer assez facilement pour faciliter la prise de rdv).
                                    Au cours de l’échange, nos consultants se présentent à vous, et vous leur parlez de votre parcours et surtout de vos aspirations professionnelles. Les consultants sont là pour vous aider et vous accompagner dans votre démarche de recherche d’emploi : ils sont là pour vous présenter les jobs qui répondent le mieux à vos critères de recherche.
                                    </p>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq Section End -->

        <!-- Subscribe Section Start -->
        <section class=\"subscribe-section\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-6\">
                        <div class=\"section-title\">
                            <h2>Obtenir des notifications pour de nouveaux emplois.</h2>
                            <p>Abonnez-vous et recevez toutes les notifications d'emplois correspondantes.</p>
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <form class=\"newsletter-form\" data-toggle=\"validator\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Enter your email\" name=\"EMAIL\" required autocomplete=\"off\">
    
                            <button class=\"default-btn sub-btn\" type=\"submit\">
                             </button>
                            <div id=\"validator-newsletter\" class=\"form-result\"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "faq/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}FAQ{% endblock %}

{% block body %}
    <body>
\t\t <!-- Page Title Start -->
        <section class=\"page-title title-bg17\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <h2>FAQ</h2>
                    <ul>
                        <li>
                            <a href=\"/\">Home</a>
                        </li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
            <div class=\"lines\">
                <div class=\"line\"></div>
                <div class=\"line\"></div>
                <div class=\"line\"></div>
            </div>
        </section>

        <section class=\"faq-section pt-100 pb-70\">
            <div class=\"container\">
                <div class=\"section-title text-center\">
                    <h2> Questions fréquemment posées</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 offset-lg-3\">
                        <div class=\"accordions\">
                            <div class=\"accordion-item\">
                                <div class=\"accordion-title\" data-tab=\"item1\">
                                    <h2>Comment se déroule l’accompagnement d’Externatic ?<i class='bx bx-chevrons-right down-arrow'></i></h2>
                                </div>
                                <div class=\"accordion-content\" id=\"item1\">
                                    <p>Une consultante sera votre interlocuteurrice privilégiée sur les étapes suivantes :
                                        1. Vous écouter et analyser les besoins de vos recrutements
                                        2. Rechercher les bons candidats
                                        3. Qualifier chaque candidat en entretien
                                        4. Vous présenter différents profils correspondant à vos critères de recherche (savoir faire et savoir-être)
                                        5. Vous accompagner tout au long de l’intégration des candidats</p>
                                </div>
                            </div>
                          
                            <div class=\"accordion-item\">
                                <div class=\"accordion-title\" data-tab=\"item2\">
                                    <h2>Comment trouvez-vous les candidats ?<i class='bx bx-chevrons-right down-arrow'></i></h2>
                                </div>
                                <div class=\"accordion-content\" id=\"item2\">
                                    <p>Tout d’abord, nous sommes très investis dans l’écosystème numérique local. Nous participons à beaucoup d’événements en tant que sponsors (Meetup, DevFest, Web2day, PHP Tour…) pour aller directement à la rencontre des candidats.
                                        La plupart de nos recrutements sont également issus de notre vivier de candidats, de notre réseau et de la cooptation.
                                        Nous sommes aussi en partenariat avec les écoles et nous intervenons sous différentes formes pour conseiller les étudiants et les préparer à entrer sur le marché de l’emploi.
                                        Bien entendu nous mettons également en place des outils de recrutement par le biais de jobboards généralistes et spécialisés ainsi que sur nos réseaux sociaux.
                                        Enfin, si nous ne parvenons pas à vous trouver la perle rare, nous mettons en place différentes techniques d’approches directes pour cibler notre recherche.</p>
                                </div>
                            </div>
                          
                            <div class=\"accordion-item\">
                                <div class=\"accordion-title\" data-tab=\"item3\">
                                    <h2>Quel est votre mode de fonctionnement ?<i class='bx bx-chevrons-right down-arrow'></i></h2>
                                </div>
                                <div class=\"accordion-content\" id=\"item3\">
                                    <p> Notre cabinet fonctionne au succès, pas d’acompte à verser pour commencer à vous proposer nos meilleurs profils.
                                        Nous fonctionnons également sans exclusivité. Vous pouvez tout à fait continuer vos recherches en parallèle, nous sommes là pour vous proposer des candidatures en complément de vos recherches annexes.
                                        Nous garantissons la première période d’essai. Si celle-ci n’est pas validée par le candidat ou l’entreprise, nous nous engageons à vous trouver un nouveau profil sans frais supplémentaire.</p>
                                </div>
                            </div>

                            <div class=\"accordion-item\">
                                <div class=\"accordion-title\" data-tab=\"item4\">
                                    <h2>Combien ça coûte ? Est-ce gratuit ?<i class='bx bx-chevrons-right down-arrow'></i></h2>
                                </div>
                                <div class=\"accordion-content\" id=\"item4\">
                                    <p>C’est totalement GRATUIT pour le candidat.
                                        Notre modèle économique est le suivant : les entreprises paient Externatic uniquement si le candidat présenté par Externatic est recruté.</p>
                                </div>
                            </div>
                          
                            <div class=\"accordion-item\">
                                <div class=\"accordion-title\" data-tab=\"item5\">
                                    <h2>Une fois que j’ai postulé, que se passe-t-il ?<i class='bx bx-chevrons-right down-arrow'></i></h2>
                                </div>
                                <div class=\"accordion-content\" id=\"item5\">
                                    <p> Un de nos consultants va recevoir directement votre candidature pour qu’elle soit étudiée. Si votre profil correspond à un poste ouvert chez nous, nous revenons vers vous dès que possible pour que vous puissiez nous parler de vos expériences et de votre projet professionnel.
                                        Si vous n’avez aucune réponse de notre part au-delà de 15 jours, c’est qu’aucun poste ne semble correspondre à votre profil.
                                        
                                        Mais tout n’est pas perdu !! Il nous arrive souvent de recontacter nos candidats plusieurs semaines après un premier contact.
                                    </p>
                                </div>
                            </div>
                          
                            <div class=\"accordion-item\">
                                <div class=\"accordion-title\" data-tab=\"item6\">
                                    <h2>Comment se déroule un RDV avec un consultant ?<i class='bx bx-chevrons-right down-arrow'></i></h2>
                                </div>
                                <div class=\"accordion-content\" id=\"item6\">
                                    <p>
                                    L’entretien se passe en visio ou de visu dans nos locaux ou ailleurs (nos consultants peuvent se déplacer assez facilement pour faciliter la prise de rdv).
                                    Au cours de l’échange, nos consultants se présentent à vous, et vous leur parlez de votre parcours et surtout de vos aspirations professionnelles. Les consultants sont là pour vous aider et vous accompagner dans votre démarche de recherche d’emploi : ils sont là pour vous présenter les jobs qui répondent le mieux à vos critères de recherche.
                                    </p>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq Section End -->

        <!-- Subscribe Section Start -->
        <section class=\"subscribe-section\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-6\">
                        <div class=\"section-title\">
                            <h2>Obtenir des notifications pour de nouveaux emplois.</h2>
                            <p>Abonnez-vous et recevez toutes les notifications d'emplois correspondantes.</p>
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <form class=\"newsletter-form\" data-toggle=\"validator\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Enter your email\" name=\"EMAIL\" required autocomplete=\"off\">
    
                            <button class=\"default-btn sub-btn\" type=\"submit\">
                             </button>
                            <div id=\"validator-newsletter\" class=\"form-result\"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
{% endblock %}
", "faq/index.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/faq/index.html.twig");
    }
}
