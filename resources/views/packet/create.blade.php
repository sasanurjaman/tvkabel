@extends('layouts.template')
@section('title', 'Paket langganan')

@section('contents')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
        
            <div class="main-body">
                <div class="page-wrapper">
                
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Tambah Paket Langganan</h5>
                            <p class="text-muted m-b-10">Form isian tambah paket langganan</p>
                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href="/dashboard"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/packet">Paket Langganan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    
                    <!-- session notif succes start -->
                    @if (session()->has('success'))  
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <!-- session notif succes end -->
                
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-block">
                            <h4 class="sub-title">Tambah Paket</h4>
                            <form action="/packet" method="POST">
                            @csrf
                                <div class="form-group row">
                                    <label for="packetName" class="col-sm-2 col-form-label">Nama Paket</label>
                                    <div class="col-sm-10">
                                        <input name="packetName" id="packetName" type="text" class="form-control @error('packetName') form-control-danger @enderror" required>
                                    </div>
                                </div>
                                @error('packetName')
                                    <label class="md-line label-danger"><strong>{{ $message }}</strong></label>
                                @enderror
                                <div class="form-group row">
                                    <label for="packetPrice" class="col-sm-2 col-form-label">Harga Paket (Rp.)</label>
                                    <div class="col-sm-10">
                                        <input name="packetPrice" id="packetPrice" type="number" class="form-control @error('packetPrice') form-control-danger @enderror" required>
                                    </div>
                                </div>
                                @error('packetPrice')
                                    <label class="md-line label-danger"><strong>{{ $message }}</strong></label>
                                @enderror
                                <div class="form-group row">
                                    <label  for="packetDes" class="col-sm-2 col-form-label">Deskripsi Paket</label>
                                    <div class="col-sm-10">
                                        <textarea name="packetDes" id="packetDes" rows="5" cols="5" class="form-control @error('packetDes') form-control-danger @enderror" required></textarea>
                                    </div>
                                </div>
                                @error('packetDes')
                                    <label class="md-line label-danger"><strong>{{ $message }}</strong></label>
                                @enderror
                                <button type="submit" class="btn btn-grd-info ">Tambah Paket</button>
                            </form>
                        </div>
                    </div>
                    <!-- Basic Form Inputs card end -->
                </div>
            </div>
        </div>
    </div>

@endsection