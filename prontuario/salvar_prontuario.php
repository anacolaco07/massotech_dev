<?php
require_once "../Config.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];

$sql = "insert into tb_idPessoal (nome, sexo, idade, email, telefone, data_nascimento)
	       values (:nome, :sexo, :idade, :email, :telefone, :data_nascimento)";

$stm = $pdo->prepare($sql);
// anti sql injection
$stm->execute([
    ':nome' => $nome,
    ':sexo' => $sexo,
    ':idade' => $idade,
    ':email' => $email,
    ':telefone' => $telefone,
    ':data_nascimento' => $data_nascimento
]);

$profissao = $_POST['profissao'];
$setor = $_POST['setor'];
$funcao = $_POST['funcao'];
$tempo_que_exerce = $_POST['tempo_que_exerce'];
$postura_corporal = $_POST['postura_corporal'];

$sql = "insert into tb_idProfissional (profissao, setor, funcao, tempo_que_exerce, postura_corporal)
	       values (:profissao, :setor, :funcao, :tempo_que_exerce, :postura_corporal)";

$stm->execute([
    ':profissao' => $profissao,
    ':setor' => $setor,
    ':funcao' => $funcao,
    ':tempo_que_exerce' => $tempo_que_exerce,
    ':postura_corporal' => $postura_corporal
]);

$ja_teve_covid = $_POST['ja_teve_covid'];
$quando_ano = $_POST['quando_ano'];
$quando_mes = $_POST['quando_mes'];
$esta_vacinado = $_POST['esta_vacinado'];
$doencas_pregressas = $_POST['doencas_pregressas'];
$doenca_atual = $_POST['doenca_atual'];
$queixas_principais = $_POST['queixas_principais'];
$processos_cirurgicos = $_POST['processos_cirurgicos'];
$medicamentos = $_POST['medicamentos'];
$realiza_atividade_fisica = $_POST['realiza_atividade_fisica'];
$qual_atividade_fisica = $_POST['qual_atividade_fisica'];
$qual_frequencia = $_POST['qual_frequencia'];
$motivo_procura = $_POST['motivo_procura'];

$sql = "insert into tb_idhistoricoSaude (
        ja_teve_covid,
        quando_ano,
        quando_mes,
        esta_vacinado,
        doencas_pregressas,
        doenca_atual,
        queixas_principais,
        processos_cirurgicos,
        medicamentos,
        realiza_atividade_fisica,
        qual_atividade_fisica,
        qual_frequencia,
        motivo_procura)
	    values (
        :ja_teve_covid,
        :quando_ano,
        :quando_mes,
        :esta_vacinado,
        :doencas_progressas,
        :doenca_atual,
        :queixas_principais,
        :processos_cirurgicos,
        :medicamentos,
        :realiza_atividade_fisica,
        :qual_atividade_fisica,
        :qual_frequencia,
        :motivo_procura)";

$stm->execute([
    ':ja_teve_covid' => $ja_teve_covid,
    ':quando_ano' => $quando_ano,
    ':quando_mes' => $quando_mes,
    ':esta_vacinado' => $esta_vacinado,
    ':doencas_pregressas' => $doencas_pregressas,
    ':doenca_atual' => $doenca_atual,
    ':queixas_principais' => $queixas_principais,
    ':processos_cirurgicos' => $processos_cirurgicos,
    ':medicamentos' => $medicamentos,
    ':realiza_atividade_fisica' => $realiza_atividade_fisica,
    ':qual_atividade_fisica' => $qual_atividade_fisica,
    ':qual_frequencia' => $qual_frequencia,
    ':motivo_procura' => $motivo_procura
]);



?>
