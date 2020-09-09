CREATE TABLE account(
    account_id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    PASSWORD VARCHAR(255) NOT NULL,
    PRIMARY KEY(account_id)
);

CREATE TABLE persoon(
    
    persoon_id INT NOT NULL AUTO_INCREMENT,
    first_name varchar(255) NOT NULL,
    insertion varchar(255),
    lastname varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    account_id INT NOT NULL,
    
    PRIMARY KEY (persoon_id),
    FOREIGN KEY (account_id) REFERENCES account(account_id)
    
);