CREATE TABLE `users` (

	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`first_name` VARCHAR(255) NOT NULL,
	`last_name` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL UNIQUE,
	`username` VARCHAR(255) NOT NULL UNIQUE,
	`password` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

INSERT INTO `users` (`first_name`, `last_name`, `email`, `username`, `password`) VALUES
('Auguste', 'Dupin', 'auguste@gmail.com', 'Ogist', 'sifra123');


CREATE TABLE books_ogist(

           `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
           `title` VARCHAR(255) NOT NULL,
           `author` VARCHAR(255) NOT NULL,
           `genre` ENUM('Philosophy', 'Novel', 'Drama', 'Romance', 'Adventure', 'Fantasy'),
           `status` ENUM('Finished', 'Not Started', 'Reading', 'Dropped'),
           `created_at` TIMESTAMP,
    	   `updated_at` TIMESTAMP,
    	   `username` VARCHAR(255),
    	   FOREIGN KEY (`username`) REFERENCES `users`(`username`)	
    	   )ENGINE = InnoDb; 

INSERT INTO books_ogist (`title`, `author`, `genre`, `status`, `username`) VALUES 
('The Republic', 'Plato', 'Philosophy', 'Finished', 'Ogist'),
('War and Peace', 'Leo N. Tolstoy', 'Novel', 'Finished', 'Ogist'),
('The Sorrows of Young Werther', 'J. W. Goethe', 'Novel', 'Finished', 'Ogist');
