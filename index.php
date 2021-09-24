<?php 

$students = file_get_contents('students.txt');

$array = explode('---------------', $students);

unset($array[sizeof($array) - 1]);

foreach ($array as $student) {
    echo $student . '<br>';
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