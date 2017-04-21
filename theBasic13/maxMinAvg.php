<?php

// given an array, print the minimum value, maximum value, and average of the values
function printMinMaxAvg($arr)
{
	if(!$arr) // first check if given array is empty
	{
		echo "null"; // if it is just print out null
		return; // and return to exit the function
	}
	$len = count($arr); // set len variable to store length of array to be used in for loop and to figure out average
	$sum = $arr[0]; // initialize our sum variable to add up our values (initialize it as the  first value)
	$max = $arr[0]; // initialize our max variable (initialize it as the  first value)
	$min = $arr[0]; // initialize our min variable (initialize it as the  first value)
	for($i=1;$i<$len;$i++) // setup our for loop to iterate through the array starting at 1 since our variables were set with index 0
	{
		$sum += $arr[$i]; // add the current value to our sum
		if($arr[$i] > $max) // check if the current value is greater than our previous max
		{
			$max = $arr[$i]; // if it is reset max to the newest maximum value
		}
		if($arr[$i] < $min)  // check if the current value is less than our previous min
		{
			$min = $arr[$i]; // if it is reset min to the newest minimum value
		}
	} // at this point we've iterated through the entire array and have our final sum as well as our min and max values
	echo $min; // print min
	echo "\n"; // this is only here to break up the printed values for easier viewing
	echo $max; // print max
	echo "\n"; // this is only here to break up the printed values for easier viewing
	echo $sum/$len; // and print out the sum divided by the length of the array giving us the average
	echo "\n"; // this is only here to break up the printed values for easier viewing
}

// test cases
printMinMaxAvg([1,3,5]); // => 1 5 3
echo "\n";
printMinMaxAvg([]); // => null
echo "\n";
printMinMaxAvg([-8,-4,-9]); // => -9 -4 -7
echo "\n";
printMinMaxAvg([8]); // => 8 8 8