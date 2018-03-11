CREATE TABLE IF NOT EXISTS invoice_history (
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    invoiceID INT(11),
	prodId INT(11),
    prodCount INT(11) DEFAULT 0,
    prodPrice INT NOT NULL DEFAULT 0,
    Foreign key (prodId) references products(id),
    Foreign key (invoiceId) references invoices(id)
);