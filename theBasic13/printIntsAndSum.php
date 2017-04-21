<?php

// print all integers from 0 to 255 along with a running sum at each integer
function intAndSum()
{
	$sum = 0; // initialize our sum variable at 0 to be used to add up our values
	for($i=0;$i<256;$i++) // setup our for loop using 'i' for our integers
	{
		$sum += $i; // add the current value to our sum
		echo "Current integer: " . $i . " Running sum: " . $sum . "<br>"; // print integer and running sum
	}
}

// test cases
intAndSum();