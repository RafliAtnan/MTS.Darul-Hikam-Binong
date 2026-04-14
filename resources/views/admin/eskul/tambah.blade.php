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
                <button class="active:scale-95 duration-200 hover:opacity-80 transition-opacity"><a href="/admin/eskul">
                        <span class="material-symbols-outlined text-blue-800 dark:text-blue-400">arrow_back</span></a>
                </button>
                <h1 class="font-lexend font-bold tracking-tight text-lg text-blue-800 dark:text-blue-400">Tambah Ekstrakurikuler</h1>
            </div>
    </header>
    <main class="max-w-3xl mx-auto px-6 pt-12 pb-32">
        <div class="mb-10 text-center">
            <h2 class="text-3xl font-lexend font-extrabold tracking-tight text-on-primary-fixed mb-3">Tambah Ekstrakurikuler</h2>
            <p class="text-secondary font-body">Lengkapi detail kegiatan untuk menambahkan program baru ke sistem akademik.</p>
        </div>
        <!-- Form Card -->
        <div class="bg-surface-container-lowest rounded-xl shadow-[0_20px_40px_rgba(0,26,64,0.06)] p-8 md:p-12 overflow-hidden relative">

            <!-- Decorative -->
            <!-- <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-full -mr-16 -mt-16"></div> -->

            <form action="/admin/eskul/tambah" method="POST" enctype="multipart/form-data" class="space-y-8 relative z-10">
                @csrf

                <!-- Nama -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold">Nama Ekstrakurikuler</label>
                    <input name="nama"
                        class="w-full border-b-2 focus:border-primary px-0 py-3 text-lg"
                        placeholder="Contoh: Robotik Darul Hikam" type="text" required />
                </div>

                <!-- Deskripsi -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold">Deskripsi</label>
                    <textarea name="deskripsi"
                        class="w-full border p-3 rounded-lg"
                        placeholder="Deskripsi kegiatan..."
                        rows="4">Deskripsi Kegiatan</textarea>
                </div>

                <!-- UPLOAD -->
                <div id="uploadBox"
                    class="relative w-full border-2 border-dashed rounded-xl overflow-hidden flex items-center justify-center bg-gray-100 p-4">

                    <!-- INPUT -->
                    <input id="foto" name="foto"
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20"
                        type="file" accept="image/*" />

                    <!-- TEXT -->
                    <div id="uploadText" class="text-center z-10">
                        <p class="font-semibold">Klik atau upload gambar</p>
                        <p class="text-xs text-gray-400">PNG / JPG</p>
                    </div>

                    <!-- PREVIEW -->
                    <img id="previewFoto"
                        class="hidden max-w-full h-auto object-contain z-10" />
                </div>

                <!-- BUTTON -->
                <div class="flex gap-4 pt-6">
                    <button type="submit" class="flex-1 bg-blue-500 text-white py-3 rounded-xl">
                        Tambah
                    </button>
                    <a href="/admin/eskul" class="flex-1 text-center bg-gray-300 py-3 rounded-xl">
                        Batal
                    </a>
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
        </div>
    </main>
    <script>
        document.getElementById('foto').addEventListener('change', function() {
            let file = this.files[0];

            if (file) {
                let reader = new FileReader();

                reader.onload = function(e) {

                    let preview = document.getElementById('previewFoto');
                    let text = document.getElementById('uploadText');
                    let box = document.getElementById('uploadBox');

                    preview.src = e.target.result;

                    preview.onload = function() {
                        // 🔥 ambil rasio asli gambar
                        let ratio = preview.naturalHeight / preview.naturalWidth;

                        // set tinggi box sesuai rasio
                        box.style.height = (box.offsetWidth * ratio) + 'px';
                    };

                    preview.classList.remove('hidden');
                    text.classList.add('hidden');
                }

                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>