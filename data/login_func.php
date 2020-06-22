<?php
    include_once ('../config.php');
    $level = lv1;
    include_once ($level.'DB.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $checkusername = DP::run_query("select username from account",[],2);
    $chkusername = 0;
    $chkemail = 0;
    foreach ($checkusername as $check){
        if($check['username'] == $username)
        $chkusername = 1;
    }
    $checkemail = DP::run_query("select email from account",[],2);
    foreach ($checkemail as $check){
        if($check['email' ] == $username)
        $chkemail = 1;
    }
    if($chkusername == 1 || $chkemail ==1){
        header("location:".$level.'index.php');
    }
    else
    {
        header("location:".$level.pages_path.'login.php');
    }
?>