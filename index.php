<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>
        <?php

        // $ is for create variables
        $simple_val = 'Simple Variables';
        $name = 'Roger';
        $last_name = 'Delgado';

        $x = 1;
        // we add & in front of the variable to create a 
        // reference
        $y = &$x;

        $x = 3;

        echo "{$simple_val} {$name} {$last_name} {$x}";

        ?>

    </h1>

    <p>
        <?php
        // define('NAME', 'value')
        // Constants
        // Static Data That Never Changes

        define('CONSTAN', 'Never Change');
        echo CONSTAN;
        // echo PHP_VERSION;
        // echo __FILE__;

        ?>
    </p>


    <?php
    // Types of Variables
    // Scalar Types
    // bool - same
    $completed = true;
    // int - same
    $score = 75;
    // float - same
    $price = 0.99;
    // string - same
    $greeting = 'Hello Roger';

    echo $completed . '<br />';
    echo $score . '<br />';
    echo $price . '<br />';
    echo $greeting . '<br />';

    // echo gettype($completed);

    // Compound Types
    // array
    $companie = [1, 2, 3, 4, 5, true, 'Str'];
    // object
    // callable
    // iterable

    // Functions

    function sun(int $x, int $y)
    {
        return $x + $y;
    }

    echo sun(10, 5) . '<br />';

    $base = '10';
    // casting put the data type in from of the variable that 
    // need to be casted be sure that can be casted or will give
    // a error
    $casting = (int) $base;
    echo gettype($casting) . '<br />';

    $isCompleted = true;

    if ($isCompleted) {
        echo 'sussess' . '<br />';
    } else {
        echo 'fail' . '<br />';
    }

    // single '' you cant use variables
    // double "" you can use variables

    $fristname = 'roger';
    $lastname = 'delgado';
    $name = $fristname . ' ' . $lastname;

    echo $name . '<br />';
    echo $name[10]  . '<br />';
    echo $name[-10];

    //Heredoc

    $text = <<<TEXT
    Line 1 $x
    Line 2 $y
    Line 3
    TEXT;

    echo  '<br />';
    echo nl2br($text);

    // nowdoc

    $textTwo = <<<'TEXT'
    Line 1 $x
    Line 2 $y
    Line 3
    TEXT;

    echo  '<br />';
    echo nl2br($textTwo)

    ?>

    <?php
    echo '<h3>Arrays</h3>';

    $proLanguages = ['PHP', 'JAVA', 'Python'];

    echo $proLanguages[1];
    // this is a push in php
    // there is other ways to do it 
    $proLanguages[] = 'C++';
    echo '<pre>';
    print_r($proLanguages);
    echo '</pre>';

    $likeAObject = [
        'php' => '7.4',
        'pyton' => '4.2'
    ];

    echo '<pre>';
    print_r($likeAObject['php']);
    echo '</pre>';


    $languages = [
        'php' =>  [
            'creator' => 'Roger Delgado',
            'extension' => '.php',
            'website' => 'www.php.net',
            'isOpenSource' => true,
            'versions' => [
                ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
                ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019']
            ],
        ],
        'python' =>  [
            'creator' => 'Roger Delgado',
            'extension' => '.py',
            'website' => 'www.python.org',
            'isOpenSource' => true,
            'versions' => [
                ['version' => 3.9, 'releaseDate' => 'Jan 26, 2020'],
                ['version' => 3.8, 'releaseDate' => 'Feb 28, 2019']
            ],
        ]
    ];

    echo '<pre>';
    print_r($languages);
    echo '</pre>';

    $findAKey = ["a" => 1, "b" => 2];

    ?>

    <?php
    // Arithmetic Operation
    // Normal like other languages
    //  + - * / % **
    echo "Simple Map: 10 + 20", '=', 10 + 20;
    echo '<br>';

    // Assigment Operators
    // Normal like other languages
    // = += -= /= %= **=

    // Coomparasion Operators
    // Nomal like other languages
    // == === <> === < > <= => etc

    $num1 = 5;
    $num2 = '5';

    if ($num1 == $num2) {
        echo 'True';
    }

    echo '<br>';
    // stric comparation like other languages
    if ($num1 === $num2) {
        echo 'True';
    } else {
        echo "False";
    }

    // like before ?

    $return = true === false ? "working" : "not working";
    echo '<br>';
    echo $return;

    // --$ pre decrement
    // ++$ pre increment

    $increment = 5;
    $decrement = 5;

    echo ++$increment;
    echo --$decrement;

    var_dump(++$increment)

    ?>

    <?php
    // working with array
    $arrayOne = ['a', 'b', 'c'];
    $arrayTwo = ['d', 'e', 'f'];
    $arrayThree = ['x'];

    $test1 = $arrayOne + $arrayTwo;
    // + is Union
    // == array will return true if the key on the array are equals
    // === return true if key, value and position are the equals
    echo '<br>';
    print_r($test1);
    ?>

    <?php

    // simple if statement

    // One way of doing it
    echo '<br>';
    $score = 95;
    if ($score >= 90) {
        echo 'A';
        if ($score >= 95) {
            echo '+';
        }
    } elseif ($score >= 80) {
        echo 'B';
    } elseif ($score >= 70) {
        echo 'C';
    } elseif ($score >= 60) {
        echo 'D';
    } else {
        echo '<strong style="color: blue;">A</strong>';
    };

    ?>

    <?php echo '<br>' ?>
    <?php $score2 = 95 ?>
    <?php if ($score >= 90) : ?>
        <strong style="color: blue;">A</strong>
    <?php elseif ($score >= 80) : ?>
        <strong style="color: green;">B</strong>
    <?php elseif ($score >= 70) : ?>
        <strong style="color: yellow;">C</strong>
    <?php elseif ($score >= 60) : ?>
        <strong style="color: magenta;">D</strong>
    <?php endif ?>

    <?php

    // Loops
    echo '<br>';
    $i = 0;
    while (true) {
        if ($i >= 16) {
            break;
        }
        if ($i % 2 === 0) {
            $i++;
            continue;
        }
        echo $i++ . ',';
    }
    ?>


    <?php

    $text = 'Hello World';
    $textArray = ['a', 'b', 'c'];
    // for ($b = 0; $b <= 15; $b++) {
    //     echo '<br>';
    //     echo $b;
    // };

    // for ($i = 0; $i < strlen($text); $i++) {
    //     echo '<br>';
    //     echo $test[$i];
    //     echo $i;
    // }

    for ($c = 0; $c <= count($textArray); $c++) {
        echo '<br>';
        // echo $textArray[$c];
        // echo $c;
    }
    ?>

    <?php
    // ForEach

    $knowLanguage = ['php', 'java', 'c++', 'go', 'rust'];

    foreach ($knowLanguage as $key => $lang) {
        # code...
        echo $key . ': ' . $lang . '<br />';
    }


    $user = [
        'name' => 'Roger',
        'email' => 'roger@gmail.com',
        'skills' => ['php', 'graphql', 'react'],
    ];

    foreach ($user as $key2 => $value) {
        # code...
        echo $key2 . ': ';

        if (is_array($value)) {
            # code...
            foreach ($value as $skill) {
                # code...
                echo $skill . ' - ';
            }
        } else {
            echo $value;
        }

        echo '<br />';
    }
    ?>

    <?php

    echo 'switch statement' . '<br />';
    // switch statement
    $paymentStatus = 1;

    switch ($paymentStatus) {
        case 'paid':
            # code...
            echo 'Paid';
            break;

        case 'rejected':
        case 'decline':
            # code...
            echo 'Payment Decline';
            break;
        case 'pending':
            # code...
            echo 'Pending Payment';
            break;
        default:
            # code...
            echo 'Unknow Payment Status';
            break;
    }

    echo 'Match Expresion' . '<br />';

    // $paymentStatusDisplay = match ($paymentStatus) {
    //     1 => 'Paid',
    //     2, 3 => 'Payment Decline',
    //     0 => 'Pending Payment',
    // }

    // $matchSample = match ($paymentStatus) {
    //     1 => 'asdfasdf',
    //     2, 3 => 'asdfa',
    //     0 => 'asdfasdf',
    //     default => 'Unknow Payment Status',
    // };

    ?>

    <?php
    echo 'Return Statement' . '<br />';

    function sum(int $x, int $y)
    {
        $z = $x + $y;
        return $z;
    }

    echo sum(10, 20);

    ?>
    <?php
    // Basiclly dont include use recuare
    require 'include.php';
    ?>


</body>

</html>