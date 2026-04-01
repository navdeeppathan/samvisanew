@extends('admin.layouts.admin')

@section('title', 'China Visa Application — ' . $application->surname . ', ' . $application->first_name)

@section('content')

<style>
  :root {
    --navy: #0f1f3d;
    --navy-mid: #1a3560;
    --blue: #1a4aab;
    --blue-mid: #1e5bc6;
    --blue-light: #4a7fd4;
    --blue-pale: #e8f0fb;
    --blue-faint: #f0f5ff;
    --gold: #c9a84c;
    --gold-light: #f0d98a;
    --red: #dc2626;
    --green: #16a34a;
    --orange: #ea580c;
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

  /* ─── TOP BAR ─── */
  .av-topbar {
    display: flex; align-items: center; justify-content: space-between;
    margin-bottom: 28px; flex-wrap: wrap; gap: 12px;
  }
  .av-breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--gray-light); }
  .av-breadcrumb a { color: var(--blue); text-decoration: none; font-weight: 600; }
  .av-breadcrumb span { opacity: .5; }
  .av-actions { display: flex; gap: 10px; }
  .btn-action {
    display: inline-flex; align-items: center; gap: 7px;
    padding: 10px 18px; border-radius: 9px; font-family: var(--font-b);
    font-size: 12px; font-weight: 700; letter-spacing: .3px; cursor: pointer;
    transition: transform .2s, box-shadow .2s; border: none;
  }
  .btn-action:hover { transform: translateY(-1px); }
  .btn-print { background: var(--gray-bg); color: var(--gray-dark); border: 1.5px solid var(--gray-border); }
  .btn-edit    { background: var(--blue); color: #fff; border: 1.5px solid var(--blue); }
  .btn-approve { background: linear-gradient(135deg,#16a34a,#15803d); color: #fff; box-shadow: 0 6px 20px rgba(22,163,74,.3); }
  .btn-reject  { background: linear-gradient(135deg,#dc2626,#b91c1c); color: #fff; box-shadow: 0 6px 20px rgba(220,38,38,.3); }

  /* ─── HERO BANNER ─── */
  .av-hero {
    background: linear-gradient(135deg, var(--navy), var(--navy-mid));
    border-radius: 20px; padding: 36px 40px;
    display: flex; align-items: center; gap: 32px;
    margin-bottom: 28px; position: relative; overflow: hidden;
  }
  .av-hero::before {
    content: ''; position: absolute; inset: 0;
    background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,.05) 1px, transparent 0);
    background-size: 24px 24px;
  }
  .av-hero-flag { font-size: 56px; filter: drop-shadow(0 8px 16px rgba(0,0,0,.4)); position: relative; z-index: 1; flex-shrink: 0; }
  .av-hero-flag img { height: 52px; border-radius: 4px; }
  .av-hero-info { flex: 1; position: relative; z-index: 1; }
  .av-hero-name { font-family: var(--font-d); font-size: clamp(26px,3.5vw,40px); font-weight: 700; color: #fff; line-height: 1.1; margin-bottom: 6px; }
  .av-hero-sub { font-size: 13px; color: rgba(255,255,255,.55); margin-bottom: 16px; }
  .av-hero-meta { display: flex; gap: 16px; flex-wrap: wrap; }
  .av-meta-chip {
    display: flex; align-items: center; gap: 6px;
    background: rgba(255,255,255,.1); backdrop-filter: blur(8px);
    border: 1px solid rgba(255,255,255,.15); border-radius: 20px;
    padding: 5px 14px; font-size: 11px; color: rgba(255,255,255,.8); font-weight: 600;
  }
  .av-hero-status { position: relative; z-index: 1; flex-shrink: 0; }
  .status-badge {
    display: inline-flex; align-items: center; gap: 7px;
    padding: 10px 20px; border-radius: 30px; font-size: 12px; font-weight: 700;
    letter-spacing: .5px; text-transform: uppercase;
  }
  .status-pending  { background: rgba(234,88,12,.2); color: #fdba74; border: 1.5px solid rgba(234,88,12,.4); }
  .status-approved { background: rgba(22,163,74,.2); color: #86efac; border: 1.5px solid rgba(22,163,74,.4); }
  .status-rejected { background: rgba(220,38,38,.2); color: #fca5a5; border: 1.5px solid rgba(220,38,38,.4); }

  /* ─── GRID LAYOUT ─── */
  .av-grid { display: grid; grid-template-columns: 1fr 320px; gap: 24px; align-items: start; }
  @media(max-width:1000px){ .av-grid{ grid-template-columns:1fr; } }

  /* ─── SECTION CARD ─── */
  .av-card {
    background: var(--white); border: 1.5px solid var(--gray-border);
    border-radius: 18px; overflow: hidden;
    box-shadow: var(--shadow-sm); margin-bottom: 20px;
  }
  .av-card-header {
    padding: 20px 28px; border-bottom: 1px solid var(--gray-border);
    background: var(--blue-faint); display: flex; align-items: center; gap: 14px;
  }
  .av-card-icon {
    width: 40px; height: 40px; border-radius: 10px;
    background: var(--blue); display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .av-card-icon svg { color: #fff; }
  .av-card-title { font-family: var(--font-d); font-size: 18px; font-weight: 700; color: var(--navy); }
  .av-card-sub { font-size: 11px; color: var(--gray-mid); margin-top: 1px; }
  .av-card-body { padding: 28px; }

  /* ─── FIELD GRID ─── */
  .fv-grid { display: grid; gap: 6px 20px; }
  .fv-2 { grid-template-columns: 1fr 1fr; }
  .fv-3 { grid-template-columns: 1fr 1fr 1fr; }
  .fv-1 { grid-template-columns: 1fr; }
  @media(max-width:600px){ .fv-2,.fv-3{ grid-template-columns:1fr; } }
  .fv-item { padding: 14px 0; border-bottom: 1px solid var(--gray-border); }
  .fv-item:last-child { border-bottom: none; }
  .fv-label { font-size: 10px; font-weight: 700; letter-spacing: 2px; color: var(--gray-light); text-transform: uppercase; margin-bottom: 4px; }
  .fv-value { font-size: 14px; font-weight: 500; color: var(--gray-dark); line-height: 1.5; }
  .fv-value.empty { color: var(--gray-light); font-style: italic; font-size: 13px; }
  .fv-value.mono { font-family: 'Courier New', monospace; font-size: 13px; background: var(--gray-bg); padding: 3px 8px; border-radius: 5px; display: inline-block; }

  /* divider */
  .fv-divider { grid-column: 1/-1; margin: 8px 0; border: none; border-top: 1px dashed var(--gray-border); }
  .fv-sub-title { grid-column: 1/-1; font-family: var(--font-d); font-size: 15px; font-weight: 600; color: var(--navy); padding: 10px 0 4px; border-bottom: 2px solid var(--blue-faint); margin-bottom: 4px; }

  /* ─── BOOLEAN BADGES ─── */
  .bool-yes { display:inline-flex;align-items:center;gap:5px;background:#dcfce7;color:#15803d;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700; }
  .bool-no  { display:inline-flex;align-items:center;gap:5px;background:#fee2e2;color:#b91c1c;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700; }

  /* ─── DOCUMENT GRID ─── */
  .doc-grid { display: grid; grid-template-columns: repeat(auto-fill,minmax(180px,1fr)); gap: 14px; }
  .doc-card {
    border: 1.5px solid var(--gray-border); border-radius: 12px; overflow: hidden;
    transition: border-color .2s, box-shadow .2s; cursor: pointer;
  }
  .doc-card:hover { border-color: var(--blue); box-shadow: var(--shadow-md); }
  .doc-thumb {
    height: 110px; background: var(--blue-faint);
    display: flex; align-items: center; justify-content: center; font-size: 36px;
    position: relative;
  }
  .doc-thumb img { width: 100%; height: 100%; object-fit: cover; }
  .doc-thumb.pdf-thumb { background: linear-gradient(135deg,#fee2e2,#fecaca); }
  .doc-info { padding: 10px 12px; background: var(--white); }
  .doc-name { font-size: 11px; font-weight: 700; color: var(--gray-dark); margin-bottom: 3px; }
  .doc-tag  { font-size: 10px; color: var(--gray-light); }
  .doc-missing { border: 1.5px dashed var(--gray-border); border-radius: 12px; height: 152px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 6px; color: var(--gray-light); font-size: 11px; }

  /* ─── SIDEBAR ─── */
  .av-sidebar { display: flex; flex-direction: column; gap: 18px; }
  .side-card { background: var(--white); border: 1.5px solid var(--gray-border); border-radius: 16px; padding: 22px; box-shadow: var(--shadow-sm); }
  .side-title { font-family: var(--font-d); font-size: 16px; font-weight: 600; color: var(--navy); margin-bottom: 14px; }
  .side-row { display: flex; justify-content: space-between; align-items: center; padding: 9px 0; border-bottom: 1px solid var(--gray-border); font-size: 12px; }
  .side-row:last-child { border-bottom: none; }
  .side-row-label { color: var(--gray-mid); font-weight: 500; }
  .side-row-val   { font-weight: 700; color: var(--gray-dark); text-align: right; }
  .timeline { display: flex; flex-direction: column; gap: 0; }
  .tl-item { display: flex; gap: 14px; padding-bottom: 16px; position: relative; }
  .tl-item:last-child { padding-bottom: 0; }
  .tl-item:not(:last-child) .tl-line::after { content:''; position:absolute; left:17px; top:32px; bottom:0; width:1px; background:var(--gray-border); }
  .tl-dot { width: 34px; height: 34px; border-radius: 50%; background: var(--blue-faint); border: 2px solid var(--blue); display: flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0; position: relative; z-index: 1; }
  .tl-line { position: relative; }
  .tl-text { flex: 1; padding-top: 6px; }
  .tl-title { font-size: 12px; font-weight: 700; color: var(--gray-dark); }
  .tl-time  { font-size: 10px; color: var(--gray-light); margin-top: 2px; }

  /* ─── FLAGS & DECLARATIONS ─── */
  .decl-item { display: flex; align-items: flex-start; justify-content: space-between; gap: 10px; padding: 12px 0; border-bottom: 1px solid var(--gray-border); }
  .decl-item:last-child { border-bottom: none; }
  .decl-q { font-size: 12px; color: var(--gray-mid); line-height: 1.5; flex: 1; }
  .decl-details { font-size: 11px; color: var(--orange); background: #fff7ed; padding: 6px 10px; border-radius: 7px; margin-top: 6px; }

  /* ─── PRINT ─── */
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
      <a 
      href="{{ route('admin.visa.show.all') }}"
      >
        China Visa Applications
      </a>
      <span>/</span>
      <span>{{ $application->surname }}, {{ $application->first_name }}</span>
    </div>
    <div class="av-actions">
      {{-- <button class="btn-action btn-print" onclick="window.print()">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
        Print
      </button>
      <form
        method="POST" 
        action="{{ route('admin.china-visa.approve', $application->id) }}"
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
        action="{{ route('admin.china-visa.reject', $application->id) }}" 
        style="display:inline"
       >
        @csrf @method('PATCH')
        <button type="submit" class="btn-action btn-reject" onclick="return confirm('Reject this application?')">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
          Reject
        </button>
      </form> --}}
      <button class="btn-action btn-edit" onclick="window.location.href='{{ route('admin.china.visa.show', $application->id) }}'">
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
      <img src="{{ asset('chinaflag.webp') }}" alt="China"/>
    </div>
    <div class="av-hero-info">
      <p class="av-hero-sub">China Visit Visa Application #{{ $application->id }}</p>
      <h1 class="av-hero-name">{{ strtoupper($application->surname) }}, {{ $application->first_name }} {{ $application->middle_name }}</h1>
      <div class="av-hero-meta">
        <div class="av-meta-chip">📧 {{ $application->email }}</div>
        <div class="av-meta-chip">📞 {{ $application->mobile_phone }}</div>
        <div class="av-meta-chip">📅 Submitted {{ $application->created_at->format('d M Y, H:i') }}</div>
        @if($application->departure_date)
          <div class="av-meta-chip">✈️ Departs {{ \Carbon\Carbon::parse($application->departure_date)->format('d M Y') }}</div>
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
            <p class="av-card-sub">Name, birth details & nationality</p>
          </div>
        </div>
        <div class="av-card-body">
          <div class="fv-grid fv-3">
            <div class="fv-item"><div class="fv-label">Surname</div><div class="fv-value">{{ $application->surname ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">First Name</div><div class="fv-value">{{ $application->first_name ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Middle Name</div><div class="fv-value {{ !$application->middle_name ? 'empty' : '' }}">{{ $application->middle_name ?? 'Not provided' }}</div></div>
            <div class="fv-item"><div class="fv-label">City of Birth</div><div class="fv-value">{{ $application->city_of_birth ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">State / Region</div><div class="fv-value">{{ $application->state_of_birth ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Country of Birth</div><div class="fv-value">{{ $application->country_of_birth ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Marital Status</div><div class="fv-value">{{ $application->marital_status ?? '—' }}</div></div>
            <div class="fv-item">
              <div class="fv-label">Other Nationality?</div>
              <div class="fv-value">
                @if($application->other_nationality === 'yes')
                  <span class="bool-yes">✓ Yes</span>
                @else
                  <span class="bool-no">✕ No</span>
                @endif
              </div>
            </div>
            @if($application->other_nationality === 'yes')
            <div class="fv-item"><div class="fv-label">Other Nationality</div><div class="fv-value">{{ $application->other_nationality_name ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Other Passport No.</div><div class="fv-value mono">{{ $application->other_passport_number ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Date Obtained</div><div class="fv-value">{{ $application->other_nationality_date ? \Carbon\Carbon::parse($application->other_nationality_date)->format('d M Y') : '—' }}</div></div>
            @endif
          </div>
        </div>
      </div>

      {{-- ── HOME ADDRESS & CONTACT ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <div>
            <p class="av-card-title">Home Address & Contact</p>
            <p class="av-card-sub">Residential address and contact details</p>
          </div>
        </div>
        <div class="av-card-body">
          <div class="fv-grid fv-2">
            <div class="fv-item"><div class="fv-label">Mobile Phone</div><div class="fv-value"><a href="tel:{{ $application->mobile_phone }}" style="color:var(--blue);text-decoration:none;font-weight:600;">{{ $application->mobile_phone }}</a></div></div>
            <div class="fv-item"><div class="fv-label">Email Address</div><div class="fv-value"><a href="mailto:{{ $application->email }}" style="color:var(--blue);text-decoration:none;font-weight:600;">{{ $application->email }}</a></div></div>
            <div class="fv-item"><div class="fv-label">Door / Flat No</div><div class="fv-value">{{ $application->home_door ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Street</div><div class="fv-value">{{ $application->home_street ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">City</div><div class="fv-value">{{ $application->home_city ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Postcode</div><div class="fv-value mono">{{ $application->home_postcode ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Country</div><div class="fv-value">{{ $application->home_country ?? '—' }}</div></div>
          </div>
        </div>
      </div>

      {{-- ── EMERGENCY CONTACT ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .82h3a2 2 0 012 1.72"/></svg>
          </div>
          <div>
            <p class="av-card-title">Emergency Contact</p>
            <p class="av-card-sub">Person to contact during trip</p>
          </div>
        </div>
        <div class="av-card-body">
          <div class="fv-grid fv-2">
            <div class="fv-item"><div class="fv-label">Full Name</div><div class="fv-value">{{ $application->emergency_name ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Relationship</div><div class="fv-value">{{ $application->emergency_relationship ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Telephone</div><div class="fv-value"><a href="tel:{{ $application->emergency_phone }}" style="color:var(--blue);text-decoration:none;font-weight:600;">{{ $application->emergency_phone }}</a></div></div>
            <div class="fv-item"><div class="fv-label">Email</div><div class="fv-value {{ !$application->emergency_email ? 'empty' : '' }}">{{ $application->emergency_email ?? 'Not provided' }}</div></div>
            <div class="fv-item"><div class="fv-label">Address</div><div class="fv-value">
              {{ $application->emergency_door }}, {{ $application->emergency_street }},
              {{ $application->emergency_city }}, {{ $application->emergency_postcode }},
              {{ $application->emergency_country }}
            </div></div>
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
            <p class="av-card-sub">Dates, destination and occupation</p>
          </div>
        </div>
        <div class="av-card-body">
          <div class="fv-grid fv-2">
            <div class="fv-item">
              <div class="fv-label">Departure Date</div>
              <div class="fv-value">
                {{ $application->departure_date ? \Carbon\Carbon::parse($application->departure_date)->format('D, d M Y') : '—' }}
                @php
                  $days = $application->departure_date ? now()->diffInDays(\Carbon\Carbon::parse($application->departure_date), false) : null;
                @endphp
                @if($days !== null)
                  <span style="margin-left:8px;font-size:11px;padding:2px 8px;border-radius:20px;font-weight:700;background:{{ $days < 0 ? '#fee2e2' : ($days <= 14 ? '#fff7ed' : '#dcfce7') }};color:{{ $days < 0 ? '#b91c1c' : ($days <= 14 ? '#c2410c' : '#15803d') }}">
                    {{ $days < 0 ? abs($days).' days ago' : 'in '.$days.' days' }}
                  </span>
                @endif
              </div>
            </div>
            <div class="fv-item"><div class="fv-label">Return Date</div><div class="fv-value">{{ $application->return_date ? \Carbon\Carbon::parse($application->return_date)->format('D, d M Y') : '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Destination City</div><div class="fv-value">🇨🇳 {{ $application->destination_city ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Occupation</div><div class="fv-value">{{ $application->occupation ?? '—' }}</div></div>
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
              ['key'=>'passport_scan',   'label'=>'Passport Scan',          'icon'=>'🛂', 'required'=>true],
              ['key'=>'empty_pages',     'label'=>'Empty Passport Pages',   'icon'=>'📄', 'required'=>true],
              ['key'=>'selfie_photo',    'label'=>'Selfie Photo',           'icon'=>'🤳', 'required'=>true],
              ['key'=>'oldVisaCopy',     'label'=>'Previous China Visa',    'icon'=>'🇨🇳', 'required'=>false],
              ['key'=>'bank_statements', 'label'=>'Bank Statements',        'icon'=>'🏦', 'required'=>false],
              ['key'=>'payslips',        'label'=>'Payslips',               'icon'=>'💷', 'required'=>false],
              ['key'=>'dbs_check',       'label'=>'DBS Certificate',        'icon'=>'🔍', 'required'=>false],
              ['key'=>'prev_visa',       'label'=>'Prev Visa Copy',         'icon'=>'📋', 'required'=>false],
            ];
          @endphp
          <div class="doc-grid">
            @foreach($docs as $doc)
              @if($application->{$doc['key']})
                @php $path = $application->{$doc['key']}; $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION)); @endphp
                <a href="{{ asset('storage/'.$path) }}" target="_blank" class="doc-card" style="text-decoration:none;">
                  <div class="doc-thumb {{ in_array($ext,['pdf']) ? 'pdf-thumb' : '' }}">
                    @if(in_array($ext,['jpg','jpeg','png','webp']))
                      <img src="{{ asset('storage/'.$path) }}" alt="{{ $doc['label'] }}"/>
                    @else
                      <span style="font-size:36px;">📄</span>
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
                  <span style="font-size:10px;background:{{ $doc['required'] ? '#fee2e2' : '#f3f4f6' }};color:{{ $doc['required'] ? '#b91c1c' : '#9ca3af' }};padding:2px 8px;border-radius:20px;font-weight:700;">{{ $doc['required'] ? 'Required' : 'Optional' }}</span>
                </div>
              @endif
            @endforeach
          </div>
        </div> --}}
        <div class="av-card-body">
            @php
            $docs = [
                ['key'=>'passport_scan',   'label'=>'Passport Scan',          'icon'=>'🛂', 'required'=>true],
                ['key'=>'empty_pages',     'label'=>'Empty Passport Pages',   'icon'=>'📄', 'required'=>true],
                ['key'=>'selfie_photo',    'label'=>'Selfie Photo',           'icon'=>'🤳', 'required'=>true],
                ['key'=>'oldVisaCopy',     'label'=>'Previous China Visa',    'icon'=>'🇨🇳', 'required'=>false],
                ['key'=>'bank_statements', 'label'=>'Bank Statements',        'icon'=>'🏦', 'required'=>false],
                ['key'=>'payslips',        'label'=>'Payslips',               'icon'=>'💷', 'required'=>false],
                ['key'=>'dbs_check',       'label'=>'DBS Certificate',        'icon'=>'🔍', 'required'=>false],
                ['key'=>'prev_visa',       'label'=>'Prev Visa Copy',         'icon'=>'📋', 'required'=>false],
            ];
            @endphp

            <div class="doc-grid">
            @foreach($docs as $doc)

            @if($application->{$doc['key']})
                @php
                $path = $application->{$doc['key']};
                $ext  = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                @endphp

                <a href="{{ asset($path) }}" target="_blank" class="doc-card" style="text-decoration:none;">
                
                <div class="doc-thumb {{ $ext === 'pdf' ? 'pdf-thumb' : '' }}">
                    
                    {{-- IMAGE --}}
                    @if(in_array($ext,['jpg','jpeg','png','webp']))
                    <img src="{{ asset($path) }}" alt="{{ $doc['label'] }}" style="object-fit:fill;" />

                    {{-- PDF --}}
                    @elseif($ext === 'pdf')
                    <iframe 
                        src="{{ asset($path) }}" 
                        style="width:100%;height:120px;border:none;">
                    </iframe>

                    {{-- OTHER --}}
                    @else
                    <span style="font-size:36px;">📁</span>
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
                    {{ $doc['required'] ? 'Required' : 'Optional' }}
                </span>
                </div>

            @endif

            @endforeach
            </div>
            </div>
        </div>

      {{-- ── WORK INFO ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
          </div>
          <div>
            <p class="av-card-title">Work Information</p>
            <p class="av-card-sub">Employment details & 5-year history</p>
          </div>
        </div>
        <div class="av-card-body">
          <div class="fv-grid fv-2">
            <div class="fv-item"><div class="fv-label">Company Name</div><div class="fv-value">{{ $application->company_name ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Job Title</div><div class="fv-value">{{ $application->job_title ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Work Address</div><div class="fv-value">{{ $application->work_door }}, {{ $application->work_street }}, {{ $application->work_city }}, {{ $application->work_postcode }}, {{ $application->work_country }}</div></div>
            <div class="fv-item"><div class="fv-label">Work Telephone</div><div class="fv-value"><a href="tel:{{ $application->work_phone }}" style="color:var(--blue);text-decoration:none;font-weight:600;">{{ $application->work_phone }}</a></div></div>
            <div class="fv-item"><div class="fv-label">Annual Income</div><div class="fv-value">£{{ number_format($application->annual_income) }}</div></div>
            <div class="fv-item"><div class="fv-label">Start Date</div><div class="fv-value">{{ $application->job_start_date ? \Carbon\Carbon::parse($application->job_start_date)->format('d M Y') : '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Supervisor</div><div class="fv-value">{{ $application->supervisor_name ?? '—' }}<br><span style="font-size:12px;color:var(--gray-mid);">{{ $application->supervisor_phone }}</span></div></div>
            <div class="fv-item fv-1" style="grid-column:1/-1"><div class="fv-label">Job Duties</div><div class="fv-value" style="white-space:pre-line">{{ $application->job_duties ?? '—' }}</div></div>
            <hr class="fv-divider">
            <div class="fv-item fv-1" style="grid-column:1/-1"><div class="fv-label">5-Year Work History</div><div class="fv-value" style="white-space:pre-line;background:var(--gray-bg);padding:14px;border-radius:10px;margin-top:6px;font-size:13px;">{{ $application->work_history ?? '—' }}</div></div>
          </div>
        </div>
      </div>

      {{-- ── EDUCATION ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
          </div>
          <div>
            <p class="av-card-title">Education</p>
            <p class="av-card-sub">Highest level of education</p>
          </div>
        </div>
        <div class="av-card-body">
          <div class="fv-grid fv-2">
            <div class="fv-item"><div class="fv-label">School / University</div><div class="fv-value">{{ $application->school_name ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Degree / Diploma</div><div class="fv-value">{{ $application->degree ?? '—' }}</div></div>
            <div class="fv-item" style="grid-column:1/-1"><div class="fv-label">Subjects Studied</div><div class="fv-value" style="white-space:pre-line">{{ $application->subjects ?? '—' }}</div></div>
          </div>
        </div>
      </div>

      {{-- ── TRAVEL HISTORY ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg>
          </div>
          <div>
            <p class="av-card-title">Travel History</p>
            <p class="av-card-sub">Previous China visits & visa history</p>
          </div>
        </div>
        <div class="av-card-body">
          <div class="fv-grid fv-2">
            <div class="fv-item"><div class="fv-label">Been to China (3 yrs)?</div><div class="fv-value">@if($application->been_to_china === 'yes')<span class="bool-yes">✓ Yes</span>@else<span class="bool-no">✕ No</span>@endif</div></div>
            <div class="fv-item"><div class="fv-label">Previously Issued China Visa?</div><div class="fv-value">@if($application->prev_china_visa === 'yes')<span class="bool-yes">✓ Yes</span>@else<span class="bool-no">✕ No</span>@endif</div></div>
            @if($application->prev_china_visa === 'yes')
            <div class="fv-item"><div class="fv-label">Last Fingerprint Date</div><div class="fv-value">{{ $application->prev_fingerprint_date ? \Carbon\Carbon::parse($application->prev_fingerprint_date)->format('d M Y') : '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Country Last Applied</div><div class="fv-value">{{ $application->prev_visa_country ?? '—' }}</div></div>
            @endif
            <div class="fv-item"><div class="fv-label">Held Residence Permit?</div><div class="fv-value">@if($application->residence_permit === 'yes')<span class="bool-yes">✓ Yes — <span class="mono">{{ $application->permit_number }}</span></span>@else<span class="bool-no">✕ No</span>@endif</div></div>
            <div class="fv-item"><div class="fv-label">Valid Visas (Other Countries)?</div><div class="fv-value">@if($application->other_visas === 'yes')<span class="bool-yes">✓ Yes</span><br><span style="font-size:12px;color:var(--gray-mid)">{{ $application->other_visa_countries }}</span>@else<span class="bool-no">✕ No</span>@endif</div></div>
            <div class="fv-item" style="grid-column:1/-1"><div class="fv-label">Countries Visited Past 12 Months</div><div class="fv-value">@if($application->visited_past_year === 'yes')<span style="white-space:pre-line">{{ $application->visited_countries }}</span>@else<span class="bool-no">✕ None</span>@endif</div></div>
          </div>
        </div>
      </div>

      {{-- ── FAMILY INFO ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <div>
            <p class="av-card-title">Family Information</p>
            <p class="av-card-sub">Father, mother and spouse details</p>
          </div>
        </div>
        <div class="av-card-body">
          @foreach([
            ['prefix'=>'father', 'label'=>"Father's Details"],
            ['prefix'=>'mother', 'label'=>"Mother's Details"],
          ] as $member)
          <p class="fv-sub-title">{{ $member['label'] }}</p>
          <div class="fv-grid fv-3">
            <div class="fv-item"><div class="fv-label">Full Name</div><div class="fv-value">{{ $application->{$member['prefix'].'_name'} ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Date of Birth</div><div class="fv-value">{{ $application->{$member['prefix'].'_dob'} ? \Carbon\Carbon::parse($application->{$member['prefix'].'_dob'})->format('d M Y') : '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Nationality</div><div class="fv-value">{{ $application->{$member['prefix'].'_nationality'} ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Occupation</div><div class="fv-value">{{ $application->{$member['prefix'].'_occupation'} ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Lives in China?</div><div class="fv-value">@if($application->{$member['prefix'].'_in_china'} === 'yes')<span class="bool-yes">✓ Yes — {{ $application->{$member['prefix'].'_china_status'} }}</span>@else<span class="bool-no">✕ No</span>@endif</div></div>
            <div class="fv-item"><div class="fv-label">Address</div><div class="fv-value" style="font-size:12px">{{ implode(', ', array_filter([$application->{$member['prefix'].'_door'}, $application->{$member['prefix'].'_street'}, $application->{$member['prefix'].'_city'}, $application->{$member['prefix'].'_postcode'}, $application->{$member['prefix'].'_country'}])) ?: '—' }}</div></div>
          </div>
          @endforeach

          @if($application->spouse_name)
          <p class="fv-sub-title" style="margin-top:12px;">Spouse's Details</p>
          <div class="fv-grid fv-3">
            <div class="fv-item"><div class="fv-label">Full Name</div><div class="fv-value">{{ $application->spouse_name }}</div></div>
            <div class="fv-item"><div class="fv-label">Date of Birth</div><div class="fv-value">{{ $application->spouse_dob ? \Carbon\Carbon::parse($application->spouse_dob)->format('d M Y') : '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Nationality</div><div class="fv-value">{{ $application->spouse_nationality ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Occupation</div><div class="fv-value">{{ $application->spouse_occupation ?? '—' }}</div></div>
            <div class="fv-item"><div class="fv-label">Address</div><div class="fv-value">{{ implode(', ', array_filter([$application->spouse_street, $application->spouse_city, $application->spouse_postcode, $application->spouse_country])) ?: '—' }}</div></div>
          </div>
          @endif
        </div>
      </div>

      {{-- ── DECLARATIONS ── --}}
      <div class="av-card">
        <div class="av-card-header">
          <div class="av-card-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <div>
            <p class="av-card-title">Declarations</p>
            <p class="av-card-sub">Applicant's self-declared answers</p>
          </div>
        </div>
        <div class="av-card-body">
          @php
            $declarations = [
              ['field'=>'china_refused',    'details_field'=>'china_refused_details',    'label'=>'Ever refused a China visa or entry?'],
              ['field'=>'criminal_record',  'details_field'=>'criminal_details',          'label'=>'Criminal record in China or other country?'],
              ['field'=>'medical_condition','details_field'=>'medical_details',           'label'=>'Serious mental disorder or infectious disease?'],
              ['field'=>'epidemic_visit',   'details_field'=>'epidemic_details',          'label'=>'Visited epidemic-affected countries (past 30 days)?'],
              ['field'=>'military_service', 'details_field'=>null,                        'label'=>'Serving or served in military?'],
              ['field'=>'other_declaration','details_field'=>'other_declaration_details', 'label'=>'Any other declarations?'],
            ];
          @endphp
          @foreach($declarations as $d)
          <div class="decl-item">
            <div style="flex:1">
              <div class="decl-q">{{ $d['label'] }}</div>
              @if($application->{$d['field']} === 'yes' && $d['details_field'] && $application->{$d['details_field']})
                <div class="decl-details">⚠️ {{ $application->{$d['details_field']} }}</div>
              @endif
              @if($application->{$d['field']} === 'yes' && $d['field'] === 'military_service')
                <div class="decl-details">🪖 {{ $application->military_country }} · {{ $application->military_branch }} · Rank: {{ $application->military_rank }} · {{ $application->military_start }} – {{ $application->military_end }}</div>
              @endif
            </div>
            <div>
              @if($application->{$d['field']} === 'yes')
                <span class="bool-yes" style="background:#fff7ed;color:#c2410c;">⚠️ Yes</span>
              @else
                <span class="bool-no">✕ No</span>
              @endif
            </div>
          </div>
          @endforeach
          <div style="margin-top:16px;padding:14px 18px;background:var(--blue-faint);border:1.5px solid rgba(26,74,171,.15);border-radius:10px;display:flex;align-items:center;gap:10px;">
            <span style="font-size:18px">✅</span>
            <span style="font-size:12px;color:var(--navy);font-weight:500;">Applicant confirmed all information is true and accurate at time of submission.</span>
          </div>
        </div>
      </div>

    </div><!-- /main col -->

    {{-- SIDEBAR --}}
    <div class="av-sidebar">

      <div class="side-card" style="background:linear-gradient(135deg,var(--navy),var(--navy-mid));border-color:transparent;">
        <p class="side-title" style="color:#fff">Application Summary</p>
        <div class="side-row" style="border-color:rgba(255,255,255,.1)">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Application ID</span>
          <span class="side-row-val" style="color:#fff;font-family:'Courier New',monospace">#{{ $application->id }}</span>
        </div>
        {{-- <div class="side-row" style="border-color:rgba(255,255,255,.1)">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Status</span>
          <span class="status-badge status-{{ $statusClass }}" style="font-size:10px;padding:4px 12px;">{{ $statusIcon }} {{ ucfirst($status) }}</span>
        </div> --}}
        <div class="side-row" style="border-color:rgba(255,255,255,.1)">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Submitted</span>
          <span class="side-row-val" style="color:rgba(255,255,255,.85)">{{ $application->created_at->format('d M Y') }}</span>
        </div>
        <div class="side-row" style="border-color:rgba(255,255,255,.1)">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Last Updated</span>
          <span class="side-row-val" style="color:rgba(255,255,255,.85)">{{ $application->updated_at->format('d M Y') }}</span>
        </div>
        <div class="side-row" style="border-color:rgba(255,255,255,.1)">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Destination</span>
          <span class="side-row-val" style="color:rgba(255,255,255,.85)">{{ $application->destination_city ?? '—' }}</span>
        </div>
        <div class="side-row" style="border-color:rgba(255,255,255,.1)">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Departure</span>
          <span class="side-row-val" style="color:rgba(255,255,255,.85)">{{ $application->departure_date ? \Carbon\Carbon::parse($application->departure_date)->format('d M Y') : '—' }}</span>
        </div>
        <div class="side-row" style="border-color:rgba(255,255,255,.1);border-bottom:none">
          <span class="side-row-label" style="color:rgba(255,255,255,.6)">Return</span>
          <span class="side-row-val" style="color:rgba(255,255,255,.85)">{{ $application->return_date ? \Carbon\Carbon::parse($application->return_date)->format('d M Y') : '—' }}</span>
        </div>
      </div>

      {{-- DOC CHECKLIST --}}
      {{-- <div class="side-card">
        <p class="side-title">Document Checklist</p>
        @php
          $docCheck = [
            ['key'=>'passport_scan',   'label'=>'Passport Scan',        'required'=>true],
            ['key'=>'empty_pages',     'label'=>'Empty Passport Pages', 'required'=>true],
            ['key'=>'selfie_photo',    'label'=>'Selfie Photo',         'required'=>true],
            ['key'=>'oldVisaCopy',     'label'=>'Previous China Visa',  'required'=>false],
            ['key'=>'bank_statements', 'label'=>'Bank Statements',      'required'=>false],
            ['key'=>'payslips',        'label'=>'Payslips',             'required'=>false],
            ['key'=>'dbs_check',       'label'=>'DBS Certificate',      'required'=>false],
          ];
        @endphp
        @foreach($docCheck as $doc)
        <div class="side-row">
          <span class="side-row-label" style="display:flex;align-items:center;gap:6px;">
            @if($doc['required'])<span style="width:6px;height:6px;border-radius:50%;background:var(--red);display:inline-block;flex-shrink:0"></span>@else<span style="width:6px;height:6px;border-radius:50%;background:var(--green);display:inline-block;flex-shrink:0"></span>@endif
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
      </div> --}}

      {{-- DECLARATIONS FLAG --}}
      {{-- @php
        $flagged = collect(['china_refused','criminal_record','medical_condition','epidemic_visit','military_service','other_declaration'])
          ->filter(fn($f) => $application->$f === 'yes');
      @endphp
      @if($flagged->count())
      <div class="side-card" style="border-color:#fca5a5;background:#fff5f5;">
        <p class="side-title" style="color:var(--red)">⚠️ Flagged Declarations ({{ $flagged->count() }})</p>
        @foreach($flagged as $flag)
          <div style="font-size:12px;padding:8px 0;border-bottom:1px solid #fecaca;color:#7f1d1d;">{{ ucfirst(str_replace('_',' ',$flag)) }}</div>
        @endforeach
      </div>
      @else
      <div class="side-card" style="border-color:#86efac;background:#f0fdf4;">
        <p class="side-title" style="color:var(--green)">✅ No Declaration Flags</p>
        <p style="font-size:12px;color:#15803d;">All declarations returned "No". No flags to review.</p>
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