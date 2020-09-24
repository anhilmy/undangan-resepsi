@extends('template/template')

@section('title', "Home")

@section('body')

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>description</th>
        <th>Price</th>
        <th>Date Created</th>
    </tr>
    <tr>
        <td>{{ $hidangan->id }}</td>
        <td>{{ $hidangan->nama }}</td>
        <td>{{ $hidangan->deskripsi }}</td>
        <td>{{ $hidangan->harga_per_porsi }}</td>
        <td>{{ $hidangan->created_at }}</td>
    </tr>
@endsection