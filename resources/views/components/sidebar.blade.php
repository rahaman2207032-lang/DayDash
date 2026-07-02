<aside class="w-72 bg-white dark:bg-zinc-900 border-r border-gray-200 dark:border-zinc-800 flex flex-col">

    <!-- Sidebar Header -->
    <div class="px-8 py-6 border-b border-gray-200 dark:border-zinc-800">

        <!-- Logo -->
            <h1 class="text-3xl font-extrabold text-yellow-600 dark:text-yellow-500">
                DayDash
            </h1>

    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-4 py-6">

        <!-- All Tasks -->
        <a href="#"
            class="flex items-center gap-3 px-4 py-3 rounded-xl
                   bg-primary text-white font-medium shadow">

            <span class="text-xl">📋</span>

            <span>All Tasks</span>

        </a>

        <!-- Categories -->
        <div class="mt-8">

            <div class="flex items-center justify-between mb-3 px-2">

                <h3 class="text-sm uppercase tracking-wider font-semibold text-gray-500">
                    Categories
                </h3>

            </div>

            <!-- Empty State -->
            <div class="rounded-xl border border-dashed border-gray-300 dark:border-zinc-700 p-4">

                <p class="text-sm text-gray-500 text-center">
                    No categories yet
                </p>

            </div>

            <!-- Add Category -->
            <button
                class="mt-4 w-full flex items-center justify-center gap-2
                       rounded-xl border-2 border-dashed
                       border-primary text-primary
                       py-3 font-medium
                       hover:bg-primary hover:text-white
                       transition">

                <span class="text-lg">+</span>

                Add Category

            </button>

        </div>

    </nav>

    <!-- Bottom -->
    <div class="border-t border-gray-200 dark:border-zinc-800 p-4">

        <a href="#"
            class="flex items-center gap-3 px-4 py-3 rounded-xl
                   hover:bg-gray-100 dark:hover:bg-zinc-800 transition">

            <span class="text-lg">⚙️</span>

            <span>Settings</span>

        </a>

    </div>

</aside>