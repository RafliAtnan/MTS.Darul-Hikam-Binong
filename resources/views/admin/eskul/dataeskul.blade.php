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
    <div class="max-w-5xl mx-auto bg-white dark:bg-slate-900 min-h-screen shadow-xl flex flex-col">
        <!-- Header Section -->
        <header class="flex items-center p-4 border-b border-slate-100 dark:border-slate-800 sticky top-0 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md z-10">
            <div class="ml-4 flex-1">
                <h1 class="text-xl font-bold tracking-tight text-primary">Kelola Ekstrakurikuler</h1>
                <p class="text-xs text-slate-500 dark:text-slate-400 font-medium uppercase tracking-wider">MTS Darul Hikam Binong</p>
            </div>
        </header>
        <main class="flex-1 max-w-7xl mx-auto w-full p-4 md:p-6 space-y-6" style="padding-bottom: 80px;">

            <!-- ACTION HEADER -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">

                <!-- LEFT -->
                <div class="flex flex-col md:flex-row gap-3 w-full md:w-auto">

                    <!-- SEARCH -->
                    <form method="GET" action="/admin/eskul" class="flex gap-2 w-full md:w-auto">
                        <input type="text" name="search" value="{{ $search ?? '' }}"
                            placeholder="Cari Ektrakulikuler..."
                            class="bg-white dark:bg-slate-900 px-3 py-1 rounded-xl border border-primary/10 text-center min-w-[140px] shadow-sm">
                    </form>

                    <!-- BUTTON -->
                    <a href="/admin/eskul/tambah">
                        <button
                            class="flex items-center gap-2 px-6 py-2.5 rounded-xl bg-primary text-white font-bold shadow-lg hover:opacity-90 transition-all">
                            <span class="material-symbols-outlined">add</span>
                            <span>Tambah Ektrakuliler</span>
                        </button>
                    </a>

                </div>

                <!-- TOTAL -->
                <div class="bg-white dark:bg-slate-900 px-6 py-4 rounded-xl border border-primary/10 text-center min-w-[140px] shadow-sm">
                    <p class="text-sm text-slate-500">Total Eskul</p>
                    <p class="text-2xl font-bold text-primary">
                        {{ $totalEskul }}
                    </p>
                </div>

            </div>

            <div id="table-data">
                @include('admin.eskul.partials.eskultable')
            </div>
            <!-- DATA -->
            <div id="modalEdit" class="fixed inset-0 bg-black/50 hidden items-center justify-center">
                <div class="bg-white p-6 rounded-xl w-96">

                    <h2 class="text-lg font-bold mb-4">Edit Eskul</h2>

                    <form id="formEdit" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="text" id="editNama" name="nama"
                            class="w-full border p-2 mb-3 rounded">

                        <input type="text" id="editDeskripsi" name="deskripsi"
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
            <!-- Pagination Info -->
            <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4">

                <p class="text-sm text-slate-500 dark:text-slate-400">
                    Menampilkan {{ $eskul->firstItem() }} - {{ $eskul->lastItem() }}
                    dari {{ $eskul->total() }} Ekskul
                </p>

            </div>
    </div>

    </main>

    <!-- Bottom Navigation Bar (Mobile Optimized) -->
    <nav class="fixed bottom-0 left-0 right-0 bg-white dark:bg-slate-900 border-t border-primary/10 pb-safe-area z-50">
        <div class="flex items-center justify-around h-16 max-w-lg mx-auto px-4">
            <a class="flex flex-col items-center gap-1 text-slate-400 hover:text-primary transition-colors" href="/admin/home">
                <span class="material-symbols-outlined font-fill">dashboard</span>
                <span class="text-[10px] font-bold uppercase tracking-tight">Beranda</span>
            </a>
            <a class="flex flex-col items-center gap-1 text-slate-400 hover:text-primary transition-colors" href="/admin/guru">
                <span class="material-symbols-outlined font-bold">group</span>
                <span class="text-[10px] font-bold uppercase tracking-tight">Guru</span>
            </a>
            <a class="flex flex-col items-center gap-1 text-primary" href="#">
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
            fetch(`/admin/eskul/edit/${id}`)
                .then(res =>
                    res.json())
                .then(data => {
                    document.getElementById('editNama').value = data.nama;
                    document.getElementById('editDeskripsi').value = data.deskripsi;

                    document.getElementById('formEdit').action = `/admin/eskul/edit/${id}`;

                    document.getElementById('previewFoto').src = `/storage/eskul/${data.foto}`;

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
        document.addEventListener('input', function(e) {
            if (e.target.name === 'search') {
                let search = e.target.value;

                fetch(`/admin/eskul?search=${search}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(res => res.text())
                    .then(data => {
                        document.getElementById('table-data').innerHTML = data;
                    });
            }
        });
    </script>

    <script>
        function loadData(url = '/admin/eskul') {
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
</body>

</html>