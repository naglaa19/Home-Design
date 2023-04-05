@extends('layouts.app')

@section('content')
<head> 
    <title>Users</title>
 </head>
{{-- message --}}
<div class="container">
    
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Photo</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            @foreach ($user as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><img src="{{ asset('images/profile/'. $user->image) }}" width="50" height="50" alt=""></td>
                    <td>
                        <a href="{{route('User/delete',$user->id)}}" onclick="return confirm('Are you sure? \n If you confirm you will remove this user ...')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection
