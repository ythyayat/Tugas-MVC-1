@extends('templates.master')

@section('content')
    <div class="card m-2 p-2">
        <form action="/pertanyaans" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul pertanyaan</label>
                <input type="text" class="form-control" name="judul"  value="{{ old('judul', '') }}" id="judul" placeholder="Apa yang ingin Anda tanyakan?">
                @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi">Isi pertanyaan</label>
                <textarea class="form-control" name="isi" id="isi" rows="3"> {{ old('isi', '') }} </textarea>
                @error('isi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tag">Judul pertanyaan</label>
                <input type="text" class="form-control" name="tag"  value="{{ old('tag', '') }}" id="tag" placeholder="Tambahkan tag(optional)">
            </div>
            <div>
                <button class="btn btn-primary" role="button">Buat</button>
            </div>
        </form>
    </div>
@endsection