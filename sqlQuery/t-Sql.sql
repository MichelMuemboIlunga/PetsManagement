-- CREATE DATABASE --
CREATE DATABASE PetManagement;

use PetManagement;

-- lookup table tUserType --
CREATE TABLE tUserType(
                          userTypeId INT NOT NULL AUTO_INCREMENT,
                          Description VARCHAR(250) NOT NULL,
                          createdDate DATETIME NOT NULL,
                          lastModiedDate DATETIME,
                          createdBy VARCHAR(100) NOT NULL,
                          modifiedBy VARCHAR(100),
                          isDeleted BOOLEAN NOT NULL DEFAULT 0,
                          PRIMARY KEY (`userTypeId`)
) ENGINE = InnoDB;

-- Insert Data into tUserType --

INSERT INTO tUserType(Description, createdDate,createdBy)
VALUES
    ("Admin", current_timestamp(), "SYSTEM"),
    ("Customer", current_timestamp(), "SYSTEM");

-- tUser table --
CREATE TABLE tUser(
                      userId INT NOT NULL AUTO_INCREMENT,
                      username VARCHAR(250) NOT NULL,
                      email VARCHAR(100) NOT NULL,
                      password VARCHAR(200) NOT NULL,
                      userTypeId INT NOT NULL,
                      createdDate DATETIME NOT NULL,
                      lastModiedDate DATETIME,
                      createdBy VARCHAR(100) NOT NULL,
                      modifiedBy VARCHAR(100),
                      isDeleted BOOLEAN NOT NULL DEFAULT 0,
                      PRIMARY KEY (`userId`),
                      CONSTRAINT fk_userTypeId FOREIGN KEY(userTypeId) REFERENCES tUserType(userTypeId)
) ENGINE = InnoDB;

-- tUserAddress table --

CREATE TABLE tUserAddress(
                             userAddressId INT NOT NULL AUTO_INCREMENT,
                             userId INT NOT NULL,
                             postalCode VARCHAR(50) NOT NULL,
                             country VARCHAR(100),
                             city VARCHAR(200),
                             mobileNumber VARCHAR(200),
                             photos LONGBLOB,
                             createdDate DATETIME NOT NULL,
                             lastModiedDate DATETIME,
                             createdBy VARCHAR(100) NOT NULL,
                             modifiedBy VARCHAR(100),
                             isDeleted BOOLEAN NOT NULL DEFAULT 0,
                             PRIMARY KEY (`userAddressId`),
                             CONSTRAINT fk_userId FOREIGN KEY(userId) REFERENCES tUser(userId)
) ENGINE = InnoDB;

-- tProductCategory lookup table --

CREATE TABLE tProductCategory(
                                 productCategoryId INT NOT NULL AUTO_INCREMENT,
                                 categoryName VARCHAR(200) NOT NULL,
                                 createdDate DATETIME NOT NULL,
                                 lastModiedDate DATETIME,
                                 createdBy VARCHAR(100) NOT NULL,
                                 modifiedBy VARCHAR(100),
                                 isDeleted BOOLEAN NOT NULL DEFAULT 0,
                                 PRIMARY KEY (`productCategoryId`)
) ENGINE = InnoDB;

-- Insert Data into tProductCategory --

INSERT INTO tProductCategory(categoryName, createdDate,createdBy)
VALUES
    ("DOGS", current_timestamp(), "SYSTEM"),
    ("CATS", current_timestamp(), "SYSTEM"),
    ("BIRDS", current_timestamp(), "SYSTEM"),
    ("HORSES", current_timestamp(), "SYSTEM");

-- tProduct table --
CREATE TABLE tProduct(
                         productId INT NOT NULL AUTO_INCREMENT,
                         productName VARCHAR(250) NOT NULL,
                         productImage LONGBLOB NOT NULL,
                         productDescription VARCHAR(100),
                         productPrice VARCHAR(200) NOT NULL,
                         productCode VARCHAR(50),
                         productQuantity INT,
                         productCategoryId INT NOT NULL,
                         createdDate DATETIME NOT NULL,
                         lastModiedDate DATETIME,
                         createdBy VARCHAR(100) NOT NULL,
                         modifiedBy VARCHAR(100),
                         isDeleted BOOLEAN NOT NULL DEFAULT 0,
                         PRIMARY KEY (`productId`),
                         CONSTRAINT fk_productCategoryId FOREIGN KEY(productCategoryId) REFERENCES tProductCategory(productCategoryId)
) ENGINE = InnoDB;

