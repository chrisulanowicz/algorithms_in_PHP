<?php

// function that creates an array with all the odd integers between 1 and 255 inclusive
function oddArray()
{
	$arr = []; // create our new empty array
	for($i=1;$i<256;$i+=2) // setup our for loop.  We'll use 'i' to reference the integer and increment it by 2 to give us odd numbers
	{ 
		array_push($arr, $i); // push the current value of 'i' into the array
	}
	return $arr; // return the newly created array
}

// test cases
$result = oddArray();
var_dump($result);