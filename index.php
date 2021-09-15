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
                            ]
                        ]
                    ]
            ]
        ]
];

// $i;
// $j;
// $k;
// $g;

for ($i = 0; $i < sizeof($workers); $i++) {
    for ($j = 0; $j < sizeof($workers[$i]); $j++) {
        for ($k = 0; $k < sizeof($workers[$i][$j]); $k++) {
            echo '<br>     Factory workers: <br>';
            for($g = 0; $g < sizeof($workers[$i][$j][$k]['factory']); $g++) {
                echo $workers[$i][$j][$k]['factory'][$g]['name'] . '  =>  ' . $workers[$i][$j][$k]['factory'][$g]['salary'] . '$<br>';
            }

            echo '<br>     Office workers: <br>';
            for($g = 0; $g < sizeof($workers[$i][$j][$k]['office']); $g++) {
                echo $workers[$i][$j][$k]['office'][$g]['name'] . '  =>  ' . $workers[$i][$j][$k]['office'][$g]['salary'] . '$<br>';
            }
        }
    }
}

?>
<style>
    body {
        margin-left: 40px;
    }
</style>