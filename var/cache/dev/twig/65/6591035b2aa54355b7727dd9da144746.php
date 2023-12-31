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

/* about/about.html.twig */
class __TwigTemplate_2d0de02f1320dabc9248c5efbb66591a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/about.html.twig", 1);
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

        echo "A Propos de nous";
        
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
        <section class=\"page-title title-bg1\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <h2>A Propos</h2>
                    <ul>
                        <li>
                            <a href=\"/\">Accueil</a>
                        </li>
                        <li>A propos</li>
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

        <!-- About Section Start -->
        <section class=\"about-section ptb-100\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"about-text\">
                            <div class=\"section-title\">
                                <h2>Externatic: le début de l'histoire.</h2>
                            </div>

                            <p>Il était une fois un groupe d'amis passionnés par la technologie : Lucas, Emma, Marc et Sarah. 
                                Ils décidèrent de créer une entreprise de recrutement spécialisée dans les emplois technologiques, appelée Externatic.

                                Conscients du besoin croissant des entreprises en talents qualifiés et des professionnels cherchant de bonnes opportunités, 
                                ils travaillèrent dur pour mettre en place Externatic. 
                                Ils étudièrent le marché, établirent des partenariats avec des entreprises locales et créèrent une plateforme en ligne conviviale.

                                Externatic connut rapidement une forte réputation, attirant à la fois les entreprises et les professionnels de la technologie. 
                                Avec le temps, ils élargirent leurs services en proposant du conseil en recrutement et du développement de carrière.

                                Aujourd'hui, Externatic est un acteur incontournable du recrutement technologique, connectant avec succès les entreprises et les talents.</p>

                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"about-img\">
                            <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/QSN2.jpg"), "html", null, true);
        echo "\" alt=\"about image\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

\t\t<!-- Way To Use Section Start -->
\t\t<section class=\"use-section pt-100 pb-70\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>Nos moyens de suivi </h2>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"use-text\">
\t\t\t\t\t\t\t<span>1</span>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-house\"></i>
\t\t\t\t\t\t\t<h3>Trouver son travail</h3>
\t\t\t\t\t\t\t<p>Chez Externatic, chaque candidat bénéficie d'un coaching personnalisé 
                            pour les préparer à leurs entretiens. Des experts en recrutement les aident 
                            à perfectionner leurs compétences en entretien, à mettre en valeur leurs atouts 
                            et à répondre de manière convaincante aux questions les plus courantes</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"use-text\">
\t\t\t\t\t\t\t<span>2</span>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-cloud\"></i>
\t\t\t\t\t\t\t<h3>Faire son entretien</h3>
\t\t\t\t\t\t\t<p>Externatic fournit aux candidats tous les outils nécessaires 
                            pour se préparer efficacement à un entretien. Ils proposent des séances 
                            de simulation d'entretiens, des conseils sur la recherche d'informations 
                            sur l'entreprise, ainsi que des ressources pour comprendre les attentes des recruteurs. 
                            Ils aident également les candidats à présenter leurs compétences et leurs expériences 
                            de manière claire et concise.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 offset-sm-3 offset-lg-0\">
