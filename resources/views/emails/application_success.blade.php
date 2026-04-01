<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Application Submitted Successfully</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
  body {
    font-family: 'Jost', sans-serif;
    background: #edf1f8;
    padding: 40px 16px;
    -webkit-font-smoothing: antialiased;
  }
  .shell {
    max-width: 600px;
    margin: 0 auto;
  }

  /* ── TOP LOGO BAR ── */
  .topbar {
    text-align: center;
    padding-bottom: 28px;
  }
  .topbar img {
    height: 48px;
    object-fit: contain;
  }
  .topbar-brand {
    font-family: 'Cormorant Garamond', serif;
    font-size: 28px;
    font-weight: 700;
    color: #0f2f7a;
    letter-spacing: 1px;
  }

  /* ── HERO BANNER ── */
  .hero {
    background: linear-gradient(135deg, #1a4aab 0%, #0f2f7a 50%, #1e5bc6 100%);
    border-radius: 20px 20px 0 0;
    padding: 52px 48px 44px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.07) 1px, transparent 0);
    background-size: 28px 28px;
  }
  .hero::after {
    content: '';
    position: absolute;
    top: -80px; right: -80px;
    width: 260px; height: 260px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255,255,255,0.08), transparent 70%);
  }
  .check-wrap {
    position: relative;
    z-index: 2;
    width: 80px; height: 80px;
    border-radius: 50%;
    background: rgba(255,255,255,0.15);
    border: 2px solid rgba(255,255,255,0.3);
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 24px;
  }
  .check-wrap svg { color: #fff; }
  .hero-badge {
    position: relative;
    z-index: 2;
    display: inline-block;
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.25);
    border-radius: 40px;
    padding: 5px 16px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 3px;
    color: rgba(255,255,255,0.8);
    text-transform: uppercase;
    margin-bottom: 16px;
  }
  .hero h1 {
    position: relative;
    z-index: 2;
    font-family: 'Cormorant Garamond', serif;
    font-size: 36px;
    font-weight: 700;
    color: #fff;
    line-height: 1.15;
    margin-bottom: 10px;
  }
  .hero h1 em { font-style: italic; color: rgba(255,255,255,0.75); display: block; font-size: 28px; }
  .hero p {
    position: relative;
    z-index: 2;
    font-size: 13px;
    color: rgba(255,255,255,0.65);
    font-weight: 300;
    letter-spacing: 0.3px;
  }

  /* ── CARD BODY ── */
  .card {
    background: #fff;
    border-radius: 0 0 20px 20px;
    padding: 48px 48px 40px;
    box-shadow: 0 20px 60px rgba(26,74,171,0.14);
  }

  /* Greeting */
  .greeting {
    font-family: 'Cormorant Garamond', serif;
    font-size: 24px;
    font-weight: 600;
    color: #0f2f7a;
    margin-bottom: 12px;
  }
  .intro {
    font-size: 13px;
    color: #5a6a7a;
    line-height: 1.85;
    margin-bottom: 36px;
  }

  /* Detail block */
  .detail-block {
    background: linear-gradient(135deg, #f0f5ff, #e8f0fb);
    border: 1.5px solid rgba(26,74,171,0.15);
    border-radius: 14px;
    padding: 28px 30px;
    margin-bottom: 32px;
  }
  .detail-block-label {
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #1a4aab;
    margin-bottom: 18px;
  }
  .detail-row {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 0;
    border-bottom: 1px solid rgba(26,74,171,0.1);
  }
  .detail-row:last-child { border-bottom: none; padding-bottom: 0; }
  .detail-row:first-of-type { padding-top: 0; }
  .detail-icon {
    width: 34px; height: 34px;
    border-radius: 9px;
    background: rgba(26,74,171,0.1);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .detail-icon svg { color: #1a4aab; }
  .detail-key {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #8a9aaa;
    text-transform: uppercase;
    margin-bottom: 2px;
  }
  .detail-val {
    font-size: 14px;
    font-weight: 600;
    color: #0f2f7a;
  }

  /* Steps */
  .steps-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 20px;
    font-weight: 600;
    color: #0f2f7a;
    margin-bottom: 18px;
  }
  .step-list { list-style: none; display: flex; flex-direction: column; gap: 12px; margin-bottom: 36px; }
  .step-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 14px 18px;
    border-radius: 10px;
    border: 1px solid #d4dce6;
    background: #fafbfd;
    font-size: 12.5px;
    color: #5a6a7a;
    line-height: 1.6;
  }
  .step-num {
    width: 24px; height: 24px;
    border-radius: 50%;
    background: linear-gradient(135deg, #1e5bc6, #0f2f7a);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    margin-top: 1px;
  }

  /* CTA */
  .cta-wrap { text-align: center; margin-bottom: 36px; }
  .cta-btn {
    display: inline-block;
    background: linear-gradient(135deg, #1e5bc6, #0f2f7a);
    color: #fff;
    font-family: 'Jost', sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.5px;
    padding: 15px 36px;
    border-radius: 12px;
    text-decoration: none;
    box-shadow: 0 8px 28px rgba(26,74,171,0.35);
  }

  /* Divider */
  .divider {
    height: 1px;
    background: linear-gradient(90deg, transparent, #d4dce6, transparent);
    margin: 36px 0;
  }

  /* Sign-off */
  .signoff { font-size: 13px; color: #5a6a7a; line-height: 1.8; }
  .signoff strong { color: #0f2f7a; font-weight: 700; display: block; margin-top: 8px; }

  /* Footer */
  .foot {
    margin-top: 32px;
    padding: 28px 48px;
    background: #0f2f7a;
    border-radius: 14px;
    text-align: center;
  }
  .foot p { font-size: 11px; color: rgba(255,255,255,0.4); line-height: 1.8; }
  .foot a { color: rgba(255,255,255,0.6); text-decoration: none; }
  .foot-links { display: flex; justify-content: center; gap: 20px; margin-top: 12px; }
  .foot-links a { font-size: 11px; color: rgba(255,255,255,0.35); text-decoration: none; border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 1px; }

  @media(max-width:500px){
    .hero { padding: 36px 24px 32px; }
    .card { padding: 32px 24px 28px; }
    .foot { padding: 24px; }
  }
</style>
</head>
<body>
<div class="shell">

  <!-- Logo -->
  <div class="topbar">
    <div class="topbar-brand">Samvisa Team</div>
  </div>

  <!-- Hero -->
  <div class="hero">
    <div class="check-wrap">
      ✅
    </div>
    <div class="hero-badge">✦ Application Received</div>
    <h1>
      Application Submitted
      <em>Successfully!</em>
    </h1>
    <p>Your payment has been confirmed &amp; application is under review.</p>
  </div>

  <!-- Card -->
  <div class="card">

    <p class="greeting">Dear {{ $application->first_name  }} {{ $application->surname }},</p>
    <p class="intro">
      We're delighted to confirm that your visa application has been received and your payment has been successfully processed. Our expert team will begin reviewing your documents shortly and keep you informed at every step.
    </p>

    <!-- Application Details -->
    <div class="detail-block">
      <div class="detail-block-label">📋 Application Summary</div>

      <div class="detail-row">
        <div class="detail-icon">
          📅
        </div>
        <div>
          <div class="detail-key">Application ID</div>
          <div class="detail-val">#{{ str_pad($application->id, 6, '0', STR_PAD_LEFT) }}</div>
        </div>
      </div>

      <div class="detail-row">
        <div class="detail-icon">
          👤
        </div>
        <div>
          <div class="detail-key">Applicant Name</div>
          <div class="detail-val">{{ $application->name }}</div>
        </div>
      </div>

      <div class="detail-row">
        <div class="detail-icon">
          🌍
        </div>
        <div>
          <div class="detail-key">Visa Type</div>
          <div class="detail-val">{{ ucfirst($type) }} Visa</div>
        </div>
      </div>

      <div class="detail-row">
        <div class="detail-icon">
          ✅
        </div>
        <div>
          <div class="detail-key">Payment Status</div>
          <div class="detail-val" style="color:#16a34a;">✓ Confirmed</div>
        </div>
      </div>
    </div>

    <!-- Next Steps -->
    <p class="steps-title">What happens next?</p>
    <ul class="step-list">
      <li class="step-item">
        
        <span><strong style="color:#0f2f7a;display:block;margin-bottom:2px;">Document Review</strong>Our team reviews your submitted documents within 1–2 business days.</span>
      </li>
      <li class="step-item">
        
        <span><strong style="color:#0f2f7a;display:block;margin-bottom:2px;">Processing &amp; Verification</strong>We coordinate with the relevant embassy or consulate on your behalf.</span>
      </li>
      <li class="step-item">
        
        <span><strong style="color:#0f2f7a;display:block;margin-bottom:2px;">Visa Issuance</strong>Your approved visa will be delivered to you via email or courier.</span>
      </li>
    </ul>

    <!-- CTA -->
    

    <div class="divider"></div>

    <!-- Sign off -->
    <div class="signoff">
      If you have any questions, feel free to reply to this email or reach us on WhatsApp. We're always here to help.
      <strong>Warm regards,<br>The Visa Team</strong>
    </div>

  </div>

  <!-- Footer -->
  <div class="foot">
    <p>© {{ date('Y') }} Visa Services. All rights reserved.<br>
    You received this email because you submitted a visa application with us.</p>
   
  </div>

</div>
</body>
</html>