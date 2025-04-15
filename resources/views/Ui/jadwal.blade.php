@extends('Pages.master')
@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-4xl font-bold text-center mb-4">Jadwal <span class="text-blue-500">Kegiatan</span></h1>
    <p class="text-center text-gray-600 mb-8">Jadwal kegiatan mingguan gereja untuk membantu Anda merencanakan kehadiran dan partisipasi dalam berbagai kegiatan gereja.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4" id="jadwalContainer">
        <!-- Card akan dimasukkan lewat jQuery -->
    </div>

</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        const hariIndo = {
            sunday: "Minggu",
            monday: "Senin",
            tuesday: "Selasa",
            wednesday: "Rabu",
            thursday: "Kamis",
            friday: "Jumat",
            saturday: "Sabtu"
        };

        function formatJamAmPm(datetimeStr) {
            const date = new Date(datetimeStr);
            const options = { hour: 'numeric', minute: 'numeric', hour12: true };
            return date.toLocaleTimeString('id-ID', options);
        }

        $.ajax({
            url: '/v1/timetable/',
            method: 'GET',
            dataType: 'json',
            success: function (response) {
                let data = response.data;
                let grouped = {};

                data.forEach(item => {
                    let day = item.day;
                    if (!grouped[day]) grouped[day] = [];
                    grouped[day].push(item);
                });

                const container = $('#jadwalContainer');
                const urutanHari = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

                urutanHari.forEach(day => {
                    if (grouped[day]) {
                        let card = `
                            <div class="bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300">
                                <div class="bg-blue-500 text-white p-4 rounded-t-lg">
                                    <h2 class="text-lg font-semibold">${hariIndo[day]}</h2>
                                </div>
                                <div class="p-4 space-y-4">
                        `;

                        grouped[day].forEach(jadwal => {
                            let waktu = `${formatJamAmPm(jadwal.start_time)} - ${formatJamAmPm(jadwal.end_time)}`;
                            card += `
                                <div class="border-l-4 border-blue-400 pl-2">
                                    <p class="text-sm text-gray-500">${waktu}</p>
                                    <p class="font-semibold">${jadwal.title}</p>
                                    <p class="text-sm text-gray-500">${jadwal.description ?? '-'}</p>
                                </div>
                            `;
                        });

                        card += `
                                </div>
                            </div>
                        `;

                        container.append(card);
                    }
                });
            },
            error: function () {
                $('#jadwalContainer').html('<p class="text-red-500 text-sm">Gagal memuat jadwal kegiatan.</p>');
            }
        });
    });
</script>
@endsection

