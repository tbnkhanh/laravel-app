@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products page</h1>
    {{-- <p>{{ $title }}</p> --}}
    @foreach ($myphone as $item)
        <h2>{{ $item }}</h2>
    @endforeach
</body>
</html>
@endsection
