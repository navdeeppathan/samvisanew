<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Visa Pricing — SAM Visa Services</title>
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
    --green:#16a34a;--red:#dc2626;
    }
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:var(--font-b);background:var(--white);color:var(--gray-dark);overflow-x:hidden;}
    ::-webkit-scrollbar{width:5px;}
    ::-webkit-scrollbar-thumb{background:var(--blue);border-radius:4px;}

    @keyframes fadeUp{from{opacity:0;transform:translateY(30px);}to{opacity:1;transform:translateY(0);}}
    @keyframes pulseDot{0%,100%{box-shadow:0 0 0 0 rgba(26,74,171,0.4);}50%{box-shadow:0 0 0 8px rgba(26,74,171,0);}}
    @keyframes bgSlide{0%{background-position:0% 50%;}50%{background-position:100% 50%;}100%{background-position:0% 50%;}}
    @keyframes shimmer{0%{background-position:-200% center;}100%{background-position:200% center;}}
    @keyframes lineGrow{from{transform:scaleX(0);}to{transform:scaleX(1);}}

    /* NAV */
    #navbar{position:fixed;top:0;left:0;right:0;z-index:100;padding:0 48px;transition:background .4s,box-shadow .4s; background:rgba(255,255,255,.97)}
    #navbar.scrolled{background:rgba(255,255,255,.97);backdrop-filter:blur(16px);box-shadow:0 1px 0 var(--gray-border),var(--shadow-sm);}
    .nav-inner{max-width:1280px;margin:0 auto;height:80px;display:flex;align-items:center;justify-content:space-between;}
    .nav-logo img{height:54px;object-fit:contain;}
    .nav-links{display:flex;align-items:center;gap:32px;list-style:none;}
    .nav-links a{color:var(--gray-mid);text-decoration:none;font-size:13px;font-weight:500;position:relative;transition:color .3s;}
    .nav-links a::after{content:'';position:absolute;bottom:-3px;left:0;width:0;height:2px;background:var(--blue);border-radius:2px;transition:width .35s var(--expo);}
    .nav-links a:hover{color:var(--blue);}
    .nav-links a:hover::after{width:100%;}
    .nav-links a.active{color:var(--blue);}
    .nav-links a.active::after{width:100%;}
    .nav-cta{background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark))!important;color:var(--white)!important;font-weight:600!important;padding:10px 22px;border-radius:8px!important;box-shadow:var(--shadow-blue);}
    .nav-cta::after{display:none!important;}
    .nav-cta:hover{transform:translateY(-2px);}
    .hamburger{display:none;flex-direction:column;gap:5px;background:none;border:none;cursor:pointer;padding:4px;}
    .hamburger span{display:block;width:24px;height:2px;background:var(--gray-dark);border-radius:2px;transition:all .3s;}
    .mob-menu{display:none;flex-direction:column;background:var(--white);border-top:1px solid var(--gray-border);padding:16px 48px 24px;gap:12px;box-shadow:var(--shadow-md);}
    .mob-menu.open{display:flex;}
    .mob-menu a{color:var(--gray-mid);text-decoration:none;font-size:14px;font-weight:500;padding:8px 0;border-bottom:1px solid var(--gray-border);}

    /* PAGE HEADER */
    /* .page-hero{background:linear-gradient(135deg,var(--blue-dark),var(--blue-mid),var(--blue-light));background-size:200% auto;animation:bgSlide 8s ease infinite;position:relative;overflow:hidden;padding:140px 48px 80px;text-align:center;}
    .page-hero::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.08) 1px,transparent 0);background-size:28px 28px;}
    .page-hero-inner{position:relative;z-index:2;max-width:700px;margin:0 auto;}
    .hero-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.25);border-radius:40px;padding:6px 16px;font-size:10px;font-weight:700;letter-spacing:3px;color:rgba(255,255,255,.9);text-transform:uppercase;margin-bottom:20px;animation:fadeUp .7s var(--expo) .2s both;}
    .badge-dot{width:6px;height:6px;background:#fff;border-radius:50%;animation:pulseDot 2s infinite;}
    .hero-title{font-family:var(--font-d);font-size:clamp(40px,6vw,68px);font-weight:700;color:#fff;line-height:1.08;margin-bottom:18px;animation:fadeUp .8s var(--expo) .3s both;}
    .hero-title em{font-style:italic;color:rgba(255,255,255,.8);}
    .hero-sub{font-size:15px;font-weight:300;color:rgba(255,255,255,.7);line-height:1.8;margin-bottom:36px;animation:fadeUp .8s var(--expo) .4s both;}
    .hero-trust{display:flex;align-items:center;justify-content:center;gap:20px;flex-wrap:wrap;animation:fadeUp .8s var(--expo) .5s both;}
    .trust-item{display:flex;align-items:center;gap:7px;font-size:12px;color:rgba(255,255,255,.7);font-weight:500;}
    .trust-item svg{opacity:.8;} */

    /* HERO BASE */
.page-hero {
  position: relative;
  overflow: hidden;
  padding: 140px 48px 80px;
  text-align: center;
  color: white;
}

/* SLIDER */
.hero-bg-slider {
  position: absolute;
  inset: 0;
  z-index: 0;
}

.hero-slide {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
  opacity: 0;
  animation: heroSlide 20s infinite;
}

/* GLOBAL TRAVEL IMAGES */
.hero-slide:nth-child(1) {
  background-image: url('/3.jpeg'); /* airport */
  animation-delay: 0s;
}
.hero-slide:nth-child(2) {
  background-image: url('/4.jpeg'); /* travel city */
  animation-delay: 5s;
}
.hero-slide:nth-child(3) {
  background-image: url('/b2.png'); /* passport travel */
  animation-delay: 10s;
}
.hero-slide:nth-child(4) {
  background-image: url('https://images.unsplash.com/photo-1469854523086-cc02fe5d8800'); /* airplane window */
  animation-delay: 15s;
}

/* ANIMATION */
@keyframes heroSlide {
  0% { opacity: 0; transform: scale(1.1); }
  5% { opacity: 1; }
  25% { opacity: 1; }
  30% { opacity: 0; }
  100% { opacity: 0; transform: scale(1); }
}

/* OVERLAY (important for text readability) */
.page-hero::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(10,40,60,0.85), rgba(20,60,90,0.75));
  z-index: 1;
}

/* DOT PATTERN */
.page-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,.08) 1px, transparent 0);
  background-size: 28px 28px;
  z-index: 1;
}

/* CONTENT */
.page-hero-inner {
  position: relative;
  z-index: 2;
  max-width: 700px;
  margin: 0 auto;
}

/* KEEP YOUR EXISTING STYLES */
.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255,255,255,.15);
  border: 1px solid rgba(255,255,255,.25);
  border-radius: 40px;
  padding: 6px 16px;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 3px;
  color: rgba(255,255,255,.9);
  text-transform: uppercase;
  margin-bottom: 20px;
}

.badge-dot {
  width: 6px;
  height: 6px;
  background: #fff;
  border-radius: 50%;
  animation: pulseDot 2s infinite;
}

