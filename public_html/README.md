# Connect to database
<pre>
$conn = new mysqli("mariadb", "root", "ROOTPASS", "mydb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
</pre>
