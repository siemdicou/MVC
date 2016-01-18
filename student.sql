-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 18 jan 2016 om 11:01
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `MVC`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Firstname` varchar(11) DEFAULT NULL,
  `Lastname` varchar(12) DEFAULT NULL,
  `Class` varchar(4) DEFAULT NULL,
  `Age` int(2) DEFAULT NULL,
  `Height (cm)` int(3) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Eye color` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `student`
--

INSERT INTO `student` (`Firstname`, `Lastname`, `Class`, `Age`, `Height (cm)`, `Gender`, `Eye color`) VALUES
('Stijn', 'Olthof', 'MD2C', 17, 180, 'female', 'blue'),
('Kevin', 'Meijer', 'MD2C', 18, 194, 'male', 'blue'),
('Robin ', 'Wist', 'MD2C', 18, 186, 'female', 'brown'),
('Ryan', 'Vlaming', 'MD2B', 17, 183, 'female', 'blue'),
('Cemre', 'Sari', 'MD2B', 5, 170, 'male', 'brown'),
('Siem', 'dicou', 'MD2C', 19, 174, 'male', 'brown'),
('Nick', 'Deenik', 'MD2C', 18, 180, 'male', 'green'),
('Abdelkarim ', 'Ouzzine', 'MD2B', 18, 157, 'male', 'brown'),
('Jimmy', 'Dekker', 'MD2B', 18, 185, 'male', 'grijs'),
('Muhammed', 'Kara', 'MD2B', 17, 180, 'male', 'brown'),
('Dave', 'van Rossum', 'MD2C', 20, 195, 'male', 'blue'),
('Daan', 'van Dalen', 'MD2B', 18, 180, 'male', 'green'),
('Sander', 'Menke', 'MD2B', 17, 187, 'male', 'green'),
('Remco', 'Buddelmeijer', 'MD2B', 17, 170, 'male', 'blue'),
('Tristan', 'Huysman', 'MD2B', 18, 187, 'male', 'brown'),
('Yassine', 'Gherbi', 'MD2C', 18, 170, 'male', 'brown');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
