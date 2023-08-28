@extends('layout')
@section('content')

<div class = "card border">
    <div class = "card-body">
        <div class = "row">
            <div class = "col-md-12 col-sm-12 text-center">
                    <p class="texto">
                        </h4><strong>Pergunta 1: </strong></h4>
                    </p>
            </div>
            <div class="col-md-12 col-sm-12 text-center imagem">
                <a href="#" class="img-thumbnail logo">
                    <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Flag_of_Switzerland_%28Pantone%29.svg/200px-Flag_of_Switzerland_%28Pantone%29.svg.png" />
                </a>
            </div>
        </div>
        <form action="{{route('dadosPagina1')}}" method = "POST">
            @csrf

            <div class = "form-group py-4">
                <label for = "pergunta"> <h3> <strong> </strong></label>
                <div class = "form-check py-4">
                    <input class = "form-check-input" type = "radio" name = "pergunta" value = "A">
                    <label class = "form-check-label" for="pergunta">
                        <h5> Argélia </h5>
                    </label>
                </div>
                <div class = "form-check py-4">
                    <input class = "form-check-input" type = "radio" name = "pergunta" value = "B">
                    <label class = "form-check-label" for="pergunta">
                        <h5> Venezuela </h5>
                    </label>
                </div>
                <div class = "form-check py-4">
                    <input class = "form-check-input" type = "radio" name = "pergunta" value = "C">
                    <label class = "form-check-label" for="pergunta">
                        <h5> Afeganistão </h5>
                    </label>
                </div>
                <div class = "form-check py-4">
                    <input class = "form-check-input" type = "radio" name = "pergunta" value = "D">
                    <label class = "form-check-label" for="pergunta">
                        <h5> Suiça </h5>
                    </label>
                </div>
            </div>

            <button type = "submit" class = "btn btn-primary btn-sm">Próxima</button>
            <button onclick="window.location.href = '/';" type = "button" class = "btn btn-danger btn-sm">Desistir</button>
        </form>     