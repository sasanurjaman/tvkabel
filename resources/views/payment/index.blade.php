@extends('layouts.template')
@section('title', 'Tagihan Bulanan')

@section('contents')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
        
            <div class="main-body">
                <div class="page-wrapper">
                
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Tagihan Bulanan</h5>
                            <p class="text-muted m-b-10">Form Tagihan Bulanan</p>
                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href="/dashboard"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/payment">Tagihan Bulanan</a>
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
                                <h5>Tabel Tagihan</h5>
                                <span>Tabel Daftar Tagihan Pelanggan</span>
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
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Paket Langganan</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payments as $payment)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration}}</th>
                                                <td>{{ $payment['customerName'] }}</td>
                                                <td>{{ $payment['customerPacket'] }}</td>
                                                <td>
                                                    @if ($payment['jan'] == 0)
                                                        <a href="#" class="badge badge-danger"><i class="ti-info"></i></a>
                                                    @else
                                                        <label class="badge badge-success"><i class="ti-check"></i></label>
                                                    @endif
                                                </td>
                                                <td>{{ $payment['feb'] }}</td>
                                                <td>{{ $payment['mart'] }}</td>
                                                <td>{{ $payment['apr'] }}</td>
                                                <td>{{ $payment['mey'] }}</td>
                                                <td>{{ $payment['jun'] }}</td>
                                                <td>{{ $payment['jul'] }}</td>
                                                <td>{{ $payment['augs'] }}</td>
                                                <td>{{ $payment['sept'] }}</td>
                                                <td>{{ $payment['okt'] }}</td>
                                                <td>{{ $payment['nov'] }}</td>
                                                <td>{{ $payment['des'] }}</td>
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