<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Edit Ekstrakurikuler - MTS Darul Hikam Binong</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface": "#f8f9fa",
                        "tertiary-fixed": "#ffdbcc",
                        "surface-bright": "#f8f9fa",
                        "on-surface": "#191c1d",
                        "surface-container-highest": "#e1e3e4",
                        "on-secondary-fixed": "#041b3c",
                        "inverse-primary": "#acc7ff",
                        "surface-dim": "#d9dadb",
                        "surface-variant": "#e1e3e4",
                        "on-primary-container": "#bbd0ff",
                        "secondary-fixed-dim": "#b3c7f1",
                        "secondary-container": "#bfd2fd",
                        "error": "#ba1a1a",
                        "primary-container": "#0056b3",
                        "tertiary-fixed-dim": "#ffb694",
                        "primary-fixed": "#d7e2ff",
                        "primary": "#003f87",
                        "outline-variant": "#c2c6d4",
                        "on-background": "#191c1d",
                        "secondary-fixed": "#d7e2ff",
                        "on-primary": "#ffffff",
                        "inverse-on-surface": "#f0f1f2",
                        "surface-container": "#edeeef",
                        "on-tertiary": "#ffffff",
                        "tertiary-container": "#983c00",
                        "error-container": "#ffdad6",
                        "on-surface-variant": "#424752",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-fixed-variant": "#34476a",
                        "on-error-container": "#93000a",
                        "surface-tint": "#115cb9",
                        "surface-container-low": "#f3f4f5",
                        "background": "#f8f9fa",
                        "secondary": "#4c5e84",
                        "tertiary": "#722b00",
                        "on-tertiary-fixed-variant": "#7b2f00",
                        "surface-container-high": "#e7e8e9",
                        "primary-fixed-dim": "#acc7ff",
                        "on-secondary": "#ffffff",
                        "outline": "#727784",
                        "inverse-surface": "#2e3132",
                        "on-primary-fixed": "#001a40",
                        "on-secondary-container": "#475a7f",
                        "on-primary-fixed-variant": "#004491",
                        "on-tertiary-fixed": "#351000",
                        "on-tertiary-container": "#ffc2a7",
                        "on-error": "#ffffff"
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
            background-color: #f8f9fa;
            color: #191c1d;
            font-family: 'Inter', sans-serif;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased pb-24 md:pb-0">
    <!-- TopAppBar -->
    <header class="fixed top-0 w-full z-50 bg-slate-50/80 dark:bg-slate-900/80 backdrop-blur-md shadow-[0_4px_30px_rgba(0,26,64,0.03)]">
        <div class="flex items-center justify-between px-6 h-16 w-full max-w-7xl mx-auto">
            <div class="flex items-center gap-4">
                <button class="active:scale-95 transition-transform duration-200 text-blue-900">
                    <span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
                </button>
                <h1 class="font-['Lexend'] font-bold tracking-tight text-lg text-blue-900">Admin Panel</h1>
            </div>
            <div class="hidden md:flex items-center space-gap-8">
                <nav class="flex gap-6">
                    <a class="text-slate-500 dark:text-slate-400 font-medium hover:text-blue-900 transition-colors" href="#">Dashboard</a>
                    <a class="text-blue-900 dark:text-blue-400 font-bold" href="#">Activities</a>
                    <a class="text-slate-500 dark:text-slate-400 font-medium hover:text-blue-900 transition-colors" href="#">Students</a>
                    <a class="text-slate-500 dark:text-slate-400 font-medium hover:text-blue-900 transition-colors" href="#">Settings</a>
                </nav>
            </div>
            <div class="flex items-center">
                <div class="w-8 h-8 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold text-xs">AD</div>
            </div>
        </div>
    </header>
    <main class="pt-24 px-4 md:px-8 max-w-4xl mx-auto">
        <!-- Breadcrumb & Header -->
        <div class="mb-10">
            <div class="flex items-center gap-2 text-on-surface-variant text-sm mb-2">
                <span class="font-medium">Dashboard</span>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="font-medium">Activities</span>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-primary font-semibold">Edit Ekstrakurikuler</span>
            </div>
            <h2 class="font-headline text-3xl font-bold tracking-tight text-on-surface">Edit Ekstrakurikuler</h2>
            <p class="text-on-surface-variant mt-2">Perbarui informasi detail untuk program ekstrakurikuler sekolah.</p>
        </div>
        <!-- Form Card -->
        <section class="bg-surface-container-lowest rounded-xl shadow-[0_20px_40px_rgba(0,26,64,0.06)] p-6 md:p-10 mb-12">
            <form action="#" class="space-y-8">
                <!-- Activity Image Section -->
                <div class="flex flex-col md:flex-row gap-8 items-start md:items-center">
                    <div class="relative group">
                        <div class="w-32 h-32 md:w-40 md:h-40 rounded-xl overflow-hidden bg-surface-container-high border-2 border-outline-variant/15">
                            <img alt="Pramuka Logo" class="w-full h-full object-cover" data-alt="graphic emblem featuring a stylized tiger head in bold lines, representative of scouting or adventure theme, modern flat design" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDW_e-k1MU0ENck0VK6PKBTpjU40OP_C7Xiki9OXlPCz-O6XPMbHNj5_fkivMkSDOWL9-l7uvzsRKGTB9k8JvAPQo1DRVg-f3Gr7mOtfjlWCuQodMMf2KT89AQb3SmaXnNGlidny6cyyrTTs0M1zvqIupZK6HJKLjeOF-Fi7a_XTRCVM9vdBvHq9xnSUrg44dDq3vkVZK2GWcExgE_TCyyz_HAamAK5bGS2kxTwj1lI7EcVvByNy7RLzPl8mmA0hAotPDlb0P55Gvg" />
                        </div>
                        <button class="absolute inset-0 bg-primary/40 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col items-center justify-center text-white rounded-xl" type="button">
                            <span class="material-symbols-outlined mb-1">photo_camera</span>
                            <span class="text-xs font-bold uppercase tracking-wider">Ubah Foto</span>
                        </button>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-headline text-lg font-semibold text-on-surface mb-1">Foto Ikon Ekstrakurikuler</h3>
                        <p class="text-sm text-on-surface-variant mb-4">Gunakan gambar dengan format .png atau .jpg dengan resolusi minimal 512x512 px.</p>
                        <button class="px-5 py-2.5 bg-surface-container-high text-on-surface font-semibold rounded-xl hover:bg-surface-container-highest transition-colors flex items-center gap-2 text-sm" type="button">
                            <span class="material-symbols-outlined text-lg">upload</span>
                            Ganti Gambar Baru
                        </button>
                    </div>
                </div>
                <hr class="border-outline-variant/20" />
                <!-- Input Fields -->
                <div class="grid grid-cols-1 gap-8">
                    <!-- Activity Name -->
                    <div class="space-y-2">
                        <label class="block font-headline font-semibold text-on-surface" for="activity_name">Nama Ekstrakurikuler</label>
                        <input class="w-full bg-transparent border-0 border-b-2 border-outline-variant focus:ring-0 focus:border-primary px-0 py-3 text-lg font-medium transition-all" id="activity_name" name="activity_name" placeholder="Masukkan nama kegiatan..." type="text" value="Pramuka" />
                        <p class="text-[11px] font-medium text-error flex items-center gap-1 opacity-0 group-focus-within:opacity-100">
                            <span class="material-symbols-outlined text-xs">error</span> Field ini wajib diisi
                        </p>
                    </div>
                    <div class="space-y-2">
                        <label class="block font-headline font-semibold text-on-surface" for="category">Kategori</label>
                        <select class="w-full bg-transparent border-0 border-b-2 border-outline-variant focus:ring-0 focus:border-primary px-0 py-3 text-lg font-medium transition-all appearance-none" id="category" name="category">
                            <option value="">Pilih Kategori</option>
                            <option value="wajib">Wajib</option>
                            <option value="pilihan">Pilihan</option>
                            <option value="seni">Seni</option>
                            <option value="olahraga">Olahraga</option>
                            <option value="akademik">Akademik</option>
                        </select>
                    </div>
                    <!-- Description -->
                    <div class="space-y-2">
                        <label class="block font-headline font-semibold text-on-surface" for="description">Deskripsi Kegiatan</label>
                        <textarea class="w-full bg-transparent border-0 border-b-2 border-outline-variant focus:ring-0 focus:border-primary px-0 py-3 text-base leading-relaxed transition-all resize-none" id="description" name="description" placeholder="Jelaskan detail kegiatan..." rows="4">Melatih kedisiplinan dan kemandirian siswa melalui kegiatan kepanduan yang seru dan menantang.</textarea>
                    </div>
                </div>
                <!-- Form Actions -->
                <div class="flex flex-col md:flex-row items-center gap-4 pt-6">
                    <button class="w-full md:w-auto px-10 py-4 bg-gradient-to-br from-primary to-primary-container text-white font-bold rounded-xl shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all duration-300" type="submit">
                        Simpan Perubahan
                    </button>
                    <button class="w-full md:w-auto px-10 py-4 bg-surface-container-high text-on-surface font-bold rounded-xl hover:bg-surface-container-highest transition-colors active:scale-95" type="button">
                        Batal
                    </button>
                </div>
            </form>
        </section>
        <!-- Danger Zone (Extra Polish for Admin Panel) -->
        <div class="bg-error-container/10 border border-error/10 rounded-xl p-6 mb-16 flex flex-col md:flex-row items-center justify-between gap-6">
            <div>
                <h4 class="font-headline font-bold text-error">Hapus Ekstrakurikuler</h4>
                <p class="text-sm text-on-error-container/80">Tindakan ini permanen dan akan menghapus semua data terkait kegiatan ini.</p>
            </div>
            <button class="px-6 py-3 border-2 border-error/20 text-error font-bold rounded-xl hover:bg-error hover:text-white transition-all">
                Hapus Data
            </button>
        </div>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav class="md:hidden fixed bottom-0 left-0 w-full bg-white/90 dark:bg-slate-950/90 backdrop-blur-2xl border-t border-slate-100 dark:border-slate-800 shadow-[0_-10px_40px_rgba(0,26,64,0.06)] flex justify-around items-center px-4 pt-3 pb-8 z-50">
        <a class="flex flex-col items-center justify-center text-slate-400 px-5 py-1.5 active:scale-90 transition-all duration-300" href="#">
            <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
            <span class="font-['Inter'] text-[11px] font-medium mt-1">Dashboard</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-blue-50 dark:bg-blue-900/30 text-blue-900 dark:text-blue-300 rounded-2xl px-5 py-1.5 active:scale-90 transition-all duration-300" href="#">
            <span class="material-symbols-outlined" data-icon="event_note">event_note</span>
            <span class="font-['Inter'] text-[11px] font-medium mt-1">Activities</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 px-5 py-1.5 active:scale-90 transition-all duration-300" href="#">
            <span class="material-symbols-outlined" data-icon="group">group</span>
            <span class="font-['Inter'] text-[11px] font-medium mt-1">Students</span>
        </a>
        <a class="flex flex-col items-center justify-center text-slate-400 px-5 py-1.5 active:scale-90 transition-all duration-300" href="#">
            <span class="material-symbols-outlined" data-icon="settings">settings</span>
            <span class="font-['Inter'] text-[11px] font-medium mt-1">Settings</span>
        </a>
    </nav>
</body>

</html>