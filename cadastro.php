<?php
include_once 'componentes/cabecalho.php';
?>
<!-- Formulário de Login -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Entrar</h4>
                </div>
                <div class="card-body">
                    <form action="backend/cadastro.php" method="post">
                        <!-- Campo de Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email" required>
                        </div>
                        <!-- Campo de Senha -->
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" required>
                        </div>
                        <!-- Botão de Envio -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'componentes/rodape.php';
?>
