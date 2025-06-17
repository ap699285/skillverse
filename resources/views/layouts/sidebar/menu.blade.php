<nav class="space-y-2 px-4 my-4">
    <ul class="pb-2">
        <li class="py-2">
            <a href="{{ url('dashboard') }}"
                class="flex items-center p-2 text-sm rounded-lg hover:bg-primary hover:shadow-lg hover:shadow-primary hover:text-white group dark:text-gray-200 dark:hover:bg-gray-700 {{ 'dashboard' == Request::path() ? 'bg-primary shadow-lg shadow-primary text-white' : 'text-gray-500' }} dark:bg-gray-700">
                <i class="hover:text-white fa-solid fa-chart-pie fa-fw {{ 'dashboard' == Request::path() ? 'text-white' : '' }}"></i>
                <span class="ml-3" sidebar-toggle-item>Update Informasi</span>
            </a>
        </li>

        <!-- Dropdown -->
        <li class="py-1">
            <button onclick="toggleDropdown('menu1')"
                class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-lg group hover:bg-primary hover:shadow-lg hover:shadow-primary hover:text-white dark:text-gray-200 dark:hover:bg-gray-700">
                <span class="flex items-center">
                    <i class="hover:text-white fa-solid fa-gear"></i>
                    <span class="ml-3" sidebar-toggle-item>Pengaturan</span>
                </span>
                <svg id="arrow-menu1" class="w-4 h-4 transition-transform ml-auto" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="submenu-menu1" class="ml-6 mt-1 space-y-1 hidden">
                <a href="#"
                    class="ml-3 block p-2 text-sm rounded hover:bg-primary hover:shadow-lg hover:shadow-primary hover:text-white dark:hover:bg-gray-700">Matematika</a>
                <a href="#"
                    class="ml-3 block p-2 text-sm rounded hover:bg-primary hover:shadow-lg hover:shadow-primary hover:text-white dark:hover:bg-gray-700">Bahasa</a>
            </div>
        </li>
    </ul>
</nav>
