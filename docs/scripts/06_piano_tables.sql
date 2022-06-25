CREATE TABLE `pianos` (
  `pianoid` BIGINT(18) NOT NULL AUTO_INCREMENT, --codigo autonumerico
  `pianodsc` VARCHAR(60) NULL, --descripcion del piano
  `pianobio` VARCHAR(5000) NULL, --resumen/historia del piano
  `pianosales` INT NULL, --contador de ventas de ese piano
  `pianoimguri` VARCHAR(128) NULL, --url de la img
  `pianoimgthb` VARCHAR(128) NULL, --url version pequeña de la anterior
  `pianoprice` DECIMAL(13,2) NULL, --precio
  `pianoest` CHAR(3) NULL, --estado
  PRIMARY KEY (`pianoid`));

CREATE TABLE `scores` (
  `scoreid` BIGINT(18) NOT NULL AUTO_INCREMENT,
  `scoredsc` VARCHAR(128) NULL,
  `scoreauthor` VARCHAR(256) NULL,
  `scoregenre` VARCHAR(256) NULL,
  `scoreyear` INT NULL,
  `scoresales` INT NULL,
  `scoreprice` DECIMAL(13,2) NULL,
  `scoredocurl` VARCHAR(256) NULL,
  `scoreest` CHAR(3) NULL,
  PRIMARY KEY (`scoreid`));


CREATE TABLE `heroitems` (
  `heroItemid` BIGINT(18) NOT NULL AUTO_INCREMENT,
  `heroname` VARCHAR(45) NULL,
  `heroimgurl` VARCHAR(256) NULL,
  `heroaction` VARCHAR(512) NULL,
  `heroorder` INT NULL,
  `heroest` CHAR(3) NULL,
  PRIMARY KEY (`heroItemid`));
