-- Create
CREATE DATABASE php_newtab;

-- Enter the database
USE php_newtab;

-- Create table "cliente"
CREATE TABLE cliente (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(200) NOT NULL,
    cpf CHAR(15) NOT NULL,
    email VARCHAR(200)
);

-- Create table "produto"
CREATE TABLE produto (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(200),
    valor_unitario DECIMAL(5,2) NOT NULL,
    cod_barras VARCHAR(13) NOT NULL UNIQUE KEY
);

-- Create table "pedido"
CREATE TABLE pedido (
	numero_pedido INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    date_pedido DATETIME NOT NULL,
    quantidade INT NOT NULL,
    valor_total DECIMAL(6,2),
    id_cliente INT NOT NULL,
    id_produto INT NOT NULL,
    id_valor decimal (5,2) UNIQUE KEY,
    -- FOREIGN KEY (id_cliente) REFERENCES cliente (id),
    -- FOREIGN KEY (id_produto) REFERENCES produto (id),
    -- FOREIGN KEY (id_valor) REFERENCES produto (valor_unitario)
);
