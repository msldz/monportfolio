<?php 

$navigation = [
    "Accueil" => "#accueil",
    "Compétences" => "#competences",
    "Projets" => "#projects", // Je mettrais Projets avant À propos, c'est ce qu'on veut voir en premier
    "Contact" => "#contact"
];



$hero = [
    "Salutations" => "Bonjour, je m'appelle ",
    "Name" => "Massil BENNACER",
    "Etude" => "Actuellement en <strong>deuxième année de BUT Métiers du Multimédia et de l'Internet</strong> dans le parcours <strong>développement web et dispositifs interactifs</strong>.",
    "Stage" => "Je suis actuellement à la recherche d'un <strong>stage de 10 semaines</strong> à compter du 13 avril 2026 afin de valider ma deuxième année de BUT MMI.",
    "cv_link" => 'BENNACERMassil-CurriculumVitae.pdf'
];

$frontend_skills = [
        ['icon' => 'fab fa-html5', 'name' => 'HTML', 'level' => 'Expérimenté'],
        ['icon' => 'fab fa-css3-alt', 'name' => 'CSS', 'level' => 'Expérimenté'],
        ['icon' => 'fab fa-js-square', 'name' => 'JavaScript', 'level' => 'Intermédiaire'],
        ['icon' => 'fab fa-css3-alt', 'name' => 'TailwindCSS', 'level' => 'Débutant']
    ];
    
    $backend_skills = [
        ['icon' => 'fab fa-php', 'name' => 'PHP', 'level' => 'Expérimenté'],
        ['icon' => 'fas fa-database', 'name' => 'MySQL', 'level' => 'Intermédiaire'],
        ['icon' => 'fab fa-python', 'name' => 'Python', 'level' => 'Débutant'],
        ['icon' => 'fab fa-wordpress', 'name' => 'WordPress', 'level' => 'Intermédiaire']
    ];
    
    $soft_skills = [
        'Travail en équipe',
        'Organisation',
        'Communication',
        'Adaptabilité',
        'À l’écoute'
    ];

    // Compétences et leurs projets associés (SAE)
    $competences = [
        [
            'name' => 'Comprendre les écosystèmes, les besoins des utilisateurs et les dispositifs de communication numérique',
            'sae' => ['sae101', 'sae201', 'sae301', 'sae302', 'sae303']
        ],
        [
            'name' => 'Concevoir ou co-concevoir une réponse stratégique pertinente à une problématique complexe',
            'sae' => ['sae102', 'sae102', 'sae301', 'sae302']
        ],
        [
            'name' => 'Exprimer un message avec les médias numériques pour informer et communiquer',
            'sae' => ['sae103', 'sae104', 'sae202', 'sae302', 'sae303']
        ],
        [
            'name' => 'Développer pour le web et les médias numériques',
            'sae' => ['sae1035', 'sae202', 'sae203', 'sae301', 'sae303']
        ],
        [
            'name' => 'Entreprendre dans le secteur du numérique',
            'sae' => ['sae106', 'sae202', 'sae204', 'sae301', 'sae302']
        ]
    ];

    $projects = [ //semestre 1
    //Sae101
        [
            'sae' => 'sae101',
            'title' => 'Auditer une communication numérique',
            'image' => 'assets/images/Sae101.png', // Chemin vers l'image
            'description' => '<p>Dans le cadre de ce projet universitaire (Sae101), j\'ai participé à :</p>
                                <ul>
                                    <li>La réalisation d\'un audit sémiotique d\'une communication numérique en décomposant la structure d\'une page web en "Régions" et "Espaces" pour comprendre la hiérarchie de l\'information en faisant :</li>
                                        <ul>
                                            <li>Une analyse de l\'identité visuelle et des codes graphiques d\'une marque de luxe (Hermès) pour en déduire ses intentions de communication.</li>
                                            <li>À structurer une analyse critique et à rédiger une conclusion (analyse textuelle et visuelle).</li>
                                        </ul>
                                    <li>La réalisation d\'un audit de qualité web en suivant une liste de critères d\'acceptation.</li>
                                    <li>La réalisation d\'une arborescende d\'un site web (Hermès).</li>
                                    
                                </ul>
                                <p>Les compétences que j\'ai acquise sont les suivantes : </p>
                                <ul>
                                    <li>AC 11.02 : Évaluer un site web, un produit multimédia ou un dispositif interactif existant en s\'appuyant sur des guides de bonnes pratiques</li>
                                    <li>AC-11.04 : Analyser des formes médiatiques et leur séméiotique</li>
                                    <li>AC11.05 : Identifier les cibles - Audit du contexte, du chiffre d\'affaires, du marketing, </li>
                                </ul>',
            'show_github' => false,
            'github' => '',
            'sites' => [
                ['label' => 'Audit Sémiotique', 'url' => 'assets/pdf/AUDITSÉMIOTIQUE-Sae101.pdf'],
                ['label' => 'Audit Qualité Web', 'url' => 'assets/pdf/AuditQualitéWeb.pdf'],
                ['label' => 'Arborescence', 'url' => 'assets/pdf/arborescenceHermes.pdf']
            ]
        ],
        //Sae102
        [
            'sae' => 'sae102',
            'title' => 'Recommandation de communication numérique',
            'image' => 'assets/images/Sae102.png', // Chemin vers l'image
            'description' => '<p>Dans le cadre de ce projet universitaire (SAÉ 1.02), j\'ai participé à :</p>
                                <ul>
                                    <li>La création d\'une agence de communication fictive (In\'Com) en définissant son identité, son équipe et son modèle économique (benchmark et plan de financement).</li>
                                    <li>L\'élaboration d\'une recommandation de communication numérique pour un annonceur (Marionnaud) à travers :</li>
                                        <ul>
                                            <li>La réalisation d\'audits complets : audit du contexte (histoire, SWOT), audit marketing (cibles, persona, mix-marketing) et audit financier (analyse du bilan et compte de résultat).</li>
                                            <li>La conception d\'une stratégie de communication axée sur la modernisation, l\'expérience client et l\'écoresponsabilité.</li>
                                            <li>La création de supports visuels et la définition de KPI pour évaluer la performance.</li>
                                        </ul>
                                </ul>
                                <p>Les compétences que j\'ai acquises sont les suivantes : </p>
                                <ul>
                                    <li>AC12.03 : Proposer une recommandation marketing (cibles, objectifs, points de contact)</li>
                                    <li>AC12.04 : Proposer une stratégie de communication</li>
                                    <li>Analyse de l\'environnement concurrentiel (Mapping, Benchmark) et diagnostic financier</li>
                                </ul>',
            'show_github' => false,
            'github' => '',
            'sites' => [
                ['label' => 'Agence de Com', 'url' => 'assets/pdf/InCOM.pdf'],
                ['label' => 'Recommandation de Com', 'url' => 'assets/pdf/RecommandationDeCommunication.pdf']
            ]
        ],
        //Sae103
        [
            'sae' => 'sae103',
            'title' => 'Design Graphique : Festival DixSept sur InDesign',
            'image' => 'assets/images/Sae103.png', // Chemin vers l'image
            'description' => '<p>Dans le cadre de ce projet universitaire (SAÉ 1.03), j\'ai réalisé un travail de conception et de production graphique pour la structure culturelle fictive "DixSept". J\'ai réalisé :</p>
                                <ul>
                                    <li>La phase de conception visuelle à travers la réalisation de croquis et de maquettes pour structurer la mise en page avant la production.</li>
                                    <li>La création complète d\'un livret de programme de 42 pages au format A5 pour le festival « Formule Bédé » en effectuant :</li>
                                        <ul>
                                            <li>L\'apprentissage et l\'utilisation du logiciel Adobe InDesign pour composer le document.</li>
                                            <li>La gestion des contraintes techniques d\'impression (fonds perdus, marges, gouttières, colonnes) pour assurer une structure cohérente.</li>
                                        </ul>
                                </ul>
                                <p>Les compétences que j\'ai acquises sont les suivantes : </p>
                                <ul>
                                    <li>AC13.02 : Produire des pistes graphiques et des planches d\'inspiration</li>
                                    <li>AC13.03 : Créer, composer et retoucher des visuels</li>
                                    <li>AC13.06 : Optimiser les médias en fonction de leurs usages et supports de diffusion</li>
                                    <li>Maîtrise de la chaîne graphique et des règles de lisibilité et de hiérarchisation de l\'information.</li>
                                </ul>',
            'show_github' => false,
            'github' => '',
            'sites' => [
                ['label' => 'Agence de Com', 'url' => 'assets/pdf/Programme-DixSept.pdf']
            ]
        ],
        //Sae104
        [
            'sae' => 'sae104',
            'title' => 'Production Audio et Vidéo',
            'image' => 'assets/images/Sae104.png', // Chemin vers l'image
            'description' => '<p>Dans le cadre de ce projet universitaire (SAÉ 1.05), j\'ai participé à la production d\'une vidéo courte intitulée "L\'Art de l\'Exposition". J\'ai contribué à :</p>
                                <ul>
                                    <li>La phase de post production en équipe avec le dossier scénario comprenant :</li>
                                        <ul>
                                            <li>L\'écriture du scénario et des dialogues mettant en scène une stagiaire découvrant les bases de l\'exposition caméra.</li>
                                            <li>La rédaction de la note d\'intention de réalisation.</li>
                                            <li>La conception du storyboard et du découpage séquentiel pour préparer le tournage.</li>
                                        </ul>
                                    <li>L\'organisation du tournage avec la réalisation d\'un plan de tournage et des feuilles de service pour coordonner l\'équipe technique (Réalisatrice, Cadreuse, Son, etc.).</li>
                                    <li>La réalisation technique et artistique, en occupant des rôles définis (ex: Voix OFF, Cadreur, etc.) pour produire le contenu final.</li>
                                </ul>
                                <p>Les compétences que j\'ai acquises sont les suivantes : </p>
                                <ul>
                                    <li>AC14.03 : Produire un contenu audio et vidéo (Tournage, Prise de son, Montage)</li>
                                    <li>AC11.03 : Écrire pour les médias numériques (Scénarisation, Storytelling)</li>
                                    <li>AC15.03 : Gérer un projet de communication numérique (Planification, Travail en équipe)</li>
                                    <li>Maîtrise du langage cinématographique et des documents techniques de production audiovisuelle (Bible, Script, Dépouillement).</li>
                                </ul>',
            'show_github' => false,
            'github' => '',
            'sites' => [
                ['label' => 'Dossier Scénario', 'url' => 'assets/pdf/DossierScénario.pdf'],
                ['label' => 'Film', 'url' => 'https://www.youtube.com/watch?v=zDX0ncG708E']
            ]
        ],
        //Sae105
        [
            'sae' => 'sae105',
            'title' => 'Site Web du BUT MMI',
            'image' => 'assets/images/Sae105.png', // Chemin vers l'image
            'description' => '<ul>
                                    <li><i class="fab fa-html5"></i> HTML</li>
                                    <li><i class="fab fa-css3-alt"></i> CSS</li>
                                    <li><i class="fab fa-php"></i> PHP</li>
                                </ul>
                                <p>Dans le cadre de ce projet universitaire (Sae105), j\' ai appris :</p>
                                <ul>
                                    <li>Structure & Design : Maîtrise de l\'HTML5 et du CSS3.</li>
                                    <li>Programmation Dynamique : Traitement de formulaires et logique serveur en PHP.</li>
                                </ul>
                                <p>Les compétences que j\'ai acquise sont les suivantes : </p>
                                <ul>
                                    <li>AC14.01 : Exploiter de manière autonome un environnement de développement efficace et productif</li>
                                    <li>AC14.02 : Produire des pages Web statiques et fluides utilisant un balisage sémantique efficace et des interactions simples</li>
                                    <li>AC14.03 : Générer des pages Web ou vues à partir de données structurées incluant des interactions simples</li>
                                    <li>AC14.04 : Mettre en ligne une application Web en utilisant une solution d\'hébergement standard</li>
                                </ul>',
            'show_github' => true, // Affiche le bouton GitHub
            'github' => 'https://github.com/msldz/sae105',
            'sites' => [
                ['label' => 'Voir le projet', 'url' => 'https://bennacer.alwaysdata.net/S1/sae105/']
            ]
        ],
        //Sae106
        [
            'sae' => 'sae106',
            'title' => 'Gérer un projet de communication numérique',
            'image' => 'assets/images/Sae106.png', // Chemin vers l'image
            'description' => '<p>Dans le cadre de ce projet universitaire (SAÉ 1.06), j\'ai mené un travail d\'analyse sur la gestion d\'un projet de communication numérique en prenant pour étude de cas la maison Hermès. J\'ai participé à :</p>
                                <ul>
                                    <li>La réalisation d\'un audit global de l\'organisation structuré en plusieurs axes :</li>
                                        <ul>
                                            <li>Un audit du contexte et marketing : Caractérisation de l\'organisation (SWOT, PESTEL) et analyse des 4P pour comprendre le positionnement luxe et artisanal de la marque.</li>
                                            <li>Un audit financier : Analyse de la santé économique, de l\'évolution du chiffre d\'affaires et de la rentabilité par secteur géographique.</li>
                                            <li>Un audit légal et juridique : Vérification de la conformité au droit du numérique, incluant le respect du RGPD, la gestion des cookies, la protection des données personnelles et les mentions légales obligatoires.</li>
                                        </ul>
                                    <li>La gestion de projet en équipe avec une répartition des tâches pour faire l\'ensemble des domaines analysés (Marketing, Finance, Juridique).</li>
                                </ul>
                                <p>Les compétences que j\'ai acquises sont les suivantes : </p>
                                <ul>
                                    <li>AC16.01 : Appréhender l\'écosystème numérique et ses enjeux juridiques (RGPD, Propriété intellectuelle)</li>
                                    <li>AC15.02 : Analyser les modèles économiques et les indicateurs financiers d\'un projet</li>
                                    <li>AC12.01 : Analyser une stratégie de communication et un positionnement marketing</li>
                                    <li>Travail collaboratif et synthèse de données.</li>
                                </ul>',
            'show_github' => false,
            'github' => '',
            'sites' => [
                ['label' => 'Audit du Contexte', 'url' => 'assets/pdf/AuditDuContexte.pdf']
            ]
        ],
        //semestre 2
        //Sae201
        [
            'sae' => 'sae201',
            'title' => 'Explorer les usages numériques',
            'image' => 'assets/images/Sae201.png', // Chemin vers l'image
            'description' => '<p>Dans le cadre de ce projet universitaire (SAÉ 2.01), j\'ai mené une étude sur les usages du numérique en me basant sur l\'écosystème des FabLabs. J\'ai participé à :</p>
                                <ul>
                                    <li>La réalisation d\'un dossier de veille et d\'analyse stratégique sur les FabLabs, comprenant :</li>
                                        <ul>
                                            <li>L\'étude de l\'histoire et de l\'écosystème des FabLabs (origine MIT, typologie des lieux).</li>
                                            <li>La réalisation de benchmarks (structurels et communicationnels) et d\'un SWOT pour identifier les forces et opportunités du modèle.</li>
                                            <li>La définition d\'une problématique : « Comment les FabLab peuvent-ils améliorer leurs accessibilités ? ».</li>
                                        </ul>
                                    <li>La mise en œuvre d\'une méthodologie d\'enquête qualitative et quantitative :</li>
                                        <ul>
                                            <li>Le cadrage du sujet via la méthode QQOQCP pour définir les axes de recherche auprès du public étudiant.</li>
                                            <li>La conception d\'un guide d\'entretien organisé par thèmes (temps libre, projets, information, lieux fréquentés).</li>
                                            <li>La réalisation d\'un entretien avec un étudiant suivi d\'une analyse pour identifier les pistes d\'amélioration.</li>
                                            <li>La mise en place d\'une bible de codage pour structurer les données d\'un questionnaire quantitatif (types de questions, codage des réponses).</li>
                                        </ul>
                                </ul>
                                <p>Les compétences que j\'ai acquises sont les suivantes : </p>
                                <ul>
                                    <li>AC21.01 : Déployer une méthodologie d\'enquête (Qualitative et Quantitative)</li>
                                    <li>AC25.01 : Analyser des usages et des pratiques numériques</li>
                                    <li>AC22.02 : Veille informationnelle et analyse concurrentielle (Benchmark, SWOT)</li>
                                    <li>Construction d\'outils de collecte de données (Guides, Questionnaires).</li>
                                </ul>',
            'show_github' => false,
            'github' => '',
            'sites' => [
                ['label' => 'Voir le projet', 'url' => 'https://drive.google.com/drive/folders/1dD6AP1_ftCEjhAc870_pT6aVWFuaAkrc?usp=sharing']
            ]
        ],
        //Sae202
        [
            'sae' => 'sae202',
            'title' => 'Concevoir un produit/service et sa communication',
            'image' => 'assets/images/Sae202.png', // Chemin vers l'image
            'description' => '<p>Dans le cadre de ce projet universitaire (SAÉ 2.02), j\'ai participé à l\'élaboration d\'une stratégie de communication pour promouvoir la 2ème édition du festival « Les Talents de l\'IUT ». J\'ai contribué à :</p>
                                <ul>
                                    <li>La conception du plan de communication global, incluant :</li>
                                        <ul>
                                            <li>La définition des objectifs de communication (Cognitif, Affectif, Conatif) pour mobiliser les étudiants et partenaires.</li>
                                            <li>L\'analyse des cibles (étudiants, jury, presse locale) et le choix des canaux de diffusion adaptés (Instagram, TikTok, LinkedIn).</li>
                                        </ul>
                                    <li>La définition de la ligne éditoriale et la production des supports opérationnels :</li>
                                        <ul>
                                            <li>Choix d\'un ton dynamique et inclusif, et structuration des formats de contenus (Live, Stories, Interviews).</li>
                                            <li>Rédaction d\'un communiqué de presse professionnel pour annoncer l\'événement et ses catégories (Art vivant, Graphisme, Innovation...).</li>
                                            <li>Planification des actions via un calendrier rédactionnel pour organiser la diffusion avant, pendant et après l\'événement.</li>
                                        </ul>
                                </ul>
                                <p>Les compétences que j\'ai acquises sont les suivantes : </p>
                                <ul>
                                    <li>AC21.02 : Concevoir une stratégie de communication numérique (Ciblage, Choix des médias)</li>
                                    <li>AC21.03 : Produire des contenus pour les médias numériques (Rédactionnel, formats réseaux sociaux)</li>
                                    <li>AC22.01 : Planifier et gérer des actions de communication (Calendrier, Rétroplanning)</li>
                                    <li>Adaptation du ton et du message en fonction des supports et des publics visés.</li>
                                </ul>',
            'show_github' => false,
            'github' => '',
            'sites' => [
                ['label' => 'Voir le projet', 'url' => 'https://drive.google.com/drive/folders/1A4fFCgtVRA8mF4BKuoL0lblKUYtAIwvS?usp=sharing']
            ]
        ],
        //Sae203
        [
            'sae' => 'sae203',
            'title' => 'Site Web BUT MMI avec une Base de Données',
            'image' => 'assets/images/Sae203.png', // Chemin vers l'image
            'description' => '<ul>
                                    <li><i class="fab fa-html5"></i> HTML</li>
                                    <li><i class="fab fa-css3-alt"></i> CSS</li>
                                    <li><i class="fab fa-php"></i> PHP</li>
                                    <li><i class="fas fa-database"></i> MySQL</li>
                                </ul>
                                <p>Dans le cadre de ce projet universitaire (Atelier PHP), j\'ai appris :</p>
                                <ul>
                                    <li>Gestion de Base de Données (BDD) : Création de tables et utilisation du langage SQL.</li>
                                    <li>Architecture de l\'information : Organisation du contenu récupéré dynamiquement avec PHP.</li>
                                </ul>
                                <p>Les compétences que j\'ai acquise sont les suivantes : </p>
                                <ul>
                                    <li>AC14.01 : Exploiter de manière autonome un environnement de développement efficace et productif</li>
                                    <li>AC14.02 : Produire des pages Web statiques et fluides utilisant un balisage sémantique efficace et des interactions simples</li>
                                    <li>AC14.03 : Générer des pages Web ou vues à partir de données structurées incluant des interactions simples</li>
                                    <li>AC14.04 : Mettre en ligne une application Web en utilisant une solution d\'hébergement standard</li>
                                </ul>',
            'show_github' => false,
            'github' => '',
            'sites' => [
                ['label' => 'Voir le projet', 'url' => 'https://sae-groupe.alwaysdata.net/sae203/code/']
            ]
        ],
        //Sae204
        [
            'sae' => 'sae204',
            'title' => 'Construire sa présence en ligne',
            'image' => 'assets/images/Sae204.png', // Chemin vers l'image
            'description' =>'<p>Dans le cadre de ce projet universitaire (SAÉ 2.03), j\'ai travaillé sur la construction de la présence en ligne de notre marque fictive « Digital Health Zone » (DHZ), spécialisée dans la « Health Tech » sportive. J\'ai participé à :</p>
                                <ul>
                                    <li>L\'analyse stratégique du marché à travers un benchmark concurrentiel (Nike, Whoop, Garmin) pour identifier les codes visuels et les stratégies de communication du secteur.</li>
                                    <li>La conception de l\'identité de marque et de la charte graphique :</li>
                                        <ul>
                                            <li>Définition du naming, du slogan « Go harder, Get smarter » et de la proposition de valeur axée sur la performance.</li>
                                            <li>Choix typographiques (Montserrat, Roboto) et colorimétriques (Noir, Blanc, Métallisé) pour affirmer un positionnement haut de gamme et technologique.</li>
                                        </ul>
                                    <li>L\'élaboration de la stratégie de communication globale :</li>
                                        <ul>
                                            <li>Identification et segmentation des cibles (Athlètes professionnels, Staff médical, Amateurs de tech).</li>
                                            <li>Planification des actions de communication sur différents supports : affichage print, réseaux sociaux (Instagram/TikTok), site web et newsletter.</li>
                                        </ul>
                                </ul>
                                <p>Les compétences que j\'ai acquises sont les suivantes : </p>
                                <ul>
                                    <li>Concevoir une identité visuelle et une charte graphique cohérente avec un positionnement marketing.</li>
                                    <li>Réaliser une veille concurrentielle et analytique (Benchmark).</li>
                                    <li>Définir une stratégie de présence en ligne adaptée à des cibles spécifiques.</li>
                                    <li>Déployer une communication transmédiatique (Print et Web).</li>
                                </ul>',
            'show_github' => false,
            'github' => '',
            'sites' => [
                ['label' => 'Digital Health Zone', 'url' => 'assets/pdf/DHZ.pdf']
            ]
        ],
        [
            'sae' => 'sae203',
            'title' => 'Dynamisation d\'un site web',
            'image' => 'assets/images/Mamba.jpg', // Chemin vers l'image
            'description' => '<ul>
                                    <li><i class="fab fa-html5"></i> HTML</li>
                                    <li><i class="fab fa-php"></i> PHP</li>
                                </ul>
                                <p>Dans le cadre de ce projet universitaire (Sae203), j\'ai appris :</p>
                                <ul>
                                    <li>Dynamiser un site web statique avec PHP via les boucles et les tableaux multidimensionnelles.</li>
                                    <li>L\'optimisation du code et des performances.</li>
                                </ul>
                                ',
            'show_github' => true,
            'github' => 'https://github.com/msldz/Mamba',
            'sites' => [
                ['label' => 'Voir le projet', 'url' => 'https://bennacer.alwaysdata.net/S3/Atelier-php/Mamba/']
            ]
        ],
        //Sae301
        [
            'sae' => 'sae301',
            'title' => 'Concevoir et développer une expérience utilisateur',
            'image' => 'assets/images/SaeEnCours.jpg', // Chemin vers l'image
            'description' => '<p>Projet en cours de réalisation</p>
                                ',
            'show_github' => false,
            'github' => '',
            'sites' => []
        ],
        //Sae303
        [
            'sae' => 'sae303',
            'title' => 'Produire des contenus pour une communication plurimédia',
            'image' => 'assets/images/SaeEnCours.jpg', // Chemin vers l'image
            'description' => '<p>Projet en cours de réalisation</p>
                                ',
            'show_github' => false,
            'github' => '',
            'sites' => []
        ],
        [
            'sae' => 'sae302',
            'title' => 'Concevoir des visualisation de données',
            'image' => 'assets/images/SaeEnCours.jpg', // Chemin vers l'image
            'description' => '<p>Projet en cours de réalisation</p>
                                ',
            'show_github' => false,
            'github' => '',
            'sites' => []
        ]
        // Ajoutez d'autres projets ici
    ];

    $contact = [
        'email' => 'massil.benna17@gmail.com',
        'phone' => '+33 7 49 61 39 53',
        'linkedin' => 'https://www.linkedin.com/in/massil-bennacer/'
    ];
?>
