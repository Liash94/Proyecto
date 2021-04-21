CREATE DATABASE candc_rent_a_car;

USE candc_rent_a_car;

CREATE TABLE usuarios(
    id INT(255) auto_increment not null,
    nombre VARCHAR(100) not null,
    apellidos VARCHAR (255),
    DNI VARCHAR (255) not null,
    email VARCHAR (255) not null,
    rol VARCHAR(15),
    password VARCHAR(255) not null,
    telefono int(15) not null,

    CONSTRAINT pk_usuarios PRIMARY KEY(Id),
    CONSTRAINT uq_email UNIQUE(email)

)ENGINE=InnoDb;

CREATE TABLE categorias(
    id INT(255) auto_increment not null,
    nombre VARCHAR(100) not null,

    CONSTRAINT pk_categorias PRIMARY KEY (id)
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(null, 'Turismos');
INSERT INTO categorias VALUES(null, 'Furgonetas');
INSERT INTO categorias VALUES(null, 'Camiones');
INSERT INTO categorias VALUES(null, 'Motocicletas');

CREATE TABLE vehiculos(
    
    id int(255) auto_increment not null,
    categoria_id INT(255) not null,
    matricula varchar(100) not null,
    precio FLOAT (100,2) not null,
    marca VARCHAR (255),
    modelo VARCHAR (255) not null,    
    stock int(255) not null,
    imagen VARCHAR(255),
   
    CONSTRAINT pk_vehiculos PRIMARY KEY(id),
    CONSTRAINT fk_vehiculos_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
    
)ENGINE=InnoDb;


CREATE TABLE reserva(
    id int(255) auto_increment not null,
    id_usuarios int (255) not null,
    id_vehiculos int(255) not null,
    coste float(200,2) not null,
    Fecha_reserva date,
    estado VARCHAR(20) not null,

    CONSTRAINT pk_reserva PRIMARY KEY(Id),
    CONSTRAINT fk_reserva_usuarios FOREIGN KEY(id_usuarios) REFERENCES usuarios(id),    
    CONSTRAINT fk_reserva_vehiculos FOREIGN KEY(id_vehiculos) REFERENCES vehiculos(id)

)ENGINE=InnoDb;