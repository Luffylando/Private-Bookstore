<h2 align="center"><b>Book list</b></h2>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	
		<div name="sort" class="form-group-sort row">
	    <input class="btn btn-default" name="sort" type="submit" value="Sort Books by">&nbsp;&nbsp;&nbsp;&nbsp;
	    <select name="sortBy" type="text">
	      <option name ='' value=""></option>
	      <option name ='sort_id' value="id">Id</option>
	      <option name ='title' value="title">Title</option>
	      <option name ='author' value="author">Author</option>
		 <!--   <option name ='genre' value="genre">Genre</option> -->

	     <!--  <option name ='status' value="status">Status</option> -->
	      <!-- <option name ='created_at' value="created_at">Create Date</option> -->
	      </select>
	    </div><br>


		<?php if(isset($_SESSION['is_logged_in'])): ?>
		

				<div class="container">
					<div class="row">
		
		<?php foreach($viewmodel as $item) : ?>

		
			<div class="col-md-4">
				
				<div id="okvir">
					<h6>Book ID: <?= $item['id'];?></h6><hr>
					<h6>Author: <?= $item['author'];?></h6>
					<h6>Title: <?= $item['title'];?></h6>
					<p><a class="btn btn-sm btn-light float-right" href="<?php ROOT_PATH?>/Bookstore/show/showBook/<?= $item['id'];?>">See Details</a></p>
			    </div><br><br>
		   </div>

		<?php endforeach; ?>
				</div>
			</div>

		<?php endif;?>
</form>
