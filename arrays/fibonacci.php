<?php

// given a number, return the value at that index of the fibonacci sequence
// first method stores the fibonacci globally (outside of the function)
// to be used to fast retrieval
$stored = [0,1]; // declare and define the start of the fibonacci sequence (this will grow in your app as the function is ran)
function fibonacci($num){
	global $stored; // declare $stored to reference global variable instead of local
	if(count($stored) <= $num){ // check if the length of the stored array containing the fibonacci sequence is less than or equal to the number meaning the value at the given index hasn't been made yet
		for($i = count($stored);$i<$num+1;$i++){ // setup our loop starting at the index after the end of the array and increment until we reach the given index (if the check above is true)
			$stored[$i] = $stored[$i-1] + $stored[$i-2]; // add in the value that belongs at the current index
		}
	} // at this point either the number at the given index was already in the stored array or it's been added in
	return $stored[$num];  // so return the value at the given index
}

// this version doesn't store any values nor creates an array
// it just keeps track of the only 2 values we need to create the next fibonacci number
function fibonacci2($num){
	if($num < 2){ // check if the number is less than 2
		return $num; // in which case we just return the number
	}
	$fib1 = 0; // set the first starting fibonacci number
	$fib2 = 1; // and set the second starting fibonacci number
	$fib3; // we need this to act as a temporary variable so that we don't overwrite one of the previous variables before getting the fibonacci number
	for($i=0;$i<$num-1;$i++){ // setup our loop to run until it gets to the given number (this is because we're technically starting after already initializing the sequence with fib1)
		$fib3 = $fib1 + $fib2; // store the addition of the 2 variables in fib3
		$fib1 = $fib2; // now we can overwrite fib1 essentially moving it along an index within the fibonacci sequence
		$fib2 = $fib3; // and do the same with fib 2
	} // at this point fib2 will be the value at the given index
	return $fib2; // so return it
}

// test cases  ex. fib sequence [0,1,1,2,3,5,8,13,21,34]
echo fibonacci(0) . '<br />'; // => 0
echo fibonacci(2) . '<br />'; // => 1
echo fibonacci(3) . '<br />'; // => 2
echo fibonacci(5) . '<br />'; // => 5
echo fibonacci(6) . '<br />'; // => 8
echo fibonacci2(0) . '<br />'; // => 0
echo fibonacci2(2) . '<br />'; // => 1
echo fibonacci2(3) . '<br />'; // => 2
echo fibonacci2(5) . '<br />'; // => 5
echo fibonacci2(6) . '<br />'; // => 8