<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <!-- for: $statement->fetchAll() -->
    <h2><?= '$statement' ?>->fetchAll()</h2>
    <?php foreach ($result1 as $todo): ?>
        <ul>
            <?php foreach ($todo as $colName => $val): ?>
                <li><?= $colName ?> : <?= $val ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>

    <!-- for: $statement->fetchAll(PDO::FETCH_OBJ) -->
    <h2><?= '$statement' ?>->fetchAll(PDO::FETCH_OBJ)</h2>
    <?php foreach ($result2 as $todo): ?>
        <ul>
            <?php foreach ($todo as $colName => $val): ?>
                <li><?= $colName ?> : <?= $val ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>

    <!-- for: $statement->fetchAll(PDO::FETCH_CLASS) -->
    <h2><?= '$statement' ?>->fetchAll(PDO::FETCH_CLASS)</h2>
    <ul>
        <?php foreach ($result3 as $todo): ?>
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