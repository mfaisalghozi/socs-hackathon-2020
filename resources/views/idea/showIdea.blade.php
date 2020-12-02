@extends('layouts.app')

@section('content')

<div class="container mt-4">
  <a href="/home" class="btn btn-danger btn-lg" style="font-size:20px"><i class="fa fa-chevron-left"></i> Back</a>
  <a href="/home" class="btn btn-secondary btn-lg ml-2" style="font-size:20px"><i class="fa fa-home"></i> Home</a>
</div>
<hr class="my-4">
{{-- //ADD SHOW IDEA VIEW IN HERE CODE --}}

<div class="container mb-5">
  <div class="showcase">
    <div class="row my-5 text-center">
      <div class="col-lg-12">
        <h1 class="display-4">
          Ini Ide Gue Mana Ide Loe ?
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <img src="https://asianwiki.com/images/d/d9/Start-Up-CP1.jpg" class="img-fluid rounded" alt="Responsive image">
      </div>
      <div class="col-lg-8">
        <div class="progress goal-progress" style="height: 30px;">
          <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
        </div>
        <div class="row goal-info my-3">
          <div class="col-md-12">
            <h1 class="display-5">
              Rp. 420 of Rp 69420 Goal
            </h1>
          </div>
        </div>
        <div class="row donator-info my-3">
          <div class="col-md-12">
            <h1 class="display-5">
              5 Donator
            </h1>
          </div>
        </div>
        <div class="row time-info my-3">
          <div class="col-md-12">
            <h1 class="display-5">
              Waktu Tersisa : <br> 4 Hari 20 Jam 6 Menit 9 Detik
            </h1>
          </div>
        </div>
        <div class="row donate-button my-3">
          <div class="col-md-12 text-center">
            <a href="/idea/1/donate" class="btn btn-success btn-lg">Bantu Ide Ini <i class="fa fa-lightbulb-o" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
    <hr class="my-4">
      <div class="card text-center idea-info">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs row" id="myTab" role="tablist">
            <li class="nav-item col-md-3 idea-description">
              <a class="font-weight-bold nav-link active" href="#home" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Description</a>
            </li>
            <li class="nav-item col-md-3 idea-tier">
              <a class="font-weight-bold nav-link" id="profile-tab" data-toggle="tab" href="#tier" role="tab" aria-controls="tier" aria-selected="false">Tier Package</a>
            </li> 
            <li class="nav-item col-md-3 idea-faq">
              <a class="font-weight-bold nav-link" id="faq-tab" data-toggle="tab" href="#faq" role="tab" aria-controls="faq" aria-selected="false">FAQ</a>
            </li> 
            <li class="nav-item col-md-3 idea-comment">
              <a class="font-weight-bold nav-link" id="comment-tab" data-toggle="tab" href="#comment" role="tab" aria-controls="comment" aria-selected="false">Comment</a>
            </li>  
          </ul>
        </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="tab-pane fade show" id="tier" role="tabpanel" aria-labelledby="tier-tab">
            <div class="card-body">
              <h5 class="card-title">SILAHKAN BELI TIER KAMI KAKA</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="tab-pane fade show" id="faq" role="tabpanel" aria-labelledby="faq-tab">
            <div class="card-body">
              <h5 class="card-title">SELAMAT DATANG DI FREQUENTLY ASKED QUESTION</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="tab-pane fade show" id="comment" role="tabpanel" aria-labelledby="comment-tab">
            <div class="card-body">
              <h5 class="card-title">SELAMAT DATANG DI KOTAJA KOMENTAR RAKYAT JELATA</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        
      </div>
    <hr class="my-4">
</div>
</div>


@endsection