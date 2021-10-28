<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../body/admin/style-index.css">
	<?php include('../body/header.php');?>


</head>
<body class="text-center">
	<form id="form-login align-middle" action="logar.php" method="POST">
		<div class="mb-3">
			<img src="https://cdn.discordapp.com/emojis/237066985844768768.png" class="mb-4 mt-3" width="80px" alt="login">
			<h3>Login Painel Administrativo</h3>
				</div>
		  		<div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Login</label>
				    <input type="text" class="form-control" placeholder="Digite seu usuário" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
				    <label for="exampleInputPassword1" class="form-label">Senha</label>
				    <input type="password" class="form-control" placeholder="Digite sua senha" name="senha" id="exampleInputPassword1">
				</div>
				  <button type="submit" value="ENVIAR" class="btn btn-primary">Login</button>
				  <div>
				  <p>Ainda não é cadastrado ?</p><strong> <a href="register.php">Cadastre-se aqui</strong></a>
				  </div>
				   <div id="emailHelp" class="form-text">Fotografado por <a href="https://unsplash.com/@leoroza?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Léo Roza</a> de <a href="https://unsplash.com/s/photos/comida?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
				   	</div>
				  
		</form>
</body>
</html>
  
