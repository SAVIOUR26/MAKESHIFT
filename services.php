<?php
$page_title = "Our Services | Makeshift Logistics (U) Limited — Freight, Warehousing &amp; More";
$meta_desc  = "Explore Makeshift Logistics' full range of services: freight transport, warehousing, supply chain management, last-mile delivery, general supplies, and customs clearance in Uganda.";
require 'includes/header.php';
require 'includes/nav.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <i class="fas fa-chevron-right"></i>
      <span>Services</span>
    </div>
    <h1>Our Services</h1>
    <p>Comprehensive logistics and supply solutions engineered for businesses across Uganda and East Africa.</p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     SERVICES INTRO
════════════════════════════════════════════════════════════ -->
<section class="section" style="background:var(--offwhite);">
  <div class="container">
    <div class="grid-2" style="gap:60px;">
      <div class="fade-up">
        <div class="eyebrow-tag"><i class="fas fa-truck-fast"></i> What We Offer</div>
        <h2>Logistics Solutions Designed for Uganda</h2>
        <p class="lead">
          From a single delivery to managing your entire supply chain, Makeshift Logistics provides
          scalable, professional services that reduce cost, eliminate delays, and give you peace of mind.
        </p>
        <p>
          Our services are tailored to the realities of doing business in Uganda — from navigating
          Kampala's urban logistics to reaching remote districts, crossing East African borders,
          and managing complex procurement requirements.
        </p>
        <div style="display:flex;gap:20px;margin-top:28px;flex-wrap:wrap;">
          <div style="display:flex;align-items:center;gap:8px;font-size:.9rem;font-weight:600;color:var(--navy);">
            <i class="fas fa-circle-check" style="color:var(--orange);"></i>Licensed &amp; URA Compliant
          </div>
          <div style="display:flex;align-items:center;gap:8px;font-size:.9rem;font-weight:600;color:var(--navy);">
            <i class="fas fa-circle-check" style="color:var(--orange);"></i>Insured Cargo Handling
          </div>
          <div style="display:flex;align-items:center;gap:8px;font-size:.9rem;font-weight:600;color:var(--navy);">
            <i class="fas fa-circle-check" style="color:var(--orange);"></i>Real-Time Tracking
          </div>
          <div style="display:flex;align-items:center;gap:8px;font-size:.9rem;font-weight:600;color:var(--navy);">
            <i class="fas fa-circle-check" style="color:var(--orange);"></i>24/7 Operations Support
          </div>
        </div>
        <a href="/contact" class="btn btn-primary" style="margin-top:28px;">
          <i class="fas fa-paper-plane"></i> Get a Custom Quote
        </a>
      </div>

      <div class="fade-up">
        <!-- Logistics network illustration -->
        <div style="background:linear-gradient(135deg,var(--navy-dark),var(--navy-mid));border-radius:var(--radius-lg);padding:40px;min-height:360px;display:flex;align-items:center;justify-content:center;">
          <svg viewBox="0 0 320 280" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;">
            <!-- Network nodes -->
            <circle cx="160" cy="140" r="24" fill="var(--orange)" opacity=".9"/>
            <circle cx="160" cy="140" r="12" fill="white" opacity=".9"/>
            <!-- Hub label -->
            <text x="160" y="178" text-anchor="middle" font-family="Arial Black" font-size="9" fill="rgba(244,121,32,.8)" font-weight="900">HUB</text>
            <!-- Spokes -->
            <line x1="160" y1="116" x2="160" y2="60"  stroke="rgba(74,144,217,.5)" stroke-width="2" stroke-dasharray="4,3"/>
            <line x1="160" y1="164" x2="160" y2="220" stroke="rgba(74,144,217,.5)" stroke-width="2" stroke-dasharray="4,3"/>
            <line x1="136" y1="140" x2="60"  y2="140" stroke="rgba(74,144,217,.5)" stroke-width="2" stroke-dasharray="4,3"/>
            <line x1="184" y1="140" x2="260" y2="140" stroke="rgba(74,144,217,.5)" stroke-width="2" stroke-dasharray="4,3"/>
            <line x1="144" y1="124" x2="80"  y2="80"  stroke="rgba(74,144,217,.4)" stroke-width="1.5" stroke-dasharray="4,3"/>
            <line x1="176" y1="124" x2="240" y2="80"  stroke="rgba(74,144,217,.4)" stroke-width="1.5" stroke-dasharray="4,3"/>
            <line x1="144" y1="156" x2="80"  y2="200" stroke="rgba(74,144,217,.4)" stroke-width="1.5" stroke-dasharray="4,3"/>
            <line x1="176" y1="156" x2="240" y2="200" stroke="rgba(74,144,217,.4)" stroke-width="1.5" stroke-dasharray="4,3"/>
            <!-- Outer nodes -->
            <?php
            $nodes = [
              [160,44,'fas','Gulu'],
              [160,224,'fas','Mbarara'],
              [44,140,'fas','Fort Portal'],
              [276,140,'fas','Jinja'],
              [68,68,'fas','Arua'],
              [252,68,'fas','Mbale'],
              [68,212,'fas','Masaka'],
              [252,212,'fas','Tororo'],
            ];
            $cx = [160,160,44,276,68,252,68,252];
            $cy = [44,224,140,140,68,68,212,212];
            $labels = ['Gulu','Mbarara','Fort Portal','Jinja','Arua','Mbale','Masaka','Tororo'];
            foreach(array_map(null,$cx,$cy,$labels) as [$x,$y,$label]):
            ?>
            <!-- Node at <?= "$x,$y" ?> -->
            <?php endforeach; ?>
            <circle cx="160" cy="44"  r="10" fill="rgba(74,144,217,.8)" stroke="rgba(255,255,255,.3)" stroke-width="1.5"/>
            <circle cx="160" cy="224" r="10" fill="rgba(74,144,217,.8)" stroke="rgba(255,255,255,.3)" stroke-width="1.5"/>
            <circle cx="44"  cy="140" r="10" fill="rgba(74,144,217,.8)" stroke="rgba(255,255,255,.3)" stroke-width="1.5"/>
            <circle cx="276" cy="140" r="10" fill="rgba(74,144,217,.8)" stroke="rgba(255,255,255,.3)" stroke-width="1.5"/>
            <circle cx="68"  cy="68"  r="8"  fill="rgba(74,144,217,.6)" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
            <circle cx="252" cy="68"  r="8"  fill="rgba(74,144,217,.6)" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
            <circle cx="68"  cy="212" r="8"  fill="rgba(74,144,217,.6)" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
            <circle cx="252" cy="212" r="8"  fill="rgba(74,144,217,.6)" stroke="rgba(255,255,255,.2)" stroke-width="1"/>
            <!-- Labels -->
            <text x="160" y="30"  text-anchor="middle" font-family="Arial" font-size="9" fill="rgba(255,255,255,.7)">Gulu</text>
            <text x="160" y="248" text-anchor="middle" font-family="Arial" font-size="9" fill="rgba(255,255,255,.7)">Mbarara</text>
            <text x="10"  y="143" font-family="Arial" font-size="8"  fill="rgba(255,255,255,.7)">Fort Portal</text>
            <text x="282" y="143" font-family="Arial" font-size="9"  fill="rgba(255,255,255,.7)">Jinja</text>
            <text x="48"  y="60"  font-family="Arial" font-size="8"  fill="rgba(255,255,255,.6)">Arua</text>
            <text x="230" y="60"  font-family="Arial" font-size="8"  fill="rgba(255,255,255,.6)">Mbale</text>
            <text x="40"  y="228" font-family="Arial" font-size="8"  fill="rgba(255,255,255,.6)">Masaka</text>
            <text x="228" y="228" font-family="Arial" font-size="8"  fill="rgba(255,255,255,.6)">Tororo</text>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     SERVICE DETAILS
