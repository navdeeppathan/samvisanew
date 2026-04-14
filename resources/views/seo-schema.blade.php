<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>SEO & Schema — SAM Visa Services</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Jost:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet"/>
<style>
:root{
  --blue:#1a4aab;--blue-dark:#0f2f7a;--blue-mid:#1e5bc6;--blue-light:#4a7fd4;
  --blue-pale:#e8f0fb;--blue-faint:#f0f5ff;
  --gray-dark:#2c3a4a;--gray-mid:#5a6a7a;--gray-light:#8a9aaa;
  --gray-border:#d4dce6;--gray-bg:#f4f6f9;
  --white:#ffffff;
  --green:#16a34a;--green-bg:#f0fdf4;--green-border:#bbf7d0;
  --amber:#d97706;--amber-bg:#fffbeb;--amber-border:#fde68a;
  --purple:#7c3aed;--purple-bg:#f5f3ff;--purple-border:#ddd6fe;
  --teal:#0d9488;--teal-bg:#f0fdfa;--teal-border:#99f6e4;
  --shadow-sm:0 2px 12px rgba(26,74,171,0.08);
  --shadow-md:0 8px 32px rgba(26,74,171,0.14);
  --shadow-blue:0 8px 32px rgba(26,74,171,0.3);
  --font-d:'Cormorant Garamond',serif;
  --font-b:'Jost',sans-serif;
  --font-mono:'JetBrains Mono',monospace;
  --expo:cubic-bezier(0.16,1,0.3,1);
  --bounce:cubic-bezier(0.34,1.56,0.64,1);
}
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
html{scroll-behavior:smooth;}
body{font-family:var(--font-b);background:var(--gray-bg);color:var(--gray-dark);}
::-webkit-scrollbar{width:5px;}
::-webkit-scrollbar-thumb{background:var(--blue);border-radius:4px;}


@keyframes fadeUp{from{opacity:0;transform:translateY(24px);}to{opacity:1;transform:translateY(0);}}
@keyframes bgSlide{0%{background-position:0% 50%;}50%{background-position:100% 50%;}100%{background-position:0% 50%;}}
@keyframes shimmer{0%{background-position:-200% center;}100%{background-position:200% center;}}
@keyframes pulseDot{0%,100%{box-shadow:0 0 0 0 rgba(26,74,171,0.4);}50%{box-shadow:0 0 0 8px rgba(26,74,171,0);}}

/* NAV */
#navbar{position:sticky;top:0;z-index:100;background:rgba(255,255,255,.97);backdrop-filter:blur(16px);box-shadow:0 1px 0 var(--gray-border),var(--shadow-sm);padding:0 48px;}
.nav-inner{max-width:1280px;margin:0 auto;height:72px;display:flex;align-items:center;justify-content:space-between;}
.nav-logo img{height:48px;object-fit:contain;}
.nav-back{display:inline-flex;align-items:center;gap:8px;color:var(--gray-mid);text-decoration:none;font-size:13px;font-weight:500;transition:color .3s;}
.nav-back:hover{color:var(--blue);}
.nav-phone{color:var(--blue);font-weight:600;font-size:13px;text-decoration:none;}

