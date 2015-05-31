
document.write("<script type=\"text/javascript\" src=\"./ajax/ballon.js\"></script>");

$(function () {
								$(function() { //#formがsubmitされた時
																var form  = $('#form');
																$.ajax({
url : form.attr('action'), //送信先のURL。フォームから取得
type: form.attr('method'), //送信メソッド。フォームから取得
data: form.serialize(), //送信するデータ。フォームから取得
success: function(response) { //通信成功時の処理はここに書く
document.getElementById("post_com").innerHTML = response;

$(".post_com").balloon({
tipSize: 24,
css: {
border: 'solid 2px #e8b700',
padding: '15px',
fontSize: '120%',
fontWeight: 'normal',
fontFamily: 'ＭＳ 明朝,serif', 
lineHeight: '1',
backgroundColor: '#666',
color: '#fff'
}
});

},
error: function(xhr) { //通信失敗時の処理はここに書く
							 alert(xhr.responseText);
			 }
});
return false; 
});
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
document.getElementById("post_com").innerHTML = response;
},
error: function(xhr) { //通信失敗時の処理はここに書く
alert(xhr.responseText);
}
});
								return false; 
								});
});
