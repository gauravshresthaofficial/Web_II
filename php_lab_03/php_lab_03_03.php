<!-- WAP in php to represent the following table in an array and use foreach loop to display them in a HTML table.


Class   Students count
2A      30
3A      35
4A      45
2B      40
3B      25
4B      30

 -->

 <?php
$table = array(
    array("Class" => "2A", "Students count" => 30),
    array("Class" => "3A", "Students count" => 35),
    array("Class" => "4A", "Students count" => 45),
    array("Class" => "2B", "Students count" => 40),
    array("Class" => "3B", "Students count" => 25),
    array("Class" => "4B", "Students count" => 30)
);

echo "<table>";
echo "<tr><th>Class</th><th>Students count</th></tr>";
foreach ($table as $row) {
    echo "<tr><td>".$row["Class"]."</td><td>".$row["Students count"]."</td></tr>";
}
echo "</table>";
?>
