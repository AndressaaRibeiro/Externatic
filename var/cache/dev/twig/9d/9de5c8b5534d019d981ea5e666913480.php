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

/* politique/index.html.twig */
class __TwigTemplate_23847a3a9a7c831397c2c24633b355df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "politique/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "politique/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "politique/index.html.twig", 1);
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

        echo "POLITIQUE DE CONFIDENTIALITÉ!";
        
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
        echo "<section class=\"page-title title-bg17\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <h2>POLITIQUE DE CONFIDENTIALITÉ</h2>
            <ul>
                <li>
                    <a href=\"/\">Home</a>
                </li>
                <li>POLITIQUE DE CONFIDENTIALITÉ</li>
            </ul>
        </div>
    </div>
    <div class=\"lines\">
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
    </div>
</section>
<div class=\"container mb-5\">
    
    <h3 class=\" mt-5 \">POLITIQUE DE CONFIDENTIALITÉ</h3>
    <br>
    <p>L’utilisateur du site www.externatic.fr (ci-après « le site ») s’engage à prendre connaissance et à respecter les présentes conditions générales tout au long de sa navigation sur le site. Ces conditions générales d’utilisation peuvent être modifiées à tout moment. Elles s’imposent à l’utilisateur dès la date de leur mise en ligne sur le site Externatic. La date de mise à jour est mentionnée à chaque modification. L’utilisateur est donc invité à consulter régulièrement la mise à jour la plus récente des présentes conditions.<br>    
    <br><h3>MENTIONS LÉGALES</h3>
    Externatic s’adresse à toutes les entreprises du secteur privé et public, à tous les candidats en activité ou en recherche d’emploi.<br>
    
    Externatic est une marque déposée et utilisée par les entreprises suivantes :<br>
    
    SAS EXTERNATIC, et SAS Keep and Attract People dont le siège social est basé au 1 Rue Racine – 44000 NANTES – FRANCE<br>
    
    Directeur de la Publication : Monsieur Franck Gascard<br>
    
    Hébergement : OVH SAS 2 rue Kellermann – 59100 Roubaix – France<br>
    <br>
    <h3>POLITIQUE DE PROTECTION DES DONNÉES </h3><br>
    La présente Politique de protection des données à caractère personnel a pour objectif de définir les principes et lignes directrices mis en œuvre par Externatic en matière de traitement des données à caractère personnel des utilisateurs des sites internet et des utilisateurs de ses services.<br>
    
    La notion de « donnée à caractère personnel » ou « données personnelles » correspond à la définition donnée par l’article 4 du Règlement Général de l’Union Européenne sur la protection des Données (RGPD 2016/679) c’est-à-dire à toute information susceptible de permettre l’identification d’une personne physique de manière directe ou indirecte : nom, prénom, adresse IP, adresse email, etc.<br>
    
    Externatic affirme son attachement au respect des lois et règlements applicables en matière de protection des données, et s’engage à préserver leur sécurité, leur confidentialité et leur intégrité.<br>
    <br>
    <h3>1. Champ d’application et exclusion</h3><br>
    La présente Politique s’applique à l’ensemble des traitements de données à caractère personnel effectués par Externatic à partir :<br>
    
    de son site internet externatic.fr ou de sa version mobile,<br>
    de sites dédiés créés par Externatic pour des opérations particulières (landing page, …),<br>
    du site Externatic dédié à ses annonces d’emploi et dépôt de candidatures<br>
    des abonnements à des newsletters ou autres communications sur les offres et services Externatic,<br>
    lors d’événements organisés par Externatic,<br>
    lors de salons ou tout autre événement physique ou virtuel donnant lieu à une collecte de données personnelles.<br>
    La présente Politique ne s’applique pas aux traitements réalisés sur des sites internet ou applications de tiers pour lesquels Externatic n’est pas responsable du traitement, et ceci même si lesdits sites sont mentionnés sur le site d’Externatic.<br>
    <br>
    <h3>2. Données collectées<br></h3>
    Les données collectées directement depuis le site externatic.fr<br>
    
    Il s’agit des données fournies directement par le biais de formulaires ou de contenus (CV, lettres de motivation,…) mis en ligne sur le site Externatic.fr.
    
    Civilité,<br>
    Prénom et nom de famille,<br>
    Adresse postale,<br>
    Age et date de naissance,<br>
    Adresse de courrier électronique,<br>
    Numéro de téléphone,<br>
    Informations relatives à la vie professionnelle (CV et lettres de motivation)<br>
    
    À tout moment, vous disposez de la faculté de modifier ou supprimer ces informations via la procédure définie à l’article 8 de la présente Politique.<br>
    
    Les données collectées directement lors d’entretiens avec Externatic<br>
    
    Il s’agit des données personnelles que vous nous fournissez directement au cours des entretiens avec les intervenants Externatic.<br>
    
    Informations relatives à la vie professionnelle (CV et lettres de motivation),<br>
    Formations,
    À tout moment, vous disposez de la faculté de modifier ou supprimer ces informations via la procédure définie à l’article 8 de la présente Politique.<br>
    
    Les données collectées via des sites tiers ou réseaux sociaux (Linkedin, Viadeo, Twitter, …)<br>
    
    Il s’agit des données personnelles que vous avez fournies à des tiers par votre consentement via leurs conditions générales et de confidentialité, et exposées/transmises publiquement.<br>
    
    On peut citer notamment et de façon non exhaustive : Linkedin, Viadeo, Twitter, Facebook, Instagram, Indeed, Pinterest, Pole-emplo, Doyoubuzz, Apec…<br>
    
    Externatic ne pourra vérifier votre complet accord sur l’exposition publique des données personnelles ou la transmission de celles-ci à Externatic par ces sites tiers ou réseaux sociaux. Externatic se désengage donc totalement à cet égard, cette responsabilité restant attachée aux dits sites tiers et réseaux sociaux et à leurs conditions générales et de confidentialité. <br>
    
    A noter cependant que pour les réseaux sociaux, Externatic ne collectera vos données personnelles que si vous avez communiqué une demande ou un accord de mise en relation ou porté un intérêt aux services d’Externatic.<br>
    
    Les données de connexion collectées indirectement<br>
    
    Il s’agit des données que Externatic collecte à partir de votre navigation sur le site Externatic.fr telles que :<br>
    
    la date, l’heure de la connexion et/ou navigation,<br>
    le type de navigateur,<br>
    la langue du navigateur,<br>
    URL consultée,<br>
    l’adresse de protocole Internet et l’adresse IP.<br>
    Le traitement de ces données de connexion se fait dans le respect de la réglementation applicable en matière de protection des données à caractère personnel. L’analyse de ces données a pour but :<br>
    
    de produire des indicateurs non nominatifs et de vous proposer un service plus personnalisé sur les sites internet d’Externatic ;<br>
    de s’assurer que l’utilisation du site est conforme aux Conditions Générales d’Utilisation. Un audit des logs de connexion pourra être effectué en cas de non-respect présumé des CGU.<br>
    Cookies et mesure d’audience<br>
    
    Les cookies sont des fichiers stockés sur votre ordinateur par les sites web que vous visitez et contiennent des informations telles que vos préférences de navigation ou votre statut de connexion.<br>
    
    Lors de l’éventuelle collecte par Externatic ou son fournisseur des informations générées par ces cookies, l’adresse IP est rendue anonyme. Externatic utilise les cookies suivants :<br>
    
    1 – techniques (pour faciliter et améliorer vos connexions)<br>
    2 – de mesure d’audience (pour nous permettre de connaître l’audience des différentes rubriques et pages du site)<br>
    <br>
    <h3>3. Utilisation des données collectées</h3>
    Externatic traite les données à caractère personnel que vous lui avez confiées pour bénéficier de services et conseils qu’elle déploie en matière d’emploi et d’évolution professionnelle au travers de placement auprès d’entreprises.<br>
    
    Externatic mène également des activités commerciales par la vente de services de recrutement externalisés auprès d’entreprises.<br>
    
    Externatic est responsable des traitements de données à caractère personnel pour les finalités suivantes :<br>
    
    La fourniture de services ou de conseils en matière d’emploi à toutes les entreprises du secteur privé et public mais également à tous les candidats en activité ou en recherche d’emploi.<br>
    La promotion de l’offre de conseil et services Externatic
    L’organisation et la promotion d’événements (Salons, soirées, meetup, concours, …)<br>
    La mise en relation des candidatures avec des offres d’emploi (transmission au recruteur de CV et lettres de motivation, …)<br>
    La réalisation d’études, sondage et enquêtes par Externatic pour des sujets en lien avec l’emploi (référentiels de rémunérations ,…),  Le suivi et analyse de la qualité des services ou conseils rendus ou tout autre sujet en lien avec l’objet et l’activité d’Externatic. <br>
    Une candidature pour un poste donné de façon directe sur le site Externatic, par mail ou par un site tiers ouvrira le droit à utilisation de vos données personnelles dans le cadre de cette offre mais pourra également faire l’objet de correspondances potentielles avec Externatic pour de futures offres d’emploi.<br>
    <br> 
    <h3>4. Destinataires des données à caractère personnel</h3>
    Toutes les données à caractère personnel étant confidentielles, leur accès est limité aux services Externatic et à ses sous-traitants avec lesquels Externatic est liée contractuellement pour pouvoir exécuter les services ou conseils rendus aux utilisateurs dans le cadre de ses missions. <br>
    
    Ainsi, si elle estime qu’un tel transfert est nécessaire pour des raisons techniques, Externatic peut également être amenée à transférer tout ou partie des données à caractère personnel à des tiers de confiance qui les traitent pour son compte, selon ses instructions, conformément à la présente Politique de protection des données et dans le respect de toute mesure appropriée de sécurité et de confidentialité.<br>
    
    Toutes les personnes ayant accès à vos données à caractère personnel sont tenues par une obligation de confidentialité et s’exposent à des sanctions si elles ne respectent pas ces obligations.
    
    Données que vous partagez<br>
    
    En communiquant vos données directement (site externatic.fr, mail de candidature, etc. ) ou indirectement via des sites tiers, vous consentez à partager vos données à caractère personnel (profil, CV et lettre de motivation,…) avec les équipes Externatic. <br>
    
    En aucun cas nous ne communiquerons votre candidature et donc vos données à nos clients sur une de leurs offres sans un accord préalable.<br>
    <br>
    <h3>5. Durée de conservation de vos données</h3>
    A partir du 25 mai 2018, toutes les données collectées lors de votre inscription et/ou traitées postérieurement à cette date sont conservées pendant une durée de 2 ans après votre dernier contact avec les équipes Externatic.<br>
    <br>
    <h3>6. Sécurité de vos données</h3>
    Externatic s’attache à conserver les données à caractère personnel qu’elle traite de manière sécurisée et uniquement pendant la durée nécessaire à la réalisation de la finalité poursuivie par le traitement.<br>
    
    Dans cette perspective, Externatic prend les mesures physiques, techniques et organisationnelles appropriées pour prévenir et empêcher, dans toute la mesure du possible, toute altération, perte de vos données ou tout accès non autorisé à celles-ci.<br>
    
    Si Externatic apprenait qu’un tiers auquel elle a communiqué des données à caractère personnel aux fins énoncées ci-dessus, utilise ou divulgue des données à caractère personnel sans respecter la présente Politique ou en violation de la législation applicable, elle prendrait toute mesure pour mettre fin immédiatement à une telle utilisation.<br>
    
    Il est par ailleurs rappelé que chaque utilisateur contribue à la protection de ses données à caractère personnel en se conformant aux bonnes pratiques en matière d’utilisation des outils informatiques (par exemple ne pas retranscrire son mot de passe).<br>
    <br>
    <h3>7. Stockage des données</h3>
    Les données à caractère personnel sont stockées soit dans les bases de données d’Externatic, soit dans celles de prestataires de services avec lesquels Externatic crée une relation contractuelle dédiée. Dans certains cas, principalement pour des raisons techniques, ces bases de données peuvent être stockées sur des serveurs situés en dehors du pays (y compris en dehors de l’Union Européenne) depuis lequel les données ont été saisies.<br>
    
    Dans ce cas, Externatic s’assure au préalable par une certification que les destinataires situés en dehors de l’Union européenne respectent les exigences de la Commission européenne en matière de protection des données à caractère personnel et/ou qu’elles ont adhéré aux « Privacy Shield » ou encore que des mesures contractuelles appropriées destinées à sécuriser la transmission des données à caractère personnel ont été prises.<br>
    <br>
    <h3>8. Droits relatifs aux données à caractère personnel</h3>    
    Conformément aux articles 15 et suivants du Règlement Général relatif à la Protection des Données 2016/679 (“RGPD”), vous disposez d’un droit d’accès, de rectification, de suppression et d’opposition aux traitements de données vous concernant en nous communiquant votre demande par mail à l’adresse rgpd@externatic.fr<br>
    
    Externatic s’engage à traiter votre demande dans les plus brefs délais.<br>
    <br>
    <h3>9. Réclamations</h3>
    Si vous avez des raisons de penser que la sécurité de vos données à caractère personnel a été compromise ou que ces données ont fait l’objet d’une utilisation abusive, vous êtes invités à contacter le Délégué à la Protection des Données d’Externatic à l’adresse suivante rgpd@externatic.fr<br>
    
    Externatic instruira ainsi les réclamations concernant l’utilisation et la divulgation de données à caractère personnel et tentera de trouver une solution conformément à la réglementation en vigueur.<br>
    <br>
    <h3>10. Mise à jour de la politique</h3>
    La présente Politique de protection des données à caractère personnel peut être mise à jour, à tout moment, en fonction des besoins d’Externatic ou si la loi l’exige.<br>
    
    CONDITIONS GENERALES D’UTILISATION DU SITE Externatic.fr ET APPLICATIONS MOBILES<br>
    
    <br>
    <h3>1. Acceptation des conditions générales d’utilisation du site et application mobile</h3>
    L’utilisateur du site reconnaît avoir pris connaissance des présentes conditions générales d’utilisation du site et application mobile et s’engage à les respecter.<br>
    
    Lors de la fourniture de données, l’utilisateur est tenu de valider son engagement à respecter les présentes conditions générales d’utilisation du site et application mobile en cochant la case prévue à cet effet.<br>
    
    Les présentes conditions générales d’utilisation du site et application mobile peuvent évoluer et être modifiées à tout moment. Les utilisateurs sont invités à les consulter régulièrement.<br>
    <br>
    <h3>2. Objet du site</h3>
    Le site Externatic.fr met en ligne des services permettant notamment de :<br>
    <br>
    consulter des offres d’emploi / de stage / de mission ;<br>
    consulter les études relatives au marché de l’emploi réalisées par Externatic ou un tiers ;<br>
    s’abonner à des lettres d’information ;<br>
    postuler à des offres d’emploi disponibles sur Externatic.fr ;<br>
    accéder au blog
    <br>
    <h3>4. Modification des informations</h3>
    Malgré les soins apportés par Externatic, les informations contenues dans ce site sont données à titre indicatif et sont sujettes à changement sans préavis.<br>
    
    En conséquence, l’utilisateur reconnaît utiliser ces informations sous sa responsabilité exclusive.<br>
    <br>
    <h3>5. Respect de la réglementation en vigueur</h3>
    Externatic s’engage à respecter les obligations légales en matière de diffusion d’offres d’emploi, décrites ci-après. <br>
    
    Utiliser l’ensemble de nos services conformément à la loi et réglementation française <br>
    Respecter les droits d’un candidat à l’embauche et vous engager à :<br>
    Ne pas mentionner des critères discriminants interdits<br>
    Ne diffuser que des offres qui correspondent à un poste existant et disponible<br>
    Diffuser l’offre en français<br>
    Ne mentionner que des critères en lien avec la tenue du poste proposé<br>
    Avoir de ce fait pris connaissance des articles L 5331-2 et L 5331-3 du Code du travail et garantir en particulier que l’offre d’emploi dont vous demandez la mise en ligne et/ou la publication ne comporte pas  » d’allégations fausses ou susceptibles d’induire en erreur, et portant en particulier sur un ou plusieurs éléments suivants : 1°) l’existence, le caractère effectivement disponible, l’origine, la nature et la description de l’emploi ou du travail à domicile offert, 2°) la rémunération et les avantages annexes proposés, 3°) le lieu du travail  » (extrait de l’article L 5331-3 du Code du travail).<br>
    Avoir pris connaissance des termes de l’article L 1132-1 du Code du travail, ainsi que 225-1 et 225-2 du Code pénal aux termes desquels il est interdit de subordonner une offre d’emploi, une demande de stage ou une période de formation en entreprise à une condition fondée sur une distinction entre les personnes physiques en raison de leur origine, de leur sexe, de leur situation de famille, de leur grossesse, de leur apparence physique, de leur patronyme, de leur état de santé, de leur handicap, de leurs caractéristiques génétiques, de leurs mœurs, de leur orientation sexuelle, de leur âge, de leurs opinions politiques, de leurs activités syndicales, de leur appartenance ou de leur non-appartenance, vraie ou supposée, à une ethnie, une nation, une race ou une religion déterminée, de leur lieu de résidence, de leur perte d’autonomie, de leur vulnérabilité économique.<br>
    Avoir pris connaissance et vous engager à respecter la Délibération CNIL n°02-017 du 21 mars 2002 relative aux opérations de recrutement, le Communiqué CNIL du 27 mars 2013 ainsi que la Loi du 06/01/1978 (modifiée) relative à l’informatique, aux fichiers et aux libertés, notamment sur l’interdiction de se constituer des fichiers de candidatures sur la base d’une offre d’emploi fictive.<br>
    <br>
    <h3>7. Responsabilités de </h3>
    L’utilisateur s’engage à utiliser et à accéder au site Externatic.fr conformément aux présentes conditions générales d’utilisation et au droit français en vigueur.<br>
    
    L’utilisateur est averti que la mise en ligne d’informations personnelles sur Internet implique de sa part l’acceptation de principe d’une accessibilité des informations qu’il décide de mettre en ligne.<br>
    
    L’utilisateur est entièrement responsable de toutes informations et données qu’il fournit sur le site Externatic, quelle qu’en soit la nature et l’origine, téléchargement, publication, transmission ou mise à disposition, notamment titres, diplômes, qualifications, adresses, descriptions etc.<br>
    
    L’utilisateur ne doit pas, sous peine de sanctions pénales, communiquer des contenus illégaux, ayant notamment pour effet de :<br>
    
    faire l’apologie de crimes contre l’humanité ;<br>
    inciter à la commission d’acte de terrorisme ou faire leur apologie ;<br>
    inciter à haine raciale ;<br>
    inciter à la haine à l’égard de personnes à raison de leur sexe, de leur orientation ou identité sexuelle ;<br>
    inciter à la haine à l’égard de personnes à raison de leur handicap ;<br>
    diffuser de la pornographie, notamment enfantine ;<br>
    inciter à la violence, notamment, aux violences faites aux femmes ;<br>
    porter atteinte à la dignité humaine ;
    proférer des injures ;
    alléguer ou imputer un fait qui porte atteinte à l’honneur ou à la considération d’une personne (diffamation).<br>
    Par ailleurs, l’utilisateur s’engage à ne pas mettre en ligne des contenus inappropriés, notamment :<br>
    
    sans rapport avec l’objet des services Externatic ;<br>
    comportant des opinions, politiques, religieuses ou philosophiques ;<br>
    contraires aux bonnes mœurs.<br>
    L’utilisateur s’interdit de :<br>
    <br>
    Violer les droits de propriété intellectuelle d’Externatic (relatifs à des contenus protégés par le droit d’auteur, le droit des marques déposées, le droit sui generis des bases de données).
    Violer les droits de la personnalité des personnes avec lesquels il peut être en relation au travers de services fournis par Externatic ou de toute autre personne.
    Fournir des contenus illicites ou inappropriés par rapport à la finalité des services ou conseils fournis par Externatic
    Capter tout ou partie du contenu du site Externaitc.fr et des bases de données qui lui sont liées (offres d’emploi, …) sous peine de s’exposer à des sanctions de nature civile et/ou pénale
    Porter atteinte au bon fonctionnement du site internet Externatic.fr <br>
    Postuler massivement de façon automatique à des offres publiées sur le site Externatic.fr<br>
    Contourner les systèmes techniques de protection, réaliser ou inciter à des actes de piratage<br>
    Usurper l’identité d’un tiers
    Détourner ou tenter de détourner l’une quelconque des fonctionnalités du site Externatic.fr hors de son usage normal<br>
    Utiliser, pour naviguer sur le site Externatic.fr, un logiciel robot ou tout autre procédé ou outil automatisé équivalent.<br>
    <br>
    <h3>8. Responsabilité </h3>
    L’utilisateur reconnaît utiliser le site Externatic.fr sous sa responsabilité exclusive, le site étant accessible en fonction de la disponibilité du réseau Internet.<br>
    
    L’utilisateur, en qualité d’utilisateur de ce site et des services proposés par Externatic prend à sa charge tous les coûts liés à l’accès au site et à l’utilisation des services proposés.<br>
    
    De même, Externatic ne saurait être tenue pour responsable de tout dommage direct ou indirect notamment mais non limitativement pertes de profits, de clientèles, de données, de logiciels et autres biens incorporels pouvant intervenir du fait de la consultation du site ou de l’impossibilité d’accès au site Externatic.fr <br>
    <br>
    <h3>9. Propriété intellectuelle</h3>
    L’ensemble du contenu du site externatic.fr et application mobile relève de la législation française et des conventions internationales sur le droit d’auteur et la propriété intellectuelle.<br>
    
    Tous les droits d’exploitation, de traduction, d’adaptation sont réservés, y compris pour les documents téléchargeables et les exploitations iconographiques et photographiques. Il est donc interdit de reproduire, copier, vendre, ou exploiter et de diffuser, de quelque manière que ce soit tout ou partie du contenu du site ou tout droit d’accès au site externatic.fr sans l’accord préalable d’Externatic.<br>
    
    La structure générale, les textes, images animées ou non, les sons, les savoir-faire, les programmes et logiciels ainsi que tout autre élément composant ce site sont la propriété exclusive d’Externatic et sont protégés par le droit d’auteur. L’ensemble des éléments de ce site est donc protégé par copyright EXTERNATIC ce qui a pour effet que :<br>
    
    Sans préjudice des dispositions de l’article L.122-5 du code de la propriété intellectuelle, toute représentation, reproduction ou diffusion, intégrale ou partielle du site, sur quelque support que ce soit, sans l’autorisation expresse et préalable d’Externatic constitue un acte de contrefaçon, sanctionné en application des articles L.335-2 et L.335-3 du même code.<br>
    Sans préjudice des dispositions de l’article L.342-3 du code de la propriété intellectuelle, toute représentation, reproduction ou diffusion, intégrale ou partielle de la base de données, sur quelque support que ce soit, sans l’autorisation expresse et préalable d’Externatic est sanctionné en application des articles L.343-1 et suivants du même code.<br>
    Les marques, noms commerciaux et logos figurant sur ce site sont des marques déposées utilisables sauf mention contraire par les sociétés citées en préambule. Toute reproduction totale ou partielle des marques ou logos, effectuée à partir des éléments du site, sans l’autorisation expresse d’Externatic est donc prohibée.<br>
    <br>
   <h3> 10. Loi applicable et attribution de juridiction</h3>
    Les présentes conditions générales de diffusion sont exclusivement soumises à la loi française.<br>
    
    Compte tenu du caractère mondial du réseau Internet, en accédant au site et en utilisant les services proposés par Externatic, l’utilisateur accepte de se conformer aux présentes Conditions Générales de diffusion et aux lois applicables en France, lieu d’hébergement et de publication du site quel que soit le pays à partir duquel il le consulte.<br>
    
    Pour toutes contestations relatives aux prestations fournies par Externatic ainsi que pour l’application ou l’interprétation des présentes Conditions Générales de diffusion, seules seront compétentes les juridictions du ressort du siège social d’Externatic.</p>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "politique/index.html.twig";
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

