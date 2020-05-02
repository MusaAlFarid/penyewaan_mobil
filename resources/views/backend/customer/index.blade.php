@extends('layouts.master')
@section('title','Data Customer')
@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3">
                <a href="{{ route('customer.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered table-striped" id="lookup">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                  <td>{{ $no++ }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->nik }}</td>
                  <td>{{ $item->address }}</td>
                  <td>{{ $item->phone_number }}</td>
                  <td>{{ $item->email }}</td>
                  
                  @endforeach
                  <td> <form action="#" method="POST">
                    {{-- {{ csrf_field() }} --}}
                    <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-outline-danger btn-elevate btn-circle btn-icon" type="submit" onclick="return confirm('Anda yakin ingin menghapus data ?')"><i class="flaticon2-rubbish-bin-delete-button"></i></button>
                    <a href="" class="btn btn-outline-primary btn-elevate btn-circle btn-icon"><i class="flaticon-edit"></i></a> 
                    <a href="" class="btn btn-outline-success btn-elevate btn-circle btn-icon" ><i class="flaticon2-search"></i></a> 
                </form></td>
                </tbody>  
                
               
            </table>
        </div>
    </div>
</div>
{{-- @include('backend.customer.modal-show') --}}
@endsection
@section('js')
<script type="text/javascript">
    $(function () {
    $("#lookup").dataTable();
    });
  
  </script>
@endsection
