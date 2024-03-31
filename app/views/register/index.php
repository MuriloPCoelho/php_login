<?php
$page_title = "Home";
include_once "../layouts/layout.php";
?>

<h1 class="text-center">Cadastre-se</h1>
<form class="vertical-form" method="post" action="Register/index">
    <div class="form-group">
        <label for="userName">Nome de Usuário</label>
        <input id="userName" type="text" name="userName" placeholder="Digite um nome de usuário">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" placeholder="Digite um e-mail">
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input id="password" type="password" name="password" placeholder="Digite uma senha">
    </div>
    <div class="form-group">
        <label for="passwordConfirmation">Confirme a Senha</label>
        <input id="passwordConfirmation" type="password" name="passwordConfirmation" placeholder="Confirme a Senha">
    </div>
    <button class="primary-btn" type="submit">Enviar</button>
    <a href="../login/">Já possui um cadastro? <b>Clique aqui</b></a>
</form>

<?php include_once "../layouts/layout_end.php"; ?>
