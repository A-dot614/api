<aside
  id="sidebar-panel"
  data-collapsed="false"
  class="fixed inset-y-0 left-0 z-40 flex h-screen w-64 flex-col border-r border-white/10 bg-reel-surface transition-[width,transform] duration-300 ease-in-out -translate-x-full lg:translate-x-0"
>
  <div class="sprockets h-1.5 w-full shrink-0 opacity-40"></div>

  <!-- Brand + collapse toggle -->
  <div class="flex items-center justify-between px-6 py-6">
    <a href="{{ url('/') }}" class="flex items-center gap-3 overflow-hidden">
      <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-sm bg-reel-gold">
        <svg width="20" height="20" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="2" y="6" width="28" height="20" rx="2" fill="#0B0E14"/>
          <path d="M13 13L20 16L13 19V13Z" fill="#D4A24C"/>
        </svg>
      </div>
      <span data-sidebar-label class="whitespace-nowrap pt-1 font-display text-xl tracking-wide transition-opacity duration-200">
        CINE<span class="text-reel-gold">VAULT</span>
      </span>
    </a>

    <button
      id="sidebar-collapse-btn"
      type="button"
      aria-label="Collapse sidebar"
      class="hidden shrink-0 rounded-md p-1.5 text-reel-muted transition-colors hover:bg-white/[0.06] hover:text-reel-cream lg:flex"
    >
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-300">
        <path d="M15 18l-6-6 6-6"/>
      </svg>
    </button>
  </div>

  <!-- Search -->
  <div class="px-4 pb-2" data-sidebar-hide>
    <div class="relative">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="pointer-events-none absolute left-3 top-1/2 -translate-y-1/2 text-reel-muted">
        <circle cx="11" cy="11" r="8"/>
        <path d="M21 21l-4.3-4.3"/>
      </svg>
      <input
        type="text"
        placeholder="Search library…"
        class="w-full rounded-md border border-white/10 bg-white/[0.03] py-2 pl-8 pr-3 font-mono text-xs text-reel-cream placeholder:text-reel-muted focus:border-reel-gold/50 focus:outline-none focus:ring-1 focus:ring-reel-gold/30"
      />
    </div>
  </div>

  <!-- Nav -->
  <nav class="flex-1 space-y-6 overflow-y-auto overflow-x-hidden px-4 py-4">
    <div>
      <p data-sidebar-hide class="mb-2 px-3 font-mono text-[10px] uppercase tracking-[0.2em] text-reel-muted">Main</p>
      <div class="space-y-0.5">

        <a href="{{ route('dashboard') }}" data-nav-link data-tooltip="Dashboard"
           class="group relative flex items-center gap-3 rounded-md border-l-2 border-transparent px-3 py-2.5 text-sm text-reel-muted transition-all hover:bg-white/[0.04] hover:text-reel-cream">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0">
            <rect x="3" y="3" width="7" height="9" rx="1"/>
            <rect x="14" y="3" width="7" height="5" rx="1"/>
            <rect x="14" y="12" width="7" height="9" rx="1"/>
            <rect x="3" y="16" width="7" height="5" rx="1"/>
          </svg>
          <span data-sidebar-label class="whitespace-nowrap transition-opacity duration-200">Dashboard</span>
          <span data-sidebar-tooltip class="pointer-events-none absolute left-full ml-2 hidden whitespace-nowrap rounded-md border border-white/10 bg-reel-surface px-2 py-1 font-mono text-xs text-reel-cream shadow-lg">Dashboard</span>
        </a>

        <a href="{{ route('collection') }}" data-nav-link data-tooltip="Movies"
           class="group relative flex items-center gap-3 rounded-md border-l-2 border-transparent px-3 py-2.5 text-sm text-reel-muted transition-all hover:bg-white/[0.04] hover:text-reel-cream">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0">
            <rect x="2" y="4" width="20" height="16" rx="2"/>
            <path d="M7 4v16M17 4v16M2 9h5M17 9h5M2 15h5M17 15h5"/>
          </svg>
          <span data-sidebar-label class="whitespace-nowrap transition-opacity duration-200">Movies</span>
          <span data-sidebar-tooltip class="pointer-events-none absolute left-full ml-2 hidden whitespace-nowrap rounded-md border border-white/10 bg-reel-surface px-2 py-1 font-mono text-xs text-reel-cream shadow-lg">Movies</span>
        </a>

        <a href="{{ url('/watchlist') }}" data-nav-link data-tooltip="Watchlist"
           class="group relative flex items-center gap-3 rounded-md border-l-2 border-transparent px-3 py-2.5 text-sm text-reel-muted transition-all hover:bg-white/[0.04] hover:text-reel-cream">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0">
            <path d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z"/>
          </svg>
          <span data-sidebar-label class="whitespace-nowrap transition-opacity duration-200">Watchlist</span>
          <span data-sidebar-tooltip class="pointer-events-none absolute left-full ml-2 hidden whitespace-nowrap rounded-md border border-white/10 bg-reel-surface px-2 py-1 font-mono text-xs text-reel-cream shadow-lg">Watchlist</span>
        </a>

      </div>
    </div>

    <div>
      <p data-sidebar-hide class="mb-2 px-3 font-mono text-[10px] uppercase tracking-[0.2em] text-reel-muted">Library</p>
      <div class="space-y-0.5">
        <a href="{{ url('/settings') }}" data-nav-link data-tooltip="Settings"
           class="group relative flex items-center gap-3 rounded-md border-l-2 border-transparent px-3 py-2.5 text-sm text-reel-muted transition-all hover:bg-white/[0.04] hover:text-reel-cream">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0">
            <circle cx="12" cy="12" r="3"/>
            <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 11-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 11-2.83-2.83l.06-.06A1.65 1.65 0 004.6 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 112.83-2.83l.06.06A1.65 1.65 0 009 4.6a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 112.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/>
          </svg>
          <span data-sidebar-label class="whitespace-nowrap transition-opacity duration-200">Settings</span>
          <span data-sidebar-tooltip class="pointer-events-none absolute left-full ml-2 hidden whitespace-nowrap rounded-md border border-white/10 bg-reel-surface px-2 py-1 font-mono text-xs text-reel-cream shadow-lg">Settings</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- User + logout -->
  <div class="space-y-3 border-t border-white/5 p-4">
    <div class="flex items-center gap-3 overflow-hidden">
      <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-reel-gold/15 font-mono text-xs font-semibold text-reel-gold">
        {{ Str::of(auth()->user()->name ?? 'AB')->substr(0,2)->upper() }}
      </div>
      <div data-sidebar-label class="min-w-0 whitespace-nowrap transition-opacity duration-200">
        <p class="truncate text-sm text-reel-cream">{{ auth()->user()->name ?? 'Abdullah' }}</p>
        <p class="truncate font-mono text-[11px] text-reel-muted">{{ auth()->user()->email ?? '' }}</p>
      </div>
    </div>

    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button
        type="submit"
        data-tooltip="Logout"
        class="group relative flex w-full items-center gap-3 rounded-md px-3 py-2.5 text-sm text-reel-muted transition-all hover:bg-reel-crimson/10 hover:text-reel-crimson"
      >
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0">
          <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/>
        </svg>
        <span data-sidebar-label class="whitespace-nowrap transition-opacity duration-200">Logout</span>
        <span data-sidebar-tooltip class="pointer-events-none absolute left-full ml-2 hidden whitespace-nowrap rounded-md border border-white/10 bg-reel-surface px-2 py-1 font-mono text-xs text-reel-cream shadow-lg">Logout</span>
      </button>
    </form>
  </div>
