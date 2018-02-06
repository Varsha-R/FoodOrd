CREATE TABLE `customer` 
(  `id` int(11) NOT NULL, `email` varchar(30),
`password` varchar(20), `firstname` varchar(20),
`lastname` varchar(20), `phone` varchar(20),
`address` varchar(75), `city` varchar(10),
`zip` int(6));

ALTER TABLE `customer`
ADD PRIMARY KEY (`id`);
