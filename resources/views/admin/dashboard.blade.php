<x-layout.admin-layout>
    <main class="p-6 space-y-8 max-w-5xl mx-auto animate-in fade-in duration-500">
      
      <div class="relative p-10 rounded-2xl border border-white/5 bg-gradient-to-br from-reel-surface to-reel-bg overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-reel-gold/10 via-transparent to-transparent"></div>
        <div class="relative z-10">
          <span class="font-mono text-xs tracking-[0.2em] text-reel-gold uppercase">Dashboard Portal</span>
          <h1 class="font-display text-5xl sm:text-6xl mt-2 tracking-wide">Ready for the <br><span class="text-reel-gold">next scene?</span></h1>
          <p class="text-reel-muted mt-4 max-w-lg leading-relaxed">
            Welcome to your personal cine-vault, Abdullah. Access your library, track new releases, and manage your collection from one centralized hub.
          </p>
          <div class="flex gap-4 mt-8">
            <button class="bg-reel-gold text-reel-bg px-6 py-2.5 rounded-sm font-semibold text-sm hover:bg-white transition-colors">Browse Library</button>
            <button class="bg-white/5 border border-white/10 px-6 py-2.5 rounded-sm font-semibold text-sm hover:bg-white/10 transition-colors">View Recent</button>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="p-6 bg-reel-surface border border-white/5 rounded-md hover:border-reel-gold/50 transition-colors">
          <h4 class="font-display text-lg mb-2">Import Media</h4>
          <p class="text-xs text-reel-muted">Sync new files and fetch metadata automatically.</p>
        </div>
        <div class="p-6 bg-reel-surface border border-white/5 rounded-md hover:border-reel-gold/50 transition-colors">
          <h4 class="font-display text-lg mb-2">Manage Seasons</h4>
          <p class="text-xs text-reel-muted">Organize your series and episode sequences.</p>
        </div>
        <div class="p-6 bg-reel-surface border border-white/5 rounded-md hover:border-reel-gold/50 transition-colors">
          <h4 class="font-display text-lg mb-2">Security Settings</h4>
          <p class="text-xs text-reel-muted">Configure vault access and permissions.</p>
        </div>
      </div>

      <div class="bg-reel-surface border border-white/5 p-6 rounded-md flex items-center justify-between">
        <div>
          <h3 class="font-display text-xl">Storage Status</h3>
          <p class="text-xs text-reel-muted">Your vault is currently 64% full.</p>
        </div>
        <div class="w-48 h-2 bg-reel-bg rounded-full overflow-hidden">
          <div class="h-full bg-reel-gold" style="width: 64%"></div>
        </div>
      </div>
    </main>
    
</x-layout.admin-layout>    