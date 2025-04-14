@extends('Pages.master')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Judul Profil -->
    <div class="text-center">
        <h1 class="text-3xl font-bold">Profil <span class="text-blue-500">Gereja</span></h1>
    </div>

    <!-- Deskripsi Profil Gereja -->
    <div class="mt-10">
        <h2 class="text-2xl font-bold text-blue-600 mb-2">Profil Gereja</h2>
        <p class="text-gray-700 leading-relaxed">
            Gereja Kasih Kristus merupakan tempat pertumbuhan rohani dan pelayanan yang berfokus pada pengajaran Firman Tuhan, persekutuan yang erat, dan pelayanan kasih kepada sesama. Kami terbuka untuk semua kalangan dan aktif menjangkau komunitas sekitar melalui berbagai kegiatan sosial dan pelayanan.
        </p>
    </div>

    <!-- Sejarah Gereja -->
    <div class="mt-6">
        <h2 class="text-2xl font-bold text-blue-600 mb-2">Sejarah Gereja</h2>
        <p class="text-gray-700 leading-relaxed">
            Gereja ini berdiri sejak tahun 1985, berawal dari sebuah persekutuan kecil di rumah warga yang kemudian berkembang menjadi sebuah gereja dengan ratusan anggota jemaat. Selama bertahun-tahun, gereja ini telah mengalami pertumbuhan dalam hal jumlah jemaat, pelayanan, serta fasilitas, dan terus menjadi tempat bagi banyak orang untuk bertumbuh dalam iman Kristen.
        </p>
    </div>

    <!-- Statistik Jemaat -->
    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <i class="fas fa-users text-blue-500 text-3xl mb-4"></i>
            <h2 class="text-xl font-semibold">Total Jemaat</h2>
            <p class="text-blue-500 text-3xl font-bold" id="totalJemaat">0</p>
            <p class="text-gray-500">Jemaat yang terdaftar</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <i class="fas fa-book text-blue-500 text-3xl mb-4"></i>
            <h2 class="text-xl font-semibold">Pendeta</h2>
            <p class="text-blue-500 text-3xl font-bold" id="totalPendeta">0</p>
            <p class="text-gray-500">Melayani dengan setia</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <i class="fas fa-user-tie text-blue-500 text-3xl mb-4"></i>
            <h2 class="text-xl font-semibold">Pengurus</h2>
            <p class="text-blue-500 text-3xl font-bold" id="totalPengurus">0</p>
            <p class="text-gray-500">Aktif mengorganisir kegiatan</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <i class="fas fa-user-friends text-blue-500 text-3xl mb-4"></i>
            <h2 class="text-xl font-semibold">Pemuda</h2>
            <p class="text-blue-500 text-3xl font-bold" id="totalPemuda">0</p>
            <p class="text-gray-500">Aktif dalam pelayanan</p>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
    $.ajax({
        url: '/v1/member/get-total-members',
        method: 'GET',
        dataType: 'json',
        success: function (response) {
            $('#totalPemuda').text(response.total_pemuda || 0);
            $('#totalPendeta').text(response.total_pendeta || 0);
            $('#totalPengurus').text(response.total_pengurus || 0);
            $('#totalJemaat').text(response.total_jemaat || 0);
        },
        error: function () {
            console.log("eror");
        }
    });
});

</script>
@endsection
