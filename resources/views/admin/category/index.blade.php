@extends('layouts.app')

@section('content')
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
            @foreach ($category as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>pic</td>
                    <td>
                        <a href="{{route('Category/edit',$category->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('Category/delete',$category->id)}}" onclick="return confirm('Are you sure? \n If you confirm you will remove all the images in this category ...')" class="btn btn-danger">Delete</a>
                        <a href="{{route('Category/show',$category->id)}}" class="btn btn-primary">View Images</a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
        <a href="{{route('Category/create')}}" class="btn btn-secondary ">Add New Category</a>
        <nav aria-label="pagination">
            <ul class="pagination">
                <li><a href=""><span aria-hidden="true">«</span><span class="visuallyhidden">previous set of pages</span></a></li>
                <li><a href=""><span class="visuallyhidden">page </span>1</a></li>
                <li><a href="" aria-current="page"><span class="visuallyhidden">page </span>2</a></li>
                <li><a href=""><span class="visuallyhidden">page </span>3</a></li>
                <li><a href=""><span class="visuallyhidden">page </span>4</a></li>
                <li><a href=""><span class="visuallyhidden">next set of pages</span><span aria-hidden="true">»</span></a></li>
            </ul>
        </nav>
            
    </div>
</div>
</div>

@endsection
