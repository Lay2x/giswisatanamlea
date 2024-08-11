@extends('layouts.index')
@section('content')
    <?php
    $konf = DB::table('setting')->first();
    ?>
    <?php
    $title = 'Home';
    ?>
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        {{-- @if (Auth::user()->role == 'Admin') --}}
            <div class="row">
                <div class="col-lg-4">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$wisata}}</h3>
                            <p>Wisata</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <a href="{{ route('wisata.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$rattingpublis}}</h3>
                            <p>Komentar Yang Di Publish</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <a href="{{ route('ratting.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$rattingnopublish}}</h3>
                            <p>Komentar Yang Tidak Di Publish</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comment-slash"></i>
                        </div>
                        <a href="{{ route('ratting.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        {{-- @endif --}}
    </div>
@endsection
