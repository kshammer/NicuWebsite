<?php
require_once 'config.php';
ini_set('display_errors', 1);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

 
// Escape user inputs for security
$behavior = mysqli_real_escape_string($link, $_REQUEST['behavior']);
$cardiovascular = mysqli_real_escape_string($link, $_REQUEST['cardiovascular']);
$respiratory = mysqli_real_escape_string($link, $_REQUEST['respiratory']);
$abdominal =  mysqli_real_escape_string($link, $_REQUEST['abdominal']);
$feeds =  mysqli_real_escape_string($link, $_REQUEST['feeds']);
$formula =  mysqli_real_escape_string($link, $_REQUEST['formula']);
 
// attempt insert query execution
$sql = "INSERT INTO patient1 (behavior, cardiovascular, respiratory, abdominal, feeds, formula) VALUES ('$behavior', '$cardiovascular', '$respiratory', '$abdominal', '$feeds', '$formula')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>