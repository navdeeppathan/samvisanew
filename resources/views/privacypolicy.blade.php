<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Privacy Policy — SAM Visa Services</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<style>
    :root{
    --blue:#1a4aab;--blue-dark:#0f2f7a;--blue-mid:#1e5bc6;--blue-light:#4a7fd4;
    --blue-pale:#e8f0fb;--blue-faint:#f0f5ff;
    --gray-dark:#2c3a4a;--gray-mid:#5a6a7a;--gray-light:#8a9aaa;
    --gray-border:#d4dce6;--gray-bg:#f4f6f9;
    --white:#ffffff;
    --shadow-sm:0 2px 12px rgba(26,74,171,0.08);
    --shadow-md:0 8px 32px rgba(26,74,171,0.14);
    --shadow-blue:0 8px 32px rgba(26,74,171,0.3);
    --font-d:'Cormorant Garamond',serif;--font-b:'Jost',sans-serif;
    --expo:cubic-bezier(0.16,1,0.3,1);
    --green:#16a34a;--green-bg:#f0fdf4;--green-border:#bbf7d0;
    --amber:#d97706;--amber-bg:#fffbeb;--amber-border:#fde68a;
    --purple:#7c3aed;--purple-bg:#f5f3ff;--purple-border:#ddd6fe;
    --teal:#0d9488;--teal-bg:#f0fdfa;--teal-border:#99f6e4;
    }
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:var(--font-b);background:var(--gray-bg);color:var(--gray-dark);line-height:1.7;}
    ::-webkit-scrollbar{width:5px;}
    ::-webkit-scrollbar-thumb{background:var(--blue);border-radius:4px;}

    @keyframes shimmer{0%{background-position:-200% center;}100%{background-position:200% center;}}

    /* NAV */
    #navbar{position:sticky;top:0;z-index:100;background:rgba(255,255,255,.97);backdrop-filter:blur(16px);box-shadow:0 1px 0 var(--gray-border),var(--shadow-sm);padding:0 48px;}
    .nav-inner{max-width:1200px;margin:0 auto;height:72px;display:flex;align-items:center;justify-content:space-between;}
    .nav-logo img{height:50px;object-fit:contain;}
    .nav-back{display:inline-flex;align-items:center;gap:8px;color:var(--gray-mid);text-decoration:none;font-size:13px;font-weight:500;transition:color .3s;}
    .nav-back:hover{color:var(--blue);}
    .nav-phone{color:var(--blue);font-weight:600;font-size:13px;text-decoration:none;}

    /* PAGE HERO — teal/green for privacy */
    .page-hero{background:linear-gradient(135deg,#064e3b,#0d9488,#14b8a6);padding:72px 48px 60px;text-align:center;position:relative;overflow:hidden;}
    .page-hero::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.07) 1px,transparent 0);background-size:28px 28px;}
    .ph-inner{position:relative;z-index:2;max-width:700px;margin:0 auto;}
    .hero-badge{display:inline-flex;align-items:center;gap:7px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.2);border-radius:40px;padding:5px 16px;font-size:10px;font-weight:700;letter-spacing:2.5px;color:rgba(255,255,255,.85);text-transform:uppercase;margin-bottom:18px;}
    .hero-title{font-family:var(--font-d);font-size:clamp(36px,5vw,58px);font-weight:700;color:#fff;line-height:1.08;margin-bottom:14px;}
    .hero-title em{font-style:italic;color:rgba(255,255,255,.8);}
    .hero-sub{font-size:14px;font-weight:300;color:rgba(255,255,255,.65);line-height:1.8;}
    .hero-date{display:inline-flex;align-items:center;gap:7px;margin-top:18px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:8px;padding:7px 16px;font-size:12px;color:rgba(255,255,255,.7);font-weight:500;}

    /* GDPR BANNER */
    .gdpr-banner{background:var(--green-bg);border-bottom:2px solid var(--green-border);padding:14px 48px;}
    .gb-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:12px;}
    .gb-icon{font-size:18px;flex-shrink:0;}
    .gb-text{font-size:13px;font-weight:600;color:#15803d;line-height:1.5;}
    .gb-text span{font-weight:400;color:var(--green);}

    /* LAYOUT */
    .content-wrap{max-width:1200px;margin:0 auto;padding:48px 48px 80px;display:grid;grid-template-columns:260px 1fr;gap:40px;align-items:start;}

    /* SIDEBAR TOC */
    .toc-card{position:relative; background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;overflow:hidden;box-shadow:var(--shadow-sm);}
    .toc-head{padding:14px 20px;background:var(--teal-bg);border-bottom:1px solid var(--teal-border);}
    .toc-head p{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--teal);}
    .toc-list{list-style:none;padding:8px 0;}
    .toc-list a{display:flex;align-items:center;gap:9px;padding:9px 20px;font-size:12px;font-weight:500;color:var(--gray-mid);text-decoration:none;transition:color .2s,background .2s;border-left:3px solid transparent;}
    .toc-list a:hover{color:var(--teal);background:var(--teal-bg);border-left-color:var(--teal);}
    .toc-list a.active{color:var(--teal);background:var(--teal-bg);border-left-color:var(--teal);font-weight:600;}
    .toc-num{width:20px;height:20px;border-radius:50%;background:var(--teal-bg);display:flex;align-items:center;justify-content:center;font-size:9px;font-weight:700;color:var(--teal);flex-shrink:0;}
    .toc-list a.active .toc-num{background:var(--teal);color:#fff;}

    /* RIGHTS CARD in sidebar */
    .rights-card{background:linear-gradient(135deg,#064e3b,#0d9488);border-radius:14px;padding:20px;margin-top:14px;}
    .rc-title{font-family:var(--font-d);font-size:16px;font-weight:600;color:#fff;margin-bottom:12px;}
    .rc-list{list-style:none;display:flex;flex-direction:column;gap:8px;}
    .rc-list li{display:flex;align-items:flex-start;gap:9px;font-size:12px;color:rgba(255,255,255,.75);line-height:1.5;}
    .rc-dot{width:6px;height:6px;border-radius:50%;background:#5eead4;flex-shrink:0;margin-top:5px;}

    /* ARTICLE */
    .article{}
    .last-updated{display:flex;align-items:center;gap:8px;font-size:12px;color:var(--gray-light);margin-bottom:32px;padding:12px 16px;background:var(--white);border:1px solid var(--gray-border);border-radius:10px;}

    /* SECTION */
    .legal-section{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;padding:32px 36px;margin-bottom:20px;box-shadow:var(--shadow-sm);scroll-margin-top:100px;}
    .legal-section:hover{border-color:rgba(13,148,136,.2);}
    .legal-section::before{content:'';display:block;height:3px;background:linear-gradient(90deg,#064e3b,#0d9488,#14b8a6,#0d9488,#064e3b);background-size:200% auto;animation:shimmer 4s linear infinite;margin:-32px -36px 28px;border-radius:14px 14px 0 0;}

    /* SECTION NUM + TITLE */
    .sec-num-wrap{display:flex;align-items:center;gap:14px;margin-bottom:18px;}
    .sec-num{width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,#0d9488,#064e3b);display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;color:#fff;flex-shrink:0;font-family:var(--font-d);}
    .sec-title{font-family:var(--font-d);font-size:22px;font-weight:700;color:#064e3b;}

    /* PROSE */
    .prose{font-size:14px;color:var(--gray-mid);line-height:1.85;}
    .prose p{margin-bottom:12px;}
    .prose p:last-child{margin-bottom:0;}
    .prose strong{color:var(--gray-dark);font-weight:600;}

    /* LIST */
    .legal-list{list-style:none;display:flex;flex-direction:column;gap:8px;margin:12px 0;}
    .legal-list li{display:flex;align-items:flex-start;gap:10px;font-size:14px;color:var(--gray-mid);line-height:1.7;}
    .li-dot{width:6px;height:6px;border-radius:50%;background:var(--teal);flex-shrink:0;margin-top:8px;}

    /* BOXES */
    .highlight-box{background:var(--teal-bg);border:1.5px solid var(--teal-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .highlight-box p{font-size:13px;color:#0f766e;font-weight:500;line-height:1.7;margin:0;}
    .warning-box{background:var(--amber-bg);border:1.5px solid var(--amber-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .warning-box p{font-size:13px;color:#92400e;font-weight:500;line-height:1.7;margin:0;}
    .green-box{background:var(--green-bg);border:1.5px solid var(--green-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .green-box p{font-size:13px;color:#15803d;font-weight:500;line-height:1.7;margin:0;}

    /* DATA TYPE GRID */
    .data-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:16px;}
    .data-item{background:var(--teal-bg);border:1.5px solid var(--teal-border);border-radius:12px;padding:14px 16px;}
    .di-icon{font-size:20px;margin-bottom:8px;}
    .di-title{font-size:12px;font-weight:700;color:#0f766e;margin-bottom:4px;}
    .di-desc{font-size:11px;color:var(--gray-mid);line-height:1.5;}

    /* YOUR RIGHTS GRID */
    .rights-grid{display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-top:16px;}
    .right-item{padding:14px 16px;background:var(--teal-bg);border:1.5px solid var(--teal-border);border-radius:10px;display:flex;gap:10px;align-items:flex-start;}
    .ri-icon{font-size:16px;flex-shrink:0;}
    .ri-title{font-size:12px;font-weight:700;color:#0f766e;margin-bottom:3px;}
    .ri-desc{font-size:11px;color:var(--gray-mid);line-height:1.5;}

    /* CONTACT CARD */
    .contact-card{background:linear-gradient(135deg,#064e3b,#0d9488);border-radius:16px;padding:28px 32px;margin-bottom:20px;position:relative;overflow:hidden;}
    .contact-card::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.07) 1px,transparent 0);background-size:20px 20px;}
    .cc-inner{position:relative;z-index:2;}
    .cc-title{font-family:var(--font-d);font-size:22px;font-weight:700;color:#fff;margin-bottom:6px;}
    .cc-sub{font-size:13px;color:rgba(255,255,255,.65);margin-bottom:18px;}
    .cc-links{display:flex;flex-direction:column;gap:10px;}
    .cc-link{display:inline-flex;align-items:center;gap:10px;color:rgba(255,255,255,.85);text-decoration:none;font-size:13px;font-weight:500;transition:color .2s;}
    .cc-link:hover{color:#fff;}

    /* GOOGLE ADS NOTE */
    .google-note{background:var(--white);border:2px solid #fde68a;border-radius:14px;padding:22px 26px;margin-bottom:20px;}
    .gn-badge{display:inline-flex;align-items:center;gap:7px;background:#fef9c3;border:1px solid #fde68a;border-radius:20px;padding:4px 12px;font-size:10px;font-weight:700;letter-spacing:1.5px;color:#a16207;text-transform:uppercase;margin-bottom:12px;}
    .gn-text{font-size:13px;color:#92400e;line-height:1.7;font-weight:500;padding:12px 16px;background:var(--amber-bg);border-radius:10px;border-left:4px solid #fbbf24;}

    /* COOKIE TABLE */
    .cookie-table{width:100%;border-collapse:collapse;margin-top:14px;font-size:13px;}
    .cookie-table th{text-align:left;padding:10px 14px;background:var(--teal-bg);border:1px solid var(--teal-border);font-size:10px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--teal);}
    .cookie-table td{padding:10px 14px;border:1px solid var(--gray-border);color:var(--gray-mid);vertical-align:top;}
    .cookie-table tr:nth-child(even) td{background:var(--gray-bg);}

    /* FOOTER */
    footer{background:linear-gradient(135deg,#064e3b,#0d9488,#0f2f7a);padding:32px 48px;}
    .footer-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;}
    .footer-links{display:flex;gap:20px;}
    .footer-links a{font-size:12px;color:rgba(255,255,255,.4);text-decoration:none;transition:color .2s;}
    .footer-links a:hover{color:rgba(255,255,255,.7);}
    .footer-copy{font-size:12px;color:rgba(255,255,255,.3);}
    .footer-disclaimer{max-width:1200px;margin:12px auto 0;padding-top:16px;border-top:1px solid rgba(255,255,255,.1);}
    .footer-disclaimer p{font-size:11px;color:rgba(255,255,255,.3);text-align:center;line-height:1.7;}

    @media(max-width:1000px){.content-wrap{grid-template-columns:1fr;}.toc-card{position:static;}.data-grid{grid-template-columns:1fr 1fr;}.rights-grid{grid-template-columns:1fr;}}
    @media(max-width:640px){.content-wrap{padding:24px 20px 60px;}.page-hero{padding:56px 20px 44px;}.gdpr-banner{padding:14px 20px;}.legal-section{padding:24px 20px;}.legal-section::before{margin:-24px -20px 20px;}.data-grid{grid-template-columns:1fr;}footer{padding:24px 20px;}}
    aside {
    position: sticky;
    top: 88px; /* adjust based on navbar height */
    align-self: start;
    height: fit-content;
    }
</style>
</head>
<body>

<!-- NAV -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="/" class="nav-logo"><img src="{{asset('logotr.png')}}" alt="SAM Visa Services"/></a>
    <a href="/" class="nav-back">← Back to Home</a>
    <a href="https://wa.me/4407908268383" target="_blank" class="nav-phone">
          <svg width="16" height="16" viewBox="0 0 32 32" fill="currentColor">
            <path d="M16 .4C7.3.4.3 7.4.3 16c0 2.8.7 5.5 2.1 7.9L.2 31.8l8.1-2.1c2.3 1.3 4.9 2 7.6 2h.1c8.7 0 15.7-7 15.7-15.6S24.7.4 16 .4zm0 28.6c-2.4 0-4.8-.7-6.8-1.9l-.5-.3-4.8 1.2 1.3-4.7-.3-.5c-1.3-2.1-2-4.5-2-6.9C2.9 9 8.9 3 16 3s13.1 6 13.1 13.1S23.1 29 16 29zm7.3-9.7c-.4-.2-2.3-1.1-2.7-1.2-.4-.2-.6-.2-.9.2-.3.4-1 1.2-1.2 1.4-.2.2-.5.3-.9.1-2.4-1.2-4-2.2-5.6-5-.4-.7.4-.6 1.2-2 .1-.2.1-.5 0-.7-.1-.2-.9-2.1-1.2-2.9-.3-.7-.6-.6-.9-.6h-.8c-.3 0-.7.1-1 .5-1 1.1-1.5 2.5-1.5 3.9 0 1.4.8 2.7.9 2.9.1.2 2 3.1 4.8 4.3 2.8 1.2 2.8.8 3.3.8.5 0 1.6-.6 1.8-1.2.2-.6.2-1.1.2-1.2 0-.1-.2-.2-.5-.4z"/>
          </svg>
  
        
        +44 07908268383</a>
  </div>
</nav>

<!-- GDPR BANNER -->
<div class="gdpr-banner">
  <div class="gb-inner">
    <span class="gb-icon">🔒</span>
    <p class="gb-text">We are committed to protecting your personal data. <span>SAM Visa is ICO registered and fully GDPR compliant. We never sell your personal data to third parties.</span></p>
  </div>
</div>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="ph-inner">
    <div class="hero-badge">🔒 Data Protection</div>
    <h1 class="hero-title">Privacy <em>Policy</em></h1>
    <p class="hero-sub">Your privacy matters to us. This policy explains exactly what personal data we collect, why we collect it, and how we protect and use it.</p>
    <div class="hero-date">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      Last Updated: June 2025 &nbsp;·&nbsp; ICO Registered &nbsp;·&nbsp; GDPR Compliant
    </div>
  </div>
</div>

<!-- CONTENT -->
<div class="content-wrap">

  <!-- SIDEBAR -->
  <aside>
    <div class="toc-card">
      <div class="toc-head"><p>Table of Contents</p></div>
      <ul class="toc-list">
        <li><a href="#p1"><span class="toc-num">1</span>Introduction</a></li>
        <li><a href="#p2"><span class="toc-num">2</span>Information We Collect</a></li>
        <li><a href="#p3"><span class="toc-num">3</span>How We Use Your Data</a></li>
        <li><a href="#p4"><span class="toc-num">4</span>Data Sharing</a></li>
        <li><a href="#p5"><span class="toc-num">5</span>Data Security</a></li>
        <li><a href="#p6"><span class="toc-num">6</span>Data Retention</a></li>
        <li><a href="#p7"><span class="toc-num">7</span>Cookies</a></li>
        <li><a href="#p8"><span class="toc-num">8</span>Your Rights</a></li>
        <li><a href="#p9"><span class="toc-num">9</span>Third-Party Links</a></li>
        <li><a href="#p10"><span class="toc-num">10</span>Policy Changes</a></li>
        <li><a href="#p11"><span class="toc-num">11</span>Contact</a></li>
      </ul>
    </div>

    <!-- YOUR RIGHTS QUICK CARD -->
    <div class="rights-card">
      <p class="rc-title">Your UK Data Rights</p>
      <ul class="rc-list">
        <li><div class="rc-dot"></div>Right to access your data</li>
        <li><div class="rc-dot"></div>Right to correct inaccuracies</li>
        <li><div class="rc-dot"></div>Right to erasure ("right to be forgotten")</li>
        <li><div class="rc-dot"></div>Right to withdraw consent</li>
        <li><div class="rc-dot"></div>Right to data portability</li>
        <li><div class="rc-dot"></div>Right to object to processing</li>
      </ul>
    </div>
  </aside>

  <!-- ARTICLE -->
  <div class="article">

    <div class="last-updated" style="border-color:var(--teal-border);background:var(--teal-bg);">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--teal);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      <span style="color:#0f766e;">SAM Visa is committed to protecting the privacy and personal data of all clients and website users. This policy explains how we collect, use, store, and protect your information in accordance with UK GDPR and data protection laws.</span>
    </div>

    <!-- P1 -->
    <div class="legal-section" id="p1">
      <div class="sec-num-wrap"><div class="sec-num">1</div><h2 class="sec-title">Introduction</h2></div>
      <div class="prose">
        <p>SAM Visa is committed to protecting the privacy and personal data of all clients and website users. This Privacy Policy explains how we collect, use, store, and protect your information.</p>
        <p>By using our website or services, you agree to the collection and use of information in accordance with this policy. We will never sell, share, or use your data in a way that is not described in this document without your explicit consent.</p>
      </div>
      <div class="highlight-box"><p>🔒 SAM Visa is registered with the Information Commissioner's Office (ICO) and complies fully with the UK GDPR and the Data Protection Act 2018.</p></div>
    </div>

    <!-- P2 -->
    <div class="legal-section" id="p2">
      <div class="sec-num-wrap"><div class="sec-num">2</div><h2 class="sec-title">Information We Collect</h2></div>
      <div class="prose"><p>We may collect the following categories of personal data when you use our services or visit our website:</p></div>

      <div class="data-grid">
        <div class="data-item">
          <div class="di-icon">👤</div>
          <div class="di-title">Identity Data</div>
          <div class="di-desc">Full name, date of birth, nationality, passport details, marital status</div>
        </div>
        <div class="data-item">
          <div class="di-icon">📞</div>
          <div class="di-title">Contact Data</div>
          <div class="di-desc">Email address, phone number, residential address</div>
        </div>
        <div class="data-item">
          <div class="di-icon">✈️</div>
          <div class="di-title">Travel Data</div>
          <div class="di-desc">Travel history, destination, travel dates, visa history</div>
        </div>
        <div class="data-item">
          <div class="di-icon">💳</div>
          <div class="di-title">Payment Data</div>
          <div class="di-desc">Payment information processed securely via Stripe. We do not store card details.</div>
        </div>
        <div class="data-item">
          <div class="di-icon">📄</div>
          <div class="di-title">Document Data</div>
          <div class="di-desc">Passport scans, selfie photos, bank statements, payslips, DBS certificates</div>
        </div>
        <div class="data-item">
          <div class="di-icon">🖥️</div>
          <div class="di-title">Technical Data</div>
          <div class="di-desc">IP address, browser type, device info, pages visited, time on site</div>
        </div>
      </div>
    </div>

    <!-- P3 -->
    <div class="legal-section" id="p3">
      <div class="sec-num-wrap"><div class="sec-num">3</div><h2 class="sec-title">How We Use Your Information</h2></div>
      <div class="prose"><p>Your data is used only for the purposes described below. We process your data on the legal bases of <strong>contract performance</strong>, <strong>legal obligation</strong>, and <strong>legitimate interests</strong>.</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Processing visa assistance services on your behalf</li>
        <li><div class="li-dot"></div>Contacting you regarding your application status and requirements</li>
        <li><div class="li-dot"></div>Submitting your application to the relevant embassy or authority</li>
        <li><div class="li-dot"></div>Processing payments and issuing receipts</li>
        <li><div class="li-dot"></div>Improving our website and services</li>
        <li><div class="li-dot"></div>Complying with legal and regulatory obligations</li>
        <li><div class="li-dot"></div>Preventing fraud and misuse of our services</li>
      </ul>
      <div class="highlight-box"><p>We will never use your data for unsolicited marketing without your explicit consent. You may withdraw consent at any time by contacting us at info@samvisauk.com.</p></div>
    </div>

    <!-- P4 -->
    <div class="legal-section" id="p4">
      <div class="sec-num-wrap"><div class="sec-num">4</div><h2 class="sec-title">Data Sharing</h2></div>
      <div class="prose"><p>We only share your data with trusted third parties where it is necessary to provide our services. We may share data with:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div><strong>Embassies and consulates</strong> — to submit your visa application</li>
        <li><div class="li-dot"></div><strong>Payment processors (Stripe)</strong> — to process payments securely</li>
        <li><div class="li-dot"></div><strong>Courier and postal services</strong> — when physical documents need to be delivered</li>
        <li><div class="li-dot"></div><strong>Technology service providers</strong> — for secure hosting and application management</li>
      </ul>
      <div class="green-box"><p>✅ We do NOT sell, rent, or trade your personal data to any third party for marketing or commercial purposes. Ever.</p></div>
    </div>

    <!-- P5 -->
    <div class="legal-section" id="p5">
      <div class="sec-num-wrap"><div class="sec-num">5</div><h2 class="sec-title">Data Security</h2></div>
      <div class="prose"><p>We take the security of your personal data very seriously and implement appropriate technical and organisational measures to protect it from unauthorised access, loss, or misuse.</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Secure HTTPS-encrypted website and data transmission</li>
        <li><div class="li-dot"></div>Secure servers with restricted access controls</li>
        <li><div class="li-dot"></div>Payment data processed exclusively via Stripe (PCI DSS compliant)</li>
        <li><div class="li-dot"></div>Staff access to personal data on a need-to-know basis only</li>
        <li><div class="li-dot"></div>Regular review of security practices and data handling procedures</li>
      </ul>
      <div class="warning-box"><p>⚠️ While we implement robust security measures, no system is 100% secure. If you suspect any unauthorised access to your data, please contact us immediately at info@samvisauk.com.</p></div>
    </div>

    <!-- P6 -->
    <div class="legal-section" id="p6">
      <div class="sec-num-wrap"><div class="sec-num">6</div><h2 class="sec-title">Data Retention</h2></div>
      <div class="prose"><p>We retain your personal data only for as long as is necessary to:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Provide and complete the visa assistance service</li>
        <li><div class="li-dot"></div>Comply with legal, accounting, and regulatory requirements</li>
        <li><div class="li-dot"></div>Resolve any disputes or queries arising from the service</li>
      </ul>
      <div class="highlight-box"><p>In general, application data is retained for a minimum of 6 years to comply with UK legal requirements. After this period, data is securely deleted or anonymised. You may request earlier deletion subject to legal constraints.</p></div>
    </div>

    <!-- P7 -->
    <div class="legal-section" id="p7">
      <div class="sec-num-wrap"><div class="sec-num">7</div><h2 class="sec-title">Cookies</h2></div>
      <div class="prose"><p>Our website uses cookies to improve your browsing experience and help us understand how the site is used. Below is a summary of the types of cookies we may use:</p></div>
      <table class="cookie-table">
        <thead>
          <tr>
            <th>Cookie Type</th>
            <th>Purpose</th>
            <th>Duration</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Essential</strong></td>
            <td>Required for the website to function (e.g. session management, form submissions)</td>
            <td>Session</td>
          </tr>
          <tr>
            <td><strong>Analytics</strong></td>
            <td>Helps us understand website traffic and user behaviour (e.g. Google Analytics)</td>
            <td>Up to 2 years</td>
          </tr>
          <tr>
            <td><strong>Functional</strong></td>
            <td>Remembers your preferences and settings to enhance your experience</td>
            <td>Up to 1 year</td>
          </tr>
          <tr>
            <td><strong>Marketing</strong></td>
            <td>Used to deliver relevant advertisements (e.g. Google Ads) — only with your consent</td>
            <td>Up to 90 days</td>
          </tr>
        </tbody>
      </table>
      <div class="highlight-box" style="margin-top:16px;"><p>You can manage or disable cookies at any time through your browser settings. Disabling essential cookies may affect the functionality of this website.</p></div>
    </div>

    <!-- P8 -->
    <div class="legal-section" id="p8">
      <div class="sec-num-wrap"><div class="sec-num">8</div><h2 class="sec-title">Your Rights</h2></div>
      <div class="prose"><p>Under UK data protection laws (UK GDPR and the Data Protection Act 2018), you have the following rights regarding your personal data:</p></div>
      <div class="rights-grid">
        <div class="right-item">
          <div class="ri-icon">👁️</div>
          <div>
            <div class="ri-title">Right of Access</div>
            <div class="ri-desc">Request a copy of the personal data we hold about you (Subject Access Request)</div>
          </div>
        </div>
        <div class="right-item">
          <div class="ri-icon">✏️</div>
          <div>
            <div class="ri-title">Right to Rectification</div>
            <div class="ri-desc">Request correction of any inaccurate or incomplete personal data</div>
          </div>
        </div>
        <div class="right-item">
          <div class="ri-icon">🗑️</div>
          <div>
            <div class="ri-title">Right to Erasure</div>
            <div class="ri-desc">Request deletion of your data ("right to be forgotten") where legally applicable</div>
          </div>
        </div>
        <div class="right-item">
          <div class="ri-icon">🚫</div>
          <div>
            <div class="ri-title">Right to Object</div>
            <div class="ri-desc">Object to the processing of your data for marketing purposes at any time</div>
          </div>
        </div>
        <div class="right-item">
          <div class="ri-icon">📦</div>
          <div>
            <div class="ri-title">Right to Portability</div>
            <div class="ri-desc">Request your data in a structured, machine-readable format for transfer</div>
          </div>
        </div>
        <div class="right-item">
          <div class="ri-icon">⏸️</div>
          <div>
            <div class="ri-title">Right to Restrict</div>
            <div class="ri-desc">Request restriction of processing while accuracy or lawfulness is contested</div>
          </div>
        </div>
      </div>
      <div class="highlight-box" style="margin-top:16px;"><p>To exercise any of these rights, please contact us at <strong>info@samvisauk.com</strong>. We will respond within 30 days. If you are unsatisfied with our response, you have the right to lodge a complaint with the <strong>Information Commissioner's Office (ICO)</strong> at ico.org.uk.</p></div>
    </div>

    <!-- P9 -->
    <div class="legal-section" id="p9">
      <div class="sec-num-wrap"><div class="sec-num">9</div><h2 class="sec-title">Third-Party Links</h2></div>
      <div class="prose">
        <p>Our website may contain links to external websites, including embassy portals, government sites, and partner services.</p>
        <p>SAM Visa is not responsible for the privacy practices, content, or security of those external websites. We encourage you to review the privacy policies of any third-party sites you visit.</p>
      </div>
    </div>

    <!-- P10 -->
    <div class="legal-section" id="p10">
      <div class="sec-num-wrap"><div class="sec-num">10</div><h2 class="sec-title">Changes to this Privacy Policy</h2></div>
      <div class="prose">
        <p>We may update this Privacy Policy from time to time to reflect changes in our practices, legal requirements, or technology.</p>
        <p>Any updates will be published on this page with a revised "Last Updated" date. For significant changes, we may also notify registered users by email. Continued use of our services after changes are published constitutes your acceptance of the revised policy.</p>
      </div>
    </div>

    <!-- P11 CONTACT -->
    <div class="contact-card" id="p11">
      <div class="cc-inner">
        <p style="font-size:10px;font-weight:700;letter-spacing:2.5px;color:rgba(255,255,255,.5);text-transform:uppercase;margin-bottom:6px;">Section 11</p>
        <p class="cc-title">Privacy Contact</p>
        <p class="cc-sub">For all privacy-related questions, data requests, or complaints about how we handle your personal data, please contact us directly.</p>
        <div class="cc-links">
          <a href="mailto:info@samvisauk.com" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            info@samvisauk.com
          </a>
          <a href="https://samvisauk.com" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
            https://samvisauk.com
          </a>
          <a href="https://ico.org.uk" target="_blank" rel="noopener" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            ICO — ico.org.uk (lodge a complaint)
          </a>
        </div>
      </div>
    </div>

    <!-- GOOGLE ADS NOTICE -->
    <div class="google-note">
      <div class="gn-badge">✅ Google Ads Compliance</div>
      <div class="gn-text">
        <strong>SAM Visa is a private visa support agency and is not affiliated with any government or embassy.</strong> We do not issue visas or make visa decisions. All visa approvals are determined solely by the relevant embassy, consulate, or immigration authority. This statement is required for compliance with Google Ads "Government Documents and Services" policy.
      </div>
    </div>

    <!-- TERMS LINK -->
    <div style="background:var(--white);border:1.5px solid var(--gray-border);border-radius:14px;padding:22px 28px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;">
      <div>
        <p style="font-family:var(--font-d);font-size:18px;font-weight:600;color:var(--blue-dark);margin-bottom:4px;">Also read our Terms &amp; Conditions</p>
        <p style="font-size:13px;color:var(--gray-mid);">Understand the terms that govern your use of our services.</p>
      </div>
      <a href="/terms-and-conditions" style="display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#0d9488,#064e3b);color:#fff;font-family:var(--font-b);font-weight:700;font-size:12px;letter-spacing:.5px;padding:12px 22px;border-radius:10px;text-decoration:none;">
        Terms &amp; Conditions →
      </a>
    </div>

  </div><!-- /article -->
</div><!-- /content-wrap -->

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <img src="{{asset('logotr.png')}}" alt="SAM Visa Services" style="height:40px;filter:brightness(0) invert(1);opacity:.5;"/>
    <div class="footer-links">
      <a href="/">Home</a>
      <a href="/terms-and-conditions">Terms</a>
      <a href="/privacy-policy" style="color:rgba(255,255,255,.65);">Privacy</a>
      <a href="/disclaimer">Disclaimer</a>
      <a href="/service-agreement">Agreement</a>
      <a href="mailto:info@samvisauk.com">Contact</a>
    </div>
    <p class="footer-copy">© {{ date('Y') }} SAM Visa Services</p>
  </div>
  <div class="footer-disclaimer">
    <p>SAM Visa is a private visa support agency and is not affiliated with any government or embassy. We do not issue visas or make visa decisions. All visa approvals are determined solely by the relevant embassy, consulate, or immigration authority.</p>
  </div>
</footer>

<script>
// Active TOC on scroll
const tocLinks = document.querySelectorAll('.toc-list a');
window.addEventListener('scroll', () => {
  let current = '';
  document.querySelectorAll('[id^="p"]').forEach(sec => {
    if (window.scrollY >= sec.offsetTop - 120) current = sec.id;
  });
  tocLinks.forEach(a => {
    a.classList.toggle('active', a.getAttribute('href') === '#' + current);
  });
}, {passive:true});
</script>
</body>
</html>