@extends('layouts.web')
@section('content')
<!-- Home -->

<div class="home" style="height: 700px;">
		
  <!-- Home Slider -->

  <div class="home_slider_container">
    
    <div class="owl-carousel owl-theme home_slider">

      <!-- Slider Item -->
      <div class="owl-item home_slider_item">
        <!-- Image by https://unsplash.com/@anikindimitry -->
        <div class="home_slider_background" style="background-image:url({{asset('landing/homeslider2.jpeg')}});"></div>

        <div class="home_slider_content text-center">
          <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
            <h1>Bupolo</h1>
            <h1>Berseri</h1>
            <div class="button home_slider_button"><div class="button_bcg"></div><a href="{{url ('wisata_kami')}}">Jelajahi Sekarang<span></span><span></span><span></span></a></div>
          </div>
        </div>
      </div>

      <!-- Slider Item -->
      <div class="owl-item home_slider_item">
        <div class="home_slider_background" style="background-image:url({{asset('landing/homesloder3.jpeg')}})"></div>

        <div class="home_slider_content text-center">
          <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
            <h1>Bupolo</h1>
            <h1>Berseri</h1>
            <div class="button home_slider_button"><div class="button_bcg"></div><a href="{{url ('wisata_kami')}}">Jelajahi Sekarang<span></span><span></span><span></span></a></div>
          </div>
        </div>
      </div>

      <!-- Slider Item -->
      <div class="owl-item home_slider_item">
        <div class="home_slider_background" style="background-image:url({{asset('landing/homeslider2.jpeg')}})"></div>

        <div class="home_slider_content text-center">
          <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
            <h1>Bupolo</h1>
            <h1>Berseri</h1>
            <div class="button home_slider_button"><div class="button_bcg"></div><a href="{{url('wisata_kami')}}">Jelajahi Sekarang<span></span><span></span><span></span></a></div>
          </div>
        </div>
      </div>

    </div>
    
    <!-- Home Slider Nav - Prev -->
    <div class="home_slider_nav home_slider_prev">
      <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
        <defs>
          <linearGradient id='home_grad_prev'>
            <stop offset='0%' stop-color='#fa9e1b'/>
            <stop offset='100%' stop-color='#8d4fff'/>
          </linearGradient>
        </defs>
        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
        M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
        C22.545,2,26,5.541,26,9.909V23.091z"/>
        <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
        11.042,18.219 "/>
      </svg>
    </div>
    
    <!-- Home Slider Nav - Next -->
    <div class="home_slider_nav home_slider_next">
      <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
        <defs>
          <linearGradient id='home_grad_next'>
            <stop offset='0%' stop-color='#fa9e1b'/>
            <stop offset='100%' stop-color='#8d4fff'/>
          </linearGradient>
        </defs>
      <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
      M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
      C22.545,2,26,5.541,26,9.909V23.091z"/>
      <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
      17.046,15.554 "/>
      </svg>
    </div>

    <!-- Home Slider Dots -->

    <div class="home_slider_dots">
      <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
        <li class="home_slider_custom_dot active"><div></div>01.</li>
        <li class="home_slider_custom_dot"><div></div>02.</li>
        <li class="home_slider_custom_dot"><div></div>03.</li>
      </ul>
    </div>
    
  </div>

</div>

