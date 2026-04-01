@extends('admin.layouts.admin')

@section('title', 'Europe (Schengen) Visa — ' . $application->surname . ', ' . $application->first_name)

@section('content')

<style>
  :root {
    --eu-blue: #003399;
    --eu-blue-mid: #003fa6;
    --eu-blue-light: #0055cc;
    --eu-gold: #FFCC00;
    --navy: #0f1f3d;
    --navy-mid: #1a3560;
    --blue: #1a4aab;
    --blue-mid: #1e5bc6;
    --blue-faint: #f0f5ff;
    --blue-pale: #e8f0fb;
    --red: #dc2626;
    --green: #16a34a;
    --orange: #ea580c;
    --amber: #d97706;
    --gray-dark: #2c3a4a;
    --gray-mid: #5a6a7a;
    --gray-light: #8a9aaa;
    --gray-border: #d4dce6;
    --gray-bg: #f4f6f9;
    --white: #ffffff;
    --shadow-sm: 0 2px 12px rgba(26,74,171,0.08);
    --shadow-md: 0 8px 32px rgba(26,74,171,0.14);
    --font-d: 'Cormorant Garamond', serif;
    --font-b: 'Jost', sans-serif;
  }

  @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,600&family=Jost:wght@300;400;500;600;700&display=swap');

  .av-wrap { max-width: 1280px; margin: 0 auto; padding: 32px 24px 80px; font-family: var(--font-b); }

  /* ── TOP BAR ── */
  .av-topbar { display: flex; align-items: center; justify-content: space-between; margin-bottom: 28px; flex-wrap: wrap; gap: 12px; }
  .av-breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--gray-light); }
  .av-breadcrumb a { color: var(--blue); text-decoration: none; font-weight: 600; }
  .av-breadcrumb span { opacity: .5; }
  .av-actions { display: flex; gap: 10px; flex-wrap: wrap; }
  .btn-action {
    display: inline-flex; align-items: center; gap: 7px;
    padding: 10px 18px; border-radius: 9px; font-family: var(--font-b);
    font-size: 12px; font-weight: 700; cursor: pointer;
    transition: transform .2s, box-shadow .2s; border: none;
  }
  .btn-action:hover { transform: translateY(-1px); }
  .btn-print   { background: var(--gray-bg); color: var(--gray-dark); border: 1.5px solid var(--gray-border); }
  .btn-edit    { background: var(--blue); color: #fff; border: 1.5px solid var(--blue); }
  .btn-approve { background: linear-gradient(135deg,#16a34a,#15803d); color: #fff; box-shadow: 0 6px 20px rgba(22,163,74,.3); }
  .btn-reject  { background: linear-gradient(135deg,#dc2626,#b91c1c); color: #fff; box-shadow: 0 6px 20px rgba(220,38,38,.3); }

  /* ── HERO ── */
  .av-hero {
    background: linear-gradient(135deg, var(--eu-blue), var(--eu-blue-mid), var(--eu-blue-light));
    border-radius: 20px; padding: 36px 40px;
    display: flex; align-items: center; gap: 32px;
    margin-bottom: 28px; position: relative; overflow: hidden;
  }
  .av-hero::before {
    content: ''; position: absolute; inset: 0;
    background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,.06) 1px, transparent 0);
    background-size: 24px 24px;
  }
  /* EU stars decoration */
  .av-hero::after {
    content: '★ ★ ★ ★ ★ ★ ★ ★ ★ ★ ★ ★';
    position: absolute; bottom: 12px; right: 20px;
    font-size: 10px; color: var(--eu-gold); opacity: .4;
    letter-spacing: 4px; z-index: 1;
  }
  .av-hero-flag { position: relative; z-index: 2; flex-shrink: 0; }
  .av-hero-flag img { height: 52px; border-radius: 4px; box-shadow: 0 4px 16px rgba(0,0,0,.3); }
  .av-hero-info { flex: 1; position: relative; z-index: 2; }
  .av-hero-name { font-family: var(--font-d); font-size: clamp(26px,3.5vw,40px); font-weight: 700; color: #fff; line-height: 1.1; margin-bottom: 6px; }
  .av-hero-sub  { font-size: 13px; color: rgba(255,255,255,.55); margin-bottom: 16px; }
  .av-hero-meta { display: flex; gap: 14px; flex-wrap: wrap; }
  .av-meta-chip {
    display: flex; align-items: center; gap: 6px;
    background: rgba(255,255,255,.12); backdrop-filter: blur(8px);
    border: 1px solid rgba(255,255,255,.2); border-radius: 20px;
    padding: 5px 14px; font-size: 11px; color: rgba(255,255,255,.85); font-weight: 600;
  }
  .av-hero-status { position: relative; z-index: 2; flex-shrink: 0; }
  .status-badge {
    display: inline-flex; align-items: center; gap: 7px;
    padding: 10px 20px; border-radius: 30px; font-size: 12px; font-weight: 700;
    letter-spacing: .5px; text-transform: uppercase;
  }
  .status-pending  { background: rgba(234,88,12,.2);  color: #fdba74; border: 1.5px solid rgba(234,88,12,.4); }
  .status-approved { background: rgba(22,163,74,.2);  color: #86efac; border: 1.5px solid rgba(22,163,74,.4); }
  .status-rejected { background: rgba(220,38,38,.2);  color: #fca5a5; border: 1.5px solid rgba(220,38,38,.4); }

  /* ── MAIN GRID ── */
  .av-grid { display: grid; grid-template-columns: 1fr 320px; gap: 24px; align-items: start; }
  @media(max-width:1000px){ .av-grid { grid-template-columns: 1fr; } }

  /* ── SECTION CARD ── */
  .av-card { background: var(--white); border: 1.5px solid var(--gray-border); border-radius: 18px; overflow: hidden; box-shadow: var(--shadow-sm); margin-bottom: 20px; }
  .av-card-header { padding: 20px 28px; border-bottom: 1px solid var(--gray-border); background: var(--blue-faint); display: flex; align-items: center; gap: 14px; }
  .av-card-icon { width: 40px; height: 40px; border-radius: 10px; background: var(--eu-blue); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .av-card-icon svg { color: #fff; }
  .av-card-title { font-family: var(--font-d); font-size: 18px; font-weight: 700; color: var(--navy); }
  .av-card-sub { font-size: 11px; color: var(--gray-mid); margin-top: 1px; }
  .av-card-body { padding: 28px; }

  /* ── FIELD GRID ── */
  .fv-grid { display: grid; gap: 6px 20px; }
  .fv-2 { grid-template-columns: 1fr 1fr; }
  .fv-3 { grid-template-columns: 1fr 1fr 1fr; }
  .fv-1 { grid-template-columns: 1fr; }
  @media(max-width:600px){ .fv-2,.fv-3 { grid-template-columns: 1fr; } }
  .fv-item { padding: 14px 0; border-bottom: 1px solid var(--gray-border); }
  .fv-item:last-child { border-bottom: none; }
  .fv-label { font-size: 10px; font-weight: 700; letter-spacing: 2px; color: var(--gray-light); text-transform: uppercase; margin-bottom: 4px; }
  .fv-value { font-size: 14px; font-weight: 500; color: var(--gray-dark); line-height: 1.5; }
  .fv-value.empty { color: var(--gray-light); font-style: italic; font-size: 13px; }
  .fv-value.mono { font-family: 'Courier New', monospace; font-size: 13px; background: var(--gray-bg); padding: 3px 10px; border-radius: 5px; display: inline-block; letter-spacing: .5px; }
  .fv-divider { grid-column: 1/-1; margin: 8px 0; border: none; border-top: 1px dashed var(--gray-border); }
  .fv-sub-title { grid-column: 1/-1; font-family: var(--font-d); font-size: 15px; font-weight: 600; color: var(--navy); padding: 10px 0 4px; border-bottom: 2px solid var(--blue-faint); margin-bottom: 4px; }

  /* ── BOOLEAN BADGES ── */
  .bool-yes { display:inline-flex;align-items:center;gap:5px;background:#dcfce7;color:#15803d;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700; }
  .bool-no  { display:inline-flex;align-items:center;gap:5px;background:#fee2e2;color:#b91c1c;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700; }
  .bool-na  { display:inline-flex;align-items:center;gap:5px;background:#f3f4f6;color:#6b7280;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700; }

  /* ── SHARECODE ── */
  .sharecode-val {
    font-family: 'Courier New', monospace; font-size: 15px; font-weight: 700;
    background: linear-gradient(135deg,#e0f2fe,#bfdbfe);
    color: #1e40af; padding: 6px 14px; border-radius: 8px;
    border: 1.5px solid #93c5fd; display: inline-block; letter-spacing: 1px;
  }

  /* ── DOC GRID ── */
  .doc-grid { display: grid; grid-template-columns: repeat(auto-fill,minmax(170px,1fr)); gap: 14px; }
  .doc-card { border: 1.5px solid var(--gray-border); border-radius: 12px; overflow: hidden; transition: border-color .2s, box-shadow .2s; cursor: pointer; text-decoration: none; display: block; }
  .doc-card:hover { border-color: var(--eu-blue); box-shadow: 0 6px 24px rgba(0,51,153,.15); }
  .doc-thumb { height: 110px; background: var(--blue-faint); display: flex; align-items: center; justify-content: center; font-size: 36px; }
  .doc-thumb img { width: 100%; height: 100%; object-fit: cover; }
  .doc-thumb.pdf-thumb { background: linear-gradient(135deg,#fee2e2,#fecaca); }
  .doc-info { padding: 10px 12px; background: var(--white); }
  .doc-name { font-size: 11px; font-weight: 700; color: var(--gray-dark); margin-bottom: 3px; }
  .doc-tag  { font-size: 10px; color: var(--gray-light); }
  .doc-missing { border: 1.5px dashed var(--gray-border); border-radius: 12px; height: 152px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 6px; color: var(--gray-light); font-size: 11px; }

  /* ── INFO BOXES ── */
  .info-box { padding: 14px 18px; border-radius: 10px; font-size: 12px; line-height: 1.7; margin-top: 12px; }
  .info-box.green { background: #f0fdf4; border: 1.5px solid #86efac; color: #14532d; }
  .info-box.amber { background: #fffbeb; border: 1.5px solid #fde68a; color: #78350f; }
  .info-box.blue  { background: var(--blue-faint); border: 1.5px solid rgba(26,74,171,.2); color: var(--navy); }
  .info-box.red   { background: #fff5f5; border: 1.5px solid #fca5a5; color: #7f1d1d; }

  /* ── SIDEBAR ── */
  .av-sidebar { display: flex; flex-direction: column; gap: 18px; }
  .side-card { background: var(--white); border: 1.5px solid var(--gray-border); border-radius: 16px; padding: 22px; box-shadow: var(--shadow-sm); }
  .side-title { font-family: var(--font-d); font-size: 16px; font-weight: 600; color: var(--navy); margin-bottom: 14px; }
  .side-row { display: flex; justify-content: space-between; align-items: center; padding: 9px 0; border-bottom: 1px solid var(--gray-border); font-size: 12px; }
  .side-row:last-child { border-bottom: none; }
  .side-row-label { color: var(--gray-mid); font-weight: 500; display: flex; align-items: center; gap: 6px; }
  .side-row-val   { font-weight: 700; color: var(--gray-dark); text-align: right; max-width: 60%; }

  /* ── PRINT ── */
  @media print {
    .av-topbar .av-actions, .av-hero-status { display: none; }
    .av-wrap { padding: 0; }
    .av-card { break-inside: avoid; box-shadow: none; border: 1px solid #ddd; }
  }
</style>

<div class="av-wrap">

  {{-- TOP BAR --}}
  <div class="av-topbar">
    <div class="av-breadcrumb">
      <a href="{{ route('admin.dashboard') }}">Dashboard</a>
      <span>/</span>
      <a href="{{ route('admin.visa.show.all') }}">Europe (Schengen) Applications</a>
      <span>/</span>
      <span>{{ $application->surname }}, {{ $application->first_name }}</span>
    </div>
     <div class="av-actions">
      {{--<button class="btn-action btn-print" onclick="window.print()">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
        Print
      </button>
      <form 
        method="POST" 
        action="{{ route('admin.europe-visa.approve', $application->id) }}" 
        style="display:inline"
        >
        @csrf @method('PATCH')
        <button type="submit" class="btn-action btn-approve">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          Approve
        </button>
      </form>
      <form 
        method="POST" 
        action="{{ route('admin.europe-visa.reject', $application->id) }}" 
        style="display:inline"
        >
        @csrf @method('PATCH')
        <button type="submit" class="btn-action btn-reject" onclick="return confirm('Reject this application?')">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
          Reject
        </button>
      </form>--}}

      <button class="btn-action btn-edit" onclick="window.location.href='{{ route('admin.europe.visa.show', $application->id) }}'">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 20h9"/>
            <path d="M16.5 3.5a2.1 2.1 0 013 3L7 19l-4 1 1-4 12.5-12.5z"/>
        </svg>

        Send Correction
      </button>
    </div> 
  </div>

  {{-- HERO --}}
  <div class="av-hero">
    <div class="av-hero-flag">
      <img src="{{ asset('europeflag.avif') }}" alt="EU Flag"/>
    </div>
    <div class="av-hero-info">
      <p class="av-hero-sub">Europe (Schengen) Visit Visa Application #{{ $application->id }}</p>
      <h1 class="av-hero-name">{{ strtoupper($application->surname) }}, {{ $application->first_name }} {{ $application->middle_name }}</h1>
      <div class="av-hero-meta">
        <div class="av-meta-chip">📧 {{ $application->email }}</div>
        <div class="av-meta-chip">📞 {{ $application->mobile_phone }}</div>
        <div class="av-meta-chip">📅 Submitted {{ $application->created_at->format('d M Y, H:i') }}</div>
        @if($application->departure_date)
          <div class="av-meta-chip">✈️ Departs {{ \Carbon\Carbon::parse($application->departure_date)->format('d M Y') }}</div>
        @endif
        @if($application->destination_city)
          <div class="av-meta-chip">📍 {{ $application->destination_city }}</div>
        @endif
      </div>
    </div>
    {{-- <div class="av-hero-status">
      @php
        $status = $application->status ?? 'pending';
        $statusClass = match($status) { 'approved' => 'approved', 'rejected' => 'rejected', default => 'pending' };
        $statusIcon  = match($status) { 'approved' => '✓', 'rejected' => '✕', default => '⏳' };
      @endphp
      <span class="status-badge status-{{ $statusClass }}">
        {{ $statusIcon }} {{ ucfirst($status) }}
      </span>
    </div> --}}
  </div>

  {{-- MAIN GRID --}}
  <div class="av-grid">
    <div>

      {{-- ── PERSONAL INFO ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <div>
            <p class="av-card-title">Personal Information</p>
            <p class="av-card-sub">Name, birth details, passport & contact</p>
          </div>
        </div>
        <div class="av-card-body">
          <div class="fv-grid fv-3">
            <div class="fv-item"><div class="fv-label">Surname</div><div class="fv-value">{{ $application->surname ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">First Name</div><div class="fv-value">{{ $application->first_name ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Middle Name</div><div class="fv-value {{ !$application->middle_name ? 'empty' : '' }}">{{ $application->middle_name ?? 'Not provided' }}</div></div>
            <div class="fv-item"><div class="fv-label">Date of Birth</div><div class="fv-value">{{ $application->dob ? \Carbon\Carbon::parse($application->dob)->format('d M Y') : '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Nationality</div><div class="fv-value">{{ $application->nationality ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Country of Birth</div><div class="fv-value">{{ $application->country_of_birth ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Marital Status</div><div class="fv-value">{{ $application->marital_status ?? '—' }}</div></div>
          </div>

          <hr class="fv-divider" style="margin:16px 0;">
          <p style="font-family:var(--font-d);font-size:15px;font-weight:600;color:var(--navy);margin-bottom:12px;">🛂 Passport Details</p>
          <div class="fv-grid fv-3">
            <div class="fv-item"><div class="fv-label">Passport Number</div><div class="fv-value mono">{{ $application->passport_number ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Issue Date</div><div class="fv-value">{{ $application->passport_issue ? \Carbon\Carbon::parse($application->passport_issue)->format('d M Y') : '—' }}</div></div>
            <div class="fv-item">
              <div class="fv-label">Expiry Date</div>
              <div class="fv-value">
                {{ $application->passport_expiry ? \Carbon\Carbon::parse($application->passport_expiry)->format('d M Y') : '—' }}
                @if($application->passport_expiry)
                  @php $expDays = now()->diffInDays(\Carbon\Carbon::parse($application->passport_expiry), false); @endphp
                  <span style="margin-left:6px;font-size:10px;padding:2px 7px;border-radius:20px;font-weight:700;background:{{ $expDays < 180 ? '#fee2e2' : '#dcfce7' }};color:{{ $expDays < 180 ? '#b91c1c' : '#15803d' }}">
                    {{ $expDays < 0 ? 'Expired' : $expDays.' days left' }}
                  </span>
                @endif
              </div>
            </div>
          </div>

          <hr class="fv-divider" style="margin:16px 0;">
          <p style="font-family:var(--font-d);font-size:15px;font-weight:600;color:var(--navy);margin-bottom:12px;">📞 Contact Details</p>
          <div class="fv-grid fv-2">
            <div class="fv-item"><div class="fv-label">Mobile Phone</div><div class="fv-value"><a href="tel:{{ $application->mobile_phone }}" style="color:var(--blue);text-decoration:none;font-weight:600;">{{ $application->mobile_phone }}</a></div></div>
            <div class="fv-item"><div class="fv-label">Email Address</div><div class="fv-value"><a href="mailto:{{ $application->email }}" style="color:var(--blue);text-decoration:none;font-weight:600;">{{ $application->email }}</a></div></div>
          </div>
        </div>
      </div>

      {{-- ── HOME ADDRESS ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <div>
            <p class="av-card-title">Home Address</p>
            <p class="av-card-sub">Current UK residential address</p>
          </div>
        </div>
        <div class="av-card-body">
          <div class="fv-grid fv-2">
            <div class="fv-item"><div class="fv-label">Door Number</div><div class="fv-value">{{ $application->home_door ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Street</div><div class="fv-value">{{ $application->home_street ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">City</div><div class="fv-value">{{ $application->home_city ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Postcode</div><div class="fv-value mono">{{ $application->home_postcode ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Country</div><div class="fv-value">{{ $application->home_country ?? 'United Kingdom' }}</div></div>
          </div>
        </div>
      </div>

      {{-- ── EMPLOYMENT ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
          </div>
          <div>
            <p class="av-card-title">Employment Details</p>
            <p class="av-card-sub">Employer, occupation and work address</p>
          </div>
        </div>
        <div class="av-card-body">
          <div class="fv-grid fv-2">
            <div class="fv-item"><div class="fv-label">Company Name</div><div class="fv-value">{{ $application->company_name ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Occupation</div><div class="fv-value">{{ $application->occupation ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Work Address</div><div class="fv-value" style="font-size:13px;">{{ implode(', ', array_filter([$application->work_door, $application->work_street, $application->work_city, $application->work_postcode, $application->work_country])) ?: '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Employer Phone</div><div class="fv-value"><a href="tel:{{ $application->work_phone }}" style="color:var(--blue);text-decoration:none;font-weight:600;">{{ $application->work_phone ?? '—' }}</a></div></div>
            <div class="fv-item"><div class="fv-label">Employer Email</div>
              <div class="fv-value {{ !$application->work_email ? 'empty' : '' }}">
                @if($application->work_email)
                  <a href="mailto:{{ $application->work_email }}" style="color:var(--blue);text-decoration:none;font-weight:600;">{{ $application->work_email }}</a>
                @else
                  Not provided
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- ── TRAVEL DETAILS ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div>
            <p class="av-card-title">Travel Details</p>
            <p class="av-card-sub">Trip dates, destinations & previous EU travel</p>
          </div>
        </div>
        <div class="av-card-body">
          <div class="fv-grid fv-2">
            <div class="fv-item">
              <div class="fv-label">Departure Date</div>
              <div class="fv-value">
                {{ $application->departure_date ? \Carbon\Carbon::parse($application->departure_date)->format('D, d M Y') : '—' }}
                @php $days = $application->departure_date ? now()->diffInDays(\Carbon\Carbon::parse($application->departure_date), false) : null; @endphp
                @if($days !== null)
                  <span style="margin-left:8px;font-size:11px;padding:2px 8px;border-radius:20px;font-weight:700;background:{{ $days < 0 ? '#fee2e2' : ($days <= 14 ? '#fff7ed' : '#dcfce7') }};color:{{ $days < 0 ? '#b91c1c' : ($days <= 14 ? '#c2410c' : '#15803d') }}">
                    {{ $days < 0 ? abs($days).' days ago' : 'in '.$days.' days' }}
                  </span>
                @endif
              </div>
            </div>
            <div class="fv-item"><div class="fv-label">Return Date</div><div class="fv-value">{{ $application->return_date ? \Carbon\Carbon::parse($application->return_date)->format('D, d M Y') : '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Destination Countries</div><div class="fv-value">🇪🇺 {{ $application->destination_city ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Purpose of Visit</div><div class="fv-value">{{ $application->visit_purpose ?? '—' }}</div></div>
          </div>

          <hr style="margin:16px 0;border:none;border-top:1px dashed var(--gray-border);">
          <p style="font-family:var(--font-d);font-size:15px;font-weight:600;color:var(--navy);margin-bottom:12px;">🌍 Previous EU Travel</p>
          <div class="fv-grid fv-1">
            <div class="fv-item">
              <div class="fv-label">Been to EU / Schengen Before?</div>
              <div class="fv-value">
                @if($application->been_to_eu === 'yes')
                  <span class="bool-yes">✓ Yes</span>
                @else
                  <span class="bool-no">✕ No</span>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- ── UK IMMIGRATION & EU CONNECTION ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <div>
            <p class="av-card-title">UK Immigration & EU Connection</p>
            <p class="av-card-sub">eVisa sharecode, EU relations, and sponsorship</p>
          </div>
        </div>
        <div class="av-card-body">

          {{-- UK Sharecode --}}
          <p style="font-family:var(--font-d);font-size:15px;font-weight:600;color:var(--navy);margin-bottom:12px;">🇬🇧 UK eVisa Sharecode</p>
          <div class="fv-grid fv-1">
            <div class="fv-item">
              <div class="fv-label">Sharecode</div>
              <div class="fv-value">
                @if($application->uk_sharecode)
                  <span class="sharecode-val">{{ $application->uk_sharecode }}</span>
                  <a href="https://www.gov.uk/view-prove-immigration-status" target="_blank" style="margin-left:12px;font-size:11px;color:var(--blue);font-weight:600;text-decoration:none;">Verify on gov.uk →</a>
                @else
                  <span class="empty">Not provided</span>
                @endif
              </div>
            </div>
          </div>
          @if(!$application->uk_sharecode)
            <div class="info-box amber">⚠️ No sharecode submitted. The applicant may be a British citizen. Confirm before submitting to the embassy.</div>
          @endif

          <hr style="margin:20px 0;border:none;border-top:1px dashed var(--gray-border);">

          {{-- EU Relation --}}
          <p style="font-family:var(--font-d);font-size:15px;font-weight:600;color:var(--navy);margin-bottom:12px;">🤝 EU Citizen Relationship</p>
          <div class="fv-grid fv-2">
            <div class="fv-item">
              <div class="fv-label">Related to an EU Citizen?</div>
              <div class="fv-value">
                @if($application->eu_relation === 'yes')
                  <span class="bool-yes">✓ Yes</span>
                @else
                  <span class="bool-no">✕ No</span>
                @endif
              </div>
            </div>
            @if($application->eu_relation === 'yes')
            <div class="fv-item"><div class="fv-label">Relationship Type</div><div class="fv-value">{{ $application->eu_relation_type ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">EU Citizen's Nationality</div><div class="fv-value">{{ $application->eu_citizen_nationality ?? '—' }}</div></div>
            @endif
          </div>

          <hr style="margin:20px 0;border:none;border-top:1px dashed var(--gray-border);">

          {{-- Sponsorship --}}
          <p style="font-family:var(--font-d);font-size:15px;font-weight:600;color:var(--navy);margin-bottom:12px;">💼 Sponsorship</p>
          <div class="fv-grid fv-2">
            <div class="fv-item">
              <div class="fv-label">Sponsored Trip?</div>
              <div class="fv-value">
                @if($application->is_sponsored === 'yes')
                  <span class="bool-yes">✓ Yes</span>
                @else
                  <span class="bool-no">✕ No</span>
                @endif
              </div>
            </div>
            @if($application->is_sponsored === 'yes')
            <div class="fv-item"><div class="fv-label">Sponsor Name</div><div class="fv-value">{{ $application->sponsor_name ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Relationship to Applicant</div><div class="fv-value">{{ $application->sponsor_relationship ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Sponsor Phone</div><div class="fv-value">{{ $application->sponsor_phone ?? '—' }}</div></div>
            <div class="fv-item" style="grid-column:1/-1"><div class="fv-label">Sponsor Address</div><div class="fv-value">{{ $application->sponsor_address ?? '—' }}</div></div>
            @endif
          </div>

        </div>
      </div>

      {{-- ── DOCUMENTS ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <div>
            <p class="av-card-title">Uploaded Documents</p>
            <p class="av-card-sub">Click any document to view full size</p>
          </div>
        </div>
        {{-- <div class="av-card-body">
          @php
            $docs = [
              ['key' => 'passport_scan',       'label' => 'Passport Scan',          'icon' => '🛂', 'required' => true],
              ['key' => 'prev_eu_visa',        'label' => 'Previous EU Visa',       'icon' => '🗂️', 'required' => false],
              ['key' => 'eu_relation_passport','label' => 'EU Relation Passport',   'icon' => '🛂', 'required' => false],
              ['key' => 'bank_statements',     'label' => 'Bank Statements',        'icon' => '🏦', 'required' => false],
              ['key' => 'payslips',            'label' => 'Payslips',               'icon' => '💷', 'required' => false],
            ];
          @endphp
          <div class="doc-grid">
            @foreach($docs as $doc)
              @if($application->{$doc['key']})
                @php $path = $application->{$doc['key']}; $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION)); @endphp
                <a href="{{ asset('storage/'.$path) }}" target="_blank" class="doc-card">
                  <div class="doc-thumb {{ in_array($ext,['pdf']) ? 'pdf-thumb' : '' }}">
                    @if(in_array($ext,['jpg','jpeg','png','webp']))
                      <img src="{{ asset('storage/'.$path) }}" alt="{{ $doc['label'] }}"/>
                    @else
                      <span>📄</span>
                    @endif
                  </div>
                  <div class="doc-info">
                    <p class="doc-name">{{ $doc['label'] }}</p>
                    <p class="doc-tag">{{ strtoupper($ext) }} · Click to view</p>
                  </div>
                </a>
              @else
                <div class="doc-missing">
                  <span style="font-size:28px;opacity:.3;">{{ $doc['icon'] }}</span>
                  <span>{{ $doc['label'] }}</span>
                  <span style="font-size:10px;background:{{ $doc['required'] ? '#fee2e2' : '#f3f4f6' }};color:{{ $doc['required'] ? '#b91c1c' : '#9ca3af' }};padding:2px 8px;border-radius:20px;font-weight:700;">{{ $doc['required'] ? '✕ Missing' : '— Not uploaded' }}</span>
                </div>
              @endif
            @endforeach
          </div>
        </div> --}}
        <div class="av-card-body">
            @php
            $docs = [
                ['key' => 'passport_scan',        'label' => 'Passport Scan',        'icon' => '🛂', 'required' => true],
                ['key' => 'prev_eu_visa',         'label' => 'Previous EU Visa',     'icon' => '🗂️', 'required' => false],
                ['key' => 'eu_relation_passport', 'label' => 'EU Relation Passport', 'icon' => '🛂', 'required' => false],
                ['key' => 'bank_statements',      'label' => 'Bank Statements',      'icon' => '🏦', 'required' => false],
                ['key' => 'payslips',             'label' => 'Payslips',             'icon' => '💷', 'required' => false],
            ];
            @endphp

            <div class="doc-grid">
            @foreach($docs as $doc)

            @if($application->{$doc['key']})

                @php
                $file = $application->{$doc['key']};
                $ext  = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                @endphp

                <a href="{{ asset($file) }}" target="_blank" class="doc-card">

                <div class="doc-thumb {{ $ext === 'pdf' ? 'pdf-thumb' : '' }}">

                    {{-- IMAGE --}}
                    @if(in_array($ext, ['jpg','jpeg','png','webp']))
                    <img src="{{ asset($file) }}" alt="{{ $doc['label'] }}"/>

                    {{-- PDF --}}
                    @elseif($ext === 'pdf')
                    <div style="padding:10px;text-align:center;">
                        <span style="font-size:28px;">📄</span>
                        <p style="font-size:12px;margin-top:5px;">PDF Document</p>
                    </div>

                    {{-- OTHER FILE --}}
                    @else
                    <div style="padding:10px;text-align:center;">
                        <span style="font-size:28px;">📁</span>
                        <p style="font-size:12px;margin-top:5px;">File</p>
                    </div>
                    @endif

                </div>

                <div class="doc-info">
                    <p class="doc-name">{{ $doc['label'] }}</p>
                    <p class="doc-tag">{{ strtoupper($ext) }} · Click to view</p>
                </div>

                </a>

            @else

                <div class="doc-missing">
                <span style="font-size:28px;opacity:.3;">{{ $doc['icon'] }}</span>
                <span>{{ $doc['label'] }}</span>
                <span style="
                    font-size:10px;
                    background:{{ $doc['required'] ? '#fee2e2' : '#f3f4f6' }};
                    color:{{ $doc['required'] ? '#b91c1c' : '#9ca3af' }};
                    padding:2px 8px;
                    border-radius:20px;
                    font-weight:700;">
                    {{ $doc['required'] ? '✕ Missing' : '— Not uploaded' }}
                </span>
                </div>

            @endif

            @endforeach
            </div>
        </div>
      </div>

      {{-- ── ADDITIONAL NOTES ── --}}
      @if($application->message)
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
          </div>
          <div>
            <p class="av-card-title">Applicant's Notes</p>
            <p class="av-card-sub">Additional message from the applicant</p>
          </div>
        </div>
        <div class="av-card-body">
          <div style="background:var(--gray-bg);border-radius:10px;padding:18px 20px;font-size:13px;line-height:1.7;color:var(--gray-dark);white-space:pre-line;border-left:3px solid var(--eu-blue);">{{ $application->message }}</div>
        </div>
      </div>
      @endif

      {{-- ── DECLARATION ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div>
            <p class="av-card-title">Declaration</p>
            <p class="av-card-sub">Applicant's confirmation at time of submission</p>
          </div>
        </div>
        <div class="av-card-body">
          <div style="display:flex;align-items:center;gap:14px;padding:16px 20px;background:#f0fdf4;border:1.5px solid #86efac;border-radius:12px;">
            <span style="font-size:24px;">✅</span>
            <span style="font-size:13px;color:#14532d;font-weight:500;line-height:1.6;">Applicant confirmed all information and documents are genuine, true, and accurate. They acknowledged that SAM Visa Services will use this data solely to process their visa application.</span>
          </div>
        </div>
      </div>

    </div><!-- /main col -->

    {{-- SIDEBAR --}}
    <div class="av-sidebar">

      {{-- SUMMARY --}}
      <div class="side-card" style="background:linear-gradient(135deg,var(--eu-blue),var(--eu-blue-light));border-color:transparent;">
        <p class="side-title" style="color:#fff;">Application Summary</p>
        <div class="side-row" style="border-color:rgba(255,255,255,.15)">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Application ID</span>
          <span class="side-row-val" style="color:#fff;font-family:'Courier New',monospace">#{{ $application->id }}</span>
        </div>
        {{-- <div class="side-row" style="border-color:rgba(255,255,255,.15)">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Status</span>
          <span class="status-badge status-{{ $statusClass }}" style="font-size:10px;padding:4px 12px;">{{ $statusIcon }} {{ ucfirst($status) }}</span>
        </div> --}}
        <div class="side-row" style="border-color:rgba(255,255,255,.15)">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Submitted</span>
          <span class="side-row-val" style="color:rgba(255,255,255,.85)">{{ $application->created_at->format('d M Y') }}</span>
        </div>
        <div class="side-row" style="border-color:rgba(255,255,255,.15)">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Destination</span>
          <span class="side-row-val" style="color:rgba(255,255,255,.85)">{{ $application->destination_city ?? '—' }}</span>
        </div>
        <div class="side-row" style="border-color:rgba(255,255,255,.15)">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Purpose</span>
          <span class="side-row-val" style="color:rgba(255,255,255,.85)">{{ $application->visit_purpose ?? '—' }}</span>
        </div>
        <div class="side-row" style="border-color:rgba(255,255,255,.15)">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Departure</span>
          <span class="side-row-val" style="color:rgba(255,255,255,.85)">{{ $application->departure_date ? \Carbon\Carbon::parse($application->departure_date)->format('d M Y') : '—' }}</span>
        </div>
        <div class="side-row" style="border-color:rgba(255,255,255,.15);border-bottom:none">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Return</span>
          <span class="side-row-val" style="color:rgba(255,255,255,.85)">{{ $application->return_date ? \Carbon\Carbon::parse($application->return_date)->format('d M Y') : '—' }}</span>
        </div>
      </div>

      {{-- DOCUMENT CHECKLIST --}}
      {{-- <div class="side-card">
        <p class="side-title">Document Checklist</p>
        @php
          $docCheck = [
            ['key' => 'passport_scan',       'label' => 'Passport Scan',        'required' => true],
            ['key' => 'prev_eu_visa',        'label' => 'Previous EU Visa',     'required' => false],
            ['key' => 'eu_relation_passport','label' => 'EU Relation Passport', 'required' => false],
            ['key' => 'bank_statements',     'label' => 'Bank Statements',      'required' => false],
            ['key' => 'payslips',            'label' => 'Payslips',             'required' => false],
          ];
        @endphp
        @foreach($docCheck as $doc)
        <div class="side-row">
          <span class="side-row-label">
            <span style="width:6px;height:6px;border-radius:50%;background:{{ $doc['required'] ? 'var(--red)' : 'var(--green)' }};display:inline-block;flex-shrink:0;"></span>
            {{ $doc['label'] }}
          </span>
          <span>
            @if($application->{$doc['key']})
              <span style="color:var(--green);font-weight:700;font-size:12px;">✓ Uploaded</span>
            @else
              <span style="color:{{ $doc['required'] ? 'var(--red)' : 'var(--gray-light)' }};font-weight:700;font-size:12px;">{{ $doc['required'] ? '✕ Missing' : '— N/A' }}</span>
            @endif
          </span>
        </div>
        @endforeach
        
        <div class="side-row">
          <span class="side-row-label">
            <span style="width:6px;height:6px;border-radius:50%;background:var(--red);display:inline-block;flex-shrink:0;"></span>
            UK eVisa Sharecode
          </span>
          <span>
            @if($application->uk_sharecode)
              <span style="color:var(--green);font-weight:700;font-size:12px;">✓ Provided</span>
            @else
              <span style="color:var(--orange);font-weight:700;font-size:12px;">⚠ Missing</span>
            @endif
          </span>
        </div>
       
        <div class="side-row">
          <span class="side-row-label">
            <span style="width:6px;height:6px;border-radius:50%;background:var(--green);display:inline-block;flex-shrink:0;"></span>
            Prior EU Travel
          </span>
          <span>
            @if($application->been_to_eu === 'yes')
              <span style="color:var(--blue);font-weight:700;font-size:12px;">✓ Yes</span>
            @else
              <span style="color:var(--gray-light);font-weight:700;font-size:12px;">— None</span>
            @endif
          </span>
        </div>
      </div> --}}

      {{-- PASSPORT EXPIRY ALERT --}}
      {{-- @if($application->passport_expiry)
        @php $expDays = now()->diffInDays(\Carbon\Carbon::parse($application->passport_expiry), false); @endphp
        @if($expDays < 180)
        <div class="side-card" style="border-color:#fca5a5;background:#fff5f5;">
          <p class="side-title" style="color:var(--red)">⚠️ Passport Expiry Alert</p>
          <p style="font-size:12px;color:#7f1d1d;line-height:1.6;">
            @if($expDays < 0)
              Passport <strong>expired</strong> {{ abs($expDays) }} days ago. Application will be rejected.
            @else
              Passport expires in <strong>{{ $expDays }} days</strong>. Schengen requires at least 3–6 months validity beyond return date.
            @endif
          </p>
        </div>
        @endif
      @endif --}}

      {{-- EU CONNECTION HIGHLIGHT --}}
      {{-- @if($application->eu_relation === 'yes' || $application->is_sponsored === 'yes')
      <div class="side-card" style="border-color:#bfdbfe;background:#eff6ff;">
        <p class="side-title" style="color:var(--eu-blue)">🔍 Application Flags</p>
        @if($application->eu_relation === 'yes')
          <div style="font-size:12px;padding:8px 0;border-bottom:1px solid #bfdbfe;color:#1e3a8a;">
            🤝 EU Citizen relation: <strong>{{ $application->eu_relation_type }}</strong> ({{ $application->eu_citizen_nationality }})
          </div>
        @endif
        @if($application->is_sponsored === 'yes')
          <div style="font-size:12px;padding:8px 0;color:#1e3a8a;">
            💼 Sponsored by: <strong>{{ $application->sponsor_name }}</strong> ({{ $application->sponsor_relationship }})
          </div>
        @endif
      </div>
      @endif --}}

      {{-- QUICK ACTIONS --}}
      {{-- <div class="side-card">
        <p class="side-title">Quick Actions</p>
        <div style="display:flex;flex-direction:column;gap:8px;">
          <a href="mailto:{{ $application->email }}" style="display:flex;align-items:center;gap:10px;padding:11px 14px;border-radius:10px;background:var(--blue-faint);border:1.5px solid rgba(26,74,171,.15);font-size:12px;font-weight:600;color:var(--blue);text-decoration:none;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email Applicant
          </a>
          <a href="tel:{{ $application->mobile_phone }}" style="display:flex;align-items:center;gap:10px;padding:11px 14px;border-radius:10px;background:var(--gray-bg);border:1.5px solid var(--gray-border);font-size:12px;font-weight:600;color:var(--gray-dark);text-decoration:none;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07"/></svg>
            Call Applicant
          </a>
          @if($application->uk_sharecode)
          <a href="https://www.gov.uk/view-prove-immigration-status" target="_blank" style="display:flex;align-items:center;gap:10px;padding:11px 14px;border-radius:10px;background:#eff6ff;border:1.5px solid #bfdbfe;font-size:12px;font-weight:600;color:var(--eu-blue);text-decoration:none;">
            <span>🇬🇧</span> Verify Sharecode on gov.uk
          </a>
          @endif
          <button onclick="window.print()" style="display:flex;align-items:center;gap:10px;padding:11px 14px;border-radius:10px;background:var(--gray-bg);border:1.5px solid var(--gray-border);font-size:12px;font-weight:600;color:var(--gray-dark);cursor:pointer;width:100%;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
            Print Application
          </button>
        </div>
      </div> --}}

    </div><!-- /sidebar -->
  </div><!-- /grid -->
</div>

@endsection