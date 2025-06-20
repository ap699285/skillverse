@section('title', 'Pengaturan Slider')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pengaturan Slider
        </h2>
    </x-slot>

    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="overflow-x-auto mt-5">
                <table class="min-w-full border border-gray-300 divide-y divide-gray-200 rounded-lg shadow-sm">
                    <thead class="bg-gray-100 text-left text-sm font-semibold text-gray-500">
                        <tr>
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Gambar</th>
                            <th class="px-4 py-3">Judul</th>
                            <th class="px-4 py-3">Sub Judul</th>
                            <th class="px-4 py-3">Deskripsi</th>
                            <th class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-sm text-gray-800">
                        @foreach ($dataSlider as $index => $post)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $index + 1 }}</td>
                            <td class="px-4 py-2">
                                <img src="{{ $post->file_gambar }}" class="max-h-56">
                            </td>
                            <td class="px-4 py-2">{{ $post->judul }}</td>
                            <td class="px-4 py-2">{{ $post->sub_judul }}</td>
                            <td class="px-4 py-2">
                                {{ $post->keterangan }}
                            </td>
                            <td class="flex px-4 py-2 align-middle">
                                <button type="button"
                                    class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs p-2 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button type="button"
                                    class="text-white bg-yellow-500 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs p-2 text-center inline-flex items-center me-2 dark:bg-yellow-600 dark:hover:bg-yellow-500 dark:focus:ring-yellow-800">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
