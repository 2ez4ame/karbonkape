<?php 
$uploaddir='img/';
$uploadfile=$uploaddir.basename($_FILES['ufile']['name']);
echo '<pre>';
if(move_uploaded_file($_FILES['ufile']['tmp_name'],$uploadfile)){
echo "Upload Successfully";
}else{
echo"Error in uploading";
}
print"</pre>";
?>