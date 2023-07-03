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
                        while($row = mysqli_fetch_array($query_run)) {
                            ?>
                            <h1><?php echo $row['name']; ?></h1>
                            <h5><?php echo $row['design']; ?></h5>
                            <p><?php echo $row['description']; ?></p>
                            <img src="uploads/<?php echo $['images']; ?>" alt="An image of the department" />
                            <h6>Visibility</h6> 
                            <?php
                        }
                    } else {
                        echo "<span class='text-danger'>No any faculty.</span>";
                    }
                    ?>

                    
                    <a href="#" class="btn btn-ouline-primary">See more</a>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>