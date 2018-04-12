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
$a = 0;
if($behavior == "Drowsy"){
    $a++;
}
if($behavior == "Lethargic"){
    $a++;
    $a++;
}
if($cardiovascular == "Capillary Refill
<2 Sec, HR 110-160 and MAPs Stable"){
    $a++;
    $a++;
}
if($cardiovascular == "HR > 160 for 1 Hr"){
    $a++;
    $a++;
}
if($cardiovascular == "Mean Arterial Pressure(MAP)
<10% From Prior 24 Hrs"){
    $a++;
}
if($cardiovascular == "Capillary Refill >5 Sec"){
    $a++;
}
if($cardiovascular == "HR > 160 for 2 Hrs"){
    $a++;
}
if($respiratory == "Apnea/Desat Requiring Stimulation"){
    $a++;
    $a++;
}
if($respiratory == "Increase RR (ie >=80)"){
    $a++;
    $a++;
}
if($respiratory == "Increase Fi02 >10% FromPrior 24 Hrs"){
    $a++;
}
if($respiratory == "Increase Periodic Breathing"){
    $a++;
}
if($abdominal == "Hemoccult Positive Stools"){
    $a++;
    $a++;
}
if($abdominal == "Guarding/Tender"){
    $a++;
    $a++;
}
if($abdominal == "No Bowel Sounds for 5 min"){
    $a++;
}
if($abdominal == "Distended Abdomen"){
    $a++;
}
if($feeds == "Discolored (Bilious) Residuals/Emesis"){
    $a++;
    $a++;
}
if($feeds == "Emesis/Residuals >20%"){
    $a++;
    $a++;
}
if($feeds == "Emesis/Residuals >10%"){
    $a++;
}
if($feeds == "Tolerating Bolus"){
    $a++;
}
 
// attempt insert query execution
$sql = "INSERT INTO patient1 (behavior, cardiovascular, respiratory, abdominal, feeds, formula, score) VALUES ('$behavior', '$cardiovascular', '$respiratory', '$abdominal', '$feeds', '$formula', '$a')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location: display.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>