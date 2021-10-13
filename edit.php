<?php 

require_once "functions.php";

$id = $_GET['id'];

$student = get_student_by_id($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit <?php echo $student['name']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $student['name']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="text" name="age" class="form-control" value="<?php echo $student['age']; ?>">
            </div>
            <button type="submit" name="add" class="btn btn-dark">Submit</button>
            </form>
    </div>
</body>
</html>