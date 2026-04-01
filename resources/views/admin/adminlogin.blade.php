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
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkHZt530AHsAbl2nl8Tp1pbgOxoBOdnlK3bfNREYGqJmqOpwbAkghHvK5nyposWDL5-gKMyr1h2znnFxzDBZnPdLsW3O-5pANXp2rQVene_cEGQv5DjzHtCRWHiugLuKvz1w7JSuoHzu78T6STt3ylmpf6oJ-Yy5sYOkmxDeHmaeUhLFp2c3uX-rNmjJZtumOsz51vSZ1Qw77IAQ14YlPqHrWjFi-Z9M87qJNRLV-9KeHjLs0Dl3acSBW71swXXU2E01XlGQhlIeA" />
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

                <!-- Email Input -->
                <div class="flex flex-col gap-1.5">
                    <label class="text-slate-700 dark:text-slate-300 text-sm font-medium" for="email">Email</label>
                    <div class="relative">
                        <input class="form-input block w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 focus:border-primary focus:ring-primary h-12 px-4 transition-colors" id="email" type="email" />
                    </div>
                </div>
                <!-- Password Input -->
                <div class="flex flex-col gap-1.5">
                    <label class="text-slate-700 dark:text-slate-300 text-sm font-medium" for="password">Password</label>
                    <div class="relative flex items-center">
                        <input class="form-input block w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 focus:border-primary focus:ring-primary h-12 pl-4 pr-12 transition-colors" id="password" type="password" />
                        <button class="absolute right-3 text-slate-400 hover:text-primary transition-colors focus:outline-none" type="button">
                            <span class="material-symbols-outlined">visibility</span>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between py-1">
                    <div class="flex items-center">
                        <input class="h-4 w-4 rounded border-slate-300 text-primary focus:ring-primary" id="remember-me" name="remember-me" type="checkbox" />
                        <label class="ml-2 block text-sm text-slate-600 dark:text-slate-400" for="remember-me">Remember me</label>
                    </div>
                    <div class="text-sm">
                        <a class="font-medium text-primary hover:underline" href="#">Forgot password?</a>
                    </div>
                </div>
                <!-- Sign In Button -->
                <button class="w-full bg-primary hover:bg-primary/90 text-white font-semibold py-3.5 rounded-lg transition-all shadow-md shadow-primary/20 flex items-center justify-center gap-2" type="submit">
                    Sign In
                    <span class="material-symbols-outlined text-lg">login</span>
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