{% block title %}POLITIQUE DE CONFIDENTIALITÉ!{% endblock %}

{% block body %}
<section class=\"page-title title-bg17\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <h2>POLITIQUE DE CONFIDENTIALITÉ</h2>
            <ul>
                <li>
                    <a href=\"/\">Home</a>
                </li>
                <li>POLITIQUE DE CONFIDENTIALITÉ</li>
            </ul>
        </div>
    </div>
    <div class=\"lines\">
        <div class=\"line\"></div>
        <div class=\"line\"></div>
        <div class=\"line\"></div>
    </div>
</section>
<div class=\"container mb-5\">
    
    <h3 class=\" mt-5 \">POLITIQUE DE CONFIDENTIALITÉ</h3>
    <br>
    <p>L’utilisateur du site www.externatic.fr (ci-après « le site ») s’engage à prendre connaissance et à respecter les présentes conditions générales tout au long de sa navigation sur le site. Ces conditions générales d’utilisation peuvent être modifiées à tout moment. Elles s’imposent à l’utilisateur dès la date de leur mise en ligne sur le site Externatic. La date de mise à jour est mentionnée à chaque modification. L’utilisateur est donc invité à consulter régulièrement la mise à jour la plus récente des présentes conditions.<br>    
    <br><h3>MENTIONS LÉGALES</h3>
    Externatic s’adresse à toutes les entreprises du secteur privé et public, à tous les candidats en activité ou en recherche d’emploi.<br>
    
    Externatic est une marque déposée et utilisée par les entreprises suivantes :<br>
    
    SAS EXTERNATIC, et SAS Keep and Attract People dont le siège social est basé au 1 Rue Racine – 44000 NANTES – FRANCE<br>
    
    Directeur de la Publication : Monsieur Franck Gascard<br>
    
    Hébergement : OVH SAS 2 rue Kellermann – 59100 Roubaix – France<br>
    <br>
    <h3>POLITIQUE DE PROTECTION DES DONNÉES </h3><br>
    La présente Politique de protection des données à caractère personnel a pour objectif de définir les principes et lignes directrices mis en œuvre par Externatic en matière de traitement des données à caractère personnel des utilisateurs des sites internet et des utilisateurs de ses services.<br>
    
    La notion de « donnée à caractère personnel » ou « données personnelles » correspond à la définition donnée par l’article 4 du Règlement Général de l’Union Européenne sur la protection des Données (RGPD 2016/679) c’est-à-dire à toute information susceptible de permettre l’identification d’une personne physique de manière directe ou indirecte : nom, prénom, adresse IP, adresse email, etc.<br>
    
    Externatic affirme son attachement au respect des lois et règlements applicables en matière de protection des données, et s’engage à préserver leur sécurité, leur confidentialité et leur intégrité.<br>
    <br>
    <h3>1. Champ d’application et exclusion</h3><br>
    La présente Politique s’applique à l’ensemble des traitements de données à caractère personnel effectués par Externatic à partir :<br>
    
    de son site internet externatic.fr ou de sa version mobile,<br>
    de sites dédiés créés par Externatic pour des opérations particulières (landing page, …),<br>
    du site Externatic dédié à ses annonces d’emploi et dépôt de candidatures<br>
    des abonnements à des newsletters ou autres communications sur les offres et services Externatic,<br>
    lors d’événements organisés par Externatic,<br>
    lors de salons ou tout autre événement physique ou virtuel donnant lieu à une collecte de données personnelles.<br>
    La présente Politique ne s’applique pas aux traitements réalisés sur des sites internet ou applications de tiers pour lesquels Externatic n’est pas responsable du traitement, et ceci même si lesdits sites sont mentionnés sur le site d’Externatic.<br>
    <br>
    <h3>2. Données collectées<br></h3>
    Les données collectées directement depuis le site externatic.fr<br>
    
    Il s’agit des données fournies directement par le biais de formulaires ou de contenus (CV, lettres de motivation,…) mis en ligne sur le site Externatic.fr.
    
    Civilité,<br>
    Prénom et nom de famille,<br>
    Adresse postale,<br>
    Age et date de naissance,<br>
    Adresse de courrier électronique,<br>
    Numéro de téléphone,<br>
    Informations relatives à la vie professionnelle (CV et lettres de motivation)<br>
    
    À tout moment, vous disposez de la faculté de modifier ou supprimer ces informations via la procédure définie à l’article 8 de la présente Politique.<br>
    
    Les données collectées directement lors d’entretiens avec Externatic<br>
    
    Il s’agit des données personnelles que vous nous fournissez directement au cours des entretiens avec les intervenants Externatic.<br>
    
    Informations relatives à la vie professionnelle (CV et lettres de motivation),<br>
    Formations,
    À tout moment, vous disposez de la faculté de modifier ou supprimer ces informations via la procédure définie à l’article 8 de la présente Politique.<br>
    
    Les données collectées via des sites tiers ou réseaux sociaux (Linkedin, Viadeo, Twitter, …)<br>
    
    Il s’agit des données personnelles que vous avez fournies à des tiers par votre consentement via leurs conditions générales et de confidentialité, et exposées/transmises publiquement.<br>
    
    On peut citer notamment et de façon non exhaustive : Linkedin, Viadeo, Twitter, Facebook, Instagram, Indeed, Pinterest, Pole-emplo, Doyoubuzz, Apec…<br>
    
    Externatic ne pourra vérifier votre complet accord sur l’exposition publique des données personnelles ou la transmission de celles-ci à Externatic par ces sites tiers ou réseaux sociaux. Externatic se désengage donc totalement à cet égard, cette responsabilité restant attachée aux dits sites tiers et réseaux sociaux et à leurs conditions générales et de confidentialité. <br>
    
    A noter cependant que pour les réseaux sociaux, Externatic ne collectera vos données personnelles que si vous avez communiqué une demande ou un accord de mise en relation ou porté un intérêt aux services d’Externatic.<br>
    
    Les données de connexion collectées indirectement<br>
    
    Il s’agit des données que Externatic collecte à partir de votre navigation sur le site Externatic.fr telles que :<br>
    
    la date, l’heure de la connexion et/ou navigation,<br>
    le type de navigateur,<br>
    la langue du navigateur,<br>
    URL consultée,<br>
    l’adresse de protocole Internet et l’adresse IP.<br>
    Le traitement de ces données de connexion se fait dans le respect de la réglementation applicable en matière de protection des données à caractère personnel. L’analyse de ces données a pour but :<br>
    
    de produire des indicateurs non nominatifs et de vous proposer un service plus personnalisé sur les sites internet d’Externatic ;<br>
    de s’assurer que l’utilisation du site est conforme aux Conditions Générales d’Utilisation. Un audit des logs de connexion pourra être effectué en cas de non-respect présumé des CGU.<br>
    Cookies et mesure d’audience<br>
    
    Les cookies sont des fichiers stockés sur votre ordinateur par les sites web que vous visitez et contiennent des informations telles que vos préférences de navigation ou votre statut de connexion.<br>
    
    Lors de l’éventuelle collecte par Externatic ou son fournisseur des informations générées par ces cookies, l’adresse IP est rendue anonyme. Externatic utilise les cookies suivants :<br>
    
    1 – techniques (pour faciliter et améliorer vos connexions)<br>
    2 – de mesure d’audience (pour nous permettre de connaître l’audience des différentes rubriques et pages du site)<br>
    <br>
    <h3>3. Utilisation des données collectées</h3>
    Externatic traite les données à caractère personnel que vous lui avez confiées pour bénéficier de services et conseils qu’elle déploie en matière d’emploi et d’évolution professionnelle au travers de placement auprès d’entreprises.<br>
    
    Externatic mène également des activités commerciales par la vente de services de recrutement externalisés auprès d’entreprises.<br>
    
    Externatic est responsable des traitements de données à caractère personnel pour les finalités suivantes :<br>
    
    La fourniture de services ou de conseils en matière d’emploi à toutes les entreprises du secteur privé et public mais également à tous les candidats en activité ou en recherche d’emploi.<br>
    La promotion de l’offre de conseil et services Externatic
    L’organisation et la promotion d’événements (Salons, soirées, meetup, concours, …)<br>
    La mise en relation des candidatures avec des offres d’emploi (transmission au recruteur de CV et lettres de motivation, …)<br>
    La réalisation d’études, sondage et enquêtes par Externatic pour des sujets en lien avec l’emploi (référentiels de rémunérations ,…),  Le suivi et analyse de la qualité des services ou conseils rendus ou tout autre sujet en lien avec l’objet et l’activité d’Externatic. <br>
    Une candidature pour un poste donné de façon directe sur le site Externatic, par mail ou par un site tiers ouvrira le droit à utilisation de vos données personnelles dans le cadre de cette offre mais pourra également faire l’objet de correspondances potentielles avec Externatic pour de futures offres d’emploi.<br>
    <br> 
    <h3>4. Destinataires des données à caractère personnel</h3>
    Toutes les données à caractère personnel étant confidentielles, leur accès est limité aux services Externatic et à ses sous-traitants avec lesquels Externatic est liée contractuellement pour pouvoir exécuter les services ou conseils rendus aux utilisateurs dans le cadre de ses missions. <br>
    
    Ainsi, si elle estime qu’un tel transfert est nécessaire pour des raisons techniques, Externatic peut également être amenée à transférer tout ou partie des données à caractère personnel à des tiers de confiance qui les traitent pour son compte, selon ses instructions, conformément à la présente Politique de protection des données et dans le respect de toute mesure appropriée de sécurité et de confidentialité.<br>
    
    Toutes les personnes ayant accès à vos données à caractère personnel sont tenues par une obligation de confidentialité et s’exposent à des sanctions si elles ne respectent pas ces obligations.
    
    Données que vous partagez<br>
    
    En communiquant vos données directement (site externatic.fr, mail de candidature, etc. ) ou indirectement via des sites tiers, vous consentez à partager vos données à caractère personnel (profil, CV et lettre de motivation,…) avec les équipes Externatic. <br>
    
    En aucun cas nous ne communiquerons votre candidature et donc vos données à nos clients sur une de leurs offres sans un accord préalable.<br>
    <br>
    <h3>5. Durée de conservation de vos données</h3>
    A partir du 25 mai 2018, toutes les données collectées lors de votre inscription et/ou traitées postérieurement à cette date sont conservées pendant une durée de 2 ans après votre dernier contact avec les équipes Externatic.<br>
    <br>
    <h3>6. Sécurité de vos données</h3>
    Externatic s’attache à conserver les données à caractère personnel qu’elle traite de manière sécurisée et uniquement pendant la durée nécessaire à la réalisation de la finalité poursuivie par le traitement.<br>
    
    Dans cette perspective, Externatic prend les mesures physiques, techniques et organisationnelles appropriées pour prévenir et empêcher, dans toute la mesure du possible, toute altération, perte de vos données ou tout accès non autorisé à celles-ci.<br>
    
    Si Externatic apprenait qu’un tiers auquel elle a communiqué des données à caractère personnel aux fins énoncées ci-dessus, utilise ou divulgue des données à caractère personnel sans respecter la présente Politique ou en violation de la législation applicable, elle prendrait toute mesure pour mettre fin immédiatement à une telle utilisation.<br>
    
    Il est par ailleurs rappelé que chaque utilisateur contribue à la protection de ses données à caractère personnel en se conformant aux bonnes pratiques en matière d’utilisation des outils informatiques (par exemple ne pas retranscrire son mot de passe).<br>
    <br>
    <h3>7. Stockage des données</h3>
    Les données à caractère personnel sont stockées soit dans les bases de données d’Externatic, soit dans celles de prestataires de services avec lesquels Externatic crée une relation contractuelle dédiée. Dans certains cas, principalement pour des raisons techniques, ces bases de données peuvent être stockées sur des serveurs situés en dehors du pays (y compris en dehors de l’Union Européenne) depuis lequel les données ont été saisies.<br>
    
    Dans ce cas, Externatic s’assure au préalable par une certification que les destinataires situés en dehors de l’Union européenne respectent les exigences de la Commission européenne en matière de protection des données à caractère personnel et/ou qu’elles ont adhéré aux « Privacy Shield » ou encore que des mesures contractuelles appropriées destinées à sécuriser la transmission des données à caractère personnel ont été prises.<br>
    <br>
    <h3>8. Droits relatifs aux données à caractère personnel</h3>    
    Conformément aux articles 15 et suivants du Règlement Général relatif à la Protection des Données 2016/679 (“RGPD”), vous disposez d’un droit d’accès, de rectification, de suppression et d’opposition aux traitements de données vous concernant en nous communiquant votre demande par mail à l’adresse rgpd@externatic.fr<br>
    
    Externatic s’engage à traiter votre demande dans les plus brefs délais.<br>
    <br>
    <h3>9. Réclamations</h3>
    Si vous avez des raisons de penser que la sécurité de vos données à caractère personnel a été compromise ou que ces données ont fait l’objet d’une utilisation abusive, vous êtes invités à contacter le Délégué à la Protection des Données d’Externatic à l’adresse suivante rgpd@externatic.fr<br>
    
    Externatic instruira ainsi les réclamations concernant l’utilisation et la divulgation de données à caractère personnel et tentera de trouver une solution conformément à la réglementation en vigueur.<br>
    <br>
    <h3>10. Mise à jour de la politique</h3>
    La présente Politique de protection des données à caractère personnel peut être mise à jour, à tout moment, en fonction des besoins d’Externatic ou si la loi l’exige.<br>
    
    CONDITIONS GENERALES D’UTILISATION DU SITE Externatic.fr ET APPLICATIONS MOBILES<br>
    
    <br>
    <h3>1. Acceptation des conditions générales d’utilisation du site et application mobile</h3>
    L’utilisateur du site reconnaît avoir pris connaissance des présentes conditions générales d’utilisation du site et application mobile et s’engage à les respecter.<br>
    
    Lors de la fourniture de données, l’utilisateur est tenu de valider son engagement à respecter les présentes conditions générales d’utilisation du site et application mobile en cochant la case prévue à cet effet.<br>
    
    Les présentes conditions générales d’utilisation du site et application mobile peuvent évoluer et être modifiées à tout moment. Les utilisateurs sont invités à les consulter régulièrement.<br>
    <br>
    <h3>2. Objet du site</h3>
    Le site Externatic.fr met en ligne des services permettant notamment de :<br>
    <br>
    consulter des offres d’emploi / de stage / de mission ;<br>
    consulter les études relatives au marché de l’emploi réalisées par Externatic ou un tiers ;<br>
    s’abonner à des lettres d’information ;<br>
    postuler à des offres d’emploi disponibles sur Externatic.fr ;<br>
    accéder au blog
    <br>
    <h3>4. Modification des informations</h3>
    Malgré les soins apportés par Externatic, les informations contenues dans ce site sont données à titre indicatif et sont sujettes à changement sans préavis.<br>
    
    En conséquence, l’utilisateur reconnaît utiliser ces informations sous sa responsabilité exclusive.<br>
    <br>
    <h3>5. Respect de la réglementation en vigueur</h3>
    Externatic s’engage à respecter les obligations légales en matière de diffusion d’offres d’emploi, décrites ci-après. <br>
    
    Utiliser l’ensemble de nos services conformément à la loi et réglementation française <br>
    Respecter les droits d’un candidat à l’embauche et vous engager à :<br>
    Ne pas mentionner des critères discriminants interdits<br>
    Ne diffuser que des offres qui correspondent à un poste existant et disponible<br>
    Diffuser l’offre en français<br>
    Ne mentionner que des critères en lien avec la tenue du poste proposé<br>
    Avoir de ce fait pris connaissance des articles L 5331-2 et L 5331-3 du Code du travail et garantir en particulier que l’offre d’emploi dont vous demandez la mise en ligne et/ou la publication ne comporte pas  » d’allégations fausses ou susceptibles d’induire en erreur, et portant en particulier sur un ou plusieurs éléments suivants : 1°) l’existence, le caractère effectivement disponible, l’origine, la nature et la description de l’emploi ou du travail à domicile offert, 2°) la rémunération et les avantages annexes proposés, 3°) le lieu du travail  » (extrait de l’article L 5331-3 du Code du travail).<br>
    Avoir pris connaissance des termes de l’article L 1132-1 du Code du travail, ainsi que 225-1 et 225-2 du Code pénal aux termes desquels il est interdit de subordonner une offre d’emploi, une demande de stage ou une période de formation en entreprise à une condition fondée sur une distinction entre les personnes physiques en raison de leur origine, de leur sexe, de leur situation de famille, de leur grossesse, de leur apparence physique, de leur patronyme, de leur état de santé, de leur handicap, de leurs caractéristiques génétiques, de leurs mœurs, de leur orientation sexuelle, de leur âge, de leurs opinions politiques, de leurs activités syndicales, de leur appartenance ou de leur non-appartenance, vraie ou supposée, à une ethnie, une nation, une race ou une religion déterminée, de leur lieu de résidence, de leur perte d’autonomie, de leur vulnérabilité économique.<br>
    Avoir pris connaissance et vous engager à respecter la Délibération CNIL n°02-017 du 21 mars 2002 relative aux opérations de recrutement, le Communiqué CNIL du 27 mars 2013 ainsi que la Loi du 06/01/1978 (modifiée) relative à l’informatique, aux fichiers et aux libertés, notamment sur l’interdiction de se constituer des fichiers de candidatures sur la base d’une offre d’emploi fictive.<br>
    <br>
    <h3>7. Responsabilités de </h3>
    L’utilisateur s’engage à utiliser et à accéder au site Externatic.fr conformément aux présentes conditions générales d’utilisation et au droit français en vigueur.<br>
    
    L’utilisateur est averti que la mise en ligne d’informations personnelles sur Internet implique de sa part l’acceptation de principe d’une accessibilité des informations qu’il décide de mettre en ligne.<br>
    
    L’utilisateur est entièrement responsable de toutes informations et données qu’il fournit sur le site Externatic, quelle qu’en soit la nature et l’origine, téléchargement, publication, transmission ou mise à disposition, notamment titres, diplômes, qualifications, adresses, descriptions etc.<br>
    
    L’utilisateur ne doit pas, sous peine de sanctions pénales, communiquer des contenus illégaux, ayant notamment pour effet de :<br>
    
    faire l’apologie de crimes contre l’humanité ;<br>
    inciter à la commission d’acte de terrorisme ou faire leur apologie ;<br>
    inciter à haine raciale ;<br>
    inciter à la haine à l’égard de personnes à raison de leur sexe, de leur orientation ou identité sexuelle ;<br>
    inciter à la haine à l’égard de personnes à raison de leur handicap ;<br>
    diffuser de la pornographie, notamment enfantine ;<br>
    inciter à la violence, notamment, aux violences faites aux femmes ;<br>
    porter atteinte à la dignité humaine ;
    proférer des injures ;
    alléguer ou imputer un fait qui porte atteinte à l’honneur ou à la considération d’une personne (diffamation).<br>
    Par ailleurs, l’utilisateur s’engage à ne pas mettre en ligne des contenus inappropriés, notamment :<br>
    
    sans rapport avec l’objet des services Externatic ;<br>
    comportant des opinions, politiques, religieuses ou philosophiques ;<br>
    contraires aux bonnes mœurs.<br>
    L’utilisateur s’interdit de :<br>
    <br>
    Violer les droits de propriété intellectuelle d’Externatic (relatifs à des contenus protégés par le droit d’auteur, le droit des marques déposées, le droit sui generis des bases de données).
    Violer les droits de la personnalité des personnes avec lesquels il peut être en relation au travers de services fournis par Externatic ou de toute autre personne.
    Fournir des contenus illicites ou inappropriés par rapport à la finalité des services ou conseils fournis par Externatic
    Capter tout ou partie du contenu du site Externaitc.fr et des bases de données qui lui sont liées (offres d’emploi, …) sous peine de s’exposer à des sanctions de nature civile et/ou pénale
    Porter atteinte au bon fonctionnement du site internet Externatic.fr <br>
    Postuler massivement de façon automatique à des offres publiées sur le site Externatic.fr<br>
    Contourner les systèmes techniques de protection, réaliser ou inciter à des actes de piratage<br>
    Usurper l’identité d’un tiers
    Détourner ou tenter de détourner l’une quelconque des fonctionnalités du site Externatic.fr hors de son usage normal<br>
    Utiliser, pour naviguer sur le site Externatic.fr, un logiciel robot ou tout autre procédé ou outil automatisé équivalent.<br>
    <br>
    <h3>8. Responsabilité </h3>
    L’utilisateur reconnaît utiliser le site Externatic.fr sous sa responsabilité exclusive, le site étant accessible en fonction de la disponibilité du réseau Internet.<br>
    
    L’utilisateur, en qualité d’utilisateur de ce site et des services proposés par Externatic prend à sa charge tous les coûts liés à l’accès au site et à l’utilisation des services proposés.<br>
    
    De même, Externatic ne saurait être tenue pour responsable de tout dommage direct ou indirect notamment mais non limitativement pertes de profits, de clientèles, de données, de logiciels et autres biens incorporels pouvant intervenir du fait de la consultation du site ou de l’impossibilité d’accès au site Externatic.fr <br>
    <br>
    <h3>9. Propriété intellectuelle</h3>
    L’ensemble du contenu du site externatic.fr et application mobile relève de la législation française et des conventions internationales sur le droit d’auteur et la propriété intellectuelle.<br>
    
    Tous les droits d’exploitation, de traduction, d’adaptation sont réservés, y compris pour les documents téléchargeables et les exploitations iconographiques et photographiques. Il est donc interdit de reproduire, copier, vendre, ou exploiter et de diffuser, de quelque manière que ce soit tout ou partie du contenu du site ou tout droit d’accès au site externatic.fr sans l’accord préalable d’Externatic.<br>
    
    La structure générale, les textes, images animées ou non, les sons, les savoir-faire, les programmes et logiciels ainsi que tout autre élément composant ce site sont la propriété exclusive d’Externatic et sont protégés par le droit d’auteur. L’ensemble des éléments de ce site est donc protégé par copyright EXTERNATIC ce qui a pour effet que :<br>
    
    Sans préjudice des dispositions de l’article L.122-5 du code de la propriété intellectuelle, toute représentation, reproduction ou diffusion, intégrale ou partielle du site, sur quelque support que ce soit, sans l’autorisation expresse et préalable d’Externatic constitue un acte de contrefaçon, sanctionné en application des articles L.335-2 et L.335-3 du même code.<br>
    Sans préjudice des dispositions de l’article L.342-3 du code de la propriété intellectuelle, toute représentation, reproduction ou diffusion, intégrale ou partielle de la base de données, sur quelque support que ce soit, sans l’autorisation expresse et préalable d’Externatic est sanctionné en application des articles L.343-1 et suivants du même code.<br>
    Les marques, noms commerciaux et logos figurant sur ce site sont des marques déposées utilisables sauf mention contraire par les sociétés citées en préambule. Toute reproduction totale ou partielle des marques ou logos, effectuée à partir des éléments du site, sans l’autorisation expresse d’Externatic est donc prohibée.<br>
    <br>
   <h3> 10. Loi applicable et attribution de juridiction</h3>
    Les présentes conditions générales de diffusion sont exclusivement soumises à la loi française.<br>
    
    Compte tenu du caractère mondial du réseau Internet, en accédant au site et en utilisant les services proposés par Externatic, l’utilisateur accepte de se conformer aux présentes Conditions Générales de diffusion et aux lois applicables en France, lieu d’hébergement et de publication du site quel que soit le pays à partir duquel il le consulte.<br>
    
    Pour toutes contestations relatives aux prestations fournies par Externatic ainsi que pour l’application ou l’interprétation des présentes Conditions Générales de diffusion, seules seront compétentes les juridictions du ressort du siège social d’Externatic.</p>

</div>
{% endblock %}
", "politique/index.html.twig", "/Users/Andressa/Desktop/032023-PHP-SXB-externatic/templates/politique/index.html.twig");
    }
}
