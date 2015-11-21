<?php

/* CestomTestBundle:StatutsCestom:statuts.html.twig */
class __TwigTemplate_77192646fc99fa7055307a727a75c1f818b9a2675f8a52d1bf6d091c2c710393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_public.html.twig", "CestomTestBundle:StatutsCestom:statuts.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_public.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6b5104b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6b5104b_0") : $this->env->getExtension('assets')->getAssetUrl("css/6b5104b_accueilStyles_1.css");
            // line 11
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
            // asset "6b5104b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6b5104b_1") : $this->env->getExtension('assets')->getAssetUrl("css/6b5104b_statuts_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        } else {
            // asset "6b5104b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6b5104b") : $this->env->getExtension('assets')->getAssetUrl("css/6b5104b.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    \t\t\t
\t

\t<div class=\"container-fluid\">
\t\t<!--PRESENTATION-->
\t\t<div>
\t\t<div class=\"title-cestom-status\">CESTOM: STATUS</div>
\t\t<div class=\"def-cestom\">Coordination des Etudiants et Stagiaires Togolais au Maroc</div>
\t\t<div class=\"revision-statuts\">[Révision du congrès du 25 Août 2007]</div>
\t\t
\t\t<div class=\"preambule\">Préambule</div>
\t\t
\t\t<div class=\"italic\">
\t\t<div class=\"preambule-u\">Considérant la nécessité de renforcer les liens sacrés de fraternité entre
togolais,</div>
<div class=\"preambule-u\">Conscients des problèmes que rencontrent les étudiants et stagiaires
étrangers au Maroc,</div>
<div class=\"preambule-u\">Soucieux de créer une harmonie pour mobiliser les étudiants et stagiaires togolais en vue de défendre leurs droits et intérêts,</div>
<div class=\"preambule-u\">Conformément au Dahir N
o
1-73-283 du 6 Rabia I 1393 (10 avril 1973),</div>
<div class=\"preambule-u\">Nous, étudiants et stagiaires togolais au Maroc réunis le 17 Août 1998,
avions décidé de la création de la Coordination des Etudiants et Stagiaires
Togolais au Maroc (CESTOM) et adoptons les statuts dont la teneur suit :</div></div>
\t
\t</div>
\t
\t\t<!--PARTIE 1-->
\t\t<div id=\"partie1\">
\t\t\t<div class=\"titre-partie\">
\t\t\t\tTitre 1: Dénomination - Siège - Durée
\t\t\t</div>
\t\t\t<div id=\"chapitre1.1\">
\t\t\t\t<div class=\" chapitre-titre\">
\t\t\t\t\tChapitre I: Dénomination
\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statut\"><legend>Article 1</legend>
\t\t\t\t\t\t<p>Il est créé une association regroupant 
\t\t\t\t\t\tles étudiants et stagiaires togolais au Maroc.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statut\"><legend>Article 2</legend>\t
\t\t\t\t\t\t<p>L’association est dénommée Coordination des Etudiants et Stagiaires Togolais au Maroc.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statut\"><legend>Article 3</legend>\t
\t\t\t\t\t\t<p>La CESTOM est une association apolitique, laïque et libre.</p>
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"chapitre1.2\">
\t\t\t\t<div class=\" chapitre-titre\">
\t\t\t\t\tChapitre II: Siège
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 4</legend>
\t\t\t\t\t<p>Le siège et le bureau de la CESTOM se trouvent à Rabat.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 5</legend>
\t\t\t\t\t\t\t\t\t<p>Le bureau peut être transféré provisoirement en tout lieu sur décision de
\t\t\t\t\tl’Assemblée Générale à la majorité simple tout en ayant en son sein un
\t\t\t\t\tde ses membres résidant à Rabat. Et en se conformant aux attributions du
\t\t\t\t\tSecrétaire Général Adjoint, ce dernier occupera ce poste. En cas d’impossibilité de résidence de ce membre du Bureau Exécutif à Rabat, le Bureau
\t\t\t\t\tExécutif mandate un membre de l’association résidant à Rabat pour sa représentation pour les affaires administratives.</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"chapitre1.3\">
\t\t\t\t\t<div class=\"chapitre-titre\">
\t\t\t\t\t\tChapitre III: Durée 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"statut\"><legend>Article 6</legend>\t\t\t
\t\t\t\t\t\t\t<p>L’association a une durée de vie illimitée.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
\t\t\t
\t\t<!--PARTIE 2-->
\t\t<div id=\"partie2\">
\t\t\t<div class=\"titre-partie\">
\t\t\t\tTitre II: Objectifs - Moyens d'action - Ressources
\t\t\t</div>
\t\t\t<div id=\"chapitre2.1\">
\t\t\t\t<div class=\"chapitre-titre\">
\t\t\t\t\tChapitre I: Objectifs 
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 7</legend>\t\t\t
\t\t\t\t\t\t<ul>La CESTOM a pour objectifs de :
\t\t\t\t<li>Regrouper en son sein les étudiants et stagiaires togolais au Maroc</li>
\t\t\t\t<li>Défendre et sauvegarder les droits et intérêts matériels et moraux de
\t\t\t\ttous ses membres.</li>
\t\t\t\t<li>Développer l’esprit de travail et d’entraide entre ses membres.</li>
\t\t\t\t<li>Entretenir les relations d’amitié et de travail avec toute autre association poursuivant des objectifs similaires.</li></ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"chapitre2.2\">
\t\t\t\t<div class=\"chapitre-titre\">
\t\t\t\t\tChapitre II: Moyens d'actions 
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 8</legend>\t\t\t
\t\t\t\t\t<ul>Pour réaliser ses objectifs, la CESTOM entend :
\t\t\t\t\t<li>Organiser des activités culturelles, sociales, éducatives et sportives.</li>
\t\t\t\t\t<li>Publier des rapports et journaux.</li>
\t\t\t\t\t<li>Entretenir des relations avec toute autre association similaire par correspondance ou action concertée.</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"chapitre2.3\">
\t\t\t\t<div class=\"chapitre-titre\">
\t\t\t\t\tChapitre III: Ressources 
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 9</legend>\t\t\t
\t\t\t\t\t<p>Les ressources de la CESTOM proviennent essentiellement des droits d’adhésion et des cotisations ordinaires ; s’y ajoutent des cotisations extraordinaires, les produits d’activités, les dons, legs et subventions. Article 10:
\t\t\t\t\tLa CESTOM se réserve le droit d’accepter ou de rejeter tout don, legs ou toute
\t\t\t\t\tsubvention dont la nature compromettrait ses objectifs et sa moralité.</p>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<!--PARTIE 3-->
\t\t<div id=\"partie3\">
\t\t\t<div class=\"titre-partie\">
\t\t\t\tTitre III: Structures et attributions
\t\t\t</div>
\t\t\t<div id=\"chapitre3.1\">
\t\t\t\t<div class=\"chapitre-titre\">
\t\t\t\t\tChapitre I: Structures 
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 7</legend>\t\t\t
\t\t\t\t\t<ul>La CESTOM se compose de trois organes, de deux types de commissions et des sections :
\t\t\t\t\t\t<li>Le congrès</li>
\t\t\t\t\t\t<li>L’assemblée Générale (AG)</li>
\t\t\t\t\t\t<li>Le Bureau Exécutif (BE)</li>
\t\t\t\t\t\t<li>Les commissions permanentes</li>
\t\t\t\t\t\t<li>Les commissions spéciales</li>
\t\t\t\t\t\t<li>Les sections</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"chapitre3.2\">
\t\t\t\t<div class=\"chapitre-titre\">
\t\t\t\t\tChapitre II: Attributions 
\t\t\t\t</div>
\t\t\t\t<div class=\"sub-title\">I- Le congrès</div>
\t\t\t\t<div class=\"statut\"><legend>Article 12</legend>
\t\t\t\t\t<p>Le congrès est l’instance suprême de l’association, il est composé de tous les
\t\t\t\t\tmembres. Le congrès est convoqué tous les trois ans par le bureau exécutif
\t\t\t\t\tchargé de son organisation à Rabat.</p>
\t\t\t\t\t<p>En cas de crise ou de circonstances exceptionnelles, le bureau exécutif
\t\t\t\t\tdécide du lieu et du moment de la tenue du congrès. Un congrès extraordinaire peut se tenir sur décision de l’assemblée générale.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 13</legend>
\t\t\t\t\t<p>Seul le congrès détermine les lignes d’action de l’association et modifie au
\t\t\t\t\t\tbesoin ses statuts.</p>
\t\t\t\t\t<p>Les décisions du congrès sont prises à la majorité des deux tiers des
\t\t\t\t\t\tmembres présents en dehors des élections où la majorité simple est adoptée.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 14</legend>
\t\t\t\t\t<p>Une commission chargée de la relecture du statut est mise en place au
\t\t\t\t\tmoins un mois avant le Congrès par le BE en concertation avec la commission des membres d’honneur.</p>
\t\t\t\t\t<p>Le congrès est dirigé par un présidium de trois (3) membres élus à l’ouverture.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"sub-title\" >II- L'assemblée Générale</div>
\t\t\t\t\t<div class=\"statut\"><legend>Article 15</legend>
\t\t\t\t\t<p>L’assemblée générale est la deuxième instance de l’association.</p>
\t\t\t\t\t<p>Elle se réunit une fois par an en session ordinaire. Des sessions extraordinaires peuvent être convoquées par le bureau exécutif sur sa propre initiative ou sur proposition de tout membre en cas de nécessité.</p>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 16</legend>
\t\t\t\t\t<p>L’assemblée générale prend toutes les décisions sauf celles relevant de la compétence exclusive du congrès.</p>
\t\t\t\t\t<p>Les décisions sont prises à la majorité simple des membres présents.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 17</legend>
\t\t\t\t\t<p>L’assemblée générale est souveraine dans ses attributs.</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Le Bureau Exécutif -->
\t\t\t\t<div class=\"sub-title\">III Le Bureau Exécutif</div>
\t\t\t\t\t<div class=\"sub-title-2\">A - Le Secrétaire Général</div>
\t\t\t\t\t\t<div class=\"statut\"><legend>Article 18</legend>
\t\t\t\t\t\t\t<p>Le bureau exécutif est composé de cinq (5) membres :</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Un secrétaire général (S.G)</li>
\t\t\t\t\t\t\t\t<li>Un secrétaire général adjoint (S.G.A)</li>
\t\t\t\t\t\t\t\t<li> Un trésorier général (T.G)</li>
\t\t\t\t\t\t\t\t<li>Un trésorier général adjoint (T.G.A)</li>
\t\t\t\t\t\t\t\t<li>Un Chargé aux affaires socioculturelles et sportives.</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statut\"><legend>Article 19</legend>
\t\t\t\t\t\t\t<p>Le bureau exécutif est élu à pour un mandat d’un an renouvelable une seule
\t\t\t\t\t\t\t\tfois. Il exerce son mandat conformément aux statuts et prend fonction dès
\t\t\t\t\t\t\t\tson investiture. L’investiture a lieu le jour des élections.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>Les membres du bureau exécutif sont collégialement responsables devant l’Assemblée \t\tGénérale et le Congrès. Le BE tient avec les délégués de
\t\t\t\t\t\t\t\tvilles deux réunions de travail par an. Ces réunions ont lieu après l’investiture du bureau et avant les activités d’été, pour discuter du plan d’action
\t\t\t\t\t\t\t\tde la coordination.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"sub-title-2\">B - Le Secrétaire Général</div>
\t\t\t\t\t<div class=\"statut\"><legend>Article 20</legend>
\t\t\t\t\t\t<p>Il est le premier responsable de l’association et détient les archives de l’association. 
\t\t\t\t\t\t\tIl est \ttenu de signaler tout dysfonctionnement persistant du bureau
\t\t\t\t\t\t\texécutif à l’AG ou au Congrès en vue de son règlement. Il convoque et préside les réunions du bureau exécutif et de l’AG dont il propose l’ordre du
\t\t\t\t\t\t\tjour. Il signe les cartes de membre et les procès verbaux et ordonne les
\t\t\t\t\t\t\tdépenses sur approbation de la majorité des membres du bureau exécutif.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>Il est tenu d’informer à temps tous les membres du Bureau Exécutif de
\t\t\t\t\t\t\ttout ce qui touche à la vie de l’association. Il cumule les fonctions du S.G.A.
\t\t\t\t\t\t\ten cas d’empêchement ou de vacance définitive à ce poste.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"statut\"><legend>Article 21</legend>
\t\t\t\t\t\t<p>Pour toute représentation extérieure, le Secrétaire Général est tenu de se
\t\t\t\t\t\t\tfaire accompagner par un membre du Bureau Exécutif ou par tout membre
\t\t\t\t\t\t\tde l’association sur décision du Bureau Exécutif. En cas d’empêchement il
\t\t\t\t\t\t\tse fait remplacer dans les mêmes conditions par le S.G.A.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"sub-title-2\">B - Le Secrétaire Général Adjoint</div>
\t\t\t\t\t<div class=\"statut\"><legend>Article 22</legend>
\t\t\t\t\t\t<p>Il est le deuxième responsable de l’association. Il assure la correspondance,
\t\t\t\t\t\t\trédige et distribue les invitations. Il travaille en étroite collaboration avec
\t\t\t\t\t\t\tles délégués de chaque section désignés par leurs pairs. Il est chargé de
\t\t\t\t\t\t\tl’édition et de la publication de l’organe d’information de l’association. Il
\t\t\t\t\t\t\trédige les procès-verbaux. Il supplée le Secrétaire général en cas d’empêchement et le remplace en cas de vacance définitive.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"sub-title-2\">C - Le Trésorier Général</div>
\t\t\t\t\t<div class=\"statut\"><legend>Article 23</legend>
\t\t\t\t\t\t<p>Le Trésorier Général détient et gère les fonds de l’association. Il tient la
comptabilité des opérations financières et contresigne les dépenses ordonnancées par le Secrétaire Général sur approbation de la majorité des membres du Bureau Exécutif en fonction des circonstances.</p>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"sub-title-2\">D - Le Trésorier Général Adjoint</div>
\t\t\t\t\t<div class=\"statut\"><legend>Article 24</legend>
\t\t\t\t\t\t<p>Il assiste le Trésorier Général dans l’exercice de ses fonctions. Il supplée le
Trésorier Général en cas d’empêchement et le remplace en cas de vacance
définitive.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sub-title-2\">E - Le Chargé aux Affaires Socioculturelles</div>
\t\t\t\t\t<div class=\"statut\"><legend>Article 25</legend>
\t\t\t\t\t\t<p>Il s’occupe des problèmes matériels et moraux des membres de l’association. Il organise les \t\tactivités culturelles et sportives de l’association, des cercles d’études, des conférences . . .</p>
\t\t\t\t\t\t<div><a href=\"#\">Plus d'informations</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sub-title\">IV - Les commissions permanentes</div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"statut\"><legend>Article 26</legend>
\t\t\t\t\t\t\t<p>L’association regroupe deux (2) commissions permanentes composées chacune de trois (3) personnes :</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Un président.</li>
\t\t\t\t\t\t\t\t<li>Un vice-président.</li>
\t\t\t\t\t\t\t\t<li>Un secrétaire.</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul> Ces commissions sont: 
\t\t\t\t\t\t\t\t<li>La commission des comptes.</li>
\t\t\t\t\t\t\t\t<li>La commission des membres d’honneur.</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statut\"><legend>Article 27</legend>
\t\t\t\t\t\t\t<p>La commission des comptes est indépendante. Elle se compose de trois (3)
membres élus par l’Assemblée Générale ou le Congrès pour une durée d’un
an. Au moins un membre de ladite commission devra résider dans la ville
où siège le BE. Elle a accès à toutes les pièces comptables et, à tout moment,
procède à des contrôles et en fait le rapport à la deuxième Assemblée Générale en fin de mandat du bureau exécutif.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statut\"><legend>Article 28</legend>
\t\t\t\t\t\t\t<p>La commission des membres d’honneur est indépendante. \tElle se compose
\t\t\t\t\t\t\t\tde trois (3) membres élus par l’Assemblée Générale ou le Congrès pour
\t\t\t\t\t\t\t\tune durée d’un an ; membres qui doivent être anciens au Maroc (ayant au
\t\t\t\t\t\t\t\tminimum quatre ans d’appartenance à la CESTOM).</p>
\t\t\t\t\t\t\t\t<p>Elle travaille en collaboration avec la commission des comptes et fait des
\t\t\t\t\t\t\t\tpropositions au BE. Au besoin convoque le BE sur proposition des délégués
\t\t\t\t\t\t\t\tet/ou de la commission des comptes. Elle fait le rapport à la deuxième
\t\t\t\t\t\t\t\tAssemblée Générale en fin de mandat du bureau exécutif.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sub-title\">V - Les commissions spéciales</div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"statut\"><legend>Article 29</legend>
\t\t\t\t\t\t\t<p>Elles sont formées ponctuellement par l’AG ou le BE pour accomplir des missions précises. Elles doivent rendre compte à la commission des membres
d’honneur et au BE si elles sont formées par l’AG ou seulement au BE si elles
sont formées par le BE. Le BE ou la commission des membres d’honneurs est chargé de faire le rapport de cette commission spéciale à la deuxième
Assemblée Générale en fin du mandat du BE si elles sont formées par l’AG.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sub-title\">VI - Les sections</div>
\t\t\t\t\t\t<div class=\"statut\"><legend>Article 30</legend>
\t\t\t\t\t\t\t<p>Suivant l’effectif de ses membres et de leur position géographique, les étudiants et stagiaires peuvent s’organiser en section. Chaque section sera en
liaison avec le bureau exécutif qui a autorité sur celle-ci</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"statut\"><legend>Article 31</legend>
\t\t\t\t\t\t\t<p>Chaque section s’organise à son niveau pour son bon fonctionnement.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t</div>
\t\t
\t\t<!-- Partie 4 -->
\t\t<div id=\"partie4\">
\t\t\t<div class=\"titre-partie\">
\t\t\t\tTitre IV  Adhésion - Sanctions - Démission
\t\t\t</div>
\t\t\t<div id=\"chapitre4.1\">
\t\t\t\t<div class=\"chapitre-titre\">Chapitre I:  ADHÉSION</div>
\t\t\t\t<div class=\"statut\"><legend>Article 32</legend>
\t\t\t\t\t<p>Pour être membre de la CESTOM, il faut :</p>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Être Togolais.</li>
\t\t\t\t\t\t<li>Être étudiant régulièrement inscrit dans une faculté ou école de formation du Maroc sous la nationalité togolaise ou être stagiaire.</li>
\t\t\t\t\t\t<li>Remplir une fiche d’adhésion.</li>
\t\t\t\t\t\t<li>Payer le droit d’adhésion.</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 33</legend>
\t\t\t\t\t<p>Tout membre de l’association doit avoir une carte de membre valide et
observer les statuts et décisions prises par l’association. Il doit s’acquitter
régulièrement de ses cotisations ordinaires et extraordinaires, sauf dérogation spéciale du BE.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 34</legend>
\t\t\t\t\t<p>Tout membre est soumis aux dispositions des articles 32 et 33 sous peine
d’être confronté aux mesures précaires du chapitre 3 du titre 4 des présents
statuts.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"chapitre4.2\">
\t\t\t\t<div class=\"chapitre-titre\">Chapitre II: ÉLIGIBILITÉ</div>
\t\t\t\t<div class=\"statut\"><legend>Article 35</legend>
\t\t\t\t\t<p>Peut être électeur, tout membre ou stagiaire, qui fait parti de la CESTOM et qui est en règle avec l’association.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"statut\"><legend>Article 36</legend>
\t\t\t\t\t\t<p>Tout membre du BE est élu au scrutin secret uninominal à la majorité simple.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"statut\"><legend>Article 37</legend>
\t\t\t\t\t\t\t\t<p>Peut être candidat aux postes de Secrétaire Général tout membre de l’association ayant déjà accumulé au moins deux (2) années d’appartenance à la
\t\t\tcoordination ayant encore au moins deux (2) années académiques à faire
\t\t\tau Maroc.
\t\t\t</p>
\t\t\t<p>
\t\t\tPeut être candidat aux postes de Trésorier Général tout membre de l’association ayant au moins une année d’appartenance à la coordination et
\t\t\tayant encore au moins deux (2) années académiques à faire au Maroc.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"statut\"><legend>Article 38</legend>
\t\t\t\t\t\t\t\t<p>Peut être candidat aux autres postes au sein du BE tout membre ayant au
\t\t\tmoins une (1) année académique à faire au Maroc. En cas de vacance d’un
\t\t\tposte du bureau, le BE peut choisir un autre membre après concertation des
\t\t\tmembres d’honneur.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"statut\"><legend>Article 39</legend>
\t\t\t\t\t\t\t\t<p>En cas de vacances définitives au poste de Secrétaire Général et de Secrétaire Général Adjoint, les membres restants du BE sont tenus de convoquer
\t\t\tdans un délai maximum de trois (3) mois, une assemblée générale extraordinaire qui dissout le BE et organise de nouvelles élections. Passé ce délai,
\t\t\tun triumvirat représentatif, formé sur la base du choix des délégués des
\t\t\tsections majoritaires, convoque cette assemblée générale.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"statut\"><legend>Article 40</legend>
\t\t\t\t\t\t\t\t<p>L’Assemblée Générale ou le Congrès désigne une commission ad hoc de
\t\t\t3 personnes qui se charge des élections. La dite commission recueille et
\t\t\tétudie les candidatures. Toutefois l’AG ou le Congrès peut faire des propositions.</p>
\t\t\t\t\t\t\t\t<p>Avant de procéder au vote, l’AG ou le Congrès doit se prononcer sur les
\t\t\tcandidatures.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"chapitre4.3\">
\t\t\t\t<div class=\"chapitre-titre\">Chapitre III: SANCTIONS</div>
\t\t\t\t<div class=\"statut\"><legend>Article 41</legend>
\t\t\t\t\t<p>En cas de faute de tout membre portant atteinte à la vie de l’association,
l’AG ou le Congrès peut prononcer les sanctions suivantes à son encontre :
avertissement, blâme, suspension, exclusion ou radiation suivant la gravité
de la faute. Une réparation est demandée en cas de préjudices matériels ou
financiers non justifiés.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 42</legend>
\t\t\t\t\t<p>Seul le Congrès ou seule l’AG peut se prononcer sur la radiation d’un membre. L’intéressé est convoqué devant l’assemblée ; il dispose du droit de
réponse. Les sanctions sont prises par vote secret à la majorité des 3/4 des
membres présents pour la radiation et à la majorité des 2/3 pour les autres
sanctions.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 43</legend>
\t\t\t\t\t<p>Toute absence à une AG doit être justifiée dans les 7 jours qui suivent sous
peine d’une amende de 20dhs.</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"chapitre4.4\">
\t\t\t\t<div class=\"chapitre-titre\">Chapitre IV: DÉMISSION</div>
\t\t\t\t
\t\t\t\t<div class=\"statut\"><legend>Article 44</legend>
\t\t\t\t\t<p>Lorsque son activité est contraire aux objectifs et intérêts de la coordination en cas de contrainte majeure, tout membre du BE peut demander à
être déchargé de ses responsabilités. Il notifie une lettre à la commission
des membres d’honneur qui en apprécie le contenu et prend des décisions
définitives.</p>
\t\t\t\t\t<p>Lorsque son activité est contraire aux objectifs et intérêts de la coordination, tout membre peut présenter sa démission. Il notifie sa décision par
une lettre au BE.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 45</legend>
\t\t\t\t\t<p>Tout membre radié ou démissionnaire de la coordination perd tous les
droits au sein de celle-ci et ne bénéficie d’aucun remboursement.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 46</legend>
\t\t\t\t\t<p>Tout membre démissionnaire souhaitant sa réintégration notifie une lettre
au BE qui en concertation avec les membres d’honneur, décide de sa réintégration. En cas de réintégration, ce membre doit s’acquitter des cotisations
ordinaires et extraordinaires des années ou mois ayant couvert la durée de
son absence au sein de l’association. Il sera par ailleurs amendé par le BE.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"statut\"><legend>Article 47</legend>
\t\t\t\t\t<p>En cas de démission du BE il se forme un Triumvirat représentatif formé
sur les mêmes bases comme stipulé dans l’article 39 et ayant les mêmes
fonctions.</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t\t\t
\t\t</div>
\t\t<!-- Partie 5 -->
\t\t<div id=\"partie5\">
\t\t\t<div class=\"titre-partie\">
\t\t\t\tTitre V  Dispositions générales
\t\t\t</div>
\t\t\t<div class=\"statut\"><legend>Article 48</legend>
\t\t\t\t<p>Si par insuffisance d’effectif ou désintéressement total de la majorité de ses
membres, la viabilité de la coordination devient précaire, le BE peut proposer un projet de dissolution au Congrès. La dissolution devient effective si
le projet est adopté à la majorité des 3/4 des membres effectifs au scrutin
secret.</p>
\t\t\t</div>
\t\t\t<div class=\"statut\"><legend>Article 49</legend>
\t\t\t\t<p>En cas de dissolution de la CESTOM il ne peut en aucune manière être procédé au partage des biens de la coordination entre ses membres. Ses biens
doivent être versés à une association similaire ou à une oeuvre de bienfaisance au Togo par un comité élu par le Congrès.</p>
\t\t\t</div>
\t\t\t<div class=\"statut\"><legend>Article 50</legend>
\t\t\t\t<p>Le Congrès élabore en vue de l’application des présents statuts un règlement intérieur en annexe.</p>
\t\t\t</div>
\t\t\t<div class=\"statut\"><legend>Article 51</legend>
\t\t\t\t<p>Tout cas non prévu par le présent statut peut être discuté à l’AG.</p>
\t\t\t</div>
\t\t\t<div class=\"statut\"><legend>Article 52</legend>
\t\t\t\t<p>Les présents statuts prennent effet dès leur adoption par le Congrès.</p>
\t\t\t</div>
\t\t</div>
\t\t<!-- Partie 6 -->
\t\t<div id=\"partie5\">
\t\t\t<div class=\"titre-partie\">
\t\t\t\tTitre VI  Annexe : Définitions
\t\t\t</div>
\t\t\t<div class=\"statut annexe\"><legend>Définitions</legend>
\t\t\t\t<p>
\t\t\t\t<strong class=\"ft-size-20\">Scrutin uninominal : </strong>
\t\t\t\t<span>Mode de scrutin dans lequel chaque “candidat” est
une unique personne physique. Cela exclut entre autres qu’un bureau
se présente de façon collective.</span>
\t\t\t\t
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t<strong class=\"ft-size-20\">Majorité absolue : </strong>
\t\t\t\t<span>Mode de scrution dans lequel un candidat est élu, si, et
\t\t\t\t\tseulement si, il receuille au moins 50% des suffrages exprimés et une
\t\t\t\t\tvoix. A défaut, un deuxième tour est organisé entre les deux premiers
\t\t\t\t\tcandidats.
\t\t\t\t\t</span>
\t\t\t\t
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t<strong class=\"ft-size-20\">Majorité simple : </strong>
\t\t\t\t<span>Mode de scrutin dans lequel le candidat ayant receuilli
\t\t\tle plus de voix est immédiatement élu (sans condition sur le pourcentage de voix favorables).</span>\t\t\t
\t\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"end-note\">\t
\t\t<div>Fait à Rabat le 25 Août 2007,</div>\t
\t\t<div>Le Congrès.</div>\t
\t\t</div>\t
\t\t
\t\t<style>
\t\t.ft-size-20{
\t\t\tfont-size: 20px;
\t\t}
\t\t.end-note {margin:15px;
    text-align: end;
}
\t\t.sub-title {
    margin-left: 150px;
    font-size: x-large;
    color: #F44336;
    margin-top: 50px;
}.sub-title-2 {
    margin-left: 185px;
    font-size: large;
    color: #F44336;
    margin-top: 20px;
}
\t\t\th1 {
\t\t\t\tletter-spacing: 2px;
\t\t\t\tfont-size: 33px;
\t\t\t\tcolor: #F44336;
\t\t\t\tmargin-left: 150px;
\t\t\t}
\t\t\t.titre-partie {
\t\t\t\tcolor: #F44336;
\t\t\t\ttext-transform: uppercase;
\t\t\t\tfont-size: xx-large;
\t\t\t\tmargin: 15px;
\t\t\t\tmargin-left: 60px;
\t\t\t\tborder-bottom: 4px solid #838383;
\t\t\t\t    margin-top: 200px;
\t\t\t}
\t\t\t.statut {
\t\t\t\tmargin: 25px;
\t\t\t\tpadding: 10px;
\t\t\t\tbackground-color: #ffffff;
\t\t\t\tborder-color: black;
\t\t\t\tborder: 1px solid #D2CECE;
\t\t\t\tborder-radius: 10px;
\t\t\t\twidth: 60%;
\t\t\t\tmargin-left: 25%;
\t\t\t\tfont-size: px;
\t\t\t\t-webkit-box-shadow: 7px 7px 5px 0 #A9A9A9;
\t\t\t\tbox-shadow: 7px 7px 5px 0 #A9A9A9;
\t\t\t\tfont: large \"trebuchet ms\", helvetica, arial, sans-serif;
\t\t\t\tbackground-color: white;
\t\t\t\tword-wrap: break-word;
\t\t\t}
\t\t\tlegend {
\t\t\t\tdisplay: block;
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t\tmargin-bottom: 20px;
\t\t\t\tfont-size: 21px;
\t\t\t\tline-height: inherit;
\t\t\t\tcolor: #F44336;
\t\t\t\tborder: 0;
\t\t\t\tborder-bottom: 1px solid #e5e5e5;
\t\t\t\tfont: x-large \"trebuchet ms\", helvetica, arial, sans-serif;
\t\t\t\ttext-transform: uppercase;
\t\t\t\tbackground-color: white;
\t\t\t\tword-wrap: break-word;
\t\t\t}
\t\t\t.def-cestom {
\t\t\t\tfont-size: 20px;
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\t.preambule-u {
\t\t\t\tmargin-left: 60px;
\t\t\t\tmax-width: 60%;
\t\t\t\tpadding: 5px;
\t\t\t}
\t\t\th1.title-cestom-status {
\t\t\t\tborder-bottom: 5px solid black;
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\t.revision-statuts {
\t\t\t\ttext-align: center;
\t\t\t\tmargin-top: 50px;
\t\t\t}.preambule {
\t\t\t\ttext-align: left;
\t\t\t\tmargin: 10px;
\t\t\t\tborder-bottom: 2px solid #838383;
\t\t\t\tborder-top: 2px solid #838383;
\t\t\t\tpadding: 50px;
\t\t\t\tfont-size: xx-large;
\t\t\t\tmargin-top: 200px;
\t\t\t\tmargin-bottom: 30px;
\t\t\t}.italic {
\t\t\t\tfont-style: italic;
\t\t\t\tfont-family: Andale Mono;
\t\t\t\tmargin-bottom: 50px;
\t\t\t}body {
\t\t\t\tbackground-color: rgba(228, 228, 228, 0.68);
\t\t\t}
\t\t\t.chapitre-titre {
\t\t\t\tcolor: #F44336;
\t\t\t\tfont-size: x-large;
\t\t\t\tmargin: 15px;
\t\t\t\tmargin-left: 90px;
\t\t\t\tBORDER-BOTTOM: 1px solid red;
\t\t\t\tmargin-top: 75px;
\t\t\t}
\t\t</style>
\t\t
\t</div>
\t\t

";
    }

    // line 600
    public function block_javascripts($context, array $blocks = array())
    {
        // line 601
        echo "
    ";
        // line 602
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
";
    }

    public function getTemplateName()
    {
        return "CestomTestBundle:StatutsCestom:statuts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  659 => 602,  656 => 601,  653 => 600,  67 => 16,  64 => 15,  42 => 11,  38 => 6,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends '::base_public.html.twig' %} */
/* */
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets filter='cssrewrite'*/
/* 		'bundles/cestomarticle/css/accueilStyles.css'*/
/* 		'bundles/cestomarticle/css/statuts.css'*/
/* 		*/
/*     %}*/
/*     <link href="{{ asset_url }}" type="text/css" rel="stylesheet" />*/
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     			*/
/* 	*/
/* */
/* 	<div class="container-fluid">*/
/* 		<!--PRESENTATION-->*/
/* 		<div>*/
/* 		<div class="title-cestom-status">CESTOM: STATUS</div>*/
/* 		<div class="def-cestom">Coordination des Etudiants et Stagiaires Togolais au Maroc</div>*/
/* 		<div class="revision-statuts">[Révision du congrès du 25 Août 2007]</div>*/
/* 		*/
/* 		<div class="preambule">Préambule</div>*/
/* 		*/
/* 		<div class="italic">*/
/* 		<div class="preambule-u">Considérant la nécessité de renforcer les liens sacrés de fraternité entre*/
/* togolais,</div>*/
/* <div class="preambule-u">Conscients des problèmes que rencontrent les étudiants et stagiaires*/
/* étrangers au Maroc,</div>*/
/* <div class="preambule-u">Soucieux de créer une harmonie pour mobiliser les étudiants et stagiaires togolais en vue de défendre leurs droits et intérêts,</div>*/
/* <div class="preambule-u">Conformément au Dahir N*/
/* o*/
/* 1-73-283 du 6 Rabia I 1393 (10 avril 1973),</div>*/
/* <div class="preambule-u">Nous, étudiants et stagiaires togolais au Maroc réunis le 17 Août 1998,*/
/* avions décidé de la création de la Coordination des Etudiants et Stagiaires*/
/* Togolais au Maroc (CESTOM) et adoptons les statuts dont la teneur suit :</div></div>*/
/* 	*/
/* 	</div>*/
/* 	*/
/* 		<!--PARTIE 1-->*/
/* 		<div id="partie1">*/
/* 			<div class="titre-partie">*/
/* 				Titre 1: Dénomination - Siège - Durée*/
/* 			</div>*/
/* 			<div id="chapitre1.1">*/
/* 				<div class=" chapitre-titre">*/
/* 					Chapitre I: Dénomination*/
/* 				</div>*/
/* 						<div class="statut"><legend>Article 1</legend>*/
/* 						<p>Il est créé une association regroupant */
/* 						les étudiants et stagiaires togolais au Maroc.</p>*/
/* 						</div>*/
/* 						<div class="statut"><legend>Article 2</legend>	*/
/* 						<p>L’association est dénommée Coordination des Etudiants et Stagiaires Togolais au Maroc.</p>*/
/* 						</div>*/
/* 						<div class="statut"><legend>Article 3</legend>	*/
/* 						<p>La CESTOM est une association apolitique, laïque et libre.</p>*/
/* 						</div>					*/
/* 			</div>*/
/* 			<div id="chapitre1.2">*/
/* 				<div class=" chapitre-titre">*/
/* 					Chapitre II: Siège*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 4</legend>*/
/* 					<p>Le siège et le bureau de la CESTOM se trouvent à Rabat.</p>*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 5</legend>*/
/* 									<p>Le bureau peut être transféré provisoirement en tout lieu sur décision de*/
/* 					l’Assemblée Générale à la majorité simple tout en ayant en son sein un*/
/* 					de ses membres résidant à Rabat. Et en se conformant aux attributions du*/
/* 					Secrétaire Général Adjoint, ce dernier occupera ce poste. En cas d’impossibilité de résidence de ce membre du Bureau Exécutif à Rabat, le Bureau*/
/* 					Exécutif mandate un membre de l’association résidant à Rabat pour sa représentation pour les affaires administratives.</p>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 			<div id="chapitre1.3">*/
/* 					<div class="chapitre-titre">*/
/* 						Chapitre III: Durée */
/* 					</div>*/
/* 					<div class="statut"><legend>Article 6</legend>			*/
/* 							<p>L’association a une durée de vie illimitée.</p>*/
/* 					</div>*/
/* 				</div>*/
/* 		</div>*/
/* 			*/
/* 		<!--PARTIE 2-->*/
/* 		<div id="partie2">*/
/* 			<div class="titre-partie">*/
/* 				Titre II: Objectifs - Moyens d'action - Ressources*/
/* 			</div>*/
/* 			<div id="chapitre2.1">*/
/* 				<div class="chapitre-titre">*/
/* 					Chapitre I: Objectifs */
/* 				</div>*/
/* 				<div class="statut"><legend>Article 7</legend>			*/
/* 						<ul>La CESTOM a pour objectifs de :*/
/* 				<li>Regrouper en son sein les étudiants et stagiaires togolais au Maroc</li>*/
/* 				<li>Défendre et sauvegarder les droits et intérêts matériels et moraux de*/
/* 				tous ses membres.</li>*/
/* 				<li>Développer l’esprit de travail et d’entraide entre ses membres.</li>*/
/* 				<li>Entretenir les relations d’amitié et de travail avec toute autre association poursuivant des objectifs similaires.</li></ul>*/
/* 									</div>*/
/* 			</div>*/
/* 			<div id="chapitre2.2">*/
/* 				<div class="chapitre-titre">*/
/* 					Chapitre II: Moyens d'actions */
/* 				</div>*/
/* 				<div class="statut"><legend>Article 8</legend>			*/
/* 					<ul>Pour réaliser ses objectifs, la CESTOM entend :*/
/* 					<li>Organiser des activités culturelles, sociales, éducatives et sportives.</li>*/
/* 					<li>Publier des rapports et journaux.</li>*/
/* 					<li>Entretenir des relations avec toute autre association similaire par correspondance ou action concertée.</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id="chapitre2.3">*/
/* 				<div class="chapitre-titre">*/
/* 					Chapitre III: Ressources */
/* 				</div>*/
/* 				<div class="statut"><legend>Article 9</legend>			*/
/* 					<p>Les ressources de la CESTOM proviennent essentiellement des droits d’adhésion et des cotisations ordinaires ; s’y ajoutent des cotisations extraordinaires, les produits d’activités, les dons, legs et subventions. Article 10:*/
/* 					La CESTOM se réserve le droit d’accepter ou de rejeter tout don, legs ou toute*/
/* 					subvention dont la nature compromettrait ses objectifs et sa moralité.</p>					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		*/
/* 		*/
/* 		<!--PARTIE 3-->*/
/* 		<div id="partie3">*/
/* 			<div class="titre-partie">*/
/* 				Titre III: Structures et attributions*/
/* 			</div>*/
/* 			<div id="chapitre3.1">*/
/* 				<div class="chapitre-titre">*/
/* 					Chapitre I: Structures */
/* 				</div>*/
/* 				<div class="statut"><legend>Article 7</legend>			*/
/* 					<ul>La CESTOM se compose de trois organes, de deux types de commissions et des sections :*/
/* 						<li>Le congrès</li>*/
/* 						<li>L’assemblée Générale (AG)</li>*/
/* 						<li>Le Bureau Exécutif (BE)</li>*/
/* 						<li>Les commissions permanentes</li>*/
/* 						<li>Les commissions spéciales</li>*/
/* 						<li>Les sections</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id="chapitre3.2">*/
/* 				<div class="chapitre-titre">*/
/* 					Chapitre II: Attributions */
/* 				</div>*/
/* 				<div class="sub-title">I- Le congrès</div>*/
/* 				<div class="statut"><legend>Article 12</legend>*/
/* 					<p>Le congrès est l’instance suprême de l’association, il est composé de tous les*/
/* 					membres. Le congrès est convoqué tous les trois ans par le bureau exécutif*/
/* 					chargé de son organisation à Rabat.</p>*/
/* 					<p>En cas de crise ou de circonstances exceptionnelles, le bureau exécutif*/
/* 					décide du lieu et du moment de la tenue du congrès. Un congrès extraordinaire peut se tenir sur décision de l’assemblée générale.</p>*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 13</legend>*/
/* 					<p>Seul le congrès détermine les lignes d’action de l’association et modifie au*/
/* 						besoin ses statuts.</p>*/
/* 					<p>Les décisions du congrès sont prises à la majorité des deux tiers des*/
/* 						membres présents en dehors des élections où la majorité simple est adoptée.</p>*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 14</legend>*/
/* 					<p>Une commission chargée de la relecture du statut est mise en place au*/
/* 					moins un mois avant le Congrès par le BE en concertation avec la commission des membres d’honneur.</p>*/
/* 					<p>Le congrès est dirigé par un présidium de trois (3) membres élus à l’ouverture.</p>*/
/* 				</div>*/
/* 				<div class="sub-title" >II- L'assemblée Générale</div>*/
/* 					<div class="statut"><legend>Article 15</legend>*/
/* 					<p>L’assemblée générale est la deuxième instance de l’association.</p>*/
/* 					<p>Elle se réunit une fois par an en session ordinaire. Des sessions extraordinaires peuvent être convoquées par le bureau exécutif sur sa propre initiative ou sur proposition de tout membre en cas de nécessité.</p>*/
/* 					*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 16</legend>*/
/* 					<p>L’assemblée générale prend toutes les décisions sauf celles relevant de la compétence exclusive du congrès.</p>*/
/* 					<p>Les décisions sont prises à la majorité simple des membres présents.</p>*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 17</legend>*/
/* 					<p>L’assemblée générale est souveraine dans ses attributs.</p>*/
/* 				</div>*/
/* 				*/
/* 				<!-- Le Bureau Exécutif -->*/
/* 				<div class="sub-title">III Le Bureau Exécutif</div>*/
/* 					<div class="sub-title-2">A - Le Secrétaire Général</div>*/
/* 						<div class="statut"><legend>Article 18</legend>*/
/* 							<p>Le bureau exécutif est composé de cinq (5) membres :</p>*/
/* 							<ul>*/
/* 								<li>Un secrétaire général (S.G)</li>*/
/* 								<li>Un secrétaire général adjoint (S.G.A)</li>*/
/* 								<li> Un trésorier général (T.G)</li>*/
/* 								<li>Un trésorier général adjoint (T.G.A)</li>*/
/* 								<li>Un Chargé aux affaires socioculturelles et sportives.</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="statut"><legend>Article 19</legend>*/
/* 							<p>Le bureau exécutif est élu à pour un mandat d’un an renouvelable une seule*/
/* 								fois. Il exerce son mandat conformément aux statuts et prend fonction dès*/
/* 								son investiture. L’investiture a lieu le jour des élections.*/
/* 							</p>*/
/* 							<p>Les membres du bureau exécutif sont collégialement responsables devant l’Assemblée 		Générale et le Congrès. Le BE tient avec les délégués de*/
/* 								villes deux réunions de travail par an. Ces réunions ont lieu après l’investiture du bureau et avant les activités d’été, pour discuter du plan d’action*/
/* 								de la coordination.*/
/* 							</p>*/
/* 						</div>*/
/* 						*/
/* 					<div class="sub-title-2">B - Le Secrétaire Général</div>*/
/* 					<div class="statut"><legend>Article 20</legend>*/
/* 						<p>Il est le premier responsable de l’association et détient les archives de l’association. */
/* 							Il est 	tenu de signaler tout dysfonctionnement persistant du bureau*/
/* 							exécutif à l’AG ou au Congrès en vue de son règlement. Il convoque et préside les réunions du bureau exécutif et de l’AG dont il propose l’ordre du*/
/* 							jour. Il signe les cartes de membre et les procès verbaux et ordonne les*/
/* 							dépenses sur approbation de la majorité des membres du bureau exécutif.*/
/* 						</p>*/
/* 						<p>Il est tenu d’informer à temps tous les membres du Bureau Exécutif de*/
/* 							tout ce qui touche à la vie de l’association. Il cumule les fonctions du S.G.A.*/
/* 							en cas d’empêchement ou de vacance définitive à ce poste.*/
/* 						</p>*/
/* 					</div>*/
/* 					<div class="statut"><legend>Article 21</legend>*/
/* 						<p>Pour toute représentation extérieure, le Secrétaire Général est tenu de se*/
/* 							faire accompagner par un membre du Bureau Exécutif ou par tout membre*/
/* 							de l’association sur décision du Bureau Exécutif. En cas d’empêchement il*/
/* 							se fait remplacer dans les mêmes conditions par le S.G.A.*/
/* 						</p>*/
/* 					</div>*/
/* 					*/
/* 					<div class="sub-title-2">B - Le Secrétaire Général Adjoint</div>*/
/* 					<div class="statut"><legend>Article 22</legend>*/
/* 						<p>Il est le deuxième responsable de l’association. Il assure la correspondance,*/
/* 							rédige et distribue les invitations. Il travaille en étroite collaboration avec*/
/* 							les délégués de chaque section désignés par leurs pairs. Il est chargé de*/
/* 							l’édition et de la publication de l’organe d’information de l’association. Il*/
/* 							rédige les procès-verbaux. Il supplée le Secrétaire général en cas d’empêchement et le remplace en cas de vacance définitive.*/
/* 						</p>*/
/* 					</div>*/
/* 					*/
/* 					<div class="sub-title-2">C - Le Trésorier Général</div>*/
/* 					<div class="statut"><legend>Article 23</legend>*/
/* 						<p>Le Trésorier Général détient et gère les fonds de l’association. Il tient la*/
/* comptabilité des opérations financières et contresigne les dépenses ordonnancées par le Secrétaire Général sur approbation de la majorité des membres du Bureau Exécutif en fonction des circonstances.</p>*/
/* */
/* 					</div>*/
/* 					*/
/* 					<div class="sub-title-2">D - Le Trésorier Général Adjoint</div>*/
/* 					<div class="statut"><legend>Article 24</legend>*/
/* 						<p>Il assiste le Trésorier Général dans l’exercice de ses fonctions. Il supplée le*/
/* Trésorier Général en cas d’empêchement et le remplace en cas de vacance*/
/* définitive.</p>*/
/* 					</div>*/
/* 					<div class="sub-title-2">E - Le Chargé aux Affaires Socioculturelles</div>*/
/* 					<div class="statut"><legend>Article 25</legend>*/
/* 						<p>Il s’occupe des problèmes matériels et moraux des membres de l’association. Il organise les 		activités culturelles et sportives de l’association, des cercles d’études, des conférences . . .</p>*/
/* 						<div><a href="#">Plus d'informations</a></div>*/
/* 					</div>*/
/* 					<div class="sub-title">IV - Les commissions permanentes</div>*/
/* 					*/
/* 						<div class="statut"><legend>Article 26</legend>*/
/* 							<p>L’association regroupe deux (2) commissions permanentes composées chacune de trois (3) personnes :</p>*/
/* 							<ul>*/
/* 								<li>Un président.</li>*/
/* 								<li>Un vice-président.</li>*/
/* 								<li>Un secrétaire.</li>*/
/* 							</ul>*/
/* 							<ul> Ces commissions sont: */
/* 								<li>La commission des comptes.</li>*/
/* 								<li>La commission des membres d’honneur.</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="statut"><legend>Article 27</legend>*/
/* 							<p>La commission des comptes est indépendante. Elle se compose de trois (3)*/
/* membres élus par l’Assemblée Générale ou le Congrès pour une durée d’un*/
/* an. Au moins un membre de ladite commission devra résider dans la ville*/
/* où siège le BE. Elle a accès à toutes les pièces comptables et, à tout moment,*/
/* procède à des contrôles et en fait le rapport à la deuxième Assemblée Générale en fin de mandat du bureau exécutif.</p>*/
/* 						</div>*/
/* 						<div class="statut"><legend>Article 28</legend>*/
/* 							<p>La commission des membres d’honneur est indépendante. 	Elle se compose*/
/* 								de trois (3) membres élus par l’Assemblée Générale ou le Congrès pour*/
/* 								une durée d’un an ; membres qui doivent être anciens au Maroc (ayant au*/
/* 								minimum quatre ans d’appartenance à la CESTOM).</p>*/
/* 								<p>Elle travaille en collaboration avec la commission des comptes et fait des*/
/* 								propositions au BE. Au besoin convoque le BE sur proposition des délégués*/
/* 								et/ou de la commission des comptes. Elle fait le rapport à la deuxième*/
/* 								Assemblée Générale en fin de mandat du bureau exécutif.</p>*/
/* 						</div>*/
/* 						<div class="sub-title">V - Les commissions spéciales</div>*/
/* 					*/
/* 						<div class="statut"><legend>Article 29</legend>*/
/* 							<p>Elles sont formées ponctuellement par l’AG ou le BE pour accomplir des missions précises. Elles doivent rendre compte à la commission des membres*/
/* d’honneur et au BE si elles sont formées par l’AG ou seulement au BE si elles*/
/* sont formées par le BE. Le BE ou la commission des membres d’honneurs est chargé de faire le rapport de cette commission spéciale à la deuxième*/
/* Assemblée Générale en fin du mandat du BE si elles sont formées par l’AG.</p>*/
/* 						</div>*/
/* 						<div class="sub-title">VI - Les sections</div>*/
/* 						<div class="statut"><legend>Article 30</legend>*/
/* 							<p>Suivant l’effectif de ses membres et de leur position géographique, les étudiants et stagiaires peuvent s’organiser en section. Chaque section sera en*/
/* liaison avec le bureau exécutif qui a autorité sur celle-ci</p>*/
/* 						</div>*/
/* 						<div class="statut"><legend>Article 31</legend>*/
/* 							<p>Chaque section s’organise à son niveau pour son bon fonctionnement.</p>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 		</div>*/
/* 		*/
/* 		<!-- Partie 4 -->*/
/* 		<div id="partie4">*/
/* 			<div class="titre-partie">*/
/* 				Titre IV  Adhésion - Sanctions - Démission*/
/* 			</div>*/
/* 			<div id="chapitre4.1">*/
/* 				<div class="chapitre-titre">Chapitre I:  ADHÉSION</div>*/
/* 				<div class="statut"><legend>Article 32</legend>*/
/* 					<p>Pour être membre de la CESTOM, il faut :</p>*/
/* 					<ul>*/
/* 						<li>Être Togolais.</li>*/
/* 						<li>Être étudiant régulièrement inscrit dans une faculté ou école de formation du Maroc sous la nationalité togolaise ou être stagiaire.</li>*/
/* 						<li>Remplir une fiche d’adhésion.</li>*/
/* 						<li>Payer le droit d’adhésion.</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 33</legend>*/
/* 					<p>Tout membre de l’association doit avoir une carte de membre valide et*/
/* observer les statuts et décisions prises par l’association. Il doit s’acquitter*/
/* régulièrement de ses cotisations ordinaires et extraordinaires, sauf dérogation spéciale du BE.</p>*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 34</legend>*/
/* 					<p>Tout membre est soumis aux dispositions des articles 32 et 33 sous peine*/
/* d’être confronté aux mesures précaires du chapitre 3 du titre 4 des présents*/
/* statuts.</p>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id="chapitre4.2">*/
/* 				<div class="chapitre-titre">Chapitre II: ÉLIGIBILITÉ</div>*/
/* 				<div class="statut"><legend>Article 35</legend>*/
/* 					<p>Peut être électeur, tout membre ou stagiaire, qui fait parti de la CESTOM et qui est en règle avec l’association.</p>*/
/* 							</div>*/
/* 					<div class="statut"><legend>Article 36</legend>*/
/* 						<p>Tout membre du BE est élu au scrutin secret uninominal à la majorité simple.</p>*/
/* 					</div>*/
/* 					<div class="statut"><legend>Article 37</legend>*/
/* 								<p>Peut être candidat aux postes de Secrétaire Général tout membre de l’association ayant déjà accumulé au moins deux (2) années d’appartenance à la*/
/* 			coordination ayant encore au moins deux (2) années académiques à faire*/
/* 			au Maroc.*/
/* 			</p>*/
/* 			<p>*/
/* 			Peut être candidat aux postes de Trésorier Général tout membre de l’association ayant au moins une année d’appartenance à la coordination et*/
/* 			ayant encore au moins deux (2) années académiques à faire au Maroc.</p>*/
/* 							</div>*/
/* 							<div class="statut"><legend>Article 38</legend>*/
/* 								<p>Peut être candidat aux autres postes au sein du BE tout membre ayant au*/
/* 			moins une (1) année académique à faire au Maroc. En cas de vacance d’un*/
/* 			poste du bureau, le BE peut choisir un autre membre après concertation des*/
/* 			membres d’honneur.</p>*/
/* 							</div>*/
/* 							<div class="statut"><legend>Article 39</legend>*/
/* 								<p>En cas de vacances définitives au poste de Secrétaire Général et de Secrétaire Général Adjoint, les membres restants du BE sont tenus de convoquer*/
/* 			dans un délai maximum de trois (3) mois, une assemblée générale extraordinaire qui dissout le BE et organise de nouvelles élections. Passé ce délai,*/
/* 			un triumvirat représentatif, formé sur la base du choix des délégués des*/
/* 			sections majoritaires, convoque cette assemblée générale.</p>*/
/* 							</div>*/
/* 							<div class="statut"><legend>Article 40</legend>*/
/* 								<p>L’Assemblée Générale ou le Congrès désigne une commission ad hoc de*/
/* 			3 personnes qui se charge des élections. La dite commission recueille et*/
/* 			étudie les candidatures. Toutefois l’AG ou le Congrès peut faire des propositions.</p>*/
/* 								<p>Avant de procéder au vote, l’AG ou le Congrès doit se prononcer sur les*/
/* 			candidatures.</p>*/
/* 							</div>*/
/* 							*/
/* 			</div>*/
/* 			<div id="chapitre4.3">*/
/* 				<div class="chapitre-titre">Chapitre III: SANCTIONS</div>*/
/* 				<div class="statut"><legend>Article 41</legend>*/
/* 					<p>En cas de faute de tout membre portant atteinte à la vie de l’association,*/
/* l’AG ou le Congrès peut prononcer les sanctions suivantes à son encontre :*/
/* avertissement, blâme, suspension, exclusion ou radiation suivant la gravité*/
/* de la faute. Une réparation est demandée en cas de préjudices matériels ou*/
/* financiers non justifiés.</p>*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 42</legend>*/
/* 					<p>Seul le Congrès ou seule l’AG peut se prononcer sur la radiation d’un membre. L’intéressé est convoqué devant l’assemblée ; il dispose du droit de*/
/* réponse. Les sanctions sont prises par vote secret à la majorité des 3/4 des*/
/* membres présents pour la radiation et à la majorité des 2/3 pour les autres*/
/* sanctions.</p>*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 43</legend>*/
/* 					<p>Toute absence à une AG doit être justifiée dans les 7 jours qui suivent sous*/
/* peine d’une amende de 20dhs.</p>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 			<div id="chapitre4.4">*/
/* 				<div class="chapitre-titre">Chapitre IV: DÉMISSION</div>*/
/* 				*/
/* 				<div class="statut"><legend>Article 44</legend>*/
/* 					<p>Lorsque son activité est contraire aux objectifs et intérêts de la coordination en cas de contrainte majeure, tout membre du BE peut demander à*/
/* être déchargé de ses responsabilités. Il notifie une lettre à la commission*/
/* des membres d’honneur qui en apprécie le contenu et prend des décisions*/
/* définitives.</p>*/
/* 					<p>Lorsque son activité est contraire aux objectifs et intérêts de la coordination, tout membre peut présenter sa démission. Il notifie sa décision par*/
/* une lettre au BE.</p>*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 45</legend>*/
/* 					<p>Tout membre radié ou démissionnaire de la coordination perd tous les*/
/* droits au sein de celle-ci et ne bénéficie d’aucun remboursement.</p>*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 46</legend>*/
/* 					<p>Tout membre démissionnaire souhaitant sa réintégration notifie une lettre*/
/* au BE qui en concertation avec les membres d’honneur, décide de sa réintégration. En cas de réintégration, ce membre doit s’acquitter des cotisations*/
/* ordinaires et extraordinaires des années ou mois ayant couvert la durée de*/
/* son absence au sein de l’association. Il sera par ailleurs amendé par le BE.</p>*/
/* 				</div>*/
/* 				<div class="statut"><legend>Article 47</legend>*/
/* 					<p>En cas de démission du BE il se forme un Triumvirat représentatif formé*/
/* sur les mêmes bases comme stipulé dans l’article 39 et ayant les mêmes*/
/* fonctions.</p>*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 			</div>*/
/* 				*/
/* 		</div>*/
/* 		<!-- Partie 5 -->*/
/* 		<div id="partie5">*/
/* 			<div class="titre-partie">*/
/* 				Titre V  Dispositions générales*/
/* 			</div>*/
/* 			<div class="statut"><legend>Article 48</legend>*/
/* 				<p>Si par insuffisance d’effectif ou désintéressement total de la majorité de ses*/
/* membres, la viabilité de la coordination devient précaire, le BE peut proposer un projet de dissolution au Congrès. La dissolution devient effective si*/
/* le projet est adopté à la majorité des 3/4 des membres effectifs au scrutin*/
/* secret.</p>*/
/* 			</div>*/
/* 			<div class="statut"><legend>Article 49</legend>*/
/* 				<p>En cas de dissolution de la CESTOM il ne peut en aucune manière être procédé au partage des biens de la coordination entre ses membres. Ses biens*/
/* doivent être versés à une association similaire ou à une oeuvre de bienfaisance au Togo par un comité élu par le Congrès.</p>*/
/* 			</div>*/
/* 			<div class="statut"><legend>Article 50</legend>*/
/* 				<p>Le Congrès élabore en vue de l’application des présents statuts un règlement intérieur en annexe.</p>*/
/* 			</div>*/
/* 			<div class="statut"><legend>Article 51</legend>*/
/* 				<p>Tout cas non prévu par le présent statut peut être discuté à l’AG.</p>*/
/* 			</div>*/
/* 			<div class="statut"><legend>Article 52</legend>*/
/* 				<p>Les présents statuts prennent effet dès leur adoption par le Congrès.</p>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- Partie 6 -->*/
/* 		<div id="partie5">*/
/* 			<div class="titre-partie">*/
/* 				Titre VI  Annexe : Définitions*/
/* 			</div>*/
/* 			<div class="statut annexe"><legend>Définitions</legend>*/
/* 				<p>*/
/* 				<strong class="ft-size-20">Scrutin uninominal : </strong>*/
/* 				<span>Mode de scrutin dans lequel chaque “candidat” est*/
/* une unique personne physique. Cela exclut entre autres qu’un bureau*/
/* se présente de façon collective.</span>*/
/* 				*/
/* 				</p>*/
/* 				<p>*/
/* 				<strong class="ft-size-20">Majorité absolue : </strong>*/
/* 				<span>Mode de scrution dans lequel un candidat est élu, si, et*/
/* 					seulement si, il receuille au moins 50% des suffrages exprimés et une*/
/* 					voix. A défaut, un deuxième tour est organisé entre les deux premiers*/
/* 					candidats.*/
/* 					</span>*/
/* 				*/
/* 				</p>*/
/* 				<p>*/
/* 				<strong class="ft-size-20">Majorité simple : </strong>*/
/* 				<span>Mode de scrutin dans lequel le candidat ayant receuilli*/
/* 			le plus de voix est immédiatement élu (sans condition sur le pourcentage de voix favorables).</span>			*/
/* 					</div>*/
/* 		</div>*/
/* 		<div class="end-note">	*/
/* 		<div>Fait à Rabat le 25 Août 2007,</div>	*/
/* 		<div>Le Congrès.</div>	*/
/* 		</div>	*/
/* 		*/
/* 		<style>*/
/* 		.ft-size-20{*/
/* 			font-size: 20px;*/
/* 		}*/
/* 		.end-note {margin:15px;*/
/*     text-align: end;*/
/* }*/
/* 		.sub-title {*/
/*     margin-left: 150px;*/
/*     font-size: x-large;*/
/*     color: #F44336;*/
/*     margin-top: 50px;*/
/* }.sub-title-2 {*/
/*     margin-left: 185px;*/
/*     font-size: large;*/
/*     color: #F44336;*/
/*     margin-top: 20px;*/
/* }*/
/* 			h1 {*/
/* 				letter-spacing: 2px;*/
/* 				font-size: 33px;*/
/* 				color: #F44336;*/
/* 				margin-left: 150px;*/
/* 			}*/
/* 			.titre-partie {*/
/* 				color: #F44336;*/
/* 				text-transform: uppercase;*/
/* 				font-size: xx-large;*/
/* 				margin: 15px;*/
/* 				margin-left: 60px;*/
/* 				border-bottom: 4px solid #838383;*/
/* 				    margin-top: 200px;*/
/* 			}*/
/* 			.statut {*/
/* 				margin: 25px;*/
/* 				padding: 10px;*/
/* 				background-color: #ffffff;*/
/* 				border-color: black;*/
/* 				border: 1px solid #D2CECE;*/
/* 				border-radius: 10px;*/
/* 				width: 60%;*/
/* 				margin-left: 25%;*/
/* 				font-size: px;*/
/* 				-webkit-box-shadow: 7px 7px 5px 0 #A9A9A9;*/
/* 				box-shadow: 7px 7px 5px 0 #A9A9A9;*/
/* 				font: large "trebuchet ms", helvetica, arial, sans-serif;*/
/* 				background-color: white;*/
/* 				word-wrap: break-word;*/
/* 			}*/
/* 			legend {*/
/* 				display: block;*/
/* 				width: 100%;*/
/* 				padding: 0;*/
/* 				margin-bottom: 20px;*/
/* 				font-size: 21px;*/
/* 				line-height: inherit;*/
/* 				color: #F44336;*/
/* 				border: 0;*/
/* 				border-bottom: 1px solid #e5e5e5;*/
/* 				font: x-large "trebuchet ms", helvetica, arial, sans-serif;*/
/* 				text-transform: uppercase;*/
/* 				background-color: white;*/
/* 				word-wrap: break-word;*/
/* 			}*/
/* 			.def-cestom {*/
/* 				font-size: 20px;*/
/* 				text-align: center;*/
/* 			}*/
/* 			.preambule-u {*/
/* 				margin-left: 60px;*/
/* 				max-width: 60%;*/
/* 				padding: 5px;*/
/* 			}*/
/* 			h1.title-cestom-status {*/
/* 				border-bottom: 5px solid black;*/
/* 				text-align: center;*/
/* 			}*/
/* 			.revision-statuts {*/
/* 				text-align: center;*/
/* 				margin-top: 50px;*/
/* 			}.preambule {*/
/* 				text-align: left;*/
/* 				margin: 10px;*/
/* 				border-bottom: 2px solid #838383;*/
/* 				border-top: 2px solid #838383;*/
/* 				padding: 50px;*/
/* 				font-size: xx-large;*/
/* 				margin-top: 200px;*/
/* 				margin-bottom: 30px;*/
/* 			}.italic {*/
/* 				font-style: italic;*/
/* 				font-family: Andale Mono;*/
/* 				margin-bottom: 50px;*/
/* 			}body {*/
/* 				background-color: rgba(228, 228, 228, 0.68);*/
/* 			}*/
/* 			.chapitre-titre {*/
/* 				color: #F44336;*/
/* 				font-size: x-large;*/
/* 				margin: 15px;*/
/* 				margin-left: 90px;*/
/* 				BORDER-BOTTOM: 1px solid red;*/
/* 				margin-top: 75px;*/
/* 			}*/
/* 		</style>*/
/* 		*/
/* 	</div>*/
/* 		*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     {{ parent() }}*/
/* 	*/
/* {% endblock %}*/
/* */
