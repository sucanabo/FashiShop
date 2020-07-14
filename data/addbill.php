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
    $result = DP::run_query( "Insert into bill(customername,phone,address,total,status,Email,datef) value(?,?,?,?,?,?,NOW())",[$fullname,$phone,$fulladdress,$total,1,$email],3 ); 
    $idbillnow = DP::run_query("SELECT id FROM bill ORDER by id DESC LIMIT 0,1",[],2);
    foreach($_SESSION['cart'] as $productid=>$quantity)
    {
        $result = DP::run_query( "Insert into billdetail(id,productid,quantity) value(?,?,?)",[$idbillnow[0]['id'],$_SESSION['cart'][$productid]['productid'],$_SESSION['cart'][$productid]['quantity']],3 );
        $temp = DP::run_query("select instock,unitsold from product where productid = ?",[$_SESSION['cart'][$productid]['productid']],2);
        $instock = (int)($temp[0]['instock']) - $_SESSION['cart'][$productid]['quantity'];
        $unitsold = (int)($temp[0]['unitsold']) + $_SESSION['cart'][$productid]['quantity'];
        $result2 = DP::run_query("update product set instock = ?, unitsold = ? where productid = ?",[$instock,$unitsold,$_SESSION['cart'][$productid]['productid']],3);
    }

    unset($_SESSION['cart']);
    header("location:".$level."index.php");
?>