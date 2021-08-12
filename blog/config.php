<?php

$mysql = new mysqli('localhost', 'root', '3141', 'blog');
$mysql->set_charset('utf8');

if ($mysql == FALSE) {
    echo "Erro na conexão";
}else{
    echo "Conectado";
}
