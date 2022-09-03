-- CREATE DATABASE --
CREATE DATABASE PetManagement;

USE PetManagement;

-- tUser table --
DROP TABLE IF EXISTS tUser;
CREATE TABLE tUser(
                      userId INT NOT NULL AUTO_INCREMENT,
                      username VARCHAR(250) NOT NULL,
                      email VARCHAR(100) NOT NULL,
                      password VARCHAR(200) NOT NULL,
                      PRIMARY KEY (`userId`)
) ENGINE = InnoDB;

-- tDogsProduct table --

DROP TABLE  IF EXISTS tDogsProduct;
CREATE TABLE tDogsProduct(
                      productId INT NOT NULL AUTO_INCREMENT,
                      productName VARCHAR(250) NOT NULL,
                      image VARCHAR(65535), -- MAX length
                      description VARCHAR(65535), -- MAX length
                      price DECIMAL(10,2),
                      code VARCHAR(10),
                      quantity INT,
                      PRIMARY KEY (`productId`)
                    ) ENGINE = InnoDB;

-- INSERT DOGS PRODUCT IN tProduct --


INSERT INTO `tDogsProduct` (`productId`, `productName`, `image`, `description`, `price`, `code`, `quantity`)
VALUES

    (1, 'Milou','../../assets/img/petsimages/categories/dogs/AllDogs/Milou.jpg','Funny DOg','400','A100',1),
    (2, 'Berger','../../assets/img/petsimages/categories/dogs/AllDogs/Berger.jpg','Gardian Dog','500','A200',1),
    (3, 'Bredock','../../assets/img/petsimages/categories/dogs/AllDogs/Bredock.jpg','Angry Dog','200','A300',1),
    (4, 'Bulldog','../../assets/img/petsimages/categories/dogs/AllDogs/Bulldog.jpg','Angry Dog','350','A400',1),
    (5, 'Currious','../../assets/img/petsimages/categories/dogs/AllDogs/Currious.jpg','Vigilant Dog','150','A500',1),
    (6, 'Gentille','../../assets/img/petsimages/categories/dogs/AllDogs/Gentille.jpg','Kind Dog','250','A600',1),
    (7, 'Mars','../../assets/img/petsimages/categories/dogs/AllDogs/Mars.jpg','Playing Dog','200','A700',1),
    (8, 'Martin','../../assets/img/petsimages/categories/dogs/AllDogs/Martin.jpg','Sleeping Dog','100','A800',1),
    (9, 'Sautin', '../../assets/img/petsimages/categories/dogs/AllDogs/Sautin.jpg','Funnt Dog','145','A900',1),
    (10, 'Sauvage','../../assets/img/petsimages/categories/dogs/AllDogs/Sauvage.jpg','Angry Dog','260','B100',1),
    (11,'Schooby', '../../assets/img/petsimages/categories/dogs/AllDogs/Schooby.jpg','Funny Dog','320','B200',1),
    (12,'Barny','../../assets/img/petsimages/categories/dogs/AllDogs/Barny.jpg','Aventurier Dog','440','B300',1),
    (13,'Bettowen','../../assets/img/petsimages/categories/dogs/AllDogs/Bettowen.jpg','Gardian DOg','125','B400',1 ),
    (14,'Black','../../assets/img/petsimages/categories/dogs/AllDogs/Black.jpg','Angry Dog','360','B500',1),
    (15, 'Boubou', '../../assets/img/petsimages/categories/dogs/AllDogs/Boubou.jpg','Funny Dog','50','B600',1),
    (16, 'Chambela','../../assets/img/petsimages/categories/dogs/AllDogs/Chambela.jpg','Funny Dog','160','B700',1 ),
    (17, 'Chantal', '../../assets/img/petsimages/categories/dogs/AllDogs/Chantal.jpg','Gentille Dog', '129','B800',1 ),
    (18, 'Chaplin','../../assets/img/petsimages/categories/dogs/AllDogs/Chaplin.jpg','Funny Dog','600','B900',1),
    (19, 'Chinchin','../../assets/img/petsimages/categories/dogs/AllDogs/Chinchin.jpg','Playing Dog','290','C100',1 ),
    (20, 'Chouchou','../../assets/img/petsimages/categories/dogs/AllDogs/Chouchou.jpg','Playing Dog','80','C200',1 ),
    (21, 'Flaroush','../../assets/img/petsimages/categories/dogs/AllDogs/Flaroush.jpg','Gentille Dog', '168','C300',1 ),
    (22, 'Innocent','../../assets/img/petsimages/categories/dogs/AllDogs/Innocent.jpg','Sleeping Dog','100','C400',1 ),
    (23, 'Kiki', '../../assets/img/petsimages/categories/dogs/AllDogs/Kiki.jpg','Funny Dog','300', 'C500',1),
    (24, 'Loren','../../assets/img/petsimages/categories/dogs/AllDogs/Loren.jpg','Gentille Dog','270','C600',1),
    (25, 'Marlon','../../assets/img/petsimages/categories/dogs/AllDogs/Marlon.jpg','Aventurie Dog','270','C700',1 ),
    (26, 'Matthew', '../../assets/img/petsimages/categories/dogs/AllDogs/Matthew.jpg','Funny Dog','120','C800',1),
    (27, 'Shrek','../../assets/img/petsimages/categories/dogs/AllDogs/Shrek.jpg','Funny Dog','380','C900',1 ),
    (28, 'Sophie','../../assets/img/petsimages/categories/dogs/AllDogs/Sophie.jpg', 'Gentille Dog','70','D100',1 )


