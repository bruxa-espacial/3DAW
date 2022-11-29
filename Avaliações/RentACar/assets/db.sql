CREATE DATABASE fallscar;

CREATE TABLE clientes (
  id_cliente int(15) UNIQUE AUTO_INCREMENT,
  nome varchar(150) DEFAULT NULL,
  cpf int DEFAULT NULL,
  email varchar(70) DEFAULT NULL,
  telefone varchar(15) DEFAULT NULL,
  PRIMARY KEY (id_cliente)
);

CREATE TABLE automoveis (
    id_auto int(15) UNIQUE AUTO_INCREMENT,
    titulo varchar(100) DEFAULT NULL,
    imgurl varchar(100) DEFAULT NULL,
    quantPessoas int DEFAULT NULL,
    quantPortas int DEFAULT NULL,
    cor varchar(100) DEFAULT NULL,
    anoF varchar(100) DEFAULT NULL,
    combustivel varchar(100) DEFAULT NULL,
    tipomarcha varchar(100) DEFAULT NULL,
    arcondicionado varchar(100) DEFAULT NULL,
    preco int DEFAULT NULL,
    estatus varchar(100) DEFAULT NULL,
    localR varchar (3) DEFAULT NULL,
    PRIMARY KEY (id_auto)
); 

CREATE TABLE reservas (
  id_reserva int(15) UNIQUE AUTO_INCREMENT,
  id_cliente int(15),
  id_auto int(15),
  estatus varchar (15),
  datareserva DATE DEFAULT NULL,
  pagamento varchar(50) DEFAULT NULL,
  PRIMARY KEY (id_reserva),
  FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
  FOREIGN KEY (id_auto) REFERENCES automoveis(id_auto)
);
