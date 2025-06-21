@section('title', 'Pengaturan Feature')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pengaturan Feature
        </h2>
    </x-slot>

    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="row mb-2">
                    @if (\Session::has('message'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        <span class="font-medium">{!! \Session::get('message') !!}</span>
                    </div>
                    @elseif(\Session::has('error'))
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <span class="font-medium">{!! \Session::get('message') !!}</span>
                    </div>
                    @endif
                </div>
                <div class="max-w-xl">
                    @foreach($dataSlider as $ds)
                    <form method="post" action="{{ url('pengaturan/halaman-awal/feature/save') }}" enctype="multipart/form-data"
                        class="mt-6 space-y-6">
                        @csrf
                        <input type="number" name="id" value="{{ $ds->id }}" hidden>
                        <input type="text" name="gambar_old" value="{{ $ds->file_gambar }}" hidden>
                        <!-- Input File -->
                        <div class="mb-5">
                            <label class="block text-sm font-medium text-gray-700">Ganti Gambar <span class="text-red-500">*Gunakan svg/png untuk icon transparan</span></label>
                            <input type="file" name="gambar" id="gambarInput" class="mt-2">
                        </div>

                        <!-- Preview -->
                        <div class="mb-4">
                            <p class="text-sm text-gray-500 mb-1">Preview:</p>
                            <img id="previewImage" src="{{ $ds->file_gambar }}" alt="Preview"
                                class="w-64 h-auto border rounded shadow">
                        </div>

                        <div class="mb-5">
                            <label for="judul"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                            <input type="text" id="judul" name="judul"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $ds->judul }}" required />
                        </div>

                        <div class="mb-5">
                            <label for="keterangan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deksripsi</label>
                            <textarea id="keterangan" name="keterangan" rows="4" value="{{ $ds->keterangan }}"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $ds->keterangan }}</textarea>
                        </div>

                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('gambarInput').addEventListener('change', function (event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.getElementById('previewImage');
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');
            }
        });

    </script>
</x-app-layout>
