<?php

class AuthModel extends Model
{

	public function register(){

		if(isset($_POST['submit'])){

			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			// losa je funkcija md5, nauci password_hash();  $password = md5($post['password']);
			$user = $_POST['username'];

            $this->query("CREATE TABLE books_{$user}(

            	id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
            	title VARCHAR(255),
            	author VARCHAR(255),
            	genre ENUM('Philosophy', 'Novel', 'Drama', 'Romance', 'Adventure', 'Fantasy', 'Stories'),
            	status ENUM('Finished', 'Not Started', 'Reading', 'Dropped'),
            	created_at TIMESTAMP,
    			updated_at TIMESTAMP,
    			username VARCHAR(255),
    			FOREIGN KEY (username) REFERENCES users(username)	
    			)ENGINE = InnoDb; 
    			");

            $this->execute();
            
			$this->query("INSERT INTO users (first_name, last_name, email, username, password) VALUES (:email, :first_name, :last_name, :username, :password)");

			$this->bind(':first_name', $post['first_name']);
			$this->bind(':last_name', $post['last_name']);
			$this->bind(':email', $post['email']);
			$this->bind(':username', $post['username']);
			$this->bind(':password', $post['password']);
			$this->execute();

			//verify

			if($this->lastInsertId()){

				//redirect
				header('Location: ' . ROOT_URL . '/auth/login');

		} else {

			echo "FAIL!";
		}
	}
}


	public function login(){

		
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		//$password = md5($post['password']);

		if(isset($_POST['submit'])){
			$this->query("SELECT * FROM users WHERE username = :username AND password = :password");

			$this->bind(':username', $post['username']);
			$this->bind(':password', $post['password']);
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(

					"id" => $row['id'],
					"username" => $row['username'],
					"email" => $row['email'],
					
						);

				header('Location: ' . ROOT_URL . '/home');
    						
			} else {

				echo "<div class='alert alert-danger col-md-5 mx-auto'>Wrong username or password. Please try again.</div>";
			}
		}
		return;	
	}
}

