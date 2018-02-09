CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`email` varchar(255) NOT NULL UNIQUE,
	`image` varchar(255) NOT NULL,
	`username` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`address` varchar(255) NOT NULL,
	`contact` varchar(255) NOT NULL,
	`role_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `items` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`description` varchar(255) NOT NULL,
	`price` DECIMAL(10,2) NOT NULL,
	`category_id` INT(11) NOT NULL,
	`stocks` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`reference_number` varchar(255) NOT NULL,
	`total` DECIMAL(10,2) NOT NULL,
	`status_id` INT(11) NOT NULL,
	`customer_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order_items` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`quantity` INT(11) NOT NULL,
	`subtotal` DECIMAL(10,2) NOT NULL,
	`items_id` INT(11) NOT NULL,
	`order_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `categories` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`category` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `status` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`status` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `roles` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`);

ALTER TABLE `items` ADD CONSTRAINT `items_fk0` FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`status_id`) REFERENCES `status`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`customer_id`) REFERENCES `users`(`id`);

ALTER TABLE `order_items` ADD CONSTRAINT `order_items_fk0` FOREIGN KEY (`items_id`) REFERENCES `items`(`id`);

ALTER TABLE `order_items` ADD CONSTRAINT `order_items_fk1` FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`);

