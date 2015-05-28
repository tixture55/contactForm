
$(function () {

								//　モーダル初期設定
								$('#modal').dialog({
autoOpen: true,  // 自動でオープンしない
modal: true,      // モーダル表示する
resizable: false, // リサイズしない
draggable: false, // ドラッグしない
show: "clip",     // 表示時のエフェクト
hide: "fade"      // 非表示時のエフェクト
});

								// .selecter クリック時にモーダル表示
								$('selecter').click(function () {
												$('#modal').dialog('open');
												return false;
												});

								// モーダル画面以外のブラウザ領域をクリックで、モーダル非表示
								$(document).on('click', '.ui-widget-overlay', function(){
												$(this).prev().find('.ui-dialog-content').dialog('close');
												});
$('#form').submit(function() { //#formがsubmitされた時
								var form  = $('#form');
								$.ajax({
url : form.attr('action'), //送信先のURL。フォームから取得
type: form.attr('method'), //送信メソッド。フォームから取得
data: form.serialize(), //送信するデータ。フォームから取得
success: function(response) { //通信成功時の処理はここに書く
alert(response);
},
error: function(xhr) { //通信失敗時の処理はここに書く
alert(xhr.responseText);
}
});
								return false; 
								});

$('#area').
find('.type1').css('backgroundColor', 'Yellow').end().
find('.type2').css('backgroundColor', 'Aqua').end().
find('.type3').css('backgroundColor', 'Lime').end();

//$("li.test").prevUntil().css("background-color","#f99");
});
$("button").click(function(){
								$("li.test").prevUntil().css("background-color","#f99");
								});
var Person = function (name) {
				this.name = name;
}
Person.prototype.sayHello = function() {
				alert('こんにちわ ' + this.name);
}
var punchan = new Person('ぷんちゃん');
//setTimeout(punchan.sayHello.bind(punchan), 3000);

$(function() {
								$("#update").click(function(){

																$.ajax({
type: "POST",
url: "Product.php",
data: {
"book": 26
},
success: function(j_data){

// 処理を記述
alert('こんにちは');
}
});


																});
								});
