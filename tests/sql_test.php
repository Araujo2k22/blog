<?php
require_once '../core/sql.php';

$id = 1;
$nome = 'felipe';
$email = 'felipe@gmail.com';
$senha = '1234';
$dados = ['nome' => $nome,
'email' => $email,
'senha' => $senha];

$entidade = 'usuario';
$criterio = [['id', '=', $id]];
$campos = ['id', 'nome', 'email'];
print_r($dados);
echo '<br>';
print_r($campos);
echo '<br>';
print_r($criterio);
echo '<br>';

//teste geração INSERT
$instrucao = insert($entidade, $dados);
echo $instrucao. '<BR>';

$instrucao = update($entidade, $dados, $criterio);
echo $instrucao. '<BR>';

$instrucao = select($entidade, $campos, $criterio);
echo $instrucao. '<BR>';

$instrucao = delete($entidade, $criterio);
echo $instrucao. '<BR>';
?>