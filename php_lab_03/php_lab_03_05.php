<!-- Represent the following table in an array and display using html table in php

Name    English     WT      DSA
Peter   30          75      70
Ben     90          85      80
Joe     85          70      60

 -->


 <?php
$table = array(
    array("Name" => "Peter", "English" => 30, "WT" => 75, "DSA" => 70),
    array("Name" => "Ben", "English" => 90, "WT" => 85, "DSA" => 80),
    array("Name" => "Joe", "English" => 85, "WT" => 70, "DSA" => 60)
);

echo "<table>";
echo "<tr><th>Name</th><th>English</th><th>WT</th><th>DSA</th></tr>";
foreach ($table as $row) {
    echo "<tr><td>".$row["Name"]."</td><td>".$row["English"]."</td><td>".$row["WT"]."</td><td>".$row["DSA"]."</td></tr>";
}
echo "</table>";
?>
