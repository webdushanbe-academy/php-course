<?php 

$workers = [
    [
        [
            [
                'factory' => [
                    [
                        'name' => 'Bill',
                        'salary' => 400
                    ],
                    [
                        'name' => 'Brixton',
                        'salary' => 600
                    ],
                    [
                        'name' => 'Shaw',
                        'salary' => 500
                    ]
                    ],
                    'office' => [
                        [
                            'name' => 'Shelby',
                            'salary' => 1100
                        ],
                        [
                            'name' => 'Luke',
                            'salary' => 1100
                        ],
                        [
                            'name' => 'Aaron',
                            'salary' => 1100
                        ]]
                    ]
            ]
        ]
    
];

foreach ($workers as $first) {
    foreach ($first as $second) {
        foreach ($second as $third) {
            echo '<br>Factory workers: <br>';

            foreach ($third['factory'] as $factory) {
                echo $factory['name'] . '  =>  ' . $factory['salary'] . '$<br>';
            }

            echo '<br>Office workers: <br>';
            foreach ($third['office'] as $office) {
                echo $office['name'] . '  =>  ' . $office['salary'] . '$<br>';
            }
        }
    }
}