/* PAGE HEADER */
.page-hero{background:linear-gradient(135deg,var(--blue-dark),var(--blue-mid),var(--blue-light));background-size:200% auto;animation:bgSlide 8s ease infinite;padding:80px 48px 60px;text-align:center;position:relative;overflow:hidden;}
.page-hero::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.07) 1px,transparent 0);background-size:28px 28px;}
.ph-inner{position:relative;z-index:2;max-width:760px;margin:0 auto;}
.hero-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.25);border-radius:40px;padding:5px 16px;font-size:10px;font-weight:700;letter-spacing:2.5px;color:rgba(255,255,255,.9);text-transform:uppercase;margin-bottom:18px;}
.badge-dot{width:6px;height:6px;background:#fff;border-radius:50%;animation:pulseDot 2s infinite;}
.hero-title{font-family:var(--font-d);font-size:clamp(34px,5vw,56px);font-weight:700;color:#fff;line-height:1.08;margin-bottom:14px;}
.hero-title em{font-style:italic;color:rgba(255,255,255,.8);}
.hero-sub{font-size:14px;font-weight:300;color:rgba(255,255,255,.7);line-height:1.8;}

/* MAIN LAYOUT */
/* .main{max-width:1280px;margin:0 auto;padding:48px 48px 80px;display:grid;grid-template-columns:260px 1fr;gap:32px;align-items:start;} */
.main {
  max-width:1280px;
  margin:0 auto;
  padding:48px 20px 80px; /* reduce from 48px */
  display:grid;
  grid-template-columns:260px minmax(0, 1fr);
  gap:32px;
  align-items: start; /* 🔥 REQUIRED */
}
/* SIDEBAR NAV */
.sidebar {
  position: sticky;
  top: 88px;
  align-self: start; /* extra safety */
}
.sidebar-card{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;overflow:hidden;box-shadow:var(--shadow-sm);}
.sc-header{padding:16px 20px;background:var(--blue-faint);border-bottom:1px solid var(--gray-border);}
.sc-header p{font-size:10px;font-weight:700;letter-spacing:2.5px;color:var(--blue);text-transform:uppercase;}
.sc-nav{list-style:none;padding:8px 0;}
.sc-nav a{display:flex;align-items:center;gap:10px;padding:10px 20px;font-size:12px;font-weight:600;color:var(--gray-mid);text-decoration:none;transition:color .2s,background .2s;}
.sc-nav a:hover{color:var(--blue);background:var(--blue-faint);}
.sc-nav a.active{color:var(--blue);background:var(--blue-faint);border-right:3px solid var(--blue);}
.sc-nav .dot{width:8px;height:8px;border-radius:50%;flex-shrink:0;}

/* CONTENT SECTIONS */
.content{display:flex;flex-direction:column;gap:32px;}
.section{background:var(--white);border:1.5px solid var(--gray-border);border-radius:20px;overflow:hidden;box-shadow:var(--shadow-sm);}

/* SECTION HEADER */
.sec-head{padding:24px 32px;border-bottom:1px solid var(--gray-border);display:flex;align-items:center;gap:14px;}
.sec-icon{width:40px;height:40px;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:18px;}
.sec-title{font-family:var(--font-d);font-size:20px;font-weight:700;color:var(--blue-dark);}
.sec-sub{font-size:11px;color:var(--gray-light);margin-top:2px;}
.sec-body{padding:28px 32px;}

/* COPY BUTTON */
.copy-btn{display:inline-flex;align-items:center;gap:6px;padding:6px 14px;border-radius:8px;border:1.5px solid var(--gray-border);background:var(--white);color:var(--gray-mid);font-family:var(--font-b);font-size:11px;font-weight:600;cursor:pointer;transition:border-color .2s,color .2s,background .2s;}
.copy-btn:hover{border-color:var(--blue);color:var(--blue);background:var(--blue-faint);}
.copy-btn.copied{border-color:var(--green);color:var(--green);background:var(--green-bg);}

/* CODE BLOCK */
.code-wrap{position:relative;margin-top:12px;}
.code-head{display:flex;align-items:center;justify-content:space-between;background:#1e293b;border-radius:10px 10px 0 0;padding:10px 16px;}
.code-head span{font-size:11px;font-weight:600;color:#64748b;font-family:var(--font-mono);}
.code-block{background:#0f172a;border-radius:0 0 10px 10px;padding:20px;overflow-x:auto;font-family:var(--font-mono);font-size:12px;line-height:1.7;color:#e2e8f0;max-height:360px;overflow-y:auto;}
.code-block::-webkit-scrollbar{width:4px;height:4px;}
.code-block::-webkit-scrollbar-thumb{background:#334155;border-radius:4px;}
/* Syntax highlights */
.t-tag{color:#7dd3fc;}
.t-attr{color:#a5f3fc;}
.t-val{color:#fde68a;}
.t-str{color:#86efac;}
.t-key{color:#c4b5fd;}
.t-num{color:#fb923c;}
.t-bool{color:#f472b6;}
.t-comment{color:#475569;font-style:italic;}
.t-bracket{color:#60a5fa;}
.t-comma{color:#64748b;}
.t-url{color:#6ee7b7;}

/* META TAGS GRID */
.meta-grid{display:grid;gap:10px;}
.meta-row{display:grid;grid-template-columns:200px 1fr;gap:12px;align-items:start;padding:12px 16px;background:var(--gray-bg);border-radius:10px;border:1px solid var(--gray-border);transition:background .2s;}
.meta-row:hover{background:var(--blue-faint);border-color:rgba(26,74,171,.2);}
.meta-key{font-size:11px;font-weight:700;color:var(--blue-dark);font-family:var(--font-mono);}
.meta-val{font-size:12px;color:var(--gray-mid);line-height:1.6;word-break:break-word;}
.meta-badge{display:inline-block;padding:2px 8px;border-radius:20px;font-size:9px;font-weight:700;letter-spacing:1px;text-transform:uppercase;margin-left:6px;}
.mb-req{background:#fee2e2;color:var(--red,#dc2626);}
.mb-og{background:#fef3c7;color:#92400e;}
.mb-tw{background:#e0f2fe;color:#075985;}
.mb-schema{background:var(--purple-bg);color:var(--purple);}

/* STATUS INDICATORS */
.status-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-bottom:20px;}
.status-item{padding:16px 18px;border-radius:12px;border:1.5px solid;display:flex;align-items:center;gap:12px;}
.status-item.good{background:var(--green-bg);border-color:var(--green-border);}
.status-item.warn{background:var(--amber-bg);border-color:var(--amber-border);}
.si-icon{font-size:20px;}
.si-label{font-size:11px;font-weight:700;color:var(--gray-dark);margin-bottom:2px;}
.si-val{font-size:12px;color:var(--gray-mid);}

/* SCHEMA TYPE PILLS */
.schema-types{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:20px;}
.schema-pill{display:flex;align-items:center;gap:7px;padding:8px 16px;border-radius:30px;border:1.5px solid;font-size:12px;font-weight:600;cursor:pointer;transition:all .2s;}
.sp-org{background:var(--blue-faint);border-color:rgba(26,74,171,.25);color:var(--blue);}
.sp-org.active{background:var(--blue);border-color:var(--blue);color:#fff;}
.sp-local{background:var(--green-bg);border-color:var(--green-border);color:var(--green);}
.sp-local.active{background:var(--green);border-color:var(--green);color:#fff;}
.sp-service{background:var(--purple-bg);border-color:var(--purple-border);color:var(--purple);}
.sp-service.active{background:var(--purple);border-color:var(--purple);color:#fff;}
.sp-faq{background:var(--amber-bg);border-color:var(--amber-border);color:var(--amber);}
.sp-faq.active{background:var(--amber);border-color:var(--amber);color:#fff;}
.sp-bread{background:var(--teal-bg);border-color:var(--teal-border);color:var(--teal);}
.sp-bread.active{background:var(--teal);border-color:var(--teal);color:#fff;}

.schema-block{display:none;}
.schema-block.active{display:block;}

/* ROBOTS & SITEMAP TABLE */
.info-table{width:100%;border-collapse:collapse;font-size:13px;}
.info-table th{text-align:left;padding:10px 16px;font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--gray-light);background:var(--gray-bg);border-bottom:1px solid var(--gray-border);}
.info-table td{padding:12px 16px;border-bottom:1px solid var(--gray-border);color:var(--gray-mid);vertical-align:top;}
.info-table tr:last-child td{border-bottom:none;}
.info-table tr:hover td{background:var(--blue-faint);}
.info-table td:first-child{font-weight:600;color:var(--gray-dark);font-family:var(--font-mono);font-size:12px;}

/* PREVIEW CARD */
.serp-preview{background:var(--white);border:1.5px solid var(--gray-border);border-radius:12px;padding:20px 24px;margin-bottom:20px;}
.serp-url{font-size:12px;color:var(--green);margin-bottom:4px;font-family:var(--font-mono);}
.serp-title{font-size:18px;color:#1a0dab;font-weight:400;margin-bottom:4px;text-decoration:underline;cursor:pointer;}
.serp-desc{font-size:13px;color:#4d5156;line-height:1.5;}
.serp-label{font-size:10px;font-weight:700;letter-spacing:2px;color:var(--gray-light);text-transform:uppercase;margin-bottom:12px;}

@media(max-width:1000px){.main{grid-template-columns:1fr;}.sidebar{position:static;}}
@media(max-width:640px){.main{padding:24px 16px 60px;}.page-hero{padding:60px 20px 44px;}.sec-body{padding:20px;}.sec-head{padding:18px 20px;}.status-grid{grid-template-columns:1fr;}}
</style>
</head>
<body>

  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRQWJTDV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- NAV -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="/" class="nav-logo"><img src="{{asset('logotr.png')}}" alt="SAM Visa Services"/></a>
    <a href="/" class="nav-back">← Back to Home</a>
    <a href="tel:+4407908268383" class="nav-phone">📞 +44 07908268383</a>
  </div>
</nav>

<!-- HERO -->
<div class="page-hero">
  <div class="ph-inner">
    <div class="hero-badge"><span class="badge-dot"></span>SEO · Schema · Structured Data</div>
    <h1 class="hero-title">SEO &amp; <em>JSON-LD Schema</em></h1>
    <p class="hero-sub">All meta tags, Open Graph, Twitter Cards, robots.txt, sitemap and JSON-LD structured data for SAM Visa Services — ready to copy and paste.</p>
  </div>
</div>

<div class="main">

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="sidebar-card">
      <div class="sc-header"><p>Quick Navigation</p></div>
      <ul class="sc-nav">
        <li><a href="#serp-preview" class="active"><span class="dot" style="background:#1a0dab;"></span>SERP Preview</a></li>
        <li><a href="#meta-tags"><span class="dot" style="background:var(--blue);"></span>Meta Tags</a></li>
        <li><a href="#open-graph"><span class="dot" style="background:var(--amber);"></span>Open Graph</a></li>
        <li><a href="#twitter-cards"><span class="dot" style="background:#1da1f2;"></span>Twitter Cards</a></li>
        <li><a href="#json-ld"><span class="dot" style="background:var(--purple);"></span>JSON-LD Schema</a></li>
        <li><a href="#robots"><span class="dot" style="background:var(--green);"></span>robots.txt</a></li>
        <li><a href="#sitemap"><span class="dot" style="background:var(--teal);"></span>Sitemap</a></li>
        <li><a href="#canonical"><span class="dot" style="background:#ec4899;"></span>Canonical &amp; hreflang</a></li>
      </ul>
    </div>
  </aside>

  <!-- CONTENT -->
  <div class="content">

    <!-- ═══════════════════════════════
         SERP PREVIEW
    ════════════════════════════════ -->
    <div class="section" id="serp-preview">
      <div class="sec-head">
        <div class="sec-icon" style="background:#e8f0fe;">🔍</div>
        <div><p class="sec-title">Google SERP Preview</p><p class="sec-sub">How SAM Visa Services will appear in search results</p></div>
      </div>
      <div class="sec-body">
        <p class="serp-label">Desktop Preview</p>
        <div class="serp-preview">
          <p class="serp-url">https://samvisauk.com &rsaquo; visa-services</p>
          <p class="serp-title">SAM Visa Services London — UK Visit Visa Experts | Fast, Reliable</p>
          <p class="serp-desc">Professional visit visa services from London. Trusted by 5,000+ clients since 2010. Expert guidance for China, Europe, Ireland, Morocco, Turkey &amp; UAE. ICO Registered. 98% success rate. Apply online today.</p>
        </div>
        <div class="status-grid">
          <div class="status-item good"><span class="si-icon">✅</span><div><p class="si-label">Title Length</p><p class="si-val">58 chars · Ideal 50–60</p></div></div>
          <div class="status-item good"><span class="si-icon">✅</span><div><p class="si-label">Description Length</p><p class="si-val">158 chars · Ideal 150–160</p></div></div>
          <div class="status-item good"><span class="si-icon">✅</span><div><p class="si-label">Structured Data</p><p class="si-val">5 schema types defined</p></div></div>
          <div class="status-item good"><span class="si-icon">✅</span><div><p class="si-label">Mobile Friendly</p><p class="si-val">Viewport meta set</p></div></div>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════
         META TAGS
    ════════════════════════════════ -->
    <div class="section" id="meta-tags">
      <div class="sec-head">
        <div class="sec-icon" style="background:var(--blue-pale);">🏷️</div>
        <div><p class="sec-title">Essential Meta Tags</p><p class="sec-sub">Paste inside &lt;head&gt; of every page</p></div>
      </div>
      <div class="sec-body">
        <div class="meta-grid">
          <div class="meta-row"><span class="meta-key">charset</span><span class="meta-val">UTF-8</span></div>
          <div class="meta-row"><span class="meta-key">viewport</span><span class="meta-val">width=device-width, initial-scale=1.0</span></div>
          <div class="meta-row"><span class="meta-key">title <span class="meta-badge mb-req">Required</span></span><span class="meta-val">SAM Visa Services London — UK Visit Visa Experts | Fast, Reliable</span></div>
          <div class="meta-row"><span class="meta-key">description <span class="meta-badge mb-req">Required</span></span><span class="meta-val">Professional visit visa services from London. Trusted by 5,000+ clients since 2010. Expert guidance for China, Europe, Ireland, Morocco, Turkey &amp; UAE. ICO Registered. 98% success rate.</span></div>
          <div class="meta-row"><span class="meta-key">keywords</span><span class="meta-val">visa services London, UK visit visa, China visa UK, Schengen visa London, Ireland visa, Morocco visa, Turkey visa, Dubai UAE visa, ICO registered visa agent</span></div>
          <div class="meta-row"><span class="meta-key">author</span><span class="meta-val">SAM Visa Services</span></div>
          <div class="meta-row"><span class="meta-key">robots</span><span class="meta-val">index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1</span></div>
          <div class="meta-row"><span class="meta-key">theme-color</span><span class="meta-val">#0f2f7a</span></div>
          <div class="meta-row"><span class="meta-key">geo.region</span><span class="meta-val">GB-ENG</span></div>
          <div class="meta-row"><span class="meta-key">geo.placename</span><span class="meta-val">London, United Kingdom</span></div>
          <div class="meta-row"><span class="meta-key">language</span><span class="meta-val">English</span></div>
          <div class="meta-row"><span class="meta-key">revisit-after</span><span class="meta-val">7 days</span></div>
        </div>

        <div class="code-wrap" style="margin-top:24px;">
          <div class="code-head">
            <span>HTML — Paste into &lt;head&gt;</span>
            <button class="copy-btn" onclick="copyCode('meta-code',this)">Copy</button>
          </div>
          <pre class="code-block" id="meta-code"><span class="t-comment">&lt;!-- ═══ ESSENTIAL META TAGS — SAM VISA SERVICES ═══ --&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">charset</span>=<span class="t-val">"UTF-8"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"viewport"</span> <span class="t-attr">content</span>=<span class="t-val">"width=device-width, initial-scale=1.0"</span><span class="t-tag">/&gt;</span>

<span class="t-comment">&lt;!-- PRIMARY META --&gt;</span>
<span class="t-tag">&lt;title&gt;</span>SAM Visa Services London — UK Visit Visa Experts | Fast, Reliable<span class="t-tag">&lt;/title&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"description"</span> <span class="t-attr">content</span>=<span class="t-val">"Professional visit visa services from London. Trusted by 5,000+ clients since 2010. Expert guidance for China, Europe, Ireland, Morocco, Turkey &amp; UAE. ICO Registered. 98% success rate."</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"keywords"</span> <span class="t-attr">content</span>=<span class="t-val">"visa services London, UK visit visa, China visa UK, Schengen visa London, Ireland visa, Morocco visa, Turkey visa, Dubai UAE visa, ICO registered visa agent, SAM visa"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"author"</span> <span class="t-attr">content</span>=<span class="t-val">"SAM Visa Services"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"robots"</span> <span class="t-attr">content</span>=<span class="t-val">"index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"theme-color"</span> <span class="t-attr">content</span>=<span class="t-val">"#0f2f7a"</span><span class="t-tag">/&gt;</span>

<span class="t-comment">&lt;!-- GEO --&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"geo.region"</span> <span class="t-attr">content</span>=<span class="t-val">"GB-ENG"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"geo.placename"</span> <span class="t-attr">content</span>=<span class="t-val">"London, United Kingdom"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"geo.position"</span> <span class="t-attr">content</span>=<span class="t-val">"51.5074;-0.1278"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"ICBM"</span> <span class="t-attr">content</span>=<span class="t-val">"51.5074, -0.1278"</span><span class="t-tag">/&gt;</span>

<span class="t-comment">&lt;!-- CANONICAL --&gt;</span>
<span class="t-tag">&lt;link</span> <span class="t-attr">rel</span>=<span class="t-val">"canonical"</span> <span class="t-attr">href</span>=<span class="t-val">"https://samvisauk.com/"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;link</span> <span class="t-attr">rel</span>=<span class="t-val">"alternate"</span> <span class="t-attr">hreflang</span>=<span class="t-val">"en-gb"</span> <span class="t-attr">href</span>=<span class="t-val">"https://samvisauk.com/"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;link</span> <span class="t-attr">rel</span>=<span class="t-val">"alternate"</span> <span class="t-attr">hreflang</span>=<span class="t-val">"x-default"</span> <span class="t-attr">href</span>=<span class="t-val">"https://samvisauk.com/"</span><span class="t-tag">/&gt;</span></pre>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════
         OPEN GRAPH
    ════════════════════════════════ -->
    <div class="section" id="open-graph">
      <div class="sec-head">
        <div class="sec-icon" style="background:#fef3c7;">📘</div>
        <div><p class="sec-title">Open Graph Tags</p><p class="sec-sub">Controls appearance when shared on Facebook, LinkedIn, WhatsApp</p></div>
      </div>
      <div class="sec-body">
        <div class="meta-grid">
          <div class="meta-row"><span class="meta-key">og:type <span class="meta-badge mb-og">OG</span></span><span class="meta-val">website</span></div>
          <div class="meta-row"><span class="meta-key">og:url <span class="meta-badge mb-og">OG</span></span><span class="meta-val">https://samvisauk.com/</span></div>
          <div class="meta-row"><span class="meta-key">og:title <span class="meta-badge mb-og">OG</span></span><span class="meta-val">SAM Visa Services — Expert UK Visit Visa Services from London</span></div>
          <div class="meta-row"><span class="meta-key">og:description <span class="meta-badge mb-og">OG</span></span><span class="meta-val">Trusted visit visa services since 2010. Fast, reliable expert guidance for China, Europe, Ireland, Morocco, Turkey and UAE from London. 98% success rate.</span></div>
          <div class="meta-row"><span class="meta-key">og:image <span class="meta-badge mb-og">OG</span></span><span class="meta-val">https://samvisauk.com/og-image.jpg (1200×630px)</span></div>
          <div class="meta-row"><span class="meta-key">og:image:alt <span class="meta-badge mb-og">OG</span></span><span class="meta-val">SAM Visa Services — UK Visit Visa Experts, London</span></div>
          <div class="meta-row"><span class="meta-key">og:site_name <span class="meta-badge mb-og">OG</span></span><span class="meta-val">SAM Visa Services</span></div>
          <div class="meta-row"><span class="meta-key">og:locale <span class="meta-badge mb-og">OG</span></span><span class="meta-val">en_GB</span></div>
        </div>
        <div class="code-wrap" style="margin-top:24px;">
          <div class="code-head">
            <span>HTML — Open Graph</span>
            <button class="copy-btn" onclick="copyCode('og-code',this)">Copy</button>
          </div>
          <pre class="code-block" id="og-code"><span class="t-comment">&lt;!-- ═══ OPEN GRAPH — SAM VISA SERVICES ═══ --&gt;</span>
          <span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:type"</span> <span class="t-attr">content</span>=<span class="t-val">"website"</span><span class="t-tag">/&gt;</span>
          <span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:url"</span> <span class="t-attr">content</span>=<span class="t-val">"https://samvisauk.com/"</span><span class="t-tag">/&gt;</span>
          <span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:title"</span> <span class="t-attr">content</span>=<span class="t-val">"SAM Visa Services — Expert UK Visit Visa Services from London"</span><span class="t-tag">/&gt;</span>
          <span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:description"</span> <span class="t-attr">content</span>=<span class="t-val">"Trusted visit visa services since 2010. Fast, reliable expert guidance for China, Europe, Ireland, Morocco, Turkey and UAE from London. 98% success rate. ICO Registered."</span><span class="t-tag">/&gt;</span>
          <span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:image"</span> <span class="t-attr">content</span>=<span class="t-val">"https://samvisauk.com/og-image.jpg"</span><span class="t-tag">/&gt;</span>
          <span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:image:width"</span> <span class="t-attr">content</span>=<span class="t-val">"1200"</span><span class="t-tag">/&gt;</span>
          <span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:image:height"</span> <span class="t-attr">content</span>=<span class="t-val">"630"</span><span class="t-tag">/&gt;</span>
          <span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:image:alt"</span> <span class="t-attr">content</span>=<span class="t-val">"SAM Visa Services — UK Visit Visa Experts, London"</span><span class="t-tag">/&gt;</span>
          <span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:site_name"</span> <span class="t-attr">content</span>=<span class="t-val">"SAM Visa Services"</span><span class="t-tag">/&gt;</span>
          <span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:locale"</span> <span class="t-attr">content</span>=<span class="t-val">"en_GB"</span><span class="t-tag">/&gt;</span></pre>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════
         TWITTER CARDS
    ════════════════════════════════ -->
    <div class="section" id="twitter-cards">
      <div class="sec-head">
        <div class="sec-icon" style="background:#e0f2fe;">🐦</div>
        <div><p class="sec-title">Twitter / X Cards</p><p class="sec-sub">Controls appearance when shared on Twitter / X</p></div>
      </div>
      <div class="sec-body">
        <div class="meta-grid">
          <div class="meta-row"><span class="meta-key">twitter:card <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">summary_large_image</span></div>
          <div class="meta-row"><span class="meta-key">twitter:site <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">@samvisauk</span></div>
          <div class="meta-row"><span class="meta-key">twitter:creator <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">@samvisauk</span></div>
          <div class="meta-row"><span class="meta-key">twitter:title <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">SAM Visa Services — Expert UK Visit Visa Services from London</span></div>
          <div class="meta-row"><span class="meta-key">twitter:description <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">Trusted visit visa services since 2010. China, Europe, Ireland, Morocco, Turkey, UAE. ICO Registered. 98% success rate. Apply online.</span></div>
          <div class="meta-row"><span class="meta-key">twitter:image <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">https://samvisauk.com/og-image.jpg</span></div>
          <div class="meta-row"><span class="meta-key">twitter:image:alt <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">SAM Visa Services London</span></div>
        </div>
        <div class="code-wrap" style="margin-top:24px;">
          <div class="code-head">
            <span>HTML — Twitter Cards</span>
            <button class="copy-btn" onclick="copyCode('tw-code',this)">Copy</button>
          </div>
          <pre class="code-block" id="tw-code"><span class="t-comment">&lt;!-- ═══ TWITTER CARDS — SAM VISA SERVICES ═══ --&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:card"</span> <span class="t-attr">content</span>=<span class="t-val">"summary_large_image"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:site"</span> <span class="t-attr">content</span>=<span class="t-val">"@samvisauk"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:creator"</span> <span class="t-attr">content</span>=<span class="t-val">"@samvisauk"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:title"</span> <span class="t-attr">content</span>=<span class="t-val">"SAM Visa Services — Expert UK Visit Visa Services from London"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:description"</span> <span class="t-attr">content</span>=<span class="t-val">"Trusted visit visa services since 2010. China, Europe, Ireland, Morocco, Turkey, UAE. ICO Registered. 98% success rate."</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:image"</span> <span class="t-attr">content</span>=<span class="t-val">"https://samvisauk.com/og-image.jpg"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:image:alt"</span> <span class="t-attr">content</span>=<span class="t-val">"SAM Visa Services London"</span><span class="t-tag">/&gt;</span></pre>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════
         JSON-LD SCHEMA
    ════════════════════════════════ -->
    <div class="section" id="json-ld">
      <div class="sec-head">
        <div class="sec-icon" style="background:var(--purple-bg);">{}</div>
        <div><p class="sec-title">JSON-LD Structured Data</p><p class="sec-sub">5 schema types — click to view each one</p></div>
      </div>
      <div class="sec-body">

        <div class="schema-types">
          <button class="schema-pill sp-org active" onclick="showSchema('org',this)">🏢 Organization</button>
          <button class="schema-pill sp-local" onclick="showSchema('local',this)">📍 LocalBusiness</button>
          <button class="schema-pill sp-service" onclick="showSchema('service',this)">⚡ Service</button>
          <button class="schema-pill sp-faq" onclick="showSchema('faq',this)">❓ FAQPage</button>
          <button class="schema-pill sp-bread" onclick="showSchema('bread',this)">🍞 BreadcrumbList</button>
        </div>

        <!-- ORGANIZATION -->
        <div class="schema-block active" id="schema-org">
          <div class="code-wrap">
            <div class="code-head">
              <span>JSON-LD — Organization Schema</span>
              <button class="copy-btn" onclick="copyCode('jld-org',this)">Copy</button>
            </div>
            <pre class="code-block" id="jld-org"><span class="t-tag">&lt;script</span> <span class="t-attr">type</span>=<span class="t-val">"application/ld+json"</span><span class="t-tag">&gt;</span>
<span class="t-bracket">{</span>
  <span class="t-key">"@context"</span><span class="t-comma">:</span> <span class="t-str">"https://schema.org"</span><span class="t-comma">,</span>
  <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Organization"</span><span class="t-comma">,</span>
  <span class="t-key">"@id"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/#organization"</span><span class="t-comma">,</span>
  <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"SAM Visa Services"</span><span class="t-comma">,</span>
  <span class="t-key">"legalName"</span><span class="t-comma">:</span> <span class="t-str">"SAM Visa Services Ltd"</span><span class="t-comma">,</span>
  <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com"</span><span class="t-comma">,</span>
  <span class="t-key">"logo"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"ImageObject"</span><span class="t-comma">,</span>
    <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"{{asset('logotr.png')}}"</span><span class="t-comma">,</span>
    <span class="t-key">"width"</span><span class="t-comma">:</span> <span class="t-num">200</span><span class="t-comma">,</span>
    <span class="t-key">"height"</span><span class="t-comma">:</span> <span class="t-num">100</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"image"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/og-image.jpg"</span><span class="t-comma">,</span>
  <span class="t-key">"description"</span><span class="t-comma">:</span> <span class="t-str">"Professional visit visa services from London since 2010. Trusted by 5,000+ clients. ICO Registered. 98% success rate."</span><span class="t-comma">,</span>
  <span class="t-key">"foundingDate"</span><span class="t-comma">:</span> <span class="t-str">"2010"</span><span class="t-comma">,</span>
  <span class="t-key">"areaServed"</span><span class="t-comma">:</span> <span class="t-bracket">[</span><span class="t-str">"GB"</span><span class="t-comma">,</span> <span class="t-str">"United Kingdom"</span><span class="t-bracket">]</span><span class="t-comma">,</span>
  <span class="t-key">"address"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"PostalAddress"</span><span class="t-comma">,</span>
    <span class="t-key">"addressLocality"</span><span class="t-comma">:</span> <span class="t-str">"London"</span><span class="t-comma">,</span>
    <span class="t-key">"addressRegion"</span><span class="t-comma">:</span> <span class="t-str">"England"</span><span class="t-comma">,</span>
    <span class="t-key">"addressCountry"</span><span class="t-comma">:</span> <span class="t-str">"GB"</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"contactPoint"</span><span class="t-comma">:</span> <span class="t-bracket">[</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"ContactPoint"</span><span class="t-comma">,</span>
      <span class="t-key">"telephone"</span><span class="t-comma">:</span> <span class="t-str">"+44-7879-175585"</span><span class="t-comma">,</span>
      <span class="t-key">"contactType"</span><span class="t-comma">:</span> <span class="t-str">"customer service"</span><span class="t-comma">,</span>
      <span class="t-key">"areaServed"</span><span class="t-comma">:</span> <span class="t-str">"GB"</span><span class="t-comma">,</span>
      <span class="t-key">"availableLanguage"</span><span class="t-comma">:</span> <span class="t-str">"English"</span><span class="t-comma">,</span>
      <span class="t-key">"hoursAvailable"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
        <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"OpeningHoursSpecification"</span><span class="t-comma">,</span>
        <span class="t-key">"dayOfWeek"</span><span class="t-comma">:</span> <span class="t-bracket">[</span><span class="t-str">"Monday"</span><span class="t-comma">,</span><span class="t-str">"Tuesday"</span><span class="t-comma">,</span><span class="t-str">"Wednesday"</span><span class="t-comma">,</span><span class="t-str">"Thursday"</span><span class="t-comma">,</span><span class="t-str">"Friday"</span><span class="t-comma">,</span><span class="t-str">"Saturday"</span><span class="t-bracket">]</span><span class="t-comma">,</span>
        <span class="t-key">"opens"</span><span class="t-comma">:</span> <span class="t-str">"09:00"</span><span class="t-comma">,</span>
        <span class="t-key">"closes"</span><span class="t-comma">:</span> <span class="t-str">"19:00"</span>
      <span class="t-bracket">}</span>
    <span class="t-bracket">}</span>
  <span class="t-bracket">]</span><span class="t-comma">,</span>
  <span class="t-key">"sameAs"</span><span class="t-comma">:</span> <span class="t-bracket">[</span>
    <span class="t-str">"https://www.facebook.com/samvisauk"</span><span class="t-comma">,</span>
    <span class="t-str">"https://www.instagram.com/samvisauk"</span><span class="t-comma">,</span>
    <span class="t-str">"https://wa.me/4407908268383"</span>
  <span class="t-bracket">]</span><span class="t-comma">,</span>
  <span class="t-key">"aggregateRating"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"AggregateRating"</span><span class="t-comma">,</span>
    <span class="t-key">"ratingValue"</span><span class="t-comma">:</span> <span class="t-str">"4.9"</span><span class="t-comma">,</span>
    <span class="t-key">"bestRating"</span><span class="t-comma">:</span> <span class="t-str">"5"</span><span class="t-comma">,</span>
    <span class="t-key">"reviewCount"</span><span class="t-comma">:</span> <span class="t-str">"5000"</span>
  <span class="t-bracket">}</span>
<span class="t-bracket">}</span>
<span class="t-tag">&lt;/script&gt;</span></pre>
          </div>
        </div>

        <!-- LOCAL BUSINESS -->
        <div class="schema-block" id="schema-local">
          <div class="code-wrap">
            <div class="code-head">
              <span>JSON-LD — LocalBusiness Schema</span>
              <button class="copy-btn" onclick="copyCode('jld-local',this)">Copy</button>
            </div>
            <pre class="code-block" id="jld-local"><span class="t-tag">&lt;script</span> <span class="t-attr">type</span>=<span class="t-val">"application/ld+json"</span><span class="t-tag">&gt;</span>
<span class="t-bracket">{</span>
  <span class="t-key">"@context"</span><span class="t-comma">:</span> <span class="t-str">"https://schema.org"</span><span class="t-comma">,</span>
  <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-bracket">[</span><span class="t-str">"LocalBusiness"</span><span class="t-comma">,</span> <span class="t-str">"ProfessionalService"</span><span class="t-bracket">]</span><span class="t-comma">,</span>
  <span class="t-key">"@id"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/#localbusiness"</span><span class="t-comma">,</span>
  <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"SAM Visa Services"</span><span class="t-comma">,</span>
  <span class="t-key">"image"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/og-image.jpg"</span><span class="t-comma">,</span>
  <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com"</span><span class="t-comma">,</span>
  <span class="t-key">"telephone"</span><span class="t-comma">:</span> <span class="t-str">"+44-7879-175585"</span><span class="t-comma">,</span>
  <span class="t-key">"priceRange"</span><span class="t-comma">:</span> <span class="t-str">"££"</span><span class="t-comma">,</span>
  <span class="t-key">"currenciesAccepted"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span>
  <span class="t-key">"paymentAccepted"</span><span class="t-comma">:</span> <span class="t-str">"Bank Transfer, Card"</span><span class="t-comma">,</span>
  <span class="t-key">"address"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"PostalAddress"</span><span class="t-comma">,</span>
    <span class="t-key">"streetAddress"</span><span class="t-comma">:</span> <span class="t-str">"Brixton"</span><span class="t-comma">,</span>
    <span class="t-key">"addressLocality"</span><span class="t-comma">:</span> <span class="t-str">"London"</span><span class="t-comma">,</span>
    <span class="t-key">"addressRegion"</span><span class="t-comma">:</span> <span class="t-str">"England"</span><span class="t-comma">,</span>
    <span class="t-key">"addressCountry"</span><span class="t-comma">:</span> <span class="t-str">"GB"</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"geo"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"GeoCoordinates"</span><span class="t-comma">,</span>
    <span class="t-key">"latitude"</span><span class="t-comma">:</span> <span class="t-num">51.4613</span><span class="t-comma">,</span>
    <span class="t-key">"longitude"</span><span class="t-comma">:</span> <span class="t-num">-0.1156</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"openingHoursSpecification"</span><span class="t-comma">:</span> <span class="t-bracket">[</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"OpeningHoursSpecification"</span><span class="t-comma">,</span>
      <span class="t-key">"dayOfWeek"</span><span class="t-comma">:</span> <span class="t-bracket">[</span><span class="t-str">"Monday"</span><span class="t-comma">,</span><span class="t-str">"Tuesday"</span><span class="t-comma">,</span><span class="t-str">"Wednesday"</span><span class="t-comma">,</span><span class="t-str">"Thursday"</span><span class="t-comma">,</span><span class="t-str">"Friday"</span><span class="t-bracket">]</span><span class="t-comma">,</span>
      <span class="t-key">"opens"</span><span class="t-comma">:</span> <span class="t-str">"09:00"</span><span class="t-comma">,</span>
      <span class="t-key">"closes"</span><span class="t-comma">:</span> <span class="t-str">"19:00"</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"OpeningHoursSpecification"</span><span class="t-comma">,</span>
      <span class="t-key">"dayOfWeek"</span><span class="t-comma">:</span> <span class="t-str">"Saturday"</span><span class="t-comma">,</span>
      <span class="t-key">"opens"</span><span class="t-comma">:</span> <span class="t-str">"10:00"</span><span class="t-comma">,</span>
      <span class="t-key">"closes"</span><span class="t-comma">:</span> <span class="t-str">"17:00"</span>
    <span class="t-bracket">}</span>
  <span class="t-bracket">]</span><span class="t-comma">,</span>
  <span class="t-key">"aggregateRating"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"AggregateRating"</span><span class="t-comma">,</span>
    <span class="t-key">"ratingValue"</span><span class="t-comma">:</span> <span class="t-str">"4.9"</span><span class="t-comma">,</span>
    <span class="t-key">"reviewCount"</span><span class="t-comma">:</span> <span class="t-str">"5000"</span><span class="t-comma">,</span>
    <span class="t-key">"bestRating"</span><span class="t-comma">:</span> <span class="t-str">"5"</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"hasMap"</span><span class="t-comma">:</span> <span class="t-str">"https://maps.google.com/?q=SAM+Visa+Services+London"</span>
<span class="t-bracket">}</span>
<span class="t-tag">&lt;/script&gt;</span></pre>
          </div>
        </div>

        <!-- SERVICE -->
        <div class="schema-block" id="schema-service">
          <div class="code-wrap">
            <div class="code-head">
              <span>JSON-LD — Service Schema</span>
              <button class="copy-btn" onclick="copyCode('jld-service',this)">Copy</button>
            </div>
            <pre class="code-block" id="jld-service"><span class="t-tag">&lt;script</span> <span class="t-attr">type</span>=<span class="t-val">"application/ld+json"</span><span class="t-tag">&gt;</span>
<span class="t-bracket">{</span>
  <span class="t-key">"@context"</span><span class="t-comma">:</span> <span class="t-str">"https://schema.org"</span><span class="t-comma">,</span>
  <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Service"</span><span class="t-comma">,</span>
  <span class="t-key">"@id"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/#service"</span><span class="t-comma">,</span>
  <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"UK Visit Visa Application Services"</span><span class="t-comma">,</span>
  <span class="t-key">"provider"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@id"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/#organization"</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"serviceType"</span><span class="t-comma">:</span> <span class="t-str">"Visa Application Assistance"</span><span class="t-comma">,</span>
  <span class="t-key">"description"</span><span class="t-comma">:</span> <span class="t-str">"Expert visit visa application assistance for China, Europe (Schengen), Ireland, Morocco, Turkey and UAE / Dubai. Document preparation, embassy submission and full process support."</span><span class="t-comma">,</span>
  <span class="t-key">"areaServed"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Country"</span><span class="t-comma">,</span>
    <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"United Kingdom"</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"availableChannel"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"ServiceChannel"</span><span class="t-comma">,</span>
    <span class="t-key">"serviceUrl"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com"</span><span class="t-comma">,</span>
    <span class="t-key">"servicePhone"</span><span class="t-comma">:</span> <span class="t-str">"+44-7879-175585"</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"offers"</span><span class="t-comma">:</span> <span class="t-bracket">[</span>
    <span class="t-bracket">{</span> <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Offer"</span><span class="t-comma">,</span> <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"China Visit Visa"</span><span class="t-comma">,</span> <span class="t-key">"priceCurrency"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span> <span class="t-key">"price"</span><span class="t-comma">:</span> <span class="t-str">"99"</span><span class="t-comma">,</span> <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/visa-china"</span> <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span> <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Offer"</span><span class="t-comma">,</span> <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Schengen Visa"</span><span class="t-comma">,</span> <span class="t-key">"priceCurrency"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span> <span class="t-key">"price"</span><span class="t-comma">:</span> <span class="t-str">"89"</span><span class="t-comma">,</span> <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/visa-europe"</span> <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span> <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Offer"</span><span class="t-comma">,</span> <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Ireland Visa"</span><span class="t-comma">,</span> <span class="t-key">"priceCurrency"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span> <span class="t-key">"price"</span><span class="t-comma">:</span> <span class="t-str">"79"</span><span class="t-comma">,</span> <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/visa-ireland"</span> <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span> <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Offer"</span><span class="t-comma">,</span> <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Morocco Visa"</span><span class="t-comma">,</span> <span class="t-key">"priceCurrency"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span> <span class="t-key">"price"</span><span class="t-comma">:</span> <span class="t-str">"69"</span><span class="t-comma">,</span> <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/visa-morocco"</span> <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span> <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Offer"</span><span class="t-comma">,</span> <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Turkey Visa"</span><span class="t-comma">,</span> <span class="t-key">"priceCurrency"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span> <span class="t-key">"price"</span><span class="t-comma">:</span> <span class="t-str">"59"</span><span class="t-comma">,</span> <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/visa-turkey"</span> <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span> <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Offer"</span><span class="t-comma">,</span> <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"UAE / Dubai Visa"</span><span class="t-comma">,</span> <span class="t-key">"priceCurrency"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span> <span class="t-key">"price"</span><span class="t-comma">:</span> <span class="t-str">"69"</span><span class="t-comma">,</span> <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/visa-dubai"</span> <span class="t-bracket">}</span>
  <span class="t-bracket">]</span>
<span class="t-bracket">}</span>
<span class="t-tag">&lt;/script&gt;</span></pre>
          </div>
        </div>

        <!-- FAQ -->
        <div class="schema-block" id="schema-faq">
          <div class="code-wrap">
            <div class="code-head">
              <span>JSON-LD — FAQPage Schema</span>
              <button class="copy-btn" onclick="copyCode('jld-faq',this)">Copy</button>
            </div>
            <pre class="code-block" id="jld-faq"><span class="t-tag">&lt;script</span> <span class="t-attr">type</span>=<span class="t-val">"application/ld+json"</span><span class="t-tag">&gt;</span>
<span class="t-bracket">{</span>
  <span class="t-key">"@context"</span><span class="t-comma">:</span> <span class="t-str">"https://schema.org"</span><span class="t-comma">,</span>
  <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"FAQPage"</span><span class="t-comma">,</span>
  <span class="t-key">"mainEntity"</span><span class="t-comma">:</span> <span class="t-bracket">[</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Question"</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Which countries do SAM Visa Services process visas for?"</span><span class="t-comma">,</span>
      <span class="t-key">"acceptedAnswer"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
        <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Answer"</span><span class="t-comma">,</span>
        <span class="t-key">"text"</span><span class="t-comma">:</span> <span class="t-str">"SAM Visa Services currently process visit visas for China, Europe (Schengen), Ireland, Morocco, Turkey and UAE / Dubai."</span>
      <span class="t-bracket">}</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Question"</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"How long does it take to get a visa?"</span><span class="t-comma">,</span>
      <span class="t-key">"acceptedAnswer"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
        <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Answer"</span><span class="t-comma">,</span>
        <span class="t-key">"text"</span><span class="t-comma">:</span> <span class="t-str">"Processing times vary by country. Turkey and UAE visas typically take 3–5 working days. Morocco 5–8 days. Ireland 8–12 days. China 10–15 days. Europe (Schengen) 15–20 days."</span>
      <span class="t-bracket">}</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Question"</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Is SAM Visa Services ICO registered?"</span><span class="t-comma">,</span>
      <span class="t-key">"acceptedAnswer"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
        <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Answer"</span><span class="t-comma">,</span>
        <span class="t-key">"text"</span><span class="t-comma">:</span> <span class="t-str">"Yes, SAM Visa Services is registered with the Information Commissioner's Office (ICO) and complies with all GDPR data protection requirements."</span>
      <span class="t-bracket">}</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Question"</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"What is your visa success rate?"</span><span class="t-comma">,</span>
      <span class="t-key">"acceptedAnswer"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
        <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Answer"</span><span class="t-comma">,</span>
        <span class="t-key">"text"</span><span class="t-comma">:</span> <span class="t-str">"SAM Visa Services has a 98% visa approval success rate, having helped over 5,000 clients since 2010."</span>
      <span class="t-bracket">}</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Question"</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Do I need a UK eVisa sharecode for a Schengen visa?"</span><span class="t-comma">,</span>
      <span class="t-key">"acceptedAnswer"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
        <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Answer"</span><span class="t-comma">,</span>
        <span class="t-key">"text"</span><span class="t-comma">:</span> <span class="t-str">"Yes, non-British nationals applying for a Schengen visa from the UK need to provide a UK eVisa sharecode (starting with S). This can be found at gov.uk/view-prove-immigration-status."</span>
      <span class="t-bracket">}</span>
    <span class="t-bracket">}</span>
  <span class="t-bracket">]</span>
<span class="t-bracket">}</span>
<span class="t-tag">&lt;/script&gt;</span></pre>
          </div>
        </div>

        <!-- BREADCRUMB -->
        <div class="schema-block" id="schema-bread">
          <div class="code-wrap">
            <div class="code-head">
              <span>JSON-LD — BreadcrumbList Schema</span>
              <button class="copy-btn" onclick="copyCode('jld-bread',this)">Copy</button>
            </div>
            <pre class="code-block" id="jld-bread"><span class="t-tag">&lt;script</span> <span class="t-attr">type</span>=<span class="t-val">"application/ld+json"</span><span class="t-tag">&gt;</span>
<span class="t-bracket">{</span>
  <span class="t-key">"@context"</span><span class="t-comma">:</span> <span class="t-str">"https://schema.org"</span><span class="t-comma">,</span>
  <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"BreadcrumbList"</span><span class="t-comma">,</span>
  <span class="t-key">"itemListElement"</span><span class="t-comma">:</span> <span class="t-bracket">[</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"ListItem"</span><span class="t-comma">,</span>
      <span class="t-key">"position"</span><span class="t-comma">:</span> <span class="t-num">1</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Home"</span><span class="t-comma">,</span>
      <span class="t-key">"item"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com"</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"ListItem"</span><span class="t-comma">,</span>
      <span class="t-key">"position"</span><span class="t-comma">:</span> <span class="t-num">2</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Visa Services"</span><span class="t-comma">,</span>
      <span class="t-key">"item"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/visa-services"</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"ListItem"</span><span class="t-comma">,</span>
      <span class="t-key">"position"</span><span class="t-comma">:</span> <span class="t-num">3</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"China Visa"</span><span class="t-comma">,</span>
      <span class="t-key">"item"</span><span class="t-comma">:</span> <span class="t-str">"https://samvisauk.com/visa-china"</span>
    <span class="t-bracket">}</span>
  <span class="t-bracket">]</span>
<span class="t-bracket">}</span>
<span class="t-tag">&lt;/script&gt;</span></pre>
          </div>
        </div>

      </div>
    </div>

    <!-- ═══════════════════════════════
         ROBOTS.TXT
    ════════════════════════════════ -->
    <div class="section" id="robots">
      <div class="sec-head">
        <div class="sec-icon" style="background:var(--green-bg);">🤖</div>
        <div><p class="sec-title">robots.txt</p><p class="sec-sub">Place at https://samvisauk.com/robots.txt</p></div>
      </div>
      <div class="sec-body">
        <div class="code-wrap" style="margin-top:0;">
          <div class="code-head">
            <span>robots.txt — Root file</span>
            <button class="copy-btn" onclick="copyCode('robots-code',this)">Copy</button>
          </div>
          <pre class="code-block" id="robots-code"><span class="t-comment"># robots.txt — SAM Visa Services</span>
<span class="t-comment"># https://samvisauk.com/robots.txt</span>

<span class="t-key">User-agent:</span> *
<span class="t-key">Allow:</span> /

<span class="t-comment"># Block admin, private and internal paths</span>
<span class="t-key">Disallow:</span> /wp-admin/
<span class="t-key">Disallow:</span> /wp-includes/
<span class="t-key">Disallow:</span> /admin/
<span class="t-key">Disallow:</span> /application/edit/
<span class="t-key">Disallow:</span> /dashboard/
<span class="t-key">Disallow:</span> /api/
<span class="t-key">Disallow:</span> /?s=
<span class="t-key">Disallow:</span> /search/
<span class="t-key">Disallow:</span> /login
<span class="t-key">Disallow:</span> /register
<span class="t-key">Disallow:</span> /thankyou

<span class="t-comment"># Allow specific bots with priority</span>
<span class="t-key">User-agent:</span> Googlebot
<span class="t-key">Allow:</span> /

<span class="t-key">User-agent:</span> Bingbot
<span class="t-key">Allow:</span> /

<span class="t-comment"># Sitemap location</span>
<span class="t-key">Sitemap:</span> <span class="t-url">https://samvisauk.com/sitemap.xml</span>

<span class="t-comment"># Crawl delay (optional, for shared hosting)</span>
<span class="t-key">Crawl-delay:</span> 1</pre>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════
         SITEMAP
    ════════════════════════════════ -->
    <div class="section" id="sitemap">
      <div class="sec-head">
        <div class="sec-icon" style="background:var(--teal-bg);">🗺️</div>
        <div><p class="sec-title">XML Sitemap</p><p class="sec-sub">Place at https://samvisauk.com/sitemap.xml</p></div>
      </div>
      <div class="sec-body">
        <table class="info-table" style="margin-bottom:20px;">
          <thead><tr><th>URL</th><th>Priority</th><th>Change Freq</th><th>Notes</th></tr></thead>
          <tbody>
            <tr><td>samvisauk.com/</td><td>1.0</td><td>weekly</td><td>Homepage</td></tr>
            <tr><td>samvisauk.com/pricing</td><td>0.9</td><td>monthly</td><td>Pricing page</td></tr>
            <tr><td>samvisauk.com/visa-china</td><td>0.9</td><td>monthly</td><td>China visa form</td></tr>
            <tr><td>samvisauk.com/visa-europe</td><td>0.9</td><td>monthly</td><td>Europe Schengen form</td></tr>
            <tr><td>samvisauk.com/visa-ireland</td><td>0.9</td><td>monthly</td><td>Ireland visa form</td></tr>
            <tr><td>samvisauk.com/visa-morocco</td><td>0.8</td><td>monthly</td><td>Morocco visa form</td></tr>
            <tr><td>samvisauk.com/visa-turkey</td><td>0.8</td><td>monthly</td><td>Turkey visa form</td></tr>
            <tr><td>samvisauk.com/visa-dubai</td><td>0.8</td><td>monthly</td><td>UAE / Dubai visa form</td></tr>
          </tbody>
        </table>
        <div class="code-wrap">
          <div class="code-head">
            <span>XML — sitemap.xml</span>
            <button class="copy-btn" onclick="copyCode('sitemap-code',this)">Copy</button>
          </div>
          <pre class="code-block" id="sitemap-code"><span class="t-comment">&lt;?xml version="1.0" encoding="UTF-8"?&gt;</span>
<span class="t-tag">&lt;urlset</span> <span class="t-attr">xmlns</span>=<span class="t-val">"http://www.sitemaps.org/schemas/sitemap/0.9"</span>
        <span class="t-attr">xmlns:xsi</span>=<span class="t-val">"http://www.w3.org/2001/XMLSchema-instance"</span>
        <span class="t-attr">xsi:schemaLocation</span>=<span class="t-val">"http://www.sitemaps.org/schemas/sitemap/0.9
          http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"</span><span class="t-tag">&gt;</span>

  <span class="t-comment">&lt;!-- Homepage --&gt;</span>
  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://samvisauk.com/</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>weekly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>1.0<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-comment">&lt;!-- Pricing --&gt;</span>
  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://samvisauk.com/pricing</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.9<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-comment">&lt;!-- Visa Pages --&gt;</span>
  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://samvisauk.com/visa-china</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.9<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://samvisauk.com/visa-europe</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.9<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://samvisauk.com/visa-ireland</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.9<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://samvisauk.com/visa-morocco</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.8<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://samvisauk.com/visa-turkey</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.8<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://samvisauk.com/visa-dubai</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.8<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

<span class="t-tag">&lt;/urlset&gt;</span></pre>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════
         CANONICAL & HREFLANG
    ════════════════════════════════ -->
    <div class="section" id="canonical">
      <div class="sec-head">
        <div class="sec-icon" style="background:#fdf2f8;">🔗</div>
        <div><p class="sec-title">Canonical &amp; Per-Page SEO</p><p class="sec-sub">Use these templates for each visa page individually</p></div>
      </div>
      <div class="sec-body">
        <table class="info-table" style="margin-bottom:24px;">
          <thead><tr><th>Page</th><th>Recommended Title Tag</th><th>Priority Keyword</th></tr></thead>
          <tbody>
            <tr><td>/ (Home)</td><td>SAM Visa Services London — Visit Visa Experts UK</td><td>visa services London</td></tr>
            <tr><td>/visa-china</td><td>China Visit Visa Application UK — SAM Visa Services</td><td>China visa UK London</td></tr>
            <tr><td>/visa-europe</td><td>Schengen Visa UK Application — SAM Visa Services London</td><td>Schengen visa London</td></tr>
            <tr><td>/visa-ireland</td><td>Ireland Visit Visa From UK — SAM Visa Services London</td><td>Ireland visa UK</td></tr>
            <tr><td>/visa-morocco</td><td>Morocco Visa UK Application — SAM Visa Services London</td><td>Morocco visa from UK</td></tr>
            <tr><td>/visa-turkey</td><td>Turkey eVisa UK — Fast Application | SAM Visa Services</td><td>Turkey visa UK</td></tr>
            <tr><td>/visa-dubai</td><td>UAE Dubai Visa UK Application — SAM Visa Services London</td><td>Dubai visa from UK</td></tr>
            <tr><td>/pricing</td><td>Visa Pricing UK — Transparent Fees | SAM Visa Services</td><td>visa service fees UK</td></tr>
          </tbody>
        </table>

        <div class="code-wrap">
          <div class="code-head">
            <span>HTML — Per-page canonical template</span>
            <button class="copy-btn" onclick="copyCode('canon-code',this)">Copy</button>
          </div>
          <pre class="code-block" id="canon-code"><span class="t-comment">&lt;!-- Replace {PAGE_URL} and {PAGE_TITLE} and {PAGE_DESCRIPTION} for each page --&gt;</span>

<span class="t-tag">&lt;title&gt;</span>{PAGE_TITLE}<span class="t-tag">&lt;/title&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"description"</span> <span class="t-attr">content</span>=<span class="t-val">"{PAGE_DESCRIPTION}"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;link</span> <span class="t-attr">rel</span>=<span class="t-val">"canonical"</span> <span class="t-attr">href</span>=<span class="t-val">"https://samvisauk.com/{PAGE_URL}"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;link</span> <span class="t-attr">rel</span>=<span class="t-val">"alternate"</span> <span class="t-attr">hreflang</span>=<span class="t-val">"en-gb"</span> <span class="t-attr">href</span>=<span class="t-val">"https://samvisauk.com/{PAGE_URL}"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;link</span> <span class="t-attr">rel</span>=<span class="t-val">"alternate"</span> <span class="t-attr">hreflang</span>=<span class="t-val">"x-default"</span> <span class="t-attr">href</span>=<span class="t-val">"https://samvisauk.com/{PAGE_URL}"</span><span class="t-tag">/&gt;</span>

<span class="t-comment">&lt;!-- Page-specific OG --&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:title"</span> <span class="t-attr">content</span>=<span class="t-val">"{PAGE_TITLE}"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:description"</span> <span class="t-attr">content</span>=<span class="t-val">"{PAGE_DESCRIPTION}"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:url"</span> <span class="t-attr">content</span>=<span class="t-val">"https://samvisauk.com/{PAGE_URL}"</span><span class="t-tag">/&gt;</span>

<span class="t-comment">&lt;!-- Page-specific Twitter --&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:title"</span> <span class="t-attr">content</span>=<span class="t-val">"{PAGE_TITLE}"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:description"</span> <span class="t-attr">content</span>=<span class="t-val">"{PAGE_DESCRIPTION}"</span><span class="t-tag">/&gt;</span></pre>
        </div>
      </div>
    </div>

  </div><!-- /content -->
</div><!-- /main -->

<script>
window.addEventListener('scroll', () => {
  document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 40);
}, {passive:true});

function showSchema(id, btn) {
  document.querySelectorAll('.schema-block').forEach(b => b.classList.remove('active'));
  document.querySelectorAll('.schema-pill').forEach(p => p.classList.remove('active'));
  document.getElementById('schema-' + id)?.classList.add('active');
  btn.classList.add('active');
}

function copyCode(id, btn) {
  const el = document.getElementById(id);
  if (!el) return;
  const text = el.innerText || el.textContent;
  navigator.clipboard.writeText(text).then(() => {
    const orig = btn.textContent;
    btn.textContent = '✓ Copied!';
    btn.classList.add('copied');
    setTimeout(() => { btn.textContent = orig; btn.classList.remove('copied'); }, 2000);
  }).catch(() => {
    // Fallback for older browsers
    const ta = document.createElement('textarea');
    ta.value = text;
    ta.style.position = 'fixed';
    ta.style.opacity = '0';
    document.body.appendChild(ta);
    ta.select();
    document.execCommand('copy');
    document.body.removeChild(ta);
    const orig = btn.textContent;
    btn.textContent = '✓ Copied!';
    btn.classList.add('copied');
    setTimeout(() => { btn.textContent = orig; btn.classList.remove('copied'); }, 2000);
  });
}

// Active sidebar link on scroll
const sections = document.querySelectorAll('.section');
const navLinks = document.querySelectorAll('.sc-nav a');
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      const id = e.target.id;
      navLinks.forEach(a => {
        a.classList.toggle('active', a.getAttribute('href') === '#' + id);
      });
    }
  });
}, {threshold: 0.3, rootMargin: '-80px 0px -40% 0px'});
sections.forEach(s => observer.observe(s));
</script>
</body>
</html>