<?php
    include_once ('../config.php');
    $level = lv1;
    include_once ($level.'DB.php');
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $listAcc = DP::run_query("select * from account",[],2);
    $allowLogin = false;
    foreach($listAcc as $acc){
        if(($username == $acc["username"] || $username == $acc["email"]) && $password == $acc["password"] ){
            $allowLogin =true;
        }
    }
    if($allowLogin){
        header("location:".$level.'index.php');
        echo "Login success.";
    }
    else
    {
        echo "Login failed.";
        header("location:".$level.pages_path.'login.php');
    }
?>