<?php
class ShowModel extends Model 
{

	public function index(){

		$username = $_SESSION['user_data']['username'];
		$this->query("SELECT * FROM books_{$username} ORDER BY created_at DESC");
		$rows = $this->resultSet();
		if(empty($rows)){

			echo "<h1 id='no-books'>No Books Added</h1><br>";

		}

		if(!isset($_POST['sortBy'])){
			$username = $_SESSION['user_data']['username'];
			//SELECT * FROM books ORDER BY title ASC LIMIT 0, 5
			//SELECT * FROM books_{$users_username}
			//SELECT * FROM books_ WHERE users_username = '".$users_username."'  ORDER BY created_at DESC
			$this->query("SELECT * FROM books_{$username} ORDER BY id DESC");
			$rows = $this->resultSet();
			return $rows;

			} elseif (isset($_POST['sortBy'])){
		 	   $sortBy = $_POST['sortBy'];
		    switch ($sortBy) {
		        case 'id':

			        	$username = $_SESSION['user_data']['username'];
						$this->query("SELECT * FROM books_{$username} ORDER BY id ASC");

						$rows1 = $this->resultSet();
						return $rows1;           
			            break;

				case 'title':

			       		$username = $_SESSION['user_data']['username'];
			            $this->query("SELECT * FROM books_{$username} ORDER BY title ASC");
						$rows1 = $this->resultSet();
						return $rows1;
						break;

		        case 'author':

			       		$username = $_SESSION['user_data']['username'];
			        	$this->query("SELECT * FROM books_{$username} ORDER BY author ASC");
						$rows1 = $this->resultSet();
						return $rows1;
			        	break;

		        default:
		            	
		            	$username = $_SESSION['user_data']['username'];
						$this->query("SELECT * FROM books_{$username} ORDER BY created_at DESC");
						$rows = $this->resultSet();
						return $rows;
						break;
		   			}
				}
			} 




	public function showBook(){
	
			//delete function

					if(isset($_POST['delete'])){

						$username = $_SESSION['user_data']['username'];
						$id = $_GET['id'];
						$pdoQuery = "DELETE FROM books_{$username} WHERE id = {$id}";
						$pdoResult = $this->dbh->prepare($pdoQuery);
						$pdoExec = $pdoResult->execute(array("$id"=>$id));

						if($pdoExec){

							$location = ROOT_URL . '/show';
							header("Location: " . $location);
						
						} else {
							echo "FAIL";
						}
					}

			//Show Book

				$id = $_GET['id'];
				$username = $_SESSION['user_data']['username'];

				$this->query("SELECT * FROM books_{$username} WHERE id = '$id'"); 
				$rows = $this->single();
				return $rows;

			}



	public function create(){

			

			if(isset($_POST['create'])){

				if($_POST['title'] == '' || $_POST['author'] == '' || $_POST['genre'] == '' || $_POST['status'] == ''){

					Messages::setMsg('Please fill all fields.', 'error');
					return;

				} else {



						$title = $_POST['title'];
						$author = $_POST['author'];
						$genre = $_POST['genre'];
						$status = $_POST['status'];
						$username = $_SESSION['user_data']['username'];

					  	$query = ("INSERT INTO books_{$username} (title, author, genre, status, username) VALUES ('$title', '$author', '$genre', '$status', '$username')");

					  	$pdoResult = $this->dbh->prepare($query);
				  		$pdoExec = $pdoResult->execute();
		  		   

		  	
		  					if($pdoExec){
					  				    
								   $location = ROOT_URL . "/show";  
								    header("Location: " . $location);
								 } else {

								    echo "FAIL";
									}
								}
							}
						}


	
	public function update(){	

		$username = $_SESSION['user_data']['username'];

			if(isset($_POST['update'])){

				$author = $_POST['author'];     			                                
				$title = $_POST['title'];
				$genre = $_POST['genre'];
				$status = $_POST['status'];
				$id = $_GET['id'];


				 
				  $pdoQuery = "UPDATE books_{$username} SET author = '$author', title = '$title', genre = '$genre', status = '$status' WHERE id = '$id'";

				  $pdoResult = $this->dbh->prepare($pdoQuery);
				  $pdoExec = $pdoResult->execute(array("$id"=>$id));

				  if($pdoExec){
					
				    $location = ROOT_URL . '/show';
				    header("Location: " . $location);
				  } else {
				    echo "FAIL";
				 			}
						}

					$id = $_GET['id'];

					$this->query("SELECT * FROM books_{$username} WHERE id = $id");
					$rows = $this->single();
					return $rows;
				}
			}

			
		
	