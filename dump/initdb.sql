-- --------------------------------------------------------
--
-- Tabela de exemplo para testes
--
CREATE TABLE IF NOT EXISTS `user` (
    `id` int  NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` varchar(255) DEFAULT NULL, 
    `password` varchar(50) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `customer` (
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    `name` varchar(50) DEFAULT NULL, 
    `date_of_birth` varchar(50) DEFAULT NULL, 
    `cpf` varchar(14) DEFAULT NULL, 
    `rg` varchar(9) DEFAULT NULL, 
    `phone` VARCHAR(10) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `address` (
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  	`customerId` int NOT NULL,
  	`street` VARCHAR(30),
  	`city` VARCHAR(30) NOT NULL,
  	`number` VARCHAR(4) NOT NULL,
  	`uf` VARCHAR(2) NOT NULL
);


ALTER TABLE address
	ADD CONSTRAINT fk_Customer_Address
	FOREIGN KEY (customerId) REFERENCES user (id);

--
-- Informacoes para teste
--