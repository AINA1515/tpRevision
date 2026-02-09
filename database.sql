createdb -U postgres firstMvc;
psql -U postgres -d firstMvc;

create table produits(
    id serial primary key ,
    nom varchar(100) not null,
    description text,
    image varchar(255),
    prix decimal(10,2) not null
);

insert into produits (nom, description, image, prix) values
('Produit 1', 'Description du produit 1', '1.jpg', 19.99),
('Produit 2', 'Description du produit 2', '2.jpg', 29.99),
('Produit 3', 'Description du produit 3', '3.jpg', 39.99);