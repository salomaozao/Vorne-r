-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Abr-2021 às 02:09
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vorne`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `vr_ativos`
--

CREATE TABLE `vr_ativos` (
  `ativo_produto` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ativo_tamanho_pp` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ativo_tamanho_p` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ativo_tamanho_m` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ativo_tamanho_g` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ativo_tamanho_gg` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ativo_tamanho_xgg` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ativo_modelo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vr_ativos`
--

INSERT INTO `vr_ativos` (`ativo_produto`, `ativo_tamanho_pp`, `ativo_tamanho_p`, `ativo_tamanho_m`, `ativo_tamanho_g`, `ativo_tamanho_gg`, `ativo_tamanho_xgg`, `ativo_modelo`) VALUES
('1456', 'gg', '', '', '', '', '', 'Street'),
('005', 'SIM', 'SIM', 'SIM', 'SIM', 'SIM', 'SIM', '1345'),
('5', 'SIM', 'SIM', 'SIM', 'SIM', 'SIM', 'SIM', '1345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vr_categorias`
--

CREATE TABLE `vr_categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cat_slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cat_cupom_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vr_categorias`
--

INSERT INTO `vr_categorias` (`cat_id`, `cat_nome`, `cat_slug`, `cat_cupom_id`) VALUES
(1, 'Geral', 'geral', 0),
(2, 'Camisas', 'categoria-camisa', 0),
(3, 'Calças', 'categoria-calcas', 0),
(4, 'Tênis', 'categoria-tenis', 0),
(5, 'Sapatos', 'categoria-sapatos', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vr_clientes`
--

CREATE TABLE `vr_clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_sobrenome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cli_numero` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cli_bairro` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cidade` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cli_uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cpf` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cli_ddd` int(2) NOT NULL,
  `cli_celular` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cli_email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cli_pass` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cli_data_nasc` date NOT NULL,
  `cli_data_cad` date NOT NULL,
  `cli_hora_cad` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vr_clientes`
--

INSERT INTO `vr_clientes` (`cli_id`, `cli_nome`, `cli_sobrenome`, `cli_endereco`, `cli_numero`, `cli_bairro`, `cli_cidade`, `cli_uf`, `cli_cep`, `cli_cpf`, `cli_ddd`, `cli_celular`, `cli_email`, `cli_pass`, `cli_data_nasc`, `cli_data_cad`, `cli_hora_cad`) VALUES
(20, 'Joao', 'mano', 'Rua rua maderira', '66', 'Kilou', 'Atibaia', 'sp', '12944040', '11111111111', 11, '971716755', 'victor08silva08@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-11-30', '2020-12-19', '23:49:59'),
(21, 'Joao', 'kkkkkkkkkkkkkkkk', 'Rua rua maderira', '66', 'Kilou', 'Atibaia', 'sp', '12944040', '11111188111', 11, '987876544', 'victor08@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-12-24', '2020-12-20', '08:47:08'),
(22, 'Joao', 'Yuri', 'Rua rua maderira', '66', 'Kilou', 'Atibaia', 'AP', '12944040', '1111115', 11, '971716755', 'personalvitor.rrdevs@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-01-08', '2021-01-04', '23:23:37'),
(23, 'NADJA VIEIRA DA', 'CARDOSO', 'Rua da imprensa', '999', 'eeeeeeeee', 'Atibaia', 'SP', '12944720', '11188992221', 66, '987485297', 'vitinsuav2@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-04-29', '2021-04-05', '16:08:50'),
(24, 'NADJA VIEIRA DA', 'CARDOSO', 'Rua da imprensa', '000', 'eeeeeeeee', 'Atibaia', 'SP', '12944720', '13311677890', 66, '1198621173', 'silva08@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-04-13', '2021-04-05', '16:59:43'),
(25, 'NADJA VIEIRA DA', 'CARDOSO', 'Rua da imprensa', '000', 'eeeeeeeee', 'Atibaia', 'SP', '12944720', '13311677899', 66, '1198621173', 'sil08@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-04-13', '2021-04-05', '17:00:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vr_cupons`
--

CREATE TABLE `vr_cupons` (
  `cupom_id` int(11) NOT NULL,
  `cupom_codigo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cupom_tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cupom_valor` int(11) NOT NULL,
  `cupom_ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vr_imagens`
--

CREATE TABLE `vr_imagens` (
  `img_id` int(11) NOT NULL,
  `img_nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img_pro_id` int(11) NOT NULL,
  `img_pasta` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vr_imagens`
--

INSERT INTO `vr_imagens` (`img_id`, `img_nome`, `img_pro_id`, `img_pasta`) VALUES
(4, '201219234442nqq-1036-014-zoom1.jpg.jpg', 17, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vr_kits`
--

CREATE TABLE `vr_kits` (
  `kit_id` int(11) NOT NULL,
  `kit_desconto` int(11) NOT NULL,
  `kit_ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vr_pedidos`
--

CREATE TABLE `vr_pedidos` (
  `ped_id` int(11) NOT NULL,
  `ped_data` date NOT NULL,
  `ped_hora` time NOT NULL,
  `ped_cliente` int(11) NOT NULL,
  `ped_valor` double(9,2) NOT NULL,
  `ped_cod` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ped_ref` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pag_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pag_forma` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pag_tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pag_codigo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `ped_frete_valor` double(9,2) DEFAULT 0.00,
  `ped_frete_tipo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vr_pedidos`
--

INSERT INTO `vr_pedidos` (`ped_id`, `ped_data`, `ped_hora`, `ped_cliente`, `ped_valor`, `ped_cod`, `ped_ref`, `ped_pag_status`, `ped_pag_forma`, `ped_pag_tipo`, `ped_pag_codigo`, `ped_frete_valor`, `ped_frete_tipo`) VALUES
(0, '2020-12-24', '13:51:12', 20, 100.00, '201224131020', '201224131020', '', '', '', '', NULL, NULL),
(0, '2020-12-24', '13:54:33', 20, 100.00, '201224133120', '201224133120', '', '', '', '', NULL, NULL),
(0, '2020-12-24', '13:56:02', 20, 100.00, '201224130020', '201224130020', '', '', '', '', NULL, NULL),
(0, '2020-12-30', '14:01:03', 20, 100.00, '201230140020', '201230140020', '', '', '', '', NULL, NULL),
(0, '2020-12-30', '14:02:13', 20, 100.00, '201230140020', '201230140020', '', '', '', '', NULL, NULL),
(0, '2020-12-30', '14:03:13', 20, 100.00, '201230141120', '201230141120', '', '', '', '', NULL, NULL),
(0, '2020-12-30', '14:03:42', 20, 100.00, '201230144020', '201230144020', '', '', '', '', NULL, NULL),
(0, '2020-12-30', '14:04:23', 20, 100.00, '201230142120', '201230142120', '', '', '', '', NULL, NULL),
(0, '2020-12-30', '14:06:09', 20, 100.00, '201230140720', '201230140720', '', '', '', '', NULL, NULL),
(0, '2020-12-30', '14:07:36', 20, 100.00, '201230143420', '201230143420', '', '', '', '', NULL, NULL),
(0, '2020-12-30', '14:08:07', 20, 100.00, '201230140520', '201230140520', '', '', '', '', NULL, NULL),
(0, '2020-12-30', '14:09:01', 20, 100.00, '201230145920', '201230145920', '', '', '', '', NULL, NULL),
(0, '2020-12-30', '14:22:21', 20, 200.00, '201230141920', '201230141920', '', '', '', '', NULL, NULL),
(0, '2021-01-06', '01:29:35', 20, 348.00, '201230141920', '201230141920', '', '', '', '', NULL, NULL),
(0, '2021-01-06', '01:30:38', 20, 348.00, '201230141920', '201230141920', '', '', '', '', NULL, NULL),
(0, '2021-01-06', '01:55:28', 20, 612.00, '210106012620', '210106012620', '', '', '', '', NULL, NULL),
(0, '2021-01-06', '02:00:52', 20, 612.00, '210106012620', '210106012620', '', '', '', '', NULL, NULL),
(0, '2021-01-06', '02:25:13', 20, 624.00, '210106012620', '210106012620', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vr_pedidos_itens`
--

CREATE TABLE `vr_pedidos_itens` (
  `item_id` int(11) NOT NULL,
  `item_produto` int(11) NOT NULL,
  `item_valor` double(9,2) NOT NULL,
  `item_qtd` int(6) NOT NULL,
  `item_ped_cod` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vr_pedidos_itens`
--

INSERT INTO `vr_pedidos_itens` (`item_id`, `item_produto`, `item_valor`, `item_qtd`, `item_ped_cod`) VALUES
(104, 17, 100.00, 5, '201219233420'),
(107, 17, 100.00, 1, '201220095521'),
(108, 17, 100.00, 1, '201220092621'),
(109, 17, 100.00, 1, '201220091120'),
(110, 17, 100.00, 1, '201224131020'),
(112, 17, 100.00, 1, '201224133120'),
(113, 17, 100.00, 1, '201224130020'),
(114, 17, 100.00, 1, '201230140020'),
(115, 17, 100.00, 1, '201230140020'),
(116, 17, 100.00, 1, '201230141120'),
(117, 17, 100.00, 1, '201230144020'),
(118, 17, 100.00, 1, '201230142120'),
(119, 17, 100.00, 1, '201230140720'),
(120, 17, 100.00, 1, '201230143420'),
(121, 17, 100.00, 1, '201230140520'),
(122, 17, 100.00, 1, '201230145920'),
(123, 17, 100.00, 2, '201230141920'),
(124, 17, 100.00, 3, '201230141920'),
(125, 20, 12.00, 4, '201230141920'),
(126, 17, 100.00, 3, '201230141920'),
(127, 20, 12.00, 4, '201230141920'),
(128, 17, 100.00, 6, '210106012620'),
(129, 20, 12.00, 1, '210106012620'),
(130, 17, 100.00, 6, '210106012620'),
(131, 20, 12.00, 1, '210106012620'),
(132, 17, 100.00, 6, '210106012620'),
(133, 20, 12.00, 2, '210106012620');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vr_produtos`
--

CREATE TABLE `vr_produtos` (
  `pro_id` int(11) NOT NULL,
  `pro_categoria` int(11) NOT NULL,
  `pro_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_valor` double(9,2) NOT NULL,
  `pro_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_estoque` int(11) NOT NULL,
  `pro_modelo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_tamanho` int(11) NOT NULL,
  `pro_ref` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_ativo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `pro_frete_free` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não',
  `pro_cupom_id` int(11) NOT NULL,
  `pro_kit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vr_produtos`
--

INSERT INTO `vr_produtos` (`pro_id`, `pro_categoria`, `pro_nome`, `pro_desc`, `pro_valor`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_tamanho`, `pro_ref`, `pro_ativo`, `pro_frete_free`, `pro_cupom_id`, `pro_kit_id`) VALUES
(37, 1, 'lolotilo', '', 12.00, '210405192305images.jfif.jfif', 'lolotilo', 5, 'Street', 0, '80', 'S', 'Não', 0, 0),
(38, 1, 'lolotilo', '', 12.00, '210405192418images.jfif.jfif', 'lolotilo', 5, 'Street', 0, '80', 'S', 'Não', 0, 0),
(42, 2, 'Camisa 2020', '', 12.00, '210405192749images.jfif.jfif', 'camisa-2020', 5, '1345', 0, '', 'S', 'Não', 0, 0),
(46, 3, 'camisa de hoje', '', 12.00, '210406110229slide2.jpg.jpg', 'camisa-de-hoje', 5, '1345', 0, '5', 'S', 'Não', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vr_user`
--

CREATE TABLE `vr_user` (
  `user_id` int(11) NOT NULL,
  `user_nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_pw` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vr_user`
--

INSERT INTO `vr_user` (`user_id`, `user_nome`, `user_email`, `user_pw`) VALUES
(1, 'Rafael Gomes', 'Treinamentodebot@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `vr_categorias`
--
ALTER TABLE `vr_categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Índices para tabela `vr_clientes`
--
ALTER TABLE `vr_clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- Índices para tabela `vr_cupons`
--
ALTER TABLE `vr_cupons`
  ADD PRIMARY KEY (`cupom_id`);

--
-- Índices para tabela `vr_imagens`
--
ALTER TABLE `vr_imagens`
  ADD PRIMARY KEY (`img_id`);

--
-- Índices para tabela `vr_kits`
--
ALTER TABLE `vr_kits`
  ADD PRIMARY KEY (`kit_id`);

--
-- Índices para tabela `vr_pedidos_itens`
--
ALTER TABLE `vr_pedidos_itens`
  ADD PRIMARY KEY (`item_id`);

--
-- Índices para tabela `vr_produtos`
--
ALTER TABLE `vr_produtos`
  ADD PRIMARY KEY (`pro_id`);

--
-- Índices para tabela `vr_user`
--
ALTER TABLE `vr_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `vr_categorias`
--
ALTER TABLE `vr_categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `vr_clientes`
--
ALTER TABLE `vr_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `vr_cupons`
--
ALTER TABLE `vr_cupons`
  MODIFY `cupom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vr_imagens`
--
ALTER TABLE `vr_imagens`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `vr_kits`
--
ALTER TABLE `vr_kits`
  MODIFY `kit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vr_pedidos_itens`
--
ALTER TABLE `vr_pedidos_itens`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT de tabela `vr_produtos`
--
ALTER TABLE `vr_produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `vr_user`
--
ALTER TABLE `vr_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
