create database takalo;
use takalo;

create table user(
    id int primary key AUTO_INCREMENT,
    email varchar(250),
    username varchar(250),
    password varchar(250),
    avatar varchar(250),
    role varchar(250),
    created_at date
);

create table categories(
    id int primary key AUTO_INCREMENT,
    name varchar(250),
    created_at date
);

create table objets(
    id int primary key AUTO_INCREMENT,
    object_name varchar(250),
    description text,
    category_id int,
    user_id int,
    created_at date
);

create table objets_photo(
    id int primary key AUTO_INCREMENT,
    objet_id int,
    photo_url varchar(250)
);2

create table exchanges(
    id int primary key AUTO_INCREMENT,
    proposer_id int,
    receiver_id int,
    proposer_objet_id int,
    receiver_objet_id int,
    status varchar(250),
    created_at date
);

create table objets_history(
    id int primary key AUTO_INCREMENT,
    objet_id int,
    user_id int,
    exchanged_at date
);
