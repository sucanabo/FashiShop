<?php
    session_start();
    include_once ('../config.php');
    $level = lv1;
    include_once ($level.'DB.php');
    $total = $_POST['total'];
    $fir = $_POST['fir'];
    $last = $_POST['last'];
    $fullname = $fir.$last;
    $cun = $_POST['cun'];
    $street = $_POST['street'];
    $town = $_POST['town'];
    $fulladdress = $street." ".$town." ".$cun;
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $result = DP::run_query( "Insert into bill(customername,phone,address,total,status,Email) value(?,?,?,?,?,?)",[$fullname,$phone,$fulladdress,$total,1,$email],3 ); 
    $idbillnow = DP::run_query("SELECT id FROM bill ORDER by id DESC LIMIT 0,1",[],2);
    foreach($_SESSION['cart'] as $productid=>$quantity)
    {
        $result = DP::run_query( "Insert into billdetail(id,productid,quantity) value(?,?,?)",[$idbillnow[0]['id'],$_SESSION['cart'][$productid]['productid'],$_SESSION['cart'][$productid]['quantity']],3 );
    }
    var_dump($_SESSION);
    var_dump($result);
    unset($_SESSION['cart']);
    header("location:".$level."index.php");
?>