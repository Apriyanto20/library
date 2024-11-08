<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('book') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">
                <!-- Data Section -->
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">Detail book</h3>
                    <div class="flex items-center justify-between">
                        <div class="">
                            <div class="flex gap-1">
                                <div>Judul</div>
                                <div>:</div>
                                <div>{{ $detailBook->tittle }}</div>
                            </div>
                            <div class="flex gap-1">
                                <div>Pengarang</div>
                                <div>:</div>
                                <div>{{ $detailBook->author }}</div>
                            </div>
                            <div class="flex gap-1">
                                <div>Penerbit</div>
                                <div>:</div>
                                <div>{{ $detailBook->publisher }}</div>
                            </div>
                            <div class="flex gap-1">
                                <div>Tempat Terbit</div>
                                <div>:</div>
                                <div>{{ $detailBook->place_of_publication }}</div>
                            </div>
                            <div class="flex gap-1">
                                <div>Tahun Terbit</div>
                                <div>:</div>
                                <div>{{ $detailBook->publication_year }}</div>
                            </div>
                            <div class="flex gap-1">
                                <div>Rekomendasi Fakultas</div>
                                <div>:</div>
                                <div>{{ $detailBook->fakultas->fakultas }}</div>
                            </div>
                            <div class="flex gap-1">
                                <div>Genre</div>
                                <div>:</div>
                                <div>{{ $detailBook->genres->genre }}</div>
                            </div>
                            <div class="flex gap-1">
                                <div>Sumber</div>
                                <div>:</div>
                                <div>{{ $detailBook->sources->source }}</div>
                            </div>
                            <div class="flex gap-1">
                                <div>Kode Rak Buku</div>
                                <div>:</div>
                                <div>{{ $detailBook->bookshelf }}</div>
                            </div>
                            <div class="flex gap-1">
                                <div>Sinopsis</div>
                                <div>:</div>
                                <div>{{ $detailBook->synopsis }}</div>
                            </div>
                            <div class="flex gap-1">
                                <div>Status Buku</div>
                                <div>:</div>
                                <div>{{ $detailBook->books_status }}</div>
                            </div>
                        </div>
                        <div class="border border-2 rounded-xl p-4">
                            <div>Cover Buku</div>
                            <img src="{{ url('coverBook/' . $detailBook->cover) }}" alt="{{ $detailBook->cover }}"
                                class="w-64 h-auto">
                        </div>
                        <div class="border border-2 rounded-xl p-4">
                            <div>Ebook</div>
                            <iframe src="{{ url('ebook/' .$detailBook->ebook) }}" frameborder="0"
                                width="100%" height="600px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