════════════════════════════════════════════════════════════ -->
<section class="section" style="background:var(--white);">
  <div class="container">

    <?php
    $services = [
      [
        'icon'    => 'fas fa-truck-moving',
        'number'  => '01',
        'title'   => 'Freight &amp; Cargo Transportation',
        'tag'     => 'Core Service',
        'lead'    => 'Reliable road freight solutions connecting Kampala to every corner of Uganda and beyond.',
        'desc'    => 'Our managed fleet of trucks handles cargo of all sizes — from small consignments to full truckload shipments. We serve Kampala\'s urban corridors and extend to regional districts with scheduled and on-demand routes.',
        'pills'   => ['Full Truckload (FTL)','Less-than-Truckload (LTL)','Express Cargo','Fragile Goods','Cold Chain (Referral)','Cross-Border'],
        'color'   => '#1B4070',
        'bg_accent' => '#F47920',
      ],
      [
        'icon'    => 'fas fa-warehouse',
        'number'  => '02',
        'title'   => 'Warehousing &amp; Storage',
        'tag'     => 'Infrastructure',
        'lead'    => 'Secure, well-managed storage facilities in Kampala with modern inventory tracking.',
        'desc'    => 'We provide short-term and long-term storage solutions designed to protect your goods from damage, theft, and deterioration. Our facilities are monitored 24/7 and managed with digital inventory systems.',
        'pills'   => ['Short-Term Storage','Long-Term Storage','Inventory Management','Palletisation','Pick &amp; Pack','Distribution Hub'],
        'color'   => '#2D6A9F',
        'bg_accent' => '#1B4070',
      ],
      [
        'icon'    => 'fas fa-diagram-project',
        'number'  => '03',
        'title'   => 'Supply Chain Management',
        'tag'     => 'Advisory',
        'lead'    => 'End-to-end supply chain design, coordination, and optimisation for Ugandan businesses.',
        'desc'    => 'We partner with your business to analyse, design, and manage your entire supply chain — from procurement and supplier management to demand forecasting, order fulfilment, and distribution planning.',
        'pills'   => ['Procurement Support','Supplier Liaison','Demand Planning','Fulfilment Coordination','Cost Optimisation','Reporting &amp; Analytics'],
        'color'   => '#162D50',
        'bg_accent' => '#2D6A9F',
      ],
      [
        'icon'    => 'fas fa-route',
        'number'  => '04',
        'title'   => 'Last-Mile Delivery',
        'tag'     => 'Urban &amp; Rural',
        'lead'    => 'Precision final-delivery services for urban Kampala and rural districts across Uganda.',
        'desc'    => 'The last mile is often the hardest. Our dedicated last-mile team uses local knowledge, optimised routes, and dependable riders and drivers to ensure your goods reach the final consignee — home, office, or field site.',
        'pills'   => ['Same-Day Delivery','Next-Day Delivery','Rural Delivery','Proof of Delivery','SMS Notifications','Return Logistics'],
        'color'   => '#0D1F3C',
        'bg_accent' => '#F47920',
      ],
      [
        'icon'    => 'fas fa-boxes-stacked',
        'number'  => '05',
        'title'   => 'General Supplies &amp; Procurement',
        'tag'     => 'Supplies',
        'lead'    => 'Sourcing, procurement, and delivery of a wide range of goods for businesses and institutions.',
        'desc'    => 'We supply and deliver a broad range of goods including stationery, office supplies, cleaning materials, PPE, construction materials, agricultural inputs, and more. Ideal for NGOs, government projects, schools, and businesses.',
        'pills'   => ['Office Supplies','Cleaning &amp; Sanitation','PPE &amp; Safety','Agricultural Inputs','Construction Materials','Medical Consumables'],
        'color'   => '#1B4070',
        'bg_accent' => '#2D6A9F',
      ],
      [
        'icon'    => 'fas fa-file-contract',
        'number'  => '06',
        'title'   => 'Customs Clearance &amp; Forwarding',
        'tag'     => 'Border Services',
        'lead'    => 'Professional import/export clearance and freight forwarding across East African borders.',
        'desc'    => 'Navigating Uganda Revenue Authority requirements, customs tariff classifications, and cross-border documentation can be complex. Our experienced team handles all the paperwork so your cargo clears borders without delay.',
        'pills'   => ['Import Clearance','Export Documentation','URA Compliance','EAC Tariff Navigation','Port of Mombasa','Port of Dar es Salaam'],
        'color'   => '#2D6A9F',
        'bg_accent' => '#0D1F3C',
      ],
    ];

    foreach ($services as $i => $svc):
      $even = $i % 2 === 1;
    ?>
    <div class="service-detail fade-up">

      <div class="service-detail-visual">
        <div class="sd-illustration" style="background:linear-gradient(135deg,<?= $svc['color'] ?> 0%,<?= $svc['bg_accent'] ?> 100%);border-radius:var(--radius-lg);min-height:320px;display:flex;align-items:center;justify-content:center;">
          <div style="text-align:center;">
            <div style="width:100px;height:100px;border-radius:50%;background:rgba(255,255,255,.12);display:flex;align-items:center;justify-content:center;margin:0 auto 20px;">
              <i class="<?= $svc['icon'] ?>" style="font-size:2.8rem;color:rgba(255,255,255,.9);"></i>
            </div>
            <div style="font-family:var(--font-head);font-size:4rem;font-weight:800;color:rgba(255,255,255,.06);line-height:1;"><?= $svc['number'] ?></div>
          </div>
        </div>
      </div>

      <div class="service-detail-text">
        <div class="eyebrow-tag">
          <i class="<?= $svc['icon'] ?>"></i> <?= $svc['tag'] ?>
        </div>
        <h2><?= $svc['title'] ?></h2>
        <p class="lead"><?= $svc['lead'] ?></p>
        <p><?= $svc['desc'] ?></p>
        <div class="feature-pills">
          <?php foreach ($svc['pills'] as $pill): ?>
          <span class="pill"><?= $pill ?></span>
          <?php endforeach; ?>
        </div>
        <a href="/contact" class="btn btn-primary">
          <i class="fas fa-paper-plane"></i> Request This Service
        </a>
      </div>

    </div>
    <?php endforeach; ?>

  </div>