\t\t\t\t\t\t<div class=\"use-text\">
\t\t\t\t\t\t\t<span>3</span>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-bomb\"></i>
\t\t\t\t\t\t\t<h3>Signer son contrat</h3>
\t\t\t\t\t\t\t<p>Une fois qu'un candidat a réussi son entretien et a reçu une offre d'emploi, 
                            Externatic fournit un soutien précieux lors de la négociation du contrat. 
                            Leur équipe d'experts conseille les candidats sur les aspects salariaux, 
                            les avantages sociaux et autres conditions contractuelles. Ils s'assurent que 
                            les candidats obtiennent les meilleures conditions possibles, en veillant à ce 
                            que leurs intérêts soient préservés.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
        <!-- Way To Use Section End -->
        
        <!-- Candidates Section Start -->
        <section class=\"candidate-style-two pt-100 pb-70\">
            <div class=\"section-title text-center\">
                    <h2>Nos consultants</h2>
                </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/P1.jpg"), "html", null, true);
        echo "\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Mibraj Alex</a>
                                </h3>
                                <ul>
                                    <li>
                                    Web Developer
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>                           
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/P2.jpg"), "html", null, true);
        echo "\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Felica Kareon</a>
                                </h3>
                                <ul>
                                    <li>
                                        PHP Developer
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>  
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/P3.jpg"), "html", null, true);
        echo "\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Malisa Petel</a>
                                </h3>
                                <ul>
                                    <li>
                                        Business Consultant
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>  
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/P4.jpg"), "html", null, true);
        echo "\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Quence Joes</a>
                                </h3>
                                <ul>
                                    <li>
                                        Graphics Designer
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>  
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/p5.jpg"), "html", null, true);
        echo "\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Mary Mainor</a>
                                </h3>
                                <ul>
                                    <li>
                                        Technical Writter
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>  
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/P6.jpg"), "html", null, true);
        echo "\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Jack Hallock</a>
                                </h3>
                                <ul>
                                    <li>
                                        Marketing Expert
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>  
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/P7.jpg"), "html", null, true);
        echo "\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Lucas Mason</a>
                                </h3>
                                <ul>
                                    <li>
                                        UX Designer
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>  
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/P8.jpg"), "html", null, true);
        echo "\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Jerry Hudson</a>
                                </h3>
                                <ul>
                                    <li>
                                        Video Editor
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Candidates Section End -->

        <!-- Grow Business Section Start -->
        <div class=\"grow-business pb-100\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-7\">
                        <div class=\"grow-text\">
                            <div class=\"section-title\">
                                <h2>Nos valeurs humaines et professionnelles</h2>
                            </div>

                            <p>Externatic, c’est avant tout une équipe d’experts IT, tous animés par la même passion des relations humaines. L’intelligence émotionnelle et l’éducation cognitive ne peuvent être remplacées par des algorithmes.
                            </p>

                            <p>Notre cabinet de recrutement s’appuie sur des méthodes authentiques, où l’humain est tout simplement indispensable.
                            </p>

                            <p>Depuis 12 ans, externatic a développé un savoir-faire sur le recrutement de profils pénuriques. Ces compétences nous permettent d’intervenir sur d’autres secteurs que l’IT. Notamment l’industrie avec Induseo et la cybersécurité avec Underguard.
                            </p>

                            ";
        // line 339
        echo "                        </div>
                    </div>

                    <div class=\"col-lg-5\">
                        <div class=\"grow-img\">
                            <img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/préminium.jpg"), "html", null, true);
        echo "\" alt=\"grow image\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grow Business Section End -->

        <!-- Testimonial Section Start -->
        <div class=\"testimonial-style-two ptb-100\">
            <div class=\"container\">
                <div class=\"section-title text-center\">

                    <h2 class=\"not-darkMode\">Ce que disent nos clients à notre sujet</h2>
                    <p class=\"not-darkMode\">Les clients de l'entreprise Externatic sont extrêmement satisfaits de leurs services. Ils soulignent le professionnalisme de l'équipe, 
                    la qualité des profils présentés et leur capacité à comprendre leurs besoins spécifiques. Les clients recommandent vivement Externatic 
                    pour leur expertise en recrutement de talents tech et leur soutien dans la transition numérique.</p>
                </div>

                <div class=\"row\">
                    <div class=\"testimonial-slider-two owl-carousel owl-theme\">
                        <div class=\"testimonial-items\">
                            <div class=\"testimonial-text\">
                                <i class='flaticon-left-quotes-sign'></i>
                                <p>\"Externatic nous a accompagnés dans notre transition numérique en nous fournissant des consultants experts 
                                dans différents domaines. Leur équipe a été à l'écoute de nos besoins et a su nous conseiller sur les meilleures 
                                solutions technologiques à mettre en place. Les consultants externes qu'ils nous ont fournis étaient compétents, 
                                flexibles et se sont parfaitement intégrés à notre équipe interne. Grâce à leur soutien, nous avons pu moderniser 
                                nos processus et optimiser notre efficacité opérationnelle. Nous sommes très satisfaits de la collaboration avec Externatic.\"</p>
                            </div>

                            <div class=\"testimonial-info-text\">
                                <h3 class=\"not-darkMode\">Alisa Meair</h3>
                                <p>CEO of  Company</p>
                            </div>
                        </div>

                        <div class=\"testimonial-items\">
                            <div class=\"testimonial-text\">
                                <i class='flaticon-left-quotes-sign'></i>
                                <p>\"Externatic a été un partenaire précieux dans notre croissance. 
                                Leur équipe nous a aidés à constituer une équipe technique solide, 
                                en trouvant des développeurs talentueux et passionnés. Le processus 
                                de recrutement a été transparent et efficace, et nous avons été impressionnés 
                                par la qualité des profils présentés. Grâce à Externatic, nous avons pu 
                                accélérer notre développement et atteindre nos objectifs plus rapidement. 
                                Je recommande vivement leurs services à toute entreprise à la recherche de talents tech exceptionnels.\"</p>
                            </div>

                            <div class=\"testimonial-info-text\">
                                <h3 class=\"not-darkMode\">Adam Smith</h3>
                                <p>Web Developer</p>
                            </div>
                        </div>

                        <div class=\"testimonial-items\">
                            <div class=\"testimonial-text\">
                                <i class='flaticon-left-quotes-sign'></i>
                                <p>\"Nous avons fait appel à Externatic pour 
                                recruter des talents dans le domaine de la technologie, 
                                et nous sommes extrêmement satisfaits des résultats. 
                                Leur équipe a su comprendre nos besoins spécifiques et 
                                nous proposer des candidats hautement qualifiés. 
                                Grâce à leur expertise et à leur processus de sélection rigoureux, 
                                nous avons pu trouver les profils correspondant parfaitement à nos attentes.
                                 Je recommande vivement Externatic pour leur professionnalisme et 
                                 leur capacité à trouver les meilleurs talents.\"</p>
                            </div>

                            <div class=\"testimonial-info-text\">
                                <h3 class=\"not-darkMode\">John Doe</h3>
                                <p>Graphics Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End --> 
    
        <!-- Blog Section Start -->
        <section class=\"blog-section pb-70\">
            <div class=\"container mt-4\">
                <div class=\"section-title text-center\">
                    <h2>Actualités, conseils et articles</h2>
                    <p>\"Les dernières actualités technologiques\" : 
                    Cet article présente les actualités les plus récentes 
                    dans le domaine de la technologie. Il couvre les 
                    dernières avancées technologiques, les lancements de produits, 
                    les partenariats stratégiques et les innovations importantes. 
                    C'est une source d'informations essentielle pour rester à jour sur 
                    les développements technologiques en cours.</p>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-4 col-sm-6\">
                        <div class=\"blog-card\">
                            <div class=\"blog-img\">
                                <a href=\"https://www.letudiant.fr/jobsstages/lettres-de-motivation_1/comment-se-presenter-lors-d-un-entretien-d-embauche.html\" target=\"_blank\">
                            <img src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/interview.jpg"), "html", null, true);
        echo "\" alt=\"blog image\">
                                </a>
                            </div>
                            <div class=\"blog-text\">
                                <ul>
                                    <li>
                                        <i class='bx bxs-user'></i>
                                        Admin
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar'></i>
                                         7 Mai, 2023
                                    </li>
                                </ul>

                                <h3>
                                    <a href=\"https://www.letudiant.fr/jobsstages/lettres-de-motivation_1/comment-se-presenter-lors-d-un-entretien-d-embauche.html\" target=\"_blank\">
                                        
                                        Comment se présenter lors d'un entretien d'embauche ?
                                    </a>
                                </h3>
                                <p>Lors d'un entretien d'embauche, l'une des premières questions 
                                auxquelles vous devrez répondre est : \"Parlez-moi de vous\". 
                                Cette question d'introduction peut sembler simple, mais elle 
                                peut aussi être délicate si vous n'êtes pas préparé. Voici quelques 
                                conseils pour vous aider à vous présenter de manière efficace lors d'un entretien d'embauche.</p>

                                <a href=\"https://www.letudiant.fr/jobsstages/lettres-de-motivation_1/comment-se-presenter-lors-d-un-entretien-d-embauche.html\" target=\"_blank\" class=\"blog-btn\">
                                    Lire Plus
                                    <i class='bx bx-plus bx-spin'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-sm-6\">
                        <div class=\"blog-card\">
                            <div class=\"blog-img\">
                                <a href=\"https://www.infoentrepreneurs.org/fr/guides/bl---developper-de-nouveaux-produits-et-services/\" target=\"_target\">
                                    <img src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/projet1.jpg"), "html", null, true);
        echo "\" alt=\"blog image\">
                                </a>
                            </div>
                            <div class=\"blog-text\">
                                <ul>
                                    <li>
                                        <i class='bx bxs-user'></i>
                                        Admin
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar'></i>
                                        10 Avril, 2023
                                    </li>
                                </ul>

                                <h3>
                                    <a href=\"https://www.infoentrepreneurs.org/fr/guides/bl---developper-de-nouveaux-produits-et-services/\" target=\"_blank\">
                                        À la recherche d'un produit hautement motivant à développer
                                    </a>
                                </h3>
                                <p>Lorsque vous vous lancez dans le développement de produits, 
                                il est essentiel de trouver une source de motivation solide pour 
                                garantir le succès de votre entreprise. Trouver un produit qui 
                                suscite un fort intérêt et une motivation intrinsèque est la clé pour 
                                maintenir votre passion et votre détermination tout au long du processus de création.</p>

                                <a href=\"https://www.infoentrepreneurs.org/fr/guides/bl---developper-de-nouveaux-produits-et-services/\" target=\"_blank\" class=\"blog-btn\">
                                    Lire Plus
                                    <i class='bx bx-plus bx-spin'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-sm-6 offset-sm-3 offset-lg-0\">
                        <div class=\"blog-card\">
                            <div class=\"blog-img\">
                                <a href=\"https://www.quai-des-entrepreneurs.com/pourquoi-faire-developper-son-propre-logiciel-metier/\" target=\"_blank\">
                                    <img src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/web.jpg"), "html", null, true);
        echo "\" alt=\"blog image\">
                                </a>
                            </div>
                            <div class=\"blog-text\">
                                <ul>
                                    <li>
                                        <i class='bx bxs-user'></i>
                                        Admin
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar'></i>
                                        15 Fev, 2023
                                    </li>
                                </ul>

                                <h3>
                                    <a href=\"https://www.quai-des-entrepreneurs.com/pourquoi-faire-developper-son-propre-logiciel-metier/\" target=\"_blank\">
                                        La raison pour laquelle le développement de logiciels est le meilleur métier
                                    </a>
                                </h3>
                                <p>Le développement de logiciels est l'un des métiers les plus 
                                prisés et les plus gratifiants de notre époque. Il offre de nombreuses
                                 opportunités et présente des avantages uniques qui en font un choix de carrière exceptionnel. 
                                 Voici pourquoi le développement de logiciels est considéré comme le meilleur métier </p>

                                <a href=\"https://www.quai-des-entrepreneurs.com/pourquoi-faire-developper-son-propre-logiciel-metier/\" target=\"_blank\" class=\"blog-btn\">
                                    Lire Plus
                                    <i class='bx bx-plus bx-spin'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 520,  598 => 482,  556 => 443,  454 => 344,  447 => 339,  400 => 292,  373 => 268,  346 => 244,  319 => 220,  292 => 196,  265 => 172,  238 => 148,  211 => 124,  138 => 54,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}A Propos de nous{% endblock %}

