/*global $*/
$(function() {
    // DOMの読み込みが完了したらここが実行される
    $("#box").html("Hello jQuery!");
});

/*
$(".copy-button").click(function() {
    // .my-inputに入力された値を取得
    alert("どろん！");

    // hrefのリンク先に飛ばないようにする
    return false;
});
*/

$(".copy-button").click(function() {
    
    // .my-inputに入力された値を取得
    var value1 = $(".my-input").val();

    // .my-outputに値をセット
    $(".my-output").val(value1);
});


$(".my-output").hover(function() {
        // マウスが乗った時の処理
        $(this).css({
            "background-color": "#ff9999",
        });
    }, function() {
        // マウスが外れた時の処理
        $(this).css({
            "background-color": "orange",
        });
    });