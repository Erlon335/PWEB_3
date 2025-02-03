DROP DATABASE IF EXISTS Delicias_Geladas;

CREATE DATABASE Delicias_Geladas;
USE Delicias_Geladas;

CREATE TABLE Empresa(
    cnpj CHAR(14) PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    idGerente INT,
	UNIQUE (cnpj, nome, idGerente)
);

CREATE TABLE Funcionarios (
    idFuncionario INT AUTO_INCREMENT PRIMARY KEY,
    cpf CHAR(11),
    RG VARCHAR(20) NOT NULL,
    dataNascimento DATE NOT NULL,
    email VARCHAR(100) NOT NULL,
    nome VARCHAR(150) NOT NULL,
    uf CHAR(2),
    cidade VARCHAR(100),
    rua VARCHAR(150),
    numero VARCHAR(10),
    bairro VARCHAR(100),
    cep CHAR(8) NOT NULL,
    dataInicio DATE NOT NULL,
    tipo ENUM ('Estágiario','Efetivo') NOT NULL
);

CREATE TABLE Sabores (
    idSabor INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    ingredientes TEXT,
    preco DECIMAL(10, 2) NOT NULL,
    disponibilidade BOOLEAN DEFAULT TRUE
);

CREATE TABLE Clientes (
    idCliente INT AUTO_INCREMENT PRIMARY KEY,
	nomeCliente VARCHAR(150) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    uf CHAR(2) NOT NULL,
    rua VARCHAR(150) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    cep CHAR(8) NOT NULL
);

CREATE TABLE contatos (
    idContato INT AUTO_INCREMENT,
	cnpj CHAR(14),
    tipo ENUM ('Telefone', 'E-mail', 'Redes Sociais') NOT NULL, 
    valor VARCHAR(100) NOT NULL,
    observacao TEXT,
	PRIMARY KEY (idContato, cnpj)
);

CREATE TABLE TelefoneFuncionario(
    telefoneFuncionario BIGINT UNSIGNED,
	idFuncionario INT, 
    PRIMARY KEY (telefoneFuncionario, idFuncionario)	
);

CREATE TABLE TelefoneCliente (
    telefoneCliente BIGINT UNSIGNED,
    idCliente INT,
    PRIMARY KEY (telefoneCliente, idCliente)
);

ALTER TABLE Empresa ADD CONSTRAINT Empresa FOREIGN KEY (idGerente) REFERENCES Funcionarios (idFuncionario) ON DELETE CASCADE;

ALTER TABLE Contatos ADD CONSTRAINT Contatos FOREIGN KEY (cnpj) REFERENCES Empresa (cnpj);

ALTER TABLE TelefoneFuncionario ADD CONSTRAINT TelefoneFuncionario FOREIGN KEY (idfuncionario) REFERENCES Funcionarios (idfuncionario);

ALTER TABLE TelefoneCliente ADD CONSTRAINT  FOREIGN KEY (idCliente) REFERENCES Clientes (idCliente) ON DELETE RESTRICT;
