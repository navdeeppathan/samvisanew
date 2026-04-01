<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Visa Application Received</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
  body {
    font-family: 'Jost', sans-serif;
    background: #edf1f8;
    padding: 40px 16px;
    -webkit-font-smoothing: antialiased;
  }
  .shell { max-width: 600px; margin: 0 auto; }

  /* ── TOP LOGO BAR ── */
  .topbar { text-align: center; padding-bottom: 28px; }
  .topbar-brand {
    font-family: 'Cormorant Garamond', serif;
    font-size: 26px;
    font-weight: 700;
    color: #0f2f7a;
    letter-spacing: 1px;
  }
  .topbar-sub {
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 3px;
    color: #8a9aaa;
    text-transform: uppercase;
    margin-top: 2px;
  }

  /* ── ALERT BANNER ── */
  .banner {
    background: linear-gradient(135deg, #0f2f7a 0%, #1a4aab 60%, #1e5bc6 100%);
    border-radius: 20px 20px 0 0;
    padding: 0;
    position: relative;
    overflow: hidden;
  }
  .banner-pattern {
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
    background-size: 32px 32px;
  }
  .banner-inner {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 32px 40px;
  }
  .alert-icon {
    width: 60px; height: 60px;
    border-radius: 16px;
    background: rgba(255,255,255,0.15);
    border: 1.5px solid rgba(255,255,255,0.25);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .alert-icon svg { color: #fff; }
  .banner-text h2 {
    font-family: 'Cormorant Garamond', serif;
    font-size: 28px;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
    margin-bottom: 4px;
  }
  .banner-text p {
    font-size: 12px;
    color: rgba(255,255,255,0.6);
    font-weight: 400;
  }
  .banner-badge {
    margin-left: auto;
    background: rgba(255,255,255,0.15);
    border: 1px solid rgba(255,255,255,0.25);
    border-radius: 40px;
    padding: 6px 16px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    color: rgba(255,255,255,0.85);
    text-transform: uppercase;
    white-space: nowrap;
    flex-shrink: 0;
  }

  /* timestamp strip */
  .ts-strip {
    background: rgba(255,255,255,0.08);
    padding: 10px 40px;
    display: flex;
    align-items: center;
    gap: 8px;
    border-top: 1px solid rgba(255,255,255,0.1);
  }
  .ts-strip svg { color: rgba(255,255,255,0.5); flex-shrink:0; }
  .ts-strip span { font-size: 11px; color: rgba(255,255,255,0.5); }

  /* ── CARD ── */
  .card {
    background: #fff;
    border-radius: 0 0 20px 20px;
    padding: 44px 44px 40px;
    box-shadow: 0 20px 60px rgba(26,74,171,0.13);
  }

  /* Section headings */
  .sec-head {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 18px;
  }
  .sec-head-line {
    height: 2px;
    flex: 1;
    background: linear-gradient(90deg, #e8f0fb, transparent);
    border-radius: 2px;
  }
  .sec-head-label {
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 3px;
    color: #1a4aab;
    text-transform: uppercase;
    white-space: nowrap;
  }

  /* Applicant info grid */
  .info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 32px;
  }
  .info-cell {
    background: #f4f6f9;
    border: 1px solid #d4dce6;
    border-radius: 12px;
    padding: 16px 18px;
    position: relative;
    overflow: hidden;
  }
  .info-cell::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, #1a4aab, #4a7fd4);
    opacity: 0;
    transition: opacity .3s;
  }
  .info-cell.highlight {
    background: linear-gradient(135deg, #f0f5ff, #e8f0fb);
    border-color: rgba(26,74,171,0.2);
  }
  .info-cell.highlight::before { opacity: 1; }
  .info-key {
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #8a9aaa;
    text-transform: uppercase;
    margin-bottom: 6px;
  }
  .info-val {
    font-size: 14px;
    font-weight: 600;
    color: #0f2f7a;
    word-break: break-word;
  }
  .info-val.mono {
    font-family: 'Courier New', monospace;
    font-size: 16px;
    letter-spacing: 1px;
    color: #1a4aab;
  }
  .info-val.green { color: #16a34a; }

  /* Status pill */
  .status-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(34,197,94,0.1);
    border: 1px solid rgba(34,197,94,0.3);
    border-radius: 40px;
    padding: 3px 12px;
    font-size: 11px;
    font-weight: 700;
    color: #16a34a;
  }
  .status-dot {
    width: 6px; height: 6px;
    background: #22c55e;
    border-radius: 50%;
  }

  /* Quick actions */
  .actions-row {
    display: flex;
    gap: 12px;
    margin-bottom: 32px;
    flex-wrap: wrap;
  }
  .action-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 22px;
    border-radius: 10px;
    font-family: 'Jost', sans-serif;
    font-size: 12px;
    font-weight: 700;
    text-decoration: none;
    letter-spacing: 0.3px;
    cursor: pointer;
  }
  .action-primary {
    background: linear-gradient(135deg, #1e5bc6, #0f2f7a);
    color: #fff;
    box-shadow: 0 6px 20px rgba(26,74,171,0.3);
  }
  .action-secondary {
    background: #f0f5ff;
    color: #1a4aab;
    border: 1.5px solid rgba(26,74,171,0.2);
  }

  /* Alert box */
  .alert-box {
    background: linear-gradient(135deg, #fff8e0, #fffbf0);
    border: 1.5px solid rgba(202,138,4,0.25);
    border-left: 4px solid #ca8a04;
    border-radius: 10px;
    padding: 16px 20px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 32px;
  }
  .alert-box svg { color: #ca8a04; flex-shrink: 0; margin-top: 1px; }
  .alert-box p { font-size: 12px; color: #78350f; line-height: 1.7; }
  .alert-box strong { font-weight: 700; }

  /* Divider */
  .divider { height: 1px; background: linear-gradient(90deg, transparent, #d4dce6, transparent); margin: 28px 0; }

  /* Sign off */
  .signoff { font-size: 12.5px; color: #5a6a7a; line-height: 1.8; }
  .signoff strong { color: #0f2f7a; font-weight: 700; display: block; margin-top: 8px; }

  /* Footer */
  .foot {
    margin-top: 32px;
    background: #0f2f7a;
    border-radius: 14px;
    padding: 24px 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
  }
  .foot-brand {
    font-family: 'Cormorant Garamond', serif;
    font-size: 18px;
    font-weight: 700;
    color: rgba(255,255,255,0.7);
  }
  .foot p { font-size: 10px; color: rgba(255,255,255,0.3); line-height: 1.6; }
  .foot-links { display: flex; gap: 16px; }
  .foot-links a { font-size: 10px; color: rgba(255,255,255,0.3); text-decoration: none; border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 1px; }

  @media(max-width:520px){
    .banner-inner { flex-wrap: wrap; padding: 24px; }
    .banner-badge { margin-left: 0; }
    .card { padding: 28px 22px; }
    .info-grid { grid-template-columns: 1fr; }
    .foot { padding: 20px; flex-direction: column; align-items: flex-start; }
    .ts-strip { padding: 10px 24px; }
  }
</style>
</head>
<body>
<div class="shell">

  <!-- Top branding -->
  <div class="topbar">
    <div class="topbar-brand">Samvisa Team</div>
    <div class="topbar-sub">Admin Notification System</div>
  </div>

  <!-- Banner -->
  <div class="banner">
    <div class="banner-pattern"></div>
    <div class="banner-inner">
      <div class="alert-icon">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
          <line x1="16" y1="13" x2="8" y2="13"/>
          <line x1="16" y1="17" x2="8" y2="17"/>
          <polyline points="10 9 9 9 8 9"/>
        </svg>
      </div>
      <div class="banner-text">
        <h2>New Application<br>Received</h2>
        <p>A new visa application requires your attention.</p>
      </div>
      <div class="banner-badge">🔔 Action Required</div>
    </div>
    <div class="ts-strip">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <span>Received on: {{ now()->format('D, d M Y • h:i A') }}</span>
    </div>
  </div>

  <!-- Card -->
  <div class="card">

    <!-- Applicant Info -->
    <div class="sec-head">
      <div class="sec-head-label">👤 Applicant Details</div>
      <div class="sec-head-line"></div>
    </div>

    <div class="info-grid">
      <div class="info-cell highlight">
        <div class="info-key">Application ID</div>
        <div class="info-val mono">#{{ str_pad($application->id, 6, '0', STR_PAD_LEFT) }}</div>
      </div>
      <div class="info-cell highlight">
        <div class="info-key">Visa Type</div>
        <div class="info-val">{{ ucfirst($type) }} Visa</div>
      </div>
      <div class="info-cell">
        <div class="info-key">Full Name</div>
        <div class="info-val">{{ $application->name }}</div>
      </div>
      <div class="info-cell">
        <div class="info-key">Email Address</div>
        <div class="info-val" style="font-size:12px;">{{ $application->email }}</div>
      </div>
      @if(isset($application->phone))
      <div class="info-cell">
        <div class="info-key">Phone Number</div>
        <div class="info-val">{{ $application->phone }}</div>
      </div>
      @endif
      <div class="info-cell">
        <div class="info-key">Payment Status</div>
        <div class="info-val">
          <span class="status-pill">
            <span class="status-dot"></span>
            Paid &amp; Confirmed
          </span>
        </div>
      </div>
    </div>

    <!-- Quick Actions -->
    <div class="sec-head">
      <div class="sec-head-label">⚡ Quick Actions</div>
      <div class="sec-head-line"></div>
    </div>

    <div class="actions-row" style="margin-bottom:28px;">
      <a href="{{ env('APP_URL') }}/admin/applications" class="action-btn action-primary">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        Open Admin Panel
      </a>
      <a href="mailto:{{ $application->email }}" class="action-btn action-secondary">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        Email Applicant
      </a>
    </div>

    <!-- Advisory -->
    <div class="alert-box">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
        <line x1="12" y1="9" x2="12" y2="13"/>
        <line x1="12" y1="17" x2="12.01" y2="17"/>
      </svg>
      <p><strong>Processing Reminder:</strong> Please review and verify all submitted documents within <strong>1–2 business days</strong>. Contact the applicant at <strong>{{ $application->email }}</strong> if any additional documents are needed.</p>
    </div>

    <div class="divider"></div>

    <div class="signoff">
      This is an automated notification from the Visa Application System. Please do not reply to this email directly — use the admin panel to manage applications.
      <strong>Visa Team — Internal Notification System</strong>
    </div>

  </div>

  <!-- Footer -->
  <div class="foot">
    <div>
      <div class="foot-brand">VisaTeam Admin</div>
      <p>© {{ date('Y') }} Visa Services · Internal use only</p>
    </div>
    <div class="foot-links">
      
      <a href="#">Support</a>
    </div>
  </div>

</div>
</body>
</html>