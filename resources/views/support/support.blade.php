@extends('layouts.app')

@section('content')

<div>
    <div class="jumbotron text-center">
        <h1 class="display-4">Support Info Section</h1>
      </div>
</div>

{{-- //ADD SHOW IDEA VIEW IN HERE CODE --}}

<div class="container my-4">
    <div class="row">
        <div class="col-lg-8">
            <h2>Support This Project</h2>
            <p>Got the idea ? now time to execute !</p>
            <div class="row tier-section">
                <div class="col-lg-12 default-tier p-4 border border-primary bg-warning my-3">
                    <h3>Donasi suka suka disini !</h3>
                    <p>Berapa pun nilainya akan kami terima !</p>
                </div>
                <div class="col-lg-12 default-tier p-4 border border-primary bg-warning my-3">
                    <h3>Donasi Paket 1</h3>
                    <p>Berapa pun nilainya akan kami terima !</p>
                </div>
                <div class="col-lg-12 default-tier p-4 border border-primary bg-warning my-3">
                    <h3>Donasi Paket 2</h3>
                    <p>Berapa pun nilainya akan kami terima !</p>
                </div>
                <div class="col-lg-12 default-tier p-4 border border-primary bg-warning my-3">
                    <h3>Donasi Paket 3</h3>
                    <p>Berapa pun nilainya akan kami terima !</p>
                </div>
                <div class="col-lg-12 default-tier p-4 border border-primary bg-warning my-3">
                    <h3>Donasi Paket 4</h3>
                    <p>Berapa pun nilainya akan kami terima !</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 px-5">
            <div class="row rules-section">
                <h4 class="font-weight-bold">Donating isn't beli.</h4>
                <p class="font-weight-text">You're supporting ambitious creative work.
                    Kickstarter isn’t a store. We don’t guarantee projects or investigate a creator’s ability to complete them. It’s the responsibility of the creator to complete their project as promised, and the claims of the project are theirs alone.
                </p>
            </div>
            <div class="row ads p-3 px-4">
                <div class="col-lg-12 border border-primary bg-secondary my-3 rounded" style="height: 250px">
                    <h5>Iklan disini bos</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection