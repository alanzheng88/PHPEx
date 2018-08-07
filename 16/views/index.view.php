<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="/about">About Page</a></li>
            <li><a href="/contact">Contact Page</a></li>
        </ul>
    </nav>

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
    
</body>
</html>