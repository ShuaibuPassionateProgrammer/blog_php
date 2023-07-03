<?php include("includes/header.php"); ?>

<?php include("includes/navbar.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img src="#" alt="Dummy picture">
            <div class="card">
                <div class="card-body">

                    <?php
                    require("admin/dbconfig.php");

                    $query = "SELECT * FROM faculty";
                    $query_run = mysqli_query($connection, $query);

                    if(mysqli_num_rows($query_run) > 0) {
                        // faculty found
                    } else {
                        echo "<span class='text-danger'>No any faculty.</span>";
                    }
                    ?>

                    <h1>Faculty Example</h1>
                    <h5>Dept Example</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam, incidunt.</p>
                    <img src="#" alt="An image of the department" />
                    <h6>Visibility</h6> 
                    <a href="#" class="btn btn-ouline-primary">See more</a>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>