{% block body %}

        <!-- Page Title Start -->
        <section class=\"page-title title-bg1\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <h2>A Propos</h2>
                    <ul>
                        <li>
                            <a href=\"/\">Accueil</a>
                        </li>
                        <li>A propos</li>
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

        <!-- About Section Start -->
        <section class=\"about-section ptb-100\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"about-text\">
                            <div class=\"section-title\">
                                <h2>Externatic: le début de l'histoire.</h2>
                            </div>

                            <p>Il était une fois un groupe d'amis passionnés par la technologie : Lucas, Emma, Marc et Sarah. 
                                Ils décidèrent de créer une entreprise de recrutement spécialisée dans les emplois technologiques, appelée Externatic.

                                Conscients du besoin croissant des entreprises en talents qualifiés et des professionnels cherchant de bonnes opportunités, 
                                ils travaillèrent dur pour mettre en place Externatic. 
                                Ils étudièrent le marché, établirent des partenariats avec des entreprises locales et créèrent une plateforme en ligne conviviale.

                                Externatic connut rapidement une forte réputation, attirant à la fois les entreprises et les professionnels de la technologie. 
                                Avec le temps, ils élargirent leurs services en proposant du conseil en recrutement et du développement de carrière.

                                Aujourd'hui, Externatic est un acteur incontournable du recrutement technologique, connectant avec succès les entreprises et les talents.</p>

                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"about-img\">
                            <img src=\"{{asset('/assets/images/QSN2.jpg')}}\" alt=\"about image\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

