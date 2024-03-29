@extends('layouts.template')
@section('title', 'Dashboard')

@section('contents')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
        
            <div class="main-body">
                <div class="page-wrapper">
                
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Sample Page</h5>
                            <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                </li>
                                    <li class="breadcrumb-item"><a href="#!">Pages</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Sample page</a>
                                        </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    
                
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Hello card</h5>
                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
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
                                    <div class="card-block">
                                        <p>
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="styleSelector">
            
            </div>
        </div>
    </div>
@endsection
