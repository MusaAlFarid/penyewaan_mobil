
@extends('layouts.master')
@section('title','tulis judul') 
@section('custom.css')
    {{-- iki code gawe misale nyeluk js..opo nggawe ajax --}}
@endsection
@section('content')
            <div class="row">
                <div class="col-lg-7">


                    <div class="row">
                        <div class="col">
                            <div id="carouselExampleControls" class="carousel slide mt-2" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-55" src="{{ asset("backend/img/logo.png")}}" alt="First slide">
                                  </div>
                                  @foreach ($gambar as $item)
                                  <div class="carousel-item">
                                      <img class="d-block w-55" src="{{ asset($item->image)}}" alt="car image">
                                    </div>
                                  @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" value="{{$data->name}}" readonly="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>No Polisi</label>
                                <input type="text" name="license_number" class="form-control" value="{{$data->license_number}}" readonly="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Warna</label>
                                <input type="text" name="color" class="form-control" value="{{$data->color}}" readonly="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="text" name="year" class="form-control" value="{{$data->year}}" readonly="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" name="manufacture" class="form-control" value="{{$merk->manu}}" readonly=""> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Sewa per hari</label>
                                <input type="text" name="price" class="form-control" value="{{$data->price}}" readonly="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Denda per hari</label>
                                <input type="text" name="penalty" class="form-control" value="{{$data->penalty}}" readonly="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
@section('js')
@endsection
@endsection
