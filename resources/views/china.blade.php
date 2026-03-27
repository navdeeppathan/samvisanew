<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>China Visit Visa Application — SAM Visa Services</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<style>
  :root{
    --blue:#1a4aab;--blue-dark:#0f2f7a;--blue-mid:#1e5bc6;--blue-light:#4a7fd4;
    --blue-pale:#e8f0fb;--blue-faint:#f0f5ff;
    --gray-dark:#2c3a4a;--gray-mid:#5a6a7a;--gray-light:#8a9aaa;
    --gray-border:#d4dce6;--gray-bg:#f4f6f9;--gray-bg2:#edf0f5;
    --white:#ffffff;--white-soft:#fafbfd;
    --shadow-sm:0 2px 12px rgba(26,74,171,0.08);
    --shadow-md:0 8px 32px rgba(26,74,171,0.14);
    --shadow-lg:0 20px 60px rgba(26,74,171,0.18);
    --shadow-blue:0 8px 32px rgba(26,74,171,0.3);
    --font-d:'Cormorant Garamond',serif;--font-b:'Jost',sans-serif;
    --expo:cubic-bezier(0.16,1,0.3,1);--bounce:cubic-bezier(0.34,1.56,0.64,1);
    --green:#16a34a;--red:#dc2626;--orange:#ea580c;
  }
  *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{font-family:var(--font-b);background:var(--gray-bg);color:var(--gray-dark);}
  ::-webkit-scrollbar{width:5px;}
  ::-webkit-scrollbar-thumb{background:var(--blue);border-radius:4px;}

  /* NAV */
  #navbar{position:sticky;top:0;left:0;right:0;z-index:100;background:rgba(255,255,255,.97);backdrop-filter:blur(16px);box-shadow:0 1px 0 var(--gray-border),var(--shadow-sm);padding:0 48px;}
  .nav-inner{max-width:1200px;margin:0 auto;height:72px;display:flex;align-items:center;justify-content:space-between;}
  .nav-logo img{height:50px;object-fit:contain;}
  .nav-back{display:inline-flex;align-items:center;gap:8px;color:var(--gray-mid);text-decoration:none;font-size:13px;font-weight:500;transition:color .3s;}
  .nav-back:hover{color:var(--blue);}
  .nav-phone{display:flex;align-items:center;gap:7px;color:var(--blue);font-weight:600;font-size:13px;text-decoration:none;}

  /* PAGE HEADER */
  /* .page-header{background:linear-gradient(135deg,var(--blue-dark),var(--blue-mid));padding:56px 48px;text-align:center;position:relative;overflow:hidden;}
  .page-header::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.08) 1px,transparent 0);background-size:28px 28px;}
  .ph-inner{position:relative;z-index:2;max-width:700px;margin:0 auto;}
  .ph-flag{font-size:64px;margin-bottom:16px;display:block;filter:drop-shadow(0 8px 16px rgba(0,0,0,.3));}
  .ph-country{font-size:10px;font-weight:700;letter-spacing:4px;color:rgba(255,255,255,.6);text-transform:uppercase;margin-bottom:8px;}
  .ph-title{font-family:var(--font-d);font-size:clamp(32px,5vw,52px);font-weight:700;color:var(--white);margin-bottom:14px;line-height:1.1;}
  .ph-title em{font-style:italic;color:rgba(255,255,255,.8);}
  .ph-sub{font-size:14px;color:rgba(255,255,255,.65);line-height:1.7;} */

  .page-header {
    position: relative;
    padding: 56px 48px;
    text-align: center;
    overflow: hidden;
    color: white;
  }

  /* SLIDER WRAPPER */
  .ph-bg-slider {
    position: absolute;
    inset: 0;
    z-index: 0;
  }

  /* EACH SLIDE */
  .ph-slide {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    animation: slideShow 20s infinite;
  }

  /* ADD CHINA TRAVEL IMAGES */
  .ph-slide:nth-child(1) {
    background-image: url('/b3.png'); /* Great Wall */
    animation-delay: 0s;
  }
  .ph-slide:nth-child(2) {
    background-image: url('https://images.unsplash.com/photo-1508804185872-d7badad00f7d'); /* Shanghai skyline */
    animation-delay: 5s;
  }
  .ph-slide:nth-child(3) {
    background-image: url('https://images.unsplash.com/photo-1518684079-3c830dcef090'); /* Forbidden city */
    animation-delay: 10s;
  }
  .ph-slide:nth-child(4) {
    background-image: url('https://images.unsplash.com/photo-1506157786151-b8491531f063'); /* Business travel */
    animation-delay: 15s;
  }
  .ph-slide:nth-child(5) {
    background-image: url('/b4.png'); /* Business travel */
    animation-delay: 15s;
  }
  .ph-slide:nth-child(6) {
    background-image: url('/b5.png'); /* Business travel */
    animation-delay: 15s;
  }
  

  .ph-flag img {
    height: 50px;
    object-fit: contain;
  }

  /* ANIMATION */
  @keyframes slideShow {
    0% { opacity: 0; transform: scale(1.1); }
    5% { opacity: 1; }
    25% { opacity: 1; }
    30% { opacity: 0; }
    100% { opacity: 0; transform: scale(1); }
  }

  /* DARK OVERLAY (important for text visibility) */
  .page-header::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(10,40,60,0.8), rgba(20,60,80,0.7));
    z-index: 1;
  }

  /* CONTENT ABOVE SLIDER */
  .ph-inner {
    position: relative;
    z-index: 2;
    max-width: 700px;
    margin: 0 auto;
  }

  /* KEEP YOUR EXISTING STYLES */
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

  .ph-sub {
    font-size: 14px;
    color: rgba(255,255,255,.75);
    line-height: 1.7;
  }

  /* STEP PROGRESS */
  /* .steps-wrap{background:var(--white);border-bottom:1px solid var(--gray-border);position:sticky;top:72px;z-index:90;box-shadow:var(--shadow-sm);}
  .steps-inner{max-width:1200px;margin:0 auto;padding:0 48px;display:flex;align-items:center;overflow-x:auto;scrollbar-width:none;}
  .steps-inner::-webkit-scrollbar{display:none;} */
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
  .step-pill{display:flex;align-items:center;gap:10px;padding:16px 20px;white-space:nowrap;cursor:pointer;border-bottom:3px solid transparent;transition:border-color .3s,color .3s;color:var(--gray-light);font-size:12px;font-weight:600;letter-spacing:.5px;flex-shrink:0;}
  .step-pill.active{border-bottom-color:var(--blue);color:var(--blue);}
  .step-pill.done{border-bottom-color:var(--green);color:var(--green);}
  .step-num{width:24px;height:24px;border-radius:50%;background:var(--gray-bg);display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;transition:background .3s,color .3s;}
  .step-pill.active .step-num{background:var(--blue);color:var(--white);}
  .step-pill.done .step-num{background:var(--green);color:var(--white);}
  .step-pill.done .step-num::after{content:'✓';}
  .step-connector{width:32px;height:1px;background:var(--gray-border);flex-shrink:0;}

  /* MAIN LAYOUT */
  .form-wrap{max-width:1200px;margin:0 auto;padding:40px 48px 80px;display:grid;grid-template-columns:1fr 340px;gap:32px;align-items:start;}

  /* FORM SECTIONS */
  .form-section{background:var(--white);border:1.5px solid var(--gray-border);border-radius:20px;overflow:hidden;display:none;}
  .form-section.active{display:block;}
  .fs-header{padding:28px 36px;border-bottom:1px solid var(--gray-border);background:var(--blue-faint);display:flex;align-items:center;gap:16px;}
  .fs-icon{width:48px;height:48px;border-radius:12px;background:var(--blue);display:flex;align-items:center;justify-content:center;flex-shrink:0;}
  .fs-icon svg{color:var(--white);}
  .fs-title{font-family:var(--font-d);font-size:22px;font-weight:700;color:var(--blue-dark);}
  .fs-sub{font-size:12px;color:var(--gray-mid);margin-top:2px;}
  .fs-body{padding:36px;}

  /* FORM GRID */
  .fg{display:grid;gap:20px;margin-bottom:20px;}
  .fg-2{grid-template-columns:1fr 1fr;}
  .fg-3{grid-template-columns:1fr 1fr 1fr;}
  .fg-1{grid-template-columns:1fr;}
  .fl{display:flex;flex-direction:column;gap:6px;}

  /* LABELS */
  .lbl{font-size:11px;font-weight:700;letter-spacing:2px;color:var(--blue-dark);text-transform:uppercase;display:flex;align-items:center;gap:5px;}
  .req{color:var(--red);font-size:13px;}
  .opt{display:inline-flex;align-items:center;gap:4px;background:#dcfce7;color:var(--green);font-size:9px;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:2px 8px;border-radius:20px;margin-left:4px;}
  .opt-note{font-size:10px;color:var(--gray-light);margin-top:3px;font-style:italic;}

  /* INPUTS */
  .fi,.fs-el,.ft{background:var(--white-soft);border:1.5px solid var(--gray-border);border-radius:10px;padding:12px 16px;color:var(--gray-dark);font-family:var(--font-b);font-size:13px;outline:none;width:100%;transition:border-color .3s,box-shadow .3s,background .3s;}
  .fi::placeholder,.ft::placeholder{color:var(--gray-light);}
  .fi:focus,.fs-el:focus,.ft:focus{border-color:var(--blue);box-shadow:0 0 0 4px rgba(26,74,171,.1);background:var(--white);}
  .fs-el{appearance:none;cursor:pointer;}
  .ft{resize:vertical;min-height:80px;line-height:1.6;}
  .date-fi{font-family:var(--font-b);}

  /* RADIO/SELECT GROUPS */
  .radio-group{display:flex;gap:12px;flex-wrap:wrap;}
  .radio-opt{display:flex;align-items:center;gap:8px;cursor:pointer;padding:10px 18px;border-radius:10px;border:1.5px solid var(--gray-border);font-size:13px;font-weight:500;transition:border-color .3s,background .3s;}
  .radio-opt:has(input:checked){border-color:var(--blue);background:var(--blue-faint);color:var(--blue);}
  .radio-opt input{accent-color:var(--blue);}

  /* CONDITIONAL FIELDS */
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
  .form-section-title{font-family:var(--font-d);font-size:18px;font-weight:600;color:var(--blue-dark);margin-bottom:20px;padding-bottom:12px;border-bottom:2px solid var(--blue-faint);}

  /* NAVIGATION BTNS */
  .form-nav{display:flex;align-items:center;justify-content:space-between;margin-top:32px;padding-top:24px;border-top:1px solid var(--gray-border);}
  .btn-prev{display:inline-flex;align-items:center;gap:8px;background:var(--white);color:var(--gray-mid);font-family:var(--font-b);font-weight:600;font-size:13px;padding:13px 24px;border-radius:10px;border:1.5px solid var(--gray-border);cursor:pointer;transition:border-color .3s,color .3s;}
  .btn-prev:hover{border-color:var(--blue);color:var(--blue);}
  .btn-next{display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));color:var(--white);font-family:var(--font-b);font-weight:700;font-size:13px;padding:13px 28px;border-radius:10px;border:none;cursor:pointer;box-shadow:var(--shadow-blue);transition:transform .25s var(--bounce),box-shadow .25s;}
  .btn-next:hover{transform:translateY(-2px);box-shadow:0 12px 32px rgba(26,74,171,.4);}
  .btn-submit{display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#16a34a,#15803d);color:var(--white);font-family:var(--font-b);font-weight:700;font-size:13px;padding:14px 32px;border-radius:10px;border:none;cursor:pointer;box-shadow:0 8px 24px rgba(22,163,74,.3);transition:transform .25s var(--bounce);}
  .btn-submit:hover{transform:translateY(-2px);}

  /* SIDEBAR */
  .sidebar{display:flex;flex-direction:column;gap:20px;}
  .side-card{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;padding:24px;box-shadow:var(--shadow-sm);}
  .side-card.blue{background:linear-gradient(135deg,var(--blue-dark),var(--blue-mid));border-color:transparent;}
  .side-title{font-family:var(--font-d);font-size:17px;font-weight:600;color:var(--blue-dark);margin-bottom:16px;}
  .side-card.blue .side-title{color:var(--white);}
  .req-list{list-style:none;display:flex;flex-direction:column;gap:10px;}
  .req-list li{display:flex;align-items:flex-start;gap:10px;font-size:12px;line-height:1.6;}
  .req-badge{min-width:20px;height:20px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:9px;font-weight:700;flex-shrink:0;margin-top:1px;}
  .req-badge.r{background:#fee2e2;color:var(--red);}
  .req-badge.g{background:#dcfce7;color:var(--green);}
  .blue .req-badge.r{background:rgba(220,38,38,.25);color:#fca5a5;}
  .blue .req-badge.g{background:rgba(22,163,74,.25);color:#86efac;}
  .req-list li span:last-child{color:var(--gray-mid);}
  .blue .req-list li span:last-child{color:rgba(255,255,255,.75);}
  .prog-bar{background:rgba(255,255,255,.2);border-radius:10px;height:6px;margin-top:16px;overflow:hidden;}
  .prog-fill{background:var(--white);border-radius:10px;height:100%;transition:width .5s var(--expo);}
  .prog-text{font-size:11px;color:rgba(255,255,255,.7);margin-top:8px;text-align:center;}
  .contact-item{display:flex;align-items:center;gap:10px;font-size:12px;color:var(--gray-mid);margin-bottom:10px;}
  .contact-item svg{color:var(--blue);flex-shrink:0;}
  .contact-item a{color:var(--blue);text-decoration:none;font-weight:600;}

  /* SUCCESS */
  .success-wrap{background:var(--white);border:1.5px solid var(--gray-border);border-radius:20px;padding:64px 48px;text-align:center;display:none;}
  .success-wrap.show{display:block;}
  .success-icon{width:80px;height:80px;background:linear-gradient(135deg,#16a34a,#15803d);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 24px;font-size:36px;box-shadow:0 12px 32px rgba(22,163,74,.3);}
  .success-title{font-family:var(--font-d);font-size:36px;font-weight:700;color:var(--blue-dark);margin-bottom:12px;}
  .success-sub{font-size:14px;color:var(--gray-mid);line-height:1.7;max-width:480px;margin:0 auto 32px;}

  button:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    box-shadow: none !important;
    transform: none !important;
  }
  @media(max-width:1000px){.form-wrap{grid-template-columns:1fr;padding:24px;}.sidebar{order:-1;}}
  @media(max-width:700px){#navbar{padding:0 16px;}.page-header{padding:40px 20px;}.steps-inner{padding:0 16px;}.fg-2,.fg-3{grid-template-columns:1fr;}}
  @media(max-width:500px){.form-wrap{padding:16px;}.fs-body{padding:20px;}}
</style>
</head>
<body>

<!-- NAV -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="/" class="nav-logo"><img src="https://samvisauk.com/wp-content/uploads/2023/11/fulllogo_transparent_nobuffer-removebg-preview_200x100px.png" alt="SAM Visa Services"/></a>
    <a href="/" class="nav-back">← Back to Home</a>
    <a href="tel:+447912649410" class="nav-phone">📞 +44 7912 649410</a>
  </div>
</nav>

<!-- PAGE HEADER -->
{{-- <div class="page-header">
  
  <div class="ph-inner">
    <span class="ph-flag">🇨🇳</span>
    <p class="ph-country">Visit Visa Application</p>
    <h1 class="ph-title">China <em>Visit Visa</em></h1>
    <p class="ph-sub">Complete the form below. Our team will review your application and contact you within 24 hours. Travel dates must be within the next 90 days.</p>
  </div>
</div> --}}

<div class="page-header">

  <!-- Background Slider -->
  <div class="ph-bg-slider">
    <div class="ph-slide"></div>
    <div class="ph-slide"></div>
    <div class="ph-slide"></div>
    <div class="ph-slide"></div>
    <div class="ph-slide"></div>
    <div class="ph-slide"></div>

  </div>

  <div class="ph-inner">
    <span class="ph-flag">
      <img src="{{asset('chinaflag.webp')}}" alt="" >
    </span>
    <p class="ph-country">Visit Visa Application</p>
    <h1 class="ph-title">China</h1>
    <p class="ph-sub">
      Complete the form below. Our team will review your application and contact you within 24 hours. Travel dates must be within the next 90 days.
    </p>
  </div>

</div>


<!-- STEP PROGRESS -->
<div class="steps-wrap">
    <button class="scroll-btn left" onclick="scrollSteps(-200)">‹</button>
  {{-- <div class="steps-inner" id="stepsContainer">
    <div class="step-pill active" onclick="goToStep(1)" id="sp-1"><div class="step-num">1</div>Personal Info</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(2)" id="sp-2"><div class="step-num">2</div>Documents</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(3)" id="sp-3"><div class="step-num">3</div>Travel Details</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(4)" id="sp-4"><div class="step-num">4</div>Home Address</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(5)" id="sp-5"><div class="step-num">5</div>Employment</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(6)" id="sp-6"><div class="step-num">6</div>Education</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(7)" id="sp-7"><div class="step-num">7</div>Family Info</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(8)" id="sp-8"><div class="step-num">8</div>Emergency Contact</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(9)" id="sp-9"><div class="step-num">9</div>Travel History</div>
    <div class="step-connector"></div>
    <div class="step-pill" onclick="goToStep(10)" id="sp-10"><div class="step-num">10</div>Declarations</div>
  </div> --}}
  <div class="steps-inner" id="stepsContainer">

  <div class="step-pill active" onclick="goToStep(1)" id="sp-1">
    <div class="step-num">1</div>
    Personal Details
  </div>

  <div class="step-connector"></div>

  <div class="step-pill" onclick="goToStep(2)"  id="sp-2">
    <div class="step-num">2</div>
    Travel & Documents
  </div>

  <div class="step-connector"></div>

  <div class="step-pill" onclick="goToStep(3)" id="sp-3">
    <div class="step-num">3</div>
    Background Info
  </div>

  <div class="step-connector"></div>

  <div class="step-pill" onclick="goToStep(4)" id="sp-4">
    <div class="step-num">4</div>
    Family & Declaration
  </div>

</div>
   <button class="scroll-btn right" onclick="scrollSteps(200)">›</button>
</div>

<form id="visaForm"
 action="{{ route('visa.china.submit') }}" 
 method="POST" enctype="multipart/form-data"
 >
@csrf
<input type="hidden" name="country" value="China"/>
<div class="form-wrap">
  <div>

  <div class="form-section active" id="step-1">
    <!-- STEP 1: PERSONAL INFO -->
   
      <div class="fs-header">
        <div class="fs-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
        <div><p class="fs-title">Personal Information</p><p class="fs-sub">Your full name and birth details exactly as they appear in your passport.</p></div>
      </div>
      <div class="fs-body">
        <div class="fg fg-3">
          <div class="fl"><label class="lbl">Surname <span class="req">*</span></label><input type="text" name="surname" class="fi" placeholder="e.g. SMITH" required/></div>
          <div class="fl"><label class="lbl">First Name <span class="req">*</span></label><input type="text" name="first_name" class="fi" placeholder="e.g. JOHN" required/></div>
          <div class="fl"><label class="lbl">Middle Name</label><input type="text" name="middle_name" class="fi" placeholder="If applicable"/></div>
        </div>
        <div class="fg fg-3">
          <div class="fl"><label class="lbl">City of Birth <span class="req">*</span></label><input type="text" name="city_of_birth" class="fi" placeholder="e.g. London" required/></div>
          <div class="fl"><label class="lbl">State / Region of Birth <span class="req">*</span></label><input type="text" name="state_of_birth" class="fi" placeholder="e.g. London" required/></div>
          <div class="fl"><label class="lbl">Country of Birth <span class="req">*</span></label><input type="text" name="country_of_birth" class="fi" placeholder="e.g. United Kingdom" required/></div>
        </div>
        <div class="fg fg-2">
          <div class="fl">
            <label class="lbl">Marital Status <span class="req">*</span></label>
            <select name="marital_status" class="fs-el" required>
              <option value="" disabled selected>Select status…</option>
              <option>Single</option><option>Married</option><option>Divorced</option><option>Separated</option>
            </select>
          </div>
          <div class="fl">
            <label class="lbl">Do you hold another nationality? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="other_nationality" value="yes" onchange="toggle('other-nat-fields','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="other_nationality" value="no" onchange="toggle('other-nat-fields','no')" checked/> No</label>
            </div>
          </div>
        </div>
        <div class="cond" id="other-nat-fields">
          <div class="fg fg-3">
            <div class="fl"><label class="lbl">Other Nationality <span class="req">*</span></label><input type="text" name="other_nationality_name" class="fi" placeholder="e.g. Nigerian"/></div>
            <div class="fl"><label class="lbl">Other Passport Number <span class="req">*</span></label><input type="text" name="other_passport_number" class="fi" placeholder="Passport number"/></div>
            <div class="fl"><label class="lbl">Date Obtained <span class="req">*</span></label><input type="date" name="other_nationality_date" class="fi date-fi"/></div>
          </div>
        </div>
        
      </div>
    

    <!-- STEP 4: HOME ADDRESS -->
    
      <div class="fs-header">
        <div class="fs-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <div><p class="fs-title">Home Address</p><p class="fs-sub">Your current residential address.</p></div>
      </div>
      <div class="fs-body">
          <div class="fg fg-2">
          <div class="fl"><label class="lbl">Mobile Phone Number <span class="req">*</span></label><input type="tel" name="mobile_phone" class="fi" placeholder="+44 7000 000000" required/></div>
          <div class="fl"><label class="lbl">Email Address <span class="req">*</span></label><input type="email" name="email" class="fi" placeholder="john@example.com" required/></div>
        </div>
        <div class="fg fg-2">
          <div class="fl"><label class="lbl">Door / Flat No <span class="req">*</span></label><input type="text" name="home_door" class="fi" placeholder="e.g. 42" required/></div>
          <div class="fl"><label class="lbl">Street <span class="req">*</span></label><input type="text" name="home_street" class="fi" placeholder="e.g. Baker Street" required/></div>
        </div>
        <div class="fg fg-3">
          <div class="fl"><label class="lbl">City <span class="req">*</span></label><input type="text" name="home_city" class="fi" placeholder="e.g. London" required/></div>
          <div class="fl"><label class="lbl">Postcode <span class="req">*</span></label><input type="text" name="home_postcode" class="fi" placeholder="e.g. SW1A 1AA" required/></div>
          <div class="fl"><label class="lbl">Country <span class="req">*</span></label><input type="text" name="home_country" class="fi" placeholder="e.g. United Kingdom" required/></div>
        </div>
      
      </div>
    

    <!-- STEP 8: EMERGENCY CONTACT -->
    
      <div class="fs-header">
        <div class="fs-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .82h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6z"/></svg></div>
        <div><p class="fs-title">Emergency Contact</p><p class="fs-sub">Person to contact in case of emergency during your trip.</p></div>
      </div>
      <div class="fs-body">
        <div class="fg fg-2">
          <div class="fl"><label class="lbl">Full Name <span class="req">*</span></label><input type="text" name="emergency_name" class="fi" placeholder="Emergency contact name" required/></div>
          <div class="fl"><label class="lbl">Relationship to You <span class="req">*</span></label><input type="text" name="emergency_relationship" class="fi" placeholder="e.g. Sister, Friend" required/></div>
        </div>
        <div class="fg fg-2">
          <div class="fl"><label class="lbl">Telephone <span class="req">*</span></label><input type="tel" name="emergency_phone" class="fi" placeholder="+44 7000 000000" required/></div>
          <div class="fl"><label class="lbl">Email</label><input type="email" name="emergency_email" class="fi" placeholder="email@example.com"/></div>
        </div>
        <p class="form-section-title" style="margin-top:8px;">Emergency Contact Address</p>
        <div class="fg fg-2">
          <div class="fl"><label class="lbl">Door No <span class="req">*</span></label><input type="text" name="emergency_door" class="fi" placeholder="Door/flat no" required/></div>
          <div class="fl"><label class="lbl">Street <span class="req">*</span></label><input type="text" name="emergency_street" class="fi" placeholder="Street" required/></div>
        </div>
        <div class="fg fg-3">
          <div class="fl"><label class="lbl">City <span class="req">*</span></label><input type="text" name="emergency_city" class="fi" placeholder="City" required/></div>
          <div class="fl"><label class="lbl">Postcode <span class="req">*</span></label><input type="text" name="emergency_postcode" class="fi" placeholder="Postcode" required/></div>
          <div class="fl"><label class="lbl">Country <span class="req">*</span></label><input type="text" name="emergency_country" class="fi" placeholder="Country" required/></div>
        </div>
        <div class="form-nav">
          
          <button type="button" class="btn-next" id="next-1" disabled onclick="nextStep(1)">Next Step →</button>
        </div>
      </div>
    
  </div>

  <div class="form-section" id="step-2">

    <!-- STEP 2: DOCUMENTS -->
    
      <div class="fs-header">
        <div class="fs-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
        <div><p class="fs-title">Required Documents</p><p class="fs-sub">Upload your documents below. Red star = mandatory. Green star = optional.</p></div>
      </div>
      <div class="fs-body">
        <p class="form-section-title">🔴 Mandatory Documents</p>
        <div class="fg fg-1">
          <div class="fl">
            <label class="lbl">Passport Scan (full bio page) <span class="req">*</span></label>
            <div class="file-zone" onclick="triggerFile('passport_scan')">
              <input type="file" id="passport_scan" name="passport_scan" accept=".jpg,.jpeg,.pdf" onchange="showFile(this,'prev-ps')"/>
              <div class="fz-icon">🛂</div>
              <p class="fz-title">Click to upload passport scan</p>
              <p class="fz-sub">JPEG or PDF · <em>Mandatory</em></p>
            </div>
            <div id="prev-ps"></div>
          </div>
          <div class="fl">
            <label class="lbl">2 Empty Passport Pages <span class="req">*</span></label>
            <div class="file-zone" onclick="triggerFile('empty_pages')">
              <input type="file" id="empty_pages" name="empty_pages" accept=".jpg,.jpeg,.pdf" onchange="showFile(this,'prev-ep')"/>
              <div class="fz-icon">📄</div>
              <p class="fz-title">Click to upload 2 empty pages</p>
              <p class="fz-sub">JPEG or PDF · <em>Mandatory</em></p>
            </div>
            <div id="prev-ep"></div>
          </div>
          <div class="fl">
            <label class="lbl">Selfie Photo (white background) <span class="req">*</span></label>
            <div class="file-zone" onclick="triggerFile('selfie_photo')">
              <input type="file" id="selfie_photo" name="selfie_photo" accept=".jpg,.jpeg" onchange="showFile(this,'prev-sp')"/>
              <div class="fz-icon">🤳</div>
              <p class="fz-title">Click to upload selfie photo</p>
              <p class="fz-sub">JPEG only · White background · <em>Mandatory</em></p>
            </div>
            <div id="prev-sp"></div>
          </div>
        </div>

        <hr class="form-div"/>
        <p class="form-section-title">🟢 Optional Documents</p>
        <div class="fg fg-1">
          <div class="fl">
            <label class="lbl">3 Months Bank Statements <span class="opt">Optional</span></label>
            <div class="file-zone" onclick="triggerFile('bank_statements')">
              <input type="file" id="bank_statements" name="bank_statements" accept=".pdf" onchange="showFile(this,'prev-bs')"/>
              <div class="fz-icon">🏦</div>
              <p class="fz-title">Click to upload bank statements</p>
              <p class="fz-sub">PDF only · 3 months required</p>
            </div>
            <div id="prev-bs"></div>
          </div>
          <div class="fl">
            <label class="lbl">3 Months Payslips <span class="opt">Optional</span></label>
            <div class="file-zone" onclick="triggerFile('payslips')">
              <input type="file" id="payslips" name="payslips" accept=".pdf" onchange="showFile(this,'prev-py')"/>
              <div class="fz-icon">💷</div>
              <p class="fz-title">Click to upload payslips</p>
              <p class="fz-sub">PDF only · 3 months</p>
            </div>
            <div id="prev-py"></div>
          </div>
          <div class="fl">
            <label class="lbl">DBS Check Certificate <span class="opt">Optional</span></label>
            <div class="file-zone" onclick="triggerFile('dbs_check')">
              <input type="file" id="dbs_check" name="dbs_check" accept=".pdf" onchange="showFile(this,'prev-dbs')"/>
              <div class="fz-icon">🔍</div>
              <p class="fz-title">Click to upload DBS certificate</p>
              <p class="fz-sub">PDF only</p>
            </div>
            <div id="prev-dbs"></div>
          </div>
        </div>

        <div style="background:var(--blue-faint);border:1.5px solid rgba(26,74,171,.15);border-radius:12px;padding:16px 20px;margin-top:24px;">
          <p style="font-size:12px;color:var(--blue-dark);font-weight:600;margin-bottom:4px;">📋 Note for UK/EU Passport Holders</p>
          <p style="font-size:12px;color:var(--gray-mid);line-height:1.6;">The mandatory document set is not required for UK/EU passport holders, but the embassy may request it at a later stage. All other nationalities must submit the mandatory set.</p>
        </div>

        
      </div>
    

    <!-- STEP 3: TRAVEL DETAILS -->
   
      <div class="fs-header">
        <div class="fs-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div><p class="fs-title">Travel Details</p><p class="fs-sub">Your China travel information. Departure must be within 90 days.</p></div>
      </div>
      <div class="fs-body">
        <div class="fg fg-2">
          <div class="fl"><label class="lbl">Departure Date <span class="req">*</span></label><input type="date" name="departure_date" class="fi date-fi" required/><p class="opt-note">Must be within the next 90 days</p></div>
          <div class="fl"><label class="lbl">Return Date <span class="req">*</span></label><input type="date" name="return_date" class="fi date-fi" required/></div>
        </div>
        <div class="fg fg-2">
          <div class="fl"><label class="lbl">City of Destination in China <span class="req">*</span></label><input type="text" name="destination_city" class="fi" placeholder="e.g. Beijing, Shanghai" required/></div>
          <div class="fl"><label class="lbl">Occupation <span class="req">*</span></label><input type="text" name="occupation" class="fi" placeholder="e.g. Software Engineer" required/></div>
        </div>
        
        <div class="form-nav">
          {{-- <button type="button" class="btn-prev" onclick="prevStep()">← Previous</button> --}}
          <button type="button" class="btn-next" id="next-2" disabled onclick="nextStep(2)">Next Step →</button>
        </div>
      </div>
    

  </div>

  <div class="form-section" id="step-3">

    <!-- STEP 5: EMPLOYMENT -->
    
        <div class="fs-header">
          <div class="fs-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg></div>
          <div><p class="fs-title">Work Information</p><p class="fs-sub">Current employment details and 5-year work history.</p></div>
        </div>
        <div class="fs-body">
          <div class="fg fg-2">
            <div class="fl"><label class="lbl">Company Name <span class="req">*</span></label><input type="text" name="company_name" class="fi" placeholder="e.g. Acme Ltd" required/></div>
            <div class="fl"><label class="lbl">Job Title <span class="req">*</span></label><input type="text" name="job_title" class="fi" placeholder="e.g. Software Engineer" required/></div>
          </div>
          <p class="form-section-title" style="margin-top:4px;">Company Address</p>
          <div class="fg fg-2">
            <div class="fl"><label class="lbl">Door / No <span class="req">*</span></label><input type="text" name="work_door" class="fi" placeholder="Door/flat no" required/></div>
            <div class="fl"><label class="lbl">Street <span class="req">*</span></label><input type="text" name="work_street" class="fi" placeholder="Street" required/></div>
          </div>
          <div class="fg fg-3">
            <div class="fl"><label class="lbl">City <span class="req">*</span></label><input type="text" name="work_city" class="fi" placeholder="City" required/></div>
            <div class="fl"><label class="lbl">Postcode <span class="req">*</span></label><input type="text" name="work_postcode" class="fi" placeholder="Postcode" required/></div>
            <div class="fl"><label class="lbl">Country <span class="req">*</span></label><input type="text" name="work_country" class="fi" placeholder="Country" required/></div>
          </div>
          <div class="fg fg-2">
            <div class="fl"><label class="lbl">Work Telephone <span class="req">*</span></label><input type="tel" name="work_phone" class="fi" placeholder="+44 20 0000 0000" required/></div>
            <div class="fl"><label class="lbl">Annual Income (GBP) <span class="req">*</span></label><input type="number" name="annual_income" class="fi" placeholder="e.g. 35000" required/></div>
          </div>
          <div class="fg fg-2">
            <div class="fl"><label class="lbl">Job Duties <span class="req">*</span></label><textarea name="job_duties" class="ft" placeholder="Briefly describe your main job responsibilities…" required></textarea></div>
            <div class="fl">
              <label class="lbl">Start Date at this Job <span class="req">*</span></label><input type="date" name="job_start_date" class="fi date-fi" required/>
              <label class="lbl" style="margin-top:16px;">Supervisor / Manager Full Name <span class="req">*</span></label><input type="text" name="supervisor_name" class="fi" placeholder="Full name" required/>
              <label class="lbl" style="margin-top:16px;">Supervisor Telephone <span class="req">*</span></label><input type="tel" name="supervisor_phone" class="fi" placeholder="Phone number" required/>
            </div>
          </div>
          <hr class="form-div"/>
          <p class="form-section-title">5-Year Work History</p>
          <div class="fg fg-1">
            <div class="fl"><label class="lbl">Work History (Past 5 Years) <span class="req">*</span></label><textarea name="work_history" class="ft" style="min-height:120px;" placeholder="List previous employers, dates, and roles over the past 5 years…" required></textarea></div>
          </div>
          
        </div>
    

    <!-- STEP 6: EDUCATION -->
    
      <div class="fs-header">
        <div class="fs-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div>
        <div><p class="fs-title">Education Information</p><p class="fs-sub">Your highest level of education details.</p></div>
      </div>
      <div class="fs-body">
        <div class="fg fg-2">
          <div class="fl"><label class="lbl">School / University Name <span class="req">*</span></label><input type="text" name="school_name" class="fi" placeholder="e.g. University of London" required/></div>
          <div class="fl"><label class="lbl">Degree / Diploma <span class="req">*</span></label><input type="text" name="degree" class="fi" placeholder="e.g. BSc Computer Science" required/></div>
        </div>
        <div class="fg fg-1">
          <div class="fl"><label class="lbl">Subjects Studied <span class="req">*</span></label><textarea name="subjects" class="ft" placeholder="List the main subjects or areas of study…" required></textarea></div>
        </div>
        
      </div>
    

    <!-- STEP 9: TRAVEL HISTORY -->
    
      <div class="fs-header">
        <div class="fs-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg></div>
        <div><p class="fs-title">Travel History</p><p class="fs-sub">Your previous travel and visa history related to China.</p></div>
      </div>
      <div class="fs-body">
        <div class="fg fg-1">
          <div class="fl"><label class="lbl">Have you been to China in the past 3 years? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="been_to_china" value="yes"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="been_to_china" value="no" checked/> No</label>
            </div>
          </div>
          <div class="fl"><label class="lbl">Have you ever been issued a Chinese visa? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="prev_china_visa" value="yes" onchange="toggle('prev-visa-fields','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="prev_china_visa" value="no" onchange="toggle('prev-visa-fields','no')" checked/> No</label>
            </div>
          </div>
        </div>
        <div class="cond" id="prev-visa-fields">
          <div class="fg fg-3">
            <div class="fl"><label class="lbl">Previous Visa Fingerprint Date <span class="req">*</span></label><input type="date" name="prev_fingerprint_date" class="fi date-fi"/></div>
            <div class="fl"><label class="lbl">Country Where Last Applied <span class="req">*</span></label><input type="text" name="prev_visa_country" class="fi" placeholder="e.g. United Kingdom"/></div>
            <div class="fl"><label class="lbl">Upload Previous Visa Copy <span class="opt">Optional</span></label>
              <div class="file-zone" onclick="triggerFile('prev_visa')">
                <input type="file" id="prev_visa" name="prev_visa" accept=".jpg,.jpeg,.pdf" onchange="showFile(this,'prev-pv')"/>
                <p class="fz-sub">Upload last issued visa <em>JPEG / PDF</em></p>
              </div>
              <div id="prev-pv"></div>
            </div>
          </div>
        </div>
        <div class="fg fg-1">
          <div class="fl"><label class="lbl">Have you ever held a Chinese Residence Permit? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="residence_permit" value="yes" onchange="toggle('permit-field','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="residence_permit" value="no" onchange="toggle('permit-field','no')" checked/> No</label>
            </div>
          </div>
        </div>
        <div class="cond" id="permit-field">
          <div class="fl"><label class="lbl">Residence Permit Number <span class="req">*</span></label><input type="text" name="permit_number" class="fi" placeholder="Permit number"/></div>
        </div>
        <div class="fg fg-1">
          <div class="fl"><label class="lbl">Do you hold valid visas from other countries? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="other_visas" value="yes" onchange="toggle('other-visa-field','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="other_visas" value="no" onchange="toggle('other-visa-field','no')" checked/> No</label>
            </div>
          </div>
        </div>
        <div class="cond" id="other-visa-field">
          <div class="fl"><label class="lbl">Which countries? <span class="req">*</span></label><textarea name="other_visa_countries" class="ft" placeholder="List countries with valid visas…"></textarea></div>
        </div>
        <div class="fg fg-1">
          <div class="fl"><label class="lbl">Countries visited in the past 12 months? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="visited_past_year" value="yes" onchange="toggle('visited-field','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="visited_past_year" value="no" onchange="toggle('visited-field','no')" checked/> No</label>
            </div>
          </div>
        </div>
        <div class="cond" id="visited-field">
          <div class="fl"><label class="lbl">Which countries? <span class="req">*</span></label><textarea name="visited_countries" class="ft" placeholder="List countries visited in the past 12 months…"></textarea></div>
        </div>
        <div class="form-nav">
          {{-- <button type="button" class="btn-prev" onclick="prevStep(2)">← Previous</button> --}}
          <button type="button" class="btn-next" id="next-3" disabled onclick="nextStep(3)">Next Step →</button>
        </div>
      </div>
    

  </div>
  
  <div class="form-section" id="step-4">

    <!-- STEP 7: FAMILY INFO -->
   
      <div class="fs-header">
        <div class="fs-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
        <div><p class="fs-title">Family Information</p><p class="fs-sub">Details for father, mother, and spouse (if applicable).</p></div>
      </div>
      <div class="fs-body">

        <!-- FATHER -->
        <p class="form-section-title">Father's Details</p>
        <div class="fg fg-3">
          <div class="fl"><label class="lbl">Full Name <span class="req">*</span></label><input type="text" name="father_name" class="fi" placeholder="Father's full name" required/></div>
          <div class="fl"><label class="lbl">Date of Birth <span class="req">*</span></label><input type="date" name="father_dob" class="fi date-fi" required/></div>
          <div class="fl"><label class="lbl">Nationality <span class="req">*</span></label><input type="text" name="father_nationality" class="fi" placeholder="Nationality" required/></div>
        </div>
        <div class="fg fg-2">
          <div class="fl"><label class="lbl">Occupation <span class="req">*</span></label><input type="text" name="father_occupation" class="fi" placeholder="Occupation" required/></div>
          <div class="fl"><label class="lbl">Does your father live in China? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="father_in_china" value="yes" onchange="toggle('father-china','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="father_in_china" value="no" onchange="toggle('father-china','no')" checked/> No</label>
            </div>
          </div>
        </div>
        <div class="fg fg-3">
          <div class="fl"><label class="lbl">Door No</label><input type="text" name="father_door" class="fi" placeholder="Door/flat"/></div>
          <div class="fl"><label class="lbl">Street</label><input type="text" name="father_street" class="fi" placeholder="Street"/></div>
          <div class="fl"><label class="lbl">City</label><input type="text" name="father_city" class="fi" placeholder="City"/></div>
        </div>
        <div class="fg fg-2">
          <div class="fl"><label class="lbl">Postcode</label><input type="text" name="father_postcode" class="fi" placeholder="Postcode"/></div>
          <div class="fl"><label class="lbl">Country</label><input type="text" name="father_country" class="fi" placeholder="Country"/></div>
        </div>
        <div class="cond" id="father-china">
          <div class="fl"><label class="lbl">Status in China <span class="req">*</span></label>
            <select name="father_china_status" class="fs-el"><option>Citizen</option><option>Permanent Resident</option></select>
          </div>
        </div>

        <hr class="form-div"/>

        <!-- MOTHER -->
        <p class="form-section-title">Mother's Details</p>
        <div class="fg fg-3">
          <div class="fl"><label class="lbl">Full Name <span class="req">*</span></label><input type="text" name="mother_name" class="fi" placeholder="Mother's full name" required/></div>
          <div class="fl"><label class="lbl">Date of Birth <span class="req">*</span></label><input type="date" name="mother_dob" class="fi date-fi" required/></div>
          <div class="fl"><label class="lbl">Nationality <span class="req">*</span></label><input type="text" name="mother_nationality" class="fi" placeholder="Nationality" required/></div>
        </div>
        <div class="fg fg-2">
          <div class="fl"><label class="lbl">Occupation <span class="req">*</span></label><input type="text" name="mother_occupation" class="fi" placeholder="Occupation" required/></div>
          <div class="fl"><label class="lbl">Does your mother live in China? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="mother_in_china" value="yes" onchange="toggle('mother-china','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="mother_in_china" value="no" onchange="toggle('mother-china','no')" checked/> No</label>
            </div>
          </div>
        </div>
        <div class="fg fg-3">
          <div class="fl"><label class="lbl">Door No</label><input type="text" name="mother_door" class="fi" placeholder="Door/flat"/></div>
          <div class="fl"><label class="lbl">Street</label><input type="text" name="mother_street" class="fi" placeholder="Street"/></div>
          <div class="fl"><label class="lbl">City</label><input type="text" name="mother_city" class="fi" placeholder="City"/></div>
        </div>
        <div class="fg fg-2">
          <div class="fl"><label class="lbl">Postcode</label><input type="text" name="mother_postcode" class="fi" placeholder="Postcode"/></div>
          <div class="fl"><label class="lbl">Country</label><input type="text" name="mother_country" class="fi" placeholder="Country"/></div>
        </div>
        <div class="cond" id="mother-china">
          <div class="fl"><label class="lbl">Status in China <span class="req">*</span></label>
            <select name="mother_china_status" class="fs-el"><option>Citizen</option><option>Permanent Resident</option></select>
          </div>
        </div>

        <hr class="form-div"/>

        <!-- SPOUSE -->
        <p class="form-section-title">Spouse's Details <span style="font-size:13px;font-weight:400;color:var(--gray-light);">(if married)</span></p>
        <div class="fg fg-3">
          <div class="fl"><label class="lbl">Full Name</label><input type="text" name="spouse_name" class="fi" placeholder="Spouse's full name"/></div>
          <div class="fl"><label class="lbl">Date of Birth</label><input type="date" name="spouse_dob" class="fi date-fi"/></div>
          <div class="fl"><label class="lbl">Nationality</label><input type="text" name="spouse_nationality" class="fi" placeholder="Nationality"/></div>
        </div>
        <div class="fg fg-2">
          <div class="fl"><label class="lbl">Occupation</label><input type="text" name="spouse_occupation" class="fi" placeholder="Occupation"/></div>
          <div class="fl"><label class="lbl">Street</label><input type="text" name="spouse_street" class="fi" placeholder="Street"/></div>
        </div>
        <div class="fg fg-3">
          <div class="fl"><label class="lbl">City</label><input type="text" name="spouse_city" class="fi" placeholder="City"/></div>
          <div class="fl"><label class="lbl">Postcode</label><input type="text" name="spouse_postcode" class="fi" placeholder="Postcode"/></div>
          <div class="fl"><label class="lbl">Country</label><input type="text" name="spouse_country" class="fi" placeholder="Country"/></div>
        </div>

        
      </div>
    
    
    <!-- STEP 10: DECLARATIONS -->
    
      <div class="fs-header">
        <div class="fs-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div><p class="fs-title">Declarations</p><p class="fs-sub">Please answer all declarations honestly. False declarations may result in visa refusal.</p></div>
      </div>
      <div class="fs-body">
        <!-- DECLARATIONS -->
        <div style="display:flex;flex-direction:column;gap:20px;">

          <div class="fl"><label class="lbl">Have you ever been refused a visa for China or refused entry? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="china_refused" value="yes" onchange="toggle('china-refused-field','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="china_refused" value="no" onchange="toggle('china-refused-field','no')" checked/> No</label>
            </div>
            <div class="cond" id="china-refused-field"><div class="fl"><label class="lbl">Please specify <span class="req">*</span></label><textarea name="china_refused_details" class="ft" placeholder="Please provide details…"></textarea></div></div>
          </div>

          <div class="fl"><label class="lbl">Do you have any criminal record in China or any other country? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="criminal_record" value="yes" onchange="toggle('criminal-field','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="criminal_record" value="no" onchange="toggle('criminal-field','no')" checked/> No</label>
            </div>
            <div class="cond" id="criminal-field"><div class="fl"><label class="lbl">Please specify <span class="req">*</span></label><textarea name="criminal_details" class="ft" placeholder="Please provide details…"></textarea></div></div>
          </div>

          <div class="fl"><label class="lbl">Do you have any serious mental disorder or infectious disease? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="medical_condition" value="yes" onchange="toggle('medical-field','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="medical_condition" value="no" onchange="toggle('medical-field','no')" checked/> No</label>
            </div>
            <div class="cond" id="medical-field"><div class="fl"><label class="lbl">Please specify <span class="req">*</span></label><textarea name="medical_details" class="ft" placeholder="Please provide details…"></textarea></div></div>
          </div>

          <div class="fl"><label class="lbl">Have you ever visited countries or territories where there is an epidemic in the last 30 days? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="epidemic_visit" value="yes" onchange="toggle('epidemic-field','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="epidemic_visit" value="no" onchange="toggle('epidemic-field','no')" checked/> No</label>
            </div>
            <div class="cond" id="epidemic-field"><div class="fl"><label class="lbl">Please specify <span class="req">*</span></label><textarea name="epidemic_details" class="ft" placeholder="Which countries and dates?"></textarea></div></div>
          </div>

          <div class="fl"><label class="lbl">Are you serving or have you ever served in the military? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="military_service" value="yes" onchange="toggle('military-fields','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="military_service" value="no" onchange="toggle('military-fields','no')" checked/> No</label>
            </div>
            <div class="cond" id="military-fields">
              <div class="fg fg-2">
                <div class="fl"><label class="lbl">Country of Service <span class="req">*</span></label><input type="text" name="military_country" class="fi" placeholder="Country"/></div>
                <div class="fl"><label class="lbl">Branch of Service <span class="req">*</span></label><input type="text" name="military_branch" class="fi" placeholder="e.g. Army, Navy"/></div>
                <div class="fl"><label class="lbl">Rank <span class="req">*</span></label><input type="text" name="military_rank" class="fi" placeholder="Rank"/></div>
              </div>
              <div class="fg fg-2">
                <div class="fl"><label class="lbl">Service Start (YYYY-MM) <span class="req">*</span></label><input type="month" name="military_start" class="fi date-fi"/></div>
                <div class="fl"><label class="lbl">Service End (YYYY-MM) <span class="req">*</span></label><input type="month" name="military_end" class="fi date-fi"/></div>
              </div>
            </div>
          </div>

          <div class="fl"><label class="lbl">Is there anything else you wish to declare? <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt"><input type="radio" name="other_declaration" value="yes" onchange="toggle('declaration-field','yes')"/> Yes</label>
              <label class="radio-opt"><input type="radio" name="other_declaration" value="no" onchange="toggle('declaration-field','no')" checked/> No</label>
            </div>
            <div class="cond" id="declaration-field"><div class="fl"><label class="lbl">Please specify <span class="req">*</span></label><textarea name="other_declaration_details" class="ft" placeholder="Additional declarations…"></textarea></div></div>
          </div>

        </div>

        <div style="margin-top:28px;padding:20px;background:var(--blue-faint);border:1.5px solid rgba(26,74,171,.2);border-radius:12px;">
          <label style="display:flex;align-items:flex-start;gap:12px;cursor:pointer;">
            <input type="checkbox" name="declaration_confirm" required style="margin-top:3px;accent-color:var(--blue);width:18px;height:18px;flex-shrink:0;"/>
            <span style="font-size:12px;color:var(--blue-dark);line-height:1.7;font-weight:500;">I confirm that all information provided in this application is true and accurate to the best of my knowledge. I understand that false declarations may result in visa refusal or future travel bans.</span>
          </label>
        </div>

        <div class="form-nav">
          {{-- <button type="button" class="btn-prev" onclick="prevStep(3)">← Previous</button> --}}
          <button type="submit" class="btn-submit">✓ Submit Application</button>
        </div>
      </div>
    
  </div>

  

  <!-- SUCCESS (shown via JS or redirect) -->
  <div class="success-wrap" id="success-section">
    <div class="success-icon">✓</div>
    <h2 class="success-title">Application Submitted!</h2>
    <p class="success-sub">Thank you for submitting your China visit visa application. Our team will review your details and contact you within 24 hours to guide you through the next steps.</p>
    <a href="/" style="display:inline-flex;align-items:center;gap:8px;background:var(--blue);color:var(--white);padding:14px 28px;border-radius:10px;font-weight:600;text-decoration:none;font-size:13px;">← Return to Home</a>
  </div>

  </div><!-- /form content -->

  <!-- SIDEBAR -->
  <div class="sidebar">
    <div class="side-card blue">
      <p class="side-title">Application Progress</p>
      <div class="prog-bar"><div class="prog-fill" id="progress-fill" style="width:10%"></div></div>
      <p class="prog-text" id="progress-text">Step 1 of 4</p>
    </div>

    <div class="side-card">
      <p class="side-title">📋 Document Checklist</p>
      <ul class="req-list">
        <li><span class="req-badge r">R</span><span>Passport scan (bio page) — JPEG/PDF</span></li>
        <li><span class="req-badge r">R</span><span>2 empty passport pages — JPEG/PDF</span></li>
        <li><span class="req-badge r">R</span><span>Selfie on white background — JPEG</span></li>
        <li><span class="req-badge g">O</span><span>3 months bank statements — PDF</span></li>
        <li><span class="req-badge g">O</span><span>3 months payslips — PDF</span></li>
        <li><span class="req-badge g">O</span><span>DBS check certificate — PDF</span></li>
      </ul>
      <p style="font-size:10px;color:var(--gray-light);margin-top:12px;"><span style="color:var(--red);font-weight:700;">R</span> = Required &nbsp;·&nbsp; <span style="color:var(--green);font-weight:700;">O</span> = Optional</p>
    </div>

    <div class="side-card">
      <p class="side-title">⚠️ Important Notes</p>
      <ul class="req-list">
        <li><span style="font-size:16px">📅</span><span>Travel dates must be within the next 90 days</span></li>
        <li><span style="font-size:16px">🇬🇧</span><span>UK/EU passport holders: embassy may request docs later</span></li>
        <li><span style="font-size:16px">⏱</span><span>We respond within 24 hours of submission</span></li>
        <li><span style="font-size:16px">🔒</span><span>All data is handled securely and never shared</span></li>
      </ul>
    </div>

    <div class="side-card">
      <p class="side-title">💬 Need Help?</p>
      <div class="contact-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07"/></svg><a href="tel:+447912649410">+44 7912 649410</a></div>
      <div class="contact-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z"/></svg><a href="https://wa.me/447912649410" target="_blank">WhatsApp Us</a></div>
      <div class="contact-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><span>Mon–Sat: 9am – 7pm</span></div>
    </div>
  </div>
</div>
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
//   // Hide current
//   document.getElementById('step-' + currentStep)?.classList.remove('active');
//   document.getElementById('sp-' + currentStep)?.classList.remove('active');

//   // Update previous steps as done
//   for (let i = 1; i < n; i++) {
//     document.getElementById('sp-' + i)?.classList.add('done');
//     document.getElementById('sp-' + i)?.classList.remove('active');
//   }
//   // Remove done from steps >= n
//   for (let i = n; i <= totalSteps; i++) {
//     document.getElementById('sp-' + i)?.classList.remove('done');
//   }

//   currentStep = n;
//   document.getElementById('step-' + n)?.classList.add('active');
//   document.getElementById('sp-' + n)?.classList.add('active');

//   // Update progress
//   const pct = Math.round((n / totalSteps) * 100);
//   document.getElementById('progress-fill').style.width = pct + '%';
//   document.getElementById('progress-text').textContent = 'Step ' + n + ' of ' + totalSteps;

//   // Scroll to top of step
//   document.querySelector('.steps-wrap').scrollIntoView({behavior:'smooth', block:'start'});
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
  // if (!field.value.trim()) {
  //   field.style.borderColor = "red";
  // } else {
  //   field.style.borderColor = "";
  // }
  if (n < totalSteps) goToStep(n + 1);
}

function prevStep(n) { if (n > 1) goToStep(n - 1); }

function toggle(id, val) {
  const el = document.getElementById(id);
  if (el) el.classList.toggle('show', val === 'yes');
}

function triggerFile(id) { document.getElementById(id).click(); }

function showFile(input, previewId) {
  const prev = document.getElementById(previewId);
  if (!prev) return;
  if (input.files && input.files[0]) {
    prev.innerHTML = `<div class="file-preview"><span>📎 ${input.files[0].name}</span><button type="button" onclick="clearFile('${input.id}','${previewId}')">✕</button></div>`;
  }
}

function clearFile(inputId, previewId) {
  document.getElementById(inputId).value = '';
  document.getElementById(previewId).innerHTML = '';
}

// Drag and drop
document.querySelectorAll('.file-zone').forEach(zone => {
  zone.addEventListener('dragover', e => { e.preventDefault(); zone.classList.add('dragover'); });
  zone.addEventListener('dragleave', () => zone.classList.remove('dragover'));
  zone.addEventListener('drop', e => {
    e.preventDefault();
    zone.classList.remove('dragover');
    const input = zone.querySelector('input[type="file"]');
    if (input && e.dataTransfer.files.length) {
      input.files = e.dataTransfer.files;
      const previewId = 'prev-' + input.id.slice(0, 2);
      showFile(input, previewId);
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