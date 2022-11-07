
@include('partials.meta')

  <body>
	  <div class="fixed-button">
		<a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank" class="btn btn-md btn-primary">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
		</a>
	  </div>
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('partials.nav')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    
                    @include('partials.sidebar')
                    
                    @yield('contents')
                </div>
            </div>
        </div>
@include('partials.footer')
