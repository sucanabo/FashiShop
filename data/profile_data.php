<?php 

    $accPF = DP::run_query("select * from account_type,account where account_type.typeid = account.type and status =1",[],2);
?>