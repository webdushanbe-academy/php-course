<?php 

function search($word)
{
    $students = file_get_contents('students.txt');

    $array = explode('---------------', $students);

    unset($array[sizeof($array) - 1]);

    $s = [];
    
    foreach ($array as $student) {
        $explode = explode(': ', $student);
        $name = explode(' ', $explode[1]);
        $name = explode(' ', $name[0]);
        $s[] = $name[0];
        // var_dump(explode(' ', $name[0])[0]);
    }

    $names = [];
    foreach ($s as $string) {
        $string = str_replace('Age', '', $string);

        $names[] = $string;
    }

    $results = [];
    foreach ($names as $name) {
        if (strcmp($word, $name) == -1) {
            $results[] = $name;
        }
    }

    return $results;
}