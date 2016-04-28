/*==============================================================*/
/* DBMS name:      Sybase SQL Anywhere 12                       */
/* Created on:     20-03-2016 0:21:36                           */
/*==============================================================*/
create database turnos;
use turnos;


/*==============================================================*/
/* Table: ASIST                                                 */
/*==============================================================*/
create table ASIST 
(
   ID_ASIST             integer                        not null AUTO_INCREMENT,
   ID_EP                integer                        not null,
   FCH_ASIST            date                           not null,
   ESTADO_ASIST         smallint                       not null,
   constraint PK_ASIST primary key (ID_ASIST)
);

/*==============================================================*/
/* Index: ASIST_PK                                              */
/*==============================================================*/
create unique index ASIST_PK on ASIST (
ID_ASIST ASC
);

/*==============================================================*/
/* Index: CUMPLE_FK                                             */
/*==============================================================*/
create index CUMPLE_FK on ASIST (
ID_EP ASC
);

/*==============================================================*/
/* Table: CREA_FALTAS                                           */
/*==============================================================*/
create table CREA_FALTAS 
(
   ID_FALTAS            integer                        not null,
   ID_EEMP              integer                        not null,
   constraint PK_CREA_FALTAS primary key (ID_FALTAS, ID_EEMP)
);

/*==============================================================*/
/* Index: CREA_FALTAS_PK                                        */
/*==============================================================*/
create unique index CREA_FALTAS_PK on CREA_FALTAS (
ID_FALTAS ASC,
ID_EEMP ASC
);

/*==============================================================*/
/* Index: REG_EEMPF_FK                                          */
/*==============================================================*/
create index REG_EEMPF_FK on CREA_FALTAS (
ID_EEMP ASC
);

/*==============================================================*/
/* Index: REG_FALTAS_FK                                         */
/*==============================================================*/
create index REG_FALTAS_FK on CREA_FALTAS (
ID_FALTAS ASC
);

/*==============================================================*/
/* Table: EEMP                                                  */
/*==============================================================*/
create table EEMP 
(
   ID_EEMP              integer                        not null AUTO_INCREMENT,
   ID_USER              integer                        not null,
   constraint PK_EEMP primary key (ID_EEMP)
);

/*==============================================================*/
/* Index: EEMP_PK                                               */
/*==============================================================*/
create unique index EEMP_PK on EEMP (
ID_EEMP ASC
);

/*==============================================================*/
/* Index: HEREDA2_FK                                            */
/*==============================================================*/
create index HEREDA2_FK on EEMP (
ID_USER ASC
);

/*==============================================================*/
/* Table: EMP_PIOCH                                             */
/*==============================================================*/
create table EMP_PIOCH 
(
   ID_EP                integer                        not null AUTO_INCREMENT,
   ID_USER              integer                        not null,
   TIPO_EP              smallint                       not null,
   CUPSEM_EP            tinyint                        not null,
   CUPREG_EP            tinyint                        not null,
   constraint PK_EMP_PIOCH primary key (ID_EP)
);

/*==============================================================*/
/* Index: EMP_PIOCH_PK                                          */
/*==============================================================*/
create unique index EMP_PIOCH_PK on EMP_PIOCH (
ID_EP ASC
);

/*==============================================================*/
/* Index: HEREDA3_FK                                            */
/*==============================================================*/
create index HEREDA3_FK on EMP_PIOCH (
ID_USER ASC
);

/*==============================================================*/
/* Table: FALTAS                                                */
/*==============================================================*/
create table FALTAS 
(
   ID_FALTAS            integer                        not null AUTO_INCREMENT,
   ID_EP                integer                        not null,
   MOTIVO_FALTAS        varchar(500)                   not null,
   FCH_FALTAS           timestamp                      not null,
   constraint PK_FALTAS primary key (ID_FALTAS)
);

/*==============================================================*/
/* Index: FALTAS_PK                                             */
/*==============================================================*/
create unique index FALTAS_PK on FALTAS (
ID_FALTAS ASC
);

/*==============================================================*/
/* Index: REALIZA_EP_FK                                         */
/*==============================================================*/
create index REALIZA_EP_FK on FALTAS (
ID_EP ASC
);

/*==============================================================*/
/* Table: HORARIO                                               */
/*==============================================================*/
create table HORARIO 
(
   ID_HORARIO           integer                        not null AUTO_INCREMENT,
   IN_HORARIO           time                           not null,
   OUT_HORARIO          time                           not null,
   constraint PK_HORARIO primary key (ID_HORARIO)
);