\t\t<!-- Way To Use Section Start -->
\t\t<section class=\"use-section pt-100 pb-70\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>Nos moyens de suivi </h2>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"use-text\">
\t\t\t\t\t\t\t<span>1</span>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-house\"></i>
\t\t\t\t\t\t\t<h3>Trouver son travail</h3>
\t\t\t\t\t\t\t<p>Chez Externatic, chaque candidat bénéficie d'un coaching personnalisé 
                            pour les préparer à leurs entretiens. Des experts en recrutement les aident 
                            à perfectionner leurs compétences en entretien, à mettre en valeur leurs atouts 
                            et à répondre de manière convaincante aux questions les plus courantes</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"use-text\">
\t\t\t\t\t\t\t<span>2</span>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-cloud\"></i>
\t\t\t\t\t\t\t<h3>Faire son entretien</h3>
\t\t\t\t\t\t\t<p>Externatic fournit aux candidats tous les outils nécessaires 
                            pour se préparer efficacement à un entretien. Ils proposent des séances 
                            de simulation d'entretiens, des conseils sur la recherche d'informations 
                            sur l'entreprise, ainsi que des ressources pour comprendre les attentes des recruteurs. 
                            Ils aident également les candidats à présenter leurs compétences et leurs expériences 
                            de manière claire et concise.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 offset-sm-3 offset-lg-0\">
