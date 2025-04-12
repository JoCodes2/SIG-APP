@extends('Pages.master')
@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-4xl font-bold text-center mb-4">Jadwal <span class="text-blue-500">Kegiatan</span></h1>
    <p class="text-center text-gray-600 mb-8">Jadwal kegiatan mingguan gereja untuk membantu Anda merencanakan kehadiran dan partisipasi dalam berbagai kegiatan gereja.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Minggu -->
        <div class="bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
            <div class="bg-blue-500 text-white p-4 rounded-t-lg">
                <h2 class="text-lg font-semibold">Minggu</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center mb-4">
                    <i class="far fa-clock text-blue-500 mr-2"></i>
                    <div>
                        <p class="text-sm text-gray-500">08:00 - 10:00</p>
                        <p class="font-semibold">Ibadah Minggu Pagi</p>
                        <p class="text-sm text-gray-500">Gedung Utama</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <i class="far fa-clock text-blue-500 mr-2"></i>
                    <div>
                        <p class="text-sm text-gray-500">16:00 - 18:00</p>
                        <p class="font-semibold">Ibadah Minggu Sore</p>
                        <p class="text-sm text-gray-500">Gedung Utama</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Senin -->
        <div class="bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
            <div class="bg-blue-500 text-white p-4 rounded-t-lg">
                <h2 class="text-lg font-semibold">Senin</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center">
                    <i class="far fa-clock text-blue-500 mr-2"></i>
                    <div>
                        <p class="text-sm text-gray-500">19:00 - 21:00</p>
                        <p class="font-semibold">Doa Syafaat</p>
                        <p class="text-sm text-gray-500">Ruang Doa</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Selasa -->
        <div class="bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
            <div class="bg-blue-500 text-white p-4 rounded-t-lg">
                <h2 class="text-lg font-semibold">Selasa</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center">
                    <i class="far fa-clock text-blue-500 mr-2"></i>
                    <div>
                        <p class="text-sm text-gray-500">18:30 - 20:30</p>
                        <p class="font-semibold">Kelompok Kecil Dewasa</p>
                        <p class="text-sm text-gray-500">Berbagai Lokasi</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Rabu -->
        <div class="bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
            <div class="bg-blue-500 text-white p-4 rounded-t-lg">
                <h2 class="text-lg font-semibold">Rabu</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center">
                    <i class="far fa-clock text-blue-500 mr-2"></i>
                    <div>
                        <p class="text-sm text-gray-500">18:30 - 20:00</p>
                        <p class="font-semibold">Latihan Paduan Suara</p>
                        <p class="text-sm text-gray-500">Ruang Musik</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kamis -->
        <div class="bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
            <div class="bg-blue-500 text-white p-4 rounded-t-lg">
                <h2 class="text-lg font-semibold">Kamis</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center">
                    <i class="far fa-clock text-blue-500 mr-2"></i>
                    <div>
                        <p class="text-sm text-gray-500">19:00 - 21:00</p>
                        <p class="font-semibold">Pemahaman Alkitab</p>
                        <p class="text-sm text-gray-500">Ruang Serbaguna</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumat -->
        <div class="bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
            <div class="bg-blue-500 text-white p-4 rounded-t-lg">
                <h2 class="text-lg font-semibold">Jumat</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center">
                    <i class="far fa-clock text-blue-500 mr-2"></i>
                    <div>
                        <p class="text-sm text-gray-500">18:30 - 20:30</p>
                        <p class="font-semibold">Ibadah Pemuda</p>
                        <p class="text-sm text-gray-500">Aula Pemuda</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sabtu -->
        <div class="bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
            <div class="bg-blue-500 text-white p-4 rounded-t-lg">
                <h2 class="text-lg font-semibold">Sabtu</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center mb-4">
                    <i class="far fa-clock text-blue-500 mr-2"></i>
                    <div>
                        <p class="text-sm text-gray-500">09:00 - 11:00</p>
                        <p class="font-semibold">Sekolah Minggu</p>
                        <p class="text-sm text-gray-500">Ruang Anak</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <i class="far fa-clock text-blue-500 mr-2"></i>
                    <div>
                        <p class="text-sm text-gray-500">16:00 - 18:00</p>
                        <p class="font-semibold">Persiapan Ibadah Minggu</p>
                        <p class="text-sm text-gray-500">Gedung Utama</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection
