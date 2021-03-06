@extends('layouts.master')
@section('title','Mobil')
@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update Data</h6>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
        </div>
            
        @endif
        <div class="card-body">
            <form action="{{route('car.update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Gambar Lama</label>
                            <div id="loadImage" class="row"></div>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="image[]" id="edit-file" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col">
                            <div class="form-group">
                              <label>Nama</label>
                              <input type="text" name="name" value="{{$data->name}}" class="form-control border-dark-50" required="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                              <label>Merk</label>
                                <select name="manufacture_id" class="form-control select2">
                                    @foreach ($merk as $row)
                                    <option value="{{$row->id}}" {{$data->manufacture_id == $row->id ? 'selected':'' }}>{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                              <label>Nomer Polisi</label>
                              <input type="text" name="license_number" value="{{$data->license_number}}" class="form-control border-dark-50" required="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                              <label>Tahun</label>
                              <input type="text" name="year" value="{{$data->year}}" class="form-control border-dark-50" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                              <label>Sewa Perhari</label>
                              <input type="number" name="price" value="{{$data->price}}" class="form-control border-dark-50" required="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                              <label>Denda Perhari</label>
                              <input type="number" name="penalty" value="{{$data->penalty}}" class="form-control border-dark-50" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                              <label>Warna</label>
                              <input type="text" name="color" value="{{$data->color}}" class="form-control border-dark-50" required="">
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <div class="col">
                        <div class="form-gorup">
                            <button type="submit" class="btn btn-primary shadow-sm">Simpan</button>
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
<script src="{{asset('backend/vendor/bootstrap-fileinput-master/js/plugins/sortable.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/vendor/bootstrap-fileinput-master/js/fileinput.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/vendor/bootstrap-fileinput-master/themes/fa/theme.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/vendor/bootstrap-fileinput-master/js/locales/id.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/vendor/select2/select2.min.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.select2').select2({
            dropdownParent: $('body'),
            theme: 'bootstrap'
    });

        function loadImage(){
        $.getJSON("{{route('car.getImage',$data->id)}}", function(data){
            $.each(data, function(index,value){
                var url = "{!! route('car.destroyImage','id') !!}";
                var image = "{!! asset('image') !!}";

                url = url.replace('id',value.id);
                image = image.replace('image',value.image);
                $('#loadImage').append('<div class="col-md-3">'+
                    '<div class="form-group">'+
                        '<div class="card bg-dark text-white shadow-sm">'+
                            '<img class="card-img" src="'+image+'" alt="">'+
                            '<div class="card-img-overlay">'+
                                '<a class="card-text btn btn-danger shadow-sm delete-photo" data-href="'+url+'" href="#">'+
                                    '<i class="fa fa-times"></i>'+
                                '</a>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>')
            });
        });
    }

    loadImage();

    $('#loadImage').on('click','a.delete-photo',function(e){
        e.preventDefault();
        $.get($(this).attr('data-href'),function(){
            $('#loadImage').empty();
            loadImage();
        });

    });

    $("#edit-file").fileinput({

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
     });
</script>

@endsection
