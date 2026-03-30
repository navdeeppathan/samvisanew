<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Europe (Schengen) Visit Visa Application — SAM Visa Services</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<style>
  :root{
    --blue:#1a4aab;--blue-dark:#0f2f7a;--blue-mid:#1e5bc6;--blue-light:#4a7fd4;
    --blue-pale:#e8f0fb;--blue-faint:#f0f5ff;
    --gray-dark:#2c3a4a;--gray-mid:#5a6a7a;--gray-light:#8a9aaa;
    --gray-border:#d4dce6;--gray-bg:#f4f6f9;
    --white:#ffffff;--white-soft:#fafbfd;
    --shadow-sm:0 2px 12px rgba(26,74,171,0.08);
    --shadow-md:0 8px 32px rgba(26,74,171,0.14);
    --shadow-lg:0 20px 60px rgba(26,74,171,0.18);
    --shadow-blue:0 8px 32px rgba(26,74,171,0.3);
    --font-d:'Cormorant Garamond',serif;--font-b:'Jost',sans-serif;
    --expo:cubic-bezier(0.16,1,0.3,1);--bounce:cubic-bezier(0.34,1.56,0.64,1);
    --green:#16a34a;--red:#dc2626;--amber:#d97706;
  }
  *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{font-family:var(--font-b);background:var(--gray-bg);color:var(--gray-dark);}
  ::-webkit-scrollbar{width:5px;}
  ::-webkit-scrollbar-thumb{background:var(--blue);border-radius:4px;}

  /* NAV */
  #navbar{position:sticky;top:0;z-index:100;background:rgba(255,255,255,.97);backdrop-filter:blur(16px);box-shadow:0 1px 0 var(--gray-border),var(--shadow-sm);padding:0 48px;}
  .nav-inner{max-width:1200px;margin:0 auto;height:72px;display:flex;align-items:center;justify-content:space-between;}
  .nav-logo img{height:50px;object-fit:contain;}
  .nav-back{display:inline-flex;align-items:center;gap:8px;color:var(--gray-mid);text-decoration:none;font-size:13px;font-weight:500;transition:color .3s;}
  .nav-back:hover{color:var(--blue);}
  .nav-phone{display:flex;align-items:center;gap:7px;color:var(--blue);font-weight:600;font-size:13px;text-decoration:none;}

  /* PAGE HEADER */
  /* .page-header{background:linear-gradient(135deg,#003399 0%,#003fa6 50%,#0055cc 100%);padding:56px 48px;text-align:center;position:relative;overflow:hidden;}
  .page-header::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.08) 1px,transparent 0);background-size:28px 28px;}
  .ph-inner{position:relative;z-index:2;max-width:700px;margin:0 auto;}
  .ph-flag{font-size:64px;margin-bottom:16px;display:block;filter:drop-shadow(0 8px 16px rgba(0,0,0,.25));}
  .ph-country{font-size:10px;font-weight:700;letter-spacing:4px;color:rgba(255,255,255,.6);text-transform:uppercase;margin-bottom:8px;}
  .ph-title{font-family:var(--font-d);font-size:clamp(32px,5vw,52px);font-weight:700;color:#fff;margin-bottom:14px;line-height:1.1;}
  .ph-title em{font-style:italic;color:rgba(255,255,255,.8);}
  .ph-sub{font-size:14px;color:rgba(255,255,255,.65);line-height:1.7;} */

  .page-header {
    position: relative;
    padding: 56px 48px;
    text-align: center;
    overflow: hidden;
    color: white;
  }

  /* SLIDER */
  .ph-bg-slider {
    position: absolute;
    inset: 0;
    z-index: 0;
  }

  .ph-flag img {
      height: 50px;
      object-fit: contain;
  }

  .ph-slide {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    animation: slideShow 20s infinite;
  }

  /* EUROPE IMAGES */
  .ph-slide:nth-child(1) {
    background-image: url('https://images.unsplash.com/photo-1502602898657-3e91760cbb34'); /* Eiffel Tower */
    animation-delay: 0s;
  }
  .ph-slide:nth-child(2) {
    background-image: url('https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba'); /* Rome Colosseum */
    animation-delay: 5s;
  }
  .ph-slide:nth-child(3) {
    background-image: url('https://images.unsplash.com/photo-1501785888041-af3ef285b470'); /* Swiss Alps */
    animation-delay: 10s;
  }
  .ph-slide:nth-child(4) {
    background-image: url('https://images.unsplash.com/photo-1492724441997-5dc865305da7'); /* European city street/business */
    animation-delay: 15s;
  }

  /* ANIMATION */
  @keyframes slideShow {
    0% { opacity: 0; transform: scale(1.1); }
    5% { opacity: 1; }
    25% { opacity: 1; }
    30% { opacity: 0; }
    100% { opacity: 0; transform: scale(1); }
  }

  /* EUROPE BLUE OVERLAY */
  .page-header::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0,51,153,0.85), rgba(0,63,166,0.75), rgba(0,85,204,0.65));
    z-index: 1;
  }

  /* DOT PATTERN */
  .page-header::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,.08) 1px, transparent 0);
    background-size: 28px 28px;
    z-index: 1;
  }

  /* CONTENT */
  .ph-inner {
    position: relative;
    z-index: 2;
    max-width: 700px;
    margin: 0 auto;
  }

  .ph-flag {
    font-size: 64px;
    margin-bottom: 16px;
    display: block;
  }



  .ph-country {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 4px;
    color: rgba(255,255,255,.6);
    text-transform: uppercase;
    margin-bottom: 8px;
  }

  .ph-title {
    font-size: clamp(32px,5vw,52px);
    font-weight: 700;
    margin-bottom: 14px;
    line-height: 1.1;
  }

  .ph-title em {
    font-style: italic;
    color: rgba(255,255,255,.85);
  }

  .ph-sub {
    font-size: 14px;
    color: rgba(255,255,255,.75);
    line-height: 1.7;
  }

  /* STEP PROGRESS */
  /* .steps-wrap{background:var(--white);border-bottom:1px solid var(--gray-border);position:sticky;top:72px;z-index:90;box-shadow:var(--shadow-sm);} */
  /* .steps-inner{max-width:1200px;margin:0 auto;padding:0 48px;display:flex;align-items:center;overflow-x:auto;scrollbar-width:none;} */
  .steps-wrap{
    background:var(--white);
    border-bottom:1px solid var(--gray-border);
    position:sticky;
    top:72px;
    z-index:90;
    box-shadow:var(--shadow-sm);
    display:flex;
    align-items:center;
  }

  .steps-inner{
    max-width:1200px;
    margin:0 auto;
    padding:0 10px;
    display:flex;
    align-items:center;
    overflow-x:auto;
    scrollbar-width:none;
    scroll-behavior:smooth;
  }

  .steps-inner::-webkit-scrollbar{
    display:none;
  }

  /* IMPORTANT */
  .step-pill{
    flex:0 0 auto;
  }

  /* scroll buttons */
  .scroll-btn{
    width:40px;
    height:40px;
    border-radius:50%;
    border:none;
    background:white;
    box-shadow:0 2px 8px rgba(0,0,0,0.15);
    cursor:pointer;
    font-size:22px;
  }

  .scroll-btn.left{
    margin-left:10px;
  }

  .scroll-btn.right{
    margin-right:10px;
  }
  /* .steps-inner::-webkit-scrollbar{display:none;} */
  .step-pill{display:flex;align-items:center;gap:10px;padding:16px 20px;white-space:nowrap;cursor:pointer;border-bottom:3px solid transparent;transition:border-color .3s,color .3s;color:var(--gray-light);font-size:12px;font-weight:600;flex-shrink:0;}
  .step-pill.active{border-bottom-color:var(--blue);color:var(--blue);}
  .step-pill.done{border-bottom-color:var(--green);color:var(--green);}
  .step-num{width:24px;height:24px;border-radius:50%;background:var(--gray-bg);display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;transition:background .3s,color .3s;}
  .step-pill.active .step-num{background:var(--blue);color:var(--white);}
  .step-pill.done .step-num{background:var(--green);color:var(--white);}
  .step-connector{width:32px;height:1px;background:var(--gray-border);flex-shrink:0;}

  /* LAYOUT */
  .form-wrap{max-width:1200px;margin:0 auto;padding:40px 48px 80px;display:grid;grid-template-columns:1fr 330px;gap:32px;align-items:start;}
  .form-section{background:var(--white);border:1.5px solid var(--gray-border);border-radius:20px;overflow:hidden;display:none;}
  .form-section.active{display:block;}

  /* SECTION HEADER */
  .fs-header{padding:28px 36px;border-bottom:1px solid var(--gray-border);background:var(--blue-faint);display:flex;align-items:center;gap:16px;}
  .fs-icon{width:48px;height:48px;border-radius:12px;background:var(--blue);display:flex;align-items:center;justify-content:center;flex-shrink:0;}
  .fs-icon svg{color:var(--white);}
  .fs-title{font-family:var(--font-d);font-size:22px;font-weight:700;color:var(--blue-dark);}
  .fs-sub{font-size:12px;color:var(--gray-mid);margin-top:2px;}
  .fs-body{padding:36px;}

  /* GRID */
  .fg{display:grid;gap:20px;margin-bottom:20px;}
  .fg-2{grid-template-columns:1fr 1fr;}
  .fg-3{grid-template-columns:1fr 1fr 1fr;}
  .fg-1{grid-template-columns:1fr;}
  .fl{display:flex;flex-direction:column;gap:6px;}

  /* LABELS */
  .lbl{font-size:11px;font-weight:700;letter-spacing:2px;color:var(--blue-dark);text-transform:uppercase;display:flex;align-items:center;gap:5px;}
  .req{color:var(--red);font-size:13px;}
  .opt{display:inline-flex;align-items:center;gap:4px;background:#dcfce7;color:var(--green);font-size:9px;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:2px 8px;border-radius:20px;margin-left:4px;}

  /* INPUTS */
  .fi,.fs-el,.ft{background:var(--white-soft);border:1.5px solid var(--gray-border);border-radius:10px;padding:12px 16px;color:var(--gray-dark);font-family:var(--font-b);font-size:13px;outline:none;width:100%;transition:border-color .3s,box-shadow .3s,background .3s;}
  .fi::placeholder,.ft::placeholder{color:var(--gray-light);}
  .fi:focus,.fs-el:focus,.ft:focus{border-color:var(--blue);box-shadow:0 0 0 4px rgba(26,74,171,.1);background:var(--white);}
  .fs-el{appearance:none;cursor:pointer;}
  .ft{resize:vertical;min-height:90px;line-height:1.6;}

  /* RADIO */
  .radio-group{display:flex;gap:12px;flex-wrap:wrap;margin-top:4px;}
  .radio-opt{display:flex;align-items:center;gap:8px;cursor:pointer;padding:10px 18px;border-radius:10px;border:1.5px solid var(--gray-border);font-size:13px;font-weight:500;transition:border-color .3s,background .3s;}
  .radio-opt:has(input:checked){border-color:var(--blue);background:var(--blue-faint);color:var(--blue);}
  .radio-opt input{accent-color:var(--blue);}

  /* CONDITIONAL */
  .cond{display:none;margin-top:16px;padding:20px;background:var(--blue-faint);border:1.5px solid rgba(26,74,171,.15);border-radius:12px;}
  .cond.show{display:block;}

  /* FILE UPLOAD */
  .file-zone{border:2px dashed var(--gray-border);border-radius:12px;padding:24px;text-align:center;cursor:pointer;transition:border-color .3s,background .3s;background:var(--white-soft);}
  .file-zone:hover,.file-zone.dragover{border-color:var(--blue);background:var(--blue-faint);}
  .file-zone input{display:none;}
  .fz-icon{font-size:28px;margin-bottom:8px;}
  .fz-title{font-size:13px;font-weight:600;color:var(--gray-dark);margin-bottom:4px;}
  .fz-sub{font-size:11px;color:var(--gray-light);}
  .fz-sub em{color:var(--blue);font-style:normal;font-weight:600;}
  .file-preview{display:flex;align-items:center;justify-content:space-between;background:var(--blue-faint);border:1px solid rgba(26,74,171,.2);border-radius:8px;padding:10px 14px;margin-top:10px;font-size:12px;font-weight:600;color:var(--blue-dark);}
  .file-preview button{background:none;border:none;color:var(--gray-light);cursor:pointer;font-size:16px;}
  .file-preview button:hover{color:var(--red);}

  /* DIVIDERS */
  .form-div{margin:28px 0;border:none;border-top:1px solid var(--gray-border);}
  .sec-heading{font-family:var(--font-d);font-size:18px;font-weight:600;color:var(--blue-dark);margin-bottom:20px;padding-bottom:12px;border-bottom:2px solid var(--blue-faint);display:flex;align-items:center;gap:10px;}

  /* INFO BOXES */
  .info-box{padding:16px 20px;border-radius:12px;font-size:12px;line-height:1.7;margin-bottom:20px;}
  .info-box.blue{background:var(--blue-faint);border:1.5px solid rgba(26,74,171,.2);color:var(--blue-dark);}
  .info-box.amber{background:#fffbeb;border:1.5px solid #fde68a;color:#92400e;}
  .info-box.red{background:#fef2f2;border:1.5px solid #fecaca;color:#991b1b;}
  .info-box strong{font-weight:700;}

  /* SHARECODE INPUT */
  .sharecode-wrap{position:relative;}
  .sharecode-wrap .fi{letter-spacing:1px;font-weight:600;text-transform:uppercase;}
  .sharecode-prefix{position:absolute;left:14px;top:50%;transform:translateY(-50%);font-size:13px;font-weight:700;color:var(--blue);pointer-events:none;}
  .sharecode-input{padding-left:30px!important;}

  /* NAV BUTTONS */
  .form-nav{display:flex;align-items:center;justify-content:space-between;margin-top:32px;padding-top:24px;border-top:1px solid var(--gray-border);}
  .btn-prev{display:inline-flex;align-items:center;gap:8px;background:var(--white);color:var(--gray-mid);font-family:var(--font-b);font-weight:600;font-size:13px;padding:13px 24px;border-radius:10px;border:1.5px solid var(--gray-border);cursor:pointer;transition:border-color .3s,color .3s;}
  .btn-prev:hover{border-color:var(--blue);color:var(--blue);}
  .btn-next{display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));color:var(--white);font-family:var(--font-b);font-weight:700;font-size:13px;padding:13px 28px;border-radius:10px;border:none;cursor:pointer;box-shadow:var(--shadow-blue);transition:transform .25s var(--bounce),box-shadow .25s;}
  .btn-next:hover{transform:translateY(-2px);box-shadow:0 12px 32px rgba(26,74,171,.4);}
  .btn-submit{display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#16a34a,#15803d);color:var(--white);font-family:var(--font-b);font-weight:700;font-size:13px;padding:14px 36px;border-radius:10px;border:none;cursor:pointer;box-shadow:0 8px 24px rgba(22,163,74,.3);transition:transform .25s var(--bounce),box-shadow .25s;}
  .btn-submit:hover{transform:translateY(-2px);box-shadow:0 12px 32px rgba(22,163,74,.4);}

  /* SIDEBAR */
  .sidebar{display:flex;flex-direction:column;gap:20px;}
  .side-card{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;padding:24px;box-shadow:var(--shadow-sm);}
  .side-card.blue-grad{background:linear-gradient(135deg,var(--blue-dark),var(--blue-mid));border-color:transparent;}
  .side-title{font-family:var(--font-d);font-size:17px;font-weight:600;color:var(--blue-dark);margin-bottom:16px;}
  .side-card.blue-grad .side-title{color:var(--white);}
  .req-list{list-style:none;display:flex;flex-direction:column;gap:10px;}
  .req-list li{display:flex;align-items:flex-start;gap:10px;font-size:12px;line-height:1.6;}
  .req-badge{min-width:20px;height:20px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:9px;font-weight:700;flex-shrink:0;margin-top:1px;}
  .req-badge.r{background:#fee2e2;color:var(--red);}
  .req-badge.g{background:#dcfce7;color:var(--green);}
  .req-list li span:last-child{color:var(--gray-mid);}
  .prog-bar{background:rgba(255,255,255,.2);border-radius:10px;height:6px;margin-top:16px;overflow:hidden;}
  .prog-fill{background:var(--white);border-radius:10px;height:100%;transition:width .5s var(--expo);}
  .prog-text{font-size:11px;color:rgba(255,255,255,.7);margin-top:8px;text-align:center;}
  .contact-item{display:flex;align-items:center;gap:10px;font-size:12px;color:var(--gray-mid);margin-bottom:10px;}
  .contact-item svg{color:var(--blue);flex-shrink:0;}
  .contact-item a{color:var(--blue);text-decoration:none;font-weight:600;}
  .country-link{display:flex;align-items:center;gap:8px;font-size:12px;color:var(--gray-mid);text-decoration:none;padding:8px 12px;border-radius:8px;border:1px solid var(--gray-border);transition:all .3s;margin-bottom:6px;}
  .country-link:hover{border-color:var(--blue);color:var(--blue);background:var(--blue-faint);}
  .country-link:last-child{margin-bottom:0;}

  button:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    box-shadow: none !important;
    transform: none !important;
  }

  @media(max-width:1000px){.form-wrap{grid-template-columns:1fr;padding:24px;}.sidebar{order:-1;}}
  @media(max-width:700px){#navbar{padding:0 16px;}.page-header{padding:40px 20px;}.steps-inner{padding:0 16px;}.fg-2,.fg-3{grid-template-columns:1fr;}}
  @media(max-width:500px){.form-wrap{padding:16px;}.fs-body{padding:20px;}.fs-header{padding:20px;}}
</style>
</head>
<body>

<!-- NAV -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="/" class="nav-logo">
      <img src="{{asset('logotr.png')}}" alt="SAM Visa Services"/>
    </a>
    <a href="/" class="nav-back">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
      Back to Home
    </a>
    <a href="tel:+447912649410" class="nav-phone">📞 +44 7912 649410</a>
  </div>
</nav>

<!-- PAGE HEADER -->
{{-- <div class="page-header">
  <div class="ph-inner">
    <span class="ph-flag">🇪🇺</span>
    <p class="ph-country">Visit Visa Application</p>
    <h1 class="ph-title">Europe (Schengen) <em>Visit Visa</em></h1>
    <p class="ph-sub">Complete all sections below. Our team will contact you within 24 hours with a personalised document checklist and next steps.</p>
  </div>
</div> --}}

<div class="page-header">

  <!-- Background Slider -->
  <div class="ph-bg-slider">
    <div class="ph-slide"></div>
    <div class="ph-slide"></div>
    <div class="ph-slide"></div>
    <div class="ph-slide"></div>
  </div>

  <div class="ph-inner">
    <span class="ph-flag">
      <img src="{{asset('europeflag.avif')}}" alt="" >
    </span>
    <p class="ph-country">Visit Visa Application</p>
    <h1 class="ph-title">Europe (Schengen)</h1>
    <p class="ph-sub">
      Complete all sections below. Our team will contact you within 24 hours with a personalised document checklist and next steps.
    </p>
  </div>

</div>

<!-- STEP PROGRESS BAR -->
<div class="steps-wrap">
    <button class="scroll-btn left" onclick="scrollSteps(-200)">‹</button>

  {{-- <div class="steps-inner" id="stepsContainer">
    <div class="step-pill active" onclick="goToStep(1)" id="sp-1"><div class="step-num">1</div>Personal Info</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(2)" id="sp-2"><div class="step-num">2</div>Home Address</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(3)" id="sp-3"><div class="step-num">3</div>Employment</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(4)" id="sp-4"><div class="step-num">4</div>Travel Details</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(5)" id="sp-5"><div class="step-num">5</div>EU Connection</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(6)" id="sp-6"><div class="step-num">6</div>Documents</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(7)" id="sp-7"><div class="step-num">7</div>Declaration</div>
  </div> --}}
  <div class="steps-inner" id="stepsContainer">

  <div class="step-pill active" onclick="goToStep(1)" id="sp-1">
    <div class="step-num">1</div>Personal & Address
  </div>

  <div class="step-connector"></div>

  <div class="step-pill" onclick="goToStep(2)" id="sp-2">
    <div class="step-num">2</div>Employment & Travel
  </div>

  <div class="step-connector"></div>

  <div class="step-pill" onclick="goToStep(3)" id="sp-3">
    <div class="step-num">3</div>EU & Documents
  </div>

  <div class="step-connector"></div>

  <div class="step-pill" onclick="goToStep(4)" id="sp-4">
    <div class="step-num">4</div>Declaration
  </div>

</div>
   <button class="scroll-btn right" onclick="scrollSteps(200)">›</button>

</div>

<form id="visaForm" 
action="{{ route('visa.europe.submit') }}" 
method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="country" value="Europe (Schengen)"/>

<div class="form-wrap">
  <div>

<div class="form-section active" id="step-1">
  <!-- ═══════════════════════════════════════════
       STEP 1 — PERSONAL INFORMATION
  ════════════════════════════════════════════ -->
  {{-- <div class="form-section active" id="step-1"> --}}
    <div class="fs-header">
      <div class="fs-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      </div>
      <div>
        <p class="fs-title">Personal Information</p>
        <p class="fs-sub">Your details exactly as they appear in your passport.</p>
      </div>
    </div>
    <div class="fs-body">

      <div class="fg fg-3">
        <div class="fl">
          <label class="lbl">Surname <span class="req">*</span></label>
          <input type="text" name="surname" class="fi" placeholder="e.g. SMITH" required/>
        </div>
        <div class="fl">
          <label class="lbl">First Name <span class="req">*</span></label>
          <input type="text" name="first_name" class="fi" placeholder="e.g. JOHN" required/>
        </div>
        <div class="fl">
          <label class="lbl">Middle Name</label>
          <input type="text" name="middle_name" class="fi" placeholder="If applicable"/>
        </div>
      </div>

      <div class="fg fg-3">
        <div class="fl">
          <label class="lbl">Date of Birth <span class="req">*</span></label>
          <input type="date" name="dob" class="fi" required/>
        </div>
        <div class="fl">
          <label class="lbl">Nationality <span class="req">*</span></label>
          <input type="text" name="nationality" class="fi" placeholder="e.g. British" required/>
        </div>
        <div class="fl">
          <label class="lbl">Country of Birth <span class="req">*</span></label>
          <input type="text" name="country_of_birth" class="fi" placeholder="e.g. United Kingdom" required/>
        </div>
      </div>

      <div class="fg fg-2">
        <div class="fl">
          <label class="lbl">Passport Number <span class="req">*</span></label>
          <input type="text" name="passport_number" class="fi" placeholder="Passport number" required/>
        </div>
        <div class="fl">
          <label class="lbl">Marital Status <span class="req">*</span></label>
          <select name="marital_status" class="fs-el" required>
            <option value="" disabled selected>Select status…</option>
            <option>Single</option>
            <option>Married</option>
            <option>Divorced</option>
            <option>Separated</option>
          </select>
        </div>
      </div>

      <div class="fg fg-2">
        <div class="fl">
          <label class="lbl">Passport Issue Date <span class="req">*</span></label>
          <input type="date" name="passport_issue" class="fi" required/>
        </div>
        <div class="fl">
          <label class="lbl">Passport Expiry Date <span class="req">*</span></label>
          <input type="date" name="passport_expiry" class="fi" required/>
        </div>
      </div>

      <div class="fg fg-2">
        <div class="fl">
          <label class="lbl">Mobile Phone Number <span class="req">*</span></label>
          <input type="tel" name="mobile_phone" class="fi" placeholder="+44 7000 000000" required/>
        </div>
        <div class="fl">
          <label class="lbl">Email Address <span class="req">*</span></label>
          <input type="email" name="email" class="fi" placeholder="john@example.com" required/>
        </div>
      </div>

      {{-- <div class="form-nav">
        <div></div>
        <button type="button" class="btn-next" onclick="nextStep(1)">Next Step →</button>
      </div> --}}
    </div>
  {{-- </div> --}}

  <!-- ═══════════════════════════════════════════
       STEP 2 — HOME ADDRESS
  ════════════════════════════════════════════ -->
  {{-- <div class="form-section" id="step-2"> --}}
    <div class="fs-header">
      <div class="fs-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      </div>
      <div>
        <p class="fs-title">Your Home Address</p>
        <p class="fs-sub">Your current residential address in the UK.</p>
      </div>
    </div>
    <div class="fs-body">

      <div class="fg fg-2">
        <div class="fl">
          <label class="lbl">Door Number <span class="req">*</span></label>
          <input type="text" name="home_door" class="fi" placeholder="e.g. 42" required/>
        </div>
        <div class="fl">
          <label class="lbl">Street <span class="req">*</span></label>
          <input type="text" name="home_street" class="fi" placeholder="e.g. Baker Street" required/>
        </div>
      </div>

      <div class="fg fg-3">
        <div class="fl">
          <label class="lbl">City <span class="req">*</span></label>
          <input type="text" name="home_city" class="fi" placeholder="e.g. London" required/>
        </div>
        <div class="fl">
          <label class="lbl">Postcode <span class="req">*</span></label>
          <input type="text" name="home_postcode" class="fi" placeholder="e.g. SW1A 1AA" required/>
        </div>
        <div class="fl">
          <label class="lbl">Country <span class="req">*</span></label>
          <input type="text" name="home_country" class="fi" value="United Kingdom" required/>
        </div>
      </div>

      <div class="form-nav">
        {{-- <button type="button" class="btn-prev" onclick="prevStep(2)">← Previous</button> --}}
        <button type="button" class="btn-next" id="next-1" disabled onclick="nextStep(1)">Next Step →</button>
      </div>
    </div>
  {{-- </div> --}}

</div>  

<div class="form-section" id="step-2">
  <!-- ═══════════════════════════════════════════
       STEP 3 — EMPLOYMENT
  ════════════════════════════════════════════ -->
  {{-- <div class="form-section" id="step-3"> --}}
    <div class="fs-header">
      <div class="fs-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
      </div>
      <div>
        <p class="fs-title">Employment Details</p>
        <p class="fs-sub">Your employer and occupation information.</p>
      </div>
    </div>
    <div class="fs-body">

      <div class="fg fg-2">
        <div class="fl">
          <label class="lbl">Employer / Company Name <span class="req">*</span></label>
          <input type="text" name="company_name" class="fi" placeholder="e.g. Acme Ltd" required/>
        </div>
        <div class="fl">
          <label class="lbl">Your Occupation <span class="req">*</span></label>
          <input type="text" name="occupation" class="fi" placeholder="e.g. Teacher, Nurse, Engineer" required/>
        </div>
      </div>

      <p class="sec-heading">🏢 Employer Address</p>

      <div class="fg fg-2">
        <div class="fl">
          <label class="lbl">Door Number <span class="req">*</span></label>
          <input type="text" name="work_door" class="fi" placeholder="Door / unit no" required/>
        </div>
        <div class="fl">
          <label class="lbl">Street <span class="req">*</span></label>
          <input type="text" name="work_street" class="fi" placeholder="Street" required/>
        </div>
      </div>

      <div class="fg fg-3">
        <div class="fl">
          <label class="lbl">City <span class="req">*</span></label>
          <input type="text" name="work_city" class="fi" placeholder="City" required/>
        </div>
        <div class="fl">
          <label class="lbl">Postcode <span class="req">*</span></label>
          <input type="text" name="work_postcode" class="fi" placeholder="Postcode" required/>
        </div>
        <div class="fl">
          <label class="lbl">Country <span class="req">*</span></label>
          <input type="text" name="work_country" class="fi" value="United Kingdom" required/>
        </div>
      </div>

      <div class="fg fg-2">
        <div class="fl">
          <label class="lbl">Employer Phone Number <span class="req">*</span></label>
          <input type="tel" name="work_phone" class="fi" placeholder="+44 20 0000 0000" required/>
        </div>
        <div class="fl">
          <label class="lbl">Employer Email Address</label>
          <input type="email" name="work_email" class="fi" placeholder="employer@company.com"/>
        </div>
      </div>

      {{-- <div class="form-nav">
        <button type="button" class="btn-prev" onclick="prevStep(3)">← Previous</button>
        <button type="button" class="btn-next" onclick="nextStep(3)">Next Step →</button>
      </div> --}}
    </div>
  {{-- </div> --}}

  <!-- ═══════════════════════════════════════════
       STEP 4 — TRAVEL DETAILS
  ════════════════════════════════════════════ -->
  {{-- <div class="form-section" id="step-4"> --}}
    <div class="fs-header">
      <div class="fs-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
      </div>
      <div>
        <p class="fs-title">Travel Details</p>
        <p class="fs-sub">Your Schengen trip dates and previous EU travel history.</p>
      </div>
    </div>
    <div class="fs-body">

      <div class="fg fg-2">
        <div class="fl">
          <label class="lbl">Departure Date <span class="req">*</span></label>
          <input type="date" name="departure_date" class="fi" required/>
        </div>
        <div class="fl">
          <label class="lbl">Return Date <span class="req">*</span></label>
          <input type="date" name="return_date" class="fi" required/>
        </div>
      </div>

      <div class="fg fg-2">
        <div class="fl">
          <label class="lbl">Destination Country / Countries <span class="req">*</span></label>
          <input type="text" name="destination_city" class="fi" placeholder="e.g. France, Italy, Spain" required/>
        </div>
        <div class="fl">
          <label class="lbl">Purpose of Visit <span class="req">*</span></label>
          <select name="visit_purpose" class="fs-el" required>
            <option value="" disabled selected>Select purpose…</option>
            <option>Tourism / Sightseeing</option>
            <option>Visiting Family</option>
            <option>Visiting Friends</option>
            <option>Medical</option>
            <option>Other</option>
          </select>
        </div>
      </div>

      <hr class="form-div"/>
      <p class="sec-heading">🌍 Previous EU Travel</p>

      <div class="fg fg-1">
        <div class="fl">
          <label class="lbl">Have you been to the EU / Schengen area before? <span class="req">*</span></label>
          <div class="radio-group">
            <label class="radio-opt"><input type="radio" name="been_to_eu" value="yes" onchange="toggle('eu-visa-cond','yes')"/> Yes</label>
            <label class="radio-opt"><input type="radio" name="been_to_eu" value="no" onchange="toggle('eu-visa-cond','no')" checked/> No</label>
          </div>
          <div class="cond" id="eu-visa-cond">
            <div class="fl" style="margin-bottom:16px;">
              <label class="lbl">Send your last EU / Schengen visa copy <span class="req">*</span></label>
              <div class="file-zone" onclick="triggerFile('prev_eu_visa')">
                <input type="file" id="prev_eu_visa" name="prev_eu_visa" accept=".jpg,.jpeg,.pdf" onchange="showFile(this,'prev-euv')"/>
                <div class="fz-icon">🗂️</div>
                <p class="fz-title">Upload previous EU visa</p>
                <p class="fz-sub">JPEG or PDF · <em>Required if answered Yes</em></p>
              </div>
              <div id="prev-euv"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-nav">
        {{-- <button type="button" class="btn-prev" onclick="prevStep(4)">← Previous</button> --}}
        <button type="button" class="btn-next" id="next-2" disabled onclick="nextStep(2)">Next Step →</button>
      </div>
    </div>
  {{-- </div> --}}

</div>  


<div class="form-section" id="step-3">

  <!-- ═══════════════════════════════════════════
       STEP 5 — EU CONNECTION & IMMIGRATION
  ════════════════════════════════════════════ -->
  {{-- <div class="form-section" id="step-5"> --}}
    <div class="fs-header">
      <div class="fs-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
      </div>
      <div>
        <p class="fs-title">EU Connection &amp; Immigration Status</p>
        <p class="fs-sub">Your UK eVisa sharecode and any EU family connections.</p>
      </div>
    </div>
    <div class="fs-body">

      <!-- EVISA SHARECODE -->
      <p class="sec-heading">🇬🇧 UK eVisa / Immigration Status</p>

      <div class="info-box blue">
        <strong>ℹ️ UK eVisa Sharecode:</strong> If you hold a UK immigration status (BRP, eVisa, leave to remain etc.), you must provide your sharecode. This always starts with the letter <strong>S</strong> and is required by the Schengen embassy to verify your UK residency.
      </div>

      <div class="fg fg-1">
        <div class="fl">
          <label class="lbl">UK eVisa Sharecode <span class="req">*</span></label>
          <div class="sharecode-wrap">
            <span class="sharecode-prefix">S</span>
            <input type="text" name="uk_sharecode" class="fi sharecode-input" placeholder="— Enter your sharecode (starts with S)" required
              oninput="this.value = this.value.toUpperCase().replace(/^S/,'');"
            />
          </div>
          <p style="font-size:10px;color:var(--gray-light);margin-top:4px;font-style:italic;">Your sharecode begins with the letter S. You can find it in your UKVI account at gov.uk/view-prove-immigration-status</p>
        </div>
      </div>

      <hr class="form-div"/>

      <!-- EU CITIZEN RELATION -->
      <p class="sec-heading">🤝 EU Citizen Relationship</p>

      <div class="fg fg-1">
        <div class="fl">
          <label class="lbl">Are you related to an EU citizen? <span class="req">*</span></label>
          <div class="radio-group">
            <label class="radio-opt"><input type="radio" name="eu_relation" value="yes" onchange="toggle('eu-relation-cond','yes')"/> Yes</label>
            <label class="radio-opt"><input type="radio" name="eu_relation" value="no" onchange="toggle('eu-relation-cond','no')" checked/> No</label>
          </div>
          <div class="cond" id="eu-relation-cond">
            <div class="fg fg-2" style="margin-bottom:0;">
              <div class="fl">
                <label class="lbl">Relationship to EU Citizen <span class="req">*</span></label>
                <input type="text" name="eu_relation_type" class="fi" placeholder="e.g. Spouse, Parent, Child, Sibling"/>
              </div>
              <div class="fl">
                <label class="lbl">EU Citizen's Nationality <span class="req">*</span></label>
                <input type="text" name="eu_citizen_nationality" class="fi" placeholder="e.g. French, German, Spanish"/>
              </div>
            </div>
            <div class="fl" style="margin-top:16px;">
              <label class="lbl">Upload EU Relation's Passport Copy <span class="req">*</span></label>
              <div class="file-zone" onclick="triggerFile('eu_relation_passport')">
                <input type="file" id="eu_relation_passport" name="eu_relation_passport" accept=".jpg,.jpeg,.pdf" onchange="showFile(this,'prev-eurp')"/>
                <div class="fz-icon">🛂</div>
                <p class="fz-title">Upload EU passport copy</p>
                <p class="fz-sub">JPEG or PDF · <em>Required if answered Yes</em></p>
              </div>
              <div id="prev-eurp"></div>
            </div>
          </div>
        </div>
      </div>

      <hr class="form-div"/>

      <!-- SPONSOR -->
      <p class="sec-heading">💼 Sponsorship</p>

      <div class="fg fg-1">
        <div class="fl">
          <label class="lbl">Are you being sponsored for this trip? <span class="req">*</span></label>
          <div class="radio-group">
            <label class="radio-opt"><input type="radio" name="is_sponsored" value="yes" onchange="toggle('sponsor-cond','yes')"/> Yes</label>
            <label class="radio-opt"><input type="radio" name="is_sponsored" value="no" onchange="toggle('sponsor-cond','no')" checked/> No</label>
          </div>
          <div class="cond" id="sponsor-cond">
            <div class="fg fg-2" style="margin-bottom:0;">
              <div class="fl">
                <label class="lbl">Sponsor's Full Name <span class="req">*</span></label>
                <input type="text" name="sponsor_name" class="fi" placeholder="Sponsor's full name"/>
              </div>
              <div class="fl">
                <label class="lbl">Sponsor's Relationship to You <span class="req">*</span></label>
                <input type="text" name="sponsor_relationship" class="fi" placeholder="e.g. Friend, Employer, Relative"/>
              </div>
            </div>
            <div class="fg fg-2" style="margin-top:16px;margin-bottom:0;">
              <div class="fl">
                <label class="lbl">Sponsor's Phone Number</label>
                <input type="tel" name="sponsor_phone" class="fi" placeholder="Sponsor's phone number"/>
              </div>
              <div class="fl">
                <label class="lbl">Sponsor's Address</label>
                <input type="text" name="sponsor_address" class="fi" placeholder="Sponsor's full address"/>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="form-nav">
        <button type="button" class="btn-prev" onclick="prevStep(5)">← Previous</button>
        <button type="button" class="btn-next" onclick="nextStep(5)">Next Step →</button>
      </div> --}}
    </div>
  {{-- </div> --}}

  <!-- ═══════════════════════════════════════════
       STEP 6 — DOCUMENTS
  ════════════════════════════════════════════ -->
  {{-- <div class="form-section" id="step-6"> --}}
    <div class="fs-header">
      <div class="fs-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
      </div>
      <div>
        <p class="fs-title">Required Documents</p>
        <p class="fs-sub">Upload your supporting documents. 🔴 Red = mandatory · 🟢 Green = optional.</p>
      </div>
    </div>
    <div class="fs-body">

      <p class="sec-heading">🔴 Mandatory Documents</p>

      <div class="fg fg-1">
        <div class="fl">
          <label class="lbl">Passport Scan (bio data page) <span class="req">*</span></label>
          <div class="file-zone" onclick="triggerFile('passport_scan')">
            <input type="file" id="passport_scan" name="passport_scan" accept=".jpg,.jpeg,.pdf" onchange="showFile(this,'prev-ps')" required/>
            <div class="fz-icon">🛂</div>
            <p class="fz-title">Click to upload passport scan</p>
            <p class="fz-sub">JPEG or PDF · Max 10MB · <em>Mandatory</em></p>
          </div>
          <div id="prev-ps"></div>
        </div>
      </div>

      <hr class="form-div"/>
      <p class="sec-heading">🟢 Optional — Strengthens Your Application</p>

      <div class="fg fg-1">
        <div class="fl">
          <label class="lbl">3 Months Bank Statements <span class="opt">Optional</span></label>
          <div class="file-zone" onclick="triggerFile('bank_statements')">
            <input type="file" id="bank_statements" name="bank_statements" accept=".pdf" onchange="showFile(this,'prev-bs')"/>
            <div class="fz-icon">🏦</div>
            <p class="fz-title">Upload bank statements</p>
            <p class="fz-sub">PDF only · Last 3 months</p>
          </div>
          <div id="prev-bs"></div>
        </div>

        <div class="fl" style="margin-top:16px;">
          <label class="lbl">3 Months Payslips <span class="opt">Optional</span></label>
          <div class="file-zone" onclick="triggerFile('payslips')">
            <input type="file" id="payslips" name="payslips" accept=".pdf" onchange="showFile(this,'prev-py')"/>
            <div class="fz-icon">💷</div>
            <p class="fz-title">Upload payslips</p>
            <p class="fz-sub">PDF only · Last 3 months</p>
          </div>
          <div id="prev-py"></div>
        </div>
      </div>

      <div class="form-nav">
        {{-- <button type="button" class="btn-prev" onclick="prevStep(6)">← Previous</button> --}}
        <button type="button" class="btn-next" id="next-3" disabled onclick="nextStep(3)">Next Step →</button>
      </div>
    </div>
  {{-- </div> --}}

</div>  

<div class="form-section" id="step-4">

  <!-- ═══════════════════════════════════════════
       STEP 7 — DECLARATION & SUBMIT
  ════════════════════════════════════════════ -->
  {{-- <div class="form-section" id="step-7"> --}}
    <div class="fs-header">
      <div class="fs-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      </div>
      <div>
        <p class="fs-title">Final Declaration</p>
        <p class="fs-sub">Review and confirm before submitting your application.</p>
      </div>
    </div>
    <div class="fs-body">

      <div class="fg fg-1">
        <div class="fl">
          <label class="lbl">Additional Notes or Message <span class="opt">Optional</span></label>
          <textarea name="message" class="ft" style="min-height:120px;" placeholder="Any additional information you'd like our visa team to know — special circumstances, previous refusals, questions, etc."></textarea>
        </div>
      </div>

      <div class="info-box blue" style="margin-top:4px;">
        <strong>✅ Declaration:</strong> By submitting this form, you confirm that all information provided is true and accurate to the best of your knowledge. False or misleading declarations may result in visa refusal, cancellation, or a ban from future applications.
      </div>

      <div style="padding:20px;background:var(--blue-faint);border:1.5px solid rgba(26,74,171,.2);border-radius:12px;margin-top:16px;">
        <label style="display:flex;align-items:flex-start;gap:14px;cursor:pointer;">
          <input type="checkbox" name="declaration_confirm" required style="margin-top:3px;accent-color:var(--blue);width:18px;height:18px;flex-shrink:0;"/>
          <span style="font-size:13px;color:var(--blue-dark);line-height:1.7;font-weight:500;">
            I confirm that all information and documents submitted in this application are genuine, true, and accurate. I understand that SAM Visa Services will use this information solely to process my visa application.
          </span>
        </label>
      </div>

      <div class="info-box amber" style="margin-top:16px;">
        <strong>🔒 Data Privacy:</strong> Your information is handled securely in accordance with GDPR and our ICO registration. We will never share your personal data with third parties without your explicit consent.
      </div>

      <div class="form-nav">
        {{-- <button type="button" class="btn-prev" onclick="prevStep(7)">← Previous</button> --}}
        <button type="submit" class="btn-submit">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          Submit Application
        </button>
      </div>
    </div>
  {{-- </div> --}}

</div>  

  </div><!-- /main form column -->

  <!-- ═══════════════════════════════════════════
       SIDEBAR
  ════════════════════════════════════════════ -->
  <div class="sidebar">

    <!-- PROGRESS -->
    <div class="side-card blue-grad">
      <p class="side-title">Application Progress</p>
      <div class="prog-bar"><div class="prog-fill" id="progress-fill" style="width:14%"></div></div>
      <p class="prog-text" id="progress-text">Step 1 of 4</p>
    </div>

    <!-- DOCUMENT CHECKLIST -->
    <div class="side-card">
      <p class="side-title">📋 Document Upload</p>
      <ul class="req-list">
        <li><span class="req-badge r">R</span><span>Passport scan (bio data page) — JPEG / PDF</span></li>
        <li><span class="req-badge r">R</span><span>UK eVisa sharecode — starts with S</span></li>
        <li><span class="req-badge g">O</span><span>Previous EU / Schengen visa copy — if applicable</span></li>
        {{-- <li><span class="req-badge g">O</span><span>EU relation's passport copy — if applicable</span></li>
        <li><span class="req-badge g">O</span><span>3 months bank statements — PDF</span></li>
        <li><span class="req-badge g">O</span><span>3 months payslips — PDF</span></li> --}}
      </ul>
      <p style="font-size:10px;color:var(--gray-light);margin-top:12px;line-height:1.6;">
        <span style="color:var(--red);font-weight:700;">R</span> = Required &nbsp;·&nbsp;
        <span style="color:var(--green);font-weight:700;">O</span> = Optional but recommended
      </p>
    </div>

     <div class="side-card">
      <p class="side-title">📋 Document Submitted in Embassy</p>
      <ul class="req-list">
        <li><span class="req-badge r">R</span><span>Passport scan (bio data page) — JPEG / PDF</span></li>
        <li><span class="req-badge r">R</span><span>UK eVisa sharecode — starts with S</span></li>
        <li><span class="req-badge r">R</span><span>Previous EU / Schengen visa copy — if applicable</span></li>
        <li><span class="req-badge r">R</span><span>EU relation's passport copy — if applicable</span></li>
        <li><span class="req-badge r">R</span><span>3 months bank statements — PDF</span></li>
        <li><span class="req-badge r">R</span><span>3 months payslips — PDF</span></li>
      </ul>
      <p style="font-size:10px;color:var(--gray-light);margin-top:12px;line-height:1.6;">
        <span style="color:var(--red);font-weight:700;">R</span> = Required &nbsp;·&nbsp;
        <span style="color:var(--green);font-weight:700;">O</span> = Optional but recommended
      </p>
    </div>

    <!-- IMPORTANT NOTES -->
    <div class="side-card">
      <p class="side-title">⚠️ Important Notes</p>
      <ul class="req-list">
        <li><span style="font-size:16px">🇬🇧</span><span>UK eVisa sharecode <strong>always starts with S</strong> — find it at gov.uk/view-prove-immigration-status</span></li>
        <li><span style="font-size:16px">🕐</span><span>We reply within 24 hours of submission</span></li>
        <li><span style="font-size:16px">📄</span><span>We'll send you a personalised document checklist after reviewing your form</span></li>
        <li><span style="font-size:16px">🔒</span><span>All data handled securely under GDPR &amp; ICO registration</span></li>
      </ul>
    </div>

    <!-- CONTACT -->
    <div class="side-card">
      <p class="side-title">💬 Need Help?</p>
      <div class="contact-item">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1z"/></svg>
        <a href="tel:+447912649410">+44 7912 649410</a>
      </div>
      <div class="contact-item">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        <a href="https://wa.me/447912649410" target="_blank" rel="noopener">WhatsApp Us</a>
      </div>
      <div class="contact-item">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        <span>Mon–Sat: 9am – 7pm</span>
      </div>
    </div>

    <!-- OTHER COUNTRIES -->
    <div class="side-card">
      <p class="side-title">🌍 Other Countries</p>
      <a href="visa-china.html" class="country-link">🇨🇳 China</a>
      <a href="visa-europe.html" class="country-link" style="border-color:var(--blue);color:var(--blue);background:var(--blue-faint);">🇪🇺 Europe (Schengen) — Current</a>
      <a href="visa-ireland.html" class="country-link">🇮🇪 Ireland</a>
      <a href="visa-morocco.html" class="country-link">🇲🇦 Morocco</a>
      <a href="visa-turkey.html" class="country-link">🇹🇷 Turkey</a>
      <a href="visa-dubai.html" class="country-link">🇦🇪 UAE / Dubai</a>
    </div>

  </div><!-- /sidebar -->
</div><!-- /form-wrap -->
</form>

<script>

function scrollSteps(value){
  const container = document.getElementById("stepsContainer");
  container.scrollBy({
    left: value,
    behavior: "smooth"
  });
}
let currentStep = 1;
const totalSteps = 4;

// function goToStep(n) {
//   // Hide current section
//   document.getElementById('step-' + currentStep)?.classList.remove('active');
//   document.getElementById('sp-' + currentStep)?.classList.remove('active');

//   // Mark previous steps as done
//   for (let i = 1; i < n; i++) {
//     const pill = document.getElementById('sp-' + i);
//     if (pill) { pill.classList.add('done'); pill.classList.remove('active'); }
//   }
//   // Remove done from current and forward
//   for (let i = n; i <= totalSteps; i++) {
//     document.getElementById('sp-' + i)?.classList.remove('done');
//   }

//   currentStep = n;
//   document.getElementById('step-' + n)?.classList.add('active');
//   document.getElementById('sp-' + n)?.classList.add('active');

//   // Update progress bar
//   const pct = Math.round((n / totalSteps) * 100);
//   document.getElementById('progress-fill').style.width = pct + '%';
//   document.getElementById('progress-text').textContent = 'Step ' + n + ' of ' + totalSteps;

//   // Smooth scroll to top
//   document.querySelector('.steps-wrap').scrollIntoView({ behavior: 'smooth', block: 'start' });
// }

function goToStep(n) {

  // 🚫 Prevent jumping ahead if previous step not valid
  for (let i = 1; i < n; i++) {
    if (!validateStep(i)) {
      alert("Please complete Step " + i + " first.");
      return;
    }
  }

  document.getElementById('step-' + currentStep)?.classList.remove('active');
  document.getElementById('sp-' + currentStep)?.classList.remove('active');

  for (let i = 1; i < n; i++) {
    document.getElementById('sp-' + i)?.classList.add('done');
    document.getElementById('sp-' + i)?.classList.remove('active');
  }

  for (let i = n; i <= totalSteps; i++) {
    document.getElementById('sp-' + i)?.classList.remove('done');
  }

  currentStep = n;

  document.getElementById('step-' + n)?.classList.add('active');
  document.getElementById('sp-' + n)?.classList.add('active');

  const pct = Math.round((n / totalSteps) * 100);
  document.getElementById('progress-fill').style.width = pct + '%';
  document.getElementById('progress-text').textContent = 'Step ' + n + ' of ' + totalSteps;

  updateNextButton(n);
}



// function nextStep(n) { if (n < totalSteps) goToStep(n + 1); }
function nextStep(n) {
  if (!validateStep(n)) {
    alert("Please fill all required fields before continuing.");
    return;
  }
  if (n < totalSteps) goToStep(n + 1);
}
function prevStep(n) { if (n > 1) goToStep(n - 1); }

// Show/hide conditional fields
function toggle(id, val) {
  const el = document.getElementById(id);
  if (el) el.classList.toggle('show', val === 'yes');
}

// File upload helpers
function triggerFile(id) { document.getElementById(id).click(); }

function showFile(input, previewId) {
  const prev = document.getElementById(previewId);
  if (!prev || !input.files || !input.files[0]) return;
  const name = input.files[0].name;
  const size = (input.files[0].size / 1024).toFixed(0) + ' KB';
  prev.innerHTML = `<div class="file-preview"><span>📎 ${name} <span style="color:var(--gray-light);font-weight:400;">(${size})</span></span><button type="button" onclick="clearFile('${input.id}','${previewId}')">✕</button></div>`;
}

function clearFile(inputId, previewId) {
  document.getElementById(inputId).value = '';
  document.getElementById(previewId).innerHTML = '';
}

// Drag and drop support
document.querySelectorAll('.file-zone').forEach(zone => {
  zone.addEventListener('dragover', e => { e.preventDefault(); zone.classList.add('dragover'); });
  zone.addEventListener('dragleave', () => zone.classList.remove('dragover'));
  zone.addEventListener('drop', e => {
    e.preventDefault();
    zone.classList.remove('dragover');
    const input = zone.querySelector('input[type="file"]');
    if (input && e.dataTransfer.files.length) {
      // Create a new FileList-compatible transfer
      const dt = new DataTransfer();
      dt.items.add(e.dataTransfer.files[0]);
      input.files = dt.files;
      // Determine preview ID from input id
      const previewMap = {
        passport_scan: 'prev-ps',
        bank_statements: 'prev-bs',
        payslips: 'prev-py',
        prev_eu_visa: 'prev-euv',
        eu_relation_passport: 'prev-eurp'
      };
      const previewId = previewMap[input.id] || '';
      if (previewId) showFile(input, previewId);
    }
  });
});

function validateStep(step) {
  const section = document.getElementById('step-' + step);
  if (!section) return false;

  let valid = true;

  // Inputs & Selects
  const fields = section.querySelectorAll("input[required], select[required], textarea[required]");

  fields.forEach(field => {
    if (field.type === "radio") {
      const name = field.name;
      const checked = section.querySelector(`input[name="${name}"]:checked`);
      if (!checked) valid = false;
    } else if (field.type === "file") {
      if (!field.files.length) valid = false;
    } else {
      if (!field.value.trim()) valid = false;
    }
  });

  return valid;
}

function updateNextButton(step) {
  const btn = document.getElementById('next-' + step);
  if (!btn) return;

  btn.disabled = !validateStep(step);
}

document.querySelectorAll("input, select, textarea").forEach(el => {
  el.addEventListener("input", () => updateNextButton(currentStep));
  el.addEventListener("change", () => updateNextButton(currentStep));
});

window.onload = () => {
  updateNextButton(1);
};
</script>
</body>
</html>