<?php

// $allUsers = [
//     'users' => [
//         [
//             'name' => 'John',
//             'male' => true,
//             'age' => 31
//         ],
//         [
//             'name' => 'Casey',
//             'male' => false,
//             'age' => 16
//         ],
//         [
//             'name' => 'Abraham',
//             'male' => true,
//             'age' => 21
//         ]    
//     ],    
//     'admins' => [
//         [
//             'name' => 'Tom',
//             'male' => true,
//             'age' => 22
//         ],
//         [
//             'name' => 'Jessica',
//             'male' => false,
//             'age' => 24
//         ]
            
//     ]
// ];

$data = ['Passport', 'Photo', 'Certificate', 'Passport Copy'];


function applyDocs($documents) {
    echo 'You applied with following documents: ';
    echo '<ul>';
    foreach ($documents as $document) {
        echo '<li>' . $document . '</li>';
    }

    echo '</ul>';
}

applyDocs($data);