-- tCatsProduct table --
DROP TABLE  IF EXISTS tCatsProduct;
CREATE TABLE `tCatsProduct` (
                    productId INT NOT NULL AUTO_INCREMENT,
                    productName VARCHAR(250) NOT NULL,
                    image VARCHAR(65535), -- MAX length
                    description VARCHAR(65535), -- MAX length
                    price DECIMAL(10,2),
                    code VARCHAR(10),
                    quantity INT,
                    PRIMARY KEY (`productId`)
                      ) ENGINE = InnoDB;

    -- insert in tCatsProduct table

INSERT INTO `tCatsProduct` (`productId`, `productName`, `image`, `description`, `price`, `code`, `quantity`)
    VALUES

        (1, 'Avel','../../assets/img/petsimages/categories/cats/AllCats/Avel.jpg','Funny Cat','200','E100',1),
        (2, 'Bodi','../../assets/img/petsimages/categories/cats/AllCats/Bodi.jpg','Gardian Cat','400','E200',1),
        (3, 'Chuan','../../assets/img/petsimages/categories/cats/AllCats/Chuan.jpg','Angry Cat','200','E300',1),
        (4, 'Dean','../../assets/img/petsimages/categories/cats/AllCats/Dean.jpg','Angry Cat','550','E400',1),
        (5, 'Dim','../../assets/img/petsimages/categories/cats/AllCats/Dim.jpg','Vigilant Cat','150','E500',1),
        (6, 'Giovanna','../../assets/img/petsimages/categories/cats/AllCats/Giovanna.jpg','Kind Cat','450','E600',1),
        (7, 'Hendrik','../../assets/img/petsimages/categories/cats/AllCats/Hendrik.jpg','Playing Cat','230','E700',1),
        (8, 'Hkyu','../../assets/img/petsimages/categories/cats/AllCats/Hkyu.jpg','Funny Cat','300','E800',1),
        (9, 'Jan', '../../assets/img/petsimages/categories/cats/AllCats/Jan.jpg','Angry Cat','445','E900',1),
        (10, 'Javardh','../../assets/img/petsimages/categories/cats/AllCats/Javardh.jpg','Angry Cat','360','F100',1),
        (11,'Jeanie', '../../assets/img/petsimages/categories/cats/AllCats/Jeanie.jpg','Focus Cat','350','F200',1),
        (12,'Khai','../../assets/img/petsimages/categories/cats/AllCats/Khai.jpg','Aventurier Cat','440','F300',1),
        (13,'Laura','../../assets/img/petsimages/categories/cats/AllCats/Laura.jpg','Kind Cat','325','F400',1 ),
        (14,'Leonsa','../../assets/img/petsimages/categories/cats/AllCats/Leonsa.jpg','Kind Cat','360','F500',1),
        (15, 'Marin', '../../assets/img/petsimages/categories/cats/AllCats/Marin.jpg','Focus Cat','250','F600',1),
        (16, 'Qijin','../../assets/img/petsimages/categories/cats/AllCats/Qijin.jpg','Kind Cat','260','F700',1 ),
        (17, 'Ray', '../../assets/img/petsimages/categories/cats/AllCats/Ray.jpg','Gentille Cat', '129','F800',1 ),
        (18, 'Raychan','../../assets/img/petsimages/categories/cats/AllCats/Raychan.jpg','Funny Cat','600','F900',1),
        (19, 'Rick','../../assets/img/petsimages/categories/cats/AllCats/Rick.jpg','Eating Cat','290','G100',1 ),
        (20, 'Sabina','../../assets/img/petsimages/categories/cats/AllCats/Sabina.jpg','Qute Cat','380','G200',1 ),
        (21, 'Simon','../../assets/img/petsimages/categories/cats/AllCats/Simon.jpg','Minion Cat', '268','G300',1 ),
        (22, 'Stefano','../../assets/img/petsimages/categories/cats/AllCats/Stefano.jpg','Aventurier Cat','410','G400',1 ),
        (23, 'Timo', '../../assets/img/petsimages/categories/cats/AllCats/Timo.jpg','Gentille Cat','300', 'G500',1),
        (24, 'Timur','../../assets/img/petsimages/categories/cats/AllCats/Timur.jpg','Courage Cat','170','G600',1),
        (25, 'Tram','../../assets/img/petsimages/categories/cats/AllCats/Tram.jpg','Qute Cat','50','G700',1 ),
        (26, 'Tugba', '../../assets/img/petsimages/categories/cats/AllCats/Tugba.jpg','Qute Cat','120','G800',1),
        (27, 'Zhang','../../assets/img/petsimages/categories/cats/AllCats/Zhang.jpg','Gentille Cat','380','G900',1 ),
        (28, 'Zhoe','../../assets/img/petsimages/categories/cats/AllCats/Zhoe.jpg', 'Gentille Cat','270','H100',1 )



  -- tBirdsProduct table --
  DROP TABLE  IF EXISTS tBirdsProduct;
  CREATE TABLE `tBirdsProduct` (
                      productId INT NOT NULL AUTO_INCREMENT,
                      productName VARCHAR(250) NOT NULL,
                      image VARCHAR(65535), -- MAX length
                      description VARCHAR(65535), -- MAX length
                      price DECIMAL(10,2),
                      code VARCHAR(10),
                      quantity INT,
                      PRIMARY KEY (`productId`)
                        ) ENGINE = InnoDB;

      -- insert in tBirdsProduct table

  INSERT INTO `tBirdsProduct` (`productId`, `productName`, `image`, `description`, `price`, `code`, `quantity`)
  VALUES
      (1, 'aridy','../../assets/img/petsimages/categories/birds/AllBirds/aridy.jpg','Funny bird','100','I100',1),
      (2, 'boris','../../assets/img/petsimages/categories/birds/AllBirds/boris.jpg','Gardian bird','250','I200',1),
      (3, 'bradon','../../assets/img/petsimages/categories/birds/AllBirds/bradon.jpg','Cool bird','120','I300',1),
      (4, 'bruce','../../assets/img/petsimages/categories/birds/AllBirds/bruce.jpg','red bird','500','I400',1),
      (5, 'chris','../../assets/img/petsimages/categories/birds/AllBirds/chris.jpg','Vigilant bird','250','I500',1),
      (6, 'cylog','../../assets/img/petsimages/categories/birds/AllBirds/cylog.jpg','yellow bird','450','I600',1),
      (7, 'david','../../assets/img/petsimages/categories/birds/AllBirds/david.jpg','blue bird','230','I700',1),
      (8, 'deepak','../../assets/img/petsimages/categories/birds/AllBirds/deepak.jpg','Funny bird','300','I800',1),
      (9, 'dieter', '../../assets/img/petsimages/categories/birds/AllBirds/dieter.jpg','Angry bird','445','I900',1),
      (10, 'dmitry','../../assets/img/petsimages/categories/birds/AllBirds/dmitry.jpg','perroque bird','360','J100',1),
      (11,'dominic', '../../assets/img/petsimages/categories/birds/AllBirds/dominic.jpg','gentille bird','250','J200',1),
      (12,'johny','../../assets/img/petsimages/categories/birds/AllBirds/johny.jpg','cool bird','240','J300',1),
      (13,'madiba','../../assets/img/petsimages/categories/birds/AllBirds/madiba.jpg','Kind bird','345','J400',1 ),
      (14,'mark','../../assets/img/petsimages/categories/birds/AllBirds/mark.jpg','Cool bird','160','J500',1),
      (15, 'martin', '../../assets/img/petsimages/categories/birds/AllBirds/martin.jpg','Focus bird','250','J600',1),
      (16, 'matthew','../../assets/img/petsimages/categories/birds/AllBirds/matthew.jpg','Kind bird','290','J700',1 ),
      (17, 'patrice', '../../assets/img/petsimages/categories/birds/AllBirds/patrice.jpg','Gentille bird', '129','J800',1 ),
      (18, 'patricia','../../assets/img/petsimages/categories/birds/AllBirds/patricia.jpg','Funny bird','650','J900',1),
      (19, 'philip','../../assets/img/petsimages/categories/birds/AllBirds/philip.jpg','Eating bird','210','K100',1 ),
      (20, 'ramlee','../../assets/img/petsimages/categories/birds/AllBirds/ramlee.jpg','qute bird','180','K200',1 ),
      (21, 'richard','../../assets/img/petsimages/categories/birds/AllBirds/richard.jpg','Minion bird', '278','K300',1 ),
      (22, 'robert','../../assets/img/petsimages/categories/birds/AllBirds/robert.jpg','cool bird','210','K400',1 ),
      (23, 'rogean', '../../assets/img/petsimages/categories/birds/AllBirds/rogean.jpg','Gentille bird','330', 'K500',1),
      (24, 'saketh','../../assets/img/petsimages/categories/birds/AllBirds/saketh.jpg','Courage bird','270','K600',1),
      (25, 'screenivas','../../assets/img/petsimages/categories/birds/AllBirds/screenivas.jpg','singer bird','250','K700',1 ),
      (26, 'shilom', '../../assets/img/petsimages/categories/birds/AllBirds/shilom.jpg','Qute bird','140','K800',1),
      (27, 'smocrovic','../../assets/img/petsimages/categories/birds/AllBirds/smocrovic.jpg','Gentille bird','680','K900',1 ),
      (28, 'vittorio','../../assets/img/petsimages/categories/birds/AllBirds/vittorio.jpg', 'Gentille  bird','470','L100',1 )


  -- tHorsesProduct table --
  DROP TABLE  IF EXISTS tHorsesProduct;
  CREATE TABLE `tHorsesProduct` (
                      productId INT NOT NULL AUTO_INCREMENT,
                      productName VARCHAR(250) NOT NULL,
                      image VARCHAR(65535), -- MAX length
                      description VARCHAR(65535), -- MAX length
                      price DECIMAL(10,2),
                      code VARCHAR(10),
                      quantity INT,
                      PRIMARY KEY (`productId`)
                        ) ENGINE = InnoDB;

      -- insert in tHorsesProduct table

  INSERT INTO `tHorsesProduct` (`productId`, `productName`, `image`, `description`, `price`, `code`, `quantity`)
  VALUES

      (1, 'Aaron','../../assets/img/petsimages/categories/horses/AllHorses/Aaron.jpg','Quick horse','800','M100',1),
      (2, 'Annie','../../assets/img/petsimages/categories/horses/AllHorses/Annie.jpg','Heavy horse','750','M200',1),
      (3, 'deborah','../../assets/img/petsimages/categories/horses/AllHorses/deborah.jpg','Cool horse','420','M300',1),
      (4, 'Fermin','../../assets/img/petsimages/categories/horses/AllHorses/Fermin.jpg','Qute horse','500','M400',1),
      (5, 'Hans','../../assets/img/petsimages/categories/horses/AllHorses/Hans.jpg','Porte horse','350','M500',1),
      (6, 'Helenas','../../assets/img/petsimages/categories/horses/AllHorses/Helenas.jpg','Race horse','1050','M600',1),
      (7, 'Jacques','../../assets/img/petsimages/categories/horses/AllHorses/Jacques.jpg','Race horse','930','M700',1),
      (8, 'Jacuis','../../assets/img/petsimages/categories/horses/AllHorses/Jacuis.jpg','cool horse','600','M800',1),
      (9, 'Jekaterina', '../../assets/img/petsimages/categories/horses/AllHorses/Jekaterina.jpg','royal horse','1250','M900',1),
      (10, 'Justus','../../assets/img/petsimages/categories/horses/AllHorses/Justus.jpg','porteur horse','560','N100',1),
      (11,'Karin', '../../assets/img/petsimages/categories/horses/AllHorses/Karin.jpg','race horse','750','N200',1),
      (12,'Lucas','../../assets/img/petsimages/categories/horses/AllHorses/Lucas.jpg','race horse','840','N300',1),
      (13,'Luisa','../../assets/img/petsimages/categories/horses/AllHorses/Luisa.jpg','porteur horse','945','N400',1 ),
      (14,'Malik','../../assets/img/petsimages/categories/horses/AllHorses/Malik.jpg','race horse','960','N500',1),
      (15, 'Marko', '../../assets/img/petsimages/categories/horses/AllHorses/Marko.jpg','race horse','1250','N600',1),
      (16, 'Micah','../../assets/img/petsimages/categories/horses/AllHorses/Micah.jpg','porteur horse','690','N700',1 ),
      (17, 'Michael', '../../assets/img/petsimages/categories/horses/AllHorses/Michael.jpg','race horse', '1590','N800',1 ),
      (18, 'Mohamed','../../assets/img/petsimages/categories/horses/AllHorses/Mohamed.jpg','race horse','1200','N900',1),
      (19, 'Pieter','../../assets/img/petsimages/categories/horses/AllHorses/Pieter.jpg','cool horse','1000','O100',1 ),
      (20, 'Robert','../../assets/img/petsimages/categories/horses/AllHorses/Robert.jpg','qute horse','880','O200',1 ),
      (21, 'Roman','../../assets/img/petsimages/categories/horses/AllHorses/Roman.jpg','cool horse', '678','O300',1 ),
      (22, 'sarha','../../assets/img/petsimages/categories/horses/AllHorses/sarha.jpg','qute horse','510','O400',1 ),
      (23, 'Sayan', '../../assets/img/petsimages/categories/horses/AllHorses/Sayan.jpg','Quick horse','1330', 'O500',1),
      (24, 'Seth','../../assets/img/petsimages/categories/horses/AllHorses/Seth.jpg','Quick horse','770','O600',1),
      (25, 'Soledad','../../assets/img/petsimages/categories/horses/AllHorses/Soledad.jpg','race horse','850','O700',1 ),
      (26, 'Taylor', '../../assets/img/petsimages/categories/horses/AllHorses/Taylor.jpg','Quick horse','1240','O800',1),
      (27, 'Visualda','../../assets/img/petsimages/categories/horses/AllHorses/Visualda.jpg','race horse','880','O900',1 ),
      (28, 'Zachariah','../../assets/img/petsimages/categories/horses/AllHorses/Zachariah.jpg', 'race horse','1370','P100',1 )
