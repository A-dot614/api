<header
  id="app-header"
  class="sticky top-0 z-30 flex h-16 items-center justify-between gap-4 border-b border-white/10 bg-reel-surface/80 px-4 backdrop-blur-md lg:px-8"
>
  <!-- Left: mobile toggle + breadcrumb -->
  <div class="flex min-w-0 items-center gap-4">
    <button
      id="mobile-sidebar-toggle"
      type="button"
      aria-label="Open menu"
      class="flex h-9 w-9 shrink-0 items-center justify-center rounded-md text-reel-muted transition-colors hover:bg-white/[0.06] hover:text-reel-cream lg:hidden"
    >
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 6h18M3 12h18M3 18h18"/>
      </svg>
    </button>

    <div class="min-w-0">
      <p class="truncate font-mono text-[10px] uppercase tracking-[0.2em] text-reel-muted">@yield('breadcrumb', 'Library')</p>
      <h1 class="truncate font-display text-lg leading-tight text-reel-cream">@yield('page-title', 'Dashboard')</h1>
    </div>
  </div>

  <!-- Right: search (mobile), add, notifications, user -->
  <div class="flex shrink-0 items-center gap-2">

    <!-- Compact search trigger, mobile only (full search lives in sidebar) -->
    <button
      type="button"
      aria-label="Search"
      class="flex h-9 w-9 items-center justify-center rounded-md text-reel-muted transition-colors hover:bg-white/[0.06] hover:text-reel-cream lg:hidden"
    >
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"/>
        <path d="M21 21l-4.3-4.3"/>
      </svg>
    </button>

    <!-- Add movie -->
    


    <!-- Notifications -->
    <div class="relative">
      <button
        id="notif-toggle"
        type="button"
        aria-label="Notifications"
        aria-expanded="false"
        class="relative flex h-9 w-9 items-center justify-center rounded-md text-reel-muted transition-colors hover:bg-white/[0.06] hover:text-reel-cream"
      >
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M18 8a6 6 0 00-12 0c0 7-3 9-3 9h18s-3-2-3-9"/>
          <path d="M13.73 21a2 2 0 01-3.46 0"/>
        </svg>
        <span id="notif-dot" class="absolute right-1.5 top-1.5 h-2 w-2 rounded-full bg-reel-crimson"></span>
      </button>

      <div
        id="notif-dropdown"
        class="absolute right-0 top-full mt-2 hidden w-72 overflow-hidden rounded-lg border border-white/10 bg-reel-surface shadow-2xl"
      >
        <div class="flex items-center justify-between border-b border-white/5 px-4 py-3">
          <span class="font-mono text-[11px] uppercase tracking-[0.15em] text-reel-muted">Notifications</span>
          <button id="notif-clear" class="font-mono text-[10px] uppercase tracking-wide text-reel-gold hover:underline">Clear</button>
        </div>
        <ul id="notif-list" class="max-h-72 overflow-y-auto">
          <li class="flex gap-3 border-b border-white/5 px-4 py-3 hover:bg-white/[0.03]">
            <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-reel-gold"></span>
            <div class="min-w-0">
              <p class="text-sm text-reel-cream">New release added</p>
              <p class="truncate font-mono text-[11px] text-reel-muted">Dune: Part Three is now in your library</p>
            </div>
          </li>
          <li class="flex gap-3 border-b border-white/5 px-4 py-3 hover:bg-white/[0.03]">
            <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-reel-gold"></span>
            <div class="min-w-0">
              <p class="text-sm text-reel-cream">Watchlist reminder</p>
              <p class="truncate font-mono text-[11px] text-reel-muted">3 titles leaving next week</p>
            </div>
          </li>
        </ul>
        <div id="notif-empty" class="hidden px-4 py-8 text-center">
          <p class="font-mono text-xs text-reel-muted">You're all caught up</p>
        </div>
      </div>
    </div>

    <!-- Divider -->
    <div class="mx-1 hidden h-6 w-px bg-white/10 sm:block"></div>

    <!-- User menu -->
    <div class="relative">
      <button
        id="user-menu-toggle"
        type="button"
        aria-expanded="false"
        class="flex items-center gap-2 rounded-md py-1 pl-1 pr-2 transition-colors hover:bg-white/[0.06]"
      >
        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-reel-gold/15 font-mono text-xs font-semibold text-reel-gold">
          {{ Str::of(auth()->user()->name ?? 'AB')->substr(0,2)->upper() }}
        </span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden text-reel-muted sm:block">
          <path d="M6 9l6 6 6-6"/>
        </svg>
      </button>

      <div
        id="user-dropdown"
        class="absolute right-0 top-full mt-2 hidden w-48 overflow-hidden rounded-lg border border-white/10 bg-reel-surface py-1 shadow-2xl"
      >
        <p class="truncate border-b border-white/5 px-4 py-2 font-mono text-[11px] text-reel-muted">{{ auth()->user()->email ?? 'signed in' }}</p>
        <a href="{{ url('/profile') }}" class="block px-4 py-2 text-sm text-reel-cream hover:bg-white/[0.04]">Profile</a>
        <a href="{{ url('/settings') }}" class="block px-4 py-2 text-sm text-reel-cream hover:bg-white/[0.04]">Settings</a>
        <button type="button" class="block w-full px-4 py-2 text-left text-sm text-reel-crimson hover:bg-reel-crimson/10">Logout</button>
      </div>
    </div>
  </div>
</header>

<!-- Mobile overlay for sidebar -->
<div id="sidebar-overlay" class="fixed inset-0 z-30 hidden bg-black/60 backdrop-blur-sm lg:hidden"></div>

<script>
(function () {
  const sidebar      = document.getElementById('sidebar-panel');
  const overlay      = document.getElementById('sidebar-overlay');
  const mobileToggle = document.getElementById('mobile-sidebar-toggle');

  // --- Mobile sidebar open/close ---
  function openSidebar() {
    sidebar.classList.remove('-translate-x-full');
    overlay.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }
  function closeSidebar() {
    sidebar.classList.add('-translate-x-full');
    overlay.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }
  mobileToggle?.addEventListener('click', openSidebar);
  overlay?.addEventListener('click', closeSidebar);

  // --- Generic dropdown handler (notifications + user menu) ---
  function setupDropdown(toggleId, dropdownId) {
    const toggle = document.getElementById(toggleId);
    const dropdown = document.getElementById(dropdownId);
    if (!toggle || !dropdown) return;

    toggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = !dropdown.classList.contains('hidden');
      document.querySelectorAll('[id$="-dropdown"]').forEach(d => d.classList.add('hidden'));
      dropdown.classList.toggle('hidden', isOpen);
      toggle.setAttribute('aria-expanded', String(!isOpen));
    });
  }
  setupDropdown('notif-toggle', 'notif-dropdown');
  setupDropdown('user-menu-toggle', 'user-dropdown');

  document.addEventListener('click', () => {
    document.querySelectorAll('[id$="-dropdown"]').forEach(d => d.classList.add('hidden'));
  });

  // --- Clear notifications ---
  const notifClear = document.getElementById('notif-clear');
  const notifList  = document.getElementById('notif-list');
  const notifEmpty = document.getElementById('notif-empty');
  const notifDot   = document.getElementById('notif-dot');

  notifClear?.addEventListener('click', () => {
    notifList.classList.add('hidden');
    notifEmpty.classList.remove('hidden');
    notifDot.classList.add('hidden');
  });

  // --- Escape key closes everything ---
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeSidebar();
      document.querySelectorAll('[id$="-dropdown"]').forEach(d => d.classList.add('hidden'));
    }
  });
})();
</script>