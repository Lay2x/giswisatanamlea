@extends('layouts.web')
@section('content')
<!-- Home -->

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('landing/images/contact_background.jpg')}}"></div>
    <div class="home_content">
        <div class="home_title">Kontak</div>
    </div>
</div>

<!-- Contact -->

{{-- <div class="contact_form_section">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Contact Form -->
                <div class="contact_form_container">
                    <div class="contact_title text-center">get in touch</div>
                    <form action="#" id="contact_form" class="contact_form text-center">
                        <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
                        <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                        <input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
                        <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                        <button type="submit" id="form_submit_button" class="form_submit_button button trans_200">send message<span></span><span></span><span></span></button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div> --}}

<!-- About -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                
                <!-- About - Image -->

                <div class="about_image">
                    <img src="{{asset('landing/images/man.png')}}" alt="">
                </div>

            </div>

            <div class="col-lg-4">
                
                <!-- About - Content -->

                <div class="about_content">
                    <div class="logo_container about_logo">
                        <div class="logo"><a href="#"><img src="{{asset('landing/images/logo.png')}}" alt="">{{$konf->instansi_setting}}</a></div>
                    </div>
                    <p class="about_text">Halaman website ini mencakup informasi kontak dan berbagai akun media sosial yang dikelola langsung oleh kantor Dinas Pariwisata Namlea. Pengelolaan informasi ini dilakukan oleh admin kantor tersebut. Selain itu, halaman ini juga mencantumkan lokasi kantor</p>
                    {{-- <ul class="about_social_list">
                        <li class="about_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li class="about_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="about_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="about_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li class="about_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul> --}}
                </div>

            </div>

            <div class="col-lg-3">
                
                <!-- About Info -->

                <div class="about_info">
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

<!-- Google Map -->
    
<div class="travelix_map">
    <div id="google_map" class="google_map">
        <div class="map_container">
            <div id="map">{!!$konf->maps_setting!!}</div>
        </div>
    </div>
</div>

@endsection
@section('script')
@endsection