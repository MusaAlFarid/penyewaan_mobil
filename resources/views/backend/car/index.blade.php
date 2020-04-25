@extends('layouts.master')
@section('title','Mobil')
@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered table-striped" id="lookup">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Merk</th>
                        <th>Tahun</th>
                        <th>Harga Sewa</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>akjn</td>
                        <td>al,</td>
                        <td>0998</td>
                        <td>klcmla</td>
                        <td>cmlamc</td>
                        <td>calcabsj</td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('backend.car.modal-show')
@endsection
@section('js')
<script type="text/javascript">
    $(function () {
    $("#lookup").dataTable();
    });
  
  </script>
@endsection
