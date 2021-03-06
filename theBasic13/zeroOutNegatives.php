<?php

// given an array, change any negative integers to 0
function zeroNegatives($arr)
{
	if(!$arr) // first check if given array is empty
	{
		return null; // if it is just return null
	}
	$len = count($arr); // store length of array to be used in for loop
	for($i=0;$i<$len;$i++) // setup our for loop to iterate through the array
	{ 
		if($arr[$i] < 0) // check to see if the current value is less than 0 (thus its negative)
		{
			$arr[$i] = 0; // if it is then change the value to 0
		}
	}
	return $arr; // return the modified array
}

// test cases
$test = zeroNegatives([]); // => null
var_dump($test);
$test2 = zeroNegatives([2,4,6]); // => [2,4,6]
var_dump($test2);
$test3 = zeroNegatives([-2,-4,-6]); // => [0,0,0]
var_dump($test3);
$test4 = zeroNegatives([2,-4,6]); // => [2, 0, 6]
var_dump($test4);