<?php 
 error_reporting(E_ERROR);
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"ecommerce");
//$obj =  new Operations();

if($_POST){
    
   $parentid = $_POST['parent_category'];   
   $addcat=$_POST['addcategory'];
   $catdesc=$_POST['categorydescription'];
    //$file_dir = "upload/";

//$cat_img = basename($_FILES["img"]["name"]);

//print_r($_FILES);

//if($file_dir){

	//move_uploaded_file($_FILES["img"]["tmp_name"], $file_dir.'/'.$cat_img) or die("Problem in uploading");
//}
   if(!empty($_FILES)){
        $img_name = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            }
     //print_r($_POST);
   $insert="INSERT INTO `category_tbl` (`parentid`, `category_name`, `category_descc`, `category_img`) VALUES ('$parentid','$addcat', '$catdesc', '$img_name')";
    
    /*$data=array(
    'parentsid'=>$parent_id,
    'category_name'=>$addcat,
    'category_desc'=>$catdesc,
    'category_img'=>$img_name
    );

$obj->insert("upload",$data);*/
    //echo $insert;
    
    //exit();
    
    mysqli_query($con, $insert);

   // mysqli_query($con,$insert);
}

header("location:AddCategory.php")
           ?>