\t\t\t\t\t\t<div class=\"use-text\">
\t\t\t\t\t\t\t<span>3</span>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-bomb\"></i>
\t\t\t\t\t\t\t<h3>Signer son contrat</h3>
\t\t\t\t\t\t\t<p>Une fois qu'un candidat a réussi son entretien et a reçu une offre d'emploi, 
                            Externatic fournit un soutien précieux lors de la négociation du contrat. 
                            Leur équipe d'experts conseille les candidats sur les aspects salariaux, 
                            les avantages sociaux et autres conditions contractuelles. Ils s'assurent que 
                            les candidats obtiennent les meilleures conditions possibles, en veillant à ce 
                            que leurs intérêts soient préservés.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
        <!-- Way To Use Section End -->
        
        <!-- Candidates Section Start -->
        <section class=\"candidate-style-two pt-100 pb-70\">
            <div class=\"section-title text-center\">
                    <h2>Nos consultants</h2>
                </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"{{asset('/assets/images/P1.jpg')}}\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Mibraj Alex</a>
                                </h3>
                                <ul>
                                    <li>
                                    Web Developer
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>                           
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"{{asset('/assets/images/P2.jpg')}}\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Felica Kareon</a>
                                </h3>
                                <ul>
                                    <li>
                                        PHP Developer
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>  
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"{{asset('/assets/images/P3.jpg')}}\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Malisa Petel</a>
                                </h3>
                                <ul>
                                    <li>
                                        Business Consultant
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>  
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"{{asset('/assets/images/P4.jpg')}}\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Quence Joes</a>
                                </h3>
                                <ul>
                                    <li>
                                        Graphics Designer
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>  
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"{{asset('/assets/images/p5.jpg')}}\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Mary Mainor</a>
                                </h3>
                                <ul>
                                    <li>
                                        Technical Writter
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>  
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"{{asset('/assets/images/P6.jpg')}}\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Jack Hallock</a>
                                </h3>
                                <ul>
                                    <li>
                                        Marketing Expert
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>  
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"{{asset('/assets/images/P7.jpg')}}\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Lucas Mason</a>
                                </h3>
                                <ul>
                                    <li>
                                        UX Designer
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>  
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"candidate-card\">
                            <div class=\"candidate-img\">
                                <img src=\"{{asset('/assets/images/P8.jpg')}}\" alt=\"about image\">
                            </div>
                            <div class=\"candidate-text\">
                                <h3>
                                    <a href=\"candidate-details.html\">Jerry Hudson</a>
                                </h3>
                                <ul>
                                    <li>
                                        Video Editor
                                    </li>
                                </ul>
                            </div>

                            <div class=\"candidate-social\">
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-facebook\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-twitter\"></i></a>
                                <a href=\"#\" target=\"_blank\"><i class=\"bx bxl-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Candidates Section End -->

        <!-- Grow Business Section Start -->
        <div class=\"grow-business pb-100\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-7\">
                        <div class=\"grow-text\">
                            <div class=\"section-title\">
                                <h2>Nos valeurs humaines et professionnelles</h2>
                            </div>

                            <p>Externatic, c’est avant tout une équipe d’experts IT, tous animés par la même passion des relations humaines. L’intelligence émotionnelle et l’éducation cognitive ne peuvent être remplacées par des algorithmes.
                            </p>

                            <p>Notre cabinet de recrutement s’appuie sur des méthodes authentiques, où l’humain est tout simplement indispensable.
                            </p>

                            <p>Depuis 12 ans, externatic a développé un savoir-faire sur le recrutement de profils pénuriques. Ces compétences nous permettent d’intervenir sur d’autres secteurs que l’IT. Notamment l’industrie avec Induseo et la cybersécurité avec Underguard.
                            </p>

                            {# <div class=\"theme-btn\">
                                <a href=\"#\" class=\"default-btn\">Checkout More</a>
                            </div> #}
                        </div>
                    </div>

                    <div class=\"col-lg-5\">
                        <div class=\"grow-img\">
                            <img src=\"{{asset('/assets/images/préminium.jpg')}}\" alt=\"grow image\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grow Business Section End -->

        <!-- Testimonial Section Start -->
        <div class=\"testimonial-style-two ptb-100\">
            <div class=\"container\">
                <div class=\"section-title text-center\">

                    <h2 class=\"not-darkMode\">Ce que disent nos clients à notre sujet</h2>
                    <p class=\"not-darkMode\">Les clients de l'entreprise Externatic sont extrêmement satisfaits de leurs services. Ils soulignent le professionnalisme de l'équipe, 
                    la qualité des profils présentés et leur capacité à comprendre leurs besoins spécifiques. Les clients recommandent vivement Externatic 
                    pour leur expertise en recrutement de talents tech et leur soutien dans la transition numérique.</p>
                </div>

                <div class=\"row\">
                    <div class=\"testimonial-slider-two owl-carousel owl-theme\">
                        <div class=\"testimonial-items\">
                            <div class=\"testimonial-text\">
                                <i class='flaticon-left-quotes-sign'></i>
                                <p>\"Externatic nous a accompagnés dans notre transition numérique en nous fournissant des consultants experts 
                                dans différents domaines. Leur équipe a été à l'écoute de nos besoins et a su nous conseiller sur les meilleures 
                                solutions technologiques à mettre en place. Les consultants externes qu'ils nous ont fournis étaient compétents, 
                                flexibles et se sont parfaitement intégrés à notre équipe interne. Grâce à leur soutien, nous avons pu moderniser 
                                nos processus et optimiser notre efficacité opérationnelle. Nous sommes très satisfaits de la collaboration avec Externatic.\"</p>
                            </div>

                            <div class=\"testimonial-info-text\">
                                <h3 class=\"not-darkMode\">Alisa Meair</h3>
                                <p>CEO of  Company</p>
                            </div>
                        </div>

                        <div class=\"testimonial-items\">
                            <div class=\"testimonial-text\">
                                <i class='flaticon-left-quotes-sign'></i>
                                <p>\"Externatic a été un partenaire précieux dans notre croissance. 
                                Leur équipe nous a aidés à constituer une équipe technique solide, 
                                en trouvant des développeurs talentueux et passionnés. Le processus 
                                de recrutement a été transparent et efficace, et nous avons été impressionnés 
                                par la qualité des profils présentés. Grâce à Externatic, nous avons pu 
                                accélérer notre développement et atteindre nos objectifs plus rapidement. 
                                Je recommande vivement leurs services à toute entreprise à la recherche de talents tech exceptionnels.\"</p>
                            </div>

                            <div class=\"testimonial-info-text\">
                                <h3 class=\"not-darkMode\">Adam Smith</h3>
                                <p>Web Developer</p>
                            </div>
                        </div>

                        <div class=\"testimonial-items\">
                            <div class=\"testimonial-text\">
                                <i class='flaticon-left-quotes-sign'></i>
                                <p>\"Nous avons fait appel à Externatic pour 
                                recruter des talents dans le domaine de la technologie, 
                                et nous sommes extrêmement satisfaits des résultats. 
                                Leur équipe a su comprendre nos besoins spécifiques et 
                                nous proposer des candidats hautement qualifiés. 
                                Grâce à leur expertise et à leur processus de sélection rigoureux, 
                                nous avons pu trouver les profils correspondant parfaitement à nos attentes.
                                 Je recommande vivement Externatic pour leur professionnalisme et 
                                 leur capacité à trouver les meilleurs talents.\"</p>
                            </div>

                            <div class=\"testimonial-info-text\">
                                <h3 class=\"not-darkMode\">John Doe</h3>
                                <p>Graphics Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End --> 
    
        <!-- Blog Section Start -->
        <section class=\"blog-section pb-70\">
            <div class=\"container mt-4\">
                <div class=\"section-title text-center\">
                    <h2>Actualités, conseils et articles</h2>
                    <p>\"Les dernières actualités technologiques\" : 
                    Cet article présente les actualités les plus récentes 
                    dans le domaine de la technologie. Il couvre les 
                    dernières avancées technologiques, les lancements de produits, 
                    les partenariats stratégiques et les innovations importantes. 
                    C'est une source d'informations essentielle pour rester à jour sur 
                    les développements technologiques en cours.</p>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-4 col-sm-6\">
                        <div class=\"blog-card\">
                            <div class=\"blog-img\">
                                <a href=\"https://www.letudiant.fr/jobsstages/lettres-de-motivation_1/comment-se-presenter-lors-d-un-entretien-d-embauche.html\" target=\"_blank\">
                            <img src=\"{{asset('/assets/images/interview.jpg')}}\" alt=\"blog image\">
                                </a>
                            </div>
                            <div class=\"blog-text\">
                                <ul>
                                    <li>
                                        <i class='bx bxs-user'></i>
                                        Admin
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar'></i>
                                         7 Mai, 2023
                                    </li>
                                </ul>

                                <h3>
                                    <a href=\"https://www.letudiant.fr/jobsstages/lettres-de-motivation_1/comment-se-presenter-lors-d-un-entretien-d-embauche.html\" target=\"_blank\">
                                        
                                        Comment se présenter lors d'un entretien d'embauche ?
                                    </a>
                                </h3>
                                <p>Lors d'un entretien d'embauche, l'une des premières questions 
                                auxquelles vous devrez répondre est : \"Parlez-moi de vous\". 
                                Cette question d'introduction peut sembler simple, mais elle 
                                peut aussi être délicate si vous n'êtes pas préparé. Voici quelques 
                                conseils pour vous aider à vous présenter de manière efficace lors d'un entretien d'embauche.</p>

                                <a href=\"https://www.letudiant.fr/jobsstages/lettres-de-motivation_1/comment-se-presenter-lors-d-un-entretien-d-embauche.html\" target=\"_blank\" class=\"blog-btn\">
                                    Lire Plus
                                    <i class='bx bx-plus bx-spin'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-sm-6\">
                        <div class=\"blog-card\">
                            <div class=\"blog-img\">
                                <a href=\"https://www.infoentrepreneurs.org/fr/guides/bl---developper-de-nouveaux-produits-et-services/\" target=\"_target\">
                                    <img src=\"{{asset('/assets/images/projet1.jpg')}}\" alt=\"blog image\">
                                </a>
                            </div>
                            <div class=\"blog-text\">
                                <ul>
                                    <li>
                                        <i class='bx bxs-user'></i>
                                        Admin
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar'></i>
                                        10 Avril, 2023
                                    </li>
                                </ul>

                                <h3>
                                    <a href=\"https://www.infoentrepreneurs.org/fr/guides/bl---developper-de-nouveaux-produits-et-services/\" target=\"_blank\">
                                        À la recherche d'un produit hautement motivant à développer
                                    </a>
                                </h3>
                                <p>Lorsque vous vous lancez dans le développement de produits, 
                                il est essentiel de trouver une source de motivation solide pour 
                                garantir le succès de votre entreprise. Trouver un produit qui 
                                suscite un fort intérêt et une motivation intrinsèque est la clé pour 
                                maintenir votre passion et votre détermination tout au long du processus de création.</p>

                                <a href=\"https://www.infoentrepreneurs.org/fr/guides/bl---developper-de-nouveaux-produits-et-services/\" target=\"_blank\" class=\"blog-btn\">
                                    Lire Plus
                                    <i class='bx bx-plus bx-spin'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-sm-6 offset-sm-3 offset-lg-0\">
                        <div class=\"blog-card\">
                            <div class=\"blog-img\">
                                <a href=\"https://www.quai-des-entrepreneurs.com/pourquoi-faire-developper-son-propre-logiciel-metier/\" target=\"_blank\">
                                    <img src=\"{{asset('/assets/images/web.jpg')}}\" alt=\"blog image\">
                                </a>
                            </div>
                            <div class=\"blog-text\">
                                <ul>
                                    <li>
                                        <i class='bx bxs-user'></i>
                                        Admin
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar'></i>
                                        15 Fev, 2023
                                    </li>
                                </ul>

                                <h3>
                                    <a href=\"https://www.quai-des-entrepreneurs.com/pourquoi-faire-developper-son-propre-logiciel-metier/\" target=\"_blank\">
                                        La raison pour laquelle le développement de logiciels est le meilleur métier
                                    </a>
                                </h3>
                                <p>Le développement de logiciels est l'un des métiers les plus 
                                prisés et les plus gratifiants de notre époque. Il offre de nombreuses
                                 opportunités et présente des avantages uniques qui en font un choix de carrière exceptionnel. 
                                 Voici pourquoi le développement de logiciels est considéré comme le meilleur métier </p>

                                <a href=\"https://www.quai-des-entrepreneurs.com/pourquoi-faire-developper-son-propre-logiciel-metier/\" target=\"_blank\" class=\"blog-btn\">
                                    Lire Plus
                                    <i class='bx bx-plus bx-spin'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->
{% endblock %}
", "about/about.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/about/about.html.twig");
    }
}
