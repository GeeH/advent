<?php
/**
 * Created by PhpStorm.
 * User: GeeH
 * Date: 04/12/2015
 * Time: 10:28
 */

function isAdventCoin(string $hash, int $count) : bool
{
    return preg_match('/^000000/', md5($hash . $count)) === 1;
}


/**
 * TESTS!
 */
//assert(isAdventCoin('abcdef', 609043) === true);
//assert(isAdventCoin('abcdef', 1) === false);
//assert(isAdventCoin('pqrstuv', 1048970) === true);


/**
 * DO IT!
 */
$count = 1;
while (!isAdventCoin('bgvyzdsv', $count)) {
    $count++;
}
echo $count . PHP_EOL;