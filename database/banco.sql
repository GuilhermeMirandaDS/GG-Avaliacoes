CREATE TABLE categoria (
    ID_CATEGORIA INT AUTO_INCREMENT PRIMARY KEY,
    Categoria Varchar(25)
)

CREATE TABLE avaliacoes (
    ID_AVALIACAO INT AUTO_INCREMENT PRIMARY KEY,
    ID_OBRA INT,
    Usuario varchar(30),
    QTD_AVALIACOES INT,
    TOTAL_ESTRELAS INT,
    QTD_ESTRELAS INT(5),
    Review text
)

CREATE TABLE obras (
    ID_OBRA INT AUTO_INCREMENT PRIMARY KEY,
    Nome Varchar(50),
    Lancamento Date,
    Autor Varchar(30),
    ID_CATEGORIA INT,
    FOREIGN KEY (ID_CATEGORIA) REFERENCES categoria(ID_CATEGORIA),
    Sinopse text,
    ID_AVALIACAO INT,
    FOREIGN KEY (ID_AVALIACAO) REFERENCES avaliacoes(ID_AVALIACAO),
    Foto varchar(255),
    Tipo INT
)

    ALTER TABLE avaliacoes
    ADD CONSTRAINT ID_OBRA FOREIGN KEY (ID_OBRA) REFERENCES obras (ID_OBRA)



/*inserts*/


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

INSERT INTO obras (Nome, Lancamento, Autor, ID_CATEGORIA, Sinopse, ID_AVALIACAO, Foto, Tipo)
VALUES
('Chainsaw Man', '2022/10/12', 'Tatsuki Fujimoto', 1, 'Denji tem um sonho simples: viver uma vida feliz e pacífica, passando um tempo com uma garota de quem ele goste. Porém, isso está muito longe da realidade, já que Denji é forçado pela yakuza a matar demônios para pagar suas dívidas astronômicas. Usando seu demônio de estimação, Pochita, como arma, ele está pronto para fazer qualquer coisa por um pouco de dinheiro. Infelizmente, ele é assassinado por um demônio contratado pela yakuza. No entanto, em uma virada inesperada nos acontecimentos, Pochita se funde com o cadáver de Denji e concede a ele os poderes de uma serra elétrica. Agora capaz de transformar partes de seu corpo em motosserras, um Denji revivido, usa suas novas habilidades para acabar com os seus inimigos de maneira rápida e brutal.', 5, 'populares/chainsaw.webp', 1)


    INSERT INTO obras(Nome, Lancamento, Autor, ID_CATEGORIA, Sinopse, ID_AVALIACAO, Foto, Tipo)
    VALUES ('The Lord of the Rings', '1978-06-24', 'J.R.R Tolk', 1, 'tanto faz', 3, 'elementos/gambito.webp', 2)

    INSERT INTO avaliacoes(QTD_ESTRELAS)
    VALUES (3)

    UPDATE TABLE avaliacoes SET TOTAL_ESTRELAS