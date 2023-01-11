<!-- WAP in PHP to push the first 20 numbers in an array using loop and display them in an unordered list using foreach loop. -->


<?php
$i = 0;
while($i != 20){
$array[$i] = $i+1;
$i++;
}

echo"<p>First 20 numbers in unorder list.</p>";
echo"<ul>";
foreach($array as $num){
    echo"<li>$num</li>";
}
echo"</ul>";
?>
