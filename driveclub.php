<?php
include_once "user-pass.php";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=u0727473_default', $user, $pass);
    $stmt = $dbh->prepare("SELECT * FROM games WHERE title = ?");
    if ($stmt->execute(array('Driveclub'))) {
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