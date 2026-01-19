<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les Projets - Massil BENNACER</title>
    
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
                    <a class="nav-link" href="index.php<?= $ancre ?>"><?= $page ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <header style="margin-top: 150px; padding-bottom: 40px;">
        <div class="container">
            <h1>Tous les Projets</h1>
        </div>
    </header>

    <hr class="separator">

    <section class="projects-section">
        <div class="container">
            <?php foreach ($competences as $comp): ?>
                <div style="margin-bottom: 60px;">
                    <h2 style="font-size: 1.8rem; margin-bottom: 30px; color: #007bff;"><?= $comp['name'] ?></h2>
                    <div class="projects-grid">
                        <?php 
                        $found = false;
                        foreach ($projects as $project) {
                            // Vérifier si ce projet appartient à cette compétence
                            if (isset($project['sae']) && in_array($project['sae'], $comp['sae'])) {
                                $found = true;
                        ?>
                            <div class="project-card" data-title="<?= htmlspecialchars($project['title'], ENT_QUOTES) ?>" data-description="<?= htmlspecialchars($project['description']) ?>" data-github="<?= $project['github'] ?>" 
                            data-sites="<?= htmlspecialchars(json_encode($project['sites'] ?? [['label' => 'Site', 'url' => $project['site'] ?? '']])) ?>" 
                            data-show-github="<?= $project['show_github'] ? 'true' : 'false' ?>">
                                <h3><?= $project['title'] ?></h3>
                                <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
                                <button class="btn btn-primary">Voir plus</button>
                            </div>
                        <?php 
                            }
                        }
                        if (!$found) {
                            echo '<p style="grid-column: 1 / -1; text-align: center; color: #666;">Aucun projet pour cette compétence</p>';
                        }
                        ?>
                    </div>
                </div>
            <?php endforeach; ?>
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