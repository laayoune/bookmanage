-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2019-01-15 18:52:56
-- 服务器版本： 10.1.37-MariaDB
-- PHP 版本： 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `db_bookmanage`
--

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

CREATE TABLE `book` (
  `book_id` int(8) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_price` int(10) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_press` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`book_name`, `book_price`, `book_author`, `book_press`) VALUES
('Java编程思想（第4版）', 11830, '[美] Bruce Eckel', '机械工业出版社'),
('JavaScript权威指南（第6版）', 11470, '[美] David Flanagan 著，淘宝前端团队 译', '机械工业出版社'),
('重构 改善既有代码的设计', 6760, '[美] 马丁·福勒（Martin Fowler） ', '人民邮电出版社'),
('ES6标准入门（第3版）', 7900, '阮一峰', '电子工业出版社'),
('深入浅出Node.js', 5500, '朴灵', '人民邮电出版社'),
('你不知道的JavaScript 中卷', 6300, '[美] 辛普森（Kyle Simpson）', '人民邮电出版社');

--
-- 转储表的索引
--

--
-- 表的索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `book_name` (`book_name`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
