
CREATE DATABASE carrito2022;
USE carrito2022;



CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

select * from order_items

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `status` enum('Pending','Completed','Cancelled') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE usuario
(
	codigo char(5) primary key,
    nombre varchar(20) null,
    apellidos varchar(30) null,
    clave varchar(60) not null
);

insert into usuario values (1,'jose','pomacosi','jp1'),
                           (2,'marisol','pino','mp2');

-- filamentos --
insert into  products values (1,'N_fila100.jpg','PLA Azul','1.75mm 250g','28','2022-10-12','2022-11-12','1'),
							 (2,'N_fila101.jpg','PLA Amarillo','1.75mm 250g','14.5','2022-10-12','2022-11-12','1'),
							 (3,'N_fila102.jpg','PLA Gris','1.75mm 250g','28','2022-10-12','2022-11-12','1'),
							 (4,'N_fila103.jpg','PLA Rojo','1.75mm 250g','25','2022-10-12','2022-11-12','1');

-- resinas --
insert into  products values (5,'N_resina100.jpg','Resina estandar','0.5Kg Blanco Creality','90','2022-10-12','2022-11-12','1'),
							 (6,'N_resina101.jpg','Resina bajo olor',' 0.5Kg Negro Creality','95','2022-10-12','2022-11-12','1'),
							 (7,'N_resina102.jpg','Resina ABS','0.5Kg piel Creality','170','2022-10-12','2022-11-12','1'),
							 (8,'N_resina103.jpg','Resina bajo olor','1Kg rojo Creality','180','2022-10-12','2022-11-12','1');
-- impresoras --
insert into  products values (9,'N_impre100.jpg','Anet ET4','Area de impresion 22x22x25 Armado facil, pantalla tactil','900','2022-10-12','2022-11-12','1'),
							 (10,'N_impre101.jpg','Creality Ender-3','Area de impresion 22x22x25 Armado facil, el mas vendido','980','2022-10-12','2022-11-12','1'),
							 (11,'N_impre102.jpg','Creality LD-002R','Area de impresion 11.9x6.5x16 cm resolucion:0.02 -0.05mm, la mas economica de resina','860','2022-10-12','2022-11-12','1'),
							 (12,'N_impre103.jpg','Anycubic Photon M3','Area de impresion 16.3x10.2x18.0 cm resolucion:0.01 -0.15mm, monocromaticaa','1780','2022-10-12','2022-11-12','1');
                             
                             
 -- DELETE FROM products  --

select * from products

-- impresoras --
SELECT * FROM products where  id  in(9,10,11,12) order by id
-- filamentos --
SELECT * FROM products where  id  in(1,2,3,4) order by id
-- resinas --
SELECT * FROM products where  id  in(5,6,7,8) order by id