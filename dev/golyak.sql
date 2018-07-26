
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `golyak` (
  `id` int(11) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nem` tinyint(1) NOT NULL DEFAULT '0',
  `lakcim` varchar(255) NOT NULL,
  `telefonszam` varchar(20) NOT NULL,
  `szak` varchar(80) NOT NULL,
  `allergia` varchar(255) DEFAULT NULL,
  `etel` varchar(255) DEFAULT NULL,
  `polomeret` varchar(3) NOT NULL,
  `kedd` tinyint(1) NOT NULL,
  `szerda` tinyint(1) NOT NULL,
  `csutortok` tinyint(1) NOT NULL,
  `pentek` tinyint(1) NOT NULL,
  `szombat` tinyint(1) NOT NULL,
  `egyeb` varchar(255) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `golyae` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `golyak`
--
ALTER TABLE `golyak`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telefonszam` (`telefonszam`);

--
-- AUTO_INCREMENT for table `golyak`
--
ALTER TABLE `golyak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
