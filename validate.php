<?php
session_start();

if(isset($_POST['submit'])){


    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $number=$_POST['number'];
    $name=$_POST['name'];

    if(!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,3}(\.a-zA-Z]{2})?$/",$email))
    {
        $_SESSION['msg']="Invalid Email Address";
        header("location:form.php");
    }
    else if(!preg_match("/^[A-Za-z]{5,}+$/",$name)){

        $_SESSION['msg']="invalid user name";
        header("location:form.php");

    }

    else if(!preg_match("/^[A-Z]+[a-zA-Z0-9@]{7,}$/",$pwd))
    {
        $_SESSION['msg']= "Invalid Password";
        header("location:form.php");
    }
    else if(!preg_match("/^98[0-9]{8}$/",$number)){
         $_SESSION['msg']="invalid phone number";
         header("location:form.php");

    }
    else{
      $_SESSION['msg']=$email;
      
        header("location:main.php");
    }
}
else{
    header("location:form.php");
}
?>