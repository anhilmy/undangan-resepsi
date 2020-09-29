@extends('template/template')

@section('title', "Tambah Kategori")

@section('body')


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Buat kategori</h5>
        </div>
        <div class="card-body">
            <form action="/mempelai/kategori" method="POST">
                @csrf

                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama kategori">
                        @error('nama')
                        <div class="small" style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                    <div class="col-8">
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"
                            placeholder="Deskripsi kategori"></textarea>
                        @error('deskripsi')
                        <div class="small" style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Harga" class="col-4 col-form-label">Kuota kategori</label>
                    <div class="col-8">
                        <input class="form-control" type="text" name="kuota_kategori" id="kuota_kategori"
                            placeholder="Kuota kategori">
                        @error('kuota_kategori')
                        <div class="small" style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection