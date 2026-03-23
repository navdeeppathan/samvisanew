<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Application Submitted — SAM Visa Services</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<style>
  :root{
    --blue:#1a4aab;--blue-dark:#0f2f7a;--blue-mid:#1e5bc6;--blue-light:#4a7fd4;
    --blue-pale:#e8f0fb;--blue-faint:#f0f5ff;
    --gray-dark:#2c3a4a;--gray-mid:#5a6a7a;--gray-light:#8a9aaa;
    --gray-border:#d4dce6;
    --white:#ffffff;
    --shadow-blue:0 8px 32px rgba(26,74,171,0.3);
    --shadow-lg:0 20px 60px rgba(26,74,171,0.18);
    --font-d:'Cormorant Garamond',serif;
    --font-b:'Jost',sans-serif;
    --expo:cubic-bezier(0.16,1,0.3,1);
    --bounce:cubic-bezier(0.34,1.56,0.64,1);
    --green:#16a34a;
  }

  *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}

  body{
    font-family:var(--font-b);
    background:linear-gradient(150deg,#f0f5ff 0%,#e8f0fb 30%,#dce8f8 60%,#f4f8ff 100%);
    min-height:100vh;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    padding:24px;
    position:relative;
    overflow:hidden;
  }

  /* BG GRID */
  body::before{
    content:'';
    position:fixed;
    inset:0;
    background-image:
      linear-gradient(rgba(26,74,171,.04) 1px,transparent 1px),
      linear-gradient(90deg,rgba(26,74,171,.04) 1px,transparent 1px);
    background-size:64px 64px;
    pointer-events:none;
  }

  /* FLOATING ORBS */
  .orb{position:fixed;border-radius:50%;filter:blur(70px);pointer-events:none;animation:orbDrift ease-in-out infinite;}
  .orb-1{width:500px;height:500px;top:-150px;right:-100px;background:radial-gradient(circle,rgba(26,74,171,.1) 0%,transparent 70%);animation-duration:14s;}
  .orb-2{width:350px;height:350px;bottom:0;left:-80px;background:radial-gradient(circle,rgba(74,127,212,.08) 0%,transparent 70%);animation-duration:18s;animation-delay:3s;}

  @keyframes orbDrift{0%,100%{transform:translate(0,0);}33%{transform:translate(20px,-15px);}66%{transform:translate(-15px,20px);}}
  @keyframes fadeUp{from{opacity:0;transform:translateY(30px);}to{opacity:1;transform:translateY(0);}}
  @keyframes popIn{from{transform:scale(0) rotate(-10deg);opacity:0;}to{transform:scale(1) rotate(0deg);opacity:1;}}
  @keyframes checkDraw{from{stroke-dashoffset:36;}to{stroke-dashoffset:0;}}
  @keyframes pulseRing{0%{transform:scale(1);opacity:.4;}100%{transform:scale(1.8);opacity:0;}}
  @keyframes pulseDot{0%,100%{box-shadow:0 0 0 0 rgba(26,74,171,0.4);}50%{box-shadow:0 0 0 10px rgba(26,74,171,0);}}
  @keyframes shimmer{0%{background-position:-200% center;}100%{background-position:200% center;}}
  @keyframes float{0%,100%{transform:translateY(0);}50%{transform:translateY(-8px);}}
  @keyframes particleRise{0%{transform:translateY(0) rotate(0deg);opacity:.6;}100%{transform:translateY(-100vh) rotate(360deg);opacity:0;}}

  /* PARTICLES */
  .particles{position:fixed;inset:0;pointer-events:none;z-index:0;overflow:hidden;}
  .particle{position:absolute;border-radius:50%;background:rgba(26,74,171,.25);animation:particleRise linear infinite;opacity:0;}
  .particle:nth-child(1){left:8%;width:4px;height:4px;animation-duration:18s;}
  .particle:nth-child(2){left:22%;width:3px;height:3px;animation-duration:24s;animation-delay:3s;}
  .particle:nth-child(3){left:42%;width:5px;height:5px;animation-duration:20s;animation-delay:7s;}
  .particle:nth-child(4){left:65%;width:3px;height:3px;animation-duration:22s;animation-delay:1s;}
  .particle:nth-child(5){left:82%;width:4px;height:4px;animation-duration:16s;animation-delay:5s;}

  /* CARD */
  .card{
    position:relative;
    z-index:10;
    background:var(--white);
    border:1.5px solid var(--gray-border);
    border-radius:24px;
    box-shadow:var(--shadow-lg),0 0 0 1px rgba(26,74,171,.06);
    max-width:540px;
    width:100%;
    overflow:hidden;
    animation:fadeUp .8s var(--expo) .1s both;
  }

  /* TOP SHIMMER BAR */
  .card-bar{
    height:4px;
    background:linear-gradient(90deg,var(--blue-dark),var(--blue-mid),var(--blue-light),var(--blue-mid),var(--blue-dark));
    background-size:200% auto;
    animation:shimmer 3s linear infinite;
  }

  .card-body{padding:52px 48px 48px;}

  /* SUCCESS ICON */
  .icon-wrap{
    position:relative;
    width:96px;
    height:96px;
    margin:0 auto 32px;
    animation:popIn .6s var(--bounce) .3s both;
  }
  .icon-ring{
    position:absolute;
    inset:0;
    border-radius:50%;
    background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));
    box-shadow:0 0 0 12px rgba(26,74,171,.08),var(--shadow-blue);
  }
  .icon-ring::before,
  .icon-ring::after{
    content:'';
    position:absolute;
    inset:-6px;
    border-radius:50%;
    border:2px solid rgba(26,74,171,.2);
    animation:pulseRing 2.4s ease-out infinite;
  }
  .icon-ring::after{animation-delay:.8s;}
  .icon-svg{
    position:relative;
    z-index:1;
    width:100%;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
  }
  .icon-svg svg{
    width:44px;
    height:44px;
  }
  .check-path{
    stroke:#ffffff;
    stroke-width:3;
    stroke-linecap:round;
    stroke-linejoin:round;
    fill:none;
    stroke-dasharray:36;
    stroke-dashoffset:36;
    animation:checkDraw .5s var(--expo) .9s both;
  }

  /* BADGE */
  .badge{
    display:inline-flex;
    align-items:center;
    gap:7px;
    background:rgba(22,163,74,.1);
    border:1px solid rgba(22,163,74,.25);
    border-radius:40px;
    padding:5px 14px;
    font-size:10px;
    font-weight:700;
    letter-spacing:2.5px;
    color:var(--green);
    text-transform:uppercase;
    margin-bottom:18px;
    animation:fadeUp .7s var(--expo) .5s both;
  }
  .badge-dot{
    width:6px;height:6px;
    background:var(--green);
    border-radius:50%;
    animation:pulseDot 2s infinite;
  }

  /* TITLE */
  .title{
    font-family:var(--font-d);
    font-size:clamp(30px,5vw,42px);
    font-weight:700;
    color:var(--blue-dark);
    line-height:1.1;
    margin-bottom:14px;
    animation:fadeUp .7s var(--expo) .6s both;
  }
  .title em{
    font-style:italic;
    color:var(--blue-mid);
  }

  /* DESC */
  .desc{
    font-size:14px;
    font-weight:300;
    color:var(--gray-mid);
    line-height:1.85;
    margin-bottom:36px;
    animation:fadeUp .7s var(--expo) .7s both;
  }
  .desc strong{
    color:var(--gray-dark);
    font-weight:600;
  }

  /* INFO CARDS */
  .info-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:12px;
    margin-bottom:32px;
    animation:fadeUp .7s var(--expo) .8s both;
  }
  .info-item{
    background:var(--blue-faint);
    border:1.5px solid rgba(26,74,171,.12);
    border-radius:12px;
    padding:14px 16px;
    display:flex;
    align-items:center;
    gap:10px;
    transition:border-color .3s,background .3s;
  }
  .info-item:hover{
    border-color:rgba(26,74,171,.25);
    background:var(--blue-pale);
  }
  .info-icon{
    width:32px;height:32px;min-width:32px;
    border-radius:8px;
    background:rgba(26,74,171,.12);
    display:flex;align-items:center;justify-content:center;
  }
  .info-icon svg{color:var(--blue);}
  .info-text p{font-size:11px;font-weight:700;color:var(--blue-dark);letter-spacing:.5px;}
  .info-text small{font-size:10px;color:var(--gray-mid);}

  /* DIVIDER */
  .divider{
    height:1px;
    background:linear-gradient(90deg,transparent,var(--gray-border),transparent);
    margin-bottom:28px;
    animation:fadeUp .7s var(--expo) .85s both;
  }

  /* BUTTONS */
  .btn-group{
    display:flex;
    gap:12px;
    animation:fadeUp .7s var(--expo) .9s both;
  }
  .btn-primary{
    flex:1;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:8px;
    background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));
    color:var(--white);
    font-family:var(--font-b);
    font-weight:700;
    font-size:13px;
    letter-spacing:.5px;
    padding:14px 24px;
    border-radius:12px;
    text-decoration:none;
    border:none;
    cursor:pointer;
    box-shadow:var(--shadow-blue);
    transition:transform .3s var(--bounce),box-shadow .3s;
    position:relative;
    overflow:hidden;
  }
  .btn-primary::before{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(135deg,var(--blue-light),var(--blue-mid));
    opacity:0;
    transition:opacity .3s;
  }
  .btn-primary:hover{
    transform:translateY(-3px);
    box-shadow:0 14px 36px rgba(26,74,171,.4);
  }
  .btn-primary:hover::before{opacity:1;}
  .btn-primary span,.btn-primary svg{position:relative;z-index:1;}
  .btn-primary svg{transition:transform .3s;}
  .btn-primary:hover svg{transform:translateX(4px);}

  .btn-secondary{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:8px;
    background:var(--white);
    color:var(--blue);
    font-family:var(--font-b);
    font-weight:600;
    font-size:13px;
    padding:14px 20px;
    border-radius:12px;
    text-decoration:none;
    border:1.5px solid rgba(26,74,171,.25);
    cursor:pointer;
    transition:border-color .3s,background .3s,transform .3s var(--bounce);
    white-space:nowrap;
  }
  .btn-secondary:hover{
    border-color:var(--blue);
    background:var(--blue-faint);
    transform:translateY(-2px);
  }

  /* SECURITY NOTE */
  .sec-note{
    margin-top:20px;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:6px;
    font-size:11px;
    color:var(--gray-light);
    animation:fadeUp .7s var(--expo) .95s both;
  }
  .sec-note svg{color:var(--gray-light);}

  /* FLOATING TAGS */
  .ftag{
    position:fixed;
    background:var(--white);
    border:1px solid var(--gray-border);
    border-radius:12px;
    padding:10px 16px;
    display:flex;
    align-items:center;
    gap:8px;
    font-size:11px;
    font-weight:600;
    color:var(--gray-dark);
    box-shadow:0 4px 20px rgba(26,74,171,.12);
    white-space:nowrap;
    z-index:5;
    animation:float 4s ease-in-out infinite;
  }
  .ftag svg{color:var(--blue);}
  .ftag-1{bottom:15%;left:4%;animation-delay:0s;}
  .ftag-2{top:20%;right:4%;animation-delay:1.5s;}
  .ftag-3{bottom:22%;right:5%;animation-delay:3s;}

  /* LOGO */
  .logo-wrap{
    position:fixed;
    top:24px;
    /* left:50%; */
    right: 10px;
    transform:translateX(-50%);
    z-index:20;
    animation:fadeUp .6s var(--expo) both;
  }
  .logo-wrap img{height:44px;object-fit:contain;}

  /* RESPONSIVE */
  @media(max-width:540px){
    .card-body{padding:36px 24px 32px;}
    .info-grid{grid-template-columns:1fr;}
    .btn-group{flex-direction:column;}
    .ftag{display:none;}
    .logo-wrap{top:16px;}
  }
