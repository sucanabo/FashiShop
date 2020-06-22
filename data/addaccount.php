<?php
    include_once ('../config.php');
    $level = lv1;
    include_once ($level.'DB.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $con_password = $_POST['con-password'];
    $checkusername = DP::run_query("select username from account",[],2);
    $chkusername = 0;
    foreach ($checkusername as $check){
        if($check['username']==$username)
        $chkusername = 1;
    }
    if($chkusername == 1)
    echo "Username da duoc sua dung";

    $checkemail = DP::run_query("select email from account",[],2);
    $chkemail = 0;
    foreach ($checkemail as $check){
        if($check['email']==$email)
        $chkemail = 1;
    }
    if($chkemail == 1)
    echo "Email da duoc sua dung";

    if($password==$con_password && $chkusername == 0 && $chkemail ==0){
        $result = DP::run_query("insert into account(username,password,type,status,email) values(?,?,?,?,?) ",[$username,$password,4,1,$email],1);
        header ('location:'.$level.pages_path.'login.php');
    }
?>