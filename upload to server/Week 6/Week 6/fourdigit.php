<?php 

if (isset($_POST["submit"]))  { //the POST form has been submitted
    numbers();
}
    function numbers(){ 
    $numbers = $_POST["numbers"]; 
    if ($numbers==" ") {
        echo "You entered no numbers this is false";
    } 
    else {
        $nums= explode (" ", $numbers);
        print "The sum of the digits are: ";
        echo array_sum($nums);
        
    }
}
 