@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong> 
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('wisata.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    
                    <div class="form-group mb-2">
                        <label for="">Nama Wisata</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Wisata disini..." name="nama_wisata" value="{{ old('nama_wisata') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Lokasi</label>
                        <input type="text" class="form-control" placeholder="Masukkan Lokasi Wisata disini..." name="lokasi" value="{{ old('lokasi') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Status Pemilikan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Pengelola Wisata disini..." name="pemilik" value="{{ old('pemilik') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tipe Wisata</label>
                        <select name="tipe_wisata" id="" class="form-control">
                            <option value="">== Pilih Tipe Wisata ==</option>
                            @foreach ($tipe_wisata as $row)
                            <option value="{{$row->tipe_wisata}}">{{$row->tipe_wisata}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Daya Tarik Wisata</label>
                        <input type="text" class="form-control" placeholder="Masukkan Daya Tarik Wisata disini..." name="daya_tarik" value="{{ old('daya_tarik') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Sarana</label>
                        <input type="text" class="form-control" placeholder="Masukkan Sarana disini..." name="sarana" value="{{ old('sarana') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Fasilitas Pendukung</label>
                        <input type="text" class="form-control" placeholder="Masukkan Fasilitas Pendukung disini..." name="fasilitas" value="{{ old('fasilitas') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Luas Wisata</label>
                        <input type="text" class="form-control" placeholder="Masukkan Luas Wisata disini..." name="luas" value="{{ old('luas') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Biaya Masuk</label>
                        <input type="number" class="form-control" placeholder="Masukkan Biaya Masuk Wisata disini..." name="biaya_masuk" value="{{ old('biaya_masuk') }}">
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" id="editor" cols="30" rows="10">{{ old('deskripsi') }}</textarea>
                    </div>
                    <div class="form-gorup mb-2">
                        <label for="">Foto Wajib 3</label>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Foto Wisata 1 <abbr title="" style="color: black">*</abbr> </label>
                        <input id="inputImg" type="file" accept="image/*" name="foto_wisata" class="form-control">
                        <img class="d-none w-25 h-25 my-2" id="previewImg" src="#" alt="Preview image">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Foto Wisata 2 <abbr title="" style="color: black">*</abbr></label>
                        <input id="inputImg2" type="file" accept="image/*" name="foto_wisata2" class="form-control">
                        <img class="d-none w-25 h-25 my-2" id="previewImg2" src="#" alt="Preview image">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Foto Wisata 3 <abbr title="" style="color: black">*</abbr></label>
                        <input id="inputImg3" type="file" accept="image/*" name="foto_wisata3" class="form-control">
                        <img class="d-none w-25 h-25 my-2" id="previewImg3" src="#" alt="Preview image">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Maps</label>
                        <div id="map">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Long</label>
                        <input type="text" name="long_lokasi" class="form-control" id="longitude" value="{{ old('long_lokasi') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Latitude</label>
                        <input type="text" name="lat_lokasi" id="latitude" class="form-control" value="{{ old('lat_lokasi') }}">
                    </div>   
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@section('script')
<script>
    // ===========img1===========
    document.getElementById('inputImg').addEventListener('change', function() {
        // Get the file input value and create a URL for the selected image
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg').setAttribute('src', e.target.result);
                document.getElementById('previewImg').classList.add("d-block");
            };
            reader.readAsDataURL(input.files[0]);
        }
    });
    // ==========================
    // ===========img2===========
    document.getElementById('inputImg2').addEventListener('change', function() {
        // Get the file input value and create a URL for the selected image
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg2').setAttribute('src', e.target.result);
                document.getElementById('previewImg2').classList.add("d-block");
            };
            reader.readAsDataURL(input.files[0]);
        }
    });
    // ==========================
    // ===========img3===========
    document.getElementById('inputImg3').addEventListener('change', function() {
        // Get the file input value and create a URL for the selected image
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg3').setAttribute('src', e.target.result);
                document.getElementById('previewImg3').classList.add("d-block");
            };
            reader.readAsDataURL(input.files[0]);
        }
    });
    // ==========================
</script>
<script>
    CKEDITOR.replace( 'editor', {
        filebrowserUploadMethod: 'form'
    });
</script>

{{-- leaflet --}}
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

    // membuat mark pada maps
    // var marker = L.marker([-3.6988652520988445, 128.17786254762765]).addTo(map);
    // marker.bindPopup("<br>Hello ini mark pertama</br><br>ini popup</br>")

    let marker = null;
    map.on('click', (event)=> {

    if(marker !== null){
        map.removeLayer(marker);
    }

    marker = L.marker([event.latlng.lat , event.latlng.lng]).addTo(map);
    document.getElementById('latitude').value = event.latlng.lat;
    document.getElementById('longitude').value = event.latlng.lng;
    
})
</script>
{{-- leaflet --}}
@endsection
@endsection