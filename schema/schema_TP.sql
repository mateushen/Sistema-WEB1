-- MySQL Script generated by MySQL Workbench
-- Mon Sep 26 21:16:08 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sistema
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sistema
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sistema` DEFAULT CHARACTER SET utf8 ;
USE `sistema` ;

-- -----------------------------------------------------
-- Table `sistema`.`Cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistema`.`Cliente` ;

CREATE TABLE IF NOT EXISTS `sistema`.`Cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `telefone` VARCHAR(14) NOT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE INDEX `idCliente_UNIQUE` (`idCliente` ASC) VISIBLE,
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) VISIBLE,
  UNIQUE INDEX `celular_UNIQUE` (`telefone` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema`.`Veiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistema`.`Veiculo` ;

CREATE TABLE IF NOT EXISTS `sistema`.`Veiculo` (
  `idVeiculo` INT NOT NULL AUTO_INCREMENT,
  `placa` VARCHAR(8) NOT NULL,
  `renavam` VARCHAR(11) NOT NULL,
  `marca` VARCHAR(20) NOT NULL,
  `modelo` VARCHAR(20) NOT NULL,
  `cor` VARCHAR(20) NOT NULL,
  `ano` INT NOT NULL,
  `vendida` INT NOT NULL,
  PRIMARY KEY (`idVeiculo`),
  UNIQUE INDEX `idVeiculo_UNIQUE` (`idVeiculo` ASC) VISIBLE,
  UNIQUE INDEX `placa_UNIQUE` (`placa` ASC) VISIBLE,
  UNIQUE INDEX `renavam_UNIQUE` (`renavam` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema`.`Gerente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistema`.`Gerente` ;

CREATE TABLE IF NOT EXISTS `sistema`.`Gerente` (
  `idGerente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idGerente`),
  UNIQUE INDEX `idGerente_UNIQUE` (`idGerente` ASC) VISIBLE,
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema`.`Funcionario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistema`.`Funcionario` ;

CREATE TABLE IF NOT EXISTS `sistema`.`Funcionario` (
  `idFuncionario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `idGerente` INT NOT NULL,
  PRIMARY KEY (`idFuncionario`),
  UNIQUE INDEX `idFuncionario_UNIQUE` (`idFuncionario` ASC) VISIBLE,
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  INDEX `fk_Funcionario_Gerente1_idx` (`idGerente` ASC) VISIBLE,
  CONSTRAINT `fk_Funcionario_Gerente1`
    FOREIGN KEY (`idGerente`)
    REFERENCES `sistema`.`Gerente` (`idGerente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema`.`Pagamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistema`.`Pagamento` ;

CREATE TABLE IF NOT EXISTS `sistema`.`Pagamento` (
  `idPagamento` INT NOT NULL AUTO_INCREMENT,
  `tipo_pagamento` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idPagamento`),
  UNIQUE INDEX `idPagamento_UNIQUE` (`idPagamento` ASC) VISIBLE,
  UNIQUE INDEX `tipo_pagamento_UNIQUE` (`tipo_pagamento` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema`.`Venda`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistema`.`Venda` ;

CREATE TABLE IF NOT EXISTS `sistema`.`Venda` (
  `idVenda` INT NOT NULL AUTO_INCREMENT,
  `idFuncionario` INT NOT NULL,
  `idCliente` INT NOT NULL,
  `idVeiculo` INT NOT NULL,
  `idPagamento` INT NOT NULL,
  `data_venda` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idVenda`),
  UNIQUE INDEX `idVenda_UNIQUE` (`idVenda` ASC) VISIBLE,
  INDEX `fk_Venda_Cliente_idx` (`idCliente` ASC) VISIBLE,
  INDEX `fk_Venda_Veiculo1_idx` (`idVeiculo` ASC) VISIBLE,
  INDEX `fk_Venda_Funcionario1_idx` (`idFuncionario` ASC) VISIBLE,
  INDEX `fk_Venda_Pagamento1_idx` (`idPagamento` ASC) VISIBLE,
  CONSTRAINT `fk_Venda_Cliente`
    FOREIGN KEY (`idCliente`)
    REFERENCES `sistema`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Venda_Veiculo1`
    FOREIGN KEY (`idVeiculo`)
    REFERENCES `sistema`.`Veiculo` (`idVeiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Venda_Funcionario1`
    FOREIGN KEY (`idFuncionario`)
    REFERENCES `sistema`.`Funcionario` (`idFuncionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Venda_Pagamento1`
    FOREIGN KEY (`idPagamento`)
    REFERENCES `sistema`.`Pagamento` (`idPagamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
