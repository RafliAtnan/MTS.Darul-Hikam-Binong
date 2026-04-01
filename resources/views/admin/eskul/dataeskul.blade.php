<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Kelola Ekstrakurikuler - MTS Darul Hikam Binong</title>
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
                        "background-light": "#f7f5f8",
                        "background-dark": "#190f23",
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

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex flex-col">
    <!-- Header Section -->
    <header class="flex items-center p-4 border-b border-slate-100 dark:border-slate-800 sticky top-0 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md z-10">
        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 cursor-pointer">
            <span class="material-symbols-outlined text-slate-600 dark:text-slate-400">arrow_back</span>
        </div>
        <div class="ml-4 flex-1">
            <h1 class="text-xl font-bold tracking-tight text-primary">Kelola Ekstrakurikuler</h1>
            <p class="text-xs text-slate-500 dark:text-slate-400 font-medium uppercase tracking-wider">MTS Darul Hikam Binong</p>
        </div>
        <div class="flex gap-2">
            <div class="size-10 rounded-full bg-primary/10 border-2 border-primary/20 overflow-hidden">
                <img alt="Admin Avatar" data-alt="User profile avatar icon representing an administrator" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9GyS9eECA-EBPdGm6Ohou5KyuCzlUvheH82cBMod04cEU7DnnIX_4KnGQRhtQeOFpYwvWoFzwZ90RanbBC_XPjFKh7OEhzHZ4e82YN78emv6UBtHFuourZ-vt-A2XS4nQma57ekcaBkDG3j68HoOExHd5cDU64MI1kuhd-14WHrxc7Fh3oUrvVKLt3tcUxfcrTw0ZBD49DErMPugut6o_t-lWTGWgqnY_pa35NOEji760sX3z744z9wRv7rQuoCdq507Avw-9uNo" />
            </div>
        </div>
    </header>
    <main class="flex-1 max-w-7xl mx-auto w-full p-4 md:p-6 space-y-6">
        <!-- Action Header -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="flex flex-col md:flex-row gap-4">
                <div><button class="bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-xl font-semibold flex items-center justify-center gap-2 transition-all shadow-lg shadow-primary/20">
                        <span class="material-symbols-outlined">add_circle</span>
                        Tambah Ekstrakurikuler
                    </button>
                    <p class="text-slate-500 dark:text-slate-400">Tambah, ubah, atau hapus daftar kegiatan siswa</p>
                </div>
            </div>
        <!-- Quick Stats -->
        <div class="grid grid-cols-2 gap-4 md:col-span-2">
            <div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-primary/10 text-center">
                <p class="text-sm text-slate-500">Total Ekskul</p>
                <p class="text-2xl font-bold text-primary">12</p>
            </div>
            <div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-primary/10 text-center">
                <p class="text-sm text-slate-500">Total Pembina</p>
                <p class="text-2xl font-bold text-slate-900 dark:text-white">10</p>
            </div>
        </div>

    </div>
        <!-- Filters and Table Card -->
        <div class="bg-white dark:bg-slate-900 rounded-2xl border border-primary/10 overflow-hidden shadow-sm">
            <!-- Filters & Search -->
            <div class="p-4 border-b border-primary/5 space-y-4">
                <div class="flex flex-col md:flex-row gap-3">
                    <div class="relative flex-1">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                        <input class="w-full pl-10 pr-4 py-2.5 rounded-lg bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="Cari nama ekstrakurikuler..." type="text" />
                    </div>
                    <div class="flex gap-2 overflow-x-auto pb-1 md:pb-0">
                        <button class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-medium whitespace-nowrap">Semua</button>
                        <button class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 px-4 py-2 rounded-lg text-sm font-medium whitespace-nowrap hover:bg-slate-200 transition-colors">Olahraga</button>
                        <button class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 px-4 py-2 rounded-lg text-sm font-medium whitespace-nowrap hover:bg-slate-200 transition-colors">Seni</button>
                        <button class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 px-4 py-2 rounded-lg text-sm font-medium whitespace-nowrap hover:bg-slate-200 transition-colors">Keagamaan</button>
                    </div>
                </div>
            </div>
            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 dark:bg-slate-800/50">
                        <tr>
                            <th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300 uppercase tracking-wider">Foto</th>
                            <th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300 uppercase tracking-wider">Nama Ekstrakurikuler</th>
                            <th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300 uppercase tracking-wider">Kategori</th>
                            <th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300 uppercase tracking-wider text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <div class="w-16 h-10 rounded-lg overflow-hidden bg-slate-200 dark:bg-slate-700 border border-slate-100 dark:border-slate-800">
                                    <img alt="Basket" class="w-full h-full object-cover" data-alt="Basketball team practice in action" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGSupYV27le-dC5QSsGgiIk_DsfrHr2oHkRuPxuZlUshRClXJrfDU6gM4V6hIs3wnRkbpoNzbT_-0ngq9zH67Q1oY1qMHbj0vMX13ByE6s3zLSTgQ8UV9sjPFo0i06a1FpoglNfQnoMIdx2pd4kEt6D6lzm2juOHDV-_45wy3533EyHtpJSwc45JUOutXVlNNpWvMYk-pQzrVRTd-JjBuWNCONGiJoeT2Bu0LoKYFXHNMec1lSuJ99n8CdHh_dl9qiv2Yh3UrncjA" />
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-slate-900 dark:text-white">Basket Putra</div>
                                <div class="text-xs text-slate-500">Pembina: Bp. Ahmad</div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300">Olahraga</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 text-slate-500 hover:text-primary hover:bg-primary/10 rounded-lg transition-all" title="Edit">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button class="p-2 text-slate-500 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all" title="Hapus">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <div class="w-16 h-10 rounded-lg overflow-hidden bg-slate-200 dark:bg-slate-700 border border-slate-100 dark:border-slate-800">
                                    <img alt="Pramuka" class="w-full h-full object-cover" data-alt="Scout activities banner with badges" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4AOuT5Bt3kOiJcVfIjLJr0qqzUQoveAB3q2EBf54OFvXCDLySyHcqV3RysS1YfrTofHGMNo2FRDSQwastj6Tn125DidPMjxeorNQK8dE4ry9yfNh70hTfhJlVMVwfl13pcZ8XwhgVH7DkRLo7_b0cqFcFP4oGHe4NNkhYFdS4iYVsx0YQ0uvA2yylevOr7CQT3uY1IlAOKjhHmph_P6rwfqyVQcZwkIQSt_2qH6BnhrLZ5GSejOK3ysvvlY-1hU5nCu7XmcVydM0" />
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-slate-900 dark:text-white">Pramuka Inti</div>
                                <div class="text-xs text-slate-500">Pembina: Ibu Siti</div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-300">Kepanduan</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 text-slate-500 hover:text-primary hover:bg-primary/10 rounded-lg transition-all" title="Edit">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button class="p-2 text-slate-500 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all" title="Hapus">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <div class="w-16 h-10 rounded-lg overflow-hidden bg-slate-200 dark:bg-slate-700 border border-slate-100 dark:border-slate-800">
                                    <img alt="Hadroh" class="w-full h-full object-cover" data-alt="Traditional Islamic musical instrument performance" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPjPCsJ1OIl-ccscJP2oTlRsJpMQFbhm34XLFfa85DnI-P8IH-UACzFQNoHToXHnCP06yeUqKs9OLOoXPVJJl7GCVkmZAjh5uI9pT8bj9Nami9i7wU5C7ysNmOax1Ov1q9gg2V-OhU4x8oCov5Q2pdbwPJfRIQykriKACnT6XC0Pj9JGH6wk1ZH_Kb7lgiYO9gxgTxTDBwovlRkYqZfb5gEm4_MU_T_I62ClYB2XbgpUEDZqvi0B3XoWcMs3NfCqAy1sGTyVcKggE" />
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-slate-900 dark:text-white">Hadroh &amp; Rebana</div>
                                <div class="text-xs text-slate-500">Pembina: Ust. Fauzi</div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-300">Seni Budaya</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 text-slate-500 hover:text-primary hover:bg-primary/10 rounded-lg transition-all" title="Edit">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button class="p-2 text-slate-500 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all" title="Hapus">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <div class="w-16 h-10 rounded-lg overflow-hidden bg-slate-200 dark:bg-slate-700 border border-slate-100 dark:border-slate-800">
                                    <img alt="IT" class="w-full h-full object-cover" data-alt="Close up of coding screen on laptop" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4XthNE6DT9eswldl4FaurLlH8gZRNImhVUC5OWqjvHrQ_xy7yNJA2-Kmf9tC7AunHexNssUB9acki-N1tNGLI9iLCh-JdZAzYoVhxOzcEqDOh3RwA5oUil1NbmaJPAxwlVDTHjJfgBxZ7FY9JIvrid1HytvMeGo63LjOyfFeF-Y1xQuDLUD_65oGyOTIui99sc_0tjG5OaevL4ehHW9RMKNNgKMtKYjP0CHsYrqdhB-to7JHf9-0TsgvJVM1aAlmmuzcJm7mlTs8" />
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-slate-900 dark:text-white">Coding Club</div>
                                <div class="text-xs text-slate-500">Pembina: Bp. Rian</div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700 dark:bg-orange-900/30 dark:text-orange-300">Teknologi</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 text-slate-500 hover:text-primary hover:bg-primary/10 rounded-lg transition-all" title="Edit">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>
                                    <button class="p-2 text-slate-500 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all" title="Hapus">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="p-4 border-t border-primary/5 flex items-center justify-between">
                <p class="text-sm text-slate-500">Menampilkan 4 dari 12 data</p>
                <div class="flex gap-2">
                    <button class="p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors disabled:opacity-50" disabled="">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <button class="px-3 py-1 rounded-lg bg-primary text-white text-sm font-medium">1</button>
                    <button class="px-3 py-1 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-medium">2</button>
                    <button class="px-3 py-1 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 text-sm font-medium">3</button>
                    <button class="p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
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