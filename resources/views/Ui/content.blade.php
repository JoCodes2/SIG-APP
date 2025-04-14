@extends('Pages.master')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center mb-4">
            Konten <span class="text-blue-500">Video</span>
        </h1>
        <p class="text-center text-gray-600 mb-8">
            Saksikan berbagai konten video dari kegiatan-kegiatan gereja, khotbah, dan program spesial lainnya.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4" id="videoContainer">
            <!-- Card video akan dimasukkan lewat jQuery -->
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            function getData() {
                $.ajax({
                    url: `/v1/content/link`,
                    method: "GET",
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        let cardHtml = "";
                        $.each(response.data, function(index, item) {
                            cardHtml += `
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="/uploads/img-content/${item.image}" alt="${item.title}"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-semibold text-gray-800">${item.title}</h2>
                            <p class="text-gray-600">${item.description}</p>
                            <a href="${item.link}" target="_blank"
                                class="mt-4 inline-block bg-red-500 text-white px-4 py-2 rounded-lg text-sm font-medium">
                                <i class="fab fa-youtube"></i> Tonton di YouTube
                            </a>
                        </div>
                    </div>
                `;
                        });
                        $('#videoContainer').html(cardHtml);
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
