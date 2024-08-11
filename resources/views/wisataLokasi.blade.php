
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
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">

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

</head>

<body>

<div class="super_container">

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row p-2">
				<div class="col-lg-5 order-lg-1 order-1">
					<div class="logo_container">
                        <div class="logo"><a href="#"><img src="{{asset('landing/images/logo.png')}}" alt="">{{$konf->instansi_setting}}</a></div>
                    </div>
				</div>
				<div class="col-lg-7 order-lg-2 order-2">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="main_nav_item"><a href="{{url('/')}}"><i class="fas fa-home"></i> Beranda</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div style="height: 580px" id="map"></div>

</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<!-- Leaflet Routing Machine JavaScript -->
<script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

<script>
    // // titik Lokasi Maps
    // var map = L.map('map').setView([-3.1852968235843484, 126.92018160231368], 9);

    // // menampilkan maps
    // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     maxZoom: 19,
    // }).addTo(map);

    var myIcon = L.icon({
    iconUrl: '{{ asset('location1.png') }}',
    iconSize: [35, 40],
    });

    // // membuat mark pada maps
    // @foreach($wisata as $row)
    // var marker = L.marker([{{$row->lat_lokasi}}, {{$row->long_lokasi}}]).addTo(map);
    // marker.bindPopup("<h6><strong>Wisata</strong></h6>{{$row->nama_wisata}} <br>Lokasi {{$row->lokasi}} <br><a href='{{ url('wisata/detail-wisata', $row->slug_wisata) }}' target='_blank'>Selengkapnya...</a>")
    // @endforeach


    var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
        attribution: '© OpenStreetMap'
    });

    var osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'});

    var map = L.map('map', {
        center: [-3.1852968235843484, 126.92018160231368],
        zoom: 10,
        layers: [osm]
    });

    var baseMaps = {
        "OpenStreetMap": osm,
        "OpenStreetMap.HOT": osmHOT
    };


    var layerControl = L.control.layers(baseMaps).addTo(map);

    var baseMaps = {
        "OpenStreetMap": osm,
        "<span style='color: red'>OpenStreetMap.HOT</span>": osmHOT
    };

    var openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data: © OpenStreetMap contributors, SRTM | Map style: © OpenTopoMap (CC-BY-SA)'
    });

    layerControl.addBaseLayer(openTopoMap, "OpenTopoMap");

    // membuat mark pada maps
    @foreach($wisata as $row)
    var marker = L.marker([{{$row->lat_lokasi}}, {{$row->long_lokasi}}],{icon: myIcon}).addTo(map);
    marker.bindPopup("<h6><strong>Wisata</strong></h6>{{$row->nama_wisata}} <br>Lokasi {{$row->lokasi}} <br><a href='{{ url('wisata/detail-wisata', $row->slug_wisata) }}'>Selengkapnya...</a>atau<br><a href='https://www.google.com/maps?q={{$row->lat_lokasi}}, {{$row->long_lokasi}}' target='_blank class='text'>Buka Pada Google Maps</a><br><img style='width: 200px; height:100px;' src='{{asset('file/wisata/'.$row->foto_wisata)}}' alt=''>")
    @endforeach

</script>

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

</body>

</html>