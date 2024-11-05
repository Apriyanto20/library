<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('book') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">
                <!-- Form Section -->
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">Form Tambah book</h3>
                    <form action="{{ route('book.store') }}" method="POST">
                        @csrf
                        <div class="my-5">
                            <label for="kode_book" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Kode book</label>
                            <input type="text" id="kode_book" name="kode_book"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" value="{{ $book }}" readonly required />
                        </div>
                        <div class="mb-5">
                            <label for="tittle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                tittle</label>
                            <input type="text" id="tittle" name="tittle"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Nama tittle" required autofocus />
                        </div>
                        <div class="mb-5">
                            <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                author</label>
                            <input type="text" id="author" name="author"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Nama author" required autofocus />
                        </div>
                        <div class="mb-5">
                            <label for="major"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Major
                                <span class="text-red-500">*</span></label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="major" data-placeholder="Pilih major">
                                <option value="">Pilih...</option>
                                {{-- @foreach ($major as $j)
                                        <option value="{{ $j->kode_major }}">{{ $j->major }}</option>
                                    @endforeach --}}
                            </select>
                            <span class="text-sm m-l text-red-500">{{ $errors->first('fakultas') }}</span>
                        </div>
                        <div class="mb-5">
                            <label for="book" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                book</label>
                            <input type="text" id="book" name="book"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Nama book" required autofocus />
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">
                <!-- Data Section -->
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">Data book</h3>
                    <div class="overflow-x-auto">
                        <table class="table table-bordered" id="book-datatable">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No.
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kode book
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tittle
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Author
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        publisher
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        place_of_publication
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        publication_year
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        fakultas
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        genre
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        source
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        bookshelf
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        synopsis
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ebook
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        books_status
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- MODAL --}}
    <div class="fixed inset-0  items-center justify-center z-50 hidden" id="sourceModal">
        <div class="fixed inset-0 bg-black opacity-50"></div>
        <div class="fixed inset-0 flex items-center justify-center">
            <div class="w-full md:w-1/2 relative bg-white rounded-lg shadow mx-5">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900" id="title_source">
                        Tambah Sumber Database
                    </h3>
                    <button type="button" onclick="sourceModalClose(this)" data-modal-target="sourceModal"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                        data-modal-hide="defaultModal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form method="POST" id="formSourceModal">
                    @csrf
                    <div class="flex flex-col  p-4 space-y-6">
                        <div class="mb-5">
                            <label for="kode_book"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode book
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="kode_book_edit" name="kode_book"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Kode book...." />
                            <span class="text-sm m-l text-red-500">{{ $errors->first('kode_book') }}</span>
                        </div>
                        <div class="mb-5">
                            <label for="book"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">book
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="nm_book" name="book"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan bookan...." />
                            <span class="text-sm m-l text-red-500">{{ $errors->first('book') }}</span>
                        </div>
                    </div>
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                        <select class="js-example-placeholder-single js-states form-control w-[670px] m-6"
                            id="kode_major" name="kode_major" data-placeholder="Pilih Jurusan">
                            <option value="">Pilih...</option>
                            {{-- @foreach ($major as $j)
                                <option value="{{ $j->kode_major }}">{{ $j->jurusan }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit" id="formSourceButton"
                            class="bg-green-400 m-2 w-40 h-10 rounded-xl hover:bg-green-500">Simpan</button>
                        <button type="button" data-modal-target="sourceModal" onclick="sourceModalClose(this)"
                            class="bg-red-500 m-2 w-40 h-10 rounded-xl text-white hover:shadow-lg hover:bg-red-600">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL --}}
    <script>
        $(document).ready(function() {
            console.log('RUN!');
            $('#book-datatable').DataTable({
                ajax: {
                    url: 'api/book',
                    dataSrc: 'book'
                },
                initComplete: function() {
                    // Menengahkan teks di semua sel pada header (baris pertama)
                    $('#book-datatable thead th').css('text-align', 'center');
                },
                columns: [{
                    data: 'no',
                    render: (data, type, row, meta) => {
                        return `<div style="text-align:center">${meta.row + 1}.</div>`;;
                    }
                }, {
                    data: 'kode_book',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'tittle',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'author',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'publisher',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'place_of_publication',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'publication_year',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'fakultas',
                    render: (data, type, row) => {
                        return data.fakultas;
                    }
                }, {
                    data: 'genres',
                    render: (data, type, row) => {
                        return data.genre;
                    }
                }, {
                    data: 'sources',
                    render: (data, type, row) => {
                        return data.source;
                    }
                }, {
                    data: 'bookshelf',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'synopsis',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'ebook',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'books_status',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: {
                        id: 'id',
                        name: 'book'
                    },
                    render: (data, type, row) => {
                        let editUrl =
                            `<button type="button" data-id="${data.id}"
                                                    data-modal-target="sourceModal" data-kode_book="${data.kode_book}" data-name="${data.book}"
                                                    onclick="editSourceModal(this)"
                                                    class="bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-md text-xs text-white">
                                                   <i class="fas fa-edit"></i>
                                                </button>`;
                        let deleteUrl =
                            `<button onclick="return bookDelete('${data.id}','${data.book}')" class="bg-red-500 hover:bg-bg-red-300 px-3 py-1 rounded-md text-xs text-white"><i class="fas fa-trash"></i></button>`;
                        return `<div style="text-align:center"> ${editUrl} ${deleteUrl}</div>`;
                    }
                }, ],
            });
        });

        const editSourceModal = (button) => {
            const formModal = document.getElementById('formSourceModal');
            const modalTarget = button.dataset.modalTarget;
            const id = button.dataset.id;
            const kode_book = button.dataset.kode_book;
            const name = button.dataset.name;
            // const id = button.dataset.id;
            console.log(button.dataset);
            let url = "{{ route('book.update', ':id') }}".replace(':id', id);
            let status = document.getElementById(modalTarget);
            document.getElementById('title_source').innerText = `Update
            book ${name}`;
            document.getElementById('kode_book_edit').value = kode_book;
            document.getElementById('nm_book').value = name;

            document.getElementById('formSourceButton').innerText = 'Simpan';
            document.getElementById('formSourceModal').setAttribute('action', url);
            let csrfToken = document.createElement('input');
            csrfToken.setAttribute('type', 'hidden');
            csrfToken.setAttribute('value', '{{ csrf_token() }}');
            formModal.appendChild(csrfToken);

            let methodInput = document.createElement('input');
            methodInput.setAttribute('type', 'hidden');
            methodInput.setAttribute('name', '_method');
            methodInput.setAttribute('value', 'PATCH');
            formModal.appendChild(methodInput);

            status.classList.toggle('hidden');
        }

        const sourceModalClose = (button) => {
            const modalTarget = button.dataset.modalTarget;
            let status = document.getElementById(modalTarget);
            status.classList.toggle('hidden');
        }

        const bookDelete = async (id, name) => {
            let tanya = confirm(`Apakah anda yakin untuk menghapus ${name} ?`);
            if (tanya) {
                await axios.post(`/book/${id}`, {
                        '_method': 'DELETE',
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    })
                    .then(function(response) {
                        // Handle success
                        location.reload();
                    })
                    .catch(function(error) {
                        // Handle error
                        alert('Error deleting record');
                        console.log(error);
                    });
            }
        }
    </script>
</x-app-layout>
