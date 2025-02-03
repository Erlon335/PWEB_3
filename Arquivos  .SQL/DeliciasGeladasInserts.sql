-- =============================
-- Tabela de Valor Único Empresa
-- =============================
INSERT INTO Empresa (cnpj, nome, idGerente) VALUES
('12345678901234', 'Delicia Geladas', NULL);

-- ==================
-- Tabela Funcionario
-- ==================
INSERT INTO Funcionarios (cpf, RG, dataNascimento, email, nome, uf, cidade, rua, numero, bairro, cep, dataInicio, tipo)
VALUES
('11122233344', 'MG1234567', '1990-05-15', 'joao@email.com', 'João Silva', 'MG', 'Belo Horizonte', 'Rua A', '123', 'Centro', '30140000', '2022-01-10', 'Efetivo'),
('55566677788', 'SP7654321', '1995-08-20', 'maria@email.com', 'Maria Oliveira', 'SP', 'São Paulo', 'Av. B', '456', 'Bela Vista', '01020000', '2023-02-15', 'Estágiario'),
('99988877766', 'RJ9876543', '1987-12-10', 'carlos@email.com', 'Carlos Souza', 'RJ', 'Rio de Janeiro', 'Rua C', '789', 'Copacabana', '22030000', '2021-05-22', 'Efetivo');

-- Atualizando as Empresas para definir os gerentes
UPDATE Empresa SET idGerente = 1 WHERE cnpj = '12345678901234';

-- ==========================
-- Tabela Sabores de Sorvetes
-- ==========================
INSERT INTO Sabores (nome, descricao, ingredientes, preco, disponibilidade)
VALUES
('Chocolate', 'Sorvete cremoso de chocolate belga', 'Leite, Açúcar, Chocolate, Cacau', 12.50, TRUE),
('Morango', 'Sorvete de morango com pedaços de fruta', 'Leite, Morango, Açúcar', 10.00, TRUE),
('Baunilha', 'Sorvete clássico de baunilha', 'Leite, Açúcar, Extrato de Baunilha', 11.00, TRUE);

-- ==============
-- Tabela Cliente
-- ==============
INSERT INTO Clientes (nomeCliente, cidade, uf, rua, numero, bairro, cep)
VALUES
('Ana Paula', 'Belo Horizonte', 'MG', 'Rua X', '101', 'Savassi', '30112000'),
('Fernando Lima', 'São Paulo', 'SP', 'Av. Y', '202', 'Jardins', '01402000'),
('Camila Rocha', 'Rio de Janeiro', 'RJ', 'Rua Z', '303', 'Botafogo', '22250000');

-- ==========================
-- Tabela Contatos da Empresa
-- ==========================
INSERT INTO contatos (cnpj, tipo, valor, observacao)
VALUES
('12345678901234', 'Telefone', '(31) 99876-5432', 'Contato principal'),
('12345678901234', 'E-mail', 'contato@geladocia.com.br', 'Suporte ao cliente'),
('12345678901234', 'Redes Sociais', '@frio_gourmet', 'Instagram oficial');

-- ==========================
-- Tabela TelefoneFuncionario
-- ==========================
INSERT INTO TelefoneFuncionario (telefoneFuncionario, idFuncionario)
VALUES
(31998765432, 1),
(11987654321, 2),
(21976543210, 3);

-- ======================
-- Tabela TelefoneCliente
-- ======================
INSERT INTO TelefoneCliente (telefoneCliente, idCliente)
VALUES
(31987651234, 1),
(11965439876, 2),
(21954328765, 3);
