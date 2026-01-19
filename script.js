const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    hamburger.classList.toggle('active');
});

// Gestion de la modale projets
const modal = document.getElementById('project-modal');
const modalTitle = document.getElementById('modal-title');
const modalDescription = document.getElementById('modal-description');
const modalGithub = document.getElementById('modal-github');
const modalSite = document.getElementById('modal-site');
const closeBtn = document.querySelector('.close');

document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('click', () => {
        modal.style.display = 'block';
        setTimeout(() => modal.classList.add('show'), 10);
        modalTitle.textContent = card.dataset.title;
        modalDescription.innerHTML = card.dataset.description;
        modalGithub.href = card.dataset.github;
        document.body.style.overflow = 'hidden';
        
        // Gérer les sites multiples
        const sites = JSON.parse(card.dataset.sites);
        const modalButtons = document.querySelector('.modal-buttons');
        
        // Vider les boutons de sites existants
        const existingSiteButtons = modalButtons.querySelectorAll('[data-site-button]');
        existingSiteButtons.forEach(btn => btn.remove());
        
        // Ajouter les boutons pour chaque site
        sites.forEach(site => {
            const button = document.createElement('a');
            button.href = site.url;
            button.target = '_blank';
            button.className = 'btn btn-primary';
            button.setAttribute('data-site-button', 'true');
            button.innerHTML = `<i class="fas fa-external-link-alt"></i> ${site.label}`;
            modalButtons.appendChild(button);
        });
        
        // Masquer/afficher le bouton GitHub
        if (card.dataset.showGithub === 'true') {
            modalGithub.style.display = 'inline-block';
        } else {
            modalGithub.style.display = 'none';
        }
    });
});

closeBtn.addEventListener('click', () => {
    modal.classList.remove('show');
    document.body.style.overflow = 'auto';
});

window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.classList.remove('show');
        document.body.style.overflow = 'auto';
    }
});

modal.addEventListener('transitionend', () => {
    if (!modal.classList.contains('show')) {
        modal.style.display = 'none';
    }
});


