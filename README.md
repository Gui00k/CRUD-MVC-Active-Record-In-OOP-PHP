# CRUD-MVC-Active-Record-In-OOP-PHP-With-Composer


A simple crud made in OOP, using the MVC model, and composer, to run the code, download or clone, use composer update, create a database, which connects with PDO, a users table, with three columns, id (auto incriment) , first name, last name, here is a sql example to use \n

create table users (
   id int(11) NOT NULL AUTO_INCREMENT,
   firstName VARCHAR(250),
   lastName VARCHAR(250),
   PRIMARY KEY (id)

);

the rest of the querys needed, are in the code logic, made with prepared statements for better securance 
