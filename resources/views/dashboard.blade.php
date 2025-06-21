@section('title', 'Dashboard')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-800">Total Pengguna</h3>
                            <svg class="h-6 w-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20v-4m-4 4v-4m-4 4v-4m-4 4v-4m-4 4v-4m0-4a4 4 0 110-8 4 4 0 010 8zM5 12h.01M9 12h.01M13 12h.01M17 12h.01">
                                </path>
                            </svg>
                        </div>
                        {{-- Gunakan data dari controller, contoh: {{ $totalUsers }} --}}
                        <p class="mt-4 text-4xl font-bold text-gray-900">{{ $totalUsers ?? '12.345' }}</p>
                        <p class="mt-2 text-sm text-gray-600">+5% dari bulan lalu</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-800">Pengguna Aktif Hari Ini</h3>
                            <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h.01M17 7h.01M10 7h.01M17 17h.01M10 17h.01M13 17h.01M13 10h.01M17 10h.01M10 10h.01M7 10h.01M7 7h.01M7 17h.01M7 14h.01M10 14h.01M13 14h.01M17 14h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        {{-- Gunakan data dari controller, contoh: {{ $activeUsersToday }} --}}
                        <p class="mt-4 text-4xl font-bold text-green-600">{{ $activeUsersToday ?? '876' }}</p>
                        <p class="mt-2 text-sm text-gray-600">Terakhir diperbarui: 5 menit yang lalu</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-800">Pengguna Baru Bulan Ini</h3>
                            <svg class="h-6 w-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                </path>
                            </svg>
                        </div>
                        {{-- Gunakan data dari controller, contoh: {{ $newUsersThisMonth }} --}}
                        <p class="mt-4 text-4xl font-bold text-blue-600">{{ $newUsersThisMonth ?? '120' }}</p>
                        <p class="mt-2 text-sm text-gray-600">+15% dibandingkan bulan lalu</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-800">Tingkat Retensi User</h3>
                            <svg class="h-6 w-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 12l3-3 3 3 4-4M18 10V6M6 6v4m0 0l-3 3 3 3m0-3h-3a6 6 0 01-6-6V6m0 0h3m-3 0V3m0 3v3m0-3h3m-3 0a6 6 0 016-6h6a6 6 0 016 6v6a6 6 0 01-6 6h-6a6 6 0 01-6-6v-6z">
                                </path>
                            </svg>
                        </div>
                        {{-- Gunakan data dari controller, contoh: {{ $userRetentionRate }} --}}
                        <p class="mt-4 text-4xl font-bold text-purple-600">{{ $userRetentionRate ?? '65%' }}</p>
                        <p class="mt-2 text-sm text-gray-600">Dari pengguna bulan lalu</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-800">Rata-rata Sesi</h3>
                            <svg class="h-6 w-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <p class="mt-4 text-4xl font-bold text-yellow-600">{{ $averageSessionDuration ?? '5m 30s' }}</p>
                        <p class="mt-2 text-sm text-gray-600">Per kunjungan</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 lg:col-span-2">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Top 5 Halaman Paling Sering Dikunjungi</h3>
                        <ul class="list-disc list-inside text-gray-700">
                            <li class="mb-2">/dashboard <span
                                    class="float-right font-medium text-gray-900">12,500</span></li>
                            <li class="mb-2">/products <span class="float-right font-medium text-gray-900">10,200</span>
                            </li>
                            <li class="mb-2">/settings <span class="float-right font-medium text-gray-900">8,900</span>
                            </li>
                            <li class="mb-2">/profile <span class="float-right font-medium text-gray-900">7,100</span>
                            </li>
                            <li>/help <span class="float-right font-medium text-gray-900">5,800</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
