@extends('Pages.master')

@section('content')
<div class="container mx-auto  px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-4">
        Berita <span class="text-blue-600">Terbaru</span>
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://placehold.co/600x400" alt="Modern building with colorful windows" class="w-full h-48 object-cover" />
            <div class="p-4">
                <div class="text-gray-500 text-sm mb-2">
                    <i class="far fa-calendar-alt"></i> 12 April 2023
                </div>
                <h2 class="text-lg font-bold mb-2">Perayaan Paskah 2023</h2>
                <p class="text-gray-600 mb-4">
                    Perayaan Paskah tahun ini akan diadakan dengan tema 'Kebangkitan dan Harapan Baru' dengan...
                </p>
                <a href="#" class="text-blue-600 border border-blue-600 rounded-full px-4 py-2 inline-block">
                    Baca Selengkapnya
                </a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://placehold.co/600x400" alt="Dome of a mosque" class="w-full h-48 object-cover" />
            <div class="p-4">
                <div class="text-gray-500 text-sm mb-2">
                    <i class="far fa-calendar-alt"></i> 3 Maret 2023
                </div>
                <h2 class="text-lg font-bold mb-2">Program Bantuan Bencana Alam</h2>
                <p class="text-gray-600 mb-4">
                    Gereja kita mengorganisir program bantuan untuk korban bencana alam di wilayah timur. Mari...
                </p>
                <a href="#" class="text-blue-600 border border-blue-600 rounded-full px-4 py-2 inline-block">
                    Baca Selengkapnya
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://placehold.co/600x400" alt="Night sky with stars" class="w-full h-48 object-cover" />
            <div class="p-4">
                <div class="text-gray-500 text-sm mb-2">
                    <i class="far fa-calendar-alt"></i> 18 Februari 2023
                </div>
                <h2 class="text-lg font-bold mb-2">Retreat Pemuda 2023</h2>
                <p class="text-gray-600 mb-4">
                    Retreat pemuda dengan tema 'Bertumbuh dalam Kristus' akan diadakan di lokasi pegunungan...
                </p>
                <a href="#" class="text-blue-600 border border-blue-600 rounded-full px-4 py-2 inline-block">
                    Baca Selengkapnya
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection
