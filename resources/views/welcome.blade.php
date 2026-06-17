<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Karennia Putri Baginda – Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  :root {
    --blue: #1A35C6; --yellow: #FFE44D; --pink: #FF6B9D;
    --bg: #F5F5F8; --white: #FFFFFF; --dark: #111111;
    --gray: #6B6B6B; --border: #D9D9E3; --card-bg: #FFFFFF;
  }
  html { scroll-behavior: smooth; }
  body { font-family: 'Space Grotesk', sans-serif; background: var(--bg); color: var(--dark); overflow-x: hidden; }
  body::before {
    content: ''; position: fixed; inset: 0;
    background-image: linear-gradient(rgba(26,53,198,.05) 1px, transparent 1px), linear-gradient(90deg, rgba(26,53,198,.05) 1px, transparent 1px);
    background-size: 40px 40px; pointer-events: none; z-index: 0;
  }
  nav {
    position: sticky; top: 0; z-index: 100;
    background: rgba(245,245,248,.92); backdrop-filter: blur(12px);
    padding: 14px 24px; display: flex; justify-content: center; align-items: center;
    border-bottom: 1px solid var(--border);
  }
  .nav-inner {
    display: flex; align-items: center; gap: 4px;
    background: var(--white); border: 1.5px solid var(--border);
    border-radius: 999px; padding: 6px 8px;
  }
  .nav-inner a {
    text-decoration: none; font-size: 14px; font-weight: 600;
    color: var(--dark); padding: 6px 20px; border-radius: 999px;
    transition: background .2s, color .2s;
  }
  .nav-inner a.active, .nav-inner a:hover { background: var(--blue); color: var(--white); }
  .nav-sparkle { position: absolute; right: 32px; font-size: 22px; color: var(--blue); opacity: .5; }
  .hero {
    position: relative; z-index: 1; max-width: 900px; margin: 0 auto;
    padding: 80px 32px 60px; display: grid;
    grid-template-columns: 1fr 380px; gap: 40px; align-items: center;
  }
  .hero-label { font-size: 14px; font-weight: 600; color: var(--gray); letter-spacing: .08em; text-transform: uppercase; margin-bottom: 12px; }
  .hero-name {
    font-family: 'Archivo Black', sans-serif; font-size: clamp(52px, 7vw, 76px);
    line-height: .96; color: var(--blue); text-transform: uppercase;
    letter-spacing: -.02em; margin-bottom: 20px;
  }
  .hero-tag {
    display: inline-block; background: var(--yellow); border: 2px solid var(--dark);
    border-radius: 6px; padding: 7px 16px; font-size: 13px; font-weight: 700;
    color: var(--dark); cursor: default; margin-bottom: 20px;
  }
  .hero-tag::after { content: ' ➔'; }
  .hero-desc { font-size: 14px; line-height: 1.7; color: var(--gray); max-width: 340px; margin-bottom: 28px; }
  .hero-socials { display: flex; gap: 12px; }
  .hero-socials a {
    width: 40px; height: 40px; border: 1.5px solid var(--border); border-radius: 50%;
    display: flex; align-items: center; justify-content: center; text-decoration: none;
    font-size: 16px; color: var(--dark); background: var(--white);
    transition: background .2s, border-color .2s, transform .15s;
  }
  .hero-socials a:hover { background: var(--blue); border-color: var(--blue); color: var(--white); transform: translateY(-2px); }
  .hero-photo { position: relative; }
  .hero-photo-frame { background: var(--white); border: 2px solid var(--border); border-radius: 16px; padding: 12px 12px 0; position: relative; }
  .photo-dots { display: flex; gap: 6px; margin-bottom: 10px; }
  .photo-dots span { width: 12px; height: 12px; border-radius: 50%; }
  .photo-dots span:nth-child(1) { background: #FF5F57; }
  .photo-dots span:nth-child(2) { background: #FFBD2E; }
  .photo-dots span:nth-child(3) { background: #28CA41; }
  .photo-circle {
    background: var(--blue); border-radius: 12px 12px 0 0; height: 300px;
    display: flex; align-items: flex-end; justify-content: center; overflow: hidden;
  }
  .photo-placeholder {
    width: 180px; height: 260px;
    background: rgba(255,255,255,.18); border-radius: 50% 50% 0 0 / 60% 60% 0 0;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: rgba(255,255,255,.6);
  }
  .deco-bolt { position: absolute; bottom: -16px; left: -18px; font-size: 44px; animation: float 3s ease-in-out infinite; }
  .deco-wave { position: absolute; bottom: -10px; right: -20px; font-size: 32px; color: var(--pink); animation: float 3.5s ease-in-out infinite reverse; }
  .deco-star { position: absolute; top: -12px; right: -10px; font-size: 36px; color: var(--blue); animation: spin 8s linear infinite; }
  .deco-star2 { position: absolute; top: 40px; left: -30px; font-size: 28px; color: var(--yellow); animation: spin 6s linear infinite reverse; }
  @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-8px); } }
  @keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
  .section { position: relative; z-index: 1; max-width: 900px; margin: 0 auto; padding: 0 32px 60px; }
  .about-card { background: var(--white); border: 2px solid var(--border); border-radius: 20px; padding: 32px; }
  .card-header { display: flex; align-items: center; gap: 12px; margin-bottom: 28px; }
  .card-icon { width: 42px; height: 42px; background: var(--blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--white); font-size: 18px; }
  .card-title { font-family: 'Archivo Black', sans-serif; font-size: 22px; text-transform: uppercase; letter-spacing: .05em; color: var(--blue); }
  .card-dots { margin-left: auto; display: flex; gap: 6px; }
  .card-dots span { width: 12px; height: 12px; border-radius: 50%; }
  .card-dots span:nth-child(1) { background: #FF5F57; }
  .card-dots span:nth-child(2) { background: #FFBD2E; }
  .card-dots span:nth-child(3) { background: #28CA41; }
  .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
  .about-text { font-size: 13.5px; line-height: 1.75; color: var(--gray); }
  .info-list { display: flex; flex-direction: column; gap: 10px; }
  .info-item { display: flex; align-items: center; gap: 12px; border: 1.5px solid var(--border); border-radius: 10px; padding: 10px 14px; font-size: 13px; }
  .info-item .info-icon { font-size: 16px; color: var(--blue); }
  .info-item .info-key { font-weight: 700; color: var(--dark); min-width: 100px; }
  .info-item .info-val { color: var(--gray); }
  .skills-wrap { margin-top: 24px; border-top: 1.5px solid var(--border); padding-top: 20px; }
  .skills-label { font-family: 'Archivo Black', sans-serif; font-size: 14px; letter-spacing: .08em; color: var(--blue); text-transform: uppercase; margin-bottom: 14px; }
  .skills-tags { display: flex; flex-wrap: wrap; gap: 10px; }
  .skill-tag { display: flex; align-items: center; gap: 7px; border: 1.5px solid var(--border); border-radius: 8px; padding: 7px 14px; font-size: 13px; font-weight: 600; background: var(--white); color: var(--dark); cursor: default; transition: border-color .2s, background .2s; }
  .skill-tag:hover { border-color: var(--blue); background: #EEF1FF; }
  .section-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; }
  .section-title { font-family: 'Archivo Black', sans-serif; font-size: 28px; text-transform: uppercase; letter-spacing: .04em; color: var(--dark); display: flex; align-items: center; gap: 10px; }
  .section-title .sparkle { font-size: 22px; color: var(--blue); }
  .see-all { font-size: 13px; font-weight: 600; color: var(--blue); text-decoration: none; display: flex; align-items: center; gap: 6px; }
  .see-all:hover { text-decoration: underline; }
  .project-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
  .project-card { background: var(--white); border: 2px solid var(--border); border-radius: 16px; overflow: hidden; transition: transform .2s, box-shadow .2s; }
  .project-card:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(26,53,198,.12); }
  .project-img { position: relative; height: 160px; overflow: hidden; }
  .project-img-inner { width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; font-size: 48px; }
  .project-img-inner.branding { background: linear-gradient(135deg, #e8f5e9, #c8e6c9); }
  .project-img-inner.event { background: #111; color: white; flex-direction: column; gap: 4px; }
  .project-img-inner.uiux { background: linear-gradient(135deg, #EDE7F6, #B39DDB); }
  .event-title { font-family: 'Archivo Black', sans-serif; font-size: 28px; color: white; text-align: center; line-height: 1; }
  .event-sub { font-size: 10px; color: rgba(255,255,255,.6); letter-spacing: .1em; }
  .project-badge { position: absolute; top: 12px; left: 12px; padding: 4px 12px; border-radius: 6px; font-size: 11px; font-weight: 700; border: 1.5px solid var(--dark); }
  .badge-branding { background: #FFE44D; color: var(--dark); }
  .badge-event { background: #FF6B9D; color: var(--white); border-color: var(--pink); }
  .badge-uiux { background: #1A35C6; color: var(--white); border-color: var(--blue); }
  .card-dots-top { position: absolute; top: 12px; right: 12px; display: flex; gap: 4px; }
  .card-dots-top span { width: 9px; height: 9px; border-radius: 50%; }
  .card-dots-top span:nth-child(1) { background: #FF5F57; }
  .card-dots-top span:nth-child(2) { background: #FFBD2E; }
  .card-dots-top span:nth-child(3) { background: #28CA41; }
  .project-body { padding: 16px; }
  .project-name { font-weight: 700; font-size: 15px; color: var(--dark); margin-bottom: 6px; }
  .project-desc { font-size: 12.5px; color: var(--gray); line-height: 1.6; margin-bottom: 14px; }
  .btn-detail { display: inline-block; padding: 8px 18px; border-radius: 8px; font-size: 12px; font-weight: 700; text-decoration: none; border: 2px solid var(--dark); transition: background .2s, color .2s; cursor: pointer; }
  .btn-yellow { background: var(--yellow); color: var(--dark); }
  .btn-pink { background: var(--pink); color: var(--white); border-color: var(--pink); }
  .btn-blue { background: var(--blue); color: var(--white); border-color: var(--blue); }
  .btn-detail:hover { opacity: .85; }
  .contact-grid { display: grid; grid-template-columns: 1fr 1fr 220px; gap: 20px; align-items: start; }
  .contact-cta { background: var(--white); border: 2px solid var(--border); border-radius: 16px; padding: 28px; position: relative; }
  .contact-cta-text { font-family: 'Archivo Black', sans-serif; font-size: 20px; line-height: 1.3; color: var(--dark); margin-bottom: 8px; }
  .contact-cta-sub { font-size: 13px; color: var(--gray); }
  .deco-sun { position: absolute; bottom: -14px; left: -14px; font-size: 40px; animation: spin 6s linear infinite; }
  .contact-info-card { background: var(--white); border: 2px solid var(--border); border-radius: 16px; padding: 20px 24px; }
  .contact-info-dots { display: flex; gap: 6px; margin-bottom: 16px; }
  .contact-info-dots span { width: 11px; height: 11px; border-radius: 50%; }
  .contact-info-dots span:nth-child(1) { background: #FF5F57; }
  .contact-info-dots span:nth-child(2) { background: #FFBD2E; }
  .contact-info-dots span:nth-child(3) { background: #28CA41; }
  .contact-row { display: flex; align-items: center; gap: 12px; padding: 10px 0; border-bottom: 1px solid var(--border); font-size: 13.5px; color: var(--dark); }
  .contact-row:last-child { border-bottom: none; }
  .contact-row .c-icon { font-size: 18px; }
  .contact-mascot { display: flex; align-items: center; justify-content: center; font-size: 80px; padding: 20px; }
  footer { position: relative; z-index: 1; background: var(--blue); color: var(--white); text-align: center; padding: 20px 32px; font-size: 13px; display: flex; align-items: center; justify-content: space-between; }
  footer .f-sparkle { font-size: 20px; opacity: .6; }
  .back-top { width: 40px; height: 40px; border: 2px solid rgba(255,255,255,.4); border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; font-size: 18px; transition: background .2s; }
  .back-top:hover { background: rgba(255,255,255,.2); }
  .fade-in { opacity: 0; transform: translateY(24px); animation: fadeUp .6s ease forwards; }
  @keyframes fadeUp { to { opacity: 1; transform: translateY(0); } }
  .delay-1 { animation-delay: .1s; } .delay-2 { animation-delay: .2s; }
  .delay-3 { animation-delay: .3s; } .delay-4 { animation-delay: .4s; }
  .delay-5 { animation-delay: .5s; }
  @media (max-width: 700px) {
    .hero { grid-template-columns: 1fr; }
    .hero-photo { display: none; }
    .about-grid, .project-grid, .contact-grid { grid-template-columns: 1fr; }
  }
</style>
</head>
<body>

<nav>
  <div class="nav-inner">
    <a href="#home" class="active">Home</a>
    <a href="#about">About Me</a>
    <a href="#project">Project</a>
    <a href="#contact">Contact</a>
  </div>
  <span class="nav-sparkle">✦</span>
</nav>

<section class="hero" id="home">
  <div>
    <p class="hero-label fade-in"><span>👋</span> HELLO, I'M</p>
    <h1 class="hero-name fade-in delay-1">KARENNIA<br>PUTRI<br>BAGINDA</h1>
    <span class="hero-tag fade-in delay-2">Mahasiswa Multimedia Broadcasting</span>
    <p class="hero-desc fade-in delay-3">
      Mahasiswa D3 Teknologi Multimedia dan Broadcasting yang memiliki ketertarikan pada
      komunikasi, media digital, dan event management. Senang menciptakan konten yang
      menarik, berkolaborasi, dan menghadirkan ide kreatif.
    </p>
    <div class="hero-socials fade-in delay-4">
      <a href="#" title="Instagram">📸</a>
      <a href="#" title="TikTok">🎵</a>
      <a href="#" title="YouTube">▶️</a>
      <a href="#" title="Email">✉️</a>
    </div>
  </div>
  <div class="hero-photo fade-in delay-2">
    <span class="deco-star2">✦</span>
    <div class="hero-photo-frame">
      <div class="photo-dots"><span></span><span></span><span></span></div>
      <div class="photo-circle">
        <img src="{{ asset('images/profile.jpg') }}" alt="Karennia Putri Baginda" style="width: 100%; height: 100%; object-fit: cover; border-radius: 12px 12px 0 0;">
      </div>
    </div>
    <span class="deco-bolt">⚡</span>
    <span class="deco-wave" style="font-size:36px">〜</span>
    <span class="deco-star">✦</span>
  </div>
</section>

<section class="section" id="about">
  <div class="about-card fade-in">
    <div class="card-header">
      <div class="card-icon">👤</div>
      <h2 class="card-title">About Me</h2>
      <div class="card-dots"><span></span><span></span><span></span></div>
    </div>
    <div class="about-grid">
      <p class="about-text">
        Mahasiswa yang memiliki keterampilan di bidang komunikasi, media digital, dan event management.
        Berpengalaman sebagai tim humas dalam berbagai kegiatan, dengan kemampuan menciptakan konten yang
        menarik, membangun interaksi dengan audiens, serta menjaga komunikasi yang efektif antar tim.
        Memiliki gaya kerja yang adaptif, kreatif, dan kolaboratif untuk mendukung kesuksesan setiap kegiatan.
      </p>
      <div class="info-list">
        <div class="info-item">
          <span class="info-icon">📍</span>
          <span class="info-key">Lokasi</span>
          <span class="info-val">Surabaya, Indonesia</span>
        </div>
        <div class="info-item">
          <span class="info-icon">🎓</span>
          <span class="info-key">Program Studi</span>
          <span class="info-val">D3 Teknologi Multimedia dan Broadcasting</span>
        </div>
        <div class="info-item">
          <span class="info-icon">✉️</span>
          <span class="info-key">Email</span>
          <span class="info-val">karennia.putribaginda@gmail.com</span>
        </div>
        <div class="info-item">
          <span class="info-icon">🎂</span>
          <span class="info-key">Umur</span>
          <span class="info-val">20 Tahun</span>
        </div>
      </div>
    </div>
    <div class="skills-wrap">
      <p class="skills-label">Skills</p>
      <div class="skills-tags">
        <span class="skill-tag">👥 Kerja Tim</span>
        <span class="skill-tag">💡 Problem Solving</span>
        <span class="skill-tag">📢 Public Relations</span>
        <span class="skill-tag">⚡ Adaptif</span>
        <span class="skill-tag">✏️ Kreatif</span>
        <span class="skill-tag">🗂️ Koordinasi Konten</span>
      </div>
    </div>
  </div>
</section>

<section class="section" id="project">
  <div class="section-header">
    <h2 class="section-title">PROJECT <span class="sparkle">✦</span></h2>
    <a href="#" class="see-all">Lihat Semua Project →</a>
  </div>
  <div class="project-grid">
    <div class="project-card fade-in delay-1">
      <div class="project-img">
        <div class="project-img-inner branding">📣</div>
        <span class="project-badge badge-branding">Public Relations</span>
        <div class="card-dots-top"><span></span><span></span><span></span></div>
      </div>
      <div class="project-body">
        <p class="project-name">Public Relations Staff</p>
        <p class="project-desc">NextGen Creators (2024)
          Mengelola alur komunikasi kepada pihak kampus untuk meningkatkan kelancaran acara.</p>
        <a class="btn-detail btn-yellow" href="#">Lihat Detail →</a>
      </div>
    </div>
    <div class="project-card fade-in delay-2">
      <div class="project-img">
        <div class="project-img-inner event">🎬</div>
        <span class="project-badge badge-event">Multimedia Production</span>
        <div class="card-dots-top"><span></span><span></span><span></span></div>
      </div>
      <div class="project-body">
        <p class="project-name">Sesani Short Movie Project</p>
        <p class="project-desc">Wardrobe • MUA Assistant • Production Finance (2025)
          Mendukung produksi film melalui koordinasi, dokumentasi, dan administrasi proyek.</p>
        <a class="btn-detail btn-pink" href="#">Lihat Detail →</a>
      </div>
    </div>
    <div class="project-card fade-in delay-3">
      <div class="project-img">
        <div class="project-img-inner uiux">📡</div>
        <span class="project-badge badge-uiux">Organizational Experience</span>
        <div class="card-dots-top"><span></span><span></span><span></span></div>
      </div>
      <div class="project-body">
        <p class="project-name">Multimedia & Broadcasting Association</p>
        <p class="project-desc">Mengembangkan keterampilan komunikasi, kolaborasi, dan profesionalisme di bidang multimedia.</p>
        <a class="btn-detail btn-blue" href="#">Lihat Detail →</a>
      </div>
    </div>
  </div>
</section>

<section class="section" id="contact">
  <div class="section-header">
    <h2 class="section-title">CONTACT <span class="sparkle">✦</span></h2>
  </div>
  <div class="contact-grid">
    <div class="contact-cta fade-in delay-1">
      <p class="contact-cta-text">Tertarik bekerja sama?<br>Yuk, buat sesuatu yang<br>kreatif bersama!</p>
      <span class="deco-sun">☀️</span>
    </div>
    <div class="contact-info-card fade-in delay-2">
      <div class="contact-info-dots"><span></span><span></span><span></span></div>
      <div class="contact-row"><span class="c-icon">📞</span> 0857 3174 7431</div>
      <div class="contact-row"><span class="c-icon">📸</span> krnniaputrii_</div>
      <div class="contact-row"><span class="c-icon">✉️</span> karennia.putribaginda@gmail.com</div>
    </div>
    <div class="contact-mascot fade-in delay-3">🖥️</div>
  </div>
</section>

<footer>
  <span class="f-sparkle">✦</span>
  <span>© 2025 Karennia Putri Baginda. All rights reserved.</span>
  <div class="back-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</div>
</footer>

</body>
</html>