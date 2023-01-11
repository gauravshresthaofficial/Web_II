<!-- Write a program that displays the numbers from 1 to 10 and their squares in a table(numbers in one column and squares in another column). -->

<?php
echo "Number\tSquare\n";
for ($i = 1; $i <= 10; $i++) {
    echo "$i\t".($i * $i)."\n";
}
?>
