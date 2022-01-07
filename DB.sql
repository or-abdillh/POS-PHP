DROP TABLE IF EXISTS transactions;
DROP TABLE IF EXISTS items;


CREATE TABLE transactions (
transaction_id INT(10) AUTO_INCREMENT NOT NULL PRIMARY KEY,
item_id INT(15) NOT NULL,
transaction_id_txt VARCHAR(15) NOT NULL,
transaction_create_at VARCHAR(50) NOT NULL,
transaction_amount VARCHAR(30) NOT NULL,
transaction_of_number INT(15) NOT NULL);

CREATE TABLE items (
item_id INT(15) AUTO_INCREMENT NOT NULL PRIMARY KEY,
item_id_txt VARCHAR(15) NOT NULL,
item_name VARCHAR(50) NOT NULL,
item_price VARCHAR(30) NOT NULL,
create_at VARCHAR(50) NOT NULL,
last_modified VARCHAR(50) NOT NULL);

ALTER TABLE transactions ADD CONSTRAINT transactions_item_id_items_item_id FOREIGN KEY (item_id) REFERENCES items(item_id) ON DELETE CASCADE ON UPDATE CASCADE;