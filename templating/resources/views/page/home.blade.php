@extends('layouts.master')
@section('title')
Selamat datang!
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberBook</title>
    @endsection
    @section('content')
</head>
<body>
    <h1>SanberBook</h1>
    <h2>Social Media Developer Santai Berkualitas</h2>
    <p>Belajar dan berbagi agar hidup ini semakin santai dan berkualitas</p>
    <h3>Benefit Join di SanberBook</h3>
    <ul>
        <li>Mendapatkan motivasi dari sesama developer</li>
        <li>Sharing knowledge dari para mastah Sanber</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>
    <h3> Cara Bergabung ke SanberBook </h3>
    <ol>
        <li>Mengunjungi website ini</li>
        <li>Mendaftar <a href="{{ url('/register') }}">di Form Sign Up</a></li>
        <li>Selesai!</li>
    </ol> 
</body>
</html>
@endsection