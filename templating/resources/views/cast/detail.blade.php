@extends('layout.master')
@section('title')
halaman Detail
@endsection
@section('content')
    <h2>Detail Cast</h2>
    <p>ID: {{ $cast->id }}</p>
    <p>Nama: {{ $cast->nama }}</p>
    <p>Umur: {{ $cast->umur }}</p>
    <p>Bio: {{ $cast->bio }}</p>
    <a href=>Kembali</a>
@endsection
