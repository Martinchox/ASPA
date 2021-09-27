-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema aspadb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema aspadb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `aspadb` DEFAULT CHARACTER SET utf8 ;
USE `aspadb` ;

-- -----------------------------------------------------
-- Table `aspadb`.`excusa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aspadb`.`excusa` (
  `id_excusa` INT NOT NULL AUTO_INCREMENT,
  `motivo` VARCHAR(45) NULL,
  `descripcion` TEXT NULL,
  `imagen` BLOB NULL,
  `revisado` VARCHAR(45) NULL,
  `usuario_revisado` VARCHAR(45) NULL,
  `fecha` DATE NULL,
  `excusa_activo` TINYINT NULL DEFAULT 1,
  `FR_excusa` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_excusa`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aspadb`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aspadb`.`usuarios` (
  `id_usuarios` INT(11) NOT NULL AUTO_INCREMENT,
  `rol` VARCHAR(15) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `genero` VARCHAR(12) NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(14) NULL,
  `direccion` VARCHAR(45) NULL,
  `username` VARCHAR(20) NOT NULL,
  `password` VARCHAR(200) NOT NULL,
  `nombre_acudiente` VARCHAR(45) NOT NULL,
  `telefono_acudiente` VARCHAR(14) NOT NULL,
  `email_acudiente` VARCHAR(45) NULL,
  `activo_usuarios` TINYINT NULL DEFAULT 1,
  `FR_usuarios` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `excusa_id_excusa` INT NULL,
  PRIMARY KEY (`id_usuarios`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aspadb`.`horario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aspadb`.`horario` (
  `id_horario` INT NOT NULL AUTO_INCREMENT,
  `dia` VARCHAR(20) NULL,
  `hora` INT(2) NULL,
  `horario_activo` TINYINT NULL DEFAULT 1,
  `FR_horario` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `usuarios_id_usuarios` INT(11) NULL,
  PRIMARY KEY (`id_horario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aspadb`.`asistencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aspadb`.`asistencia` (
  `id_asistencia` INT NOT NULL AUTO_INCREMENT,
  `ausensia` VARCHAR(20) NULL,
  `fecha` DATE NULL,
  `asistencia_activo` TINYINT NULL DEFAULT 1,
  `FR_asistencia` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `horario_id_horario` INT NULL,
  `excusa_id_excusa` INT NULL,
  PRIMARY KEY (`id_asistencia`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
