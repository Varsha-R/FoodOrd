CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,   `customer_id` int(11),
  `menu_id` int(11), `price` int(11) );

ALTER TABLE `order_items`   ADD PRIMARY KEY (`id`);
ALTER TABLE `order_items`  
ADD FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON UPDATE CASCADE, 
ADD FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON UPDATE CASCADE;

