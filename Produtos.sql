-- create database fullstacosmetic:

use fullstackcosmetic;

CREATE TABLE produto (
  idproduto int NOT NULL AUTO_INCREMENT,
  categoria varchar(45) NOT NULL,
  nome varchar(20) NOT NULL,
  imagem varchar(255) NOT NULL,
  descricao varchar(150) NOT NULL,
  preco decimal(8,2) NOT NULL,
  precofinal decimal(8,2) NOT NULL,
  PRIMARY KEY (idproduto),
) ENGINE=InnoDB AUTO_INCREMENT= 9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci

insert into produto (categorias, nome, imagem, descricao, preco, preco_venda)
values ("Maquiagens", "Rímel", "Imagens/r%C3%ADmel.jpg", "Rímel Maybeline", 40.00, 35.00)

insert into produto (categorias, nome, imagem, descricao, preco, preco_venda)
values ("Maquiagens", "Delineador","Imagens/delineador-em-gel-belle-angel-aa30e491.jpg", "Delineador em gel Belle Angel", 35.00, 30.00)

insert into produto (categorias, nome, imagem, descricao, preco, preco_venda)
values ("Maquiagens", "Paleta de sombra", "Imagens/paleta-hb-9979-01.jpg", "Paleta de sombras Ruby Rose", 45.00, 35.00)

insert into produto (categorias, imagem, descricao, preco, preco_venda)
values ("Maquiagens", "Batom", "Imagens/batom-payot.jpg", "Batom Rosa Payot", 25.00, 22.00)

insert into produto (categorias, imagem, descricao, preco, preco_venda)
values ("Maquiagens", "Pó Compacto", "Imagens/tractapo.jpg", "Pó Compacto Tracta", 29.00, 20.00)

insert into produto (categorias, imagem, descricao, preco, preco_venda)
values ("Perfumes", "Perfume", "Imagens/Diesel.jpg", "Perfume Masculino Diesel 80 ml", 390.00, 385.00)

insert into produto (categorias, imagem, descricao, preco, preco_venda)
values ("Perfumes", "Perfume", "Imagens/olympea-paco-rabanne-eau-de-parfum-perfume-feminino-30ml-.jpg", "Perfume Olympea - Paco Rabanne 50ml", 390.00, 370.00)

insert into produto (categorias, imagem, descricao, preco, preco_venda)
values ("Perfumes", "Perfume", "Imagens/nina.jpg", "Perfume Nina Ricci 50ml", 380.00, 350.00)

insert into produto (categorias, imagem, descricao, preco, preco_venda)
values ("Produtos para a pele", "Creme para o rosto ", "Imagens/davene.jpg", "Creme para o rosto Davene 50g", 40.00, 38.00)

insert into produto (categorias, imagem, descricao, preco, preco_venda)
values ("Produtos para a pele", "Creme para o corpo", "Imagens/cerave.jpg", "Creme para o corpo Cerave 200g", 40.00, 38.00)

insert into produto (categorias, imagem, descricao, preco, preco_venda)
values ("Produtos para os cabelos", "Creme de pentear", "Imagens/pantene.webp", "Creme pentear pantene 200 ml", 14.00, 12.00)

insert into produto (categorias, imagem, descricao, preco, preco_venda)
values ("Produtos para os cabelos", "Creme de tratamento", "Imagens/finalização-cabelos-cacheados-batalha-de-cremes-2.jpg", "Creme de tratamento Skala + Creme de pentear Salon Line", 39.00, 35.00)

insert into produto (categorias, imagem, descricao, preco, preco_venda)
values ("Produtos para os cabelos", "Creme de pentear", "Imagens/11623348535326.jpg", "Creme para o cabelo cicatri renov 50 ml", 12.00, 10.00)