<!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary primary-color">

    <!-- Navbar brand  -->
    <a href="#" class="navbar-brand">MyCollege Website</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="myNav">
        <!-- Nav Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="#" class="nav-link">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="abouts.php" class="nav-link">About Us</a>
            </li>

            <li class="nav-item">
                <a href="faculties" class="nav-link">Faculties</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a href="#" class="dropdown-item">Department of Computer Science</a>
                    <a href="#" class="dropdown-item">Department of Commerce</a>
                    <a href="#" class="dropdown-item">Department of Arts</a>
                </div>
            </li>
        </ul>

        <form class="form-inline">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" />
            </div>
        </form>
    </div>

 </nav>