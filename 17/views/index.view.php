<?php require('partials/header.php'); ?>

    <h1>Home</h1>

    <!-- for: $statement->fetchAll(PDO::FETCH_CLASS) -->
    <h2><?= '$statement' ?>->fetchAll(PDO::FETCH_CLASS)</h2>
    <ul>
        <?php foreach ($tasks as $todo): ?>
            <li>
                <?php if ($todo->completed): ?>
                    <strike><?= $todo->description ?></strike>
                <?php else: ?>
                    <?= $todo->description ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    
<?php require('partials/footer.php'); ?>