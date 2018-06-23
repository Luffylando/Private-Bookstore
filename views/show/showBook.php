<h2 align="center">Details about this book</h2><br><br>

	<div class="container">
		<div class="col-md-7 mx-auto" id="bs">
			

			<h5>Book ID: <?= $viewmodel['id']; ?></h5><hr>
			<h3>Title: <?= $viewmodel['title']; ?></h3>
			<h3>Author: <?= $viewmodel['author']; ?></h3>
			<h3>Genre: <?= $viewmodel['genre']; ?></h3>
			<h3>Status: <?= $viewmodel['status']; ?></h3><hr>
			<small>Created at: <?= $viewmodel['created_at']; ?></small><br>
			<small>Created by: <?= $viewmodel['username']; ?></small>

	       <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">

		       	<script type="text/javascript">
					function confirm_delete() {
					  return confirm('Are you sure you want to delete this Book?');
					}
					</script>

				<?php if(isset($_SESSION['is_logged_in'])) : ?>

		       	    <input onclick="return confirm_delete()" class="btn btn-default float-right text-danger" type="submit" name="delete" value="Delete Book">
		     
			     	<a class="btn btn-light float-right" id="eb" href="<?php ROOT_URL?>/Bookstore/show/update/<?= $viewmodel['id'];?>">Edit Book</a>

     			<?php endif; ?>
     
        </form>
				
		</div>
	</div>

		