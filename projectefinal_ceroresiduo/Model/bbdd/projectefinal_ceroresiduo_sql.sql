-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema projectefinal_ceroresiduo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema projectefinal_ceroresiduo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projectefinal_ceroresiduo` DEFAULT CHARACTER SET utf8 ;
USE `projectefinal_ceroresiduo` ;

-- -----------------------------------------------------
-- Table `projectefinal_ceroresiduo`.`Usuaris`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projectefinal_ceroresiduo`.`Usuaris` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NomUnic` VARCHAR(45) NOT NULL,
  `Contrasenya` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(60) NOT NULL,
  `NomComplet` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC) ,
  UNIQUE INDEX `NomUnic_UNIQUE` (`NomUnic` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projectefinal_ceroresiduo`.`Categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projectefinal_ceroresiduo`.`Categories` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(45) NOT NULL,
  `Foto` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projectefinal_ceroresiduo`.`Productes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projectefinal_ceroresiduo`.`Productes` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(45) NOT NULL,
  `Preu` VARCHAR(45) NOT NULL,
  `Foto` VARCHAR(45) NULL,
  `Descripcio` LONGTEXT NULL,
  `IDCategoria` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `IDCategoria_idx` (`IDCategoria` ASC) ,
  CONSTRAINT `IDCategoria`
    FOREIGN KEY (`IDCategoria`)
    REFERENCES `projectefinal_ceroresiduo`.`Categories` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projectefinal_ceroresiduo`.`Comandes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projectefinal_ceroresiduo`.`Comandes` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Data` DATE NOT NULL,
  `IDProducte` INT NOT NULL,
  `IDUsuari` INT NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `IDProducte`
    FOREIGN KEY (`ID`)
    REFERENCES `projectefinal_ceroresiduo`.`Productes` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `IDUsuari`
    FOREIGN KEY (`ID`)
    REFERENCES `projectefinal_ceroresiduo`.`Usuaris` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projectefinal_ceroresiduo`.`Botigues`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projectefinal_ceroresiduo`.`Botigues` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(45) NOT NULL,
  `Ciutat` VARCHAR(45) NULL,
  `Ubicacio` VARCHAR(45) NULL,
  `Foto` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projectefinal_ceroresiduo`.`LiniaComandes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projectefinal_ceroresiduo`.`LiniaComandes` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `IDProductes` INT NOT NULL,
  `IDComandes` INT NOT NULL,
  `Unitats` INT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Productes_has_Comandes_Comandes1_idx` (`IDComandes` ASC) ,
  INDEX `fk_Productes_has_Comandes_Productes_idx` (`IDProductes` ASC) ,
  CONSTRAINT `IDLiniaComandes_Productes`
    FOREIGN KEY (`IDProductes`)
    REFERENCES `projectefinal_ceroresiduo`.`Productes` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `IDLiniaComandes_Comandes`
    FOREIGN KEY (`IDComandes`)
    REFERENCES `projectefinal_ceroresiduo`.`Comandes` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projectefinal_ceroresiduo`.`Existencies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projectefinal_ceroresiduo`.`Existencies` (
  `Productes_ID` INT NOT NULL,
  `Botigues_ID` INT NOT NULL,
  `NumeroExistencies` INT NOT NULL,
  `Existenciescol` VARCHAR(45) NULL,
  PRIMARY KEY (`Productes_ID`, `Botigues_ID`),
  INDEX `fk_Productes_has_Botigues_Botigues1_idx` (`Botigues_ID` ASC) ,
  INDEX `fk_Productes_has_Botigues_Productes1_idx` (`Productes_ID` ASC) ,
  CONSTRAINT `fk_Productes_has_Botigues_Productes1`
    FOREIGN KEY (`Productes_ID`)
    REFERENCES `projectefinal_ceroresiduo`.`Productes` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Productes_has_Botigues_Botigues1`
    FOREIGN KEY (`Botigues_ID`)
    REFERENCES `projectefinal_ceroresiduo`.`Botigues` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
