@extends('layouts.app')
@section('content')
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
                <form method="POST" action="{{ route('FAQ/update', $faq->id ) }}"enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Question</label>
                      <input type="text" class="form-control"required name="question" value='{{ $faq->question }}'  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Answer</label>
                        <input type="text" class="form-control"required name="answer" value='{{ $faq->answer }}'  id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Section</label>
                        <select name="section_id"  id=""class="form-control">
                            <option value="{{$faq->section_id}}">{{ $section->name}}</option>
                        @foreach ($qa as $section)
                        <option value="{{ $section->id}}">{{ $section->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>
@endsection
