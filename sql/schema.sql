CREATE DATABASE IF NOT EXISTS `db_carros`;
USE `db_carros`;

CREATE TABLE `marcas` (
  `id` int PRIMARY KEY,
  `nome` varchar(30)
);

CREATE TABLE `carros` (
  `id` int PRIMARY KEY,
  `nome` varchar(50),
  `marca` int,
  `foto` varchar(50),
  `preco` decimal(6,2)
);

ALTER TABlE `carros` 
ADD FOREIGN KEY (marca) REFERENCES `marcas`(id);

insert into marcas values (1, 'Land Rover');
insert into marcas values (2, 'Jaguar');
insert into marcas values (3, 'Honda');
insert into marcas values (4, 'Ford');
insert into marcas values (5, 'Cherry');

insert into carros values (1, 'Range Rover Sport', 1, 'land-rover-fake.jpg', 112.55);
insert into carros values (2, 'Discovery Sport', 1, 'land-rover-2-fake.jpg', 150.00);
insert into carros values (3, 'Honda Civic', 3, 'civic-fake.jpg', 299.00);
insert into carros values (4, 'Jaguar XE', 2, 'jaguar-fake.jpg', 3000.00);
insert into carros values (5, 'Tiggo 5X', 5, 'tiggo-fake.jpg', 107.99);
insert into carros values (6, 'Ford Focus', 4, 'ford-focus-fake.jpg', 0.99);