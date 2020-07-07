<?php
    //logo
    $partnerArr = array(
        'logo-carousel/logo-1.png',
        'logo-carousel/logo-2.png',
        'logo-carousel/logo-3.png',
        'logo-carousel/logo-4.png',
        'logo-carousel/logo-5.png',
    );
    //declare
    $accIndex = DP::run_query("select * from account where status = ? ",[1],2);
    $listAcc = DP::run_query("select * from account",[],2);
    $isLogin = false;
    foreach($listAcc as $acc){
        if($acc["status"] == 1)
            $isLogin  = true;
    }

?>