<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Edit Data Guru - MTS Darul Hikam Binong</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary-fixed": "#041b3c",
                        "on-tertiary-fixed": "#351000",
                        "on-tertiary-container": "#ffc2a7",
                        "on-surface": "#191c1d",
                        "tertiary-container": "#983c00",
                        "outline": "#727784",
                        "primary-fixed-dim": "#acc7ff",
                        "inverse-on-surface": "#f0f1f2",
                        "surface-dim": "#d9dadb",
                        "secondary": "#4c5e84",
                        "on-error-container": "#93000a",
                        "surface": "#f8f9fa",
                        "on-primary-fixed": "#001a40",
                        "error": "#ba1a1a",
                        "secondary-fixed": "#d7e2ff",
                        "on-tertiary-fixed-variant": "#7b2f00",
                        "on-background": "#191c1d",
                        "inverse-surface": "#2e3132",
                        "tertiary-fixed-dim": "#ffb694",
                        "surface-container-highest": "#e1e3e4",
                        "secondary-fixed-dim": "#b3c7f1",
                        "surface-container-high": "#e7e8e9",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#bfd2fd",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed": "#ffdbcc",
                        "surface-bright": "#f8f9fa",
                        "surface-container-low": "#f3f4f5",
                        "on-primary-container": "#bbd0ff",
                        "on-secondary-container": "#475a7f",
                        "on-error": "#ffffff",
                        "on-secondary": "#ffffff",
                        "background": "#f8f9fa",
                        "primary": "#003f87",
                        "tertiary": "#722b00",
                        "on-primary": "#ffffff",
                        "surface-container": "#edeeef",
                        "inverse-primary": "#acc7ff",
                        "primary-fixed": "#d7e2ff",
                        "primary-container": "#0056b3",
                        "surface-tint": "#115cb9",
                        "outline-variant": "#c2c6d4",
                        "on-secondary-fixed-variant": "#34476a",
                        "error-container": "#ffdad6",
                        "on-primary-fixed-variant": "#004491",
                        "surface-variant": "#e1e3e4",
                        "on-surface-variant": "#424752"
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

        .editorial-shadow {
            box-shadow: 0 20px 40px rgba(0, 26, 64, 0.06);
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-surface font-body selection:bg-primary-container selection:text-white">
    <!-- TopAppBar -->
    <header class="fixed top-0 w-full z-50 bg-[#f8f9fa]/80 backdrop-blur-xl">
        <div class="flex items-center px-4 h-16 w-full max-w-7xl mx-auto justify-between">
            <div class="flex items-center gap-4">
                <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-[#edeeef] transition-colors active:scale-95 duration-200 text-[#44474e]">
                    <span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
                </button>
                <h1 class="font-['Lexend'] font-bold tracking-tight text-xl text-[#003f87]">Edit Data Guru</h1>
            </div>
            <div class="hidden md:flex items-center gap-6">
                <nav class="flex items-center gap-1">
                    <a class="px-4 py-2 text-[#44474e] font-medium hover:bg-[#edeeef] rounded-lg transition-colors" href="#">Home</a>
                    <a class="px-4 py-2 text-[#003f87] font-bold bg-[#003f87]/10 rounded-lg transition-colors" href="#">Staff</a>
                    <a class="px-4 py-2 text-[#44474e] font-medium hover:bg-[#edeeef] rounded-lg transition-colors" href="#">Records</a>
                    <a class="px-4 py-2 text-[#44474e] font-medium hover:bg-[#edeeef] rounded-lg transition-colors" href="#">Settings</a>
                </nav>
            </div>
        </div>
    </header>
    <main class="pt-24 pb-32 px-4 max-w-4xl mx-auto">
        <!-- Editorial Header Section -->
        <section class="mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-secondary-container text-on-secondary-container text-xs font-bold uppercase tracking-widest mb-4">Admin Dashboard</span>
            <h2 class="font-headline text-4xl font-extrabold text-on-surface tracking-tight leading-tight">Perbarui Profil Tenaga Pendidik</h2>
            <p class="mt-4 text-on-surface-variant text-lg max-w-2xl leading-relaxed">Kelola informasi guru dengan presisi. Pastikan data jabatan dan kualifikasi tetap mutakhir untuk profil publik sekolah.</p>
        </section>
        <!-- Form Card -->
        <div class="bg-surface-container-lowest rounded-xl editorial-shadow overflow-hidden">
            <form class="p-8 md:p-12 space-y-12">
                <!-- Profile Identity Section (Asymmetric Layout) -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-start">
                    <div class="md:col-span-4 flex flex-col items-center">
                        <div class="relative group">
                            <div class="w-48 h-48 rounded-xl overflow-hidden bg-surface-container-high editorial-shadow border-4 border-white">
                                <img alt="Profile Picture" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Professional portrait of a mature male teacher in a formal batik shirt with a friendly expression in a bright office environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOII5AMO9_ouJLY8HR8LGDOiKqg2PRS0ypajwZ4rYFm4k85qowEA_0oxX-hLwkeVqAxG3iFqQ4bTMDdUUMehKN9Ocx9QRumfRN-Qj3NQnATqBRvn0cOOpXLTOANCqgqJ8RG5j-5TFg-Gx0fCeMPOLVHD7LwitG3XE0k1twl_W0mo1T5mhaCADnsv3EumgNr1spdKxjpr6vEFtMxKT6dGCbcwAezj530hZV4jrireOdGeuU5fqW90y5UCUhreWVqKGpVCpvuro60Kk" />
                            </div>
                            <div class="absolute -bottom-3 -right-3 w-12 h-12 bg-primary-container text-white rounded-full flex items-center justify-center shadow-lg cursor-pointer hover:scale-110 transition-transform active:scale-95">
                                <span class="material-symbols-outlined text-2xl" data-icon="photo_camera">photo_camera</span>
                            </div>
                        </div>
                        <div class="mt-6 text-center">
                            <p class="text-sm font-semibold text-primary">ID Pegawai: DH-2024-001</p>
                            <p class="text-xs text-on-surface-variant mt-1 italic">Terakhir diperbarui: 12 Jan 2024</p>
                        </div>
                    </div>
                    <div class="md:col-span-8 space-y-8">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Name Field -->
                            <div class="space-y-2">
                                <label class="block text-sm font-bold text-on-surface tracking-wide uppercase" for="teacher_name">Nama Lengkap &amp; Gelar</label>
                                <input class="w-full bg-transparent border-0 border-b-2 border-outline-variant focus:border-primary focus:ring-0 px-0 py-3 text-xl font-medium text-on-surface transition-all placeholder:text-outline-variant" id="teacher_name" placeholder="Masukkan nama lengkap..." type="text" value="Drs. Ahmad Subarjo" />
                            </div>
                            <!-- Position Field -->
                            <div class="space-y-2">
                                <label class="block text-sm font-bold text-on-surface tracking-wide uppercase" for="position">Jabatan / Mata Pelajaran</label>
                                <input class="w-full bg-transparent border-0 border-b-2 border-outline-variant focus:border-primary focus:ring-0 px-0 py-3 text-xl font-medium text-on-surface transition-all placeholder:text-outline-variant" id="position" placeholder="Contoh: Guru Bahasa Inggris" type="text" value="Guru Matematika" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Separation logic without borders -->
                <div class="h-px bg-surface-container w-full"></div>
                <!-- Additional Details Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-on-surface tracking-wide uppercase" for="email">Alamat Email Kerja</label>
                        <div class="flex items-center gap-3 border-b-2 border-outline-variant focus-within:border-primary transition-all">
                            <span class="material-symbols-outlined text-on-surface-variant" data-icon="mail">mail</span>
                            <input class="w-full bg-transparent border-0 focus:ring-0 py-3 font-body text-on-surface" id="email" placeholder="nama@email.com" type="email" value="ahmad.subarjo@darulhikam.sch.id" />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-on-surface tracking-wide uppercase" for="status">Status Kepegawaian</label>
                        <div class="relative">
                            <select class="w-full bg-transparent border-0 border-b-2 border-outline-variant focus:border-primary focus:ring-0 px-0 py-3 font-body text-on-surface appearance-none" id="status">
                                <option selected="" value="tetap">Guru Tetap Yayasan</option>
                                <option value="honorer">Guru Honorer</option>
                                <option value="kontrak">Tenaga Kontrak</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-0 top-1/2 -translate-y-1/2 pointer-events-none" data-icon="expand_more">expand_more</span>
                        </div>
                    </div>
                </div>
                <!-- Biography Area -->
                <div class="space-y-4">
                    <label class="block text-sm font-bold text-on-surface tracking-wide uppercase" for="bio">Biografi Singkat (Publik)</label>
                    <textarea class="w-full bg-surface-container-low border-0 rounded-xl focus:ring-2 focus:ring-primary/20 focus:bg-white transition-all p-4 text-on-surface leading-relaxed" id="bio" placeholder="Tuliskan latar belakang pendidikan dan pengalaman mengajar..." rows="4">Beliau telah mengabdi di MTS Darul Hikam selama lebih dari 15 tahun. Spesialisasi dalam olimpiade matematika tingkat kabupaten.</textarea>
                </div>
                <!-- Photo Upload Section -->
                <div class="bg-surface-container-low rounded-xl p-6 flex items-center gap-6 border-2 border-dashed border-outline-variant">
                    <div class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined" data-icon="cloud_upload">cloud_upload</span>
                    </div>
                    <div class="flex-grow">
                        <h4 class="font-bold text-on-surface">Upload Foto Baru (Opsional)</h4>
                        <p class="text-sm text-on-surface-variant">Format: JPG, PNG. Maksimal 2MB.</p>
                    </div>
                    <input class="hidden" id="photo_upload" type="file" />
                    <button class="px-6 py-2 bg-white text-on-surface font-semibold rounded-lg shadow-sm hover:bg-surface-container-highest transition-colors active:scale-95" onclick="document.getElementById('photo_upload').click()" type="button">Pilih File</button>
                </div>
                <!-- CTA Actions -->
                <div class="pt-8 flex flex-col-reverse md:flex-row items-center justify-end gap-4">
                    <button class="w-full md:w-auto px-8 py-4 text-on-surface-variant font-bold rounded-xl hover:bg-surface-container-high transition-colors active:scale-95 duration-200" type="button">
                        Batal
                    </button>
                    <button class="w-full md:w-auto px-10 py-4 bg-gradient-to-tr from-primary to-primary-container text-white font-bold rounded-xl shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all duration-200 flex items-center justify-center gap-2" type="submit">
                        <span class="material-symbols-outlined text-xl" data-icon="save">save</span>
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
        <!-- Danger Zone (Contextual Card) -->
        <div class="mt-12 bg-error-container/10 rounded-xl p-8 border border-error/10 flex flex-col md:flex-row items-center justify-between gap-6">
            <div>
                <h4 class="font-headline font-bold text-error">Nonaktifkan Guru</h4>
                <p class="text-sm text-on-surface-variant">Gunakan ini jika guru tersebut sudah tidak aktif mengajar di lingkungan MTS Darul Hikam.</p>
            </div>
            <button class="px-6 py-3 border-2 border-error/20 text-error font-bold rounded-xl hover:bg-error/5 transition-colors" type="button">
                Hapus Data
            </button>
        </div>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-2 py-3 pb-safe bg-[#f8f9fa]/80 backdrop-blur-xl border-t border-[#c2c6d4]/15 shadow-[0_-4px_20px_rgba(0,26,64,0.06)] z-50 rounded-t-2xl">
        <a class="flex flex-col items-center justify-center text-[#44474e] opacity-70 hover:bg-[#003f87]/5 transition-all active:scale-90 duration-200" href="#">
            <span class="material-symbols-outlined" data-icon="home">home</span>
            <span class="font-['Inter'] text-[12px] font-medium tracking-wide">Home</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#003f87] bg-[#003f87]/10 rounded-xl px-4 py-1 active:scale-90 duration-200" href="#">
            <span class="material-symbols-outlined" data-icon="groups">groups</span>
            <span class="font-['Inter'] text-[12px] font-medium tracking-wide">Staff</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#44474e] opacity-70 hover:bg-[#003f87]/5 transition-all active:scale-90 duration-200" href="#">
            <span class="material-symbols-outlined" data-icon="description">description</span>
            <span class="font-['Inter'] text-[12px] font-medium tracking-wide">Records</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#44474e] opacity-70 hover:bg-[#003f87]/5 transition-all active:scale-90 duration-200" href="#">
            <span class="material-symbols-outlined" data-icon="settings">settings</span>
            <span class="font-['Inter'] text-[12px] font-medium tracking-wide">Settings</span>
        </a>
    </nav>
</body>

</html>