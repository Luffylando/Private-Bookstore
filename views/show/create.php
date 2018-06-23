<h2 align="center">Add New Book</h2><br>

<form action="<?php ROOT_URL?>/Bookstore/show/create" method="post">

	<div class="container">
		<div class="jumbotron col-sm-8 get" id="cj">


      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Title: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="title">
        </div>
      </div>


      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Author: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="author">
        </div>
      </div>

      <div class="form-group row">
      <label class="col-sm-2 col-form-label">Genre: </label>&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="genre" type="text" class="form-control col-md-3">
        <option value=""></option>
        <option value="Poetry">Poetry</option>
        <option value="Fantasy">Fantasy</option>
        <option value="Novel">Novel</option>
        <option value="Philosophy">Philosophy</option>
        <option value="Drama">Drama</option>
        <option value="Romance">Romance</option>
        </select>
      </div>
  

      <div class="form-group row">
      <label class="col-sm-2 col-form-label">Status: </label>&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="status" type="text" class="form-control col-md-3">
        <option value=""></option>
        <option value="Finished">Finished</option>
        <option value="Dropped">Dropped</option>
        <option value="Reading">Reading</option>
        <option value="Not Started">Not Started</option>
       </select> 
      </div>


     <input class="btn btn-sm btn-default float-right" type="submit" name="create" id="create" value="Add Book">

   </div>
 </div>
</form>