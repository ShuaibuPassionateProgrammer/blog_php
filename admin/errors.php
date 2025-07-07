<?php if (!empty($errors)) : ?>
    <div class="alert alert-danger text-center" role="alert">
        <?php foreach ($errors as $error) : ?>
            <p class="mb-1"><?= htmlspecialchars($error); ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>