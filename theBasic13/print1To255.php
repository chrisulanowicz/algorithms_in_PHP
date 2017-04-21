<?php

// function that prints out all integers starting from 1 up to and including 255
function print1To255()
{
	for($i=0;$i<256;$i++) // create our basic loop where we will also use the set variable to print the integer
	{
		echo $i; // just echo out $i
		echo "\n"; // this is only added to break the integers apart for easier viewing
	}
}

// test cases
print1To255();