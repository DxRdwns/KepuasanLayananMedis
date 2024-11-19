@extends('user.layout.layout')
@section('content')
    <section class="section-padding" id="booking">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <div class="booking-form">

                        <h2 class="text-center mb-lg-3 mb-2">Ingin tahu lebih detail?<br>Awali dengan mengisi biodata Anda!
                        </h2>

                        <form role="form" action="{{ url('/questionnaire/addmember') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Nama Lengkap" required>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="text" name="provinsi" id="provinsi" class="form-control"
                                        placeholder="Asal Provinsi" required>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="kab_kota" id="kota" class="form-control"
                                        placeholder="Asal Kota/Kabupaten" required>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                    <button class="form-control submit" id="submit-button">Mulai</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
