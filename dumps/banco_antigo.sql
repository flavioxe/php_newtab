-- Create
CREATE DATABASE old_db;

-- Enter the database
USE old_db;

-- Create table
CREATE TABLE pedido (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    numero_pedido INT NOT NULL,
    nome_cliente VARCHAR(100) NOT NULL,
    cpf CHAR(11) NOT NULL,
    email NCHAR(10),
    dt_pedido DATETIME NOT NULL,
    cod_barras VARCHAR(20) NOT NULL,
    nome_produto VARCHAR(100),
    valor_unitario DECIMAL(5,2) NOT NULL,
    quantidade INT NOT NULL
);

-- Insert data to table
INSERT INTO pedido values
	(DEFAULT, 1, "Flávio", "11111111111", "flavio@email.com", now(), "1651286418615", "Biscoito", 1.50, 30),
    (DEFAULT, 2, "Hellen", "22222222222", "hellen@email.com", now(), "5165816168711", "Energético", 8.00, 2),
    (DEFAULT, 3, "Jullya", "33333333333", "julllya@email.com", now(), "2681687162168", "Limão", 5.55, 8),
    (DEFAULT, 4, "Eduardo", "44444444444", "eduardo@email.com", now(), "2651786161683", "Vinho", 49.99, 1),
    (DEFAULT, 5, "Eduarda", "55555555555", "eduarda@email.com", now(), "1561861286181", "Ovo de codorna", 5.00, 1),
    (DEFAULT, 6, "Benjamin", "66666666666", "benj@email.com", now(), "5628618741877", "Farinha de Trigo", 4.80, 2);

-- Select all
select * from pedido;