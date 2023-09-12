-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2023 年 08 月 29 日 13:29
-- 伺服器版本： 8.0.34-0ubuntu0.22.04.1
-- PHP 版本： 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `testdb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `ID` int NOT NULL COMMENT '編號(系統自動產生)',
  `Username` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `Password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `Nickname` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '暱稱',
  `Email` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'email',
  `Uid01` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'uid驗證碼',
  `UserState` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true' COMMENT 'true: 啟用 false: 停用',
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '建檔時間(系統自動產生)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`ID`, `Username`, `Password`, `Nickname`, `Email`, `Uid01`, `UserState`, `Created_at`) VALUES
(1, 'owner', '12345678', 'AMA', 'mmmmmmmm', NULL, 'false', '2023-08-03 01:48:34'),
(9, 'owner03', '12345678', 'QQQQQQQ', 'QQQQQQ', NULL, 'false', '2023-08-03 05:37:18'),
(10, 'owner04', '12345678', 'owner04 chen', 'owner@test.com', NULL, 'false', '2023-08-03 05:41:31'),
(16, 'owner104', 'e10adf883e', 'owneQQQQQ', 'ownerQQQQ1@test.com', NULL, 'false', '2023-08-10 01:16:57'),
(20, 'owner105', '25d55c07ad', 'rrr', 'ttt', '5aa3ad47f6', 'true', '2023-08-15 01:11:12'),
(21, 'owner106', '25d55c07ad', 'eee', 'rrr', 'b8ff352cd7', 'true', '2023-08-15 05:18:45'),
(22, 'owner55', '25d55c07ad', '2', '1', 'e4dff90e1e', 'false', '2023-08-24 01:53:22');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT COMMENT '編號(系統自動產生)', AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
