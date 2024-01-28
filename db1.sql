CREATE DATABASE IF NOT EXISTS Library_Database;

USE Library_Database;

CREATE TABLE users (
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL
);

create table booklist(
	Semester varchar(25) not null,
    Subject varchar(255) not null,
    Books varchar(255)
);