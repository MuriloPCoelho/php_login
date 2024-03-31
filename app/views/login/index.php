<?php
	$page_title = "Login";
	include_once "../layouts/layout.php";
?>
<h1 class="text-center">Entrar</h1>
<form class="vertical-form">
	<div class="form-group">
		<label for="userName">Nome de Usuário</label>
		<input id="userName" type="text" name="userName" placeholder="Digite um nome de usuário">
	</div>
	<div class="form-group">
		<label for="password">Senha</label>
		<input id="password" type="password" name="password" placeholder="Digite uma senha">
	</div>
	<button class="primary-btn" type="submit">Enviar</button>
	<a href="../register/">Novo por aqui? <b>Clique aqui</b></a>
</form>

<?php include_once "../layouts/layout_end.php"; ?>
