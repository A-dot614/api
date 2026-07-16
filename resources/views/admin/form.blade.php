<x-layout.admin-layout>    
<main class="p-8 max-w-3xl mx-auto">

   <div class="mb-6">
    <a href="{{ route('collection') }}"><button  class="flex items-center gap-2 text-reel-muted hover:text-reel-gold transition-all text-sm font-medium group">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform group-hover:-translate-x-1">
        <path d="M19 12H5M12 19l-7-7 7-7"/>
      </svg>
      Back to Dashboard
    </button>
    </a>
  </div>    

  <div class="bg-reel-surface border border-white/5 rounded-2xl p-8">
    <h2 class="font-display text-2xl text-white mb-6">Add New Movie/Season</h2>
    
<form action="{{ route('collection.store') }}" method="POST" class="space-y-6">
  @csrf
  <!-- Name & Description -->
  <div class="grid grid-cols-1 gap-6">
    <div>
      <label class="block text-xs font-mono text-reel-muted uppercase tracking-wider mb-2">Movie Name</label>
      <input type="name" name="name" class="w-full bg-[#0B0E14] border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:border-reel-gold focus:outline-none transition-all" placeholder="Enter title">
      @error('name') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror

    </div>
    <div>
      <label class="block text-xs font-mono text-reel-muted uppercase tracking-wider mb-2">Description</label>
      <textarea name="description" rows="3" class="w-full bg-[#0B0E14] border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:border-reel-gold focus:outline-none transition-all" placeholder="Enter brief synopsis"></textarea>
      @error('description') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
    </div>
  </div>

  <!-- Thumbnail & Duration -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
      <label class="block text-xs font-mono text-reel-muted uppercase tracking-wider mb-2">Thumbnail URL</label>
      <input type="url" name="thumbnail" class="w-full bg-[#0B0E14] border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:border-reel-gold focus:outline-none transition-all" placeholder="https://...">
      @error('thumbnail') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
    </div>
    <div>
      <label class="block text-xs font-mono text-reel-muted uppercase tracking-wider mb-2">Duration</label>
      <input type="text" name="duration" class="w-full bg-[#0B0E14] border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:border-reel-gold focus:outline-none transition-all" placeholder="e.g. 2h 15m">
      @error('duration') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
    </div>
  </div>

  <!-- Rating, Date & Season -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div>
      <label class="block text-xs font-mono text-reel-muted uppercase tracking-wider mb-2">IMDb Rating</label>
      <input type="number" step="0.1" name="idmp_rating" class="w-full bg-[#0B0E14] border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:border-reel-gold focus:outline-none transition-all" placeholder="8.5">
      @error('idmp_rating') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
    </div>
    <div>
      <label class="block text-xs font-mono text-reel-muted uppercase tracking-wider mb-2">Release Date</label>
      <input type="date" name="release_date" class="w-full bg-[#0B0E14] border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:border-reel-gold focus:outline-none transition-all">
      @error('release_date') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
    </div>
    <div>
      <label class="block text-xs font-mono text-reel-muted uppercase tracking-wider mb-2">Season</label>
      <input type="text" name="season" class="w-full bg-[#0B0E14] border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:border-reel-gold focus:outline-none transition-all" placeholder="1">
      @error('season') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
    </div>
  </div>

  <!-- Is Active -->
  <div class="flex items-center justify-between bg-[#0B0E14] border border-white/10 rounded-xl px-4 py-3">
    <div>
      <label for="is_active" class="block text-xs font-mono text-reel-muted uppercase tracking-wider">Is Active</label>
      <p class="text-xs text-reel-muted/70 mt-1">Toggle visibility of this title on the platform</p>
    </div>
    <label class="relative inline-flex items-center cursor-pointer">
      <input type="checkbox" id="is_active" name="is_active" value="1" checked class="sr-only peer">
      <div class="w-11 h-6 bg-white/10 rounded-full peer peer-checked:bg-reel-gold transition-all after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-5"></div>
    </label>
    @error('is_active') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
  </div>

  <!-- Submit Button -->
  <div class="pt-4">
    <button type="submit" class="w-full bg-reel-gold hover:bg-reel-gold/90 text-[#0B0E14] font-bold py-3 rounded-xl transition-all active:scale-95">@error('model_name') <div class="text-red-600 text-xs mt-1 uppercase font-bold">{{ $message }}</div> @enderror
      Save to Vault
    </button>
  </div>
</form>
  </div>
</main>    
</x-layout.admin-layout>    
