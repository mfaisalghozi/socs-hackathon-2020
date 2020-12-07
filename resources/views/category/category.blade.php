@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        @foreach ($category as $item)
          <li class="nav-item mx-2">
            <a class="nav-link" href="/category/{{$item->id}}"> {{$item->category}} </a>
          </li>
        @endforeach
      </ul>
    </div>
    </div>
</nav>
<div>
    <div class="jumbotron text-center">
        <h1 class="display-4"> {{$categoryList->category}} Section</h1>
    </div>
</div>
<hr class="my-4 pb">
<div class="category my-5">
    <div class="container">
        <div class="row">
            @foreach ($categoryList->joinWithIdea as $list)
                <div class="col-md-4">
                    <div class="card my-3">
                        <img class="card-img-top" src="{{$list->ideaimg}}">
                        <div class="card-body">
                            <h4 class="card-title"> {{$list->ideaname}} </h4>
                            <p class="card-text"> {{$list->ideadescription}} </p>
                            <button type="button" class="btn btn-dark">
                              <a href="/idea/{{$list->id}} ">
                                More Info
                              </a>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection
