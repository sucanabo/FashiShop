<?php 
    include_once ('../config.php');
    $level = lv1;
    include_once ($level.'DB.php');

    $accCurr = DP::run_query("select * from account where status = 1",[],2);
    $CurrID = $accCurr[0]["id"];
    var_dump($CurrID);
    $logout = DP::run_query("update account set status = 0 where id = ?",[$CurrID],3);
    header("location:".$level.pages_path.'login.php');
?>