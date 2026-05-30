<?php
$page_title = "About Us | Makeshift Logistics (U) Limited — Kampala, Uganda";
$meta_desc  = "Learn about Makeshift Logistics (U) Limited — our story, mission, vision, values, and team. Proudly serving Uganda from our Kampala headquarters.";
require 'includes/header.php';
require 'includes/nav.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <i class="fas fa-chevron-right"></i>
      <span>About Us</span>
    </div>
    <h1>About Makeshift Logistics</h1>
    <p>Driven by purpose — delivering reliability across every mile.</p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     OUR STORY
════════════════════════════════════════════════════════════ -->
<section class="section" style="background:var(--white);">
  <div class="container">
    <div class="grid-2">

      <div class="about-text fade-up">
        <div class="eyebrow-tag"><i class="fas fa-book-open"></i> Our Story</div>
        <h2>Born from a Need, Built for Impact</h2>
        <p class="lead">
          Makeshift Logistics (U) Limited was founded with a clear vision: to plug the gaps in Uganda's
          logistics landscape with reliable, affordable, and professional services that businesses
          and communities across East Africa can truly depend on.
        </p>
        <p>
          Headquartered at Kiwatule, Nakawa Division in Kampala — Central Uganda — we serve businesses,
          NGOs, government institutions, and individual clients who need more than just a delivery
          service. They need a partner who understands the terrain, the regulations, and the urgency
          of business in East Africa.
        </p>
        <p>
          Our name reflects our philosophy: resourceful, adaptive, and effective. We find solutions
          where others see obstacles, and we deliver results where others make excuses.
        </p>
        <div style="margin-top:28px;display:flex;gap:14px;flex-wrap:wrap;">
          <div style="background:var(--offwhite);border-radius:var(--radius);padding:20px 24px;flex:1;min-width:140px;text-align:center;">
            <div style="font-family:var(--font-head);font-size:2rem;font-weight:800;color:var(--orange);">2025</div>
            <div style="font-size:.78rem;text-transform:uppercase;letter-spacing:.08em;color:var(--grey-lt);font-weight:600;">Year Founded</div>
          </div>
          <div style="background:var(--offwhite);border-radius:var(--radius);padding:20px 24px;flex:1;min-width:140px;text-align:center;">
            <div style="font-family:var(--font-head);font-size:2rem;font-weight:800;color:var(--orange);">Kampala</div>
            <div style="font-size:.78rem;text-transform:uppercase;letter-spacing:.08em;color:var(--grey-lt);font-weight:600;">Headquarters</div>
          </div>
          <div style="background:var(--offwhite);border-radius:var(--radius);padding:20px 24px;flex:1;min-width:140px;text-align:center;">
            <div style="font-family:var(--font-head);font-size:2rem;font-weight:800;color:var(--orange);">Uganda</div>
            <div style="font-size:.78rem;text-transform:uppercase;letter-spacing:.08em;color:var(--grey-lt);font-weight:600;">Registered</div>
          </div>
        </div>
      </div>

      <div class="fade-up">
        <!-- East Africa route map illustration -->
        <div style="background:linear-gradient(135deg,var(--navy) 0%,var(--navy-mid) 100%);border-radius:var(--radius-lg);padding:36px;min-height:420px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;">
          <svg viewBox="0 0 360 380" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;max-width:340px;">
            <!-- Simplified Uganda/EA map shape -->
            <path d="M120 40 L240 30 L290 80 L310 150 L280 220 L260 280 L200 340 L140 320 L90 260 L70 190 L80 120 Z"
                  fill="rgba(45,106,159,.15)" stroke="rgba(45,106,159,.4)" stroke-width="1.5"/>
            <!-- Route lines -->
            <polyline points="180,280 180,240 220,200 260,160 280,130"
                      stroke="#F47920" stroke-width="2.5" stroke-dasharray="6,4" opacity=".8"/>
            <polyline points="180,280 150,240 110,200 90,160"
                      stroke="#4A90D9" stroke-width="2.5" stroke-dasharray="6,4" opacity=".7"/>
            <polyline points="180,280 200,260 240,250 270,240"
                      stroke="#F47920" stroke-width="2" stroke-dasharray="6,4" opacity=".5"/>
            <!-- Kampala (HQ) -->
            <circle cx="180" cy="280" r="14" fill="#F47920" opacity=".9"/>
            <circle cx="180" cy="280" r="7"  fill="white"/>
            <text x="180" y="304" text-anchor="middle" font-family="Arial" font-size="11" fill="rgba(255,255,255,.9)" font-weight="700">KAMPALA</text>
            <text x="180" y="317" text-anchor="middle" font-family="Arial" font-size="9" fill="rgba(244,121,32,.8)">(HQ)</text>
            <!-- Other cities -->
            <circle cx="280" cy="130" r="7" fill="rgba(74,144,217,.7)" stroke="rgba(255,255,255,.4)" stroke-width="1.5"/>
            <text x="295" y="134" font-family="Arial" font-size="9" fill="rgba(255,255,255,.7)">Gulu</text>
            <circle cx="90"  cy="160" r="7" fill="rgba(74,144,217,.7)" stroke="rgba(255,255,255,.4)" stroke-width="1.5"/>
            <text x="60"  y="157" font-family="Arial" font-size="9" fill="rgba(255,255,255,.7)">Fort Portal</text>
            <circle cx="270" cy="240" r="7" fill="rgba(74,144,217,.7)" stroke="rgba(255,255,255,.4)" stroke-width="1.5"/>
            <text x="280" y="243" font-family="Arial" font-size="9" fill="rgba(255,255,255,.7)">Jinja</text>
            <circle cx="220" cy="200" r="7" fill="rgba(74,144,217,.7)" stroke="rgba(255,255,255,.4)" stroke-width="1.5"/>
            <text x="228" y="196" font-family="Arial" font-size="9" fill="rgba(255,255,255,.7)">Mbale</text>
            <circle cx="150" cy="240" r="6" fill="rgba(74,144,217,.6)" stroke="rgba(255,255,255,.3)" stroke-width="1"/>
            <text x="120" y="255" font-family="Arial" font-size="9" fill="rgba(255,255,255,.6)">Masaka</text>
            <!-- Truck icons on route -->
            <text x="222" y="228" font-family="Arial" font-size="14" fill="#F47920" opacity=".9">🚚</text>
            <text x="130" y="218" font-family="Arial" font-size="12" fill="#4A90D9" opacity=".8">🚛</text>
            <!-- Title overlay -->
            <text x="180" y="22" text-anchor="middle" font-family="Arial Black" font-size="12" font-weight="900" fill="rgba(255,255,255,.4)" letter-spacing="4">COVERAGE MAP</text>
          </svg>
          <!-- Pulse ring on Kampala -->
          <div style="position:absolute;width:60px;height:60px;border-radius:50%;border:2px solid rgba(244,121,32,.4);animation:pulse 2s ease-in-out infinite;bottom:72px;left:50%;transform:translateX(-50%);"></div>
          <style>@keyframes pulse{0%,100%{transform:translateX(-50%) scale(1);opacity:.6}50%{transform:translateX(-50%) scale(1.4);opacity:0}}</style>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     MISSION / VISION / VALUES
