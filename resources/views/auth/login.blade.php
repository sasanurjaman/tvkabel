@include('partials.meta')

<body class="fix-menu">
    <!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="loader-bar"></div>
    </div>
</div>
<!-- Pre-loader end -->

<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
    <!-- Container-fluid starts -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Authentication card start -->
                <div class="login-card card-block auth-body mr-auto ml-auto">
                    <form method="POST" action="{{ route('login') }}" class="md-float-material">
                        @csrf
                        <div class="text-center">
                            <img src="assets/images/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-left txt-primary">Login</h3>
                                </div>
                            </div>
                            <hr/>
                            <div class="input-group">
                                <input name="email" type="email" class="form-control @error('email') form-control-danger @enderror" placeholder="Your Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                                <label class="md-line label-danger"><strong>{{ $message }}</strong></label>
                            @enderror
                            <div class="input-group">
                                <input name="password" type="password" class="form-control @error('password') form-control-danger @enderror" placeholder="Password">
                            </div>
                            @error('password')
                            <label class="md-line label-danger"><strong>{{ $message }}</strong></label>
                            @enderror
                            <div class="row m-t-25 text-left">
                                <div class="col-sm-7 col-xs-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input name="remember" type="checkbox" value=""{{ old('remember') ? 'checked' : '' }}>
                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Remember me</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                                    <a href="{{ route('password.request') }}" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Login</button>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                                    <p class="text-inverse text-left"><b>Your Authentication Team</b></p>
                                </div>
                                <div class="col-md-2">
                                    <img src="assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- Authentication card end -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>

@include('partials.footer')