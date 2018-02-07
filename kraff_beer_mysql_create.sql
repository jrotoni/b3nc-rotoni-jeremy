CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL UNIQUE,
	`role` varchar(255) NOT NULL,
	`image` VARCHAR(255) NOT NULL,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`address` varchar(255) NOT NULL,
	`contact` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `items` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`description` varchar(255) NOT NULL,
	`price` DECIMAL NOT NULL,
	`category_id` INT(11) NOT NULL,
	`stocks` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`total` INT(11) NOT NULL,
	`transaction_id` INT(11) NOT NULL,
	`status_id` INT(11) NOT NULL,
	`customer_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order_items` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`quantity` INT(11) NOT NULL,
	`subtotal` INT(11) NOT NULL,
	`items_id` INT(11) NOT NULL,
	`order_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `items_categories` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`category` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `transaction` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`transaction/reference` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `status` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`status` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `items` ADD CONSTRAINT `items_fk0` FOREIGN KEY (`category_id`) REFERENCES `items_categories`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`transaction_id`) REFERENCES `transaction`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`status_id`) REFERENCES `status`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk2` FOREIGN KEY (`customer_id`) REFERENCES `users`(`id`);

ALTER TABLE `order_items` ADD CONSTRAINT `order_items_fk0` FOREIGN KEY (`items_id`) REFERENCES `items`(`id`);

ALTER TABLE `order_items` ADD CONSTRAINT `order_items_fk1` FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`);

