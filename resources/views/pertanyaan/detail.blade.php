@extends('templates.master')

@section('content')
    <div class="mt-2">
        <a href="/pertanyaan/create" type="button" class="btn btn-primary btn-sm">Buat pertanyaan baru</a>
    </div>    

    <div class="mt-2">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">{{$questions->judul}}</h5>

            <p class="card-text">
                {{$questions->isi}}
            </p>
            <a href="/pertanyaan" class="card-link">Kembali</a>
            <a href="/pertanyaan/{{ $questions->id }}/edit" class="card-link">Ubah</a>
            <a href="#" class="card-link">Hapus</a>
        </div>
    </div>
@endsection