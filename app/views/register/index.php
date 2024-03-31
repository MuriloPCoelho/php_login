<h1 class="text-center">Cadastre-se</h1>
<form class="vertical-form" method="post" action="Register/register">
    <div class="form-group">
        <label for="userName">Nome de Usuário</label>
        <input id="userName" type="text" name="userName" placeholder="Digite um nome de usuário" required>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" placeholder="Digite um e-mail" required>
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input id="password" type="password" name="password" placeholder="Digite uma senha" required>
    </div>
    <?php
        include_once '../app/views/layouts/password_rules.php';
    ?>
    <div class="form-group">
        <label for="passwordConfirmation">Confirme a Senha</label>
        <input id="passwordConfirmation" type="password" name="passwordConfirmation" placeholder="Confirme a Senha" required>
    </div>
    <button class="primary-btn" type="submit">Enviar</button>
    <a href="Login/index">Já possui um cadastro? <b>Clique aqui</b></a>
</form>