-- tNotificationtype lookup table --
CREATE TABLE tNotificationType(
                                  notificationTypeId INT NOT NULL AUTO_INCREMENT,
                                  description VARCHAR(200) NOT NULL,
                                  code VARCHAR(50) NOT NULL,
                                  createdDate DATETIME NOT NULL,
                                  lastModiedDate DATETIME,
                                  createdBy VARCHAR(100) NOT NULL,
                                  modifiedBy VARCHAR(100),
                                  isDeleted BOOLEAN NOT NULL DEFAULT 0,
                                  PRIMARY KEY (`notificationTypeId`)
) ENGINE = InnoDB;

-- Insert Data into tNotification --

INSERT INTO tNotificationType(description, code, createdDate,createdBy)
VALUES
    ("Email Notification", "EML", current_timestamp(), "SYSTEM"),
    ("Message Notification", "SMS", current_timestamp(), "SYSTEM");

-- tNotification table --

CREATE TABLE tNotification(
                              notificationId INT NOT NULL AUTO_INCREMENT,
                              username VARCHAR(250) NOT NULL,
                              subject VARCHAR(200) NOT NULL,
                              description VARCHAR(1000),
                              email VARCHAR(200) NOT NULL,
                              notificationTypeId INT NOT NULL,
                              createdDate DATETIME NOT NULL,
                              lastModiedDate DATETIME,
                              createdBy VARCHAR(100) NOT NULL,
                              modifiedBy VARCHAR(100),
                              isDeleted BOOLEAN NOT NULL DEFAULT 0,
                              PRIMARY KEY (`notificationId`),
                              CONSTRAINT fk_notificationTypeId FOREIGN KEY(notificationTypeId) REFERENCES tNotificationType(notificationTypeId)
) ENGINE = InnoDB;

-- tOrderType lookup table --

CREATE TABLE tOrderType(
                           orderTypeId INT NOT NULL AUTO_INCREMENT,
                           code VARCHAR(50) NOT NULL,
                           description VARCHAR(500) NOT NULL,
                           createdDate DATETIME NOT NULL,
                           lastModiedDate DATETIME,
                           createdBy VARCHAR(100) NOT NULL,
                           modifiedBy VARCHAR(100),
                           isDeleted BOOLEAN NOT NULL DEFAULT 0,
                           PRIMARY KEY (`orderTypeId`)
) ENGINE = InnoDB;

-- Insert Data into tNotification --

INSERT INTO tOrderType(description, code, createdDate,createdBy)
VALUES
    ("Email Notification", "EML", current_timestamp(), "SYSTEM"),
    ("Message Notification", "SMS", current_timestamp(), "SYSTEM");


-- tTransaction lookup table --
CREATE TABLE tTransaction(
                             transactionId INT NOT NULL AUTO_INCREMENT,
                             description VARCHAR(500) NOT NULL,
                             code VARCHAR(50) NOT NULL,
                             createdDate DATETIME NOT NULL,
                             lastModiedDate DATETIME,
                             createdBy VARCHAR(100) NOT NULL,
                             modifiedBy VARCHAR(100),
                             isDeleted BOOLEAN NOT NULL DEFAULT 0,
                             PRIMARY KEY (`transactionId`)
) ENGINE = InnoDB;

-- Insert Data into tNotification --

INSERT INTO tTransaction(description, code, createdDate, createdBy)
VALUES
    ("Approved", "APP01", current_timestamp(), "SYSTEM"),
    ("Declined", "DEC01", current_timestamp(), "SYSTEM"),
    ("Pending",  "PEN", current_timestamp(), "SYSTEM");


--  tOrder table --
CREATE TABLE tOrder(
                       orderId INT NOT NULL AUTO_INCREMENT,
                       productId INT NOT NULL,
                       userId INT NOT NULL,
                       transactionId INT NOT NULL,
                       orderTypeId INT NOT NULL,
                       createdDate DATETIME NOT NULL,
                       lastModiedDate DATETIME,
                       createdBy VARCHAR(100) NOT NULL,
                       modifiedBy VARCHAR(100),
                       isDeleted BOOLEAN NOT NULL DEFAULT 0,
                       PRIMARY KEY (`orderId`),
                       CONSTRAINT fk_Order_productId FOREIGN KEY(productId) REFERENCES tProduct(productId),
                       CONSTRAINT fk_Order_userId FOREIGN KEY(userId) REFERENCES tUser(userId),
                       CONSTRAINT fk_Order_transactionId FOREIGN KEY(transactionId) REFERENCES tTransaction(transactionId),
                       CONSTRAINT fk_Order_orderTypeId FOREIGN KEY(orderTypeId) REFERENCES tOrderType(orderTypeId)
) ENGINE = InnoDB;



