
<!-- 変数チェック  -->



<html>
    <head>
        <title>PHPメールサーバー</title>
    </head>
    <body>
       メール受信:
<?php
        $mailserver = "xxxxxx";
        $username   = "xxxxxx";
        $password   = "xxxxxx";
        $mailbox    = @imap_open ("{" .$mailserver . ":110/pop3]INBOX",
        $username,$password);if($mailbox){
        $mails = imap_check($mailbox);
        $count = $mails->Namsgs;
        if(count >= 1){
?>
        メールは<?=$count?>件あります。<br>
    
    
        <table>
            <tr>
                <td>NO</td><td>件数</td><件名><td>日付</td>
                <td>差出人</td><td>サイズ</td>
            </tr>
<?php
        for($num = 1; $num <= $count; $num++){
            $head = imp_header($mailbox,$num);
?>          <tr>
                <td><?=num?></td>
                    <tb>
                       nowrap><?=htmlspecialchars(mb_decode_mimeheader($head->subject))?>
                   </tb>
                   <td> 
                       nowrap><?=$head->data?>
                  </td>
                   <td> 
                   nowrap><?=htmlspecialchars(mb_decode_mimeheader($head->Size?></
                  </td>
           </tr>
<?php
        }       
?>
        </table>
<?php
        }else{
?>
            新着メールはありません。<br>
<?php
        }
            imap_close($mailbox);
        }else{
?>
            ユーザー名またはパスワードが間違ています。
<?php
}
?>
    </body>
</html>