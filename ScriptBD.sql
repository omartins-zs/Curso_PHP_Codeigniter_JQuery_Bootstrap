



CREATE TABLE `Curso_PHP_Codeigniter_JQuery_Bootstrap`.`pessoas` ( `idPessoa` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `documento` CHAR(14) NOT NULL , `data_nasc` DATETIME NOT NULL , PRIMARY KEY (`idPessoa`)) ENGINE = InnoDB;

CREATE TABLE `curso_php_codeigniter_jquery_bootstrap`.`usuarios` ( `idUsuario` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(50) NOT NULL , `chave` VARCHAR(100) NOT NULL , PRIMARY KEY (`idUsuario`)) ENGINE = InnoDB;

ALTER TABLE `usuarios` ADD `idPessoa` INT NOT NULL AFTER `chave`;

ALTER TABLE `usuarios` ADD FOREIGN KEY (`idPessoa`) REFERENCES `pessoas`(`idPessoa`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `usuarios` CHANGE `nome` `nomeUsuario` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

ALTER TABLE `usuarios` CHANGE `chave` `senha` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

ALTER TABLE `pessoas` CHANGE `data_nasc` `data_nasc` DATE NOT NULL;

ALTER TABLE `pessoas` ADD `sobrenome` VARCHAR(50) NOT NULL AFTER `nome`;

UPDATE `pessoas` SET `sobrenome` = 'Matheus' WHERE `pessoas`.`idPessoa` = 1;

UPDATE `pessoas` SET `sobrenome` = 'Rocha' WHERE `pessoas`.`idPessoa` = 2;

ALTER TABLE `pessoas` ADD `apelido` VARCHAR(35) NULL AFTER `sobrenome`;

ALTER TABLE `pessoas` ADD `situacao` INT NOT NULL COMMENT '1 - Ativo, 0 - Inativo' AFTER `data_nasc`;

CREATE TABLE `curso_php_codeigniter_jquery_bootstrap`.`cidades` ( `idCidade` INT NULL AUTO_INCREMENT , `cidade` VARCHAR(30) NOT NULL , PRIMARY KEY (`idCidade`)) ENGINE = InnoDB;

ALTER TABLE `pessoas` ADD `idCidade` INT NOT NULL AFTER `documento`;

INSERT INTO `cidades` (`idCidade`, `cidade`) VALUES (NULL, 'Guarulhos'), (NULL, 'Campinas'), (NULL, 'Osasco'), (NULL, 'Sorocaba'), (NULL, 'Maua')

ALTER TABLE `cidades` ADD `situacao` INT NOT NULL AFTER `cidade`;

CREATE TABLE `curso_php_codeigniter_jquery_bootstrap`.`notas` ( `idNotas` INT NOT NULL AUTO_INCREMENT , `idPessoa` INT NOT NULL , `1B` INT NOT NULL , `2B` INT NOT NULL , `3B` INT NOT NULL , `4B` INT NOT NULL , `notaFinal` INT NOT NULL , PRIMARY KEY (`idNotas`)) ENGINE = InnoDB;

ALTER TABLE `notas` ADD FOREIGN KEY (`idPessoa`) REFERENCES `pessoas`(`idPessoa`) ON DELETE RESTRICT ON UPDATE RESTRICT;