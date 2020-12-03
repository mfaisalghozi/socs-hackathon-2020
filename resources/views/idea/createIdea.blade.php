@extends('layouts.app')

@section('content')

<div>
    <div class="jumbotron text-center">
        <h1 class="display-4">CREATING NEW IDEA</h1>
      </div>
</div>
{{-- Form for submiting new Idea Project --}}

<div class="container my-4">
    <form>
        <div class="row">
            <div class="col-md-8 py-3">
                <div class="form-group">
                    <label for="ideaNameInput">Idea Name</label>
                    <input type="email" class="form-control" id="ideaNameInput">
                  </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">File Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="descriptionInput">Description</label>
            <textarea class="form-control" id="descriptionInput" rows="5"></textarea>
          </div>
        <div class="form-group">
            <label for="goalInput">Goal</label>
            <input type="text" class="form-control" id="goalInput">
        </div>
        @php 
        @endphp
        <div class="form-group">
            <label for="exampleFormControlSelect1">Tier Amount</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1 Tier Package</option>
              <option>2 Tier Package</option>
              <option>3 Tier Package</option>
              <option>4 Tier Package</option>
              <option>5 Tier Package</option>
            </select>
        </div>
        @for($i = 0; $i < 5; $i++)
        <div class="row">
            <div class="col-md-4 py-3">
                <div class="form-group">
                    <label for="formGroupExampleInput">Tier Title</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="form-group">
                    <label for="formGroupExampleInput">Tier Price</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="form-group">
                    <label for="formGroupExampleInput">Tier Description</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
            </div>
        </div>
        @endfor
      </form>
</div>

@endsection