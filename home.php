<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PhP</title>
</head>

<body>
    <?php
    include './communs/nav.php'
    ?>
    <h1>Home</h1>
    <p>Hello from the home page!!!</p>

    <?php
    include('variable_scope.php');
    echo 'Scope Variable ' . $x;
    echo '<br />';
    foo();

    ?>
</body>

</html>