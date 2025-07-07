<?php 
include("includes/loader.php"); 
include("includes/header.php"); 
include("includes/navbar.php"); 

require("admin/config/dbconfig.php");

$query = "SELECT * FROM faculty";
$query_run = mysqli_query($connection, $query);
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <img src="#" alt="Faculty picture" class="img-fluid mb-4" />
            <div class="card">
                <div class="card-body">
                    <?php if(mysqli_num_rows($query_run) > 0): ?>
                        <?php while($row = mysqli_fetch_assoc($query_run)): ?>
                            <h1><?= htmlspecialchars($row['name']) ?></h1>
                            <h5><?= htmlspecialchars($row['design']) ?></h5>
                            <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>
                            <!-- Add dynamic image if available -->
                            <?php if (!empty($row['image'])): ?>
                                <img src="<?= htmlspecialchars($row['image']) ?>" alt="Department image" class="img-fluid my-3" />
                            <?php endif; ?>
                            <h6>Visibility</h6>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <span class="text-danger">No faculty records found.</span>
                    <?php endif; ?>
                    <a href="#" class="btn btn-outline-primary mt-3">See more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>