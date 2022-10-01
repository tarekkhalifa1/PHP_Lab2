<?php

// 1-Search for how to make \n work in browser.

//echo nl2br("Hello from \n ITI");

// ================================================================================================ //

// 2-Search for 3 built-in function of a string.

$string = "Hello from ITI";

// echo 
strtolower($string); // convert string to lowercase

// echo
strtoupper($string); // convert string to uppercase

// echo 
str_shuffle("Hello World"); // shuffles characters of string

// print_r 
(explode(" ", $string)); // convert string to array by separator

// ================================================================================================ //

// 3-Write a PHP script to get the sum and avg of an indexed array

$array = [12, 10, 25, 45];
// get sum of array
$result_of_sum = array_sum($array);
// echo $result; // 92

// get avg of array
$result_of_avg = $result_of_sum / count($array);
// echo $result_of_avg; // 23

$result = array_reverse($array); // sorting array reverse order
// print_r($result);

rsort($array); // sorting array descending order
// print_r($array); // [45, 25, 12, 10]

// ================================================================================================ //

// 4-Write a PHP script to sort the following associative array :

$asc_array = [
    "Sara" => 31,
    "John" => 41,
    "Walaa" => 39,
    "Ramy" => 40
];

// a) ascending order sort by value
asort($asc_array);
// print_r($asc_array);

// b) ascending order sort by Key
ksort($asc_array);
// print_r($asc_array);

// c) descending order sorting by Value
arsort($asc_array);
// print_r($asc_array);

// d) descending order sorting by Key  
krsort($asc_array);
// print_r($asc_array);

// ================================================================================================ //

// 5- Display the following array in an HTML table with Name, Email and Status table headers
//    Specify PHP status with red color.

$students = [
    ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
    ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
    ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
    ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Table</title>
    <style>
        table {
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
            padding: 20px;
            font-size: 1.4rem;
        }

        table th,
        td {
            border: 1px solid black;
            padding: 10px;
        }

        table th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <?php
            foreach ($students[0] as $key => $value) {
            ?>
                <th><?= strtoupper($key) ?></th>
            <?php
            } // end of keys loop
            ?>
        </tr>
        <?php
        foreach ($students as $key => $value) {

            if ($value['status'] == "PHP") {
        ?>
                <tr style="color:red ;">
                    <?php
                    foreach ($value as $value2) {
                    ?>
                        <td><?= $value2 ?></td>

                    <?php
                    } // end of values loop
                    ?>
                </tr>
            <?php
            } // end of true condition

            else {

            ?>


                <tr>
                    <?php
                    foreach ($value as $value2) {
                    ?>
                        <td><?= $value2 ?></td>

                    <?php
                    } // end of values loop
                    ?>
                </tr>

        <?php

            } // end of else statement

        } // end of rows number loop
        ?>

    </table>
</body>
</html>