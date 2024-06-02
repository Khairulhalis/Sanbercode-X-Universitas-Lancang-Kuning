@extends('layout.master')
@section('title')
halaman tampil
@endsection
@section('content')
    <h2>Daftar Cast</h2>
    <a href="{{ route('cast.create') }}">Tambah Cast</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Bio</th>
            <th>Aksi</th>
        </tr>
        @foreach ($casts as $cast)
            <tr>
                <td>{{ $cast->id }}</td>
                <td>{{ $cast->nama }}</td>
                <td>{{ $cast->umur }}</td>
                <td>{{ $cast->bio }}</td>
                <td>
                    <a href="{{ route('cast.show', $cast->id) }}">Lihat</a>
                    <a href="{{ route('cast.edit', $cast->id) }}">Edit</a>
                    <form action="{{ route('cast.destroy', $cast->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
