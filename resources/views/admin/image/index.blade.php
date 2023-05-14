@extends('layouts.app')

@section('content')
<head> 
    <title>Images</title>
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
                <th scope="col">Discreption</th>
                <th scope="col">Category</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            @foreach ($images as $image)
                <tr>
                    <th scope="row">{{$image->id}}</th>
                    <td>{{$image->name}}</td>
                    <td><img src="{{ asset('images/images/'. $image->image) }}" width="50" height="50"
                        alt="">
                    </td>
                    <td>{{$image->discreption}}</td>
                    <td> 
                        <?php
                        $img = $image->category_id;
                        $category = App\Models\Category::select('name')->where('id', $img)->first();
                        ?>
                        {{ $category->name }}</td>
                    <td>
                        <a href="{{ route('Image/edit',$image->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('Image/delete',$image->id) }}" onclick="return confirm('Are you sure? \n If you confirm you will remove this image ...')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
        <a href="{{ route('Image/create') }}" class="btn btn-secondary ">Add New Image</a>
       {{-- <div class="d-flex justify-content-center" style="position: relative;
       left: 40%; width:50px;">
            {!! $images->links() !!}
        </div> --}}
    </div>
</div>
</div>
@endsection