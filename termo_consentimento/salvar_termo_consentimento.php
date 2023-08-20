<?php
require_once "../Config.php";

$nome_paciente = $_POST["nome_paciente"];
$identidade = $_POST["identidade"];
$nome_aluno = $_POST["nome_aluno"];
$local_atendimento = $_POST["local_atendimento"];
$professor_supervisor = $_POST["professor_supervisor"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$telefone = $_POST["telefone"];
$data_termo_consentimento = $_POST["data_termo_consentimento"];


$sql = "insert into tb_termoConsentimentoLivreEsclarecido (
            nome_paciente,
            identidade,
            nome_aluno,
            local_atendimento,
            professor_supervisor,
            endereco,
            cidade,
            telefone,
            data_termo_consentimento)
        values (
            :nome_paciente,
            :identidade,
            :nome_aluno,
            :local_atendimento,
            :professor_supervisor,
            :endereco,
            :cidade,
            :telefone,
            :data_termo_consentimento)";

$stm = $pdo->prepare($sql);

$stm->execute([
  
    'nome_paciente' => $nome_paciente ,
    ':identidade' => $identidade ,
    ':nome_aluno' => $nome_aluno ,
    ':local_atendimento' => $local_atendimento ,
    ':professor_supervisor' => $professor_supervisor ,
    ':endereco' => $endereco ,
    ':cidade' => $cidade ,
    ':telefone' => $telefone ,
    'data_termo_consentimento' => $data_termo_consentimento    
]);





