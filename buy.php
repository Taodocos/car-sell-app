<?php
include('jcon.php');
if(isset($_POST['submit']))
{
    $fname=validate($_POST['fname']);
    $lname=validate($_POST['lname']);
    $email=validate($_POST['email']);
    $phone=validate($_POST['phone']);
    $myimage=validate($_POST['myimage']);
  #include("DBof-Gibi_conn.php");
    $insert = "INSERT INTO  users (fname,lname ,email,phone,image)
    values('$fname','$lname ','$email','$phone','$myimage')";
    $query= mysqli_query($jcon, $insert);
    if($query){
        echo "<script>alert('successfully registered!!!');</script>";
        echo "<script>window.location='1stpage.html';</script>";
}
}
function validate($data){
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    $data=trim($data);
    return $data;
    #include('session.php');

}
if(isset($_POST['reset']))
{
    $fname="";
    $lname="";
    $email="";
    $phone="";
    $myimage="";
}
?>