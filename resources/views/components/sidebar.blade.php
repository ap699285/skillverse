<div id="sidebar"
    class="bg-white dark:bg-gray-800 w-64 transition-all duration-300 ease-in-out overflow-hidden shadow-md min-h-screen"
    style="width: 16rem;">
    <div class="flex items-center justify-between p-4">
        <span class="text-lg font-bold sidebar-label">MyApp</span>
        <button onclick="toggleSidebar()" class="text-gray-600 dark:text-gray-300">
            ⬅️
        </button>
    </div>
    <nav class="space-y-2 px-4">
        <a href="{{ route('dashboard') }}"
            class="flex items-center gap-2 p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
            🏠 <span class="sidebar-label">Dashboard</span>
        </a>

        <!-- Dropdown -->
        <div class="dropdown">
            <button onclick="toggleDropdown('menu1')"
                class="flex items-center justify-between w-full p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
                <span class="flex items-center gap-2">
                    📚 <span class="sidebar-label">Belajar</span>
                </span>
                <svg id="arrow-menu1" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="submenu-menu1" class="ml-6 mt-1 space-y-1 hidden">
                <a href="#" class="block p-2 text-sm rounded hover:bg-gray-200 dark:hover:bg-gray-700">Matematika</a>
                <a href="#" class="block p-2 text-sm rounded hover:bg-gray-200 dark:hover:bg-gray-700">Bahasa</a>
            </div>
        </div>

        <a href="#" class="flex items-center gap-2 p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
            ⚙️ <span class="sidebar-label">Pengaturan</span>
        </a>
    </nav>
</div>
