<?php if (isset($_SESSION['alerts'])): ?>
    <?php foreach ($_SESSION['alerts'] as $alert): ?>
        <div class="alert alert-primary" role="alert">
            <?php echo $alert; ?>
        </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['alerts']); ?>
<?php endif; ?>