</section>


<!-- Industries we serve -->
<section class="section" style="background:var(--navy-dark);">
  <div class="container">
    <div class="section-header fade-up">
      <div class="eyebrow" style="background:rgba(244,121,32,.15);"><i class="fas fa-industry"></i> Industries</div>
      <h2 style="color:var(--white);">Industries We Serve</h2>
      <p style="color:rgba(255,255,255,.6);">Our solutions are built for a diverse range of sectors across Uganda.</p>
    </div>

    <div class="grid-4">
      <?php
      $industries = [
        ['fas fa-store',              'Retail &amp; FMCG',       'Supply chain &amp; distribution for retail chains and fast-moving consumer goods.'],
        ['fas fa-hospital',           'Health &amp; Pharma',     'Reliable delivery of medical supplies, pharmaceuticals, and health commodities.'],
        ['fas fa-building',           'Construction',            'Heavy material logistics and site delivery for construction projects.'],
        ['fas fa-seedling',           'Agriculture',             'Farm input delivery and produce collection across Uganda\'s agricultural belt.'],
        ['fas fa-graduation-cap',     'Education &amp; NGOs',    'Supply procurement and distribution for schools, universities, and NGOs.'],
        ['fas fa-industry',           'Manufacturing',           'Raw material inbound and finished goods outbound logistics support.'],
        ['fas fa-landmark-dome',      'Government &amp; Public', 'Compliant supply and logistics services for government institutions.'],
        ['fas fa-plane-departure',    'Import &amp; Export',     'Customs clearance and freight forwarding for importers and exporters.'],
      ];
      foreach ($industries as [$icon,$title,$desc]):
      ?>
      <div class="why-card fade-up">
        <div class="why-icon"><i class="<?= $icon ?>"></i></div>
        <h4><?= $title ?></h4>
        <p><?= $desc ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- CTA -->
<section class="cta-banner">
  <div class="container">
    <h2>Need a Logistics Solution?</h2>
    <p>Tell us your requirements and we'll design the perfect logistics plan for your business.</p>
    <div class="actions">
      <a href="/contact" class="btn btn-primary btn-lg"><i class="fas fa-paper-plane"></i> Request a Quote</a>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
