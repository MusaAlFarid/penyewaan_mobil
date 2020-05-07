@extends('layouts.master')
@section('title','Data Transaksi')
@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3">
                <a href="" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body float">
            <table class="table table-sm table-bordered table-striped text-center" id="lookup">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No Invoice</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Kembali</th>
                        <th>Customer</th>
                        <th>Mobil</th>
                        <th>Status</th>
                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  {{-- @foreach ($data as $item) --}}
                  <tr>
                  <td>1</td>
                  <td>12032983</td>
                  <td>22 - 2 - 2002 </td>
                  <td>30 - 3 - 2003 </td>
                  <td>Aji</td>
                  <td>Avanza</td>
                  <td>
                    <span class="btn btn-label-success btn-pill">Selesai</span>
                    </td>
                  
                  
                  <td> <form action="" method="POST">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="DELETE">
                    <a href="" class="btn btn-outline-success btn-elevate btn-circle btn-icon" ><i class="flaticon2-check-mark"></i></a> 
                    <button class="btn btn-outline-danger btn-elevate btn-circle btn-icon" type="submit" onclick="return confirm('Anda yakin ingin menghapus Customer ?')"><i class="flaticon-circle"></i></button>
                </form></td>
            </tr>
            {{-- @endforeach --}}
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
