-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jun-2022 às 02:32
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tecnologia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Perfil` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Senha` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `Nome`, `Perfil`, `Email`, `Senha`) VALUES
(1, 'Alan', 'Alann', 'alan@gmail.com', '12345'),
(2, 'Italo', 'Italo123', 'italo@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `autor` varchar(40) NOT NULL,
  `datas` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `titulo`, `imagem`, `subtitulo`, `texto`, `autor`, `datas`) VALUES
(1, 'Primeiro teste', '0033fe3cc4633252f5a2eb45da63e137.jpg', 'testando', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur viverra nibh at commodo. Etiam dignissim fermentum metus eu venenatis. Sed aliquam congue molestie. Nunc sodales eros fringilla libero lobortis accumsan. Mauris consectetur facilisis libero in varius. Quisque condimentum diam sit amet nisi tristique, quis imperdiet eros pretium. Praesent ac sollicitudin magna. Donec sed semper tellus. Curabitur a interdum turpis. Nunc ultrices diam ut erat egestas, nec luctus libero tincidunt.\r\n\r\nFusce eget lectus volutpat, pretium odio sed, euismod leo. In ullamcorper rutrum fermentum. Praesent vitae ante at dolor tempor placerat ac at eros. Aliquam tincidunt, dolor at suscipit ultricies, velit metus faucibus turpis, id vestibulum libero augue eu mauris. Proin ac lorem semper, porttitor purus id, volutpat ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed arcu purus. Nam vel lacus orci. Cras vulputate nunc risus. Morbi volutpat dictum ligula, accumsan hendrerit ante viverra congue. Donec scelerisque interdum magna non blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In vulputate ipsum libero, eget venenatis nisl convallis id.\r\n\r\nNulla malesuada auctor rutrum. Sed tincidunt arcu id quam tempor, et ultricies dolor aliquet. Suspendisse iaculis ultrices dignissim. Nunc tristique ut justo ac pharetra. Nullam suscipit arcu nulla, vel fermentum ex malesuada aliquam. Donec volutpat, velit vitae volutpat mollis, erat nunc vehicula lorem, quis pellentesque turpis sem a lectus. Integer mollis turpis nec commodo pretium. In libero mi, iaculis nec magna eget, lobortis vestibulum lectus.\r\n\r\nSed vitae quam vulputate, hendrerit felis ac, venenatis turpis. Cras nec semper felis. Praesent euismod rhoncus ex, eget gravida nisi luctus et. Vivamus nec pretium ligula. Duis eu nisi a turpis fringilla viverra nec quis nisl. Donec pulvinar convallis tincidunt. Nam viverra rhoncus nisi, a rhoncus magna facilisis sed.\r\n\r\nDonec in lorem nec nulla suscipit pellentesque nec ut dolor. Sed bibendum tincidunt maximus. Donec consectetur lorem eleifend enim aliquet porttitor. Duis et commodo nulla, nec condimentum enim. Morbi dignissim metus eget imperdiet cursus. Sed tincidunt porttitor turpis id auctor. Morbi nec iaculis mi, vitae facilisis dolor. Quisque vehicula, velit id viverra pretium, mi dui gravida arcu, at congue est mauris ac neque. Donec at facilisis velit. Proin commodo vestibulum est, eu elementum orci aliquet non.', 'Italo123', '2022-06-23 21:20:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios_sec`
--

CREATE TABLE `comentarios_sec` (
  `cid` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios_sec`
--

INSERT INTO `comentarios_sec` (`cid`, `uid`, `date`, `message`) VALUES
(1, 'Italo123', '2022-06-23 21:26:25', 'oi');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `comentarios_sec`
--
ALTER TABLE `comentarios_sec`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `comentarios_sec`
--
ALTER TABLE `comentarios_sec`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
