@extends('Layouts.Base')

@section('content')
    <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h3 class="m-0 font-weight-bold">
                <i class="fa-solid fa-book pr-2"></i> Member
            </h3>
            <button class="btn btn-primary btn-sm" id="myBtn"><i class="fas fa-plus"></i> Tambah Member</button>
        </div>

        <div class="card-body py-2">
            <div class="py-3">
                <h6>Daftar Member</h6>
                <table id="dataMember" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Status Keanggotaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr>
                            <td colspan="9" class="text-center">Memuat data...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah/Edit -->
    <div class="modal fade" id="upsertDataModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="upsertDataForm">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">
                        <div class="row">
                            <!-- Kiri: 4 input -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                    <small id="name-error" class="text-danger"></small>
                                </div>

                                <div class="mb-3">
                                    <label for="date_birth" class="form-label">Tanggal Lahir</label>
                                    <input type="date" id="date_birth" name="date_birth" class="form-control">
                                    <small id="date_birth-error" class="text-danger"></small>
                                </div>

                                <div class="mb-3">
                                    <label for="place_birth" class="form-label">Tempat Lahir</label>
                                    <input type="text" id="place_birth" name="place_birth" class="form-control">
                                    <small id="place_birth-error" class="text-danger"></small>
                                </div>

                                <div class="mb-3">
                                    <label for="age" class="form-label">Umur</label>
                                    <input type="number" id="age" name="age" class="form-control" min="0"
                                        max="120" step="1">
                                    <small id="age-error" class="text-danger"></small>
                                </div>

                            </div>

                            <!-- Kanan: 3 input -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" id="address" name="address" class="form-control">
                                    <small id="address-error" class="text-danger"></small>
                                </div>

                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="">Pilih</option>
                                        <option value="widow">Janda</option>
                                        <option value="singel">Lajang</option>
                                        <option value="marry">Menikah</option>
                                        <option value="widower">Duda</option>
                                    </select>
                                    <small id="status-error" class="text-danger"></small>
                                </div>

                                <div class="mb-3">
                                    <label for="status_member">Status Keanggotaan</label>
                                    <select class="form-control" name="status_member" id="status_member">
                                        <option value="">Pilih</option>
                                        <option value="youth">Pemuda</option>
                                        <option value="pastor">Pendeta</option>
                                        <option value="administrator">Pengurus</option>
                                    </select>
                                    <small id="status_member-error" class="text-danger"></small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" id="simpanData" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            function getData() {
                $.ajax({
                    url: `/v1/member`,
                    method: "GET",
                    dataType: "json",
                    success: function(response) {
                        console.log(response)
                        let tableBody = "";
                        $.each(response.data, function(index, item) {
                            // Ubah status ke bahasa Indonesia
                            let status = "";
                            if (item.status === "widow") status = "Janda";
                            else if (item.status === "singel") status = "Lajang";
                            else if (item.status === "marry") status = "Menikah";
                            else if (item.status === "widower") status = "Duda";
                            else status = item.status; // fallback

                            // Ubah status_member ke bahasa Indonesia
                            let statusMember = "";
                            if (item.status_member === "youth") statusMember = "Pemuda";
                            else if (item.status_member === "pastor") statusMember = "Pendeta";
                            else if (item.status_member === "administrator") statusMember =
                                "Pengurus";
                            else statusMember = item.status_member;

                            tableBody += "<tr>";
                            tableBody += "<td>" + (index + 1) + "</td>";
                            tableBody += "<td>" + item.name + "</td>";
                            tableBody += "<td>" + item.date_birth + "</td>";
                            tableBody += "<td>" + item.place_birth + "</td>";
                            tableBody += "<td>" + item.age + "</td>";
                            tableBody += "<td>" + item.address + "</td>";
                            tableBody += "<td>" + status + "</td>"; // <- sudah diubah
                            tableBody += "<td>" + statusMember + "</td>"; // <- sudah diubah

                            tableBody += "<td>";
                            tableBody +=
                                "<button type='button' class='btn btn-outline-primary btn-sm edit-btn' data-id='" +
                                item.id + "'><i class='fas fa-edit'></i></button> ";
                            tableBody +=
                                "<button type='button' class='btn btn-outline-danger btn-sm delete-confirm' data-id='" +
                                item.id + "'><i class='fas fa-trash'></i></button>";
                            tableBody += "</td>";
                            tableBody += "</tr>";
                        });

                        $("#dataMember tbody").html(tableBody);

                        $('#dataMember').DataTable({
                            destroy: true,
                            paging: true,
                            searching: true,
                            ordering: true,
                            info: true,
                            order: []
                        });
                    },
                    error: function() {
                        console.log("Gagal mengambil data dari server");
                    }
                });
            }

            getData();

            // create
            $(document).on('click', '#simpanData', function(e) {
                $('.text-danger').text('');
                e.preventDefault();

                let id = $('#id').val();
                let formData = new FormData($('#upsertDataForm')[0]);
                let url = id ? `/v1/member/update/${id}` : '/v1/member/create';
                let method = id ? 'POST' : 'POST';

                loadingAllert();

                $.ajax({
                    type: method,
                    url: url,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response);
                        Swal.close();

                        if (response.code === 422) { // Jika validasi gagal
                            let errors = response.errors;
                            $.each(errors, function(key, value) {
                                $('#' + key + '-error').text(value[0]);
                            });
                        } else if (response.code === 200 || response.status === "success") {
                            successAlert('Data berhasil disimpan!');
                            reloadBrowsers();
                        } else {
                            errorAlert();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        Swal.close();
                        errorAlert();
                    }
                });
            });

            $(document).on('click', '.edit-btn', function() {
                let id = $(this).data('id');
                $.ajax({
                    url: `/v1/member/get/${id}`,
                    method: "GET",
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        $('#upsertDataModal').modal('show');
                        $('#id').val(response.data.id);
                        $('#name').val(response.data.name);
                        $('#date_birth').val(response.data.date_birth);
                        $('#place_birth').val(response.data.place_birth);
                        $('#age').val(response.data.age);
                        $('#address').val(response.data.address);
                        $('#status').val(response.data.status);
                        $('#status_member').val(response.data.status_member);


                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching data for edit:', error);
                    }
                });
            });

            $(document).on('click', '.delete-confirm', function() {
                let id = $(this).data('id');

                // Function to delete data
                function deleteData() {
                    $.ajax({
                        type: 'DELETE',
                        url: `/v1/member/delete/${id}`,
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            if (response.code === 200 || response.status === "success") {
                                successAlert('Data berhasil dihapus!');

                                // Tunggu sebentar sebelum reload
                                setTimeout(function() {
                                    location
                                        .reload(); // Reload browser setelah data terhapus
                                }, 1500);
                            } else {
                                errorAlert();
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', xhr.responseText);
                            errorAlert();
                        }
                    });
                }

                // Show confirmation alert
                confirmAlert('Apakah Anda yakin ingin menghapus data?', deleteData);
            });


            // messeage alert
            // alert success message
            function successAlert(message) {
                Swal.fire({
                    title: 'Berhasil!',
                    text: message,
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1000,
                })
            }

            // alert error message
            function errorAlert() {
                Swal.fire({
                    title: 'Error',
                    text: 'Terjadi kesalahan!',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 1000,
                });
            }

            function reloadBrowsers() {
                setTimeout(function() {
                    location.reload();
                }, 1500);
            }


            function confirmAlert(message, callback) {
                Swal.fire({
                    title: '<span style="font-size: 22px"> Konfirmasi!</span>',
                    html: message,
                    showCancelButton: true,
                    showConfirmButton: true,
                    cancelButtonText: 'Tidak',
                    confirmButtonText: 'Ya',
                    reverseButtons: true,
                    confirmButtonColor: '#48ABF7',
                    cancelButtonColor: '#EFEFEF',
                    customClass: {
                        cancelButton: 'text-dark'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        callback();
                    }
                });
            }

            // loading alert
            function loadingAllert() {
                Swal.fire({
                    title: 'Loading...',
                    text: 'Please wait',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            }

            // Tampilkan modal tambah
            $(document).on('click', '#myBtn', function() {
                $('#upsertDataForm')[0].reset(); // reset form
                $('#id').val('');
                $('#upsertDataModal').modal('show');
            });

            // Reset saat modal ditutup
            $('#upsertDataModal').on('hidden.bs.modal', function() {
                $('#upsertDataForm')[0].reset();
                $('#id').val('');
            });

        });
    </script>
@endsection
