@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <form method="POST" action="{{ route('FAQ/store') }}"enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Question</label>
                      <input type="text" class="form-control"required name="question"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Answer</label>
                        <input type="text" class="form-control"required name="answer"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Section</label>
                      <select name="section_id" id="" class="form-control" required>
                          @foreach ($section as $section)
                              <option value="{{ $section->id }}">{{ $section->name }}</option>
                          @endforeach
                      </select>
                  </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
        </div>
    </div>
</div>
@endsection
