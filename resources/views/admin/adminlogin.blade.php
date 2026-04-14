<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Login - MTS Darul Hikam Binong</title>
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
                        "background-light": "#f5f7f8",
                        "background-dark": "#0f1923",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
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
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col">
    <!-- Header / TopAppBar -->
    <header class="w-full bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-3">
                    <div
                        class="size-10 shrink-0 bg-primary/10 rounded-full flex items-center justify-center overflow-hidden">
                        <img alt="School Logo" class="w-full h-full object-cover"
                            data-alt="Official logo of MTS Darul Hikam Binong school"
                            src="https://yt3.googleusercontent.com/ytc/AIdro_mlDWTRAZTCiGHxcCbvX0aK5ri1-5kM5ZDamnW4w8Jrxw=s900-c-k-c0x00ffffff-no-rj" />
                    </div>
                    <h1 class="text-slate-900 dark:text-slate-100 text-lg font-bold tracking-tight">MTS Darul Hikam
                        Binong</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <div class="bg-white dark:bg-slate-900 shadow-xl shadow-primary/5 rounded-xl border border-slate-200 dark:border-slate-800 p-8 sm:p-10">
                <div class="text-center mb-8">
                    <h2 class="text-slate-900 dark:text-slate-100 text-3xl font-bold mb-2">Admin Login</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-sm">Silahkan masukan akun anda untuk mengakses panel admin.</p>
                </div>

                @if(session('success'))
                <div class="mb-4 text-green-500 text-sm">
                    {{ session('success') }}
                </div>
                @endif

                <form method="POST" action="/admin">
                    @csrf

                    <!-- SESSION -->
                    @if(session('error'))
                    <div class="mb-4 text-red-500 text-sm">
                        {{ session('error') }}
                    </div>
                    @endif

                    <!-- Email -->
                    <div class="flex flex-col gap-1.5">
                        <label class="text-slate-700 text-sm font-medium">Email</label>
                        <input name="email" class="form-input w-full h-12 px-4 rounded-lg" type="email" required />
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col gap-1.5 mt-4">
                        <label class="text-slate-700 text-sm font-medium">Password</label>
                        <input name="password" class="form-input w-full h-12 px-4 rounded-lg" type="password" required />
                    </div>

                    <!-- Button -->
                    <button class="w-full mt-6 bg-primary text-white py-3 rounded-lg" type="submit">
                        Masuk
                    </button>
                </form>

                <div class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-800 text-center">
                    <p class="text-slate-500 dark:text-slate-400 text-xs">
                        Back to <a class="text-primary font-medium hover:underline" href="/">Home Website</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="w-full py-6 text-center bg-transparent">
        <p class="text-slate-400 dark:text-slate-500 text-sm">
            © 2024 MTS Darul Hikam Binong. All rights reserved.
        </p>
    </footer>
</body>

</html>