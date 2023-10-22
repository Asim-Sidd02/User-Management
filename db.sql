
USE user_management;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    dob VARCHAR(10) NOT NULL, -- Change the data type to VARCHAR
    contact VARCHAR(15) NOT NULL,
    profile_image VARCHAR(255) NOT NULL
);
