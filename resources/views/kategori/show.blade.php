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
        <td>{{ $kategori->id }}</td>
        <td>{{ $kategori->nama }}</td>
        <td>{{ $kategori->deskripsi }}</td>
        <td>{{ $kategori->kuota }}</td>
        <td>{{ $kategori->created_at }}</td>
    </tr>
    @endsection