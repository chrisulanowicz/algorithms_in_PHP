<?php

// given an array and a value(Y), print the count of values that are greater than Y
function greaterThanY($arr, $y)
{
	if(!$arr) // first check if given array is empty
	{
		echo "null"; // if it is just print out null
		return; // and return to exit the function
	}
	$len = count($arr); // set len variable to store length of array to be used in for loop
	$counter = 0; // set our counter to keep track of how many values are greater than y
	for($i=0;$i<$len;$i++) // setup our for loop to iterate through the array
	{
		if($arr[$i]>$y) // check if the current value is greater than y
		{
			$counter++; // if it is increment the counter by 1
		}
	} // at this point we've iterated through the entire array and should have our count
	echo $counter; // print it out
}

// test cases
greaterThanY([1,3,5], 0); // => 3
echo "\n";
greaterThanY([], 5); // => null
echo "\n";
greaterThanY([-8,-4,-9], -6); // => 1
echo "\n";
greaterThanY([8], 9); // => 0