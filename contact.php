<?php
$page_title = "Contact Us | Makeshift Logistics (U) Limited — Get a Quote";
$meta_desc  = "Contact Makeshift Logistics (U) Limited in Kampala, Uganda. Get a freight, warehousing or general supplies quote. Kiwatule, Nakawa Division, Kampala.";

// Handle form submission
$success = false;
$errors  = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name']    ?? '');
    $email   = trim($_POST['email']   ?? '');
    $phone   = trim($_POST['phone']   ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name))    $errors[] = 'Your name is required.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email address is required.';
    if (empty($message)) $errors[] = 'Please describe your requirements.';

    if (empty($errors)) {
        // In production: send email via mail() or SMTP
        $to      = 'info@makeshiftlogistics.com';
        $subject = "New Enquiry from $name — makeshiftlogistics.com";
        $body    = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\n\nMessage:\n$message";
        $headers = "From: noreply@makeshiftlogistics.com\r\nReply-To: $email";
        // mail($to, $subject, $body, $headers); // Uncomment when hosting is configured
        $success = true;
    }
}

require 'includes/header.php';
require 'includes/nav.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <i class="fas fa-chevron-right"></i>
      <span>Contact Us</span>
    </div>
    <h1>Get in Touch</h1>
    <p>Reach out for a quote, enquiry, or partnership discussion. Our team responds within 24 hours.</p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     CONTACT MAIN
════════════════════════════════════════════════════════════ -->
<section class="section" style="background:var(--offwhite);">
  <div class="container">
    <div class="contact-grid">

      <!-- Form -->
      <div class="fade-up">
        <div class="contact-form-wrap">
          <h3>Send Us a Message</h3>
          <p style="margin-bottom:28px;font-size:.93rem;">Fill in the form below and we'll get back to you with a tailored response.</p>

          <?php if ($success): ?>
          <div style="background:#f0fdf4;border:1.5px solid #22c55e;border-radius:var(--radius);padding:18px 20px;margin-bottom:24px;display:flex;align-items:center;gap:12px;">
            <i class="fas fa-circle-check" style="color:#22c55e;font-size:1.3rem;"></i>
            <div>
              <strong style="color:#166534;">Message Sent Successfully!</strong><br>
              <span style="font-size:.88rem;color:#166534;">Thank you <?= htmlspecialchars($name) ?>. We'll respond within 24 hours.</span>
            </div>
          </div>
          <?php endif; ?>

          <?php if (!empty($errors)): ?>
          <div style="background:#fef2f2;border:1.5px solid #ef4444;border-radius:var(--radius);padding:16px 20px;margin-bottom:24px;">
            <strong style="color:#991b1b;font-size:.9rem;"><i class="fas fa-triangle-exclamation"></i> Please fix the following:</strong>
            <ul style="margin-top:8px;padding-left:18px;">
              <?php foreach ($errors as $err): ?>
              <li style="font-size:.88rem;color:#991b1b;"><?= htmlspecialchars($err) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>

          <form method="POST" action="contact.php" id="contactForm">
            <div class="form-row">
              <div class="form-group">
                <label for="name"><i class="fas fa-user"></i> Full Name *</label>
                <input type="text" id="name" name="name" placeholder="e.g. John Mukasa"
                       value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
              </div>
              <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email Address *</label>
                <input type="email" id="email" name="email" placeholder="john@company.com"
                       value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="phone"><i class="fas fa-phone"></i> Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="+256 7XX XXX XXX"
                       value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
              </div>
              <div class="form-group">
                <label for="service"><i class="fas fa-boxes-stacked"></i> Service Required</label>
                <select id="service" name="service">
                  <option value="">-- Select a Service --</option>
                  <option value="Freight &amp; Cargo Transport"  <?= ($_POST['service'] ?? '') === 'Freight &amp; Cargo Transport'  ? 'selected' : '' ?>>Freight &amp; Cargo Transport</option>
                  <option value="Warehousing &amp; Storage"      <?= ($_POST['service'] ?? '') === 'Warehousing &amp; Storage'      ? 'selected' : '' ?>>Warehousing &amp; Storage</option>
                  <option value="Supply Chain Management"        <?= ($_POST['service'] ?? '') === 'Supply Chain Management'        ? 'selected' : '' ?>>Supply Chain Management</option>
                  <option value="Last-Mile Delivery"             <?= ($_POST['service'] ?? '') === 'Last-Mile Delivery'             ? 'selected' : '' ?>>Last-Mile Delivery</option>
                  <option value="General Supplies"               <?= ($_POST['service'] ?? '') === 'General Supplies'               ? 'selected' : '' ?>>General Supplies &amp; Procurement</option>
                  <option value="Customs Clearance"              <?= ($_POST['service'] ?? '') === 'Customs Clearance'              ? 'selected' : '' ?>>Customs Clearance &amp; Forwarding</option>
                  <option value="Other"                          <?= ($_POST['service'] ?? '') === 'Other'                          ? 'selected' : '' ?>>Other / General Enquiry</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="message"><i class="fas fa-comment-dots"></i> Your Message / Requirements *</label>
              <textarea id="message" name="message" placeholder="Describe your logistics needs, cargo type, route, quantities, timeline..."
                        required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
              <i class="fas fa-paper-plane"></i> Send Message
            </button>

            <p style="font-size:.78rem;color:var(--grey-lt);margin-top:12px;text-align:center;">
              <i class="fas fa-lock"></i> Your data is handled securely and never shared with third parties.
            </p>
          </form>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="contact-info-wrap fade-up">
        <div class="eyebrow-tag"><i class="fas fa-location-dot"></i> Find Us</div>
        <h3>Contact Information</h3>
        <p>We're based in Kampala and ready to serve you. Reach us through any of the channels below.</p>

        <div class="info-card">
          <div class="info-card-icon"><i class="fas fa-map-marker-alt"></i></div>
          <div class="info-card-text">
            <strong>Registered Office</strong>
            <p>Kiwatule, Nakawa Division<br>Kampala, Central Uganda<br>East Africa</p>
          </div>
        </div>

        <div class="info-card">
          <div class="info-card-icon"><i class="fas fa-mailbox"></i></div>
          <div class="info-card-text">
            <strong>Postal Address</strong>
            <p>P.O. Box 191331<br>Kampala GPO, Uganda</p>
          </div>
        </div>

        <div class="info-card">
          <div class="info-card-icon"><i class="fas fa-envelope"></i></div>
          <div class="info-card-text">
            <strong>Email Address</strong>
            <p><a href="mailto:info@makeshiftlogistics.com" style="color:var(--orange);">info@makeshiftlogistics.com</a></p>
          </div>
        </div>

        <div class="info-card">
          <div class="info-card-icon"><i class="fas fa-globe"></i></div>
          <div class="info-card-text">
            <strong>Website</strong>
            <p><a href="https://makeshiftlogistics.com" style="color:var(--orange);">makeshiftlogistics.com</a></p>
          </div>
        </div>

        <div class="info-card">
          <div class="info-card-icon"><i class="fas fa-clock"></i></div>
          <div class="info-card-text">
            <strong>Operating Hours</strong>
            <p>Mon – Fri: 8:00 AM – 6:00 PM<br>Sat: 9:00 AM – 2:00 PM<br>Emergency line: 24/7</p>
          </div>
        </div>

        <!-- Map placeholder -->
        <div class="map-embed">
          <div class="map-placeholder">
            <i class="fas fa-map-location-dot"></i>
            <p style="font-size:.9rem;"><strong>Kiwatule, Nakawa Division</strong><br>Kampala, Uganda</p>
            <a href="https://maps.google.com/?q=Kiwatule+Nakawa+Kampala+Uganda" target="_blank" rel="noopener"
               class="btn btn-navy" style="margin-top:12px;font-size:.8rem;padding:10px 20px;">
              <i class="fas fa-map"></i> View on Google Maps
            </a>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>


