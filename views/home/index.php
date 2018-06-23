<div align="center">


<?php if(isset($_SESSION['is_logged_in'])){

			 echo "<h1><b>Welcome to your private Bookstore " . $_SESSION['user_data']['username'] . "</b></h1>";

		} else {

			
			echo "<h1><b>Welcome to the private Bookstore application.</b></h1>";
		}
		?>
		<br><hr>

		<?php if(!isset($_SESSION['is_logged_in'])){

		echo "<h2> <b>Please register to get started with building your own private Bookstore.</b></h2><br>";
	} 
?>

</div>

<div class="container" align="center">

<h5><b>Keep track of the books you read, you dropped while reading, you currently<br>reading and the books you haven't yet started reading.</b></h5>
