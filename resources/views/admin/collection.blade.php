<x-layout.admin-layout>    
<main class="p-8 max-w-7xl mx-auto">
  <!-- Header Section -->
  <div class="flex items-center justify-between mb-8">
    <div>
      <h2 class="font-display text-2xl text-white">Movie Library</h2>
      <p class="text-sm text-reel-muted">Manage your catalog of movies and seasons.</p>
    </div>
    <a href="{{ route('create') }}" class="bg-reel-gold hover:bg-white text-[#0B0E14] px-5 py-2.5 rounded-xl text-sm font-semibold transition-all flex items-center gap-2">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
      Add New
    </a>
  </div>

  {{-- UPLOADED / CREATED --}}
  @if (session('success'))
    <div class="mb-6">
      <div class="relative bg-emerald-500/5 border border-emerald-500/20 rounded-xl px-4 py-3 flex items-center gap-3 overflow-hidden">
        <div class="absolute left-0 top-0 h-full w-1 bg-emerald-500"></div>
        <div class="shrink-0 w-8 h-8 rounded-full bg-emerald-500/10 flex items-center justify-center">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-500">
            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <div>
          <p class="text-xs font-semibold text-emerald-500 uppercase tracking-wider">Added to Library</p>
          <p class="text-xs text-reel-muted mt-0.5">{{ session('success') }}</p>
        </div>
      </div>
    </div>
  @endif

  {{-- EDIT / UPDATED --}}
  @if (session('updated'))
    <div class="mb-6">
      <div class="relative bg-reel-gold/5 border border-reel-gold/20 rounded-xl px-4 py-3 flex items-center gap-3 overflow-hidden">
        <div class="absolute left-0 top-0 h-full w-1 bg-reel-gold"></div>
        <div class="shrink-0 w-8 h-8 rounded-full bg-reel-gold/10 flex items-center justify-center">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-reel-gold">
            <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
            <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
          </svg>
        </div>
        <div>
          <p class="text-xs font-semibold text-reel-gold uppercase tracking-wider">Changes Saved</p>
          <p class="text-xs text-reel-muted mt-0.5">{{ session('updated') }}</p>
        </div>
      </div>
    </div>
  @endif

  {{-- DELETE --}}
  @if (session('deleted'))
    <div class="mb-6">
      <div class="relative bg-reel-crimson/5 border border-reel-crimson/20 rounded-xl px-4 py-3 flex items-center gap-3 overflow-hidden">
        <div class="absolute left-0 top-0 h-full w-1 bg-reel-crimson"></div>
        <div class="shrink-0 w-8 h-8 rounded-full bg-reel-crimson/10 flex items-center justify-center">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-reel-crimson">
            <path d="M3 6h18M8 6V4a2 2 0 012-2h4a2 2 0 012 2v2m3 0v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6h14z"/>
          </svg>
        </div>
        <div>
          <p class="text-xs font-semibold text-reel-crimson uppercase tracking-wider">Removed from Library</p>
          <p class="text-xs text-reel-muted mt-0.5">{{ session('deleted') }}</p>
        </div>
      </div>
    </div>
  @endif

  <!-- Table Container -->
  <div class="bg-reel-surface border border-white/5 rounded-2xl overflow-hidden">
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse">
        <thead>
          <tr class="border-b border-white/5">
            <th class="px-6 py-4 text-[10px] font-bold text-reel-muted uppercase tracking-wider">Thumbnail</th>
            <th class="px-6 py-4 text-[10px] font-bold text-reel-muted uppercase tracking-wider">Name</th>
            <th class="px-6 py-4 text-[10px] font-bold text-reel-muted uppercase tracking-wider">Season</th>
            <th class="px-6 py-4 text-[10px] font-bold text-reel-muted uppercase tracking-wider">Rating</th>
            <th class="px-6 py-4 text-[10px] font-bold text-reel-muted uppercase tracking-wider">Duration</th>
            <th class="px-6 py-4 text-[10px] font-bold text-reel-muted uppercase tracking-wider text-right">Actions</th>
          </tr>
        </thead>
