# Makeshift Logistics (U) Limited — Official Website

**Domain:** [makeshiftlogistics.com](https://makeshiftlogistics.com)  
**Company:** Makeshift Logistics (U) Limited  
**Reg. No.:** G250708-3181  
**Location:** Kiwatule, Nakawa Division, Kampala, Central Uganda  
**Postal:** P.O. Box 191331, Kampala GPO  
**Incorporated:** 8th July 2025 under The Companies Act 2012, Republic of Uganda

---

## Overview

Professional PHP website for Makeshift Logistics (U) Limited — a Kampala-based logistics and general supplies company. Built for deployment to shared hosting via FTP.

---

## Tech Stack

| Layer      | Technology                                 |
|------------|--------------------------------------------|
| Backend    | PHP 8.x (no framework)                     |
| Styling    | Custom CSS3 (CSS Variables, Grid, Flexbox) |
| Icons      | Font Awesome 6 (CDN)                       |
| Fonts      | Google Fonts — Inter + Barlow Condensed    |
| JS         | Vanilla JavaScript (ES6+)                  |
| Assets     | SVG logo & favicon                         |

---

## Project Structure

```
makeshift-logistics/
├── index.php           # Homepage — Hero, Services, Stats, Testimonials, CTA
├── about.php           # About — Story, Mission, Vision, Values, Legal info
├── services.php        # Services — Detailed service breakdowns + Industries
├── contact.php         # Contact — Form (PHP), Info cards, Map placeholder
│
├── includes/
│   ├── header.php      # HTML head, meta tags, CSS/font links
│   ├── nav.php         # Navbar (desktop + mobile overlay)
│   └── footer.php      # Footer, social links, copyright, JS
│
├── css/
│   └── style.css       # Main stylesheet (~1,000 lines, fully responsive)
│
├── js/
│   └── main.js         # Navbar scroll, mobile nav, counters, fade-up, form
│
├── assets/
│   └── favicon.svg     # SVG favicon — truck icon in navy + orange
│
└── README.md           # This file
```

---

## Pages

### `index.php` — Homepage
- Animated hero with SVG truck illustration & Kampala skyline
- Scrolling ticker bar
- About snapshot with warehouse illustration
- 6-card services grid
- Stats counter banner (500+ deliveries, 98% on-time, etc.)
- "Why Makeshift" 8-card grid
- 4-step process section
- 3 client testimonials
- Full-width CTA banner

### `about.php` — About Us
- Company story with East Africa coverage map (SVG)
- Mission, Vision & Promise cards
- 6 Core Values grid
- Legal/registration details (8-card grid)

### `services.php` — Our Services
- Services intro with logistics network map (SVG)
- 6 detailed service breakdowns (alternating layout)
- 8-sector Industries We Serve section

### `contact.php` — Contact & Quote
- PHP contact form with server-side validation
- 5 contact information cards
- Map embed placeholder (links to Google Maps)
- 3 quick-contact cards (WhatsApp, Email, Partnership)

---

## Design System

### Colours

| Name        | Hex       | Usage                          |
|-------------|-----------|--------------------------------|
| Navy Dark   | `#0D1F3C` | Primary background, text       |
| Navy Mid    | `#162D50` | Cards, sections                |
| Orange      | `#F47920` | Primary accent, CTAs, icons    |
| Steel Blue  | `#2D6A9F` | Secondary accent               |
| Off-White   | `#F5F8FC` | Section backgrounds            |
| Grey        | `#4A5568` | Body text                      |

### Typography
- **Headings:** Barlow Condensed (600–800 weight) — bold, industrial
- **Body:** Inter (300–800 weight) — clean, modern

---

## FTP Deployment Guide

### Prerequisites
- PHP 8.x hosting (cPanel, Plesk, DirectAdmin, etc.)
- FTP client: [FileZilla](https://filezilla-project.org/) (recommended)
- Domain pointed to hosting nameservers

### Steps

1. **Set up domain** — Point `makeshiftlogistics.com` DNS to your host's nameservers.

2. **Connect via FTP**
   ```
   Host:     ftp.makeshiftlogistics.com  (or your host's FTP address)
   Port:     21
   Protocol: FTP / FTPS
   Username: (from hosting control panel)
   Password: (from hosting control panel)
   ```

3. **Upload files** — Upload all project files to `public_html/` (or `www/`, `htdocs/` — depends on host):
   ```
   public_html/
   ├── index.php
   ├── about.php
   ├── services.php
   ├── contact.php
   ├── css/style.css
   ├── js/main.js
   ├── assets/favicon.svg
   └── includes/
       ├── header.php
       ├── nav.php
       └── footer.php
   ```

4. **Enable contact form mail** — In `contact.php`, uncomment this line after confirming your host supports `mail()`:
   ```php
   // mail($to, $subject, $body, $headers);
   ```
   Or configure SMTP (PHPMailer recommended for production).

5. **Test** — Visit `https://makeshiftlogistics.com` and confirm all pages load.

6. **SSL** — Enable free Let's Encrypt SSL in your hosting control panel for HTTPS.

### Recommended `.htaccess` (for Apache hosts)
Create `public_html/.htaccess`:
```apache
Options -Indexes
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
ErrorDocument 404 /index.php
```

---

## Updating Phone Number

When the phone number is available, add it to:

1. **`includes/footer.php`** — Add a contact item:
   ```php
   <div class="footer-contact-item">
     <div class="icon"><i class="fas fa-phone"></i></div>
     <div class="info">
       <strong>Phone / WhatsApp</strong>
       +256 XXX XXX XXX
     </div>
   </div>
   ```

2. **`contact.php`** — Add an `info-card` for the phone number.

3. **`contact.php`** WhatsApp button — update the `href`:
   ```html
   <a href="https://wa.me/256XXXXXXXXX">Chat on WhatsApp</a>
   ```

4. **`includes/nav.php`** — Optionally add a phone number in the top bar.

---

## License

Copyright © 2025 Makeshift Logistics (U) Limited. All rights reserved.  
Registered under The Companies Act 2012 — Republic of Uganda.