/*==============================================================*/
/* Index: HORARIO_PK                                            */
/*==============================================================*/
create unique index HORARIO_PK on HORARIO (
ID_HORARIO ASC
);

/*==============================================================*/
/* Table: JLOCAL                                                */
/*==============================================================*/
create table JLOCAL 
(
   ID_ADMIN             integer                        not null AUTO_INCREMENT,
   ID_USER              integer                        not null,
   constraint PK_JLOCAL primary key (ID_ADMIN)
);

/*==============================================================*/
/* Index: JLOCAL_PK                                             */
/*==============================================================*/
create unique index JLOCAL_PK on JLOCAL (
ID_ADMIN ASC
);

/*==============================================================*/
/* Index: HEREDA1_FK                                            */
/*==============================================================*/
create index HEREDA1_FK on JLOCAL (
ID_USER ASC
);

/*==============================================================*/
/* Table: MENSAJES                                              */
/*==============================================================*/
create table MENSAJES 
(
   ID_MENSAJES          integer                        not null AUTO_INCREMENT,
   ID_ADMIN             integer                        not null,
   CONT_MENSAJES        varchar(500)                   not null,
   FCH_MENSAJES         timestamp                      not null,
   constraint PK_MENSAJES primary key (ID_MENSAJES)
);

/*==============================================================*/
/* Index: MENSAJES_PK                                           */
/*==============================================================*/
create unique index MENSAJES_PK on MENSAJES (
ID_MENSAJES ASC
);

/*==============================================================*/
/* Index: CREA_FK                                               */
/*==============================================================*/
create index CREA_FK on MENSAJES (
ID_ADMIN ASC
);

/*==============================================================*/
/* Table: REG                                                   */
/*==============================================================*/
create table REG 
(
   ID_REG               integer                        not null AUTO_INCREMENT,
   TIPO_REG             varchar(10)                    not null,
   FECHA_REG            timestamp                      null,
   constraint PK_REG primary key (ID_REG)
);

/*==============================================================*/
/* Index: REG_PK                                                */
/*==============================================================*/
create unique index REG_PK on REG (
ID_REG ASC
);

/*==============================================================*/
/* Table: REG_ASIST                                             */
/*==============================================================*/
create table REG_ASIST 
(
   ID_EEMP              integer                        not null,
   ID_ASIST             integer                        not null,
   constraint PK_REG_ASIST primary key (ID_EEMP, ID_ASIST)
);

/*==============================================================*/
/* Index: REG_ASIST_PK                                          */
/*==============================================================*/
create unique index REG_ASIST_PK on REG_ASIST (
ID_EEMP ASC,
ID_ASIST ASC
);

/*==============================================================*/
/* Index: REG_EEMPA_FK                                          */
/*==============================================================*/
create index REG_EEMPA_FK on REG_ASIST (
ID_EEMP ASC
);

/*==============================================================*/
/* Index: REG_ASIST_FK                                          */
/*==============================================================*/
create index REG_ASIST_FK on REG_ASIST (
ID_ASIST ASC
);

/*==============================================================*/
/* Table: REG_HOR                                               */
/*==============================================================*/
create table REG_HOR 
(
   ID_ADMIN             integer                        not null,
   ID_HORARIO           integer                        not null,
   FCH_REGHOR           timestamp                      null,
   constraint PK_REG_HOR primary key (ID_ADMIN, ID_HORARIO)
);

/*==============================================================*/
/* Index: REG_HOR_PK                                            */
/*==============================================================*/
create unique index REG_HOR_PK on REG_HOR (
ID_ADMIN ASC,
ID_HORARIO ASC
);

/*==============================================================*/
/* Index: REG_RJLOCALH_FK                                       */
/*==============================================================*/
create index REG_RJLOCALH_FK on REG_HOR (
ID_ADMIN ASC
);

/*==============================================================*/
/* Index: REG_RHOR_FK                                           */
/*==============================================================*/
create index REG_RHOR_FK on REG_HOR (
ID_HORARIO ASC
);

/*==============================================================*/
/* Table: REG_TURNO                                             */
/*==============================================================*/
create table REG_TURNO 
(
   ID_ADMIN             integer                        not null,
   ID_TURNO             integer                        not null,
   FCH_REGTURNO         timestamp                      not null,
   constraint PK_REG_TURNO primary key (ID_ADMIN, ID_TURNO)
);

/*==============================================================*/
/* Index: REG_TURNO_PK                                          */
/*==============================================================*/
create unique index REG_TURNO_PK on REG_TURNO (
ID_ADMIN ASC,
ID_TURNO ASC
);

