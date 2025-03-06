<?php

function exibirCarta($carta) {
    echo "
        <h2>$carta[nome]</h2>
        <img src='/recursos/img/$carta[caminho].png' alt='$carta[nome]'>
        <p>$carta[descricao]</p>
        <p class='preco'>R\$ $carta[preco]</p>
    ";
}