@extends('layouts.master')
@section('title','Data Transaksi')
@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3">
                <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Data</a>
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
                  @foreach ($data as $item)
                  <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $item->invoice_no }}</td>
                  <td>{{ date("d-m-Y", strtotime($item->rent_date )) }}</td>
                  <td>{{ date("d-m-Y", strtotime($item->return_date )) }}</td>
                  {{-- name customer --}}
                  <td>{{$item->name_customer}} </td>
                  {{-- name cars --}}
                  <td>{{$item->name_car}}</td>
                  <td>
                    @if($item->status_transaksi)
                        <span class="btn btn-label-success btn-pill">Selesai</span>
                    @else
                        <span class="btn btn-label-danger btn-pill">Belum</span>
                    @endif
                  </td>
                  
                  
                  <td>
                    @if($item->status_transaksi == false)
                    <a href="{{ route('transaksi.complete', ['id' => $item->id_transaksi]) }}" class="btn btn-outline-success btn-elevate btn-circle btn-icon" ><i class="flaticon2-check-mark"></i></a> 
                    @endif
                    <a href="{{ route('transaksi.destroy', ['id' => $item->id_transaksi]) }}" class="btn btn-outline-danger btn-elevate btn-circle btn-icon" ><i class="flaticon-circle"></i></a> 
                    </td>
                </tr>
                @endforeach
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
