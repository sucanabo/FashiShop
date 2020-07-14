<?php
    include_once ('../config.php');
    $level = lv1;
    include_once ($level.'DB.php');
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $listAcc = DP::run_query("select * from account",[],2);
    $allowLogin = -1;
    foreach($listAcc as $acc){
        if(($username == $acc["username"] || $username == $acc["email"]) && $password == $acc["password"] && $acc['active'] == 'active'){
            $allowLogin =$acc["id"];
        }
    }
    if($allowLogin != -1){
        $update = DP::run_query("update account set status  = 1 where id = ?",[$allowLogin],3);
        header("location:".$level.'index.php');
        echo "Login success.";
    }
    else
    {
        echo "Login failed.";
        header("location:".$level.pages_path.'login.php');
    }
?>