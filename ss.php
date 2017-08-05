<? 
include 'settings.php';

$val = text($_GET['val'],$db);
mysqli_query($db,"insert into nu3Dec (val) values ('$val')");


?>