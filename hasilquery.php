 <?php
 
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);
include ('header.php');
 

$host='sql305.epizy.com';
$user='epiz_21973883';
$pass='Password126';
$database='epiz_21973883_dbstbi';
$conn=mysqli_connect($host,$user,$pass,$database);
$katakunci="";
// Create connection
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$hasil=$_POST[katakunci];
$sql = "SELECT distinct nama_file, token,tokenstem FROM `dokumen` where token like '%$hasil%'";
//$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` WHERE MATCH (token,tokenstem) AGAINST ('$hasil' IN BOOLEAN MODE)";
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
        echo "Nama file: " . $row["nama_file"]. " - Token: " . $row["token"]. " " . $row["tokenstem"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
///
?>
<?php
include ('footer.php');
?>