<?php include("includes/header.php"); ?>
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <div class="row justify-content-center">
            <div class="col-md-12 card p-4">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3 text-center">
                        <h2>BLOG ADMIN</h2>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="input form-control" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="input form-control" placeholder="Password" name="password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" name="login">
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php include("includes/footer.php"); ?>