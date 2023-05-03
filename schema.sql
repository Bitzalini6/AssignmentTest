/* Create database called scandiweb_test_project */
CREATE DATABASE scandiweb_test_project;

/* Use the database */
USE scandiweb_test_products;

/* Create a table called products */
CREATE TABLE `products` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`sku` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_general_ci',
	`name` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_general_ci',
	`price` DECIMAL(20,0) NOT NULL,
	`weight_kg` DECIMAL(20,0) NOT NULL,
	`size` INT(20) NOT NULL,
	`dimensions` LONGTEXT NOT NULL COLLATE 'utf8mb4_bin',
	PRIMARY KEY (`id`) USING BTREE,
	UNIQUE INDEX `sku` (`sku`) USING BTREE,
	CONSTRAINT `dimensions` CHECK (json_valid(`dimensions`))
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;
