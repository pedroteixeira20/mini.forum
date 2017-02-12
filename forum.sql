-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Fev-2017 às 01:34
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `admin_user` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`admin_user`, `admin_password`) VALUES
('admin', 'ciber0987');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comment`
--

CREATE TABLE `comment` (
  `comment_name` varchar(30) NOT NULL,
  `comment_email` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `comment_id` int(11) NOT NULL,
  `comment_aprov` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comment`
--

INSERT INTO `comment` (`comment_name`, `comment_email`, `comment`, `comment_id`, `comment_aprov`) VALUES
('Pedro Teixeira', 'pedromiguel1496@gmail.com', 'As polÃ­ticas de imigraÃ§Ã£o de Trump poderÃ£o pÃ´r em risco tudo aquilo que conhecemos, e tenho a certeza de que irÃ£o prevalecer, mais cedo ou mais tarde.', 10, 1),
('JÃºlia Gabriela', 'julia.gabriela@gmail.com', 'Acho que o tribunal nÃ£o vai aprovar.', 12, 1),
('ConstanÃ§a Faria', 'constanca@gmail.com', 'Ã‰ provÃ¡vel que sejam aprovadas pelo tribunal.', 14, 1),
('Tiago Soares', 'tiago.soares@hotmail.com', 'Possivelmente.', 15, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
