<?php

class  UniRequirements
{

    private $requirements = array();

    public function __construct()
    {

        $this->requirements[0] = [
            'egyetem' => 'ELTE',
            'kar' => 'IK',
            'szak' => 'Programtervező informatikus',
            'kotelezo' => 'matematika',
            'kotelezoen-valaszthato' => ['biológia', 'fizika', 'informatika', 'kémia']
        ];

        $this->requirements[1] = [
            'egyetem' => 'PPKE',
            'kar' => 'BTK',
            'szak' => 'Anglisztika',
            'kotelezo' => 'angol',
            'kotelezoen-valaszthato' => ['francia', 'német', 'olasz', 'orosz', 'történelem']
        ];
    }






    public function getRequirements($institute): array
    {
        if (!$institute['egyetem'] || !$institute['kar'] || !$institute['egyetem'])
            throw new Exception ("Hiba! Nem meghatázozható intézmény!");
        else {
            for ($i = 0; $i < count($this->requirements); $i++) {
                if (
                    $this->requirements[$i]['egyetem'] === $institute['egyetem'] &&
                    $this->requirements[$i]['kar'] === $institute['kar'] &&
                    $this->requirements[$i]['szak'] === $institute['szak']
                )
                    return [$this->requirements[$i]['kotelezo'], $this->requirements[$i]['kotelezoen-valaszthato']];
            }
        }
    }
}
