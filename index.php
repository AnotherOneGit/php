<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
    <title>Only-Console-Games</title>
</head>
<body>
    <form action="search.php" method="POST">
        <input type="date" name="name" value="<?php echo date("Y-m-d");?>">
        <input type="submit" class="waves-effect waves-teal btn-flat">
    </form>
    <br>
    <?php
    include_once "connect.php"; 
    ?>
</body>
</html>