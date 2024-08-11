@extends('layouts.web')
@section('content')
<!-- Home -->

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('landing/images/about_background.jpg')}}"></div>
    <div class="home_content">
        <div class="home_title">Wisata</div>
    </div>
</div>

<!-- Offers -->

<div class="offers">


    <!-- Offers -->

    <div class="container">
        <div class="row">
            <div class="col-lg-1 temp_col"></div>

            <div class="col-lg-12">
                <!-- Offers Grid -->

                <div class="offers_grid">

                    <!-- Offers Item -->

                    @foreach ($wisata as $row)
                    <div class="offers_item rating_4">
                        <div class="row">
                            <div class="col-lg-1 temp_col"></div>
                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">
                                    <!-- Image by https://unsplash.com/@kensuarez -->
                                    <div class="offers_image_background" style="background-image:url({{asset('file/wisata/'.$row->foto_wisata)}})"></div>
                                    <div class="offer_name"><a href="{{ url('wisata/detail-wisata', $row->slug_wisata) }}">{{$row->nama_wisata}}</a></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">Rp.{{number_format($row->biaya_masuk)}}<span>Biaya Masuk</span></div>
                                    <p class="offers_text">{!! Str::limit($row->deskripsi, 200, '...') !!}</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="{{asset('landing/images/post.png')}}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{asset('landing/images/compass.png')}}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{asset('landing/images/bicycle.png')}}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{asset('landing/images/sailboat.png')}}" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="button book_button"><a href='{{ url('wisata/detail-wisata', $row->slug_wisata) }}'>Selengkapnya<span></span><span></span><span></span></a></div>
                                    <div class="offer_reviews">
                                        <div class="offer_reviews_content">
                                            <div class="offer_reviews_title">Ratt</div>
                                        </div>
                                        <div class="offer_reviews_rating text-center">{{ number_format($row->avg_ratting)}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>		
</div>

@endsection
@section('script')
@endsection