<tbody class="divide-y divide-white/5">
  @foreach ($movies as $movie)
    <tr class="group transition-colors hover:bg-white/[0.03]">

      {{-- Thumbnail --}}
      <td class="px-6 py-4">
        <div class="h-16 w-12 overflow-hidden rounded-md border border-white/10 bg-reel-bg shadow-sm transition-transform duration-200 group-hover:scale-[1.03]">
          <img
            src="{{ $movie->thumbnail ?? 'https://via.placeholder.com/48x64' }}"
            alt="{{ $movie->name }} poster"
            loading="lazy"
            class="h-full w-full object-cover">
        </div>
      </td>

      {{-- Title + description --}}
      <td class="px-6 py-4">
        <p class="text-sm font-medium text-white">{{ $movie->name }}</p>
        <p class="max-w-[220px] truncate text-xs text-reel-muted">
          {{ $movie->description ?? 'No description available.' }}
        </p>
      </td>

      {{-- Season / type --}}
      <td class="px-6 py-4">
        <span class="inline-flex items-center gap-1.5 text-sm text-reel-cream">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-reel-muted">
            <rect x="2" y="4" width="20" height="16" rx="2"/>
            <path d="M7 4v16M17 4v16M2 9h5M17 9h5M2 15h5M17 15h5"/>
          </svg>
          {{ $movie->season ? 'Season ' . $movie->season : 'Movie' }}
        </span>
      </td>

      {{-- Rating --}}
      <td class="px-6 py-4">
        <span class="inline-flex items-center gap-1 rounded-md bg-reel-gold/10 px-2 py-1 text-[10px] font-bold text-reel-gold">
          <svg width="10" height="10" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"/>
          </svg>
          {{ number_format($movie->idmp_rating?? 0, 1) }}
        </span>
      </td>

      {{-- Runtime --}}
      <td class="px-6 py-4">
        <span class="inline-flex items-center gap-1.5 text-sm text-reel-muted">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 7v5l3 3"/>
          </svg>
          {{ $movie->duration ?? '—' }}
        </span>
      </td>

      {{-- Actions --}}
      <td class="px-6 py-4">
        <div class="flex items-center justify-end gap-1">

          <a href="{{ route('show', $movie->id) }}"
             title="View"
             aria-label="View {{ $movie->title }}"
             class="flex h-8 w-8 items-center justify-center rounded-md text-reel-muted transition-colors hover:bg-white/[0.06] hover:text-reel-cream">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
              <circle cx="12" cy="12" r="3"/>
            </svg>
          </a>

          <a href="{{ route('edit',$movie->id) }}"
             title="Edit"
             aria-label="Edit {{ $movie->title }}"
             class="flex h-8 w-8 items-center justify-center rounded-md text-reel-muted transition-colors hover:bg-white/[0.06] hover:text-reel-cream">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
              <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
            </svg>
          </a>

          <form action="{{ route('delete',$movie->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit"
                    title="Delete"
                    aria-label="Delete {{ $movie->title }}"
                    onclick="return confirm('Delete “{{ $movie->title }}”? This can’t be undone.')"
                    class="flex h-8 w-8 items-center justify-center rounded-md text-reel-muted transition-colors hover:bg-reel-crimson/10 hover:text-reel-crimson">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 6h18M8 6V4a2 2 0 012-2h4a2 2 0 012 2v2m3 0v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6h14z"/>
              </svg>
            </button>
          </form>

        </div>
      </td>
    </tr>
  @endforeach

</tbody>
      </table>
    </div>
    
    <!-- Footer pagination placeholder -->
    <div class="px-6 py-4 border-t border-white/5 flex items-center justify-between">
      <span class="text-xs text-reel-muted">Showing 1 to 1 of 1 results</span>
      <div class="flex gap-2">
        <button class="px-3 py-1 text-xs border border-white/10 rounded-lg hover:bg-white/5 transition-all">Prev</button>
        <button class="px-3 py-1 text-xs border border-white/10 rounded-lg hover:bg-white/5 transition-all">Next</button>
      </div>
    </div>
  </div>
</main>    
</x-layout.admin-layout>