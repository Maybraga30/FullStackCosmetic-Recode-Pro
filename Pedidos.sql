use fullstackcosmetic;

CREATE TABLE pedidos (
  idpedidos int NOT NULL AUTO_INCREMENT,
  nomedo_cliente varchar(45) NOT NULL,
  endereco varchar(80) NOT NULL,
  telefone varchar(18) NOT NULL,
  nome_do_produto varchar(45) NOT NULL,
  valor_unitario decimal(5,2) NOT NULL,
  quantidade int(10) NOT NULL,
  valor_total decimal(10,2) NOT NULL,
  PRIMARY KEY (idpedidos),
  UNIQUE KEY nome_do_cliente_UNIQUE (nome_do_cliente)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci

insert into pedidos (nome_do_cliente, endereco, telefone, nome_do_produto, valor_unitario, quantidade, valor_total)
values ("Mateus Gomes", "Centro, Mesquita, RJ", "(21) 2323-2323", "Creme pentear pantene", 12.00, 2, 24.00)

insert into pedidos (nome_do_cliente, endereco, telefone, nome_do_produto, valor_unitario, quantidade, valor_total)
values ("Roberta Cristina", "Bangu, RJ", "(21) 3234-2534", "Batom Rosa Payot", 22.00, 3, 66.00)

insert into pedidos (nome_do_cliente, endereco, telefone, nome_do_produto, valor_unitario, quantidade, valor_total)
values ("Mirian Silveira", "Uberlândia, MG", "(31) 2794-5937", "Perfume Nina Ricci 50ml", 350.00, 1, 350.00)

insert into pedidos (nome_do_cliente, endereco, telefone, nome_do_produto, valor_unitario, quantidade, valor_total)
values ("Michael Oliveira", "Capão Redonde, SP", "(11) 3675-9867", "Perfume Olympea - Paco Rabanne 50ml", 370.00, 1, 370.00)

insert into pedidos (nome_do_cliente, endereco, telefone, nome_do_produto, valor_unitario, quantidade, valor_total)
values ("Bruna Silva", "Centro, Queimados, RJ", "(21) 2124-2526", "Delineador em gel Belle Angel", 30.00, 1, 30.00)