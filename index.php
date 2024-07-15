<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    /**
     * 
     * asdasdasd
     * asd
     * asd
     * asdasd
     */

    // aslkdjalsjdlkajs lkajsd jalksjd lkajsdj 

    $name = 'Abc'; // string

    $math = 1; // integer

    $is_published = false;

    $categories = [];

    $categories[] = "foods";
    $categories[] = "computers";
    $categories[] = "groceries";
    $categories[] = "tourism";
    $categories[] = "others";

    // print_r($categories);

    $products = [
        ['id' => 1, 'name' => 'project 1'],
        ['id' => 2, 'name' => 'prd 3'],
        ['id' => 3, 'name' => 'something '],
        ['id' => 7, 'name' => 'latptop'],
        ['id' => 8, 'name' => 'copies'],
        ['id' => 11, 'name' => 'water'],
        ['id' => 18, 'name' => 'abc'],
    ];


    $items = [
        ['id' => 1, 'name' => 'project 1', 'info' => [
            'item_name' => 'zxc,a info 1', 'desc' => 'something skss'
        ]],

        ['id' => 1, 'name' => 'project 1', 'info' => [
            'item_name' => 'zcx,oidw info 1', 'desc' => 'something 234'
        ]],
        ['id' => 1, 'name' => 'project 1', 'info' => [
            'item_name' => 'lkasuid info 1', 'desc' => 'something asdasd'
        ]],
        ['id' => 1, 'name' => 'project 1', 'info' => [
            'item_name' => '2wsa info 1', 'desc' => 'something asdasd'
        ]],
        ['id' => 1, 'name' => 'project 1', 'info' => [
            'item_name' => 'asdasd info 1', 'desc' => 'something skss'
        ]],
        ['id' => 1, 'name' => 'project 1', 'info' => [
            'item_name' => 'xzczx info 1', 'desc' => 'something skss'
        ]],
        ['id' => 1, 'name' => 'project 1', 'info' => [
            'item_name' => 'asdwq info 1', 'desc' => 'something skss'
        ]],
        ['id' => 1, 'name' => 'project 1', 'info' => [
            'item_name' => 'htru info 1', 'desc' => 'something skss'
        ]],
    ];

    // print_r($products);

    // foreach
    echo '<pre>';
    foreach ($items as $value) {

        $info = $value['info'];

        foreach ($info as $key => $info_val) {
            // echo $info_val . '</br>';
            print_r($info_val);
        }
    }

    echo '</pre>';



    function displaythis(array $name)
    {
    }
    ?>


    <hr>

    <?php
    echo strlen("Hello world!");
    echo "<hr>";
    echo str_word_count("Hello world!");
    echo "<hr>";
    echo strpos("Hello world!", "world");
    echo "<hr>";
    $x = 5;
    echo "The price is $x";
    echo "<hr>";
    $p = "Say Hi to world";
    echo strtolower($p);
    echo strtoupper($p);
    echo str_replace("world", "Velosi", $p);
    echo strrev($p);
    echo "<hr>";
    $q = explode(" ", $p);
    print_r($q);

    echo "<hr>";
    $x = "Hello World!";
    echo substr($x, 6, 5);
    echo substr($x, 6);
    echo substr($x, -5, 3);
    echo "<hr>";
    $x = "We are the so-called \"Vikings\" from the no\nrth.";
    echo $x;
    echo "<hr>";
    $x = 5985;
    var_dump(is_int($x));

    $x = 59.85;
    var_dump(is_int($x));
    echo "<hr>";
    $x = acos(8);
    var_dump($x);
    echo "<hr>";
    $x = 5985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));
    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));
    echo "<hr>";

    echo "<hr>";

    echo "<hr>";

    ?>



    <?php

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = 0;       // Integer
    $d = -1;      // Integer
    $e = 0.1;     // Float
    $f = "hello"; // String
    $g = "";      // String
    $h = true;    // Boolean
    $i = NULL;    // NULL

    echo "$a $b $c $d $e $f $g $h $i <br>";
    $a = (bool) $a;
    $b = (bool) $b;
    $c = (bool) $c;
    $d = (bool) $d;
    $e = (bool) $e;
    $f = (bool) $f;
    $g = (bool) $g;
    $h = (bool) $h;
    $i = (bool) $i;
    echo "$a $b $c $d $e $f $g $h $i <br> <hr>";
    echo "<hr>";
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car("red", "Volvo");
    var_dump($myCar);

    $myCar = (array) $myCar;
    var_dump($myCar);

    echo "<hr>";
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);

    print_r(cars);
    echo "<hr>";
    $a = 13;

    $b = $a < 10 ? "Hello" : "Good Bye";

    echo $b;
    echo "<hr>";
    $i = 0;
    while ($i < 6) {
        $i++;
        if ($i == 3) continue;
        echo $i;
    }
    echo "<hr>";
    $i = 0;
    while ($i < 100) {
        $i += 10;
        echo "$i <br>";
    }
    echo "<hr>";


    $members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($members as $x => $y) {
        echo "$x : $y <br>";
    }


    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";





















    ?>








</body>

</html>