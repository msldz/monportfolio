<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Massil BENNACER</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="stylesheet" href="assets/style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <?php require_once 'nav.php'; ?>
    <nav id="navbar" class="navbar">
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul id="nav-menu">
            <?php foreach ($navigation as $page => $ancre): ?>
                <li>
                    <a class="nav-link" href="<?= $ancre ?>"><?= $page ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <header id="accueil" class="hero-section" href="#accueil">
        <div class="container">
            
            <h1 class="hero-title">
                <?= $hero['Salutations'] ?> <br>
                <span class="highlight-name"><?= $hero['Name'] ?></span> 
            </h1>
            
            <div class="hero-text">
                <p class="hero-lead"><?= $hero['Etude'] ?></p>
                <p class="hero-desc"><?= $hero['Stage'] ?></p>
        
            <div class="hero-btn-container">
                <a href="#contact" class="btn btn-primary">Me contacter</a>
                <a href="<?= $hero['cv_link'] ?>" class="btn btn-secondary" target="_blank">Télécharger mon CV</a>
            </div>
        </div>
    </header>

    <hr class="separator">

     <section id="competences" class="skills-section">
        <div class="container">
            <h2>Compétences</h2>
            <div class="skills-cards">
                <div class="card">
                    <h3>Frontend</h3>
                    <?php foreach ($frontend_skills as $skill): ?>
                        <div class="skill-item">
                            <i class="<?= $skill['icon'] ?>"></i>
                            <p><?= $skill['name'] ?></p>
                            <p><?= $skill['level'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="card">
                    <h3>Backend</h3>
                    <?php foreach ($backend_skills as $skill): ?>
                        <div class="skill-item">
                            <i class="<?= $skill['icon'] ?>"></i>
                            <p><?= $skill['name'] ?></p>
                            <p><?= $skill['level'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="card">
                    <h3>Soft Skills</h3>
                    <ul class="soft-skills-list">
                        <?php foreach ($soft_skills as $skill): ?>
                            <li><?= $skill ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <hr class="separator">

    <section id="projects" class="projects-section">
        <div class="container">
            <h2>Projets</h2>
            <div class="projects-grid">
                <?php $count = 0; foreach ($projects as $project): 
                    if ($count >= 3) break;
                    $count++;
                ?>
                    <div class="project-card" data-title="<?= htmlspecialchars($project['title'], ENT_QUOTES) ?>" data-description="<?= htmlspecialchars ($project['description']) ?>" data-github="<?= $project['github'] ?>" 
                    data-sites="<?= htmlspecialchars(json_encode($project['sites'] ?? [['label' => 'Site', 'url' => $project['site'] ?? '']])) ?>" 
                    data-show-github="<?= $project['show_github'] ? 'true' : 'false' ?>">
                        <h3><?= $project['title'] ?></h3>
                        <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
                        <button class="btn btn-primary">Voir plus</button>
                    </div>
                <?php endforeach; ?>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="projects.php" class="btn btn-primary">Voir les autres projets</a>
            </div>
        </div>
    </section>

    <!-- Modale pour les projets -->
    <div id="project-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modal-title"></h2>
            <p id="modal-description"></p>
            <div class="modal-buttons">
                <a id="modal-github" href="#" target="_blank" class="btn btn-secondary"><i class="fab fa-github"></i> Voir le code</a>
            </div>
        </div>
    </div>

    <hr class="separator">    
    
    <section id="contact" class="contact-section">
        <div class="container">
            <h2>Contact</h2>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <p><?= $contact['email'] ?></p>
                    
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <p><?= $contact['phone'] ?></p>
                </div>
                <div class="contact-item">
                    <i class="fab fa-linkedin"></i>
                    <a href="<?= $contact['linkedin'] ?>" target="_blank">Voir mon LinkedIn</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2026 Massil BENNACER. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>