<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <h2>TASKS</h2>
    <ul>
        <li>title: <?= $task['title']; ?></li>
        <li>due: <?= $task['due']; ?></li>
        <li>assigned to: <?= $task['assigned_to']; ?></li>
        <li>
            completed:
            <!-- if else -->
            <!-- negation operator -->
            <?php if (!$task['completed']): ?>
                <!-- display X symbol -->
                &#10006;
            <?php else: ?>
                <!-- display checkmark symbol -->
                &#10004;
            <?php endif; ?>
        </li>
    </ul>
    
</body>
</html>