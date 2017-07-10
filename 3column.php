<?php

$a3column = array(
    array("1", "a", "b"),
    array("2", "c", "d"),
    array("3", "e", "f")
);

echo json_encode($a3column). "<br />";

echo "<table>";
foreach($a3column as $aRow)
{
    echo "<tr>";
    foreach($aRow as $sColumn)
    {
        echo "<td>";
        echo $sColumn;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";