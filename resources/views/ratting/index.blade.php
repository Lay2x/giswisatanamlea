@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
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
                                <th>Nama Wisata</th>
                                <th>Nama Komentar</th>
                                <th>Ratting</th>
                                <th>Komentar</th>
                                <th>Tanggal Komentar Di Buat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($komentar as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->nama_wisata }}</td>
                                    <td>{{ $row->nama_komentator }}</td>
                                    @if ($row->ratting == 1)
                                        <td>
                                            <i class="fas fa-star"></i>
                                        </td>
                                    @endif
                                    @if ($row->ratting == 2)
                                        <td>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </td>
                                    @endif
                                    @if ($row->ratting == 3)
                                        <td>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </td>
                                    @endif
                                    @if ($row->ratting == 4)
                                        <td>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </td>
                                    @endif
                                    @if ($row->ratting == 5)
                                        <td>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </td>
                                    @endif
                                    <td>{!! Str::limit($row->komentar, 100, '...') !!}</td>
                                    <td>{{ Carbon\Carbon::parse($row->tanggal_buat)->isoFormat('dddd, D MMMM Y')  }}</td>
                                    <td>
                                        @if ($row->publish == "yes")
                                            <form action="{{ route('ratting.update', $row->id_ratting) }}" method="POST" style="display: inline-block">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-warning btn-xs btn-flat show_unpublish"><i class="fas fa-undo"> Unpublish</i></button>
                                            </form>
                                        @else
                                            <form action="{{ route('ratting.update', $row->id_ratting) }}" method="POST" style="display: inline-block">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-success btn-xs btn-flat show_publish"><i class="fas fa-upload"> Publish</i></button>
                                            </form>
                                        @endif
                                        <form action="{{ route('ratting.destroy', $row->id_ratting) }}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs btn-flat show_confirm"><i class="fas fa-trash"> Delete</i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection