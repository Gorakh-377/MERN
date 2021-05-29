<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../DBconnection.php');

if(isset($_POST['checkemail']) && isset($_POST['stuemail'])){
    $stuemail=$_POST['stuemail'];
    $sql="SELECT stu_email FROM student WHERE stu_email='".$stuemail."'";
$result=$conn->query($sql);
$row=$result->num_rows;
echo json_encode($row);
}










if(isset($_POST['stuname']) && isset($_POST['stuemail'])
&& isset($_POST['stupass']) && isset($_POST['stusign'])){

    $stuname=$_POST['stuname'];
    $stuemail=$_POST['stuemail'];
    $stupass=$_POST['stupass'];

    
$sql="INSERT INTO student(stu_name,stu_email,stu_pass)VALUES('$stuname','$stuemail','$stupass')";

    if($conn->query($sql) == TRUE){
       echo json_encode("ok");
   }
   else{
    echo json_encode("failed");
   }




}
if(!isset($_SESSION['is_login'])){
if(isset($_POST['stulogemail']) && isset($_POST['stulogpass']) && isset($_POST['stucheck'])){

    $stulogemail=$_POST['stulogemail'];
    $stulogpass=$_POST['stulogpass'];
    $stucheck=$_POST['stucheck'];
    $sql="SELECT stu_email,stu_pass FROM student WHERE stu_email='".$stulogemail."' AND stu_pass='".$stulogpass."'";

    $result = $conn->query($sql);
    $row = $result->num_rows;
    if($row===1){
        $_SESSION['is_login']=true;
        $_SESSION['stulogemail']=$stulogemail;
        
        echo json_encode($row);
    }
    else if($row===0){
        echo json_encode($row);

    }

}
}

?>