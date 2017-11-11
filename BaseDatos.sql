CREATE TABLE `site_admins` (
  `aid` int(250) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(300) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'full, medium',
  `request` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `session` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date_signin` datetime NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

INSERT INTO `site_admins` (`aid`, `fullname`, `username`, `email`, `phone`, `picture`, `password`, `role`, `request`, `session`, `date_signin`) VALUES
(1, 'Vannesa', 'admin', '1@gmail.com', '', 'avatar-1.jpg', '202cb962ac59075b964b07152d234b70', 'full', 'confirmed', 'a5dfhjkl898', '0000-00-00 00:00:00'),


CREATE TABLE `site_notifications` (
  `ntf_id` int(250) NOT NULL AUTO_INCREMENT,
  `ntf_to_id` int(250) NOT NULL,
  `ntf_from_id` int(250) NOT NULL,
  `ntf_admin_id` int(250) NOT NULL,
  `ntf_item_id` int(250) NOT NULL,
  `ntf_message` text CHARACTER SET latin1 NOT NULL,
  `sold_id` varchar(250) CHARACTER SET latin1 NOT NULL,
  `ntf_status` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ntf_date` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`ntf_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=17 ;

INSERT INTO `site_notifications` (`ntf_id`, `ntf_to_id`, `ntf_from_id`, `ntf_admin_id`, `ntf_item_id`, `ntf_message`, `sold_id`, `ntf_status`, `ntf_date`) VALUES
(16, 3, 0, 0, 0, 'texto', '', '', '');

CREATE TABLE `store_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(200) NOT NULL DEFAULT '',
  `link` varchar(100) NOT NULL DEFAULT '',
  `parent` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

INSERT INTO `store_categories` (`id`, `label`, `link`, `parent`, `sort`) VALUES
(1, 'Computadoras', '', 0, 1),
(2, 'Hardware', '', 0, 7),
(3, 'Accesorios', '', 0, 23),
(5, 'Redes', '', 0, 38),
(6, 'Sofware', '', 0, 32),
(8, 'Laptops', '', 1, 2),
(9, 'Desktops', '', 1, 3),
(10, 'Tablets', '', 1, 4),
(11, 'iPads', '', 1, 5),
(12, 'Computadoras Mac', '', 1, 6),
(13, 'Discos duros', '', 2, 8),
(14, 'Memorias', '', 2, 10),
(15, 'Tarjetas madre', '', 2, 11),
(16, 'Targetas de video', '', 2, 12),
(17, 'Procesadores', '', 2, 16),
(18, 'Gabinetes', '', 2, 17),
(19, 'Tarjetas de sonido', '', 2, 13),
(20, 'Tarjetas controladoras', '', 2, 14),
(21, 'Unidades Bluray / DVD', '', 2, 19),
(22, 'Fuentes de poder', '', 2, 20),
(23, 'Disipadores y ventiladores', '', 2, 21),
(24, 'Unidades Flash USB', '', 3, 24),
(25, 'Mouse / Ratones', '', 3, 25),
(26, 'Audifonos / Microfonos', '', 3, 27),
(27, 'Teclados', '', 3, 26),
(28, 'Camaras web', '', 3, 28),
(29, 'Mochilas', '', 3, 29),
(30, 'Limpieza', '', 3, 30),
(31, 'Discos duros externos', '', 2, 9),
(32, 'Antivirus y seguridad', '', 6, 35),
(33, 'Sistemas Operativos', '', 6, 33),
(34, 'Microsoft Office', '', 6, 34),
(35, 'Puntos de venta', '', 6, 36),
(36, 'Diseño', '', 6, 37),
(37, 'Impresoras y scanners', '', 2, 22),
(38, 'Monitores', '', 2, 18),
(39, 'Tarjetas de red', '', 2, 15),
(40, 'Cartuchos de tinta, toners y combustibles', '', 3, 31),
(41, 'Ruteadores', '', 5, 39),
(42, 'Switches', '', 5, 40),
(43, 'Puentes', '', 5, 41),
(44, 'Servidores', '', 5, 42);

CREATE TABLE `store_customers` (
  `cid` int(250) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `picture` varchar(300) DEFAULT 'default.png',
  `date_signin` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `store_items` (
  `item_id` int(250) NOT NULL AUTO_INCREMENT,
  `code` varchar(7) NOT NULL,
  `item_name` varchar(300) NOT NULL,
  `model` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `options_color` varchar(600) NOT NULL,
  `options_size` varchar(600) NOT NULL,
  `price` double NOT NULL,
  `offer` int(10) NOT NULL,
  `category` int(11) NOT NULL,
  `tags` text NOT NULL,
  `stock` int(250) NOT NULL,
  `count_sold` int(50) NOT NULL,
  `count_visits` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `provider` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `store_providers` (
  `pid` int(250) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `picture` varchar(300) NOT NULL DEFAULT 'default.png',
  `date_signin` datetime NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `store_purchases` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `uid` int(250) NOT NULL,
  `item_code` text NOT NULL,
  `price` double NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

INSERT INTO `store_purchases` (`id`, `uid`, `item_code`, `price`, `date`, `status`) VALUES
(1, 1, '123458', 0.25, '2017-08-17', 1),
(2, 1, '123459', 0.25, '2017-08-17', 1),
(3, 2, '123459', 0.25, '2017-08-17', 1);
