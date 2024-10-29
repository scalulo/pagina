create database pagina_web;
create table cliente(
nombre varchar(45),
apellido varchar(45),
email varchar(45),
telefono int
);

create table botines(
idbotin int,
talle int,
tipo varchar(45),
img2 varchar(45),
img3 varchar(45),
img4 varchar(45),
img5 varchar(45),
foreign key (idbotin) references producto(id_producto)
);
create table bolso(
idbolso int ,
img2 varchar(45),
img3 varchar(45),
foreign key (idbolso) references producto(id_producto)

);
create table guantes(
talle int,
img2 varchar(45)
);
create table producto(
id_producto int primary key, 
precio varchar(45),
marca varchar(45),
nombre varchar(100),
descripcion varchar(1000),
img1 varchar(100),
categoria varchar(45)
);
delete from bolso where idbolso=9;


create table botines(
idbotin int,
talle int,
tipo varchar(45),
img2 varchar(45),
img3 varchar(45),
img4 varchar(45),
img5 varchar(45),
foreign key (idbotin) references producto(id_producto)
);
insert into botines values(5,40,"Envio Gratis para miembros", "/imagenes/botines/nikerosa.2.png","/imagenes/botines/nikerosa.3.png","/imagenes/botines/nikerosa.4.png","/imagenes/botines/nikerosa.5.png");
insert into producto values(12,900,"nike","Bolso3", "cheton",44,"/pagina/imagenes/botines/nikeblancos.webp","Bolsos");
insert into producto values(13,500,"nike","Bolso4", "piola",44,"/pagina/imagenes/botines/nikeblancos2.webp","bolsos");