This code snippet demonstrates a common error in PHP related to using the `mysql_*` functions.  These functions are deprecated and have been removed from PHP 7.0+. Using them will lead to errors.

```php
<?php
$conn = mysql_connect("localhost", "username", "password");
if (!$conn) {
die("Connection failed: " . mysql_error());
}

mysql_select_db("mydatabase", $conn);

$sql = "SELECT * FROM mytable";
$result = mysql_query($sql, $conn);

if (mysql_num_rows($result) > 0) {
  while($row = mysql_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}

mysql_close($conn);
?>
```