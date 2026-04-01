<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Kelola Guru - MTS Darul Hikam Binong</title>
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

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
    <div class="max-w-5xl mx-auto bg-white dark:bg-slate-900 min-h-screen shadow-xl flex flex-col">
        <!-- Header Section -->
        <header class="flex items-center p-4 border-b border-slate-100 dark:border-slate-800 sticky top-0 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md z-10">
            <div class="flex size-10 shrink-0 items-center justify-center rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 cursor-pointer">
                <span class="material-symbols-outlined text-slate-600 dark:text-slate-400">arrow_back</span>
            </div>
            <div class="ml-4 flex-1">
                <h1 class="text-xl font-bold tracking-tight text-primary">Kelola Guru</h1>
                <p class="text-xs text-slate-500 dark:text-slate-400 font-medium uppercase tracking-wider">MTS Darul Hikam Binong</p>
            </div>
            <div class="flex gap-2">
                <button class="flex size-10 items-center justify-center rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <div class="size-10 rounded-full bg-primary/10 border-2 border-primary/20 overflow-hidden">
                    <img alt="Admin Avatar" data-alt="User profile avatar icon representing an administrator" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9GyS9eECA-EBPdGm6Ohou5KyuCzlUvheH82cBMod04cEU7DnnIX_4KnGQRhtQeOFpYwvWoFzwZ90RanbBC_XPjFKh7OEhzHZ4e82YN78emv6UBtHFuourZ-vt-A2XS4nQma57ekcaBkDG3j68HoOExHd5cDU64MI1kuhd-14WHrxc7Fh3oUrvVKLt3tcUxfcrTw0ZBD49DErMPugut6o_t-lWTGWgqnY_pa35NOEji760sX3z744z9wRv7rQuoCdq507Avw-9uNo" />
                </div>
            </div>
        </header>
        <!-- Search and Action Bar -->
        <div class="p-4 space-y-4">
            <div class="flex flex-col md:flex-row gap-3">
                <div class="relative flex-1">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                    <input class="w-full pl-10 pr-4 py-2.5 rounded-xl border-none bg-slate-100 dark:bg-slate-800 focus:ring-2 focus:ring-primary/50 text-slate-900 dark:text-slate-100" placeholder="Cari nama atau NIP guru..." type="text" />
                </div>
                <div class="flex gap-2">
                    <button class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-100 dark:bg-slate-800 font-medium hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                        <span class="material-symbols-outlined text-lg">filter_list</span>
                        <span>Filter</span>
                    </button>
                    <button class="flex items-center gap-2 px-6 py-2.5 rounded-xl bg-primary text-white font-bold shadow-lg shadow-primary/25 hover:opacity-90 transition-all">
                        <span class="material-symbols-outlined">add</span>
                        <span>Tambah Guru</span>
                    </button>
                </div>
            </div>
            <!-- Subject Chips -->
            <div class="flex gap-2 overflow-x-auto pb-2 scrollbar-hide">
                <button class="px-4 py-1.5 rounded-full bg-primary text-white text-sm font-medium whitespace-nowrap">Semua Mapel</button>
                <button class="px-4 py-1.5 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-sm font-medium whitespace-nowrap hover:bg-slate-200">Matematika</button>
                <button class="px-4 py-1.5 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-sm font-medium whitespace-nowrap hover:bg-slate-200">Bahasa Indonesia</button>
                <button class="px-4 py-1.5 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-sm font-medium whitespace-nowrap hover:bg-slate-200">IPA</button>
                <button class="px-4 py-1.5 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-sm font-medium whitespace-nowrap hover:bg-slate-200">Bahasa Arab</button>
                <button class="px-4 py-1.5 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-sm font-medium whitespace-nowrap hover:bg-slate-200">Fiqih</button>
            </div>
        </div>
        <!-- Teacher List Table -->
        <main class="flex-1 px-4 pb-24">
            <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-100 dark:border-slate-800 overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 dark:bg-slate-800/50">
                            <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Guru</th>
                            <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 hidden md:table-cell">Mata Pelajaran</th>
                            <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-4 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded-lg overflow-hidden flex-shrink-0">
                                        <img alt="Guru Photo" data-alt="Portrait of a smiling male teacher" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsdzLM6i8-nhJHtU630igiEBvsC1UlsKQLIaor2kMry1SCgHkyhNmR7Txx9VBfX1ls7I1aP06LhXnX75feKsYCnKgPL-Mr2hm7S1BSy81nQltN7N_ZXc3zNngzD1zLWujbz6iYWDYnT47xjzatsJJHHJ6t6XedojYXbsjx87zOpYGg1I-llt8uX2J1QfC65OTNdAGI2za5s6JFoJPwRDcAogAIxfQL1Ml3CV0osiBi3ZvQ6Cy28d1HHhmWLkvG-CAlw77aewoif0g" />
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900 dark:text-slate-100">Drs. Ahmad Subarjo</p>
                                    </div>
                                </div>
                            </td>
                            </td>
                            <td class="px-4 py-4 hidden md:table-cell">
                                <span class="px-2.5 py-1 rounded-md bg-primary/10 text-primary text-xs font-bold">Matematika</span>
                            </td>
                            <td class="px-4 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 rounded-lg bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 hover:bg-blue-100 transition-colors">
                                        <span class="material-symbols-outlined text-lg">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 hover:bg-red-100 transition-colors">
                                        <span class="material-symbols-outlined text-lg">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-4 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded-lg overflow-hidden flex-shrink-0">
                                        <img alt="Guru Photo" data-alt="Portrait of a female teacher wearing a hijab" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYRBvn87Jl-lsIfxCLl9CB_FAJEipY3E4iqJ_VaL4n3fqT2Jy2ZA3cFLhzceOPOP3uOhEFlhgT6tfKWj0fuGoElABWs14MI4-sYOZZMIfZU_8XYnQWERePemsrzfUE1cWPDE2hrNr0vZMdAPwtfjMPPcjM2PDkMm5M0ghU0xATvBXbJcQoJQNKVcZ5rV8wVlC3pashvEzECQ1OQ3Dpoii1Gc2kzt-UE0Q8rWz6YSyaki61KtFeBvRSjTcuICJZvjZ7HRIc22tiUYQ" />
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900 dark:text-slate-100">Siti Aminah, S.Pd.I</p>
                                    </div>
                                </div>
                            </td>
                            </td>
                            <td class="px-4 py-4 hidden md:table-cell">
                                <span class="px-2.5 py-1 rounded-md bg-primary/10 text-primary text-xs font-bold">Bahasa Arab</span>
                            </td>
                            <td class="px-4 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 rounded-lg bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 hover:bg-blue-100 transition-colors">
                                        <span class="material-symbols-outlined text-lg">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 hover:bg-red-100 transition-colors">
                                        <span class="material-symbols-outlined text-lg">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-4 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded-lg overflow-hidden flex-shrink-0">
                                        <img alt="Guru Photo" data-alt="Portrait of a professional male teacher" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEc_WxPlRI_9PuArQkmmvvWE2zfYiLHZAKZEdllMEe9OhunImWnsQG6UsFY2fx7BOeXQnUMhzHhTXAH5aZRZ9UZY1FPQdXcXcj-Lbr4tV37MurknH1ZVnoSpr06hDlJUyWlpHzUHC0Z9L0t5TkI37g_kVPQUXSr9lA0rTjEyHA15-ZRmP6053rBVxaMzAFS4nJN7cm7IeXck6E64XsYxPlz5t2AvcKBk4LiY9uVfiIYbn_5JUeU0BUcLCVm0gKZMs5Y-KKzN7lG0o" />
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900 dark:text-slate-100">M. Ridwan, M.Pd</p>
                                    </div>
                                </div>
                            </td>
                            </td>
                            <td class="px-4 py-4 hidden md:table-cell">
                                <span class="px-2.5 py-1 rounded-md bg-primary/10 text-primary text-xs font-bold">IPA Terpadu</span>
                            </td>
                            <td class="px-4 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 rounded-lg bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 hover:bg-blue-100 transition-colors">
                                        <span class="material-symbols-outlined text-lg">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 hover:bg-red-100 transition-colors">
                                        <span class="material-symbols-outlined text-lg">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-4 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded-lg overflow-hidden flex-shrink-0">
                                        <img alt="Guru Photo" data-alt="Portrait of a young female educator" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBv_GJ3yAb8s_fYmlcRFesuyUzefZUBsY7NaEdFln98eC2MluBA1yngs1Uj_5S27x18gxyInf7f0FD4rYENc2UDBf61VjpXpqW_n0FfB5t2P0nXWsusL0OhhIPIiyEgWrb46XqYFDHb9ztTmHNUVbp1l-AJz0Kvw4AFNafqs5g7a1wgOdv8iV9kp8Xze0MaPWI-0kI6TV9HUI5KIxKpxoUOPmDHYSctB1J6q6PA_xeXz5KNVFEzjzevMtR7frWgoVlflJBs1rmDu8" />
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900 dark:text-slate-100">Luthfiah Hanum, S.Pd</p>
                                    </div>
                                </div>
                            </td>
                            </td>
                            <td class="px-4 py-4 hidden md:table-cell">
                                <span class="px-2.5 py-1 rounded-md bg-primary/10 text-primary text-xs font-bold">B. Indonesia</span>
                            </td>
                            <td class="px-4 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 rounded-lg bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 hover:bg-blue-100 transition-colors">
                                        <span class="material-symbols-outlined text-lg">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 hover:bg-red-100 transition-colors">
                                        <span class="material-symbols-outlined text-lg">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination Info -->
            <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-sm text-slate-500 dark:text-slate-400">Menampilkan 1-4 dari 32 Guru</p>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 disabled:opacity-50" disabled="">
                        <span class="material-symbols-outlined text-lg leading-none align-middle">chevron_left</span>
                    </button>
                    <button class="px-3.5 py-1.5 rounded-lg bg-primary text-white text-sm font-bold">1</button>
                    <button class="px-3.5 py-1.5 rounded-lg border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800">2</button>
                    <button class="px-3.5 py-1.5 rounded-lg border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800">3</button>
                    <button class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800">
                        <span class="material-symbols-outlined text-lg leading-none align-middle">chevron_right</span>
                    </button>
                </div>
            </div>
        </main>
        <!-- Bottom Navigation Bar -->
        <nav class="fixed bottom-0 left-0 right-0 max-w-5xl mx-auto border-t border-slate-100 dark:border-slate-800 bg-white/95 dark:bg-slate-900/95 backdrop-blur-md px-4 pb-4 pt-2 shadow-2xl z-20">
            <div class="flex justify-around items-center">
                <a class="flex flex-col items-center gap-1 text-slate-400 dark:text-slate-500 hover:text-primary transition-colors" href="home">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="text-[10px] font-medium uppercase tracking-tight">Beranda</span>
                </a>
                <a class="flex flex-col items-center gap-1 text-primary relative" href="#">
                    <span class="material-symbols-outlined font-bold">group</span>
                    <span class="text-[10px] font-bold uppercase tracking-tight">Guru</span>
                </a>
                <a class="flex flex-col items-center gap-1 text-slate-400 dark:text-slate-500 hover:text-primary transition-colors" href="#">
                    <span class="material-symbols-outlined">school</span>
                    <span class="text-[10px] font-medium uppercase tracking-tight">Siswa</span>
                </a>
                <a class="flex flex-col items-center gap-1 text-slate-400 dark:text-slate-500 hover:text-primary transition-colors" href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <span class="text-[10px] font-medium uppercase tracking-tight">Profil</span>
                </a>
            </div>
        </nav>
    </div>
</body>

</html>