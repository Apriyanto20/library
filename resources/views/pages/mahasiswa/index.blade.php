<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">
                <!-- Form Section -->
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">Form Tambah Mahasiswa</h3>
                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                        @csrf
                        <div class="my-5">
                            <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                NIM</label>
                            <input type="text" id="nim" name="nim"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan NIM" value="{{ $nim }}" required readonly />
                        </div>
                        <div class="mb-5">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nama</label>
                            <input type="text" id="nama" name="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Nama" required autofocus />
                        </div>
                        <div class="mb-5">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Kelas</label>
                            <select
                                class="js-example-placeholder-single js-states form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="kode_kelas" name="kode_kelas" data-placeholder="Pilih Kelas">
                                <option value="">Pilih...</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->kode_kelas }}">{{ $k->kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Alamat</label>
                            <input type="text" id="address" name="address"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Alamat" required />
                        </div>
                        <div class="mb-5">
                            <label for="place_of_birth"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Tempat Lahir</label>
                            <input type="text" id="place_of_birth" name="place_of_birth"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Tempat Lahir" required />
                        </div>
                        <div class="mb-5">
                            <label for="date_birth"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Tanggal Lahir</label>
                            <input type="date" id="date_birth" name="date_birth"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Tempat Lahir" required />
                        </div>
                        <div class="mb-5">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Jenis
                                Kelamin</label>
                            <select
                                class="js-example-placeholder-single js-states form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="gender" name="gender" data-placeholder="Pilih Jenis Kelamin">
                                <option value="">Pilih...</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                No Handphone</label>
                            <input type="text" id="no_hp" name="no_hp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan No HP" required />
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6 mt-5">
                <!-- Data Section -->
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">Data Mahasiswa</h3>
                    <div class="overflow-x-auto">
                        <table class="table table-bordered" id="mahasiswa-datatable">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No.
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        NIM
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        NAMA
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        JURUSAN
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        KELAS
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ALAMAT
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        TEMPAT LAHIR
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        TANGGAL LAHIR
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        JENIS KELAMIN
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        NO HP
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ACTION
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
    {{-- <div class="fixed inset-0  items-center justify-center z-50 hidden" id="sourceModal">
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
                            <label for="kode_jurusan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Jurusan
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="kd_jurusan" name="kode_jurusan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Kode jurusanan...." />
                            <span class="text-sm m-l text-red-500">{{ $errors->first('kode_jurusan') }}</span>
                        </div>
                        <div class="mb-5">
                            <label for="jurusan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">jurusan
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="nm_jurusan" name="jurusan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan jurusanan...." />
                            <span class="text-sm m-l text-red-500">{{ $errors->first('jurusan') }}</span>
                        </div>
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
    </div> --}}
    {{-- END MODAL --}}
    <script>
        $(document).ready(function() {
            console.log('RUN!');
            $('#mahasiswa-datatable').DataTable({
                ajax: {
                    url: 'api/mahasiswa',
                    dataSrc: 'mahasiswa'
                },
                initComplete: function() {
                    // Menengahkan teks di semua sel pada header (baris pertama)
                    $('#mahasiswa-datatable thead th').css('text-align', 'center');
                },
                columns: [{
                    data: 'no',
                    render: (data, type, row, meta) => {
                        return `<div style="text-align:center">${meta.row + 1}.</div>`;;
                    }
                }, {
                    data: 'nim',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'name',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'kelas',
                    render: (data, type, row) => {
                        return data.major.major;
                    }
                }, {
                    data: 'kelas',
                    render: (data, type, row) => {
                        return data.kelas;
                    }
                }, {
                    data: 'address',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'place_of_birth',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'date_birth',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'gender',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: {
                        id: 'id',
                        nim: 'nim'
                    },
                    render: (data, type, row) => {
                        let editUrl =
                            `<button type="button" data-id="${data.id}"
                                                    data-modal-target="sourceModal" data-nim="${data.nim}" data-nik="${data.nim}"
                                                    onclick="editSourceModal(this)"
                                                    class="bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-md text-xs text-white">
                                                   <i class="fas fa-edit"></i>
                                                </button>`;
                        let deleteUrl =
                            `<button onclick="return jurusanDelete('${data.id}','${data.nim}')" class="bg-red-500 hover:bg-bg-red-300 px-3 py-1 rounded-md text-xs text-white"><i class="fas fa-trash"></i></button>`;
                        return `<div style="text-align:center">${editUrl} ${deleteUrl}</div>`;
                    }
                }, ],
            });
        });

        const editSourceModal = (button) => {
            const formModal = document.getElementById('formSourceModal');
            const modalTarget = button.dataset.modalTarget;
            const id = button.dataset.id;
            const jurusan = button.dataset.jurusan;
            const nim = button.dataset.nim;
            console.log(button.dataset);
            let url = "{{ route('major.update', ':id') }}".replace(':id', id);
            let status = document.getElementById(modalTarget);
            document.getElementById('title_source').innerText = `Update
            jurusan ${jurusan}`;
            document.getElementById('kd_jurusan').value = nim;
            document.getElementById('nm_jurusan').value = jurusan;

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

        const jurusanDelete = async (id, name) => {
            let tanya = confirm(`Apakah anda yakin untuk menghapus ${name} ?`);
            if (tanya) {
                await axios.post(`/major/${id}`, {
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