</style>
</head>
<body>

<!-- PARTICLES -->
<div class="particles" aria-hidden="true">
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
  <div class="particle"></div>
</div>

<!-- ORBS -->
<div class="orb orb-1" aria-hidden="true"></div>
<div class="orb orb-2" aria-hidden="true"></div>

<!-- LOGO -->
{{-- <div class="logo-wrap">
  <img src="https://samvisauk.com/wp-content/uploads/2023/11/fulllogo_transparent_nobuffer-removebg-preview_200x100px.png" alt="SAM Visa Services"/>
</div> --}}

<!-- FLOATING TAGS -->
{{-- <div class="ftag ftag-1" aria-hidden="true">
  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
  Application Received
</div>
<div class="ftag ftag-2" aria-hidden="true">
  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
  24hr Response
</div>
<div class="ftag ftag-3" aria-hidden="true">
  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
  ICO Registered
</div> --}}

<!-- CARD -->
<div class="card" role="main">
  <div class="card-bar"></div>
  <div class="card-body">

    <div class="logo-wrap">
    <img src="https://samvisauk.com/wp-content/uploads/2023/11/fulllogo_transparent_nobuffer-removebg-preview_200x100px.png" alt="SAM Visa Services"/>
    </div>

    <!-- ICON -->
    <div class="icon-wrap" aria-hidden="true">
      <div class="icon-ring"></div>
      <div class="icon-svg">
        <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
          <polyline class="check-path" points="10,23 18,31 34,14"/>
        </svg>
      </div>
    </div>

    <!-- BADGE -->
    {{-- <div class="badge"><span class="badge-dot"></span>Application Submitted</div> --}}

    <!-- TITLE -->
    <h1 class="title">Thank You,<br/><em>We're On It!</em></h1>

    <!-- DESC -->
    <p class="desc">
      Your visa application has been <strong>successfully received</strong> by our team. Please check your email for a confirmation and further communication — we aim to respond within <strong>24 hours</strong>.
    </p>

    <!-- INFO GRID -->
    {{-- <div class="info-grid">
      <div class="info-item">
        <div class="info-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <div class="info-text"><p>24hr Reply</p><small>Mon – Sat, 9am–7pm</small></div>
      </div>
      <div class="info-item">
        <div class="info-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        </div>
        <div class="info-text"><p>Check Email</p><small>Confirmation sent</small></div>
      </div>
      <div class="info-item">
        <div class="info-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <div class="info-text"><p>Fully Secure</p><small>ICO registered</small></div>
      </div>
      <div class="info-item">
        <div class="info-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .82h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6z"/></svg>
        </div>
        <div class="info-text"><p>WhatsApp</p><small>+44 7879 175585</small></div>
      </div>
    </div> --}}

    <div class="divider"></div>

    <!-- BUTTONS -->
    <div class="btn-group">
      <a href="/" class="btn-primary">
        <span>Return to Home</span>
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <a href="https://wa.me/447879175585" target="_blank" rel="noopener" class="btn-secondary">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        WhatsApp
      </a>
    </div>

    <!-- SECURITY NOTE -->
    <p class="sec-note">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
      Your data is protected under GDPR &amp; ICO registration
    </p>

  </div>
</div>

</body>
</html>