<?php
$avar=mysqli_connect("localhost", "root", "","login") or die("mysql connection is failure.");
require ('sql_connect.php');
if (isset($_POST['submit'])){
$username=mysqli_escape_string($avar,$_POST['uname']);
$password=mysqli_escape_string($avar,$_POST['pass']);
if (!$_POST['uname'] | !$_POST['pass'])
 {
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='loginNew.html'
        </SCRIPT>");
exit();
     }
$sql= mysqli_query($avar,"SELECT * FROM `login_users` WHERE `username` = '$username' AND `password` = '$password'");
if(mysqli_num_rows($sql) > 0)
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Succesfully!.')
        window.location.href='home.html'
        </SCRIPT>");
exit();
}
else{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong username password combination.Please re-enter.')
        window.location.href='loginNew.html'
        </SCRIPT>");
exit();
}
}
else{
}
?>
