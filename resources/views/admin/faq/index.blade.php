@extends('layouts.app')

@section('content')
<head> 
    <title>FAQ</title>
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
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            @foreach ($faq as $faq)
                <tr>
                    <th scope="row">{{$faq->id}}</th>
                    <td>{{$faq->question}}</td>
                    <td>{{$faq->answer}}</td>
                    <td>
                        <a href="{{route('FAQ/edit',$faq->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('FAQ/delete',$faq->id)}}" onclick="return confirm('Are you sure? \n If you confirm you will remove this Question ...')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
        <a href="{{route('FAQ/create')}}" class="btn btn-secondary ">Add New Question</a>
    </div>
</div>
</div>

@endsection
