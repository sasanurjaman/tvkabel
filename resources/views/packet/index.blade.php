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
                            <h5 class="m-b-10">Paket Langganan</h5>
                            <p class="text-muted m-b-10">Daftar Paket langganan yang tersedia</p>
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
                
                    <!-- Hover table card start -->
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <h5>Tabel Paket Langganan</h5>
                                <span>Tabel Daftar Paket Langganan</span>
                            </div>
                            <div class="float-right mr-3 mt-4">
                                <a href="packet/create" type="button" class="btn btn-grd-primary" ><i class="ti-plus"></i>Tambah Paket</a>
                            </div>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="fa fa-chevron-left"></i></li>
                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                    <li><i class="fa fa-times close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Paket</th>
                                            <th class="text-center">Harga (Rp)</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($packets as $packet)
                                            <tr>
                                                <th class="text-center" scope="row">{{ $loop->iteration}}</th>
                                                <td>{{ $packet->packetName }}</td>
                                                <td class="text-right">{{ number_format($packet->packetPrice,2,',','.') }}</td>
                                                <td>{{ $packet->packetDes }}</td>
                                                <td>
                                                    <a href="/packet/{{ $packet->id}}/edit" class="badge badge-warning" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="Edit">
                                                        <i class="ti-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('packet.destroy', [$packet->id]) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                        <button class="badge badge-danger border-0" onclick="return confirm('Apakah yakin menghapus paket {{ $packet->packetName }}')" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="Hapus"><i class="ti-eraser"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Hover table card end -->
                </div>
            </div>
        </div>
    </div>

@endsection