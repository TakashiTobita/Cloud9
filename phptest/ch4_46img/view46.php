
<!--　教材150ｐ内容　-->
    <head>
        <title>PHP画像操作</title>
    </head>
    <body>
<?php
    $resizeX = 150;
    // 縮小後のファイル名を書き込む　tumbnail.jpg
    $thumbnail_name = "tumbnail.jpg";
    $file_dir =  '/opt/lampp/htdocs/image/';
    $file_path = $file_dir . $_FILES["uploadfile"]["name"];
    
    if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $file_path)){
        $img_dir = "/image/";
        $img_path = $img_dir . $_FILES["uploadfile"]["name"];
        $thumbnail_path = $img_dir . $humbnail_name;
        
        $ox = $resizeX;
        $oy = ($ox * $iy) / $ix;
        $gdimg_out = imagecreatetruecolor($ox,$oy);
        imagecopyresized($gdimg_out,$gdimg_in,0,0,0,0,$ox,$oy,$ix,$iy);
        imagejpeg($gdimg_out,$thumbnail_path);
        imagedestroy($gdimg_in); imagedestroy($gdimg_out);
        $size  = getimagesize($file_path);
        $size2 = getimagesize($thumbanail_path);
?>
        ファイルのアップロードを完了しました。<br>
        <img src="<?=$img_path?>"<?=$size[3]?>>
        <img src="<?=$thumbanail_path?>"<?=$size2[3]?>>
        <br>
        <b><?=$_POST["comment"]?></b><br>
<?php
// 何かおかしい。。
        }else{
            print"JPEG形式の画像をアップロードしてください。
        <br>";
        }else{
            print"正常にアップロード処理されませんでした。<br>";
        }
?>
    </body>
</html>