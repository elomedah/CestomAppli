/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  04/09/2015 12:57:48                      */
/*==============================================================*/



drop table if exists BUREAU_VILLE;

drop table if exists FORMATION;

drop table if exists EXPERIENCE;

drop table if exists VILLE_MEMBRE;

drop table if exists MEMBRE;


drop table if exists UNIVERSITE;

drop table if exists VILLE;

drop table if exists FOSUSER;




/*==============================================================*/
/* Table : BUREAU_VILLE                                         */
/*==============================================================*/
create table BUREAU_VILLE
(
   IDBUREAU             int not null AUTO_INCREMENT,
   IDVILLE              int not null,
   IDMEMBRE             int not null,
   ANNEE_SCOLAIRE       varchar(10) not null,
   POSTE_MEMBRE         varchar(255) not null,
    primary key ( IDBUREAU ),
   UNIQUE (IDVILLE, IDMEMBRE, ANNEE_SCOLAIRE)
);

/*==============================================================*/
/* Table : FORMATION                                            */
/*==============================================================*/
create table FORMATION
(
   IDMEMBRE             int not null,
   IDUNIV               int not null,
   LIBELLE_FORMATION    varchar(255) not null,
   DIPLOME_VISE_FORMATION varchar(255) not null,
   PROGRAMME_BOURSE     varchar(255),
   DATE_DEBUT_FORMATION varchar(255),
   DUREE_FORMATION      decimal,
   COMPETENCE_ACQUISE   varchar (1000 ),
   ID_FORMATION int not null AUTO_INCREMENT ,
   primary key ( ID_FORMATION )
);

/*==============================================================*/
/* Table : EXPERIENCE                                           */
/*==============================================================*/

create table EXPERIENCE
(
   IDMEMBRE             			int not null,
   ID_EXPERIENCE               		int not null AUTO_INCREMENT,
   LIBELLE_EXPERIENCE    			varchar(255) not null,
   SOCIETE              			varchar(255) not null,
   DATE_DEBUT_EXPERIENCE 			varchar(255),
   DATE_FIN_EXPERIENCE      		varchar(255),
   COMPETENCE_ACQUISE_EXPERIENCE    varchar (1000),
   primary key ( ID_EXPERIENCE )
);

/*==============================================================*/
/* Table : MEMBRE                                               */
/*==============================================================*/
create table MEMBRE
(
   IDMEMBRE             int not null AUTO_INCREMENT,
   ID                   INT(11) NOT NULL UNIQUE,
   SEXE                 varchar(1),
   NOM_MEMBRE           varchar(255),
   PRENOM_MEMBRE        varchar(255),
   NUMERO_PASSPORT_MEMBRE varchar(15),
   DATE_EXPI_MEMBRE     varchar(255),
   DATE_ETAB_MEMBRE     varchar(255),
   PROMOTION_MEMBRE     int,
   DATE_NAISSANCE_MEMBRE varchar(255),
   CONTACT_URGENCE      varchar(2048),
   TELEPHONEFIRST		varchar(15),
   TELEPHONESECOND		varchar(15),
   INFO_COMPLEMENTMEMBRE varchar(4096),
   PHOTO_MIM_MEMBRE     longblob,
   DERNIER_LYCEE_FREQUENTE varchar(255),
   PRIMARY KEY (IDMEMBRE)
);


/*==============================================================*/
/* Table : FOSUSER                                            */
/*==============================================================*/
CREATE TABLE IF NOT EXISTS `FOSUSER` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A148767E92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_A148767EA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

/*==============================================================*/
/* Table : UNIVERSITE                                           */
/*==============================================================*/
create table UNIVERSITE
(
   NOMUNIV              varchar(255) not null,
   IDUNIV               int not null AUTO_INCREMENT,
   CONTACTUNIV          varchar(255),
   ADDRESSEUNIV         varchar(500),
   primary key (IDUNIV)
);

/*==============================================================*/
/* Table : VILLE                                                */
/*==============================================================*/
create table VILLE
(
   IDVILLE              int not null AUTO_INCREMENT,
   NOMVILLE             varchar(255) not null unique,
   primary key (IDVILLE)
);

/*==============================================================*/
/* Table : VILLE_MEMBRE                                         */
/*==============================================================*/
create table VILLE_MEMBRE
(
   IDVILLEMEMBRE              int not null AUTO_INCREMENT,
   IDVILLE              int not null,
   IDMEMBRE             int not null,
   ADRESSE              varchar(512),
   DATE_DEBUT           varchar(20) not null,
   PRIMARY KEY (IDVILLEMEMBRE ),
   UNIQUE (IDVILLE, IDMEMBRE,DATE_DEBUT)
);

alter table MEMBRE add constraint FK_MEMBRE_FOSUSER foreign key (ID)
      references FOSUSER (ID) on delete restrict on update restrict;

alter table BUREAU_VILLE add constraint FK_BUREAU_VILLE foreign key (IDVILLE)
      references VILLE (IDVILLE) on delete restrict on update restrict;

alter table BUREAU_VILLE add constraint FK_BUREAU_VILLE2 foreign key (IDMEMBRE)
      references MEMBRE (IDMEMBRE) on delete restrict on update restrict;

alter table FORMATION add constraint FK_FORMATION_MEMBRE foreign key (IDMEMBRE)
      references MEMBRE (IDMEMBRE) on delete restrict on update restrict;
	  
alter table EXPERIENCE add constraint FK_EXPERIENCE_MEMBRE foreign key (IDMEMBRE)
      references MEMBRE (IDMEMBRE) on delete restrict on update restrict;

alter table FORMATION add constraint FK_UNIVERSITE_FORMATION foreign key (IDUNIV)
      references UNIVERSITE (IDUNIV) on delete restrict on update restrict;

alter table VILLE_MEMBRE add constraint FK_VILLE_MEMBRE foreign key (IDVILLE)
      references VILLE (IDVILLE) on delete restrict on update restrict;

alter table VILLE_MEMBRE add constraint FK_VILLE_MEMBRE2 foreign key (IDMEMBRE)
      references MEMBRE (IDMEMBRE) on delete restrict on update restrict;

