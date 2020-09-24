@extends('template/template')

@section('title', "Ubah Hidangan")

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
            <h5>Ubah hidangan {{$hidangan->nama}}</h5>
        </div>
        <div class="card-body">
            <form action="/mempelai/hidangan/{{$hidangan->id}}" method="POST">
                {{-- <form action="" method="POST"> --}}
                @csrf
                @method("PUT")

                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama hidangan"
                            value="{{$hidangan->nama}}">
                        @error('nama')
                        <div class="small" style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                    <div class="col-8">
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"
                            placeholder="Deskripsi hidangan">{{ $hidangan->deskripsi}}</textarea>
                        @error('deskripsi')
                        <div class="small" style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Harga" class="col-4 col-form-label">Harga per porsi</label>
                    <div class="col-8">
                        <input class="form-control" type="text" name="harga_per_porsi" id="harga_per_porsi"
                            placeholder="Harga hidangan" value="{{$hidangan->harga_per_porsi}}">
                        @error('harga_per_porsi')
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