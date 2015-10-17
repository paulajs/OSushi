SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Bestil_Bord`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `reservationer`
--

CREATE TABLE IF NOT EXISTS `reservationer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `tlf` varchar(32) COLLATE utf8_danish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `dato` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time` varchar(16) COLLATE utf8_danish_ci NOT NULL,
  `pers` int(11) NOT NULL,
  `comments` text COLLATE utf8_danish_ci NOT NULL,
  `best_nr` varchar(32) COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=5 ;
