@extends('user.layout.layout')

@section('content')
    <section class="section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="mb-lg-3 mb-3">Keterangan Hasil Presentase</h2>

                    <p><b>Hi {{ $feedbackData[0]['name'] }}!</b>. Berdasarkan hasil penilaian, tingkat kepuasan anda berada
                        dalam
                        kategori
                        <b>{{ $keterangan }}</b>.
                        Terima
                        kasih atas partisipasi Anda dalam memberikan masukan. Kami akan terus berusaha meningkatkan kualitas
                        layanan kami sesuai dengan umpan balik yang Anda berikan.
                    </p>


                </div>

                <div class="col-lg-4 col-md-5 col-12 mx-auto">
                    <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                        <p class="featured-text"><span class="featured-number">{{ $nilaiDesimal }}%</span>

                        </p>
                    </div>
                </div>


                </tr>

            </div>
        </div>
    </section>
@endsection
