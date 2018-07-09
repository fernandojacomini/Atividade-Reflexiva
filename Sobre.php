<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">	
        <meta name="description" content="Sobre">
        <meta name="viewport" content="width=device-width, initial-scale=1">		
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	
        <link rel="stylesheet" href="css/bootstrap.min.css" />		
        <link rel="stylesheet" href="css/style.css" type="text/css" />
		
        <title>Sobre</title>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Google fonts -->
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
		
    </head>
    <body>

        <!-- Início da barra de navegação -->
        <div class="width-full-box">
            <div class="container">
                <nav class="navbar navbar-default">
                    <ul class="nav navbar-nav">
                        <li><a href="http://localhost/projeto/index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Início</a></li>
                        <li><a href="http://localhost/projeto/cadastro_candidatos.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cadastrar currículo</a></li>
                        <li><a href="http://localhost/projeto/Sobre.php"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Fim da barra de navegação -->

        <!--Início da seção 1 -->
        <section class="container">
            <div class="row">
                <div class="col-sm-12">
                    <header>
                        <h2><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Sobre o desenvolvedor</h2>
                        <span>Atividade Reflexiva disciplina de Fundamentos de programação para internet.</span>
                    </header>
                </div>
            </div> 
			<div class="jumbotron">
			    <p><h4>Atividade prática desenvolvida para a disciplina de Fundamentos de programação para a internet, do curso de Sistemas para internet, da Universidade Paranaense - UNIPAR e tem por objetivo tratar da temática sobre HTML, CSS, JS + jQuery, PHP e a ferramenta Git.</h4></p>
				<br>
				<p><h5>Desenvolvido por: Luiz Fernando da Silva.</h5></p>
				<p><h5>R.A.: 09012455.</h5></p>
				<br>
				<p><h5>Professor: Carlos Eduardo Simões Pelegrin</h5></p>
			</div>			
        </section>    
        <!--Fim da seção 1 -->
		
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function() {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html>