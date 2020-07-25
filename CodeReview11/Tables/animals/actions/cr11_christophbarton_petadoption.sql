-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Jul 2020 um 16:50
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_christophbarton_petadoption`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `animals`
--

CREATE TABLE `animals` (
  `animalId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `location` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `hobbys` varchar(255) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `contactnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `animals`
--

INSERT INTO `animals` (`animalId`, `name`, `location`, `adress`, `description`, `type`, `age`, `hobbys`, `userEmail`, `contactnumber`) VALUES
(2, 'Peter', 'Vienna', 'Wehlistraße', 'whitecat', 'small', '12', 'eating', 'ChristophBarton@gmx.at', 2147483647),
(3, 'Miauzi', 'Vienna', 'Griegstraße', 'blackcat', 'small', '12', 'sleeping', 'MartinZmatlik@gmx.at', 2147483647),
(4, 'Bandit', 'Vienna', 'Wehlistraße', 'whitecat', 'small', '12', 'miauz', 'TheodorOtto@gmx.at', 2147483647),
(5, 'Felix', 'Vienna', 'Heinestraße', 'browncat', 'small', '12', 'miauz', 'Transit@gmx.at', 676454410),
(6, 'Simba', 'Vienna', 'Parkweg', 'orangecat', 'small', '12', 'miauing', 'Miau@gmx.at', 2147483647),
(7, 'Leo', 'Vienna', 'Sandweg', 'whitedog', 'large', '12', 'sleeping', 'Wuffwuff@gmx.at', 2147483647),
(8, 'Max', 'Vienna', 'Landernenweg', 'blackdog', 'large', '12', 'sleeping', 'Dog@gmx.at', 2147483647),
(9, 'Rocky', 'Vienna', 'Stranhausweg', 'browndog', 'large', '12', 'sleeping', 'Austrian@gmx.at', 676454410),
(10, 'Sammy', 'Vienna', 'Phalweg', 'brownhorse', 'large', '12', 'sleeping', 'test@gmx.at', 2147483647),
(11, 'Bella', 'Vienna', 'Transitweg', 'greensnake', 'small', '12', 'sleeping', 'JohnDoe@gmx.at', 676454410),
(12, 'Tauros', 'Vienna', 'wehlistraße', 'black bull', 'senior', '12', 'looking angry', 'tester@gmx.at', 0),
(13, 'sarah', 'Vienna', 'wehlistraße', 'black bull', 'senior', '12', 'looking happy', 'writeme@gmx.at', 12121),
(14, 'black tauros', 'Vienna', 'wehlistraße', 'black bull', 'senior', '30', 'eating', 'ChristophBarton@gmx.at', 2147483647),
(15, 'nana', 'Vienna', 'wehlistraße', 'black tauros', 'senior', '24', 'eating', 'ChristophBarton@gmx.at', 214300);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `date_of_birth`, `active`) VALUES
(1, 'Christoph', 'Barton', '2020-07-11', 0),
(2, 'Martin ', 'Zmatlik', '2019-12-12', 0),
(3, 'Chandler', 'Bing', '2020-07-03', 0),
(4, 'Tony', 'Stark', '2020-07-11', 0),
(5, 'Susanne', 'Barton', '2020-07-02', 0),
(6, 'Max', 'Mustermann', '2020-07-03', 0),
(7, 'Theodor', 'Otto', '2020-08-06', 0),
(8, 'Maria', 'Theresa', '2018-02-16', 0),
(9, 'Marie', 'Curie', '2020-01-18', 0),
(10, 'Arnold', 'Schwarzennegger', '2020-07-03', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `status` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `status`) VALUES
(1, 'Christoph Barton', 'ChristophBarton@gmx.at', 'cf506e905d06d7cd1078de6a35b69c7911215781dfec89da27a017d2192a5235', 'admin'),
(2, 'Christoph Barton', 'Brigitte.Barton@gmx.at', 'cf506e905d06d7cd1078de6a35b69c7911215781dfec89da27a017d2192a5235', 'user'),
(3, 'Martin Zmatlik', 'SoftwareTrading@gmx.at', '9b3289a385a5301eea0c04a06fde98bc542113ab4ed24c47c9b9771984869a31', 'user'),
(4, 'Brigitte Barton', 'BrigitteBarton@gmx.at', '0e8c211c86b0847f2d945f58d1f4e4fb951604a8d5ee2d7e1242b5b399b109ec', 'user'),
(5, 'Martin', 'Martin@gmx.at', 'cf506e905d06d7cd1078de6a35b69c7911215781dfec89da27a017d2192a5235', 'user'),
(6, 'Christoph Barton', 'test@gmx.at', 'cf506e905d06d7cd1078de6a35b69c7911215781dfec89da27a017d2192a5235', 'user');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`animalId`);

--
-- Indizes für die Tabelle `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `animals`
--
ALTER TABLE `animals`
  MODIFY `animalId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT für Tabelle `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
