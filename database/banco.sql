CREATE DATABASE ggavaliacoes


CREATE TABLE categoria (
    ID_CATEGORIA INT AUTO_INCREMENT PRIMARY KEY,
    Categoria Varchar(25)
)

CREATE TABLE avaliacoes (
    ID_AVALIAÇÃO INT AUTO_INCREMENT PRIMARY KEY,
    QTD_ESTRELAS INT(5),
    Review text
)

CREATE TABLE obras (
    ID_OBRA INT AUTO_INCREMENT PRIMARY KEY,
    Nome Varchar(50),
    Lançamento Date,
    Autor Varchar(30),
    ID_CATEGORIA INT,
    FOREIGN KEY (ID_CATEGORIA) REFERENCES categoria(ID_CATEGORIA),
    Sinopse text,
    ID_AVALIAÇÃO INT,
    FOREIGN KEY (ID_AVALIAÇÃO) REFERENCES avaliacoes(ID_AVALIAÇÃO)
)