/*==============================================================*/
/* Index: REG_JLOCALT_FK                                        */
/*==============================================================*/
create index REG_JLOCALT_FK on REG_TURNO (
ID_ADMIN ASC
);

/*==============================================================*/
/* Index: REG_TURNO_FK                                          */
/*==============================================================*/
create index REG_TURNO_FK on REG_TURNO (
ID_TURNO ASC
);

/*==============================================================*/
/* Table: SANCION                                               */
/*==============================================================*/
create table SANCION 
(
   ID_FALTAS            integer                        not null,
   ID_ADMIN             integer                        not null,
   FCH_SANCION          timestamp                      not null,
   constraint PK_SANCION primary key (ID_FALTAS, ID_ADMIN)
);

/*==============================================================*/
/* Index: SANCION_PK                                            */
/*==============================================================*/
create unique index SANCION_PK on SANCION (
ID_FALTAS ASC,
ID_ADMIN ASC
);

/*==============================================================*/
/* Index: REG_JLOCALS_FK                                        */
/*==============================================================*/
create index REG_JLOCALS_FK on SANCION (
ID_ADMIN ASC
);

/*==============================================================*/
/* Index: GENERA_FK                                             */
/*==============================================================*/
create index GENERA_FK on SANCION (
ID_FALTAS ASC
);

/*==============================================================*/
/* Table: TIENE_TURNOS                                          */
/*==============================================================*/
create table TIENE_TURNOS 
(
   ID_TURNO             integer                        not null,
   ID_EP                integer                        not null,
   constraint PK_TIENE_TURNOS primary key (ID_TURNO, ID_EP)
);

/*==============================================================*/
/* Index: TIENE_TURNOS_PK                                       */
/*==============================================================*/
create unique index TIENE_TURNOS_PK on TIENE_TURNOS (
ID_TURNO ASC,
ID_EP ASC
);

/*==============================================================*/
/* Index: ASIGNA_EP_FK                                          */
/*==============================================================*/
create index ASIGNA_EP_FK on TIENE_TURNOS (
ID_EP ASC
);

/*==============================================================*/
/* Index: ASIGNA_TURNO_FK                                       */
/*==============================================================*/
create index ASIGNA_TURNO_FK on TIENE_TURNOS (
ID_TURNO ASC
);

/*==============================================================*/
/* Table: TURNO                                                 */
/*==============================================================*/
create table TURNO 
(
   ID_TURNO             integer                        not null AUTO_INCREMENT,
   ID_HORARIO           integer                        not null,
   CUPMAX_TURNO         tinyint                        not null,
   FCH_TURNO            date                           not null,
   constraint PK_TURNO primary key (ID_TURNO)
);

/*==============================================================*/
/* Index: TURNO_PK                                              */
/*==============================================================*/
create unique index TURNO_PK on TURNO (
ID_TURNO ASC
);

