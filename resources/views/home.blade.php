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
        <h1 class="display-4">WarungIde.co</h1>
        <p class="lead">Punya Ide ? Post aja di WarungIde.co, Jangan sampai ide-ide brillian mu menghilang begitu saja</p>
    </div>
</div>
<hr class="my-4">
<div class="container py-4">
    <div class="recomendation">
        <div class="head-cat">
            <h1 class="display-4 d-inline mr-3">Recommendation</h1>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active shadow-none p-3 mb-5 bg-light rounded">
                    <div class="d-block w-100" style="height: 600px;">
                      <img src="https://picsum.photos/id/1018/1110/600" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
                <div class="carousel-item shadow-none p-3 mb-5 bg-light rounded">
                    <div class="d-block w-100" style="height: 600px;">
                      <img src="https://picsum.photos/id/1043/1110/600" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
                <div class="carousel-item shadow-none p-3 mb-5 bg-light rounded">
                    <div class="d-block w-100" style="height: 600px;">
                      <img src="https://picsum.photos/id/1006/1110/600" class="img-fluid" alt="Responsive image">
                    </div>
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
                  <h4 class="card-title">Generation AI by Deep Mind Powered by Google</h4>
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis sint consectetur assumenda mollitia, recusandae qui architecto laborum aspernatur ipsa nobis!!</p>
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
                    <div class="card-body text-center">
                      <h5 class="card-title">Fortnite Box</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.guim.co.uk/img/media/c6f7b43fa821d06fe1ab4311e558686529931492/168_84_1060_636/master/1060.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctZGVmYXVsdC5wbmc&enable=upscale&s=2441267a0824df3d55fa03ac63ec7a48" alt="Card image cap" style="height: 13rem">
                    <div class="card-body text-center">
                      <h5 class="card-title">Minecraft Tools</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://cnet2.cbsistatic.com/img/CBUI-VXAj_uOLW2n2ApCR810_2k=/1200x630/2018/04/26/3a94f7c7-d045-43c1-84af-5334bb065d76/pubgmobilejp.jpg" alt="Card image cap" style="height: 13rem">
                    <div class="card-body text-center">
                      <h5 class="card-title">PUBG Weapon Chain</h5>
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
                    <img class="card-img-top" src="https://picsum.photos/id/1035/538/302" alt="" style="height: 302px">
                    <div class="card-body">
                        <h4 class="card-title">Next generation of AI will conquer Human Lust</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sit sed enim, vero incidunt nobis eveniet laboriosam iste ex !</p>
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
