<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Service Agreement — SAM Visa Services</title>
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
    --font-d:'Cormorant Garamond',serif;--font-b:'Jost',sans-serif;
    --green:#16a34a;--green-bg:#f0fdf4;--green-border:#bbf7d0;
    --amber:#d97706;--amber-bg:#fffbeb;--amber-border:#fde68a;
    --red:#dc2626;--red-bg:#fef2f2;--red-border:#fecaca;
    --purple:#7c3aed;--purple-bg:#f5f3ff;--purple-border:#ddd6fe;
    /* Indigo theme for this page */
    --ind:#4338ca;--ind-dark:#312e81;--ind-mid:#4f46e5;--ind-light:#818cf8;
    --ind-bg:#eef2ff;--ind-border:#c7d2fe;
    }
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:var(--font-b);background:var(--gray-bg);color:var(--gray-dark);line-height:1.7;}
    ::-webkit-scrollbar{width:5px;}
    ::-webkit-scrollbar-thumb{background:var(--ind);border-radius:4px;}

    @keyframes shimmer{0%{background-position:-200% center;}100%{background-position:200% center;}}

    /* NAV */
    #navbar{position:sticky;top:0;z-index:100;background:rgba(255,255,255,.97);backdrop-filter:blur(16px);box-shadow:0 1px 0 var(--gray-border),var(--shadow-sm);padding:0 48px;}
    .nav-inner{max-width:1200px;margin:0 auto;height:72px;display:flex;align-items:center;justify-content:space-between;}
    .nav-logo img{height:50px;object-fit:contain;}
    .nav-back{display:inline-flex;align-items:center;gap:8px;color:var(--gray-mid);text-decoration:none;font-size:13px;font-weight:500;transition:color .3s;}
    .nav-back:hover{color:var(--ind);}
    .nav-phone{color:var(--ind);font-weight:600;font-size:13px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;}

    /* HERO */
    .page-hero{background:linear-gradient(135deg,#1e1b4b,#312e81,#4338ca,#4f46e5);padding:72px 48px 60px;text-align:center;position:relative;overflow:hidden;}
    .page-hero::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.07) 1px,transparent 0);background-size:28px 28px;}
    .ph-inner{position:relative;z-index:2;max-width:700px;margin:0 auto;}
    .hero-badge{display:inline-flex;align-items:center;gap:7px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.2);border-radius:40px;padding:5px 16px;font-size:10px;font-weight:700;letter-spacing:2.5px;color:rgba(255,255,255,.85);text-transform:uppercase;margin-bottom:18px;}
    .hero-title{font-family:var(--font-d);font-size:clamp(36px,5vw,58px);font-weight:700;color:#fff;line-height:1.08;margin-bottom:14px;}
    .hero-title em{font-style:italic;color:rgba(255,255,255,.75);}
    .hero-sub{font-size:14px;font-weight:300;color:rgba(255,255,255,.65);line-height:1.8;}
    .hero-date{display:inline-flex;align-items:center;gap:7px;margin-top:18px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:8px;padding:7px 16px;font-size:12px;color:rgba(255,255,255,.7);font-weight:500;}

    /* AGREEMENT BANNER */
    .agree-banner{background:var(--ind-bg);border-bottom:2px solid var(--ind-border);padding:14px 48px;}
    .ab-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:12px;}
    .ab-icon{font-size:18px;flex-shrink:0;}
    .ab-text{font-size:13px;font-weight:600;color:var(--ind-dark);line-height:1.5;}
    .ab-text span{font-weight:400;color:var(--ind);}

    /* LAYOUT */
    .content-wrap{max-width:1200px;margin:0 auto;padding:48px 48px 80px;display:grid;grid-template-columns:260px 1fr;gap:40px;align-items:start;}

    /* SIDEBAR TOC */
    .toc-card{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;overflow:hidden;box-shadow:var(--shadow-sm);}
    .toc-head{padding:14px 20px;background:var(--ind-bg);border-bottom:1px solid var(--ind-border);}
    .toc-head p{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--ind);}
    .toc-list{list-style:none;padding:8px 0;}
    .toc-list a{display:flex;align-items:center;gap:9px;padding:9px 20px;font-size:12px;font-weight:500;color:var(--gray-mid);text-decoration:none;transition:color .2s,background .2s;border-left:3px solid transparent;}
    .toc-list a:hover{color:var(--ind);background:var(--ind-bg);border-left-color:var(--ind);}
    .toc-list a.active{color:var(--ind);background:var(--ind-bg);border-left-color:var(--ind);font-weight:600;}
    .toc-num{width:20px;height:20px;border-radius:50%;background:var(--ind-bg);display:flex;align-items:center;justify-content:center;font-size:9px;font-weight:700;color:var(--ind);flex-shrink:0;}
    .toc-list a.active .toc-num{background:var(--ind);color:#fff;}

    /* ACCEPTANCE CARD */
    .accept-card{background:linear-gradient(135deg,#1e1b4b,#4338ca);border-radius:14px;padding:20px;margin-top:14px;}
    .ac-title{font-family:var(--font-d);font-size:16px;font-weight:600;color:#fff;margin-bottom:12px;}
    .ac-list{list-style:none;display:flex;flex-direction:column;gap:8px;}
    .ac-list li{display:flex;align-items:flex-start;gap:9px;font-size:12px;color:rgba(255,255,255,.75);line-height:1.5;}
    .ac-dot{width:6px;height:6px;border-radius:50%;background:#a5b4fc;flex-shrink:0;margin-top:5px;}

    /* ARTICLE */
    .last-updated{display:flex;align-items:center;gap:8px;font-size:12px;margin-bottom:32px;padding:12px 16px;background:var(--ind-bg);border:1px solid var(--ind-border);border-radius:10px;}

    /* SECTION */
    .legal-section{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;padding:32px 36px;margin-bottom:20px;box-shadow:var(--shadow-sm);scroll-margin-top:100px;transition:border-color .3s;}
    .legal-section:hover{border-color:rgba(67,56,202,.2);}
    .legal-section::before{content:'';display:block;height:3px;background:linear-gradient(90deg,#1e1b4b,#4338ca,#818cf8,#4338ca,#1e1b4b);background-size:200% auto;animation:shimmer 4s linear infinite;margin:-32px -36px 28px;border-radius:14px 14px 0 0;}

    /* SEC NUM + TITLE */
    .sec-num-wrap{display:flex;align-items:center;gap:14px;margin-bottom:18px;}
    .sec-num{width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,#4338ca,#1e1b4b);display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;color:#fff;flex-shrink:0;font-family:var(--font-d);}
    .sec-title{font-family:var(--font-d);font-size:22px;font-weight:700;color:var(--ind-dark);}

    /* PROSE */
    .prose{font-size:14px;color:var(--gray-mid);line-height:1.85;}
    .prose p{margin-bottom:12px;}
    .prose p:last-child{margin-bottom:0;}
    .prose strong{color:var(--gray-dark);font-weight:600;}

    /* LIST */
    .legal-list{list-style:none;display:flex;flex-direction:column;gap:8px;margin:12px 0;}
    .legal-list li{display:flex;align-items:flex-start;gap:10px;font-size:14px;color:var(--gray-mid);line-height:1.7;}
    .li-dot{width:6px;height:6px;border-radius:50%;background:var(--ind);flex-shrink:0;margin-top:8px;}

    /* BOXES */
    .highlight-box{background:var(--ind-bg);border:1.5px solid var(--ind-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .highlight-box p{font-size:13px;color:var(--ind-dark);font-weight:500;line-height:1.7;margin:0;}
    .warning-box{background:var(--amber-bg);border:1.5px solid var(--amber-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .warning-box p{font-size:13px;color:#92400e;font-weight:500;line-height:1.7;margin:0;}
    .green-box{background:var(--green-bg);border:1.5px solid var(--green-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .green-box p{font-size:13px;color:#15803d;font-weight:500;line-height:1.7;margin:0;}
    .red-box{background:var(--red-bg);border:1.5px solid var(--red-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .red-box p{font-size:13px;color:#991b1b;font-weight:500;line-height:1.7;margin:0;}
    .purple-box{background:var(--purple-bg);border:1.5px solid var(--purple-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .purple-box p{font-size:13px;color:#5b21b6;font-weight:500;line-height:1.7;margin:0;}

    /* SCOPE GRID */
    .scope-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:16px;}
    .scope-item{background:var(--ind-bg);border:1.5px solid var(--ind-border);border-radius:12px;padding:16px;}
    .si-icon{font-size:20px;margin-bottom:8px;}
    .si-title{font-size:12px;font-weight:700;color:var(--ind-dark);margin-bottom:4px;}
    .si-desc{font-size:11px;color:var(--gray-mid);line-height:1.5;}

    /* ACCEPTANCE CHECKLIST */
    .accept-grid{display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-top:16px;}
    .accept-item{padding:14px 16px;background:var(--green-bg);border:1.5px solid var(--green-border);border-radius:10px;display:flex;gap:10px;align-items:flex-start;font-size:13px;color:#15803d;line-height:1.6;}

    /* CONTACT CARD */
    .contact-card{background:linear-gradient(135deg,#1e1b4b,#4338ca);border-radius:16px;padding:28px 32px;margin-bottom:20px;position:relative;overflow:hidden;}
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

    /* FOOTER */
    footer{background:linear-gradient(135deg,#1e1b4b,#312e81,#1a4aab);padding:32px 48px;}
    .footer-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;}
    .footer-links{display:flex;gap:20px;}
    .footer-links a{font-size:12px;color:rgba(255,255,255,.4);text-decoration:none;transition:color .2s;}
    .footer-links a:hover{color:rgba(255,255,255,.7);}
    .footer-copy{font-size:12px;color:rgba(255,255,255,.3);}
    .footer-disclaimer{max-width:1200px;margin:12px auto 0;padding-top:16px;border-top:1px solid rgba(255,255,255,.1);}
    .footer-disclaimer p{font-size:11px;color:rgba(255,255,255,.3);text-align:center;line-height:1.7;}

    aside{position:sticky;top:88px;align-self:start;height:fit-content;}

    @media(max-width:1000px){
      aside{
        display: none;
      }
    }
    @media(max-width:1000px){.content-wrap{grid-template-columns:1fr;}.toc-card{position:static;}.scope-grid{grid-template-columns:1fr 1fr;}.accept-grid{grid-template-columns:1fr;}}
    @media(max-width:640px){.content-wrap{padding:24px 20px 60px;}.page-hero{padding:56px 20px 44px;}.agree-banner{padding:14px 20px;}.legal-section{padding:24px 20px;}.legal-section::before{margin:-24px -20px 20px;}.scope-grid{grid-template-columns:1fr;}footer{padding:24px 20px;}}
</style>
</head>
<body>

<!-- NAV -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="/" class="nav-logo">
      <img src="logotr.png" alt="SAM Visa Services" onerror="this.style.display='none';this.nextElementSibling.style.display='block'"/>
      <span style="display:none;font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:700;color:#312e81;">SAM Visa</span>
    </a>
    <a href="/" class="nav-back">← Back to Home</a>
    <a href="https://wa.me/4407908268383" target="_blank" class="nav-phone">
      <svg width="16" height="16" viewBox="0 0 32 32" fill="currentColor"><path d="M16 .4C7.3.4.3 7.4.3 16c0 2.8.7 5.5 2.1 7.9L.2 31.8l8.1-2.1c2.3 1.3 4.9 2 7.6 2h.1c8.7 0 15.7-7 15.7-15.6S24.7.4 16 .4zm0 28.6c-2.4 0-4.8-.7-6.8-1.9l-.5-.3-4.8 1.2 1.3-4.7-.3-.5c-1.3-2.1-2-4.5-2-6.9C2.9 9 8.9 3 16 3s13.1 6 13.1 13.1S23.1 29 16 29zm7.3-9.7c-.4-.2-2.3-1.1-2.7-1.2-.4-.2-.6-.2-.9.2-.3.4-1 1.2-1.2 1.4-.2.2-.5.3-.9.1-2.4-1.2-4-2.2-5.6-5-.4-.7.4-.6 1.2-2 .1-.2.1-.5 0-.7-.1-.2-.9-2.1-1.2-2.9-.3-.7-.6-.6-.9-.6h-.8c-.3 0-.7.1-1 .5-1 1.1-1.5 2.5-1.5 3.9 0 1.4.8 2.7.9 2.9.1.2 2 3.1 4.8 4.3 2.8 1.2 2.8.8 3.3.8.5 0 1.6-.6 1.8-1.2.2-.6.2-1.1.2-1.2 0-.1-.2-.2-.5-.4z"/></svg>
      +44 07908268383
    </a>
  </div>
</nav>

<!-- AGREEMENT BANNER -->
<div class="agree-banner">
  <div class="ab-inner">
    <span class="ab-icon">📋</span>
    <p class="ab-text">Legal Agreement. <span>By using SAM Visa services or submitting an application, you confirm that you have read and agree to this Service Agreement in full.</span></p>
  </div>
</div>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="ph-inner">
    <div class="hero-badge">📋 Client Agreement</div>
    <h1 class="hero-title">Service <em>Agreement</em></h1>
    <p class="hero-sub">This agreement sets out the terms under which SAM Visa provides visa support and consultancy services. Please read it carefully before using our services.</p>
    <div class="hero-date">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      Last Updated: June 2025 &nbsp;·&nbsp; England &amp; Wales Law &nbsp;·&nbsp; samvisauk.com
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
        <li><a href="#s1"><span class="toc-num">1</span>Company Status</a></li>
        <li><a href="#s2"><span class="toc-num">2</span>Scope of Services</a></li>
        <li><a href="#s3"><span class="toc-num">3</span>Client Responsibilities</a></li>
        <li><a href="#s4"><span class="toc-num">4</span>Visa Decisions</a></li>
        <li><a href="#s5"><span class="toc-num">5</span>Fees &amp; Payments</a></li>
        <li><a href="#s6"><span class="toc-num">6</span>Refund Policy</a></li>
        <li><a href="#s7"><span class="toc-num">7</span>Processing Time</a></li>
        <li><a href="#s8"><span class="toc-num">8</span>Confidentiality</a></li>
        <li><a href="#s9"><span class="toc-num">9</span>Limitation of Liability</a></li>
        <li><a href="#s10"><span class="toc-num">10</span>Termination</a></li>
        <li><a href="#s11"><span class="toc-num">11</span>Policy Changes</a></li>
        <li><a href="#s12"><span class="toc-num">12</span>Governing Law</a></li>
        <li><a href="#s13"><span class="toc-num">13</span>Acceptance</a></li>
        <li><a href="#s14"><span class="toc-num">14</span>Contact</a></li>
      </ul>
    </div>

    <!-- BY USING OUR SERVICES CARD -->
    <div class="accept-card">
      <p class="ac-title">By Using Our Services</p>
      <ul class="ac-list">
        <li><div class="ac-dot"></div>You agree to all terms in this agreement</li>
        <li><div class="ac-dot"></div>You accept visa outcomes are not our decision</li>
        <li><div class="ac-dot"></div>You confirm all information is accurate</li>
        <li><div class="ac-dot"></div>You understand fees may be non-refundable</li>
        <li><div class="ac-dot"></div>Subject to laws of England &amp; Wales</li>
      </ul>
    </div>
  </aside>

  <!-- ARTICLE -->
  <div class="article">

    <div class="last-updated">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--ind);flex-shrink:0;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
      <span style="color:var(--ind-dark);font-size:13px;">This Service Agreement ("Agreement") sets out the terms under which Sam Visa provides visa support and consultancy services to clients. By using our services, you confirm you have read and accepted these terms.</span>
    </div>

    <!-- S1 -->
    <div class="legal-section" id="s1">
      <div class="sec-num-wrap"><div class="sec-num">1</div><h2 class="sec-title">Company Status and Service Nature</h2></div>
      <div class="prose"><p>Sam Visa is a private visa support and consultancy service provider operating independently of all government bodies.</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Sam Visa is <strong>NOT</strong> a government body, immigration authority, embassy, or consulate</li>
        <li><div class="li-dot"></div>Sam Visa does <strong>not</strong> issue visas or make immigration decisions</li>
        <li><div class="li-dot"></div>All visa approvals, refusals, or decisions are made solely by the relevant government authority or embassy</li>
        <li><div class="li-dot"></div>Sam Visa provides <strong>administrative support services only</strong>, including assistance with visa applications, document preparation, and appointment scheduling</li>
      </ul>
      <div class="highlight-box"><p>📋 Sam Visa's role is strictly limited to supporting and preparing your application. We have no influence over the final immigration decision.</p></div>
    </div>

    <!-- S2 -->
    <div class="legal-section" id="s2">
      <div class="sec-num-wrap"><div class="sec-num">2</div><h2 class="sec-title">Scope of Services</h2></div>
      <div class="prose"><p>Sam Visa may provide the following services. The exact services provided may vary depending on the visa type and individual client requirements.</p></div>
      <div class="scope-grid">
        <div class="scope-item">
          <div class="si-icon">💬</div>
          <div class="si-title">Consultation</div>
          <div class="si-desc">Visa application guidance and expert consultation tailored to your situation</div>
        </div>
        <div class="scope-item">
          <div class="si-icon">📝</div>
          <div class="si-title">Form Assistance</div>
          <div class="si-desc">Help completing visa application forms accurately and completely</div>
        </div>
        <div class="scope-item">
          <div class="si-icon">📄</div>
          <div class="si-title">Document Prep</div>
          <div class="si-desc">Document preparation, review, and verification before submission</div>
        </div>
        <div class="scope-item">
          <div class="si-icon">📅</div>
          <div class="si-title">Appointments</div>
          <div class="si-desc">Appointment booking assistance at relevant embassies or visa centres</div>
        </div>
        <div class="scope-item">
          <div class="si-icon">📤</div>
          <div class="si-title">Submission</div>
          <div class="si-desc">Application submission support where applicable to the visa type</div>
        </div>
        <div class="scope-item">
          <div class="si-icon">ℹ️</div>
          <div class="si-title">Information</div>
          <div class="si-desc">General information about visa procedures, requirements, and timelines</div>
        </div>
      </div>
    </div>

    <!-- S3 -->
    <div class="legal-section" id="s3">
      <div class="sec-num-wrap"><div class="sec-num">3</div><h2 class="sec-title">Client Responsibilities</h2></div>
      <div class="prose"><p>As a client of Sam Visa, you agree to the following responsibilities throughout the application process:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Provide <strong>accurate, truthful, and complete</strong> information at all times</li>
        <li><div class="li-dot"></div>Submit all requested documentation <strong>within the required timelines</strong></li>
        <li><div class="li-dot"></div>Review all application forms and documents <strong>before submission</strong></li>
        <li><div class="li-dot"></div>Ensure that passports and supporting documents are <strong>valid and authentic</strong></li>
        <li><div class="li-dot"></div>Respond promptly to requests for additional information or documents</li>
      </ul>
      <div class="warning-box"><p>⚠️ Sam Visa will not be responsible for any delays, refusals, or complications arising from inaccurate, incomplete, or fraudulent information provided by the client.</p></div>
    </div>

    <!-- S4 -->
    <div class="legal-section" id="s4">
      <div class="sec-num-wrap"><div class="sec-num">4</div><h2 class="sec-title">Visa Decisions</h2></div>
      <div class="prose"><p>Visa decisions are made <strong>exclusively</strong> by the relevant immigration authorities, embassies, or consulates. Sam Visa has no role in this process.</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Sam Visa <strong>cannot guarantee</strong> visa approval under any circumstances</li>
        <li><div class="li-dot"></div>Sam Visa <strong>cannot influence</strong> visa decisions made by government authorities</li>
        <li><div class="li-dot"></div>Sam Visa <strong>cannot control</strong> visa processing times</li>
      </ul>
      <div class="red-box"><p>🚫 Clients acknowledge that the outcome of their visa application is entirely outside the control of Sam Visa. No refund of service fees will be issued on the basis of a visa refusal.</p></div>
    </div>

    <!-- S5 -->
    <div class="legal-section" id="s5">
      <div class="sec-num-wrap"><div class="sec-num">5</div><h2 class="sec-title">Fees and Payments</h2></div>
      <div class="prose"><p>Clients agree to pay the service fees applicable to their requested services. All fees are clearly outlined before the commencement of work.</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Service fees cover <strong>administrative and consultancy services</strong> provided by Sam Visa</li>
        <li><div class="li-dot"></div>Fees do <strong>NOT include</strong> government visa fees, biometric fees, or embassy charges unless specifically stated</li>
        <li><div class="li-dot"></div>Government fees are determined by immigration authorities and are <strong>usually non-refundable</strong></li>
      </ul>
      <div class="highlight-box"><p>💳 All payments are processed securely. Please ensure you understand what is included in your service fee before completing payment.</p></div>
    </div>

    <!-- S6 -->
    <div class="legal-section" id="s6">
      <div class="sec-num-wrap"><div class="sec-num">6</div><h2 class="sec-title">Refund Policy</h2></div>
      <div class="prose"><p>Refunds are subject to the full terms outlined in our <strong>Refund Policy</strong>. The key principles are summarised below:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Service fees may be refundable <strong>only if work has not started</strong></li>
        <li><div class="li-dot"></div>Once document preparation or application submission has begun, <strong>service fees may not be refundable</strong></li>
        <li><div class="li-dot"></div>Visa refusals do <strong>not</strong> qualify for refunds of service fees</li>
      </ul>
      <div class="highlight-box"><p>📖 For full details, please review our complete <a href="/disclaimer" style="color:var(--ind);font-weight:600;">Refund &amp; Cancellation Policy</a>.</p></div>
    </div>

    <!-- S7 -->
    <div class="legal-section" id="s7">
      <div class="sec-num-wrap"><div class="sec-num">7</div><h2 class="sec-title">Processing Time</h2></div>
      <div class="prose"><p>Any visa processing timelines provided by Sam Visa are <strong>estimates only</strong> and should not be relied upon as guaranteed timescales.</p></div>
      <div class="prose"><p>Actual timelines depend on immigration authorities and may vary due to government procedures, application volumes, security checks, and requests for additional documentation.</p></div>
      <div class="warning-box"><p>⚠️ Sam Visa cannot guarantee specific processing times. We strongly advise applying well in advance of any planned travel date.</p></div>
    </div>

    <!-- S8 -->
    <div class="legal-section" id="s8">
      <div class="sec-num-wrap"><div class="sec-num">8</div><h2 class="sec-title">Confidentiality and Data Protection</h2></div>
      <div class="prose">
        <p>Sam Visa respects the confidentiality of client information and will handle all personal data in accordance with applicable data protection laws and the company's <strong>Privacy Policy</strong>.</p>
        <p>Client information may be shared with relevant immigration authorities or service providers <strong>solely for the purpose</strong> of processing visa applications.</p>
      </div>
      <div class="green-box"><p>🔒 SAM Visa is ICO registered and fully GDPR compliant. We will never sell or share your personal data for marketing purposes. Read our full <a href="/privacy-policy" style="color:#15803d;font-weight:600;">Privacy Policy</a>.</p></div>
    </div>

    <!-- S9 -->
    <div class="legal-section" id="s9">
      <div class="sec-num-wrap"><div class="sec-num">9</div><h2 class="sec-title">Limitation of Liability</h2></div>
      <div class="prose"><p>Sam Visa shall not be liable for any losses, damages, or costs arising from the following:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Visa refusals or processing delays by immigration authorities</li>
        <li><div class="li-dot"></div>Losses caused by immigration decisions outside our control</li>
        <li><div class="li-dot"></div>Travel costs or financial losses due to visa outcomes</li>
        <li><div class="li-dot"></div>Errors in documents provided by the client</li>
      </ul>
      <div class="purple-box"><p>⚖️ The total liability of Sam Visa shall in all circumstances be limited to the amount paid by the client for the specific service fees relating to the matter in dispute.</p></div>
    </div>

    <!-- S10 -->
    <div class="legal-section" id="s10">
      <div class="sec-num-wrap"><div class="sec-num">10</div><h2 class="sec-title">Termination of Services</h2></div>
      <div class="prose"><p>Sam Visa reserves the right to terminate or refuse services at its discretion in the following circumstances:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>False or misleading information is provided by the client</li>
        <li><div class="li-dot"></div>Required documentation is not submitted within agreed timelines</li>
        <li><div class="li-dot"></div>The client fails to comply with the terms of this Agreement</li>
        <li><div class="li-dot"></div>The requested service cannot legally be provided</li>
      </ul>
      <div class="red-box"><p>🚫 In the event of termination due to client misconduct or failure to comply, service fees already paid may not be refunded.</p></div>
    </div>

    <!-- S11 -->
    <div class="legal-section" id="s11">
      <div class="sec-num-wrap"><div class="sec-num">11</div><h2 class="sec-title">Changes to Services or Policies</h2></div>
      <div class="prose">
        <p>Sam Visa reserves the right to update or modify its services, policies, or agreements at any time without prior notice.</p>
        <p>Updated terms will be published on the website with a revised date. Continued use of our services after any such changes constitutes your acceptance of the updated terms.</p>
      </div>
    </div>

    <!-- S12 -->
    <div class="legal-section" id="s12">
      <div class="sec-num-wrap"><div class="sec-num">12</div><h2 class="sec-title">Governing Law</h2></div>
      <div class="prose">
        <p>This Agreement shall be governed by and construed in accordance with the <strong>laws of England and Wales</strong>.</p>
        <p>Any disputes arising from the use of Sam Visa services shall fall under the exclusive jurisdiction of the courts of the United Kingdom.</p>
      </div>
      <div class="highlight-box"><p>⚖️ This agreement is legally binding and subject to English and Welsh law. If you have any concerns, we recommend seeking independent legal advice before using our services.</p></div>
    </div>

    <!-- S13 -->
    <div class="legal-section" id="s13">
      <div class="sec-num-wrap"><div class="sec-num">13</div><h2 class="sec-title">Acceptance of Agreement</h2></div>
      <div class="prose"><p>By using Sam Visa services, making a payment, or submitting an application through the website, you confirm each of the following:</p></div>
      <div class="accept-grid">
        <div class="accept-item">
          <span>✅</span>
          <span>You have <strong>read this Service Agreement</strong> in full</span>
        </div>
        <div class="accept-item">
          <span>✅</span>
          <span>You <strong>understand the scope</strong> of services provided</span>
        </div>
        <div class="accept-item">
          <span>✅</span>
          <span>You accept that <strong>visa decisions are made solely</strong> by immigration authorities</span>
        </div>
        <div class="accept-item">
          <span>✅</span>
          <span>You agree to all <strong>fees, refund, and cancellation</strong> terms</span>
        </div>
        <div class="accept-item">
          <span>✅</span>
          <span>You confirm all information you provide will be <strong>accurate and truthful</strong></span>
        </div>
        <div class="accept-item">
          <span>✅</span>
          <span>This agreement is <strong>governed by the laws</strong> of England and Wales</span>
        </div>
      </div>
    </div>

    <!-- S14 CONTACT -->
    <div class="contact-card" id="s14">
      <div class="cc-inner">
        <p style="font-size:10px;font-weight:700;letter-spacing:2.5px;color:rgba(255,255,255,.5);text-transform:uppercase;margin-bottom:6px;">Section 14</p>
        <p class="cc-title">Contact Information</p>
        <p class="cc-sub">For any questions regarding this Service Agreement or our services, please get in touch using the details below.</p>
        <div class="cc-links">
          <a href="mailto:info@samvisauk.com" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            info@samvisauk.com
          </a>
          <a href="https://samvisauk.com" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
            https://samvisauk.com
          </a>
          <a href="https://wa.me/4407908268383" target="_blank" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 32 32" fill="currentColor"><path d="M16 .4C7.3.4.3 7.4.3 16c0 2.8.7 5.5 2.1 7.9L.2 31.8l8.1-2.1c2.3 1.3 4.9 2 7.6 2h.1c8.7 0 15.7-7 15.7-15.6S24.7.4 16 .4zm0 28.6c-2.4 0-4.8-.7-6.8-1.9l-.5-.3-4.8 1.2 1.3-4.7-.3-.5c-1.3-2.1-2-4.5-2-6.9C2.9 9 8.9 3 16 3s13.1 6 13.1 13.1S23.1 29 16 29zm7.3-9.7c-.4-.2-2.3-1.1-2.7-1.2-.4-.2-.6-.2-.9.2-.3.4-1 1.2-1.2 1.4-.2.2-.5.3-.9.1-2.4-1.2-4-2.2-5.6-5-.4-.7.4-.6 1.2-2 .1-.2.1-.5 0-.7-.1-.2-.9-2.1-1.2-2.9-.3-.7-.6-.6-.9-.6h-.8c-.3 0-.7.1-1 .5-1 1.1-1.5 2.5-1.5 3.9 0 1.4.8 2.7.9 2.9.1.2 2 3.1 4.8 4.3 2.8 1.2 2.8.8 3.3.8.5 0 1.6-.6 1.8-1.2.2-.6.2-1.1.2-1.2 0-.1-.2-.2-.5-.4z"/></svg>
            WhatsApp: +44 07908268383
          </a>
        </div>
      </div>
    </div>

    <!-- GOOGLE ADS NOTE -->
    <div class="google-note">
      <div class="gn-badge">✅ Google Ads Compliance</div>
      <div class="gn-text">
        <strong>Sam Visa is a private visa support agency and is not affiliated with any government or embassy.</strong> We do not issue visas or make visa decisions. All visa approvals are determined solely by the relevant embassy, consulate, or immigration authority. This statement is required for compliance with Google Ads "Government Documents and Services" policy.
      </div>
    </div>

    <!-- OTHER POLICIES LINK -->
    <div style="background:var(--white);border:1.5px solid var(--gray-border);border-radius:14px;padding:22px 28px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;">
      <div>
        <p style="font-family:var(--font-d);font-size:18px;font-weight:600;color:var(--ind-dark);margin-bottom:4px;">Also read our other policies</p>
        <p style="font-size:13px;color:var(--gray-mid);">Our Privacy Policy and Disclaimer &amp; Refund Policy contain additional important information.</p>
      </div>
      <div style="display:flex;gap:10px;flex-wrap:wrap;">
        <a href="/privacy-policy" style="display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#0d9488,#064e3b);color:#fff;font-family:'Jost',sans-serif;font-weight:700;font-size:12px;letter-spacing:.5px;padding:12px 18px;border-radius:10px;text-decoration:none;">Privacy Policy →</a>
        <a href="/disclaimer" style="display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#1a4aab,#0f2f7a);color:#fff;font-family:'Jost',sans-serif;font-weight:700;font-size:12px;letter-spacing:.5px;padding:12px 18px;border-radius:10px;text-decoration:none;">Disclaimer &amp; Refund →</a>
      </div>
    </div>

  </div><!-- /article -->
</div><!-- /content-wrap -->

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <img src="logotr.png" alt="SAM Visa Services" style="height:40px;filter:brightness(0) invert(1);opacity:.5;" onerror="this.style.display='none'"/>
    <div class="footer-links">
      <a href="/">Home</a>
      <a href="/privacy-policy">Privacy</a>
      <a href="/disclaimer">Disclaimer</a>
      <a href="/service-agreement" style="color:rgba(255,255,255,.65);">Agreement</a>
      <a href="/terms-and-conditions">Terms</a>
      <a href="mailto:info@samvisauk.com">Contact</a>
    </div>
    <p class="footer-copy">© 2025 SAM Visa Services</p>
  </div>
  <div class="footer-disclaimer">
    <p>Sam Visa is a private visa support agency and is not affiliated with any government or embassy. We do not issue visas or make visa decisions. All visa approvals are determined solely by the relevant embassy, consulate, or immigration authority.</p>
  </div>
</footer>

<script>
const tocLinks = document.querySelectorAll('.toc-list a');
window.addEventListener('scroll', () => {
  let current = '';
  document.querySelectorAll('[id^="s"]').forEach(sec => {
    if (window.scrollY >= sec.offsetTop - 120) current = sec.id;
  });
  tocLinks.forEach(a => {
    a.classList.toggle('active', a.getAttribute('href') === '#' + current);
  });
}, {passive:true});
</script>
</body>
</html>