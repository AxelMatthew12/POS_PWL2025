@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('/kategori') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kategori_nama">Nama Kategori</label>
                    <input type="text" name="kategori_nama" id="kategori_nama" class="form-control" placeholder="Masukkan nama kategori" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('/kategori') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>
    </script>
@endpush
