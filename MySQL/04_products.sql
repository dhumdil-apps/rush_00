CREATE TABLE IF NOT EXISTS products (
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255) UNIQUE,
    catId INT(11) DEFAULT 0,
    stock INT NOT NULL DEFAULT 0,
    price INT NOT NULL DEFAULT 0,
    description TEXT,
    picture LONGBLOB,
    Foreign key (catId) references categories(id)
);