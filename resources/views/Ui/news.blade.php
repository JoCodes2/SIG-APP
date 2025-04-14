@extends('Pages.master')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center mb-4">Berita <span class="text-blue-500">Kegiatan</span></h1>
        <p class="text-center text-gray-600 mb-8">Berita kegiatan gereja.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4" id="beritaContainer">
            <!-- Card akan dimasukkan lewat jQuery -->
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            function getData() {
                $.ajax({
                    url: `/v1/content/news`,
                    method: "GET",
                    dataType: "json",
                    success: function(response) {
                        console.log(response)
                        let cardHtml = "";
                        $.each(response.data, function(index, item) {
                            cardHtml += `
                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    <img src="/uploads/img-content/${item.image}" alt="${item.title}" class="w-full h-48 object-cover">
                                    <div class="p-4">
                                        <h3 class="text-lg font-semibold mb-2">${item.title}</h3>
                                        <p class="text-sm text-gray-600 mb-2">${item.description}</p>
                                        <p class="text-xs text-gray-400 mb-2">Upload: ${item.date_upload}</p>
                                    </div>
                                </div>
                            `;
                        });
                        $('#beritaContainer').html(cardHtml);
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
