<?php

/*
*
*
* Easy
*
* Have the function FirstReverse(str) take the str parameter being passed and return the string in reversed order. 
* For example: if the input string is "Hello World and Coders" then your program should 
* return the string "sredoC dna dlroW olleH".
*
*
*/

function FirstReverse($str) 
{
  $strArr = str_split($str);
  $str    = "";
  for($i=count($strArr) -1;$i >= 0;$i--)
  {
    $str .= $strArr[$i];
  }

  return $str;
}

