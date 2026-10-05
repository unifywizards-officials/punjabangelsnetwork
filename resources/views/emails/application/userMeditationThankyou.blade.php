<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Thank You – Transform 15.0 | Punjab Angels Network</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=Inter:wght@400;500;600&display=swap');

  * { margin: 0; padding: 0; box-sizing: border-box; }

  body {
    background: #1a0a3d;
    font-family: 'Inter', Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    padding: 30px 16px;
  }

  .wrap {
    max-width: 620px;
    margin: 0 auto;
  }

  /* ─ TOP HEADER BAND ─ */
  .top-band {
    background: #12063a;
    border-radius: 20px 20px 0 0;
    padding: 36px 44px 0;
    text-align: center;
    border: 1px solid #3a1a7a;
    border-bottom: none;
  }

  .logo-wrap {
    margin-bottom: 28px;
  }

  .logo-wrap img {
    height: 48px;
  }

  /* HERO SECTION */
  .hero {
    background: linear-gradient(170deg, #2d0f72 0%, #1a0650 40%, #12063a 100%);
    padding: 0 44px 44px;
    text-align: center;
    border-left: 1px solid #3a1a7a;
    border-right: 1px solid #3a1a7a;
    position: relative;
    overflow: hidden;
  }

  .hero::before {
    content: '';
    position: absolute;
    top: -60px; left: 50%; transform: translateX(-50%);
    width: 400px; height: 400px;
    background: radial-gradient(ellipse, rgba(180, 100, 255, 0.12) 0%, transparent 70%);
    pointer-events: none;
  }

  .confirmed-pill {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: rgba(212, 175, 55, 0.12);
    border: 1px solid rgba(212, 175, 55, 0.45);
    color: #d4af37;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 100px;
    margin-bottom: 24px;
  }

  .confirmed-pill .dot {
    width: 7px; height: 7px;
    background: #d4af37;
    border-radius: 50%;
    display: inline-block;
  }

  .hero-eyebrow {
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.4);
    margin-bottom: 10px;
  }

  .hero-title {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 42px;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 6px;
  }

  .hero-title .gold { color: #d4af37; }

  .hero-sub {
    font-family: 'Playfair Display', serif;
    font-style: italic;
    font-size: 15px;
    color: rgba(255,255,255,0.45);
    margin-bottom: 30px;
    letter-spacing: 0.5px;
  }

  /* TAGLINE STRIP */
  .tagline-strip {
    background: #d4af37;
    border-radius: 10px;
    padding: 14px 20px;
    margin: 0 auto;
    max-width: 440px;
  }

  .tagline-strip p {
    font-size: 13px;
    font-weight: 600;
    color: #1a0650;
    text-align: center;
    line-height: 1.5;
  }

  /* ─ BODY CARD ─ */
  .body-card {
    background: #ffffff;
    padding: 44px;
    border-left: 1px solid #3a1a7a;
    border-right: 1px solid #3a1a7a;
  }

  .greeting {
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    font-weight: 600;
    color: #1a0650;
    margin-bottom: 16px;
  }

  .body-card p.body-text {
    font-size: 15px;
    color: #4a4060;
    line-height: 1.85;
    margin-bottom: 16px;
  }

  /* ─ EVENT DETAILS BOX ─ */
  .event-box {
    background: #0f0530;
    border-radius: 14px;
    padding: 28px 30px;
    margin: 30px 0;
    position: relative;
    overflow: hidden;
  }

  .event-box::after {
    content: '';
    position: absolute;
    top: -40px; right: -40px;
    width: 160px; height: 160px;
    background: radial-gradient(circle, rgba(212,175,55,0.15) 0%, transparent 70%);
    pointer-events: none;
  }

  .event-box-title {
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: #d4af37;
    margin-bottom: 20px;
  }

  .detail-row {
    display: flex;
    gap: 0;
    border-top: 1px solid rgba(255,255,255,0.07);
  }

  .detail-col {
    flex: 1;
    padding: 18px 16px;
    border-right: 1px solid rgba(255,255,255,0.07);
    text-align: center;
  }

  .detail-col:last-child { border-right: none; }

  .detail-col .detail-icon {
    font-size: 22px;
    margin-bottom: 8px;
    display: block;
  }

  .detail-col .detail-label {
    font-size: 9px;
    font-weight: 600;
    letter-spacing: 1.8px;
    text-transform: uppercase;
    color: rgba(212,175,55,0.7);
    margin-bottom: 5px;
    display: block;
  }

  .detail-col .detail-value {
    font-size: 13px;
    font-weight: 600;
    color: #ffffff;
    line-height: 1.4;
  }

  /* ─ WHAT TO EXPECT ─ */
  .section-label {
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: #8b60c4;
    margin-bottom: 16px;
    margin-top: 32px;
  }

  .expect-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 32px;
  }

  .expect-item {
    background: #f7f4ff;
    border: 1px solid #e2d8f5;
    border-radius: 10px;
    padding: 16px;
    display: flex;
    gap: 11px;
    align-items: flex-start;
  }

  .expect-item .icon-wrap {
    width: 34px;
    height: 34px;
    background: #2d0f72;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    flex-shrink: 0;
  }

  .expect-item .item-text {
    font-size: 13px;
    color: #3d2060;
    line-height: 1.5;
    font-weight: 500;
    padding-top: 7px;
  }

  /* ─ DIVIDER ─ */
  .divider {
    height: 1px;
    background: linear-gradient(to right, transparent, #d4af37, transparent);
    margin: 32px 0;
    border: none;
  }

  /* ─ SIGN OFF ─ */
  .signoff-text {
    font-size: 15px;
    color: #4a4060;
    line-height: 1.85;
    margin-bottom: 14px;
  }

  .script-quote {
    font-family: 'Playfair Display', serif;
    font-style: italic;
    font-size: 20px;
    color: #2d0f72;
    text-align: center;
    margin: 24px 0;
    padding: 20px 24px;
    border-left: 3px solid #d4af37;
    background: #fdf9ff;
    border-radius: 0 10px 10px 0;
  }

  .team-name {
    font-family: 'Playfair Display', serif;
    font-size: 17px;
    color: #2d0f72;
    font-weight: 700;
    margin-top: 6px;
  }

  .team-role {
    font-size: 12px;
    color: #9080ac;
    margin-top: 3px;
  }

  /* ─ CTA BUTTON ─ */
  .cta-wrap {
    text-align: center;
    margin: 30px 0 10px;
  }

  .cta-btn {
    display: inline-block;
    background: #2d0f72;
    color: #d4af37 !important;
    font-size: 14px;
    font-weight: 700;
    padding: 15px 40px;
    border-radius: 100px;
    text-decoration: none;
    letter-spacing: 1px;
    text-transform: uppercase;
    border: 1.5px solid #d4af37;
  }

  /* ─ FOOTER ─ */
  .footer {
    background: #0f0530;
    border-radius: 0 0 20px 20px;
    padding: 32px 44px;
    text-align: center;
    border: 1px solid #3a1a7a;
    border-top: none;
  }

  .footer img {
    height: 38px;
    margin-bottom: 16px;
    opacity: 0.8;
  }

  .footer-divider {
    height: 1px;
    background: rgba(255,255,255,0.08);
    margin: 14px 0 16px;
  }

  .footer-contact {
    font-size: 12.5px;
    color: rgba(255,255,255,0.55);
    line-height: 2;
  }

  .footer-contact a {
    color: #c9a8f5;
    text-decoration: none;
  }

  .footer-note {
    font-size: 10.5px;
    color: rgba(255,255,255,0.25);
    margin-top: 14px;
    line-height: 1.7;
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
  }

  @media (max-width: 500px) {
    .top-band, .hero, .body-card, .footer { padding-left: 22px; padding-right: 22px; }
    .hero-title { font-size: 30px; }
    .expect-grid { grid-template-columns: 1fr; }
    .detail-col { padding: 14px 10px; }
    .detail-col .detail-value { font-size: 12px; }
  }
</style>
</head>
<body>
<div class="wrap">

  <!-- TOP HEADER -->
  <div class="top-band">
    <div class="logo-wrap">
      <img src="https://punjabangelsnetwork.com/guest/images/logo-dark.png" alt="Punjab Angels Network" />
    </div>
  </div>

  <!-- HERO -->
  <div class="hero">
    <div class="confirmed-pill"><span class="dot"></span> Registration Confirmed</div>
    <p class="hero-eyebrow">Punjab Angels Network Presents</p>
    <h1 class="hero-title"><span class="gold">T</span>ransform <span class="gold">15.0</span></h1>
    <p class="hero-sub">An Evening of Innovation, Investment &amp; Impact</p>

    <div class="tagline-strip">
      <p>🎉 &nbsp;You're officially part of the room where it happens.</p>
    </div>
  </div>

  <!-- BODY -->
  <div class="body-card">

    <p class="greeting">Dear [Participant Name],</p>

    <p class="body-text">
      We're thrilled to confirm your spot at <strong>Transform 15.0</strong> — Punjab Angels Network's flagship evening bringing together the brightest investors, entrepreneurs, and visionaries in one powerful room.
    </p>

    <p class="body-text">
      Your registration is locked in. Get ready for an experience that goes far beyond networking — this is where bold ideas meet serious capital.
    </p>

    <!-- EVENT DETAILS -->
    <div class="event-box">
      <p class="event-box-title">📌 &nbsp;Event Details</p>
      <div class="detail-row">
        <div class="detail-col">
          <span class="detail-icon">📅</span>
          <span class="detail-label">Date</span>
          <span class="detail-value">11th July 2026<br /><span style="font-weight:400; color:rgba(255,255,255,0.5); font-size:11px;">Saturday</span></span>
        </div>
        <div class="detail-col">
          <span class="detail-icon">⏰</span>
          <span class="detail-label">Time</span>
          <span class="detail-value">4:30 PM Onwards<br /><span style="font-weight:400; color:rgba(255,255,255,0.5); font-size:11px;">Followed by Dinner</span></span>
        </div>
        <div class="detail-col">
          <span class="detail-icon">📍</span>
          <span class="detail-label">Venue</span>
          <span class="detail-value">JW Marriott<br /><span style="font-weight:400; color:rgba(255,255,255,0.5); font-size:11px;">Chandigarh</span></span>
        </div>
      </div>
    </div>

    <p class="section-label">What's in store for you</p>

    <div class="expect-grid">
      <div class="expect-item">
        <div class="icon-wrap">💡</div>
        <div class="item-text">Keynotes from industry leaders &amp; serial entrepreneurs</div>
      </div>
      <div class="expect-item">
        <div class="icon-wrap">💰</div>
        <div class="item-text">High-value investment discussions &amp; funding opportunities</div>
      </div>
      <div class="expect-item">
        <div class="icon-wrap">🤝</div>
        <div class="item-text">Meaningful connections with visionaries &amp; changemakers</div>
      </div>
      <div class="expect-item">
        <div class="icon-wrap">🍽️</div>
        <div class="item-text">Exclusive dinner to continue conversations after the event</div>
      </div>
    </div>

    <div class="cta-wrap">
      <a href="https://punjabangelsnetwork.com" class="cta-btn" target="_blank">Visit Punjab Angels Network</a>
    </div>

    <hr class="divider" />

    <div class="script-quote">
      "Connect. Collaborate. Transform." &nbsp;— See you on 11th July! 🚀
    </div>

    <p class="signoff-text">
      For any queries before the event, feel free to reach out. We're happy to help!<br />
      📞 <strong>+91 98786 00316</strong> &nbsp;|&nbsp; ✉️ <a href="mailto:info@punjabangelsnetwork.com" style="color:#5b1fa0; font-weight:600;">info@punjabangelsnetwork.com</a>
    </p>

    <br />
    <p style="font-size:14.5px; color:#4a4060;">Warm regards,</p>
    <p class="team-name">The Punjab Angels Network Team</p>
    <p class="team-role">Transform 15.0 &nbsp;·&nbsp; 11 July 2026, Chandigarh</p>

  </div>

  <!-- FOOTER -->
  <div class="footer">
    <img src="https://punjabangelsnetwork.com/guest/images/logo-dark.png" alt="Punjab Angels Network" />
    <div class="footer-divider"></div>
    <div class="footer-contact">
      📞 <a href="tel:+919878600316">+91 98786 00316</a> &nbsp;|&nbsp; ✉️ <a href="mailto:info@punjabangelsnetwork.com">info@punjabangelsnetwork.com</a>
    </div>
    <p class="footer-note">
      You're receiving this email because you registered for Transform 15.0 by Punjab Angels Network. If you believe this was sent in error, please contact us.
    </p>
  </div>

</div>
</body>
</html>