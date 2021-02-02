<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>@yield('title')</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
	<script defer src="{{ asset('assets/fontawesome/js/all.min.js')}}"></script>
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/theme-1.css')}}">

</head>
<body>
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="#">Anthony's Blog</a></h1>
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="{{ asset('assets/images/profile.png')}}" alt="image" >			
					
					<div class="bio mb-3">Hi, my name is Anthony Doe. Briefly introduce yourself here. You can also provide a link to the about page.<br><a href="about.html">Find out more about me</a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
			        </ul>
			        <hr> 
				</div>
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>{{ __('auth.Home') }} <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="blog-post.html"><i class="fas fa-bookmark fa-fw mr-2"></i>{{ __('auth.Post') }}</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="about.html"><i class="fas fa-user fa-fw mr-2"></i>{{ __('auth.About') }}</a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="{{ url('locale/kh') }}"><i class="fas fa-user fa-fw mr-2"></i>Khmer</a>
					</li>

					<li class="nav-item">
					    <a class="nav-link" href="{{ url('locale/en') }}"><i class="fas fa-user fa-fw mr-2"></i>English</a>
					</li>
				</ul>
				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="#" target="_blank">Get in Touch</a>
				</div>
			</div>
		</nav>
    </header>
    
    <div class="main-wrapper">
        @yield('content')
	    <footer class="footer text-center py-2 theme-bg-dark">
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="#" target="_blank">Xiaoying Riley</a> for developers</small>
		   
	    </footer>
    </div> 
    <div id="config-panel" class="config-panel d-none d-lg-block">
        <div class="panel-inner">
            <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
            <h5 class="panel-title">Choose Colour</h5>
            <ul id="color-options" class="list-inline mb-0">
                <li class="theme-1 active list-inline-item"><a data-style="assets/css/theme-1.css" href="#"></a></li>
                <li class="theme-2  list-inline-item"><a data-style="{{ asset('assets/css/theme-2.css')}}" href="#"></a></li>
                <li class="theme-3  list-inline-item"><a data-style="{{ asset('assets/css/theme-3.css')}}" href="#"></a></li>
                <li class="theme-4  list-inline-item"><a data-style="{{ asset('assets/css/theme-4.css')}}" href="#"></a></li>
                <li class="theme-5  list-inline-item"><a data-style="{{ asset('assets/css/theme-5.css')}}" href="#"></a></li>
                <li class="theme-6  list-inline-item"><a data-style="{{ asset('assets/css/theme-6.css')}}" href="#"></a></li>
                <li class="theme-7  list-inline-item"><a data-style="{{ asset('assets/css/theme-7.css')}}" href="#"></a></li>
                <li class="theme-8  list-inline-item"><a data-style="{{ asset('assets/css/theme-8.css')}}" href="#"></a></li>
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div>
    </div>        
    <script src="{{ asset('assets/plugins/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/popper.min.js')}}"></script> 
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/demo/style-switcher.js')}}"></script>
</body>
</html> 

