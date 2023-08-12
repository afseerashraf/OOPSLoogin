<?php

if(isset($_POST['submit'])){
    // Grabing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdrpeat = $_POST['pwdrepeat'];
    $emile = $_POST['email'];

    //Instantiate signupcontrol  class
    include '../classes/signup.classes.php';
    include '../classes/signup-contr.classes.php';

    $signup = new Signupcontr($uid, $pwd, $pwdrpeat, $emile);

}
?>