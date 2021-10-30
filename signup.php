<?php
$con = mysqli_connect('localhost','root','','facebookclone');

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phoneoremail = $_POST['phoneoremail'];
$password = $_POST['id'];

$check_data = mysqli_query($con, "SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail'");
$check = mysqli_nume_rows($check_data);

if($check > 0){
    echo "Email Already Exists";
}
else{
    $imput = myspli_query($con, "INSERT INTO userdata(id,firstname,lastname,phoneoremail,pasword) Values ('$id','$firstname','$lastname','$phoneoremail','$password')")
    if($input){
        echo "Sign up succesful";
    }
    else{
        echo "error occured";
    }
}
?>