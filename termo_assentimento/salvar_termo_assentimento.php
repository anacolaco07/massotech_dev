<?php
include '../massotech/Config.php';

$nome_paciente = $_POST["nome_paciente"];
$identidade = $_POST["identidade"];
$nome_aluno = $_POST["nome_aluno"];
$nome_responsavel = $_POST["nome_responsavel"];
$local_atendimento = $_POST["local_atendimento"];
$professor_supervisor = $_POST["professor_supervisor"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$telefone = $_POST["telefone"];
$data_termo_assentimento = $_POST["data_termo_assentimento"];


$sql = "insert into tb_termoAssentimento (
            nome_paciente,
            identidade,
            nome_aluno,
            local_atendimento,
            nome_responsavel,
            professor_supervisor,
            endereco,
            cidade,
            telefone,
            data_termo_assentimento)
        values (
            :nome_paciente,
            :identidade,
            :nome_aluno,
            :local_atendimento,
            :nome_responsavel,
            :professor_supervisor,
            :endereco,
            :cidade,
            :telefone,
            :data_termo_assentimento)";

$stm = $pdo->prepare($sql);

$stm->execute([
    
    'nome_paciente' => $nome_paciente ,
    ':identidade' => $identidade ,
    ':nome_aluno' => $nome_aluno ,
    ':local_atendimento' => $local_atendimento ,
    ':nome_responsavel' => $nome_responsavel,
    ':professor_supervisor' => $professor_supervisor ,
    ':endereco' => $endereco ,
    ':cidade' => $cidade ,
    ':telefone' => $telefone ,
    'data_termo_assentimento' => $data_termo_assentimento
]);