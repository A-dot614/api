<x-layout.admin-layout>    
<main class="p-8 max-w-5xl mx-auto">

  <!-- Back -->
  <div class="mb-6">
    <button onclick="history.back()" class="flex items-center gap-2 text-reel-muted hover:text-reel-gold transition-all text-sm font-medium group">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform group-hover:-translate-x-1">
        <path d="M19 12H5M12 19l-7-7 7-7"/>
      </svg>
      Back to Library
    </button>
  </div>

  <!-- Hero Card -->
  <div class="bg-reel-surface border border-white/5 rounded-2xl overflow-hidden">
    <div class="grid grid-cols-1 md:grid-cols-[280px_1fr]">

      <!-- Thumbnail -->
      <div class="relative bg-[#0B0E14] border-b md:border-b-0 md:border-r border-white/5">
        <img
          src="{{ $api->thumbnail ?? 'https://via.placeholder.com/280x400' }}"
          alt="{{ $api->name }} poster"
          class="w-full h-full max-h-[420px] object-cover"
        >
        <div class="absolute top-3 left-3">
          <span class="inline-flex items-center gap-1 rounded-md bg-reel-gold/90 px-2.5 py-1 text-[10px] font-bold text-[#0B0E14] shadow-lg">
            <svg width="10" height="10" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/>
            </svg>
            {{ number_format($api->idmp_rating ?? 0, 1) }}
          </span>
        </div>
      </div>

      <!-- Info -->
      <div class="p-8 flex flex-col">
        <div class="flex items-start justify-between gap-4 mb-2">
          <div>
            <span class="inline-flex items-center gap-1.5 text-[10px] font-mono uppercase tracking-widest text-reel-muted mb-2">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="4" width="20" height="16" rx="2"/>
                <path d="M7 4v16M17 4v16M2 9h5M17 9h5M2 15h5M17 15h5"/>
              </svg>
              {{ $api->season ? 'Season ' . $api->season : 'Movie' }}
            </span>
            <h1 class="font-display text-3xl text-white leading-tight">{{ $api->name }}</h1>
          </div>

          <div class="flex items-center gap-2 shrink-0">
            <a href="{{ route('edit',$api->id) }}" title="Edit"
               class="flex h-9 w-9 items-center justify-center rounded-md border border-white/10 text-reel-muted transition-colors hover:bg-white/[0.06] hover:text-reel-cream">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
              </svg>
            </a>
            <form action="{{ route('delete',$api->id) }}" method="POST" onsubmit="return confirm('Delete “{{ $api->name }}”? This can’t be undone.')">
              @csrf
              @method('DELETE')
              <button type="submit" title="Delete"
                      class="flex h-9 w-9 items-center justify-center rounded-md border border-white/10 text-reel-muted transition-colors hover:bg-reel-crimson/10 hover:text-reel-crimson">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 6h18M8 6V4a2 2 0 012-2h4a2 2 0 012 2v2m3 0v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6h14z"/>
                </svg>
              </button>
            </form>
          </div>
        </div>

        <p class="text-sm text-reel-muted leading-relaxed mb-6">
          {{ $api->description ?? 'No description available.' }}
        </p>

        <!-- Meta grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mt-auto pt-6 border-t border-white/5">

          <div>
            <p class="text-[10px] font-mono uppercase tracking-widest text-reel-muted mb-1">Duration</p>
            <span class="inline-flex items-center gap-1.5 text-sm text-reel-cream">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-reel-muted">
                <circle cx="12" cy="12" r="9"/>
                <path d="M12 7v5l3 3"/>
              </svg>
              {{ $api->duration ?? '—' }}
            </span>
          </div>

          <div>
            <p class="text-[10px] font-mono uppercase tracking-widest text-reel-muted mb-1">Release Date</p>
            <span class="inline-flex items-center gap-1.5 text-sm text-reel-cream">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-reel-muted">
                <rect x="3" y="4" width="18" height="18" rx="2"/>
                <path d="M16 2v4M8 2v4M3 10h18"/>
              </svg>
              {{ \Carbon\Carbon::parse($api->release_date)->format('M d, Y') }}
            </span>
          </div>

          <div>
            <p class="text-[10px] font-mono uppercase tracking-widest text-reel-muted mb-1">IMDb Rating</p>
            <span class="inline-flex items-center gap-1.5 text-sm text-reel-gold font-semibold">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/>
              </svg>
              {{ number_format($api->idmp_rating ?? 0, 1) }} / 10
            </span>
          </div>

          <div>
            <p class="text-[10px] font-mono uppercase tracking-widest text-reel-muted mb-1">Season</p>
            <span class="inline-flex items-center gap-1.5 text-sm text-reel-cream">
              {{ $api->season ?: 'N/A' }}
            </span>
          </div>

        </div>
      </div>
    </div>
  </div>

</main>    
</x-layout.admin-layout>