@extends('layouts.web')
@section('content')
<!-- Home -->

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('landing/images/about_background.jpg')}}"></div>
    <div class="home_content">
        <div class="home_title">tentang kami</div>
    </div>
</div>

<!-- Intro -->

<div class="intro">
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
        <div class="intro_title" style="margin-bottom: -60px;">Misi</div>
                    <p class="intro_text">{!!$visi->misi!!}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stats -->

{{-- <div class="stats">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title">years statistics</div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <p class="stats_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu vehicula pretium. Donec bibendum tristique condimentum. Aenean in lacus ligula. </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="stats_years">
                    <div class="stats_years_last">2016</div>
                    <div class="stats_years_new float-right">2017</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="stats_contents">
                    
                    <!-- Stats Item -->
                    <div class="stats_item d-flex flex-md-row flex-column clearfix">
                        <div class="stats_last order-md-1 order-3">
                            <div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
                                <img src="{{asset('landing/images/stats_1.png')}}" alt="">
                            </div>
                            <div class="stats_last_content">
                                <div class="stats_number">1642</div>
                                <div class="stats_type">Clients</div>
                            </div>
                        </div>
                        <div class="stats_bar order-md-2 order-2" data-x="1642" data-y="3527" data-color="#31124b">
                            <div class="stats_bar_perc">
                                <div>
                                    <div class="stats_bar_value"></div>
                                </div>
                            </div>
                        </div>
                        <div class="stats_new order-md-3 order-1 text-right">
                            <div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
                                <img src="{{asset('landing/images/stats_1.png')}}" alt="">
                            </div>
                            <div class="stats_new_content">
                                <div class="stats_number">3527</div>
                                <div class="stats_type">Clients</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Stats Item -->
                    <div class="stats_item d-flex flex-md-row flex-column clearfix">
                        <div class="stats_last order-md-1 order-3">
                            <div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
                                <img src="{{asset('landing/images/stats_2.png')}}" alt="">
                            </div>
                            <div class="stats_last_content">
                                <div class="stats_number">768</div>
                                <div class="stats_type">Returning Clients</div>
                            </div>
                        </div>
                        <div class="stats_bar order-md-2 order-2" data-x="768" data-y="145" data-color="#a95ce4">
                            <div class="stats_bar_perc">
                                <div>
                                    <div class="stats_bar_value"></div>
                                </div>
                            </div>
                        </div>
                        <div class="stats_new order-md-3 order-1 text-right">
                            <div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
                                <img src="{{asset('landing/images/stats_2.png')}}" alt="">
                            </div>
                            <div class="stats_new_content">
                                <div class="stats_number">145</div>
                                <div class="stats_type">Returning Clients</div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Item -->
                    <div class="stats_item d-flex flex-md-row flex-column clearfix">
                        <div class="stats_last order-md-1 order-3">
                            <div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
                                <img src="{{asset('landing/images/stats_3.png')}}" alt="">
                            </div>
                            <div class="stats_last_content">
                                <div class="stats_number">11546</div>
                                <div class="stats_type">Reach</div>
                            </div>
                        </div>
                        <div class="stats_bar order-md-2 order-2" data-x="11546" data-y="9321" data-color="#fa6f1b">
                            <div class="stats_bar_perc">
                                <div>
                                    <div class="stats_bar_value"></div>
                                </div>
                            </div>
                        </div>
                        <div class="stats_new order-md-3 order-1 text-right">
                            <div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
                                <img src="{{asset('landing/images/stats_3.png')}}" alt="">
                            </div>
                            <div class="stats_new_content">
                                <div class="stats_number">9321</div>
                                <div class="stats_type">Reach</div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Item -->
                    <div class="stats_item d-flex flex-md-row flex-column clearfix">
                        <div class="stats_last order-md-1 order-3">
                            <div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
                                <img src="{{asset('landing/images/stats_4.png')}}" alt="">
                            </div>
                            <div class="stats_last_content">
                                <div class="stats_number">3729</div>
                                <div class="stats_type">Items</div>
                            </div>
                        </div>
                        <div class="stats_bar order-md-2 order-2" data-x="3729" data-y="17429" data-color="#fa9e1b">
                            <div class="stats_bar_perc">
                                <div>
                                    <div class="stats_bar_value"></div>
                                </div>
                            </div>
                        </div>
                        <div class="stats_new order-md-3 order-1 text-right">
                            <div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
                                <img src="{{asset('landing/images/stats_4.png')}}" alt="">
                            </div>
                            <div class="stats_new_content">
                                <div class="stats_number">17429</div>
                                <div class="stats_type">More Items</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Add -->

<!-- Milestones -->

<div class="milestones">
    <div class="container">
        <div class="row">
            
            <!-- Milestone -->
            <div class="col-lg-6 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{asset('landing/images/milestone_1.png')}}" alt=""></div>
                    <div class="milestone_counter" data-end-value="{{$wisata}}">0</div>
                    <div class="milestone_text">Wisata</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-6 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{asset('landing/images/service-80.png')}}" alt=""></div>
                    <div class="milestone_counter" data-end-value="{{$ratting}}">0</div>
                    <div class="milestone_text">Review Pengunjung</div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('script')
@endsection