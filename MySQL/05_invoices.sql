CREATE TABLE IF NOT EXISTS invoices (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    userId int(11) NOT NULL,
    created DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    Foreign key (userId) references users(id)
);