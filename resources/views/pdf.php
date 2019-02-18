<?php 


// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Flex Jack</title>
        
      

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">       
            <div class="navbar-header">
                
                   title="Página Inicial" style="margin-top: -3px">
                    
                <button type="button" class="navbar-toggle" 
                        data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>               
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" id="link-white">
                    <li>
                        <a href="http://localhost:8000/" style="text-decoration: none">
                            <span class="glyphicon glyphicon-home"></span> 
                            <span id="underline">Painel</span>
                        </a>
                    </li>
              
            </div>       
        </nav> 
   
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            
        </div>
        @endif
        <div id="line-one">   
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center"> 
                        <h1><b>Alunos</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="http://localhost:8000/">Home</a></li>                  
                            <li class="active">Aluno</li>
                        </ol>
                        <br>
                        
                           class="btn btn-default btn-sm pull-right">
                            <span class="glyphicon glyphicon-plus"></span> Cadastrar</a>
                        <a href="http://localhost:8000/pdf" 
                           class="btn btn-default btn-sm pull-right">
                            <i class="fa fa-book"></i> Relatório</a>
                        
                    </div>           
                </div>
                <div class="row">
                    <div class="col-md-12">   
                        <br />
                        <h4 id="center"><b>ALUNOS CADASTRADOS ({{$total}})</b></h4>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th id="center">Código</th>
                                        <th id="center"<th>Nome</th>
                                        <th id="center"<th>Data de Nascimento</th>
                                        <th id="center">CEP</th>
                                        <th id="center"<th>Logradouro</th>                
                                        <th id="center">Numero</th>     
                                        <th id="center">Bairro</th>             
                                        <th id="center">Cidade</th>  
                                        <th id="center">Estado</th>
                                        <th id="center">Curso</th>                 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($aluno as $aluno)
                                    <tr>
                                        <td id="center">{{$aluno->id}}</td>
                                        <td title="Nome">{{$aluno->nome}}</td>
                                        <td title="Data de Nascimento">{{$aluno->data_nascimento}}</td>
                                        <td title="CEP" id="center">{{$aluno->cep}}</td>
                                        <td title="Logradouro" id="center">{{$aluno->logradouro}}</td>
                                        <td title="Numero" id="center">{{$aluno->numero}}</td>
                                        <td title="Bairro" id="center">{{$aluno->bairro}}</td>
                                        <td title="Cidade" id="center">{{$aluno->cidade}}</td>
                                        <td title="Estado" id="center">{{$aluno->estado}}</td>
                                        <td title="Curso" id="center">{{$aluno->curso_id}}</td>
                                        <td id="center">
                                            </td>
                                        <td id="center"> $aluno->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Editar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                       , $aluno->id)}}"                                                        
                                                                                                   
                                                <button type="submit" style="background-color: #fff">
                                                    <a><i class="fa fa-trash-o"></i></a>                                                    
                                                </button></form></td>               
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
             
                 id="up" 
                 style="display: none;" 
                 alt="Ícone Subir ao Topo" 
                 title="Subir ao topo?">
                 <html>
    <head>
    
            </body>
            </html>');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('relatorio.pdf');

