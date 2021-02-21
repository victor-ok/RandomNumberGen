<?php

// A function to generate a specific amount of digits to be grouped as a code
// The limit in the function determines the range of number you want to have in your 'code'
// The 'dont_exceed' varaible determines the total number of code ypu want printed 


function generateCode($limit) {
    $code = '';
    
    for($i = 0; $i < $limit; $i++) {
        $code .= mt_rand(100000000000, 999999999999);
        return $code;
    }
}

$dont_exceed = 199;

do {
echo "Your pin is :" . generateCode(12) . "<br>";  

$dont_exceed--;

} while ($dont_exceed >= 0);



?>