<!-- Quick Contact Cards -->
<section class="section-sm" style="background:var(--navy-dark);">
  <div class="container">
    <div class="grid-3">
      <div class="why-card fade-up" style="text-align:left;">
        <div class="why-icon" style="margin:0 0 18px;"><i class="fab fa-whatsapp"></i></div>
        <h4>WhatsApp Us</h4>
        <p style="margin-bottom:14px;">Fastest response via WhatsApp. Send us your cargo details directly.</p>
        <a href="https://wa.me/256000000000" class="btn btn-primary" style="font-size:.85rem;padding:10px 20px;">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
      <div class="why-card fade-up" style="text-align:left;">
        <div class="why-icon" style="margin:0 0 18px;"><i class="fas fa-envelope"></i></div>
        <h4>Email a Quote Request</h4>
        <p style="margin-bottom:14px;">Email us your logistics requirements and we'll respond with a detailed proposal.</p>
        <a href="mailto:info@makeshiftlogistics.com?subject=Quote Request" class="btn btn-primary" style="font-size:.85rem;padding:10px 20px;">
          <i class="fas fa-envelope"></i> Email Us
        </a>
      </div>
      <div class="why-card fade-up" style="text-align:left;">
        <div class="why-icon" style="margin:0 0 18px;"><i class="fas fa-handshake"></i></div>
        <h4>Partnership Enquiries</h4>
        <p style="margin-bottom:14px;">Interested in a logistics partnership or subcontracting arrangement? Let's talk.</p>
        <a href="mailto:info@makeshiftlogistics.com?subject=Partnership Enquiry" class="btn btn-primary" style="font-size:.85rem;padding:10px 20px;">
          <i class="fas fa-paper-plane"></i> Start a Conversation
        </a>
      </div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
