CREATE TABLE cd (
	cod_cd int NOT NULL,
    titulo_cd VARCHAR(60) NOT NULL 
);

CREATE TABLE musica ( 
	cod_musica int NOT NULL, 
	titulo_musica varchar(60) NOT NULL, 
	duracao_musica SMALLINT 
);

CREATE TABLE cd_musica (
	cod INT NOT NULL,
    cod_cd INT NOT NULL,
    cod_musica INT NOT NULL
);

CREATE TABLE artista (
  	nome_real_art VARCHAR(60) NOT NULL,
    cod_art INT NOT NULL,
    nome_artistico VARCHAR(60)
);

CREATE TABLE compositor (
	cod_compositor INT NOT NULL,
    cod_art int NOT NULL
);

CREATE TABLE cantor (
    cod_cantor INT NOT NULL,
    cod_art INT NOT NULL
);

CREATE TABLE art_musica (
	cod INT NOT NULL,
    cod_art INT NOT NULL,
    cod_musica INT NOT NULL
);