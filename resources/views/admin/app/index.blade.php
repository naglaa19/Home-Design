@extends('layouts.app')

@section('content')
<head> 
   <title>2D designs</title>
</head>
{{-- message --}}
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
             @endif
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            @foreach ($design as $design)
                <tr>
                    <th scope="row">{{$design->id}}</th>
                    <td>{{$design->name}}</td>
                    <td><img src="{{ asset('images/scan/'. $design->image) }}" width="50" height="50"
                        alt="">
                    </td>
                    <td>
                        <a href="{{route('app/edit',$design->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('app/delete',$design->id)}}" onclick="return confirm('Are you sure? \n If you confirm you will remove this design ...')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
        <a href="{{route('app/create')}}" class="btn btn-secondary ">Add New 2d design</a>
            
    </div>
</div>
</div>

@endsection
