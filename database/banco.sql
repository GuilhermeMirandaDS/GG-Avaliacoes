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

    FOREIGN KEY (ID_OBRA) REFERENCES obras (ID_OBRA)


    INSERT INTO obras(Nome, Lancamento, Autor, ID_CATEGORIA, Sinopse, ID_AVALIACAO, Foto, Tipo)
    VALUES ('The Lord of the Rings', '1978-06-24', 'J.R.R Tolk', 1, 'tanto faz', 3, 'elementos/gambito.webp', 2)

    INSERT INTO avaliacoes(QTD_ESTRELAS)
    VALUES (3)

    UPDATE TABLE avaliacoes SET TOTAL_ESTRELAS