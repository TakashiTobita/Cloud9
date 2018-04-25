<html>
    <head>
        <title>PHPのテスト</title>
    </head>
    <body>
<?php
        //　　ネット上でのファイルの送付先
        //$file_dir = 'C:\Users\Takashi TOBITA\Pictures\Saved Pictures\\';
        $file_dir = '/home/ubuntu/workspace/C4_45up/data/';      
        $file_path = $file_dir . $_FILES["uploadfile"]["name"];
print_r($_REQUEST);
print $_FILES["uploadfile"]["tmp_name"]; exit;
        
        if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $file_path)){
            // 画像ファイルの移動先のパスを格納。
            $img_dir = "/data/";
            $img_path = $img_dir.$_FILES["uploadfile"]["name"];

            // アップロードした画像の情報を取得
            $size = getimagesize($file_path);
?>
            ファイルアップロードされました。<br>
            <!--　画像を表示できるように設定　-->
            <img src= "<?=$img_path?>"<?=$size[3]?><br>
            <!--  非推奨<b> ==  推奨<strong> -->
            <B><?=$_POST["comment"]?></B><br>
<?php
        }else{
?>
            正常にアップロード処理されませんでした。<br>
<?php
        }
?>
    </body>
</html>