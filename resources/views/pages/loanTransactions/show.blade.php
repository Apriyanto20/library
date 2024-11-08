<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6 mt-5">
                <diiv class="flex items-center justify-between">
                    <div>DATA PEMINJAMAN</div>
                    <div>
                        <a href="{{ route('loanTransactions.create') }}">Tambah Data</a>
                    </div>
                </diiv>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6 mt-5">
                <!-- Data Section -->
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold mb-4">Data Peminjaman</h3>
                    <div class="overflow-x-auto">
                        <table class="table table-bordered" id="loanTransactions-datatable">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No.
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        KODE PEMINJAMAN
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        BUKU
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        PAKET PEMINJAMAN
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        STATUS PENGEMBALIAN
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        TANGGAL PENGEMBALIAN
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        DENDA
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
    <script>
        $(document).ready(function() {
            // console.log('RUN!');
            let url = window.location.href;
            let code = url.split('/').pop();
            $('#loanTransactions-datatable').DataTable({
                ajax: {
                    url: `/api/detail/${code}`,
                    dataSrc: 'detail'
                },
                initComplete: function() {
                    // Menengahkan teks di semua sel pada header (baris pertama)
                    $('#loanTransactions-datatable thead th').css('text-align', 'center');
                },
                columns: [{
                        data: 'no',
                        render: (data, type, row, meta) => {
                            return `<div style="text-align:center">${meta.row + 1}.</div>`;;
                        }
                    }, {
                        data: 'id_loan',
                        render: (data, type, row) => {
                            return data;
                        }
                    },
                    {
                        data: 'book',
                        render: (data, type, row) => {
                            return data.tittle;
                        }
                    }, {
                        data: 'loan_package',
                        render: (data, type, row) => {
                            return data.package;
                        }
                    }, {
                        data: 'return_status',
                        render: (data, type, row) => {
                            return data;
                        }
                    },{
                        data: 'receipt_date',
                        render: (data, type, row) => {
                            return data;
                        }
                    }, {
                        data: 'monetary_fine',
                        render: (data, type, row) => {
                            return data;
                        }
                    },{
                        data: {
                            id: 'id',
                            nim: 'nim',
                            code_loan: 'code_loan'
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
                    },
                ],
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
