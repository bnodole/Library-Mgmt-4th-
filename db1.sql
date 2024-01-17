CREATE DATABASE IF NOT EXISTS Library_Database;

USE Library_Database;

CREATE TABLE users (
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL
);