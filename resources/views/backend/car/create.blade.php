@extends('layouts.master')
@section('title','Mobil')
@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
        </div>
        <div class="card-body">
            <form action="{{route('car.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Gambar</label>
                          <input type="file" name="image[]" id="fileinput" class="form-control border-dark-50" required="" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="name" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Merk</label>
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
                          <label>Nomer Polisi</label>
                          <input type="text" name="license_number" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Tahun</label>
                          <input type="text" name="year" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Sewa Perhari</label>
                          <input type="number" name="price" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Denda Perhari</label>
                          <input type="number" name="penalty" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Warna</label>
                          <input type="text" name="color" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-gorup">
                            <button type="submit" class="btn btn-primary  shadow-sm">Simpan</button>
                            <a class="btn btn-light shadow-sm" href="{{route('car.index')}}">Batal</a>
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

    $('#fileinput').fileinput({
        uploadUrl:'#',
          browseClass: "btn btn-primary btn-block",
          fileActionSettings:{
            showZoom:false,
            showUpload:false,
            removeClass: "btn btn-danger",
            removeIcon: "<i class='fa fa-trash'></i>"
          },
          showCaption: false,
          showRemove: false,
          showUpload: false,
          showCancel: false,
          dropZoneEnabled: false,
          allowedFileExtensions: ['jpg', 'png','jpeg'],
    });
</script>

@endsection
