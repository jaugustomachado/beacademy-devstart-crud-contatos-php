<?php

function login(){
    include 'telas/login.php';
}

function cadastro(){
    include 'telas/cadastro.php';
}

function home(){
    include 'telas/home.php';
}

function listar(){
    $contatos= file('projeto/dados/contatos.csv');

    include 'telas/listar.php';
}

function erro404(){
    include 'telas/404.php';
}

function relatorio(){
    include 'telas/relatorio.php';
}