/*==============================================================*/
/* Index: MANEJA_FK                                             */
/*==============================================================*/
create index MANEJA_FK on TURNO (
ID_HORARIO ASC
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS 
(
   ID_USER              integer                        not null AUTO_INCREMENT,
   CORREO_USER          varchar(75)                    not null,
   PASS_USER            varchar(100)                   not null,
   NOM_USER             varchar(50)                    not null,
   AP_USER              varchar(50)                    not null,
   AM_USER              varchar(50)                    not null,
   DIR_USER             varchar(100)                   not null,
   ESTADO_USER          smallint                       not null,
   IMG_USER             varchar(500)                   not null,
   CEL_USER             integer                        null,
   constraint PK_USERS primary key (ID_USER)
);

/*==============================================================*/
/* Index: USERS_PK                                              */
/*==============================================================*/
create unique index USERS_PK on USERS (
ID_USER ASC
);

/*==============================================================*/
/* Table: USERS_REG                                             */
/*==============================================================*/
create table USERS_REG 
(
   ID_REG               integer                        not null,
   ID_USER              integer                        not null,
   constraint PK_USERS_REG primary key (ID_REG, ID_USER)
);

/*==============================================================*/
/* Index: USERS_REG_PK                                          */
/*==============================================================*/
create unique index USERS_REG_PK on USERS_REG (
ID_REG ASC,
ID_USER ASC
);

/*==============================================================*/
/* Index: REL_CRUD2_FK                                          */
/*==============================================================*/
create index REL_CRUD2_FK on USERS_REG (
ID_USER ASC
);

/*==============================================================*/
/* Index: REL_CRUD1_FK                                          */
/*==============================================================*/
create index REL_CRUD1_FK on USERS_REG (
ID_REG ASC
);

alter table ASIST
   add constraint FK_ASIST_CUMPLE_EMP_PIOC foreign key (ID_EP)
      references EMP_PIOCH (ID_EP)
      on update restrict
      on delete restrict;

alter table CREA_FALTAS
   add constraint FK_CREA_FAL_REG_EEMPF_EEMP foreign key (ID_EEMP)
      references EEMP (ID_EEMP)
      on update restrict
      on delete restrict;

alter table CREA_FALTAS
   add constraint FK_CREA_FAL_REG_FALTA_FALTAS foreign key (ID_FALTAS)
      references FALTAS (ID_FALTAS)
      on update restrict
      on delete restrict;

alter table EEMP
   add constraint FK_EEMP_HEREDA2_USERS foreign key (ID_USER)
      references USERS (ID_USER)
      on update restrict
      on delete restrict;

alter table EMP_PIOCH
   add constraint FK_EMP_PIOC_HEREDA3_USERS foreign key (ID_USER)
      references USERS (ID_USER)
      on update restrict
      on delete restrict;

alter table FALTAS
   add constraint FK_FALTAS_REALIZA_E_EMP_PIOC foreign key (ID_EP)
      references EMP_PIOCH (ID_EP)
      on update restrict
      on delete restrict;

alter table JLOCAL
   add constraint FK_JLOCAL_HEREDA1_USERS foreign key (ID_USER)
      references USERS (ID_USER)
      on update restrict
      on delete restrict;

alter table MENSAJES
   add constraint FK_MENSAJES_CREA_JLOCAL foreign key (ID_ADMIN)
      references JLOCAL (ID_ADMIN)
      on update restrict
      on delete restrict;

alter table REG_ASIST
   add constraint FK_REG_ASIS_REG_ASIST_ASIST foreign key (ID_ASIST)
      references ASIST (ID_ASIST)
      on update restrict
      on delete restrict;

alter table REG_ASIST
   add constraint FK_REG_ASIS_REG_EEMPA_EEMP foreign key (ID_EEMP)
      references EEMP (ID_EEMP)
      on update restrict
      on delete restrict;

alter table REG_HOR
   add constraint FK_REG_HOR_REG_RHOR_HORARIO foreign key (ID_HORARIO)
      references HORARIO (ID_HORARIO)
      on update restrict
      on delete restrict;

alter table REG_HOR
   add constraint FK_REG_HOR_REG_RJLOC_JLOCAL foreign key (ID_ADMIN)
      references JLOCAL (ID_ADMIN)
      on update restrict
      on delete restrict;

alter table REG_TURNO
   add constraint FK_REG_TURN_REG_JLOCA_JLOCAL foreign key (ID_ADMIN)
      references JLOCAL (ID_ADMIN)
      on update restrict
      on delete restrict;

alter table REG_TURNO
   add constraint FK_REG_TURN_REG_TURNO_TURNO foreign key (ID_TURNO)
      references TURNO (ID_TURNO)
      on update restrict
      on delete restrict;

alter table SANCION
   add constraint FK_SANCION_GENERA_FALTAS foreign key (ID_FALTAS)
      references FALTAS (ID_FALTAS)
      on update restrict
      on delete restrict;

alter table SANCION
   add constraint FK_SANCION_REG_JLOCA_JLOCAL foreign key (ID_ADMIN)
      references JLOCAL (ID_ADMIN)
      on update restrict
      on delete restrict;

alter table TIENE_TURNOS
   add constraint FK_TIENE_TU_ASIGNA_EP_EMP_PIOC foreign key (ID_EP)
      references EMP_PIOCH (ID_EP)
      on update restrict
      on delete restrict;

alter table TIENE_TURNOS
   add constraint FK_TIENE_TU_ASIGNA_TU_TURNO foreign key (ID_TURNO)
      references TURNO (ID_TURNO)
      on update restrict
      on delete restrict;

alter table TURNO
   add constraint FK_TURNO_MANEJA_HORARIO foreign key (ID_HORARIO)
      references HORARIO (ID_HORARIO)
      on update restrict
      on delete restrict;

alter table USERS_REG
   add constraint FK_USERS_RE_REL_CRUD1_REG foreign key (ID_REG)
      references REG (ID_REG)
      on update restrict
      on delete restrict;

alter table USERS_REG
   add constraint FK_USERS_RE_REL_CRUD2_USERS foreign key (ID_USER)
      references USERS (ID_USER)
      on update restrict
      on delete restrict;

