<h2 align="center">Update Book</h2>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">

	<div class="container">
		<div class="jumbotron col-sm-8 get" id="uj">
     
      <div class="form-group row">
        <label class="col-sm-2 col-form-label"><b>Title:</b> </label>
         <div class="col-sm-10">
           <input type="text" class="form-control" id="title" name="title" value="<?= $viewmodel['title'];?>">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label"><b>Author:</b> </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="author" name="author" value="<?= $viewmodel['author'];?>">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label"><b>Genre:</b> </label>&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="genre" type="text" class="form-control col-md-3">
          <option value="<?php if($viewmodel['genre'] != ''){echo $viewmodel['genre'];} else { echo '';}?>"><?php if($viewmodel['genre'] != ''){echo $viewmodel['genre'];} else { echo '';}?></option>
          <option value="Poetry">Poetry</option>
          <option value="Fantasy">Fantasy</option>
          <option value="Novel">Novel</option>
          <option value="Philosophy">Philosophy</option>
          <option value="Drama">Drama</option>
          <option value="Romance">Romance</option>
          </select>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label"><b>Status:</b> </label>&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="status" type="text" class="form-control col-md-3">
          <option value="<?php if($viewmodel['status'] != ''){echo $viewmodel['status'];} else { echo '';}?>"><?php if($viewmodel['status'] != ''){echo $viewmodel['status'];} else { echo '';}?></option>
          <option value="Finished">Finished</option>
          <option value="Dropped">Dropped</option>
          <option value="Reading">Reading</option>
          <option value="Not Started">Not Started</option>
         </select> 
      </div>

     <input class="btn btn-sm btn-default float-right" type="submit" name="update" id="update" value="Sumbit">

    </div>
  </div>

</form>
