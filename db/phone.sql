SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `PHPLibrary`
--

-- --------------------------------------------------------

--
-- 表的结构 `phone`
--

DROP TABLE IF EXISTS `phone`;
CREATE TABLE `phone` (
    `pno` int(8) NOT NULL AUTO_INCREMENT,
    `openid` char(40) NOT NULL,
    `phone` varchar(11) NOT NULL,
    PRIMARY KEY (`pno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

