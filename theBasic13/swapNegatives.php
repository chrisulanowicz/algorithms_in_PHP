<?php

// given an array, swap any negative values with the string "mopar"
function swapNegatives($arr)
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
			$arr[$i] = "mopar"; // if it is redefine that index of the array to contain our string
		}
	}
	return $arr; // return the modified array
}

// test cases
$test = swapNegatives([]); // => null
var_dump($test);
$test2 = swapNegatives([2,4,6]); // => [2,4,6]
var_dump($test2);
$test3 = swapNegatives([-2,-4,-6]); // => ["mopar", "mopar", "mopar"]
var_dump($test3);
$test4 = swapNegatives([2,-4,6]); // => [2, "mopar", 6]
var_dump($test4);