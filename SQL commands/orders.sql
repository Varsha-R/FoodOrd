CREATE TABLE `orders` (
  `id` int(11) NOT NULL,   `customer_id` int(11),
  `total` int(11) );

ALTER TABLE `orders`   ADD PRIMARY KEY (`id`);
ALTER TABLE `orders` ADD FOREIGN KEY
 (`customer_id`)  REFERENCES `customer` (`id`) ON UPDATE CASCADE;
