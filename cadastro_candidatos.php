<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">	
        <meta name="description" content="cadastro_candidatos">
        <meta name="viewport" content="width=device-width, initial-scale=1">		
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	
        <link rel="stylesheet" href="css/bootstrap.min.css" />		
        <link rel="stylesheet" href="css/style.css" type="text/css" />

        <title>Cadastrar Currículo</title>

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

        <!--Nesta seção temos os dados do cliente -->
        <section class="container">
            <div class="row">
                <div class="col-sm-12">
                    <header>
                        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Dados do Candidato</h2>
                        <span>Os campos marcados com (*) são de preenchimento obrigatório!</span>
                    </header>
                </div>
            </div>

            <!-- Nome e email do candidato -->

		<form action="enviar.php" method="post" class="contactForm">	
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="txtNomeCompleto" class="col-sm-3 col-md-1 control-label">* Nome:</label>
                    <div class="col-sm-1 col-md-5">
                        <input type="text" id="txtNomeCompleto" class="form-control" placeholder="Nome completo" required>
                    </div>
                    <label for="txtEmail" class="col-sm-1 col-md-2 control-label">Email:</label>
                    <div class="col-sm-4 col-md-4">
                        <input type="email" class="form-control" id="txtEmail" placeholder="Preencha o email">
                    </div>                 
                </div>
            </div> <!-- Fim nome e email do candidato -->

            <!-- Dados pessoais do candidato -->
            <div class="row">
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <label for="txtCpf">* Cpf:</label>
                    <input type="text" class="form-control" id="txtCpf" placeholder="000.000.000-00" required>
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <label for="txtRg">* Rg:</label>
                    <input type="text" class="form-control" id="txtRg" placeholder="0.000.000-0" required>
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2">
                    <label for="txtDataNascimento">* Data Nascimento</label>
                    <input type="text" class="form-control" id="txtDataNascimento" placeholder="00/00/0000" required>
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <label for="txtResidencial">*Tel. Residencial</label>
                    <input type="text" class="form-control" id="txtResidencial" placeholder="(00)0000-0000" required>
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <label for="txtComercial">Tel. Recado</label>
                    <input type="text" class="form-control" id="txtComercial" placeholder="(00)0000-0000">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <label for="txtCelular">Tel. Celular 1</label>
                    <input type="text" class="form-control" id="txtCelular" placeholder="(00)00000-0000">
                </div>           
                <div class="form-group col-xs-6 col-sm-3 col-md-2">
                    <label for="txtEstadoCivil">Estado Civil</label>
                    <select class="form-control" name="txtEstadoCivil" id="txtEstadoCivil">
						<option value="Selecionar">Selecionar</option>
                        <option value="Solteiro(a)">Solteiro(a)</option>
                        <option value="Casado">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Viúvo(a)">Viúvo(a)</option>
						<option value="Viúvo(a)">União estável</option>
                    </select>
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2">
                    <label for="txtSexo">*Sexo</label>
                    <select class="form-control" name="txtSexo" id="txtSexo" required>
                        <option value="Selecionar">Selecionar</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-5">
                    <label for="txtEndereco">*Endereço:</label>
                    <input type="text" class="form-control" id="txtEndereco" placeholder="Endereço" required>
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-1">
                    <label for="txtNumero">*Número:</label>
                    <input type="text" class="form-control" id="txtNumero" placeholder="N°" required>
                </div>  
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <label for="txtComplemento">Complemento:</label>
                    <input type="text" class="form-control" id="txtComplemento" placeholder="Complemento">
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3">
                    <label for="txtBairro">*Bairro:</label>
                    <input type="text" class="form-control" id="txtBairro" placeholder="Bairro" required>
                </div>
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <label for="txtCep">*Cep:</label>
                    <input type="text" class="form-control" id="txtCep" placeholder="00.000-000" required>
                </div> 
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <label for="txtCidade">*Cidade</label>
                    <select class="form-control" name="txtCidade" id="txtCidade" required>
                        <option value="Selecionar">Selecionar</option>
                        <option value="Cianorte">Cianorte</option>
						<option value="Maringa">Umuarama</option>
                        <option value="Maringa">Maringá</option>
                    </select>
                </div> 
                <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <label for="txtEstado">*Estado (UF)</label>
                    <select class="form-control" name="txtEstado" id="txtEstado" required>
                        <option value="Selecionar">Selecionar</option>
                        <option value="Acre">AC-Acre</option>
                        <option value="Alagoas">AL-Alagoas</option>
                        <option value="Amapa">AP-Amapá</option>
                        <option value="Amazonas">AM-Amazonas</option>
                        <option value="Bahia">BA-Bahia</option>
                        <option value="Ceara">CE-Ceará</option>
                        <option value="DistritoFederal">DF-Distrito Federal</option>
                        <option value="EspiritoSanto">ES-Espírito Santo</option>
                        <option value="Goias">GO-Goiás</option>
                        <option value="Maranhao">MA-Maranhão</option>
                        <option value="MatoGrosso">MT-Mato Grosso</option>
                        <option value="MatoGrossodoSul">MS-Mato Grosso do Sul</option>
                        <option value="MinasGerais">MG-Minas Gerais</option>
                        <option value="Para">PA-Pará</option>
                        <option value="Paraiba">PB-Paraíba</option>
                        <option value="Parana">PR-Paraná</option>
                        <option value="Pernambuco">PE-Pernambuco</option>
                        <option value="Piaui">PI-Piauí</option>
                        <option value="RiodeJaneiro">RJ-Rio de Janeiro</option>
                        <option value="RioGrandedoNorte">RN-Rio Grande do Norte</option>
                        <option value="RioGrandedoSul">RS-Rio Grande do Sul</option>
                        <option value="Rondonia">RO-Rondônia</option>
                        <option value="Roraima">RR-Roraima</option>
                        <option value="SantaCatarina">SC-Santa Catarina</option>
                        <option value="SaoPaulo">SP-São Paulo</option>
                        <option value="Sergipe">SE-Sergipe</option>
                        <option value="Tocantins">TO-Tocantins</option>
                    </select>
                </div>
            </div> <!-- Fim dados pessoais -->
        </section>
        <!-- Fim da seção dados do candidato -->

        <!-- Nesta seção temos a escolaridade do candidato -->
        <section class="container">
            <div class="row">
                <div class="col-sm-12">
                    <header>
                        <h2><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Escolaridade</h2>
                    </header>
                </div>
            </div> 

            <div class="form-group col-xs-6 col-sm-3 col-md-3">
                <label for="txtEscolaridade">*Escolaridade</label>
                <select class="form-control" name="txtEscolaridade" id="Escolaridade" required>
                    <option value="Selecionar">Selecionar</option>
                    <option value="Essinofundamentalcompleto">Ensino Fundamental completo</option>
                    <option value="Ensinofundamentalincompleto">Ensino Fundamental incompleto</option>
                    <option value="Ensinomediocompleto">Ensino Médio completo</option>
                    <option value="Ensinomedioincompleto">Ensino Médio incompleto</option>
                    <option value="Ensinosuperiorcompleto">Ensino Superior completo</option>
                    <option value="Ensinosuperiorincompleto">Ensino Superior incompleto</option>
					<option value="Especializacao">Especialização</option>
					<option value="Mestrado">Mestrado</option>
					<option value="Doutorado">Doutorado</option>
                </select>
            </div>
			
            <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-5">
                <label for="txtNomedainstituicao">Instituição:</label>
                <input type="text" class="form-control" id="txtNomedainstituicao" placeholder="Nome da isntituição">
            </div>
			
            <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3">
                <label for="txtNomedocurso">Curso:</label>
                <input type="text" class="form-control" id="txtNomedocurso" placeholder="Nome do curso">
            </div>
			
            <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-1">
                <label for="txtConclusao">Conclusão:</label>
                <input type="text" class="form-control" id="txtConclusao" placeholder="Ano">
            </div>
			
        </section>
		<!-- Fim da seção escolaridade do candidato -->
		
		<!-- Início da seção experiências profissionais -->
        <section class="container">
            <div class="row">
                <div class="col-sm-12">
                    <header>
                        <h2><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Experiência profissional</h2>
                    </header>
                </div>
            </div>
			
			<div id="sections">
				  <div class="section">
					<fieldset>
						<div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-5">
							<label for="txtEmpresa">Empresa:</label>
							<input type="text" class="form-control" id="txtEmpresa" placeholder="Nome da empresa">
						</div>
						<div class="form-group col-xs-6 col-sm-3 col-md-2">
							<label for="txtDataentrada">Data de entrada</label>
							<input type="text" class="form-control" id="txtDataentrada" placeholder="00/00/0000">
						</div>
						<div class="form-group col-xs-6 col-sm-3 col-md-2">
							<label for="txtDatasaida">Data de saída</label>
							<input type="text" class="form-control" id="txtDatasaida" placeholder="00/00/0000">
						</div>
						<div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-3">
							<label for="txtFuncao">Função:</label>
							<input type="text" class="form-control" id="txtFuncao" placeholder="Função exercida">
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label class="control-label" for="txtDescricaoatividade">Atividades desenvolvidas</label>
								<textarea class="form-control" rows="6" id="txtDescricaoatividade" placeholder="Descreva nesse campos as atividades desempenhadas por você"></textarea>
							</div>
								<a class="glyphicon glyphicon-plus btn btn-primary addsection"> Adicionar</a>
								<a class="glyphicon glyphicon-minus btn btn-danger remove"> Remover</a>							
						</div>
					</fieldset>					
				  </div>
				<br>		
			</div>
			<br>
			

		<!-- Script que "clona" os campos do formulário Exeperiências profissionais -->
		<script>			
		var template = $('#sections .section:first').clone();

		//define contador
		var sectionsCount = 1;

		//adiciona nova seção
		$('body').on('click', '.addsection', function() {

			//incremento
			sectionsCount++;

			//loop através de cada entrada
			var section = template.clone().find(':input').each(function(){

				//seta id para armazenar o número da seção atualizada
				var newId = this.id + sectionsCount;

				//update para etiqueta
				$(this).prev().attr('for', newId);

				//update id
				this.id = newId;

			}).end()

			// injeta nova seção
			.appendTo('#sections');
			return false;
		});	
		//remove seção
		$('#sections').on('click', '.remove', function() {
			//fade out seção
			$(this).parent().fadeOut(300, function(){
				//remove elemento pai (seção principal)
				$(this).parent().parent().empty();
				return false;
			});
			return false;
		});		
		</script>	
		<!-- Fim do script -->
		
		</section>	
		<!-- Fim da seção experiências profissionais -->
        
        <!-- Nesta seção temos as observações -->
        <section class="container">
            <div class="row">
                <div class="col-sm-12">
                    <header>
                        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Informações complementares</h2>
                        <span>As informações dessa seção não são de caráter obrigatório!</span>
                    </header>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>Registre nesse campo outras informações relevantes, como cursos complementares, estágios, participação em eventos, publicações de artigos, trabalhos voluntários, etc.</p>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="control-label" for="txtMensagem">Mensagem</label>
                        <textarea class="form-control" rows="6" id="txtMensagem" placeholder="Insira aqui suas informações complementares"></textarea>
                    </div>
                </div>
            </div>
			
            <div class="row">
                <div class="col-sm-4 col-md-offset-4">
                    <input type="submit" a class="glyphicon glyphicon-plus btn btn-success"  value="Enviar"/>
                    <br><br><br><br>
                </div>
            </div>			

			</form>
				
        </section>
		
        <!-- Fim da seção observações -->

        <!-- Início footer -->
        <div class="footer">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="title-box-copy">
                  <h4>&copy; Copyrihgt 2018. Todos os direitos reservados.</h4>
                </div>
              </div>
              <div class="col-md-6">
                <div class="title-box">
                  <h4>Versão 1.0.0 - Desenvolvido por: Luiz Fernando da Silva.</h4>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!-- Fim footer -->

        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
			$(function() {
				$('[data-toggle="tooltip"]').tooltip();
			});
        </script>

    </body>
</html>