<!-- Intro -->

  {{-- <div class="intro" id="start">
		<div class="container">
			<div class="row" style="margin-bottom: 100px;">
				<div class="col-lg-7">
					<div class="intro_image"><img src="{{asset('landing/images/intro.png')}}" alt=""></div>
				</div>
				<div class="col-lg-5">
					<div class="intro_content">
            <div class="intro_title" style="margin-bottom: -60px;">Visi</div>
						<p class="intro_text" style="margin-bottom: 70px">{!!$visi->visi!!}</p>
					</div>
          <div class="intro_content mt-5">
            <div class="intro_title" style="margin-bottom: -40px;">Misi</div>
						<p class="intro_text">{!!$visi->misi!!}</p>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

  <div class="intro">
		<div class="container">
			{{-- <div class="row">
				<div class="col">
					<h2 class="intro_title text-center">We have the best tours</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
					</div>
				</div>
			</div> --}}
			<div class="row intro_items">

				<!-- Intro Item -->

				<div class="col-lg-4">
						<!-- Image by https://unsplash.com/@dnevozhai -->
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
              <img src="{{asset('landing/images/milestone_purple.png')}}" alt="">
							<div class="intro_center text-center">
								<h2 class="text-dark">Alam yang mempesona </h2>
								<div class="intro_price text-dark">Terbentang dari ketinggian penggunungan kapalatmada hingga garis pantai buru utara barat,timur hingga selatan,Namlea juga menyajikan berbagai keindahan alam yg sangat mempesona </div>
							</div>
						</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 mt-4">
						<!-- Image by https://unsplash.com/@hellolightbulb -->
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
              <img  src="{{asset('landing/images/icon_3_purple.png')}}" alt="">
							<div class="intro_center text-center">
								<h2 class="text-dark">Sarana prasarana </h2>
								<div class="intro_price text-dark">Sarana dan juga prasarana yang sangat memadai sekali bagi kebutuhan para wisatawan dalam berekreasi seperti fasilitas umum yang telah disediakan guna demi kenyamanan dan juga kelancaran para wisatawan dalam bertamasya </div>
							</div>
						</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 mt-4">
						<!-- Image by https://unsplash.com/@willianjusten -->
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
              <img src="{{asset('landing/images/milestone_3.png')}}" alt="">
							<div class="intro_center text-center">
								<h2 class="text-dark">Maping </h2>
								<div class="intro_price text-dark">Menyajikan informasi lokasi wisata yang begitu strategis dan mudah di pahami oleh wisatawan serta pemetaan lokasi yang akurat sekali yang bisa di jadikan pedoman bagi wisatawan dalam mengunjungi wisata yang di inginkan </div>
							</div>
						</div>
				</div>

			</div>
		</div>
	</div>

  <div class="destinasi" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="add_container">
                    <div class="add_background" style="background-image:url({{asset('landing/images/blog_background.jpg')}})"></div>
                    <div class="add_content">
                        <h1 class="add_title">Destinasi</h1>
                        <div class="add_subtitle">Menyediakan informasi obyek wisata di Namlea</div>
                        <div class="button add_button"><div class="button_bcg"></div><a href="{{url('lokasi_wisata')}}">Jelajahi Map<span></span><span></span><span></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA -->

<div class="cta">
  <!-- Image by https://unsplash.com/@thanni -->
  <div class="cta_background" style="background-image:url({{asset('landing/images/cta.jpg')}})"></div>
  
  <div class="container">
    <div class="row">
      <div class="col">

        <!-- CTA Slider -->
        <div class="text-center">
          <h2 class="section_title text-light">Review Pengunjung</h2>
        </div>
        <div class="cta_slider_container">
          <div class="owl-carousel owl-theme cta_slider">
            @foreach ($ratting as $row)
            <!-- CTA Slider Item -->
            <div class="owl-item cta_item text-center">
              <div class="cta_title">'{{$row->nama_komentator}}'</div>
              <h6>{{$row->nama_wisata}}</h6>
              <div class="rating_r rating_r_4">
                @if ($row->ratting == 1)
                <div class="rating_r rating_r_1">
                  <i></i>
                </div>
                @endif
                @if ($row->ratting == 2)
                <div class="rating_r rating_r_2">
                  <i></i>
                  <i></i>
                </div>
                @endif
                @if ($row->ratting == 3)
                <div class="rating_r rating_r_3">
                  <i></i>
                  <i></i>
                  <i></i>
                </div>
                @endif
                @if ($row->ratting == 4)
                <div class="rating_r rating_r_4">
                  <i></i>
                  <i></i>
                  <i></i>
                  <i></i>
                </div>
                @endif
                @if ($row->ratting == 5)
                <div class="rating_r rating_r_5">
                  <i></i>
                  <i></i>
                  <i></i>
                  <i></i>
                  <i></i>
                </div>
                @endif
              </div>
              <p class="cta_text">{{$row->komentar}}</p>
              {{-- <div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div> --}}
            </div>
            @endforeach
            
          </div>

          <!-- CTA Slider Nav - Prev -->
          <div class="cta_slider_nav cta_slider_prev">
            <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
              <defs>
                <linearGradient id='cta_grad_prev'>
                  <stop offset='0%' stop-color='#fa9e1b'/>
                  <stop offset='100%' stop-color='#8d4fff'/>
                </linearGradient>
              </defs>
              <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
              M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
              C22.545,2,26,5.541,26,9.909V23.091z"/>
              <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
              11.042,18.219 "/>
            </svg>
          </div>
          
          <!-- CTA Slider Nav - Next -->
          <div class="cta_slider_nav cta_slider_next">
            <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
              <defs>
                <linearGradient id='cta_grad_next'>
                  <stop offset='0%' stop-color='#fa9e1b'/>
                  <stop offset='100%' stop-color='#8d4fff'/>
                </linearGradient>
              </defs>
            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
            M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
            C22.545,2,26,5.541,26,9.909V23.091z"/>
            <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
            17.046,15.554 "/>
            </svg>
          </div>

        </div>

      </div>
    </div>
  </div>
        
</div>


<div class="trending">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2 class="section_title">Rekomendasi Destinasi</h2>
      </div>
    </div>
    <div class="row trending_container">

      @foreach ($rekomendasi as $row)
      @if ($row->avg_ratting >= 4)
      <!-- Trending Item -->
      <div class="col-lg-3 col-sm-6">
        <div class="trending_item clearfix">
          <div class="trending_image"><img src="{{asset('file/wisata/'.$row->foto_wisata)}}" alt="https://unsplash.com/@fransaraco"></div>
          <div class="trending_content">
            <div class="trending_title"><a href="{{ url('wisata/detail-wisata', $row->slug_wisata) }}">{{$row->nama_wisata}}</a></div>
            <div class="trending_price">Rp. {{number_format($row->biaya_masuk)}}</div>
            <div class="trending_location">{{$row->lokasi}}</div>
          </div>
        </div>
      </div>
      @endif
      @endforeach

    </div>
  </div>
</div>



@endsection
@section('script')
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<!-- Leaflet Routing Machine JavaScript -->
<script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

<script>
    // titik Lokasi Maps
    var map = L.map('map').setView([-3.1852968235843484, 126.92018160231368], 10);

    // menampilkan maps
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    var myIcon = L.icon({
    iconUrl: '{{ asset('pin.png') }}',
    iconSize: [25, 40],
    });

    // membuat mark pada maps
    @foreach($wisata as $row)
    var marker = L.marker([{{$row->lat_lokasi}}, {{$row->long_lokasi}}]).addTo(map);
    marker.bindPopup("<h6><strong>Wisata</strong></h6>{{$row->nama_wisata}} <br>Lokasi {{$row->lokasi}} <br><a href='{{ url('wisata/detail-wisata', $row->slug_wisata) }}' target='_blank'>Selengkapnya...</a>")
    @endforeach

    

</script>
@endsection