<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <ul>
        <!-- foreach syntax -->
        <?php
            foreach ($names as $name) {
                echo "<li>1st - {$name}</li>";
            }
        ?>
    </ul>

    <ul>
        <!-- alternative form of foreach syntax -->
        <?php foreach ($names as $name): ?>
            <li><?= "2nd - $name"; ?></li>
        <?php endforeach; ?>

    </ul>



    <ul>
        <?php foreach ($animals as $animal): ?>
            <li><?= "Hello, $animal"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>