@extends('backend.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection


@section('content')
<section class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Data Sertification</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Sertification</li>
            </ol>
        </div>
    </div>
</section>
<div class="row">
    <div class="col-12 mb-2">
        @if(Session::has('status'))
            <div class="alert alert-success mb-2">
                {{ Session::get('status') }}
            </div>
        @endif
        <a href="{{ route('sertification.create') }}">
            <button class="btn btn-primary btn-sm"><i class="fas fa-plus mr-1"></i>Add Sertification</button>
        </a>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                All Sertification
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-hover table-sm">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>ID Sertification</th>
                        <th>Address</th>
                        <th>Submit</th>
                        <th>Expire Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sertificates as $key => $sertificate)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $sertificate->company_name }}</td>
                            <td>{{ $sertificate->id_sertification }}</td>
                            <td>{{ $sertificate->address }}</td>
                            <td><div class="badge badge-danger">{{ $sertificate->expire_date }}</div></td>
                            <td>
                                <div class="row justify-content-center">
                                    <a href="{{ route('sertification.edit', $sertificate->id) }}">
                                        <button class="btn btn-sm btn-warning mr-1"><i class="fa fa-user-edit"></i></button>
                                    </a>
                                    <form action="{{ route('sertification.destroy', $sertificate->id) }}" method="post" onsubmit="return confirm('Yakin untuk hapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger mr-1"><i class="fa fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });

  </script>
@endsection
