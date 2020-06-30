CREATE TABLE connexion1 (
  id_con1 INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  nom_user VARCHAR(50)  NULL  ,
  prenom_user VARCHAR(50)  NULL  ,
  date_connexion DATE  NULL    ,
PRIMARY KEY(id_con1));



CREATE TABLE connexion2 (
  id_con2 INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  id_con1 INTEGER UNSIGNED  NULL  ,
  email TEXT  NULL  ,
  matricule INTEGER UNSIGNED  NULL  ,
  password_2 TEXT  NULL    ,
PRIMARY KEY(id_con2)  ,
INDEX connexion2_FKIndex1(id_con1),
  FOREIGN KEY(id_con1)
    REFERENCES connexion1(id_con1)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE directeur (
  matricule_dir INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  id_con2 INTEGER UNSIGNED  NOT NULL  ,
  nom_dir VARCHAR(100)  NULL  ,
  prenom_dir VARCHAR(100)  NULL  ,
  pwd_dir VARCHAR(255)  NULL  ,
  tel_dir TEXT  NULL  ,
  adresse_dir TEXT  NULL  ,
  email_dir TEXT  NULL  ,
  photo_dir TEXT  NULL  ,
  date_connexion TIMESTAMP  NULL    ,
PRIMARY KEY(matricule_dir)  ,
INDEX directeur_FKIndex1(id_con2),
  FOREIGN KEY(id_con2)
    REFERENCES connexion2(id_con2)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE etudiant (
  matricule_etudiant INTEGER ZEROFILL  NOT NULL  ,
  id_con2 INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  nom_etudiant VARCHAR(255)  NULL  ,
  prenom_etudiant VARCHAR(255)  NULL  ,
  date_naissance_etud TEXT  NULL  ,
  nationalite_etud VARCHAR(30)  NULL  ,
  classe_etudiant TEXT  NULL  ,
  photo_etudiant TEXT  NULL  ,
  poste_etudiant_amicale VARCHAR(10)  NULL  ,
  statut_etudiant_classe VARCHAR(10) BINARY  NULL  ,
  date_connexion TIMESTAMP  NULL  ,
  id_user INTEGER UNSIGNED  NULL  ,
  date_modification TIMESTAMP  NULL  ,
  est_supprime VARCHAR(10) BINARY  NULL DEFAULT 'NON' ,
  password_etd VARCHAR(255)  NULL  ,
  email_etudiant TEXT  NULL  ,
  tel_etudiant TEXT  NULL  ,
  adresse_etud TEXT  NULL    ,
PRIMARY KEY(matricule_etudiant)  ,
INDEX etudiant_FKIndex1(id_con2),
  FOREIGN KEY(id_con2)
    REFERENCES connexion2(id_con2)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE externe (
  id_ext INTEGER UNSIGNED  NOT NULL  ,
  email_externe VARCHAR(50)  NOT NULL  ,
  id_con2 INTEGER UNSIGNED  NULL  ,
  nom_externe VARCHAR(50)  NULL  ,
  prenom_externe VARCHAR(50)  NULL  ,
  date_connexion TIMESTAMP  NULL    ,
PRIMARY KEY(id_ext)  ,
INDEX externe_FKIndex1(id_con2),
  FOREIGN KEY(id_con2)
    REFERENCES connexion2(id_con2)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE responsable (
  matricule_responsable INTEGER UNSIGNED  NOT NULL  ,
  id_con2 INTEGER UNSIGNED  NOT NULL  ,
  nom_responsable VARCHAR(100)  NOT NULL  ,
  prenom_responsable VARCHAR(100)  NULL  ,
  pwd_resp VARCHAR(255)  NULL  ,
  email_resp TEXT  NULL  ,
  photo_responsable TEXT  NULL  ,
  adresse_resp TEXT  NULL  ,
  tel_resp TEXT  NULL  ,
  Nationalite_resp INTEGER UNSIGNED  NULL  ,
  poste_responsable VARCHAR(10)  NOT NULL  ,
  salaire INTEGER UNSIGNED  NULL  ,
  date_connexion TIMESTAMP  NULL  ,
  id_user INTEGER UNSIGNED  NULL  ,
  date_suppression TIMESTAMP  NULL  ,
  est_supprime VARCHAR(10) BINARY  NULL    ,
PRIMARY KEY(matricule_responsable)  ,
INDEX responsable_FKIndex1(id_con2),
  FOREIGN KEY(id_con2)
    REFERENCES connexion2(id_con2)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE questionnaire (
  id_quest INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  id_ext INTEGER UNSIGNED  NOT NULL  ,
  email_externe TEXT  NULL  ,
  connnaissance_ENSAE VARCHAR(55)  NULL  ,
  passion_formation VARCHAR(50) BINARY  NULL  ,
  interesse_formation VARCHAR(55)  NULL  ,
  pas_interesse_formation VARCHAR(55) BINARY  NULL  ,
  conseil_proche VARCHAR(50)  NULL  ,
  pourquoi_conseil VARCHAR(55)  NULL  ,
  connaissance_classique VARCHAR(55)  NULL  ,
  proche VARCHAR(50)  NULL  ,
  profil_proche VARCHAR(50) BINARY  NULL  ,
  commentaire VARCHAR(100)  NULL  ,
  date_soumission TIMESTAMP  NULL    ,
PRIMARY KEY(id_quest)  ,
INDEX questionnaire_FKIndex1(id_ext),
  FOREIGN KEY(id_ext)
    REFERENCES externe(id_ext)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE filiere (
  code_filiere VARCHAR(5)  NOT NULL  ,
  matricule_responsable INTEGER UNSIGNED  NOT NULL  ,
  nom_filiere VARCHAR(50)  NULL  ,
  id_user INTEGER UNSIGNED  NULL  ,
  date_supprime DATE  NULL  ,
  est_supprime VARCHAR(10) BINARY  NULL    ,
PRIMARY KEY(code_filiere)  ,
INDEX filiere_FKIndex1(matricule_responsable),
  FOREIGN KEY(matricule_responsable)
    REFERENCES responsable(matricule_responsable)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE classe (
  code_classe INTEGER UNSIGNED  NOT NULL  ,
  code_filiere VARCHAR(5)  NOT NULL  ,
  matricule_etudiant INTEGER ZEROFILL  NOT NULL  ,
  nom_classe VARCHAR(45)  NULL  ,
  user_id INTEGER UNSIGNED  NULL  ,
  date_modification TIMESTAMP  NULL  ,
  est_supprime VARCHAR(10) BINARY  NULL    ,
PRIMARY KEY(code_classe)  ,
INDEX classe_FKIndex1(matricule_etudiant)  ,
INDEX classe_FKIndex2(code_filiere),
  FOREIGN KEY(matricule_etudiant)
    REFERENCES etudiant(matricule_etudiant)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(code_filiere)
    REFERENCES filiere(code_filiere)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);


ALTER TABLE `etudiant` CHANGE `matricule_etudiant` `matricule_etudiant` INT(5) UNSIGNED ZEROFILL NOT NULL;

ALTER TABLE `responsable` CHANGE `matricule_responsable` `matricule_responsable` INT(6) UNSIGNED NOT NULL;

ALTER TABLE `directeur` CHANGE `matricule_dir` `matricule_dir` INT(7) UNSIGNED NOT NULL;




ALTER TABLE `connexion2` CHANGE `matricule` `matricule` INT(5) UNSIGNED NOT NULL;
ALTER TABLE connexion2 add CONSTRAINT UC_connexion2 UNIQUE(`matricule`);

INSERT INTO `connexion2`(`matricule`, `email`, `password_2`) VALUES ('16215','danis@gmail.com','12345');
INSERT INTO `connexion2`(`matricule`, `email`, `password_2`) VALUES ('18110','duverier@gmail.com','12345');
INSERT INTO `connexion2`(`matricule`, `email`, `password_2`) VALUES ('16203','bance@gmail.com','12345');

INSERT INTO `connexion2`(`matricule`, `email`, `password_2`) VALUES ('151201','diakite@gmail.com','123456');
INSERT INTO `connexion2`(`matricule`, `email`, `password_2`) VALUES ('101200','fof@gmail.com','123456');

INSERT INTO `connexion2`(`matricule`, `email`, `password_2`) VALUES ('1712303','abdou@gmail.com','1234567');

ALTER TABLE `etudiant` CHANGE `id_con2` `id_con2` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT;

INSERT INTO `etudiant`(`matricule_etudiant`,`nom_etudiant`, `prenom_etudiant`, `date_naissance_etud`, `nationalite_etud`, `classe_etudiant`, `photo_etudiant`,  `password_etd`, `email_etudiant`, `tel_etudiant`, `adresse_etud`) VALUES ('16215','JIOGUE TAMATIO','Rikel Danis', '28/02/1998','CAMEROUNAISE','ITS4','danis.png','12345','danis@gmail.com','781542137','Fass Paillote');

INSERT INTO `etudiant`(`matricule_etudiant`,`nom_etudiant`, `prenom_etudiant`, `date_naissance_etud`, `nationalite_etud`, `classe_etudiant`, `photo_etudiant`,  `password_etd`, `email_etudiant`, `tel_etudiant`, `adresse_etud`) VALUES ('16203','BANCE','Youssouf','24/02/1996','BURKINABE','ITS4','bance.jpg','12345','bance@gmail.com','781542137','Fass Paillote');

INSERT INTO `etudiant`(`matricule_etudiant`,`nom_etudiant`, `prenom_etudiant`, `date_naissance_etud`, `nationalite_etud`, `classe_etudiant`, `photo_etudiant`,  `password_etd`, `email_etudiant`, `tel_etudiant`, `adresse_etud`) VALUES('18110','DJIFACK','Duverier','28/12/1992','CAMEROUNAIS','ISE1','duv.png','12345','duv@gmail.com','781542137','Fass Paillote');

ALTER TABLE `responsable` CHANGE `poste_responsable` `poste_responsable` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `responsable` CHANGE `Nationalite_resp` `Nationalite_resp` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `responsable` CHANGE `id_con2` `id_con2` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT;


INSERT INTO `responsable`(`matricule_responsable`, `nom_responsable`, `prenom_responsable`, `email_resp`, `photo_responsable`, `adresse_resp`, `tel_resp`, `Nationalite_resp`, `poste_responsable`, `salaire`, `est_supprime`) VALUES ('151203','DIAKITE','Souleymane','daikite@gmail.com','diakite.png','Ouakam','773980456','Malienne','Enseignant chercheur','1000000','NON');

INSERT INTO `responsable`(`matricule_responsable`, `nom_responsable`, `prenom_responsable`, `email_resp`, `photo_responsable`, `adresse_resp`, `tel_resp`, `Nationalite_resp`, `poste_responsable`, `salaire`, `est_supprime`) VALUES ('101200','FOFANA','Souleymane','fof@gmail.com','fofana.png','Sacré cour','773980456','Sénégalais','Responsable ITS','1000000','NON');
ALTER TABLE `directeur` CHANGE `id_con2` `id_con2` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT;
INSERT INTO `directeur`(`matricule_dir`,  `nom_dir`, `prenom_dir`, `pwd_dir`, `tel_dir`, `adresse_dir`, `email_dir`, `photo_dir`) VALUES ('1712303','DIOUF','Abdou','1234567','773334222','Dakar plateau','abdou@gmail.com','abdou.png');

ALTER TABLE `responsable` CHANGE `est_supprime` `est_supprime` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT 'NON';

ALTER TABLE `externe` CHANGE `id_ext` `id_ext` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `etudiant` CHANGE `statut_etudiant_classe` `statut_etudiant_classe` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL;
ALTER TABLE `etudiant` CHANGE `poste_etudiant_amicale` `poste_etudiant_amicale` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `externe` CHANGE `id_con2` `id_con2` INT(10) UNSIGNED NOT NULL DEFAULT '1';
ALTER TABLE `questionnaire` CHANGE `id_ext` `id_ext` INT(10) UNSIGNED NOT NULL DEFAULT '1';