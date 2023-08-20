CREATE DATABASE projeto_login;
USE projeto_login;

CREATE TABLE tb_usuario (
  id bigint NOT NULL AUTO_INCREMENT,
  nome varchar(255)  DEFAULT NULL,
  email varchar(100) DEFAULT NULL,
  senha varchar(255) DEFAULT NULL,
  telefone varchar(20) DEFAULT NULL,
  matricula int,
  PRIMARY KEY (id),
  CONSTRAINT unico UNIQUE (email)
) ENGINE=InnoDB;

CREATE TABLE tb_idPessoal(
id bigint NOT NULL AUTO_INCREMENT,
nome varchar(255) DEFAULT NULL,
sexo enum("feminino","masculino","outro"),
idade int NOT NULL,
email varchar(100) DEFAULT NULL,
telefone varchar(20) DEFAULT NULL,
data_nascimento date DEFAULT NULL,
PRIMARY KEY (id)
);

CREATE TABLE tb_idProfissional (
id bigint NOT NULL AUTO_INCREMENT,
profissao varchar(255)  DEFAULT NULL,
setor varchar(255) DEFAULT NULL,
funcao varchar(255)  DEFAULT NULL,
tempo_que_exerce int ,
postura_corporal enum("sentada","em pé", "mista"),
PRIMARY KEY (id)
);

CREATE TABLE tb_historicoSaude(
id bigint NOT NULL AUTO_INCREMENT,
ja_teve_covid enum("sim","não") ,
quando_ano int DEFAULT NULL,
quando_mes enum ("janeiro", "fevereiro", "março", "abril","maio", "junho", "julho","agosto","setembro", "outubro","novembro","dezembro"),
esta_vacinado enum("sim","não") ,
doencas_pregressas varchar(255) ,
doenca_atual varchar(255) DEFAULT NULL,
queixas_principais varchar(255) DEFAULT NULL,
processos_cirurgicos varchar(255) DEFAULT NULL,
medicamentos varchar(255) DEFAULT NULL,
realiza_atividade_fisica enum("sim","não"),
qual_atividade_fisica varchar(255) DEFAULT NULL,
qual_frequencia varchar(255) DEFAULT NULL,
motivo_procura varchar(255) DEFAULT NULL,
PRIMARY KEY (id)
);


CREATE TABLE tb_termoConsentimentoLivreEsclarecido (
id bigint NOT NULL AUTO_INCREMENT,
nome_paciente varchar(255)DEFAULT NULL,
identidade int ,
nome_aluno varchar(255) DEFAULT NULL,
local_atendimento varchar(255) DEFAULT NULL,
professor_supervisor varchar(255)  DEFAULT NULL,
endereço varchar(255) DEFAULT NULL,
cidade varchar(255) DEFAULT NULL,
telefone_termo varchar(20)  DEFAULT NULL,
data_termo_consentimento date DEFAULT NULL,  
PRIMARY KEY (id)
);

CREATE TABLE tb_termoAssentimento (
id bigint NOT NULL AUTO_INCREMENT,
nome_paciente varchar(255) DEFAULT NULL,
identidade int,
nome_aluno varchar(255)DEFAULT NULL,
local_atendimento varchar(255)  DEFAULT NULL,
nome_responsavel varchar(255)  DEFAULT NULL,
professor_supervisor varchar(255)DEFAULT NULL,
endereco varchar(255) DEFAULT NULL,
cidade varchar(255) DEFAULT NULL,
telefone_assentimento varchar(20)  DEFAULT NULL,
data_termo_assentimento date DEFAULT NULL,  
PRIMARY KEY (id)
); 