</aside>

<script>
(function () {
  const sidebar   = document.getElementById('sidebar-panel');
  const toggleBtn = document.getElementById('sidebar-collapse-btn');
  const chevron   = toggleBtn.querySelector('svg');
  const STORAGE_KEY = 'cinevault:sidebar-collapsed';

  function setCollapsed(collapsed) {
    sidebar.dataset.collapsed = collapsed;
    sidebar.classList.toggle('lg:w-64', !collapsed);
    sidebar.classList.toggle('lg:w-[72px]', collapsed);
    chevron.style.transform = collapsed ? 'rotate(180deg)' : 'rotate(0deg)';

    document.querySelectorAll('[data-sidebar-label], [data-sidebar-hide]').forEach(el => {
      el.style.opacity = collapsed ? '0' : '1';
      el.style.pointerEvents = collapsed ? 'none' : '';
      if (collapsed) {
        el.style.position = 'absolute';
        el.style.width = '0';
      } else {
        el.style.position = '';
        el.style.width = '';
      }
    });

    toggleBtn.setAttribute('aria-label', collapsed ? 'Expand sidebar' : 'Collapse sidebar');
    localStorage.setItem(STORAGE_KEY, collapsed ? '1' : '0');
  }

  // Tooltips only show while collapsed
  document.querySelectorAll('[data-nav-link], [data-tooltip]').forEach(link => {
    const tooltip = link.querySelector('[data-sidebar-tooltip]');
    if (!tooltip) return;
    link.addEventListener('mouseenter', () => {
      if (sidebar.dataset.collapsed === 'true') tooltip.classList.remove('hidden');
    });
    link.addEventListener('mouseleave', () => tooltip.classList.add('hidden'));
  });

  toggleBtn.addEventListener('click', () => {
    setCollapsed(sidebar.dataset.collapsed !== 'true');
  });

  // Active route highlighting
  const currentPath = window.location.pathname.replace(/\/+$/, '') || '/';
  document.querySelectorAll('[data-nav-link]').forEach(link => {
    const linkPath = new URL(link.href).pathname.replace(/\/+$/, '') || '/';
    if (linkPath === currentPath) {
      link.classList.add('bg-reel-gold/10', 'text-reel-gold', 'border-reel-gold', 'font-medium');
      link.classList.remove('text-reel-muted');
    }
  });

  // Restore collapsed state on load
  if (localStorage.getItem(STORAGE_KEY) === '1' && window.innerWidth >= 1024) {
    setCollapsed(true);
  }
})();
</script>