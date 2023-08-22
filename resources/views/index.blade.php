@extends('layout')
@section('content')
    <div class="jumbotron">
        <p class="h3 text-center py-4"> Quiz - Bandeiras</p>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 text-center imagem">
            <a href="#" class="img-thumbnail logo">
                <img class="img-fluid" src="https://m.media-amazon.com/images/I/71jTsxuseVL._AC_UF894,1000_QL80_.jpg" />
            </a>
        </div>
        <div class="col-md-6 col-sm-6 text-center py-5">
            <p class="texto">
                <h4>Este quiz é para saber o quanto você sabe sobre as bandeiras dos países!<br></h4>
            </p>
            <div class="card-footer py-4 text-center">
                
                    <a href="/iniciar" class="btn btn-primary" role="button"> Começar </a>
            
            </div>
        </div>
    </div>

@endsection
