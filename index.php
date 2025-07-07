<?php 
include("includes/loader.php"); 
include("includes/header.php"); 
include("includes/navbar.php"); 
include("includes/carousel.php"); 
?>

<div class="container py-5">
    <div class="row">
        <?php
        $cards = [
            ['title' => 'Our Vision', 'text' => 'This is created by Passionate Programmer'],
            ['title' => 'Our Mission', 'text' => 'This is created by Passionate Programmer'],
            ['title' => 'Our Values', 'text' => 'This is created by Passionate Programmer'],
        ];
        foreach ($cards as $card) : ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3><?= htmlspecialchars($card['title']) ?></h3>
                        <p><?= htmlspecialchars($card['text']) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2>Welcome to My College Website</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, tempore.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>Notices</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, tempore.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>