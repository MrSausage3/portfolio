<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styleIA.css">
  </head>
  <body>
    <canvas id="stars1"></canvas>
    <canvas id="stars2"></canvas>
    <canvas id="stars3"></canvas>
    <nav>
      <button class="hamburger" id="hamburger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
        </button>
    </nav>
    <div class="nav-indicator">
  <svg width="60" height="320" viewBox="0 0 60 320">
    <!-- Lignes de constellation -->
    <line x1="30" y1="20"  x2="18" y2="90"  stroke="rgba(168,196,224,0.2)" stroke-width="1"/>
    <line x1="18" y1="90"  x2="42" y2="160" stroke="rgba(168,196,224,0.2)" stroke-width="1"/>
    <line x1="42" y1="160" x2="22" y2="230" stroke="rgba(168,196,224,0.2)" stroke-width="1"/>
    <line x1="22" y1="230" x2="38" y2="300" stroke="rgba(168,196,224,0.2)" stroke-width="1"/>

    <!-- Petites étoiles décoratives -->
    <circle cx="10" cy="55"  r="1.5" fill="rgba(168,196,224,0.3)"/>
    <circle cx="50" cy="125" r="1"   fill="rgba(168,196,224,0.3)"/>
    <circle cx="8"  cy="195" r="1.5" fill="rgba(168,196,224,0.3)"/>
    <circle cx="52" cy="265" r="1"   fill="rgba(168,196,224,0.3)"/>

    <!-- Points principaux (cliquables) -->
    <circle class="point actif" cx="30" cy="20"  r="4" onclick="scrollTo({top:0,behavior:'smooth'})" title="Haut de page"/>
<circle class="point"       cx="18" cy="90"  r="4" onclick="document.querySelector('h2').scrollIntoView({behavior:'smooth'})" title="À propos"/>
<circle class="point"       cx="42" cy="160" r="4" onclick="document.querySelectorAll('h2')[1].scrollIntoView({behavior:'smooth'})" title="Objectifs"/>
<circle class="point"       cx="22" cy="230" r="4" onclick="document.querySelectorAll('h2')[2].scrollIntoView({behavior:'smooth'})" title="Compétences"/>
<circle class="point"       cx="38" cy="300" r="4" onclick="scrollTo({top:document.body.scrollHeight,behavior:'smooth'})" title="Bas de page"/>
</svg>
</div>
    <div class="socials">
  <a href="https://www.linkedin.com/in/ton-profil" target="_blank" title="LinkedIn">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
      <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
    </svg>
  </a>
  <a href="https://github.com/ton-profil" target="_blank" title="GitHub">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
      <path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.73.083-.73 1.205.085 1.84 1.237 1.84 1.237 1.07 1.834 2.807 1.304 3.492.997.108-.775.418-1.305.762-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.605-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.295 24 12c0-6.63-5.37-12-12-12z"/>
    </svg>
  </a>
  <a href="https://www.instagram.com/ton-profil" target="_blank" title="Instagram">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
      <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
    </svg>
  </a>
</div>
    <div class="liens">
      <ul>
        <li><a href="coord.php">Me contacter</a></li>
        <li><a href="cv.pdf" download>Mon CV</a></li>
      </ul>
    </div>

    <div class="menu" id="menu">
      <a href="index.php">Accueil</a>
      <a href="#">À propos</a>
      <a href="coord.php">Contact</a>
    </div>

    <div class="contenu">
  <h1  class="titre-accueil anime">Bienvenue sur mon portfolio</h1>
  <img class="anime" src="detourr.png" alt="Photo de profil">

  <h2 class="bloc-texte">👋 À propos de moi</h2>
  <p class="bloc-texte">Enchanté, moi c'est <strong>Oscar Boonen</strong>, étudiant en BUT Réseaux & Télécommunications.
  Je suis passionné par la gestion de réseaux, le développement logiciel et l'astronomie,
  et cherche toujours à relever des défis toujours plus ambitieux.</p>

  <h2 class="bloc-texte">🎯 Mes Objectifs</h2><br>
  <h3 class="bloc-texte">À court terme</h3>
  <p class="bloc-texte">Valider mon BUT 2, puis intégrer une école d'ingénieur pour approfondir mes compétences
  et découvrir de nouvelles expériences.</p>
  <h3 class="bloc-texte">À long terme</h3>
  <p class="bloc-texte">Devenir ingénieur en Réseaux & Cybersécurité, capable de concevoir et superviser
  des infrastructures réseau d'entreprise de grande envergure.</p>

  <h2 class="bloc-texte">🛠️ Mes Compétences</h2>

  <h3 class="bloc-texte">📡 Réseaux & Télécommunications</h3>
  <ul>
    <li class="bloc-texte">⚙️ Configuration d'adressage IP et mise en réseau de postes</li>
    <li class="bloc-texte">🔍 Analyse de trafic avec <strong>Wireshark</strong></li>
    <li class="bloc-texte">🖧 Configuration d'équipements Cisco : VLAN, NAT, STP <em>(Cisco Packet Tracer)</em></li>
    <li class="bloc-texte">🔌 Notions de câblage et supports physiques</li>
  </ul>

  <h3 class="bloc-texte">💻 Systèmes & Programmation</h3>
  <ul>
    <li class="bloc-texte">🐧 Administration Linux et scripting Bash</li>
    <li class="bloc-texte">🧑‍💻 Programmation : C, Java, Python</li>
    <li class="bloc-texte">🌐 Développement web : HTML, CSS, PHP</li>
    <li class="bloc-texte">🧠 Algorithmique</li>
  </ul>

  <h3 class="bloc-texte">📋 Méthodes & Outils</h3>
  <ul>
    <li class="bloc-texte">🤝 Gestion de projet technique en équipe</li>
    <li class="bloc-texte">🔐 Sensibilisé à la cybersécurité</li>
    <li class="bloc-texte">🇬🇧 Anglais technique professionnel</li>
  </ul>
