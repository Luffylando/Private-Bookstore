<body class="text-center">
    <form class="form-signin" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
     
      <h1 class="h3 mb-3 font-weight-normal">Please Login</h1><hr>

      <label class="sr-only">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>

      <label class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required><br>

      <input class="btn btn-lg btn-default btn-block" type="submit" value="Login" name="submit">

      <footer class="mt-5 mb-3">&copy; 2017-2018</footer>
    </form>
  </body>
</html>
