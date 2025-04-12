@extends('Pages.master')

@section('content')
<div class="container mx-auto px-4 py-8">
   <div class="text-center mb-8">
      <h1 class="text-3xl font-bold text-gray-800">
         Konten <span class="text-blue-500">Video</span>
      </h1>
      <p class="text-gray-600">
         Saksikan berbagai konten video dari kegiatan-kegiatan gereja, khotbah, dan program spesial lainnya.
      </p>
   </div>

   <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Video 1 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
         <img src="https://placehold.co/600x400" alt="Interior of a church with tall arches" class="w-full h-48 object-cover">
         <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-800">Khotbah Minggu: Kasih dan...</h2>
            <p class="text-gray-600">Khotbah Pendeta Samuel tentang kasih dan pengharapan dalam kehidupan Kristen.</p>
            <a href="#" class="mt-4 inline-block bg-red-500 text-white px-4 py-2 rounded-lg text-sm font-medium">
               <i class="fab fa-youtube"></i> Tonton di YouTube
            </a>
         </div>
      </div>

      <!-- Video 2 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
         <img src="https://placehold.co/600x400" alt="Modern building with blue and red accents" class="w-full h-48 object-cover">
         <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-800">Pujian dan Penyembahan...</h2>
            <p class="text-gray-600">Rekaman pujian dan penyembahan dari perayaan Paskah tahun lalu.</p>
            <a href="#" class="mt-4 inline-block bg-red-500 text-white px-4 py-2 rounded-lg text-sm font-medium">
               <i class="fab fa-youtube"></i> Tonton di YouTube
            </a>
         </div>
      </div>

      <!-- Video 3 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
         <img src="https://placehold.co/600x400" alt="Modern building with white and blue accents" class="w-full h-48 object-cover">
         <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-800">Kesaksian: Perjalanan Iman</h2>
            <p class="text-gray-600">Kesaksian dari jemaat kita tentang bagaimana iman telah mengubah hidup mereka.</p>
            <a href="#" class="mt-4 inline-block bg-red-500 text-white px-4 py-2 rounded-lg text-sm font-medium">
               <i class="fab fa-youtube"></i> Tonton di YouTube
            </a>
         </div>
      </div>
   </div>
</div>
@endsection

@section('scripts')
<!-- Optional: Script tambahan jika ada -->
@endsection
