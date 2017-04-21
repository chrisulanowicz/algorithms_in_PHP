<?php

// given an array, shift all values left one place, dropping the first value and adding a 0 to the end to keep the same length
function shiftArray($arr)
{
	if(!$arr) // first check if given array is empty
	{
		return null; // if it is just return null
	}
	$len = count($arr); // store length of array to be used in for loop
	for($i=0;$i<$len-1;$i++) // setup our for loop to iterate through the array and stop before the last index
	{ 
		$arr[$i] = $arr[$i+1]; // change the value at the current index to whatever the value is at the next index
	} // at this point we've iterated through the array and $i is the last index
	$arr[$i] = 0; // so change the last index's value to 0
	return $arr; // return the modified array
}

// test cases
$test = shiftArray([]); // => null
var_dump($test);
$test2 = shiftArray([2,4,6]); // => [4,6,0]
var_dump($test2);
$test3 = shiftArray([1,2,3,4,5,6,7,8,9]); // => [2,3,4,5,6,7,8,9,0]
var_dump($test3);