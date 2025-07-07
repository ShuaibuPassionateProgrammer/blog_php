<?php 
include("includes/loader.php");
include("includes/header.php");
include("includes/navbar.php"); 

require("admin/config/dbconfig.php");

$sql = "SELECT * FROM abouts";
$query = mysqli_query($connection, $sql);
?>

<div class="container py-5">
    <div class="row py-3">
        <div class="col-md-8">
            <div class="card">
                <img src="#" alt="About image" class="card-img-top" />
                <div class="card-body">
                    <?php if(mysqli_num_rows($query) > 0): ?>
                        <?php while($row = mysqli_fetch_assoc($query)): ?>
                            <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>
                            <h6><?= htmlspecialchars($row['subtitle']) ?></h6>
                            <p class="card-text"><?= nl2br(htmlspecialchars($row['description'])) ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <span class="text-center text-danger">No record found.</span><br />
                    <?php endif; ?>
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

<?php include("includes/footer.php"); ?>