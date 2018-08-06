<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?php if ($task->isComplete()): ?>
                    <!-- display strikethrough -->
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>