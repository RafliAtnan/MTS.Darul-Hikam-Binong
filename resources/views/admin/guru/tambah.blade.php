<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tambah Data Guru - MTS Darul Hikam Binong</title>
    <!-- SweetAlert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('
            success ') }}',
            confirmButtonColor: '#3085d6'
        });
    </script>
    @endif
    <!-- TopAppBar -->
    <header class="fixed top-0 w-full z-50 glass-nav shadow-sm bg-white/80 dark:bg-slate-900/80 backdrop-blur-lg">
        <div class="flex items-center justify-between px-6 py-4 w-full">
            <div class="flex items-center gap-4">
                <button class="text-blue-800 dark:text-blue-400 scale-95 active:scale-90 transition-transform"><a href="/admin/guru">
                        <span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span></a>
                </button>
                <h1 class="font-['Lexend'] font-bold tracking-tight text-blue-900 dark:text-white text-lg">Tambah Guru</h1>
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

                <form action="/admin/guru/tambah" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- KIRI -->
                        <div class="space-y-4">

                            <!-- Nama -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold">Nama Lengkap</label>
                                <input
                                    type="text"
                                    name="nama"
                                    class="w-full border-b-2 focus:border-primary outline-none py-2 "
                                    placeholder="Contoh: Dr. Ahmad Hidayat, M.Pd"
                                    required>
                            </div>

                            <!-- Mapel -->
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold">Mata Pelajaran</label>
                                <input
                                    type="text"
                                    name="mapel"
                                    class="w-full border-b-2 focus:border-primary outline-none py-2"
                                    placeholder="Contoh: Guru Matematika"
                                    required>
                            </div>

                        </div>

                        <!-- KANAN (UPLOAD FOTO) -->
                        <div class="space-y-4">
                            <label class="block text-sm font-semibold">Pas Foto Guru</label>

                            <div class="relative w-56 h-56 mx-auto border-2 border-dashed rounded-xl overflow-hidden bg-gray-100">
                                <!-- PREVIEW -->
                                <img id="preview" class="hidden w-full h-full object-cover">
                                <!-- PLACEHOLDER -->
                                <div id="placeholder" class="flex flex-col items-center justify-center h-full text-center">
                                    <span class="material-symbols-outlined text-3xl text-primary">add_a_photo</span>
                                    <p class="text-xs">Upload Foto</p>
                                </div>

                                <!-- INPUT -->
                                <input
                                    type="file"
                                    id="foto"
                                    name="foto"
                                    class="absolute inset-0 opacity-0 cursor-pointer">
                            </div>
                        </div>

                    </div>

                    <!-- BUTTON -->
                    <div class="mt-6">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
                            Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script>
        document.getElementById('foto').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('preview');
            const placeholder = document.getElementById('placeholder');

            if (!file) return;

            // ✅ VALIDASI FILE
            const validTypes = ['image/jpeg', 'image/png', 'image/jpg'];
            if (!validTypes.includes(file.type)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Format Salah!',
                    text: 'Hanya boleh JPG, PNG, JPEG'
                });
                e.target.value = '';
                return;
            }

            if (file.size > 2 * 1024 * 1024) {
                Swal.fire({
                    icon: 'error',
                    title: 'Terlalu Besar!',
                    text: 'Maksimal ukuran 2MB'
                });
                e.target.value = '';
                return;
            }

            // ✅ AUTO PREVIEW + FIT
            const reader = new FileReader();
            reader.onload = function(event) {
                preview.src = event.target.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            };

            reader.readAsDataURL(file);
        });
    </script>
</body>

</html>