</div>
<div class="scroll-hint">
      <span>↓</span>
      Découvrir
      </div>

    <footer>
      <div class="signature">Oscar Boonen &mdash; BUT R&amp;T 2025-2026</div>
    </footer>
    <script>
      function toggleMenu() {
  document.getElementById("menu").classList.toggle("ouvert");
  document.getElementById("hamburger").classList.toggle("actif");
}

document.addEventListener('click', (e) => {
  const menu = document.getElementById('menu');
  const hamburger = document.getElementById('hamburger');
  if (!menu.contains(e.target) && !hamburger.contains(e.target)) {
    menu.classList.remove('ouvert');
    hamburger.classList.remove('actif');
  }
});

window.addEventListener('scroll', () => {
  document.body.style.setProperty('--scroll', window.scrollY + 'px');
  document.getElementById('menu').classList.remove('ouvert');
  document.getElementById('hamburger').classList.remove('actif');

  const hint = document.querySelector('.scroll-hint');
  if (hint) {
    if (window.scrollY > 10) {
      hint.classList.remove('visible');
      hint.style.opacity = '0';
    } else {
      hint.classList.add('visible');
      hint.style.opacity = '';
    }
  }

  const points = document.querySelectorAll('.nav-indicator .point');
const sections = document.querySelectorAll('h2');
let current = 0;
if (window.scrollY < 100) {
  current = 0;
} else if (window.scrollY + window.innerHeight >= document.body.scrollHeight - 10) {
  current = 4;
} else {
  sections.forEach((s, i) => {
    if (window.scrollY >= s.offsetTop - 200) current = i + 1;
  });
}
points.forEach((p, i) => p.classList.toggle('actif', i === current));
});

document.querySelector('.scroll-hint').classList.add('visible');
      // Étoiles
      function createStars(canvasId, count, size, speed, scrollFactor) {
  const canvas = document.getElementById(canvasId);
  const ctx = canvas.getContext('2d');

  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight * 2;

  const stars = Array.from({ length: count }, () => ({
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    opacity: Math.random(),
    delta: (Math.random() * 0.005 + 0.002) * speed,
  }));

  let scrollY = 0;

  window.addEventListener('scroll', () => {
    scrollY = window.scrollY;
    canvas.style.transform = `translateY(${-scrollY * scrollFactor}px)`;
  });

  function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    stars.forEach(star => {
      star.opacity += star.delta;
      if (star.opacity >= 1 || star.opacity <= 0) star.delta *= -1;
      ctx.beginPath();
      ctx.arc(star.x, star.y, size, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(255, 255, 255, ${star.opacity})`;
      ctx.fill();
    });
    requestAnimationFrame(draw);
  }

  draw();

  window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight * 2;
  });
}

createStars('stars1', 1200, 0.7, 1, 0.15);
createStars('stars2', 900,  1.0, 2, 0.25);
createStars('stars3', 600,  1.4, 3, 0.4);
function etoileFilante() {
  const canvas = document.createElement('canvas');
  canvas.style.position = 'fixed';
  canvas.style.top = '0';
  canvas.style.left = '0';
  canvas.style.width = '100%';
  canvas.style.height = '100%';
  canvas.style.pointerEvents = 'none';
  canvas.style.zIndex = '1';
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  document.body.appendChild(canvas);

  const ctx = canvas.getContext('2d');
  const startX = Math.random() * window.innerWidth * 0.7;
  const startY = Math.random() * window.innerHeight * 0.4;
  const length = 180 + Math.random() * 100;
  const angle = Math.PI / 5;
  const duration = 800;
  const start = performance.now();

  function draw(now) {
    const elapsed = now - start;
    const progress = Math.min(elapsed / duration, 1);

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    const x = startX + Math.cos(angle) * length * progress;
    const y = startY + Math.sin(angle) * length * progress;
    const tailX = startX + Math.cos(angle) * Math.max(0, length * progress - 80);
    const tailY = startY + Math.sin(angle) * Math.max(0, length * progress - 80);

    const grad = ctx.createLinearGradient(tailX, tailY, x, y);
    grad.addColorStop(0, 'rgba(255,255,255,0)');
    grad.addColorStop(1, `rgba(255,255,255,${1 - progress})`);

    ctx.beginPath();
    ctx.moveTo(tailX, tailY);
    ctx.lineTo(x, y);
    ctx.strokeStyle = grad;
    ctx.lineWidth = 1.5;
    ctx.stroke();

    if (progress < 1) {
      requestAnimationFrame(draw);
    } else {
      document.body.removeChild(canvas);
    }
  }

  requestAnimationFrame(draw);
}

etoileFilante();
setInterval(etoileFilante, 8000);
    </script>
  </body>
</html>
