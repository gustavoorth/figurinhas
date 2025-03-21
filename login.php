<?php
include_once 'componentes/cabecalho.php';
?>
<form action="backend/login.php" method="post">
<label for="email">Email</label>
<input type="text" name="email" placeholder="Digite seu email">

<label for="senha">Senha</label>
<input type="text" name="senha" placeholder="Digite seu email">
<button type="submit">Entrar</button></form>
<?php
include_once 'componentes/rodape.php';
?>

