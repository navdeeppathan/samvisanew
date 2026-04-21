<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Terms &amp; Conditions — SAM Visa Services</title>
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
    --expo:cubic-bezier(0.16,1,0.3,1);--bounce:cubic-bezier(0.34,1.56,0.64,1);
    --amber:#d97706;--amber-bg:#fffbeb;--amber-border:#fde68a;
    --green:#16a34a;
    }
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:var(--font-b);background:var(--gray-bg);color:var(--gray-dark);line-height:1.7;}
    ::-webkit-scrollbar{width:5px;}
    ::-webkit-scrollbar-thumb{background:var(--blue);border-radius:4px;}

    @keyframes fadeUp{from{opacity:0;transform:translateY(20px);}to{opacity:1;transform:translateY(0);}}
    @keyframes shimmer{0%{background-position:-200% center;}100%{background-position:200% center;}}

    /* NAV */
    #navbar{position:sticky;top:0;z-index:100;background:rgba(255,255,255,.97);backdrop-filter:blur(16px);box-shadow:0 1px 0 var(--gray-border),var(--shadow-sm);padding:0 48px;}
    .nav-inner{max-width:1200px;margin:0 auto;height:72px;display:flex;align-items:center;justify-content:space-between;}
    .nav-logo img{height:50px;object-fit:contain;}
    .nav-back{display:inline-flex;align-items:center;gap:8px;color:var(--gray-mid);text-decoration:none;font-size:13px;font-weight:500;transition:color .3s;}
    .nav-back:hover{color:var(--blue);}
    .nav-phone{color:var(--blue);font-weight:600;font-size:13px;text-decoration:none;}

    /* PAGE HERO */
    .page-hero{background:linear-gradient(135deg,var(--blue-dark),var(--blue-mid));padding:72px 48px 60px;text-align:center;position:relative;overflow:hidden;}
    .page-hero::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.07) 1px,transparent 0);background-size:28px 28px;}
    .ph-inner{position:relative;z-index:2;max-width:700px;margin:0 auto;}
    .hero-badge{display:inline-flex;align-items:center;gap:7px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.2);border-radius:40px;padding:5px 16px;font-size:10px;font-weight:700;letter-spacing:2.5px;color:rgba(255,255,255,.85);text-transform:uppercase;margin-bottom:18px;}
    .hero-title{font-family:var(--font-d);font-size:clamp(36px,5vw,58px);font-weight:700;color:#fff;line-height:1.08;margin-bottom:14px;}
    .hero-title em{font-style:italic;color:rgba(255,255,255,.8);}
    .hero-sub{font-size:14px;font-weight:300;color:rgba(255,255,255,.65);line-height:1.8;margin-bottom:0;}
    .hero-date{display:inline-flex;align-items:center;gap:7px;margin-top:18px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:8px;padding:7px 16px;font-size:12px;color:rgba(255,255,255,.7);font-weight:500;}

    /* DISCLAIMER BANNER */
    .disclaimer-banner{background:var(--amber-bg);border-bottom:2px solid var(--amber-border);padding:14px 48px;}
    .db-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:12px;}
    .db-icon{font-size:18px;flex-shrink:0;}
    .db-text{font-size:13px;font-weight:600;color:#92400e;line-height:1.5;}
    .db-text span{font-weight:400;color:#a16207;}

    /* LAYOUT */
    .content-wrap{max-width:1200px;margin:0 auto;padding:48px 48px 80px;display:grid;grid-template-columns:260px 1fr;gap:40px;align-items:start;}

    /* SIDEBAR TOC */
    .toc-card{position:relative; background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;overflow:hidden;box-shadow:var(--shadow-sm);}
    .toc-head{padding:14px 20px;background:var(--blue-faint);border-bottom:1px solid var(--gray-border);}
    .toc-head p{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--blue);}
    .toc-list{list-style:none;padding:8px 0;}
    .toc-list a{display:flex;align-items:center;gap:9px;padding:9px 20px;font-size:12px;font-weight:500;color:var(--gray-mid);text-decoration:none;transition:color .2s,background .2s;border-left:3px solid transparent;}
    .toc-list a:hover{color:var(--blue);background:var(--blue-faint);border-left-color:var(--blue-light);}
    .toc-list a.active{color:var(--blue);background:var(--blue-faint);border-left-color:var(--blue);font-weight:600;}
    .toc-num{width:20px;height:20px;border-radius:50%;background:var(--blue-faint);display:flex;align-items:center;justify-content:center;font-size:9px;font-weight:700;color:var(--blue);flex-shrink:0;}
    .toc-list a.active .toc-num{background:var(--blue);color:#fff;}

    /* ARTICLE */
    .article{}
    .last-updated{display:flex;align-items:center;gap:8px;font-size:12px;color:var(--gray-light);margin-bottom:32px;padding:12px 16px;background:var(--white);border:1px solid var(--gray-border);border-radius:10px;}
    .last-updated svg{color:var(--blue-light);}

    /* SECTION */
    .legal-section{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;padding:32px 36px;margin-bottom:20px;box-shadow:var(--shadow-sm);scroll-margin-top:100px;}
    .legal-section:hover{border-color:rgba(26,74,171,.2);}

    /* SECTION NUMBER + TITLE */
    .sec-num-wrap{display:flex;align-items:center;gap:14px;margin-bottom:18px;}
    .sec-num{width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;color:#fff;flex-shrink:0;font-family:var(--font-d);}
    .sec-title{font-family:var(--font-d);font-size:22px;font-weight:700;color:var(--blue-dark);}

    /* SHIMMER TOP BAR ON SECTION */
    .legal-section::before{content:'';display:block;height:3px;background:linear-gradient(90deg,var(--blue-dark),var(--blue-mid),var(--blue-light),var(--blue-mid),var(--blue-dark));background-size:200% auto;animation:shimmer 4s linear infinite;margin:-32px -36px 28px;border-radius:14px 14px 0 0;}

    /* PROSE */
    .prose{font-size:14px;color:var(--gray-mid);line-height:1.85;}
    .prose p{margin-bottom:12px;}
    .prose p:last-child{margin-bottom:0;}
    .prose strong{color:var(--gray-dark);font-weight:600;}

    /* LIST */
    .legal-list{list-style:none;display:flex;flex-direction:column;gap:8px;margin:12px 0;}
    .legal-list li{display:flex;align-items:flex-start;gap:10px;font-size:14px;color:var(--gray-mid);line-height:1.7;}
    .li-dot{width:6px;height:6px;border-radius:50%;background:var(--blue);flex-shrink:0;margin-top:8px;}

    /* HIGHLIGHT BOX */
    .highlight-box{background:var(--blue-faint);border:1.5px solid rgba(26,74,171,.15);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .highlight-box p{font-size:13px;color:var(--blue-dark);font-weight:500;line-height:1.7;margin:0;}
    .warning-box{background:var(--amber-bg);border:1.5px solid var(--amber-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .warning-box p{font-size:13px;color:#92400e;font-weight:500;line-height:1.7;margin:0;}

    /* CONTACT CARD */
    .contact-card{background:linear-gradient(135deg,var(--blue-dark),var(--blue-mid));border-radius:16px;padding:28px 32px;margin-bottom:20px;position:relative;overflow:hidden;}
    .contact-card::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.07) 1px,transparent 0);background-size:20px 20px;}
    .cc-inner{position:relative;z-index:2;}
    .cc-title{font-family:var(--font-d);font-size:22px;font-weight:700;color:#fff;margin-bottom:6px;}
    .cc-sub{font-size:13px;color:rgba(255,255,255,.65);margin-bottom:18px;}
    .cc-links{display:flex;flex-direction:column;gap:10px;}
    .cc-link{display:inline-flex;align-items:center;gap:10px;color:rgba(255,255,255,.85);text-decoration:none;font-size:13px;font-weight:500;transition:color .2s;}
    .cc-link:hover{color:#fff;}
    .cc-link svg{opacity:.7;}

    /* GOOGLE ADS NOTE */
    .google-note{background:var(--white);border:2px solid var(--amber-border);border-radius:14px;padding:20px 24px;margin-bottom:20px;}
    .gn-badge{display:inline-flex;align-items:center;gap:7px;background:var(--amber-bg);border:1px solid var(--amber-border);border-radius:20px;padding:4px 12px;font-size:10px;font-weight:700;letter-spacing:1.5px;color:var(--amber);text-transform:uppercase;margin-bottom:12px;}
    .gn-text{font-size:13px;color:#92400e;line-height:1.7;font-weight:500;}

    /* FOOTER */
    footer{background:var(--blue-dark);padding:32px 48px;}
    .footer-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;}
    .footer-links{display:flex;gap:20px;}
    .footer-links a{font-size:12px;color:rgba(255,255,255,.4);text-decoration:none;transition:color .2s;}
    .footer-links a:hover{color:rgba(255,255,255,.7);}
    .footer-copy{font-size:12px;color:rgba(255,255,255,.3);}
    .footer-disclaimer{max-width:1200px;margin:0 auto;padding-top:16px;border-top:1px solid rgba(255,255,255,.08);margin-top:20px;}
    .footer-disclaimer p{font-size:11px;color:rgba(255,255,255,.3);text-align:center;line-height:1.7;}

    
    @media(max-width:1000px){.content-wrap{grid-template-columns:1fr;}.toc-card{position:static;}}
    @media(max-width:640px){.content-wrap{padding:24px 20px 60px;}.page-hero{padding:56px 20px 44px;}.disclaimer-banner{padding:14px 20px;}.legal-section{padding:24px 20px;}.legal-section::before{margin:-24px -20px 20px;}footer{padding:24px 20px;}}
    aside {
      position: sticky;
      top: 88px; /* same as navbar height */
      align-self: start;
      height: fit-content;
    }
    @media(max-width:1000px){
      aside{
        display: none;
      }
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

<!-- DISCLAIMER BANNER -->
<div class="disclaimer-banner">
  <div class="db-inner">
    <span class="db-icon">⚠️</span>
    <p class="db-text">SAM Visa is a private visa support agency and is not affiliated with any government or embassy. <span>We do not issue visas or make visa decisions.</span></p>
  </div>
</div>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="ph-inner">
    <div class="hero-badge">📄 Legal Document</div>
    <h1 class="hero-title">Terms &amp; <em>Conditions</em></h1>
    <p class="hero-sub">Please read these terms carefully before using our services. By accessing our website or submitting an application, you agree to these terms.</p>
    <div class="hero-date">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      Last Updated: June 2025 &nbsp;·&nbsp; Governed by the Laws of England and Wales
    </div>
  </div>
</div>

<!-- CONTENT -->
<div class="content-wrap">

  <!-- TABLE OF CONTENTS -->
  <aside>
    <div class="toc-card">
      <div class="toc-head"><p>Table of Contents</p></div>
      <ul class="toc-list">
        <li><a href="#s1"><span class="toc-num">1</span>Introduction</a></li>
        <li><a href="#s2"><span class="toc-num">2</span>Important Disclaimer</a></li>
        <li><a href="#s3"><span class="toc-num">3</span>Scope of Services</a></li>
        <li><a href="#s4"><span class="toc-num">4</span>Client Responsibilities</a></li>
        <li><a href="#s5"><span class="toc-num">5</span>Visa Decisions</a></li>
        <li><a href="#s6"><span class="toc-num">6</span>Fees &amp; Payments</a></li>
        <li><a href="#s7"><span class="toc-num">7</span>Refund Policy</a></li>
        <li><a href="#s8"><span class="toc-num">8</span>Document Handling</a></li>
        <li><a href="#s9"><span class="toc-num">9</span>Intellectual Property</a></li>
        <li><a href="#s10"><span class="toc-num">10</span>Limitation of Liability</a></li>
        <li><a href="#s11"><span class="toc-num">11</span>Cancellation of Service</a></li>
        <li><a href="#s12"><span class="toc-num">12</span>Changes to Terms</a></li>
        <li><a href="#s13"><span class="toc-num">13</span>Governing Law</a></li>
        <li><a href="#s14"><span class="toc-num">14</span>Contact Information</a></li>
      </ul>
    </div>
  </aside>

  <!-- ARTICLE -->
  <div class="article">

    <div class="last-updated">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      These Terms and Conditions govern the use of https://samvisauk.com and all services provided by SAM Visa. By using our services, you agree to be bound by these terms.
    </div>

    <!-- S1 -->
    <div class="legal-section" id="s1">
      <div class="sec-num-wrap"><div class="sec-num">1</div><h2 class="sec-title">Introduction</h2></div>
      <div class="prose">
        <p>These Terms and Conditions govern the use of the website <strong>https://samvisauk.com</strong> and the services provided by SAM Visa ("we", "us", "our").</p>
        <p>By accessing our website or using our services, you agree to comply with these Terms and Conditions. If you do not agree with any part of these terms, you should discontinue use of our services immediately.</p>
      </div>
    </div>

    <!-- S2 -->
    <div class="legal-section" id="s2">
      <div class="sec-num-wrap"><div class="sec-num">2</div><h2 class="sec-title">Important Disclaimer</h2></div>
      <div class="prose">
        <p>Please read this section carefully before proceeding with any application.</p>
      </div>
      <div class="warning-box">
        <p>⚠️ <strong>SAM Visa is a private visa assistance service provider.</strong> We are NOT a government body, embassy, or immigration authority. We do NOT issue visas or make visa decisions. All visa approvals, refusals, or processing timelines are determined solely by the relevant embassy, consulate, or immigration authority. Our role is limited to providing administrative support and guidance in preparing and submitting visa applications.</p>
      </div>
    </div>

    <!-- S3 -->
    <div class="legal-section" id="s3">
      <div class="sec-num-wrap"><div class="sec-num">3</div><h2 class="sec-title">Scope of Services</h2></div>
      <div class="prose"><p>SAM Visa provides assistance services including but not limited to:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Visa application guidance</li>
        <li><div class="li-dot"></div>Document preparation and review</li>
        <li><div class="li-dot"></div>Application submission assistance</li>
        <li><div class="li-dot"></div>Appointment scheduling</li>
        <li><div class="li-dot"></div>Travel documentation support</li>
        <li><div class="li-dot"></div>General immigration information</li>
      </ul>
      <div class="highlight-box"><p>We do not provide legal immigration advice unless explicitly stated in a separate written agreement.</p></div>
    </div>

    <!-- S4 -->
    <div class="legal-section" id="s4">
      <div class="sec-num-wrap"><div class="sec-num">4</div><h2 class="sec-title">Client Responsibilities</h2></div>
      <div class="prose"><p>As a client of SAM Visa, you agree to:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Provide accurate and complete information at all times</li>
        <li><div class="li-dot"></div>Submit all requested documentation promptly</li>
        <li><div class="li-dot"></div>Ensure your passport and supporting documents are valid and genuine</li>
        <li><div class="li-dot"></div>Review submitted applications before final submission and notify us of any errors</li>
      </ul>
      <div class="warning-box"><p>⚠️ SAM Visa is not responsible for any delay, rejection, or penalties caused by incomplete, inaccurate, or fraudulent information provided by the client.</p></div>
    </div>

    <!-- S5 -->
    <div class="legal-section" id="s5">
      <div class="sec-num-wrap"><div class="sec-num">5</div><h2 class="sec-title">Visa Decisions and Processing</h2></div>
      <div class="prose"><p>Visa decisions are made exclusively by the relevant authority. SAM Visa has no influence over visa decisions, processing times, or approval outcomes.</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Embassies and consulates</li>
        <li><div class="li-dot"></div>National immigration authorities</li>
        <li><div class="li-dot"></div>Border control agencies</li>
      </ul>
      <div class="highlight-box"><p>We cannot guarantee visa approval. A successful application submission does not guarantee that a visa will be granted. Processing times may vary and are beyond our control.</p></div>
    </div>

    <!-- S6 -->
    <div class="legal-section" id="s6">
      <div class="sec-num-wrap"><div class="sec-num">6</div><h2 class="sec-title">Fees and Payments</h2></div>
      <div class="prose"><p>Service fees charged by SAM Visa are for administrative and consultancy services only. Our fees may include:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Application support and preparation</li>
        <li><div class="li-dot"></div>Document review and quality checking</li>
        <li><div class="li-dot"></div>Administrative processing and submission</li>
      </ul>
      <div class="highlight-box"><p>Government visa fees, embassy fees, biometric charges, and courier fees are <strong>separate</strong> and payable directly to the relevant authority unless otherwise stated in writing.</p></div>
    </div>

    <!-- S7 -->
    <div class="legal-section" id="s7">
      <div class="sec-num-wrap"><div class="sec-num">7</div><h2 class="sec-title">Refund Policy</h2></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div><strong>Before submission:</strong> Service fees may be refundable if the application process has not yet started</li>
        <li><div class="li-dot"></div><strong>After submission:</strong> Once an application has been submitted or documents processed, service fees are generally non-refundable</li>
        <li><div class="li-dot"></div><strong>Government fees:</strong> Embassy, consulate, and biometric fees are non-refundable regardless of the visa outcome</li>
      </ul>
      <div class="warning-box"><p>⚠️ A visa refusal does not automatically entitle you to a refund of our service fees, as the service (preparation and submission) has been completed.</p></div>
    </div>

    <!-- S8 -->
    <div class="legal-section" id="s8">
      <div class="sec-num-wrap"><div class="sec-num">8</div><h2 class="sec-title">Document Handling</h2></div>
      <div class="prose"><p>Clients may send documents electronically or physically. While we take all reasonable care of documents in our possession:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>SAM Visa is not responsible for losses caused by courier or postal services</li>
        <li><div class="li-dot"></div>Clients should always retain copies of all submitted documents</li>
        <li><div class="li-dot"></div>Electronic documents are handled securely in line with our Privacy Policy</li>
      </ul>
    </div>

    <!-- S9 -->
    <div class="legal-section" id="s9">
      <div class="sec-num-wrap"><div class="sec-num">9</div><h2 class="sec-title">Intellectual Property</h2></div>
      <div class="prose"><p>All content on the SAM Visa website including text, graphics, logos, design, and software is the intellectual property of SAM Visa and is protected by applicable copyright and trademark laws.</p>
      <p>You may not reproduce, distribute, or use any content from this website without prior written permission from SAM Visa.</p></div>
    </div>

    <!-- S10 -->
    <div class="legal-section" id="s10">
      <div class="sec-num-wrap"><div class="sec-num">10</div><h2 class="sec-title">Limitation of Liability</h2></div>
      <div class="prose"><p>To the fullest extent permitted by law, SAM Visa shall not be liable for:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Visa refusals by any embassy or immigration authority</li>
        <li><div class="li-dot"></div>Processing delays caused by embassies or immigration authorities</li>
        <li><div class="li-dot"></div>Loss of travel bookings, accommodation, or other financial losses arising from refusal or delay</li>
        <li><div class="li-dot"></div>Errors in documents or information supplied by the client</li>
      </ul>
      <div class="highlight-box"><p>Our total liability in any circumstance is limited to the amount paid for our service in connection with the relevant application.</p></div>
    </div>

    <!-- S11 -->
    <div class="legal-section" id="s11">
      <div class="sec-num-wrap"><div class="sec-num">11</div><h2 class="sec-title">Cancellation of Service</h2></div>
      <div class="prose"><p>SAM Visa reserves the right to refuse or cancel service if:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Required documents are missing or cannot be provided</li>
        <li><div class="li-dot"></div>False, misleading, or fraudulent information is provided</li>
        <li><div class="li-dot"></div>The application does not meet basic eligibility requirements</li>
        <li><div class="li-dot"></div>The client engages in abusive or threatening behaviour toward our team</li>
      </ul>
    </div>

    <!-- S12 -->
    <div class="legal-section" id="s12">
      <div class="sec-num-wrap"><div class="sec-num">12</div><h2 class="sec-title">Changes to Terms</h2></div>
      <div class="prose">
        <p>We may update these Terms and Conditions from time to time to reflect changes in our services, legal requirements, or operational practices.</p>
        <p>Updated terms will be published on our website with a revised "Last Updated" date. Continued use of our services after changes are published constitutes your acceptance of the new terms.</p>
      </div>
    </div>

    <!-- S13 -->
    <div class="legal-section" id="s13">
      <div class="sec-num-wrap"><div class="sec-num">13</div><h2 class="sec-title">Governing Law</h2></div>
      <div class="prose">
        <p>These Terms and Conditions shall be governed by and construed in accordance with the <strong>laws of England and Wales</strong>.</p>
        <p>Any disputes arising from these Terms or from the use of our services shall be subject to the exclusive jurisdiction of the courts of the United Kingdom.</p>
      </div>
    </div>

    <!-- S14 CONTACT -->
    <div class="contact-card" id="s14">
      <div class="cc-inner">
        <p style="font-size:10px;font-weight:700;letter-spacing:2.5px;color:rgba(255,255,255,.5);text-transform:uppercase;margin-bottom:6px;">Section 14</p>
        <p class="cc-title">Contact Information</p>
        <p class="cc-sub">For any questions regarding these Terms and Conditions, please get in touch.</p>
        <div class="cc-links">
          <a href="mailto:info@samvisauk.com" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            info@samvisauk.com
          </a>
          <a href="https://samvisauk.com" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
            https://samvisauk.com
          </a>
          <a href="tel:+447879175585" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1z"/></svg>
            +44 7879 175585
          </a>
        </div>
      </div>
    </div>

    <!-- PRIVACY LINK -->
    <div style="background:var(--white);border:1.5px solid var(--gray-border);border-radius:14px;padding:22px 28px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;">
      <div>
        <p style="font-family:var(--font-d);font-size:18px;font-weight:600;color:var(--blue-dark);margin-bottom:4px;">Also read our Privacy Policy</p>
        <p style="font-size:13px;color:var(--gray-mid);">Understand how we collect, use, and protect your personal data.</p>
      </div>
      <a href="/privacy-policy" style="display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));color:#fff;font-family:var(--font-b);font-weight:700;font-size:12px;letter-spacing:.5px;padding:12px 22px;border-radius:10px;text-decoration:none;">
        Privacy Policy →
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
      <a href="/terms-and-conditions" style="color:rgba(255,255,255,.65);">Terms</a>
      <a href="/privacy-policy">Privacy</a>
      <a href="/disclaimer" >Disclaimer</a>
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
// Highlight active TOC link on scroll
const sections = document.querySelectorAll('.legal-section,[id^="s1"],[id^="s2"],[id^="s3"],[id^="s4"],[id^="s5"],[id^="s6"],[id^="s7"],[id^="s8"],[id^="s9"],[id^="s10"],[id^="s11"],[id^="s12"],[id^="s13"],[id^="s14"]');
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