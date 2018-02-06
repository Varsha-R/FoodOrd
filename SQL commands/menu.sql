CREATE TABLE `menu` 
 ( `id` int(11) NOT NULL,   `name` varchar(30) ,
  `price` int(10),  `restaurant_id` int(11)); 

ALTER TABLE `menu`  ADD PRIMARY KEY (`id`);
ALTER TABLE `menu` ADD FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`);
