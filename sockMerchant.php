<?php

/* 
*
* There is a large pile of socks that must be paired by color. Given an array of integers representing the color of each sock, determine how many pairs of socks with matching colors there are.
*
* Example
* There is one pair of color  and one of color . There are three odd socks left, one of each color. The number of pairs is .
*
* Function Description
*
* Complete the sockMerchant function in the editor below.
*
* sockMerchant has the following parameter(s):
*
* int n: the number of socks in the pile
* int ar[n]: the colors of each sock
* Returns
*
* int: the number of pairs
* Input Format
*
* The first line contains an integer , the number of socks represented in .
* The second line contains  space-separated integers, , the colors of the socks in the pile.
*
* Constraints
*
* where 
* Sample Input
*
* $n = 9
* $ar = [10, 20, 20, 10, 10, 30, 50, 10, 20]
*
* Sample Output
* 3
*/


/*
 * Complete the 'sockMerchant' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY ar
 */

function sockMerchant($n, $ar) {
    $colors = [];
    $pairs  = 0;
    for($i = 0; $i < $n; $i++)
    {
        if(isset($colors[$ar[$i]])){ 
            $colors[$ar[$i]] += 1;
            if(($colors[$ar[$i]] % 2) == 0)
                $pairs += 1;
        }else{
            $colors[$ar[$i]] = 1;
        }
    }
    return $pairs;
}