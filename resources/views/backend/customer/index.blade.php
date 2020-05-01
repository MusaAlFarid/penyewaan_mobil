@extends('layouts.master')
@section('title','Data Customer')
@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3">
                <a href="#" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered table-striped" id="lookup">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tahun</th>
                        <th>No. Telp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <td>1</td>
                  <td>123</td>
                  <td>abc</td>
                  <td>2020</td>
                  <td>123</td>
                  <td>123</td>
                </tbody>  
                
               
            </table>
        </div>
    </div>
</div>
@include('backend.customer.modal-show')
@endsection
@section('js')
<script type="text/javascript">
    $(function () {
    $("#lookup").dataTable();
    });
  
  </script>
@endsection
