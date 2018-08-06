<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <h2>ME</h2>
    <ul>
        <!-- printing associative array -->
        <?php foreach ($person as $key => $val): ?>
            <li><strong>key: <?= $key; ?></strong> | value: <?= $val; ?></li>
        <?php endforeach; ?>
    </ul>


    <h2>ANIMAL</h2>
    <ul>
        <!-- printing array -->
        <?php foreach($animals as $animal): ?>
            <li><?= $animal; ?></li>
        <?php endforeach; ?>
    </ul>


    <h2>TASKS</h2>
    <ul>
        <!-- ucwords: change each word to uppercase -->
        <li>title: <?= $task['title']; ?></li>
        <li>due: <?= $task['due']; ?></li>
        <li>assigned to: <?= $task['assigned_to']; ?></li>
        <li>completed: <?= $task['completed'] ? 'Complete!' : 'Incomplete!'; ?></li>
    </ul>
    
</body>
</html>