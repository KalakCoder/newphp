<?php
require ("../../connection/config.php");
if(isset($_GET['id'])){
$id=$_GET['id'];

$query= "SELECT *FROM filemanager";
$result= mysqli_query($conn, $query);

$query1= "DELETE FROM filemanager where id=$id";
$result1= mysqli_query($conn, $query1);//connect databas and query

if($result){
    // echo "data is deleted successfully";
    // header("Referesh:0; url=manage-filemanager.php");
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=../pages/filemanager/manage-file.php\">";

}
else{
    echo "Error,data is not deleted";
    header("Referesh:0; url=manage-file.php");  
}
}
?>