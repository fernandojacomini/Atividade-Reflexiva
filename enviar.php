<?php
 
 
$txtEmpresa = $_POST['txtEmpresa'];
$txtDataentrada = $_POST['txtDataentrada'];
$txtDatasaida = $_POST['txtDatasaida'];
$txtFuncao = $_POST['txtFuncao'];
$txtDescricaoatividade = $_POST['txtDescricaoatividade'];

 
$headers = "From: ". $nome;
 
$corpoemail = '<b>Curriculo cadastrado</b>
             
               Empresa: '   .$txtEmpresa.' /n
               Data de entrada:'   .$txtDataentrada.'/n
               Data de saída:' .$$txtDatasaida.' /n
			   Função:' .$txtFuncao.' /n
               Atividades realizadas:'.$txtDescricaoatividade.' /n';
 
 
 
 
if(mail("tecinfo.fernando@gmail.com", "Cadastro de currículo",$corpoemail,$headers)){
 
 
       echo "<script>alert('Mensagem enviada com sucesso!');</script>"; 
       header("Location: Index.php");
 
} else{
 
      echo "<script>alert('Erro ao enviar dados. Por favor, tente diretamente pelo email luizfs_@hotmail.com');</script>";  
 
}