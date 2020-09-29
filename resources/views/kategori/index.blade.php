@extends('template/template')

@section('title', "Home")

@section('body')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p></p>
</div>
@endif

<a href="/mempelai/kategori/create">
    <button class="btn btn-primary">Tambah</button>
</a>

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Deskripsi</th>
        <th>Kuota Kategori</th>
        <th>Date Created</th>
        <th>Actions</th>
    </tr>
    @foreach ($kategoris as $kategori)
    <tr>
        <td>{{ $kategori->id }}</td>
        <td>{{ $kategori->nama }}</td>
        <td>{{ $kategori->deskripsi }}</td>
        <td>{{ $kategori->kuota }}</td>
        <td>{{ $kategori->created_at }}</td>
        <td>
            <form action="/mempelai/kategori/{{ $kategori->id }}" method="post">

                <a href="/mempelai/kategori/{{ $kategori->id }}" title="show">
                    <i class="fas fa-eye text-success  fa-lg"></i>
                </a>

                <a href="/mempelai/kategori/{{ $kategori->id}}/edit">
                    <i class="fas fa-edit  fa-lg"></i>
                </a>

                @csrf
                @method('DELETE')
                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $kategoris->links() !!}

@endsection