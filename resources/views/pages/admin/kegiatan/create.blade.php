@extends('layouts.admin') @section('title') Daftar Kategori | HIMATIF - UPB
@endsection @section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tambah Data Kategori</h1>
  {{--
  <p class="mb-4">
    DataTables is a third party plugin that is used to generate the demo table
    below. For more information about DataTables, please visit the
    <a target="_blank" href="https://datatables.net"
      >official DataTables documentation</a
    >.
  </p>
  --}}

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
    </div>
    <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('kegiatan.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <input type="text" class="form-control" name="name" required />
                      </div>
                    </div>
                  </div>
                <div class="row">
                    <div class="col text-right">
                      <button
                        type="submit"
                        class="btn btn-success px-5"
                      >
                        Save Now
                      </button>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
