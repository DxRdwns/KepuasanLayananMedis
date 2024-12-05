@extends('user.layout.layout')
@section('content')
    <section class="section-padding" id="booking">
        <div class="container">
            <div class="row">
                <h2 class="text-center mb-lg-3 mb-2">Cek Kepuasan Layanan
                </h2>
                <p class="text-center mb-lg-3 mb-2">Isikan Biodata Anda</p>


                <div class="col-lg-12 col-12 mx-auto">
                    <div class="booking-form">
                        <form action="{{ route('feedback.store') }}" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Nama Lengkap" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <input type="number" name="phone" id="phone" class="form-control"
                                        placeholder="No Telp" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="number" name="nik" id="nik" class="form-control"
                                        placeholder="NIK" required>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Alamat" required>
                                </div>

                            </div>
                            <h6 class="text-center mb-lg-3 mt-3 mb-2">Jawablah Semua Pertanyaan Dibawah ini!
                            </h6>
                            <div class="row">
                                @csrf
                                @php $previousCategory = null; @endphp <!-- Variabel untuk menyimpan kategori sebelumnya -->

                                @foreach ($intsub as $index => $question)
                                    <!-- Menggunakan $index untuk nama dropdown -->
                                    @if ($previousCategory !== $question->kategori->name_kategori)
                                        <h5 class="mb-1 mt-2">
                                            <strong>{{ optional($question->kategori)->name_kategori ?? 'Kategori tidak tersedia' }}</strong>
                                        </h5>
                                        @php $previousCategory = $question->kategori->name_kategori; @endphp
                                    @endif

                                    <div class="col-lg-12 col-12">
                                        <textarea rows="1" name="question[]" class="form-control" id="question"
                                            style="border:none; border-bottom: 1px solid black; color:black;" readonly>{{ $question->nama_subkategori }}</textarea>
                                    </div>
                                    {{-- <div class="col-lg-2 col-12">
                                        <select id="kriteria_{{ $index }}" name="bobot_{{ $index }}"
                                            class="form-select" aria-label="Default select example">
                                            <option value="" selected>Pilihan</option> <!-- Pilihan default -->
                                            @foreach ($bobot as $nilai)
                                                <option value="{{ $nilai->bobota_interval }}">
                                                    {{ $nilai->nama_interval }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="col-lg-12">
                                        @if ($question->id == 19)
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    id="kriteria_{{ $index }}" name="bobot_{{ $index }}"
                                                    value="100">
                                                <label class="form-check-label" for="kriteria_{{ $index }}">
                                                    Sangat Puas
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    id="kriteria_{{ $index }}" name="bobot_{{ $index }}"
                                                    value="30">
                                                <label class="form-check-label" for="kriteria_{{ $index }}">
                                                    Tidak Puas
                                                </label>
                                            </div>
                                        @else
                                            @foreach ($bobot as $nilai)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        id="kriteria_{{ $index }}" name="bobot_{{ $index }}"
                                                        value="{{ $nilai->bobota_interval }}">
                                                    <label class="form-check-label" for="kriteria_{{ $index }}">
                                                        {{ $nilai->nama_interval }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                @endforeach



                                <div class="col-lg-12 col-md-4 col-6 mx-auto">
                                    <button type="submit" class="form-control" id="submit-button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
