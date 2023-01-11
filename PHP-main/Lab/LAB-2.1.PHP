// WAP in PHP to display the first twenty letters from a string. Last word should be complete.

<?php

$str = "A popular general purpose scripting language that is especially suited to web development.
Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.";

$total = strlen($str);
$char = substr($str, 0, $total-1);
$count = 0;
for($i = 0; $i < $total-1 ;$i++)
{
    if($char[$i] == " ")
    {
        if($count >= 20){

            break;
        }
    }
    else
    {
        echo "$char[$i]\n";
        // echo " ";
        $count++;
    }
}

?>