-- Create a new database called 'userData'
CREATE DATABASE userData;

use userData;

CREATE TABLE users (

    username VARCHAR(50) NOT NULL,
    userpassword VARCHAR(255) NOT NULL,
    cost INT,

    PRIMARY KEY (username)
);


CREATE TABLE room (
    username VARCHAR(50),
    roomBooked VARCHAR(50),

    PRIMARY KEY (username),
    FOREIGN KEY (username) REFERENCES users(username)
);

CREATE TABLE food (
    username VARCHAR(50),
    foodname VARCHAR(50),
    foodcost INT,

    PRIMARY KEY (username),
    FOREIGN KEY (username) REFERENCES users(username)
);

CREATE TABLE goods (
    username VARCHAR(50),
    goodsname VARCHAR(50),
    goodscost INT,

    PRIMARY KEY (username),
    FOREIGN KEY (username) REFERENCES users(username)

);

