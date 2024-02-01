-- Adminer 4.8.1 MySQL 10.6.16-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `categories` (`id`, `name`)
VALUES (4, 'Books'),
       (2, 'Clothing'),
       (1, 'Electronics'),
       (3, 'Home and Garden'),
       (5, 'Toys')
ON DUPLICATE KEY UPDATE `id`   = VALUES(`id`),
                        `name` = VALUES(`name`);

INSERT INTO `customers` (`id`, `lastname`, `firstname`, `email`, `password`)
VALUES (1, 'Smith', 'John', 'john.smith@example.com', 'password123'),
       (2, 'Johnson', 'Emma', 'emma.johnson@example.com', 'securepass'),
       (3, 'Williams', 'David', 'david.williams@example.com', 'pass123'),
       (4, 'Davis', 'Olivia', 'olivia.davis@example.com', 'strongpass'),
       (5, 'Miller', 'Sophia', 'sophia.miller@example.com', 'securepassword')
ON DUPLICATE KEY UPDATE `id`        = VALUES(`id`),
                        `lastname`  = VALUES(`lastname`),
                        `firstname` = VALUES(`firstname`),
                        `email`     = VALUES(`email`),
                        `password`  = VALUES(`password`);

INSERT INTO `orders` (`id`, `command_date`, `delivery_date`, `clients_id`)
VALUES (1, '2024-01-15', '2024-01-20', 1),
       (2, '2024-01-20', '2024-01-25', 2),
       (3, '2024-01-25', '2024-01-30', 3),
       (4, '2024-01-30', '2024-02-05', 4),
       (5, '2024-02-05', '2024-02-10', 5)
ON DUPLICATE KEY UPDATE `id`            = VALUES(`id`),
                        `command_date`  = VALUES(`command_date`),
                        `delivery_date` = VALUES(`delivery_date`),
                        `clients_id`    = VALUES(`clients_id`);

INSERT INTO `orders_products` (`orders_id`, `products_id`, `quantity`)
VALUES (1, 1, 2),
       (1, 2, 3),
       (2, 3, 1),
       (3, 4, 5),
       (4, 5, 2)
ON DUPLICATE KEY UPDATE `orders_id`   = VALUES(`orders_id`),
                        `products_id` = VALUES(`products_id`),
                        `quantity`    = VALUES(`quantity`);

INSERT INTO `products` (`id`, `title`, `description`, `price`, `weight`, `tax`, `ttc`, `stock`, `categories_id`)
VALUES (1, 'Smartphone', 'Latest model with advanced features', 799.00, 200.00, 10.00, 878.9, 50.00, 1),
       (2, 'Jeans', 'Comfortable and stylish denim jeans', 49.00, 700.00, 5.00, 51.45, 100.00, 2),
       (3, 'Lawn Mower', 'Powerful lawn mower for your garden', 299.00, 1500.00, 15.00, 343.85, 30.00, 3),
       (4, 'Science Fiction Book', 'Exciting sci-fi novel by a renowned author', 15.00, 1.00, 300.00, 60, 2.00, 4),
       (5, 'Toy Car', 'Remote-controlled toy car for kids', 29.00, 1.00, 100.00, 87, 2.00, 5)
ON DUPLICATE KEY UPDATE `id`            = VALUES(`id`),
                        `title`         = VALUES(`title`),
                        `description`   = VALUES(`description`),
                        `price`         = VALUES(`price`),
                        `weight`        = VALUES(`weight`),
                        `tax`           = VALUES(`tax`),
                        `ttc`           = VALUES(`ttc`),
                        `stock`         = VALUES(`stock`),
                        `categories_id` = VALUES(`categories_id`);

-- 2024-02-01 11:10:15