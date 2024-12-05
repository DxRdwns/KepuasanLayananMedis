@extends('admin.layout.layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="chart-container1">

                <canvas id="chart3"></canvas>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 row-cols-xl-5">

        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="text-center">
                        <div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3">
                            <i class="bx bx-happy-heart-eyes"></i>
                        </div>
                        <h4 class="my-1">{{ $sangat_puas }}</h4>
                        <p class="mb-0 text-secondary">Sangat Puas</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="text-center">
                        <div class="widgets-icons rounded-circle mx-auto bg-light-success text-success mb-3">
                            <i class="bx bx-happy-beaming"></i>
                        </div>
                        <h4 class="my-1">{{ $puas }}</h4>
                        <p class="mb-0 text-secondary">Puas</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="text-center">
                        <div class="widgets-icons rounded-circle mx-auto bg-light-Secondary text-Secondary mb-3">
                            <i class="bx bx-smile"></i>
                        </div>
                        <h4 class="my-1">{{ $cukup_puas }}</h4>
                        <p class="mb-0 text-secondary">Cukup Puas</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="text-center">
                        <div class="widgets-icons rounded-circle mx-auto bg-light-warning text-warning mb-3">
                            <i class="bx bx-meh-alt"></i>
                        </div>
                        <h4 class="my-1">{{ $tidak_puas }}</h4>
                        <p class="mb-0 text-secondary">Tidak Puas</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="text-center">
                        <div class="widgets-icons rounded-circle mx-auto bg-light-danger text-danger mb-3">
                            <i class="bx bx-tired"></i>
                        </div>
                        <h4 class="my-1">{{ $sangat_tidak_puas }}</h4>
                        <p class="mb-0 text-secondary">Sangat Tidak Puas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(function() {
            'use strict';
            // chart 3
            new Chart(document.getElementById("chart3"), {
                type: 'pie',
                data: {
                    labels: ["Sangat Puas", "Puas", "Cukup Puas", "Tidak Puas", "Sangat Tidak Puas"],
                    datasets: [{
                        label: "Population (millions)",
                        backgroundColor: ["#0d6efd", "#17a00e", "#212529", "#ffc107", "#f41127"],
                        data: [{{ $sangat_puas }}, {{ $puas }}, {{ $cukup_puas }},
                            {{ $tidak_puas }}, {{ $sangat_tidak_puas }}
                        ]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    title: {
                        display: true,
                        text: 'Hasil Survei Kepuasan Medis dari {{ $all }} Responden'
                    }
                }
            });
        })
    </script>
@endpush
