@extends('Pages.master')

@section('content')
<section class="container mx-auto px-4 py-16 flex flex-col md:flex-row items-center">
    <!-- Text Section -->
    <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
            Selamat Datang di <span class="text-blue-600">Gereja</span><span class="text-yellow-500">Info</span>
        </h1>
        <p class="text-gray-700 mb-6 text-lg">
            GerejaInfo adalah sistem informasi digital gereja yang dirancang khusus untuk menyampaikan informasi penting kepada jemaat dengan mudah dan cepat.
        </p>

        <div class="space-y-4 text-left">
            <div class="flex items-start space-x-3">
                <i class="fas fa-calendar-alt text-blue-600 text-xl mt-1"></i>
                <p class="text-gray-600 text-base">Update jadwal ibadah dan kegiatan rutin gereja secara berkala.</p>
            </div>
            <div class="flex items-start space-x-3">
                <i class="fas fa-newspaper text-blue-600 text-xl mt-1"></i>
                <p class="text-gray-600 text-base">Menyampaikan berita atau pengumuman penting kepada jemaat.</p>
            </div>
            <div class="flex items-start space-x-3">
                <i class="fas fa-image text-blue-600 text-xl mt-1"></i>
                <p class="text-gray-600 text-base">Galeri dokumentasi kegiatan gereja yang dapat diakses secara online.</p>
            </div>
            <div class="flex items-start space-x-3">
                <i class="fas fa-share-alt text-blue-600 text-xl mt-1"></i>
                <p class="text-gray-600 text-base">Membagikan informasi dengan lebih terstruktur dan terpusat.</p>
            </div>
        </div>

        <div class="mt-8 space-x-4">
            <a href="/jadwal" class="bg-blue-600 text-white px-5 py-2 rounded shadow hover:bg-blue-700 transition">
                Lihat Jadwal
            </a>
            <a href="/profile" class="border border-blue-600 text-blue-600 px-5 py-2 rounded hover:bg-blue-50 transition">
                Profil Gereja
            </a>
        </div>
    </div>

    <!-- Image Section -->
    <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center">
        <img src="{{ asset('assets/assets/home.png') }}"
             alt="Sistem Informasi Gereja"
             class="rounded-lg shadow-2xl sha w-[400px] h-[400px] object-cover" />
    </div>
</section>
@endsection

@section('scripts')
<!-- Tambahkan jika ingin animasi atau efek -->
@endsection
