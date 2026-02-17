CREATE DATABASE student_system;
USE student_system;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_number VARCHAR(20),
    full_name VARCHAR(100),
    email VARCHAR(100),
    department VARCHAR(100),
    phone VARCHAR(20),
    birth_date DATE
);
