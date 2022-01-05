CREATE DATABASE designpattern;
USE designpattern;

CREATE TABLE `products` (
  `sku_id` varchar(10)  NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `image` varchar(255) NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`sku_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE INDEX idx_product_name
ON products (product_name);

CREATE TABLE `product_details` (
  `product_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `sku_id` varchar(10) NOT NULL,
  `weight` double NOT NULL,
  `length` double NOT NULL,
  `width` double NOT NULL,
  `height` double NOT NULL,
  PRIMARY KEY (`product_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE INDEX idx_product_sku
ON products (sku_id);

LOCK TABLES `products` WRITE;

INSERT INTO `products` VALUES 
  ('PGK8R6O',1,'Sneaker Modern 15','localhost:7000/public/uploads/1630123199238701473.png', 100),
  ('PSK8RPO',1,'Flatshoes Panorama','localhost:7000/public/uploads/1630123199238701473.png', 20),
  ('PLK8R0O',2,'Casual Eterna','localhost:7000/public/uploads/1630123199238701473.png', 30),
  ('PMK8OPO',2,'Cressidi Omega','localhost:7000/public/uploads/1630123199238701473.png',90);

UNLOCK TABLES;

INSERT INTO `product_details` VALUES 
  (1,'PGK8R6O',200,10,32,22),
  (2,'PSK8RPO',220,15,44,9),
  (3,'PLK8R0O',150,23,12,22),
  (4,'PMK8OPO',320,34,10,32);

UNLOCK TABLES;