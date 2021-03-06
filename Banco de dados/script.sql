-- MySQL Script generated by MySQL Workbench
-- dom 11 fev 2018 22:12:23 -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema bd_WatchMyCar
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bd_WatchMyCar
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_WatchMyCar` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `bd_WatchMyCar` ;

-- -----------------------------------------------------
-- Table `bd_WatchMyCar`.`tb_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_WatchMyCar`.`tb_usuario` (
  `id_usuario` INT(10) NOT NULL AUTO_INCREMENT,
  `nome_usuario` VARCHAR(45) NOT NULL,
  `cpf_usuario` VARCHAR(15) NOT NULL,
  `tipo_usuario` ENUM('SUPERVISOR', 'MOTORISTA') NOT NULL,
  `senha_usuario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bd_WatchMyCar`.`tb_motorista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_WatchMyCar`.`tb_motorista` (
  `id_motorista` INT(10) NOT NULL AUTO_INCREMENT,
  `cnh_motorista` VARCHAR(45) NOT NULL,
  `tipo_cnh_motorista` ENUM('A', 'B', 'C', 'D', 'E', 'AB', 'AC', 'AD', 'AE') NOT NULL,
  `id_usuario` INT(10) NOT NULL,
  PRIMARY KEY (`id_motorista`),
  INDEX `fk_tb_motorista_tb_usuario_idx` (`id_usuario` ASC),
  CONSTRAINT `fk_tb_motorista_tb_usuario`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `bd_WatchMyCar`.`tb_usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bd_WatchMyCar`.`tb_veiculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_WatchMyCar`.`tb_veiculo` (
  `id_veiculo` INT(10) NOT NULL AUTO_INCREMENT,
  `modelo_veiculo` VARCHAR(20) NOT NULL,
  `chassi_veiculo` VARCHAR(45) NOT NULL,
  `disponivel_veiculo` ENUM('SIM', 'NAO') NOT NULL,
  PRIMARY KEY (`id_veiculo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_WatchMyCar`.`tb_viagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_WatchMyCar`.`tb_viagem` (
  `id_viagem` INT(10) NOT NULL AUTO_INCREMENT,
  `origem_viagem` VARCHAR(45) NOT NULL,
  `destino_viagem` VARCHAR(45) NOT NULL,
  `horarioSaida_viagem` DATETIME NOT NULL,
  `horarioChegada_viagem` DATETIME NOT NULL,
  `data_viagem` DATETIME NOT NULL,
  `id_veiculo` INT(10) NOT NULL,
  PRIMARY KEY (`id_viagem`),
  INDEX `fk_tb_viagem_tb_veiculo1_idx` (`id_veiculo` ASC),
  CONSTRAINT `fk_tb_viagem_tb_veiculo1`
    FOREIGN KEY (`id_veiculo`)
    REFERENCES `bd_WatchMyCar`.`tb_veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_WatchMyCar`.`tb_planilha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_WatchMyCar`.`tb_planilha` (
  `id_planilha` INT(10) NOT NULL AUTO_INCREMENT,
  `id_motorista` INT(10) NOT NULL,
  `id_viagem` INT(10) NOT NULL,
  PRIMARY KEY (`id_planilha`),
  INDEX `fk_tb_planilha_tb_motorista1_idx` (`id_motorista` ASC),
  INDEX `fk_tb_planilha_tb_viagem1_idx` (`id_viagem` ASC),
  CONSTRAINT `fk_tb_planilha_tb_motorista1`
    FOREIGN KEY (`id_motorista`)
    REFERENCES `bd_WatchMyCar`.`tb_motorista` (`id_motorista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_planilha_tb_viagem1`
    FOREIGN KEY (`id_viagem`)
    REFERENCES `bd_WatchMyCar`.`tb_viagem` (`id_viagem`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
