<?php

require_once("config.php");

// Carrega um usuario
//$felipe = new Usuario();
//$felipe->loadById(1);
//echo $felipe;

//Carrega uma lista de usuarios
//$lista = usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuarios buscando pelo login
//$search = usuario::search("V");
//echo json_encode($search);

//Carrega um usuario usando o login e senha


//$usuario = new Usuario();

//$usuario->login("Vitor","123456");

//echo $usuario;

// Criando um novo usuário

/*
$aluno = new Usuario("Felipe", "123456789");

$aluno->insert();

echo $aluno;
*/


// Alterar um usuario 
/*
$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "123465@!#!@");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(3);

$usuario->delete();

echo $usuario;





/*
$consulta = new Sql();

$usuarios = $consulta->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);


foreach ($usuarios as $key => $value) {

	$dados[] = array("Id" => $value['idusuario'], "Login" => $value['deslogin'], "Senha" => $value['dessenha'], "DTCadastro" => $value['dtcadastro']);

}
*/

?>
<!--
<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>

	<table border="1" cellpadding="5" cellspacing="5">
			<tr>
				<td>Id</td>
				<td>Login</td>
				<td>Senha</td>
				<td>Data de cadastro</td>

			</tr>


	</table>




	<table  border="1" cellpadding="5" cellspacing="5">
		
		<?php foreach ($dados as $linha) { ?>

			<tr>
					<td><?=$linha['Id']?></td>
					<td><?=$linha['Senha']?></td>
					<td><?=$linha['Login']?></td>
					<td><?=$linha['DTCadastro']?></td>
					

			</tr>

		<?php } ?>	

			
		
	</table>

</body>
</html>
-->