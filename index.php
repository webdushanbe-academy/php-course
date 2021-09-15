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
    ]
];

function raise($worker, $name, $raise)
{
    if ($worker['name'] == $name) {
        $worker['salary'] += $raise;
    }

    return $worker;
}

foreach ($workers as $worker) {
    $worker = raise($worker, 'Bill', 200);
    $worker = raise($worker, 'Shaw', 300);
    echo $worker['name'] . '    ' . $worker['salary'] . '$<br>';
}

