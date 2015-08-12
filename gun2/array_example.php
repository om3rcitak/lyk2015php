<meta charset="UTF-8">
<?php

function sortArraysBy($array, $aKeyInAnArray){
    $holder = [];
    foreach($array as $key => $value)
        $holder[$key] = $value[$aKeyInAnArray];
    array_multisort($holder, SORT_ASC, $array);
    return $array;
}

$students = array(
    /*
    "Arzu Tuyan",
    "Ayşenur Karaaslan",
    "Aziz Günal",
    "Büşra Günay",
    "Büşra Uman",
    "Uğur Arıcı"
    */
    array(
        'name' => array(
            'first_name' => 'Arzu',
            'last_name' => 'Tuyan',
            'full_name' => 'Arzu Tuyan',
        ),
        'age' => 23
    ),
    array(
        'name' => array(
            'first_name' => 'Ayşenur',
            'last_name' => 'Karaaslan',
            'full_name' => 'Ayşenur Karaaslan',
        ),
        'age' => 21
    ),
    array(
        'name' => array(
            'first_name' => 'Aziz',
            'last_name' => 'Günal',
            'full_name' => 'Aziz Günal',
        ),
        'age' => 24
    ),
    array(
        'name' => array(
            'first_name' => 'Büşra',
            'last_name' => 'Günay',
            'full_name' => 'Büşra Günay',
        ),
        'age' => 22
    ),
    array(
        'name' => array(
            'first_name' => 'Büşra',
            'last_name' => 'Uman',
            'full_name' => 'Büşra Uman',
        ),
        'age' => 26
    ),

);

// çok katmanlı bu dizideki kişileri yaşa göre listeleyeceğiz

/*
$ages = [];
foreach($students as $id => $student)
    $ages[$id] = $student['age'];
array_multisort($ages, SORT_ASC, $students);
*/

$students = sortArraysBy($students, 'age');

foreach($students as $student){
    echo
        $student['name']['first_name'] .
        " - " .
        $student['name']['last_name'] .
        " - " .
        $student['age'] .
        "<br>";
}