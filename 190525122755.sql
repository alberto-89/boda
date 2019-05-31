/*
MySQL Backup
Source Server Version: 10.1.36
Source Database: boda
Date: 25/05/2019 12:27:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `acompanantes`
-- ----------------------------
DROP TABLE IF EXISTS `acompanantes`;
CREATE TABLE `acompanantes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apmat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitado_id` int(10) unsigned NOT NULL,
  `nino` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `acompanantes_invitado_id_foreign` (`invitado_id`),
  CONSTRAINT `acompanantes_invitado_id_foreign` FOREIGN KEY (`invitado_id`) REFERENCES `invitados` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `asistencias`
-- ----------------------------
DROP TABLE IF EXISTS `asistencias`;
CREATE TABLE `asistencias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `codigos`
-- ----------------------------
DROP TABLE IF EXISTS `codigos`;
CREATE TABLE `codigos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usado` tinyint(1) NOT NULL DEFAULT '0',
  `plan_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `codigos_plan_id_foreign` (`plan_id`),
  CONSTRAINT `codigos_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `confirmacions`
-- ----------------------------
DROP TABLE IF EXISTS `confirmacions`;
CREATE TABLE `confirmacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invitado_id` int(10) unsigned NOT NULL,
  `acompanante_id` int(10) unsigned DEFAULT NULL,
  `asistencia_id` int(10) unsigned NOT NULL,
  `evento_id` int(10) unsigned NOT NULL,
  `asistio` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `confirmacions_evento_id_foreign` (`evento_id`),
  KEY `confirmacions_asistencia_id_foreign` (`asistencia_id`),
  KEY `confirmacions_invitado_id_foreign` (`invitado_id`),
  KEY `confirmacions_acompanante_id_foreign` (`acompanante_id`),
  CONSTRAINT `confirmacions_acompanante_id_foreign` FOREIGN KEY (`acompanante_id`) REFERENCES `acompanantes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `confirmacions_asistencia_id_foreign` FOREIGN KEY (`asistencia_id`) REFERENCES `asistencias` (`id`) ON DELETE CASCADE,
  CONSTRAINT `confirmacions_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `confirmacions_invitado_id_foreign` FOREIGN KEY (`invitado_id`) REFERENCES `invitados` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `eventos`
-- ----------------------------
DROP TABLE IF EXISTS `eventos`;
CREATE TABLE `eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cofestejado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lugar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `vestimenta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmado` tinyint(1) NOT NULL DEFAULT '0',
  `tipo_evento_id` int(10) unsigned NOT NULL,
  `codigo_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventos_cod_evento_unique` (`cod_evento`),
  KEY `eventos_user_id_foreign` (`user_id`),
  KEY `eventos_codigo_id_foreign` (`codigo_id`),
  KEY `eventos_tipo_evento_id_foreign` (`tipo_evento_id`),
  CONSTRAINT `eventos_codigo_id_foreign` FOREIGN KEY (`codigo_id`) REFERENCES `codigos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `eventos_tipo_evento_id_foreign` FOREIGN KEY (`tipo_evento_id`) REFERENCES `tipo_eventos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `eventos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `invitados`
-- ----------------------------
DROP TABLE IF EXISTS `invitados`;
CREATE TABLE `invitados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apmat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` enum('Sr.','Sra.','Srita.','Joven') COLLATE utf8mb4_unicode_ci NOT NULL,
  `evento_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `invitados_telefono_unique` (`telefono`),
  UNIQUE KEY `invitados_email_unique` (`email`),
  UNIQUE KEY `invitados_codigo_unique` (`codigo`),
  KEY `invitados_evento_id_foreign` (`evento_id`),
  KEY `invitados_user_id_foreign` (`user_id`),
  CONSTRAINT `invitados_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `invitados_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `permissions`
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `permission_role`
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `permission_user`
-- ----------------------------
DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE `permission_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_index` (`permission_id`),
  KEY `permission_user_user_id_index` (`user_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `plans`
-- ----------------------------
DROP TABLE IF EXISTS `plans`;
CREATE TABLE `plans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invitados` int(11) NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `role_user`
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_index` (`role_id`),
  KEY `role_user_user_id_index` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `tipo_eventos`
-- ----------------------------
DROP TABLE IF EXISTS `tipo_eventos`;
CREATE TABLE `tipo_eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apmat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_telefono_unique` (`telefono`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `asistencias` VALUES ('1','Asistiré','El invitado Asistirá','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('2','Pendiente','El invitado aun esta por decidir','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('3','No Asistiré','El invitado no asistira','2019-05-25 12:27:30','2019-05-25 12:27:30');
INSERT INTO `migrations` VALUES ('1','2014_10_12_000000_create_users_table','1'), ('2','2014_10_12_100000_create_password_resets_table','1'), ('3','2015_01_20_084450_create_roles_table','1'), ('4','2015_01_20_084525_create_role_user_table','1'), ('5','2015_01_24_080208_create_permissions_table','1'), ('6','2015_01_24_080433_create_permission_role_table','1'), ('7','2015_12_04_003040_add_special_role_column','1'), ('8','2017_10_17_170735_create_permission_user_table','1'), ('9','2019_02_01_005249_create_tipo_eventos_table','1'), ('10','2019_02_01_005311_create_plans_table','1'), ('11','2019_02_01_005346_create_asistencias_table','1'), ('12','2019_02_01_005404_create_codigos_table','1'), ('13','2019_02_01_005613_create_eventos_table','1'), ('14','2019_02_01_005917_create_invitados_table','1'), ('15','2019_02_01_005955_create_acompanantes_table','1'), ('16','2019_02_01_010018_create_confirmacions_table','1');
INSERT INTO `permissions` VALUES ('1','Dashborad de Administrador','admin.index','Muestra el panel de control de un cliente','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('2','Dashborad de Cliente','clientes.index','Muestra el panel de control de un cliente','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('3','Navegar Usuario','users.index','Navegar Usuario','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('4','Ver Usuario','users.show','Ver Usuario','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('5','Editar Usuario','users.edit','Editar Usuario','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('6','Eliminar Usuario','users.destroy','Eliminar Usuario','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('7','Navegar mesas','mesas.index','Navegar mesas','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('8','Crear mesas','mesas.create','Crear mesas','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('9','Ver mesas','mesas.show','Ver mesas','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('10','Editar mesas','mesas.edit','Editar mesas','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('11','Eliminar mesas','mesas.destroy','Eliminar mesas','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('12','Navegar codigos','codigos.index','Navegar codigos','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('13','Crear codigos','codigos.create','Crear codigos','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('14','Ver codigos','codigos.show','Ver codigos','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('15','Editar codigos','codigos.edit','Editar codigos','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('16','Eliminar codigos','codigos.destroy','Eliminar codigos','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('17','Navegar eventos','eventos.index','Navegar eventos','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('18','Crear eventos','eventos.create','Crear eventos','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('19','Ver eventos','eventos.show','Ver eventos','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('20','Editar eventos','eventos.edit','Editar eventos','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('21','Eliminar eventos','eventos.destroy','Eliminar eventos','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('22','Navegar invitados','invitados.index','Navegar invitados','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('23','Crear invitados','invitados.create','Crear invitados','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('24','Ver invitados','invitados.show','Ver invitados','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('25','Editar invitados','invitados.edit','Editar invitados','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('26','Eliminar invitados','invitados.destroy','Eliminar invitados','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('27','Navegar acompañantes','acompanantes.index','Navegar acompañantes','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('28','Crear acompañantes','acompanantes.create','Crear acompañantes','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('29','Ver acompañantes','acompanantes.show','Ver acompañantes','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('30','Editar acompañantes','acompanantes.edit','Editar acompañantes','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('31','Eliminar acompañantes','acompanantes.destroy','Eliminar acompañantes','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('32','Navegar confirmaciones','confirmaciones.index','Navegar confirmaciones','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('33','Crear confirmaciones','confirmaciones.create','Crear confirmaciones','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('34','Ver confirmaciones','confirmaciones.show','Ver confirmaciones','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('35','Editar confirmaciones','confirmaciones.edit','Editar confirmaciones','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('36','Eliminar confirmaciones','confirmaciones.destroy','Eliminar confirmaciones','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('37','Navegar Tipo de Evento','tipoEvento.index','Navegar tipoEvento','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('38','Crear Tipo de Evento','tipoEvento.create','Crear tipoEvento','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('39','Ver Tipo de Evento','tipoEvento.show','Ver tipoEvento','2019-05-25 12:27:31','2019-05-25 12:27:31'), ('40','Editar Tipo de Evento','tipoEvento.edit','Editar tipoEvento','2019-05-25 12:27:32','2019-05-25 12:27:32'), ('41','Eliminar Tipo de Evento','tipoEvento.destroy','Eliminar tipoEvento','2019-05-25 12:27:32','2019-05-25 12:27:32'), ('42','Navegar planes','planes.index','Navegar planes','2019-05-25 12:27:32','2019-05-25 12:27:32'), ('43','Crear planes','planes.create','Crear planes','2019-05-25 12:27:32','2019-05-25 12:27:32'), ('44','Ver planes','planes.show','Ver planes','2019-05-25 12:27:32','2019-05-25 12:27:32'), ('45','Editar planes','planes.edit','Editar planes','2019-05-25 12:27:32','2019-05-25 12:27:32'), ('46','Eliminar planes','planes.destroy','Eliminar planes','2019-05-25 12:27:32','2019-05-25 12:27:32');
INSERT INTO `permission_role` VALUES ('1','2','2',NULL,NULL), ('2','18','2',NULL,NULL), ('3','19','2',NULL,NULL), ('4','23','2',NULL,NULL), ('5','24','2',NULL,NULL), ('6','28','2',NULL,NULL), ('7','20','2',NULL,NULL), ('8','26','2',NULL,NULL);
INSERT INTO `plans` VALUES ('1','Básico','50','Anexa hasta 50 invitados y optimiza ese evento intimo','250.00','2019-05-25 12:27:30','2019-05-25 12:27:30');
INSERT INTO `roles` VALUES ('1','Admin','admin',NULL,'2019-05-25 12:27:32','2019-05-25 12:27:32','all-access'), ('2','Cliente','cliente',NULL,'2019-05-25 12:27:32','2019-05-25 12:27:32',NULL);
INSERT INTO `role_user` VALUES ('1','1','1',NULL,NULL);
INSERT INTO `tipo_eventos` VALUES ('1','Boda','Ese momento especial, que marcará tu vida para siempre','2019-05-25 12:27:30','2019-05-25 12:27:30'), ('2','XV Años','Ese momento especial, que marcará tu vida para siempre','2019-05-25 12:27:30','2019-05-25 12:27:30');
INSERT INTO `users` VALUES ('1','Alberto','Bautista','Geronimo','9931326179','abautista@boda.com',NULL,'$2y$10$crY51kQ0kuPE.eagAcOOculEs0rRjIHndzcH94PDKiWumQJrpRtIq',NULL,'2019-05-25 12:27:32','2019-05-25 12:27:32');
