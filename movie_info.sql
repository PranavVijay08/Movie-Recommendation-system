-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2020 at 09:33 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie_info`
--

DROP TABLE IF EXISTS `movie_info`;
CREATE TABLE IF NOT EXISTS `movie_info` (
  `mname` varchar(150) NOT NULL,
  `director` text NOT NULL,
  `movie_id` varchar(30) NOT NULL,
  `language` text NOT NULL,
  `year` year(4) NOT NULL,
  `rating` float NOT NULL,
  `noofratings` int(11) NOT NULL,
  `description` text NOT NULL,
  `duration` int(11) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`movie_id`),
  UNIQUE KEY `name` (`mname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `movie_info`
--

INSERT INTO `movie_info` (`mname`, `director`, `movie_id`, `language`, `year`, `rating`, `noofratings`, `description`, `duration`, `img`) VALUES
('Avengers Endgame', 'Russo Brothers', '1', 'English', 2019, 8.5, 635347, 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos actions and restore balance to the universe.', 181, 'C:\\Users\\prasr\\Pictures\\iwp-movies\\avengers-endgame.jpeg'),
('Joker', 'Todd Phillips', '2', 'English', 2019, 8.7, 578877, 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.', 122, 'C:\\Users\\prasr\\Pictures\\iwp-movies\\Joker_(2019_film)_poster.jpg'),
('Parasite', 'Bong Jong Ho', '3', 'English', 2019, 8.6, 293831, 'A poor family, the Kims, con their way into becoming the servants of a rich family, the Parks. But their easy life gets complicated when their deception is threatened with exposure.', 132, 'C:\\Users\\prasr\\Pictures\\iwp-movies\\parasite.jpg'),
('1917', 'Sam Mendes', '4', 'English', 2019, 8.4, 205694, 'April 6th, 1917. As a regiment assembles to wage war deep in enemy territory, two soldiers are assigned to race against time and deliver a message that will stop 1,600 men from walking straight into a deadly trap.', 119, 'C:\\Users\\prasr\\Pictures\\iwp-movies\\1917.jpg'),
('The Irishman', 'Martin Scorsese', '5', 'English', 2019, 8, 252763, 'A mob hitman recalls his friend Jimmy Hoffa.', 209, ''),
('Once Upon a Time... in Hollywood', 'Quentin Tarantino', '6', 'English', 2019, 7.7, 400071, 'A faded television actor and his stunt double strive to achieve fame and success in the film industry during the final years of Hollywood\'s Golden Age in 1969 Los Angeles.', 161, ''),
('Ad Astra', 'James Gray', '7', 'English', 2019, 6.6, 147993, 'Astronaut Roy McBride undertakes a mission across an unforgiving solar system to uncover the truth about his missing father and his doomed expedition that now, 30 years later, threatens the universe.', 123, ''),
('Uncut Gems', 'Benny Safdie, Josh Safdie', '8', 'English', 2019, 7.6, 112943, 'With his debts mounting and angry collectors closing in, a fast-talking New York City jeweler risks everything in hope of staying afloat and alive.', 135, ''),
('Little Women', 'Greta Gerwig', '9', 'English', 2019, 8, 66919, 'Jo March reflects back and forth on her life, telling the beloved story of the March sisters - four young women each determined to live life on their own terms.', 135, ''),
('Marriage Story', 'Noah Baumbach', '10', 'English', 2019, 8, 182788, 'Noah Baumbach\'s incisive and compassionate look at a marriage breaking up and a family staying together.', 137, ''),
('The Lighthouse', 'Robert Eggers', '11', 'English', 2019, 7.7, 79509, 'Two lighthouse keepers try to maintain their sanity whilst living on a remote and mysterious New England island in the 1890s.', 109, ''),
('Knives Out', 'Rian Johnson', '12', 'English', 2019, 8, 205149, 'A detective investigates the death of a patriarch of an eccentric, combative family.\r\n', 131, ''),
('Ford v Ferrari', 'James Mangold', '13', 'English', 2019, 8.2, 157296, 'American car designer Carroll Shelby and driver Ken Miles battle corporate interference and the laws of physics to build a revolutionary race car for Ford in order to defeat Ferrari at the 24 Hours of Le Mans in 1966.', 152, ''),
('Toy Story 4', 'Josh Cooley', '14', 'English', 2019, 7.8, 161577, 'When a new toy called \"Forky\" joins Woody and the gang, a road trip alongside old and new friends reveals how big the world can be for a toy.', 100, ''),
('Jojo Rabbit', 'Taika Waititi', '15', 'English', 2019, 8, 149419, 'A young boy in Hitler\'s army finds out his mother is hiding a Jewish girl in their home.\r\n', 108, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
