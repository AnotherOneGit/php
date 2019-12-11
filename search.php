<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="search.css">
    <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
    <title>Search</title>
</head>
<body>

<?php
include_once "user-pass.php";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=u0727473_default', $user, $pass);
    $stmt = $dbh->prepare("SELECT * FROM games WHERE title LIKE ?");
    if ($stmt->execute(array("%$_POST[name]%"))) {
      while ($row = $stmt->fetch()) {
        echo "<div>
        <img src={$row['pic']}><br />
        {$row['title']} <br />
        Оценка: {$row['rate']}
        </div>";  }
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>