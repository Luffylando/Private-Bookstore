<!DOCTYPE html>
<html>
<head>

  <!-- Bootstrap core CSS -->
    <link href="<?php ROOT_URL;?>/Bookstore/assets/css/bootstrap.css" rel="stylesheet">
  <!-- Custom styles for this template -->
    <link href="<?php ROOT_URL;?>/Bookstore/assets/css/style.css" rel="stylesheet">

    <title>Bookstore</title>

</head>

  <body>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
           <a class="navbar-brand" href="<?= ROOT_PATH?>"><b>Bookstore</b></a>
      
            <div class="collapse navbar-collapse" id="navbarCollapse">
          
            

                <?php if(isset($_SESSION['is_logged_in'])) : ?>
                      &nbsp; | &nbsp;
         <ul class="navbar-nav mr-auto">

                     <li class="nav-item active">
                      <a class="nav-link" href="<?= ROOT_PATH?>">Home</a>
                     </li>
                     <li class="nav-item active">
                       <a class="nav-link" href="<?= ROOT_PATH?>show">All Books</a>
                     </li>

                     <li class="nav-item active">
                       <a class="nav-link" href="<?= ROOT_PATH?>show/create">Add Books</a>
                     </li> 
        </ul>


       <div class="toolbar">

              <a class="nav-item active">Welcome <?= $_SESSION['user_data']['username'];?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <script type="text/javascript">
                function confirm_logout() {
                  return confirm('Are you sure you want to logout?');
                }
                </script>

              <a onclick="return confirm_logout()" href="<?= ROOT_URL; ?>/auth/logout" class="nav-item active" id="log">Logout</a>
     
        </div>

      <?php else: ?>
        
         <ul class="navbar-nav ml-auto">
            <div class="toolbar">
                <a class="btn btn-outline-light" href="<?= ROOT_URL; ?>/auth/register">Register</a>
                <a class="btn btn-outline-light" href="<?= ROOT_URL; ?>/auth/login">Login</a>
           </div>



    <?php endif; ?>
      
         </div>
      </div>
 </nav>

    <?php require($view); ?>

      <div class="container-dar">

       <?php Messages::display(); ?>

     </div>

  </body>
</html>

