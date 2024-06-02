@extends('layout.master')
@section('title')
halaman Edit
@endsection
@section('content')
    <form action="{{ route('cast.update', $cast->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $cast->nama }}" required><br>
        <label>Umur:</label>
        <input type="number" name="umur" value="{{ $cast->umur }}" required><br>
        <label>Bio:</label>
        <textarea name="bio" required>{{ $cast->bio }}</textarea><br>
        <button type="submit">Update</button>
    </form>
@endsection
