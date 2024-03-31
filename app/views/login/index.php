<h1 class="text-center">Entrar</h1>
<form class="vertical-form" action="Login/login" method="post">
	<div class="form-group">
		<label for="userName">E-mail</label>
		<input id="email" type="email" name="email" placeholder="Digite o seu e-mail" required>
	</div>
	<div class="form-group">
		<label for="password">Senha</label>
		<input id="password" type="password" name="password" placeholder="Digite uma senha" required>
	</div>
	<?php
		include_once '../app/views/layouts/password_rules.php';
	?>
	<button class="primary-btn" type="submit">Enviar</button>
	<a href="Register/index">Novo por aqui? <b>Clique aqui</b></a>
</form>

