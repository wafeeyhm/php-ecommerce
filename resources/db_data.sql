-- Inserting Dummy Data into Users Table
INSERT INTO users (username, password, email, first_name, last_name)
VALUES
('john_doe', 'password123', 'john@example.com', 'John', 'Doe'),
('jane_smith', 'password456', 'jane@example.com', 'Jane', 'Smith'),
('alice_jones', 'password789', 'alice@example.com', 'Alice', 'Jones');

-- Inserting Dummy Data into Categories Table
INSERT INTO categories (name, description, parent_id)
VALUES
('Electronics', 'All kinds of electronics', NULL),
('Laptops', 'Laptops and notebooks', 1),
('Smartphones', 'Latest smartphones and accessories', 1),
('Home Appliances', 'Appliances for home use', NULL),
('Kitchen Appliances', 'Cooking and kitchen devices', 4);

-- Inserting Dummy Data into Products Table with Real-Life Images
INSERT INTO products (name, description, price, category_id, image_url)
VALUES
('MacBook Pro', 'Apple MacBook Pro 13-inch with M1 chip', 1299.99, 2, 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mbp-spacegray-select-202011?wid=1200&hei=630&fmt=jpeg&qlt=95&.v=1632948892000'),
('Dell XPS 13', 'Dell XPS 13-inch Ultrabook with 11th Gen Intel', 999.99, 2, 'https://th.bing.com/th/id/OIP.gEACCkqc3-RTPBb0_G8URwHaEc?rs=1&pid=ImgDetMain'),
('iPhone 13', 'Apple iPhone 13 with A15 Bionic chip', 799.99, 3, 'https://b2c-contenthub.com/wp-content/uploads/2021/09/iphone-13.jpg?quality=50&strip=all'),
('Samsung Galaxy S21', 'Samsung Galaxy S21 with Exynos 2100', 699.99, 3, 'https://th.bing.com/th/id/R.3182ec9381aaed9bbae8f16a8027aefc?rik=D36%2fHvoK6%2fxhJw&pid=ImgRaw&r=0'),
('Blender', 'High-speed blender for smoothies and juices', 99.99, 5, 'https://th.bing.com/th/id/OIP.KIiXBuAZW18zs7sUFZdBsQHaHa?rs=1&pid=ImgDetMain'),
('Microwave Oven', '700W Microwave oven for quick heating', 199.99, 5, 'https://i5.walmartimages.com/asr/a376214d-c5e8-4c80-ae4e-4697a0275933_1.c1ea5c142967ad6c290d5a21b11638a2.jpeg?odnWidth=1000&odnHeight=1000&odnBg=ffffff');

