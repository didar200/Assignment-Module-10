<?php 

$strings = ["Hello", "World", "PHP", "Programming"];

function vowelCount($string)
{
    $vowels  = ["a", "e", "i", "o", "u"];
    $count = 0;
    for($i=0; $i<strlen($string); $i++)
    {
        if(in_array(strtolower($string[$i]), $vowels))
        {
            $count++;
        }
    }

    echo "Original String: {$string}, Vowel Count: {$count}, Reversed String: ". strrev($string) ." <br />";

}

foreach($strings as $string)
{
    vowelCount($string);
}



?>