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
                    <form action="{{ route('visimisi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    
                    <div class="form-group mb-4">
                        <label for="">Visi</label>
                        <textarea name="visi" id="editor" cols="30" rows="10">{{ old('visi') }}</textarea>
                    </div>  
                    <div class="form-group mb-4">
                        <label for="">Misi</label>
                        <textarea name="misi" id="editor2" cols="30" rows="10">{{ old('misi') }}</textarea>
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
    CKEDITOR.replace( 'editor2', {
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection
@endsection