════════════════════════════════════════════════════════════ -->
<section class="mission-vision section" style="background:var(--offwhite);">
  <div class="container">
    <div class="section-header fade-up">
      <div class="eyebrow"><i class="fas fa-compass"></i> Our Direction</div>
      <h2>Mission, Vision &amp; Values</h2>
      <p>The principles that guide every shipment, every interaction, every decision we make.</p>
    </div>

    <div class="grid-3" style="margin-bottom:64px;">

      <div class="mv-card fade-up">
        <div class="mv-icon"><i class="fas fa-bullseye"></i></div>
        <h3>Our Mission</h3>
        <p>
          To deliver reliable, efficient, and cost-effective logistics and general supply solutions
          that empower businesses and communities across Uganda and East Africa — with integrity,
          professionalism, and a relentless commitment to excellence.
        </p>
      </div>

      <div class="mv-card fade-up" style="background:var(--orange);">
        <div class="mv-icon" style="background:rgba(255,255,255,.2);">
          <i class="fas fa-eye" style="color:white;"></i>
        </div>
        <h3>Our Vision</h3>
        <p>
          To be East Africa's most trusted logistics and general supplies company — recognised for
          our dependability, innovation, and the transformative impact we create for the businesses
          and communities we serve.
        </p>
      </div>

      <div class="mv-card fade-up">
        <div class="mv-icon"><i class="fas fa-gem"></i></div>
        <h3>Our Promise</h3>
        <p>
          Every shipment is a commitment. We promise transparent communication, accountable handling,
          competitive pricing, and a team that goes the extra mile — literally — so your goods arrive
          safely, every time.
        </p>
      </div>

    </div>

    <!-- Core Values -->
    <div class="section-header fade-up" style="margin-bottom:36px;">
      <div class="eyebrow"><i class="fas fa-heart"></i> Core Values</div>
      <h2>What We Stand For</h2>
    </div>

    <div class="values-grid">
      <?php
      $values = [
        ['01','Integrity',       'We operate with complete transparency and honesty in every transaction, quote, and communication.'],
        ['02','Reliability',     'Consistent, predictable service is our foundation. When we commit, we deliver — no excuses.'],
        ['03','Customer-First',  'Our clients\' success is our success. We listen, adapt, and tailor our services to real needs.'],
        ['04','Professionalism', 'From our team\'s conduct to our documentation standards, we uphold the highest professional bar.'],
        ['05','Innovation',      'We continuously improve our processes, embrace technology, and seek smarter ways to serve you.'],
        ['06','Community',       'As a Ugandan company, we invest in local talent, support local economies, and build Uganda forward.'],
      ];
      foreach ($values as [$num,$title,$desc]):
      ?>
      <div class="value-card fade-up">
        <div class="value-num"><?= $num ?></div>
        <h4><?= $title ?></h4>
        <p><?= $desc ?></p>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     LEGAL / REGISTRATION
