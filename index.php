<?php 
require_once "functions.php";

$data = get_all();

if (isset($_POST['add'])) {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);

    create(['name' => $name, 'age' => $age]);
    header("Location: index.php");
}
?>
<html>
<head>
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <table class="table table-hover">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Age</th>
        </thead>
        <tbody>
            <?php while ($student = mysqli_fetch_assoc($data)): ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['age']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Age</label>
            <input type="text" name="age" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="add" class="btn btn-dark">Submit</button>
        </form>
    </div>
</body>
</html>
