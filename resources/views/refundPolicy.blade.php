<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Refund Policy — SAM Visa Services</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<style>
    :root{
    --gray-dark:#2c3a4a;--gray-mid:#5a6a7a;--gray-light:#8a9aaa;
    --gray-border:#d4dce6;--gray-bg:#f4f6f9;--white:#ffffff;
    --shadow-sm:0 2px 12px rgba(180,83,9,0.08);
    --font-d:'Cormorant Garamond',serif;--font-b:'Jost',sans-serif;
    --green:#16a34a;--green-bg:#f0fdf4;--green-border:#bbf7d0;
    --amber:#d97706;--amber-bg:#fffbeb;--amber-border:#fde68a;
    --red:#dc2626;--red-bg:#fef2f2;--red-border:#fecaca;
    --blue:#1a4aab;--blue-dark:#0f2f7a;--blue-faint:#f0f5ff;
    /* Amber/orange theme for refund page */
    --or:#b45309;--or-dark:#78350f;--or-mid:#d97706;--or-light:#f59e0b;
    --or-bg:#fffbeb;--or-border:#fde68a;--or-faint:#fef9c3;
    }
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:var(--font-b);background:var(--gray-bg);color:var(--gray-dark);line-height:1.7;}
    ::-webkit-scrollbar{width:5px;}
    ::-webkit-scrollbar-thumb{background:var(--or);border-radius:4px;}
    @keyframes shimmer{0%{background-position:-200% center;}100%{background-position:200% center;}}

    #navbar{position:sticky;top:0;z-index:100;background:rgba(255,255,255,.97);backdrop-filter:blur(16px);box-shadow:0 1px 0 var(--gray-border),var(--shadow-sm);padding:0 48px;}
    .nav-inner{max-width:1200px;margin:0 auto;height:72px;display:flex;align-items:center;justify-content:space-between;}
    .nav-logo img{height:50px;object-fit:contain;}
    .nav-back{display:inline-flex;align-items:center;gap:8px;color:var(--gray-mid);text-decoration:none;font-size:13px;font-weight:500;transition:color .3s;}
    .nav-back:hover{color:var(--or);}
    .nav-phone{color:var(--or);font-weight:600;font-size:13px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;}

    .page-hero{background:linear-gradient(135deg,#78350f,#b45309,#d97706,#f59e0b);padding:72px 48px 60px;text-align:center;position:relative;overflow:hidden;}
    .page-hero::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.07) 1px,transparent 0);background-size:28px 28px;}
    .ph-inner{position:relative;z-index:2;max-width:700px;margin:0 auto;}
    .hero-badge{display:inline-flex;align-items:center;gap:7px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.2);border-radius:40px;padding:5px 16px;font-size:10px;font-weight:700;letter-spacing:2.5px;color:rgba(255,255,255,.9);text-transform:uppercase;margin-bottom:18px;}
    .hero-title{font-family:var(--font-d);font-size:clamp(36px,5vw,58px);font-weight:700;color:#fff;line-height:1.08;margin-bottom:14px;}
    .hero-title em{font-style:italic;color:rgba(255,255,255,.8);}
    .hero-sub{font-size:14px;font-weight:300;color:rgba(255,255,255,.7);line-height:1.8;}
    .hero-date{display:inline-flex;align-items:center;gap:7px;margin-top:18px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:8px;padding:7px 16px;font-size:12px;color:rgba(255,255,255,.75);font-weight:500;}

    .notice-banner{background:var(--or-faint);border-bottom:2px solid var(--or-border);padding:14px 48px;}
    .nb-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:12px;}
    .nb-text{font-size:13px;font-weight:600;color:var(--or-dark);line-height:1.5;}
    .nb-text span{font-weight:400;color:var(--or);}

    .content-wrap{max-width:1200px;margin:0 auto;padding:48px 48px 80px;display:grid;grid-template-columns:260px 1fr;gap:40px;align-items:start;}

    .toc-card{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;overflow:hidden;box-shadow:var(--shadow-sm);}
    .toc-head{padding:14px 20px;background:var(--or-faint);border-bottom:1px solid var(--or-border);}
    .toc-head p{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--or);}
    .toc-list{list-style:none;padding:8px 0;}
    .toc-list a{display:flex;align-items:center;gap:9px;padding:9px 20px;font-size:12px;font-weight:500;color:var(--gray-mid);text-decoration:none;transition:color .2s,background .2s;border-left:3px solid transparent;}
    .toc-list a:hover{color:var(--or);background:var(--or-faint);border-left-color:var(--or);}
    .toc-list a.active{color:var(--or);background:var(--or-faint);border-left-color:var(--or);font-weight:600;}
    .toc-num{width:20px;height:20px;border-radius:50%;background:var(--or-faint);display:flex;align-items:center;justify-content:center;font-size:9px;font-weight:700;color:var(--or);flex-shrink:0;}
    .toc-list a.active .toc-num{background:var(--or);color:#fff;}

    .info-card{background:linear-gradient(135deg,#78350f,#b45309);border-radius:14px;padding:20px;margin-top:14px;}
    .ic-title{font-family:var(--font-d);font-size:16px;font-weight:600;color:#fff;margin-bottom:12px;}
    .ic-list{list-style:none;display:flex;flex-direction:column;gap:8px;}
    .ic-list li{display:flex;align-items:flex-start;gap:9px;font-size:12px;color:rgba(255,255,255,.8);line-height:1.5;}
    .ic-dot{width:6px;height:6px;border-radius:50%;background:#fcd34d;flex-shrink:0;margin-top:5px;}

    .last-updated{display:flex;align-items:center;gap:8px;font-size:13px;margin-bottom:32px;padding:12px 16px;border-radius:10px;}

    .legal-section{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;padding:32px 36px;margin-bottom:20px;box-shadow:var(--shadow-sm);scroll-margin-top:100px;transition:border-color .3s;}
    .legal-section:hover{border-color:rgba(180,83,9,.25);}
    .legal-section::before{content:'';display:block;height:3px;background:linear-gradient(90deg,#78350f,#b45309,#f59e0b,#b45309,#78350f);background-size:200% auto;animation:shimmer 4s linear infinite;margin:-32px -36px 28px;border-radius:14px 14px 0 0;}

    .sec-num-wrap{display:flex;align-items:center;gap:14px;margin-bottom:18px;}
    .sec-num{width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,#d97706,#78350f);display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;color:#fff;flex-shrink:0;font-family:var(--font-d);}
    .sec-title{font-family:var(--font-d);font-size:22px;font-weight:700;color:var(--or-dark);}

    .prose{font-size:14px;color:var(--gray-mid);line-height:1.85;}
    .prose p{margin-bottom:12px;}
    .prose p:last-child{margin-bottom:0;}
    .prose strong{color:var(--gray-dark);font-weight:600;}

    .legal-list{list-style:none;display:flex;flex-direction:column;gap:8px;margin:12px 0;}
    .legal-list li{display:flex;align-items:flex-start;gap:10px;font-size:14px;color:var(--gray-mid);line-height:1.7;}
    .li-dot{width:6px;height:6px;border-radius:50%;background:var(--amber);flex-shrink:0;margin-top:8px;}

    .highlight-box{background:var(--or-faint);border:1.5px solid var(--or-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .highlight-box p{font-size:13px;color:var(--or-dark);font-weight:500;line-height:1.7;margin:0;}
    .warning-box{background:#fff7ed;border:1.5px solid #fed7aa;border-radius:12px;padding:18px 20px;margin-top:16px;}
    .warning-box p{font-size:13px;color:#7c2d12;font-weight:500;line-height:1.7;margin:0;}
    .green-box{background:var(--green-bg);border:1.5px solid var(--green-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .green-box p{font-size:13px;color:#15803d;font-weight:500;line-height:1.7;margin:0;}
    .red-box{background:var(--red-bg);border:1.5px solid var(--red-border);border-radius:12px;padding:18px 20px;margin-top:16px;}
    .red-box p{font-size:13px;color:#991b1b;font-weight:500;line-height:1.7;margin:0;}

    .two-col-list{display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-top:14px;}
    .tcl-item{padding:14px 16px;border-radius:10px;font-size:13px;line-height:1.6;display:flex;gap:10px;align-items:flex-start;}
    .tcl-item.eligible{background:var(--green-bg);border:1.5px solid var(--green-border);color:#15803d;}
    .tcl-item.no{background:var(--red-bg);border:1.5px solid var(--red-border);color:#991b1b;}

    /* Timeline for refund process */
    .timeline{display:flex;flex-direction:column;gap:0;margin-top:16px;}
    .tl-item{display:flex;gap:16px;position:relative;}
    .tl-item:not(:last-child)::after{content:'';position:absolute;left:17px;top:36px;width:2px;height:calc(100% - 8px);background:var(--or-border);}
    .tl-dot{width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#d97706,#78350f);display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;color:#fff;flex-shrink:0;font-family:var(--font-d);z-index:1;}
    .tl-body{padding-bottom:20px;flex:1;}
    .tl-title{font-size:14px;font-weight:700;color:var(--or-dark);margin-bottom:4px;}
    .tl-desc{font-size:13px;color:var(--gray-mid);line-height:1.6;}

    .contact-card{background:linear-gradient(135deg,#78350f,#b45309,#d97706);border-radius:16px;padding:28px 32px;margin-bottom:20px;position:relative;overflow:hidden;}
    .contact-card::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.07) 1px,transparent 0);background-size:20px 20px;}
    .cc-inner{position:relative;z-index:2;}
    .cc-title{font-family:var(--font-d);font-size:22px;font-weight:700;color:#fff;margin-bottom:6px;}
    .cc-sub{font-size:13px;color:rgba(255,255,255,.7);margin-bottom:18px;}
    .cc-links{display:flex;flex-direction:column;gap:10px;}
    .cc-link{display:inline-flex;align-items:center;gap:10px;color:rgba(255,255,255,.9);text-decoration:none;font-size:13px;font-weight:500;transition:color .2s;}
    .cc-link:hover{color:#fff;}

    .google-note{background:var(--white);border:2px solid #fde68a;border-radius:14px;padding:22px 26px;margin-bottom:20px;}
    .gn-badge{display:inline-flex;align-items:center;gap:7px;background:#fef9c3;border:1px solid #fde68a;border-radius:20px;padding:4px 12px;font-size:10px;font-weight:700;letter-spacing:1.5px;color:#a16207;text-transform:uppercase;margin-bottom:12px;}
    .gn-text{font-size:13px;color:#92400e;line-height:1.7;font-weight:500;padding:12px 16px;background:var(--amber-bg);border-radius:10px;border-left:4px solid #fbbf24;}

    .related-pages{display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px;margin-bottom:20px;}
    .rp-item{background:var(--white);border:1.5px solid var(--gray-border);border-radius:14px;padding:20px;text-decoration:none;transition:border-color .2s,box-shadow .2s;}
    .rp-item:hover{border-color:var(--or);box-shadow:var(--shadow-sm);}
    .rp-icon{font-size:22px;margin-bottom:10px;}
    .rp-title{font-family:var(--font-d);font-size:16px;font-weight:700;color:var(--or-dark);margin-bottom:4px;}
    .rp-desc{font-size:12px;color:var(--gray-mid);line-height:1.5;}
    .rp-arrow{font-size:12px;color:var(--or);font-weight:700;margin-top:10px;display:block;}

    footer{background:linear-gradient(135deg,#78350f,#b45309,#1a4aab);padding:32px 48px;}
    .footer-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;}
    .footer-links{display:flex;gap:20px;}
    .footer-links a{font-size:12px;color:rgba(255,255,255,.4);text-decoration:none;transition:color .2s;}
    .footer-links a:hover{color:rgba(255,255,255,.7);}
    .footer-copy{font-size:12px;color:rgba(255,255,255,.3);}
    .footer-disclaimer{max-width:1200px;margin:12px auto 0;padding-top:16px;border-top:1px solid rgba(255,255,255,.1);}
    .footer-disclaimer p{font-size:11px;color:rgba(255,255,255,.3);text-align:center;line-height:1.7;}

    aside{position:sticky;top:88px;align-self:start;height:fit-content;}

    @media(max-width:1000px){aside{display:none;}.content-wrap{grid-template-columns:1fr;}}
    @media(max-width:768px){.related-pages{grid-template-columns:1fr;}.two-col-list{grid-template-columns:1fr;}}
    @media(max-width:640px){.content-wrap{padding:24px 20px 60px;}.page-hero{padding:56px 20px 44px;}.notice-banner{padding:14px 20px;}.legal-section{padding:24px 20px;}.legal-section::before{margin:-24px -20px 20px;}footer{padding:24px 20px;}}
</style>
</head>
<body>

<nav id="navbar">
  <div class="nav-inner">
    <a href="/" class="nav-logo">
      <img src="logotr.png" alt="SAM Visa Services" onerror="this.style.display='none';this.nextElementSibling.style.display='block'"/>
      <span style="display:none;font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:700;color:#78350f;">SAM Visa</span>
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
    <span style="font-size:18px;flex-shrink:0;">💳</span>
    <p class="nb-text">Refund &amp; Cancellation Policy. <span>Please read this policy carefully before purchasing our services. By making a payment, you agree to these terms.</span></p>
  </div>
</div>

<div class="page-hero">
  <div class="ph-inner">
    <div class="hero-badge">💳 Financial Policy</div>
    <h1 class="hero-title">Refund &amp; <em>Cancellation</em></h1>
    <p class="hero-sub">This policy outlines when refunds may be granted, what is non-refundable, how to cancel, and how to request a refund from SAM Visa.</p>
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
        <li><a href="#r1"><span class="toc-num">1</span>Introduction</a></li>
        <li><a href="#r2"><span class="toc-num">2</span>Service Fees</a></li>
        <li><a href="#r3"><span class="toc-num">3</span>Government Fees</a></li>
        <li><a href="#r4"><span class="toc-num">4</span>Refund Eligibility</a></li>
        <li><a href="#r5"><span class="toc-num">5</span>Non-Refundable</a></li>
        <li><a href="#r6"><span class="toc-num">6</span>Cancellation</a></li>
        <li><a href="#r7"><span class="toc-num">7</span>How to Request</a></li>
        <li><a href="#r8"><span class="toc-num">8</span>Processing Refunds</a></li>
        <li><a href="#r9"><span class="toc-num">9</span>Chargebacks</a></li>
        <li><a href="#r10"><span class="toc-num">10</span>Contact</a></li>
      </ul>
    </div>
    <div class="info-card">
      <p class="ic-title">Quick Summary</p>
      <ul class="ic-list">
        <li><div class="ic-dot"></div>Cancel before work starts for a refund</li>
        <li><div class="ic-dot"></div>Govt fees are non-refundable always</li>
        <li><div class="ic-dot"></div>Visa refusals do not qualify for refunds</li>
        <li><div class="ic-dot"></div>Refunds processed in 7–14 business days</li>
        <li><div class="ic-dot"></div>Contact us before any chargeback</li>
      </ul>
    </div>
  </aside>

  <div class="article">
    <div class="last-updated" style="border-color:var(--or-border);background:var(--or-faint);">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--or);flex-shrink:0;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
      <span style="color:var(--or-dark);">This Refund &amp; Cancellation Policy outlines the terms under which refunds may or may not be granted for services provided by Sam Visa. By purchasing our services, you agree to this policy in full.</span>
    </div>

    <!-- R1 -->
    <div class="legal-section" id="r1">
      <div class="sec-num-wrap"><div class="sec-num">1</div><h2 class="sec-title">Introduction</h2></div>
      <div class="prose">
        <p>This Refund Policy outlines the terms under which refunds may or may not be granted for services provided by Sam Visa.</p>
        <p>By purchasing our services, you agree to this Refund Policy in full. Please read it carefully before completing any payment.</p>
      </div>
      <div class="highlight-box"><p>📋 This policy was last updated in June 2025. We recommend reviewing it before each transaction as terms may be updated periodically.</p></div>
    </div>

    <!-- R2 -->
    <div class="legal-section" id="r2">
      <div class="sec-num-wrap"><div class="sec-num">2</div><h2 class="sec-title">Service Fees</h2></div>
      <div class="prose"><p>Sam Visa charges service fees for the following. These fees are <strong>separate from and in addition to</strong> any government visa application fees:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Visa consultation and guidance</li>
        <li><div class="li-dot"></div>Application preparation and form completion</li>
        <li><div class="li-dot"></div>Document review and verification</li>
        <li><div class="li-dot"></div>Administrative support throughout the process</li>
      </ul>
      <div class="highlight-box"><p>💳 Our service fees are clearly stated before you make any payment. Please ensure you understand what is covered before proceeding.</p></div>
    </div>

    <!-- R3 -->
    <div class="legal-section" id="r3">
      <div class="sec-num-wrap"><div class="sec-num">3</div><h2 class="sec-title">Government Fees</h2></div>
      <div class="prose"><p>Visa fees charged by embassies, consulates, or immigration authorities are <strong>not controlled by Sam Visa</strong> in any way.</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Government and embassy fees are generally <strong>non-refundable</strong></li>
        <li><div class="li-dot"></div>Such fees are payable directly to the relevant government authority</li>
        <li><div class="li-dot"></div>The amount of government fees is set by the respective immigration authority</li>
      </ul>
      <div class="red-box"><p>🚫 Sam Visa cannot refund government or embassy fees under any circumstances. These fees are entirely outside of our control and are subject solely to the policies of the respective immigration authority.</p></div>
    </div>

    <!-- R4 -->
    <div class="legal-section" id="r4">
      <div class="sec-num-wrap"><div class="sec-num">4</div><h2 class="sec-title">Refund Eligibility</h2></div>
      <div class="prose"><p>Refunds of Sam Visa <strong>service fees only</strong> may be considered under the following specific conditions:</p></div>
      <div class="two-col-list">
        <div class="tcl-item eligible">
          <span>✅</span>
          <span>Client cancels <strong>before</strong> the visa application process has started and before any work has commenced</span>
        </div>
        <div class="tcl-item eligible">
          <span>✅</span>
          <span>Payment was made <strong>in error</strong>, such as a duplicate transaction</span>
        </div>
        <div class="tcl-item eligible">
          <span>✅</span>
          <span>Services cannot be provided due to <strong>operational issues on our side</strong> at Sam Visa</span>
        </div>
      </div>
      <div class="green-box" style="margin-top:16px;"><p>✅ If you believe you are eligible for a refund, please contact us promptly at <strong>info@samvisauk.com</strong> before any work has started.</p></div>
    </div>

    <!-- R5 -->
    <div class="legal-section" id="r5">
      <div class="sec-num-wrap"><div class="sec-num">5</div><h2 class="sec-title">Non-Refundable Situations</h2></div>
      <div class="prose"><p>Refunds will <strong>not</strong> be granted under any of the following circumstances:</p></div>
      <div class="two-col-list">
        <div class="tcl-item no">
          <span>🚫</span>
          <span>Visa application has <strong>already been submitted</strong> to the embassy</span>
        </div>
        <div class="tcl-item no">
          <span>🚫</span>
          <span>Document preparation or review has <strong>already started</strong></span>
        </div>
        <div class="tcl-item no">
          <span>🚫</span>
          <span><strong>Visa refusal</strong> by embassy or immigration authority</span>
        </div>
        <div class="tcl-item no">
          <span>🚫</span>
          <span>Client <strong>changes travel plans</strong> after work has begun</span>
        </div>
        <div class="tcl-item no">
          <span>🚫</span>
          <span><strong>Incorrect or incomplete documents</strong> provided by the client</span>
        </div>
        <div class="tcl-item no">
          <span>🚫</span>
          <span><strong>Delays caused</strong> by embassies or immigration authorities</span>
        </div>
      </div>
      <div class="red-box"><p>🚫 Visa refusals are the sole decision of the immigration authority. Sam Visa's service has been rendered regardless of the outcome, and no refund of service fees will apply.</p></div>
    </div>

    <!-- R6 -->
    <div class="legal-section" id="r6">
      <div class="sec-num-wrap"><div class="sec-num">6</div><h2 class="sec-title">Cancellation Policy</h2></div>
      <div class="prose">
        <p>Clients may request cancellation by contacting Sam Visa <strong>before</strong> application processing begins.</p>
        <p>Once the application process has started — including any document preparation, form completion, or communication with an embassy — cancellation may not be possible and service fees already incurred will not be refunded.</p>
      </div>
      <div class="highlight-box"><p>📞 To request a cancellation, contact us as early as possible at <strong>info@samvisauk.com</strong> or via WhatsApp <strong>before any work has commenced</strong> on your application.</p></div>
    </div>

    <!-- R7 -->
    <div class="legal-section" id="r7">
      <div class="sec-num-wrap"><div class="sec-num">7</div><h2 class="sec-title">How to Request a Refund</h2></div>
      <div class="prose"><p>Follow these steps to submit a refund request to Sam Visa:</p></div>
      <div class="timeline">
        <div class="tl-item">
          <div class="tl-dot">1</div>
          <div class="tl-body">
            <div class="tl-title">Contact Us in Writing</div>
            <div class="tl-desc">Email <strong>info@samvisauk.com</strong> with the subject line "Refund Request". Do not initiate a chargeback before contacting us first.</div>
          </div>
        </div>
        <div class="tl-item">
          <div class="tl-dot">2</div>
          <div class="tl-body">
            <div class="tl-title">Include Your Details</div>
            <div class="tl-desc">Provide your full name, booking/reference number, date of payment, and the reason for your refund request.</div>
          </div>
        </div>
        <div class="tl-item">
          <div class="tl-dot">3</div>
          <div class="tl-body">
            <div class="tl-title">We Review Your Request</div>
            <div class="tl-desc">Our team will review your request against this policy and respond within 5 business days with a decision.</div>
          </div>
        </div>
        <div class="tl-item">
          <div class="tl-dot">4</div>
          <div class="tl-body">
            <div class="tl-title">Refund Processed (if approved)</div>
            <div class="tl-desc">Approved refunds are processed within 7–14 business days to your original payment method.</div>
          </div>
        </div>
      </div>
    </div>

    <!-- R8 -->
    <div class="legal-section" id="r8">
      <div class="sec-num-wrap"><div class="sec-num">8</div><h2 class="sec-title">Processing Refunds</h2></div>
      <div class="prose"><p>If a refund is approved by Sam Visa, the following terms apply to the processing of that refund:</p></div>
      <ul class="legal-list">
        <li><div class="li-dot"></div>Refunds will be processed within <strong>7–14 business days</strong> of written approval</li>
        <li><div class="li-dot"></div>Refunds will be made using the <strong>original payment method</strong> used at the time of purchase</li>
        <li><div class="li-dot"></div>Administrative charges may be deducted from the refund amount where work has partially commenced</li>
        <li><div class="li-dot"></div>You will be notified by email when the refund has been processed</li>
      </ul>
      <div class="warning-box"><p>⚠️ Please allow the full 7–14 business days before following up. Processing times may vary depending on your bank or payment provider.</p></div>
    </div>

    <!-- R9 -->
    <div class="legal-section" id="r9">
      <div class="sec-num-wrap"><div class="sec-num">9</div><h2 class="sec-title">Chargebacks</h2></div>
      <div class="prose">
        <p>Customers are strongly encouraged to contact Sam Visa directly <strong>before</strong> initiating any payment disputes or chargebacks with their bank or card provider.</p>
        <p>We are committed to resolving all legitimate concerns promptly and fairly without the need for a formal dispute.</p>
      </div>
      <div class="red-box"><p>🚫 Unjustified chargebacks may result in suspension of services and will be disputed by Sam Visa with full supporting documentation of services rendered. This may also affect your ability to use our services in future.</p></div>
    </div>

    <!-- R10 CONTACT -->
    <div class="contact-card" id="r10">
      <div class="cc-inner">
        <p style="font-size:10px;font-weight:700;letter-spacing:2.5px;color:rgba(255,255,255,.5);text-transform:uppercase;margin-bottom:6px;">Section 10</p>
        <p class="cc-title">Contact for Refund Requests</p>
        <p class="cc-sub">All refund and cancellation requests must be submitted in writing. Please include your booking reference and reason for the request.</p>
        <div class="cc-links">
          <a href="mailto:info@samvisauk.com" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            info@samvisauk.com
          </a>
          <a href="https://wa.me/4407908268383" target="_blank" class="cc-link">
            <svg width="14" height="14" viewBox="0 0 32 32" fill="currentColor"><path d="M16 .4C7.3.4.3 7.4.3 16c0 2.8.7 5.5 2.1 7.9L.2 31.8l8.1-2.1c2.3 1.3 4.9 2 7.6 2h.1c8.7 0 15.7-7 15.7-15.6S24.7.4 16 .4zm0 28.6c-2.4 0-4.8-.7-6.8-1.9l-.5-.3-4.8 1.2 1.3-4.7-.3-.5c-1.3-2.1-2-4.5-2-6.9C2.9 9 8.9 3 16 3s13.1 6 13.1 13.1S23.1 29 16 29zm7.3-9.7c-.4-.2-2.3-1.1-2.7-1.2-.4-.2-.6-.2-.9.2-.3.4-1 1.2-1.2 1.4-.2.2-.5.3-.9.1-2.4-1.2-4-2.2-5.6-5-.4-.7.4-.6 1.2-2 .1-.2.1-.5 0-.7-.1-.2-.9-2.1-1.2-2.9-.3-.7-.6-.6-.9-.6h-.8c-.3 0-.7.1-1 .5-1 1.1-1.5 2.5-1.5 3.9 0 1.4.8 2.7.9 2.9.1.2 2 3.1 4.8 4.3 2.8 1.2 2.8.8 3.3.8.5 0 1.6-.6 1.8-1.2.2-.6.2-1.1.2-1.2 0-.1-.2-.2-.5-.4z"/></svg>
            WhatsApp: +44 07908268383
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

    <p style="font-family:var(--font-d);font-size:20px;font-weight:700;color:var(--or-dark);margin-bottom:14px;">Also Read</p>
    <div class="related-pages">
      <a href="/disclaimer" class="rp-item">
        <div class="rp-icon">⚖️</div>
        <div class="rp-title">Disclaimer</div>
        <div class="rp-desc">Our service limitations, no-guarantee notice, and liability disclaimer.</div>
        <span class="rp-arrow">Read Disclaimer →</span>
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
      <a href="/disclaimer">Disclaimer</a>
      <a href="/refund-policy" style="color:rgba(255,255,255,.65);">Refund Policy</a>
      
     
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
  document.querySelectorAll('[id^="r"]').forEach(sec => {
    if (window.scrollY >= sec.offsetTop - 120) current = sec.id;
  });
  tocLinks.forEach(a => {
    a.classList.toggle('active', a.getAttribute('href') === '#' + current);
  });
}, {passive:true});
</script>
</body>
</html>