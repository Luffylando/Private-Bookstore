<body class="text-center">
   <form class="form-signin" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
     
      <h1 class="h3 mb-3 font-weight-normal">Please Register</h1><hr>

      
      <label class="sr-only">First name</label>
      <input type="text" class="form-control" placeholder="First name" name="first_name" required autofocus>

      <label class="sr-only">Last name</label>
      <input type="text" class="form-control" placeholder="Last name" name="last_name" required autofocus>

      <label class="sr-only">Email address</label>
      <input type="email" class="form-control" placeholder="Email address" name="email" required autofocus>

      <label class="sr-only">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Username" required>

      <label class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required><br>
  
      <input class="btn btn-lg btn-default btn-block" type="submit" value="Register" name="submit">

      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      
    </form>
  </body>
</html>
