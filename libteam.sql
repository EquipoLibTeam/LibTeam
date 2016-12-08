-- MySQL Script generated by MySQL Workbench
-- 11/10/16 11:09:19
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema libteam
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema libteam
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `libteam` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `libteam` ;

-- -----------------------------------------------------
-- Table `libteam`.`Solicitud`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `libteam`.`Solicitud` (
  `idSolicitud` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Nombre_Solicitante` VARCHAR(70) NOT NULL COMMENT '',
  `operador` VARCHAR(45) NOT NULL COMMENT '',
  `Email` VARCHAR(60) NOT NULL COMMENT '',
  `Forma_Pago` VARCHAR(45) NOT NULL COMMENT '',
  `imei` INT NULL COMMENT '',
  `Numero_Contacto` INT NOT NULL COMMENT '',
  `Marca` VARCHAR(75) NOT NULL COMMENT '',
  `Modelo` VARCHAR(50) NOT NULL COMMENT '',
  `fecha` DATETIME NULL COMMENT '',
  PRIMARY KEY (`idSolicitud`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;