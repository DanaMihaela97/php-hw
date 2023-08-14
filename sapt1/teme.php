<?php

    //Ex 1
    echo"<h2>1.For an array of elements count the number of occurrences of a given element.</h2><br>";
       $numbers = array(1,2,3,4,1,1);
       $find = 1;
       $count = 0;

       for ($x=0;$x < count($numbers); $x++){
            if($numbers[$x] == $find){
                $count++;
            }
           
       }
       echo"numarul " . $find . " este scris de " . $count . " ori!!! <br>";

       //Ex 2
       echo"<h2>2.Generate a random array of numbers and search for a specific one. If you find it then use a break to exit the loop. </h2><br>";
       $random_numbers=range(5,20);
       $find_number=10;
       
       for($x=0;$x<count($random_numbers);$x++){
        echo"$random_numbers[$x]" . " ";
        if($random_numbers[$x] == $find_number){
            break;
        }
       }

       //Ex 3
       echo"<h2>3.For a given array, reverse the order of the elements.</h2> <br>";
       $given_array=array(1,2,3,4,5);
       $reversed = array_reverse($given_array);

       foreach($reversed as $new_array){
        echo"$new_array" . " ";

       }

       //Ex 4
       echo"<h2>4.Verify if a string is a palindrome and return the result. </h2><br>";
       var_dump(isPalindrome("dana"));


       function isPalindrome(string $text){
        $length = strlen($text);
        for($x = 0; $x < $length/2; $x++){
            if ($text[$x] !== $text[$length-$x-1]){
                return false;
            }  
        }
        return true;
       }
       
?>