<!-- Bootstrap Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">MyCollege Website</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <!-- Left-aligned nav items -->
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="abouts.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faculties.php">Faculties</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Academics
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="dcs.php">Department of Computer Science</a>
            <a class="dropdown-item" href="dc.php">Department of Commerce</a>
            <a class="dropdown-item" href="da.php">Department of Arts</a>
          </div>
        </li>
      </ul>

      <!-- Right-aligned search form -->
      <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>