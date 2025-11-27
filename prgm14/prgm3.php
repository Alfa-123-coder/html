<!DOCTYPE html>
<html>
<body>

<?php
$names = array("John", "Alice", "Bob", "Diana");


asort($names);

echo "<h3>Ascending Order (asort):</h3>";
foreach ($names as $n) {
    echo $n . "<br>";
}


arsort($names);

echo "<h3>Descending Order (arsort):</h3>";
foreach ($names as $n) {
    echo $n . "<br>";
}
?>

</body>
</html>

