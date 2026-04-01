<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tambah Ekstrakurikuler - MTS Darul Hikam Binong</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "secondary": "#4c5e84",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed": "#001a40",
                        "secondary-fixed-dim": "#b3c7f1",
                        "tertiary": "#722b00",
                        "on-primary": "#ffffff",
                        "surface-variant": "#e1e3e4",
                        "on-background": "#191c1d",
                        "surface": "#f8f9fa",
                        "surface-container-high": "#e7e8e9",
                        "error-container": "#ffdad6",
                        "inverse-on-surface": "#f0f1f2",
                        "on-secondary-fixed": "#041b3c",
                        "on-primary-container": "#bbd0ff",
                        "inverse-primary": "#acc7ff",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-container": "#ffc2a7",
                        "on-surface-variant": "#424752",
                        "outline-variant": "#c2c6d4",
                        "primary-container": "#0056b3",
                        "on-secondary-container": "#475a7f",
                        "surface-tint": "#115cb9",
                        "on-secondary-fixed-variant": "#34476a",
                        "secondary-fixed": "#d7e2ff",
                        "on-tertiary-fixed-variant": "#7b2f00",
                        "surface-container": "#edeeef",
                        "surface-dim": "#d9dadb",
                        "inverse-surface": "#2e3132",
                        "primary": "#003f87",
                        "primary-fixed-dim": "#acc7ff",
                        "on-secondary": "#ffffff",
                        "on-error-container": "#93000a",
                        "tertiary-fixed": "#ffdbcc",
                        "on-surface": "#191c1d",
                        "on-error": "#ffffff",
                        "surface-bright": "#f8f9fa",
                        "background": "#f8f9fa",
                        "tertiary-container": "#983c00",
                        "surface-container-low": "#f3f4f5",
                        "surface-container-highest": "#e1e3e4",
                        "error": "#ba1a1a",
                        "secondary-container": "#bfd2fd",
                        "outline": "#727784",
                        "on-primary-fixed-variant": "#004491",
                        "primary-fixed": "#d7e2ff",
                        "tertiary-fixed-dim": "#ffb694",
                        "on-tertiary-fixed": "#351000"
                    },
                    fontFamily: {
                        "headline": ["Lexend"],
                        "body": ["Inter"],
                        "label": ["Inter"]
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        h1,
        h2,
        h3,
        .font-lexend {
            font-family: 'Lexend', sans-serif;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="text-on-surface selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopAppBar -->
    <header class="sticky top-0 w-full z-50 bg-surface/80 dark:bg-slate-900/80 backdrop-blur-xl shadow-sm dark:shadow-none">
        <div class="flex items-center justify-between px-6 py-4 w-full">
            <div class="flex items-center gap-4">
                <button class="active:scale-95 duration-200 hover:opacity-80 transition-opacity">
                    <span class="material-symbols-outlined text-blue-800 dark:text-blue-400">arrow_back</span>
                </button>
                <h1 class="font-lexend font-bold tracking-tight text-lg text-blue-800 dark:text-blue-400">Add Activity</h1>
            </div>
            <div class="font-lexend font-black text-blue-900 dark:text-blue-200">DHB</div>
        </div>
    </header>
    <main class="max-w-3xl mx-auto px-6 pt-12 pb-32">
        <div class="mb-10 text-center">
            <h2 class="text-3xl font-lexend font-extrabold tracking-tight text-on-primary-fixed mb-3">Tambah Ekstrakurikuler</h2>
            <p class="text-secondary font-body">Lengkapi detail kegiatan untuk menambahkan program baru ke sistem akademik.</p>
        </div>
        <!-- Form Card -->
        <div class="bg-surface-container-lowest rounded-xl shadow-[0_20px_40px_rgba(0,26,64,0.06)] p-8 md:p-12 overflow-hidden relative">
            <!-- Decorative Gradient Element -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-full -mr-16 -mt-16"></div>
            <form class="space-y-8 relative z-10">
                <!-- Nama Kegiatan -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-on-surface-variant font-label" for="nama_kegiatan">Nama Ekstrakurikuler</label>
                    <input aria-describedby="error-nama" aria-invalid="true" class="w-full bg-transparent border-0 border-b-2 border-error focus:ring-0 focus:border-primary px-0 py-3 text-lg transition-all" id="nama_kegiatan" name="nama_kegiatan" placeholder="Contoh: Robotik Darul Hikam" type="text" />
                    <p class="text-error text-xs font-medium mt-1 flex items-center gap-1" id="error-nama">
                        <span class="material-symbols-outlined text-sm">error</span>
                        Bagian ini wajib diisi sebelum melanjutkan.
                    </p>
                </div>
                <!-- Kategori -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-on-surface-variant font-label" for="kategori">Kategori</label>
                    <div class="relative">
                        <select class="w-full bg-surface-container-low border-0 border-b-2 border-outline-variant focus:ring-0 focus:border-primary px-0 py-3 text-on-surface appearance-none cursor-pointer transition-all" id="kategori" name="kategori">
                            <option disabled="" selected="" value="">Pilih Kategori Kegiatan</option>
                            <option value="olahraga">Olahraga</option>
                            <option value="seni">Seni</option>
                            <option value="keagamaan">Keagamaan</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-outline">
                            <span class="material-symbols-outlined">expand_more</span>
                        </div>
                    </div>
                </div>
                <!-- Deskripsi -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-on-surface-variant font-label" for="deskripsi">Deskripsi Kegiatan</label>
                    <textarea class="w-full bg-surface-container-low border-0 border-b-2 border-outline-variant focus:ring-0 focus:border-primary px-4 py-3 text-on-surface transition-all rounded-lg" id="deskripsi" name="deskripsi" placeholder="Tuliskan visi, misi, dan jadwal rutin kegiatan..." rows="4"></textarea>
                </div>
                <!-- Image Upload Area -->
                <div class="space-y-4">
                    <label class="block text-sm font-semibold text-on-surface-variant font-label">Upload Gambar Kegiatan</label>
                    <div class="group relative flex flex-col items-center justify-center w-full h-56 border-2 border-dashed border-outline-variant rounded-xl bg-surface-container-low/50 hover:bg-surface-container-low transition-colors cursor-pointer overflow-hidden">
                        <input class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" type="file" />
                        <div class="flex flex-col items-center justify-center p-6 text-center space-y-3">
                            <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:scale-110 transition-transform duration-300">
                                <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">add_photo_alternate</span>
                            </div>
                            <div>
                                <p class="text-on-surface font-semibold">Klik atau seret file untuk upload</p>
                                <p class="text-outline text-xs mt-1">PNG, JPG up to 10MB (Rekomendasi 16:9)</p>
                            </div>
                        </div>
                        <img class="hidden absolute inset-0 w-full h-full object-cover opacity-20" data-alt="Modern educational facility with students engaged in diverse extracurricular activities in a bright airy studio environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNVXOaw4LYZqI1tBKo_uY7DbB5jYyRAD4gHOljopQRFL-5VPtMw-1rrhX8L5X0HjhNjUcOO96QT5r_fSTKdrJycA3Og6AJkmHsh5Q43Mc9UUhiX8N5VNCGJRPTt-TnMoyKeoNzK3yZlsJORv4aXjhN2FYm4_kgIh-giSXrsVSk0upla-FDBNkqgOrUz1WSaG8DCxey01_IkqTxSyMsbuhSgzXC4EVQ18Cg2jh2EBrc3jXHL0zFw9K5cCTPA1pkWD7MSpElyaPiEkA" />
                    </div>
                </div>
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <button class="flex-1 bg-gradient-to-r from-primary to-primary-container text-on-primary font-lexend font-bold py-4 px-8 rounded-xl active:scale-95 hover:scale-[1.02] transition-all shadow-lg shadow-primary/20" type="submit">
                        Simpan Kegiatan
                    </button>
                    <button class="flex-1 bg-surface-container-high text-on-surface font-lexend font-bold py-4 px-8 rounded-xl active:scale-95 hover:bg-surface-dim transition-all" type="button">
                        Batal
                    </button>
                </div>
            </form>
        </div>
        <!-- Footer Stats / Info (Bento-lite) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">
            <div class="bg-blue-50 dark:bg-blue-900/10 p-6 rounded-xl flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-800/20 flex items-center justify-center text-blue-700">
                    <span class="material-symbols-outlined">info</span>
                </div>
                <div>
                    <h4 class="font-lexend font-bold text-blue-900 text-sm">Informasi Publik</h4>
                    <p class="text-xs text-blue-700/80 leading-relaxed">Data yang disimpan akan langsung ditampilkan di website profil sekolah.</p>
                </div>
            </div>
            <div class="bg-secondary-container/30 p-6 rounded-xl flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-secondary-container/50 flex items-center justify-center text-on-secondary-container">
                    <span class="material-symbols-outlined">history</span>
                </div>
                <div>
                    <h4 class="font-lexend font-bold text-on-secondary-container text-sm">Draft Otomatis</h4>
                    <p class="text-xs text-on-secondary-container/80 leading-relaxed">Perubahan formulir Anda disimpan sebagai draf lokal secara berkala.</p>
                </div>
            </div>
        </div>
    </main>
    <!-- BottomNavBar -->
    <nav class="fixed bottom-0 left-0 w-full z-50 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl shadow-[0_-4px_20px_rgba(0,26,64,0.06)] border-t border-slate-100 dark:border-slate-800 flex justify-around items-center px-4 pb-6 pt-3">
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 hover:text-blue-600 dark:hover:text-blue-300 transition-colors active:scale-90 duration-150" href="#">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-lexend text-[11px] font-medium tracking-wide">Dashboard</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-blue-50 dark:bg-blue-900/30 text-blue-800 dark:text-blue-200 rounded-2xl px-5 py-2 active:scale-90 duration-150" href="#">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">exercise</span>
            <span class="font-lexend text-[11px] font-medium tracking-wide">Activities</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 hover:text-blue-600 dark:hover:text-blue-300 transition-colors active:scale-90 duration-150" href="#">
            <span class="material-symbols-outlined">group</span>
            <span class="font-lexend text-[11px] font-medium tracking-wide">Students</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 hover:text-blue-600 dark:hover:text-blue-300 transition-colors active:scale-90 duration-150" href="#">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-lexend text-[11px] font-medium tracking-wide">Settings</span>
        </a>
    </nav>
</body>

</html>