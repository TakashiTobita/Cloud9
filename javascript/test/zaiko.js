$(function(){  

    // 対象店舗の取得（EC-CUBEの店舗カテゴリ参照）
//    var shops = {'hamakita':'42', 'fujieda':'43', 'yaizu':'44', 'shizuokahondori':'45','shimizu':'46','susono':'47'}; 
    var shop  = 'fujieda'

    //json ファイル参照
    $.getJSON("zaiko.json", function(zaikos){  
        // 対象店舗の情報を取得し在庫をセット
        var zaiko = zaikos[shop];
        for(key in zaiko){
            document.getElementById(key).innerHTML = zaiko[key]+"台";
        }
    })  
});  