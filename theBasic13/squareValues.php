<?php

// given an array, return that same array but with each value squared
function squareArray($arr)
{
	if(!$arr) // first check if given array is empty
	{
		return null; // if it is just return null
	}
	$len = count($arr); // store length of array to be used in for loop
	for($i=0;$i<$len;$i++) // setup our for loop to iterate through the array
	{ 
		$arr[$i] *= $arr[$i]; // square the current value
	}
	return $arr; // return the modified array
}

// test cases
$test = squareArray([]); // => null
var_dump($test);
$test2 = squareArray([2,4,6]); // => [4,16,36]
var_dump($test2);
$test3 = squareArray([-2,-4,-6]); // => [4,16,36]
var_dump($test3);