IF NOT EXISTS(SELECT *
              FROM   sys.databases
              WHERE  NAME = 'Localidades')
  BEGIN
      CREATE DATABASE Localidades
  END

go

USE Localidades

go


IF NOT EXISTS (SELECT *
               FROM   sysobjects
               WHERE  NAME = 'locais'
                      AND xtype = 'U')
  BEGIN
      CREATE TABLE locais
        (
           id        INT PRIMARY KEY IDENTITY,
           nome      VARCHAR(64) NOT NULL,
           latitude  DECIMAL(10, 8) NOT NULL,
           longitude DECIMAL(11, 8) NOT NULL
        )
  END 


  CREATE DATABASE  Localidades;

USE  Localidades;

CREATE TABLE locais  (
           id        INT PRIMARY KEY AUTO_INCREMENT,
           nome      VARCHAR(64) NOT NULL,
           latitude  DECIMAL(10, 8) NOT NULL,
           longitude DECIMAL(11, 8) NOT NULL
        );