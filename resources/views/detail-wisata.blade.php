@extends('layouts.web')
@section('content')
  <!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('file/wisata/'.$listwisata->foto_wisata)}}"></div>
		<div class="home_content">
			<div class="home_title">{{$listwisata->nama_wisata}}</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="listing">

		<!-- Single Listing -->

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="single_listing">
						
						<!-- Hotel Info -->

						<div class="hotel_info">

							<!-- Title -->
							<div class="hotel_title_container d-flex flex-lg-row flex-column">
								<div class="hotel_title_content">
									<h1 class="hotel_title">{{$listwisata->nama_wisata}} {{$listwisata->tipe_wisata}}</h1>
									<div class="hotel_location">Lokasi Wisata {{$listwisata->nama_wisata}} Berada Di {{$listwisata->lokasi}}</div>
								</div>
								<div class="hotel_title_button ml-lg-auto text-lg-right">
									<div class="offers_price">Rp. {{number_format($listwisata->biaya_masuk)}}<span>Biaya Masuk</span></div>
								</div>
							</div>

							<!-- Listing Image -->

							{{-- <div class="hotel_image">
								<img src="{{asset('file/wisata/'.$listwisata->foto_wisata)}}" alt="">
							</div> --}}
							<div class="hotel_image">
								<img src="{{asset('file/wisata/'.$listwisata->foto_wisata2)}}" alt="">
							</div>
							<div class="hotel_image">
								<img src="{{asset('file/wisata/'.$listwisata->foto_wisata3)}}" alt="">
							</div>

							<!-- Hotel Gallery -->

							{{-- <div class="hotel_gallery">
								<div class="hotel_slider_container">
									<div class="owl-carousel owl-theme hotel_slider">
										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="{{asset('file/wisata/'.$listwisata->foto_wisata)}}">
												<img src="{{asset('file/wisata/'.$listwisata->foto_wisata)}}">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="{{asset('file/wisata/'.$listwisata->foto_wisata2)}}">
												<img src="{{asset('file/wisata/'.$listwisata->foto_wisata2)}}" alt="https://unsplash.com/@grovemade">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="{{asset('file/wisata/'.$listwisata->foto_wisata3)}}">
												<img src="{{asset('file/wisata/'.$listwisata->foto_wisata3)}}" alt="https://unsplash.com/@fransaraco">
											</a>
										</div>

										
									</div>

									<!-- Hotel Slider Nav - Prev -->
									<div class="hotel_slider_nav hotel_slider_prev">
										<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
												<linearGradient id='hotel_grad_prev'>
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
									
									<!-- Hotel Slider Nav - Next -->
									<div class="hotel_slider_nav hotel_slider_next">
										<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
												<linearGradient id='hotel_grad_next'>
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
							</div> --}}

							<!-- Hotel Info Text -->

							<div class="row mt-3">
								<div class="col-lg-7">
									<div class="hotel_info_text text-justify">
										{!! $listwisata->deskripsi !!}
									</div>
								</div>

								<div class="col-lg-1"></div>
	
								<div class="col-lg-4">
									<div class="hotel_info_text">
										<h3 class="text-dark">Sarana dan Prasarana</h3>
										{{$listwisata->sarana}}
									</div>
		
									<div class="hotel_info_text">
										<h3 class="text-dark">Fasilitas Pendukung</h3>
										{{$listwisata->fasilitas}}
									</div>
		
									<div class="hotel_info_text">
										<h3 class="text-dark">Luas Wisata</h3>
										{{$listwisata->luas}}
									</div>
								</div>
							</div>

							<!-- Hotel Info Tags -->

							{{-- <div class="hotel_info_tags">
								<ul class="hotel_icons_list">
									<li class="hotel_icons_item"><img src="{{asset('landing/images/post.png')}}" alt=""></li>
									<li class="hotel_icons_item"><img src="{{asset('landing/images/compass.png')}}" alt=""></li>
									<li class="hotel_icons_item"><img src="{{asset('landing/images/bicycle.png')}}" alt=""></li>
									<li class="hotel_icons_item"><img src="{{asset('landing/images/sailboat.png')}}" alt=""></li>
								</ul>
							</div> --}}

						</div>


						<!-- Location on Map -->

						<div class="location_on_map">
							<div class="location_on_map_title">Lokasi Pada Peta</div>

							<!-- Google Map -->
		
							<div class="travelix_map">
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map" style="height: 400px"></div>
									</div>
								</div>
							</div>

						</div>

						<!-- Reviews -->

						<div class="reviews">
							<div class="reviews_title">reviews</div>
							<div class="reviews_container">
								@foreach ($komentar as $row)
								<div class="card mt-3">
									<div class="card-body mt-4">
										<!-- Review -->
										<div class="review">
											<div class="row">
												<div class="col-lg-1">
													<div class="review_image">
														<img src="{{asset('user.png')}}" alt="https://unsplash.com/@saaout">
													</div>
												</div>
												<div class="col-lg-11">
													<div class="review_content">
														<div class="review_title_container">
															<div class="review_title">'{{$row->nama_komentator}}'</div>
															<div class="review_rating" style="background-color: rgb(101, 0, 110);">
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
														</div>
														<div class="review_text">
															{!! $row->komentar !!}
														</div>
														<div class="review_name">{{$row->nama_wisata}}</div>
														<div class="review_date">{{ Carbon\Carbon::parse($row->tanggal_buat)->isoFormat('dddd, D MMMM Y')  }}</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>

						<!-- Contact -->

						<div class="contact" style="margin-top: 100px">
							<div class="contact_background" style="background-image:url({{asset('landing/images/contact.png')}})"></div>
					
							<div class="container">
								<div class="row">
									<div class="col-lg-5">
										<div class="contact_image">
											
										</div>
									</div>
									<div class="col-lg-7">
										<div class="contact_form_container">
											<div class="contact_title">Ratting</div>
											<form action="{{route('home.store')}}" id="contact_form" class="contact_form" method="POST">
												@csrf
												@method('POST')
												{{-- @if ($message = Session::get('sukses'))
													<div class="alert alert-success">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
														{{ $message }}
													</div>
												@endif --}}
												<select name="id_wisata" id="" class="contact_form_name input_field">
													<option value="{{$listwisata->id_wisata}}">{{$listwisata->nama_wisata}}</option>
												</select>
												<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="Nama" required="required" name="nama_komentator">
												<div class="repiuwbintang">
													<!-- Notice that the stars are in reverse order -->
													<input type="radio" id="star5" name="ratting" value="5">
													<label for="star5">&#9733;</label>
													<input type="radio" id="star4" name="ratting" value="4">
													<label for="star4">&#9733;</label>
													<input type="radio" id="star3" name="ratting" value="3">
													<label for="star3">&#9733;</label>
													<input type="radio" id="star2" name="ratting" value="2">
													<label for="star2">&#9733;</label>
													<input type="radio" id="star1" name="ratting" value="1">
													<label for="star1">&#9733;</label>
												</div>
												<textarea id="contact_form_message" class="text_field contact_form_message" name="komentar" rows="4" placeholder="Komentar" required="required" data-error="Please, write us a message."></textarea>
												<button type="submit" id="form_submit_button" class="form_submit_button button">Kirim Komentar<span></span><span></span><span></span></button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection
