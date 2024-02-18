CREATE DATABASE IF NOT EXISTS Library_Database;

USE Library_Database;

CREATE TABLE IF NOT EXISTS users  (
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS booklist(
	Semester varchar(25) not null,
    Subject varchar(255) not null,
    Books varchar(255)
);

CREATE TABLE IF NOT EXISTS requested_booklist(
    ID INTEGER NOT NULL,
    Email varchar(255) NOT NULL,
    Semester varchar(25) NOT NULL,
    Subject varchar(255) NOT NULL,
    Book varchar(255) NOT NULL,
    Status varchar(255) NOT NULL
);