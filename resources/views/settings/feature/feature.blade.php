@section('title', 'Pengaturan Feature')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pengaturan Feature
        </h2>
    </x-slot>

    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="overflow-x-auto mt-5">
                <table class="min-w-full border border-gray-300 divide-y divide-gray-200 rounded-lg shadow-sm">
                    <thead class="bg-gray-100 text-left text-sm font-semibold text-gray-500">
                        <tr>
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Icon</th>
                            <th class="px-4 py-3">Judul</th>
                            <th class="px-4 py-3">Deskripsi</th>
                            <th class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-sm text-gray-800">
                        @foreach ($dataSlider as $index => $post)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $index + 1 }}</td>
                            <td class="px-4 py-2">
                                <img src="{{ $post->file_gambar }}" class="max-h-32">
                            </td>
                            <td class="px-4 py-2">{{ $post->judul }}</td>
                            <td class="px-4 py-2">
                                {{ $post->keterangan }}
                            </td>
                            <td class="px-4 py-2 align-middle">
                                <a href="{{ url('pengaturan/halaman-awal/feature?edit=true&id='.$post->id) }}"
                                    class="text-white bg-yellow-500 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs p-2 text-center inline-flex items-center me-2 dark:bg-yellow-600 dark:hover:bg-yellow-500 dark:focus:ring-yellow-800">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
