@extends('layouts.app')

@section('content')

<div>
    <div class="jumbotron text-center">
        <h1 class="display-4"> {{$idea->ideaname}} </h1>
        <p class="lead">By {{$idea->joinWithUser->name}}</p>
    </div>
</div>

{{-- //ADD SHOW IDEA VIEW IN HERE CODE --}}

<div class="container my-4">
    <div class="row">
        <div class="col-lg-8">
            <h2>Support This Project</h2>
            <p>Got the idea ? now time to execute !</p>
            <div class="row tier-section">
                <div class="col-lg-12 shadow-lg p-3 mb-5 bg-white rounded" style="background-color: #DCDCDC;">
                    <h3>Donasi suka suka disini !</h3>
                    <p>Berapa pun nilainya akan kami terima !</p>
                    <button type="button" class="btn btn-dark"><a href="#">Donasi Sekarang</a></button>
                </div>

                @foreach ($idea->joinWithTier as $tier)
                    <div class="col-lg-12 shadow-lg p-3 mb-5 bg-white rounded" style="background-color: #DCDCDC;">
                        <h4>Tier Name</h4>
                            <p class="card-text">{{$tier->tiername}}</p>
                        <h4>Description</h4>
                            <p class="card-text">{{$tier->tierdescription}}</p>
                        <h4>Price</h4>
                            <p class="card-text">{{$tier->tierprice}}</p>
                        <a class="btn btn-dark" href="/idea/{{$idea->id}}/donate/{{$tier->id}}">Donasi Sekarang</a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-4 px-5">
            <div class="row rules-section">
                <h4 class="font-weight-bold">Donating isn't beli.</h4>
                <p class="font-weight-text">You're supporting ambitious creative work.
                    donating isn’t a store. We don’t guarantee projects or investigate a creator’s ability to complete them. It’s the responsibility of the creator to complete their project as promised, and the claims of the project are theirs alone.
                </p>
            </div>
            <div class="row ads p-3 px-4">
                <div class="col-lg-12 border border-primary bg-secondary my-3 rounded" style="height: 250px">
                    <h5>Iklan disini</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection