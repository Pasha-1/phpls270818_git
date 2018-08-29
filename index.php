<?php
require_once('func.php');
ob_start();
//зад.1 =======================
echo "<div class='jumbotron'>";
echo '<h4>Зад. 1</h4>';
echo '<p>', task1('./data.xml'), '</p>';
echo '</div>';

//зад.4 =======================
echo "<div class='jumbotron'>";
echo '<h4>Зад. 4</h4>';
echo '<p>', task4(), '</p>';
echo '</div>';

//зад.3 =======================
echo "<div class='jumbotron'>";
echo '<h4>Зад. 3</h4>';
echo '<p>', task3(), '</p>';
echo '</div>';
//зад.2 =======================

//зад.2 =======================
echo "<div class='jumbotron'>";
echo '<h4>Зад. 2</h4>';
$file1 = "output.json";
$file2 = "output2.json";
$data = [
    ['a', 'b', 'c'],
    ['a1', 'b2', 'c3'],
    ['2', '2', '2'],
    ['3', '4', '5']
];
echo '<p>', task2($data, $file1, $file2), '</p>';
echo '</div>';