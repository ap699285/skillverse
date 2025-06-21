<div x-show="open" x-transition @keydown.escape.window="open = false"
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" style="display: none;">
    <div @click.away="open = false" class="bg-white w-full max-w-xl p-6 rounded-lg shadow-lg relative">
        <!-- Konten Modal -->
        <h2 class="text-xl font-semibold mb-4">Judul Modal</h2>
        <p class="text-gray-700 mb-4">Isi modalnya bisa apapun, termasuk form, teks,
            dll.</p>

        <!-- Tombol Tutup -->
        <button @click="open = false" class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl">
            &times;
        </button>

        <div class="mt-4 text-right">
            <button @click="open = false" class="bg-blue-600 text-white px-4 py-2 rounded">
                Tutup
            </button>
        </div>
    </div>
</div>
