<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary primary-color">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"
            >Disabled</a
          >
        </li>
      </ul>
      <form class="d-flex input-group w-auto">
        <input
          type="search"
          class="form-control"
          placeholder="Type query"
          aria-label="Search"
        />
        <button
          data-mdb-ripple-init
          class="btn btn-outline-primary"
          type="button"
          data-mdb-ripple-color="dark"
        >
          Search
        </button>
      </form>
    </div>
  </div>
</nav>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary primary-color">
    <a href="index.php" class="navbar-brand">MyCollege Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="myNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="index.php" class="nav-link">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a href="abouts.php" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
                <a href="faculties.php" class="nav-link">Faculties</a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a href="dcs.php" class="dropdown-item">Department of Computer Science</a>
                    <a href="dc.php" class="dropdown-item">Department of Commerce</a>
                    <a href="da.php" class="dropdown-item">Department of Arts</a>
                </div>
            </li>
        </ul>

        <form class="form-inline" action="search.php" method="get">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search" aria-label="Search" />
            </div>
        </form>
    </div>
</nav>