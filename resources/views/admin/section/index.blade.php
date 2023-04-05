@extends('layouts.app')

@section('content')
<head> 
    <title>Sections</title>
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
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            @foreach ($section as $section)
                <tr>
                    <th scope="row">{{$section->id}}</th>
                    <td>{{$section->name}}</td>
                    <td>
                        <a href="{{route('section/edit',$section->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('section/delete',$section->id)}}" onclick="return confirm('Are you sure? \n If you confirm you will remove this section ...')" class="btn btn-danger">Delete</a>
                        <a href="{{route('section/show',$section->id)}}" class="btn btn-primary">View Questions</a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
        <a href="{{route('section/create')}}" class="btn btn-secondary ">Add New Section</a>
    </div>
</div>
</div>

@endsection
