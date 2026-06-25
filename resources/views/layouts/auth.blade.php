<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DayDash')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#4a90e2',
                        accent: '#d9534f'
                    }
                }
            }
        }
    </script>
    <script>
        if (localStorage.getItem('theme') === 'dark' || 
            (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<body class="h-screen flex flex-col bg-slate-50 text-gray-900 dark:bg-zinc-950 dark:text-zinc-50 transition-colors duration-200 overflow-hidden">

    <div class="max-w-7xl w-full mx-auto h-full px-8 flex flex-col">
        
        <div class="flex justify-between items-center py-8 shrink-0">
            <h1 class="text-4xl font-extrabold text-yellow-600 dark:text-yellow-500">DayDash</h1>
            <div class="flex items-center space-x-10">
                <button x-data="{ darkMode: localStorage.getItem('theme') === 'dark' }" 
                        @click="
                            darkMode = !darkMode; 
                            localStorage.setItem('theme', darkMode ? 'dark' : 'light');
                            if (darkMode) { document.documentElement.classList.add('dark') } 
                            else { document.documentElement.classList.remove('dark') }
                        "
                        class="p-2 rounded-lg bg-gray-100 dark:bg-zinc-800 text-gray-700 dark:text-zinc-300 hover:bg-gray-200 dark:hover:bg-zinc-700 transition">
                    <span x-show="darkMode">☀️</span>
                    <span x-show="!darkMode">🌙</span>
                </button>
                <a href="/auth/login" class="text-lg font-medium text-gray-700 dark:text-gray-300 hover:text-yellow-600 dark:hover:text-yellow-500no">Log In</a>
                <a href="/auth/register" class="text-lg font-medium text-gray-700 dark:text-gray-300 hover:text-yellow-600 dark:hover:text-yellow-500">Sign Up</a>
            </div>
        </div>

        <div class="flex items-center justify-center flex-grow pb-16">
            
            <div class="w-1/2 flex justify-center">
                <img src="{{ asset('images/authh.png') }}" alt="Illustration" class="max-h-[70vh] w-auto object-contain">
            </div>

            <div class="w-1/2 flex justify-center">
                <div class="w-full max-w-md bg-white dark:bg-zinc-900 p-10 rounded-2xl border border-gray-100 dark:border-zinc-800 shadow-sm">
                    @yield('form_content')
                </div>
            </div>
        </div>

    </div>

</body>
</html>
