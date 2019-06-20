<?
include "config.php";
$img = scandir('img',1);
for($i=0;$i<count($img)-2;$i++){
        $src='img/'.$img[$i];
        $name = $img[$i];
        $size = filesize($src);
        $sql = "insert into img (img_name, size, img_src) value ('$name','$size','$src')";
        mysqli_query($connect,$sql);     
    }
?>