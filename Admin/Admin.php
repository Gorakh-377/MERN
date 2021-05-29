<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../DBconnection.php');
// asmin loging
if(!isset($_SESSION['is_adminlogin'])){
if(isset($_POST['adminlogemail']) && isset($_POST['adminlogpass'])){

    $adminlogemail=$_POST['adminlogemail'];
    $adminlogpass=$_POST['adminlogpass'];
    
    $sql="SELECT admin_email,admin_pass FROM admin WHERE admin_email='".$adminlogemail."' AND admin_pass='".$adminlogpass."'";

    $result = $conn->query($sql);
    $row = $result->num_rows;
    if($row===1){
        $_SESSION['is_adminlogin']= true;
        $_SESSION['adminlogemail']=$adminlogemail;
        
        echo json_encode($row);
    }
    else if($row===0){
        echo json_encode($row);

    }

}
}
?>