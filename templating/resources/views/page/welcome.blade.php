@extends('layouts.master')
@section('title')
Selamat Datang
    <title>Selamat Datang</title>
    @endsection
    @section('content')
</head>
<body>
    <h1>SELAMAT DATANG, {{ $firstName }} {{ $lastName }}!</h1>
    <h3>Terima Kasih telah bergabung di SanberBook. Social Media kita bersama!</h3>
</body>
</html>
@endsection