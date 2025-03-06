<?php
include_once 'componentes/cabecalho.php';
include_once 'componentes/carta.php';
$carta = [
    'nome' => 'Pikachu',
    'caminho' => 'pikachu',
    'descricao' => 'Pikachu é um Pokémon elétrico da primeira geração.',
    'preco' => 'R$ 50,00'
    ];
exibirCarta($carta);
?>


<?php
include_once 'componentes/rodape.php';
?>