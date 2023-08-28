<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QuiZ</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div style = "background-color: lightgray">
        <div class = "container">
        <main role = "main">
            @hasSection ('content')
                @yield('content')   
            @endif
        </main>
        </div>
    </div>
    <!--    <div class = "container">
                <div class = "card-footer">
                    <p class = "text-center text-bg-danger"> Todos os direitos reservados &copy;Copyright</p>
                </div>
            </div> 
    -->   
</body>
</html>