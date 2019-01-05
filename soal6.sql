SELECT products.id AS ID, categories.name AS CategoryName, products.name AS ProductName 
    FROM products JOIN categories
    ON products.category_id = categories.id