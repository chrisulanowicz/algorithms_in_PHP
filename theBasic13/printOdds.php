<?php

// function that prints out all odd integers starting from 1 up to and including 255
function printOdds()
{
	for($i=1;$i<256;$i+=2) // setup our for loop where we'll use 'i' for our integer and increment it by 2 so that we only get the odd integers
	{
		echo $i . "<br>"; // just print out $i
	}
}

// test cases
printOdds();