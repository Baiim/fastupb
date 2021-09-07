@extends('layouts.admin')
@section('title')
    SHOW
@endsection
@push('css')

@endpush
@section('content')
<div class="container-fluid">

    <div class="row">

        <div class="col-lg">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Peserta Lomba Film</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{route('film.index')}}" class="btn btn-primary">Back</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Tim</th>
                                            <th>Nama Ketua</th>
                                            <th>Nomor whatsapp</th>
                                            <th>Alamat email</th>
                                            <th>Kelas</th>
                                            <th>Kategori lomba</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$film -> tim}}</td>
                                            <td>{{$film -> name}}</td>
                                            <td>{{$film -> wa}}</td>
                                            <td>{{$film -> email}}</td>
                                            <td>{{$film -> class}}</td>
                                            <td>{{$film -> kategori}}</td>
                                        </tr>
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
