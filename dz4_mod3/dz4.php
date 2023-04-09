<!DOCTYPE html>
<html>
<head>
    <title>xoxol</title>
</head>
<body>
    <form action="dz4.php" method="post">
        <label for="name">vvedi imya</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="age">vvedi vozrast</label>
        <input type="number" name="age" id="age" required><br><br>
        <input type="submit" value="send">
    </form>

    <?php
        if ((isset($_POST['name'])) and (isset($_POST['age']))) {
            echo "<p> name: {$_POST['name']} </p>";
            echo "<p> age: {$_POST['age']} </p>";
        }
    ?>
    
</body>

</html>
