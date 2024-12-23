CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    ip VARCHAR(45),
    browser TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
