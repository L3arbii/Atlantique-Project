<?php

$Categories = [
    "Category 1",
    "Category 2",
    "Category 3",
    "Category 4",
    "Category 5",
    "Category 6",
    "Category 7",
];

echo "<ul>";
for ($i = 0; $i < count($Categories); $i++) {
    echo "<li>";
    echo $Categories[$i];
    echo "</li>";
}
echo "</ul>";

?>



