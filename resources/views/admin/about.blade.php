@extends('admin.layout.layout')

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Kriteria</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bx bx-home-alt"></i></a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page"><a href=""></a>Kriteria</li>

                </ol>
            </nav>
        </div>

    </div>
    <div class="col">

        <hr />
        {{-- add pos --}}

        {{-- end add --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0">Keterangan</h4>
                        <hr />
                        @foreach ($about as $item)
                            <form action="{{ url('admin/about/update/' . $item->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">

                                            <textarea class="form-control" name="about" placeholder="Leave a comment here" id="floatingTextarea2"
                                                style="height: 100px">{{ $item->about }}</textarea>

                                            <label for="floatingTextarea2">Tentang</label>
                                        </div>

                                    </div>
                                    <div class="col-md-12 text-end d-grid">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="bx bx-list-plus"></i>Save</button>
                                    </div>

                                </div>

                            </form>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
