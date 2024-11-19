@extends('user.layout.layout')
@section('content')
    <section class="hero" id="hero">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('user/images/rs.jpg') }}" class="img-fluid" alt="">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('user/images/rs1.jpg') }}" class="img-fluid" alt="">
                            </div>


                        </div>
                    </div>

                    <div class="heroText d-flex flex-column justify-content-center">

                        <h1 class="mt-auto mb-2">
                            Better
                            <div class="animated-info">
                                <span class="animated-item">health</span>
                                <span class="animated-item">days</span>
                                <span class="animated-item">lives</span>
                            </div>
                        </h1>

                        <p class="mb-4">Segera Lakukan Penilaian Kepuasan Anda terhadap Layanan Medis yang Anda Terima
                            Saat Ini!</p>

                        <div class="heroLinks d-flex flex-wrap align-items-center">
                            <a class="custom-link me-4" href="{{ url('/questionnaire/question') }}"
                                data-hover="Cek
                                Kualitas Layanan Medis">Cek
                                Kualitas Layanan Medis</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="mb-lg-3 mb-3">Tentang</h2>

                    <p>Sistem Cek Kepuasan Medis merupakan platform digital yang dirancang untuk mengukur dan menganalisis
                        tingkat kepuasan pasien terhadap layanan medis yang diterima. Melalui sistem ini, pasien dapat
                        memberikan feedback secara langsung mengenai pengalaman mereka di fasilitas kesehatan, baik itu dari
                        aspek pelayanan dokter, perawat, fasilitas, hingga proses administrasi.
                    </p>


                </div>

                <div class="col-lg-4 col-md-5 col-12 mx-auto">
                    <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                        <p class="featured-text"><span><a href="{{ url('/questionnaire/question') }}">Cek Kepuasan Layanan
                                    Medis
                                    Sekarang!</a></span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
