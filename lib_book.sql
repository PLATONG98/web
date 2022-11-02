-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2022 at 04:30 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `lib_book`
--

CREATE TABLE `lib_book` (
  `ID` int NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Synopsis` text NOT NULL,
  `Image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lib_book`
--

INSERT INTO `lib_book` (`ID`, `Type`, `Name`, `Author`, `Synopsis`, `Image`) VALUES
(1, 'ตำรา', 'รามเกียรติ์', 'พระบาทสมเด็จพระพุทธยอดฟ้าจุฬาโลก', 'เหตุเกิดเมื่อนนทกไปเกิดใหม่เป็นทศกัณฐ์มีสิบหน้ายี่สิบมือตามคำพระนารายณ์ก่อนนั้นเมื่อพระนารายณ์สังหารนนทกแล้ว ได้ไปขอพระอิศวรจะให้เหล่าเทวดา และตนไปตามสังหารนนทกในชาติหน้า หลังจากนั้น ทหารเอกทั้งห้า จึงเกิดตามกันไป ได้แก่ หนุมานเกิดจากเหล่าศาสตราวุธของพระอิศวรไปอยู่ในครรภ์นางสวาหะ สุครีพ เกิดจากพระอาทิตย์แล้วโดนคำสาปฤๅษีที่เป็นพ่อของนางสวาหะ องคต เป็นลูกของพาลีที่เป็นพี่ของสุครีพ ชมพูพาน เกิดจากการชุบเลี้ยงของพระอินทร์ นิลพัท เป็นลูกของพระกาฬ ฝ่ายพระรามและฝ่ายทศกัณฐ์ได้เกิดศึกชิงนางสีดา จนไพล่พลฝ่ายยักษ์ล้มตายเป็นจำนวนมาก และสุดท้าย ทศกัณฐ์เองก็ถูกพระรามฆ่าตายเช่นเดียวกัน', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1404280176l/22614069.jpg'),
(2, 'ตำรา', 'สามก๊ก', 'ล่อกวนตง', 'เรื่องสามก๊กเริ่มจากการปราบโจรโพกผ้าเหลืองในรัชกาลพระเจ้าเลนเต้ บุคคลสำคัญในขณะนั้นต่างแย่งชิงกันเป็นใหญ่ ทำศึกสงครามกันตลอดเวลา แม้แผ่นดินจะมีกษัตริย์ปกครอง แต่อำนาจต่างๆ กลับตกอยู่ในมือหัวหน้าก๊กต่างๆ คือ โจโฉ ซุนกวน และเล่าปี่ โจโฉ เป็นหัวหน้าก๊กชื่อ วุยก๊ก เดิมรับราชการเป็นทหาร เคยรบชนะโจรโพกผ้าเหลืองและอาสาปราบตั๋งโต๊ะ แต่ไม่สำเร็จ เมื่อลิโป้ฆ่าตั๋งโต๊ะ โจโฉได้ปราบพวกพ้องของตั๋งโต๊ะ และปราบหัวเมืองต่างๆ มากมาย แต่ไม่สามารถปราบซุนกวนกับเล่าปีได้ ซุนกวนเป็นเจ้าเมืองกังตั๋ง เป็นหัวหน้าก๊กชื่อ ง่อก๊ก ส่วนเล่าปี่เดิมเป็นคนยากจน มีอาชีพทอเสื่อขาย และมีเชื้อสายราชวงศ์ฮั่น เล่าปี่มีขงเบ้งเป็นที่ปรึกษา และมีกวนอูเตียวหุยเป็นพี่น้องร่วมสาบาน เล่าปี่เป็นหัวหน้าก๊กชื่อ จ๊กก๊ก ตั้งมั่นอยู่ที่เมืองเสฉวน สามก๊กทำสงครามกันตลอดเวลา นานถึง ๑๑๑ ปี ผลัดกันแพ้ผลัดกันชนะ จนกระทั่งสุมาเจียวอุปราชวุยก๊ก ปราบจ๊กก๊กได้ และสุมาเอี๋ยนปราบง่อก๊กได้ สามก๊กจึงรวมเป็นก๊กเดียว', 'https://images-se-ed.com/ws/Storage/Originals/978616/140/9786161400767L.jpg?h=0a2cc04287ab4fca587523e114a23b0f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lib_book`
--
ALTER TABLE `lib_book`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lib_book`
--
ALTER TABLE `lib_book`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
