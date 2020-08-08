@extends('templates.master')

@section('content')
    <div class="mt-2">
        <a href="/pertanyaan/create" type="button" class="btn btn-primary btn-sm">Buat pertanyaan baru</a>
    </div>    
    @if(session('berhasil'))
    <div class="alert alert-success mt-2">
        {{session('berhasil')}}
    </div>
    @endif
    @forelse($questions as $key => $quest)
    <div class="mt-2">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">{{$quest->judul}}</h5>

            <p class="card-text">
                {{$quest->isi}}
            </p>
            <a href="/pertanyaan/{{ $quest->id }}" class="card-link">Detail</a>
            <a href="/pertanyaan/{{ $quest->id }}/edit" class="card-link">Ubah</a>
            <form action="/pertanyaan/{{ $quest->id }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn-danger" value="Hapus">

            </form>
        </div>
    </div>
    @empty
    <div class="alert alert-success mt-2" role="alert">
        Belum Ada Pertanyaan!
    </div>
    @endforelse

    @endsection