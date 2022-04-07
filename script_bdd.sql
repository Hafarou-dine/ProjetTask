-- Base de données : task
-- USE utilisateurs;
-- DROP DATABASE tasks;
CREATE DATABASE tasks;
USE tasks;


-- Structure de la table cat
CREATE TABLE cat(
	 id_cat INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
	 name_cat VARCHAR(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Structure de la table task
CREATE TABLE task(
	 id_task INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	 name_task VARCHAR(50),
	 content_task TEXT,
	 date_task DATE,
	 validate_task TINYINT(1),
	 id_user INT,
	 id_cat INT
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Structure de la table user
CREATE TABLE utilisateur(
	 id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	 name_user VARCHAR(50),
	 first_name_user VARCHAR(50),
	 login_user VARCHAR(50),
	 mdp_user VARCHAR(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Contraintes pour la table `task`
ALTER TABLE task
ADD CONSTRAINT task_cat_FK 
FOREIGN KEY(id_cat) 
REFERENCES cat(id_cat);

ALTER TABLE task
ADD CONSTRAINT task_user_FK 
FOREIGN KEY(id_user) 
REFERENCES utilisateur(id_user); 

