<?php 

define("HOST", "localhost");
define("USER", "tom");
define("PASSWORD", "ilovetom");
define("DATABASE", "webdushanbe_academy");

function connect() 
{
    $db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

    return $db;
}

function get_all() 
{
    $query = "SELECT * FROM `students`";

    return mysqli_query(connect(), $query);
}

function get_student_by_id($id)
{
    $query = "SELECT * FROM `students` WHERE `id` = $id";

    $result = mysqli_query(connect(), $query);

    return mysqli_fetch_assoc($result);
}

function create($data = []) 
{
    $name = $data['name'];
    $age = $data['age'];

    $query = "INSERT INTO `students` (`course_id`, `name`, `age`) VALUES (1, '$name', '$age')";

    mysqli_query(connect(), $query);

    return "Success";
}

function delete_student($id)
{
    $query = "DELETE FROM `students` WHERE `id` = $id";

    mysqli_query(connect(), $query);

    return 'Success';
}

function edit($data = [])
{
    $name = $data['name'];
    $age = $data['age'];

    $query = "UPDATE `students` SET `name` = $name, `age` = $age";

    mysqli_query(connect(), $query);

    return 'Success';
}