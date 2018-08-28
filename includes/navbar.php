<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">Beer World.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
    </ul>
    
     
    <!-- Search -->
  <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
      <input class="form-control mr-sm-2" type="search" name="keywords" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
  <!--Signup & Signin icon -->
    <ul class="navbar-nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link" href="signup.php"><i class="fas fa-user-plus"></i> Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signin.php"><i class="fas fa-sign-in-alt"></i> Sign In</a>
      </li>
    </ul>
  </div>
</nav>
