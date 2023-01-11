<!-- Sort the above table(18) in ascending order by students count and display them in another html table. -->

<?php
$table = array(
    array("Class" => "2A", "Students count" => 30),
    array("Class" => "3A", "Students count" => 35),
    array("Class" => "4A", "Students count" => 45),
    array("Class" => "2B", "Students count" => 40),
    array("Class" => "3B", "Students count" => 25),
    array("Class" => "4B", "Students count" => 30)
);

function compare($a, $b) {
    return $a["Students count"] - $b["Students count"];
}

usort($table, "compare");

echo "<table>";
echo "<tr><th>Class</th><th>Students count</th></tr>";
foreach ($table as $row) {
    echo "<tr><td>".$row["Class"]."</td><td>".$row["Students count"]."</td></tr>";
}
echo "</table>";
?>
