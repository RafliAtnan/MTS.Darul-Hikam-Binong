<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tambah Data Guru - MTS Darul Hikam Binong</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Lexend:wght@700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#003f87",
                        "on-tertiary-container": "#ffc2a7",
                        "on-surface-variant": "#424752",
                        "secondary-fixed-dim": "#b3c7f1",
                        "on-primary-fixed": "#001a40",
                        "tertiary": "#722b00",
                        "error": "#ba1a1a",
                        "secondary-fixed": "#d7e2ff",
                        "primary-container": "#0056b3",
                        "on-tertiary-fixed-variant": "#7b2f00",
                        "on-primary-container": "#bbd0ff",
                        "surface-bright": "#f8f9fa",
                        "on-error": "#ffffff",
                        "on-surface": "#191c1d",
                        "on-primary-fixed-variant": "#004491",
                        "on-primary": "#ffffff",
                        "tertiary-fixed": "#ffdbcc",
                        "surface-tint": "#115cb9",
                        "inverse-primary": "#acc7ff",
                        "on-tertiary-fixed": "#351000",
                        "secondary-container": "#bfd2fd",
                        "on-secondary-container": "#475a7f",
                        "surface": "#f8f9fa",
                        "background": "#f8f9fa",
                        "surface-variant": "#e1e3e4",
                        "error-container": "#ffdad6",
                        "outline": "#727784",
                        "primary-fixed-dim": "#acc7ff",
                        "on-secondary-fixed-variant": "#34476a",
                        "surface-dim": "#d9dadb",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-secondary": "#ffffff",
                        "inverse-on-surface": "#f0f1f2",
                        "on-background": "#191c1d",
                        "surface-container-low": "#f3f4f5",
                        "primary-fixed": "#d7e2ff",
                        "tertiary-fixed-dim": "#ffb694",
                        "secondary": "#4c5e84",
                        "surface-container-highest": "#e1e3e4",
                        "surface-container-high": "#e7e8e9",
                        "inverse-surface": "#2e3132",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-container": "#983c00",
                        "outline-variant": "#c2c6d4",
                        "on-secondary-fixed": "#041b3c",
                        "surface-container": "#edeeef"
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
            vertical-align: middle;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen pb-24">
    <!-- TopAppBar -->
    <header class="fixed top-0 w-full z-50 glass-nav shadow-sm bg-white/80 dark:bg-slate-900/80 backdrop-blur-lg">
        <div class="flex items-center justify-between px-6 py-4 w-full">
            <div class="flex items-center gap-4">
                <button class="text-blue-800 dark:text-blue-400 scale-95 active:scale-90 transition-transform">
                    <span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
                </button>
                <h1 class="font-['Lexend'] font-bold tracking-tight text-blue-900 dark:text-white text-lg">Add Teacher Data</h1>
            </div>
            <div class="flex items-center gap-3">
                <span class="hidden md:block text-right">
                    <p class="text-xs font-bold text-blue-900">Admin User</p>
                    <p class="text-[10px] text-slate-500">Super Administrator</p>
                </span>
                <div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container overflow-hidden ring-2 ring-white">
                    <img alt="Admin User Profile" class="w-full h-full object-cover" data-alt="professional headshot of a school administrator in a clean office setting, soft natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrVyB22x28uYvk6G0qKdxf_m1wsLjFAs5iOL24E1viXSRIeTNSRpPHzcAaNtkL1xisuCwMvjueKU_gPO62QS1IT5TdMIDuo2vr90K0lzcfAoCe_70ZUuXC_zS-JNWzec59zJo269uyWHVj7DpS9RNUXEUCknAwO_4tQ2BrQBKertpytAX1nuHFUXUtvya8LhPJgwcbDSdnrQvyF9GnajDFE2osJzhy7th8a38zHSsIjRFo16aQkt4cuLJr09mGYoQBl6grltJMtVA" />
                </div>
            </div>
        </div>
    </header>
    <main class="pt-24 px-4 md:px-8 max-w-4xl mx-auto">
        <!-- Breadcrumb / Section Header -->
        <div class="mb-10 mt-4">
            <h2 class="font-headline text-3xl md:text-4xl text-primary font-extrabold tracking-tight mb-2">Tambah Data Guru</h2>
            <p class="text-on-surface-variant font-body">Input informasi kependidikan tenaga pengajar baru MTS Darul Hikam Binong.</p>
        </div>
        <!-- Form Card -->
        <div class="bg-surface-container-lowest rounded-xl shadow-[0_20px_40px_rgba(0,26,64,0.06)] overflow-hidden">
            <!-- Card Header -->
            <div class="px-8 py-6 bg-surface-container-low border-b border-outline-variant/10">
                <h3 class="font-headline text-xl text-primary font-bold">Formulir Guru Baru</h3>
            </div>
            <div class="p-8 space-y-8">
                <!-- Grid Layout for Inputs -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Full Name Field -->
                    <div class="space-y-2">
                        <label class="block font-label text-sm font-semibold text-on-surface-variant" for="full_name">Nama Lengkap</label>
                        <input class="w-full bg-transparent border-0 border-b-2 border-outline-variant focus:ring-0 focus:border-primary px-0 py-2 transition-all duration-300 placeholder:text-slate-300" id="full_name" placeholder="Contoh: Dr. Ahmad Hidayat, M.Pd" type="text" />
                        <p class="text-error text-xs font-medium mt-1 flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">error</span>
                            Nama Guru harus diisi
                        </p>
                    </div>
                    <!-- Position Field -->
                    <div class="space-y-2">
                        <label class="block font-label text-sm font-semibold text-on-surface-variant" for="position">Jabatan / Mata Pelajaran</label>
                        <input class="w-full bg-transparent border-0 border-b-2 border-outline-variant focus:ring-0 focus:border-primary px-0 py-2 transition-all duration-300 placeholder:text-slate-300" id="position" placeholder="Contoh: Guru Matematika" type="text" />
                    </div>
                </div>
                <!-- Photo Upload Area -->
                <div class="space-y-4">
                    <label class="block font-label text-sm font-semibold text-on-surface-variant">Pas Foto Guru</label>
                    <div class="group relative flex flex-col items-center justify-center w-full h-48 border-2 border-dashed border-outline-variant rounded-xl bg-surface-container hover:bg-surface-container-high transition-colors cursor-pointer overflow-hidden">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <span class="material-symbols-outlined text-4xl text-primary mb-3" data-icon="add_a_photo">add_a_photo</span>
                            <p class="mb-2 text-sm text-on-surface font-medium">Klik untuk unggah foto</p>
                            <p class="text-xs text-on-surface-variant">PNG, JPG atau JPEG (Maks. 2MB)</p>
                        </div>
                        <input class="absolute inset-0 opacity-0 cursor-pointer" type="file" />
                    </div>
                </div>
                <!-- Subtle Informational Alert -->
                <div class="bg-blue-50/50 rounded-lg p-4 flex gap-3 items-start">
                    <span class="material-symbols-outlined text-primary" data-icon="info">info</span>
                    <p class="text-xs text-on-secondary-container leading-relaxed">Pastikan data yang dimasukkan telah sesuai dengan dokumen resmi kependidikan (NUPTK/Sertifikasi) untuk sinkronisasi sistem akademik.</p>
                </div>
                <!-- Action Buttons -->
                <div class="flex flex-col md:flex-row gap-4 pt-4 border-t border-outline-variant/10">
                    <button class="flex-1 md:flex-none md:min-w-[160px] bg-gradient-to-r from-primary to-primary-container text-on-primary font-semibold py-4 rounded-xl hover:scale-[1.02] active:scale-95 transition-all shadow-lg shadow-primary/20">
                        Simpan
                    </button>
                    <button class="flex-1 md:flex-none md:min-w-[120px] bg-surface-container-high text-on-surface font-semibold py-4 rounded-xl hover:bg-surface-container-highest transition-colors">
                        Batal
                    </button>
                </div>
            </div>
        </div>
        <!-- Secondary Section: Preview or Stats (Bento style) -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="md:col-span-2 bg-primary-container/10 p-6 rounded-xl border border-primary/5">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center">
                        <span class="material-symbols-outlined text-white" data-icon="school">school</span>
                    </div>
                    <div>
                        <h4 class="font-headline text-lg text-primary font-bold">Status Kepegawaian</h4>
                        <p class="text-xs text-on-secondary-container">Total pengajar aktif saat ini</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="bg-white/60 p-4 rounded-lg flex-1">
                        <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500">Guru Tetap</p>
                        <p class="text-2xl font-headline font-bold text-primary">24</p>
                    </div>
                    <div class="bg-white/60 p-4 rounded-lg flex-1">
                        <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500">Guru Honorer</p>
                        <p class="text-2xl font-headline font-bold text-primary">12</p>
                    </div>
                </div>
            </div>
            <div class="bg-surface-container-highest p-6 rounded-xl flex flex-col justify-center items-center text-center">
                <div class="w-16 h-16 rounded-full bg-white mb-4 flex items-center justify-center shadow-sm">
                    <span class="material-symbols-outlined text-3xl text-primary" data-icon="verified">verified</span>
                </div>
                <p class="font-headline font-bold text-on-surface">Data Terverifikasi</p>
                <p class="text-xs text-on-surface-variant px-4">Semua data guru akan melewati proses audit internal.</p>
            </div>
        </div>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 py-3 pb-safe bg-white/90 dark:bg-slate-900/90 backdrop-blur-md shadow-[0_-4px_20px_rgba(0,0,0,0.05)] rounded-t-3xl">
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 hover:text-blue-600 dark:hover:text-blue-300 active:scale-95 duration-200" href="#">
            <span class="material-symbols-outlined" data-icon="home">home</span>
            <span class="font-['Inter'] text-[10px] font-semibold tracking-wide uppercase">Home</span>
        </a>
        <a class="flex flex-col items-center justify-center text-blue-700 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/40 rounded-2xl px-3 py-1 active:scale-95 duration-200" href="#">
            <span class="material-symbols-outlined" data-icon="badge">badge</span>
            <span class="font-['Inter'] text-[10px] font-semibold tracking-wide uppercase">Staff</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 hover:text-blue-600 dark:hover:text-blue-300 active:scale-95 duration-200" href="#">
            <span class="material-symbols-outlined" data-icon="analytics">analytics</span>
            <span class="font-['Inter'] text-[10px] font-semibold tracking-wide uppercase">Records</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 hover:text-blue-600 dark:hover:text-blue-300 active:scale-95 duration-200" href="#">
            <span class="material-symbols-outlined" data-icon="settings">settings</span>
            <span class="font-['Inter'] text-[10px] font-semibold tracking-wide uppercase">Settings</span>
        </a>
    </nav>
</body>

</html>