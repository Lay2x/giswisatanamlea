<!DOCTYPE html>
<html lang="en">
<head>
<title>{{$konf->instansi_setting}}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{ asset('logo/'.$konf->favicon_setting) }}">
<link rel="stylesheet" type="text/css" href="{{asset('landing/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('landing/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('landing/plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('landing/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('landing/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('landing/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('landing/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('landing/styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('landing/styles/single_listing_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('landing/styles/single_listing_responsive.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css" integrity="sha256-h2Gkn+H33lnKlQTNntQyLXMWq7/9XI2rlPCsLsVcUBs=" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('landing/styles/offers_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('landing/styles/offers_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('landing/styles/about_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('landing/styles/about_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('landing/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('landing/styles/contact_responsive.css')}}">


{{-- leaflet --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<!-- Leaflet Routing Machine CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
<!-- Menggunakan CDN -->
<link rel="stylesheet" href="https://unpkg.com/leaflet.locatecontrol/dist/L.Control.Locate.min.css"/>
<script src="https://unpkg.com/leaflet.locatecontrol/dist/L.Control.Locate.min.js"></script>
{{-- leaflet --}}

<style>
  .repiuwbintang {
        padding-top: 10px;
        display: flex;
        flex-direction: row-reverse; /* this is the magic */
        justify-content: flex-end;
      }

      .repiuwbintang input {
        display: none;
      }

      .repiuwbintang label {
        font-size: 30px;
        cursor: pointer;
      }

      .repiuwbintang label:hover,
      .repiuwbintang label:hover ~ label { /* reason why the stars are in reverse order in the html */
        color: orange;
      }

      .repiuwbintang input:checked ~ label {
        color: orange;
      }

      .colored-toast.swal2-icon-success {
        background-color: #a5dc86 !important;
      }

      .colored-toast.swal2-icon-error {
        background-color: #f27474 !important;
      }

      .colored-toast.swal2-icon-warning {
        background-color: #f8bb86 !important;
      }

      .colored-toast.swal2-icon-info {
        background-color: #3fc3ee !important;
      }

      .colored-toast.swal2-icon-question {
        background-color: #87adbd !important;
      }

      .colored-toast .swal2-title {
        color: white;
      }

      .colored-toast .swal2-close {
        color: white;
      }

      .colored-toast .swal2-html-container {
        color: white;
      }
</style>

</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		{{-- <div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">+45 345 3324 56789</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="#">login</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div> --}}

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="{{asset('landing/images/logo.png')}}" alt="">{{$konf->instansi_setting}}</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="{{url('/')}}">beranda</a></li>
								<li class="main_nav_item"><a href="{{url('tentang_kami')}}">tentang kami</a></li>
								<li class="main_nav_item"><a href="{{url('wisata_kami')}}">Wisata</a></li>
								<li class="main_nav_item"><a href="{{url('kontak_kami')}}">Kontak</a></li>
							</ul>
						</div>
						{{-- <div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form> --}} 

						<div class="hamburger ml-auto">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="{{asset('landing/images/logo.png')}}" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="{{url('/')}}">beranda</a></li>
				<li class="menu_item"><a href="{{url('tentang_kami')}}">tentang kami</a></li>
				<li class="menu_item"><a href="{{url('wisata_kami')}}">Wisata</a></li>
				<li class="menu_item"><a href="{{url('kontak_kami')}}">Kontak</a></li>
			</ul>
		</div>
	</div>

	<section>
    @yield('content')
  	</section>
  	<section>
    @yield('script')
  	</section>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-7 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="{{asset('landing/images/logo.png')}}" alt="">{{$konf->instansi_setting}}</a></div>
							</div>
							<p class="footer_about_text">Halaman website ini mencakup informasi kontak dan berbagai akun media sosial yang dikelola langsung oleh kantor Dinas Pariwisata Namlea. Pengelolaan informasi ini dilakukan oleh admin kantor tersebut. Selain itu, halaman ini juga mencantumkan lokasi kantor</p>
							{{-- <ul class="footer_social_list">
								<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul> --}}
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-5 footer_column">
					<div class="footer_col">
						<div class="footer_title">info kontak</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="{{asset('landing/images/placeholder.svg')}}" alt=""></div></div>
									<div class="contact_info_text">Namlea</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="{{asset('landing/images/phone-call.svg')}}" alt=""></div></div>
									<div class="contact_info_text"><a href="https://wa.me/{{$konf->no_hp_setting}}" target="_blank">{{ $konf->no_hp_setting }}</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="{{asset('landing/images/message.svg')}}" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">{{ $konf->email_setting }}</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="{{asset('landing/images/ig.svg')}}" alt=""></div></div>
									<div class="contact_info_text"><a href="https://www.instagram.com/{{$konf->instagram_setting}}" target="_blank">{{ $konf->instagram_setting }}</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<strong>Copyright &copy; <?php $cpy = date('Y'); echo $cpy; ?><a href="{{url('/')}}"> ADev</a>. </strong>All rights reserved.
					</div>
				</div>
				<div class="col-lg-7 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="{{url('/')}}">beranda</a></li>
								<li class="footer_nav_item"><a href="{{url('tentang_kami')}}">tentang kami</a></li>
								<li class="footer_nav_item"><a href="{{url('wisata_kami')}}">Wisata</a></li>
								<li class="footer_nav_item"><a href="{{url('kontak_kami')}}">Kontak</a></li>
								<li class="footer_nav_item"><a href="{{route('login')}}">Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="{{asset('landing/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('landing/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('landing/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('landing/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('landing/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('landing/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('landing/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('landing/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('landing/plugins/easing/easing.js')}}"></script>
<script src="{{asset('landing/js/custom.js')}}"></script>
<script src="{{asset('landing/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('landing/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('landing/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('landing/js/single_listing_custom.js')}}"></script>
<script src="{{asset('landing/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('landing/js/offers_custom.js')}}"></script>
<script src="{{asset('landing/js/about_custom.js')}}"></script>
<script src="{{asset('landing/js/contact_custom.js')}}"></script>

</body>

</html>