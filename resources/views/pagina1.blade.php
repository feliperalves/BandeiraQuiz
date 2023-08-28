@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="h3 text-center text-bg-danger py-2 mt-1">
                Segunda Pergunta
            </p>
        </div>
    </div>
    <div class="card border-danger mx-auto mb-md-3 mt-md-2 " style="max-width: 20rem;">
        <img src="{{ asset('storage/imagens/suiça.png') }}" class="rounded mx-2 mt-2 d-block" alt="...">
        <div class="card-body ">
            <h5 class="card-title">Essa bandeira é de/a/o:</h5>
            <form action="{{ route('dadosPagina1') }}" method="POST">
                @csrf
                <div class="form-group py-4 ">
                    <label for="pergunta">
                        <h3> <strong> </strong>
                    </label>
                    <div class="form-check py-4">
                        <input class="form-check-input" type="radio" name="pergunta" value="A">
                        <label class="form-check-label" for="pergunta">
                            <h5> Argélia </h5>
                        </label>
                    </div>
                    <div class="form-check py-4">
                        <input class="form-check-input" type="radio" name="pergunta" value="B">
                        <label class="form-check-label" for="pergunta">
                            <h5> Venezuela </h5>
                        </label>
                    </div>
                    <div class="form-check py-4">
                        <input class="form-check-input" type="radio" name="pergunta" value="C">
                        <label class="form-check-label" for="pergunta">
                            <h5> Afeganistão </h5>
                        </label>
                    </div>
                    <div class="form-check py-4">
                        <input class="form-check-input" type="radio" name="pergunta" value="D">
                        <label class="form-check-label" for="pergunta">
                            <h5> Suiça </h5>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-sm">Próxima</button>
                <button onclick="window.location.href = '/';" type="button" class="btn btn-outline-danger btn-sm">Desistir</button>
            </form>
        </div>
    </div>
    <p class="h3 text-center text-bg-danger py-2">
        Todos os direitos reservados &copy;Copyright
    </p>
    <!--mx-2 mt-2 d-block -->
@endsection
