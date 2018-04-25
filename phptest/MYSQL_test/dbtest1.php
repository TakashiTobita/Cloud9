<?php
    // 利用する'ホスト名''ユーザー名''パスワード''DB名'を指定
    // echo $IP;
    
    $servername = '172.17.0.1';
    $username = 'takashitobita';
    $password = "";
    $database = "c9";
    $dbport = 3306;
    
    $db = new mysqli($servername, $username, $password);
    $db->set_charset('utf8');
    // print_r($db);
     if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    // }
    // if ($db->connect_error){
    //     die('Connect Error:('.$db->connect_erron .')' .$db->connect_error);
        
        print 'mysqli クラスによる接続に成功しました。';
        
    } else {
        print '接続エラー';    
    }
    
    //  ここでDBの関連処理を行う。
    
    $mysql->close();
?>