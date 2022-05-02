<?php
define('HOST','127.0.0.1');
define('USUARIO','root');
define('SENHA','102030');
define('DB', 'login');

$conexao = mysqli_connect(HOST ,USUARIO ,SENHA ,DB) or die ('não foi possivel conectar ao banco de dados');