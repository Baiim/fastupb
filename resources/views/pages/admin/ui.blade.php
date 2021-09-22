@extends('layouts.admin')
@section('title') Daftar Peserta Lomba UI/UX Design | HIMATIF - UPB
@endsection @section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  {{--
  <p class="mb-4">
    DataTables is a third party plugin that is used to generate the demo table
    below. For more information about DataTables, please visit the
    <a target="_blank" href="https://datatables.net"
      >official DataTables documentation</a
    >.
  </p>
  --}}
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div
              class="
                text-xs
                font-weight-bold
                text-primary text-uppercase
                mb-1
              "
            >
            Jumlah peserta <br>Lomba UI/UX Design
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
                {{$count}} Peserta
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Peserta Lomba UI/UX Design </h6>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                            <thead>
                            <tr>
                                <th>Nama Tim</th>
                                <th>Nama Ketua</th>
                                <th>Whatsapp</th>
                                <th>Email</th>
                                <th>Kelas</th>
                                <th>KTM/KRS</th>
                                <th>Bukti Transfer</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
@push('custom')
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            buttons: [
        {
            extend: 'pdf',
            text: 'Save current page',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        }

            columns: [
                { data: 'tim', name: 'tim' },
                { data: 'name', name: 'name' },
                { data: 'wa', name: 'wa' },
                { data: 'email', name: 'email' },
                { data: 'class', name: 'class' },
                { data: 'ktm', name: 'ktm' },
                { data: 'photo', name: 'photo' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%',
                },
            ]
        });
    </script>
@endpush
