@extends('layouts.master')
@section('title')
halaman register
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="{{ url('/welcome') }}" method="POST">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br>

        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>

        <p>Nationality:</p>
        <select name="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="english">English</option>
            <option value="Arabic">Arabic</option>
            <option value="Japanese">Japanese</option>

            <option value="other">Other</option>
        </select><br>

        <p>Language spoken:</p>
        <input type="checkbox" name="language[]" value="Bahasa Indonesia">
        <label for="language1">Bahasa Indonesia</label><br>
        <input type="checkbox" name="language[]" value="English">
        <label for="language2">English</label><br>
        <input type="checkbox" name="language[]" value="Arabic">
        <label for="language2">Arabic</label><br>
        <input type="checkbox" name="language[]" value="Japanese">
        <label for="language2">Japanese</label><br>
        <input type="checkbox" name="language[]" value="Other">
        <label for="language3">Other</label><br>

        <p>Bio:</p>
        <textarea name="bio" rows="10" cols="30"></textarea><br>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
@endsection