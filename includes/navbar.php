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
                <a href="about.php" class="nav-link">About Us</a>
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