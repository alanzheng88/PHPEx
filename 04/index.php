<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <h1>
            <?php 
                
                $name = $_GET['name'];
                echo "Hello, {$name}";

            ?>
        </h1>

        <p>
            <!-- escaping html (sanitizing inputs): use htmlspecialchars function to prevent html from being interpreted in the query string; instead the html string will be printed outright -->
            <?php
                echo "I guess your name is " . 
                        htmlspecialchars($name);
            ?>
        </p>

        <p>
            <!-- "?=" is a shorthand for "?php echo" -->
            <?= "For the last time.. your name is " . 
                    $_GET['name'] . 
                    " and age is " .
                    $_GET['age']; ?>
        </p>

        <p>
            <!-- html elements can be interpreted by php -->
            <?= "<small>alan</small >"; ?>
        </p>
    </header>

</body>
</html>