-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2021 at 07:51 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `callin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `evidencija`
--

DROP TABLE IF EXISTS `evidencija`;
CREATE TABLE IF NOT EXISTS `evidencija` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vrsta_zahtjeva` varchar(255) NOT NULL,
  `opis_zahtjeva` text NOT NULL,
  `status_zahtjeva` varchar(255) NOT NULL,
  `obavijest` varchar(255) NOT NULL,
  `operater_ev` varchar(255) NOT NULL,
  `operater_ob` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evidencija`
--

INSERT INTO `evidencija` (`id`, `ime`, `prezime`, `email`, `vrsta_zahtjeva`, `opis_zahtjeva`, `status_zahtjeva`, `obavijest`, `operater_ev`, `operater_ob`) VALUES
(3, 'Mato', 'Matić', 'matomatic12@gmail.com', 'Upit', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'Izvršen', 'telefon', 'Pero', 'Pero'),
(4, 'Pero', 'Sarić', 'peropero@outlook.com', 'Žalba', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'U obradi', 'e-mail', 'Sanja', 'Nikola'),
(5, 'Ana', 'Ivkić', 'anaiv@gmail.com', 'Prijava kvara', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.', 'U obradi', 'e-mail', 'Sanja', 'Nikola');

-- --------------------------------------------------------

--
-- Table structure for table `zaposlenici`
--

DROP TABLE IF EXISTS `zaposlenici`;
CREATE TABLE IF NOT EXISTS `zaposlenici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zaposlenici`
--

INSERT INTO `zaposlenici` (`id`, `username`, `lozinka`) VALUES
(1, 'peroperic', 'pero1234'),
(2, 'sanjasanjic', 'sanja1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
