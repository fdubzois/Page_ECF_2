Hi, 

  Welcome in this little ReadMe for the création of the database needed for the project.

  We gonna créate them in MySql, you can use PhpMyAdmin for it or Enter the raw code for each i will give both solution.

  User Database : 

	- PhpMyAdmin : - Name of table : utilisateurs.	  - Number of column : 5.
		       - Name and type of column : - id, int, auto inc, primary key.
						   - mail, varchar(50), not null.
						   - password, varchar(50), not null.
						   - allergies, varchar(50).
						   - Guest_Number, int, not null.
						   - Security_Level, int, not null.
		       - Création first userfor admin with 2 in Security_Level (See ReadMe_Admin).


	- Raw code :

CREATE DATABASE Quai_Antique ;

USE Quai_Antique ;

CREATE TABLE utilisateurs (
	id int NOT NULL AUTO_INCREMENT,
	mail varchar(50) NOT NULL,
	password varchar(50) NOT NULL,
	allergies varchar(50),
	Guest_Number int NOT NULL,
	Security_Level int NOT NULL,
	PRIMARY KEY (id)
) ;

Admin user création (See ReadMe_Admin) : Insert INTO utilisateurs (mail, password, allergies, Guest_Number, Security_Level)
VALUES ('yourEmail','yourPassword','WhatYouWant','WhatYouWant','2');
