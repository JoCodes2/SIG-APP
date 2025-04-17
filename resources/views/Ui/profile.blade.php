@extends('Pages.master')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Judul Profil -->
    <div class="text-center">
        <h1 class="text-3xl font-bold">Profil <span class="text-blue-500">Gereja</span></h1>
    </div>

    <!-- Deskripsi Profil Gereja -->
    <div class="mt-10 space-y-6">
         <h2 class="text-2xl font-bold text-blue-600 mb-2">Profile Gereja</h2>

        <div class="text-gray-800 text-[17px] leading-relaxed space-y-1">
            <p><span class="font-semibold text-blue-600">Nama Gereja:</span> Gereja Sidang Jemaat Allah Kalvari Palu (GSJA Kalvari Palu)</p>
            <p><span class="font-semibold text-blue-600">Tahun Berdiri:</span> 1970</p>
            <p><span class="font-semibold text-blue-600">Gembala:</span> Ibu Pdt. Marcela Neti Malaha, S.Th</p>
            <p><span class="font-semibold text-blue-600">Alamat:</span> Jl. Tanjung Manimbaya No.114</p>
        </div>

        <div>
            <h3 class="text-xl font-bold text-teal-700 mb-1">Visi Gereja</h3>
            <p class="text-gray-700 italic border-l-4 border-teal-400 pl-4">
                Membangun Jemaat yang <span class="font-semibold text-teal-600">BERINTEGRITAS</span> dan hidup dalam
                <span class="font-semibold text-teal-600">KEKELUARGAAN</span> untuk mencapai
                <span class="font-bold text-teal-800">1000 jiwa</span>.
            </p>
        </div>

        <div>
            <h3 class="text-xl font-bold text-yellow-600 mb-1">Misi Gereja</h3>
            <p class="text-gray-700 italic border-l-4 border-yellow-400 pl-4">
                Memenangkan jiwa bagi Tuhan melalui
                <span class="font-semibold text-yellow-600">KETELADANAN</span> hidup dan
                <span class="font-semibold text-yellow-600">PEMBERITAAN INJIL</span> secara dinamis
                dengan kekuatan <span class="font-bold text-yellow-700">Roh Kudus</span>.
            </p>
        </div>

        <div>
            <h3 class="text-xl font-bold text-pink-600 mb-1">Core Value</h3>
            <ul class="list-disc list-inside text-gray-800 font-medium ml-2">
                <li><span class="text-pink-600">CINTA TUHAN</span></li>
                <li><span class="text-pink-600">RENDAH HATI</span></li>
                <li><span class="text-pink-600">JUJUR</span></li>
                <li><span class="text-pink-600">RAJIN</span></li>
            </ul>
        </div>
    </div>


    <!-- Sejarah Gereja -->
    <div class="mt-6">
        <h2 class="text-2xl font-bold text-blue-600 mb-2">Sejarah Gereja</h2>
        <p class="text-gray-700 leading-relaxed">
            Gereja Sidang Jemaat Allah Kalvari Palu dirintis pada Tahun 1970 oleh Pendeta Raurau yang berasal dari Beteleme, beliau adalah lulusan Sekolah Alkitab Minahasa yang sekarang dikenal STT Parakletos di Tomohon. Pada awal memulai Pelayanan belum ada jemaat yang bergabung, setelah bertemu teman lama bapak Ta'ungge Kolubo mereka memulai persekutuan, pelayanan pertama yang dilakukan adalah pelayanan sekolah minggu di rumah bapak Ta'ungge Kolubu yang terletak di jalan maesa, setelah itu pelayan terus dilakukan sampai ada beberapa jemaat yang ikut bergabung, kegiatan ibadah dilaksanakan di rumah salah satu jemaat pak Kairupan di jalan pemuda. Pada akhir 70an membeli tanah di jalan tanjung manimbaya dan di memulai pembangunan gedung gereja. Di tahun 1986 Sekolah Alkitab Maranata poso yang di buka oleh keluarga misionaris gsja bapak Darell Wood pindah ke kota palu dan melaksanan perkuliahan di gedung gereja dan pelayanan mulai berkembang. Pada awal di bangun nama gereja ini adalah GSJA jl tanjung manimbaya dan di resmikan oleh bapak gubernur H. Abdul Azis Lamadjido, SH Pada tanggal 1 juni 1990. Kemudian di tahun 1993 ibu gembala meninggal dan pada tahun 1996 bapak gembala bapak L Raurau meninggal. Dan pelayanan dilanjutkan oleh ibu pendeta Marcela Neti Malaha yang adalah wakil gembala dari Tahun 1992. Pada tahun 2000 pertama kali di adakan ulang tahun gereja maka gereja ini berubah nama menjadi GSJA KALVARI PALU, dan pelayanan terus berjalan sampai sekarang dengan total jemaat 200 lebih
        </p>
    </div>

    <!-- Statistik Jemaat -->
   <div class="mt-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Baris Pertama (4 Item) -->
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

    <!-- Baris Kedua (3 Item - center) -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-6 justify-center">
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <i class="fas fa-user-friends text-blue-500 text-3xl mb-4"></i>
            <h2 class="text-xl font-semibold">Kaum Pria</h2>
            <p class="text-blue-500 text-3xl font-bold" id="totalMan">0</p>
            <p class="text-gray-500">Pelayan tangguh di samudra iman</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <i class="fas fa-user-friends text-blue-500 text-3xl mb-4"></i>
            <h2 class="text-xl font-semibold">Kaum Wanita</h2>
            <p class="text-blue-500 text-3xl font-bold" id="totalGirl">0</p>
            <p class="text-gray-500">Pelita kasih di setiap pelayanan</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <i class="fas fa-user-friends text-blue-500 text-3xl mb-4"></i>
            <h2 class="text-xl font-semibold">Anak Sekolah Minggu</h2>
            <p class="text-blue-500 text-3xl font-bold" id="totalChild">0</p>
            <p class="text-gray-500">Benih iman yang tumbuh di tepian harapan</p>
        </div>
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
            console.log(response);

            $('#totalPemuda').text(response.total_pemuda || 0);
            $('#totalPendeta').text(response.total_pendeta || 0);
            $('#totalPengurus').text(response.total_pengurus || 0);
            $('#totalJemaat').text(response.total_jemaat || 0);
            $('#totalMan').text(response.total_pria || 0);
            $('#totalGirl').text(response.total_wanita || 0);
            $('#totalChild').text(response.total_child || 0);
        },
        error: function () {
            console.log("eror");
        }
    });
});

</script>
@endsection
