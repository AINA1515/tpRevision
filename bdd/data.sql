
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