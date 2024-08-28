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
('Dell XPS 13', 'Dell XPS 13-inch Ultrabook with 11th Gen Intel', 999.99, 2, 'https://i.dell.com/sites/csimages/Master_Imagery/all/xps-13-9305-laptop-campaign-hero-504x350-ng.psd'),
('iPhone 13', 'Apple iPhone 13 with A15 Bionic chip', 799.99, 3, 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone13-og-202203?wid=1200&hei=630&fmt=jpeg&qlt=95&.v=1645022803161'),
('Samsung Galaxy S21', 'Samsung Galaxy S21 with Exynos 2100', 699.99, 3, 'https://images.samsung.com/is/image/samsung/p6pim/levant/galaxy-s21/gallery/levant-galaxy-s21-5g-g991-sm-g991bzahmea-thumb-368448128?$160_160_PNG$'),
('Blender', 'High-speed blender for smoothies and juices', 99.99, 5, 'https://cdn.shopify.com/s/files/1/0084/6512/4577/products/BLSTPB-WBL_1400x1400.jpg?v=1636743563'),
('Microwave Oven', '700W Microwave oven for quick heating', 199.99, 5, 'https://images-na.ssl-images-amazon.com/images/I/71r7t%2BhErhL._AC_SL1500_.jpg');

