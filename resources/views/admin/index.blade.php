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
                <div class="size-10 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined font-bold">school</span>
                </div>
                <div>
                    <h1 class="text-sm font-bold leading-tight text-primary">MTS Darul Hikam</h1>
                    <p class="text-[10px] uppercase tracking-wider font-semibold opacity-60">Binong - Admin Panel</p>
                </div>
            </div>
            <div class="size-10 rounded-full overflow-hidden border-2 border-primary/20">
                <img alt="Admin Profile" class="w-full h-full object-cover" data-alt="Portrait of a male school administrator" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4iO4rollWb-BLJBmr5RDCFa5wyYP1gJO-XinDMfqsCp860TZBBtvMYfaSNvsvrvwaLSURaFoDXqTGLUJCRlJaAlKdL_fPHp4Fy92ZGqy1DESC0V3moA7W0tX50E5e0RMSot37kCnoBbERzzjvk1za_3SCTm51XOg9lGoe2_KI25gpJdp7QPwSsv8SltwCxNp7rlh1M-SkeO5REXbcrO8HW1dE_928GxdMffXMSFhJnzxgWF7UrpwPFCkIQ3POiZHEP7R_VYUxSzQ" />
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
        <!-- Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-primary/5 shadow-sm">
                <div class="size-10 rounded-lg bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center text-blue-600 mb-3">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-xs font-medium uppercase">Total Guru</p>
                <div class="flex items-end gap-2 mt-1">
                    <p class="text-2xl font-bold">42</p>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-primary/5 shadow-sm">
                <div class="size-10 rounded-lg bg-purple-50 dark:bg-purple-900/20 flex items-center justify-center text-purple-600 mb-3">
                    <span class="material-symbols-outlined">sports_soccer</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-xs font-medium uppercase">Ekstrakurikuler</p>
                <div class="flex items-end gap-2 mt-1">
                    <p class="text-2xl font-bold">12</p>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-primary/5 shadow-sm">
                <div class="size-10 rounded-lg bg-orange-50 dark:bg-orange-900/20 flex items-center justify-center text-orange-600 mb-3">
                    <span class="material-symbols-outlined">article</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-xs font-medium uppercase">Artikel</p>
                <div class="flex items-end gap-2 mt-1">
                    <p class="text-2xl font-bold">85</p>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-primary/5 shadow-sm">
                <div class="size-10 rounded-lg bg-cyan-50 dark:bg-cyan-900/20 flex items-center justify-center text-cyan-600 mb-3">
                    <span class="material-symbols-outlined">photo_library</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-xs font-medium uppercase">Galeri Foto</p>
                <div class="flex items-end gap-2 mt-1">
                    <p class="text-2xl font-bold">156</p>
                </div>
            </div>
        </div>
        <!-- Quick Actions & Recent Activity -->
        <div class="grid lg:grid-cols-3 gap-6">
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
                    <div class="grid grid-cols-2 gap-3">
                        <button class="flex flex-col items-center justify-center p-3 bg-white/10 hover:bg-white/20 rounded-lg transition-colors border border-white/10">
                            <span class="material-symbols-outlined mb-1">post_add</span>
                            <span class="text-[10px] font-medium uppercase">Tambah Artikel</span>
                        </button>
                        <button class="flex flex-col items-center justify-center p-3 bg-white/10 hover:bg-white/20 rounded-lg transition-colors border border-white/10">
                            <span class="material-symbols-outlined mb-1">upload_file</span>
                            <span class="text-[10px] font-medium uppercase">Upload Galeri</span>
                        </button>
                        <button class="flex flex-col items-center justify-center p-3 bg-white/10 hover:bg-white/20 rounded-lg transition-colors border border-white/10">
                            <span class="material-symbols-outlined mb-1">person_add</span>
                            <span class="text-[10px] font-medium uppercase">Input Guru</span>
                        </button>
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
            <a class="flex flex-col items-center gap-1 text-slate-400 hover:text-primary transition-colors" href="admin.guru.edit">
                <span class="material-symbols-outlined font-bold">group</span>
                <span class="text-[10px] font-bold uppercase tracking-tight">Guru</span>
            </a>
            <a class="flex flex-col items-center gap-1 text-slate-400 hover:text-primary transition-colors" href="#">
                <span class="material-symbols-outlined">description</span>
                <span class="text-[10px] font-medium">Konten</span>
            </a>
            <a class="flex flex-col items-center gap-1 text-slate-400 hover:text-primary transition-colors" href="#">
                <span class="material-symbols-outlined">photo_library</span>
                <span class="text-[10px] font-medium">Galeri</span>
            </a>
            <a class="flex flex-col items-center gap-1 text-slate-400 hover:text-primary transition-colors" href="#">
                <span class="material-symbols-outlined">account_circle</span>
                <span class="text-[10px] font-medium">Profil</span>
            </a>
        </div>
    </nav>
</body>

</html>