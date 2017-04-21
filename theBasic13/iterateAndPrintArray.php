<?php

// given an array, iterate through it and print out each value
function printArrayValues($arr)
{
	if(!$arr) // first check if given array is empty
	{
		echo "null"; // if it is just print out null
		return; // and return to exit the function
	}
	$len = count($arr); // set len variable to store length of array to be used in for loop
	for($i=0;$i<$len;$i++) // setup our for loop to iterate through the array
	{
		echo $arr[$i]; // print out the current value in the array
		echo "\n"; // this is only here to allow for easier viewing of the printed values
	} // at this point we've iterated through the entire array and printed each value
}

// test cases
printArrayValues([1,3,5]); // => 1 3 5
echo "\n";
printArrayValues([]); // => null
echo "\n";
printArrayValues([-8,-4,-9]); // => -8 -4 -9
echo "\n";
printArrayValues([8]); // => 8