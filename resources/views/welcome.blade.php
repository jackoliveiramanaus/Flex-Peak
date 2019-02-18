<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Flex Jack</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style-home.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="fundo">
            <div class="content">
               <div class="title m-b-md">
                    Escola Flex
                </div>

                <div class="links">
                    <a href="http://localhost:8000/aluno">
                        <i class="icon-bar"> Alunos</i>
                    </a>
                    <a href="http://localhost:8000/curso">
                        <i class="icon-bar"> Cursos</i>
                    </a>
                    <a href="http://localhost:8000/professor">
                        <i class="icon-bar"> Professores</i>
                    </a>                   
                    
                </div>
            </div>
        </div>
    </body>
</html>