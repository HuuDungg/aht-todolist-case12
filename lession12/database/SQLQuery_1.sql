create database aht
use aht
CREATE TABLE product(
    id int AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255),
    price INT,
    product_description VARCHAR(255),
    manufacturer VARCHAR(255)
)

INSERT INTO product (product_name, price, product_description, manufacturer)
VALUES
('Product 1', 100, 'This is a description of Product 1', 'Manufacturer A'),
('Product 2', 150, 'This is a description of Product 2', 'Manufacturer B'),
('Product 3', 200, 'This is a description of Product 3', 'Manufacturer C'),
('Product 4', 250, 'This is a description of Product 4', 'Manufacturer D'),
('Product 5', 300, 'This is a description of Product 5', 'Manufacturer E');

create TABLE blog(
    id int AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(250),
    teaser VARCHAR(250),
    content VARCHAR(350),
    created_at DATETIME
)

INSERT INTO blog (title, teaser, content, created_at) VALUES
('How to Learn PHP', 'A beginner\'s guide to PHP', 'PHP is a popular server-side scripting language...', NOW()),
('Mastering Laravel', 'Advanced techniques in Laravel', 'Laravel is a powerful PHP framework...', NOW()),
('Understanding MVC', 'Breaking down the MVC pattern', 'Model-View-Controller is a software design pattern...', NOW()),
('Introduction to MySQL', 'Getting started with MySQL', 'MySQL is a relational database management system...', NOW()),
('Building REST APIs', 'Learn how to create REST APIs', 'REST APIs are widely used for modern web applications...', NOW());

