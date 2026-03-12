CREATE DATABASE IF NOT EXISTS sistema_login DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE sistema_login;

CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(150) NOT NULL,
  cpf VARCHAR(20) NOT NULL,
  email VARCHAR(200) NOT NULL UNIQUE,
  senha_hash VARCHAR(255) NOT NULL,
  termos_aceito TINYINT(1) NOT NULL DEFAULT 0,
  novidades TINYINT(1) NOT NULL DEFAULT 0,
  criado_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  INDEX (cpf)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE USER 'sistema_user'@'localhost' IDENTIFIED BY 'lorenasenai';

GRANT ALL PRIVILEGES ON sistema_login.* TO 'sistema_user'@'localhost';

FLUSH PRIVILEGES;



select * from usuarios

delete from usuarios where id= "1"