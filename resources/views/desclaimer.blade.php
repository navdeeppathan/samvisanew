<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Disclaimer — SAM Visa Services</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<style>
    :root{
    --blue:#1a4aab;--blue-dark:#0f2f7a;--blue-mid:#1e5bc6;--blue-light:#4a7fd4;
    --blue-pale:#e8f0fb;--blue-faint:#f0f5ff;
    --gray-dark:#2c3a4a;--gray-mid:#5a6a7a;--gray-light:#8a9aaa;
    --gray-border:#d4dce6;--gray-bg:#f4f6f9;
    --white:#ffffff;
    --shadow-sm:0 2px 12px rgba(26,74,171,0.08);
    --font-d:'Cormorant Garamond',serif;--font-b:'Jost',sans-serif;
    --green:#16a34a;--green-bg:#f0fdf4;--green-border:#bbf7d0;
    --amber:#d97706;--amber-bg:#fffbeb;--amber-border:#fde68a;
    --red:#dc2626;--red-bg:#fef2f2;--red-border:#fecaca;
    }
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:var(--font-b);background:var(--gray-bg);color:var(--gray-dark);line-height:1.7;}
    ::-webkit-scrollbar{width:5px;}
    ::-webkit-scrollbar-thumb{background:var(--blue);border-radius:4px;}
    @keyframes shimmer{0%{background-position:-200% center;}100%{background-position:200% center;}}

    #navbar{position:sticky;top:0;z-index:100;background:rgba(255,255,255,.97);backdrop-filter:blur(16px);box-shadow:0 1px 0 var(--gray-border),var(--shadow-sm);padding:0 48px;}
    .nav-inner{max-width:1200px;margin:0 auto;height:72px;display:flex;align-items:center;justify-content:space-between;}
    .nav-logo img{height:50px;object-fit:contain;}
    .nav-back{display:inline-flex;align-items:center;gap:8px;color:var(--gray-mid);text-decoration:none;font-size:13px;font-weight:500;transition:color .3s;}
    .nav-back:hover{color:var(--blue);}
    .nav-phone{color:var(--blue);font-weight:600;font-size:13px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;}

    .page-hero{background:linear-gradient(135deg,#0f2f7a,#1a4aab,#1e5bc6);padding:72px 48px 60px;text-align:center;position:relative;overflow:hidden;}
    .page-hero::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.07) 1px,transparent 0);background-size:28px 28px;}
    .ph-inner{position:relative;z-index:2;max-width:700px;margin:0 auto;}
    .hero-badge{display:inline-flex;align-items:center;gap:7px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.2);border-radius:40px;padding:5px 16px;font-size:10px;font-weight:700;letter-spacing:2.5px;color:rgba(255,255,255,.85);text-transform:uppercase;margin-bottom:18px;}
    .hero-title{font-family:var(--font-d);font-size:clamp(36px,5vw,58px);font-weight:700;color:#fff;line-height:1.08;margin-bottom:14px;}
    .hero-title em{font-style:italic;color:rgba(255,255,255,.8);}
    .hero-sub{font-size:14px;font-weight:300;color:rgba(255,255,255,.65);line-height:1.8;}
    .hero-date{display:inline-flex;align-items:center;gap:7px;margin-top:18px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:8px;padding:7px 16px;font-size:12px;color:rgba(255,255,255,.7);font-weight:500;}

    .notice-banner{background:var(--blue-pale);border-bottom:2px solid #c0d4f5;padding:14px 48px;}
    .nb-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:12px;}
    .nb-text{font-size:13px;font-weight:600;color:var(--blue-dark);line-height:1.5;}
    .nb-text span{font-weight:400;color:var(--blue-mid);}

    .content-wrap{max-width:1200px;margin:0 auto;padding:48px 48px 80px;display:grid;grid-template-columns:260px 1fr;gap:40px;align-items:start;}

    .toc-card{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;overflow:hidden;box-shadow:var(--shadow-sm);}
    .toc-head{padding:14px 20px;background:var(--blue-faint);border-bottom:1px solid #c8d9f5;}
    .toc-head p{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--blue);}
    .toc-list{list-style:none;padding:8px 0;}
    .toc-list a{display:flex;align-items:center;gap:9px;padding:9px 20px;font-size:12px;font-weight:500;color:var(--gray-mid);text-decoration:none;transition:color .2s,background .2s;border-left:3px solid transparent;}
    .toc-list a:hover{color:var(--blue);background:var(--blue-faint);border-left-color:var(--blue);}
    .toc-list a.active{color:var(--blue);background:var(--blue-faint);border-left-color:var(--blue);font-weight:600;}
    .toc-num{width:20px;height:20px;border-radius:50%;background:var(--blue-faint);display:flex;align-items:center;justify-content:center;font-size:9px;font-weight:700;color:var(--blue);flex-shrink:0;}
    .toc-list a.active .toc-num{background:var(--blue);color:#fff;}

    .info-card{background:linear-gradient(135deg,#0f2f7a,#1a4aab);border-radius:14px;padding:20px;margin-top:14px;}
    .ic-title{font-family:var(--font-d);font-size:16px;font-weight:600;color:#fff;margin-bottom:12px;}
    .ic-list{list-style:none;display:flex;flex-direction:column;gap:8px;}
    .ic-list li{display:flex;align-items:flex-start;gap:9px;font-size:12px;color:rgba(255,255,255,.75);line-height:1.5;}
    .ic-dot{width:6px;height:6px;border-radius:50%;background:#93c5fd;flex-shrink:0;margin-top:5px;}

    .last-updated{display:flex;align-items:center;gap:8px;font-size:13px;margin-bottom:32px;padding:12px 16px;border-radius:10px;}

    .legal-section{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;padding:32px 36px;margin-bottom:20px;box-shadow:var(--shadow-sm);scroll-margin-top:100px;transition:border-color .3s;}
    .legal-section:hover{border-color:rgba(26,74,171,.2);}
    .legal-section::before{content:'';display:block;height:3px;background:linear-gradient(90deg,#0f2f7a,#1a4aab,#4a7fd4,#1a4aab,#0f2f7a);background-size:200% auto;animation:shimmer 4s linear infinite;margin:-32px -36px 28px;border-radius:14px 14px 0 0;}

    .sec-num-wrap{display:flex;align-items:center;gap:14px;margin-bottom:18px;}
    .sec-num{width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,#1a4aab,#0f2f7a);display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;color:#fff;flex-shrink:0;font-family:var(--font-d);}
    .sec-title{font-family:var(--font-d);font-size:22px;font-weight:700;color:var(--blue-dark);}

    .prose{font-size:14px;color:var(--gray-mid);line-height:1.85;}
    .prose p{margin-bottom:12px;}
    .prose p:last-child{margin-bottom:0;}
    .prose strong{color:var(--gray-dark);font-weight:600;}

    .legal-list{list-style:none;display:flex;flex-direction:column;gap:8px;margin:12px 0;}
    .legal-list li{display:flex;align-items:flex-start;gap:10px;font-size:14px;color:var(--gray-mid);line-height:1.7;}
    .li-dot{width:6px;height:6px;border-radius:50%;background:var(--blue);flex-shrink:0;margin-top:8px;}

    .highlight-box{background:var(--blue-faint);border:1.5px solid #c0d4f5;border-radius:12px;padding:18px 20px;margin-top:16px;}
    .highlight-box p{font-size:13px;color:var(--blue-dark);font-weight:500;line-height:1.7;margin:0;}
    .warning-box{background:var(--amber-bg);border:1.5px solid var(--amber-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .warning-box p{font-size:13px;color:#92400e;font-weight:500;line-height:1.7;margin:0;}
    .green-box{background:var(--green-bg);border:1.5px solid var(--green-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .green-box p{font-size:13px;color:#15803d;font-weight:500;line-height:1.7;margin:0;}
    .red-box{background:var(--red-bg);border:1.5px solid var(--red-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .red-box p{font-size:13px;color:#991b1b;font-weight:500;line-height:1.7;margin:0;}

    .contact-card{background:linear-gradient(135deg,#0f2f7a,#1a4aab);border-radius:16px;padding:28px 32px;margin-bottom:20px;position:relative;overflow:hidden;}
    .contact-card::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.07) 1px,transparent 0);background-size:20px 20px;}
    .cc-inner{position:relative;z-index:2;}
    .cc-title{font-family:var(--font-d);font-size:22px;font-weight:700;color:#fff;margin-bottom:6px;}
    .cc-sub{font-size:13px;color:rgba(255,255,255,.65);margin-bottom:18px;}
    .cc-links{display:flex;flex-direction:column;gap:10px;}
    .cc-link{display:inline-flex;align-items:center;gap:10px;color:rgba(255,255,255,.85);text-decoration:none;font-size:13px;font-weight:500;transition:color .2s;}
    .cc-link:hover{color:#fff;}

    .google-note{background:var(--white);border:2px solid #fde68a;border-radius:14px;padding:22px 26px;margin-bottom:20px;}
    .gn-badge{display:inline-flex;align-items:center;gap:7px;background:#fef9c3;border:1px solid #fde68a;border-radius:20px;padding:4px 12px;font-size:10px;font-weight:700;letter-spacing:1.5px;color:#a16207;text-transform:uppercase;margin-bottom:12px;}
    .gn-text{font-size:13px;color:#92400e;line-height:1.7;font-weight:500;padding:12px 16px;background:var(--amber-bg);border-radius:10px;border-left:4px solid #fbbf24;}

    .related-pages{display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px;margin-bottom:20px;}
    .rp-item{background:var(--white);border:1.5px solid var(--gray-border);border-radius:14px;padding:20px;text-decoration:none;transition:border-color .2s,box-shadow .2s;}
    .rp-item:hover{border-color:var(--blue);box-shadow:var(--shadow-sm);}
    .rp-icon{font-size:22px;margin-bottom:10px;}
    .rp-title{font-family:var(--font-d);font-size:16px;font-weight:700;color:var(--blue-dark);margin-bottom:4px;}
    .rp-desc{font-size:12px;color:var(--gray-mid);line-height:1.5;}
    .rp-arrow{font-size:12px;color:var(--blue);font-weight:700;margin-top:10px;display:block;}

    footer{background:linear-gradient(135deg,#0f2f7a,#1a4aab,#1e5bc6);padding:32px 48px;}
    .footer-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;}
    .footer-links{display:flex;gap:20px;}
    .footer-links a{font-size:12px;color:rgba(255,255,255,.4);text-decoration:none;transition:color .2s;}
    .footer-links a:hover{color:rgba(255,255,255,.7);}
    .footer-copy{font-size:12px;color:rgba(255,255,255,.3);}
    .footer-disclaimer{max-width:1200px;margin:12px auto 0;padding-top:16px;border-top:1px solid rgba(255,255,255,.1);}
    .footer-disclaimer p{font-size:11px;color:rgba(255,255,255,.3);text-align:center;line-height:1.7;}

    aside{position:sticky;top:88px;align-self:start;height:fit-content;}

    @media(max-width:1000px){aside{display:none;}.content-wrap{grid-template-columns:1fr;}}
    @media(max-width:768px){.related-pages{grid-template-columns:1fr;}}
    @media(max-width:640px){.content-wrap{padding:24px 20px 60px;}.page-hero{padding:56px 20px 44px;}.notice-banner{padding:14px 20px;}.legal-section{padding:24px 20px;}.legal-section::before{margin:-24px -20px 20px;}footer{padding:24px 20px;}}
</style>
</head>
<body>

<nav id="navbar">
  <div class="nav-inner">
    <a href="/" class="nav-logo">
      <img src="logotr.png" alt="SAM Visa Services" onerror="this.style.display='none';this.nextElementSibling.style.display='block'"/>
      <span style="display:none;font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:700;color:#0f2f7a;">SAM Visa</span>
    </a>
    <a href="/" class="nav-back">← Back to Home</a>
    <a href="https://wa.me/4407908268383" target="_blank" class="nav-phone">
      <svg width="16" height="16" viewBox="0 0 32 32" fill="currentColor"><path d="M16 .4C7.3.4.3 7.4.3 16c0 2.8.7 5.5 2.1 7.9L.2 31.8l8.1-2.1c2.3 1.3 4.9 2 7.6 2h.1c8.7 0 15.7-7 15.7-15.6S24.7.4 16 .4zm0 28.6c-2.4 0-4.8-.7-6.8-1.9l-.5-.3-4.8 1.2 1.3-4.7-.3-.5c-1.3-2.1-2-4.5-2-6.9C2.9 9 8.9 3 16 3s13.1 6 13.1 13.1S23.1 29 16 29zm7.3-9.7c-.4-.2-2.3-1.1-2.7-1.2-.4-.2-.6-.2-.9.2-.3.4-1 1.2-1.2 1.4-.2.2-.5.3-.9.1-2.4-1.2-4-2.2-5.6-5-.4-.7.4-.6 1.2-2 .1-.2.1-.5 0-.7-.1-.2-.9-2.1-1.2-2.9-.3-.7-.6-.6-.9-.6h-.8c-.3 0-.7.1-1 .5-1 1.1-1.5 2.5-1.5 3.9 0 1.4.8 2.7.9 2.9.1.2 2 3.1 4.8 4.3 2.8 1.2 2.8.8 3.3.8.5 0 1.6-.6 1.8-1.2.2-.6.2-1.1.2-1.2 0-.1-.2-.2-.5-.4z"/></svg>
      +44 07908268383
    </a>
  </div>
</nav>

<div class="notice-banner">
  <div class="nb-inner">
    <span style="font-size:18px;flex-shrink:0;">⚖️</span>
    <p class="nb-text">Important Legal Information. <span>SAM Visa is a private visa support agency. We do not issue visas or make immigration decisions. All visa decisions are made solely by the relevant government authority.</span></p>
  </div>
</div>

<div class="page-hero">
  <div class="ph-inner">
    <div class="hero-badge">⚖️ Legal Notice</div>
    <h1 class="hero-title">Website <em>Disclaimer</em></h1>
    <p class="hero-sub">Please read this disclaimer carefully. It outlines the nature of our services, our limitations, and the boundaries of our liability as a private visa support agency.</p>
    <div class="hero-date">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      Last Updated: June 2025 &nbsp;·&nbsp; samvisauk.com
    </div>
  </div>
</div>

<div class="content-wrap">
  <aside>
    <div class="toc-card">
      <div class="toc-head"><p>Table of Contents</p></div>
      <ul class="toc-list">
        <li><a href="#d1"><span class="toc-num">1</span>General Information</a></li>
        <li><a href="#d2"><span class="toc-num">2</span>No Gov't Affiliation</a></li>
        <li><a href="#d3"><span class="toc-num">3</span>No Visa Guarantee</a></li>
        <li><a href="#d4"><span class="toc-num">4</span>Processing Times</a></li>
        <li><a href="#d5"><span class="toc-num">5</span>External Links</a></li>
        <li><a href="#d6"><span class="toc-num">6</span>Professional Advice</a></li>
        <li><a href="#d7"><span class="toc-num">7</span>Limitation of Liability</a></li>
        <li><a href="#d8"><span class="toc-num">8</span>Contact Us</a></li>
      </ul>
    </div>
    <div class="info-card">
      <p class="ic-title">Key Points</p>
      <ul class="ic-list">
        <li><div class="ic-dot"></div>We are NOT a government agency</li>
        <li><div class="ic-dot"></div>We do NOT guarantee visa approval</li>
        <li><div class="ic-dot"></div>Processing times are estimates only</li>
        <li><div class="ic-dot"></div>We provide admin support only</li>
        <li><div class="ic-dot"></div>Not a substitute for legal advice</li>
      </ul>
    </div>
  </aside>

  <div class="article">
    <div class="last-updated" style="border-color:#c0d4f5;background:var(--blue-faint);">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--blue);flex-shrink:0;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      <span style="color:var(--blue-dark);">This disclaimer applies to all content on https://samvisauk.com and all services provided by SAM Visa. By using our website or services, you agree to these terms.</span>
    </div>

    <div class="legal-section" id="d1">
      <div class="sec-num-wrap"><div class="sec-num">1</div><h2 class="sec-title">General Information</h2></div>
      <div class="prose">
        <p>The information provided on <strong>https://samvisauk.com</strong> is for general informational purposes only. All information on this website is provided in good faith; however, Sam Visa makes no representation or warranty of any kind regarding the accuracy, reliability, or completeness of the information.</p>
      </div>
      <div class="highlight-box"><p>ℹ️ All content on this website is intended to be informational only and does not constitute legal, immigration, or professional advice of any kind.</p></div>
    </div>

    <div class="legal-section" id="d2">
      <div class="sec-num-wrap"><div class="sec-num">2</div><h2 class="sec-title">No Government Affiliation</h2></div>
      <div class="prose"><p>Sam Visa is a private visa support and consultancy service. We are entirely independent from all government bodies.</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Sam Visa is <strong>NOT</strong> a government agency</li>
        <li><div class="li-dot"></div>Sam Visa is <strong>NOT</strong> affiliated with any embassy, consulate, or immigration authority</li>
        <li><div class="li-dot"></div>Sam Visa does <strong>NOT</strong> issue visas or make immigration decisions</li>
        <li><div class="li-dot"></div>All visa approvals, refusals, or processing decisions are made solely by the relevant government authority, embassy, or immigration department</li>
      </ul>
      <div class="warning-box"><p>⚠️ Our services are limited to administrative support, guidance, and application preparation assistance only.</p></div>
    </div>

    <div class="legal-section" id="d3">
      <div class="sec-num-wrap"><div class="sec-num">3</div><h2 class="sec-title">No Guarantee of Visa Approval</h2></div>
      <div class="prose"><p>Using the services of Sam Visa does <strong>NOT guarantee visa approval</strong>. Visa outcomes depend entirely on:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Immigration rules and current government policy</li>
        <li><div class="li-dot"></div>Embassy or consulate decisions</li>
        <li><div class="li-dot"></div>Applicant eligibility and individual circumstances</li>
        <li><div class="li-dot"></div>Documentation submitted with the application</li>
      </ul>
      <div class="red-box"><p>🚫 Sam Visa cannot influence or guarantee the decision made by immigration authorities under any circumstances.</p></div>
    </div>

    <div class="legal-section" id="d4">
      <div class="sec-num-wrap"><div class="sec-num">4</div><h2 class="sec-title">Processing Times</h2></div>
      <div class="prose"><p>Any visa processing times mentioned on this website are <strong>estimated timelines only</strong>. Actual processing times depend on the respective embassy or immigration authority and may vary due to:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>High application volumes at the embassy</li>
        <li><div class="li-dot"></div>Security checks and background verification</li>
        <li><div class="li-dot"></div>Additional documentation requests</li>
        <li><div class="li-dot"></div>Government policy changes or seasonal closures</li>
      </ul>
      <div class="warning-box"><p>⚠️ Sam Visa is not responsible for delays caused by immigration authorities. We recommend applying well in advance of your travel date.</p></div>
    </div>

    <div class="legal-section" id="d5">
      <div class="sec-num-wrap"><div class="sec-num">5</div><h2 class="sec-title">External Links</h2></div>
      <div class="prose">
        <p>Our website may contain links to third-party websites including embassy portals, government websites, and partner services.</p>
        <p>These links are provided for convenience only. Sam Visa does not control and is not responsible for the content, privacy policies, or practices of external websites.</p>
      </div>
    </div>

    <div class="legal-section" id="d6">
      <div class="sec-num-wrap"><div class="sec-num">6</div><h2 class="sec-title">Professional Advice Disclaimer</h2></div>
      <div class="prose">
        <p>Information provided on this website should <strong>not</strong> be considered legal or immigration advice.</p>
        <p>If legal advice is required, you should consult a licensed immigration lawyer or authorised legal professional.</p>
      </div>
      <div class="highlight-box"><p>💼 SAM Visa provides administrative support services only. For complex immigration matters, we strongly recommend consulting a qualified immigration solicitor or lawyer.</p></div>
    </div>

    <div class="legal-section" id="d7">
      <div class="sec-num-wrap"><div class="sec-num">7</div><h2 class="sec-title">Limitation of Liability</h2></div>
      <div class="prose"><p>Sam Visa shall not be liable for any of the following outcomes or events:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Visa refusals by embassies or immigration authorities</li>
        <li><div class="li-dot"></div>Delays caused by embassies or government processing times</li>
        <li><div class="li-dot"></div>Travel losses or financial costs due to visa rejection</li>
        <li><div class="li-dot"></div>Errors resulting from incorrect or incomplete client information</li>
      </ul>
      <div class="green-box"><p>✅ By using our services, you acknowledge and agree that visa decisions are made solely by government authorities, and that Sam Visa's role is limited to application support and preparation.</p></div>
    </div>

    <div class="contact-card" id="d8">
      <div class="cc-inner">
        <p style="font-size:10px;font-weight:700;letter-spacing:2.5px;color:rgba(255,255,255,.5);text-transform:uppercase;margin-bottom:6px;">Section 8</p>
        <p class="cc-title">Contact Us</p>
        <p class="cc-sub">If you have any questions about this disclaimer or our services, please get in touch.</p>
        <div class="cc-links">
          <a href="mailto:info@samvisauk.com" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            info@samvisauk.com
          </a>
          <a href="https://samvisauk.com" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
            https://samvisauk.com
          </a>
        </div>
      </div>
    </div>

    <div class="google-note">
      <div class="gn-badge">✅ Google Ads Compliance</div>
      <div class="gn-text"><strong>Sam Visa is a private visa support agency and is not affiliated with any government or embassy.</strong> We do not issue visas or make visa decisions. All visa approvals are determined solely by the relevant embassy, consulate, or immigration authority.</div>
    </div>

    <!-- RELATED PAGES -->
    <p style="font-family:var(--font-d);font-size:20px;font-weight:700;color:var(--blue-dark);margin-bottom:14px;">Also Read</p>
    <div class="related-pages">
      <a href="/refund-policy" class="rp-item">
        <div class="rp-icon">💳</div>
        <div class="rp-title">Refund Policy</div>
        <div class="rp-desc">Understand our refund eligibility, cancellation terms, and how to request a refund.</div>
        <span class="rp-arrow">Read Policy →</span>
      </a>
      <a href="/privacy-policy" class="rp-item">
        <div class="rp-icon">🔒</div>
        <div class="rp-title">Privacy Policy</div>
        <div class="rp-desc">How we collect, store, and protect your personal data in line with UK GDPR.</div>
        <span class="rp-arrow">Read Policy →</span>
      </a>
      <a href="/service-agreement" class="rp-item">
        <div class="rp-icon">📋</div>
        <div class="rp-title">Service Agreement</div>
        <div class="rp-desc">The full terms under which SAM Visa provides visa support services.</div>
        <span class="rp-arrow">Read Agreement →</span>
      </a>
    </div>

  </div>
</div>

<footer>
  <div class="footer-inner">
    <img src="logotr.png" alt="SAM Visa Services" style="height:40px;filter:brightness(0) invert(1);opacity:.5;" onerror="this.style.display='none'"/>
    <div class="footer-links">
      <a href="/">Home</a>
      <a href="/privacy-policy">Privacy</a>
      <a href="/terms-and-conditions">Terms</a>
      <a href="/service-agreement">Agreement</a>
      <a href="/disclaimer" style="color:rgba(255,255,255,.65);">Disclaimer</a>
       <a href="/refund-policy">Refund Policy</a>
      <a href="mailto:info@samvisauk.com">Contact</a>
    </div>
    <p class="footer-copy">© 2025 SAM Visa Services</p>
  </div>
  <div class="footer-disclaimer">
    <p>SAM Visa is a private visa support agency and is not affiliated with any government or embassy. We do not issue visas or make visa decisions. All visa approvals are determined solely by the relevant embassy, consulate, or immigration authority.</p>
  </div>
</footer>

<script>
const tocLinks = document.querySelectorAll('.toc-list a');
window.addEventListener('scroll', () => {
  let current = '';
  document.querySelectorAll('[id^="d"]').forEach(sec => {
    if (window.scrollY >= sec.offsetTop - 120) current = sec.id;
  });
  tocLinks.forEach(a => {
    a.classList.toggle('active', a.getAttribute('href') === '#' + current);
  });
}, {passive:true});
</script>
</body>
</html>