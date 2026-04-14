<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Dashboard - MTS Darul Hikam Binong</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0056b2",
                        "background-light": "#f0f4f8",
                        "background-dark": "#0a111a",
                    },
                    fontFamily: {
                        "display": ["Lexend"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
    <!-- Top Navigation Header -->
    <header class="sticky top-0 z-50 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-primary/10">
        <div class="flex items-center justify-between px-4 h-16 max-w-7xl mx-auto">
            <div class="flex items-center gap-3">
                <div
                    class="size-10 shrink-0 bg-primary/10 rounded-full flex items-center justify-center overflow-hidden">
                    <img alt="School Logo" class="w-full h-full object-cover"
                        data-alt="Official logo of MTS Darul Hikam Binong school"
                        src="https://yt3.googleusercontent.com/ytc/AIdro_mlDWTRAZTCiGHxcCbvX0aK5ri1-5kM5ZDamnW4w8Jrxw=s900-c-k-c0x00ffffff-no-rj" />
                </div>
                <div>
                    <h1 class="text-sm font-bold leading-tight text-primary">MTS Darul Hikam</h1>
                    <p class="text-[10px] uppercase tracking-wider font-semibold opacity-60">Binong - Admin Panel</p>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="max-w-7xl mx-auto px-4 pb-24 pt-6">
        <!-- Welcome Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-bold tracking-tight">Halo, Admin</h2>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Selamat datang kembali di panel kontrol MTS Darul Hikam Binong.</p>
        </section>

        <div class="spcace-y-6">
            <!-- Stats Grid -->
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="bg-white p-4 rounded-xl shadow">
                    <div class="size-10 rounded-lg bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center text-blue-600 mb-3">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                        <p class="text-sm text-slate-500">Total Guru</p>
                        <p class="text-2xl font-bold text-primary">
                            {{ $totalGuru ?? $guru->total() }}
                        </p>
                    </div>
                </div>
                <div class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-primary/5 shadow-sm">
                    <div class="size-10 rounded-lg bg-purple-50 dark:bg-purple-900/20 flex items-center justify-center text-purple-600 mb-3">
                        <span class="material-symbols-outlined">sports_soccer</span>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                        <p class="text-sm text-slate-500">Total Ekstra</p>
                        <p class="text-2xl font-bold text-primary">
                            {{ $totalEkstrakurikuler ?? $eskul->total() }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- Quick Actions & Recent Activity -->
            <div class="flex flex-col gap-6">
                <!-- Left Column: Recent Activity -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-white dark:bg-slate-900 rounded-xl border border-primary/5 overflow-hidden shadow-sm">
                        <div class="p-4 border-b border-primary/5 flex items-center justify-between">
                            <h3 class="font-bold">Aktivitas Terbaru</h3>
                            <button class="text-primary text-xs font-bold">Lihat Semua</button>
                        </div>
                        <div class="divide-y divide-primary/5">
                            <div class="p-4 flex gap-4 items-start">
                                <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
                                    <span class="material-symbols-outlined text-[20px]">add_a_photo</span>
                                </div>
                                <div>
                                    <p class="text-sm"><span class="font-bold">Admin</span> menambahkan 5 foto baru ke album <span class="text-primary font-medium">Wisuda 2023</span></p>
                                    <p class="text-[11px] text-slate-400 mt-1">2 jam yang lalu</p>
                                </div>
                            </div>
                            <div class="p-4 flex gap-4 items-start">
                                <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
                                    <span class="material-symbols-outlined text-[20px]">edit_note</span>
                                </div>
                                <div>
                                    <p class="text-sm"><span class="font-bold">Ustadz Ahmad</span> menerbitkan artikel <span class="text-primary font-medium">"Pentingnya Adab di Sekolah"</span></p>
                                    <p class="text-[11px] text-slate-400 mt-1">5 jam yang lalu</p>
                                </div>
                            </div>
                            <div class="p-4 flex gap-4 items-start">
                                <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
                                    <span class="material-symbols-outlined text-[20px]">person_add</span>
                                </div>
                                <div>
                                    <p class="text-sm"><span class="font-bold">Admin</span> mendaftarkan <span class="text-primary font-medium">Siti Aminah, S.Pd</span> sebagai Guru baru</p>
                                    <p class="text-[11px] text-slate-400 mt-1">Kemarin, 14:20</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Shortcuts -->
                <div class="space-y-6">
                    <div class="bg-primary rounded-xl p-5 text-white shadow-lg shadow-primary/20">
                        <h3 class="font-bold mb-4">Akses Cepat</h3>
                        <div class="flex flex-col gap-4">
                            <button>
                                <a class="flex flex-col items-center justify-center p-3 bg-white/10 hover:bg-white/20 rounded-lg transition-colors border border-white/10" href="/admin/eskul/tambah">
                                    <span class="material-symbols-outlined mb-1">post_add</span>
                                    <span class="text-[10px] font-medium uppercase">Tambah Eksul</span>
                                </a>
                            </button>
                            <button>
                                <a class="flex flex-col items-center justify-center p-3 bg-white/10 hover:bg-white/20 rounded-lg transition-colors border border-white/10" href="/admin/guru/tambah">
                                    <span class="material-symbols-outlined mb-1">person_add</span>
                                    <span class="text-[10px] font-medium uppercase">Tambah Guru</span>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Bottom Navigation Bar (Mobile Optimized) -->
    <nav class="fixed bottom-0 left-0 right-0 bg-white dark:bg-slate-900 border-t border-primary/10 pb-safe-area z-50">
        <div class="flex items-center justify-around h-16 max-w-lg mx-auto px-4">
            <a class="flex flex-col items-center gap-1 text-primary" href="#">
                <span class="material-symbols-outlined fill-1">dashboard</span>
                <span class="text-[10px] font-bold">Beranda</span>
            </a>
            <a class="flex flex-col items-center gap-1 text-slate-400 hover:text-primary transition-colors" href="/admin/guru">
                <span class="material-symbols-outlined">group</span>
                <span class="text-[10px] font-bold uppercase tracking-tight">Guru</span>
            </a>
            <a class="flex flex-col items-center gap-1 text-slate-400 hover:text-primary transition-colors" href="/admin/eskul">
                <span class="material-symbols-outlined font-fill">sports_basketball</span>
                <span class="text-[10px] font-medium">Ekskul</span>
            </a>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="flex flex-col items-center gap-1 text-slate-500 hover:text-red-500 transition-colors">
                    <span class="material-symbols-outlined text-xl">logout</span>
                    <span class="text-[10px] font-medium">Keluar</span>
                </button>
            </form>
        </div>

    </nav>
</body>

</html>