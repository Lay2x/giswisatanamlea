@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                    <a href="{{ route('wisata.create') }}" class="btn btn-dark btn-sm" style="float: right;"><i class="fas fa-plus">Tambah</i></a>
                </div>
                <div class="card-body table table-responsive">
                    @if ($message = Session::get('sukses'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $message }}
                    </div>
                    @endif
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Wisata</th>
                                <th>Lokasi</th>
                                <th>Status Pemilikan</th>
                                <th>Daya Tarik Wisata</th>
                                <th>Sarana Dan Prasarana</th>
                                <th>Fasilitas Pendukung</th>
                                <th>Luas Wisata</th>
                                <th>Biaya Masuk</th>
                                <th>Tipe Wisata</th>
                                <th>Deskripsi</th>
                                <th>Foto 1</th>
                                <th>Foto 2</th>
                                <th>Foto 3</th>
                                <th>Kordinat Long dan Lat Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wisata as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->nama_wisata }}</td>
                                    <td>{{ $row->lokasi }}</td>
                                    <td>{{ $row->pemilik }}</td>
                                    <td>{{ $row->daya_tarik }}</td>
                                    <td>{{ $row->sarana }}</td>
                                    <td>{{ $row->fasilitas }}</td>
                                    <td>{{ $row->luas }}</td>
                                    <td>Rp. {{ number_format($row->biaya_masuk) }}</td>
                                    <td>{{ $row->tipe_wisata }}</td>
                                    <td>{!! Str::limit($row->deskripsi, 100, '...') !!}</td>
                                    <td><img src="{{ asset('file/wisata/'.$row->foto_wisata) }}" alt="" class="img-fluid" style="width:200px; height:200px; max-width:100%;"></td>
                                    <td><img src="{{ asset('file/wisata/'.$row->foto_wisata2) }}" alt="" class="img-fluid" style="width:200px; height:200px; max-width:100%;"></td>
                                    <td><img src="{{ asset('file/wisata/'.$row->foto_wisata3) }}" alt="" class="img-fluid" style="width:200px; height:200px; max-width:100%;"></td>
                                    <td>{{ $row->long_lokasi }}, {{ $row->lat_lokasi }}</td>
                                    <td>
                                        <a href="{{ route('wisata.edit', $row->id_wisata) }}" class="btn btn-primary btn-xs" style="display: inline-block"><i class="fas fa-edit">Edit</i></a>
                                        {{-- <a href="{{ route('wisata.show', $row->id_wisata) }}" class="btn btn-warning btn-xs" style="display: inline-block;" target="_blank"><i class="fas fa-print">Print</i></a> --}}
                                        <form action="{{ route('wisata.destroy', $row->id_wisata) }}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs btn-flat show_confirm"><i class="fas fa-trash"> Delete</i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3" id="map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>

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
    marker.bindPopup("<h6><strong>Wisata</strong></h6>{{$row->nama_wisata}} <br>Lokasi {{$row->lokasi}}")
    @endforeach
</script>
@endsection