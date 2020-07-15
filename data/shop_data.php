
<?php 
$level=lv1;
include_once('../config.php');
include_once($level.'DB.php');
$count =DP::run_query("SELECT * from product",[],2);
if(empty($_GET)==false)
    {
        
        if(isset($_GET['page'])==true)
        {
            $start=($_GET['page']-1)*$_GET['limit'];
            $num=6;
            $product = DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id limit ?,?",[$start,$num],2);
        }
        else if(isset($_GET['name'])==true)
                {
                    
                    $name = $_GET['name'];
                    $product = DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id and catagory.name =?",[$name],2);
                }
        else if(isset($_GET['namegender'])==true)
        {
            $namegender = $_GET['namegender'];
            $product = DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id and gender =?",[$namegender],2);
        }
        else if(isset($_GET['min'])==true && isset($_GET['max'])==true)
        {
            $min = $_GET['min'];

            $max = $_GET['max'];
            
            $product = DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.price between $min and $max and product.catagory = catagory.id ",[],2);
            
        }
       
    }
    else{
       $limit=6;
        $product = DP::run_query("SELECT *, product.name as prname, catagory.name as ctname FROM product,catagory WHERE product.catagory = catagory.id  limit ?,?",[0,$limit],2);
        
        
    }
    

