CREATE DATABASE IF NOT EXISTS product_database;
USE product_database;
-- create
CREATE TABLE IF NOT EXISTS Product (
  id INT AUTO_INCREMENT PRIMARY KEY,
  product_name varchar(255),
  unit varchar(255) NOT NULL,
  price decimal(10, 2) NOT NULL,
  date_expiry date NOT NULL,
  available_inventory integer,
  product_image MEDIUMBLOB
);
