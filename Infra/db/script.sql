CREATE DATABASE sistema_simples;

USE sistema_simples;

CREATE TABLE users(
    id INT AUTO_INCREMET PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO user (username, password) VALUES ('admin', '123456');