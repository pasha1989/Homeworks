<?php
/**
 * Created by PhpStorm.
 * User: Pashok
 * Date: 06.10.2016
 * Time: 19:17
 */
$name1 = 'Клавдия Ивановна';
$bYear1 = 1950;
$urod1 = 'песионер';


$name2 = 'Сеня';
$bYear2 = 1995;
$urod2 = 'студент';

$name3 = 'Василий Иваныч';
$bYear3 = 1983;
$urod3 = 'Полицейский';
$count = 1;


echo "1.$name1, возраста $bYear1, $urod1.<br>";
echo "2.$name2, возраста $bYear2, $urod2.<br>";
echo "3.$name3, возраста $bYear3, $urod3.<br>";
$age1 = 2016 - $bYear1;
echo $age1;
$age2 = 2016 - $bYear2;
echo $age2;
$age3 = 2016 - $bYear3;
echo $age3;