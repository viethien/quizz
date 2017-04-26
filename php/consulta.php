<?php
header('Content-Type: application/json');

$dificuldade = $_GET ['dificuldade'];//Define a dificuldade das perguntas que seram selecionadas

$numquestions = $_GET ['rodada'];//Número de perguntas que serão retornadas


switch ($numquestions) {
    case '1':
    $numquestions = "10";
    break;
    case '2':
    $numquestions = "15";
    break;
    case '3':
    $numquestions = "20";
    break;
}
try{
    $conexao = new PDO ("mysql:host=localhost; dbname=teocratico; charset=utf8","root","");
} catch (PDOException $erro){
    echo $erro->getmessage();
}

$stmt = $conexao->query ("SELECT
    perguntas.id_pergunta,
    perguntas.pergunta,
    perguntas.resposta,
    dificuldade.dificuldade
    FROM perguntas
    JOIN dificuldade
    ON dificuldade.id_dificuldade = perguntas.dificuldade
    WHERE dificuldade.id_dificuldade = $dificuldade limit $numquestions;
    ");

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($data, JSON_PRETTY_PRINT);
echo $json;

$stmt = $conexao->query ("SELECT descricao from desafios ORDER BY RAND()");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($data, JSON_PRETTY_PRINT);
echo $json;
?>