════════════════════════════════════════════════════════════ -->
<section class="section" style="background:var(--white);">
  <div class="container">
    <div class="section-header fade-up">
      <div class="eyebrow"><i class="fas fa-building-columns"></i> Legal Standing</div>
      <h2>Fully Registered &amp; Compliant</h2>
      <p>We operate with full legal standing under the laws of the Republic of Uganda.</p>
    </div>

    <div class="grid-4 fade-up">
      <?php
      $legal = [
        ['fas fa-id-card',   'Company Name',    'Makeshift Logistics (U) Limited'],
        ['fas fa-map-pin',   'Registered Office','Kiwatule, Nakawa Division, Kampala, Central Uganda'],
        ['fas fa-mailbox',   'Postal Address',  'P.O. Box 191331, Kampala GPO'],
        ['fas fa-globe',     'Website',         'makeshiftlogistics.com'],
        ['fas fa-flag',      'Jurisdiction',    'Republic of Uganda'],
        ['fas fa-truck-fast','Specialisation',  'Logistics &amp; General Supplies'],
      ];
      foreach ($legal as [$icon,$label,$val]):
      ?>
      <div style="background:var(--offwhite);border-radius:var(--radius);padding:22px 18px;border:1px solid var(--border);transition:var(--transition);"
           onmouseover="this.style.borderColor='var(--orange)'" onmouseout="this.style.borderColor='var(--border)'">
        <i class="<?= $icon ?>" style="color:var(--orange);font-size:1.4rem;margin-bottom:12px;display:block;"></i>
        <div style="font-size:.72rem;text-transform:uppercase;letter-spacing:.08em;color:var(--grey-lt);font-weight:700;margin-bottom:4px;"><?= $label ?></div>
        <div style="font-size:.92rem;font-weight:600;color:var(--navy);"><?= $val ?></div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- CTA -->
<section class="cta-banner">
  <div class="container">
    <h2>Partner with Uganda's Trusted Logistics Team</h2>
    <p>Experience the Makeshift difference — professional, reliable, and built for your business.</p>
    <div class="actions">
      <a href="/contact" class="btn btn-primary btn-lg"><i class="fas fa-paper-plane"></i> Get in Touch</a>
      <a href="/services" class="btn btn-outline btn-lg"><i class="fas fa-boxes-stacked"></i> Our Services</a>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