@section('script')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js" integrity="sha256-4lhPGIWv8kmCP7JRGJE4IdRod2IdQEZPui6f0uICZ6w=" crossorigin="anonymous"></script>

<script>
	// ==================leaflet=================
    // titik Lokasi Maps
    var map = L.map('map').setView([{{$listwisata->lat_lokasi}}, {{$listwisata->long_lokasi}}], 15);

    // menampilkan maps
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

	var myIcon = L.icon({
    iconUrl: '{{ asset('location1.png') }}',
    iconSize: [35, 40],
    });


    // membuat mark pada maps
    var marker = L.marker([{{$listwisata->lat_lokasi}}, {{$listwisata->long_lokasi}}],{icon: myIcon}).addTo(map);
    marker.bindPopup("<h6><strong>Wisata</strong></h6>{{$listwisata->nama_wisata}}<br>Lokasi {{$listwisata->lokasi}}<br><a href='https://www.google.com/maps?q={{$listwisata->lat_lokasi}}, {{$listwisata->long_lokasi}}' target='_blank class='text'>Buka Pada Google Maps</a>")
	// ====================leaflet=================
</script>
{{-- ================alert=============== --}}
@if (session('sukses'))
	<script>
		const Toast = Swal.mixin({
		toast: true,
		position: 'top-right',
		iconColor: 'white',
		customClass: {
			popup: 'colored-toast',
		},
		showConfirmButton: false,
		timer: 5500,
		timerProgressBar: true,
		})

		;(async () => {
		await Toast.fire({
			icon: 'success',
			title: "{{session('sukses')}}"
		})
		})()
	</script>
@endif
{{-- ================alert=============== --}}
@endsection