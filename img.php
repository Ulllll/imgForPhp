<?
$img = scandir('img',1);
for($i=0;$i<count($img)-2;$i++){
        $img_src='img/'.$img[$i];
        echo "<a href=\"$img_src\" data-lightbox=\"images\"><img class=\"img\" src=\"$img_src\" alt=\"Электросамокат\"></a>";
    }
?>