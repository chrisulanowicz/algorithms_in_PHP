<?php

// given an array, print the average of the values contained in it
function printAvg($arr)
{
	if(!$arr) // first check if given array is empty
	{
		echo "null"; // if it is just print out null
		return; // and return to exit the function
	}
	$len = count($arr); // set len variable to store length of array to be used in for loop and to figure out average
	$sum = 0; // initialize our sum variable at 0 to be used to add up our values
	for($i=0;$i<$len;$i++) // setup our for loop to iterate through the array and get the total sum
	{
		$sum += $arr[$i]; // add the current value to our sum
	} // at this point we've iterated through the entire array and have our final sum
	echo $sum/$len; // and print out the sum divided by the length of the array giving us the average
}

// test cases
printAvg([1,3,5]); // => 3
echo "\n";
printAvg([]); // => null
echo "\n";
printAvg([-8,-4,-9]); // => -7
echo "\n";
printAvg([8]); // => 8