.hero-title {
  font-size: clamp(40px,6vw,68px);
  font-weight: 700;
  line-height: 1.08;
  margin-bottom: 18px;
}

.hero-title em {
  font-style: italic;
  color: rgba(255,255,255,.85);
}

.hero-sub {
  font-size: 15px;
  color: rgba(255,255,255,.75);
  line-height: 1.8;
  margin-bottom: 36px;
}

.hero-trust {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}

.trust-item {
  font-size: 12px;
  color: rgba(255,255,255,.8);
}

    /* COUNTRY NAV TABS */
    .country-tabs-wrap{background:var(--white);border-bottom:1px solid var(--gray-border);position:sticky;top:80px;z-index:90;box-shadow:var(--shadow-sm);}
    .country-tabs{max-width:1280px;margin:0 auto;padding:0 48px;display:flex;align-items:center;gap:0;overflow-x:auto;scrollbar-width:none;}
    .country-tabs::-webkit-scrollbar{display:none;}
    .ctab{display:flex;align-items:center;gap:8px;padding:16px 22px;font-size:13px;font-weight:600;color:var(--gray-mid);border-bottom:3px solid transparent;cursor:pointer;white-space:nowrap;transition:color .3s,border-color .3s;border:none;background:none;font-family:var(--font-b);}
    .ctab:hover{color:var(--blue);}
    .ctab.active{color:var(--blue);border-bottom-color:var(--blue);}
    .ctab-flag img{width:20px;height:20px;}
    .ctab-flag{font-size:18px;}

    /* MAIN CONTENT */
    .pricing-wrap{max-width:1280px;margin:0 auto;padding:64px 48px 100px;}

    /* COUNTRY SECTION */
    .country-section{display:none;}
    .country-section.active{display:block;}

    /* SECTION HEADER */
    .cs-header{display:flex;align-items:center;gap:20px;margin-bottom:48px;padding-bottom:28px;border-bottom:1.5px solid var(--gray-border);}
    .cs-flag img {width:80px;height:80px;}
    .cs-flag{font-size:56px;line-height:1;}
    .cs-info{}
    .cs-lbl{font-size:10px;font-weight:700;letter-spacing:3px;color:var(--blue);text-transform:uppercase;margin-bottom:6px;}
    .cs-title{font-family:var(--font-d);font-size:clamp(32px,4vw,48px);font-weight:700;color:var(--blue-dark);line-height:1.1;}
    .cs-title em{font-style:italic;color:var(--blue-mid);}
    .cs-sub{font-size:14px;color:var(--gray-mid);margin-top:8px;line-height:1.7;}

    /* PRICING GRID */
    .pricing-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-bottom:56px;}
    .price-card{background:var(--white);border:1.5px solid var(--gray-border);border-radius:20px;overflow:hidden;transition:transform .4s var(--bounce),box-shadow .4s,border-color .4s;position:relative;}
    .price-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);border-color:rgba(26,74,171,.25);}
    .price-card.featured{border-color:var(--blue-mid);border-width:2px;box-shadow:var(--shadow-blue);}
    .price-card.featured::before{content:'';position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--blue-dark),var(--blue-mid),var(--blue-light),var(--blue-mid),var(--blue-dark));background-size:200% auto;animation:shimmer 3s linear infinite;}
    .popular-badge{position:absolute;top:16px;right:16px;background:var(--blue);color:var(--white);font-size:9px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;padding:4px 12px;border-radius:20px;}
    .pc-head{padding:28px 28px 20px;}
    .pc-type{font-size:10px;font-weight:700;letter-spacing:3px;color:var(--blue);text-transform:uppercase;margin-bottom:10px;}
    .pc-name{font-family:var(--font-d);font-size:22px;font-weight:600;color:var(--blue-dark);margin-bottom:14px;}
    .pc-price{display:flex;align-items:baseline;gap:4px;margin-bottom:6px;}
    .pc-currency{font-size:20px;font-weight:600;color:var(--blue-mid);font-family:var(--font-d);}
    .pc-amount{font-family:var(--font-d);font-size:52px;font-weight:700;color:var(--blue-dark);line-height:1;}
    .pc-period{font-size:12px;color:var(--gray-light);font-weight:400;}
    .pc-desc{font-size:12px;color:var(--gray-mid);line-height:1.6;margin-top:4px;}
    .pc-divider{height:1px;background:var(--gray-border);margin:0 28px;}
    .pc-features{padding:20px 28px 24px;}
    .pc-features ul{list-style:none;display:flex;flex-direction:column;gap:10px;}
    .pc-features li{display:flex;align-items:flex-start;gap:10px;font-size:12px;color:var(--gray-mid);line-height:1.5;}
    .feat-check{width:16px;height:16px;min-width:16px;border-radius:50%;background:rgba(22,163,74,.12);display:flex;align-items:center;justify-content:center;margin-top:1px;}
    .feat-check svg{color:var(--green);}
    .feat-x{width:16px;height:16px;min-width:16px;border-radius:50%;background:rgba(220,38,38,.08);display:flex;align-items:center;justify-content:center;margin-top:1px;}
    .feat-x svg{color:var(--red);}
    .pc-cta{padding:0 28px 28px;}
    .btn-apply{display:block;width:100%;text-align:center;padding:13px;border-radius:10px;font-family:var(--font-b);font-weight:700;font-size:12px;letter-spacing:1px;text-transform:uppercase;text-decoration:none;transition:transform .25s var(--bounce),box-shadow .25s;cursor:pointer;border:none;}
    .btn-apply.primary{background:linear-gradient(135deg,var(--blue-mid),var(--blue-dark));color:var(--white);box-shadow:var(--shadow-blue);}
    .btn-apply.primary:hover{transform:translateY(-2px);box-shadow:0 12px 32px rgba(26,74,171,.4);}
    .btn-apply.secondary{background:var(--white);color:var(--blue);border:1.5px solid rgba(26,74,171,.25);}
    .btn-apply.secondary:hover{background:var(--blue-faint);border-color:var(--blue);}

    /* STEPS SECTION */
    .steps-title{font-family:var(--font-d);font-size:clamp(24px,3vw,36px);font-weight:700;color:var(--blue-dark);margin-bottom:32px;}
    .steps-title em{font-style:italic;color:var(--blue-mid);}
    .steps-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:0;position:relative;margin-bottom:56px;}
    .steps-grid::before{content:'';position:absolute;top:32px;left:calc(12.5% + 16px);right:calc(12.5% + 16px);height:1.5px;background:linear-gradient(90deg,var(--blue),rgba(26,74,171,.2),var(--blue));}
    .step-item{text-align:center;padding:0 16px;}
    .step-num-wrap{width:64px;height:64px;border-radius:50%;border:2px solid rgba(26,74,171,.2);background:var(--white);display:flex;align-items:center;justify-content:center;margin:0 auto 16px;position:relative;z-index:1;box-shadow:var(--shadow-sm);transition:border-color .4s,background .4s,transform .4s var(--bounce);}
    .step-item:hover .step-num-wrap{border-color:var(--blue);background:var(--blue-faint);transform:scale(1.1);}
    .step-num{font-family:var(--font-d);font-size:28px;font-weight:700;color:var(--blue);}
    .step-name{font-family:var(--font-d);font-size:16px;font-weight:600;color:var(--blue-dark);margin-bottom:8px;}
    .step-desc{font-size:12px;color:var(--gray-mid);line-height:1.7;}

    /* WHAT'S INCLUDED */
    .included-wrap{background:var(--blue-faint);border:1.5px solid rgba(26,74,171,.15);border-radius:20px;padding:36px;margin-bottom:56px;}
    .included-title{font-family:var(--font-d);font-size:24px;font-weight:600;color:var(--blue-dark);margin-bottom:24px;}
    .included-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;}
    .inc-item{display:flex;align-items:flex-start;gap:12px;}
    .inc-icon{width:36px;height:36px;min-width:36px;border-radius:10px;background:rgba(26,74,171,.12);display:flex;align-items:center;justify-content:center;}
    .inc-icon svg{color:var(--blue);}
    .inc-name{font-size:13px;font-weight:600;color:var(--blue-dark);margin-bottom:3px;}
    .inc-desc{font-size:11px;color:var(--gray-mid);line-height:1.6;}

    /* FAQ / NOTES */
    .notes-wrap{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;padding:28px 32px;}
    .notes-title{font-family:var(--font-d);font-size:20px;font-weight:600;color:var(--blue-dark);margin-bottom:20px;}
    .note-item{display:flex;align-items:flex-start;gap:12px;margin-bottom:14px;}
    .note-item:last-child{margin-bottom:0;}
    .note-dot{width:6px;height:6px;min-width:6px;border-radius:50%;background:var(--blue);margin-top:6px;}
    .note-text{font-size:13px;color:var(--gray-mid);line-height:1.7;}
    .note-text strong{color:var(--gray-dark);font-weight:600;}

    /* OVERVIEW SECTION */
    .overview-section{margin-bottom:64px;}
    .ov-title{font-family:var(--font-d);font-size:clamp(28px,4vw,42px);font-weight:700;color:var(--blue-dark);margin-bottom:8px;}
    .ov-title em{font-style:italic;color:var(--blue-mid);}
    .ov-sub{font-size:14px;color:var(--gray-mid);margin-bottom:36px;line-height:1.7;}
    .overview-table-wrap{overflow-x:auto;border-radius:16px;border:1.5px solid var(--gray-border);box-shadow:var(--shadow-sm);}
    .overview-table{width:100%;border-collapse:collapse;font-size:13px;}
    .overview-table thead tr{background:linear-gradient(135deg,var(--blue-dark),var(--blue-mid));}
    .overview-table thead th{padding:16px 20px;text-align:left;color:rgba(255,255,255,.9);font-weight:700;font-size:11px;letter-spacing:2px;text-transform:uppercase;}
    .overview-table thead th:last-child{text-align:right;}
    .overview-table tbody tr{border-bottom:1px solid var(--gray-border);transition:background .2s;}
    .overview-table tbody tr:last-child{border-bottom:none;}
    .overview-table tbody tr:hover{background:var(--blue-faint);}
    .overview-table td{padding:14px 20px;vertical-align:middle;}
    .overview-table td:last-child{text-align:right;}
    .ot-flag img {width:22px;height:22px;object-fit:contain;}
    .ot-flag{font-size:22px;margin-right:10px;}
    .ot-country{font-weight:600;color:var(--blue-dark);}
    .ot-type{font-size:11px;color:var(--gray-light);margin-top:2px;}
    .ot-price{font-family:var(--font-d);font-size:22px;font-weight:700;color:var(--blue-dark);}
    .ot-from{font-size:10px;color:var(--gray-light);display:block;text-align:right;}
    .ot-badge{display:inline-block;padding:3px 10px;border-radius:20px;font-size:10px;font-weight:700;letter-spacing:1px;text-transform:uppercase;}
    .ot-badge.popular{background:rgba(26,74,171,.12);color:var(--blue);}
    .ot-badge.standard{background:var(--gray-bg);color:var(--gray-mid);}
    .ot-apply{display:inline-flex;align-items:center;gap:5px;color:var(--blue);font-size:12px;font-weight:600;text-decoration:none;transition:gap .3s;}
    .ot-apply:hover{gap:9px;}

    /* GUARANTEE BAND */
    .guarantee-band{background:linear-gradient(135deg,var(--blue-dark),var(--blue-mid));border-radius:20px;padding:48px;margin-bottom:64px;display:grid;grid-template-columns:1fr auto;gap:40px;align-items:center;position:relative;overflow:hidden;}
    .guarantee-band::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.08) 1px,transparent 0);background-size:24px 24px;}
    .gb-text{position:relative;z-index:2;}
    .gb-lbl{font-size:10px;font-weight:700;letter-spacing:3px;color:rgba(255,255,255,.6);text-transform:uppercase;margin-bottom:10px;}
    .gb-title{font-family:var(--font-d);font-size:clamp(24px,3vw,36px);font-weight:700;color:#fff;line-height:1.1;margin-bottom:12px;}
    .gb-title em{font-style:italic;color:rgba(255,255,255,.8);}
    .gb-desc{font-size:14px;color:rgba(255,255,255,.65);line-height:1.7;}
    .gb-items{display:flex;flex-direction:column;gap:10px;position:relative;z-index:2;}
    .gb-item{display:flex;align-items:center;gap:10px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:10px;padding:12px 18px;white-space:nowrap;}
    .gb-item svg{color:rgba(255,255,255,.8);}
    .gb-item span{font-size:12px;font-weight:600;color:#fff;}

    /* RESPONSIVE */
    @media(max-width:1100px){.pricing-grid{grid-template-columns:1fr 1fr;}.steps-grid{grid-template-columns:1fr 1fr;}.steps-grid::before{display:none;}.included-grid{grid-template-columns:1fr 1fr;}.guarantee-band{grid-template-columns:1fr;}}
    @media(max-width:860px){#navbar{padding:0 20px;}.nav-links{display:none;}.hamburger{display:flex;}.pricing-wrap{padding:40px 20px 80px;}.page-hero{padding:120px 24px 60px;}.country-tabs{padding:0 20px;}.mob-menu{padding:16px 20px 24px;}.pricing-grid{grid-template-columns:1fr;}.overview-table td{padding:12px 14px;}.guarantee-band{padding:32px 28px;}}
    @media(max-width:540px){.included-grid{grid-template-columns:1fr;}.cs-header{flex-direction:column;align-items:flex-start;gap:12px;}.gb-items{flex-direction:row;flex-wrap:wrap;}}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="/" class="nav-logo"><img src="{{asset('logotr.png')}}" alt="SAM Visa Services"/></a>
    <ul class="nav-links">
      <li><a href="/#services">Services</a></li>
      <li><a href="/pricing" class="active">Pricing</a></li>
      <li><a href="/#process">How It Works</a></li>
      <li><a href="/#countries">Apply by Country</a></li>
      
      <li><a href="tel:+4407908268383" style="color:var(--blue);font-weight:600;">📞 +44 07908268383</a></li>
      <li><a href="/#countries" class="nav-cta">Apply Now</a></li>
    </ul>
    <button class="hamburger" onclick="toggleMob()" aria-label="Menu"><span></span><span></span><span></span></button>
  </div>
  <div class="mob-menu" id="mob-menu">
    <a href="/#services">Services</a>
    <a href="/pricing">Pricing</a>
    <a href="/#process">How It Works</a>
    <a href="/#countries">Apply by Countries</a>
    
    <a href="tel:+4407908268383">📞 +44 07908268383</a>
  </div>
</nav>

<!-- PAGE HERO -->
{{-- <section class="page-hero">
  <div class="page-hero-inner">
    <div class="hero-badge"><span class="badge-dot"></span>Transparent Pricing · No Hidden Fees</div>
    <h1 class="hero-title">Simple, Clear<br/><em>Visa Pricing</em></h1>
    <p class="hero-sub">All fees explained upfront. Choose your destination and see exactly what's included — from document preparation to embassy submission.</p>
    <div class="hero-trust">
      <div class="trust-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>No hidden charges</div>
      <div class="trust-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Pay only when ready</div>
      <div class="trust-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Free consultation first</div>
      <div class="trust-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>98% success rate</div>
    </div>
  </div>
</section> --}}
<section class="page-hero">

  <!-- BACKGROUND SLIDER -->
  <div class="hero-bg-slider">
    <div class="hero-slide"></div>
    <div class="hero-slide"></div>
    <div class="hero-slide"></div>
    <div class="hero-slide"></div>
  </div>

  <div class="page-hero-inner">
    <div class="hero-badge">
      <span class="badge-dot"></span>
      Transparent Pricing · No Hidden Fees
    </div>

    <h1 class="hero-title">
      Simple, Clear<br/><em>Visa Pricing</em>
    </h1>

    <p class="hero-sub">
      All fees explained upfront. Choose your destination and see exactly what's included — from document preparation to embassy submission.
    </p>

    <div class="hero-trust">
      <div class="trust-item">✔ No hidden charges</div>
      <div class="trust-item">✔ Pay only when ready</div>
      <div class="trust-item">✔ Free consultation first</div>
      <div class="trust-item">✔ 98% success rate</div>
    </div>
  </div>

</section>

<!-- COUNTRY TABS -->
<div class="country-tabs-wrap">
  <div class="country-tabs">
    <button class="ctab active"
     onclick="showCountry('overview')" 
     id="tab-overview"><span>🌍</span>All Countries</button>
    <button class="ctab" 
    {{-- onclick="showCountry('china')"  --}}
    id="tab-china">
      <span class="ctab-flag">
        <img src="{{asset('chinaflag.webp')}}" alt="">
      </span>China</button>
    <button class="ctab" 
    {{-- onclick="showCountry('europe')"  --}}
    id="tab-europe">
      <span class="ctab-flag">
        <img src="{{asset('europeflag.avif')}}" alt="">
      </span>
      Europe</button>
    <button class="ctab"
     {{-- onclick="showCountry('ireland')"  --}}
     id="tab-ireland">
      <span class="ctab-flag">
        <img src="{{asset('irelandflag.png')}}" alt="">
      </span>Ireland</button>
    <button class="ctab"
     {{-- onclick="showCountry('morocco')" --}}
      id="tab-morocco">
      <span class="ctab-flag">
        <img src="{{asset('moroccoflag.jpg')}}" alt="">
      </span>
      Morocco</button>
    <button class="ctab" 
    {{-- onclick="showCountry('turkey')"  --}}
    id="tab-turkey">
      <span class="ctab-flag">
        <img src="{{asset('turkeyflag.svg')}}" alt="">
      </span>Turkey</button>
    <button class="ctab" 
    {{-- onclick="showCountry('dubai')"  --}}
    id="tab-dubai">
      <span class="ctab-flag">
        <img src="{{asset('dubaiflag.svg')}}" alt="">
      </span>UAE / Dubai</button>
  </div>
</div>

<div class="pricing-wrap">

  <!-- ═══════════════════════════════
       OVERVIEW — ALL COUNTRIES
  ════════════════════════════════ -->
  <div class="country-section active" id="section-overview">

    <div class="overview-section">
      <h2 class="ov-title">All Destination <em>Pricing</em></h2>
      <p class="ov-sub">We currently process visit visas for 6 destinations. Click a country to see full pricing tiers, what's included, and how the process works.</p>

      <div class="overview-table-wrap">
        <table class="overview-table">
          <thead>
            <tr>
              <th>Destination</th>
              <th>Visa Type</th>
              <th>Processing</th>
              <th>Our Service Fee</th>
              <th>EMBASSY Fee</th>
              <th>Appointment Fee</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="ot-flag">
                <img src="{{asset('chinaflag.webp')}}" alt="">
              </span><span class="ot-country">China</span><div class="ot-type">Visit Visa</div></td>
              <td><span class="ot-badge popular">Tourist</span></td>
              <td style="color:var(--gray-mid)">10–15 working days</td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£85</span></td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£150</span></td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">-</span></td>
              {{-- <td><a href="#" onclick="showCountry('china');return false;" class="ot-apply">View →</a></td> --}}
            </tr>
            <tr>
              <td>
              <span class="ot-flag">
                <img src="{{asset('europeflag.avif')}}" alt="">  
              </span><span class="ot-country">Europe (Schengen)</span><div class="ot-type">Schengen Visit Visa</div></td>
              <td><span class="ot-badge popular
                {{-- standard --}}
                ">Tourist</span></td>
              <td style="color:var(--gray-mid)">15–20 working days</td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£85</span></td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£96</span></td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£48</span></td>
              {{-- <td><a href="#" onclick="showCountry('europe');return false;" class="ot-apply">View →</a></td> --}}
            </tr>
            <tr>
              <td><span class="ot-flag">
                  <img src="{{asset('irelandflag.png')}}" alt="">  
              </span><span class="ot-country">Ireland</span><div class="ot-type">Irish Visit Visa</div></td>
              <td><span class="ot-badge popular
                {{-- standard --}}
                ">Tourist</span></td>
              <td style="color:var(--gray-mid)">1 month</td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£85</span></td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£96</span></td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">-</span></td>
              {{-- <td><a href="#" onclick="showCountry('ireland');return false;" class="ot-apply">View →</a></td> --}}
            </tr>
            <tr>
              <td><span class="ot-flag">
                <img src="{{asset('moroccoflag.jpg')}}" alt=""> 
              </span><span class="ot-country">Morocco</span><div class="ot-type">Visit Visa</div></td>
              <td><span class="ot-badge popular
                {{-- standard --}}
                ">Tourist</span></td>
              <td style="color:var(--gray-mid)">5–8 working days</td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£85</span></td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£96</span></td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">-</span></td>
              {{-- <td><a href="#" onclick="showCountry('morocco');return false;" class="ot-apply">View →</a></td> --}}
            </tr>
            <tr>
              <td><span class="ot-flag">
                  <img src="{{asset('turkeyflag.svg')}}" alt="">
              </span><span class="ot-country">Turkey</span><div class="ot-type">Tourist Visa / eVisa</div></td>
              <td><span class="ot-badge popular">Tourist</span></td>
              <td style="color:var(--gray-mid)">1 month</td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£85</span></td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£150</span></td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">-</span></td>
              {{-- <td><a href="#" onclick="showCountry('turkey');return false;" class="ot-apply">View →</a></td> --}}
            </tr>
            <tr>
              <td><span class="ot-flag">
                <img src="{{asset('dubaiflag.svg')}}" alt="">
              </span><span class="ot-country">UAE / Dubai</span><div class="ot-type">Tourist Visa</div></td>
              <td><span class="ot-badge popular">Tourist</span></td>
              <td style="color:var(--gray-mid)">10 days</td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£40</span></td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">£120</span></td>
              <td>
                {{-- <span class="ot-from">from</span> --}}
                <span class="ot-price">-</span></td>
              {{-- <td><a href="#" onclick="showCountry('dubai');return false;" class="ot-apply">View →</a></td> --}}
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- GUARANTEE BAND -->
    <div class="guarantee-band">
      <div class="gb-text">
        <p class="gb-lbl">Our Promise</p>
        <h2 class="gb-title">No Surprises,<br/><em>No Hidden Fees</em></h2>
        <p class="gb-desc">Every price shown is our service fee. Embassy fees are always listed separately and paid directly. We never add undisclosed charges — what you see is what you pay.</p>
      </div>
      <div class="gb-items">
        {{-- <div class="gb-item"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg><span>Free consultation</span></div> --}}
        <div class="gb-item"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg><span>Full fee breakdown</span></div>
        {{-- <div class="gb-item"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg><span>No pay until ready</span></div> --}}
        <div class="gb-item"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg><span>98% success rate</span></div>
      </div>
    </div>

    <!-- HOW PRICING WORKS - overview -->
    <h2 class="steps-title">How Our <em>Pricing Works</em></h2>
    <div class="steps-grid">
      <div class="step-item">
        <div class="step-num-wrap"><span class="step-num">1</span></div>
        <p class="step-name">Apply Free</p>
        <p class="step-desc">Submit your application form at no cost. Our team reviews your case and contacts you within 24 hours.</p>
      </div>
      <div class="step-item">
        <div class="step-num-wrap"><span class="step-num">2</span></div>
        <p class="step-name">Get a Quote</p>
        <p class="step-desc">We provide a full, itemised fee breakdown — our service fee plus any embassy fees — with zero obligation.</p>
      </div>
      <div class="step-item">
        <div class="step-num-wrap"><span class="step-num">3</span></div>
        <p class="step-name">Pay to Proceed</p>
        <p class="step-desc">Only pay when you're happy to proceed. Service fee is collected; embassy fees paid direct to the embassy.</p>
      </div>
      <div class="step-item">
        <div class="step-num-wrap"><span class="step-num">4</span></div>
        <p class="step-name">Visa Approved</p>
        <p class="step-desc">We submit, track, and deliver your visa. Updates at every stage via WhatsApp or email.</p>
      </div>
    </div>

  </div><!-- /overview -->


  <!-- ═══════════════════════════════
       CHINA
  ════════════════════════════════ -->
  <div class="country-section" id="section-china">
    <div class="cs-header">
      <div class="cs-flag">
        <img src="{{asset('chinaflag.webp')}}" alt="">
      </div>
      <div class="cs-info">
        <p class="cs-lbl">Visit Visa · People's Republic of China</p>
        <h2 class="cs-title">China <em>Visa Pricing</em></h2>
        <p class="cs-sub">10-step application process. Travel dates must be within 90 days. Fingerprinting required at the Chinese Visa Application Service Centre.</p>
      </div>
    </div>

    <div class="pricing-grid">
      <div class="price-card">
        <div class="pc-head">
          <p class="pc-type">Standard</p>
          <p class="pc-name">Single Entry</p>
          <div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">99</span></div>
          <p class="pc-period">SAM service fee / person</p>
          <p class="pc-desc">Plus embassy fee ~£40. Standard processing 10–15 working days.</p>
        </div>
        <div class="pc-divider"></div>
        <div class="pc-features">
          <ul>
            <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Full application preparation</li>
            <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Document checklist &amp; guidance</li>
            <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Embassy submission support</li>
            <li><div class="feat-x"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>Priority processing</li>
            <li><div class="feat-x"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>Multiple entries</li>
          </ul>
        </div>
        {{-- <div class="pc-cta"><a href="visa-china.html" class="btn-apply secondary">Apply — Single Entry</a></div> --}}
      </div>

      <div class="price-card featured">
        <span class="popular-badge">Most Popular</span>
        <div class="pc-head">
          <p class="pc-type">Standard</p>
          <p class="pc-name">Double Entry</p>
          <div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">119</span></div>
          <p class="pc-period">SAM service fee / person</p>
          <p class="pc-desc">Plus embassy fee ~£65. Enter China twice within the visa validity period.</p>
        </div>
        <div class="pc-divider"></div>
        <div class="pc-features">
          <ul>
            <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Full application preparation</li>
            <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Document checklist &amp; guidance</li>
            <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Embassy submission support</li>
            <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Two entries permitted</li>
            <li><div class="feat-x"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>Priority processing</li>
          </ul>
        </div>
        {{-- <div class="pc-cta"><a href="visa-china.html" class="btn-apply primary">Apply — Double Entry</a></div> --}}
      </div>

      <div class="price-card">
        <div class="pc-head">
          <p class="pc-type">Express</p>
          <p class="pc-name">Priority Service</p>
          <div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">149</span></div>
          <p class="pc-period">SAM service fee / person</p>
          <p class="pc-desc">Plus embassy fee. Expedited handling — suitable for urgent travel needs.</p>
        </div>
        <div class="pc-divider"></div>
        <div class="pc-features">
          <ul>
            <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Full application preparation</li>
            <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Document checklist &amp; guidance</li>
            <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Priority processing queue</li>
            <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Dedicated agent assigned</li>
            <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>WhatsApp daily updates</li>
          </ul>
        </div>
        {{-- <div class="pc-cta"><a href="visa-china.html" class="btn-apply secondary">Apply — Express</a></div> --}}
      </div>
    </div>

    <h2 class="steps-title">How the <em>China Visa</em> Process Works</h2>
    <div class="steps-grid">
      <div class="step-item">
        <div class="step-num-wrap"><span class="step-num">1</span></div>
        <p class="step-name">Submit Form</p>
        <p class="step-desc">Complete the 10-step online form with personal, employment, family and travel information.</p>
      </div>
      <div class="step-item">
        <div class="step-num-wrap"><span class="step-num">2</span></div>
        <p class="step-name">Document Review</p>
        <p class="step-desc">We review your documents, prepare the official visa application form and advise on any gaps.</p>
      </div>
      <div class="step-item">
        <div class="step-num-wrap"><span class="step-num">3</span></div>
        <p class="step-name">CVASC Appointment</p>
        <p class="step-desc">We book your appointment at the Chinese Visa Application Service Centre for biometrics &amp; fingerprinting.</p>
      </div>
      <div class="step-item">
        <div class="step-num-wrap"><span class="step-num">4</span></div>
        <p class="step-name">Visa Delivered</p>
        <p class="step-desc">Passport returned with your China visa. We update you at every stage via WhatsApp.</p>
      </div>
    </div>

    <div class="included-wrap">
      <p class="included-title">What's Included in Our China Service Fee</p>
      <div class="included-grid">
        <div class="inc-item"><div class="inc-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><div><p class="inc-name">Form Preparation</p><p class="inc-desc">Complete DS-160 equivalent form filled on your behalf</p></div></div>
        <div class="inc-item"><div class="inc-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><p class="inc-name">Document Checklist</p><p class="inc-desc">Personalised list of everything the embassy requires</p></div></div>
        <div class="inc-item"><div class="inc-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07"/></svg></div><div><p class="inc-name">24/7 WhatsApp Support</p><p class="inc-desc">Direct line to your agent throughout the process</p></div></div>
        <div class="inc-item"><div class="inc-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><p class="inc-name">CVASC Booking</p><p class="inc-desc">We secure your biometric appointment at the centre</p></div></div>
        <div class="inc-item"><div class="inc-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><p class="inc-name">Application Tracking</p><p class="inc-desc">Real-time updates from submission to collection</p></div></div>
        <div class="inc-item"><div class="inc-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div><div><p class="inc-name">Quality Check</p><p class="inc-desc">Final review before submission to maximise approval chances</p></div></div>
      </div>
    </div>

    <div class="notes-wrap">
      <p class="notes-title">📋 Important China Visa Notes</p>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Travel dates must be within 90 days</strong> of your application date — the Chinese embassy will not accept applications for travel further than 3 months away.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Embassy fee is separate</strong> and paid at the CVASC on the day of your appointment. Single entry ~£40, double entry ~£65.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>UK/EU passport holders</strong> may not need all mandatory documents initially, but the embassy may request them at a later stage. Other nationalities must submit the full set.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Fingerprinting is compulsory</strong> for most nationalities and must be done in person at the CVASC in London or another UK centre.</p></div>
    </div>
  </div>


  <!-- ═══════════════════════════════
       EUROPE
  ════════════════════════════════ -->
  <div class="country-section" id="section-europe">
    <div class="cs-header">
      <div class="cs-flag">
        <img src="{{asset('europeflag.avif')}}" alt="">
      </div>
      <div class="cs-info">
        <p class="cs-lbl">Schengen Visit Visa · 27 European Countries</p>
        <h2 class="cs-title">Europe (Schengen) <em>Visa Pricing</em></h2>
        <p class="cs-sub">One Schengen visa covers 27 countries. Biometric appointment required. UK eVisa sharecode mandatory for non-British applicants.</p>
      </div>
    </div>
    <div class="pricing-grid">
      <div class="price-card">
        <div class="pc-head"><p class="pc-type">Standard</p><p class="pc-name">Single Entry</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">89</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Plus embassy fee ~£80. Processing 15–20 working days.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Application form preparation</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Document checklist</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Sharecode verification guidance</li>
          <li><div class="feat-x"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>Multiple entry</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-europe.html" class="btn-apply secondary">Apply — Single Entry</a></div> --}}
      </div>
      <div class="price-card featured">
        <span class="popular-badge">Recommended</span>
        <div class="pc-head"><p class="pc-type">Standard</p><p class="pc-name">Multiple Entry</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">109</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Plus embassy fee ~£80. Enter Schengen zone multiple times.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Application form preparation</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Document checklist</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Unlimited re-entry within validity</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Covers 27 Schengen countries</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-europe.html" class="btn-apply primary">Apply — Multiple Entry</a></div> --}}
      </div>
      <div class="price-card">
        <div class="pc-head"><p class="pc-type">Express</p><p class="pc-name">Priority Service</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">139</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Urgent processing. Dedicated agent for faster turnaround.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>All standard inclusions</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Priority appointment booking</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Dedicated agent</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Daily WhatsApp updates</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-europe.html" class="btn-apply secondary">Apply — Express</a></div> --}}
      </div>
    </div>
    <h2 class="steps-title">How the <em>Schengen Visa</em> Process Works</h2>
    <div class="steps-grid">
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">1</span></div><p class="step-name">Submit Form</p><p class="step-desc">Complete the Schengen application form with personal, employment and travel details plus your UK sharecode.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">2</span></div><p class="step-name">Document Prep</p><p class="step-desc">We prepare your cover letter, accommodation proof, travel insurance and complete document pack.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">3</span></div><p class="step-name">Embassy Appointment</p><p class="step-desc">We book your biometric appointment at the relevant Schengen embassy or VFS Global centre.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">4</span></div><p class="step-name">Visa Issued</p><p class="step-desc">Passport returned with your Schengen sticker. Valid for all 27 member states.</p></div>
    </div>
    <div class="notes-wrap">
      <p class="notes-title">📋 Important Schengen Visa Notes</p>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>UK eVisa sharecode (starting with S)</strong> is mandatory for non-British nationals. Find yours at gov.uk/view-prove-immigration-status.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Embassy fee ~£80</strong> is paid separately at the embassy or VFS centre on the day of your appointment.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>EU citizen relatives</strong> may qualify for a free family reunification visa. Let us know if this applies to you.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Travel insurance</strong> covering €30,000 is a mandatory Schengen requirement — we can advise on suitable policies.</p></div>
    </div>
  </div>


  <!-- ═══════════════════════════════
       IRELAND
  ════════════════════════════════ -->
  <div class="country-section" id="section-ireland">
    <div class="cs-header">
      <div class="cs-flag">
        <img src="{{asset('irelandflag.png')}}" alt="">
      </div>
      <div class="cs-info">
        <p class="cs-lbl">Irish Visit Visa · Republic of Ireland</p>
        <h2 class="cs-title">Ireland <em>Visa Pricing</em></h2>
        <p class="cs-sub">Online application via the AVATS system. UK eVisa sharecode required. Spouse and children's passports needed if applicable.</p>
      </div>
    </div>
    <div class="pricing-grid">
      <div class="price-card">
        <div class="pc-head"><p class="pc-type">Standard</p><p class="pc-name">Single Entry</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">79</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Plus Irish embassy fee ~€60. Processing 8–12 working days.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>AVATS application setup</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Document preparation</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Sharecode verification</li>
          <li><div class="feat-x"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>Multiple entry</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-ireland.html" class="btn-apply secondary">Apply — Single Entry</a></div> --}}
      </div>
      <div class="price-card featured">
        <span class="popular-badge">Best Value</span>
        <div class="pc-head"><p class="pc-type">Standard</p><p class="pc-name">Multiple Entry</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">99</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Plus Irish embassy fee ~€100. Multiple visits within validity.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>AVATS application setup</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Document preparation</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Spouse &amp; children docs managed</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Unlimited re-entries</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-ireland.html" class="btn-apply primary">Apply — Multiple Entry</a></div> --}}
      </div>
      <div class="price-card">
        <div class="pc-head"><p class="pc-type">Family</p><p class="pc-name">Family Group</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">199</span></div><p class="pc-period">SAM service fee / family</p><p class="pc-desc">Up to 4 family members. Individual embassy fees still apply per person.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Up to 4 applications</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Spouse &amp; children included</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Coordinated submission</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Priority family handling</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-ireland.html" class="btn-apply secondary">Apply — Family</a></div> --}}
      </div>
    </div>
    <h2 class="steps-title">How the <em>Ireland Visa</em> Process Works</h2>
    <div class="steps-grid">
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">1</span></div><p class="step-name">Online Application</p><p class="step-desc">We complete your AVATS online application on your behalf using your form details.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">2</span></div><p class="step-name">Document Pack</p><p class="step-desc">We assemble your full document pack — passport, sharecode, employment letters, financial evidence.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">3</span></div><p class="step-name">Embassy Submission</p><p class="step-desc">Application and documents submitted to the Irish Visa Office. We track progress throughout.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">4</span></div><p class="step-name">Decision Issued</p><p class="step-desc">Visa decision notified. If approved, passport returned with Irish visa stamp. If refused, we advise on appeals.</p></div>
    </div>
    <div class="notes-wrap">
      <p class="notes-title">📋 Important Ireland Visa Notes</p>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>UK eVisa sharecode (starting with S)</strong> is mandatory. British and Irish passport holders are exempt.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>If married, spouse's passport copy is required</strong> and must be submitted with your application.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Children's passports</strong> must be included in the application if your children hold their own passports.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Previous Irish visas</strong> — provide dates of any prior applications or refusals, as these must be declared.</p></div>
    </div>
  </div>


  <!-- ═══════════════════════════════
       MOROCCO
  ════════════════════════════════ -->
  <div class="country-section" id="section-morocco">
    <div class="cs-header">
      <div class="cs-flag">
        <img src="{{asset('moroccoflag.jpg')}}" alt="">
      </div>
      <div class="cs-info">
        <p class="cs-lbl">Visit Visa · Kingdom of Morocco</p>
        <h2 class="cs-title">Morocco <em>Visa Pricing</em></h2>
        <p class="cs-sub">Passport scan, passport photo and UK visa copy are all mandatory. Parents' full names required by the Moroccan embassy.</p>
      </div>
    </div>
    <div class="pricing-grid">
      <div class="price-card">
        <div class="pc-head"><p class="pc-type">Standard</p><p class="pc-name">Tourist Visa</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">69</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Plus Moroccan embassy fee ~£30. Processing 5–8 working days.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Application preparation</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Document checklist</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>UK visa copy guidance</li>
          <li><div class="feat-x"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>Express processing</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-morocco.html" class="btn-apply secondary">Apply — Tourist</a></div> --}}
      </div>
      <div class="price-card featured">
        <span class="popular-badge">Most Popular</span>
        <div class="pc-head"><p class="pc-type">Standard</p><p class="pc-name">Extended Stay</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">85</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Plus embassy fee. Up to 3 months stay. Ideal for longer visits.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Application preparation</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Up to 90 days validity</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Multiple entries possible</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>WhatsApp support</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-morocco.html" class="btn-apply primary">Apply — Extended</a></div> --}}
      </div>
      <div class="price-card">
        <div class="pc-head"><p class="pc-type">Express</p><p class="pc-name">Priority Service</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">110</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Urgent cases only. Fast-tracked handling by dedicated agent.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>All standard inclusions</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Same-day document review</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Dedicated agent</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Daily updates</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-morocco.html" class="btn-apply secondary">Apply — Express</a></div> --}}
      </div>
    </div>
    <h2 class="steps-title">How the <em>Morocco Visa</em> Process Works</h2>
    <div class="steps-grid">
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">1</span></div><p class="step-name">Submit Form</p><p class="step-desc">Complete the form with personal details, parents' names, occupation and travel dates.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">2</span></div><p class="step-name">Upload 3 Docs</p><p class="step-desc">Attach your passport scan, passport size photo and UK visa/BRP copy — all three are mandatory.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">3</span></div><p class="step-name">Embassy Submission</p><p class="step-desc">We prepare and submit your complete application to the Moroccan embassy in London.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">4</span></div><p class="step-name">Visa Stamped</p><p class="step-desc">Passport returned with your Morocco visa. Typical turnaround 5–8 working days.</p></div>
    </div>
    <div class="notes-wrap">
      <p class="notes-title">📋 Important Morocco Visa Notes</p>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Three documents are mandatory:</strong> passport scan, passport-size photo (white background) and UK visa/BRP copy. Missing any one will delay your application.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Parents' full names</strong> (father and mother, including mother's maiden name) are required by the Moroccan embassy.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>UK eVisa sharecode</strong> is required to verify your UK immigration status. Not needed for British passport holders.</p></div>
    </div>
  </div>


  <!-- ═══════════════════════════════
       TURKEY
  ════════════════════════════════ -->
  <div class="country-section" id="section-turkey">
    <div class="cs-header">
      <div class="cs-flag">
        <img src="{{asset('turkeyflag.svg')}}" alt="">
      </div>
      <div class="cs-info">
        <p class="cs-lbl">Tourist Visa / eVisa · Republic of Turkey</p>
        <h2 class="cs-title">Turkey <em>Visa Pricing</em></h2>
        <p class="cs-sub">Turkey offers eVisa for many nationalities. Passport, photo and UK visa copy are mandatory. Processing is among the fastest of all destinations.</p>
      </div>
    </div>
    <div class="pricing-grid">
      <div class="price-card">
        <div class="pc-head"><p class="pc-type">Standard</p><p class="pc-name">eVisa / Tourist</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">59</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Plus Turkey eVisa fee ~£20–40. Processing 3–5 working days.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>eVisa application setup</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Document preparation</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>30-day stay</li>
          <li><div class="feat-x"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>Multiple entries</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-turkey.html" class="btn-apply secondary">Apply — Standard</a></div> --}}
      </div>
      <div class="price-card featured">
        <span class="popular-badge">Best Value</span>
        <div class="pc-head"><p class="pc-type">Standard</p><p class="pc-name">90-Day Multi-Entry</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">79</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Plus eVisa fee. Up to 90 days stay, multiple entries permitted.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>eVisa application setup</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Up to 90 days stay</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Multiple entries</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Best for frequent travellers</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-turkey.html" class="btn-apply primary">Apply — 90 Day</a></div> --}}
      </div>
      <div class="price-card">
        <div class="pc-head"><p class="pc-type">Same Day</p><p class="pc-name">Urgent Service</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">99</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Urgent last-minute travel. Same-day processing where possible.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>All standard inclusions</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Same-day eVisa where eligible</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Priority queue</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>WhatsApp confirmation</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-turkey.html" class="btn-apply secondary">Apply — Urgent</a></div> --}}
      </div>
    </div>
    <h2 class="steps-title">How the <em>Turkey Visa</em> Process Works</h2>
    <div class="steps-grid">
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">1</span></div><p class="step-name">Submit Form</p><p class="step-desc">Fill in your personal info, parents' names, occupation and travel dates.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">2</span></div><p class="step-name">Upload 3 Docs</p><p class="step-desc">Passport scan, passport photo and UK visa copy are all required. We guide you through each one.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">3</span></div><p class="step-name">eVisa Applied</p><p class="step-desc">We complete your Turkish eVisa application through the official government portal on your behalf.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">4</span></div><p class="step-name">eVisa Issued</p><p class="step-desc">Your eVisa is emailed directly. Print or show on phone at the border — no passport stamp needed.</p></div>
    </div>
    <div class="notes-wrap">
      <p class="notes-title">📋 Important Turkey Visa Notes</p>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Three mandatory documents:</strong> passport scan, passport-size photo and UK visa/BRP copy. All three must be submitted.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Parents' full names</strong> are required by the Turkish embassy. Both mother and father names must be provided.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>eVisa eligible nationalities</strong> — most non-EU nationalities residing in the UK qualify. We confirm eligibility after reviewing your application.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>UK eVisa sharecode</strong> required for non-British applicants. Find yours at gov.uk/view-prove-immigration-status.</p></div>
    </div>
  </div>


  <!-- ═══════════════════════════════
       UAE / DUBAI
  ════════════════════════════════ -->
  <div class="country-section" id="section-dubai">
    <div class="cs-header">
      <div class="cs-flag">
        <img src="{{asset('dubaiflag.svg')}}" alt="">
      </div>
      <div class="cs-info">
        <p class="cs-lbl">Tourist Visa · United Arab Emirates</p>
        <h2 class="cs-title">UAE / Dubai <em>Visa Pricing</em></h2>
        <p class="cs-sub">Passport, photo and UK visa copy are mandatory. Parents' names required. Fast processing — one of the quickest destinations we service.</p>
      </div>
    </div>
    <div class="pricing-grid">
      <div class="price-card">
        <div class="pc-head"><p class="pc-type">Standard</p><p class="pc-name">30-Day Tourist</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">69</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Plus UAE visa fee ~£60. Processing 3–5 working days.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Full application preparation</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>30 days stay</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Single entry</li>
          <li><div class="feat-x"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>Extension or renewal</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-dubai.html" class="btn-apply secondary">Apply — 30 Days</a></div> --}}
      </div>
      <div class="price-card featured">
        <span class="popular-badge">Most Popular</span>
        <div class="pc-head"><p class="pc-type">Standard</p><p class="pc-name">60-Day Tourist</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">89</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Plus UAE visa fee ~£90. Stay up to 60 days. Extendable once.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Full application preparation</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>60 days stay</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Extendable in UAE</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Best for longer holidays</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-dubai.html" class="btn-apply primary">Apply — 60 Days</a></div> --}}
      </div>
      <div class="price-card">
        <div class="pc-head"><p class="pc-type">Express</p><p class="pc-name">Urgent 48hr</p><div class="pc-price"><span class="pc-currency">£</span><span class="pc-amount">119</span></div><p class="pc-period">SAM service fee / person</p><p class="pc-desc">Urgent travel. Priority processing — typically 48 hours or less.</p></div>
        <div class="pc-divider"></div>
        <div class="pc-features"><ul>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>All standard inclusions</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>48-hour target turnaround</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>Dedicated agent</li>
          <li><div class="feat-check"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>WhatsApp hourly updates</li>
        </ul></div>
        {{-- <div class="pc-cta"><a href="visa-dubai.html" class="btn-apply secondary">Apply — Urgent</a></div> --}}
      </div>
    </div>
    <h2 class="steps-title">How the <em>UAE Visa</em> Process Works</h2>
    <div class="steps-grid">
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">1</span></div><p class="step-name">Submit Form</p><p class="step-desc">Provide personal details, parents' names, occupation, UK sharecode and travel dates.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">2</span></div><p class="step-name">Upload 3 Docs</p><p class="step-desc">Passport scan, passport photo and UK visa copy — all three are mandatory for UAE.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">3</span></div><p class="step-name">Visa Applied</p><p class="step-desc">We submit your application through the UAE immigration portal and an approved airline sponsor.</p></div>
      <div class="step-item"><div class="step-num-wrap"><span class="step-num">4</span></div><p class="step-name">eVisa Emailed</p><p class="step-desc">Your UAE visa is emailed as a PDF. Print and present on arrival at Dubai International Airport.</p></div>
    </div>
    <div class="notes-wrap">
      <p class="notes-title">📋 Important UAE Visa Notes</p>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Three mandatory documents:</strong> passport scan, passport-size photo and UK visa/BRP copy are all required without exception.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>Parents' full names</strong> are required by the UAE immigration authorities as part of the application.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>UK eVisa sharecode</strong> required for non-British applicants. Verifies your UK residency status with UAE immigration.</p></div>
      <div class="note-item"><div class="note-dot"></div><p class="note-text"><strong>UAE visa fees</strong> are paid separately through the UAE portal — ~£60 for 30 days, ~£90 for 60 days. These are not included in our service fee.</p></div>
    </div>
  </div>

