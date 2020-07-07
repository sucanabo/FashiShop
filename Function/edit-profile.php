<?php 
    var_dump($_POST);
    var_dump($_FILES);
    //add lib
    include_once ("../config.php");
    $level = lv1;
    include_once ($level.'DB.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];
    //-------------------------------------

    //upload image
    $isNewIMG= false;
    if($_FILES['fileupload']['name'] != null){
        $folder = $level.'../fashi_admin/'.img_path."account/";
        $targer_dir = $level.img_path.$folder; //thu muc luu anh
        $targer_file = $targer_dir.basename($_FILES['fileupload']['name']);//duong dan luu tam
        $allowUpload = true;
        $imageFileType = pathinfo($targer_file,PATHINFO_EXTENSION);//lay dinh dang file
        $allowTypes = array('jpg','png','jpeg','gif');
        if(isset($_POST['submit'])){
            //check anh
            $checkimg = getimagesize($_FILES['fileupload']['tmp_name']);
            if($checkimg !== false){
                echo "This is an image".$checkimg["mime"].".";
                $allowUpload = true;
            }
            else{
                echo "Not an image.";
                $allowUpload = false;
            }
            // //khong cho ghi de
            // if(file_exists($targer_file)){
            //     echo "File already exsisted.";
            //     $allowUpload = false;
            // }
            //kiem tra kieu file
            if(!in_array($imageFileType,$allowTypes)){
                echo "You can upload only extention file JPG, PNG, JPEG, GIF";
                $allowUpload = false;
            }
            //Check AllowUpload
            if($allowUpload){
                if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$targer_file)){
                    echo "File ".basename($_FILES['fileupload']['name'])." upload succeed.";

                }
                else 
                {
                    echo "Upload Failed!";
                    $allowUpload = false;
                }
            }
        }

        else echo "Can't upload file.";
        $isNewIMG = true;
    }
    else {
        $isNewIMG = false;
    }
    

//-------------------------------------------------
$filename = $_FILES['fileupload']['name'];
//kiem tra co tai anh len hay khong
function checkEmpty (){
    $null = 0;
    foreach($_POST as $a){
        if(empty($a))
            $null++;
    }
    echo "null: ".$null;
    if($null <= 1) return true;
    else return false;
}
$check = checkEmpty();
if( $check == false){
    header("location:".$level.pages_path.'profile.php');
}
else
{
    $id = DP::run_query("select * from account where id = ?",[$_POST['id']],2);
    if($isNewIMG == false){
        $filename = $id[0]["img"];
    }
    if(isset($_POST['submit'])){
        if($pass1 == $pass2 && $allowUpload == true){
            $result = DP::run_query ("UPDATE account SET `name` = ?, `email` = ?, `password` = ?, `img` = ? WHERE `id` = ?",[$name,$email,$pass1,$filename,$id[0]['id']],3);
            header("location:".$level.pages_path.'profile.php');
        }
        else
        {
            echo "that bai";
            header("location:".$level.pages_path.'profile.php');   
        }
        
    }
}
?>