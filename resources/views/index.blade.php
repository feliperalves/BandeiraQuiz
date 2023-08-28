@extends('layout')
@section('content')
    <div class="jumbotron">
        <p class="h1 text-center py-4"> Quiz - Bandeiras</p>
    </div>
    <div class="row align-items-center">
        <div class="col-md-8 col-sm-8 text-center">
            <a href="#" class="img-thumbnail logo">
                <img class="img-fluid" src="https://images4.alphacoders.com/130/1307069.jpeg" />
            </a>
        </div>
        <div class="col-md-4 col-sm-4 text-center">
            <p>
            <h4>Este quiz tem o objetivo de avaliar o seu conhecimento acerca das bandeiras dos países!<br></h4>
            </p>
            <div class="card-footer py-2 text-center">
                <a href="/iniciar" class="btn btn-primary" role="button"> Começar </a>
            </div>
        </div>
    </div>
@endsection
