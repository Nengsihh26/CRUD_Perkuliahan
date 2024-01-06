@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Tambah Prodi</h1>
        <form action="{{ route('prodi.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="id_prodi">ID:</label>
                <input type="text" class="form-control" name="id_prodi" required>
            </div>

            <div class="form-group">
                <label for="nama_prodi">Nama:</label>
                <input type="text" class="form-control" name="nama_prodi" required>
            </div>

            <div class="form-group">
                <label for="mata_kuliah_id">Mata Kuliah:</label>
                <select class="form-control" name="mata_kuliah_id" required>
                    @foreach ($mata_kuliahList as $mata_kuliah)
                        <option value="{{ $mata_kuliah->id }}">{{ $mata_kuliah->nama_matkul }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Tambah</button>
        </form>

        <a href="{{ route('prodi.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Prodi</a>
    </div>
@endsection
