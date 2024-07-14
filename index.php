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
</body>

</html>