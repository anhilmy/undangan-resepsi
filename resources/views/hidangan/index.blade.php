@extends('template/template')

@section('title', "Home")

@section('body')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p></p>
</div>
@endif

<a href="/mempelai/hidangan/create">
    <button class="btn btn-primary"> Tambah </button>
</a>

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>description</th>
        <th>Price</th>
        <th>Date Created</th>
        <th>Actions</th>
    </tr>
    @foreach ($hidangans as $hidangan)
    <tr>
        <td>{{ $hidangan->id }}</td>
        <td>{{ $hidangan->nama }}</td>
        <td>{{ $hidangan->deskripsi }}</td>
        <td>{{ $hidangan->harga_per_porsi }}</td>
        <td>{{ $hidangan->created_at }}</td>
        <td>
            <form action="/mempelai/hidangan/{{ $hidangan->id }}" method="post">

                <a href="/mempelai/hidangan/{{ $hidangan->id }}" title="show">
                    <i class="fas fa-eye text-success  fa-lg"></i>
                </a>

                <a href="/mempelai/hidangan/{{ $hidangan->id}}/edit">
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

{!! $hidangans->links() !!}

@endsection