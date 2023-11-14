INSERT INTO categoria (Categoria)
VALUES
('Ação'),
('Aventura'),
('Comédia'),
('Drama'),
('Romance'),
('Fantasia'),
('Suspense'),
('Terror')


INSERT INTO avaliacoes (QTD_ESTRELAS,Review)
VALUES
(1,'Muito Ruim'),
(2,'Ruim'),
(3,'Ok'),
(4,'Bom'),
(5,'Muito Bom'),
(4, '"Review do usuário"')

INSERT INTO obras (Nome, Lançamento, Autor, ID_CATEGORIA, Sinopse, ID_AVALIAÇÃO, Foto)
VALUES
('Chainsaw Man', '2022/10/12', 'Tatsuki Fujimoto', 1, 'Denji tem um sonho simples: viver uma vida feliz e pacífica, passando um tempo com uma garota de quem ele goste. Porém, isso está muito longe da realidade, já que Denji é forçado pela yakuza a matar demônios para pagar suas dívidas astronômicas. Usando seu demônio de estimação, Pochita, como arma, ele está pronto para fazer qualquer coisa por um pouco de dinheiro. Infelizmente, ele é assassinado por um demônio contratado pela yakuza. No entanto, em uma virada inesperada nos acontecimentos, Pochita se funde com o cadáver de Denji e concede a ele os poderes de uma serra elétrica. Agora capaz de transformar partes de seu corpo em motosserras, um Denji revivido, usa suas novas habilidades para acabar com os seus inimigos de maneira rápida e brutal.', 5, 'Populares/chainsaw.webp')