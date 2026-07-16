<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CineVault — Dashboard</title>
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
  body { background-color: #0B0E14; background-image: radial-gradient(circle at 15% 10%, rgba(212,162,76,0.06), transparent 40%), radial-gradient(circle at 85% 30%, rgba(179,58,58,0.08), transparent 45%); }
  .sprockets { background-image: radial-gradient(circle, #0B0E14 2.5px, transparent 2.6px); background-size: 16px 100%; background-position: center; }
  ::selection { background: #D4A24C; color: #0B0E14; }
</style>
</head>
<body class="font-body text-reel-cream min-h-screen">

<div id="sidebar-scrim" class="fixed inset-0 bg-black/60 z-30 opacity-0 pointer-events-none lg:hidden transition-opacity duration-300"></div>

<div class="flex min-h-screen">

<x-common.adminsidebar/>

  <div class="flex-1 min-w-0 lg:ml-64 transition-all duration-300">
    <x-common.adminheader/>

      {{ $slot }}
  </div>
</div>

<script>
  const sidebar = document.getElementById('sidebar-panel');
  const scrim = document.getElementById('sidebar-scrim');
  const trigger = document.getElementById('sidebar-trigger');

  function toggleSidebar() {
    sidebar.classList.toggle('-translate-x-full');
    scrim.classList.toggle('opacity-0');
    scrim.classList.toggle('pointer-events-none');
  }

  trigger.addEventListener('click', toggleSidebar);
  scrim.addEventListener('click', toggleSidebar);
</script>

</body>
</html>