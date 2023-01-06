@extends('layouts.template')
@section('title', 'Daftar Pelanggan')

@section('contents')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
        
            <div class="main-body">
                <div class="page-wrapper">
                
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Pelanggan</h5>
                            <p class="text-muted m-b-10">Form Isian Tambah Pelanggan</p>
                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href="/dashboard"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/customer">Daftar Pelanggan</a>
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
                            <h4 class="sub-title">Tambah Pelanggan</h4>
                            <form action="/customer" method="POST">
                            @csrf
                                <div class="form-group row">
                                    <label for="customerCode" class="col-sm-2 col-form-label">Kode Pelanggan</label>
                                    <div class="col-sm-10">
                                        <input name="customerCode" id="customerCode" type="text" class="form-control @error('customerCode') form-control-danger @enderror" required>
                                    </div>
                                </div>
                                @error('customerCode')
                                    <label class="md-line label-danger"><strong>{{ $message }}</strong></label>
                                @enderror
                                <div class="form-group row">
                                    <label for="customerName" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                                    <div class="col-sm-10">
                                        <input name="customerName" id="customerName" placeholder="nama lengkap, maksimal 50 karakter" type="text" class="form-control @error('customerName') form-control-danger @enderror" required>
                                    </div>
                                </div>
                                @error('customerName')
                                    <label class="md-line label-danger"><strong>{{ $message }}</strong></label>
                                @enderror
                                <div class="form-group row">
                                    <label for="customerAddress" class="col-sm-2 col-form-label">Alamat Pelanggan</label>
                                    <div class="col-sm-10">
                                        <input name="customerAddress" id="customerAddress" placeholder="alamat lengkap" type="text" class="form-control @error('customerAddress') form-control-danger @enderror" required>
                                    </div>
                                </div>
                                @error('customerAddress')
                                    <label class="md-line label-danger"><strong>{{ $message }}</strong></label>
                                @enderror
                                <div class="form-group row">
                                    <label for="customerEmail" class="col-sm-2 col-form-label">Email Pelanggan</label>
                                    <div class="col-sm-10">
                                        <input name="customerEmail" id="customerEmail" placeholder="email pelanggan, maksimal 50 karakter" type="email" class="form-control @error('customerEmail') form-control-danger @enderror" required autocomplete="email">
                                    </div>
                                </div>
                                @error('customerEmail')
                                    <label class="md-line label-danger"><strong>{{ $message }}</strong></label>
                                @enderror
                                <div class="form-group row">
                                    <label for="customerPhone" class="col-sm-2 col-form-label">No Telp</label>
                                    <div class="col-sm-10">
                                        <input name="customerPhone" id="customerPhone" placeholder="No telp maksimal 20 karakter" type="text" class="form-control @error('customerPhone') form-control-danger @enderror" required>
                                    </div>
                                </div>
                                @error('customerPhone')
                                    <label class="md-line label-danger"><strong>{{ $message }}</strong></label>
                                @enderror
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Paket Langganan</label>
                                    <div class="col-sm-10">
                                        <select name="packet_id" class="form-control">
                                            <option value="opt1">Pilih Paket Langganan</option>
                                            @foreach ($packets as $packet)
                                                <option value="{{ $packet->id}}">{{ $packet->packetName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-grd-info ">Tambah Pelanggan</button>
                            </form>
                        </div>
                    </div>
                    <!-- Basic Form Inputs card end -->
                </div>
            </div>
        </div>
    </div>

@endsection