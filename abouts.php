<?php include("includes/header.php"); ?>

<?php include("includes/navbar.php"); ?>

<div class="container py-5">
    <div class="row py-3">
        <div class="col-md-8">
            <div class="card">
                <img src="#" alt="..." class="card-img-top">
                <div class="card-body">

                    <?php
                    require("admin/dbconfig.php");

                    $sql = "SELECT * FROM abouts";
                    $query = mysqli_query($connection, $sql);

                    if(mysqli_num_rows($query) > 0) {
                        while($row = mysqli_fetch_assoc($query)) {
                            echo $row['title'];
                            echo $row['subtitle'];
                            echo $row['description'];
                            echo $row['links'];
                        }
                    }
                    else
                    {
                        echo "<span class='text-center text-danger'>No record found.</span><br />";
                    }
                    ?>

                    <h5 class="card-title">About My Website</h5>
                    <h6>Sub Title</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk on...</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Notice</h5>
                    <h6>Sub Title</h6>
                    <p class="card-text">This is created by me Shuaibu (Passionate Programmer)</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>