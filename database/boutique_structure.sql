-- Adminer 4.8.1 MySQL 10.6.16-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `boutique`;
CREATE DATABASE `boutique` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `boutique`;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`
(
    `id`   int(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(45)      NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `id_UNIQUE` (`id`),
    UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 6
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;


DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers`
(
    `id`        int(11) unsigned NOT NULL AUTO_INCREMENT,
    `lastname`  varchar(45)      NOT NULL,
    `firstname` varchar(45) DEFAULT NULL,
    `email`     varchar(45)      NOT NULL,
    `password`  varchar(45)      NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `id_UNIQUE` (`id`),
    UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 6
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;


DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`
(
    `id`            int(11) unsigned NOT NULL AUTO_INCREMENT,
    `command_date`  date DEFAULT NULL,
    `delivery_date` date DEFAULT NULL,
    `clients_id`    int(10) unsigned NOT NULL,
    PRIMARY KEY (`id`),
    KEY `fk_orders_customers_1_idx` (`clients_id`),
    CONSTRAINT `fk_orders_customers_1` FOREIGN KEY (`clients_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB
  AUTO_INCREMENT = 6
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;


DROP TABLE IF EXISTS `orders_products`;
CREATE TABLE `orders_products`
(
    `orders_id`   int(10) unsigned NOT NULL,
    `products_id` int(10) unsigned NOT NULL,
    `quantity`    int(11)          NOT NULL,
    PRIMARY KEY (`orders_id`, `products_id`),
    KEY `fk_commands_products_1_idx` (`products_id`),
    CONSTRAINT `orders_products_ibfk_1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`),
    CONSTRAINT `orders_products_ibfk_2` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`
(
    `id`            int(11) unsigned NOT NULL AUTO_INCREMENT,
    `title`         varchar(45)      NOT NULL,
    `description`   tinytext                  DEFAULT NULL,
    `price`         decimal(10, 2)   NOT NULL,
    `weight`        decimal(10, 2)            DEFAULT NULL,
    `tax`           decimal(10, 2)            DEFAULT NULL,
    `ttc`           decimal(10, 2)            DEFAULT NULL,
    `stock`         decimal(10, 2)   NOT NULL DEFAULT 0.00,
    `categories_id` int(10) unsigned          DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `fk_products_categories_1_idx` (`categories_id`),
    CONSTRAINT `fk_products_categories_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB
  AUTO_INCREMENT = 6
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;


-- 2024-02-01 11:09:40