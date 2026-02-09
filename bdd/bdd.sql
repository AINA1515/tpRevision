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

INSERT INTO user (email, username, password, avatar, role, created_at) VALUES
('admin@example.com', 'admin', 'admin123', '', 'admin', NOW()),
('Rakoto@gmail.com', 'Rakoto', 'rakoto123', '', 'user', NOW()),
('Rasolo@gmail.com', 'Rasolo', 'rasolo123', '', 'user', NOW());

INSERT INTO categories (name, created_at) VALUES
('Electronics', NOW()),
('Books', NOW()),
('Clothing', NOW());

INSERT INTO objets (object_name, description, category_id, user_id, created_at) VALUES
('Laptop', 'A powerful gaming laptop', 1, 2, NOW()),
('Smartphone', 'A latest model smartphone', 1, 3, NOW()),
('Novel', 'A best-selling novel', 2, 2, NOW()),
('Cookbook', 'A popular cookbook', 2, 3, NOW()),
('T-shirt', 'A stylish t-shirt', 3, 3, NOW()),
('Headphones', 'Noise-cancelling headphones', 1, 2, NOW());

INSERT INTO exchanges (proposer_id, receiver_id, proposer_objet_id, receiver_objet_id, status, created_at) VALUES
(2, 3, 1, 4, 'pending', NOW()),
(3, 2, 5, 6, 'accepted', NOW());

INSERT INTO objets_history (objet_id, user_id, exchanged_at) VALUES
(1, 2, NOW()),
(4, 3, NOW()),
(5, 3, NOW()),
(6, 2, NOW());