@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>3D viewer & AR</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/virtual.css')}}">
    </head>
    <body>
    </body>
</html>
{{-- content  --}}

@endsection