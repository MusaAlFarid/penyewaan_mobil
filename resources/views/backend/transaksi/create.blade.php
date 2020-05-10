@extends('layouts.master')
@section('title','Transaksi')
@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Nama Customer</label>
                            <select name="manufacture_id" class="form-control select2">
                                @foreach ($data as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Mobil</label>
                            <select name="transaksi_id" class="form-control select2">
                                @foreach ($item as $row)
                                <option value="{{$row->id}}">{{$row->name}} | {{ $row->license_number }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                  </div>
               
                  <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Tanggal Pinjam</label>
                          <input type="dateTime" name="rent_date" id="" class="form-control datepicker border-dark-50" required="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Tanggal Kembali</label>
                          <input type="dateTime" name="return_date" id="" class="form-control datepicker border-dark-50" required="">
                        </div>
                    </div>
                </div>
           

                <div class="row">
                    <div class="col">
                        <div class="form-gorup">
                            <a class="btn btn-light shadow-sm" href="{{ route('transaksi.index') }}">Batal</a>
                            <button type="submit" class="btn btn-primary  shadow-sm">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('backend/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/vendor/bootstrap-fileinput-master/js/plugins/sortable.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/vendor/bootstrap-fileinput-master/js/fileinput.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/vendor/bootstrap-fileinput-master/themes/fa/theme.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/vendor/bootstrap-fileinput-master/js/locales/id.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}" type="text/javascript"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('backend/vendor/select2/select2.min.js')}}" type="text/javascript"></script>
   

    <script>
        $('.select2').select2({
                dropdownParent: $('body'),
                theme: 'bootstrap'
        });
    
        $('.datepicker').datepicker({
        format : 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight:true
    });

   
    </script>
    



@endsection
