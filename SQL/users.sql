-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-24 13:03:58
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `test`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(7, 'mac', 'example@mail.com', '1111'),
(8, 'Hanako', 'example00@mail.com', '1111'),
(9, 'Taro', 'example01@mail.com', '2222'),
(10, 'Kai', 'example02@mail.com', '3333'),
(11, 'Gonta', 'example03@mail.com', '4444'),
(12, 'yuna', 'example04@mail.com', '5555'),
(13, 'mami', 'exampl05@mail.com', '6666'),
(14, 'yutaka', 'exampl06@mail.com', '7777'),
(15, 'kenji', 'example09@mail.com', '1010'),
(16, 'genta', 'example13@mail.com', '1414'),
(17, '????', 'example15@mail.com', '5151'),
(18, 'kyoko', 'example15@mail.com', '5151'),
(19, 'antonio', 'example30@mail.com', '3030'),
(20, 'yoriko', 'example33@mail.com', '3330'),
(21, 'naoki', 'example56@mail.com', '5656'),
(22, 'sazae', 'example02@mail.com', '0202'),
(23, 'holly', 'example91@mail.com', '9191'),
(24, 'Fune', 'example100@mail.com', '1001'),
(25, 'iwa', 'example78@mail.com', '7878'),
(26, 'jin', 'example43@mail.com', '4343'),
(27, 'akira', 'example007@mail.com', '0070'),
(28, 'sinako', 'example555@mail.com', '0555'),
(29, 'karen', 'example22@mail.com', '2223');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
