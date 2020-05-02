@extends('layouts.master')
@section('title','Data Mobil')
@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3">
                <a href="{{route('car.create')}}" class="btn btn-danger">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered table-striped" id="lookup">
                <thead>
                    <tr>
                        <th>#No</th>
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
                    @if ($item->deleted_at==Null)
                    <tr>
                        <td>{{$no++}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->manufacture}}</td>
                        <td>{{$item->year}}</td>
                        <td>Rp.{{$item->price}}</td>
                        @if ($item->status=='o')
                        <td style="color:blue;">ready</td>
                        @else
                        <td style="color:red;">terpakai</td>
                        @endif
                        <td> 
                            <form action="{{ route('car.destroy', $item->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-outline-danger btn-elevate btn-circle btn-icon" type="submit" onclick="return confirm('Anda yakin ingin menghapus data {{$item->name}}?')"><i class="flaticon2-rubbish-bin-delete-button"></i></button>
                                <a href="{{route('car.edit', $item->id)}}" class="btn btn-outline-primary btn-elevate btn-circle btn-icon"><i class="flaticon-edit"></i></a> 
                                <a href="{{route('car.show', $item->id)}}" class="btn btn-outline-success btn-elevate btn-circle btn-icon" ><i class="flaticon2-search"></i></a> 
                            </form>
                        </td>
                    </tr>   
                    @endif
                   
                    @endforeach
                </tbody>  
                
               
            </table>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $(function () {
    $("#lookup").dataTable();
    });
  
  </script>
@endsection
