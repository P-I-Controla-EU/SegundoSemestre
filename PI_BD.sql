DROP DATABASE IF EXISTS controlaseu_db;
CREATE DATABASE controlaseu_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE controlaseu_db;

CREATE TABLE IF NOT EXISTS pessoas(
	id_pessoa BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    saldo DECIMAL (12,2) DEFAULT 0,
    nome VARCHAR(255) NOT NULL,
    cpf	VARCHAR(15) NOT NULL UNIQUE,
    data_nascimento DATE NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefone VARCHAR (15) NOT NULL,
    senha VARCHAR (255)	NOT NULL,
    criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    atualizado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deletado_em   DATETIME NULL	
);

CREATE TABLE IF NOT EXISTS metas(
	id_meta BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pessoa_id BIGINT UNSIGNED NOT NULL,
    nome VARCHAR(255) NOT NULL UNIQUE,
	valor_objetivo DECIMAL(12,2) UNSIGNED NOT NULL,
	valor_atual DECIMAL(12,2) UNSIGNED NOT NULL,
	data_limite DATE NOT NULL,
	status_meta ENUM("Em andamento","Concluída", "Cancelada", "Não concluída"),
	criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	atualizado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	deletado_em DATETIME NULL,
    CONSTRAINT fk_metas_pessoas FOREIGN KEY (pessoa_id) REFERENCES pessoas(id_pessoa)
);

CREATE TABLE IF NOT EXISTS planos(
	id_plano BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(30) NOT NULL,
	beneficios TEXT, 
	valor_periodo DECIMAL(10,2) UNSIGNED NOT NULL,
	periodo ENUM("Mensal", "Anual"),
	status_assinatura BOOL,
	criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    atualizado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deletado_em DATETIME NULL
);
CREATE TABLE IF NOT EXISTS assinaturas(
	id_assinatura BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	pessoa_id BIGINT UNSIGNED NOT NULL,
	plano_id BIGINT UNSIGNED NOT NULL,
	data_inicio DATETIME NOT NULL,
	data_termino DATETIME NOT NULL,
	criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	atualizado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	deletado_em   DATETIME NULL,

	CONSTRAINT fk_assinaturas_pessoas FOREIGN KEY (pessoa_id) REFERENCES pessoas(id_pessoa),
	CONSTRAINT fk_assinaturas_planos FOREIGN KEY (plano_id) REFERENCES planos(id_plano)
 );

CREATE TABLE IF NOT EXISTS pagamentos (
	id_pagamento BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    assinatura_id BIGINT UNSIGNED NOT NULL, -- ASSINATURA
	data_pagamento DATETIME NOT NULL,
	forma_pagamento ENUM ("PIX", "Débito", "Crédito", "Boleto"),
	status_pagamento ENUM("Confirmado","Pendente", "Recusado"),
	id_externo VARCHAR(255) NOT NULL, -- ID DE PAGTO EXTERNO (GATEWAY DE PAGTO) Geralmente usam UUID
	criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    atualizado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deletado_em   DATETIME NULL,
    
    CONSTRAINT fk_pagamentos_assinaturas FOREIGN KEY (assinatura_id) REFERENCES assinaturas(id_assinatura),
    CONSTRAINT fk_pagamentos_pessoas FOREIGN KEY (pessoa_id) REFERENCES pessoas(id_pessoa)
);




CREATE TABLE IF NOT EXISTS categorias(
	id_categoria BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(70) NOT NULL,
	descricao TEXT NULL,
	criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	atualizado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	deletado_em   DATETIME NULL
	
 );
 
CREATE TABLE IF NOT EXISTS transacoes(
	id_transacao BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pessoa_id BIGINT UNSIGNED NOT NULL,
	descricao TEXT NULL,
	valor DECIMAL (12,2) NOT NULL,
	data_movimentacao DATETIME NOT NULL,
	categoria_id BIGINT UNSIGNED NOT NULL,
	tipo ENUM("Receita", "Despesa"),
	status_transacao ENUM("Recebido","Pendente"),
	recorrencia BOOL,
    meta_id BIGINT UNSIGNED NULL,
	data_termino DATETIME  NULL,
	data_cobranca_rec TINYINT NULL,
	criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	atualizado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	deletado_em   DATETIME NULL,
	CONSTRAINT fk_transacoes_pessoas FOREIGN KEY (pessoa_id) REFERENCES pessoas(id_pessoa),
	CONSTRAINT fk_transacoes_categorias FOREIGN KEY (categoria_id) REFERENCES categorias(id_categoria),
	CONSTRAINT fk_transacoes_metas FOREIGN KEY (meta_id) REFERENCES metas(id_meta)
 );

CREATE TABLE IF NOT EXISTS previsoes(
	id_previsao BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    categoria_id BIGINT UNSIGNED NOT NULL,
	valor DECIMAL (12,2) UNSIGNED NOT NULL,
	data_inicio DATE NOT NULL,
	data_termino DATE NOT NULL,
	status_previsao BOOL,
	criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	atualizado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	deletado_em DATETIME NULL,

	CONSTRAINT fk_previsoes_categorias FOREIGN KEY (categoria_id) REFERENCES categorias(id_categoria)
);




