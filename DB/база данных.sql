--
-- Структура таблицы `comp_ref`
--

CREATE TABLE IF NOT EXISTS `comp_ref` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `startdate` varchar(10) NOT NULL,
  `enddate` varchar(10) NOT NULL,
  `deldate` varchar(10) NOT NULL,
  `lidername` varchar(1) NOT NULL DEFAULT '0',
  `param` varchar(2) NOT NULL DEFAULT '0',
  `min` varchar(10) NOT NULL DEFAULT '0',
  `descr` varchar(1000) NOT NULL,
  `pris1value` varchar(10) NOT NULL,
  `pris2value` varchar(10) NOT NULL,
  `pris3value` varchar(10) NOT NULL,
  `pris4value` varchar(10) NOT NULL,
  `pris5value` varchar(10) NOT NULL,
  `pris1status` varchar(1) NOT NULL DEFAULT '0',
  `pris2status` varchar(1) NOT NULL DEFAULT '0',
  `pris3status` varchar(1) NOT NULL DEFAULT '0',
  `pris4status` varchar(1) NOT NULL DEFAULT '0',
  `pris5status` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `comp_ref`
--

INSERT INTO `comp_ref` (`id`, `name`, `startdate`, `enddate`, `deldate`, `lidername`, `param`, `min`, `descr`, `pris1value`, `pris2value`, `pris3value`, `pris4value`, `pris5value`, `pris1status`, `pris2status`, `pris3status`, `pris4status`, `pris5status`) VALUES
(1, 'Мега реферер!\n', '01.12.2015', '01.12.2015', '99.99.9999', '0', '0', '0', 'Размещай баннеры и приглашай рефералов. Все очень просто, кто больше пригласит за время проведения конкурса тот и выиграет! Баннер находится в разделе рефералы. Размещать баннеры вы можете например на других сайтах раздающих payeer деньги.\n', '200', '100', '50', '', '', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `compdata_ref`
--

CREATE TABLE IF NOT EXISTS `compdata_ref` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idk` int(11) NOT NULL,
  `user` varchar(20) CHARACTER SET utf8 NOT NULL,
  `kosh` varchar(20) CHARACTER SET utf8 NOT NULL,
  `resvalue` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_2` (`user`),
  KEY `idk` (`idk`),
  KEY `user` (`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;


--
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `set` varchar(50) NOT NULL,
  `set1` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `set`, `set1`, `name`, `value`) VALUES
(1, '0                     ', '                     3999', 'price', '0.03'),
(2, '4000                     ', '                     5999', 'price', '0.06'),
(3, '6000                     ', '                     9899', 'price', '0.18'),
(4, '9900                     ', '                     9989', 'price', '1'),
(5, '9990                     ', '                     9999', 'price', '30'),
(6, '10000', '10000', 'price', '500'),
(7, 'accountNumber', '', 'payeer', 'P0000000'),
(8, 'apiId', '', 'payeer', '000000'),
(9, 'apiKey', '', 'payeer', '0000000'),
(10, 'min_pay', '', 'system', '0.1'),
(11, 'wait', '', 'system', '20'),
(12, 'ref_proc', '', 'system', '0.5'),
(13, 'site_name', '', 'system', 'Раздача Payeer бонусов'),
(14, 'admin_log', '', 'system', 'admin'),
(15, 'admin_pass', '', 'system', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `sp`
--

CREATE TABLE IF NOT EXISTS `sp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payeer` varchar(20) NOT NULL,
  `sum` varchar(7) NOT NULL,
  `time` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



--
-- Структура таблицы `stat`
--

CREATE TABLE IF NOT EXISTS `stat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sum` int(30) NOT NULL,
  `date` int(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `tb_comp`
--

CREATE TABLE IF NOT EXISTS `tb_comp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `startdate` varchar(10) NOT NULL,
  `enddate` varchar(10) NOT NULL,
  `deldate` varchar(10) NOT NULL,
  `lidername` varchar(1) NOT NULL DEFAULT '0',
  `param` varchar(2) NOT NULL DEFAULT '0',
  `min` varchar(10) NOT NULL DEFAULT '0',
  `descr` varchar(1000) NOT NULL,
  `pris1value` varchar(10) NOT NULL,
  `pris2value` varchar(10) NOT NULL,
  `pris3value` varchar(10) NOT NULL,
  `pris4value` varchar(10) NOT NULL,
  `pris5value` varchar(10) NOT NULL,
  `pris1status` varchar(1) NOT NULL DEFAULT '0',
  `pris2status` varchar(1) NOT NULL DEFAULT '0',
  `pris3status` varchar(1) NOT NULL DEFAULT '0',
  `pris4status` varchar(1) NOT NULL DEFAULT '0',
  `pris5status` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `tb_comp`
--

INSERT INTO `tb_comp` (`id`, `name`, `startdate`, `enddate`, `deldate`, `lidername`, `param`, `min`, `descr`, `pris1value`, `pris2value`, `pris3value`, `pris4value`, `pris5value`, `pris1status`, `pris2status`, `pris3status`, `pris4status`, `pris5status`) VALUES
(1, 'Супер сборщик бонусов!', '01.12.2015', '10.12.2015', '99.99.9999', '0', '0', '0', 'Собери больше бонусов другого и ты выиграешь!\n\n', '30', '20', '10', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `tb_compdata`
--

CREATE TABLE IF NOT EXISTS `tb_compdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idk` int(11) NOT NULL,
  `user` varchar(20) CHARACTER SET utf8 NOT NULL,
  `resvalue` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_2` (`user`),
  KEY `idk` (`idk`),
  KEY `user` (`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payeer` varchar(20) NOT NULL,
  `money` double(11,4) NOT NULL,
  `pay` double(11,4) NOT NULL,
  `last` int(20) NOT NULL,
  `referer` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `ref_pay` double(11,4) NOT NULL,
  `kolv` int(11) NOT NULL,
  `sum_p` double(11,4) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
