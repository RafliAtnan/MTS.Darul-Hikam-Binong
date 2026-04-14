<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Kelola Guru - MTS Darul Hikam Binong</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <div class="max-w-5xl mx-auto bg-white dark:bg-slate-900 min-h-screen shadow-xl flex flex-col">
        <!-- Header Section -->
        <header class="flex items-center p-4 border-b border-slate-100 dark:border-slate-800 sticky top-0 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md z-10">
            <div class="ml-4 flex-1">
                <h1 class="text-xl font-bold tracking-tight text-primary">Kelola Guru</h1>
                <p class="text-xs text-slate-500 dark:text-slate-400 font-medium uppercase tracking-wider">MTS Darul Hikam Binong</p>
            </div>
        </header>
        <!-- Search and Action Bar -->
        <div class="p-4 space-y-4">
            <div class="flex flex-col md:flex-row gap-3">
                
                <!-- TOTAL -->
                <div class="bg-white dark:bg-slate-900 px-3 py-1 rounded-xl border text-center">
                    <p class="text-sm text-slate-500">Total Guru</p>
                    <p class="text-2xl font-bold text-primary">
                        {{ $totalGuru ?? $guru->total() }}
                    </p>
                </div>

                <!-- SEARCH -->
                <form method="GET" action="/admin/guru" class="mb-4 flex gap-2">
                    <input type="text" name="search" value="{{ $search ?? '' }}"
                        placeholder="Cari nama / mapel..."
                        class="bg-white dark:bg-slate-900 px-3 py-1 rounded-xl border border-primary/10 text-center min-w-[140px] shadow-sm">
                </form>

                <!-- BUTTON -->
                <div class="flex gap-2">
                    <a href="/admin/guru/tambah">
                        <button class="flex items-center gap-2 px-6 py-2.5 rounded-xl bg-primary text-white font-bold shadow-lg shadow-primary/25 hover:opacity-90 transition-all">
                            <span class="material-symbols-outlined">add</span>
                            <span>Tambah Guru</span>
                        </button>
                    </a>
                </div>

            </div>
        </div>
        <!-- Teacher List Table -->
        <main class="flex-1 px-4 pb-24">
            <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-100 dark:border-slate-800 overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 dark:bg-slate-800/50">
                            <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Foto</th>
                            <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Guru</th>
                            <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 hidden md:table-cell">Mata Pelajaran</th>
                            <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="table-data">
                        @include('admin.guru.partials.gurutable')
                        <!-- Row 1 -->
                        <div id="modalEdit" class="fixed inset-0 bg-black/50 hidden items-center justify-center">
                            <div class="bg-white p-6 rounded-xl w-96">

                                <h2 class="text-lg font-bold mb-4">Edit Guru</h2>

                                <form id="formEdit" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <input type="text" id="editNama" name="nama"
                                        class="w-full border p-2 mb-3 rounded">

                                    <input type="text" id="editMapel" name="mapel"
                                        class="w-full border p-2 mb-3 rounded">

                                    <div class="flex justify-center mb-3">
                                        <img id="previewFoto"
                                            src="https://via.placeholder.com/150"
                                            class="max-w-full max-h-40 object-contain border rounded">
                                    </div>

                                    <input type="file" id="editFoto" name="foto"
                                        class="w-full border p-2 mb-3 rounded">

                                    <div class="flex justify-end gap-2">
                                        <button type="button" onclick="closeModal()"
                                            class="bg-gray-400 text-white px-3 py-1 rounded">
                                            Batal
                                        </button>

                                        <button type="submit"
                                            class="bg-blue-500 text-white px-3 py-1 rounded">
                                            Simpan
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </tbody>
                </table>
                <div id="modalEdit" class="fixed inset-0 bg-black/50 hidden items-center justify-center">

                </div>
                <!-- Pagination Info -->
                <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4">

                    <p class="text-sm text-slate-500 dark:text-slate-400">
                        Menampilkan {{ $guru->firstItem() }} - {{ $guru->lastItem() }}
                        dari {{ $guru->total() }} Guru
                    </p>

                </div>
        </main>
        <!-- Bottom Navigation Bar (Mobile Optimized) -->
        <nav class="fixed bottom-0 left-0 right-0 bg-white dark:bg-slate-900 border-t border-primary/10 pb-safe-area z-50">
            <div class="flex items-center justify-around h-16 max-w-lg mx-auto px-4">
                <a class="flex flex-col items-center gap-1 text-slate-400 hover:text-primary transition-colors" href="/admin/home">
                    <span class="material-symbols-outlined font-fill">dashboard</span>
                    <span class="text-[10px] font-bold uppercase tracking-tight">Beranda</span>
                </a>
                <a class="flex flex-col items-center gap-1 text-primary" href="/admin/guru">
                    <span class="material-symbols-outlined font-bold">group</span>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function
        confirmDelete(id) {
            Swal.fire({
                title: 'Yakin?',
                text: "Data akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-' +
                        id).submit();
                }
            });
        }
    </script>

    <script>
        function
        openEdit(id) {
            fetch(`/admin/guru/edit/${id}`)
                .then(res =>
                    res.json())
                .then(data => {
                    document.getElementById('editNama').value = data.nama;
                    document.getElementById('editMapel').value = data.mapel;
                    document.getElementById('formEdit').action = `/admin/guru/edit/${id}`;
                    document.getElementById('previewFoto').src = `/storage/guru/${data.foto}`;
                    document.getElementById('modalEdit').classList.remove('hidden');
                    document.getElementById('modalEdit').classList.add('flex');

                    document.getElementById('editFoto').addEventListener('change', function() {
                        let file = this.files[0];

                        if (file) {
                            let reader = new FileReader();

                            reader.onload = function(e) {
                                document.getElementById('previewFoto').src = e.target.result;
                            }

                            reader.readAsDataURL(file);
                        }
                    });
                });

            document.getElementById('formEdit').addEventListener('submit', function(e) {
                e.preventDefault();

                let form = this;
                let formData = new FormData(form);

                fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value
                        },
                        body: formData
                    })
                    .then(res => res.json())
                    .then(res => {
                        if (res.success) {
                            showAlert('Berhasil update!', 'success');
                            closeModal();
                            // loadData();
                            location.reload();
                        } else {
                            showAlert('Gagal update!', 'error');
                        }
                    })
                    .catch(() => {
                        showAlert('Terjadi error!', 'error');
                    });
            });
        }

        function
        closeModal() {
            document.getElementById('modalEdit').classList.add('hidden');
        }
    </script>

    <!-- <script>
        document.getElementById('formEdit').addEventListener('submit', function(e) {
            e.preventDefault();

            let form = this;
            let formData = new FormData(form);

            fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        showAlert('Berhasil update data!', 'success');
                        closeModal();
                        loadData();
                    } else {
                        showAlert('Gagal update!', 'error');
                    }
                })
                .catch(() => {
                    showAlert('Terjadi error!', 'error');
                });
        });
    </script> -->
    <script>
        function showAlert(message, type) {
            Swal.fire({
                icon: type,
                title: message,
                timer: 1500,
                showConfirmButton: false
            });
        }
    </script>
    <script>
        function
        loadData() {
            fetch('/admin/guru?search=' +
                    document.querySelector('input[name="search"]').value)
                .then(res =>
                    res.text())
                .then(data => {
                    document.getElementById('table-data').innerHTML = data;
                });
        }
    </script>

    <script>
        function loadData(url = '/admin/guru') {
            fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest' // 🔥 PENTING
                    }
                })
                .then(res => res.text())
                .then(data => {
                    document.getElementById('table-data').innerHTML = data;
                });
        }
    </script>
    <script>
        document.addEventListener('click', function(e) {
            if (e.target.closest('.pagination a')) {
                e.preventDefault();

                let url = e.target.closest('a').getAttribute('href');
                loadData(url);
            }
        });
    </script>
    <script>
        document.querySelector('input[name="search"]').addEventListener('keyup', function() {
            let search = this.value;
            loadData(`/admin/guru?search=${search}`);
        });
    </script>

</body>

</html>