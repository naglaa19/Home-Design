@extends('layouts.app')

@section('content')
{{-- message --}}
<div class="container">
    
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="col">User</th>
                <th scope="col">Comment</th>
                <th scope="col">Design</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            @foreach ($design as $design)
                <tr>
                    <th scope="row">{{$design->name}}</th>
                    <td><img src="{{ asset('images/designs/'. $design->image) }}" width="60" height="60" alt=""></td>
                    <td>
                        <a href="{{route('design/delete',$design->id)}}" onclick="return confirm('Are you sure? \n If you confirm you will remove this design ...')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
       
    </div>
</div>
</div>

@endsection
