<?php

// given an array, find and print the maximum value
function printMax($arr)
{
	if(!$arr) // check if the given array is empty first
	{
		$max = "null"; // if it is we'll just set the max variable to 'null'
	}
	else
	{
		$len = count($arr); // else store the length of the array in a variable to be used in for loop
		$max = $arr[0]; // and set max to be the first element of the array
	}
	for($i=1;$i<$len;$i++) // now setup our for loop to iterate through the array (starting at 1 since we already set max to arr[0])
	{
		if($arr[$i] > $max) // check if the current value is greater than our previous max
		{
			$max = $arr[$i]; // if it is then set the max variable to the newest maximum value
		}
	} // at this point we've iterated through the entire array and have found our maximum value
	echo $max; // just echo it out
}

// test cases
printMax([1,3,5]); // => 5
echo "\n";
printMax([]); // => null
echo "\n";
printMax([-8,-4,-9]); // => -4
echo "\n";
printMax([8]); // => 8