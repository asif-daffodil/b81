-- query for create database b81
CREATE DATABASE `b81`;
CREATE DATABASE IF NOT EXISTS `b81`;

-- query to drop database b81
/* DROP DATABASE `b81`;
DROP DATABASE IF EXISTS `b81`; */

-- query to create table users
CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

-- query to create table products
CREATE TABLE `products` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `price` DECIMAL(10,2) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

-- query to create table orders
CREATE TABLE `orders` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `product_id` INT(11) NOT NULL,
    `user_id` INT(11) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
);

-- query to insert single data into table users
INSERT INTO `users` (`name`, `email`) VALUES ('Sumaiya Sima', 'sima@gmail.com');

-- query to insert multiple data into table users
INSERT INTO `users` (`name`, `email`) VALUES 
('Md Mokbul', 'mokbul@gmail.com'),
('Shadia Rahman', 'shadia@gmail.com'),
('Asif', 'asif@gmail.com');

-- query to select all data from table users
SELECT * FROM `users`;

-- query to select single data from table users
SELECT * FROM `users` WHERE `email` = 'sima@gmail.com';
SELECT * FROM `users` WHERE `id` > 0 AND `id` <= 3;
SELECT * FROM `users` WHERE `id` != 3;
SELECT `name`, `email` FROM `users` WHERE `id` != 3 AND `id` >= 1;
SELECT `name` AS `User Name`, `email` AS `User Email` FROM `users` WHERE `id` != 3 AND `id` >= 1;
SELECT `users`.`name` AS `User Name`, `users`.`email` AS `User Email` FROM `users` WHERE `id` != 3 AND `id` >= 1;
SELECT `b81`.`users`.`name` AS `User Name`, `b81`.`users`.`email` AS `User Email` FROM `users` WHERE `id` != 3 AND `id` >= 1 ORDER BY `id` DESC;

-- query to inert multiple data into table products
INSERT INTO `products` (`name`, `price`) VALUES 
('Laptop', 50000),
('Mobile', 20000),
('TV', 30000),
('AC', 50000),
('Car', 2000000),
('Bike', 300000),
('Washing Machine', 30000);

-- query to add new column quantity and total price in table orders
ALTER TABLE `orders` ADD `quantity` INT(11) NOT NULL AFTER `user_id`, ADD `total_price` INT(11) NOT NULL AFTER `quantity`;

-- query to change the column name total_price to price in table orders
-- ALTER TABLE `orders` CHANGE `total_price` `price` INT(11) NOT NULL;

-- query to delete the column total_price in table orders
-- ALTER TABLE `orders` DROP `total_price`;

-- query to insert data into table orders
INSERT INTO `orders` (`product_id`, `user_id`, `quantity`) VALUES 
(1, 1, 2),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 1, 1);


-- query to update the column total_price where it's value is equal `products`.`price` * `orders`.`quantity`
UPDATE `orders`
INNER JOIN `products` ON `products`.`id` = `orders`.`product_id`
SET `orders`.`total_price` = `products`.`price` * `orders`.`quantity`;

-- query to UPDATE products table
UPDATE `products` SET `name` = 'Toyota Car' WHERE `id` = 5;

-- query to DELETE orders table
DELETE FROM `orders` WHERE `id` = 2;

SELECT `users`.`name` AS `Customer Name`,  `products`.`name` AS `Product Name`, `products`.`price` AS `Product Price`, `orders`.`quantity` AS `Quantity`, `orders`.`total_price` AS `Total Price` FROM `orders` INNER JOIN `users` ON `users`.`id` = `orders`.`user_id` INNER JOIN `products` ON `products`.`id` = `orders`.`product_id`;

-- Select all data from multiple tables
SELECT `users`.`name` AS `Customer Name`,  `products`.`name` AS `Product Name`, `products`.`price` AS `Product Price`, `orders`.`quantity` AS `Quantity`, `orders`.`total_price` AS `Total Price` FROM `orders` INNER JOIN `users` ON `users`.`id` = `orders`.`user_id` INNER JOIN `products` ON `orders`.`product_id` = `products`.`id` WHERE `orders`.`user_id` != 1 AND `products`.`id` >= 1 ORDER BY `orders`.`id` DESC

