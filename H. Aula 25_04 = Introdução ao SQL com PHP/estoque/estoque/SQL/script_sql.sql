CREATE TABLE `categoria` (
  `id_categoria` int(11) PRIMARY KEY AUTO_INCREMENT,
  `categoria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `categoria` (`categoria`) VALUES
('Acessórios'),
('Periféricos'),
('Software'),
('Cursos');

CREATE TABLE `fornecedor` (
  `id_fornecedor` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nome_fornecedor` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `fornecedor` (`nome_fornecedor`) VALUES
('Kabum'),
('EJ Software'),
('Rodrigues Cursos');

CREATE TABLE `usuarios` (
  `id_usuario` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nome_usuario` varchar(200) NOT NULL,
  `mail_usuario` varchar(150) NOT NULL,
  `senha_usuario` varchar(60) NOT NULL,
  `nivel_usuario` int(2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `numproduto` int(11) NOT NULL,
  `nomeproduto` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fornecedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `estoque` (`numproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES
(192283, 'Teclado Gamer', 'Periféricos', 32, 'Kabum'),
(62828, 'Mochila para Notebook', 'Acessórios', 50, 'Kabum'),
(999252, 'Windows 10 PRO', 'Software', 10, 'EJ Software');
