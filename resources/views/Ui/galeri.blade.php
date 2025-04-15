@extends('Pages.master')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center mb-4">Galeri <span class="text-blue-500">Kegiatan</span></h1>
        <p class="text-center text-gray-600 mb-8">Dokumentasi berbagai kegiatan dan momen spesial yang telah berlangsung di
            gereja kita.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4" id="galeriContainer">
            <!-- Card galeri akan dimasukkan lewat jQuery -->
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            function getData() {
                $.ajax({
                    url: `/v1/content/galeri`,
                    method: "GET",
                    dataType: "json",
                    success: function(response) {
                        let cardHTML = "";
                        $.each(response.data, function(index, item) {
                            cardHTML += `
                                <div class="bg-white rounded-lg shadow overflow-hidden relative">
                                    <img src="/uploads/img-content/${item.image}" alt="${item.title}" class="w-full h-48 object-cover">
                                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-60 text-white px-4 py-2">
                                        <h2 class="text-sm font-semibold truncate">${item.title}</h2>
                                        <p class="text-xs">${item.date_upload}</p>
                                    </div>
                                </div>
                            `;
                        });
                        $("#galeriContainer").html(cardHTML);
                    },
                    error: function() {
                        console.log("Gagal mengambil data dari server");
                    }
                });
            }

            getData();
        });
    </script>
@endsection
