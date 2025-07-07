<!-- Required Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-sm">
  <div class="container-fluid">
    <!-- Branding -->
    <a class="navbar-brand fw-bold" href="index.php">MyCollege</a>

    <!-- Toggler/collapsible button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarContent">
      <!-- Left-aligned links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="index.php" aria-current="page">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="abouts.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faculties.php">Faculties</a>
        </li>

        <!-- Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="academicsDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Academics
          </a>
          <ul class="dropdown-menu" aria-labelledby="academicsDropdown">
            <li><a class="dropdown-item" href="dcs.php">Computer Science</a></li>
            <li><a class="dropdown-item" href="dc.php">Commerce</a></li>
            <li><a class="dropdown-item" href="da.php">Arts</a></li>
          </ul>
        </li>
      </ul>

      <!-- Right-aligned search form -->
      <form class="d-flex" role="search" action="search.php" method="get">
        <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>