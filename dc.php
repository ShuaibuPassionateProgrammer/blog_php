<?php 
$departmentName = "Commerce";
include("includes/loader.php");
include("includes/header.php");
include("includes/navbar.php"); 
?>

<div class="container py-5">
    <h1>Department of <?= htmlspecialchars($departmentName) ?></h1>
    <p>This is the Department of <?= htmlspecialchars($departmentName) ?> page.</p>
</div>

<?php include("includes/footer.php"); ?>