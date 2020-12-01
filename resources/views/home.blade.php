@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Games <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Sex tOys</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Technology</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Arts</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Food & Craft</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Games</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Music</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Publishing</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Article</a>
        </li>
      </ul>
    </div>
    </div>
    
  </nav>
<div>
    <div class="jumbotron text-center">
        <h1 class="display-4">WarungIde.co</h1>
        <p class="lead">Punya Ide ? Post aja di WarungIde.co, Jangan sampai ide-ide brillian mu menghilang begitu saja</p>
        <hr class="my-4">
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Apa sih WarungIde ?</a>
        </p>
    </div>
</div>
<hr class="my-4">
<div class="container py-4">
    <div class="recomendation">
        <div class="head-cat">
            <h1 class="display-4 d-inline mr-3">Recomendation</h1>
            <a href="#" >Discover More ></a>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active border border-primary">
                    <div class="d-block w-100" style="height: 600px;background-color: grey">Hello</div>
                </div>
                <div class="carousel-item border border-primary">
                    <div class="d-block w-100" style="height: 600px;background-color: pink">Second Slide</div>
                </div>
                <div class="carousel-item border border-primary">
                    <div class="d-block w-100" style="height: 600px;background-color: yellow">Third 
                        bro</div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
  </div>
  <hr class="my-4">
  <div class="container">
    <div class="newest-project my-5 pb-5">
      <div class="head-cat">
        <h1 class="display-4 d-inline mr-3">Newest Project</h1>
        <a href="#" >Discover More ></a>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
              <img class="card-img-top" src="https://d2ih5qgee2kfcl.cloudfront.net/content/2019/09/17/Xxs7o8/t_5d807470cbb1b_700.jpg" alt="">
              <div class="card-body">
                  <h4 class="card-title">Next generation of AI will conquer Human Lust</h4>
                  <p class="card-text">Project on going ! go donate with us for best doll ever made by human. Future is here!</p>
              </div>
          </div>
      </div>
      </div>
    </div>

  </div>
  <hr class="my-4">
  <div class="container">

    <div class="games my-5 pb-5">
        <div class="head-cat text-center">
          <h1 class="display-4 d-inline mr-3">Games</h1>
          <a href="#" >Discover More ></a>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://cdn57.androidauthority.net/wp-content/uploads/2020/04/FortNite-Mobile-video-screenshot-Apps-Weekly-920x470.jpg" alt="Card image cap" style="height: 13rem">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.guim.co.uk/img/media/c6f7b43fa821d06fe1ab4311e558686529931492/168_84_1060_636/master/1060.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctZGVmYXVsdC5wbmc&enable=upscale&s=2441267a0824df3d55fa03ac63ec7a48" alt="Card image cap" style="height: 13rem">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://cnet2.cbsistatic.com/img/CBUI-VXAj_uOLW2n2ApCR810_2k=/1200x630/2018/04/26/3a94f7c7-d045-43c1-84af-5334bb065d76/pubgmobilejp.jpg" alt="Card image cap" style="height: 13rem">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </div>
  <hr class="my-4">
  <div class="container py-4">
    <div class="article-and-news">
        <div class="head-cat">
          <h1 class="display-4 d-inline mr-3">Article & News</h1>
          <a href="#" >Discover More ></a>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card" style="height: 28rem;">
                    <img class="card-img-top" src="https://wdef.com/wp-content/uploads/2018/06/sex-robots-1.jpg" alt="" style="height: 302px">
                    <div class="card-body">
                        <h4 class="card-title">Next generation of AI will conquer Human Lust</h4>
                        <p class="card-text">Project on going ! go donate with us for best doll ever made by human. Future is here!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card" style="height: 28rem;">
                    <img class="card-img-top" src="https://thegadgetflow.com/wp-content/uploads/2020/09/Petoi-Bittle-Palm-Size-Robot-Dog-01-1200x675.jpg" alt="" style="height: 302px">
                    <div class="card-body">
                        <h4 class="card-title">A yellow dog looks like not work at all</h4>
                        <p class="card-text">give it a try mate!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="article-and-news my-5 pb-5">

    </div>
    




</div>
@endsection
