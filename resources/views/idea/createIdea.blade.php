@extends('layouts.app')

@section('content')

<div>
    <div class="jumbotron text-center">
        <h1 class="display-4">CREATING NEW IDEA</h1>
      </div>
</div>
{{-- Form for submiting new Idea Project --}}

<div class="container my-4">
    <form  method="POST" action="/idea" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8 py-3">
                <div class="form-group">
                    <label for="ideaname">Idea Name</label>
                    <input type="text" class="form-control" id="ideaname" class="form-control @error('ideaname') is-invalid @enderror" name="ideaname" required autocomplete="" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">File Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                      </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="descriptionInput">Description</label>
            <textarea class="form-control" id="descriptionInput" rows="5" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus></textarea>

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="qaInput">Frequently Asked Question</label>
            <textarea class="form-control" id="qaInput" rows="3" type="text" class="form-control @error('question') is-invalid @enderror" name="qa" required autocomplete="question" autofocus></textarea>

            @error('question')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="goalInput">Goal Target Earning</label>
            <input type="text" class="form-control" id="goalInput" type="text" @error('goal') is-invalid @enderror" name="goal" required autocomplete="goal" autofocus>

            @error('goal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="categorySelection">Category</label>
            <select class="form-control" id="categorySelection" name="category">
            @foreach($category as $c)
                <option value="{{$c->id}}">{{$c->category}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Tier Amount</label>
            <select class="form-control" id="exampleFormControlSelect1" name="tierAmount">
              <option value="1">1 Tier Package</option>
              <option value="2">2 Tier Package</option>
              <option value="3">3 Tier Package</option>
              <option value="4">4 Tier Package</option>
              <option value="5">5 Tier Package</option>
            </select>
        </div>
        <div class="form-group">
            <label for="example-date-input">Idea Deadline</label>
            <input class="form-control" type="date" id="example-date-input" name="dateDeadline">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" id="exampleFormControlInput1" name="user_id" value="{{Auth::user()->id}}">
        </div>
        <div class="form-group row justify-content-center mt-5">
            <div class="col-md-8 text-center">
                <button type="submit" class="btn btn-primary btn-lg">
                    {{ __('Create Idea') }}
                </button>
            </div>
        </div>
      </form>
</div>

@endsection