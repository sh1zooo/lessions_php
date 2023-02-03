<?php
 /* Квантификаторы (операторы повторения символов в регулярных выражениях)
    + - повторение 1 и более раз
    * - повторение 0 и более раз
    ? - поторение 0 или 1 раз
    */
//  Number 1

/*
$pat = '#a.b#';
$rep = '!';
$sub = 'ahb acb aeb aeeb adcb axeb';
$res = preg_replace($pat, $rep, $sub);
echo $res;
*/

//  Number 2

/*
$pat = '#ab*a#';
$rep = '!';
$sub = 'aa aba abba abbba abca abea';
$res = preg_replace($pat, $rep, $sub);
echo $res;
*/


//  Number 3

/*
$pat = '#ab?a#';
$rep = '!';
$sub = 'aa aba abba abbba abca abea';
$res = preg_replace($pat, $rep, $sub);
echo $res;
*/

//  Number 4

/*
$pat = '#(ab)+#';
$rep = '!';
$sub = 'aa aba abba abbba abca abea';
$res = preg_replace($pat, $rep, $sub);
echo $res;
*/

//  Number 5

/*
$pat = '#2\++3#';
$rep = '!';
$sub = '23 2+3 2++3 2+++3 345 567';
$res = preg_replace($pat, $rep, $sub);
echo $res;
*/

//  Number 6

/*
$pat = '#ab{4,}a#';
$rep = '!';
$sub = 'aa aba abba abbba abbbba abbbbba';
$res = preg_replace($pat, $rep, $sub);
echo $res;
*/



