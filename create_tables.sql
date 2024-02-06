/* Mysql */
CREATE TABLE Poeme (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    titre VARCHAR(255),
    auteur VARCHAR(255),
    contenu TEXT,
    date_creation DATETIME
);