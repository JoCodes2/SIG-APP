@extends('Layouts.Base')

@section('content')
    <section class="home" id="home">
        <div class="container pt-5 mt-5" data-aos="zoom-in">
            <div class="row pt-2 justify-content-center">
                <div class="col-md-5 d-flex justify-content-center align-items-center">
                    <div class="bg-home ">
                        <img src="{{ asset('assets/assets/home2.png') }}" class="img-fluid img" alt="">
                    </div>
                </div>
                <div class="col-md-5 d-flex flex-column justify-content-center align-items-start">
                    <p class="text-hai font-popins">Hallo 👋
                        <span class="sky px-2">
                            @auth
                                {{ auth()->user()->name }}
                            @endauth
                        </span>
                    </p>
                    <h1 class="title-home font-kanit sky">Selamat Datang di Sistem Informasi Gereja Kalvari Palu
                    </h1>
                    <p class="intro-junior font-popins ">
                        Sistem informasi ini dibuat untuk wadah informasi mulai dari jadwal,dokumentasi hingga anggota
                        jema'at
                    </p>
                </div>
            </div>
    </section>
@endsection

@section('scripts')
@endsection
