<?php 
require_once "functions.php";

$data = get_all();

if (isset($_POST['add'])) {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);

    create([
        'name' => $name, 
        'age' => $age
    ]);

    header("Location: index.php");
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    delete_student($id);

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
                <td>
                    <form action="index.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
                        <button name="delete" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $student['id']; ?>" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <form action="" method="POST">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="text" name="age" class="form-control">
        </div>
        <button type="submit" name="add" class="btn btn-dark">Submit</button>
        </form>
    </div>
</body>
</html>
