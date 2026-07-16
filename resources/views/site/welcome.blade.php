<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CineVault — Highly Rated Movies</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          reel: {
            bg: '#0B0E14',
            surface: '#141827',
            surface2: '#1B2033',
            gold: '#D4A24C',
            crimson: '#B33A3A',
            cream: '#F2EFE9',
            muted: '#8B93A7',
          }
        },
        fontFamily: {
          display: ['"Bebas Neue"', 'sans-serif'],
          body: ['Inter', 'sans-serif'],
          mono: ['"JetBrains Mono"', 'monospace'],
        }
      }
    }
  }
</script>
<style>
  body {
    background-color: #0B0E14;
    background-image:
      radial-gradient(circle at 15% 10%, rgba(212,162,76,0.06), transparent 40%),
      radial-gradient(circle at 85% 30%, rgba(179,58,58,0.08), transparent 45%);
  }

  /* Sprocket hole strip */
  .sprockets {
    background-image: radial-gradient(circle, #0B0E14 2.5px, transparent 2.6px);
    background-size: 16px 100%;
    background-position: center;
  }

  /* Earthquake shake on hover — no JS, pure CSS */
  @keyframes quake {
    0%   { transform: translate(0, 0) rotate(0deg); }
    10%  { transform: translate(-2px, 1px) rotate(-0.6deg); }
    20%  { transform: translate(2px, -1px) rotate(0.6deg); }
    30%  { transform: translate(-1px, 2px) rotate(-0.4deg); }
    40%  { transform: translate(1px, -2px) rotate(0.5deg); }
    50%  { transform: translate(-2px, -1px) rotate(-0.5deg); }
    60%  { transform: translate(2px, 1px) rotate(0.4deg); }
    70%  { transform: translate(-1px, -1px) rotate(-0.3deg); }
    80%  { transform: translate(1px, 2px) rotate(0.5deg); }
    90%  { transform: translate(-1px, 1px) rotate(-0.4deg); }
    100% { transform: translate(0, 0) rotate(0deg); }
  }

  .movie-card {
    transition: box-shadow 0.25s ease, border-color 0.25s ease;
  }

  .movie-card:hover {
    animation: quake 0.35s linear infinite;
    border-color: #D4A24C;
    box-shadow: 0 0 0 1px rgba(212,162,76,0.4), 0 20px 40px -12px rgba(0,0,0,0.7);
  }

  .film-icon-bg {
    background-image:
      repeating-linear-gradient(45deg, rgba(255,255,255,0.03) 0px, rgba(255,255,255,0.03) 2px, transparent 2px, transparent 10px);
  }

  ::selection {
    background: #D4A24C;
    color: #0B0E14;
  }
</style>
</head>
<body class="font-body text-reel-cream min-h-screen">

  <!-- NAVBAR -->
  <header class="sticky top-0 z-50 bg-reel-bg/90 backdrop-blur border-b border-white/10">
    <div class="sprockets h-1.5 w-full opacity-40"></div>
    <nav class="max-w-7xl mx-auto px-6 sm:px-8 py-4 flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center gap-2.5">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="2" y="6" width="28" height="20" rx="2" fill="#D4A24C"/>
          <rect x="5" y="9" width="22" height="14" rx="1" fill="#0B0E14"/>
          <circle cx="6.5" cy="7.5" r="1.1" fill="#0B0E14"/>
          <circle cx="6.5" cy="24.5" r="1.1" fill="#0B0E14"/>
          <circle cx="25.5" cy="7.5" r="1.1" fill="#0B0E14"/>
          <circle cx="25.5" cy="24.5" r="1.1" fill="#0B0E14"/>
          <path d="M13 13L20 16L13 19V13Z" fill="#D4A24C"/>
        </svg>
        <span class="font-display text-2xl tracking-wide text-reel-cream leading-none pt-1">CINE<span class="text-reel-gold">VAULT</span></span>
      </div>

      <!-- Fetch button -->
      <button id="fetch-movies" class="group relative inline-flex items-center gap-2 bg-reel-gold hover:bg-reel-cream text-reel-bg font-semibold text-sm px-5 py-2.5 rounded-sm tracking-wide transition-colors duration-200">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 12a9 9 0 1 1-3-6.7"/>
          <path d="M21 3v6h-6"/>
        </svg>
        Fetch Movies
      </button>
    </nav>
  </header>

  <!-- HERO STRIP -->
  <section class="max-w-7xl mx-auto px-6 sm:px-8 pt-10 pb-6">
    <p class="font-mono text-xs tracking-[0.3em] text-reel-gold uppercase mb-2">Now Screening — Top Rated</p>
    <h1 class="font-display text-4xl sm:text-5xl tracking-wide text-reel-cream">This Week's Highest Rated Picks</h1>
  </section>

  <!-- MOVIE GRID -->
  <main class="max-w-7xl mx-auto px-6 sm:px-8 pb-20">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Card 1 -->
      <article class="movie-card bg-reel-surface border border-white/10 rounded-md overflow-hidden">
        <div class="sprockets h-2 w-full opacity-30"></div>
        <div class="film-icon-bg h-48 flex items-center justify-center" style="background:linear-gradient(135deg,#3A2E1F,#B33A3A);">
          <svg class="w-14 h-14 text-reel-cream/30" viewBox="0 0 24 24" fill="currentColor"><path d="M18 3v2h-2V3H8v2H6V3H4v18h2v-2h2v2h8v-2h2v2h2V3h-2zM8 17H6v-2h2v2zm0-4H6v-2h2v2zm0-4H6V7h2v2zm10 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V7h2v2z"/></svg>
        </div>
        <div class="p-5">
          <div class="flex items-start justify-between gap-3 mb-2">
            <h2 class="font-display text-2xl tracking-wide leading-none">NEON HORIZON</h2>
            <span class="font-mono text-xs bg-reel-gold text-reel-bg font-bold px-2 py-1 rounded-sm shrink-0">★ 8.7</span>
          </div>
          <p class="text-reel-muted text-sm leading-relaxed mb-4">A courier smuggling memories across a fractured megacity discovers the last one isn't hers to deliver.</p>
          <div class="flex items-center justify-between font-mono text-xs text-reel-muted border-t border-white/10 pt-3">
            <span>2h 14m</span>
            <span>Nov 08, 2024</span>
            <span class="text-reel-gold">Season 1</span>
          </div>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="movie-card bg-reel-surface border border-white/10 rounded-md overflow-hidden">
        <div class="sprockets h-2 w-full opacity-30"></div>
        <div class="film-icon-bg h-48 flex items-center justify-center" style="background:linear-gradient(135deg,#1F2E3A,#4C6FD4);">
          <svg class="w-14 h-14 text-reel-cream/30" viewBox="0 0 24 24" fill="currentColor"><path d="M18 3v2h-2V3H8v2H6V3H4v18h2v-2h2v2h8v-2h2v2h2V3h-2zM8 17H6v-2h2v2zm0-4H6v-2h2v2zm0-4H6V7h2v2zm10 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V7h2v2z"/></svg>
        </div>
        <div class="p-5">
          <div class="flex items-start justify-between gap-3 mb-2">
            <h2 class="font-display text-2xl tracking-wide leading-none">SILENT EMBER</h2>
            <span class="font-mono text-xs bg-reel-gold text-reel-bg font-bold px-2 py-1 rounded-sm shrink-0">★ 9.1</span>
          </div>
          <p class="text-reel-muted text-sm leading-relaxed mb-4">A retired lighthouse keeper reignites an old signal, and something far out at sea finally answers back.</p>
          <div class="flex items-center justify-between font-mono text-xs text-reel-muted border-t border-white/10 pt-3">
            <span>1h 58m</span>
            <span>Mar 21, 2023</span>
            <span class="text-reel-gold">Standalone</span>
          </div>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="movie-card bg-reel-surface border border-white/10 rounded-md overflow-hidden">
        <div class="sprockets h-2 w-full opacity-30"></div>
        <div class="film-icon-bg h-48 flex items-center justify-center" style="background:linear-gradient(135deg,#2E3A1F,#7EA34C);">
          <svg class="w-14 h-14 text-reel-cream/30" viewBox="0 0 24 24" fill="currentColor"><path d="M18 3v2h-2V3H8v2H6V3H4v18h2v-2h2v2h8v-2h2v2h2V3h-2zM8 17H6v-2h2v2zm0-4H6v-2h2v2zm0-4H6V7h2v2zm10 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V7h2v2z"/></svg>
        </div>
        <div class="p-5">
          <div class="flex items-start justify-between gap-3 mb-2">
            <h2 class="font-display text-2xl tracking-wide leading-none">THE LAST CARTOGRAPHER</h2>
            <span class="font-mono text-xs bg-reel-gold text-reel-bg font-bold px-2 py-1 rounded-sm shrink-0">★ 8.4</span>
          </div>
          <p class="text-reel-muted text-sm leading-relaxed mb-4">The final mapmaker of a sinking archipelago races to chart it all before the tide erases it for good.</p>
          <div class="flex items-center justify-between font-mono text-xs text-reel-muted border-t border-white/10 pt-3">
            <span>2h 27m</span>
            <span>Jul 12, 2024</span>
            <span class="text-reel-gold">Season 2</span>
          </div>
        </div>
      </article>

      <!-- Card 4 -->
      <article class="movie-card bg-reel-surface border border-white/10 rounded-md overflow-hidden">
        <div class="sprockets h-2 w-full opacity-30"></div>
        <div class="film-icon-bg h-48 flex items-center justify-center" style="background:linear-gradient(135deg,#3A1F30,#D4A24C);">
          <svg class="w-14 h-14 text-reel-cream/30" viewBox="0 0 24 24" fill="currentColor"><path d="M18 3v2h-2V3H8v2H6V3H4v18h2v-2h2v2h8v-2h2v2h2V3h-2zM8 17H6v-2h2v2zm0-4H6v-2h2v2zm0-4H6V7h2v2zm10 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V7h2v2z"/></svg>
        </div>
        <div class="p-5">
          <div class="flex items-start justify-between gap-3 mb-2">
            <h2 class="font-display text-2xl tracking-wide leading-none">GLASS TIGERS</h2>
            <span class="font-mono text-xs bg-reel-gold text-reel-bg font-bold px-2 py-1 rounded-sm shrink-0">★ 7.9</span>
          </div>
          <p class="text-reel-muted text-sm leading-relaxed mb-4">Two rival glassblowers are forced into an uneasy partnership when their kilns are the last two left standing.</p>
          <div class="flex items-center justify-between font-mono text-xs text-reel-muted border-t border-white/10 pt-3">
            <span>1h 46m</span>
            <span>Jan 05, 2025</span>
            <span class="text-reel-gold">Standalone</span>
          </div>
        </div>
      </article>

      <!-- Card 5 -->
      <article class="movie-card bg-reel-surface border border-white/10 rounded-md overflow-hidden">
        <div class="sprockets h-2 w-full opacity-30"></div>
        <div class="film-icon-bg h-48 flex items-center justify-center" style="background:linear-gradient(135deg,#1F3A38,#4CD4B0);">
          <svg class="w-14 h-14 text-reel-cream/30" viewBox="0 0 24 24" fill="currentColor"><path d="M18 3v2h-2V3H8v2H6V3H4v18h2v-2h2v2h8v-2h2v2h2V3h-2zM8 17H6v-2h2v2zm0-4H6v-2h2v2zm0-4H6V7h2v2zm10 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V7h2v2z"/></svg>
        </div>
        <div class="p-5">
          <div class="flex items-start justify-between gap-3 mb-2">
            <h2 class="font-display text-2xl tracking-wide leading-none">MIDNIGHT FATHOM</h2>
            <span class="font-mono text-xs bg-reel-gold text-reel-bg font-bold px-2 py-1 rounded-sm shrink-0">★ 8.9</span>
          </div>
          <p class="text-reel-muted text-sm leading-relaxed mb-4">A deep-sea research crew loses contact with the surface — and starts hearing a second crew that isn't theirs.</p>
          <div class="flex items-center justify-between font-mono text-xs text-reel-muted border-t border-white/10 pt-3">
            <span>2h 03m</span>
            <span>Sep 30, 2024</span>
            <span class="text-reel-gold">Season 1</span>
          </div>
        </div>
      </article>

      <!-- Card 6 -->
      <article class="movie-card bg-reel-surface border border-white/10 rounded-md overflow-hidden">
        <div class="sprockets h-2 w-full opacity-30"></div>
        <div class="film-icon-bg h-48 flex items-center justify-center" style="background:linear-gradient(135deg,#3A2E1F,#D46F4C);">
          <svg class="w-14 h-14 text-reel-cream/30" viewBox="0 0 24 24" fill="currentColor"><path d="M18 3v2h-2V3H8v2H6V3H4v18h2v-2h2v2h8v-2h2v2h2V3h-2zM8 17H6v-2h2v2zm0-4H6v-2h2v2zm0-4H6V7h2v2zm10 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V7h2v2z"/></svg>
        </div>
        <div class="p-5">
          <div class="flex items-start justify-between gap-3 mb-2">
            <h2 class="font-display text-2xl tracking-wide leading-none">PAPER MOONLIGHT</h2>
            <span class="font-mono text-xs bg-reel-gold text-reel-bg font-bold px-2 py-1 rounded-sm shrink-0">★ 8.2</span>
          </div>
          <p class="text-reel-muted text-sm leading-relaxed mb-4">A failing origami shop owner folds one crane too many, and it starts folding the city back for her.</p>
          <div class="flex items-center justify-between font-mono text-xs text-reel-muted border-t border-white/10 pt-3">
            <span>1h 52m</span>
            <span>May 17, 2025</span>
            <span class="text-reel-gold">Season 1</span>
          </div>
        </div>
      </article>

    </div>
  </main>

  <footer class="sprockets h-1.5 w-full opacity-40"></footer>
  <div class="text-center py-6 text-reel-muted text-xs font-mono">Hover a card to feel it rumble.</div>

<script>

    console.log('api client');

let loadMoviesFunc = () =>{
    let baseURL = 'http://127.0.0.1:36547 ';
    baseURL =  'https://api.github.com/users';

    let requestMethod = 'GET';
    let xhr =new XMLHttpRequest();
    xhr.open(requestMethod, baseURL);
    xhr.onprogress = ()=>{
        console.log('movies are being fetched...');
    }
    xhr.onload = ()=>{
        let response = xhr.responseText;
        console.log(response);
    }
    xhr.send();
     
 }


let loadMoviesButton = document.querySelector('#fetch-movies');
console.log(loadMoviesButton);
loadMoviesButton.addEventListener('click',loadMoviesFunc);
</script>
</body>
</html>