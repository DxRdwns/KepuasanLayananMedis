@extends('admin.layout.layout')

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">SubKriteria</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bx bx-home-alt"></i></a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page"><a href=""></a>SubKriteria</li>

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
                        <h4 class="mb-0">Add Sub Kriteria</h4>
                        <hr />
                        <form action="{{ url('admin/subkriteria/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="sub" class="form-label">Sub Kriteria</label>
                                    <input id="sub" type="text" placeholder="Isikan Subkriteria..."
                                        class="form-control" name="nama_subkategori" required>

                                </div>
                                <div class="col-md-6">
                                    <label for="kriteria" class="form-label">Kriteria</label>
                                    <select id="kriteria" name="id_kategori" class="form-select mb-3"
                                        aria-label="Default select example">
                                        <option selected="">Pilih Kriteria</option>
                                        @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->name_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 text-end d-grid">
                                    <button type="submit" class="btn btn-primary"><i
                                            class="bx bx-list-plus"></i>Add</button>
                                </div>


                            </div>

                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-primary" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#lapbulanan" role="tab"
                                    aria-selected="true">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-dollar-circle  font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Sub Kriteria</div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                        <div class="tab-content py-3">
                            <div class="tab-pane fade show active" id="lapbulanan" role="tabpanel">
                                <div class="table-responsive">
                                    <table id="example" class="table align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Sub Kriteria</th>
                                                <th>Kriteria</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($subkategori as $item)
                                                <tr>
                                                    <th>{{ $loop->iteration }}</th>
                                                    <td>{{ $item->nama_subkategori }}</td>
                                                    <td>{{ $item->kategori->name_kategori }}</td>


                                                    {{-- <td>
                                                        <div
                                                            class="d-flex order-actions justify-content-center align-items-center">
                                                            <a type="button" data-bs-toggle="modal"
                                                                data-bs-target="#period{{ $item->id }}"
                                                                class=""><i class='bx bxs-edit'></i></a>
                                                            <div class="modal fade" id="period{{ $item->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                                Edit Tahun Ajaran</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <form
                                                                            action="{{ url('admin/subkriteria/update/' . $item->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            <div class="modal-body">

                                                                                <div class="row gy-3">
                                                                                    <div class="col-md-6">
                                                                                        <input id="todo-input"
                                                                                            type="text"
                                                                                            placeholder="Nama Pos"
                                                                                            class="form-control"
                                                                                            name="nama_subkategori"
                                                                                            value="{{ $item->nama_subkategori }}"
                                                                                            required>

                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <select id="kriteria"
                                                                                            name="id_kategori"
                                                                                            class="form-select mb-3"
                                                                                            aria-label="Default select example">
                                                                                            <option selected=""
                                                                                                value={{ $item->kategori->id }}>
                                                                                                {{ $item->kategori->name_kategori }}
                                                                                            </option>
                                                                                            @foreach ($kategori as $kt)
                                                                                                <option
                                                                                                    value="{{ $kt->id }}">
                                                                                                    {{ $kt->name_kategori }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="modal-footer">

                                                                                <button type="Submit"
                                                                                    class="btn btn-primary">Save
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a type="button" data-bs-toggle="modal"
                                                                data-bs-target="#destroysubkriteria{{ $item->id }}"
                                                                class="ms-3"><i class='bx bxs-trash'></i></a>
                                                            <div class="modal modal-fade"
                                                                id="destroysubkriteria{{ $item->id }}" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">
                                                                                Hapus Kriteria
                                                                                {{ $item->id }}
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <form
                                                                            action="{{ url('/admin/subkriteria/destroy/' . $item->id) }}"
                                                                            method="post" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="modal-body">

                                                                                <div class="row mb-3">
                                                                                    <p>Apa anda ingin menghapus subkriteria
                                                                                        :
                                                                                        <b>
                                                                                            {{ $item->nama_subkategori }}</b>
                                                                                        dengan kriteria :
                                                                                        <b>{{ $item->id_kategori }}</b>
                                                                                        ?
                                                                                    </p>
                                                                                </div>



                                                                            </div>
                                                                            <div class="modal-footer">

                                                                                <button type="submit"
                                                                                    class="btn btn-danger">Delete</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td> --}}
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
