<?php
    $role_id = Auth::user()->role_id;
    $dataMenu = DB::table('katalog_role_menu_validation as krmv')
        ->leftJoin('katalog_menu_validation as kmv', 'krmv.menu_validation_id', 'kmv.id')
        ->leftJoin('katalog_menu as km', 'kmv.menu_id', 'km.id')
        ->select(
            'kmv.menu_id',
            'km.deskripsi as menu',
            'km.icon',
            'kmv.path'
        )
        ->where('krmv.role_id', $role_id)
        ->where('krmv.is_active', 1)
        ->groupBy('kmv.menu_id')
        ->get();
        
    $dataSubMenu = DB::table('katalog_role_menu_validation as krmv')
        ->leftJoin('katalog_menu_validation as kmv', 'krmv.menu_validation_id', 'kmv.id')
        ->leftJoin('katalog_sub_menu as ksm', 'kmv.sub_menu_id', 'ksm.id')
        ->select(
            'kmv.menu_id',
            'ksm.deskripsi as menu',
            'ksm.icon',
            'kmv.path'
        )
        ->where('krmv.role_id', $role_id)
        ->where('krmv.is_active', 1)
        ->wherenotnull('kmv.menu_id')
        ->wherenotnull('kmv.sub_menu_id')
        ->groupBy('kmv.menu_id')
        ->groupBy('kmv.sub_menu_id')
        ->get();

    $listMenu = [];
    
    foreach ($dataMenu as $mn) {
        $mn->sub_menu_list = [];
        $mn->path_sub_menu_list = [];
        foreach ($dataSubMenu as $sbmn) {
            if ($mn->menu_id == $sbmn->menu_id) {
                array_push($mn->sub_menu_list, $sbmn);
            }
            if ($mn->menu_id == $sbmn->menu_id && !in_array($sbmn->path, $mn->path_sub_menu_list)) {
                array_push($mn->path_sub_menu_list, $sbmn->path);
            }
        }
        array_push($listMenu, $mn);
    }
?>
<nav class="space-y-2 px-4 my-4">
    <ul class="pb-2">
        @php $nomn = 1 @endphp
        @foreach ($listMenu as $mn)
        @php $dropdown_mn = $nomn++ @endphp

        @if (count($mn->sub_menu_list) == 0)
        <li class="py-2">
            <a href="{{ url($mn->path) }}"
                class="flex items-center p-2 text-sm rounded-lg hover:bg-primary hover:shadow-lg hover:shadow-primary hover:text-white group dark:text-gray-200 dark:hover:bg-gray-700 {{ 'dashboard' == Request::path() ? 'bg-primary shadow-lg shadow-primary text-white' : 'text-gray-500' }} dark:bg-gray-700">
                <i class="{{ $mn->icon }} {{ 'dashboard' == Request::path() ? 'text-white' : '' }}"></i>
                <span class="ml-3" x-show="!collapsed" sidebar-toggle-item>{{$mn->menu}}</span>
            </a>
        </li>
        @else
        <!-- Dropdown -->
        <li class="py-2 relative group">
            <div x-data="{ open: false }" class="relative" @mouseenter="if (collapsed) open = true"
                @mouseleave="if (collapsed) open = false">
                <button onclick="toggleDropdown({{ $dropdown_mn }})"
                    class="flex items-center w-full p-2 text-sm text-gray-500 transition duration-75 rounded-lg group hover:bg-primary hover:shadow-lg hover:shadow-primary hover:text-white dark:text-gray-200 dark:hover:bg-gray-700">
                    <span class="flex items-center">
                        <i class="{{ $mn->icon }}"></i>
                        <span class="ml-3" x-show="!collapsed" sidebar-toggle-item>{{ $mn->menu }}</span>
                    </span>
                    <svg id="arrow-{{ $dropdown_mn }}" class="w-4 h-4 transition-transform ml-auto" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="submenu-{{ $dropdown_mn }}" x-show="!collapsed"
                    class="ml-6 mt-1 space-y-1 {{ in_array(Request::path(), $mn->path_sub_menu_list) ? '' : 'hidden' }}"">
                    @php $nosbmn = 1 @endphp
                    @foreach ($mn->sub_menu_list as $sbmn1)
                    <a href=" {{ url($sbmn1->path) }}"
                        class="ml-1 block p-2 text-sm rounded hover:bg-primary hover:shadow-lg hover:shadow-primary hover:text-white dark:hover:bg-gray-700 {{ $sbmn1->path == Request::path() ? 'bg-primary shadow-lg shadow-primary text-white' : 'text-gray-500' }}">
                        <i class="{{ $sbmn1->icon }} w-2 h-2"></i>
                        <span class="ml-3" sidebar-toggle-item>{{ $sbmn1->menu }}</span>
                    </a>
                    @endforeach
                </div>
                <div x-show="collapsed && open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-x-2"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 translate-x-2"
                    class="absolute left-full top-0 ml-2 w-52 bg-white text-gray-800 rounded shadow-lg py-2 space-y-1 z-50">
                    @php $nosbmn = 1 @endphp
                    @foreach ($mn->sub_menu_list as $sbmn1)
                    <a href=" {{ url($sbmn1->path) }}"
                        class="ml-1 block p-2 text-sm rounded hover:bg-primary hover:shadow-lg hover:shadow-primary hover:text-white dark:hover:bg-gray-700 {{ $sbmn1->path == Request::path() ? 'bg-primary shadow-lg shadow-primary text-white' : 'text-gray-500' }}">
                        <i class="{{ $sbmn1->icon }} w-2 h-2"></i>
                        <span class="ml-2" sidebar-toggle-item>{{ $sbmn1->menu }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </li>
        @endif
        @endforeach
    </ul>
</nav>
