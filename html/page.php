<!DOCTYPE html>
<?php
include('arrayinclude.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Applebee's Menu</title>
</head>
<body>

    <?php
        $maincat = filter_var($_REQUEST['category'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo 'cake';

    ?>
</body>
</html>

array('Title' => 'Lunch Combos',
   'ImageLoc' => 'llama',
   'Link' => '',
    array('Title' => 'Tomato Basil Soup +  French Onion Soup',
       'ImageLoc' => 'llama',
       'Link' => ''),
    array('Title' => 'House Salad(contains bacon) + Clubhouse Grille',
       'ImageLoc' => 'llama',
       'Link' => ''),
     array('Title' => 'Chicken Fajita Rollup + Shrimp Scampi Linguine',
       'ImageLoc' => 'llama',
       'Link' => '')
),
​
    array('Title' => 'Salads',
        'ImageLoc' => 'llama',
        'Link' => '',
        array('Title' => 'ThaiShrimp',
            'ImageLoc' => 'llama',
            'Link' => ''),
        array('Title' => 'FiestaChicken',
            'ImageLoc' => 'llama',
            'Link' => ''),
        array('Title' => 'ChickenCeasar',
            'ImageLoc' => 'llama',
            'Link' => '')
    ),
    array('Title' => 'PubDiet',
        'ImageLoc' => 'llama',
        'Link' => '',
        array('Title' => 'ShrimpWonton',
            'ImageLoc' => 'llama',
            'Link' => ''),
        array('Title' => 'SirloinStout',
            'ImageLoc' => 'llama',
            'Link' => ''),
        array('Title' => 'CedarChicken',
            'ImageLoc' => 'llama',
            'Link' => '')
    ),
