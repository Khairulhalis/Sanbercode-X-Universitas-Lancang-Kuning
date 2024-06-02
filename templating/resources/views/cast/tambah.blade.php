@extends('layout.master')
@section('title')
halaman tambah
@endsection
@section('content')

    <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        <label>Umur:</label>
        <input type="number" name="umur" required><br>
        <label>Bio:</label>
        <textarea name="bio" required></textarea><br>
        <button type="submit">Simpan</button>
    </form>
@endsection