</div><!-- /pricing-wrap -->

<!-- FOOTER -->
<footer style="background:var(--blue-dark);padding:40px 48px 28px;">
  <div style="max-width:1280px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;">
    <img src="{{asset('logotr.png')}}" alt="SAM Visa Services" style="height:44px;filter:brightness(0) invert(1);opacity:.7;"/>
    <p style="font-size:12px;color:rgba(255,255,255,.3);">© 2025 SAM Visa Services · London UK · ICO Registered</p>
    <div style="display:flex;gap:20px;">
      <a href="/" style="font-size:12px;color:rgba(255,255,255,.3);text-decoration:none;">Home</a>
      <a href="/#countries" style="font-size:12px;color:rgba(255,255,255,.3);text-decoration:none;">Apply</a>
      <a href="tel:+4407908268383" style="font-size:12px;color:rgba(255,255,255,.3);text-decoration:none;">Contact</a>
    </div>
  </div>
</footer>

<script>
function showCountry(id) {
  document.querySelectorAll('.country-section').forEach(s => s.classList.remove('active'));
  document.querySelectorAll('.ctab').forEach(t => t.classList.remove('active'));
  document.getElementById('section-' + id)?.classList.add('active');
  document.getElementById('tab-' + id)?.classList.add('active');
  window.scrollTo({top: document.querySelector('.country-tabs-wrap').offsetTop - 82, behavior: 'smooth'});
}
window.addEventListener('scroll', () => {
  document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 60);
}, {passive: true});
function toggleMob() {
  document.getElementById('mob-menu').classList.toggle('open');
}

// Check URL hash for direct country links
const hash = window.location.hash;
if (hash) {
  const map = {'#china':'china','#europe':'europe','#ireland':'ireland','#morocco':'morocco','#turkey':'turkey','#dubai':'dubai'};
  if (map[hash]) showCountry(map[hash]);
}
</script>
</body>
</html>