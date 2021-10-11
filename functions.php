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

function create($data = []) 
{
    $name = $data['name'];
    $age = $data['age'];

    $query = "INSERT INTO `students` (`course_id`, `name`, `age`) VALUES (1, '$name', '$age')";

    mysqli_query(connect(), $query);

    return "Success";
}