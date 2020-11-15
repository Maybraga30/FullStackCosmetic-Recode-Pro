-- create database bd_watercolor:

use bd_watercolor;

CREATE TABLE `bd_watercolor`.`produtos` (
  `idprodutos` INT NOT NULL AUTO_INCREMENT,
  `categorias` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(30) NOT NULL,
  `imagem` VARCHAR(255) NOT NULL,
  `descricao` VARCHAR(150) NOT NULL,
  `preco` DECIMAL(8,2) NOT NULL,
  `precofinal` DECIMAL(8,2) NOT NULL,
  PRIMARY KEY (`idprodutos`)
  );ENGINE=InnoDB AUTO_INCREMENT= 9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


insert into produto (categorias, nome, imagem, descricao, preco, preco_venda) values
  ("Maquiagens", "Rímel", "Imagens/r%C3%ADmel.jpg", "Rímel Maybeline", 40.00, 35.00),
  ("Maquiagens", "Delineador","Imagens/delineador-em-gel-belle-angel-aa30e491.jpg", "Delineador em gel Belle Angel", 35.00, 30.00),
  ("Maquiagens", "Paleta de sombra", "Imagens/paleta-hb-9979-01.jpg", "Paleta de sombras Ruby Rose", 45.00, 35.00),
  ("Maquiagens", "Batom", "Imagens/batom-payot.jpg", "Batom Rosa Payot", 25.00, 22.00),
  ("Maquiagens", "Pó Compacto", "Imagens/tractapo.jpg", "Pó Compacto Tracta", 29.00, 20.00),
  ("Perfumes", "Perfume", "Imagens/Diesel.jpg", "Perfume Masculino Diesel 80 ml", 390.00, 385.00),
  ("Perfumes", "Perfume", "Imagens/olympea-paco-rabanne-eau-de-parfum-perfume-feminino-30ml-.jpg", "Perfume Olympea - Paco Rabanne 50ml", 390.00, 370.00),
  ("Perfumes", "Perfume", "Imagens/nina.jpg", "Perfume Nina Ricci 50ml", 380.00, 350.00),
  ("Produtos para a pele", "Creme para o rosto ", "Imagens/davene.jpg", "Creme para o rosto Davene 50g", 40.00, 38.00),
  ("Produtos para a pele", "Creme para o corpo", "Imagens/cerave.jpg", "Creme para o corpo Cerave 200g", 40.00, 38.00),
  ("Produtos para os cabelos", "Creme de pentear", "Imagens/pantene.webp", "Creme pentear pantene 200 ml", 14.00, 12.00),
  ("Produtos para os cabelos", "Creme de tratamento", "Imagens/finalização-cabelos-cacheados-batalha-de-cremes-2.jpg", "Creme de tratamento Skala + Creme de pentear Salon Line", 39.00, 35.00),
  ("Produtos para os cabelos", "Creme de pentear", "Imagens/11623348535326.jpg", "Creme para o cabelo cicatri renov 50 ml", 12.00, 10.00);



CREATE TABLE pedidos (
  `idpedidos` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome_do_cliente` varchar(45) NOT NULL UNIQUE KEY,
  `endereco` varchar(80) NOT NULL,
  `telefone` varchar(18) NOT NULL,
  `nome_do_produto` varchar(45) NOT NULL,
  `valor_unitario` decimal(5,2) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `valor_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

insert into pedidos (nome_do_cliente, endereco, telefone, nome_do_produto, valor_unitario, quantidade, valor_total) values 
  ("Mateus Gomes", "Centro, Mesquita, RJ", "(21) 2323-2323", "Creme pentear pantene", 12.00, 2, 24.00),
  ("Roberta Cristina", "Bangu, RJ", "(21) 3234-2534", "Batom Rosa Payot", 22.00, 3, 66.00),
  ("Mirian Silveira", "Uberlândia, MG", "(31) 2794-5937", "Perfume Nina Ricci 50ml", 350.00, 1, 350.00),
  ("Michael Oliveira", "Capão Redonde, SP", "(11) 3675-9867", "Perfume Olympea - Paco Rabanne 50ml", 370.00, 1, 370.00),
  ("Bruna Silva", "Centro, Queimados, RJ", "(21) 2124-2526", "Delineador em gel Belle Angel", 30.00, 1, 30.00);
