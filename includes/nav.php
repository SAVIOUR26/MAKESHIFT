<?php
$uri  = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$page = $uri === '' ? 'home' : $uri; // 'home','about','services','contact'
?>

<!-- Mobile Nav Overlay -->
<nav class="mobile-nav" id="mobileNav">
  <button class="close-nav" aria-label="Close"><i class="fas fa-times"></i></button>
  <a href="/"         class="<?= $page === 'home'     ? 'active' : '' ?>">Home</a>
  <a href="/about"    class="<?= $page === 'about'    ? 'active' : '' ?>">About</a>
  <a href="/services" class="<?= $page === 'services' ? 'active' : '' ?>">Services</a>
  <a href="/contact"  class="<?= $page === 'contact'  ? 'active' : '' ?>">Contact</a>
  <a href="/contact" class="btn btn-primary" style="margin-top:16px;">Get a Quote</a>
</nav>

<!-- Desktop Navbar -->
<header id="navbar">
  <div class="container nav-inner">

    <!-- Logo -->
    <a href="/" class="logo">
      <div class="logo-mark">
        <!-- Inline SVG logo icon -->
        <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="2" y="10" width="16" height="10" rx="2" fill="white" opacity=".95"/>
          <path d="M18 13h4l3 3v4h-7v-7z" fill="white" opacity=".85"/>
          <circle cx="7"  cy="22" r="2.5" fill="#F47920"/>
          <circle cx="22" cy="22" r="2.5" fill="#F47920"/>
          <rect x="5" y="5" width="8" height="5" rx="1" fill="white" opacity=".5"/>
        </svg>
      </div>
      <div class="logo-text">
        <span class="brand">Makeshift</span>
        <span class="tagline-logo">Logistics (U) Limited</span>
      </div>
    </a>

    <!-- Desktop nav links -->
    <nav class="nav-links" aria-label="Main navigation">
      <a href="/"         class="<?= $page === 'home'     ? 'active' : '' ?>">Home</a>
      <a href="/about"    class="<?= $page === 'about'    ? 'active' : '' ?>">About</a>
      <a href="/services" class="<?= $page === 'services' ? 'active' : '' ?>">Services</a>
      <a href="/contact"  class="<?= $page === 'contact'  ? 'active' : '' ?>">Contact</a>
    </nav>

    <div style="display:flex;align-items:center;gap:12px;">
      <a href="/contact" class="btn btn-primary nav-cta">
        <i class="fas fa-paper-plane"></i> Get a Quote
      </a>
      <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>
</header>
