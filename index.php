<?php

spl_autoload_register(function ($class) {
    require 'classes/' . $class . '.php';
});



$exampleData = [
    [
        'valasztott-szak' => [
            'egyetem' => 'ELTE',
            'kar' => 'IK',
            'szak' => 'Programtervező informatikus',
        ],
        'erettsegi-eredmenyek' => [
            [
                'nev' => 'magyar nyelv és irodalom',
                'tipus' => 'közép',
                'eredmeny' => '70%',
            ],
            [
                'nev' => 'történelem',
                'tipus' => 'közép',
                'eredmeny' => '80%',
            ],
            [
                'nev' => 'matematika',
                'tipus' => 'emelt',
                'eredmeny' => '90%',
            ],
            [
                'nev' => 'angol nyelv',
                'tipus' => 'közép',
                'eredmeny' => '94%',
            ],
            [
                'nev' => 'informatika',
                'tipus' => 'közép',
                'eredmeny' => '95%',
            ],
        ],
        'tobbletpontok' => [
            [
                'kategoria' => 'Nyelvvizsga',
                'tipus' => 'B2',
                'nyelv' => 'angol',
            ],
            [
                'kategoria' => 'Nyelvvizsga',
                'tipus' => 'C1',
                'nyelv' => 'német',
            ],
        ]
    ],
    [
        'valasztott-szak' => [
            'egyetem' => 'ELTE',
            'kar' => 'IK',
            'szak' => 'Programtervező informatikus',
        ],
        'erettsegi-eredmenyek' => [
            [
                'nev' => 'magyar nyelv és irodalom',
                'tipus' => 'közép',
                'eredmeny' => '70%',
            ],
            [
                'nev' => 'történelem',
                'tipus' => 'közép',
                'eredmeny' => '80%',
            ],
            [
                'nev' => 'matematika',
                'tipus' => 'emelt',
                'eredmeny' => '90%',
            ],
            [
                'nev' => 'angol nyelv',
                'tipus' => 'közép',
                'eredmeny' => '94%',
            ],
            [
                'nev' => 'informatika',
                'tipus' => 'közép',
                'eredmeny' => '95%',
            ],
            [
                'nev' => 'fizika',
                'tipus' => 'közép',
                'eredmeny' => '98%',
            ],
        ],
        'tobbletpontok' => [
            [
                'kategoria' => 'Nyelvvizsga',
                'tipus' => 'B2',
                'nyelv' => 'angol',
            ],
            [
                'kategoria' => 'Nyelvvizsga',
                'tipus' => 'C1',
                'nyelv' => 'német',
            ],
        ],
    ],
    [
        'valasztott-szak' => [
            'egyetem' => 'ELTE',
            'kar' => 'IK',
            'szak' => 'Programtervező informatikus',
        ],
        'erettsegi-eredmenyek' => [
            [
                'nev' => 'matematika',
                'tipus' => 'emelt',
                'eredmeny' => '90%',
            ],
            [
                'nev' => 'angol nyelv',
                'tipus' => 'közép',
                'eredmeny' => '94%',
            ],
            [
                'nev' => 'informatika',
                'tipus' => 'közép',
                'eredmeny' => '95%',
            ],
        ],
        'tobbletpontok' => [
            [
                'kategoria' => 'Nyelvvizsga',
                'tipus' => 'B2',
                'nyelv' => 'angol',
            ],
            [
                'kategoria' => 'Nyelvvizsga',
                'tipus' => 'C1',
                'nyelv' => 'német',
            ],
        ],
    ],
    [
        'valasztott-szak' => [
            'egyetem' => 'ELTE',
            'kar' => 'IK',
            'szak' => 'Programtervező informatikus',
        ],
        'erettsegi-eredmenyek' => [
            [
                'nev' => 'magyar nyelv és irodalom',
                'tipus' => 'közép',
                'eredmeny' => '15%',
            ],
            [
                'nev' => 'történelem',
                'tipus' => 'közép',
                'eredmeny' => '80%',
            ],
            [
                'nev' => 'matematika',
                'tipus' => 'emelt',
                'eredmeny' => '90%',
            ],
            [
                'nev' => 'angol nyelv',
                'tipus' => 'közép',
                'eredmeny' => '94%',
            ],
            [
                'nev' => 'informatika',
                'tipus' => 'közép',
                'eredmeny' => '95%',
            ],
        ],
        'tobbletpontok' => [
            [
                'kategoria' => 'Nyelvvizsga',
                'tipus' => 'B2',
                'nyelv' => 'angol',
            ],
            [
                'kategoria' => 'Nyelvvizsga',
                'tipus' => 'C1',
                'nyelv' => 'német',
            ],
        ],
    ],
    [
        'valasztott-szak' => [
            'egyetem' => 'ELTE',
            'kar' => 'IK',
            'szak' => 'Programtervező informatikus',
        ],
        'erettsegi-eredmenyek' => [
            [
                'nev' => 'magyar nyelv és irodalom',
                'tipus' => 'közép',
                'eredmeny' => '15%',
            ],
            [
                'nev' => 'történelem',
                'tipus' => 'közép',
                'eredmeny' => '80%',
            ],
            [
                'nev' => 'matematika',
                'tipus' => 'emelt',
                'eredmeny' => '90%',
            ],
            [
                'nev' => 'angol nyelv',
                'tipus' => 'közép',
                'eredmeny' => '94%',
            ],
            [
                'nev' => 'fedettpályás ki néz magasabbra',
                'tipus' => 'közép',
                'eredmeny' => '95%',
            ],
        ],
        'tobbletpontok' => [
            [
                'kategoria' => 'Nyelvvizsga',
                'tipus' => 'B2',
                'nyelv' => 'angol',
            ],
            [
                'kategoria' => 'Nyelvvizsga',
                'tipus' => 'C1',
                'nyelv' => 'német',
            ],
        ],
    ],
    [
        'valasztott-szak' => [
            'egyetem' => 'ELTE',
            'kar' => 'IK',
            'szak' => 'Programtervező informatikus',
        ],
        'erettsegi-eredmenyek' => [
            [
                'nev' => 'magyar nyelv és irodalom',
                'tipus' => 'közép',
                'eredmeny' => '15%',
            ],
            [
                'nev' => 'történelem',
                'tipus' => 'közép',
                'eredmeny' => '80%',
            ],
            [
                'nev' => 'matematika',
                'tipus' => 'emelt',
                'eredmeny' => '90%',
            ],
            [
                'nev' => 'angol nyelv',
                'tipus' => 'közép',
                'eredmeny' => '94%',
            ],
            [
                'nev' => 'fedettpályás ki néz magasabbra',
                'tipus' => 'közép',
                'eredmeny' => '95%',
            ],
        ],
        'tobbletpontok' => [
            [
                'kategoria' => 'Nyelvvizsga',
                'tipus' => 'B2',
                'nyelv' => 'angol',
            ],
            [
                'kategoria' => 'Nyelvvizsga',
                'tipus' => 'C1',
                'nyelv' => 'német',
            ],
        ],
    ]
];



foreach ($exampleData as $data) {

    try {
        $res = new Results($data);
    } catch (Exception $e) {
        echo $e->getMessage(), "\n";
    }
    $result = $res->countFinalResults($data);

   if ($result['result'] == "failed"){
        echo '<p style="color: red">'.$result['msg'].'</p>';
   }
   if ($result['result'] == "success"){
        echo '<p style="color: darkgreen">'.$result['msg'].'</p>';
   }
    

}
