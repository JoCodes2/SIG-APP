@extends('Pages.master')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-2">
        Galeri
        <span class="text-blue-500">Kegiatan</span>
    </h1>
    <p class="text-center text-gray-600 mb-8">
        Dokumentasi berbagai kegiatan dan momen spesial yang telah berlangsung di gereja kita.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Item 1 -->
        <div class="relative">
            <img src="https://placehold.co/600x400" alt="Interior of a church with tall arched windows" class="w-full h-full object-cover rounded-lg" />
            <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-2 rounded-b-lg">
                Ibadah Minggu
            </div>
        </div>

        <!-- Item 2 -->
        <div class="relative">
            <img src="https://placehold.co/600x400" alt="Modern building with blue and red panels" class="w-full h-full object-cover rounded-lg" />
            <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-2 rounded-b-lg">
                Sekolah Minggu
            </div>
        </div>

        <!-- Item 3 -->
        <div class="relative">
            <img src="https://placehold.co/600x400" alt="Modern building with white facade and orange windows" class="w-full h-full object-cover rounded-lg" />
            <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-2 rounded-b-lg">
                Perayaan Natal
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection
