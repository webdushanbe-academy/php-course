<?php 

require('functions.php');

if (isset($_GET['go'])) {
    $name = $_GET['search'];
    if (search($name)) {
        $names = search($name);
    } else {
        $error = 'No Results!';
    }
}
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $data = "Name: " . $name . "\nAge: " . $age . "\n---------------\n";
    file_put_contents('students.txt', $data, FILE_APPEND);
    header('Location: index.php');
}

?>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
</head>
<body>
    <ul>
        <?php if (isset($error)) {?>
            <?php echo $error; ?>
            <?php } else { ?>
                <?php foreach($names as $name) { ?>
                    <li><?php echo $name; ?></li>
                    <?php } ?>
            <?php } ?>
    </ul>
    <form action="index.php" method="GET">
        <input type="text" name="search">
        <button type="submit" name="go">Search</button>
    </form>
    <br><br>
    <form action="" method="POST">
        <div>
            <label>Name: </label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Age: </label>
            <input type="text" name="age">
        </div>
        <div>
           
        </div>
        <button type="submit" name="add">Add</button>
    </form>
</body>
</html>