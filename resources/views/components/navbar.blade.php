<header class="bg-white dark:bg-zinc-900 border-b border-gray-200 dark:border-zinc-800 shadow-sm">

    <div class="flex items-center justify-between px-8 py-4">

        <!-- Left -->
        <div class="flex items-center space-x-10">

            <!-- Search -->
            <div class="relative hidden md:block">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute left-4 top-3 h-5 w-5 text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 21l-5-5m2-5a7 7 0 11-14 0a7 7 0 0114 0z" />

                </svg>

                <input
                    type="text"
                    placeholder="Search tasks..."
                    class="w-80 rounded-xl border border-gray-200 dark:border-zinc-700
                           bg-gray-50 dark:bg-zinc-800
                           py-2 pl-11 pr-4
                           focus:outline-none
                           focus:ring-2
                           focus:ring-primary">
            </div>

        </div>

        <!-- Right -->
        <div class="flex items-center space-x-5">

            <!-- Theme Toggle -->
            <button
                x-data="{ darkMode: localStorage.getItem('theme') === 'dark' }"
                @click="
                    darkMode = !darkMode;

                    localStorage.setItem('theme', darkMode ? 'dark' : 'light');

                    if(darkMode){
                        document.documentElement.classList.add('dark')
                    }else{
                        document.documentElement.classList.remove('dark')
                    }
                "
                class="w-10 h-10 rounded-full
                       bg-gray-100 dark:bg-zinc-800
                       hover:bg-gray-200 dark:hover:bg-zinc-700
                       transition">

                <span x-show="!darkMode" class="text-lg">🌙</span>
                <span x-show="darkMode" class="text-lg">☀️</span>

            </button>

            <!-- Profile -->
            <button
                class="flex items-center space-x-3 rounded-full
                       bg-gray-100 dark:bg-zinc-800
                       px-3 py-2 hover:bg-gray-200 dark:hover:bg-zinc-700">

                <div
                    class="w-9 h-9 rounded-full bg-primary
                           text-white flex items-center justify-center font-bold">

                    S

                </div>

                <div class="hidden lg:block text-left">

                    <p class="text-sm font-semibold">
                        Shahira
                    </p>

                    <p class="text-xs text-gray-500">
                        View Profile
                    </p>

                </div>

            </button>

        </div>

    </div>

</header>