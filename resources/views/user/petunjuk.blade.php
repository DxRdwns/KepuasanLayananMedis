@extends('user.layout.layout')
@section('content')
    <section class="section-padding pb-0" id="timeline">
        <div class="container">
            <div class="row">

                <h2 class="text-center mb-lg-5 mb-4">Petunjuk</h2>

                <div class="timeline">
                    <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                        <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                            <h3 class=" text-light">Beranda</h3>

                            <p>Halaman utama yang menyajikan informasi tentang tujuan survei, cara memberikan umpan balik,
                                dan manfaat dari partisipasi pengguna.</p>
                        </div>

                        <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                            <i class="bi-patch-check-fill timeline-icon"></i>
                        </div>

                        <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">

                        </div>
                    </div>

                    <div
                        class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                        <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                            <h3 class=" text-light">Tentang</h3>

                            <p>Halaman atau bagian di sebuah website yang memberikan informasi singkat mengenai layanan
                                website ini.</p>
                        </div>

                        <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                            <i class="bi-book timeline-icon"></i>
                        </div>

                        <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">

                        </div>
                    </div>

                    <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                        <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                            <h3 class=" text-light">Petunjuk</h3>

                            <p>Bagian dalam website yang memberikan panduan langkah-langkah kepada pengguna untuk membantu
                                mereka memahami cara menggunakan fitur atau layanan yang tersedia.</p>
                        </div>

                        <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                            <i class="bi-file-medical timeline-icon"></i>
                        </div>

                        <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">

                        </div>
                    </div>

                    <div
                        class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                        <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                            <h3 class=" text-light">Login</h3>

                            <p>Berisi halaman admin untuk mengatur kriteria dan subkriteria dari kepuasan layanan
                            </p>

                        </div>

                        <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                            <i class="bi-globe timeline-icon"></i>
                        </div>

                        <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
