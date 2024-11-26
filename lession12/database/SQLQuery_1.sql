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
