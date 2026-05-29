/* ============================================================
   MAKESHIFT LOGISTICS (U) LIMITED — Main JS
   ============================================================ */

// ── Navbar scroll effect ──────────────────────────────────────
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
  navbar && navbar.classList.toggle('scrolled', window.scrollY > 60);
  const btn = document.getElementById('scrollTop');
  btn && btn.classList.toggle('visible', window.scrollY > 400);
});

// ── Mobile nav ────────────────────────────────────────────────
const hamburger   = document.querySelector('.hamburger');
const mobileNav   = document.querySelector('.mobile-nav');
const closeNav    = document.querySelector('.close-nav');

hamburger && hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('open');
  mobileNav.classList.toggle('open');
  document.body.style.overflow = mobileNav.classList.contains('open') ? 'hidden' : '';
});

const closeMobile = () => {
  hamburger && hamburger.classList.remove('open');
  mobileNav && mobileNav.classList.remove('open');
  document.body.style.overflow = '';
};

closeNav && closeNav.addEventListener('click', closeMobile);
mobileNav && mobileNav.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMobile));

// ── Active nav link ───────────────────────────────────────────
const currentPage = window.location.pathname.split('/').pop() || 'index.php';
document.querySelectorAll('.nav-links a, .mobile-nav a').forEach(a => {
  if (a.getAttribute('href') === currentPage) a.classList.add('active');
});

// ── Scroll-to-top ─────────────────────────────────────────────
document.getElementById('scrollTop')?.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});

// ── Intersection Observer (fade-up) ──────────────────────────
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      observer.unobserve(e.target);
    }
  });
}, { threshold: 0.12 });

document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

// ── Animated counters ─────────────────────────────────────────
const animateCount = (el) => {
  const target = parseInt(el.dataset.count, 10);
  const duration = 1800;
  const start = performance.now();
  const update = (now) => {
    const progress = Math.min((now - start) / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);
    el.textContent = Math.floor(eased * target).toLocaleString() + (el.dataset.suffix || '');
    if (progress < 1) requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
};

const counterObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      animateCount(e.target);
      counterObserver.unobserve(e.target);
    }
  });
}, { threshold: 0.4 });

document.querySelectorAll('[data-count]').forEach(el => counterObserver.observe(el));

// ── Contact form (basic front-end validation) ─────────────────
const contactForm = document.getElementById('contactForm');
contactForm && contactForm.addEventListener('submit', e => {
  e.preventDefault();
  const btn = contactForm.querySelector('[type=submit]');
  const orig = btn.innerHTML;
  btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
  btn.disabled = true;
  setTimeout(() => {
    btn.innerHTML = '<i class="fas fa-check"></i> Message Sent!';
    btn.style.background = '#22c55e';
    setTimeout(() => { btn.innerHTML = orig; btn.disabled = false; btn.style.background = ''; contactForm.reset(); }, 2800);
  }, 1600);
});
