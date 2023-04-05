@extends('layouts.app')

@section('content')
<head> 
    <title>Contacts</title>
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
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Message</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            @foreach ($contact as $contact)
                <tr>
                    <th scope="row">{{$contact->name}}</th>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->message}}</td>
                    <td>
                        <a href="{{route('contact/delete',$contact->id)}}" onclick="return confirm('Are you sure? \n If you confirm you will remove all the images in this issue ...')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
       
    </div>
</div>
</div>

@endsection
