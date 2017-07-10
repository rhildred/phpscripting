<?php

$aList = array("Rich", "Rob", "Frodo", "Bilbo", "Gandalf");

echo json_encode($aList), "<br />";

foreach($aList as $item)
{
    echo $item. " is a name from Tolkein<br />";
}

echo "<h1>Server Array</h1>";

echo json_encode($_SERVER), "<br />";

echo "<table>";
$key = "default";
foreach($_SERVER as $key => $value)
{
    echo "<tr>";
    echo "<td>". $key. "</td>";
    echo "<td>". $value. "</td>";
    echo "</tr>";
}

echo "</table>";